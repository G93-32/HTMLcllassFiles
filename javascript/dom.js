//DOM
//accessing html elements

//by id - getElementById()
const myheading = document.getElementById("myheading");
console.log(myheading);

// by class - getElementsByClassName()
const myclass = document.getElementsByClassName("myclass");
console.log(myclass[1]);

// by tag name - getElementsByTagName()
const paragraphs = document.getElementsByTagName("p");
console.log(paragraphs[0]);

//by css selector-querySelector
const myselector = document.querySelector(".myclass");
console.log(myselector);

//creating elements and deleting elements
paragraphs[0].remove(); //removes the first paragraph

//creating a new element
const registrationButton = document.createElement("button");
registrationButton.textContent = "Register";

const mydiv = document.getElementById("mydiv");

//element.append() adds the element to the end of the parent element
mydiv.append(registrationButton);

//properties- value, innerHTML, textContent
//textContent is used to get or set the text content of an element
myheading.textContent = "Welcome to the DOM Manipulation Example";

//innerHTML is used to get or set the HTML content of an element
myclass[1].innerHTML = "<b>This is a new paragraph</b><button>Updates</button>";

//html attributes is used to get or set the value of an input element
const myimage= document.getElementById("myimage");
myimage.src = "https://images.pexels.com/photos/1324803/pexels-photo-1324803.jpeg";
myimage.alt = "A beautiful scenery";

//style - used to get or set the style of an element
myimage.style.width = "300px";
myimage.style.height = "200px";
myimage.style.borderRadius = "20px";
myheading.style.color = "blue";

//add border to an element
myclass[1].style.border = "2px black solid";

//get/set the value of an input element - element.value
function findProduct() {
   //Pick the element
   const num1 = document.getElementById("myinput1");
   const num2 = document.getElementById("myinput2");
   const result = document.getElementById("result");
   result.textContent = "Product is: " + (num1.value * num2.value);
}
//events - addEventListener()
const prodbutton = document.getElementById("getproduct");
prodbutton.addEventListener("Click", findProduct);

//alert box
//alert("Hello world!");

prodbutton.addEventListener("click", function() {
   alert("Product found!");
})
prodbutton.addEventListener("mouseover", function() {
   prodbutton.style.backgroundColor = "yellow";
   prodbutton.style.color = "red";
   prodbutton.style.border = "2px solid black";

})
function findQuotient() {
   const num11 = document.getElementById("myinput11").value;
   const num22 = document.getElementById("myinput22").value;
   alert("Quotient is: " + (num11 / num22));
}
const quotientButton = document.getElementById("getquotient");
quotientButton.addEventListener("click", findQuotient);