<?php
    abstract class Teste{
        public function func1(){
            echo'chamando funcao 1';
        }

        abstract function func2();
    }
    class Principal extends teste{
        public function func2(){
            echo 'estou declarando oficialmente um metodo  abstrato';
        }
    }
    $principal = new Principal;
    $principal->func1();
    $principal->func2();
?>