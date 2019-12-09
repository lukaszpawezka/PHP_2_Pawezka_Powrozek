<?php
	$font_c = $_COOKIE['font_co'];
	$background_c = $_COOKIE['background_co'];
	$font_f = $_COOKIE['font_fa'];
	
	$usernames_array = array("Kacper", "Lukasz");
	$passwords_array = array("Powrozek", "Pawezka");
	
	
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$size_of_arrays	= sizeof($usernames_array);
		
		for($i = 0; $i < $size_of_arrays; $i++) {
			if($username == $usernames_array[$i]) {
				if($password == $passwords_array[$i]) {
					session_start();
					$_SESSION['username'] = $username;
					setcookie('our_session_id', session_id(), time()+60*60*7);
					header("location: PHP_2_Pawezka_Powrozek_5.php");
				} else {
					echo "Wrong password";
					break;
				} 
			} else {
				if ($i == $size_of_arrays){
					echo "Wrong username";
					break;
				}	
			}
		}
	} else {
		header("location: login.php");
	}
?>