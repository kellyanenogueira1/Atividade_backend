<?php
    
    require_once('C:\xampp\htdocs\Gereciador de Tarefas\Desafio Backend\models\Database.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = " SELECT usuario, senha FROM logar WHERE usuario = '$usuario' AND senha = '$senha' ";

    $object = new Database();
    $conexao = $object->Connection();

    $result = mysqli_query($conexao, $sql);
?>