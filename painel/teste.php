<?php

class Caneta {

public $cor;
public $tamanho;
public $marca;
public $tampado;
public $destampada;

function tampada(){
  if ($tampado == true){
    echo "Ops, a caneta está tampada";
  } else {
    printf("Você pode escrever");
  }
}

function destampada(){
  if($tampado && $destampada == false){
    echo "A caneta está destampada";
  }
}

$pen = new Caneta;
$pen-> cor = "Branca";
}

var_dump($pen);

?>
