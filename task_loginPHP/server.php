<?php
$server ="localhost";
$username="root";
$password="";
$dbname="monday_task";

$dsn="mysql:host=$server;dbname=$dbname";

try 
{
   $connect=new PDO($dsn,$username,$password);
   $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $error)
{
    echo "Error : " . $error->getMessage();
}

?>