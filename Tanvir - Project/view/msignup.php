<html>
<head>
	<title>Signup Page</title>

  <link rel="stylesheet" href="../asset/style.css">

    <script type="text/javascript">
        function validatesignup()
    {  
      var username=document.myform.username.value;  
      var password=document.myform.password.value;  
      var email=document.myform.email.value;
      var phone=document.myform.phone.value;
      
        
      if (username==null || username==""){  
        alert("Name can't be blank");  
        return false;  
      }else if(password.length<5){  
        alert("Password must be at least 5 characters long.");  
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
    
    function cName() {
  if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "Username can't be blank";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
    }else{
          document.getElementById("usernameErr").innerHTML = "";
          document.getElementById("username").style.borderColor = "green";
    }
  
}

function cEmail() {
   
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

  function cPhone() {
    if (document.getElementById("phone").value == "") {
          document.getElementById("NumberErr").innerHTML = "PhoneNumber can't be blank";
          document.getElementById("NumberErr").style.color = "red";
          document.getElementById("phone").style.borderColor = "red";
    }else{
          document.getElementById("NumberErr").innerHTML = "";
          document.getElementById("phone").style.borderColor = "green";
    }
    
  }

    function cPassword(){
            if (document.getElementById("password").value == "") {
                document.getElementById("passwordErr").innerHTML = "Password can't be blank";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "red";
            }else if(document.getElementById("password").value.length<5){
                document.getElementById("password").style.borderColor = "red";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("passwordErr").innerHTML = "Password must be at least 5 characters long.";
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

  <?php require_once'../controller/msignupcheck.php' ?>

	<form name="myform" action="" method="post" onsubmit="validatesignup()">
		<fieldset>
			<legend align="center">Signup</legend>
			<table align="center">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" id="username" onkeyup="cName()" onblur="cName()">  <span id="usernameErr" style="color: #FF0000;"> </span></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password" onkeyup="cPassword()" onblur="cPassword()" > <span id="passwordErr" style="color: #FF0000;"> </span></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" id="email" onkeyup="cEmail()" onblur="cEmail()" > <span id="emailErr" style="color: #FF0000;"> </span></td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td><input type="int" name="phone" id="phone" onkeyup="cPhone()" onblur="cPhone()" > <span id="NumberErr" style="color: #FF0000;"> </span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>

			</table>

       <p align="center">Already have an account? &nbsp;&nbsp;&nbsp; <a href="mlogin.php">Login</a></p>

      

		</fieldset>
	</form>

	<?php  require_once'../model/Credit.php' ?>  
</body>
</html>