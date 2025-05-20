<?php 
    require_once'classeAni.php';

    class Mami extends Ani{
        protected $corPelo;

        public function emitirSom(){
            echo"<p>Som de mamifero</p>";
        }
    }
?>