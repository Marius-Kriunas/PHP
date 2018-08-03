UZDAVINYS 1


<?php

$x = 1; 
while($x <= 400) {
	$x++;
    echo '*';
} 

echo '<br>';
?>

    UZDAVINYS 2

    <?php

echo '<br>';

$a = 1;
$b = 0;
while($a <=300) {

$a = rand(0,300);
if($a >150) {
    $b++;
}

$a++;  
}
echo $b;
echo '<br>';

?>

        UZDAVINYS 3

        <?php

echo '<br>';

for($number = 1; $number <= 3000; $number++) {
    if(($number % 77) == 0)
        echo $number . ',';
}

?>

            UZDAVINYS 4

            <?php

echo '<br>';

for($row1 = 0; $row1 < 100; $row1++) {
    for($row2 = 0; $row2 < 100; $row2++) {
        echo '<span>*</span>';
}
    echo '<br>';
}

?>

                UZDAVINYS 5

                <?php
echo '<br>';

echo '<h4>a)</4h>';

while(0 < 1) {
    if(rand(0, 1) == 0) {
        
        echo 'H';
        
        break;
   
    } else {
        
        echo 'S';
        
    }
}

echo '<br>';

echo '<h4>b)</h4>';

while(0 < 1) {
    if(rand(0, 1) == 0) {
        
        echo 'H';
        
        break;
   
    } else {
        
        echo 'S';
        
    }
}

echo '<br>';

echo '<h4>c)</h4>';

$skaicius = 0;

while(0 < 1) {
    if(rand(0, 1) == 0) {
        
        echo 'H';
        
        $skaicius++;
   
    } else {
        
        echo 'S';
        
    } if($skaicius ==3) {
        break;
} 
    
}




?>
