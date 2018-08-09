<?php

// function sudeti($vienas, $du)
// {
//    $rezultatas = $vienas + $du;
//    return $rezultatas;
// }
// //norint issikviesti sia funkcija, reikia paduoti du parametrus:

//     echo sudeti(12,88);
//     echo '<br>';

  
// function sudeti($vienas = 10, $du = 15)
// {
//    return $vienas + $du;
// }
// echo sudeti().'<br>';
// echo sudeti(1).'<br>';
// echo sudeti(1,2).'<br>';

// echo '<br>';

// function vidurkis(...$skaiciai)
// {
//    $sudetis = 0;
//    foreach ($skaiciai as $val)
//  {
//    $sudetis += $val;
//  }
//  $vidurkis = $sudetis / count($skaiciai);
//  return $vidurkis;
// }
// echo vidurkis(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);



$homepage = file_get_contents('http://delfi.lt/');
echo $homepage;
