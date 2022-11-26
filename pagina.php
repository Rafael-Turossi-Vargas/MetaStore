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

</head>

<body>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nerko+One&family=Rubik+Glitch&family=Syne+Mono&display=swap');
		.cadastrese{
			font-family: 'Syne Mono', monospace;
			
		}
		body{	
			background: url('galaxia.png');
			background-size: cover;
		}
		h1{
			color:white;
			font-family: 'Syne Mono', monospace;
		}
		.container-a {
			width: 90%;
			margin: 0 auto;
			
		}

		.center {
			text-align: center;
			margin-top: 310px;
		}

		.btn {
			width: 200px;
			height: 310px;
			background-color: transparent;
			border-radius: 10%;
			margin: 0 auto;

		}

		.hologram {
			position: relative;
			display: block;
			
		}

		.hologram:hover .steam-logo {
			opacity: 0.9;
			visibility: visible;
			
		}

		.holo-base {
			display: block;
			transform-style: preserve-3d;
			perspective: 500px;
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			
		}

		.circle {
			width: 250px;
			height: 60px;
			display: block;
			border: 20px solid black;
			background: #000080;
			margin: 0 auto;
			border-radius: 50%;
			transform: rotateX(60deg);
			box-shadow: 0 8px 15px rgb(94, 93, 93);
		}

		.steam-logo {
			opacity: 0;
			transition: 500ms linear all;
			visibility: hidden;
			margin-bottom: 100px;
			justify-self: center;
			align-self: center;
			width: 580px;
			height: 270px;
			background: linear-gradient(transparent, #3769ff);
			display: block;
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			clip-path: polygon(5% 0, 100% 0, 60% 100%, 40% 100%);
			z-index: 2;
			width: 1000px;
		}

		.steam-logo figure {
			width: 800px;
			height: 280px;
			margin: 0 auto;
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
			background-image: url('holograma.png');
		}
	</style>
	<?php
	session_start();
	require_once 'init.php';
	require 'check.php';
	?>

	<div class="wrapper d-flex align-items-stretch" id="wrapper">
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
						<a href="#"><span class="fa fa-home mr-3"></span> Home</a>
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
			<?php
			if(!$_SESSION['logged_in'] == false){
			echo "<div class='oi'><h1>Olá ". $_SESSION['user_name'] . "</h1></div>";
			}else{
				echo "<a href='form-login.php'><h1 class='cadastrese'>Cadastre-se</h1></a>";
			}
			?>
			<div class="container-a">
				<div class="center">
					<a  class="btn hologram">
						<span class="steam-logo">
							<figure></figure>
						</span>
						<span class="holo-base">
							<span class="circle"></span>
						</span>
					</a>
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
</body>

</html>