let namee = document.getElementById("name").value;
let email = document.getElementById("email");
let pw1 = document.getElementById("psw").value;
let cpass = document.getElementById("cpsw").value;
let phno = document.getElementById("phno");



function validateForm(){
    //char data validation 
    //character data validation  
    if(!isNaN(namee)){  
        document.getElementById("charMsg").innerHTML = "**Only characters are allowed";  
        return false;  
      }  

    // match both password
    if(pw1 == cpass){
        alert ("Login successfully");
        window.location = "abc.html"; // Redirecting to other page.
        return false;
    }

      //maximum length of password validation  
    if(pw1.length > 15) {  
        document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";  
        return false;  
      }  
}

// let myInput = document.getElementById("psw");
// let letter = document.getElementById("letter");
// let capital = document.getElementById("capital");
// let number = document.getElementById("number");
// let length = document.getElementById("length");

/*
// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }
  
  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }



  // When the user starts to type something inside the password field
myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }

function validateform(){

    // if(namee == null || namee == " "){
    //     alert("Name can't be empty");
    // }

}

*/

