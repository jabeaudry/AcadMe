var mongoose = require('mongoose');
var uniqueValidator = require('mongoose-unique-validator');
var crypto = require('crypto');     //requires crypto library

//Require the jsonwebtoken and the application secret in the user model.
var jwt = require('jsonwebtoken');
var secret = require('../config').secret;

var UserSchema = new mongoose.Schema({

 username: {type: String, lowercase: true, unique: true, required: [true, "can't be blank"], match: [/^[a-zA-Z0-9]+$/, 'is invalid'], index: true},
 email: {type: String, lowercase: true, unique: true, required: [true, "can't be blank"], match: [/\S+@\S+\.\S+/, 'is invalid'], index: true},
  hash: String,
  salt: String
}, {timestamps: true});

UserSchema.plugin(uniqueValidator, {message: 'is already taken.'});

//sets password
UserSchema.methods.setPassword = function(password){
      this.salt = crypto.randomBytes(16).toString('hex');
      this.hash = crypto.pbkdf2Sync(password, this.salt, 10000, 512, 'sha512').toString('hex');
    };



//validates password
UserSchema.methods.validPassword = function(password) {
    var hash = crypto.pbkdf2Sync(password, this.salt, 10000, 512, 'sha512').toString('hex');
     return this.hash === hash;
    };

//Create a method on the user model to generate a JWT
UserSchema.methods.generateJWT = function() {
        var today = new Date();
        var exp = new Date(today);
        exp.setDate(today.getDate() + 60);
        
        return jwt.sign({
        id: this._id,
        username: this.username,
        exp: parseInt(exp.getTime() / 1000),
        }, secret);
        };

//Create a method to get the JSON representation of a user for authentication.
        UserSchema.methods.toAuthJSON = function(){
            return {
            username: this.username,
            email: this.email,
            token: this.generateJWT(),
            };
            };
mongoose.model('User', UserSchema);