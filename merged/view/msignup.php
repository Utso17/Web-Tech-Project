<html>
<head>
	<title>Signup Page</title>

	<style>.error {color: #FF0000;}</style>

    <script type="text/javascript">
        function validateform()
    {  
      var username=document.myform.username.value;  
      var password=document.myform.password.value;  
      var email=document.myform.email.value;
      var phone=document.myform.phone.value;
      
        
      if (username==null || username==""){  
        alert("Name can't be blank");  
        return false;  
      }else if(password.length<4){  
        alert("Password must be at least 4 characters long.");  
        return false;  
      }
      else if (email==null || email=="") {
        alert("Email can not be blank");
        return false;
      }
      else if (phone==null || phone=="") {
        alert("User PhoneNumber can not be blank");
        return false;
      }

    }
    
    function checkName() {
  if (document.getElementById("username").value == "") {
        document.getElementById("usernameErr").innerHTML = "Name can't be blank";
        document.getElementById("usernameErr").style.color = "red";
        document.getElementById("username").style.borderColor = "red";
  }else{
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("username").style.borderColor = "green";
  }
  
}

function checkEmail() {
   
    if (document.getElementById("email").value == "") 
    {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
    }
   
    else
    {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
    }
    
  }

  function checkPhone() {
    if (document.getElementById("phone").value == "") {
          document.getElementById("NumberErr").innerHTML = "PhoneNumber can't be blank";
          document.getElementById("NumberErr").style.color = "red";
          document.getElementById("phone").style.borderColor = "red";
    }else{
          document.getElementById("NumberErr").innerHTML = "";
          document.getElementById("phone").style.borderColor = "green";
    }
    
  }

    function checkPassword(){
            if (document.getElementById("password").value == "") {
                document.getElementById("passwordErr").innerHTML = "Password can't be blank";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "red";
            }else if(document.getElementById("password").value.length<4){
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
  <?php require_once'../controller/msignupcheck.php' ?>

	<form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="validateform()">
		<fieldset align="center">
			<legend>Signup</legend>
			<table align="center">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>phone:</td>
					<td><input type="phone" name="phone" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>

			<p>Already have an account? &nbsp;&nbsp;&nbsp; <a href="mlogin.php">Login</a></p>

		</fieldset>
	</form>

	<?php  require_once'../model/Credit.php' ?>  
</body>
</html>