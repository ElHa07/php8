<?php
    //Array single.

    $arr = ['Cesar', 'Edna'];
    $arr = array('Jefferson', 'chave2' => 'Mariana', 'Vitoria');

    $arr[0] = 'Cesar';
    $arr[] = 'Edna';

    //Array multidimensional

    $arr2 = array(array('Cesar', 'Edna'), array('55,53'));
    echo $arr2[1][0];


?>