<?php

    include('Interface1.php');

    class Teste implements Interface1{

        public function printOnScreen($par){
            echo 'Feliz 2021';
        }
    }
    $teste = new Teste;
    
    $teste->printOnScreen('Feliz 2021');
?>