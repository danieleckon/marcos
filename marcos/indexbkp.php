<?php require_once ('dir/lib/connect.php');?>

<!DOCTYPE html>
<html lang="en">

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

<body>
<?php

//$query  = "SELECT * FROM admin ";
//$stmt   = $conn->query($query);
//$result = $stmt->fetchAll(PDO::FETCH_OBJ);

//$nome = $result[0]->nome;


//--------------------------------------------



//foreach($result as $cliente){
//	echo $cliente->nome.
//	$cliente->email."<br><br>";
//}

//echo $nome;
?>

<?php //foreach($result as $cliente) :?>
	<p><?//=$cliente->nome?></p>
	<p><?//=$cliente->email?></p>
<?php //endforeach; ?>

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
                        <a href="index.php">Videos</a>
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
            <div class="col-md-8">

                <h1 class="page-header">
                    Vídeos
                    <small>Mais recentes</small>
                </h1>

                <!-- First Blog Post -->
<?php

$queryvideo  = "SELECT * FROM video";
$stmtvideo   = $conn->query($queryvideo);
$resultvideo = $stmtvideo->fetchAll(PDO::FETCH_OBJ);

foreach($resultvideo as $videos) :?>

                <h2>
                    <a href="#"><?=$videos->titulo?></a>
                </h2>
                <p class="lead">by <a href="index.php">Tiaguinho Hornet</a></p>
                <p><span class="glyphicon glyphicon-time"></span> Publicado em 28 de Fevereiro de 2016 as 19:56</p>
               
                <?=$videos->thumbnail?>
                <br>
                <p style="margin-top:10px;"><?=$videos->descricao?></p>
                <p><a class="btn btn-primary" href="<?=$videos->url?>">Assistir Vídeo <span class="glyphicon glyphicon-chevron-right"></span></a></p>

<?php endforeach; ?>
                <hr>
				
				

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
                                <li><a href="#">Esportiva</a>
                                </li>
                                <li><a href="#">Clássica</a>
                                </li>
                                <li><a href="#">Estilo Retrô</a>
                                </li>
                                <li><a href="#">Basica</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Acelerando</a>
                                </li>
                                <li><a href="#">Mais de 200Km</a>
                                </li>
                                <li><a href="#">Acidentes</a>
                                </li>
                                <li><a href="#">Engraçados</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Seja um HardBiker</h4>
                    <p>Inscreva-se no nosso canal HardBike, e envie videos de sua maquina e impressione a todos com seu modelo exclusivo, mostre exemplos de sua modificação ou tutorial sobre reparos e curiosidades e participe do nosso canal.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-8">
                    <p>Copyright &copy; HardBike 2016</p>
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
