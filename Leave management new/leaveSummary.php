<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>HOD</title>
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
           <li class="current"><a href="leaveSummary.php">Leave Summary</a></li></li>
           <li><a href="ViewbyDpt.php">Faculty Leave</a></li></li>
           <li><a href="#">Apply Leave</a></li></li>
           <li><a href="#">Leave Requests</a></li></li>
           <li><a href="password.html">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">

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
