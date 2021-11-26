<?php
	session_start();
	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){



					if($_POST['usertype'] != "Donor")
						$myFile = fopen('../asset/donorlist.txt', 'r');
					$donorList= array();
					$isUserFound = false;
					while(!feof($myFile)){
						$data = fgets($myFile);
						if($data!=""){
							$donor = explode('|',$data);
							if($_POST['username']==trim($donor[0])){
								array_push($donorList,$_POST['username']."|".$_POST['password']."|".$_POST['email']."|");
								$isUserFound = true;
							}else{
								array_push($donorList, trim($data));
							}
						}
					}
					fclose($myFile);
					if(!$isUserFound){
						echo 'User not found';
						return;
					}

					$myFile = fopen('../asset/donorlist.txt','w');
					for($i=0;$i<count($donorList);++$i){
						fwrite($myFile,$donorList[$i]."\r\n");
					}
					fclose($myFile);
					header('location: ../model/donorlist.php');
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