<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset "UTF-8"> 
	<title>PlexoClo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    <br/>

    <div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-1">Detalles de la cuenta</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2">Compras realizadas</a>
      <a class="list-group-item list-group-item-action" href="#list-item-3">Configurar cuenta </a>
    </div>
  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      <h4 id="list-item-1"></h4>
        <section class="Login">
        <h4>Detalles de la cuenta</h4> 
        <p><h5>Nombre de la cuenta</h5></p>
        <p><h5>Usuario</h5></p>
        </p><h5>Correo registrado</h5></p> 
        </section>
      <h4 id="list-item-2"></h4>
        <section class="Login">
        <h4>Registro de compras</h4> 
        </section>
      <h4 id="list-item-3"></h4>
        <section class="Login">
        <h4>Configurar perfil</h4> 
        <p><h5>Nombre de la cuenta</h5><input class="button" type="submit" value="cambiar"> </p>
        <p><h5>Usuario</h5><input class="button" type="submit" value="cambiar"></p>
        </p><h5>Correo registrado</h5><input class="button" type="submit" value="cambiar"></p> 
        </p><h5>Contraseña</h5><input class="button" type="submit" value="cambiar"></p> 
        </section>
      
    </div>
  </div>
</div>


</body>