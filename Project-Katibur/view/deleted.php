<?php
	session_start();
		if($_GET['name'] != ""){
			$myFile = fopen('../asset/donorlist.txt', 'r');
			$donorList= array();
			$isUserFound = false;
			while(!feof($myFile)){
				$data = fgets($myFile);
				if($data!=""){
					$donor = explode('|',$data);
					if($_GET['name']==trim($donor[0])){
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
		}else{
			echo "Invalid username...";
		}
?>