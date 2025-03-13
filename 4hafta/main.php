<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-size: 20px;
            background-color: #333;
            color: aquamarine;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php 
    // $kullanici = 250;
    // echo "Kullanici: $kullanici <br>";
    // if ($kullanici > 100 && $kullanici < 200) {
    //     echo "%5 indirim: ". $kullanici * 0.95;
    // } else if ($kullanici > 200) {
    //     echo "%10 indirim: ". $kullanici * 0.90;
    // } else {
    //     echo "indirim yok";
    // }


    // $kullanici = "Galatasaray";
    // switch ($kullanici) {
    //     case "Galatasaray":
    //         echo "Tutugunuz takimin kurulus tarihi: 1/1/1990";
    //         break;
    //     case "Fenarbahce":
    //         echo "Tutugunuz takimin kurulus tarihi: 1/1/1995";
    //         break;
    //     case "Besiktas":
    //         echo "Tutugunuz takimin kurulus tarihi: 1/1/1881";
    //         break;
    //     default:
    //         echo "Takim listede yok";
    // }

    
    # and, or, not
    
    
    // $takim = "-";
    // switch ($takim) {
    //     case "*":
    //         echo "2 * 2 = " . 2 * 2;
    //         break;
    //     case "+":
    //         echo "4 + 4 = " . 4 + 4;
    //         break;
    //     case "/":
    //         echo "8 / 8 = " . 8 / 8;
    //         break;
    //     default:
    //         echo "8 - 4 = " . 8 - 4;
    // }


    // $ortam = 7;
    // echo $ortam == 7 ? "Ortalamanin degeri: 7"


    $sayi = 2;
    $asalSayilar = [];
    while ($sayi < 1000) {
        $i = 2;
        $bolundu = false;
        while ($i < $sayi) {
            if ($sayi % $i == 0) {
                $bolundu = true;
                break;
            }
            $i++;
        }
        if (! $bolundu) {
            $asalSayilar[] = $sayi;
        }
        $sayi++;
    }
    for ($i = 0; $i < count($asalSayilar); $i++) {
        echo "Asal sayi ". $i+1 . " : " . $asalSayilar[$i] . "<br>";
    }
    ?>
</body>
</html>