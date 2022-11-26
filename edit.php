<?php
session_start();
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
    <title>Editar usuário</title>
</head>

<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar usuário
                            <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <?php
                        if (isset($_GET['id_usu'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id_usu']);
                          
                            $query = "SELECT * FROM usuarios WHERE id_usu='$student_id' ";
                            $query_run = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                $meta = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $meta['id_usu']; ?>">
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <input type="text" name="nome" value="<?= $meta['nome']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sobrenome</label>
                                        <input type="text" name="sobrenome" value="<?= $meta['sobrenome']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?= $meta['email']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <input type="password" name="senha" value="<?= $meta['senha']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Cpf</label>
                                        <input type="number" name="cpf" value="<?= $meta['cpf']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_usuarios" class="btn btn-primary">
                                            Atualizar usuário
                                        </button>
                                    </div>
                                </form>
                        <?php
                            } else {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
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