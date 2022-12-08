<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
  <title>Admin-FETCH</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

    <a class="navbar-brand" href="#"><img class="rounded col-3" src="../Fotos/Logo.png" /></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="productos_j.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Sales.php">Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../../index.html">login out</a>
        </li>

      </ul>
  </nav>
    
  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col-md-auto">

        <h2>List Users</h2>
        <div class="my-4">
          <table class="table" id="lista-usuarios">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">UserName</th>
                <th scope="col">Password </th>
                <th scope="col">Costo</th>
              </tr>
            </thead>

            <tbody id="tab">

            </tbody>

          </table>
        </div>
      </div>
      
  <div class=" col col-lg-2">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Register
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="insertU.php" method="POST">
          <div class="modal-body">
            <div class="">
              <h1>Ingrese datos</h1>
              
                <input type="text" class="form-control mb-3" name="Name" placeholder=" Name" required>
                <input type="text" class="form-control mb-3" name="Username" placeholder="Username" required>
                <input type="text" class="form-control mb-3" name="Pass" placeholder="Password" required>
                <input type="text" class="form-control mb-3" name="Rol" placeholder="Rol" required>
              
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container mt-5">

      <div class="row col-3">

        <div class="col-md-8">
          <table class="table">
            <thead class="table-success table-striped">
              <tr>

                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">UserName</th>
                <th scope="col">Password </th>
                <th scope="col">Costo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tr>
              <?php
               include'../cone.php';
              $query="select * from usuarios";
              $eje=mysqli_query($conn,$query) or die (mysqli_error($conn));
             
                              foreach($eje as $row):
                                      ?>
              <tr>
                <th>
                  <?php  echo $row['idu']?>
                </th>
                
                <th>
                  <?php  echo $row['name']?>
                </th>
                <th>
                  <?php  echo $row['username']?>
                </th>
                <th>
                  <?php  echo $row['pass']?>
                </th> <th>
                  <?php  echo $row['rol']?>
                </th>
               
                <th><a href="alterU.php?id=<?php echo $row['idu'] ?>" class="btn btn-info" >Editar</a>
                </th>
                <th><a href="deleteU.php?id=<?php echo $row['idu'] ?>" class="btn btn-danger">Eliminar</a>
                </th>
              </tr>
              <?php 
                                          endforeach
                                      ?>
            </tr>
          </table>
        </div>
      </div>
    </div>


  </div>

  </div>


  <script src="User.js"></script>


</body>

</html>
