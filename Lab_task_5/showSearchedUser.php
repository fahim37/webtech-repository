
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border: 1px solid black;
  border-collapse: collapse;
		}
	</style>
</head>
<body>

<?php 
     require_once 'controller/findEmployee.php';
     include_once 'UpperHeader.php';
     include 'sideInfo.php';
?>

<table style="width:100%">
     <thead>
          <tr>
          <th>Name</th> 
          <th>E-mail</th>  
          <th>User name</th>
          <th>Designation</th>  
          <th>Gender</th>   
          <th>Date of birth</th> 
          <th>Image</th>
          <th>Action</th>
          </tr>
     </thead>
     <tbody>
          <?php foreach ($_SESSION['employees'] as $i => $employee): ?>
               <tr>
                    <td><a href="showEmployee.php?id=<?php echo $employee['id'] ?>"><?php echo $employee['name'] ?></a></td>
                    <td><?php echo $employee['name'] ?></td>
                    <td><?php echo $employee['uname'] ?></td>
                    <td><?php echo $employee['designation'] ?></td>
                    <td><?php echo $employee['gender'] ?></td>
                    <td><?php echo $employee['dob'] ?></td>
                    <td><img width="100px" src="empDp/<?php echo $employee['dp'] ?>" alt="<?php echo $employee['name'] ?>"></td>
                    <td><a href="editEmp.php?id=<?php echo $employee['id'] ?>">Edit</a>&nbsp<a href="controller/deleteEmployee.php?id=<?php echo $employee['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
               </tr>
          <?php endforeach; ?>
          

     </tbody>
     

</table>

<?php 
     include 'lowerFooter.php';
?>
</body>
</html>