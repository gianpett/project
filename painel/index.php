<?php
// Arquivos de Configuração:
  include "inc/config.php";

if(!empty($_POST)) {
// Importação de Classe:
  include "inc/class/conexao.php";
  include "inc/class/valida.php";
 #include "inc/class/verifica2.php";

// Classe Cria Conexão:
  $conexao = new Conexao();
  $link = $conexao->conecta();

// Classe Valida Login:
  $sessao = new validaSessao($link);
  $sessao->validar($_POST['username'], $_POST['password']);
}
 ?>
 <!DOCTYPE html>
<html lang="pt-br">
<title>elcPanel: Início</title>
<head>
    <!-- Biblioteca CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/normalize.css" rel="stylesheet">
    <link href="assets/css/my.css" rel="stylesheet">
    <link href="assets/css/extra.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fontes e Ícones -->
    <link href="css/icons.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'>
    <script type="text/javascript">
      function logado(){
        setTimeout("location.href='dashboard.php', 5000");
      }
    </script>
    </head>
<body>
  <br><br>
        <div class="col-md-4 col-md-offset-4">
        <div id="empty">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-cog fa-spin"></i> <b>Painel:</b> Entrar
                </div>
                <div class="panel-body">
                <form class="form-horizontal" method="POST">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </span>
                            <input class="form-control" type="text" name="username" placeholder="Usuário" autofocus required>
                                                </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-lock" aria-hidden="true"></span>
                            </span>
                            <input class="form-control" type="password" name="password" placeholder="Senha" required>
                                                </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                             <span class="fa fa-check" aria-hidden="true"></span> Entrar
                        </button>
                        </div>
        </form>
                  </div>
             </div>
        </div>
   </div>
</div>
</body>
</html>
