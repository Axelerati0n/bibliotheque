<?php require "../config.php" ?>
<nav>
    <ul>
      <li><a href="<?php echo $CONFIG["root_path"] ?>index.php">Menu</a></li>
      <li class="deroulant"><a href="#">Genres</a>
        <ul class="sous">
          <li class="pow"><a href="<?php echo $CONFIG["root_path"] ?>index.php">Bande-Dessinée</a></li>
          <li class="magie"><a href="<?php echo $CONFIG["root_path"] ?>index.php">Conte</a></li>
          <li class="fantome"><a href="<?php echo $CONFIG["root_path"] ?>index.php">Horreur</a></li>
          <li class="japon"><a href="<?php echo $CONFIG["root_path"] ?>index.php">Manga</a></li>
          <li class="plumier"><a href="<?php echo $CONFIG["root_path"] ?>index.php">Roman</a></li>
        </ul>
      </li>
      <li><a href="<?php echo $CONFIG["root_path"] ?>redirections/auteurs.php">Auteurs</a></li>
      <li><a href="<?php echo $CONFIG["root_path"] ?>redirections/contact.php">Contact</a></li>
    </ul>
  </nav>
