<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="radio.php" method="post">
    <input type="radio" name="credit_card" value="visa">visa <br>
    <input type="radio" name="credit_card" value="mastercard">MasterCard <br>
    <input type="radio" name="credit_card" value="amex">American Express <br>
    <input type="submit" name="confirm" value="confirm"><br>
  </form>
</body>
</html>
<?php

if(isset($_POST['confirm'])) {

 
  if(isset($_POST["credit_card"])){
    $credit_card = $_POST["credit_card"];
    
    echo "Credit card selected: " . $credit_card . "<br>";
  } else {
    echo "No credit card selected.<br>";
  }
  
}
?>