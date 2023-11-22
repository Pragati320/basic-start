<!DOCTYPE html>
<html>
  <head>
    <title>Registration form</title>
 <!-- include Bootstrap file here -->


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- include css file here -->


<link rel="stylesheet" href="css/style.css" />
<!-- Include JS File Here -->
<script src="js/index.js"></script>
  </head>


  <body>    
    <center> <h1 class="heading"> Registration Form </h1> </center> <br>
    <form name="myform" method="post" action="process.php">      
        <div class="container">
            <center>  


            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" placeholder="enter name" name="username" id="name" required><br>
                <span id = "charMsg" style="color:red"> </span>  
            </div>


            <div class="form-group">
                <label for="email">Email:</label>  
                <input type="email" class="form-control" placeholder="enter email" name="email" id="email" required > <br>
            </div>


            <div class="form-group">
                <label for="psw">Password:</label>  
                <!-- <input type="password" placeholder="enter password" name="pass"  id="pass"> <br><br>  -->
                <input type="password"  class="form-control"  id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br>
                <span id = "message1" > </span>  
            </div>
             
           
            <div class="form-group">
                <label for="cpsw">Confirm Password:</label>  
                <input type="password" class="form-control" placeholder="enter confirm password" id="cpsw" name="confirmpassword" required >  <br>
            </div>
           
       
            <div class="form-group">
                <label for="phno">Phone Number:</label>  
                <input type="text" class="form-control" placeholder="enter phone number" id="phno" name="phno" required> <br>
            </div>
           
           
            <button type="submit"name = "submit" value="submit"  onclick="validateForm()">Login</button>&nbsp; &nbsp; &nbsp;&nbsp;
            <button type="reset">Reset</button>   <br> <br>  
            <input type="checkbox" checked="checked"> Remember me &nbsp; &nbsp; &nbsp;&nbsp;
           
            <!-- <button type="button" class="cancelbtn"> Cancel</button>    -->
            Forgot <a href="pass.html"> password? </a>



            <!-- <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div> -->
            </center>
        </div>  
    </form>
</body>    
</html>