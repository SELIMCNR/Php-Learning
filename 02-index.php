<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
    <div class="alert alert-primary mt-5">
        <?php  
        $txt ="Php";
        $_x=5;
        $y=10;
        $age=30;
        $Age1=40;
        echo "$txt güzel bir dil  <br>";
        $x=10;
        echo $age."<br> ";
        function Test(){
            echo "<p> X değişkenine fonksiyon içinden ulaşamadım çünkü global değişkenler fonksiyon içinde ulaşılmaz </p>";
        }
        Test(); //fonksiyon çalışır
        echo "<p> X değişkeni fonskiyon dışında ulaştım : $x </p>";

        
        function Test1(){
            $x=10;  // bu değiiikene dışardan ulaşılmaz
            echo "<p> X değişkenine fonksiyon içinden ulaştım:$x</p> ";
        }

       

        Test1(); //fonksiyon çalışır
        echo "<p> X değişkeni fonskiyon dışında ulaştım : $x </p>";
         
        


        ?>
    </div>
</div>
<link rel="stylesheet" href="javascript/bootstrap.min.js">
</body>
</html>