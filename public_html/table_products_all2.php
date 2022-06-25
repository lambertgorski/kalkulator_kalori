<script src="skrypty.js"></script>
<?php
                        include("polaczenie.php");


                        $polaczenie = new mysqli($serwer, $user, $haslo, $baza) or die('Kłopoty z połączeniem');
                    //mysqli_query ($polaczenie,'SET NAMES utf8');
                    $pytanie = $polaczenie->query("SELECT * FROM produkty ORDER BY nazwa ASC;");
                    for ($i=1 ; $i<=100;$i++)
                    {

                        $row = mysqli_fetch_array($pytanie);
                        $nazwa = $row["nazwa"];
                        $kcal = $row["kcal"];
                        $bialka = $row["bialka"];
                        $tluszcze = $row["tluszcze"];
                        $weglowodany = $row["weglowodany"];

                     $id1="k".$i."1";
                     $id2="k".$i."2";
                     $id3="k".$i."3";
                     $id4="k".$i."4";
                     $id5="k".$i."5";
                     echo"<tr id=$i><td id=$id1> $nazwa </td> <td id=$id2>$kcal </td> <td id=$id3> $bialka </td><td id=$id4> $tluszcze </td> <td id=$id5> $weglowodany </td> <td> <input type=button value=Dodaj Produkt id=$i onclick=wiersz(this)></td></tr>";

                    }


                    $polaczenie->close() ;

    ?>