<?php

$connect = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($connect));
session_start();
$email= mysqli_real_escape_string($connect,$_GET['email']);
$password= mysqli_real_escape_string($connect,$_GET['password']);
$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$login_result= mysqli_query($connect, $query) or die(mysqli_error($connect));
if(mysqli_num_rows($login_result)==0)
{
    echo "there is no user with the email and password you entered";
    header("Location:login.php",true);
}
else {
    $row= mysqli_fetch_assoc($login_result); 
    $_SESSION['email']=$email;
    $_SESSION['uid']=$row['id'];
    $_SESSION['id']= mysqli_insert_id($connect);
    header("Location:products.php",true);
    
}


?>
