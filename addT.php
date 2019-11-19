<?php
        $eid = $_POST['eid'];
        $pass = $_POST['pass'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pno = $_POST['pno'];
        $add = $_POST['addrss'];
        $mail = $_POST['mail'];
        $doj = $_POST['doj'];
        $sql = new mysqli("localhost", "root", "", "web_dev_project");
        $qq = "insert into teacher values($eid,'$pass','$fname','$lname',$pno,'$add','$mail','$doj');";
        $qr = $sql->query($qq);
        $sql->close();
    ?>