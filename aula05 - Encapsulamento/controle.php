<?php 
    interface Controlador{
        // Métodos Abstratos
        public function play()        ;
        public function ligar()       ;
        public function pause()       ;
        public function desligar()    ;
        public function ligarMudo()   ;
        public function abrirMenu()   ;
        public function fecharMenu()  ;
        public function maisVolume()  ;
        public function menosVolume() ;
        public function desligarMudo();
    }
?>