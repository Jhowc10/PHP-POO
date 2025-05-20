<?php 
    class ContaBanco{

        //Atributos
        public    $numConta;
        protected $tipo    ;
       // protected $valor   ;
        private   $dono    ;
        private   $saldo   ;
        private   $status  ;




        //Metodos
        public function abrirConta($tipo){
            $this -> setTipo  ($tipo);
            $this -> setStatus(true );

            if($tipo == "CC"){
                $this -> setSaldo(50);

            }else if($tipo == "CP"){
                $this -> setSaldo(150);

            }
        }

        public function fecharConta(){
            if($this -> getSaldo() > 0){
                echo"<p>A conta ainda tem dinheiro</p>";

            }else if($this -> getSaldo() < 0){
                echo"<p>Você ainda tem debito a pagar</p>";

            }else{
                $this -> setStatus(false);

            }
        }

        public function depositar($valor){
            if ($this -> getStatus() == true){
                $this -> setSaldo($this -> getSaldo() + $valor);

            }else{
                echo"<p>Conta fechada, não é posivel depositar</p>";

            }
        }

        public function sacar($valor){
            if($this -> getSaldo()){
                if ($this -> getSaldo() >= $valor){
                    $this -> setSaldo($this -> getSaldo() - $valor);
                    echo"<p>Saque de R$ $valor autorizado na conta " . $this -> getDono() . "</p>";

                }else{
                    echo"<p>Saldo Insuficiente</p>";

                }
            }else{
                echo"<p>Contafechada</p>";

            }
        }

        public function pagarMensal(){
            if ($this -> getTipo() == "CC"){
                $valor = 12;

            }else if($this -> getTipo() == "CP"){
                $valor = 20;
            }

            if ($this -> getStatus() == true){
                $this -> setSaldo($this -> getSaldo() - $valor); 

            }else{
                echo"<p>Sem saldo</p>";

            }
        }


        //Metodos Especiais
        public function __construct(){
            $this -> setSaldo(0);
            $this -> setStatus(false);
            echo"<p>Conta aberta com sucesso</p>";
        }

        public function getNumConta(){
            return $this -> numConta; 
        }

        public function setNumConta($numConta){
            $this -> numConta = $numConta;
        }

        public function getTipo(){
            return $this -> tipo;
        }

        public function setTipo($tipo){
            $this -> tipo = $tipo;
        }

        public function getDono(){
            return $this -> dono;
        }

        public function setDono($dono){
            $this -> dono = $dono;
        }

        public function getSaldo(){
            return $this -> saldo;
        }

        public function setSaldo($saldo){
            $this -> saldo = $saldo;
        }

        public function getStatus(){
            return $this -> status;
        }

        public function setStatus($status){
            $this -> status = $status;
        }
    }
?>