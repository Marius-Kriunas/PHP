<?php

$a = [1,2,3,4];

foreach ($a as $v) {
    # code...
}

foreach ($a as $v) {
    echo '<br>' .$v . '-' . $a[3];
}

echo '<br>';


$a = 14;
$b = 12;
$c = 10; // ar jis didesnis uz b?

if($b > $a) {
    echo 'b yra daugiau uz a';
}
elseif ($a == $b) {
    echo 'a yra lygu b';
}
 else { 
     echo 'a yra daugiau uz b';
} 
 
 echo '<br>';

if($b < $c) {
    echo 'c yra daugiau uz b';
} elseif($b == $c) {
    echo 'b yra lygu c';
}
else {
    echo 'b yra daugiau uz c';
}

echo '<br>';

$b = 'Laba diena<br>';

for($a = 1; $a <= 10; $a++) {
    echo $b;
}

echo '<br>';

$c = 1;
while ($c <= 10) {
    echo $b;
    $c++;
}

echo '<br>';

$a = [1,2,3,4, 'laba' => 'diena'];

foreach ($a as $v => $stalcius) {
    # code...
}

foreach ($a as $v) {
    echo '<br>reiksme' . ' ' . $v . ' indeksas : ' .$stalcius;
}

echo '<br>';
echo '<br>';

$a = 'labas';
for($x = 1; $x <=5; $x++) {

    echo 'Prasideda mazas ciklas: ' .$a . ' <br>';

    for($xx = 1; $xx <=5; $xx++) {


    echo 'Pasveikinimas: ' .$a. ' <br>';


    }

    echo 'Pasibaigia mazas ciklas <br>';
}

$masyvas = [
    'pirmas' => ['a', 'b', 'c'],
    'antras' => ['d', 'e', 'f'],
    'trecas' => ['g', 'h', 'm']
];

    echo '<pre>';

    print_r($masyvas);

    foreach ($masyvas as $v) {
        echo '<br> prasideda mazas ciklas <br>';
        
        foreach ($v as $vv) {
            echo '<br>' .$vv;
            echo "<br> $vv kabutes dvigubos";
    }
}
