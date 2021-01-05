<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_02','root','');

    $id = 2;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Jeffeson', sobrenome='Garcia' WHERE id=$id");

    if($sql->execute ()){
        echo 'Meu clientes foi atualizado com sucesso!';
    }
?>