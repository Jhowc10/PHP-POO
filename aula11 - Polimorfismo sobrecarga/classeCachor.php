<?php 
    require_once"classeLo.php";

    class Cachor extends Lo{

        public function emitirSom(){
            echo"<p>Au, Au, Au</p>";
        }

        function reagirFrase($frase){
            if($frase == "<p>Toma Comida</p>" || $frase == "<p>Olá</p>"){
                echo"<p>Abanar e Latir</p>";
            }else{
                echo"<p>Rosnar</p>";
            }
        }

        function reagirHora($hora, $min){
            if($hora < 12){
                echo"<p>Abanar</p>";
            }else if($hora >= 18){
                echo"Ignorar";
            }else{
                echo"<p>Abanar e Latir</p>";
            }
        }

        function reagirDono($dono){
            if($dono == true){
                echo"<p>Abanar</p>";
            }else{
                echo"<p>Rosnar e latir</p>";
            }
        }

        function reagirPeso($idade, $peso){
            if($idade < 5){
                if($peso > 10){
                    echo"<p>Abanar</p>";
                }else{
                    echo"<p>Latir</p>";
                }

            }else{

                if($peso < 10){
                    echo"<p>Rosnar</p>";
                }else{
                    echo"<p>Ignorar</p>";
                }
            }
        }
    }
?>