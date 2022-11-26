<!doctype html>
<html lang="en">

<head>
	<title>MetaStore</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<style>
		body {
			background: url('fundo2.png');
			background-size: cover;
		}

		.card {
			height: 370px;
			margin-top: auto;
			margin-bottom: auto;
			width: 400px;
			background-color: rgba(0, 0, 0, 0.5) !important;
		}

		.social_icon span {
			font-size: 60px;
			margin-left: 10px;
			color: #FFC312;
		}

		.social_icon span:hover {
			color: white;
			cursor: pointer;
		}

		.card-header h3 {
			color: white;
		}

		.social_icon {
			position: absolute;
			right: 20px;
			top: -45px;
		}

		.input-group-prepend span {
			width: 50px;
			background-color: #3445b4;
			color: black;
			border: 0 !important;
		}

		input:focus {
			outline: 0 0 0 0 !important;
			box-shadow: 0 0 0 0 !important;

		}

		.remember {
			color: white;
		}

		.remember input {
			width: 20px;
			height: 20px;
			margin-left: 15px;
			margin-right: 5px;
		}

		.login_btn {
			color: black;
			background-color: #3445b4;
			width: 100px;
		}

		.login_btn:hover {
			color: black;
			background-color: white;
		}

		.links {
			color: white;
		}

		.links a {
			margin-left: 4px;
		}
	</style>

</head>

<body>
	<?php
	session_start();
	require_once 'init.php';
	require 'check.php';
	?>

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">MetaStore</span>
				</button>
			</div>

			<div class="p-4">
				<h1><a href="#" class="logo">MetaStore <span>Tudo para seu MetaVerso</span></a></h1>
				<ul class="list-unstyled components mb-5">
					<li class="active">
						<a href="pagina.php"><span class="fa fa-home mr-3"></span> Home</a>
					</li>
					<li>
						<?php
						if ($_SESSION['logged_in'] == false) {
							echo "<a href='form-login.php'><span class='fa fa-user mr-3'></span> Perfil</a>";
						} else {
							echo "<a href='perfil.php'><span class='fa fa-user mr-3'></span> Perfil</a>";
						} ?>
					</li>

					<li>
						<a href="loja.php"><span class="fa fa-suitcase mr-3"></span> Loja</a>
					</li>

					<li>
						<a href="#"><span class="fa fa-paper-plane mr-3"></span> Contato</a>
					</li>
				</ul>

			</div>
		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Login In</h3>
					</div>
					<div class="card-body">
						<form action="login.php" method="post">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="email" class="form-control" placeholder="username">

							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="senha" class="form-control" placeholder="password">
							</div>
							<div class="row align-items-center remember">
								<input type="checkbox">Manter conectado
							</div>
							<div class="form-group">
								<input type="submit" value="Entrar" class="btn float-right login_btn">
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Não tem uma conta?<a href="meta.php">Crie uma</a>
						</div>
						<div class="d-flex justify-content-center">
							<a href="#">Esqueceu sua senha?</a>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
	</div>
	<script src="script.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>