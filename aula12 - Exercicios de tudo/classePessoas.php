<!-- 
 Quando o tituo no projeto estiver escrito em "itálico", significa que a classe é abstrata 
 
 No projeto, o " # " antes da variável significa que é "private"
 -->

<?php 
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        public function __construct($nome, $idade, $sexo){
            $this -> nome = $nome;
            $this -> sexo = $sexo;
            $this -> idade = $idade;
            $this -> experiencia = 0;
        }

        public function ganharExp($n){
            $this -> experiencia += $n; 
        }

        public function getNome(){
            return $this -> nome;
        }

        public function getIdade(){
            return $this -> idade;
        }

        public function getSexo(){
            return $this -> sexo;
        }

        public function getExperiencia(){
            return $this -> experiencia;
        }

        public function setNome($nome){
            $this -> nome = $nome;
        }

        public function setIdade($idade){
            $this -> idade = $idade;
        }

        public function setSexo($sexo){
            $this -> sexo = $sexo;
        }

        public function setExperiencia($experiencia){
            $this -> experiencia = $experiencia;
        }
    }
?>