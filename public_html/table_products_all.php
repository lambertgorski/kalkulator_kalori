<script src="skrypty.js"></script>
<?php
						include("polaczenie.php");


						$polaczenie = new mysqli($serwer, $user, $haslo, $baza) or die('Kłopoty z połączeniem');
					//mysqli_query ($polaczenie,'SET NAMES utf8');
					$pytanie = $polaczenie->query("SELECT * FROM `produkty` ORDER BY `nazwa` ASC;");

					while ($row = mysqli_fetch_array($pytanie)) 
 					 {
					$nazwa = $row["nazwa"];
					$kcal = $row["kcal"];
					$bialka = $row["bialka"];
					$tluszcze = $row["tluszcze"];
					$weglowodany = $row["weglowodany"];
					echo "<tr class=product><td> $nazwa </td><td> $kcal </td><td> $bialka </td><td> $weglowodany </td><td>$tluszcze</td></tr>";
					  } 
					

					$polaczenie->close() ;

	?>