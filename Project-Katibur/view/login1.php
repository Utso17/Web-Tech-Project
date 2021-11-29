<?php



if(isset($_REQUEST['msg'])){
if($_REQUEST['msg'] == 'null_login'){
echo "null submission...";
}



if($_REQUEST['msg'] == 'invalid'){
echo "invalid username/password";
}



if($_REQUEST['msg'] == 'login_first'){
echo "please login first...";
}
}
?>





<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
<form method="post" action="../controller/logincheck1.php">
<legend>Login</legend>
<p>
<label>Username:</label>
<input type="text" name="username" value="">
</p>
<p>
<label>Password:</label>
<input type="password" name="password" value="">
</p>
<p>
<input type="submit" id="btn" name="submit" value="Log In" />
</p>



</form>
</div>
</body>
</html>