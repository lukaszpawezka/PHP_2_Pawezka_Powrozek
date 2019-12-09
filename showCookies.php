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
	
	<strong>Obecny stan preferencji (cookies):</strong>
	<p>Font color: <?php print("<span>$font_c</span>") ?></p>
	<p>Background color: <?php print("<span>$background_c</span>") ?></p>
	<p>Font family: <?php print("<span>$font_f</span>") ?></p>
	
	<br>
	
	<a href="PHP_2_Pawezka_Powrozek_1.php">
		<input type="button" value="Wróć do strony głównej">
	</a>

	<footer>
		<p> Autorzy: <em>Łukasz Pawęzka</em> oraz <em>Kacper Powrózek</em>. Wszelkie prawa zastrzerzone &copy;</p>
	</footer>
</body>
	 
</html>