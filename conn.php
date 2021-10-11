<?php
$server="localhost";
$username="root";
$password="";
$db="cdcol";

$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
echo mysqli_error($con);
}


 ?>