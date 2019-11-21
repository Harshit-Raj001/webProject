<html>
<body>
<?php
    if(!isset($_SESSION))
        session_start();
    $utype = $eid =$dob = $pass = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $utype = $_POST["Utype"];
        $eid = $_POST["EID"];
        if($utype == "student"){
            $dob = $_POST["DOB"];
        }
        $pass = $_POST["pass"];
    }
    $sql_conn = new mysqli("localhost", "root", "", "web_dev_project");
    if($sql_conn->connect_error){
        die("connection failed: ".$sql_conn->connect_error);
    }
    if($utype == "student"){        
        $qq = "select fname from student where s_id=$eid and pass='$pass' and DOB='$dob'";
        $qr = $sql_conn->query($qq) or die($sql_conn->error);
        $_SESSION['eid'] = $eid;
        $_SESSION['user'] = $utype;
        $qr = $qr->fetch_assoc();
        if($qr['fname']){
            header("Location: student_main.htm");
            exit;
        }
        else{
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
    }
    if($utype == "admin"){
        $qq = "select fname from admin where e_id=$eid and pass='$pass'";
        $qr = $sql_conn->query($qq) or die($sql_conn->error);
        $_SESSION['eid'] = $eid;$_SESSION['user'] = $utype;
        $row = $qr->fetch_assoc();
        if($row['fname']){
            header("Location: admin_main.htm");
            exit;
        }
        else{
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
    }
    if($utype == "teacher"){
        $qq = "select fname from teacher where e_id=$eid and pass='$pass'";
        $qr = $sql_conn->query($qq) or die($sql_conn->error);
        $_SESSION['eid'] = $eid;$_SESSION['user'] = $utype;
        $row = $qr->fetch_assoc();
        if($row['fname']){
            header("Location: teacher_main.htm");
            exit;
        }
        else{
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
    }
    if($utype == "non_staff"){
        $qq = "select fname from non_staff where e_id=$eid and pass='$pass'";
        $qr = $sql_conn->query($qq) or die($sql_conn->error);
        $_SESSION['eid'] = $eid;$_SESSION['user'] = $utype;
        $row = $qr->fetch_assoc();
        if($row['fname']){
            header("Location: non_staff_main.htm");
            exit;
        }
        else{
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
    }
    $sql_conn->close();
?>
</body>
</html>