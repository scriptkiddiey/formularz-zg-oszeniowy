<?php  
session_start();

if(!($_SESSION['zalogowany']) ){
    header("Location: zaloguj.php?error=0");
}

echo $_SESSION['zalogowany'];
?>



<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Panel Administratora</title>
<link href="style.css" rel="stylesheet" >
    </head>


<body>
<div id="container">
    
    <div id="box">
    Dzieci I (2013 – 2014)<br>
    <input type="button" value="generuj" formtarget="_blank" onclick="location.href='wynik_pdf.php';" >-16kg<br>
    <input type="button" value="generuj" onclick="location.href='wynik_pdf2.php';">-20kg<br>
    <input type="button" value="generuj">-24kg<br>
    <input type="button" value="generuj">+24kg<br>
    
 
    <br>
        
        
            Dzieci II (2011 – 2012)<br>
    <input type="button" value="generuj">-16kg<br>
    <input type="button" value="generuj">-20kg<br>
    <input type="button" value="generuj">-24kg<br>
    <input type="button" value="generuj">-28kg<br>
    <input type="button" value="generuj">-32kg<br>
    <input type="button" value="generuj">-36kg<br>
    <input type="button" value="generuj">+36kg<br>

        <br>
        
        Dzieci III (2009 – 2010)<br>
    
<input type="button" value="generuj">-20kg<br>
<input type="button" value="generuj">-24kg<br>
<input type="button" value="generuj">-28kg<br>
<input type="button" value="generuj">-32kg<br>
<input type="button" value="generuj">-36kg<br>
<input type="button" value="generuj">-40kg<br>
<input type="button" value="generuj">-44kg<br>
<input type="button" value="generuj">-48kg<br>
<input type="button" value="generuj">+48kg<br>
        <br>
        
        
        Dzieci IV (2007 – 2008)<br>
        
 <input type="button" value="generuj">-24kg<br>
 <input type="button" value="generuj">-28kg<br>
 <input type="button" value="generuj">-32kg<br>
 <input type="button" value="generuj">-36kg<br>
 <input type="button" value="generuj">-40kg<br>
 <input type="button" value="generuj">-44kg<br>
 <input type="button" value="generuj">-48kg<br>
 <input type="button" value="generuj">-52kg<br>
 <input type="button" value="generuj">+52kg<br>
        <br>
        
        
        
        <h4>"Beniaminki (2005 – 2006)</h4>
        <h5>Dziewczynki</h5><br>
        
        <input type="button" value="generuj">-27<br>
        <input type="button" value="generuj">-33<br>
        <input type="button" value="generuj">-37<br>
        <input type="button" value="generuj">-42<br>
        <input type="button" value="generuj">-47<br>
        <input type="button" value="generuj">-53<br>
        <input type="button" value="generuj">-59<br>
        <input type="button" value="generuj">-65<br>
        <input type="button" value="generuj">-72<br>
        <input type="button" value="generuj">+72<br>
        
        <h5>Chłopcy</h5><br>
        
        <input type="button" value="generuj">-27<br>
        <input type="button" value="generuj">-33<br>
        <input type="button" value="generuj">-37<br>
        <input type="button" value="generuj">-42<br>
        <input type="button" value="generuj">-47<br>
        <input type="button" value="generuj">-53<br>
        <input type="button" value="generuj">-59<br>
        <input type="button" value="generuj">-65<br>
        <input type="button" value="generuj">-72<br>
        <input type="button" value="generuj">+72<br>
        
        
        
        <h4>Młodzicy: (2003 – 2004)</h4>
        
        <h5>Dziewczynki</h5>
        
        <input type="button" value="generuj">-37 kg<br>
        <input type="button" value="generuj">-42 kg<br>
        <input type="button" value="generuj">-47 kg<br>
        <input type="button" value="generuj">-53 kg<br>
        <input type="button" value="generuj">-59 kg<br>
        <input type="button" value="generuj">-65 kg<br>
        <input type="button" value="generuj">-72 kg<br>
        <input type="button" value="generuj">+72 kg<br>
        
        
         <h5>Chłopcy</h5>
        

            <input type="button" value="generuj">-37 kg<br>
        <input type="button" value="generuj">-42 kg<br>
        <input type="button" value="generuj">-47 kg<br>
        <input type="button" value="generuj">-53 kg<br>
        <input type="button" value="generuj">-59 kg<br>
        <input type="button" value="generuj">-65 kg<br>
        <input type="button" value="generuj">-72 kg<br>
        <input type="button" value="generuj">+72 kg<br> 
        
        
        
        <h4>Juniorki / Juniorzy (2001 – 2002):</h4>
        
        <input type="button" value="generuj">-58,5 kg<br>
        <input type="button" value="generuj">-64 kg <br>
        <input type="button" value="generuj">-69 kg<br>
        <input type="button" value="generuj">-74 kg <br>
        <input type="button" value="generuj">-79,5 kg<br>
        <input type="button" value="generuj">-84,5 kg<br>
        <input type="button" value="generuj">+84,5 kg<br>
        
        
        
        
        
        
    </div>
    
    </div>
    
    
    
</body>

</html>