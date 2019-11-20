<?php
        $eid = $_POST['eid'];
        $pass = $_POST['pass'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pno = $_POST['pno'];
        $add = $_POST['addrss'];
        $mail = $_POST['mail'];
        $dob = $_POST['dob'];
        $sql = new mysqli("localhost", "root", "", "web_dev_project");
        $qq = "insert into student values($eid,'$pass','$fname','$lname',$pno,'$add','$mail','$dob');";
        $qr = $sql->query($qq) or die($sql->error);
        echo ("User record added successfully");
        $sql->close();
    ?>