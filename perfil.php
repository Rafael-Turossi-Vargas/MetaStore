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
        <form action="logout.php" method="POST">
    <input type="submit" name="sair" value="sair" >
    </form>   
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