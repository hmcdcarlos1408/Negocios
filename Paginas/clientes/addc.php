<?php 
include '../cone.php';
$id=$_GET['id'];
echo $id;
$res=mysqli_query($conn,$inser);

header('Location:productos_j.php');




include'../cone.php';
$query="select costo,product,des from producto where id=$id";
$eje=mysqli_query($conn,$query) or die (mysqli_error($conn));
foreach($eje as $row):
    




 $cos=$row['costo'];; 
 $product=$row['product'];  
 $des=$row['des'];

endforeach;
           $inser=" INSERT INTO `ventas`(`idv`, `total`, `name_user`, `desv`) VALUES ('','$cos',' $des',' $product')";
$res=mysqli_query($conn,$inser);

           mysqli_close($conn);
           
           header("location:carrito.php")
?>