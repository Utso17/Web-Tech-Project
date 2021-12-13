<?php
		session_start();

		require_once('../model/CharityModel.php');


		if(isset($_REQUEST['submit'])){


		if(empty($_POST['Charity_name']))
		{
		}


		else
		{
		$id = $_REQUEST['id'];
		$Charity_name = $_REQUEST['Charity_name'];




		header('location:CharityList.php?msg=invalid');

		$user = [
		'id'=> $id,
		'Charity_name'=> $Charity_name,
		];


		insertCharity($user);
		}
		}
?>

<html>
<head>
	<title>EvMLogin</title>

    <link rel="stylesheet" href="../asset/style.css">

</head>
<body>

    <script type="text/javascript" src="valid.js"></script>

	<?php  require_once'../model/Links.php' ?>

	<form name="myform" action="" method="post" >
        <fieldset>
            <legend align="center"></legend>
            <table align="center">
                <tr>
                    <td>Charity Name:</td>
                    <td><input type="text" name="Charity_name" id="Charity_name" ></td>
                </tr>
                <tr> 
                	<td>
                	</td>
                	<td>
                        <input type="submit" name="submit" value="Add Charity">
                        
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

	<?php  require_once'../model/Credit.php' ?>
</body>
</html>