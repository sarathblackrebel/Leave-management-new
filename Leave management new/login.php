<?php
include("config.php");
session_start();

if(isset($_POST['id'])){
  $uname=mysqli_real_escape_string($conn,$_POST['id']);
  $password=mysqli_real_escape_string($conn,$_POST['psw']);

  $_SESSION["UserID"] = $uname;
  $_SESSION["Pass"] = $password;

  $sql="select *from employee where ID='".$uname."' AND Password='".$password."' limit 1";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
    $sql1="SELECT Designation FROM employee WHERE ID ='".$uname."' limit 1 ";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result1);
    $value=$row[0];

    #session_register("uname");
    $_SESSION['UserID'] = $uname;

    if($value=="Admin"){
      header('Location: admin.php');
    }
    else if($value=="DD"){
      header('Location: dd.php');
    }
    elseif ($value=="HOD") {
      header('Location: hod.php');
    }
    elseif ($value=="AP") {
      header('Location: faculties.php');
    }
    elseif ($value=="Other") {
      header('Location: other.php');
    }

  }
  else{
    $error= "Wrong username or password";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/h1style.css">
    <title>Login Page</title>

  </head>
  <style>
    body{
      font: 15px/1.5 Arial,Helvetica,sans-serif,Georgia;
      background-image: url("./IMG/bg1.jpg");
      height: 100%;
      background-position: auto;
      background-repeat: no-repeat;
      background-size: cover;
    }
    header{
      padding: 0;
    }

   .head img{
     border-radius: 50%;
     margin-left: 20%;
     margin-top: -20%;
     width: 50%;
     height: 40%;
   }

   input[type="text"], input[type="password"] {
     padding: 9px 10px;
     margin-left: 15px;
     border: 1px solid lightblue;
     border-radius: 5px;
   }

#table{
    font: 15px/1.5 Verdana;
}

  </style>

  <body>
    <header>
      <h1 class='deepshadow'>UKF LMS</h1>

    </header>

    <section id="table" align="center">
      <div class="indent"  style="padding-left:40px">
        <div class="head">
              <img src="IMG/user_icon.png" alt="no image"/>
        </div>
      <label><h3>Login</h3></label><br>
      <!--<p class="error" role="alert"> Wrong Username or Password </p>-->
      <form method="POST"action="#">
        <label>Login ID &nbsp;&nbsp; </label>
        <input type="text" name="id" required><br><br><br>
        <label>Password&nbsp;</label>
        <input type="password" name="psw" required><br><br><br>
        <input type="submit" value="SUBMIT">
      </form>
      <div style = "font-size:14px; color:#cc0000; margin-top:15px">
        <?php
        if( isset( $error ) ){
        echo $error;
      }
        ?>
      </div>
    </div>
    </section>

  </body>
</html>
