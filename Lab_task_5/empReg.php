<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["createEmp"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["name"])) {
          $error = " <label class='text-danger'>Only letters and white space allowed</label>";
      }
      else if(str_word_count($_POST["name"])<2){
          $error = "<label class='text-danger'>Name should contain at least two word</label>";
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }
      else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          $error = "<label class='text-danger'>Invalid email format</label>";
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      } 
      else if (!preg_match("/^[a-zA-Z0-9._-]*$/",$_POST["un"])) {
          $error = "<label class='text-danger'>Only alpha numeric characters, period, dash or underscore are allowed</label>";
      }
      else if(strlen($_POST["un"]<2))
      {
          $error = "<label class='text-danger'>User Name should contain at least two word</label>";
      } 
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if (strlen($_POST["pass"])<8)
      {
          $error = "<label class='text-danger'>Password must not be less than eight (8) characters</label>";
      }
      else if (!preg_match("/\W/", $_POST["pass"])) 
      {
      $error = "<label class='text-danger'>Password should contain at least one special character</label>";
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if($_POST["Cpass"]!==$_POST["pass"])
      {
      $error="<label class='text-danger'>Confirm Password does not match with previously typed password</label>";
      }
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      }
      else if(empty($_POST["dob"]))  
      {  
           $error = "<label class='text-danger'>Dob cannot be empty</label>";  
      }
       
        
 }  
 ?>  
 <!DOCTYPE html>  
<html>  
<head>
<style>
.cred {
  color: red;
}
</style>

     <title>Employee Regestration</title>  
</head>  
<body> 

     <?php include 'UpperHeader.php';
           include 'sideInfo.php';
      ?>  
     <h2>Employee Regestration:</h2>               
      <form action="controller/createEmployee.php" method="POST" enctype="multipart/form-data" style="text-align:center;">  
      <?php   
      if(isset($error))  
      {  
           echo "<h3 class='cred'>$error</h3>";  
      }  
      ?>  
      <br>
      <label>Name</label>  
      <input type="text" name="name"><br><br>
      <label>E-mail</label>
      <input type="text" name = "email"><br><br>
      <label>User Name</label>
      <input type="text" name = "un"><br><br>
      <label>Password</label>
      <input type="password" name = "pass"><br><br>
      <label>Confirm Password</label>
      <input type="password" name = "Cpass"><br><br>
      <label>Designation</label>
      <select name="desig">
       <option value="" selected >Select</option> 
       <option value="web_developer">Web developer</option>
       <option value="business_analysts">Business analysts</option>
       <option value="customer_service_representative">Customer service representative</option>
       <option value="delivery_driver">delivery driver</option>
     </select><br><br>
      <label>Gender:</label>
     <input type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label>                     
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label><br><br><br>
      <label>Date of Birth:</label>
      <input type="date" name="dob"> <br><br>
      <input type="file" name="image"><br><br>
      <input type="submit" name="createEmp">                   
       <?php   
      if(isset($message))  
      {  
           echo "<h3>$message</h3>";  
      }  
      ?> 
 </form> 
 <?php include 'lowerFooter.php'; ?> 
 
 <br />  
      </body>  
 </html>  