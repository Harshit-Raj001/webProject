<?php
    include("login.htm");
    $s=$_POST["EID"];
    $con=mysqli_connect("localhost","root","","web_dev_project");
    if (!$con)
    {
        die("connection failed");
    }
    $result=mysqli_query($con,"SELECT  attDate,status FROM ns_att where e_id=$s;");
    echo "<table>";
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr><td>".$row["attDate"]."</td>"."<td>".$row["status"]."</td></tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
 
 