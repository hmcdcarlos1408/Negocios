

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>


<?php 
include '../cone.php';
$id=$_GET['id'];

$query="select * from usuarios where idu=$id";





$eje=mysqli_query($conn,$query) or die (mysqli_error($conn));
?> 
<Center>

<a href="Users.php"><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Cancelar </button></a>

<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>actualizar </button>


 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>

<form action="ok.php" method="POST">
          <div class="modal-body">
            <div class="">
              <h1>Ingrese datos</h1>
<?php
             
foreach($eje as $row):
        ?>

<input type="text" class="form-control mb-3" name="id" placeholder=" Id" value="<?php  echo $row['idu']?>" readonly>
<input type="text" class="form-control mb-3" name="Name" placeholder="Name" value="<?php  echo $name=$row['name']?>">
<input type="text" class="form-control mb-3" name="Username" placeholder="Username" value="<?php  echo $usN=$row['username']?>">
<input type="text" class="form-control mb-3" name="pas" placeholder=" Password" value="<?php  echo $pas=$row['pass']?>">
<input type="text" class="form-control mb-3" name="Rol" placeholder=" Rol" value="<?php  echo $rol=$row['rol']?>">
<?php 
            endforeach
        ?>
        
 

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </Center>

