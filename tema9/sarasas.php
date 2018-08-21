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

$sql = "SELECT savininko_vardas, augintinio_vardas FROM pets LIMIT 20";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   // kiekvieną eilutę atskirai
   while($row = mysqli_fetch_assoc($result)) {
       echo "Name: " . $row["savininko_vardas"]. " " . $row["augintinio_vardas"]. "<br>";
   }
} else {
   echo "0 results";
}
