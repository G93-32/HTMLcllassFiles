const username = document.getElementById("fullname");
const password = document.getElementById("password");
const Signup = document.getElementById("Signup");
const passerror = document.getElementById("passerror");
const usererror = document.getElementById("usererror");
//Username should have only alphabets
function checkusername() {
  // get the value of the username field
  const usernameValue = username.value;
  // check if the username contains only alphabets
  if (usernameValue.match( /^[a-zA-Z]+$/)) {
    // if not, show an error message
     usererror.textContent="";
     Signup.disabled = false;
     return true;
  } else {
   usererror.textContent="Username must contain only alphabets.";
   return false;
  }
}
username.addEventListener("input", checkusername);

//password should be at least 8 characters long
function checkpassword(){
  // get the value of the password field
  const passwordValue = password.value;
  //check if the password is at least 8 characters long
  if (passwordValue.length < 8) {
    // if not, show an error message
    passerror.textContent="Password must be at least 8 characters long.";
    return false;
  }else
  {
    passerror.textContent="";
    Signup.disabled = false;
    return true;

  }
}
//add event handler to the password field
password.addEventListener("input", checkpassword);
//signup button should be disabled if there are errors
function signUp() {
  // check if there are any errors
  if (checkusername() && checkpassword()) {
    alert("Signup successful!");
  } else {
    // if there are errors, disable the signup button
    Signup.disabled = true;
  }
}
Signup.addEventListener("click", signUp);