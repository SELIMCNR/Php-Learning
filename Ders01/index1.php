<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Örnek1
        echo "Selim Çınar"; // Çift tırnakla yazım olabilir

        //Örnek2
        echo 'NAME'; // tek tırnakla yazım olabilir,String değer yazımı

        //Örnek3
        echo 8 ; // integer değer yazımı
        
        //Örnek4
        echo 8.50; // ondalık sayı yazımı

        //Örnek5
        echo "sadaddsdadsadsad";
        
       //Örnek6 
       echo 'Selim Çınar -Dil eğitimi - Türkiye \'nin yeni eğitim sitesi '; // \ifadesi ' fonksiyoniletisini zayıflatıyor.
        
       //Örnek7 
       echo "Selim Çınar -Dil eğitimi - Türkiye 'nin yeni eğitim sitesi ";

       //Örnek8
       $OrnekBir = "Btk eğitim";
       echo "Selim Çınar - $OrnekBir-Eğitim dir";

       $Deneme = "Bu bir denem metinidir";

    ?>
    <?php 
    echo $Deneme;
    ?>
    <?=$Deneme?> <!--Kısayoldan yazım--->



</body>
</html>