<?php
    include("login.php");
    $sql=new mysqli("localhost", "root", "", "web_dev_project");
    if($sql->connect_error) 
        die("Connection error".$sql->connect_error);
    if($user == "student"){
        $dojb = "dob";
        $eid = "s_id";
    }
    else{
        $dojb = "doj";
        $eid = "e_id";
    }
    $qq = "select fname, lname, $dojb, address, email, phn_no from $user where $eid = $uid";
    $qr = $sql->query($qq);
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
        <td>".$qr['phn_no']."</td>
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
