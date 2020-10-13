<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";
$name = "null";
$item = "null";
$amount = "null";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$name = $_GET["names"];
$item = $_GET["items"];
$amount = $_GET["amount"];
echo $name,$item,$amount;

$sql = "INSERT INTO transaction values('$name','$item','$amount')";

try{
    mysqli_query($conn,$sql);
    header("location:index.html");
}
catch (Exception $e)
{
    echo $e->getMessage();
}
