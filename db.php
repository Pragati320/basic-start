<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "recorddb";
$con = mysqli_connect($servername,$username,$password,$database);


//$con = mysqli_connect("localhost","root","","recorddb");
if(!$con){
    die("error detected".mysqli_error($con));
}else{
    echo"connection established successfully";
}

?>

















