const emailInput = document.getElementById("email");
const emailError = document.getElementById("emailError");
const button = document.getElementById("loginbutton");



function checkEmail() {
  const emailInput = email.value.trim();

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailPattern.test(emailInput)) {
    emailError.textContent = "";
    loginbutton.disabled = false;
    return true;
  } else {
    emailError.textContent = "Please enter a valid email address.";
    loginbutton.disabled = true;
    return false;
  }
}
emailInput.addEventListener("input", checkEmail);