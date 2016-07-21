<?php
require_once 'dir/lib/connect.php';
require_once 'dir/lib/login.php';

function __autoload($classe){
	include_once("dir/class/".$classe.".php");
}

$atualdata = new Conversor($conn);

$id = $admin->getId();

$queryvideo  = "SELECT * FROM video WHERE id_admin='$id' ORDER BY data DESC";
$stmtvideo   = $conn->query($queryvideo);
$resultvideo = $stmtvideo->fetchAll(PDO::FETCH_OBJ);
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
			<h1>Vídeos <small>de <?=$admin->getNome()?></small></h1>
			<?php foreach($resultvideo as $videos): ?>
				<!-- First Blog Post -->
				<hr>
				<h2>
					<a href="#"><?=$videos->titulo?></a>
				</h2>
				<p><span class="glyphicon glyphicon-time"></span> <?=$atualdata->publicacao($videos->data)?></p>
				<?=$videos->thumbnail?>
				<p style="margin-top:10px;"><?=$videos->descricao?></p>
				<form action="assistir.php" method="get" ><button class="btn btn-primary" name="id" value="<?=$videos->id_video;?>" type="submit">Assistir Vídeo <span class="glyphicon glyphicon-chevron-right"></span></button></form>
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