<?php
function check_login($conn)
{
  if (isset($_SESSION['id']))
  {
    $id=$_SESSION['id'];
    $query="select * from user_login where id='$id' limit 1";

    $result=mysqli_query($conn,$query);
    if($result && mysqli_num_rows(result)>0)
    {
      $user_data=mysqli_fetch_assoc($result);
      return $user_data;
    }

  }
  //redirect to login
  header("Location:logg.php");
  die;
}

