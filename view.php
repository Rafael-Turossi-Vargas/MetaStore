<?php
require 'dpcon.php';
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Carrinho do usuário</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados do Carrinho
                            <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>



                    <div class="card-body">
                        <?php
                        if (isset($_GET['id_usu'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id_usu']);
                            $query = "SELECT * FROM carrinho WHERE id_carrinho='$student_id' ";

                            $query_run = mysqli_query($con, $query);
                            var_dump($query_run);



                                    /*echo "<div class='card-group'>";
                                    while ($rows_produto = mysqli_fetch_array($query_run)) {
                                        echo "<div class='card' style='width: 18rem;'>
		<img src='...' class='card-img-top' alt='...'>
		<div class='card-body'>
		  <h5 class='card-title'>" . $rows_produto['nome'] . "</h5>
		  <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  <button href='#' class='carrinho'>Adicionar ao carrinho</button>	
		  <button href='#' class='comprar'>Comprar</button></div></div>";
                                    }
                                    echo "</div";*/
                                ?>
                        <?php
                            } else {
                                echo "<h4>Nenhum produto encontrado</h4>";
                            }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>