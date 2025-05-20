<?php 
    require_once'classePeixe.php';

    class Goldfish extends Peixe{
        public function alimentar(){
            echo"<p>Comendo substâncias</p>";
        }

        public function locomover(){
            echo"<p>Nadando</p>";
        }

        public function emitirSom(){
            echo"<p>Peixe não faz som</p>";
        }
    }
?>