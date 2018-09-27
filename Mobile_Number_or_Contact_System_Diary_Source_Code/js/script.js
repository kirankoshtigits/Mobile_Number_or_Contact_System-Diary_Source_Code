/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// SELECTING ALL TEXT ELEMENTS
var username = document.forms['contact_form']['_name'];

var surname = document.forms['contact_form']['surname'];

var gender = document.forms['contact_form']['gender'];
var email = document.forms['contact_form']['email_address'];
var cell_number = document.forms['contact_form']['cell_number'];
var home_phone = document.forms['contact_form']['home_phone'];
var work_phone = document.forms['contact_form']['work_phone'];
var physical_address = document.forms['contact_form']['physical_address'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var surname_error = document.getElementById('surname_error');
var email_error = document.getElementById('email_error');
var home_error = document.getElementById('home_error');
var work_rror = document.getElementById('work_errot');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
cell_number.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
 
  if (username.value === "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
     
    name_error.textContent = "Username is wwwrequired";
    username.focus();
    return false;
  }

  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  
  
    if (surname.value === "") {
    surname.style.border = "1px solid red";
    document.getElementById('surname_div').style.color = "red";
     
    surname_error.textContent = "Username is required";
    surname.focus();
    return false;
  }

  if (surname.value.length < 3) {
    surname.style.border = "1px solid red";
    document.getElementById('surname_div').style.color = "red";
    surname_error.textContent = "surname must be at least 3 characters";
    surname.focus();
    return false;
  }
  
  ///////////
  // validate email
  if (email.value === "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }

  if (cell_number.value === "") {
    cell_number.style.border = "1px solid red";
    document.getElementById('cell_div').style.color = "red";
    
    cell_error.textContent = "cell number  is required";
    cell_number.focus();
    return false;
  }
  if (home_phone.value === "") {
    home_phone.style.border = "1px solid red";
    document.getElementById('work_div').style.color = "red";
    
    home_error.textContent = "home number  is required";
    home_phone.focus();
    return false;
  }




  
}
function confirm(){
    var del = document.getElementsByName("update");
    if(del=="update"){
        alert("do you want to delete this contact?");
        return;
    }
}
