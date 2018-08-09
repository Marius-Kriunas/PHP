<?php

// function addH1($text) {

//     return '<h1>' . $text . '</h1>';
// }
// echo addH1('Labas');

function addH1($text,$h) {

    if(is_numeric($h) && $h>0 && $h < 7){
    $htext = '<h1>' . $text . ' ' . $h . '</h1>';
    return $htext;
}
    echo 'nera <br>';
}
echo addH1('Labas',1);
echo addH1('Labas',2);
echo addH1('Labas',6);
echo addH1('Labas',9);
echo addH1('Labas',10);
echo addH1('Labas',8);

echo "<br>";
echo "<br>";

function colors($text) {
    $colors_text = '<span style=color:rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0, 255) . ');</span>' . ' ' . $text;
    return $colors_text;
}
    echo colors('Labas diena, ponai ir ponios');

echo "<br>";
echo "<br>";

echo colors('*');
