<html>
<head>
	<title>Login Page</title>
	<script>
		function validateform()
           {  

                 var password=document.myform.password.value;  

                 var username=document.myform.username.value;
      
        
                if (username==null || username=="")
                    {  
                      alert("User Name can't be blank");  
                     return false;  
                    }
                else if(password==null || password=="")
                    {  
                      alert("Password can't be blank");  
                      return false;  
                    }
           }
             
        function checkUsername() {
    if (document.getElementById("username").value == "") {
          document.getElementById("usernameError").innerHTML = "Username can't be blank";
          document.getElementById("usernameError").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
    }else{
          document.getElementById("username").innerHTML = "";
          document.getElementById("username").style.borderColor = "green";
    }
    
  }

    function checkPassword(){
            if (document.getElementById("password").value == "") {
                document.getElementById("passwordErr").innerHTML = "Password can't be blank";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "red";
            }else if(document.getElementById("password").value.length<8){
                document.getElementById("password").style.borderColor = "red";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("passwordErr").innerHTML = "Password must be at least 4 characters long.";
            }
            else{
                document.getElementById("passwordErr").innerHTML = "";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "black";
            }
        }
	</script>
</head>
<body>

	<?php  require_once'../model/Links.php' ?>

	<?php if(isset($msg))
{?>
            <?php echo $msg;?>
        <?php } ?>
  <?php require_once'../controller/mlogincheck.php' ?>

	<form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="validateform()">
		<fieldset>
			<legend align="center">Login</legend>
			<table align="center">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="" nkeyup="checkUsername()" onblur="checkUsername()">  <span id="usernameError" style="color: #FF0000;"> </span></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="" onkeyup="checkPassword()" onblur="checkPassword()" > <span id="passwordErr" style="color: #FF0000;"> </span></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						
						<p>Don't have an account? &nbsp;&nbsp;&nbsp; <a href="msignup.php">Signup</a></p>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	<?php  require_once'../model/Credit.php' ?>
</body>
</html>

