<?php 
include '../cone.php';
$name=$_POST['Name'];
$username=$_POST['Username'];
$pass=$_POST['Pass'];
$rol=$_POST['Rol'];
$inser="INSERT INTO `usuarios` VALUES ('','$name','$username','$pass','$rol')";

$res=mysqli_query($conn,$inser);
mysqli_close($conn);

?>