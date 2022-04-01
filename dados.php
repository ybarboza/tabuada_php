<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $c = 0;
            $num = $_GET["num"];

            while ($c != 10) {
                $c +=1;
                $result = $num * $c;
                echo "$num x $c = $result</br>";
            }
        ?>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>