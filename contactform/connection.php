<?php

$username = "root";
$upassword = "";
$server = 'localhost';
$db = 'finalproject';

$con = mysqli_connect($server,$username,$upassword,$db);

if($con){
    echo "Connection Successful";
  
}
else{
    echo "No Connection";
}

?>