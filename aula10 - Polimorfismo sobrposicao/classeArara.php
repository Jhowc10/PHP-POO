<?php 
    require_once'classeAve.php';

    class Arara extends Ave{
        public function alimentar(){
            echo"<p>Comendo sementes</p>";
        }

        public function locomover(){
            echo"<p>Voando</p>";
        }

        public function emitirSom(){
            echo"<p>Piando</p>";
        }
    }
?>