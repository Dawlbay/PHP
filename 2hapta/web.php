<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #000;
            color: greenyellow;
            font-size: 30px;
            margin: 30px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php

    // Furkan

    # Odev - 1 Kullanicidan alinan bir sayinin basamak sayilarini toplayan bir PHP programi yaziniz

    # Odev - 2 Kullanicidan alinan iki sayinin ilk  hesaplayan bir PHP programi yaziniz

    # Odev - 3 Kullanicidan alinan bir sayinin faktoriyelini hesaplayan bir PHP programi yaziniz

    $metin = "<b><em>Merhaba Dunay</em></b>";
    // $Metin = "Nasilsiniz";
    // $adiSoyadi = "Furkan Aydin";

    

    echo $metin;
    
    echo "<br>";
    echo "<b><em>Merhaba Dunay</em></b>";
    // echo "<br>";
    // echo $Metin;

    // echo "<br>";
    // echo $adiSoyadi;

    // echo "<br>";
    // $sayi = 5;
    // echo $sayi;


    # Degisken isimlendirme kurallari
    # 1. Degisken isimleri sayi ile baslayamaz
    # 2. Degisken isimleri bosluk iceremez
    # 3. Degisken isimleri ozel karakter iceremez
    # 4. Degisken isimleri case sensitive'dir


    $ad = "Timur";
    $soyad = "Kaya";
    
    echo "<br>";
    echo "<br>Ad: " .$ad. "<br>Soyad: " .$soyad;

    echo "<br>";
    echo "Adi Soyadi: " .$ad. " " .$soyad;


    $say1 = 21;
    $say2 = 61;
    $toplam = $say1 + $say2;
    echo "<br> Toplam: " .$toplam;
    ?>
</body>
</html>