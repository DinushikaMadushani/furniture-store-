<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/header.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
     
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
    <a class="navbar-brand" href="#"><img src="../../images/logo2.png" ></a>
      <div class="header">
        <div class="menubar">
        <nav class="navbar navbar-expand-lg navbar-light ">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="bx bx-menu sidebarBtn"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="../includes/home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Supplier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
     
     
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
            
            <a class="nav-link"><i class='bx bxs-user'></i>  Sign Up</a>
          
        </li>
      <li class="nav-item">
            
            <a class="nav-link" href="login.php"><i class='bx bx-log-in'></i>  Log in</a>
          
        </li>
        <ul>
  </div>
  
  
</nav>

        </div>
      </div>
      
    </body>
    </html>
	<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>product</title>
   
<title>login</title>
</head>
<body>
<div class="container my-5 ">
<div class="containr-fluid">
	<div class="row">
		<div class="col-lg-6" >
			<div class="card border-secondary p-4">
				<div class="card-header bg-primary p-1">
					<h4 class="text-center text-light"> User Login </h4>
				</div>
					<form method="POST" action="login2.php" enctype="multipart/form-data">
						<div class="form-group my-2" >
						<div class="form-group">
							<label>Enter User Name :</label>
							<input type="text" class="form-control" name="uname" placeholder="Enter User Name">
						</div>
						<div class="form-group">
							<label>Enter Password :</label>
							<input type="password" class="form-control"  name="password" placeholder="Enter Password">
						</div>
						<button type="submit" class="btn btn-primary" name="submit"  value="Login">Login</button>
					</form>
			</div>
		</div>
</div>

		<div class="col-lg-6" >
    		<div class="card border-secondary p-4">
				<div class="card-header bg-danger p-1">
					<h4 class="text-center text-light"> Admin Login </h4>
				</div>
					<form method="POST" action="login3.php" enctype="multipart/form-data">
						<div class="form-group my-2" >
						<div class="form-group">
							<label>Enter User Name :</label>
							<input type="text" class="form-control" name="name" placeholder="Enter User Name">
						</div>
						<div class="form-group">
							<label>Enter Password :</label>
							<input type="password" class="form-control"  name="password" placeholder="Enter Password">
						</div>
						<button type="submit" class="btn btn-danger" name="submit"  value="Login">Login</button>
					</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<br>
<div class="container my-5 ">
<div class="row">
             <div class="col-md-4">
                <div class="thumbnail">
                    <img src="../../images/log1.jpg" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>Bookcases.</p>
                    </div>
                    </a>
                </div>
                </div>
                <div class="col-md-4">
                <div class="thumbnail">
                    <img src="../../images/log2.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>TV Console</p>
                    </div>
                    </a>
                </div>
                </div>
                <div class="col-md-4">
                <div class="thumbnail">
                    <img src="../../images/log3.jpg" alt="Fjords"  style="width:100%">
                    <div class="caption">
                        <p>Bed Room Iteams</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</body>
</html>
<?php include ("u_footer.php"); ?>
<?php
session_destroy();
?>

