<!-- 
 Aqui vamos implementar os metodos da interface 
 Automaticamentes estamos sobrescrevendo os métodos

 No projeto, o " - " antes da variável significa que é "private"
 -->

<?php 
    require_once'interfaceAcoesVideo.php';

    class Video implements AcoesVideo{
        private $views       ;
        private $titulo      ;
        private $curtidas    ;
        private $avaliacao   ;
        private $reproduzindo;

        public function __construct($titulo){
            $this -> titulo       = $titulo;
            $this -> views        =       0;
            $this -> curtidas     =       0;
            $this -> avaliacao    =       1;
            $this -> reproduzindo =   false;
        }
            

        public function like(){
            $this -> curtidas ++;
        }

        public function pause(){
            $this -> reproduzindo = false;
        }

        public function play(){
            $this -> reproduzindo = true;
        }


        ///////////// GETTERS /////////////
        public function getTitulo(){
            return $this -> titulo;
        }

        public function getAvaliacao(){
            return $this -> avaliacao;
        }

        public function getViews(){
            return $this -> views;
        }

        public function getTotCurtidas(){
            return $this -> curtidas;
        }

        public function getReproduzindo(){
            return $this -> reproduzindo;
        }

        

        ///////////// SETTERS /////////////
        public function setTitulo($titulo){
            $this -> titulo = $titulo;
        }

        public function setAvaliacao($avaliacao){
            $media = ($this -> avaliacao + $avaliacao) / $this -> views;

            $this -> avaliacao = $media;
        }

        public function setViews($views){
            $this -> views = $views;
        }

        public function setCurtidas($curtidas){
            $this -> curtidas = $curtidas;
        }

        public function setReproduzindo($reproduzindo){
            $this -> reproduzindo = $reproduzindo;
        }
    }
?>