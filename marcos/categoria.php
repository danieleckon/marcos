<?php

require_once ('dir/lib/connect.php');

$assistir = $_GET['assistir'];

$queryvideo  = "SELECT * FROM video AS v JOIN admin AS a ON v.id_admin = a.id_admin ORDER BY data DESC";
$stmtvideo   = $conn->query($queryvideo);
$resultvideo = $stmtvideo->fetchAll(PDO::FETCH_OBJ);

if($userdata[1]==1) {$userdatames = 'Janeiro';}else
if($userdata[1]==2) {$userdatames = 'Fevereiro';}else
if($userdata[1]==3) {$userdatames = 'Março';}else
if($userdata[1]==4) {$userdatames = 'Abril';}else
if($userdata[1]==5) {$userdatames = 'Maio';}else
if($userdata[1]==6) {$userdatames = 'Junho';}else
if($userdata[1]==7) {$userdatames = 'Julho';}else
if($userdata[1]==8) {$userdatames = 'Agosto';}else
if($userdata[1]==9) {$userdatames = 'Setembro';}else
if($userdata[1]==10){$userdatames = 'Outubro';}else
if($userdata[1]==11){$userdatames = 'Novembro';}else
if($userdata[1]==12){$userdatames = 'Dezembro';}

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

<style>


<body>
<?php include_once"dir/screen/top.php"; ?>

<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Blog Entries Column -->
		<div class="col-md-8">
			<h1>Vídeos<small>Mais recentes</small></h1>
<?php
foreach($resultvideo as $videos):

	$userdata	= explode("-", $videos->data);
	$userhora	= explode(":", $videos->hora);
?>
			<!-- First Blog Post -->
			<hr>
			<h2>
				<a href="#"><?=$videos->titulo?></a>
			</h2>
			<p class="lead">by <a href="#"><?=$videos->nome;?></a></p>
			<p><span class="glyphicon glyphicon-time"></span><? echo"Publicado em $userdata[2] de $userdatames de $userdata[0] as $userhora[0]:$userhora[1]";?></p>
			<?=$videos->thumbnail?>
			<p style="margin-top:10px;"><?=$videos->descricao?></p>
			<form action="assistir.php" method="get" ><button class="btn btn-primary" name="assistir" value="<?=$videos->id_video;?>" type="submit">Assistir Vídeo <span class="glyphicon glyphicon-chevron-right"></span></button></form>
<?php endforeach; ?>
			<!-- Pager ->
			<ul class="pager">
				<li class="previous">
					<a href="#">&larr; Anterior</a>
				</li>
				<li class="next">
					<a href="#">Próximo &rarr;</a>
				</li>
			</ul-->
		</div>

		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">

			<!-- Blog Search Well -->
			<div class="well">
				<h4>Pesquisar Vídeos</h4>
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-search"></span>
					</button>
					</span>
				</div>
				<!-- /.input-group -->
			</div>

			<!-- Blog Categories Well -->
			<div class="well">
				<h4>Mais Categorias</h4>
				<div class="row">
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href="categoria.php?busca=Esportiva">Esportiva</a></li>
							<li><a href="categoria.php?busca=Clássica">Clássica</a></li>
							<li><a href="categoria.php?busca=Estilo">Estilo Retrô</a></li>
							<li><a href="categoria.php?busca=Basica">Basica</a></li>
						</ul>
					</div>
					<!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href="categoria.php?busca=Acelerando">Acelerando</a></li>
							<li><a href="categoria.php?busca=Mais de 200Km">Mais de 200Km</a></li>
							<li><a href="categoria.php?busca=Acidentes">Acidentes</a></li>
							<li><a href="categoria.php?busca=Engraçados">Engraçados</a></li>
						</ul>
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
			</div>

			<!-- Side Widget Well -->
			<div class="well">
				<h4>Seja um HardBiker</h4>
				<p>Inscreva-se no nosso canal HardBike, envie videos de sua maquina e impressione a todos com seu modelo exclusivo! Mostre exemplos de sua modificação ou tutorial sobre reparos e curiosidades. Participe do nosso canal!</p>
			</div>

		</div>

	</div>
	<!-- /.row -->
	<hr>

	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p align="center">Copyright &copy; HardBike 2016</p>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</footer>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>