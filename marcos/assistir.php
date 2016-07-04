<?php

require_once ('dir/lib/connect.php');

$id = $_GET['id'];

$queryvideo  = "SELECT * FROM video AS v JOIN admin AS a ON v.id_admin = a.id_admin WHERE v.id_video=$id ORDER BY data DESC";
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

<style>
iframe{
	width:100%;
	height:100%;
	min-height:100%;
}
</style>

<body>
<?php include_once"dir/screen/top.php"; ?>

<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Blog Entries Column -->
		<div class="col-md-12">               

			<!-- First Blog Post -->
<?php foreach($resultvideo as $videos): ?>
			<h2><a href="#"><?=$videos->titulo?></a></h2>
			<div style="width:100%; height:500px; text-align:center;"><?=$videos->thumbnail?></div><br>
			<p><a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-chevron-left"></span>Voltar</a></p>
<?php endforeach; ?>
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