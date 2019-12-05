<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>HOD</title>
  </head>
  <style>

        form {
          padding: 10px;
          border: 2px solid black;
          background-color: #efefef;
          height: 100%;
        }

        input[type=date]{
          padding: 5px;
          width: 200px;
        }
        select{
          padding: 5px;
          width: 130px;
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
           <li><a class="current" href="hodapply.php">Apply Leave</a></li></li>
           <li><a href="requests.php">Leave Requests</a></li></li>
           <li><a href="hodpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <?php
         include("session.php");
        ?>

        <form method="POST"action="applyleave.php">
          <center><font size=4><b>Apply Leave</b></font></center><br><br>
           <label>From:</label>
           <input type="date" name="from" placeholder="DD/MM/YYYY" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <label>To:</label>
           <input type="date" name="to" placeholder="DD/MM/YYYY" required><br><br>
           <tr>
           <td><label>Type of leave</label></td>
           <td><select name="LEAVE" id="LEAVE" required>
            <option value="">Select..</option>
            <option value="CL">CL</option>
            <option value="DL">DL</option>
            <option value="ML">MATL</option>
            <option value="VL">VL</option>
            <option value="HL">HL</option>
            <option value="UL">UL</option>
          </select></td>
          </tr><br><br>
              <label>Reason for leave </label>
              <textarea rows="2" cols="20" name="reason"></textarea><br><br>
              <label>Class arrangements</label><br>
                <td>Hour</td>
                <td><select name="Hour" id="Hour">
                  <option value="">Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
               </select></td>
               <td>&nbsp;&nbsp;Semester</td>
               <td><select name="Semester" id="Semester">
                 <option value="">Select</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
                <option value="S5">S5</option>
                <option value="S6">S6</option>
                <option value="S7">S7</option>
                <option value="S8">S8</option>
              </select></td>
              <td>&nbsp;&nbsp;Faculty Name</td>
              <td><select name="FN" id="FN">
                <option value="FO">Select</option>
                <?php
                if(mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)) {
                  echo $row['Name'];
                  print("<option value='".$row["Name"]."'>".$row["Name"]."</option>");

                  }
                }

               ?>

          </select>
        </td>

                <br><br><br><br>
              <input type="submit" value="SUBMIT" >
        </form> <br><br>


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
