<?php
include "inc/config.php";
include "inc/protect.php";
if(empty($_POST)){
  echo "<div class='alert alert-warning'>Campos com <b>*</b> são <b>obrigatório</b>!</div>";
}else {
  $titulo = $_POST['title'];
  $shortstory = $_POST['shortstory'];
  $longstory = $_POST['longstory'];
  $author = $_POST['author'];
  $image = $_POST['image'];
$query3 = "INSERT INTO cms_news (title, shortstory, longstory, image, author) VALUES ";
$query3 .= "('{$titulo}', '{$shortstory}', '{$longstory}', '{$image}', '{$author}')";
mysqli_query($conexao,$query3);
echo "<div class='alert alert-success'>Notícia postada com sucesso.</div>";
}
header("location:news.php");
?>
