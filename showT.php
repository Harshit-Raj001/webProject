<?php
    $t_id = $_POST['t_id'];
    $sql = new mysqli("localhost", "root", "", "web_dev_project");
    if($sql->connect_error)
      die("Connection failed".$sql->connect_error);
    $qq = "select e_id, fname, lname, address, phone_no, email, date_of_joining from teacher where e_id=$t_id;";
    $qr = $sql->query($qq) or die($sql->error);
    $qr = $qr->fetch_assoc();
    if($qr['fname']=="")
      die("No user with given Employee ID");
    echo "<html>
    <head>
      <title></title>
    </head>
    <body>
      <div>
        <table>
          <tr>
            <td>Employee ID:</td>
            <td>".$qr['e_id']."</td>
            <br />
          </tr>
          <tr>
            <td>Name:</td>
            <td>".$qr['fname']." ".$qr['lname']."</td>
            <br />
          </tr>
          <tr>
            <td>Date of Joining:</td>
            <td>".$qr['date_of_joining']."</td>
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