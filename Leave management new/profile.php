<?php
    include_once 'session.php';
    include 'config.php';
    if(isset($_POST['update'])){
      $mob=$_POST['mobile'];
      $email=$_POST['email'];
      $id=$_SESSION['ID'];
      if(empty($_FILES['image']['name'])){
        $file_name=$_SESSION['Image'];
      }
      else{
        $file_name=$_FILES['image']['name'];
        $file_tmp_name=$_FILES['image']['tmp_name'];
        $target_dir="Uploads/";
        $file_path=$target_dir.$file_name;
        move_uploaded_file($file_tmp_name,$file_path);
        $_SESSION['Image']=$file_name;
      }
        $sql="UPDATE employee SET Mobile_No='$mob',Email='$email',Img='$file_name' WHERE ID='$id'";
        mysqli_query($conn,$sql);
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .modal input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button.modalbutton{
        background-color: #1c527d;
        color: white;
        font-weight: bold;
        font-size: 16px;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        width: 100%;
    }
    .edit_button button{
      width: 100%;
      margin-top: 50px;
    }
    .profile img{
      width: 270px;
      height: 270px;
      border-radius: 50%;
    }
    </style>
  </head>
  <body>
      <?php
        $image=$_SESSION['Image'];
        if($image=="")
          echo "<img src='./IMG/avatar.png' alt='Avatar'>";
        else
          echo "<img src='Uploads/$image' alt='Avatar'>";
      ?>
      <div class="profile-content" style="text-align:center">
        <h3><b><?php echo $_SESSION['Name'] ?></b></h3>
        <?php
          $desig=$_SESSION['Designation'];
          $dept=$_SESSION['Department'];
          if($desig=="Admin")
            echo "<p>Admin</p>";
           else if($desig=="DD"){
            echo "<p>Deputy Director</p>";
          }
          else if($desig=="Principal"){
           echo "<p>Principal</p>";
         }
          else if($desig=="HOD"){
            echo "<p>HOD</p>";
            echo "<p>$dept</p>";
          }
          else{
            echo "<p>Assistant Professor,$dept</p>";
            //echo $dept;
          }
          echo "<p>UKFCET</p>";
         ?>

      </div>
      <div class="edit_button">
        <button id="myBtn1" onclick="openModal()">Edit Profile</button>
      </div>

    <!--Modal for Edit Profile -->
    <div id="myModal1" class="modal">
      <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div class="container">
        <form action=" " method="POST" enctype="multipart/form-data">
              <label><b>Mobile Number</b></label>
              <input type="text" placeholder="Enter Mobile Number" name="mobile" value="<?php echo $_SESSION['Mob'] ?>" required>
              <label><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['Email'] ?>" required>
              <label><b>Image</b></label><br>
              <input type="file" name="image"><br><br>
              <button type="submit" class="modalbutton" name="update">Update</button><br>
        </form>
      </div>
    </div>
  </div>

  <script>
      function openModal() {
          document.getElementById('myModal1').style.display = "block";
      }
      function closeModal() {
          document.getElementById('myModal1').style.display = "none";
      }
      window.onclick = function(event) {
      if (event.target == document.getElementById('myModal1')) {
        document.getElementById('myModal1').style.display = "none";
      }
    }

  </script>
  </body>
</html>
