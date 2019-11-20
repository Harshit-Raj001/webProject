<html>
<body>
<?php
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
        $qq = "select fname from student where s_id=$eid and Password=$pass and bdate=$dob";
        $qr = $sql_conn->query($qq);
        if($qr->num_rows == 0){
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
        else{
            header("Location: student_main.htm");
            exit;
        }
    }
    if($utype == "admin"){
        $qq = "select fname from admin where e_id=$eid and Password=$pass";
        $qr = $sql_conn->query($qq);
        if(!$qr){
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
        else{
            header("Location: admin_main.htm");
            exit;
        }
    }
    if($utype == "teacher"){
        $qq = "select fname from teacher where e_id=$eid and Password=$pass";
        $qr = $sql_conn->query($qq);
        if($qr->num_rows == 0){
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
        else{
            header("Location: teacher_main.htm");
            exit;
        }
    }
    if($utype == "non_staff"){
        $qq = "select fname from non_staff where e_id=$eid and Password=$pass";
        $qr = $sql_conn->query($qq);
        if($qr->num_rows == 0){
            //user details incorrect error on login page
            echo "User details might be incorrect <a href='login.htm'>go back</a>";
            die;
        }
        else{
            header("Location: non_staff_main.htm");
            exit;
        }
    }
    $sql_conn->close();
?>
</body>
</html>