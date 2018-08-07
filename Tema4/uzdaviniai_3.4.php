<?php

// 3 uzdavinys

$masyvas = [];
$masyvo_masyvas = [];

for($x = 0; $x < 10; $x++) {

    for($y = 0; $y <5; $y++) {

        $masyvo_masyvas[] = rand(5,25);
        
    }
    $masyvas[] = $masyvo_masyvas;
    unset($masyvo_masyvas);
}
echo '<pre>';
print_r($masyvas);

// 4.a uzdavinys

$count = 0;

foreach($masyvas as $masyvo_masyvas) {
    foreach($masyvo_masyvas as $indeksas) {
    if($indeksas > 10) {
        $count++;
        }
    }
}
echo 'elementu didesniu uz 10: ' . $count;

echo '<br>';

//4.b uzduotis

$max = 0;

foreach ($masyvas as $masyvo_masyvas) {
    foreach ($masyvo_masyvas as $indeksas) {
        if($indeksas > $max) {
            $max = $indeksas;
        }
       
    }
    
}
echo '<br> maksimalus: ' . $max;

echo '<br>';
