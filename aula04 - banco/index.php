<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <?php 
        require_once"banco.php";

        //Camando a função
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();


        $p1 -> abrirConta("CC");
        $p1 -> setDono("Jubileu");

        $p1 -> setNumConta(1111);

        $p1 -> depositar(300);

        $p1 -> pagarMensal();


        $p2 -> abrirConta("CP");
        $p2 -> setDono("Cleuza");
        $p2 -> setNumConta(2222);

        $p2 -> depositar(500);

        $p2 -> sacar(100);

        $p2 -> pagarMensal();
        
        print_r($p1);
        echo"<br><br>";
        print_r($p2);
    ?>
    
</body>
</html>