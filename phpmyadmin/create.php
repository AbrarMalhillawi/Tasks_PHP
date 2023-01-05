<?php include('./server.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#dddeff; margin-top:12.5%; ">
<div style="margin:auto; margin-top:12.5%; border:2px dashed red; width:75% ">   

<form action="" method="POST" style="margin:auto; width:100% ; border-collapse: collapse; text-align:center; background-color:white; font-size:20px; padding-top:20px;">
  
  <label>Enter Name Of Employee</label><br>
  <input type="text" name="name"><br>
  <label>Enter Address Of Employee</label><br>
  <input type="text" name="address"><br>
  <label>Enter Salary Of Employee</label><br>
  <input type="text" name="salary"><br><br>

  <button type="submit" style="margin:auto; margin-bottom:50px ; background-color:#000379; color:white; width:100px; height:40px; font-size:15px">Create</button>
  
</form>

<form action="http://localhost/crud/index.php" style="margin:auto; width:100% ; border-collapse: collapse; text-align:center; background-color:white; font-size:20px">
  <button type="submit" style="margin:auto; margin-bottom:50px ; background-color:#000379; color:white; width:150px; height:40px; font-size:15px">View All employees</button>
</form>
</div>
</body>
</html>
<?php 

if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['name']) && isset($_POST['salary'])){

  $name=$_POST['name'];
  $address=$_POST['address'];
  $salary=$_POST['salary'];

  $dataToInsert = "INSERT INTO table_employees ( `id`, `name`, `address` , `salary`)
  VALUES (NULL , '$name', '$address' , '$salary')";

  $conn->exec($dataToInsert);

}