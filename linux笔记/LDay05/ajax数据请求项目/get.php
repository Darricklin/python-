<?php
	//header('Access-Control-Allow-Origin: *');
	if(!empty($_GET['username']) && !empty($_GET['content'])){
		$username = $_GET['username'];
		$content = $_GET['content'];
		$dataArray = array("username"=>$username,"content"=>$content);
		$jsonStr = json_encode($dataArray);
		echo $jsonStr;
	}
?>