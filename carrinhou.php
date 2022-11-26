<?php
	session_start();
	require_once 'init.php';
	require 'check.php';

if (isset($_GET['id_produtos'])) {
    $user = $_SESSION['user_name'];
    $result_produto = "SELECT * FROM usuarios WHERE nome  LIKE '%$user%'  ";
    $user_id = mysqli_real_escape_string($con, $result_produto);
    $produto_id = mysqli_real_escape_string($con, $_GET['id_produtos']);
    


}
?>