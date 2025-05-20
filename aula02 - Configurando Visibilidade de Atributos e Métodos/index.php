<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso - PHP POO</title>
</head>
<body>
    <pre>  <!-- Deixa pré formatado, melhorando a visualização na pagina -->
        <?php 
            require_once'caneta.php';

            //Instanciado a classe caneta
            $c1 = new Caneta;
            $c1 -> modelo = "Bic cristal";
            $c1 -> cor    = "Azul"       ;
            //$c1 -> ponta  = "0.5"        ;
            //$c1 -> carga  = "99"         ;
            //$c1 -> tampada = true        ;

            $c1 -> rabiscar();
            $c1 -> destampar()  ;
            print_r($c1);
        ?>
    </pre>
</body>
</html>