<?php 
    require_once'classeMamifero.php';

    class Cachorro extends Mamifero{

        public function alimentar(){
            echo"<p>Comendo substâncias</p>";
        }

        public function locomover(){
            echo"<p>Correndo</p>";
        }

        public function emitirSom(){
            echo"<p>Latindo</p>";
        }

        public function enterrarOsso(){
            echo"<p>Enterrou o osso</p>";
        }

        public function abanarRabo(){
            echo"<p>Abanando o rabo</p>";
        }
    }
?>