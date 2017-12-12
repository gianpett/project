<?php

class validaSessao {

    private $user;
    private $pass;
    public $conexao;

    public function __construct($conexao){
      $this->conexao = $conexao;
    }
    function validar($user,$pass) {
      $this->user = $user;
      $this->pass = $pass;

      $query = "SELECT * FROM users WHERE username = '{$this->user}' and password = md5('{$this->pass}')";
      $stmt = mysqli_query($this->conexao, $query);
      $rows = mysqli_num_rows($stmt);
// $_SESSION['username'];
     if($rows > 0) {
         session_start();
         //$dados = mysqli_fetch_array($stmt, mysqli_assoc);
         $_SESSION['username'] = $_POST['username'];
         $_SESSION['password'] = $_POST['password'];

         echo "<div class='alert alert-success'><center><i class='fa fa-check'></i> Você entrou com sucesso.</center></div>";
         header("location:dashboard.php");
     } else {
         echo "<div class='alert alert-danger'><center><i class='fa fa-times'></i> Usuário ou senha incorreto(s).</center></div>";
     }

  }

}

?>
