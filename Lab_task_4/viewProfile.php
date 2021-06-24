<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php include 'upperHeader.php';
include 'sideInfo.php';
?>
<fieldset>
<legend>Profile</legend>
<?php
if (isset($_SESSION['uname'])) { 
// $data = file_get_contents("data.json");
// $data = json_decode($data, true);  
               
//  foreach($data as $row)
//  {
//  	if($row["username"]==$_SESSION['uname'])
//  	{
//  		$_SESSION['name'] = $row["name"];
//  		$_SESSION['email'] = $row["e-mail"];
//  		$_SESSION['password'] = $row["password"];
//  		$_SESSION['gender'] = $row["gender"];
//  		$_SESSION['dob'] = $row["dob"];
//  	}
//  }

echo "Name: ".$_SESSION['name']."<br>";
echo "Email: ".$_SESSION['email']."<br>";
echo "Gender: ".$_SESSION['gender']."<br>";
echo "Date of Birth: ".$_SESSION['dob']."<br>";
}else{
	header("location:login.php");
}
 ?>
</fieldset>
<?php include 'lowerFooter.php'; ?>
</body>
</html>