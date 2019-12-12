<!DOCTYPE html>
<?php
require 'C:\wamp64\www\MyProject\Includes\common.php';
if (isset($_SESSION['email'])) 
  {
    header('location: products.php');
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
    <title>LifeStyle Store</title>

  </head>
  <body >
      
      <?php
      include 'C:\wamp64\www\MyProject\Includes\header.php';
      ?>
  <center>
      <div class="banner">
          <div class="container" style="margin-bottom: 0%">
              <center>
              <div class="banner-content">
                  <h2>We Sell Lifestyle</h2>
                  <p>Flat 40% off on top brands</p>
                  <?php
                  if(!isset($_SESSION['email']))
                  {
                      ?>
                  <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
                  <?php
                  }
                  else
                  {
                      ?>
                  <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a> 
                     <?php
                  }
                  ?>
                  
              </div>
              </center>
          </div>
         
      </div>
  </center>
      <?php
      include 'C:\wamp64\www\MyProject\Includes\footer.php';
      ?>
            
                
     
    
  </body>
</html>