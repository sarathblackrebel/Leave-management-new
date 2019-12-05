<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
  <body>
    <form id="change-password-form" method="POST" action="">
      <section id="box">
                    <label> Current password &nbsp;&nbsp;&nbsp; &nbsp;</label>
                    <input type="password" name="old_pass" placeholder="Current Password" required><br><br>
                    <label> New password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="password" name="new_pass" placeholder="New Password" required><br><br>
                    <label> Re-enter password &nbsp;&nbsp;&nbsp;</label>
                    <input type="password" name="re_pass" placeholder="Repeat New Password" required><br><br>
                    <input type="submit" value="Reset" name="re_password"><br>

      </section>
    </form>
  </body>
</html>


<?php
//session_start();

include_once 'session.php';
include('config.php');

$uname=$_SESSION["UserID"];
$pass=$_SESSION["Pass"];

  if(isset($_POST['re_password']))
  {
  $old_pass=$_POST['old_pass'];
  $new_pass=$_POST['new_pass'];
  $re_pass=$_POST['re_pass'];
  $chg_pwd=mysqli_query($conn,"select * from employee where ID='".$uname."' limit 1");
  $chg_pwd1=mysqli_fetch_array($chg_pwd);
  $data_pwd=$chg_pwd1['Password'];

  if($data_pwd==$old_pass){
  if($new_pass==$re_pass){
    $update_pwd=mysqli_query($conn,"update employee set Password='$new_pass' where ID='".$uname."' limit 1");
    echo "<script>alert('Update Sucessfully');</script>";
  }
  else{
    echo "<script>alert('Your new and Retype Password does not match');</script>";
  }
  }
  else
  {
  echo "<script>alert('Your old password is wrong');</script>";
}
}
?>
