function findQuotient() {
  const num1 = document.getElementById("myinput1");
  const num2 = document.getElementById("myinput2");
  //const result = document.getElementById("result");
  alert("Quotient is: " + (num1.value / num2.value));
  }
const qbutton = document.getElementById("getquotient");
qbutton.addEventListener("Click", findQuotient);
