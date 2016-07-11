<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
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
					<?php if(empty($login)){echo" ";} ?>
					
					<?php if($login){echo"
					<li><a href='meusvideos.php'>Meus Vídeos</a></li>
					<li><a href='adicionar.php'>Adicionar</a></li>
					<li><a href='index.php'>Todos</a></li>";}
					?>
						
					</ul>
				</div>
			</div>
			
			
			<div class="col-md-4">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav" style="position:absolute; right:0px;">
					<?php if(empty($login)){echo"
						<li><a href='cadastro.php'>Cadastre-se</a></li>
					<li><a href='login.php'>Login</a></li>";} ?>
					
					<?php if($login){echo"
					<li><a href='#' style='color:#eee;'>"?><span style='color:#888; cursor:text;'><? include"dir/lib/vrfhora.php"; ?></span><?=$admin->getNome()?><?php echo"</a></li>
					<li><a href='dir/lib/desconectar.php'>Sair</a></li>";}
					?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>