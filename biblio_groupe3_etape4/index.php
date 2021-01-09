<?php $page_title = "Accueil";
require "requires/head_index.php"; ?>

<?php require "requires/nav.php"; ?>

<div class="marge"></div>


  <div class="scroll_to_top">
      <a href="#top"><p id="scroll_to_top">Haut de page</p></a>
  </div>

<section class=tll>
  <div class=grid>
  <?php
      $link = mysqli_connect("localhost", "root", "", "bibliotheque");


        $req = "SELECT * FROM livre JOIN editeur  ON editeur.id=livre.editeur
        JOIN auteur ON auteur.idLivre=livre.isbn JOIN personne ON personne.id=auteur.idPersonne WHERE idRole = 1;";
        $result = mysqli_query($link,$req);


        if($result){
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

          $isbn = $row["isbn"];
          $titre = $row["titre"];
          ?>

      <div class=livre>
          <a href=<?php echo "./redirections/" . $row["isbn"] . ".php"?>>
          <div class=zoom><img src=<?php echo "(../../img/Livres/" . $row["isbn"] . ".jpg"?> alt="Justice league"></div></a>

            <?php
              echo "<p>Nom : " . $row["nom"] . "</p>";
              echo "<p>Prénom : " . $row["prenom"] . "</p>";
              echo "<p>éditeur : " . $row["libelle"] . "</p>";
              echo "<p>titre : " . $row["titre"] . "</p>";
              echo "<p>isbn : " . $row["isbn"] . "</p>";
              echo "<p>année de publication : " . $row["annee"] . "</p>";


        }
        mysqli_free_result($result);
      }
      mysqli_close($link);



        ?>
    </div>
  </div>
</section>





  </body>
</html>
