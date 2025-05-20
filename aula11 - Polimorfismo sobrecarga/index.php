<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo sobrecarga</title>
</head>
<body>
    <!-- O PHP não suporta polimorfismo de sobrecarga, então usamos funções de nomes diferentes para substituir a sobrecarga -->

    <?php 
        require_once"classeCachor.php";

        $m = new Mami();
        $l = new Lo();
        $c = new Cachor();

       $c -> reagirFrase("Olá");
       $c -> reagirFrase("Vai apanhar");
       $c -> reagirHora(11, 45);
       $c -> reagirHora(21, 00);
       $c -> reagirDono(true);
       $c -> reagirDono(false);
       $c -> reagirPeso(2, 12.5);
       $c -> reagirPeso(17, 4.5);
    ?>
</body>
</html>