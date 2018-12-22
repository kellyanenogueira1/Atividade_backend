<?php

    require_once('C:\xampp\htdocs\Gereciador de Tarefas\Desafio Backend\models\Database.php');

    $nome = $_POST['nome_tarefa'];
    $descricao = $_POST['descricao_tarefa'];
    $prioridade = $_POST['prioridade'];
    $concluida = $_POST['concluida'];
    $prazo = $_POST['prazo_tarefa'];

    $object = new Database();
    $conexao = $object->Connection();

    $sql = "INSERT INTO tarefas (nome, descricao, prioridade, concluida, prazo) VALUES ('$nome', '$descricao', '$prioridade', '$concluida', '$prazo')";
    
    if (mysqli_query($conexao, $sql)){
        echo 'Tarefa adiconada com sucesso!';
    }else{
        header('Location: ../views/adicionar_tarefa.php?erro=1');
        echo 'Erro ao adicionar tarefa.';
        
    }
?>