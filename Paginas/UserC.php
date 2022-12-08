<?php 
include 'cone.php';
$name=$_POST['Name'];
$username=$_POST['Username'];
$pass=$_POST['Pass'];
$inser="INSERT INTO `usuarios` VALUES ('$name','$username','$pass','cliente','')";

$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header("location:Login.html")
?>