function oblicz_zapotrzebowanie(){



  var waga = document.getElementById('twoja_waga').value;

  var wzrost = document.getElementById('twoj_wzrost').value;

  var wiek = document.getElementById('twoj_wiek').value;

  if (document.getElementById('mez').checked)

      {

          var plecc = "mezczyzna";

          var BMR = 66 + 13.7 * waga + 5 * wzrost - 6.8 * wiek;

      }

  else if (document.getElementById('kob').checked)

      {

          var plecc = "kobieta";

          var BMR = 655.1 + 9.5 * waga + 1.8 * wzrost - 4.7 * wiek;

      }

  else 

      {

          alert("Nie wybrałeś swojej płci");

      }

  var wyborik = document.getElementById('wybor_aktywnosci').value;

  var CPM = wyborik * BMR;

  var CMPROUND = Math.round(CPM);

  document.getElementById('test').innerHTML='	<form action="dodajDane.php" method="GET"> Twoj pseudonim:<br> <input type="text" id="nickname" name="nick"></input><br> Wynik<br><input type="text" id="wynikkcal" name="wynik" readonly></input>  <input type="submit" value="Zapisz"></form>';

  document.getElementById('wynikkcal').value=  CMPROUND ;

  

}



function myFunction() {



  // Declare variables



  var input, filter, table, tr, td, i, txtValue;



  input = document.getElementById("myInput");



  filter = input.value.toUpperCase();



  table = document.getElementById("my_products");



  tr = table.getElementsByTagName("tr");







  // Loop through all table rows, and hide those who don't match the search query



  for (i = 0; i < tr.length; i++) {



    td = tr[i].getElementsByTagName("td")[0];



    if (td) {



      txtValue = td.textContent || td.innerText;



      if (txtValue.toUpperCase().indexOf(filter) > -1) {



        tr[i].style.display = "";



      } else {



        tr[i].style.display = "none";



      }



    }



  }



}

function wiersz(x)
{
var nr = x.id;
var idkom1 = 'k'+nr+'1';  
var idkom2 = 'k'+nr+'2';  
var idkom3 = 'k'+nr+'3'; 
var idkom4 = 'k'+nr+'4'; 
var idkom5 = 'k'+nr+'5'; 
wart1 = document.getElementById(idkom1).innerHTML;
wart2 = document.getElementById(idkom2).innerHTML;
wart3 = document.getElementById(idkom3).innerHTML;
wart4 = document.getElementById(idkom4).innerHTML;
wart5 = document.getElementById(idkom5).innerHTML;
console.log(wart1,wart2, wart3, wart4, wart5);
document.getElementById('nazwa').innerHTML = wart1;
document.getElementById('kalorie').innerHTML = wart2;
document.getElementById('bialeczko').innerHTML = wart3;
document.getElementById('tluszczyk').innerHTML = wart4;
document.getElementById('weglowodaniki').innerHTML = wart5;
}

function liczdane()
{
  var kalorie = document.getElementById('kalorie').innerHTML;
  var bialko = document.getElementById('bialeczko').innerHTML;
  var tluszcz = document.getElementById('tluszczyk').innerHTML;
  var cukier = document.getElementById('weglowodaniki').innerHTML;


  var kalorie_teraz = document.getElementById('ilosc_kalori').innerHTML;
  var bialko_teraz = document.getElementById('ilosc_bialka').innerHTML;
  var tluszcz_teraz = document.getElementById('ilosc_tluszczu').innerHTML;
  var cukier_teraz = document.getElementById('ilosc_wegli').innerHTML;
  
  kalorie_teraz = parseFloat(kalorie_teraz);
  bialko_teraz = parseFloat(bialko_teraz);
  tluszcz_teraz = parseFloat(tluszcz_teraz);
  cukier_teraz = parseFloat(cukier_teraz)

  var ilosc = document.getElementById('ilosc_pokarmu').value;
  
  var ilosc_bialka = ilosc * bialko/100;

  var ilosc_kalorii = ilosc * kalorie/100;

  var ilosc_tluszczy = ilosc * tluszcz/100;
  

  var ilosc_weglowodanow = ilosc * cukier/100;


  var wynik_kalorie = ilosc_kalorii + kalorie_teraz;
  var wynik_bialka = ilosc_bialka + bialko_teraz;
  var wynik_tluszcze = ilosc_tluszczy + tluszcz_teraz;
  var wynik_wegle = ilosc_weglowodanow + cukier_teraz;
  
  wynik_kalorie = wynik_kalorie.toFixed(2);
  wynik_bialka = wynik_bialka.toFixed(2);
  wynik_tluszcze = wynik_tluszcze.toFixed(2); 
  wynik_wegle = wynik_wegle.toFixed(2);

  document.getElementById('ilosc_kalori').innerHTML= wynik_kalorie;
  document.getElementById('ilosc_bialka').innerHTML= wynik_bialka;
  document.getElementById('ilosc_tluszczu').innerHTML= wynik_tluszcze;
  document.getElementById('ilosc_wegli').innerHTML= wynik_wegle;

}