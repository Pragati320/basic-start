<?php
include 'db.php';

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $phno = $_POST['phno'];
    // $chk ="";
    // foreach ($variable as $key => $value) {
    //     # code...
    // }

    $sql = "insert into emp(name,email,password,confirmpassword,phonenumber) 
    values('$name','$email','$password','$confirmpassword','$phno')";

    if(mysqli_query($con,$sql)){
        echo"<script>alert('new record inserted successfully')</script>";
    }else{
        echo"error: ".mysqli_error($con);
    }

    mysqli_close($con);
}

?>