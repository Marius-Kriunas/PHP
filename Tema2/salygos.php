<?php


$a = 0;
$b = 'a';
var_dump($a ==$b);

$c = '1';
$d = '01';
var_dump($c == $d);

$e = '10';
$f = '1e1';
var_dump($e == $f);

$g = 100;
$h = '1e2';
var_dump($g == $h);

echo '<br>';
echo '<br>';

$drambliai = 5;
$zebrai = 3;

if($drambliai > $zebrai) {
    echo 'zebru daugiau';
    $drambliai = $drambliai + 1;
    echo '<br>';
    echo $drambliai;
}
else echo 'drambliÅ³ daugiau';

echo '<br>';
echo '<br>';

$jonas = rand(5,25);
$petras = rand(10,20);

if($jonas > $petras) {

    echo 'LaimÄ—jo Jonas';
    echo '<br>';


} else if($jonas < $petras) {

    echo 'LaimÄ—jo Petras';
    echo '<br>';


} else echo 'Lygosios ';

    echo 'Petras: ' . $petras;

    echo '<br>';

    echo 'Jonas: ' . $jonas;
