<?php 
include 'cone.php';
 
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Reviews=$_POST['Reviews'];
$inser="INSERT INTO `review`(`Nombre`, `Correo`, `Rese`) VALUES ('$Name','$Email','$Reviews')";
$res=mysqli_query($conn,$inser);
mysqli_close($conn);
header("location:Reviews.php")
?>