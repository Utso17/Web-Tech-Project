<?php
	session_start();
	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){



					if($_POST['usertype'] != "Volunteer")
						$myFile = fopen('../asset/volunteerlist.txt', 'r');
					$volunteerList= array();
					$isUserFound = false;
					while(!feof($myFile)){
						$data = fgets($myFile);
						if($data!=""){
							$volunteer = explode('|',$data);
							if($_POST['username']==trim($volunteer[0])){
								array_push($volunteerList,$_POST['username']."|".$_POST['password']."|".$_POST['email']."|");
								$isUserFound = true;
							}else{
								array_push($volunteerList, trim($data));
							}
						}
					}
					fclose($myFile);
					if(!$isUserFound){
						echo 'User not found';
						return;
					}

					$myFile = fopen('../asset/volunteerlist.txt','w');
					for($i=0;$i<count($volunteerList);++$i){
						fwrite($myFile,$volunteerList[$i]."\r\n");
					}
					fclose($myFile);
					header('location: ../model/volunteerlist.php');
				}





				else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>