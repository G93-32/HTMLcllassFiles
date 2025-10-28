<?php

echo"hello world";
print (" hello world");
//single-line comment
#single-line comment
/*multi-line comment
*/
//variable declaration
$firstName = "John";//string
$age = 30; //integer
$height = 5.9; //float
$is_enrolled = true; //boolean
$subjects = null; //null
//checking data types: var dump()
echo "<br>";
echo var_dump($firstName);
echo "<br>";
echo var_dump($age);
echo "<br>";
//arrays
//indexed array: elements are accessed by index
$student_names =["Alice", "Bob", "Charlie"];
$student_marks = array(85, 90, 78);
//access indexed array elements
echo "<br>";
echo $student_names[0]; //Alice
echo "<br>";
echo $student_names[1]; //Bob
echo "<br>";
echo $student_names[2]; //Charlie
//associative array: elements are accessed by key
echo "<br>";
$marks_of_students = array(
    "Alice" => 85,
    "Bob" => 90,
    "Charlie" => 78
);
//If statements
$myage =15;
if($myage < 18){
 echo "<p>Cannot vote</p>";
}elseif ($myage > 18) {
   echo "<p>Can Vote</p>";
}else{
    echo "<p>First Time voter</p>";
}
//switch statements
$dayofweek = "7";
switch ($dayofweek) {
    case 1:
        echo"Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo"Thursday";
        break;
    case 5:
        echo"Friday";
        break;
    case 6:
        echo"Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day of the week";
        break;
}
echo "<br>";
$school = "Strathmore";
echo "My school is $school";
echo "<br>";
echo "My age is ".$myage." I cannot vote";
//loops
//for loop
echo "<br>";
for ($i=0; $i <=4  ; $i++) {
 echo "<br> Statement $i";
}
//while Loop
echo "<br>";
$j = 1;
while ($j <= 10) {
    echo "<br> halllooooo $j";
    $j++;
}
//functions\
echo "<br>";
function hello(){
    echo "<h2>Hello from the function!</h2>";
}
//calling the function
hello();
//function with parameters
echo "<br>";
function addNumbers($num1, $num2){
    return $num1 + $num2;
}
$mySum = addNumbers(5, 10);
echo "$mySum"; // Output: 15
//built-in functions
echo "<br>";
//date()
echo date("Y-m-d H:i:s"); // Output: current date and time
//define() - to define constants
echo "<br>";
define('PI', 3.14);
echo PI;
//isset()- determines if a variable is set and is not NULL
$z = 2;
if (isset($z)) {
    echo "<br>Variable z is set.";
} else {
    echo "<br>Variable z is not set.";
}

?>