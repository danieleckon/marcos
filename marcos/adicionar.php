<?php
require_once 'dir/lib/connect.php';
require_once 'dir/lib/login.php';

function __autoload($classe){
	include_once("dir/class/".$classe.".php");
}

$cadastrar = $_POST['cadastrar'];
$erro = 0;

if($cadastrar){
	if((empty($email)) or (empty($nome)) or (empty($login)) or (empty($senha))){
		$erro=1;
	}
}

if($cadastrar and $erro==0){
	$admin->inserir();
	header("Location: index.php");
}
	
//$admin->alterar();
//$admin->deletar(7);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="iso-8859-1">

<title>V�deos - Malucos se fudendo de moto</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/blog-home.css" rel="stylesheet">
</head>


<body>
<?php include_once"dir/screen/top.php"; ?>

<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Blog Entries Column -->
		<div class="col-md-8">
			<h1>Cadastro</h1>
			<form method="POST">
			  <div class="form-group">
				<label for="exampleInputEmail1">Endere�o de email</label>
				<input type="email" class="form-control" name="email" placeholder="exemplo@email.com" value="<?php if(empty($email)){echo"";}else{echo"$email";} ?>" style="width:60%;">
			  </div>
			  <div class="form-group">
				<label for="exampleInputNome">Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?php if(empty($nome)){echo"";}else{echo"$nome";} ?>" style="width:60%;">
			  </div>
			  <div class="form-group">
				<label for="exampleInputLogin">Login</label>
				<input type="text" class="form-control" name="login" placeholder="Digite seu login" value="<?php if(empty($login)){echo"";}else{echo"$login";} ?>" style="width:60%;">
			  </div>
			  <div class="form-group">
				<label for="exampleInputSenha">Senha</label>
				<input type="password" class="form-control" name="senha" placeholder="Digite sua senha" style="width:60%;">
			  </div>
			  <button type="submit" name="cadastrar" value="1" class="btn btn-primary">Cadastrar</button>
			  <?php
				if($erro==1){echo" Favor preencher todos os campos.";}
			  ?>
			</form>
		</div>

		<!-- Coluna Lateral Direita -->
		<div class="col-md-4">
			<!-- Tela Busca -->
			<?php include"dir/screen/rgbusca.php";?>
			<!-- Tela HardBiker -->
			<?php include"dir/screen/hardbiker.php";?>
			<!-- Tela Menu Categoria -->
			<?php include"dir/screen/rgcategoria.php";?>
		</div>
	</div>
	<!-- Footer -->
	<?php include"dir/screen/footer.php";?>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>