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
          document.getElementById("usernameError").innerHTML = "";
          document.getElementById("username").style.borderColor = "green";
    }
    
  }

    function checkPassword(){
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
                document.getElementById("password").style.borderColor = "green";
            }
        }






function showalluser(str) {
            var xhttp;
            if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xhttp.open("GET", "CharityList.php?q="+str, true);
            xhttp.send();
        }