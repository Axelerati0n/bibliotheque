<?php $page_title = "Accueil";
require "requires/head_index.php"; ?>

<?php require "requires/nav.php"; ?>

<div class="marge"></div>


  <div class="scroll_to_top">
      <a href="#top"><p id="scroll_to_top">Haut de page</p></a>
  </div>

  <?php 
    $link = mysqli_connect("localhost", "root", "", "biblio");
      if(!$link){
        echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
        echo "Erreur de débogage : " . mysqli_connect_errno() . PHP_EOL;
        echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
        exit;
      }
      echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée my_db est géniale." . PHP_EOL;
      echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;
    mysqli_close($link);   
      
      
      
      ?>

<!--cellule BD-->

<section id=BD>
   <h1 class="test">Bande-Dessinée</h1>
<!--livre-->
<figure class="left">
  <div class="zoom">
    <a href="./redirections/9791026819523.php">
    <img src="(../../img/Livres/Bande-dessinee/Justice_league_1.jpg" alt="Justice league"></a>
    <figcaption><strong>Titre : </strong>Justice League
      <br><strong>Auteur : </strong>Geoff Johns
      <br><strong>ISBN : </strong>979-10-268-1952-3
      <br><strong>Editeur : </strong>Urban comics
      <br><strong>Date de publication : </strong>08/03/2019
    </figcaption>
  </div>
</figure>
<!--livre-->
<figure class="right">
  <div class="zoom">
    <a href="./redirections/9782874425554.php">
    <img src="(../../img/Livres/Bande-dessinee/les_simpson_2.jpg" alt="Les Simpson"></a>
    <figcaption><strong>Titre : </strong>Les Simpson
      <br><strong>Auteur : </strong>Matt Groening
      <br><strong>ISBN : </strong>978-2-87442-555-4
      <br><strong>Editeur : </strong>Jungle
      <br><strong>Date de publication : </strong>11/06/2008
    </figcaption>
  </div>
</figure>
</section>

 <!--cellule Conte-->

<section id=conte>
   <h1 class="test2">Conte</h1>
 <!--livre-->
<figure class="left">
  <div class="zoom">
    <a href="./redirections/9782010009242.php">
    <img src="(../../img/Livres/Conte/alice_au_pays_des_merveilles.jpg" alt="Alice au pays des merveilles"></a>
    <figcaption><strong>Titre : </strong>Alice au pays des merveilles
      <br><strong>Auteur : </strong>Lewis Caroll
      <br><strong>ISBN : </strong>978-2-01-000924-2hffud
      <br><strong>Editeur : </strong>Le Livre de Poche Jeunesse
      <br><strong>Date de publication : </strong>20/08/2014
    </figcaption>
  </div>
</figure>
 <!--livre-->
<figure class="right">
  <div class="zoom">
    <a href="./redirections/9782013949736.php">
    <img src="(../../img/Livres/Conte/la-belle-et-la-bete_2.jpg" alt="La belle et la bete"></a>
    <figcaption><strong>Titre : </strong>La Belle et la Bête
      <br><strong>Auteur : </strong> J-M. Leprince de Beaumont
      <br><strong>ISBN : </strong>978-2-01-394973-6
      <br><strong>Editeur : </strong>Hachette Education
      <br><strong>Date de publication : </strong>22/03/2017
    </figcaption>
  </div>
</figure>
</section>

<!--cellule Horreur-->

<section id=horreur>
   <h1 class="test3">Horreur</h1>
 <!--livre-->
<figure class="left">
  <div class="zoom">
    <a href="./redirections/9782070468089.php">
    <img src="(../../img/Livres/Horreur/frankenstein.jpg" alt="Frankenstein"></a>
    <figcaption><strong>Titre : </strong>Frankenstein
      <br><strong>Auteur : </strong>Mary Shelley
      <br><strong>ISBN : </strong>978-2-070-46808-9
      <br><strong>Editeur : </strong>Gallimard
      <br><strong>Date de publication : </strong>05/11/2015
    </figcaption>
  </div>
</figure>
 <!--livre-->
<figure class="right">
  <div class="zoom">
    <a href="./redirections/9782253151432.php">
    <img src="(../../img/Livres/Horreur/simetierre2.jpg" alt="Simetierre"></a>
    <figcaption><strong>Titre : </strong>Simetierre
      <br><strong>Auteur : </strong>Stephen King
      <br><strong>ISBN : </strong>978-2-253-15143-2
      <br><strong>Editeur : </strong>Le Livre de Poche
      <br><strong>Date de publication : </strong>03/09/2003
    </figcaption>
  </div>
</figure>
</section>

<!--cellule Manga-->

<section id=manga>
   <h1 class="test4">Manga</h1>
 <!--livre-->
<figure class="left">
  <div class="zoom">
    <a href="./redirections/9782756056968.php">
    <img src="(../../img/Livres/Manga/sbr_17__9782756056968.jpg" alt="Jojo's bizzares adventures"></a>
    <figcaption><strong>Titre : </strong>Jojo's Bizzares Adventures
      <br><strong>Auteur : </strong>Hirohiko Araki
      <br><strong>ISBN : </strong>978-2-7560-5696-8
      <br><strong>Editeur : </strong>Delcourt
      <br><strong>Date de publication : </strong>23/09/2015
    </figcaption>
  </div>
</figure>
 <!--livre-->
<figure class="right">
  <div class="zoom">
    <a href="./redirections/9782368520536.php">
    <img src="(../../img/Livres/Manga/red_eyes_sword_4_9782368524510.jpg" alt="My red eyes sword"></a>
    <figcaption><strong>Titre : </strong>My red eyes sword
      <br><strong>Auteur : </strong>Tetsuya Tashiro
      <br><strong>ISBN : </strong>978-2-36852-053-6
      <br><strong>Editeur : </strong>Kurokawa
      <br><strong>Date de publication : </strong>12/03/2015
    </figcaption>
  </div>
</figure>
</section>

<!--cellule Roman-->

<section id=roman>
   <h1 class="test5">Roman</h1>
 <!--livre-->
<figure class="left">
  <div class="zoom">
    <a href="./redirections/9782081250833.php">
    <img src="(../../img/Livres/Roman/graal.jpg" alt="Graal"></a>
    <figcaption><strong>Titre : </strong>Graal
      <br><strong>Auteur : </strong>Christian de Montella
      <br><strong>ISBN : </strong>978-2-081-25083-3
      <br><strong>Editeur : </strong>Flammarion
      <br><strong>Date de publication : </strong>18/01/2011
    </figcaption>
  </div>
</figure>
 <!--livre-->
<figure class="right">
  <div class="zoom">
    <a href="./redirections/978207041807.php">
    <img src="(../../img/Livres/Roman/Je_suis_une_legende_978207041807.jpg" alt="Je suis une legende"></a>
    <figcaption><strong>Titre : </strong>Je suis une légende
    <br><strong>Auteur : </strong>Richard Matheson
    <br><strong>ISBN : </strong>978-2-07-041807-7
    <br><strong>Editeur : </strong>Denoël
    <br><strong>Date de publication : </strong>05/05/2001
  </figcaption>
  </div>
</figure>
</section>

<?php require "requires/footer.php"?>



  </body>
</html>
