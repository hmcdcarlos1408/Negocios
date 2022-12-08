<?php 
include 'cone.php';
$U=$_POST['Username'];
$p=$_POST['password'];
$query="SELECT rol FROM `usuarios` WHERE username='$U' && pass='$p'";
$eje=mysqli_query($conn,$query) or die (mysqli_error($conn));

foreach($eje as $row):
  echo  $R=$row['rol'];
endforeach;

    if ($R=="Admin" || $R=="admin"){
       header("location:Admin/Productos_j.php");
    }else{
      if ($R=="cliente" || $R=="cliente"){
            header("location:clientes/menu.php");
        }else{header("location:Login.html");}}
?> 