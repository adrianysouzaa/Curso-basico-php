<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario, mail_usuario, senha_usuario, nivel_usuario,status) values ('$nomeusuario', '$mail',sha1('$senha'), $nivel, '$status')";

$inserir = mysqli_query($conexao, $sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="widht: 400px">
<center>
	<h3>Usuário adicionado com sucesso! </h3>
	<div style="margin-top: 10px">
	<a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>