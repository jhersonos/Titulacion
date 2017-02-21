<?php 
	if(isset($_POST['code'])){
		$code=$_POST['code'];
	}elseif(isset($_REQUEST['code'])){
		$code=$_REQUEST['code'];
	}elseif(isset($_GET['code'])){
		$code=$_GET['code'];
	}else{
		$code="null";
	};
echo $code;
 ?>