<?php 
// odbieramy dane z formularza 
$imie = $_POST['imie']; 
$nazwisko = $_POST['nazwisko']; 
$dywizja = $_POST['dywizja']; 
$waga = $_POST['waga']; 
$kat_wag = $_POST['kat_waga'];

if($imie and $nazwisko and $dywizja and $waga and $kat_wag) { 
     
    $pol = new mysqli('localhost','root','','leo');
     
    // dodajemy rekord do bazy 
   // $ins = @mysql_query("INSERT INTO uzytkownik values('', $imie, $nazwisko, $dywizja, $waga)"); 
     
    $query = "INSERT INTO zgloszenia SET imie='".$imie."', nazwisko='".$nazwisko."', dywizja='".$dywizja."', waga='".$waga."', kategoria_wagowa='".$kat_wag."'" ;
$ins = $pol->query($query); 


  if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
$pol->close();
    
  
   
} 



?>