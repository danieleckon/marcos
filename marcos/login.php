<?php
require_once 'dir/lib/connect.php';
require_once 'dir/class/Admin.php';

session_start();
$login = $_SESSION["login"];
$senha = $_SESSION["senha"];

$acessar = $_POST['acessar'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$erro = 0;

if($acessar){
	if((empty($login)) or (empty($senha))){
		$erro=1;
	}
};

//Criando Classe Administrador
$admin = new Admin($conn);

$resp = $admin->verificar($login, $senha);

$admin->setId($resp['id_admin']);
$admin->setNome($resp['nome']);
$admin->setEmail($resp['email']);
$admin->setLogin($resp['login']);
$admin->setSenha($resp['senha']);

$id = $resp['id_admin'];

if($resp){
	//Dados Pessoa
	$_SESSION["id_admin"] = $resp['id_admin'];
	$_SESSION["nome"]	  = $resp['nome'];
	$_SESSION["email"]	  = $resp['email'];
	$_SESSION["login"]	  = $resp['login'];
	$_SESSION["senha"]	  = $resp['senha'];
	
	header("Location: meusvideos.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="iso-8859-1">

<title>Vídeos - Malucos se fudendo de moto</title>

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
			<h1>Login</h1>
			<form method="POST">
				<div class="form-group">
					<label for="exampleInputLogin">Login</label>
					<input type="text" class="form-control" name="login" placeholder="Digite seu login" value="<?php if(empty($login)){echo"";}else{echo"$login";} ?>" style="width:60%;">
				</div>
				<div class="form-group">
					<label for="exampleInputSenha">Senha</label>
					<input type="password" class="form-control" name="senha" placeholder="Digite sua senha" style="width:60%;">
				</div>
				<button type="submit" name="acessar" class="btn btn-primary">Acessar</button>
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