<?php
include 'C:\wamp64\www\MyProject\Includes\common.php';
$id=$_SESSION['purchase_id'];
$query ="DELETE FROM user_items WHERE id='$id'";
$result=mysqli_query($con,$query);
header("Location:cart.php",true);

?>