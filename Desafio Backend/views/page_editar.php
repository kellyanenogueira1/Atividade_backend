<?php 
    session_start();
    include_once('C:\xampp\htdocs\Desafio\models\Database.php');

    $result_tarefa = " SELECT * FROM tarefas WHERE id='2' ";
    $resultado = mysqli_query($conexao, $result_tarefa);
    $row_tarefa = mysqli_fetch_assoc($resultado);

 ?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
        <meta charset="UTF-8">
        <title>Editar Tarefa</title>
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
                            <li><a href="../controlles/get_tarefas.php">Minhas Tarefas</a></li>
                            <li><a href="page_editar.php">Editar</a></li>
                            <li><a href="">Excluir</a></li>
                            <li><a href="../controllers/sair.php">Sair</a></li>
                        </ul>    
                    </div>
                </div> 
            </nav> 
        </div>
        
		<br /><br /><br />

	    <div class="col-md-4"></div>
		<div class="container">
  			<div class="row">
    			<div class="col-md-4">
					<h3>Alterar tarefa:</h3>
					<hr />
    				<form role="form" action="../controllers/alterar_tarefa.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row_tarefa['id'];?>">
						<div class="form-group">
							<label for="name">Nome da tarefa</label>
							<input type="text" class="form-control" name="nome_tarefa" id="id_tarefa" value="<?php echo $row_tarefa['nome'];?>">
						</div>

						<div class="form-group">
							<label for="descricao">Descrição da tarefa</label>
							<textarea type="text" class="form-control" name="descricao_tarefa" required="requiored"></textarea>
						</div>

						<div class="form-group">
							<label for="Prioridade">Prioridade</label>
							<select class="form-control" name="prioridade" id="id_prioridade">
								<option value="Alta">Alta</option>
								<option value="Media">Média</option>
								<option value="Baixa">Baixa</option>
							</select>
						</div>

						<div class="form-group">
							<label for="status">Concluída?</label>
							<select class="form-control" name="concluida" id="id_concluida">
								<option value="Sim">Sim</option>
								<option value="Não">Não</option>
								
							</select>
						</div>

						<div class="form-group">
							<label for="prazo">Prazo para efetuar tarefa</label>
							<input type="DateTime-local" class="form-control" name="prazo_tarefa" required="requiored">
						</div>

						<button type="submit" class="btn btn-primary form-control">Adicionar</button>
					</form>
    			</div>
              </div>
        </div>
		

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>