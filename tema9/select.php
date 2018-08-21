<?php

$servername = "localhost";
$username = "root";
$password = "ultra";

// Prisijungiam prie serverio
$conn = mysqli_connect($servername, $username, $password, 'nauja_baze');

// Patikrinam prisijungimą
// if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

$Suo = '';
$Kate = '';
$Briedis = '';


if(isset($_POST['gyvunai'])) {
    $gyvunas =$_POST['gyvunai'];


$sql = "SELECT savininko_vardas, augintinio_vardas FROM pets WHERE rusis='".$gyvunas."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   // kiekvieną eilutę atskirai
   while($row = mysqli_fetch_assoc($result)) {
       echo "Savininko vardas: " . $row["savininko_vardas"]. ' , '. "Augintinio vardas: " . $row["augintinio_vardas"]. "<br>";
   }
} else {
   echo "0 results";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="select.php" method="post">
<select name="gyvunai">

<option name="gyvunai" value="Suo">Šuo</option>
<br>
<option name="gyvunai" value="Kate">Katė</option>
<br>
<option name="gyvunai" value="Briedis">Briedis</option>
<br>
</select>
Savininko vardas:<input type="text" value="Savininkas" name="new">
Augintinio vardas:<input type="text" value="Augintinis" name="new">
<br>
<input type="submit" name="animal" value="Pasirinkti">
</form>
    
</body>
</html>
