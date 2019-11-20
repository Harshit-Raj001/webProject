<?php
    $emp=$_POST["employee"];
    $id=$_POST["cid"];
    $update=$_POST["fields"];
    $new=$_POST["updated"];

    if(isset($_POST["submit"]))
    {
        if(isset($_POST["fields"]))
        {
            $con=mysqli_connect("localhost","root","","web_dev_project");
            if(!$con)
            {
                die("unable to connect");
            }
            if($emp=="teacher" or $emp=="non_staff")
            {
                $sql="UPDATE $emp SET $update='$new' WHERE e_id=$id";
            }
            else
            {
                $sql="UPDATE student SET $update='$new' WHERE s_id=$id";
            }
            if(mysqli_query($con,$sql))
            {
                echo "Updated Successfully!!";
            }
            else
            {
                echo "System Error!!";
            }
            mysqli_close($con);
            
        }
    }

?>