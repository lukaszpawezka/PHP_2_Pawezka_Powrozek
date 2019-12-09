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
		<?php print("<h2>$font_c</h2>") ?>
		<?php print("<h2>$background_c</h2>") ?>
		<?php print("<h2>$font_f</h2>") ?>
	</header>
	
	<nav>
		<a href="cookies.php">
			<input type="button" value="Zmień preferencje">
		</a>
		<a href="showCookies.php">
			<input type="button" value="Pokaż preferencje">
		</a>
		<a href="login.php">
			<input type="button" value="Tajna zawartość">
		</a>
		
		<h2>Menu główne</h2>
		<ul>
			<li><a href="PHP_2_Pawezka_Powrozek_1.php" title="Strona główna"> Strona główna</a></li>
			<li>
				<ul>
					<li><a href="#jakUpiec">Jak upiec sernik?</a></li>
					<li><a href="#udanyPrzepis">Sernik - przepis na udany deser</a></li>
					<li><a href="#jakiTwarog">Jaki twaróg do sernika?</a></li>
				</ul>
			</li>
			<li><a href="PHP_2_Pawezka_Powrozek_2.php" title="Struktury strony">Struktury strony</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_3.php" title="Formularz 1">Formularz 1</a></li>
			<li><a href="PHP_2_Pawezka_Powrozek_4.php" title="Formularz 2">Formularz 2</a></li>
		</ul>
	</nav>
	
	<article>
	
			<h3 id="jakUpiec">Jak upiec sernik?</h3>
			
			<img src="img/fajnySernik.jpg" alt="Sernik not found" />
			
			<p>
				Pieczenie sernika to nie dla wszystkich łatwa sztuka. Najczęstsze problemy to nadmierne opadanie masy serowej oraz jej pękanie. Jak im zapobiec i upiec sernik doskonały?
			</p>
			
			<h4 id="udanyPrzepis">Sernik - przepis na udany deser</h4>
			<p>
				Sernik to jedno z naszych ulubionych ciast. Polskie serniki znane i lubiane są jednak nie tylko w naszym kraju. Może o tym świadczyć fakt, że przepis na sernik krakowski (nazywany czasem sernikiem "z kratką") znalazł się w jednej z książek kulinarnych jednego z najsłynniejszych cukierników świata - Pierre'a Hermé.
			</p>
			
			<section>
				<h4 id="jakiTwarog">Jaki twaróg do sernika?</h4>
				<p>
					Istnieje kilka podstawowych rodzajów serników, różniących się przede wszystkim konsystencją, co wynika najczęściej z zastosowanych do ich przygotowania rodzajów sera. Do klasycznych, zwartych serników pieczonych, np. krakowskiego, powinniśmy używać twarogu. Serniki o kremowej konsystencji, np. sernik nowojorski, najlepsze będą z dodatkiem serków kremowych, takich jak philadelphia czy mascarpone. Natomiast serków o rzadkiej konsystencji, zwłaszcza homogenizowanych, warto używać przede wszystkim do serników na zimno.
				</p>
				<p>
					Do klasycznego, pieczonego sernika najlepiej wykorzystać twaróg tłusty, zmielony przynajmniej dwukrotnie (najlepszy będzie jednak, kiedy zmielimy go trzy razy). Mielenie pozwala bowiem pozbyć się grudek sera, które widać zwłaszcza wtedy, gdy dodamy do niego czekoladę lub kakao.
				</p>
				<p>
					Jeśli nie mamy czasu, możemy oczywiście kupić gotowy zmielony twaróg w kubełku. Warto jednak uważnie czytać jego skład. Często bowiem pod nazwą "ser do serników" producenci oferują nam nie twaróg, a serek (niekiedy z dodatkiem zagęstników), który bardziej nadaje się do sernika na zimno.
				</p>
			</section>
			
			
	</article>
	

	
	<footer>
		<p> Autorzy: <em>Łukasz Pawęzka</em> oraz <em>Kacper Powrózek</em>. Wszelkie prawa zastrzerzone &copy; </p>
	</footer>
</body>
	 
</html>