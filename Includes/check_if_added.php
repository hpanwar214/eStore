<?php
  
    
function checkIfAdded($item_id)
{
    $con= mysqli_connect("localhost", "root", "","store") or die(mysqli_error($con));
    $user_id=$_SESSION['uid'];
    $query= "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id='$user_id' and status='added to cart'";
    $query_result= mysqli_query($con, $query);
    if(mysqli_num_rows($query_result)>=1)
    {
      //  echo "there is a item";
        return TRUE;
    }
    else
    {
        //echo "there is no item";
        return FALSE;
    }
    
}
?>
