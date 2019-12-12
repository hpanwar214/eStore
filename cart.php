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
        <title>My Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <?php
        echo  "Cart";
        include 'C:\wamp64\www\MyProject\Includes\header.php';
        
       $uid=$_SESSION['uid'];
       echo $_SESSION['uid'];
        $query="SELECT ui.id,ui.user_id,ui.item_id,ui.status,it.name,it.price FROM user_items ui INNER JOIN items it ON ui.user_id='$uid' AND ui.item_id=it.id AND ui.STATUS='added to cart'";
        $result= mysqli_query($con, $query);
        
        $sum=0;    
        ?>
        <div class="container" style="margin-top: 5%;height: 100%;">
        <table class="table table-bordered table-striped"  >
            <tbody >
                <tr >
                    <th><h4>Item Numbers</h4></th>
                    <th><h4>Item Name</h4></th>
                    <th><h4>Price</h4></th>
                    <th><h4>Tax</h4></th>
                </tr>
                <?php 
                    if(mysqli_num_rows($result)==0)
                    {
                        ?><tr><td><a href="products.php">Add items to the cart first!</a></td></tr>
                        <?php
                    }
                    else
                    {
                        $i=1;                 
                        while($row= mysqli_fetch_array($result))
                        
                                {
                            ?>
                 <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['name']?><a href="cart_remove.php" class="remove_item_link"><button class="btn-warning btn-xs" style="float:right;">Remove </button></a></td>
                    <td><?php echo $row['price'] ?></td>
                    <td>--</td>
                    
                </tr>
                     <?php 
                     $sum=$sum+$row['price'];
                     
                     $i=$i+1;
                        }
                    }
                    ?>
                
               
                <tr>
                    <th></th>
                    <th><h4>Total</h4></th>
                    <th><h4> Rs <?php echo $sum ?></h4></th>
                    <?php
                    if(!mysqli_num_rows($result)==0)
                        $url="success.php?pr_id=".$_SESSION['uid']; 
                    else    
                        $url="products.php?pr_id="; 
                    ?>
                    <th><center><a href="<?php echo $url;?>"><button type="submit" class="btn btn-primary">Confirm Order</button></a></center></th>
                </tr>
            </tbody>
        </table>
    </div>
        <?php
        include 'C:\wamp64\www\MyProject\Includes\footer.php';
        ?>
    </body>
</html>
