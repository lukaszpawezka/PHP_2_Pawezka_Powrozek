<?php
	$font_c = $_COOKIE['font_co'];
	$background_c = $_COOKIE['background_co'];
	$font_f = $_COOKIE['font_fa'];
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Łukasz Pawęzka i Kacper Powrózek - HTML2</title>
	<meta name = "description" content="Zadanie nr. 2 - HTML2"/>
	<meta name="keywords" content="HTML2, LAB, ZADANIE"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
</head> 

 <body>
	<header>
		<h1>Łukasz Pawęzka i Kacper Powrózek - HTML2</h1>
	</header>
		
	<form method="post" action="validate.php" name="login">	
		Username:	
		<input type="text" name="username">	
		<br>
		Password:
		<input type="password" name="password">
		<br>
		<input type="submit" value="Zaloguj" name="login">
	</form>

	<footer>
		<p> Autorzy: <em>Łukasz Pawęzka</em> oraz <em>Kacper Powrózek</em>. Wszelkie prawa zastrzerzone &copy;</p>
	</footer>
</body>
	 
</html>