<?php
// Verifica se existe sessão, se não redireciona para index:
session_start();
if((empty ($_SESSION['username'])) and (empty($_SESSION['password']))){
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header("location:index.php");
 }
?>
