<?php

$x = 0;
$y = 0;



if(isset($_POST['x'])) {

    $x= (int) $_POST['x'];
}

if(isset($_POST['y'])) {
    
    $y= (int) $_POST['y'];
}

$suma = $x + $y;

echo $suma;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uzduotys</title>
</head>
<body>
    
<form action="uzduotis_1.php" method="post">
X:
<input type="text" name="x" value="">
<br>
Y:
<input type="text" name="y" value="">
<br>
<input type="submit" value="Sumuoti">
</form>





</body>
</html>
