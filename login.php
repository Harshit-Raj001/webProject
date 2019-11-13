<?
    $utype = $eid =$dob = $pass = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $utype = $_POST["UType"];
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
        /*
        $qq = "select Password, bdate from student where s_id = $eid";
        $qr = $sql_conn->query($qq);
        if($qr->num_rows == 0){
            //user not found error in the login page
            die("user not found");
        }
        
        $tup = $qr->fetch_assoc()
        if($tup["Password"]===$pass && $tup["bdate"]==$dob){
            //open student's access page
        }
        else{
            //pass or dob is incorrect
            die("Details might be incorrect");
        }*/
        $qq = "select fname from student where s_id=$eid and Password=$pass and bdate=$dob";
        $qr = $sql_conn->query($qq);
        if($qr->num_rows == 0){
            //user details incorrect error on login page
            die("Details might be incorrect");
        }
        else{
            //open students access page
        }
    }
    if($utype == "admin"){
        $qq = "select fname from admin where e_id=$eid and Password=$pass";
        $qr = $sql_conn->query($qq);
        if($qr->numm_row == 0){
            //user details incorrect error on login page
            die("Details might be incorrect");
        }
        else{
            //open admin's access page
        }
    }
    if($utype == "teacher"){
        $qq = "select fname from teacher where e_id=$eid and Password=$pass";
        $qr = $sql_conn->query($qq);
        if($qr->num_rows == 0){
            //user details incorrect error on login page
            die("Details might be incorrect");
        }
        else{
            //open teacher's acccess page
        }
    }
    if($utype == "non_staff"){
        $qq = "select fname from non_staff where e_id=$eid and Password=$pass";
        $qr = $sql_conn->query($qq);
        if($qr->num_rows == 0){
            //user details incorrect error on login page
            die("Details might be incorrect");
        }
        else{
            //open non_staff's access page
        }
    }
    $sql_conn->close();
?>