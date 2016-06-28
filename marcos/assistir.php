<?php require_once ('dir/lib/connect.php');?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vídeos - Malucos se fudendo de moto</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
iframe{
	width:100%;
	height:100%;
	min-height:100%;
}
</style>
<body>


<div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span style="color:#F00; font-size:22px; font-weight:bold;">HB</span>    HardBike</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="assistir.php">Videos</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="#">Inscreva-se</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">               

                <!-- First Blog Post -->
<?php

$selecionado = $_GET['assistir'];

$queryvideo  = "SELECT * FROM video WHERE id_video=$selecionado";
$stmtvideo   = $conn->query($queryvideo);
$resultvideo = $stmtvideo->fetchAll(PDO::FETCH_OBJ);

foreach($resultvideo as $videos):

$id_admin	= $videos->id_admin;
$titulo		= $videos->titulo;

$queryuser	= "SELECT * FROM admin WHERE id_admin='$id_admin'";
$stmtuser   = $conn->query($queryuser);
$resultuser = $stmtuser->fetchAll(PDO::FETCH_CLASS);

foreach($resultuser as $user){
$nome	= $user->nome;
}

?>
                <h2><a href="#"><?echo"$titulo - $id_admin - $nome";?></a></h2>
                <div style="width:100%; height:500px; text-align:center;"><?=$videos->thumbnail?></div><br>
                <p><a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-chevron-left"></span>Voltar</a></p>

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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
