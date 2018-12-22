<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=1');
    } 

    include("../views/page_listar.php");
    require_once('C:\xampp\htdocs\Desafio\models\Database.php');
    
    $object = new Database();
    $conexao = $object->Connection();

    $sql = " SELECT  * FROM tarefas ";
    $result = mysqli_query($conexao, $sql);

    if($result){
        while($registro = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           echo '<a href="#" class="list-group-item">';
            echo 'Nome: '.$registro['nome'].' - Descrição: '.$registro['descricao'].
                    '<br />Prioridade: ' .$registro['prioridade']. ' - Está concluída? ' .$registro['concluida'].
                    ' - Prazo: ' .$registro['prazo'];
            echo '<br /><br/></a>';
        }
    }else{
        echo "Erro na consulta de tarefas no banco de dados";
    }
?>