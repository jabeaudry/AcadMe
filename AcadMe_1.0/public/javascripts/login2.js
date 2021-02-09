//verify password
//as found on https://codepen.io/diegoleme/pen/surIK




var match = false;
var createBtn = document.getElementById("createBtn");
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity(''); 
    createBtn.addEventListener('click', () => {
        location.href("index.php");
      });
  }
}


password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
