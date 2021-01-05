<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_02','root','');

    $id = 22;
    
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    if($sql->execute (array($id))){
        echo 'Meu clientes foi deletado com sucesso!';
    }
?>