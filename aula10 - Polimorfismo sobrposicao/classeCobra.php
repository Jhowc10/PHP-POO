<?php 
    require_once'classeReptil.php';

    class Cobra extends Reptil{
        public function alimentar(){
            echo"<p>Comendo um rato</p>";
        }

        public function locomover(){
            echo"<p>Rastejando</p>";
        }

        public function emitirSom(){
            echo"<p>Som de cobra</p>";
        }
    }
?>