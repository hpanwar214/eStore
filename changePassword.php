<?php
include 'C:\wamp64\www\MyProject\Includes\common.php';
if(!isset($_SESSION['email']))
 {
 ?>
 <a href="index.php" class="btn btn-danger btn-lg active">Shop Now</a>
 <?php
 }
$op=$_POST['old_password'];


$uid=$_SESSION['uid'];
$query="SELECT * FROM users WHERE id='$uid' AND password='$op'";
$result= mysqli_query($con, $query);
$num= mysqli_num_rows($result);
if($num==0)
{
    echo "Password incorrect";
    
}   
else {
    $np=$_POST['new_password'];
$cp=$_POST['conf_password'];
    if($np!=$cp)
    {
        
        echo "password are not same";
    }
    else
    {
        $query2="UPDATE users SET password='$cp' WHERE id='$uid'";
        $result= mysqli_query($con, $query2);
        echo "password changed";
        
    }
}
?>