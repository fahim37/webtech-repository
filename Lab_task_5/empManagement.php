
<?php 
     require_once 'controller/employeeInfo.php';
     $employees = fetchAllEmployees();
     include 'UpperHeader.php';
     include 'sideInfo.php';
 ?>
<!DOCTYPE html>  
 <html>  
      <head>  
        <title>Employee Management</title>  
       <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style> 
 </head>  

<body>

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
          <?php foreach ($employees as $i => $employee): ?>
               <tr>
                    <td><a href="showEmployee.php?id=<?php echo $employee['id'] ?>"><?php echo $employee['name'] ?></a></td>
                    <td><?php echo $employee['email'] ?></td>
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



      <div style="text-align:center;">
          <form method="post" action="controller/findEmployee.php">
          <fieldset>
          <legend>search for a employee: </legend>
          Name : <input type="text" name="uNameS">
          <input type="submit" name="searchEmp", value="Search">
          </fieldset>
          </form>
          <a  style="font-size:20px;" href="empReg.php">Regester for a new employee</a>
       </div>
<?php include 'lowerFooter.php'; ?>
      </body>  
 </html>  