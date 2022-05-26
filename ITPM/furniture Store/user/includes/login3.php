<?php
$name=$_POST['name'];//username
$password=$_POST['password'];//password 
session_start();

include "../../database/product_db.php";
$result=mysqli_query($con,"SELECT * FROM `admin` WHERE `name`='$name' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login success";
	$_SESSION['log']=1;
	header("refresh:2;url=../../admin/supplier/dashboad.php");

}
else
{
	echo "please fill proper details";
	header("refresh:2;url=login.php");// it takes 2 sec to go index page
}


?>