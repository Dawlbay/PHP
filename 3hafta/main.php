<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $a = 5;
    // echo $a++;
    // echo ++$a;

    $a = 15;
    $b = 6;

    echo "a = $a";
    echo "<br>";
    echo "b = $b";
    $c = $a++;
    echo "<br>";
    echo "c = $c";
    echo "<hr>";
    $d = ++$a;
    echo "d = $d";
    echo "<hr>";
    $e = $a % $b;
    echo "e = $e";
    echo "<hr>";
    $f = $b--;
    echo "f = $f";
    echo "<hr>";
    $g = --$b;
    echo "g = $g";

    echo "<hr>";
    echo "En son a = $a En son b = $b";
    echo "<hr>";
    $h = ++$a - $b++;
    echo "h = $h";
    echo "<hr>";
    $i = ($a--) + (--$b);
    echo "i = $i";
    echo "<hr>";
    echo "a = $a b = $b c = $c d = $d e = $e f = $f g = $g h = $h i = $i";
    ?>
</body>
</html>