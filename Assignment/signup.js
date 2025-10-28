const signup = document.getElementById("signupForm");
const fullname = document.getElementById("fullname");
const email = document.getElementById("email");
const phone = document.getElementById("phone"); // Added phone element
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");

const fullnameError = document.getElementById("fullnameError");
const emailError = document.getElementById("emailError");
const phoneError = document.getElementById("phoneError"); // Added phone error element
const passwordError = document.getElementById("passwordError");
const confirmError = document.getElementById("confirmError");

const signupButton = document.getElementById("signupButton");

// Disable the signup button initially
signupButton.disabled = true;

function validateForm() {
  const isFullnameValid = checkFullname();
  const isEmailValid = checkEmail();
  const isPhoneValid = checkPhone(); // Added phone validation
  const isPasswordValid = checkStrongPassword();
  const isConfirmPasswordValid = checkConfirmPassword();

  signupButton.disabled = !(isFullnameValid && isEmailValid && isPhoneValid && isPasswordValid && isConfirmPasswordValid);
}

// Full name should contain only alphabets
function checkFullname() {
  const fullnameValue = fullname.value.trim();
  if (fullnameValue.match(/^[a-zA-Z\s]+$/)) {
    fullnameError.textContent = "";
    return true;
  } else {
    fullnameError.textContent = "Full name must contain only alphabets.";
    return false;
  }
}

function checkEmail() {
  const emailValue = email.value.trim();
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailPattern.test(emailValue)) {
    emailError.textContent = "";
    return true;
  } else {
    emailError.textContent = "Please enter a valid email address.";
    return false;
  }
}

// Phone number validation (exact same as booking.js)
function checkPhone() {
  const phoneValue = phone.value.trim();
  const phonePattern = /^07\d{8}$/;

  if (phonePattern.test(phoneValue)) {
    phoneError.textContent = "";
    return true;
  } else {
    phoneError.textContent = "Enter a valid 10-digit phone number starting with 07.";
    return false;
  }
}

function checkStrongPassword() {
  const value = password.value;
  const pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

  if (!pattern.test(value)) {
    passwordError.textContent = "Password must be strong: 8+ letters, upper/lowercase, number, special.";
    return false;
  } else {
    passwordError.textContent = "";
    return true;
  }
}

function checkConfirmPassword() {
  if (password.value !== confirmPassword.value) {
    confirmError.textContent = "Passwords do not match.";
    return false;
  } else {
    confirmError.textContent = "";
    return true;
  }
}

fullname.addEventListener("input", validateForm);
email.addEventListener("input", validateForm);
phone.addEventListener("input", validateForm); // Added event listener for phone
password.addEventListener("input", validateForm);
confirmPassword.addEventListener("input", validateForm);

// Initial validation on page load
validateForm();