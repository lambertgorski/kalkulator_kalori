

</div>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Kalkulator Kalorii</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="skrypty.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div id="logo"><h1>Kalkulator Kalorii</h1></div>
	
	<header>
		<nav>
			<div id="menu">
				<div class="menu_button" id="menu_button_left"><a href="index.php">Kalkulator</a></div>
				<div class="menu_button"><a href="mojedane.php">Moje dane</a></div>
				<div class="menu_button" id="menu_button_right"><a href="produkty.php">Produkty</a></div>
			</div>
		</nav>
	</header>

	<div id="kwadrat">
  <?php
include("polaczenie.php");



$polaczenie = new mysqli($serwer, $user, $haslo, $baza) or die('Kłopoty z połączeniem');
mysqli_query ($polaczenie,'SET NAMES utf8');
$nick = $_GET['nick'];
$pytanie = $polaczenie->query("SELECT * FROM `wyniki` WHERE `Imie` LIKE '$nick';");

while ($row = mysqli_fetch_array($pytanie)) 
  {
    $imie = $row["Imie"];
    $nazwisko = $row["Wynik"];
    echo("<h1>$imie. Twoje zapotrzebowanie kaloryczne to $nazwisko kcal </h1>");
  } 

 

$polaczenie->close() ;

?>
		<main>

		</main>
		<footer>
			<div id="stopka">
				<div class="kafelki">Kalorie (java)</div>
				<div class="kafelki">Bialko (java)</div>
				<div class="kafelki">Tłuszcze (java)</div>
				<div class="kafelki">Węglowodane (java)</div>
			</div>
		</footer>
	</div>	
</body>
</html>