<?php 
include '../cone.php';
$id=$_POST['id'];
$name=$_POST['Name'];
$username=$_POST['Username'];
$pass=$_POST['pas'];
$rol=$_POST['Rol'];
$inser="UPDATE `usuarios` SET `name`='$name',`username`='$username',`pass`='$pass',`rol`='$rol' WHERE idu=$id";
$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header('Location:Users.php');
?>