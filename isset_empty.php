<!-- isset()=Returns TRUE if a variable and not null -->
 <!-- empty()=Returns TRUE if a variable is not declared,false,null or an empty string ("" )-->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="isset_empty.php" method="post">
      <label >username:</label>
      <input type="text" name="username">
      <br>
      <label >password:</label>  
      <input type="password" name="password">
      <br>
      <input type="submit" name="login" value="login">
      <br>
    </form>
  </body>
  </html>
  <?php 
 

  if(isset($_POST['login'])){
    // echo "login button is clicked";
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "username or password is empty <br>";
    }else{
      echo "username and password are set <br>";
    }
  }

  foreach($_POST as $key => $value){
    echo "{$key} = {$value}<br>";
  }
  ?>