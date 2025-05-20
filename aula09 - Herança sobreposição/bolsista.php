<?php 
    require_once'aluno.php';

    class Bolsista extends Aluno{
        private $bolsa;

        public function pagarMensalidade(){    // Sobrespondo o metodo pagarMensalidade do Aluno
            echo"<p>O <strong>" . $this -> nome . "</strong> é bolsista, então ele paga com desconto</p>";
        }

        public function renovarBolsa(){
            echo"Bolsa renovada";
        }

        public function getBolsa(){
            return $this -> bolsa;
        }

        public function setBolsa($bolsa){
            $this -> bolsa = $bolsa;
        }
    }
?>