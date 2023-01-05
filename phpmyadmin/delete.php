<?php include('./server.php')?>
<?php include('./landingPage.php')?>

<?php

echo $_GET['deleteid'];

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM table_employees
            WHERE id=$id";
    $newTable = $conn->query($sql);
    if($newTable){
        echo "Deleted Succsessfully";
        header('Location: http://localhost/crud/index.php');
    }else{
        die ($db->errorInfo());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/crud/index.php">
        <button type="submit">View All employees</button>
    </form>
</body>
</html>