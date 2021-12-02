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
<link rel="stylesheet" href="../asset/s.css">
</head>
<body>
<form method="post" action="../controller/logincheck1.php">
<p>
<label>Username:</label>
<input type="text" id="username" name="username" value="" required onkeyup="f5()">
<p id="Username" class="form-forget"> </p> 
</p>

<p>
<label>Password:</label>
<input type="password" id="password" name="password" value="" required  onkeyup="f6()">
<p id="passwordjs" class="form-forget"> </p>  
<hr/>
</p>

<p>
<input type="submit" name="submit" value="Log In" />
</p>
</form>

<script type="text/javascript" src="../asset/valid.js"></script>
</div>
</body>
</html>