<?php

$mensagem = "Mensagem enviada em ".date("d/m/Y").", os dados seguem abaixo:\n";
while(list($campo, $valor) = each($S_POST)) {
$mensagem .= ucwords($campo).": ".$valor."\n";
  }
mail("gianluca.pettenon@ielusc.br", "Assunto do E-mail", $mensagem, "From: $REMOTE_ADDR");

?>
