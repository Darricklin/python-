<?php
	//header("Access-Control-Allow-Origin : *");
	if(!empty($_POST['username']) && !empty($_POST['content'])){
		$username = $_POST['username'];
		$content = $_POST['content'];
		$dataArray = array("username"=>$username,"content"=>$content);
		$jsonStr = json_encode($dataArray);
		echo $jsonStr;
	}
?>