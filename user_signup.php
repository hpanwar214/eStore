<?php

$connect = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($connect)) or die(mysqli_error($connect));
session_start();
$name = mysqli_real_escape_string($connect, $_POST['name']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($connect, $_POST['city']);
$address = mysqli_real_escape_string($connect, $_POST['address']);
$insert_query = "INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
$insert_the_result = mysqli_query($connect, $insert_query) or die(mysqli_error($connect));
echo "<h1>Successfully Registered</h1>";
$_SESSION['email']=$email;
$q2="SELECT id from users where email='$email'";
$r2= mysqli_query($connect, $q2);
$w= mysqli_fetch_array($r2);
$_SESSION['uid']=$w['id'];

$_SESSION['id']= mysqli_insert_id($connect);
echo $_SESSION['id'];
?>

