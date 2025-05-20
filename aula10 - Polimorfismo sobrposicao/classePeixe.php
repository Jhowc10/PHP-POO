<?php 
    require_once'classeAnimal.php';

    class Peixe extends Animal{
        private $corEscama;

        /////////////////////////////////
        public function alimentar(){
            echo"<p>Comendo substâncias</p>";
        }

        public function locomover(){
            echo"<p>Nadando</p>";
        }

        public function emitirSom(){
            echo"Peixe não faz som";
        }

        public function soltarBolha(){
            echo"<p>Soltou uma bolha</p>";
        }

        ////////////////////////////////////
        public function getCorEscama(){
            return $this -> corEscama;
        }

        ///////////////////////////////////
        public function setCorEscama($corEscama){
            $this -> corEscama = $corEscama;
        }
    }
?>