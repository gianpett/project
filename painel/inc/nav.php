<nav id="sidebar__nav">
    <ul class="sidebar__nav">
      <li>
        <a href="dashboard.php">
          <i class="fa fa-dashboard"></i> Dashboard
        </a>
      </li>
        <?php
        if($rank >= 2){
        echo "<li><a href='news.php'>
          <i class='fa fa-newspaper-o'></i> Adicionar Notícia
        </a>
      </li>
      <li>
        <a href='#'>
          <i class='fa fa-certificate'></i> Adicionar Campanha
        </a>
      </li>
      <li>";} ?>
        <!--<a href='#'>
          <i class='fa fa-upload'></i> Adicionar Emblema
        </a>
      </li>
      <!--<li>
        <a href="#">
          <i class="fa fa-ban"></i> Banir Usuário
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-edit"></i> Editar Usuário
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-code"></i> Desenvolvedor
        </a>
      </li>-->
    </ul>
</nav>
