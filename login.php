<?php
require 'C:\wamp64\www\MyProject\Includes\common.php';
?>
<html>
    <head>
        <title>User Login</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="newstyle.css" rel="stylesheet" type="text/css"/>        
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\MyProject\Includes\header.php';
        ?>
    <center class="row banner">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <div class="jumbotron " style="margin-top: 20%;margin-bottom: 20%;opacity: .8">
            <center> <h2 style="color: black">  Login to make a purchase </h2></center><br>           
           <form method="get" action="login_script.php">  
               <input type="email" placeholder="Your email address" required="" class="form-control" style="width: 450px; heigth: 8px" name="email" ><br><br>
                <input type="password" placeholder="Secured Password" required="" class="form-control" style="width: 450px; heigth: 8px" name="password"><br><br>
                <button  type="submit" class="btn btn-primary" >Login</button><br>
                
           </form>
            <p style="color: black">Don't have an account? <a href="signup.php">Register</a></p>
          
        
        </div>
        </div>
    </center>    
     <?php
     include 'C:\wamp64\www\MyProject\Includes\footer.php';
     ?>      
    </body>
</html>
