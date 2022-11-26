<?php
session_start();
require_once 'dpcon.php';
if(isset($_POST['delete_usuarios'])){
   $student_id = mysqli_real_escape_string($con, $_POST['delete_usuarios']);
   $query = "DELETE FROM usuarios WHERE id_usu='$student_id' ";
    $query_run = mysqli_query($con, $query);
 if($query_run) {
       $_SESSION['message'] = "Usuário excluido com sucesso";
       header("Location: index.php");
       exit(0);
   }   else   {
       $_SESSION['message'] = "Não foi possivel excluir o usuário";
       header("Location: index.php");
       exit(0);
   }
}
if(isset($_POST['update_usuarios'])){
   $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
   $nome = mysqli_real_escape_string($con, $_POST['nome']);
   $sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $senha = mysqli_real_escape_string($con, $_POST['senha']);
   $cpf = mysqli_real_escape_string($con, $_POST['cpf']);
   $query = "UPDATE usuarios SET nome='$nome',sobrenome='$sobrenome', email='$email', senha='$senha', cpf='$cpf' WHERE id_usu='$student_id' ";
   $query_run = mysqli_query($con, $query);
  if($query_run) {
       $_SESSION['message'] = "Usuário atualizado com sucesso";
       header("Location: index.php");
       exit(0);
   }   else   {
       $_SESSION['message'] = "Usuário não atualizado";
       header("Location: index.php");
       exit(0);
   }
}

 if(isset($_POST['save_usuarios'])){
   $nome = mysqli_real_escape_string($con, $_POST['nome']);
   $sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $senha = mysqli_real_escape_string($con, $_POST['senha']);
   $cpf = mysqli_real_escape_string($con, $_POST['cpf']);
   $query = "INSERT INTO usuarios (nome,sobrenome,email,senha,cpf) VALUES ('$nome','$sobrenome','$email','$senha','$cpf')";
   $query_run = mysqli_query($con, $query);
   if($query_run)  {
       $_SESSION['message'] = "Usuário cadastrado com sucesso!";
       header("Location: form-login.php");
       exit(0);
   }  else  {
       $_SESSION['message'] = "Usuário não cadastrado";
       header("Location: meta.php");
       exit(0);
   }
}
