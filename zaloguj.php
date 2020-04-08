<?php
session_start();
if( isset($_POST['log_in']) ){
    
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    if( empty($login) || empty($haslo)){
        header("Location: logowanie.php?error=1");
        exit;
    }
    
    $db = mysqli_connect('localhost','root','')or die ("Nie udalo się połączyć z bazą");
    mysqli_select_db($db,'leo');
    $wynik = mysqli_query($db, "SELECT * FROM users WHERE login='$login' ") or die("Nie udało się pobrać danych!");
    
    $rows = mysqli_fetch_array($wynik);
    
   if($login != $rows['login']){
        header("Location: logowanie.php?error=2");
    exit;
   }
    
    if($haslo != $rows['haslo']){
         header("Location: logowanie.php?error=3");
    exit;
    }
    
    if( ($login == $rows['login']) && ($haslo == $rows['haslo']) ){
        
        $_SESSION['zalogowany'] = 1;

        header("Location: panel_zal.php");
    exit;
    }
    
    
} else {
    header("Location: logowanie.php?error=0");
    exit;
}


?>