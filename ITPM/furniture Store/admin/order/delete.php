<?php include "../../database/product_db.php";

include('../includes/header.php');  

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM p_order WHERE id=$id";
    
    $result =mysqli_query($con,$sql);

    if($result){
        header('location:readorder.php?message=successdelete');
    }else{
        die(mysqli_error($con));
    }
}


?>