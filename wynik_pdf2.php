<?php


$pol2 = mysqli_connect('localhost','root','','leo');

if (!$pol2) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}








$sql = "SELECT imie, nazwisko, dywizja, waga, kategoria_wagowa FROM `zgloszenia` WHERE kategoria_wagowa = 'dzieci_I_13-14_-20kg' AND waga >=16 AND waga <20";
$result = mysqli_query($pol2, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo $row["imie"]." ".  $row["nazwisko"]. " _______"."   Kategoria_wagowa: " . $row["kategoria_wagowa"]. "   waga: ". $row["waga"]. "<br>"."<br>";
    }
} else {
    echo "0 results";
}



mysqli_close($pol2);


?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title></title>
	<link rel="stylesheet" href="style2.css">
	
</head>

<body>
	
    
</body>
</html>

