<?php 
    require_once'classeReptil.php';

    class Tartaruga extends Reptil{

        public function alimentar(){
            echo"<p>Comendo verduras</p>";
        }

        public function locomover(){
            echo"<p>Andando devagar</p>";
        }

        public function emitirSom(){
            echo"<p>Som de tartaruga</p>";
        }
    }
?>