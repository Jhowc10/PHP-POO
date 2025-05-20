<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juntando tudo</title>
</head>
<body>
    <pre>
        <?php
        require_once'classeVideo.php';
        require_once'classeVisualizacao.php';
        require_once'classeGafanhoto.php';

        // Criando vetores de video
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        
        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Cleuza", 29, "F", "cleu");

        $vis[0] = new Visualizacao($g[0], $v[2]); // Jubileu assiste HTML5
        $vis[1] = new Visualizacao($g[0], $v[1]); // Jubileu assiste PHP

        $vis[0] -> avaliar();
        $vis[1] -> avaliar(85);

        print_r($vis);
    
        

        ?>
    </pre>
</body>
</html>