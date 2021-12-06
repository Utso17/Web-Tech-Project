"use strict"
//login

function f5(){

    let data= document.getElementById('username').value;
    if(data == ''){
        document.getElementById('Username').innerHTML = 'invalid info.insert carefully';     
    }
    else if(data >='0' && data <='9' || data=='!'){
        document.getElementById('Username').innerHTML = "insert alphabet";
    }
    else{
        document.getElementById('Username').innerHTML = data;
    }

}

    //password

function f6(){

    let data= document.getElementById('password').value;
    if(data == ''){
        document.getElementById('passwordjs').innerHTML = 'invalid data';       
    }
    else if(data.length <5){
        document.getElementById('passwordjs').innerHTML = 'Password is weak';   
    }
    else if (data.length >4 && data.length <7){
       document.getElementById('passwordjs').innerHTML = 'Password is medium';
    }
    else{
        document.getElementById('passwordjs').innerHTML = 'Password is strong';
    }

}



function f7(){
let data= document.getElementById('email').value;
if(data == ''){
document.getElementById('emailjs').innerHTML = 'invalid data';
}
else{
document.getElementById('emailjs').innerHTML = data;

}
}



function f8(){
let data= document.getElementById('phone').value;
if(data == ''){
document.getElementById('phonejs').innerHTML = 'invalid data';
}
else{
document.getElementById('phonejs').innerHTML = data;

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
    xhttp.open("GET", "getalluser.php?q="+str, true);
    xhttp.send();
  }





  function showallreceiver(str) {
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
    xhttp.open("GET", "getallreceiver.php?q="+str, true);
    xhttp.send();
  }






function showallevm(str) {
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
    xhttp.open("GET", "getallevm.php?q="+str, true);
    xhttp.send();
  }
