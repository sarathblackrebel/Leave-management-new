<?php
        include('config.php');
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $name=$_POST['name'];
        $id=$_POST['ID'];
        $gender=$_POST['sex'];
        $dept=$_POST['department'];
        $desig=$_POST['designation'];
        $type=$_POST['emp_type'];
        $exp=$_POST['experience'];
        $email=$_POST['email'];
        $doj=$_POST['doj'];
        $mob=$_POST['mobileno'];
        $psw=$_POST['Pass'];

        $dl=$_POST['dl'];
        $cl=$_POST['cl'];
        $hl=$_POST['hl'];
        $vl=$_POST['vl'];
        $ue=$_POST['ue'];
        $co=$_POST['co'];
        $wo=$_POST['wo'];
        $matl=$_POST['matl'];

        $sql="INSERT INTO employee(Name,ID,Sex,Department,Designation,Emp_type,Experience,Email,Doj,Mobile_No	,Password)VALUES('$name','$id','$gender','$dept','$desig','$type','$exp','$email','$doj','$mob','$psw')";
        $sql1="INSERT INTO maxleave(ID,maxDL,maxCL,maxHL,maxVL,maxUE,maxCO,maxWO,maxMATL) VALUES('$id','$dl','$cl','$hl','$vl','$ue','$co','$wo','$matl')";
        $sql2="INSERT INTO leavetype(ID,DL,CL,HL,VL,UE,CO,WO,MATL) VALUES('$id','0','0','0','0','0','0','0','0')";

        if (mysqli_query($conn, $sql) && mysqli_query($conn,$sql1) &&mysqli_query($conn,$sql2)) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
          //printing error details
            echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>" ;
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn). "<br>" ;
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn). "<br>" ;

            //Deleting the employee details from all the 3 tables if updation of any one of the table fails.
            $sql3="DELETE from employee,maxleave,leavetype where employee.ID=leavetype.ID and leavetype.ID=maxleave.ID and employee.ID='$id'";
            mysqli_query($conn, $sql3);
            /*
            DELETE t1, t2, t3, t4 FROM
          table1 as t1
          INNER JOIN  table2 as t2 on t1.id = t2.id
          INNER JOIN  table3 as t3 on t1.id=t3.id
          INNER JOIN  table4 as t4 on t1.id=t4.id
          WHERE  t1.username='Foo' AND t1.id='1';
            */
        }

        mysqli_close($conn);
?>
