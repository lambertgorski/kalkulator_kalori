<?php
include("polaczenie.php");
$Imie = $_GET['nick'];
$Wynik = $_GET['wynik'];

$polaczenie = new mysqli($serwer, $user, $haslo, $baza) or die('Kłopoty z połączeniem');
$pytanie = $polaczenie->query("INSERT INTO `wyniki` (`ID`, `Imie`, `Wynik`) VALUES ( NULL , '$Imie', '$Wynik');");
header("location:mojedane.php");
$polaczenie->close() ;

?>