<?php 
    require_once 'Pessoa.php';

    class Aluno extends Pessoa{
        // Atributos
        private $matricula;
        private $curso;

        //Metodos
        public function cancelarMatricula(){
            echo "<p>Matrícula Cancelada</p>";
        }

        //Metodos Especiais
        public function getMatricula(){
            return $this -> matricula;
        }

        public function getCuros(){
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