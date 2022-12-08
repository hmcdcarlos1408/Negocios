<?php 
include '../cone.php';
$id=$_GET['id'];
echo $id;

$inser="DELETE FROM `ventas` WHERE  idv=$id";

$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header('Location:sales.php');
?>