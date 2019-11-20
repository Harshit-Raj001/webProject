<?php
    $s_id = $_POST['s_id'];
    $sql = new mysqli("localhost", "root", "", "web_dev_project");
    if($sql->connect_error)
      die("Connection failed".$sql->connect_error);
    $qq = "select s_id, fname, lname, address, phone_no, email, DOB from student where s_id=$s_id;";
    $qr = $sql->query($qq) or die($sql->error);
    $qr = $qr->fetch_assoc();
    if($qr['fname']=="")
      die("No user with given Enrollment no");
    echo "<html>
    <head>
      <title></title>
    </head>
    <body>
      <div>
        <table>
          <tr>
            <td>Enrollment no:</td>
            <td>".$qr['s_id']."</td>
            <br />
          </tr>
          <tr>
            <td>Name:</td>
            <td>".$qr['fname']." ".$qr['lname']."</td>
            <br />
          </tr>
          <tr>
            <td>Date of Birth:</td>
            <td>".$qr['DOB']."</td>
            <br />
          </tr>
          <tr>
            <td>Email:</td>
            <td>".$qr['email']."</td>
            <br />
          </tr>
          <tr>
            <td>Phone no:</td>
            <td>".$qr['phone_no']."</td>
            <br />
          </tr>
          <tr>
            <td>Address:</td>
            <td>".$qr['address']."</td>
            <br />
          </tr>
        </table>
      </div>
    </body>
  </html>
  ";
  $sql->close();
?>