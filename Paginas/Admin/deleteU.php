<?php 
include '../cone.php';
$id=$_GET['id'];
echo $id;

$inser="DELETE FROM `usuarios` WHERE idu=$id";

$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header('Location:Users.php');
?>