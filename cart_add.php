<?php
include 'C:\wamp64\www\MyProject\Includes\common.php';
$user_id=$_SESSION['uid'];
$item_id=$_GET['id'];
$query ="INSERT INTO user_items(user_id,item_id,status) VALUES('$user_id','$item_id','added to cart')";
$result= mysqli_query($con, $query);
header("Location:products.php?id='$user_id'",true);
?>
