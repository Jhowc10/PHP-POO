<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso - PHP POO</title>
</head>
<body>
    <?php 
        require_once'caneta.php';

        //Instanciado a classe caneta
        $c1 = new Caneta;
        $c1 -> cor     = "Azul";
        $c1 -> ponta   = 0.5   ;
        $c1 -> tampada = false ;     // true = 1 e false = 0
        
        
        
        
        // Mostrando o estado atual de $c1, podemos usar var_dump() ou print_r()
        print_r($c1);
        echo"<br> ' ' <br>";
        echo"<br> ' ' <br>";
        
        
        
        
        //Chamando métodos
        $c1 -> destampar(); // Está modificando o atributo utilizando a palavra "this"

        $c1 -> rabiscar();




        //Podemos criar um outro objeto, podemos criar quantos objetos desejarmos
        $c2 = new Caneta;
        $c2 -> cor     = "Verde";
        $c2 -> carga   = 50     ;
        $c2 -> tampar();

        var_dump($c2);
        ?>
    
</body>
</html>