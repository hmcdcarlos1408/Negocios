<?php 
include '../cone.php';
$id=$_GET['id'];
echo $id;

$inser="DELETE FROM `producto` WHERE id=$id";

$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header('Location:productos_j.php');
?>