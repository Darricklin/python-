<?php
	//header("Access-Control-Allow-Origin : *");
	if(!empty($_POST['username'])){
		$username = $_POST['username'];
		$sex = $_POST['sex'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$content = $_POST['content'];
		$dataArray = array(
					"username"=>$username,
					"sex"=>$sex,
					"age"=>$age,
					"email"=>$email,
					"address"=>$address,
					"content"=>$content,
					);
		$jsonStr = json_encode($dataArray);
		echo $jsonStr;
	}
?>