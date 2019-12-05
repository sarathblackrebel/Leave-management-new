<?php
  include("session.php");
  if (isset($_POST['id'])) {
    $id1=mysqli_real_escape_string($conn,$_POST['id']);
    $sql="SELECT ID from employee";
    $result=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
      if ($id1==$row["ID"]) {
        header('Location: Individual.php');
        break;
      }
    }
    if($id1!=$row["ID"]){
      $error= "Invalid ID..! Enter a valid ID.";
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>DD</title>
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

    <div class="container">
      <div class="sidebar">
        <nav>
         <ul>
           <li class="heading">Leave Management</li>
           <li><a href="dd.php">Leave Summary</a></li></li>
           <li><a href="ddViewDpt.php">View by Department</a></li>
           <li><a class="current" href="ddViewInd.php">View Individual</a></li>
           <li><a href="ddRequests.php">Leave Requests</a></li></li>
           <li><a href="ddpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <section id="box" style="margin-left:10%">
          <div class="indent">
            <form method="POST"action="#">
                      <label> Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</label>
                      <input type="text" name="id" placeholder="Enter Employee ID" required><br><br><br>
                      <input type="submit" value="SUBMIT">
            </form>
            <div style = "font-size:14px; color:#cc0000; margin-top:15px; text-align:center">
              <?php
              if( isset( $error ) ){
              echo $error;
            }
              ?>
            </div>
          </div>
        </section>
      </div>

      <div class="profile">
        <?php
          include 'profile.php';
         ?>
      </div>
  </div>

    <footer>
      <p>copyright &copy;</p>
    </footer>
  </body>
  </html>
