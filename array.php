<?php
$foods = array("apple","orange","lichi");
array_push($foods,"banana");
array_pop($foods);
array_shift($foods);//remove first element
$foods=array_reverse($foods);
echo count($foods);//number of elements

foreach($foods as $food){
  echo $food ."<br>";
}
//associated array=An array made of key => value pairs
// countries =>capital
// id => username
// item => price
$capitals =array("USA"=>"Washington D.C.","Japan"=>"Tokyo",
"Korea"=>"Seoul",
"BD"=>"Dhaka");

$capitals ["BD"]="Khulna";
$capitals ["China"] ="Beijing";
array_pop($capitals);
array_shift($capitals);
$keys=array_keys($capitals);
foreach($keys as $key){
  echo "{$key}  <br>";
}

$values=array_values($capitals);
foreach($values as $value){
  echo " {$value} <br>";
}

$capitals=array_flip($capitals);
foreach($capitals as $key=> $value){
  echo "{$key} = {$value} <br>";
}

echo count($capitals);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="array.php" method="post">
    <label >Enter a country</label>
    <input type="text" name="country">
    <input type="submit">
  </form>
</body>
</html>
<?php 
$capitals =array("USA"=>"Washington D.C.","Japan"=>"Tokyo",
"Korea"=>"Seoul",
"BD"=>"Dhaka");
$capital=$capitals[$_POST["country"]];
echo "The name of the capital is : {$capital}"

?>