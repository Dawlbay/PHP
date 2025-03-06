<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Cast float to int
    $san = 422.5;
    $awdariw = (int)$san;
    echo $awdariw;

    echo "<br>";

    # Cast String to int
    $soz = "35325";
    $sanga = (int)$soz;
    echo $sanga;

    echo "<br>";

    $sandar = "4242567";
    var_dump(is_numeric($sandar));

    echo "<br>";

    $sanlar = 34234.525255;
    var_dump(is_float($sanlar));

    echo "<br>";

    $sango = 4242524;
    var_dump(is_int($sango));
    ?>
</body>
</html>