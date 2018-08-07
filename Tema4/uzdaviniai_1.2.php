<?php

// 1 uzduotis

$array = [];
$x = 0;

echo '<pre>';
//int_r($array);

for($x=0; $x<=30;$x++) {
echo 'Numeris: '. $x . '<br>';
    $array[] = rand(5,25);
}
print_r($array);

echo '<br>';

// 2.a uzduotis

$count = 0;
foreach ($array as $stalcius) {
    if($stalcius>10) {
        $count++;
    }
}

echo '<br>didesniu uz 10: '. $count;

echo '<br>';

//2.b uzduotis

$max = 0;
foreach ($array as $stalcius) {
    if($stalcius > $max) {
        $max = $stalcius;
    }
    // mazesnis nei max
}
echo '<br> maksimalus: ' . $max;

echo '<br>';

//2.c uzduotis

$sum = 0;
foreach ($array as $stalcius) {
$sum = $sum += $stalcius;
}
echo '<br> elementu suma: ' . $sum;

echo '<br>';

// 2.d uzduotis

foreach($array as $vardas =>$stalcius) {
    echo '<br>minus indeksas: ' .($stalcius - $vardas);
}
echo '<br> sum: ' . $sum;

echo '<br>';

// 2.e uzduotis

/*$apverstas_array = [];
$array_dydis = $count($array); // = 30
$apversto_array_indekso = 0; // apversto masyvu stalciaus vardas

foreach ($array as $vardas => $stalcius) {
  $apverstas_array =[($array_dydis - $vardas - 1)] = $stalcius;
}

print_r($apverstas_array);*/

echo '<br>';

// 2.f uzduotis

for($x=0; $x<=10;$x++) {
        $array[] = rand(5,25);
    }

    print_r($array);

    echo '<br>';

// 2.g uzduotis

$poriniai = [];
$neporiniai = [];
foreach($array as $stalcius) {
    if($stalcius % 2 == 0) {
        $poriniai[] = $stalcius;
    } else {
        $neporiniai[] = $stalcius;
    }
} 
echo 'poriniai: <br>';
print_r($poriniai);
echo 'neporiniai: <br>';
print_r($neporiniai);

echo '<br>';

// 2.h uzduotis

foreach ($array as $indeksas => $stalcius) {
    if($poriniai > 15) {
        $array[$indeksas] == 0;
    }
}
echo 'Poriniai elementai didesni uz 15, lygus = 0: <br>';
print_r($array);

echo '<br>';

// 2.i uzduotis
foreach ($array as $indeksas => $stalcius) {
    if($stalcius > 10) {
        echo $indeksas .'<br>';
        break;
    }
}

echo '<br>';

// 2.j uzduotis

foreach ($array as $indeksas => $stalcius) {
    if($indeksas % 2 == 0) {
        unset($array[$indeksas]);
    }
}
echo 'istrinti poriniai masyvai: <br> ';
print_r($array);

echo '<br>';

// 2.k uzduotis


echo '</pre>';
