<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>HOD</title>
  </head>

  <style>


  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 30%;
  }

  /* The Close Button */
  .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
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
           <li><a href="hod.php">Leave Summary</a></li></li>
           <li><a href="ViewbyDpt.php">Faculty Leave</a></li></li>
           <li><a href="hodapply.php">Apply Leave</a></li></li>
           <li><a class="current" href="requests.php">Leave Requests</a></li></li>
           <li><a href="hodpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">

        <?php
        include("session.php");
        $dept=$_SESSION['Department'];
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql="SELECT * FROM applyleave INNER JOIN employee ON employee.ID=applyleave.ID AND applyleave.Dept ='$dept'";
        $result=mysqli_query($conn,$sql);
        echo $row["Name"];
        if (mysqli_num_rows($result) > 0) {
          echo "<table><tr><th>Name</th><th>From</th><th>To</th><th>Leave Type</th><th>Reason</th><th>Hour</th><th>Semester</th><th>Faculty</th><th>Operations</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Start"]. "</td><td>" . $row["EndLeave"]."</td><td>" . $row["Type"]."</td><td>" . $row["Reason"]."</td><td>" . $row["hour"]."</td><td>" . $row["sem"]."</td><td>" . $row["faculty"]. "</td>";
              ?>
              <td><button type="submit" class="btn-green" onclick="msg()">Accept</button><br><br>
              <button type="submit" class="btn-red" onclick="mdl()">Reject</button></td></tr>
              <?php
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


      <div id="myModal" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
        <label><b>Reject with Comment</b></label>
        <textarea rows="3" cols="10" name="hodreject" required></textarea>
        <button type="submit" class="btn-red">Reject</button>

        </div>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        //var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        //btn.onclick = function() {
        function mdl(){
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
        }
        </script>



    </div>

    <footer>
      <p>copyright &copy;</p>
    </footer>
  </body>
  </html>


  <script>
  function msg() {
      alert("Accepted..! \nRequest passed to DD ");

  }
  </script>
