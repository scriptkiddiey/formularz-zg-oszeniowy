<?php


$pol2 = mysqli_connect('localhost','root','','leo');

if (!$pol2) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "polaczenie z bazą" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($pol2) . PHP_EOL;

mysqli_close($pol2);



// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();


// Write some HTML code:
$mpdf->WriteHTML('


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title></title>
	<link rel="stylesheet" href="style2.css">
	
</head>

<body>
	
    <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
        <table>
    <tr>
        <td>imie nazwisko</td>
        </tr>
        <tr>
        <td>imie nazwisko</td> 
        </tr>
        
    </table>
	<br>
    
    
</body>
</html>


'); 

// Output a PDF file directly to the browser
$mpdf->Output();
?>