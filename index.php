<?php 

$server="localhost";
$username="root";
$password="";
$db="sparks";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //echo("The connection is created");
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>