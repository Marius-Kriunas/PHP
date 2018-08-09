
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
  </head>
    <title>Uzduotys</title>
</head>
<body>

<h1>Apklausa</h1>
<img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Gatto_europeo4.jpg/260px-Gatto_europeo4.jpg">

<form action="uzduotis_2.php" method="post">
<h4>Koks tai gyvūnas?</h4>
<input type="radio" name="Gyvunas" value="Suo">Šuo
<br>
<input type="radio" name="Gyvunas" value="Kate">Katė
<br>
<input type="radio" name="Gyvunas" value="Lape">Lapė
<br>
<input type="radio" name="Gyvunas" value="Lusis">Lūšis
<br>
<br>
<input type="submit" value="Spėti">
</form>


</body>

<?php

$Suo = '';
$Kate = '';
$Lape = '';
$Lusis = '';

if(isset($_POST['Gyvunas'])) {

    $Suo = $_POST['Gyvunas'];
}

if(isset($_POST['Gyvunas'])) {
    
    $Kate= $_POST['Gyvunas'];
}
if(isset($_POST['Gyvunas'])) {

    $Lape = $_POST['Gyvunas'];
}

if(isset($_POST['Gyvunas'])) {
    
    $Lusis= $_POST['Gyvunas'];
}

if(isset($_POST['Gyvunas'])) {


if($_POST['Gyvunas'] == "Kate") {
    echo '<h3 class="green">Jūsų atsakymas teisingas, tai yra katė</h3>';
} else {
    echo '<h3 class="red">Jūsų atsakymas neteisingas</h3>';
}
}


?>

</html>
