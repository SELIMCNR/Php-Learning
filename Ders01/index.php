<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: wheat;
            color: white;
        }
    </style>
    <script>

        function Deneme() {
            document.getElementById("IslemAlan").innerHTML = "Selim çınar";
        }


    </script>
</head>

<body>
    <?php 
        echo "Selim Çınar";
 
    ?>
    <input type="button" onclick="Deneme();" value="İslemi yap">
    <br />
    <div id="IslemAlan"></div>



</body>

</html>