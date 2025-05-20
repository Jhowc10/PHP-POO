<?php 
    // this = Auto referencia 

        class Caneta{
        //    Atributos
            var $modelo;
            var $cor;
            var $ponta;
            var $carga;
            var $tampada;
        

        //  Metodos
            function rabiscar(){
                if($this -> tampada == true){
                    echo"<p>Não posso rabiscar</p>";
                }else{
                    echo"<p>Estou rabiscando...</p>";
                }
            }

            function tampar(){
                $this -> tampada = true; // Está modificando o atributo utilizando a palavra "this"
            }

            function destampar(){
                $this -> tampada = false;
            }
        }
        ?>

        <!-- 
            Para verificar um atributo dentro de um método que está ná PROPRIA CLASSE (só funciona se tiver na mesma classe), usamaos a palavra "this" que será substituida pelo nome do objeto.
         -->