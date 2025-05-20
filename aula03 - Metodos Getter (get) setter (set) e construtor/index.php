<!DOCTYPE html>
<html lang="or-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get, set e construct</title>
</head>
<body>
    <pre>
        <?php
            require_once'classeCaneta.php';
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("Jhow", "Verde", 1.0);

            $c1 -> setModelo("BIC");
            $c1 -> setPonta (0.5);

            //Quando há () temos que interpolar, criar um bloco, para isso utilizamos as {}
            print "Eu tenho uma caneta {$c1 -> getModelo()} de ponta {$c1 -> getPonta()} <br><br>";


            print_r($c1);
            print_r($c2);

        ?>
    </pre>
    

</body>
</html>