
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
        $uid=$_SESSION['uid'];
        $query="SELECT * FROM users WHERE id='$uid'";
        $result= mysqli_query($con, $query);
        $row= mysqli_fetch_array($result);
        ?>
      </div>
      <div class="container" style="margin-top: 5%;height: 80%">
            <center>
                <div class="col-md-5">
                    <h2><b>Information</b></h2>
                    <table class=' table table-striped table-bordered'>
                        <tbody >
                            <tr name='name'>
                                <td >User id</td>
                                <td ><?php echo $row['id'] ?></td>
                                
                            </tr>
                            <tr name='name'>
                                <td >Name</td>
                                <td ><?php echo $row['name'] ?></td>
                                
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $row['email']?></td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td><?php echo $row['contact']?></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td><?php echo $row['city']?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $row['address']?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><?php echo md5($row['password'])?><a href='settings_edit.php'><span class="glyphicon glyphicon-edit" style="float: right"></span></a></td>
                            </tr>
                           
                        </tbody>
                        
                    </table>
                    
                </div>
                <div class="col-md-5">
                    <h2><b>Order History</b></h2>
                    <table class='table table-bordered table-striped'>
                        <tr>
                            <th>S.no</th>
                            <th>product id</th>
                            <th>description</th>
                            <th>price</th>
                            <th>date</th>
                        </tr>
                        <?php
                        $i=1;
                       
                        $query="SELECT i.id,i.name,i.price FROM user_items ui INNER JOIN items i ON ui.user_id='$uid' AND i.id=ui.item_id AND status='confirmed'";
                        $result= mysqli_query($con, $query) or die(mysqli_error($con));
                        while($rows= mysqli_fetch_array($result))
                        {
                            ?>
                        <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rows['id'];?></td>
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['price'];?></td>
                     </tr>
                            
                       <?php  
                       $i=$i+1;
                        }
        
                        ?>
                        
                    </table>
                </div>
            </center>
        </div>
        
           <?php
           include 'C:\wamp64\www\MyProject\Includes\footer.php';
           ?>
    </body>
</html>
