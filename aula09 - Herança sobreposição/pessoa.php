<?php 
    // Se declarar "final" na linha da classe, está não poderá ter herança.
    abstract class Pessoa{
        protected $nome;   // Para acessar o nome diretamente, se deixar "private", teremos que usar o getNome
        private $idade;
        private $sexo;
    

        // Metodo final
        public final function fazerAniversario(){  // Ao colocar "final" ele não deixa o
            $this -> idade ++;
        } 


        // Metodos especiais
        public function getNome(){
            return $this -> nome;
        }

        public function getIdade(){
            return $this -> idade;
        }

        public function getSexo(){
            return $this -> sexo;
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
    }
?>