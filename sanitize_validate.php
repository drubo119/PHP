<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="sanitize_validate.php" method="post">
  USERNAME:<input type="text" name="username" > <br>
    AGE:<input type="text"name="age" > <br>
    EMAIL:<input type="text" name="email" > <br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html>
<?php 

if(isset($_POST["login"])){
  $username=filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $age=filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
  $email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  echo "Username: " . $username . "<br>";
  echo "Age: " . $age . "<br>";
  echo "Email: " . $email . "<br>";

  $age=filter_input(INPUT_POST,"age",
  FILTER_VALIDATE_INT);
  $email=filter_input(INPUT_POST,"email",
  FILTER_VALIDATE_EMAIL);
//   if($age === false){
//     echo "Invalid age input.<br>";
//   } else {
//     echo "Valid age: " . $age . "<br>";
//   }
//   if($email === false){
//     echo "Invalid email input.<br>";
//   } else {
//     echo "Valid email: " . $email . "<br>";
//   }

  if(empty($username) || empty($age) || empty($email)){
    echo "All fields are required.<br>";
  } else {
    echo "All inputs are valid.<br>";
  } 
 }


?>