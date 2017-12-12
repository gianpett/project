<?php

$conexao = mysqli_connect(locahost, root, gian1234, website) or die (mysqli_error());
$user = $_POST['username'];
$pass = md5($_POST['password']);
if($row >0){
  session_start();
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  echo "<div class='alert alert-success'><i class='fa fa-check'></i> Você foi <b>autenticado</b> com suceso.</div>";
}else {
  echo "<div class='alert alert-danger'>Usuário ou senha incorreto.</div>";
}
?>
