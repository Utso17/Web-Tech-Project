<?php
	session_start();
	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){



					if($_POST['usertype'] != "Event Manager")
						$myFile = fopen('../asset/evmlist.txt', 'r');
					$evmList= array();
					$isUserFound = false;
					while(!feof($myFile)){
						$data = fgets($myFile);
						if($data!=""){
							$evm = explode('|',$data);
							if($_POST['username']==trim($evm[0])){
								array_push($evmList,$_POST['username']."|".$_POST['password']."|".$_POST['email']."|");
								$isUserFound = true;
							}else{
								array_push($evmList, trim($data));
							}
						}
					}
					fclose($myFile);

					if(!$isUserFound){
						echo 'User not found';
						return;
					}


					$myFile = fopen('../asset/evmlist.txt','w');
					for($i=0;$i<count($evmList);++$i){
						fwrite($myFile,$evmList[$i]."\r\n");
					}
					fclose($myFile);
					header('location: ../model/evmlist.php');
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