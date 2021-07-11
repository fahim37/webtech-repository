<!DOCTYPE html>
<html>
<head>
<style>
.cred {
  color: red;
}
</style>
     <title>Edit Employee</title>    

</head>
<body>
<?php 
require_once 'controller/employeeInfo.php';
$employee = fetchEmployee($_GET['id']);

include 'upperHeader.php';
include 'sideInfo.php';
if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }

 ?>
 <form action="controller/updateEmployee.php" method="POST" enctype="multipart/form-data">

<fieldset>
<legend>Employee Profile</legend>
Name:<input type="text" name="name" value="<?php echo $employee['name'] ?>"><hr>
Email:<input type="text" name="email" value="<?php echo $employee['email'] ?>"><hr>
Designation:<select name="desig">
	<option value="<?php echo $employee['designation']; ?>" selected><?php echo $employee['designation']; ?></option>
       <option value="web_developer">Web developer</option>
       <option value="business_analysts">Business analysts</option>
       <option value="customer_service_representative">Customer service representative</option>
       <option value="delivery_driver">delivery driver</option>
     </select><hr>

Gender:<input type="radio" id="male" name="gender" value="male" <?php if ($employee['gender']=="male") echo "checked";?>>
    <label for="male">Male</label>                     
    <input type="radio" id="female" name="gender" value="female"  <?php if ($employee['gender']=="female") echo "checked";?>>
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other"  <?php if ($employee['gender']=="other") echo "checked";?>>
    <label for="other">Other</label><hr>
 Date of Birth:<input type="date" name="dob" value="<?php echo $employee['dob']?>"><hr>
 New Image<input type="file" name="image"><br><br>
 <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
 <input type="submit" name="change" value="Change"><br>

</fieldset>
<?php include 'lowerFooter.php'; ?>
</form>
</body>
</html>