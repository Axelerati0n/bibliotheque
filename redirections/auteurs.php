<?php $page_title = "Auteurs";
require "../requires/head_header.php"; ?>
<?php require "../config.php";?>
<?php require "../requires/nav.php"; ?>



    <table border="10">
      <thead>
        <tr>
          <th>nom</th>
          <th>prénom</th>
        </tr>
      </thead>
      <tbody>
        <div>
        <?php

            $link = mysqli_connect("localhost", "root", "", "bibliotheque");

              $req = "SELECT * FROM livre JOIN auteur ON auteur.idLivre=livre.isbn JOIN personne ON personne.id=auteur.idPersonne WHERE idRole = 1";

              $result = mysqli_query($link,$req);



              if($result){
                  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                      ;
                      echo"<tr><td align=center bgcolor=#3399ff>" . $row["nom"] . "</td>";
                      echo"<td align=center bgcolor=#3399ff>" . $row["prenom"] . "<td></tr>";
                      ;




                  }
                mysqli_free_result($result);
              }
              mysqli_close($link);
                ?>

        </div>
      </tbody>
    </table>
  </body>
</html>
