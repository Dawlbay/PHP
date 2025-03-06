<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 15; 
    $b = 6;

    $a += $b;
    echo "a = $a";
    echo "<br>";

    $a -= $b;
    echo "a = $a";
    echo "<br>";

    $a *= $b;
    echo "a = $a";
    echo "<br>";

    $a /= $b;
    echo "a = $a";
    echo "<br>";

    $a .= $b;
    echo "a = $a";
    echo "<br>";
    
    $a %= $b;
    echo "a = $a";
    echo "<br>";

    echo "a = $a | b = $b";
    ?>
</body>
</html>