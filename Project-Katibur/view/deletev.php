<?php
	session_start();
		if($_GET['name'] != ""){
			$myFile = fopen('../asset/volunteerlist.txt', 'r');
			$volunteerList= array();
			$isUserFound = false;
			while(!feof($myFile)){
				$data = fgets($myFile);
				if($data!=""){
					$volunteer = explode('|',$data);
					if($_GET['name']==trim($volunteer[0])){
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
		}else{
			echo "Invalid username...";
		}
?>