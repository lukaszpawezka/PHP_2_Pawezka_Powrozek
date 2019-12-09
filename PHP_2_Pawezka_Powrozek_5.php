<?php
	$font_c = $_COOKIE['font_co'];
	$background_c = $_COOKIE['background_co'];
	$font_f = $_COOKIE['font_fa'];
	$session_id = $_COOKIE['our_session_id'];
	
	session_start();
	if(isset($_SESSION['username'])) {
		$username_from_session = $_SESSION['username'];
	}
	else {
		$username_from_session = "Brak username";
	}
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

<body style="color:<?php echo $font_c?>; background-color: <?php echo $background_c?>; font-family: <?php echo $font_f?>">
	<header>
		<h1>Łukasz Pawęzka i Kacper Powrózek - HTML2</h1>
	</header>
	
	<nav>
		<a href="cookies.php">
			<input type="button" value="Zmień preferencje">
		</a>
		<a href="showCookies.php">
			<input type="button" value="Pokaż preferencje">
		</a>
		<h2>Menu główne</h2>
		<ul>
			<li><a href="PHP_2_Pawezka_Powrozek_1.php" title="Strona główna"> Strona główna</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_2.php" title="Struktury strony">Struktury strony</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_3.php" title="Formularz 1">Formularz 1</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_4.php" title="Formularz 2">Formularz 2</a></li>
		</ul>
	</nav>
	
	<p>Session ID: <?php print("<span>$session_id</span>") ?></p>
	<p>Username: <?php print("<span>$username_from_session</span>") ?></p>
	
	<a href='logout.php'>Wyloguj</a>
	
	<footer>
		<p> Autorzy: <em>Łukasz Pawęzka</em> oraz <em>Kacper Powrózek</em>. Wszelkie prawa zastrzerzone &copy;</p>
	</footer>
</body>
	 
</html>