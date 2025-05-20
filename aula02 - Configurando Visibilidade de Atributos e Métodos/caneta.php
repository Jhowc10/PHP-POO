<?php 
    // this = Auto referencia 

        class Caneta{
        //    Atributos
        // Modificadores de visibilidade: 
        // public    = Todas as clases poderão ter acesso ao seus componentes internos ;
        // private   = Somente a classe atual vai ter acesso;
        // protected = Somente a classe atual e as suas subclasses terão accesso.


            public    $modelo ;
            public    $cor    ;
            private   $ponta  ;
            protected $carga  ;
            protected $tampada;
        

        //  Metodos
            function rabiscar(){
                if($this -> tampada == true){
                    echo"<p>Não posso rabiscar</p>";
                }else{
                    echo"<p>Estou rabiscando...</p>";
                }
            }

            //Podemos alterar um método privado na função, colocando a visibilidade antes da palavra função, não poderemos acessar a varialvel privada, mas como a função está pública e a variavel está dentro desta função ela se torna publica, mas só porque a função está dentro da classe.
            
            public function tampar(){
                $this -> tampada = true; // Está acessando o atributo utilizando a palavra "this"
            }

            public function destampar(){
                $this -> tampada = false;
            }
        }
        ?>

        