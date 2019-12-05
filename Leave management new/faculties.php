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
       <li><a class="current" href="faculties.php">Leave Status</a></li>
       <li><a href="leave.php">Apply for Leave</a></li>
       <li><a href="applied.php">Applied Leave(s)</a></li>
       <li><a href="rule.php">Leave Rules</a></li>
       <li><a href="facpass.php">Change Password</a></li>
     </ul>
   </nav>
  </div>

  <div class="content">
    <h1 style="text-align: center">Leave Summary </h1>

    <?php
      include("session.php");
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $id=$_SESSION['ID'];
      $sql = "SELECT * from leavetype inner join maxleave ON leavetype.ID= maxleave.ID and leavetype.ID='$id'";
      $result=mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Type of Leave</th><th>No.of Leave Taken </th><th>Maximum Leaves</th><th>Available Leaves</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><th>DL</th><td>" . $row["DL"]. "</td><td>" . $row["maxDL"]. "</td><td>" .($row["maxDL"]-$row["DL"]). "</td></tr>";
          echo "<tr><th>CL</th><td>" . $row["CL"]. "</td><td>" . $row["maxCL"]. "</td><td>" .($row["maxCL"]-$row["CL"]). "</td></tr>";
          echo "<tr><th>HL</th><td>" . $row["HL"]. "</td><td>" . $row["maxHL"]. "</td><td>" .($row["maxHL"]-$row["HL"]). "</td></tr>";
          echo "<tr><th>VL</th><td>" . $row["VL"]. "</td><td>" . $row["maxVL"]. "</td><td>" .($row["maxVL"]-$row["VL"]). "</td></tr>";
          echo "<tr><th>UE</th><td>" . $row["UE"]. "</td><td>" . $row["maxUE"]. "</td><td>" .($row["maxUE"]-$row["UE"]). "</td></tr>";
          echo "<tr><th>CO</th><td>" . $row["CO"]. "</td><td>" . $row["maxCO"]. "</td><td>" .($row["maxCO"]-$row["CO"]). "</td></tr>";
          echo "<tr><th>ML</th><td>" . $row["ML"]. "</td><td>" . $row["maxML"]. "</td><td>" .($row["maxML"]-$row["ML"]). "</td></tr>";
          echo "<tr><th>MATL</th><td>" . $row["MATL"]. "</td><td>" . $row["maxMATL"]. "</td><td>" .($row["maxMATL"]-$row["MATL"]). "</td></tr>";
          echo "<tr><th>WO</th><td>" . $row["WO"]. "</td><td>" . $row["maxWO"]. "</td><td>" .($row["maxWO"]-$row["WO"]). "</td></tr>";
          echo "<tr><th></th><th>LOP</th><th></th><th>" . $row["LOP"]. "</th></tr>";
        //  $lop=$row["LOP"];
        }
        //echo "<tr><th>LOP</th><th>$lop</th></tr>";

          echo "</table>";
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
