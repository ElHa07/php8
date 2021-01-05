<?php
    class Pessoa{
        //objeto pessoa

        private $nome = 'Jefferson';
        private $idade = '31';
        private $peso = '120kg';

        public function crescer(){
            $this->comer();
            echo 'estou crescendo';
        }
        private function comer(){
            echo 'estou comendo';
        }
    }

    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();

?>