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
    <title>Cadastro de usuários</title>
</head>

<body>
    <div class="container mt-4">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do usuario
                            <a href="meta.php" class="btn btn-primary float-end">Adicionar usuario</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>Email</th>
                                    <th>Senha</th>
                                    <th>Cpf</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM usuarios";
                                $query_run = mysqli_query($con, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $meta) {
                                ?>
                                        <tr>
                                            <td><?= $meta['id_usu']; ?></td>
                                            <td><?= $meta['nome']; ?></td>
                                            <td><?= $meta['sobrenome']; ?></td>
                                            <td><?= $meta['email']; ?></td>
                                            <td><?= $meta['senha']; ?></td>
                                            <td><?= $meta['cpf']; ?></td>
                                            <td>




                                                <a href="view.php?id_usu=<?= $meta['id_usu']; ?>" class="btn btn-info btn-sm">Produtos</a>
                                                <a href="edit.php?id_usu=<?= $meta['id_usu']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_usuarios" value="<?= $meta['id_usu']; ?>" class="btn btn-danger btn-sm">Deletar</button>

                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> Nenhum usuário cadastrado </h5>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>