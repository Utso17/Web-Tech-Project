<html>
<head>
	<title>EvMLogin</title>

    <link rel="stylesheet" href="../asset/style.css">

</head>
<body>

    <script type="text/javascript" src="valid.js"></script>

	<?php  require_once'../model/Links.php' ?>

  <?php require_once'../controller/emlogincheck.php' ?>


	<form name="myform" action="" method="post" onsubmit="validateform()">
        <fieldset>
            <legend align="center">Login</legend>
            <table align="center">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" id="username" onkeyup="checkUsername()" onblur="checkUsername()">  <span id="usernameError" style="color: #FF0000;"> </span></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" > <span id="passwordErr" style="color: #FF0000;">  </span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

	<?php  require_once'../model/Credit.php' ?>
</body>
</html>