<?php 
include 'conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title></title>
</head>
<body>
<?php
			$sql='SELECT * FROM spaces';
			$result = $conn->query($sql);
		?>
		<div class="container">
			<div class="row">
				<h2>Gerenciar </h2>
			</div>


			
<div class="row">

				<div class='col-sm-8 col-md-8'>


					<table class='table'>
						<thead>
							<tr>
								<!-- <th>Escopo</th> -->
								<th>id</th>
								<th>name</th>
								<th>description</th>
									                
							</tr>
						</thead>
						<tbody>							
								<?php while($res = $result->fetch(PDO::FETCH_ASSOC)) { ?>
								<tr>
									<td><?= $res['id'] ?></td>
									<td><?= $res['name'] ?></td>
									<td><?= $res['description'] ?></td>
									<td><a href="adm-user.php?id=<?= $res['id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
								</tr> 
								<?php } ?>

						</tbody>
					</table>

				</div>


			</div>

			</div>
			<form action="add.php" method="post" id="adicionar_nome">
				<input type="text" name="name">
				<input type="text" name="description">
				<input type="submit" value="enviar">
				
			</form>
			<?php
			$sql='SELECT * FROM equipments';
			$result = $conn->query($sql);
		?>
			<div class="container">
			<div class="row">
				<h2>equipamentos</h2>
			</div>


			
<div class="row">

				<div class='col-sm-8 col-md-8'>


					<table class='table'>
						<thead>
							<tr>
								<!-- <th>Escopo</th> -->
								<th>id</th>
								<th>tipo</th>
								<th>código</th>
								<th>Espaços</th>
								<th>Remover</th>

									                
							</tr>
						</thead>
						<tbody>							
								<?php while($res = $result->fetch(PDO::FETCH_ASSOC)) { ?>
								<tr>
									<td><?= $res['id'] ?></td>
									<td><?= $res['type'] ?></td>
									<td><?= $res['code'] ?></td>
									<td><?= $res['space_id'] ?></td>
									<form action="del.php" method="GET">
									<td><input class="btn btn-danger" type="submit" name='delete' value="Excluir"></td>
									</form>

								</tr> 
								<?php } ?>

						</tbody>
					</table>

				</div>


			</div>
		
				<form action="addd.php" method="post" id="adicionar_equipamento">
				<input type="text" name="type">
				<input type="text" name="code">
				<input type="submit" value="enviar">
				
			</form>

			</div>

				
			</form>
			
			<script type="text/javascript">// Iniciei o JavaScripty

	$("#adicionar_nome").on('submit', function(evt){ // Aki está indicando que quando o evento submit do DOM com o id = form_nome for inicializado ele execute a function(evt) ... a function(evt) ela faz as seguintes ações :

		evt.preventDefault(); // Para o evento ou seja não permite ir para a outra pagina

		$.post(// Pega o dado $_POST['...'].
			"add.php",// Envia para a página add.php

			$("#adicionar_nome").serialize(),//Aki eu não sei o que seria o serialize ... (' desculpem - ('pesquisem') ')

			window.location.reload();// isso ake foi uma função em javascript que eu pesquisei para sempre que o serialze acabasse a pagina recarregava com seus dados vindo do banco ou seja 

		);
	});
	$("#adicionar_equipamento").on('submit', function(evt){ // Aki está indicando que quando o evento submit do DOM com o id = form_nome for inicializado ele execute a function(evt) ... a function(evt) ela faz as seguintes ações :

		evt.preventDefault(); // Para o evento ou seja não permite ir para a outra pagina

		$.post(// Pega o dado $_POST['...'].
			"add.php",// Envia para a página add.php

			$("#adicionar_equipamento").serialize(),//Aki eu não sei o que seria o serialize ... (' desculpem - ('pesquisem') ')

			window.location.reload();

	);
	});
	 $("#remover_equipamento").on('submit', function(evt){// Aki está indicado que quando o evento submit do DOM com o id = remove for inicializado ele execute a function(evt) ... a function(evt) ela faz as seguintes ações :
	evt.preventDefault();// Para o Evento ou seja não permite ir para outra página
	$.post(// Pega o dado $_POST['...'].
		"del.php",// Envia para a página del.php
		$("#remover_equipamento").serialize(),// Aki eu não sei o que seria o serialize ... (' desculpem - ('pesquisem') ')
 		window.location.reload();// isso ake foi uma função em javascript que eu pesquisei para sempre que o serialze acabasse 
	
	 	);
	 });
</script>
</body>
</html>
	