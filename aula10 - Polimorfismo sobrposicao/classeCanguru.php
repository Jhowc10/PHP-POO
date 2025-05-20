<?php 
    require_once'classeMamifero.php';

    class Canguru extends Mamifero{

        public function locomover(){
            echo"<p>Pulando</p>";
        }

        public function emitirSom(){
            echo"<p>Som de canguru</p>";
        }

        public function UsarBolsa(){
            echo"<P>Canguruzinho entrou na bolsa</P>";
        }

    }
?>