
<!DOCTYPE html>
<html ng-app="shop">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Menu Lateral</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/default.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
  		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

  		<script src="js/angular.min.js"></script>

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>
	<body>
			<header>
				<nav class="navbar navbar-inverse navbar-fixed-top cbp-af-header">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hideMenu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<figure class="logo">
							<a class="" href="/">
								<img src="img/logo.png" alt="logo" />
							</a>
						</figure>
					</div>
					<!-- /.navbar-header -->

					<div class="collapse navbar-collapse" id="hideMenu">
			        
				        <ul class="nav navbar-nav">
				        	<li><a href="#">Novidades</a></li>
				        	<li><a href="#">Em Breve</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									Genêros 
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">	            
									<li><a href="#">Ação</a></li>
									<li><a href="#">Aventura</a></li>
									<li><a href="#">Animação</a></li>
									<li><a href="#">Comédia</a></li>
									<li><a href="#">Comédia Romantica</a></li>
									<li><a href="#">Drama</a></li>
									<li><a href="#">Romance</a></li>
									<li><a href="#">Suspense</a></li>
									<li><a href="#">Terror</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Ver todos &raquo;</a></li>
								</ul>
							</li>
				      	</ul>

				        <ul class="nav navbar-nav navbar-right">
					        <form class="navbar-form navbar-left" role="search">
						        <div class="form-group hidden-sm">
						        	<input type="text" class="form-control" placeholder="Pesquisar">
						        </div>
						        <button type="submit" class="btn btn-default">ico</button>
					        </form>
					        <li><a href="login.html">Entrar</a></li>
					    </ul>
			    	</div><!-- /.navbar-collapse -->
				</nav>
			</header>