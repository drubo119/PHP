<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action ="loop.php" method="post">
    <label >Enter a number to count to:</label>
<input type="text" name ="counter">
<input type="submit" value="start">
<input type="submit" value="stop">
  </form>
  
</body>
</html>
<?php 
 $counter = $_POST["counter"];
 for($i=1;$i<=$counter;$i++){
  echo $i."<br>";

 }

 $seconds =0;
 $running =true;
 while($running){
  if(isset($_POST["stop"])){
    $running=false;



  }else{
    $seconds++;
    echo $seconds . "<br>";

  }

 }
?>
