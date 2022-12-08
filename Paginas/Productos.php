<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodcuts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Paginas/a.css"> 
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
			  <a class="nav-link active" aria-current="page" href="#">Store</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="Reviews.php">Reviews</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="registro.html">Create account</a>
			  </li>
		   
			<li class="nav-item">
			  <a class="nav-link " href="Login.html">Login</a>
			</li>
		  </ul>
	</nav>
    

    <div class="wrapper">
 
    <?php
                                      include'cone.php';
                                      $query="select * from producto";
                                      $eje=mysqli_query($conn,$query) or die (mysqli_error($conn));
                                      foreach($eje as $row):
                                          ?>
                           <div>
      
    
  
                           <div class="card" style="width: 18rem;">
  <img src="<?php echo $row['url'] ?>" class="card-img-top" alt="...">
  <div class="card-body"><?php echo $row['costo'] ?>
    <p class="card-text"><?php echo $row['costo'] ?></p>
  </div>
</div>


</div>

<?php 
                                                 endforeach
                                          ?>
                                        
                                        </div>              
    
</body>
</html>
<stryle