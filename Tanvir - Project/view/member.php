<?php 
  session_start();
  if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Member</title>
  <link rel="stylesheet" href="../asset/bg.css">
</head>
<body>


  <?php require_once'../model/Links.php'?>

  <h1 align="center">Funding for a better future!</h1>

        
        <tr>
            <tr height="50px">
            
            <h2 align="center">Become a member today!</h2>
            <h4 align="center">Fundraising membership is the key to professional fundraising success.We support professional fundraisers and protect and promote the fundraising sector.We want you to be the best so that you raise awareness and more funds for your cause, enabling you to make a bigger impact.</h4>

        </tr>
      

  <br><br><br><br><br>



  <body>

<fieldset>

   <table align="center" border="6">

        <h5 align="center"><legend>Upload Picture</legend>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <b>Select image to upload:</b>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><hr>
        <input type="submit" value="Upload Image" name="submit">
      </form></h5>

    </table>

      </fieldset>



  <br><br><br><br>

  <h3 align="right"><a href="../controller/logout.php"> Logout</a></h3>

  <hr>

     <?php require_once'../model/Credit.php'?>

  
</body>
</html>

<?php
  }else{
    header('location: ../view/login.php');
  }
?>