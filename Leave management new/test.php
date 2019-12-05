<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Admin</title>
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
           <li><a href="admin.php">View Employee</a></li>
           <li><a href="AddEmployee.php">Add Employee</a></li>
           <li><a class="current" href="ManageEmployee.php">Manage Employee</a></li>
           <li><a href="adminpass.php">Change Password</a></li></li>
         </ul>
       </nav>
      </div>

      <div class="content">
        <?php include('session.php'); ?>
      <!--  <form method="POST"action="#">-->
        <section id="box" style="margin-left:10%">
          <div class="indent">
                <form action=" " method="POST">
                      <label> Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</label>
                      <input type="text" name="id" placeholder="Enter Employee ID" required><br><br><br>
                      <button type="button"  onclick="mdl1()">Update </button>
                      <button type="button"  onclick="mdl2()" style="margin-left:100px;"> Delete</button><br>
                </form>
          </div>
        </section>
    <!--  </form>-->

      </div>

      <div class="profile">
        <?php
          include 'profile.php';
         ?>
    </div>


      <div id="Modal_delete" class="modal">
        <div class="modal-content">
        <!--<span class="close">&times;</span><br><br>-->
        <span class="close" onclick="close_mdl2()">&times;</span>
        <label><b>Do You Really Want to Delete?</b></label><br><br>
        <!--<button type="submit" class="btn-red">cancel</button>-->
        <button type="submit" class="btn-red" style="margin-left:100px;">Delete</button><br><br>
        </div>
      </div>


      <!--Modal for update -->
      <div id="Modal_update" class="modal">
        <div class="modal-content">
        <span class="close" onclick="close_mdl1()">&times;</span>
        <div class="container">
          <form action="home.php" method="POST">
            <label><b>Employee ID</b></label>
            <input type="text" placeholder="Enter User ID" name="id" value="<?php echo $_SESSION['ID'] ?>" required>
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" value="<?php echo $_SESSION['Name'] ?>" required>
            <label><b>Employee Type</b></label>
            <input type="text" placeholder="Temporary/Permanent" name="emp_type" value="<?php echo $_SESSION['Emp_type'] ?>" required>
            <button type="submit" class="modalbutton" name="update">Update</button><br>
          </form>
        </div>
      </div>
    </div>



      <!--<div id="Modal_update" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span><br><br>
        <label><b>wanna update?</b></label><br><br>
        <button type="submit" class="btn-red" style="margin-left:100px;">Update</button><br><br>
        </div>
      </div>-->


      <!--<script>
          var modal = document.getElementById('Modal_delete');
          var modal1 = document.getElementById('Modal_update');
          var span = document.getElementsByClassName("close")[0];
          function mdl1(){
          modal1.style.display = "block";
          span.onclick = function() {
            modal1.style.display = "none";
          }
          }
          function mdl2(){
          modal.style.display = "block";
          span.onclick = function() {
            modal.style.display = "none";
          }
          }

          window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";

          }
          /*window.addEventListener("click", function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }*/
          if (event.target == modal1) {
            modal1.style.display = "none";
          }
          }
      </script>
-->

      <script>
          /*function mdl1() {
              document.getElementById('Modal_update').style.display = "block";
          }*/
          function mdl1() {
            var id = document.getElementsByName("id")[0].value;
            if(id != ''){
              document.getElementById('Modal_update').style.display = "block";
            }else{
              alert('Employee ID can not be empty.');
            }
          }
          function close_mdl1() {
              document.getElementById('Modal_update').style.display = "none";
          }
          window.onclick = function(event) {
          if (event.target == document.getElementById('Modal_update')) {
            document.getElementById('Modal_update').style.display = "none";
          }
        }
      /*  function mdl2() {
              document.getElementById('Modal_delete').style.display = "block";
        }*/
        function mdl2() {
          var id = document.getElementsByName("id")[0].value;
          if(id != ''){
            document.getElementById('Modal_delete').style.display = "block";
          }else{
            alert('Employee ID can not be empty.');
          }
        }

        function close_mdl2() {
              document.getElementById('Modal_delete').style.display = "none";
        }
        window.addEventListener("click", function(event) {
          if (event.target == document.getElementById('Modal_delete')) {
            document.getElementById('Modal_delete').style.display = "none";
          }
        })

      </script>

    </div>



    </div>

    <footer>
      <p>copyright &copy;</p>
    </footer>
  </body>
</html>
