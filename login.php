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
        }
    }
    if($utype == "admin"){}
    if($utype == "teacher"){}
    if($utype == "non_staff"){}
>