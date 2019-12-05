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
           <li><a href="ddViewInd.php">View Individual</a></li>
           <li><a href="ddRequests.php">Leave Requests</a></li></li>
           <li><a class="current"  href="ddpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <?php
          include('password.php');
         ?>

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
