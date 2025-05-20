<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>

    <pre>
        <?php
            require_once"class.php";

            $c = new ControleRemoto();

            
            $c -> ligar();
            $c -> abrirMenu();
            $c -> play();
        
        ?>
    </pre>
    
</body>
</html>