<?php 
  session_start();
  if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Member</title>
</head>
<body>

  <h3 align="right"><a href="../controller/logout.php"> Logout</a></h3>

  <h1 align="center">Funding for a better future!</h1>

        <table>
        <tr>
            <tr height="50px">
            
            <h2 align="center">Become a member today!</h2>
            <h4 align="center">Fundraising membership is the key to professional fundraising success.We support professional fundraisers and protect and promote the fundraising sector.We want you to be the best so that you raise awareness and more funds for your cause, enabling you to make a bigger impact.</h4>

        </tr>
        </table>


        <table border="2" align="center">
    <tr align="center">
      <td><h3>Membership</h3></td>
      
    </tr>
    <tr>
      <td>................</td>
    </tr>

    <tr>
      <td>..................</td>
    </tr>

    <tr>
      <td>...................</td>
    </tr>


    <tr>
      <td>......................</td>
    </tr>
      
      
  </table>

  <br><br><br><br><br>



  <table border="1" align="center">
    <tr align="center">
      <td><h3>Upload a written application for funds</h3></td>
      
    </tr>
    <tr>
      <td>Please provide a written application in pdf/doc file type</td>
    </tr>

    <tr>
      <td>
      <form method="POST" action="fileCheck.php" enctype="multipart/form-data">
    File: <input type="file" name="myfile" value="">
    <input type="submit" name="Submit" value="Submit">
    </form>
  </td>
    </tr>   
      
  </table>

  <hr>

     <left>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Croudfunding</h2><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>address........address................<br>number...........number</h4>

     </left>

     <center><h1>Thank you for visiting</h1></center>


  
  
  
</body>
</html>

<?php
  }else{
    header('location: ../view/login.php');
  }
?>