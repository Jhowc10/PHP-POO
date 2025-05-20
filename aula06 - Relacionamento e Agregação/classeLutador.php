<?php 
    // Atributos
    class Lutador{
        private $nome         ; 
        private $nacionalidade;
        private $idade        ;
        private $altura       ;
        private $peso         ;
        private $categoria    ;
        private $vitoria      ;
        private $derrota      ;
        private $empate       ;
    

        // Métodos
        public function apresentar(){
            echo "--------------------------------";
            echo "CHEGOU A HORA! o lutador " . $this -> getNome();
            echo " veio diretamente de " . $this -> getNacionalidade();
            echo ", tem " . $this -> getIdade() . " anos e pesa " . $this -> getPeso();
            echo "<br> Ele tem " . $this -> getVitoria() . "vitórias, ";
            echo $this -> getDerrota() . " derrota e " . $this -> getEmpate() . "empate";
            echo"<br>QUE COMECE A LUTA";
        }

        public function status(){
            echo "<p>----------------------------</p>";
            echo "<p>" . $this -> getNome() . " é um peso " . $this -> getCategoria();
            echo " e já ganhou " . $this -> getVitoria() . " vezes, ";
            echo " perdeu " . $this -> getDerrota() . " vezes e ";
            echo " empatou " . $this -> getEmpate() . " veses! </p>";
        }

        public function ganharLuta(){
            $this -> setVitoria ($this -> getVitoria() + 1);
        }

        public function perderLuta(){
            $this -> setDerrota($this -> getDerrota() + 1);
        }

        public function empatarLuta(){
            $this -> setEmpate ($this -> getEmpate() + 1);
        }


        // Métos especiais

        //Função constutora
        function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrota, $empate){
            $this -> nome          = $nome         ;
            $this -> altura        = $altura       ;
            $this -> vitoria       = $vitoria      ;
            $this -> derrota       = $derrota      ;
            $this -> empate        = $empate       ;
            $this -> idade         = $idade        ;
            $this -> nacionalidade = $nacionalidade;
            //$this -> categoria     = $categoria    ;

            $this -> setPeso($peso);
        }


        ///////
        public function getNome(){
            return $this -> nome;
        } 

        public function setNome($nome){
            $this -> nome = $nome;
        } 



        ///////
        public function getNacionalidade(){
            return $this -> nacionalidade;
        }

        public function setNacionalidade($nacionalidade){
            $this -> nacionalidade = $nacionalidade;
        }


        ///////
        public function getIdade(){
            return $this -> idade;
        }

        public function setIdade($idade){
            $this -> idade = $idade;
        }


        //////
        public function getAltura(){
            return $this -> altura;
        }

        public function setAltura($altura){
            $this -> altura = $altura;
        }


        //////
        public function getPeso(){
            return $this -> peso;
        }

        public function setPeso($peso){
            $this -> peso = $peso;
        }


        //////
        public function getCategoria(){
            return $this -> categoria;
        }

        public function setCategoria($categoria){
            $this -> categoria = $categoria;
        }


        //////
        public function getVitoria(){
            return $this -> vitoria;
        }

        public function setVitoria($vitoria){
            $this -> vitoria = $vitoria;
        }


        //////
        public function getDerrota(){
            return $this -> derrota;
        }

        public function setDerrota($derrota){
            $this -> derrota = $derrota;
        }


        //////
        public function getEmpate(){
            return $this -> empate;
        }

        public function setEmpate($empate){
            $this -> empate = $empate;
        }
    }
?>