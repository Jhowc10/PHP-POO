<?php 
    require_once'classeAnimal.php';

    class Reptil extends Animal{
        private $corEscama;

        //////////////////////////
        public function alimentar(){
            echo"<p>Comendo vegetais</p>";
        }

        public function locomover(){
            echo"<p>Rastejando</p>";
        }

        public function emitirSom(){
            echo"<p>Som de réptil</p>";
        }


        ///////////////////////////////
        public function getCorEscama(){
            return $this -> corEscama;
        }

        ///////////////////////////////
        public function setCorEscama($corEscama){
            $this -> corEscama = $corEscama;
        }
    }
?>