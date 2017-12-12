<?php
$host = 'localhost';
$user = 'root';
$pass = 'gian1234';
$banc = 'website';
$conexao = mysqli_connect($host, $user, $pass, $banc) or die(mysqli_error());
include "inc/config.php";
// SELECT para exibir comentarios:
$query = mysqli_query($conexao, "SELECT * FROM cms_depoiments order by id");
$row = mysqli_num_rows($query);
if($row > 0){
// empty
  }
// SELECT para portfólio:
  $queryp = mysqli_query($conexao, "SELECT * FROM cms_news order by id");
  $rowp = mysqli_num_rows($queryp);
  if($rowp > 0){
  // empty
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<title><?php echo $title;?>: Início</title>
  <head>
  <?php include "inc/head.php"; ?>
  </head>
  <body>
  <?php include "inc/navbar.php"; ?>
    <section id="hero" class="hero">
      <div class="container">
        <div class="row">
          <div class="text col-md-6 col-sm-12">
            <h3 class="text-uppercase">Your new portfolio template</h3>
            <h1>Lorem ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p><a href="#about" class="btn btn-unique-inverse get-started link-scroll">Sobre</a>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="services background-gray--even-lightest">
      <div class="container text-center">
        <header>
          <h1 class="small-heading">Our Services</h1>
          <h2>What we are good at</h2>
        </header>
        <div class="row">
          <div class="item col-md-4 col-sm-6">
            <div class="icon"><i class="icon-database-1"></i></div>
            <h3>Network Solutions</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
          <div class="item col-md-4 col-sm-6">
            <div class="icon"><i class="icon-cloud-computing"></i></div>
            <h3>Cloud Services</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
          <div class="item col-md-4 col-sm-6">
            <div class="icon"><i class="icon-database-streamline"></i></div>
            <h3>Database Management</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="row">
        <div class="container-fluid">

          <!-- Início While -->
      <?php while($portfolio = mysqli_fetch_array($queryp)) : ?>
        <div class="item col-md-3 col-sm-6"><a href="#" data-toggle="modal" data-target="#portfolio-item<?= $portfolio['link'] ?>">
            <img src="<?= $portfolio['imagem']?>" alt="item" class="img-responsive">
              <div class="overlay">
                <div class="content">
                </div>
              </div></a>
          </div>
      <div id="portfolio-item<?= $portfolio['link'] ?>" tabindex="-1" role="dialog" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div data-dismiss="modal" aria-label="Close" class="close-btn"><i class="icon-close"></i></div>
            <div class="container-fluid">
              <div class="row">
                <div class="mockup col-md-6">
                  <div class="device-mockup macbook_2015 portrait gold">
                    <div class="device">
                      <div class="screen">
                        <img src="<?= $portfolio['imagem']?>" class="img-responsive"></div>
                    </div>
                  </div>
                </div>
                <div class="text col-md-6">
                  <h2><?= $portfolio['titulo']?></h2>
                  <p class="lead"><?= $portfolio['descricao']?></p>
                  <p><?= $portfolio['texto']?></p>
                  <a href="<?= $portfolio['link']?>" class="btn btn-unique">Visualizar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Final While -->
    <?php endwhile; ?>
    </div>
  </div>
    </section>
    <section id="testimonials" class="testimonials">
      <div class="container text-center">
        <header>
          <h1 class="small-heading">Depoimentos</h1>
          <h2>O que nossos clientes falam</h2>
        </header>
        <div class="icon"><i class="icon-quote"></i></div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="owl-carousel owl-theme testimonials-slider">
              <?php while($dados = mysqli_fetch_array($query)) : ?>
              <div class="user">
                <div class="quote">
                  <p class="lead"><?= $dados['comentario']?></p>
                </div>
                <div class="user-info">
                  <h3><?= $dados['nome']?></h3>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="divider" class="divider">
      <div class="container text-center">
        <h2>Lorem ipsum dolor sit amet</h2>
        <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p><a href="#" class="btn btn-unique-inverse">Leia Mais</a>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="text col-md-5">
            <header>
              <h1 class="small-heading">Contact Us</h1>
              <h2>We'll be more than glad to hear from you.</h2>
            </header>
            <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
            <ul class="social list-unstyled list-inline">
              <li><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="form col-md-7">
            <form id="contact-form" action="sendmail.php" method="post">
              <div class="form-group">
                <input id="username" type="text" name="nome" required="">
                <label for="username">Informe seu nome</label>
              </div>
              <div class="form-group">
                <input id="email" type="email" name="email" required="">
                <label for="mail">Informe um e-mail válido</label>
              </div>
              <div class="form-group">
                <textarea id="message" name="comentarios" required=""></textarea>
                <label for="message">Descreva sua mensagem</label>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-unique">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>wckPanel © 2017</p>
            </div>
            <div class="col-sm-6 text-right">
              <p style="font-size: 15px"><b>Agradecimentos:</b>  <br>Gianluca Pettenon</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  <?php include "inc/footer.php"; ?>
  </body>
</html>
