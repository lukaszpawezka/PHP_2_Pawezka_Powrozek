<?php
	define("FIVE_DAYS", 60 * 60 * 24 * 5 );
	setcookie("font_co", $_POST["font_color"], time() + FIVE_DAYS);
	setcookie("background_co", $_POST["background_color"], time() + FIVE_DAYS);
	setcookie("font_fa", $_POST["font_family"], time() + FIVE_DAYS);
?>

<html>
	<head>
	<meta charset="utf-8"/>
	<title>Łukasz Pawęzka i Kacper Powrózek - HTML2</title>
	<meta name = "description" content="Zadanie nr. 2 - HTML2"/>
	<meta name="keywords" content="HTML2, LAB, ZADANIE"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	</head>
	
	<body>
		<p>Cookies zapisane!</p>
		<a href="PHP_2_Pawezka_Powrozek_1.php">
			<input type="button" value="Przejdź do strony">
		</a>
	</body>
</html>