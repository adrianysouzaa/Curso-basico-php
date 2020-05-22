<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Formulário de Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		
		#tamanhoContainer{
			width: 500px;
		}

		#botao{
			background-color: #FF1168; /* cor de fundo */
			color: #ffffff; /* cor da letra */
		}

	</style>

</head>
<body>

	<div class="container" id= "tamanhoContainer" style="margin-top: 40px">

        <div style="text-align: right">
      <a href="index.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>
  </div>


		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px">
			<div class="form-group">
    			<label>Numero do Produto</label>
    			<input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" required="">
    		
  			</div>

  			<div class="form-group">
    		<label>Nome do Produto</label>
    		<input type="text" class="form-control" name="nomeproduto"placeholder="Insira o nome do produto" required="">
    		
  			</div>
        <div class="form-group">
    		      <label>Categoria do Produto</label>
    		      <select class="form-control" name="categoria">

                      <?php
                      include 'conexao.php';
                      $sql= "SELECT * FROM categoria order by nome_categoria ASC";
                      $buscar= mysqli_query($conexao, $sql);

                      while ($array= mysqli_fetch_array($buscar)){

                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];


                      ?>
                      <option><?php echo $nome_categoria?></option>
                      

                      <?php } ?>
           
            </select>
      </div>
  		<div class="form-group">
    		<label>Quantidade</label>
    		<input type="number" class="form-control"name="quantidade" placeholder="Insira a quantidade do produto" required="">
    		
  		</div>
  		<div class="form-group">
    		<label>Fornecedor</label>
    		<select class="form-control" name="fornecedor">
        <?php 
        include 'conexao.php';
        $sql2= "SELECT * FROM fornecedor";
        $buscar2= mysqli_query($conexao, $sql2);

        while ($array2 = mysqli_fetch_array($buscar2)){
            $id_fornecedor = $array2['id_forn'];
            $nome_fornecedor= $array2['nome_forn'];
        ?>
      		    <option><?php echo $nome_fornecedor ?></option>
              <?php } ?>
            </select>
         </div>
         <div style="text-align: right;">
              
              <button type="submit" id="botao" class="btn  btn-sm">Cadastrar</button>
	       </div>
  </form>
  
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>