<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FETCH</title>

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<a class="navbar-brand" href="#"><img class="rounded col-3" src="Logo.png"/></a>
	  
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="menu.php">Store</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="#">
shopping cart</a>
			</li>
		
		   
			<li class="nav-item">
			  <a class="nav-link " href="../../index.html">Login</a>
			</li>
		  </ul>
	</nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h2>Listado de datos</h2>
                <div class="my-3">
                  <table class="table">
                    <thead class="table-success table-striped">
                      <tr>
        
                        <th scope="col">ID</th>
                        <th scope="col">Total</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Description sell </th>
                      </tr>
                    </thead>
                    <tbody>
                   
                      <?php
                                          include'../cone.php';
                                          $query="select * from ventas";
                                          $eje=mysqli_query($conn,$query) or die (mysqli_error($conn));
                                          foreach($eje as $row):
                                              ?>
                      <tr>
                     
                        <th>
                          <?php  echo $row['idv']?>
                        </th>
                        <th>
                          <?php  echo $row['total']?>
                        </th>
                        <th>
                          <?php  echo $row['name_user']?>
                        </th>
                        <th>
                          <?php  echo $row['desv']?>
                        </th>
                        <th><a href="deleteV.php?id=<?php echo $row['idv'] ?>" class="btn btn-danger">Eliminar</a>
                        </th>
                      </tr>
                      <?php 
                                                     endforeach
                                              ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
<Center>
   
    <script src="ok.js"></script>
      <!-- Replace "test" with your own sandbox Business account app client ID -->
      <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
      <!-- Set up a container element for the button -->
      <div id="paypal-button-container"></div>
      <script>
        paypal.Buttons({
          // Sets up the transaction when a payment button is clicked
          createOrder: (data, actions) => {
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: '77.44' // Can also reference a variable or function
                }
              }]
            });
          },
          // Finalize the transaction after payer approval
          onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
              // Successful capture! For dev/demo purposes:
              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
              const transaction = orderData.purchase_units[0].payments.captures[0];
              alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
              // When ready to go live, remove the alert and show a success message within this page. For example:
              // const element = document.getElementById('paypal-button-container');
              // element.innerHTML = '<h3>Thank you for your payment!</h3>';
              // Or go to another URL:  actions.redirect('thank_you.html');
            });
          }
        }).render('#paypal-button-container');
      </script>
</Center>
</body>

</html>
