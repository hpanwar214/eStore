<!DOCTYPE html>
<?php
include 'C:\wamp64\www\MyProject\Includes\common.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="newstyle.css" rel="stylesheet" type="text/css"/>
    <title>Products Info</title>
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\MyProject\Includes\header.php';
        include 'C:\wamp64\www\MyProject\Includes\check_if_added.php';
        
        $query="SELECT id,name,price,images FROM items WHERE 1";
        $result= mysqli_query($con, $query);
        
        ?>
        <div class="row">
             <div class="jumbotron">
            <h1 style="padding-left: 30px;">Welcome to our Lifestyle Store!</h1>
            <p style="padding-left: 30px;">We have the best cameras,watches and shirts for you.No need to hunt around We have all in one place</p>
            </div>
            
            </div>
            

        <?php
        while($arr= mysqli_fetch_array($result))
        {
            
        
        ?>
        <div class="row" style="padding-left: 30px;padding-right: 30px;">
            
            <div class="col-md-3 col-sm-6" >
                <img style="width:250px;height: 250px;" src="<?php echo $arr['images'];?>" alt="no Thumbnail" class="img-responsive">
                <p><?php echo $arr['id'];?></p>
                <center>
                <h3><?php echo $arr['name']?></h3>
                <p>price Rs<?php echo $arr['price']; ?> only</p>
                <?php
                if(!isset($_SESSION['email']))
                {
                ?>
                <button type="submit"  class="btn btn-primary btn-block"><a href="login.php">Buy Now</a></button>
                <?php
                }
                else
                {
                    if(checkIfAdded($arr['id']))
                    {
                  
                        ?>
                        <button type="submit"  class="btn btn-block btn-success" disabled><a href="#">Added to Cart</a></button>
                    <?php     
                    }
                    else
                    {
                        ?>
                <button type="submit"  class="btn" ><a href="cart_add.php?id=<?php echo $arr['id'];?>">Add to Cart</a></button>
                <?php
                    }
                }
                
        
                ?>
                

                
                </center>
            </div>
             <div class="col-md-3 col-sm-6 ">
                 <?php $arr= mysqli_fetch_array($result);?>
                <img  style="width:250px;height: 250px;" src="<?php echo $arr['images']?>" alt="no Thumbnail" class="img-responsive">
                <p><?php echo $arr['id'];?></p>
                <center>
                <h3><?php echo $arr['name']?></h3>
                <p>price Rs <?php  echo $arr['price']?> only</p>
                <?php
                if(!isset($_SESSION['email']))
                {
                ?>
                <button type="submit"  class="btn btn-primary btn-block"><a href="login.php">Buy Now</a></button>
                <?php
                }
                else
                {
                    if(checkIfAdded($arr['id']))
                    {
                        ?>
                        <button type="submit"  class="btn btn-block btn-success" disabled><a href="#">Added to Cart</a></button>
                    <?php     
                    }
                    else
                    {
                        ?>
                <button type="submit"  class="btn" ><a href="cart_add.php?id=<?php echo $arr['id'];?>">Add to Cart</a></button>
                <?php
                    }
                }
                ?>
                
                
                </center>
            </div>
             <div class="col-md-3 col-sm-6">
                 <?php $arr= mysqli_fetch_array($result);?>
                <img style="width:250px;height: 250px;" src="<?php echo $arr['images']?>" alt="no Thumbnail" class="img-responsive">
                <p><?php echo $arr['id'];?></p>
                <center>
                <h3><?php echo $arr['name']?></h3>
                <p>price Rs <?php echo $arr['price']?> only</p>
                <?php
                if(!isset($_SESSION['email']))
                {
                ?>
                <button type="submit"  class="btn btn-primary btn-block"><a href="login.php">Buy Now</a></button>
                <?php
                }
                else
                {
                    if(checkIfAdded($arr['id']))
                    {
                        ?>
                        <button type="submit"  class="btn btn-block btn-success" disabled><a href="#">Added to Cart</a></button>
                    <?php     
                    }
                    else
                    {
                        ?>
                <button type="submit"  class="btn" ><a href="cart_add.php?id=<?php echo $arr['id'];?>">Add to Cart</a></button>
                <?php
                    }
                }
                ?>
                

                </center>
            </div>
            <?php $arr= mysqli_fetch_array($result);?>
             <div class="col-md-3 col-sm-6">
                <img style="width:250px;height: 250px;" src="<?php echo $arr['images']?>" alt="no Thumbnail" class="img-responsive">
                <p><?php echo $arr['id'];?></p>
                <center>
                <h3><?php echo $arr['name']?></h3>
                <p>price Rs <?php echo $arr['price']?>only</p>
                <?php
                if(!isset($_SESSION['email']))
                {
                ?>
                <button type="submit"  class="btn btn-primary btn-block"><a href="login.php">Buy Now</a></button>
                <?php
                }
                else
                {
                    if(checkIfAdded($arr['id']))
                    {
                        ?>
                        <button type="submit"  class="btn btn-block btn-success" disabled><a href="#">Added to Cart</a></button>
                    <?php     
                    }
                    else
                    {
                        ?>
                <button type="submit"  class="btn" ><a href="cart_add.php?id=<?php echo $arr['id'];?>">Add to Cart</a></button>
                <?php
                    }
                }
                ?>
                

                </center>
            </div>
        </div><br>
        <?php
        }
        ?>
        
        <?php
        include 'C:\wamp64\www\MyProject\Includes\footer.php';
        ?>
    </body>
</html>
