<?php 
    require_once'classePessoas.php';

    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);  // Chamada do construtor da superclasse Pessoa

            $this -> login        = $login;
            $this -> totAssistido =      0;
        }

        public function assistirMaisUm(){
            $this -> totAssistido ++;
        }

        public function getLogin(){
            return $this -> login;
        }

        public function getTotAssistido(){
            return $this -> totAssistido;
        }

        public function setLogin($login){
            $this -> login = $login;
        }

        public function setTotAssistido($totAssistido){
            $this -> totAssistido = $totAssistido;
        }
    }
?>