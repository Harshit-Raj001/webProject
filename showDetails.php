<?php
    include("login.php");
    if(!isset($_SESSION))
        session_start();
    $uid = $_SESSION['eid'];
    $user = $_SESSION['user'];
    $sql=new mysqli("localhost", "root", "", "web_dev_project");
    if($sql->connect_error) 
        die("Connection error".$sql->connect_error);
    if($user == "student"){
        $dojb = "dob";
        $eid = "s_id";
        $eidd = "Enrollment no";
        $dojbFull = "Date of Birth";
    }
    else{
        $dojb = "date_of_joining";
        $eid = "e_id";
        $eidd = "Employee ID";
        $dojbFull = "date of joining";
    }
    $qq = "select fname, lname, $dojb, address, email, phone_no from $user where $eid = $uid";
    $qr = $sql->query($qq) or die($sql->error   );
    $qr = $qr->fetch_assoc();
    echo "<table>
    <tr>
        <td>".$eidd.": </td>
        <td>".$uid."</td>
    </tr>
    <tr>
        <td>Name : </td>
        <td>".$qr['fname'].$qr['lname']."</td>
    </tr>
    <tr>
        <td>Email : </td>
        <td>".$qr['email']."</td>
    </tr>
    <tr>
        <td>Phone no. : </td>
        <td>".$qr['phone_no']."</td>
    </tr>
    <tr>
        <td>".$dojbFull.": </td>
        <td>".$qr[$dojb]."</td>
    </tr>
    <tr>
        <td>Address : </td>
        <td>".$qr['address']."</td>
    </tr>
</table>"
?>
