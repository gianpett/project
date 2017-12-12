<?php
include "inc/config.php";
include "inc/protect.php";
$logado = $_SESSION['username'];
$result = mysqli_query($conexao, "SELECT rank.id FROM rank inner join users on users.rank = rank.id WHERE users.username = '{$_SESSION['username']}'");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
       $rank = $row["id"];
       $cargo = $row['tipo'];
  }
}else{
    echo "<div class='alert alert-danger'>Você não está logado!</div>";
  }
$row = mysqli_num_rows($result);
// SELECT para exibir equipe:
$query = mysqli_query($conexao, "SELECT * FROM users WHERE rank > 1 order by id");
$row = mysqli_num_rows($query);
if($row > 0){
// condição em baixo
  }
  $query2 = mysqli_query($conexao, "SELECT * FROM users WHERE rank > 1 order by id");
  $row = mysqli_num_rows($query2);
  if($row > 0){
  // condição em baixo
    }
    $cadastro = mysqli_query($conexao, "SELECT COUNT(*) id FROM users");
    $cadastros = mysqli_num_rows($cadastro);
    if($cadastro >0){
      // condição em baixo
    }
    $newsq = mysqli_query($conexao, "SELECT COUNT(*) id FROM cms_news");
    $cadastros = mysqli_num_rows($newsq);
    if($news>0){
      // condição em baixo
    }
    // atualiza dados:
    // UPDATE users SET password = "teste123" WHERE password = '$pass';
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<title><?= $title; ?>: Dashboard</title>
  <head>
<?php include "inc/head.php"; ?>
  </head>
 <body>
  <?php include "inc/nav2.php"; ?>
    <div class="wrapper">
      <div class="sidebar">
        <div class="sidebar__close">
          <img src="assets/img/icons/icon_close.svg" alt="Fechar">
        </div>
        <div class="sidebar__user">
          <div class="sidebar-user__avatar">
            <?php while($dados1 = mysqli_fetch_array($query2)) : ?>
            <img src="<?=$dados1['avatar']?>" alt="">
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
              Dashboard <small>e estatísticas</small>
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_red">
              <i class="fa fa-group"></i>
              <h3 class="dashboard-stats__title">
                  <?php while($users = mysqli_fetch_array($cadastro)) : ?>
                <span class="count-to" data-from="0" data-to="<?=$users['id']?>">0</span>
              <?php endwhile; ?>
                <small>registros</small>
              </h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_orange">
              <i class="fa fa-newspaper-o"></i>
              <h3 class="dashboard-stats__title">
                  <?php while($news = mysqli_fetch_array($newsq)) : ?>
                <span class="count-to" data-from="0" data-to="<?=$news['id']?>">0</span>
              <?php endwhile; ?>
                <small>notícias</small>
              </h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_green">
              <i class="fa fa-heart"></i>
              <h3 class="dashboard-stats__title">
                <span class="count-to" data-from="0" data-to="4155">0</span>
                <small>depoimentos</small>
              </h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="dashboard-stats__item dashboard-stats__item_light-blue">
              <i class="fa fa-eur"></i>
              <h3 class="dashboard-stats__title">
                $<span class="count-to" data-from="0" data-to="105">0</span>K
                <small>Total profit</small>
              </h3>
            </div>
          </div>
        </div>
        <div class="row row-justified">
          <div class="col-xs-12 col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                <i class="fa fa-calendar"></i> Calendário
                </h3>
              </div>
              <div class="panel-body">
                <div id="fullcalendar_basic"></div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <i class="fa fa-group"></i> Equipe
                </h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-hover dashboard__users">
                    <thead>
                      <tr>
                        <th>Usuário</th>
                        <th>E-mail</th>
                        <th>Registro</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while($dados = mysqli_fetch_array($query)) : ?>
                      <tr>
                        <td>
                          <div class="dashboard__users__username">
                            <div class="dashboard__users__username__img">
                              <img src="<?=$dados['avatar']?>" alt="...">
                            </div> <?=$dados['username']?>
                          </div>
                        </td>
                        <td>
                          <div class="dashboard__users__email">
                            <?=$dados['mail']?>
                          </div>
                        </td>
                        <td>
                          <div class="dashboard__users__date">
                            <time datetime="2017-02-07">Feb 07, 2017</time>
                          </div>
                        </td>
                        <td>
                          <div class="dashboard__users__status active">
                            Active
                          </div>
                        </td>
                      </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="panel-footer hidden">
                <a href="#" class="btn btn-primary">Criar novo usuário</a> <a href="#" class="btn btn-link">Criar novo usuário</a>
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
