<?php
include('session.php');
$dept=$_SESSION['Department'];
$desig=$_SESSION["Designation"];
$name=$_SESSION["Name"];

$sql = "SELECT Name from employee where Department='$dept' AND Designation='$desig' and Name <>'$name'";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    <title>Apply Leave</title>
    <style>

			body{
				font: 15px/1.5 Arial,Helvetica,sans-serif,Verdana;
        background-color: #eee;

			}

      form {
        padding: 10px;
        border: 2px solid black;
        background-color: #efefef;
        /* height: 100%; */
      }

      input[type=date]{
        padding: 5px;
        width: 200px;
      }
      select{
        padding: 5px;
        width: 80px;
      }

/*      button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
} */

    </style>
  </head>
  <body>
    <header>
      <h1>UKF LMS
      <nav>
       <ul>
         <li><a href="logout.php">Log Out</a></li>
       </ul>
     </nav></h1>
    </header>

    <div class="cont">
      <div class="sidebar">
        <nav>
         <ul>
           <li class="heading">Leave Management</li>
           <li><a href="">Leave Status</a></li>
           <li><a class="current" href="leave1.php">Apply for Leave</a></li>
           <li><a href="">Leave Rules</a></li>
           <li><a href="">Change Password</a></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <?php
           include 'leave2.php';
        ?>
      </div>

      <div class="profile">
        <?php
          include 'profile.php';
         ?>
      </div>
    </div>

  <!--  <footer>
      <p>copyright &copy;</p>
    </footer> -->





  </body>
</html>
