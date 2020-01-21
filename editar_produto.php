<?php

include 'conexao.php';

$id = $_GET['id'];

?>


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
    <h4>Formulário de Cadastro</h4>
    <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
      <?php

      $sql= "SELECT * FROM `estoque` WHERE id_estoque=$id";
      $buscar=mysqli_query($conexao,$sql);

      while ($array= mysqli_fetch_array($buscar)){

            $id_estoque=$array['id_estoque'];
            $nroproduto=$array['nroproduto'];
            $nomeproduto=$array['nomeproduto'];
            $categoria=$array['categoria'];
            $quantidade=$array['quantidade'];
            $fornecedor=$array['fornecedor'];



      ?>


      <div class="form-group">
          <label>Numero do Produto</label>
          <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto?>" disabled>
          <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display: none">
        
        
        </div>

        <div class="form-group">
        <label>Nome do Produto</label>
        <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
        
        </div>

         <div class="form-group">
        <label>Categoria do Produto</label>
        <select class="form-control" name="categoria">
         <option>Perifericos</option>
           <option>Hardwares</option>
           <option>Softwares</option>
             <option>Celulares</option>
           
            </select>
         </div>

      <div class="form-group">
        <label>Quantidade</label>
        <input type="number" class="form-control"name="quantidade" value="<?php echo $quantidade ?>">
        
      </div>

      <div class="form-group">
        <label>Fornecedor</label>
        <select class="form-control" name="fornecedor">
         <option>Fornecedor A</option>
           <option>Fornecedor B</option>
           <option>Fornecedor C</option>
            </select>
         </div>
         <div style="text-align: right;">
         <button type="submit" id="botao" class="btn  btn-sm">Atualizar</button>
  </div>
<?php } ?>
  </form>

</div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>