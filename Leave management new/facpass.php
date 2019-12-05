<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Faculty</title>
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
       <li><a href="faculties.php">Leave Status</a></li>
       <li><a href="leave.php">Apply for Leave</a></li>
       <li><a href="applied.php">Applied Leave(s)</a></li>
       <li><a href="rule.php">Leave Rules</a></li>
       <li><a class="current"  href="facpass.php">Change Password</a></li>
     </ul>
   </nav>
  </div>

  <div class="content">
    <?php
        include('password.php')
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
