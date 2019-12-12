<?php

include 'C:\wamp64\www\MyProject\Includes\common.php';
if(!isset($_SESSION['email']))
 {
 ?>
 <a href="index.php" class="btn btn-danger btn-lg active">Shop Now</a>
 <?php
 }
// If email session is not set, redirect the user to index.php page
if(!$_SESSION['email'])
    header("Location:index.php",true);
else
{
    $user_id=$_SESSION['uid'];
    $query="UPDATE user_items SET status='confirmed' WHERE user_id='$user_id'";
    $result= mysqli_query($con, $query) or die(mysqli_error($result));
    include 'C:\wamp64\www\MyProject\Includes\header.php';
    ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="newstyle.css" rel="stylesheet" type="text/css"/>
        <title>order confirmation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <center >
            <div style="width:100%; height:40%; margin-top:10%;margin-bottom: 10% ">
                      <h2>We Sell Lifestyle</h2>
                      <img src="images/confirmation_logo.jpg" width="250px" height="250px" >
                      <h2>Order confirmed!<a href="products.php">Continue</a></h2

             </div>
        </center>
     </body>
</html>

    <?php
    include 'C:\wamp64\www\MyProject\Includes\footer.php';
}

?>