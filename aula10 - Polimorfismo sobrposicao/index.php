<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <?php 
        //require_once'classeMamifero.php';
        //require_once'classeReptil.php';
        //require_once'classePeixe.php';
        //require_once'classeAve.php';
        require_once'classeTartaruga.php';
        require_once'classeGoldfish.php';
        require_once'classeCachorro.php';
        require_once'classeCanguru.php';
        require_once'classeArara.php';
        require_once'classeCobra.php';
        


        $a = new Tartaruga();
        $m = new Mamifero();
        $r = new Cachorro();
        $c = new Canguru();
        $k = new Reptil();
        $t = new Ave();

        $a -> locomover();
        $m -> locomover();
        $r -> locomover();
        $c -> locomover();
        $k -> locomover();
        $t -> locomover();

        $a -> emitirSom();
        $m -> emitirSom();
        $r -> emitirSom();
        $c -> emitirSom();
        $k -> emitirSom();
        $t -> emitirSom();
    ?>
    
</body>
</html>