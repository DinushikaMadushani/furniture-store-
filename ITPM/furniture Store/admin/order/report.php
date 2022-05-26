<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Generate Report</title>
</head>
<body onload="print()">
    <div class ="container">
         <center>
             <h3 style="margin-top:30px;"> Order List </h3>
             <hr>
         </center>

         <table id="ready" class =" table table-striped table-bordered" style="width: 100$;">
         <thead>
               <tr>
                   <th>Price</th>
                   <th>Quantity</th>
                   <th>Size</th>
                   <th>Description</th>
                   

                </tr>
         </thead>
         <tbody>

            <?php 
              include "../../database/product_db.php";
             
             $sql ="SELECT * FROM p_order ";


        

             $result = mysqli_query($con,$sql);

             while($row =mysqli_fetch_array($result)){

             ?>

             <tr>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['quantity']?></td>
                <td><?php echo $row['size']?></td>
                <td><?php echo $row['description']?></td>
                

             </tr>
                   <?php } ?>
         </tbody>
</div>
<div class="container">
  <button type="" class="btn btn-info noprint'" style =" width: 100% ;"
  onclick= "window.location.replace('read.php');"> Cansel Printing </button>
</div>
</body>
</html>