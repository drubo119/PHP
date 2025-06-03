<!-- To declare php variables need to use $ sign -->

<?php

$x=5;
$y=10;
echo  $x + $y ; // 15

echo "<br> Hello I am $y years old "; // Hello I am 10 years old

?>

<!-- Variable names are case-sensitive ($age and $AGE are two different variables) -->


<!-- Data types -->

<?php

$age = 25; // integer
$salary = 50000.50; // float
$name = "John Doe"; // string
$isEmployed = true; // boolean
$isSales = false; // boolean

echo "Age: {$age} <br>";
echo "Salary: $salary <br>";
echo "Name: $name <br>";
echo "Employed: $isEmployed <br>";
echo "Sales: $isSales <br>";

?>

<!-- Get the Type -->
<?php
$age = 25;
$salary = 50000.50;
$name = "John Doe";
$isEmployed = true;
$isSales = false;
echo "Type of age: " . gettype($age) . "<br>";

var_dump($age);
?>


<!-- variable scope -->

<!-- three types of variable scope -->

<!-- 1. **Local Scope**: Variables declared within a function are local to that function.
2. **Global Scope**: Variables declared outside of any function are global and can only  be accessed anywhere outside of a function.
3. **Static Scope**: Static variables retain their value even after the function has ended. -->

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x </p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


?>



<!-- Static scope -->



<!-- The global keyword -->

<!-- It is used to access global variables from within a function. -->

<?php
$x = 5; // global scope
$y = 10; // global scope
function Test() {
  global $x, $y; // using global keyword to access global variables
  $y = $x + $y;
  echo "<p>Variable x inside function is: $x</p>";
  echo "<p>Variable y inside function is: $y</p>";


}
Test();
echo "Variable x outside function is: $x";

echo "<br>Variable y outside function is: $y";
?>

<!-- static keyword use for not to delete a variable inside a function after execute -->
 
<?php
function Tst(){
  static $x=0;
  echo $x;
  $x++;
}

echo "<br>";
Tst(); // 0
echo "<br>";
Tst(); // 1
echo "<br>";
Tst(); // 2


?>