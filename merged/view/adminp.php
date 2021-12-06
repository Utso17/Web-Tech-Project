  <?php

  session_start();


  require_once('../model/usersService.php');
  $userlist = getadminprofile();
  if(isset($_REQUEST['submit']))
  {

  }

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../asset/s.css">
  
  <title>View Admin's Profile</title>

  </head>
  <body class="rr">
  <form method="post" >





  <fieldset>
  <center>
  <h3>Admin Details</h3>
 

  <table border="1">
  <tr>
  <td>Username</td>
  <td>Password</td>
  <td>Email</td>
  <td>Phone</td>
  <td>Action</td>
  </tr>


  <?php

  for($i=0; $i < count($userlist); $i++) {
  ?>
  <tr>
  <td><?= $userlist[$i]['username'] ?></td>
  <td><?= $userlist[$i]['password'] ?></td>
  <td><?= $userlist[$i]['email'] ?></td>
  <td><?= $userlist[$i]['phone'] ?></td>
  <td><a href="editadmin.php?username=<?= $userlist[$i]['username'] ?>&password=<?= $userlist[$i]['password'] ?>&email=<?= $userlist[$i]['email'] ?>&phone=<?= $userlist[$i]['phone'] ?>"> EDIT</a></td>
  </tr>


  <?php } ?>



  </center>


  </table>
  </fieldset>


  <h3 align="left"><a href="../view/home1.php"> <input type="button" value="Back" ></a> </h3>

  <h3 align="right"><a href="../controller/logout1.php"> <input type="button" value="Logout" ></a> </h3>
  <center>

  </center>

  </form>



  <script type="text/javascript" src="../asset/script.js"></script>

  </body>
  </html>