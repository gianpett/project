<?php
include "inc/config.php";
include "inc/protect.php";
$logado = $_SESSION['username'];
$result = mysqli_query($conexao, "SELECT rank.id FROM rank inner join users on users.rank = rank.id WHERE users.username = '{$_SESSION['username']}'");
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $rank = $row["id"];
       $cargo = $row['tipo'];
  }
} else {
    echo "<div class='alert alert-danger'>Você não está logado!</div>";
  }
$row = mysqli_num_rows($result);
// SELECT para exibir equipe:
$query = mysqli_query($conexao, "SELECT * FROM users WHERE rank >1 order by id");
$row = mysqli_num_rows($query);
if($row > 0){
// empty
  }
  $query2 = mysqli_query($conexao, "SELECT * FROM users WHERE rank >1 order by id");
  $row = mysqli_num_rows($query2);
  if($row > 0){
  // empty
    }
    $cadastro = mysqli_query($conexao, "SELECT COUNT(*) id FROM users");
    $cadastros = mysqli_num_rows($cadastro);
    if($cadastro >0){
      // empty
    }
/*if($_SESSION['username'] = rank <1){
  header("location:dashboard.php");
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<title><?= $title ?></title>
  <head>
  <?php include "inc/head.php"; ?>
  </head>
<body>
<?php include "inc/nav2.php"; ?>
    <div class="wrapper">

      <!-- SIDEBAR
      ================================================== -->
      <div class="sidebar">

        <!-- Sidebar: Close button (mobile devices) -->
        <div class="sidebar__close">
          <img src="assets/img/icons/icon_close.svg" alt="Fechar">
        </div>
        <div class="sidebar__user">
          <div class="sidebar-user__avatar">
            <?php while($dados1 = mysqli_fetch_array($query2)) : ?>
            <img src="<?=$dados1['avatar']?>" alt="...">
          <?php endwhile; ?>
          </div>
          <a class="sidebar-user__info" role="button" href="#sidebar-user__nav" data-toggle="collapse" aria-expanded="false" aria-controls="sidebar-user__nav">
            <h4><?= $logado ?></h4>
            <p><?= $rank ?></p>
          </a>
        </div>
      <?php include "inc/nav.php"; ?>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="page-header">
            </h1>
          </div>
        </div>
        <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="fa fa-newspaper-o"></i> Notícias
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive"><br>
                <form method="POST" action="addnews.php">
                <input class="form-control" type="text" name="title" placeholder="Título*" required><br>
                <input class="form-control" type="text" name="shortstory" placeholder="Descrição*" required><br>
                <textarea class="form-control" name="longstory" placeholder="Notícia*" required></textarea><br>
                <input class="form-control" type="text" name="image" placeholder="Imagem*" required><br>
                <input class="form-control" type="text" name="author" placeholder="<?= $logado ?>" required><br>
                <input type="submit" class="btn btn-primary" value="Publicar">
              </form>
              </div>
            </div>
          </div>
        </div>
        <footer class="page__footer">
          <div class="row">
            <div class="col-xs-12">
             Lorem Ipsum
            </div>
          </div>
        </footer>
      </div>
    </div>
  <?php include "inc/footer.php"; ?>
  </body>
</html>
