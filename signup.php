
<?php
    include 'C:\wamp64\www\MyProject\Includes\common.php';   
    if(isset($_SESSION['email']))
    {
        header("Location:index.php");
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
    <link href="newstyle.css" rel="stylesheet" type="text/css">
        <title>Signup</title>        
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\MyProject\Includes\header.php';
        ?>
        <div class=" row banner" >
            <div class="col-xs-3"></div>
            <div class="col-xs-6">
                <div class="jumbotron" style="margin-top: 5%;margin-bottom: 5%;opacity: .8">
            
                    <center><h2 style="color: black">Sign Up</h2>
            
            <form method="post" action="user_signup.php"  >
               
                    <input type="text" required placeholder="Name" class=" form-control " style="width: 450px; heigth: 8px" name="name"  ><br>
                   
                    <input type="email" required placeholder="Valid Email" class="form-group form-control" style="width: 450px; heigth: 8px" name="email"><br>
                    
                    <input type="password" required placeholder="Password" class="form-group form-control" style="width: 450px; heigth: 8px" name="password"><br>
                    
                    <input type="number" required placeholder="Mobile Number" class="form-group form-control" style="width: 450px; heigth: 8px" name="contact"><br>
                    
                    <input type="text" required placeholder="City" class="form-group form-control" style="width: 450px; heigth: 8px" name="city"><br>
                    
                    <input type="text" required placeholder="Address" class="form-group form-control" style="width: 450px; heigth: 8px" name="address"><br>
                    
                    
                    <input type="submit" name="submit" class="btn btn-success" placeholder="Submit">
                
                
            </form>
            </center>
        </div>
        </div>
        
        </div>
        <?php
        include 'C:\wamp64\www\MyProject\Includes\footer.php';
        ?>
    </body>
</html>
