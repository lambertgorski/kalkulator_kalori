

<!DOCTYPE HTML>

<html>

<head>

	<meta charset="utf-8">

	<title>Moje Dane</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="skrypty.js"></script>

</head>

<body>

	<div id="logo"><h1>Oblicz swoje zapotrzebowanie</h1></div>

	

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

    	    <article>

        	        <div id=formularz_zapotrzebowanie>

            	        <form>

            	           <label>Twoja Waga<br><input type="number" placeholder="Waga" id="twoja_waga"></label><br>

            	           <label>Twój Wzrost<br><input type="number" placeholder="Wzrost" id="twoj_wzrost"></label><br>

            	           <label>Twój Wiek<br><input type="number" placeholder="Wiek" id="twoj_wiek"></label><br>
                             Czestotliwosc aktywnosci<br>
                	       <select id="wybor_aktywnosci">

                	           <option value="1.2">Znikoma aktywnność</option>

                	           <option value="1.4">Niska aktywność</option>

                	           <option value="1.6">Średnia akktywność</option>

                	           <option value="1.8">Wysoka aktywność</option>

                	           <option value="1.9">Bardzo wysoka aktywność</option>

                	       </select>

						   <div id="wybor_radio">
                        
								<label>Mężczyzna<input type="radio" name="plec" id="mez"></label>

								<label>Kobieta<input type="radio" name="plec" id="kob"></label>

							</div>

							<div><input type="button" value="Oblicz" onclick="oblicz_zapotrzebowanie()"></div>

            	        </form>
						<div id="test">
						</div>
        	        </div>

    	    </article>
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