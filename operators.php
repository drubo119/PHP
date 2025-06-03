<!-- Operators are used to perform operations on variables and values. -->

<!-- arithmetic operators -->
<?php
$a = 10;
$b = 20;
$result=null;

// $result = $a + $b; // addition
// $result = $a - $b; // subtraction
// $result = $a * $b; // multiplication
// $result = $a / $b; // division
// $result = $a % $b; // modulus
// $result = $a ** $b; // exponentiation(power)

?>
<!-- increment/decrement -->

<?php
$a = 10;
$b = 20;

$a++; // increment
$b--; // decrement
$a += 5; // increment by 5

echo "After incrementing, a is: $a <br>";
echo "After decrementing, b is: $b <br>";
?>

<!-- operator precedence -->
Left to right precedence of operators in PHP is as follows:
()
**
* / %
+ -
<?php
$total =1+2-3*4/5;
echo "Total is: $total <br>"; // Output: Total is: 0.6
?>

<!-- String Operators -->
<?php
$str1 = "Hello";
$str2 = " World";
$str1.=$str2;
// $result = $str1 ." ".  $str2; // concatenation
// echo "Result: $result <br>";
echo $str1;
?>


<!-- array operators -->
<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$result = $array1 + $array2; // union

print_r($result);
?>


<!-- ternary operator -->
<?php
$a = 10;
$b = 20;
$result = ($a > $b) ? "A is greater" : "B is greater";
echo "Result: $result <br>";
?>