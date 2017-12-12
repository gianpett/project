<?php

class verificaExistencia {

    private $user;
    public $conexao;

    public function __construct($conexao){
      $this->conexao = $conexao;
    }

    function verificaExistencias($user) {

      $this->user = $user;

      $query = "SELECT * FROM users WHERE username = '{$this->user}'";
      $stmt = mysqli_query($this->conexao, $query);
      $rows = mysqli_num_rows($stmt);

     if($rows < 0) {
         echo "<div class='alert alert-danger'><center><i class='fa fa-times'></i> Nenhum usuário foi encontrado.</center></div>";
     }
  }
}

?>
