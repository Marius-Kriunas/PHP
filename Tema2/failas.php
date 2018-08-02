<?php

$class = 'red';

$id = 'blue';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2 pamoka</title>
</head>

<style>

    .red {
        background: #ff0000;
    }

    #blue {
         font-size: 50px;
    }

    </style>

<body class="<?php echo $class; ?>">

<div id="<?php echo $id; ?>">Laba diena, mokiniai

</div>


</body>
</html>
