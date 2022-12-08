<?php 
include '../cone.php';
$id=$_POST['id'];
$product=$_POST['product'];
$categoria=$_POST['categoria'];
$des=$_POST['des'];
$costo=$_POST['costo'];
$url=$_POST['url'];
$inser="UPDATE `producto` SET `product`='$product',`categoria`='$categoria',
`des`='$des',`costo`='$costo',`url`='$url' WHERE id=$id";
$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header('Location:productos_j.php');
?>
