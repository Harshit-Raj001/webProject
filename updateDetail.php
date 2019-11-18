<?php
    include('login.php');
    $sql = new mysqli("localhost", "root", "", "web_dev_project");
    if($sql->connect_error)
        die ("Connection error".$sql->connect_error);
    
?>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <div>
      <form action="self" method="POST">
        <table>
          <tr>
            <td>
              <input
                readonly
                name="txtName"
                id="txtName"
                value="Name"
                style="border:none"
              />
            </td>
            <td>echo $qr['fname'].$qr['lname'];</td>
            <td>
              <input type="text" name="fname" id="fname" />
              <input type="text" name="lname" id="lname" />
            </td>
          </tr>
          <tr>
            <td>
              <input
                readonly
                name="txtPno"
                id="txtPno"
                value="Phone No:"
                style="border:none"
              />
            </td>
            <td>echo $qr['phn_no'];</td>
            <td><input type="text" name="pno" id="pno" /></td>
          </tr>
          <tr>
            <td>echo $dojb;</td>
            <td>echo $qr[$dojb];</td>
            <td><input type="date" name="dojb" id="dojb" /></td>
          </tr>
          <tr>
            <td>
              <input
                readonly
                name="txtEmail"
                id="txtEmail"
                value="Email"
                style="border:none"
              />
            </td>
            <td>echo $qr['email'];</td>
            <td><input type="text" name="email" id="email" /></td>
          </tr>
          <tr>
            <td>
              <input
                readonly
                name="txtAdd"
                id="txtAdd"
                value="Address"
                style="border:none"
              />
            </td>
            <td>echo $qr['address'];</td>
            <td><input type="text" name="addrss" id="addrss" /></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
