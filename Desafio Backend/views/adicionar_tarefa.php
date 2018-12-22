<?php
	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
        <meta charset="UTF-8">
        <title>Gerenciador de Tarefas</title>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>

    <body>

		<div class="col-md-4"></div>
        <nav class="navbar navbar-fixed-top navbar-default" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="collapse navbar-collapse" id="menu"> <!--Barra de navegação-->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="adicionar_tarefa.php">Nova Tarefa</a></li>
                       ++ <li><a href="../controllers/get_tarefas.php">Minhas Tarefas</a></li>
                        <li><a href="page_editar.php">Editar</a></li> 
                        <li><a href="">Excluir</a></li>
						<li><a href="../controllers/sair.php">Sair</a></li>
                    </ul>    
                </div>
            </div> 
        </nav> 
    
    </body>
</html>
