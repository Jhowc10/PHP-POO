<?php
    require_once'controle.php';

   // Classe
    class ControleRemoto implements Controlador{  // "implements" irá juntar a classe a interface
        //Atributos
        private $volume ;
        private $ligado ;
        private $tocando;

        // Metodos especiais
        public function __construct() {
            $this -> volume = 50;
            $this -> ligado = false;
            $this -> tocando = false;
        }

        public function getVolume(){
            return $this -> volume;
        }

        public function setVolume($volume){
            $this -> volume = $volume;
        }

        public function getLigado(){
            return $this -> ligado;
        }

        public function setLigado($ligado){
            $this -> ligado = $ligado;
        }

        public function getTocando(){
            return $this -> tocando;
        }

        public function setTocando($tocando){
            $this -> tocando = $tocando;
        }

        //Agora inclementamos a interface, do arquivo "controle"
        public function ligar(){
            $this -> setLigado(true);
        }

        public function desligar(){
            $this -> setLigado(false);
        }

        public function abrirMenu(){
            echo"<br>Está ligado?:  " . ($this -> getLigado() ? "sim" : "não"); 
            echo"<br>Está tocando?: " . ($this -> getTocando() ? "sim" : "não");
            echo"<br>Volume: "        .  $this -> getTocando();

            for($i = 0; $i <= $this -> getVolume(); $i += 10){
                echo"|";
            }
            echo"<br>";
        }

        public function fecharMenu(){
            echo"Fechando menu";
        }

        public function maisVolume(){
            if($this -> getLigado() == true){
                $this -> setVolume( $this -> getVolume() + 3);
            }
        }

        public function menosVolume(){
            if($this -> getLigado() == true){
                $this -> setVolume( $this -> getVolume() - 3);
            }
        }

        public function ligarMudo(){
            if($this -> getLigado() && $this -> getVolume() > 0){
                $this -> setVolume(0);
            }
        }

        public function desligarMudo(){
            if($this -> getLigado() && $this -> getVolume() == 0){
                $this -> setVolume(50);
            }
        }

        public function play(){
            if($this -> getLigado() && !($this -> getTocando())){
                $this -> setTocando(true);
            }
        }

        public function pause(){
            if($this -> getLigado() && $this -> getTocando()){
                $this -> setTocando(false);
            }
        }
    }
?>