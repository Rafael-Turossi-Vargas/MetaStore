<?php
if(isset($_POST['sair'])){
// inicia a sessão
session_start();

// muda o valor de logged_in para false
// finaliza a sessão
session_destroy();
$_SESSION['logged_in'] = false;
// retorna para a index.php
header('Location: pagina.php');}
?>
