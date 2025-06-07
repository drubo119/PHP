<?php 
$username="Shihab";
$newarr=array("Shihab", "Sakib", "Rifat", "Sabbir", "Shamim");
$phone ="123-234-4567";

$username=strtolower($username);
$phone=str_replace("-","",$phone);
$username=trim($username);
$username=str_pad($username, 10, "0", STR_PAD_LEFT);
$phone = str_replace(" ","",$phone);
$username=strrev($username);
$username=str_shuffle($username);
$equals=strcmp($username, "Shihab");
$count = strlen($username);
$index=strpos($username, "h");
$first=substr($username, 0, 3);
$fullname=explode(" ",$username);// convert string to array
$newarr=implode(", ", $newarr); // convert array to string






?>