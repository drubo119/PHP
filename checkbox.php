<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="checkbox.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza"> Pizza <br>
    <input type="checkbox" name="burger" value="Burger"> Burger <br>
    <input type="checkbox" name="pasta" value="Pasta"> Pasta <br>
    <input type="checkbox" name="salad" value="Salad"> Salad <br>
    <input type="submit" name="submit" value="Submit"><br>

  </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
  if(isset($_POST["pizza"])){
    echo "You like pizza" . "<br>";
  }
  if(isset($_POST["burger"])){
    echo "You like burger" . "<br>";
  }
  if(isset($_POST["pasta"])){
    echo "You like pasta" . "<br>";
  }
  if(isset($_POST["salad"])){
    echo "You like salad" . "<br>";
  }
  if(empty($_POST["pizza"])){
    echo "You don't like pizza" . "<br>";
  }
  if(empty($_POST["burger"])){
    echo "You don't like burger" . "<br>";
  }
  if(empty($_POST["pasta"])){
    echo "You don't like pasta" . "<br>";
  }
  if(empty($_POST["salad"])){
    echo "You don't like salad" . "<br>";
  }
}

?>