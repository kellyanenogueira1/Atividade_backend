<?php
    session_start();
    include_once('C:\xampp\htdocs\Gereciador de Tarefas\Desafio Backend\models\Database.php');

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = $_POST['nome_tarefa'];
    $descricao = $_POST['descricao_tarefa'];
    $prioridade = $_POST['prioridade'];
    $concluida = $_POST['concluida'];
    $prazo = $_POST['prazo_tarefa'];

    $result_tarefa = " UPDATE tarefas SET nome='$nome', descricao = '$descricao', prioridade = '$prioridade', 
    concluida = '$concluida', prazo = '$prazo', modified=NOW() WHERE id='$id' ";
    $resultado = mysqli_query($conexao, $result_tarefa);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['msg'] = "<p style= 'color:green'>Tarefa alterada.</p>";
        //header("Location: ../views/page_editar.php");
    
    }else{
        $_SESSION['msg'] = "<p style= 'color:red'>Tarefa não alterada.</p>";
        //header("Location: ../views/page_editar.php");
    }
?>