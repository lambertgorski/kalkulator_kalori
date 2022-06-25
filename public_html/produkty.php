



<!DOCTYPE HTML>

<html>

<head>

	<meta charset="utf-8">

	<title>Kalkulator Kalorii - produkty</title>

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

				<div class="menu_button" id="menu_button_right"><a>Produkty</a></div>

			</div>

		</nav>

	</header>



	<div id="kwadrat">



		<main>

			<div id=lewa_strona>

			<div id=tabela>

			         <h1>Wartości dla 100 gram produktu</h1><br>

			         	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Wyszukaj produkty">

					<table id="my_products"><tr> <td> Nazwa </td> <td> kcal </td> <td> bialka </td> <td> weglowodany </td><td>tluszcze</td></tr>

                    <div id="tabela_skrypt"><?php include("table_products_all.php"); ?></div>

	</table>

	</div>

					</div>

		<div id="prawa_strona">

			

				<div class="button_produkty">Wysoko kaloryczne

    				<div class="masny_input">

    				    <input type="checkbox" id="wysoko_kaloryczne" name="przycisk_wysoko">

    				</div>

				</div>

				<div class="button_produkty">Wysoko bialkowe

    				<div class="masny_input">

    				    <input type="checkbox" id="wysoko_bialkowe" name="przycisk_wysoko">

    				</div>

				</div>

				<div class="button_produkty">Wysoko tłuszczowe

    				    <div class="masny_input">

    				        <input type="checkbox" id="wysoko_tluszczowe" name="przycisk_wysoko">

    				    </div>

				</div>

				<div class="button_produkty">Wysoko węglowodanowe

    				    <div class="masny_input">

    				        <input type="checkbox" id="wysoko_weglowodanowe" name="przycisk_wysoko"> <button type="submit" id="wysoko_weglowodanowe" name="przycisk_wysoko"></button>

    				    </div>

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



