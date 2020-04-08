<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Panel rejestracyjny</title>
<link href="style.css" rel="stylesheet" >
    </head>


<body>
<div id="container">

	<div id="box">
	<h1>PANEL REJESTRACYJNY</h1>
	
	<div id="formularz">
			<form id="myForm" method="post" action="polacz.php">
		
			<label for="name">Imię:</label>
		
		
				<input type="text" name="imie" id="imie" placeholder="Imię" />
				
	
			<label for="name">Nazwisko:</label>
			
		
				<input type="text" name="nazwisko" id="nazwisko" placeholder="Nazwisko" />
                
                
                
                <label for="name">Dywizja:</label>
			
		
				<input type="text" name="dywizja" id="dywizja" placeholder="Dywizja" />
				
		
		
		 <label for="kat_waga" id="kat_waga" name="kat_waga">Waga:</label>
 <select id="kat_waga"  name="kat_waga">
     
   <optgroup label="Dzieci I (2013 – 2014) :">
     <option  value="dzieci_I_13-14_-16kg">– 16kg</option>
     <option value="dzieci_I_13-14_-20kg">– 20 kg</option>
     <option value="dzieci_I_13-14_-24kg">– 24 kg</option>
     <option value="dzieci_I_13-14_+24kg">+ 24 kg</option>
   </optgroup>
     
        <optgroup label="Dzieci II (2011 – 2012)" id="kat_waga" name="kat_waga">
     <option value="dzieci_II_11-12_-16kg">– 16 kg</option>
     <option value="dzieci_II_11-12_-20kg">– 20 kg</option>
     <option value="dzieci_II_11-12_-24kg">– 24 kg</option>
     <option value="dzieci_II_11-12_-28kg">- 28 kg</option>
     <option value="dzieci_II_11-12_-32kg">- 32 kg</option>
     <option value="dzieci_II_11-12_-36kg">- 36 kg</option>
     <option value="dzieci_II_11-12_+36kg">+ 36 kg</option>
   </optgroup>
     
             <optgroup label="Dzieci III (2009 – 2010) :" id="kat_waga" name="kat_waga">
     <option value="dzieci_III_09-10_-20kg">– 20 kg</option>
     <option value="dzieci_III_09-10_-24kg">– 24 kg</option>
     <option value="dzieci_III_09-10_-28kg">- 28 kg</option>
     <option value="dzieci_III_09-10_-32kg">- 32 kg</option>
     <option value="dzieci_III_09-10_-36kg">- 36 kg</option>
     <option value="dzieci_III_09-10_-40kg">- 40 kg</option>
     <option value="dzieci_III_09-10_-44kg">- 44 kg</option>
     <option value="dzieci_III_09-10_-48kg">- 48 kg</option>
     <option value="dzieci_III_09-10_+48kg">+ 48 kg</option>
   </optgroup>
     
     
                  <optgroup label="Dzieci IV (2007 – 2008) :" id="kat_waga" name="kat_waga">
     <option value="dzieci_IV_07-08_-24kg">– 24 kg</option>
     <option value="dzieci_IV_07-08_-28kg">- 28 kg</option>
     <option value="dzieci_IV_07-08_-32kg">- 32 kg</option>
     <option value="dzieci_IV_07-08_-36kg">- 36 kg</option>
     <option value="dzieci_IV_07-08_-40kg">- 40 kg</option>
     <option value="dzieci_IV_07-08_-44kg">- 44 kg</option>
     <option value="dzieci_IV_07-08_-48kg">- 48 kg</option>
     <option value="dzieci_IV_07-08_-52kg">- 52 kg</option>
     <option value="dzieci_IV_07-08_+52kg">+ 52 kg</option>
   </optgroup>
     
                      
                            
            <optgroup label="Beniaminki (2005 – 2006)" id="kat_waga" name="kat_waga">
         
         <optgroup label="Dziewczynki" id="kat_waga" name="kat_waga">
     <option value="dziewcz_beniaminki_05-06_-27kg">- 27 kg</option>
     <option value="dziewcz_beniaminki_05-06_-33kg">- 33 kg</option>
     <option value="dziewcz_beniaminki_05-06_-37kg">- 37 kg</option>
     <option value="dziewcz_beniaminki_05-06_-42kg">- 42 kg</option>
     <option value="dziewcz_beniaminki_05-06_-47kg">- 47 kg</option>
     <option value="dziewcz_beniaminki_05-06_-53kg">- 53 kg</option>
     <option value="dziewcz_beniaminki_05-06_-59kg">- 59 kg</option>
     <option value="dziewcz_beniaminki_05-06_-65kg">- 65 kg</option>
     <option value="dziewcz_beniaminki_05-06_-72kg">- 72 kg</option>
     <option value="dziewcz_beniaminki_05-06_+72kg">+ 72 kg</option>
     </optgroup>
         
         <optgroup label="Chłopcy:" id="kat_waga" name="kat_waga">
     <option value="chlop_beniaminki_05-06_-27kg">- 27 kg</option>
     <option value="chlop_beniaminki_05-06_-33kg">- 33 kg</option>
     <option value="chlop_beniaminki_05-06_-37kg">- 37 kg</option>
     <option value="chlop_beniaminki_05-06_-42kg">- 42 kg</option>
     <option value="chlop_beniaminki_05-06_-47kg">- 47 kg</option>
     <option value="chlop_beniaminki_05-06_-53kg">- 53 kg</option>
     <option value="chlop_beniaminki_05-06_-59kg">- 59 kg</option>
     <option value="chlop_beniaminki_05-06_-65kg">- 65 kg</option>
     <option value="chlop_beniaminki_05-06_-72kg">- 72 kg</option>
     <option value="chlop_beniaminki_05-06_+72kg">+ 72 kg</option>
     </optgroup>
                            
     </optgroup>
     
                
                            <optgroup label="Młodzicy: (2003 – 2004) " id="kat_waga" name="kat_waga">
         
         <optgroup label="Dziewczynki" id="kat_waga" name="kat_waga">

     <option value="dziewcz_mlodzicy_03-04_-37kg">- 37 kg</option>
     <option value="dziewcz_mlodzicy_03-04_-42kg">- 42 kg</option>
     <option value="dziewcz_mlodzicy_03-04_-47kg">- 47 kg</option>
     <option value="dziewcz_mlodzicy_03-04_-53kg">- 53 kg</option>
     <option value="dziewcz_mlodzicy_03-04_-59kg">- 59 kg</option>
     <option value="dziewcz_mlodzicy_03-04_-65kg">- 65 kg</option>
     <option value="dziewcz_mlodzicy_03-04_-72kg">- 72 kg</option>
     <option value="dziewcz_mlodzicy_03-04_+72kg">+ 72 kg</option>
     </optgroup>
         
         <optgroup label="Chłopcy:" id="kat_waga" name="kat_waga">

     <option value="chlop_mlodzicy_03-04_-37kg">- 37 kg</option>
     <option value="chlop_mlodzicy_03-04_-42kg">- 42 kg</option>
     <option value="chlop_mlodzicy_03-04_-47kg">- 47 kg</option>
     <option value="chlop_mlodzicy_03-04_-53kg">- 53 kg</option>
     <option value="chlop_mlodzicy_03-04_-59kg">- 59 kg</option>
     <option value="chlop_mlodzicy_03-04_-65kg">- 65 kg</option>
     <option value="chlop_mlodzicy_03-04_-72kg">- 72 kg</option>
     <option value="chlop_mlodzicy_03-04_+72kg">+ 72 kg</option>
     </optgroup>
                                
            </optgroup>
     
        <optgroup label="Juniorki / Juniorzy (2001 – 2002):" id="kat_waga" name="kat_waga">
     <option value="juniorzy_01-02_-58,5kg">– 58,5 kg</option>
     <option value="juniorzy_01-02_-64kg">- 64 kg</option>
     <option value="juniorzy_01-02_-69kg">- 69 kg</option>
     <option value="juniorzy_01-02_-74kg">- 74 kg</option>
     <option value="juniorzy_01-02_-79,5kg">- 79,5 kg</option>
     <option value="juniorzy_01-02_-84,5kg">- 84,5 kg</option>
     <option value="juniorzy_01-02_+84,5kg">+ 84,5 kg</option>

   </optgroup>
        
        
        
 </select> 
   <p></p>
		
	                <label for="name">Wpisz Wagę:</label>
			
		
				<input type="number" name="waga" id="waga" placeholder="Waga" />
        
			<input id="submit" name="submit" type="submit" value="Wyślij" onclick="todoList()">
			</form>
	 </div>
	
	
	<ol id="todoList"></ol>
	
	</div>
</div>
    
    

    
    <script src="script.js"></script>
<a href="logowanie.php">Panel Administratora</a>

</body>

</html>