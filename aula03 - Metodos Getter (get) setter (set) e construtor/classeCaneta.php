<?php 
    //METODO GET E SET e CONSTRUCT
    class Caneta{
        private $modelo ;
        private $ponta  ;
        private $cor    ;
        private $tampada;
       
        // Para criar a construct utilizamos 2 _
        // Função para criar uma construct, tudo o que for colocado aqui, será executado automaticamente no navegador 
        // Usando os parametros para a construct ser chamada automaticamente
        public function __construct($modelo, $cor, $ponta){  
            $this -> modelo = $modelo;                
            $this -> cor    = $cor; 
            $this -> ponta  = $ponta;
            $this -> tampar()   ;             
        }                                   
        
        public function tampar(){
            $this -> tampada = true;
        }

        public function getModelo(){
            return $this -> modelo;
        }
        public function setModelo($modelo){
            $this -> modelo = $modelo;
        }

        public function getPonta(){
            return $this -> ponta;
        }
        public function setPonta($ponta){
            $this -> ponta = $ponta;
        }
    }
?>