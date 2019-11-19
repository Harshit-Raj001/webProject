<?php
   include("login.php");
   $s=$_POST["EID"];
   $con=mysqli_connect("localhost","root","","web_dev_project");
   if(!$con)
   {
       die("could not connect");
   }
   $result=mysqli_query("SELECT subject,score FROM marks WHERE s_id=$s");
   echo "<table>";
   while($row=mysqli_fetch_array($result))
   {
       echo "<tr><td>".$row["subject"]."</td><td>".$row["score"]."</td></tr>";
   }
   echo "</table>";
   mysqli_close($con);
?>