<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pirma pamoka</title>
</head>

<body>

    <h1>Sveiki visiems</h1>

    <?php
  
 echo 'Labas PHP'; 
 
echo '<br>';
    echo '<br>';
    
$name = 'Marius';
$surname = 'Kriūnas';
$birth_years = 1984;
$this_years = 2018;
    
    echo 'Aš esu ' . $name . ' ' . $surname . '. Man yra' . ' ' . ($this_years - $birth_years) . ' metai.';
    
        
?>


</body>

</html>
