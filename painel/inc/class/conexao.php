<?php

class Conexao {

   private $host = 'localhost';
   private $user = 'root';
   private $pass = 'gian1234';
   private $banc = 'website';
   public  $conexao;

  function conecta(){

    $link = mysqli_connect($this->host, $this->user, $this->pass, $this->banc);

    $error = mysqli_error($link);
    if (empty($error)) {
      return $link;
    }
  }
}

?>
