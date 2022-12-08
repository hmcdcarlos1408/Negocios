<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Paginas/a.css">  
	<link rel="stylesheet" href="a.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<a class="navbar-brand" href="#"><img class="rounded col-3" src="Fotos/Logo.png"/></a>
	  
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="Productos.php">Store</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="Reviews.php">Reviews</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="registro.html">Create account</a>
			  </li>
		   
			<li class="nav-item">
			  <a class="nav-link " href="#">Login</a>
			</li>
		  </ul>
	</nav>
 

   
   


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Reviews
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reviews</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



      <form action="sen.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="Name"  placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="Email"  placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone</label>
      <input type="text" class="form-control" name="Phone"  placeholder="Phone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Reviews</label>
    <input type="text" class="form-control" name="Reviews"  placeholder="Reviews">
  </div>

      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      <div class="modal-footer">
    
        </form>
      </div>
    </div>
  </div>
</div>  
</div>


    <?php
                                      include'cone.php';
                                      $query="select * from review";
                                      $eje=mysqli_query($conn,$query) or die (mysqli_error($conn));
                                      foreach($eje as $row):
                                          ?>
                              <div class="container">
  <div class="row"> <div class="col">          
      
    
  
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['Nombre'] ?></h5>
    <p class="card-text"><?php echo $row['Rese'] ?></p>
    <P class="btn btn-primary"><?php echo $row['Correo'] ?></p>
  </div>
</div>
</div>
</div></div> </div>
<?php 
                                                 endforeach
                                          ?>
                                        
                                        
           
</body>
</html>


           