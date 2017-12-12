<?php
// Destrói a sessão do usuário:
session_start();
session_destroy();
header("location:index.php");
?>
