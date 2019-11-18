<?php
    $sql = new mysqli("localhost", "root", "", "temp");
    if($sql->connect_error)
        die("Connection failed".$sql->connect_error);
    $t = 100;
    $t2 = 0;
    $strFN="sfname";
    $strLN="slname";
    $strPass="pass";
    while($t > 0){
        $no = 10000000-$t-$t2;
        $q = 'insert into student(s_id, pass, fname, lname, phone_no, address, email, DOB)values('.($t+$t2).','.($strPass.$t).','.($strFN.$t2).','.($strLN.$t2).','.($no).',"XYZ",'.($strFN.$t.$t2).'@nomail.com,"1998-2-23")';
        $qr = $sql->query($q);
        $t = $t-1;
        $t2 = $t2+1;
        echo ($t2+1).'works';
    }
    $sql->close();
?>