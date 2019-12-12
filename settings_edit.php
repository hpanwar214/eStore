<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'C:\wamp64\www\MyProject\Includes\common.php';
if(!isset($_SESSION['email']))
 {
 ?>
 <a href="index.php" class="btn btn-danger btn-lg active">Shop Now</a>
 <?php
 }
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
    <title>Settings and Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\MyProject\Includes\header.php';
?>        <div class="container" style="margin-top: 5%;height: 80%">
    
            <center>
                <div class="col-md-5" >
                    <h2><b>Change Password</b></h2>
                    <form method="post" action="changePassword.php">
                        <input type="password" placeholder="Old password" class="form-group form-control" name='old_password' required="">
                    
                        <input type="password" placeholder="new password" class="form-group form-control" name='new_password' required="">
                        <input type="password" placeholder="confirm new password" class="form-group form-control" name='conf_password'required="">                        
                    
                    <button type="submit" class="btn btn-primary " style="float:left;">Change</button><br><br>
                    </form>
                </div>
            </center>
   
        </div>
        
           <?php
   include 'C:\wamp64\www\MyProject\Includes\footer.php';
           ?>
    </body>
</html>
