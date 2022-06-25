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

		<main>
			<div id="lewa_strona">
				<div id="wyszukiwarka_na_indexie">
					 <h1>Znajdz produkt</h1><br>

			         <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Wyszukaj produkty">

					<table id="my_products"><tr> <td> Nazwa </td> <td> kcal </td> <td> bialka </td> <td> weglowodany </td><td>tluszcze</td><td>Przycisk</td></tr>

                    <div id="tabela_skrypt"><?php include("table_products_all2.php"); ?></div>

				</div>
				<div id="wynik">
						<tr>
							<td>PHP</td>
							<td><input type="number" name="ile_gramow"></td>
							<td><input type="submit"></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div id="prawa_strona">
                <div id="rameczka_na_posilki">
                    <div id="wybieranie_produktu">
                        <div id="wybrany_produkt"><table><td> Nazwa </td> <td> kcal </td> <td> bialka </td> <td> weglowodany </td><td>tluszcze</td></tr> <tr><td id=nazwa></td> <td id=kalorie></td> <td id=bialeczko></td> <td id=weglowodaniki></td><td id=tluszczyk></td></tr></table></div>

                    </div>

                    <label>Wpisz ile gramów zjadłeść<input type="number" id="ilosc_pokarmu"></label>
                    <input type="button" value="Oblicz" onclick=liczdane()>
                   <br>
					<h1 id="podsumowanietext">Podsumowanie</h1><br>
					<table id="podsumowanie"><tr><td>Kalorie</td><td>Bialka</td><td>Tluszcze</td><td>Weglowodany</td></tr>
							<tr><td id="ilosc_kalori">0</td><td id="ilosc_bialka">0</td><td id="ilosc_tluszczu">0</td><td id="ilosc_wegli">0</td></tr>
</table>

                </div>
				Twoje zapotrzebowanie kaloryczne
				<form action="wyswietldane.php" method="GET" target="_blank">Twoj pseudonim:<br> <input type="text" id="nick" name="nick"> <input type="submit" value="wyswietl"></form>
				<div id="kcaltwoje"></div>
            </div>
			</div>

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