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
		<h3>Formularz sernikowy</h3>
		
		<form autocomplete="on">
			<div style="clear: both">
				<input type="text" name="name" autofocus> Podaj swoje imie np. Łukasz <br>
				<input type="text" name="surnname"  required> Podaj swoje nazwisko np. Pawęzka <br>
				<input list="list3" name="birthMonth"> Wybierz miesiac urodzenia
				<datalist id="list3">
						<option value="Styczeń">
						<option value="Luty">
						<option value="Marzec">
						<option value="Kwiecień">
						<option value="Maj">
						<option value="Czerwiec">
						<option value="Lipiec">
						<option value="Sierpień">
						<option value="Wrzesień">
						<option value="Październik">
						<option value="Listopad">
						<option value="Grudzień">
				</datalist> <br>
				<input type = "email" name="e-mail" required /> Podaj swój email według wzoru: name@domain.com <br>
				<input type = "text" pattern="^[0-9]{3}-[0-9]{3}-[0-9]{3}$" required /> Podaj swój telefon według wzoru: 123-456-789 <br>
				<textarea maxlength="200" rows="3" cols="70" ></textarea>
			</div>

			<div>
				<input type="reset" value="Wyczyść formularz">
				<input type="submit" value="Wyślij formularz">
			</div>
		</form>
			
	</article>
	
	
	<footer>
		<p> Autorzy: <em>Łukasz Pawęzka</em> oraz <em>Kacper Powrózek</em>. Wszelkie prawa zastrzerzone &copy; </p>
	</footer>
</body>
	 
</html>