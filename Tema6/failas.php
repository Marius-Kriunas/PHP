<?php

echo '<h1> Failas 1</h1>';

//include 'failas_2.php';

//require __DIR__ . '/failas_2.php';

//@require_once 'failas_x.php';

//include_once 'failas_2.php';

//echo __DIR__;

$vardas = "neivesta";
$elpastas = "neivesta";
$slaptazodis = 'slaptas';

if(isset($_POST['vardas'])) {
    $vardas = $_POST['vardas'];
}

if(isset($_POST['elpastas'])) {
    $elpastas = $_POST['elpastas'];
}

if(isset($_POST['slaptazodis'])) {
    $elpastas = $_POST['slaptazodis'];
}


?>

<p>Jūsų vardas: <b> <?php echo $vardas ?> </b></p>
<p>Jūsų el. paštas <b> <?php echo $elpastas ?> </b></p>
<p>Jūsų slaptazodis: <b> <?php echo $slaptazodis ?> </b></p>

<form action="failas.php" method="post">
Jūsų vardas
<input type="text" name="vardas" value="">
<br>
Jūsų el. pašto adresas:
<input type="text" name="elpastas" value="">
<br>
Jūsų slaptazodis:
<input type="password" name="password" value="">
<br>
<input type="submit" value="Išsiųsti">
</form>






<?php


echo '<h1>Failo 1 pabaiga</h1>';
