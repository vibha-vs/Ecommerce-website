<?php
include ('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE FROM orders WHERE id='$newid'";

if(mysqli_query($connect,$sql)){
    header('location: orders.php');
}else{
    echo "Not Deleted";
}

?>