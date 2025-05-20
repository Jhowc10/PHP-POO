<?php 
    require_once'pessoa.php';

    class Visitante extends Pessoa{
        private $matricula;
        private $curso;

        // Metodo 
        public function PagarMensaliade(){
            echo"<p>Pagando mensalidade do aluno <strong>" . $this -> nome . "</strong></p>";
        }


        // Método especial
        public function getMatricula(){
            return $this -> matricula;
        }

        public function getCurso(){
            return $this -> curso;
        }

        public function setMatricula($matricula){
            $this -> matricula = $matricula;
        }

        public function setCurso($curso){
            $this -> curso = $curso;
        }
    }
?>