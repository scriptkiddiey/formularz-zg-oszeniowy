

<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Panel Administratora</title>
<link href="style.css" rel="stylesheet" >
    </head>


<body>
<div id="container">
<div id="box">
    
    
    
    <?php
    echo '<pre>';
    if( isset($_GET['error'])){
        switch($_GET['error']){
                case 0; echo 'Zaloguj sie do systemu'; break;
                case 1; echo 'Prosze wypelnic wszystkie pola'; break;
                case 2; echo 'uzytkownik nie istnieje'; break;
                case 3; echo 'Podane hasło jest nieprawidłowe'; break;
        }
    }
    
    
    echo '<pre>';
    ?>
   <h1>Panel Administratora</h1> 
    
    <form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" name="log_in" value="Zaloguj się" />
	
	</form>
    
    
    </div>
	
	
</div>
    
    

    
    <script src="script.js"></script>
</body>

</html>