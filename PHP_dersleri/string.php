<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo strlen("Hello");
    echo str_word_count("Hello");
    echo strpos("Hello World", "World");
    echo strtoupper("hello");
    echo strtolower("HELLO");

    $salem = "Salem Dunya";
    echo str_replace("Dunya", "Timur", $salem);

    echo strrev("Hello");
    echo trim(" Hello");

    $x = "Hello World";
    $y = explode(" ", $x);
    print_r($y);

    $world = "Hello World!";
    echo substr($world, 6, 5); // World

    
    ?>
</body>
</html>