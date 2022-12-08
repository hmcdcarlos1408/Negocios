<?php 
include '../cone.php';
$product=$_POST['product'];
$categoria=$_POST['categoria'];
$des=$_POST['des'];
$costo=$_POST['costo'];
$url=$_POST['url'];
$inser="INSERT INTO `producto` VALUES ('','$product','$categoria','$des','$costo','$url')";
$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header("location:productos_j.php")
?>