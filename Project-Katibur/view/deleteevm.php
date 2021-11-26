<?php
	session_start();
		if($_GET['name'] != ""){
			$myFile = fopen('../asset/evmlist.txt', 'r');
			$evmList= array();
			$isUserFound = false;
			while(!feof($myFile)){
				$data = fgets($myFile);
				if($data!=""){
					$evm = explode('|',$data);
					if($_GET['name']==trim($evm[0])){
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
		}else{
			echo "Invalid username...";
		}
?>