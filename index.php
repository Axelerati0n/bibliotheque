<?php $page_title = "Accueil";
require "requires/head_index.php"; ?>
<?php require "config.php";?>
<?php require "requires/nav.php"; ?>

<div class="marge"></div>


  <div class="scroll_to_top">
      <a href="#top"><p id="scroll_to_top">Haut de page</p></a>
  </div>

<section>

  <div class=grid>
  <?php

      $link = mysqli_connect("localhost", "biblioread", "biblioread", "bibliotheque");
      if(!mysqli_set_charset($link,"utf8mb4")){
          printf("erreur lors du chargement du jeu de caractere utf8mb4 : %s\n", mysqli_error($link));
          exit();
      }

        $req = "SELECT * FROM livre JOIN editeur  ON editeur.id=livre.editeur
        JOIN auteur ON auteur.idLivre=livre.isbn JOIN personne ON personne.id=auteur.idPersonne WHERE idRole = 1 ORDER BY titre;";
        $result = mysqli_query($link,$req);


        if($result){
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

          $isbn = $row["isbn"];
          $titre = $row["titre"];
          ?>

      <div>

          <a href=<?php echo "{$CONFIG["root_path"]}redirections/detail.php?isbn=" . $row["isbn"]?>>
          <div class=zoom><img src=<?php echo "{$CONFIG["root_path"]}img/Livres/{$isbn}.jpg"?> alt="<?php echo $isbn?>"></div></a>

          <ul class=liste>
            <li class=graouh>Titre : <?php echo $titre ?></li>

            <?php
              echo "<li>Nom : " . $row["nom"] . "</li>";
              echo "<li>Prénom : " . $row["prenom"] . "</li>";
              echo "<li>éditeur : " . $row["libelle"] . "</li>";
              echo "<li>isbn : " . $row["isbn"] . "</li>";
              echo "<li>année de publication : " . $row["annee"] . "</li>";
              echo"</ul>";
          echo "</div>";
        }
        mysqli_free_result($result);
      }
      mysqli_close($link);



        ?>

  </div>
</section>





  </body>
</html>
