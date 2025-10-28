console.log("JavaScript is running in Java mode");

//variables, data types, and identifiers
// Variables can be declared using let, const, or var
//idtifiers - case sensitive, no whitespace, no special characters except $ and _
//data types - number, string, boolean, null, undefined, object, symbol
let fullname = "John Doe"; // string
let myVariable = 10; // number
let isActive = true; // boolean
let myNullValue = null; // null
let secondname;//undefined


//checking data types
console.log(typeof fullname); // string
//arrrys
let student1 = "john";
let student2 = "doe";
let sudent3 = "jane";
let nameofstudents = [student1, student2, sudent3]; // array
console.log(nameofstudents); // ["john", "doe", "jane"]
//accessing array elements
console.log(nameofstudents[0] + "1st student"); // "john"
console.log(nameofstudents[1]); // "doe"
console.log(nameofstudents[2]); // "jane"
//objects- properties and methods
let student = {
    name: "John",
    age: 20,
    isActive: true,
    greet: function() {
        console.log("Hello, my name is " + this.name);
    }
};

/*getStudentDetails: function(){
        console.log("Hello method");
        console.log(this.studentName + " is student no. " + this.studentNo + " Registered ? " + this.isRegistered);
    }*/
//acessing object properties
console.log(student.name); // "John"
console.log(student.age); // 20
console.log(student.isActive); // true
//calling object method
student.greet(); // "Hello, my name is John"

//const- constant variables
const pi = 3.14; // constant
//pi = 3.14159; // This will throw an error because pi is a constant

//var- variable with function scope
var myAge;//undefined
myAge = 25; // variable

//let- variable with block scope, cannot be redeclared in the same scope
let myName = "Alice"; // block scoped variable //global scope
//let myName = "Bob"; // This will throw an error because myName is

//functions
function helloFunction() {
    console.log("Hello, World!");
}
//calling function
helloFunction(); // "Hello, World!"

//function with parameters
function greetUser(name) {
    console.log("Hello, " + name + "!");
}
 // fucntion with return statement
function addNumbers(a, b) {
    return a + b;
}
console.log(addNumbers(5, 10)); // 15

//if-else statement
let Oage = 18;
if(Oage < 18) {
    console.log("You are not an adult.");
}else if(Oage >= 18 && Oage < 60) {
    console.log("You are an adult.");
}else {
    console.log("You are a senior citizen.");
}

//switch statement
const day = 3;
switch(day) {
    case 1:console.log("Monday");
        break;
    case 2:
        console.log("Tuesday");
        break;
    case 3:
        console.log("Wednesday");
        break;
    case 4:
        console.log("Thursday");
        break;
    case 5:
        console.log("Friday");
        break;
    case 6:
        console.log("Saturday");
        break;
    case 7:
        console.log("Sunday");
        break;
    default:
        console.log("Invalid day");
        break;
}
//for loop
for(let i = 0; i <= 5; i++) {
    console.log("Iteration: " + i);
}
//while loop
let j= 1;
while(j < 6) {
    console.log(j);
    j+=2;
}
// block scope
{
    let blockScopedVariable = "I am block scoped";
    console.log(blockScopedVariable); // "I am block scoped"

    const blockScopedConstant = "I am also block scoped";
    console.log(blockScopedConstant); // "I am also block scoped"
}
