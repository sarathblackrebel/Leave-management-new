<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Faculty</title>
  </head>
  <style>
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }

  </style>
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
       <li><a class="current" href="applied.php">Applied Leave(s)</a></li>
       <li><a href="rule.php">Leave Rules</a></li>
       <li><a href="facpass.php">Change Password</a></li>
     </ul>
   </nav>
  </div>

  <div class="content">

    <?php
    include("session.php");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id=$_SESSION['ID'];
    $sql="SELECT * FROM applyleave INNER JOIN employee ON employee.ID=applyleave.ID AND employee.ID = '$id'";
    $result=mysqli_query($conn,$sql);
    echo $row["Name"];
    $i=1;
    if (mysqli_num_rows($result) > 0) {
      echo "<table><tr><th>No</th><th>From</th><th>To</th><th>Leave Type</th><th>Reason</th><th>Status</th><th>Operation</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>" . $i. "</td><td>" . $row["Start"]. "</td><td>" . $row["EndLeave"]."</td><td>" . $row["Type"]."</td><td>" . $row["Reason"]."</td><td>" . $row["Status"]."</td><td>" ."</td></tr>";
          $i++;
    }
    echo "</table>";
    }
    else {
        echo "0 results";
    }
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
