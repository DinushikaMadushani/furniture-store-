<?php
 include "../../database/product_db.php";
 include ("../includes/u_header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Supplier</title>
  
</head>
<body>

<h4 style="margin-top:0px;" class="text-center text-light bg-info p-1 " >Supplier</h4>
<div class ="bodyy">


<div class="container my-5">
<div class="card border-secondary p-4">
      <div class="card-header">
        <h4 class="text-center">Add Supplier Details </h4>
      </div>
<form method="post" action="supplierdata.php">
  <div class="mb-3">
    <label >Name</label>
    <input type="text" placeholder="Enter Your Name"  class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label >Address</label>
    <input type="text" placeholder="Enter Your Address"  class="form-control" name="address">
  </div>
  <div class="mb-3">
    <label >Email</label>
    <input type="email" placeholder="Enter Your Email"  class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label >Phone Number</label>
    <input type="text" placeholder="Enter Your Phone Number"  class="form-control" name="phone">
  </div>
  <div class="mb-3">
    <label >City</label>
    <input type="text" placeholder="Enter Your City"  class="form-control" name="city">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
	if(isset($_GET["error"])){
 	    echo"<div class='alert alert-danger'>";

		 if($_GET["error"]=="AllInputsEmpty"){

 			echo "Warning! All input fields are Empty.";
		  }
		if($_GET["error"]=="EmptyName"){

		  	echo "Warning! Name field is Empty.";
       		  }
		if($_GET["error"]=="EmptyAddress"){
               
	                echo "Warning! Address no field is Empty..";
		 }
		if($_GET["error"]=="EmptyEmail"){

		        echo "Warning! Email field is Empty.";
	         }
		if($_GET["error"]=="EmptyPhone"){
                    
			echo "Warning! Phone field is Empty.";
		}

		if($_GET["error"]=="EmptyCity"){

            		echo "Warning! City field is Empty..";
		}
		if($_GET["error"]=="InValidEmail"){

			echo "Warning! your entered email is invalid.";
	        }
        }
 ?>

</div>
</div>


<?php include ("../includes/u_footer.php"); ?>
</body>
</html>