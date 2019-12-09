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

<body style="color:<?php echo $font_c?>; background-color: <?php echo $background_c?>; font-family: <?php echo $font_f?>">
	<header>
		<h1>Łukasz Pawęzka i Kacper Powrózek - HTML2</h1>
	</header>
	
	<nav>
		<a href="cookies.php">
			<input type="button" value="Zmień preferencje">
		</a>
		<h2>Menu główne</h2>
		<ul>
			<li><a href="PHP_2_Pawezka_Powrozek_1.php" title="Strona główna"> Strona główna</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_2.php" title="Struktury strony">Struktury strony</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_3.php" title="Formularz 1">Formularz 1</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_4.php" title="Formularz 2">Formularz 2</a></li>
		</ul>
	</nav>
	
	<article>
		
		<h3> Wyszukaj: </h3>
		<form autocomplete="on">
			<div style="clear: both">
				<input type="search" placeholder="Wyszukaj fraze"> <input type = "submit" value = "Submit"> <br><br>
			</div>
		</form>
		
		<h3>Formularz sernikowy vol.2</h3>
		
		
		<form autocomplete="on">
			<div style="clear: both">
				<input type="color" name= "ulubionyKolorSernika"> Wybierz kolor swojego serniczka <br>
				<input type="month" id="start" name="start"> Kiedy chcesz piec serniczek? <br>
				0 <input type="range" name= "stopienWypieczenia" min="0" max="10"> 10 Jak mocno chcesz przypiec sernik w skali od 0 do 10? <br>
				<input type="url" name="homepage" placeholder="Dodaj swoją stronę o serniku"> <br>
			</div>

			<div>
				<input type="reset" value="Wyczyść formularz">
				<input type="submit" value="Wyślij formularz">
			</div>
		</form>
			
	</article>
	
	
	<footer>
		<p> Autorzy: <em>Łukasz Pawęzka</em> oraz <em>Kacper Powrózek</em>. Wszelkie prawa zastrzerzone &copy;</p>
	</footer>
</body>
	 
</html>