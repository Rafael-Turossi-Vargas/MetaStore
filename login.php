<?php

// inclui o arquivo de inicialização
require 'init.php';

// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

//verifica se as variáveis email e password não estão vazias
if (empty($email) || empty($senha)) {
    echo "Informe email e senha";
    exit;
}

// cria o hash da senha
$passwordHash = $senha;//make_hash($senha);

//Conecta no banco de dados
$PDO = db_connect();

//Verifica se o email e a senha existem no banco de dados
$sql = "SELECT id_usu, nome FROM usuarios WHERE email = :email AND senha= :senha";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $passwordHash);

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($usuarios);

if (count($usuarios) <= 0) {
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$usuarios = $usuarios[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $usuarios['id'];
$_SESSION['user_name'] = $usuarios['nome'];
//var_dump($_SESSION['user_name']);

header('Location: pagina.php');
