<?php

class verificaDados {

    private $user;
    private $pass;
    public $conexao;

    public function __construct($conexao){
      $this->conexao = $conexao;
    }

    function verifica($user,$pass) {

      $this->user = $user;
      $this->pass = $pass;

      $query = "SELECT * FROM users WHERE username = '{$this->user}'";
      $stmt = mysqli_query($this->conexao, $query);
      $rows = mysqli_num_rows($stmt);

    if($rows > 0) {
         echo "<div class='alert alert-danger'><center><i class='fa fa-times'></i> Este usuário já está <b>registrado</b> em nosso servidor.</center></div>";
     } else {
       $insere = "INSERT INTO users (username, password) VALUES ";
       $insere .= "('{$this->user}', md5('{$this->pass}'))";
       mysqli_query($this->conexao, $insere);
         echo "<div class='alert alert-success'><center><i class='fa fa-check'></i> Parabéns, registro realizado com <b>sucesso</b>.</center></div>";
     }
  }
}

?>
