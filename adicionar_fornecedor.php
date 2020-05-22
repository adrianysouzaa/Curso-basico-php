<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		#botao{
			background-color: #FF1168; /* cor de fundo */
			color: #ffffff; /* cor da letra */
		}

	</style>

</head>
<body>

<div class="container" style="margin-top: 40px; width: 500px">

	 <div style="text-align: right">
	    <a href="index.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>	
	 </div>

	<h4>Cadastro de Fornecedor</h4>
	<form action="_inserir_fornecedor.php" method="post">
		<label>Fornecedor</label>
		<div class="form-group">
			<input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor" autocomplete="off">
		</div>
		<div style="text-align: right">
			<button type="submit" id="botao" class="btn btn-sm">Cadastrar </button>
		</div>
	</form>
</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>