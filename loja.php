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

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nerko+One&family=Rubik+Glitch&family=Syne+Mono&display=swap');

		body {
			background-image: url('fundo3.png');
			background-size: cover;
		}


		.enviar {
			background-color: #3769ff;
			color: white;
		}

		.titulo {
			margin-left: 50px;
			color: white;
		}

		.pesquisar {
			margin-left: 240px;
		}

		.bemvindo {
			display: flex;
			justify-content: space-between;

		}

		.card {
			margin: 10px;
		}

		.carrinho {
			margin-right: 10px;
			background-color: #3769ff;
			color: white;
		}

		.comprar {
			background-color: #3445b4;
			color: white;

		}

		.search-container {
			position: relative;
			width: 40px;
			height: 40px;
		}

		.search-icon {
			display: flex;
			justify-content: center;
			align-items: center;
			position: absolute;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			transform: rotate(45deg);
			cursor: pointer;
		}

		.search-icon::before {
			content: '';
			width: 25%;
			height: 25%;
			border-radius: 50%;
			border: 2px solid #f2cb05;
		}

		.search-icon::after {
			content: '';
			width: 20%;
			height: 2px;
			background-color: #f2cb05;
		}

		.search-input {
			width: 100%;
			height: 100%;
			border-radius: 20px;
			border: none;
			outline: none;
			padding-left: 40px;
			transition: all 0.7s;
		}

		.search-input:focus {
			width: 250px;
			box-shadow: 2px 2px 5px #777;
		}

		.search-input:valid {
			width: 250px;
		}

		.pesquisar {
			border-radius: 10px;
		}

		.enviar {
			border-radius: 10px;
		}

		h1 {
			font-family: 'Syne Mono', monospace;
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

			<form method="POST" action="loja.php">
				<div class="bemvindo">
					<h1 class="titulo">Welcome to MetaStore! </h1>
					<div><input type="text" class="pesquisar" name="pesquisar" placeholder="PESQUISAR">
						<input type="submit" name="enviar" value="enviar" class="enviar">
					</div>
				</div>
			</form>

			<div class="prod">
				</h1>
				<?php
				if (isset($_POST['enviar'])) {
					$servidor = "localhost";
					$usuario = "root";
					$senha = "";
					$dbname = "bdmeta";
					//Criar a conexao
					$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

					$pesquisar = $_POST['pesquisar'];
					$result_produto = "SELECT * FROM produtos WHERE nome  LIKE '%$pesquisar%'  ";
					$resultado_produto = mysqli_query($conn, $result_produto);

					echo "<table border='1'>";


					$i = 1;
					while ($rows_produto = mysqli_fetch_array($resultado_produto)) {
						
						if ($i ==1) {
							echo "<tr>";
						}
						if ($i == 5) {
							"echo </tr>";
						}
						echo  "<td><div class='card' style='width: 18rem;'>
		<img src='...' class='card-img-top' alt='...'>
		<div class='card-body'>
		  <h5 class='card-title'>" . $rows_produto['nome'] . "</h5>
		  <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  <button href='carrinhou.php?id_produtos=<?=".$meta["id_produtos"]." class='carrinho'>Adicionar ao carrinho'</button>	
		  <button href='#' class='comprar'>Comprar</button></div></div></td>";
		  $i++;
		  if ($i == 5) {
			  $i = 1;
		  }
					}
					echo"</table>";

				}
				?>

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