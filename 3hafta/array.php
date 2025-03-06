<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $meyveler[0] = "elma";

    // $gunler = array (1=>"Pazartesi", "Sali", "Carsanba", "Persembe", "Cuma", "Cumartesi", "Pazar");
    // echo "Bugun " . $gunler[4]; // Persembe
    #undefined array key

    // $linux = array ("KDE" => "Pardus", "GNOME" => "Fedora", "XFCE" => "Xubuntu");

    $linux["KDE"] = "Pardus";
    $linux["GNOME"] = "Fedora";
    $linux["XFCE"] = "Xubuntu";

    echo $linux["GNOME"];

    ?>
</body>
</html>