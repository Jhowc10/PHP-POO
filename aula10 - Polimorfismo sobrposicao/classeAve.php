<?php 
    require_once'classeAnimal.php';

    class Ave extends Animal{
        private $corPena;

        /////////////////////////////////
        public function alimentar(){
            echo"<p>Comendo frutas</p>";
        }

        public function locomover(){
            echo"<p>Voando</p>";
        }

        public function emitirSom(){
            echo"Som de Ave";
        }

        public function fazerNinho(){
            echo"<p>Construiu um ninho</p>";
        }

        //////////////////////////////////////
        public function getCorPena(){
            return $this -> corPena;
        }

        ////////////////////////////////////////
        public function setCorPena($corPena){
            $this -> corPena = $corPena;
        }
    }
?>