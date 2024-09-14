<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="delete from `bookings` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "deleted sucessfully";
       header('location:view.php');
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}

?>