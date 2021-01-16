<?php $page_title="en vrai flemme";
require "../requires/head_header.php";
?>
<?php require "../config.php";?>
<?php require "../requires/nav.php"; ?>

  <section>
    <?php

        $link = mysqli_connect("localhost", "root", "", "bibliotheque");
        if(!mysqli_set_charset($link,"utf8mb4")){
            printf("erreur lors du chargement du jeu de caractere utf8mb4 : %s\n", mysqli_error($link));
            exit();
        }
        if(isset($_GET["isbn"])){
           $get = $_GET["isbn"];




           $req = "SELECT * FROM livre JOIN editeur  ON editeur.id=livre.editeur
           JOIN auteur ON auteur.idLivre=livre.isbn JOIN personne ON personne.id=auteur.idPersonne JOIN genre ON genre.id=livre.genre WHERE idRole = 1 AND isbn = $get;";;

          $result = mysqli_query($link,$req);



          if($result){
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            $isbn = $row["isbn"];
            $titre = $row["titre"];

            ?>



          <h1><?php echo $titre ?></h1>
          <figure class="left">
            <div class=zoom><img src=<?php echo "{$CONFIG["root_path"]}img/Livres/{$isbn}.jpg"?> alt="<?php echo $isbn?>"></div>
          </figure>

          <article class="essayons">
            <ul class="liste">
              <?php
                echo "<li><strong>Nom : </strong>" . $row["nom"] . "</li>";
                echo "<li><strong>Prénom : </strong>" . $row["prenom"] . "</li>";
                echo "<li><strong>éditeur : </strong>" . $row["libelle"] . "</li>";
                echo "<li><strong>isbn : </strong>" . $row["isbn"] . "</li>";
                echo "<li><strong>année de publication : </strong>" . $row["annee"] . "</li>";
                echo "<li><strong>genre : </strong>" . $row["libelle"] . "</li>";
                echo "<li><strong>Nombre de pages : </strong>" . $row["nbpages"] . "</li>";
                echo"</ul>";
                echo"<section class=info>";
                if ($isbn == 9782070418077){
                  echo "<h2>Informations complèmentaires :</h2>
      <p> A inspiré le très célèbre film de Will Smith</p>
      <h3>Synopsis :</h3>
      <p>Chaque jour, il doit organiser son existence solitaire dans une cité à l'abandon,
        vidée de ses habitants par une étrange épidémie. Un virus incurable qui contraint les hommes
        à se nourrir de sang et les oblige à fuir les rayons du soleil... Chaque nuit, les vampires
         le traquent jusqu'aux portes de sa demeure, frêle refuge contre une horde aux visages familiers
          de ses anciens voisins ou de sa propre femme. Chaque nuit est un cauchemar pour le dernier
           homme, l'ultime survivant d'une espèce désormais légendaire.</p>";
         }elseif ($isbn == 9782010009242){
           echo"<h2>Informations complèmentaires :</h2>
      <h3>Synopsis :</h3>
      <p>Assise dans l'herbe un jour d'été, Alice voit passer un lapin blanc qu'elle suit dans son terrier.
         Elle bascule alors dans un monde extraordinaire et magique. Au cours de cet étrange voyage,
          elle rencontre des personnages incongrus : des homards qui dansent, un chat qui apparaît pour s'évanouir,
           une chenille qui fume, ou encore une Reine de Coeur qui veut couper la tête de tout le monde.</p>";
         }elseif ($isbn == 9782013949736){
           echo"<h2>Informations complèmentaires :</h2>
      <p>Composé de 5 contes au total dont <strong>La belle et la bête</strong> l'histoire principale.</p>
      <h3>Synopsis :</h3>
      <p>Il était une fois un prince qu'un enchantement avait métamorphosé en bête
         et une jeune fille très belle et très bonne... Il était une fois un prince
         très laid mais plein d'esprit et une jeune fille très belle mais dépourvue
         d'intelligence... ou bien encore un vilain caneton qui était en réalité un cygne...
          De Perrault à Andersen, en passant par Madame Leprince de Beaumont, les contes
           merveilleux tendent à notre réalité un miroir magique dans lequel se dessine le
            destin de ces personnages tributaires du regard des autres et dans lequel finit
             par se dissiper le mirage des apparences trompeuses.
          <br>Autres contes : Madame Leprince de Beaumont - La Belle et la Bête
              - Belote et Laidronette Charles Perrault - Riquet à la houppe Hans Christian Andersen
              - Le vilain petit canard - Les textes intégraux annotés de quatre contes</p>";
         }elseif ($isbn == 9782070468089){
           echo"<h2>Informations complèmentaires :</h2>
      <h3>Synopsis :</h3>
      <p>C'est alors qu'à la lueur blafarde et jaunâtre de la lune qui
         se frayait un chemin au travers des volets, je vis cet être vil -
         le misérable monstre que j'avais créé. II soulevait le rideau du lit
         et avait les yeux - si l'on peut les appeler ainsi - fixés sur moi.
         Ses mâchoires s'ouvrirent et il bredouilla quelques sons inarticulés,
          tandis qu'un rictus ridait ses joues. Peut-être dit-il quelque chose,
           mais je ne l'entendis pas.
        II tendit une main comme pour me retenir, mais je m'échappai et descendis
         précipitamment les escaliers. Je me réfugiais dans la cour de la maison que
         j'habitais ; j'y demeurai le reste de la nuit, marchant de long en large dans
          un état d'agitation extrême, écoutant attentivement, percevant et redoutant le
          moindre son, comme s'il devait annoncer l'approche de ce cadavre démoniaque auquel
           j'avais si malheureusement donné la vie.</p>";
         }elseif ($isbn == 9782081250833){
           echo"<h2>Informations complèmentaires :</h2>
        <p>Tome 1</p>
        <h3>Synopsis :</h3>
        <p>Il est le fils d'un roi mort de chagrin. Il grandit au lac, domaine de la fée Viviane,
           qui l'élève en parfait chevalier et ne l'appelle jamais que l'enfant. Un jour, selon la
           prédiction de Merlin, il part en quête du Graal et apprend son nom. Il franchit les épreuves,
            vainc des ennemis, des monstres et des maléfices. Mais il trouve sur sa route une ennemie
             plus redoutable que les autres, Morgane.
          Et un maléfice auquel il ne sait résister : l'amour. Entrez dans la légende du Saint-Graal,
           chevauchez aux côtés de Lancelot, partez en quête du Secret du monde. Combattez au nom du Roi Arthur
           pour la victoire de la Table Ronde, de la Lumière contre les Ténèbres.</p>";
         }elseif ($isbn == 9782253151432){
          echo"<h2>Informations complèmentaires :</h2>
        <h3>Synopsis :</h3>
        <p>Louis Creed, un jeune médecin de Chicago, vient s'installer avec sa
           famille à Ludlow, petite bourgade du Maine. Leur voisin, le vieux Jud Crandall,
           les emmène visiter le pittoresque « simetierre » où des générations d'enfants
           ont enterré leurs animaux familiers.
           Mais, au-delà de ce « simetierre », tout au fond de la forêt,
           se trouvent les terres sacrées des Indiens, lieu interdit qui séduit
           pourtant par ses monstrueuses promesses.
           Un drame atroce va bientôt déchirer l'existence des Creed,
           et l'on se trouve happé dans un suspense cauchemardesque.</p>";
         }elseif ($isbn == 9782368520536){
           echo"<h2>Informations complèmentaires :</h2>
        <p>Tome 4 aussi appelé Akame ga kill !</p>
        <h3>Synopsis :</h3>
        <p>Esdeath a mis en place la police spéciale des Jägers
          afin d'affronter le Night Raid. Tatsumi, quant à lui,
          fait tout son possible pour se remettre de la mort de Bulat.
          Il décide alors de participer au tournoi d'arts martiaux organisé
           par Esdeath. L'heure de l'affrontement est proche, mais les choses
            vont prendre une tournure très inattendue !</p>";
         }elseif ($isbn == 9782756056968){
           echo"<h2>Informations complèmentaires :</h2>
      <p>Tome 17 de la 7ème partie: Steel Ball Run</p>
      <h3>Synopsis :</h3>
      <p>Steel Ball Run est une course de chevaux qui aura lieu aux USA,
        au départ de San Diego pour finir à New York, à la fin du XIXe siècle.
        Plus de 6 000 km à parcourir, mais la récompense s’avère à la hauteur :
        50 millions de dollars. Les participants viennent de tous les horizons
        (Angleterre, Égypte, Mongolie...) et tous ont leur propre motivation,
        comme ce jockey en quête de gloire ou encore le jeune indien qui veut
        récupérer sa terre face à l’envahisseur blanc. Mais Gyro Zeppeli semble
        concourir pour des raisons bien plus mystérieuses, armé d’étranges sphères d’acier.</p>";
         }elseif ($isbn == 9782874425554){
           echo"<h2>Informations complèmentaires :</h2>
        <p>Tome 2</p>
        <h3>Synopsis :</h3>
        <p>Les Simpson sont une caricature satirique de la famille américaine moyenne,
          Matt Groening s'étant basé sur sa propre famille pour camper chacun des membres
          de la famille Simpson, dont il a pris les prénoms mais pas forcément les traits de caractère.
          Les thèmes abordés sont souvent les mêmes : la cupidité, la jalousie, la gourmandise, la religion
           - toujours avec humour, gentillesse et générosité. Un sacré foin ! (T. 2) Ce titre comporte
           deux histoires de la famille la plus déjantée des Etats-unis. - L'affaire du gilet - Changez de maire,
            votez Homer !</p>";
          }elseif ($isbn == 9791026819523){
            echo"<h2>Informations complèmentaires :</h2>
        <p>Tome 1</p>
        <h3>Synopsis :</h3>
        <p>Il y a cinq ans nul ne connaissait l'existence des super-héros...
           Avec l'apparition de Superman, Batman, Green Lantern et Wonder Woman,
          les autorités, effrayées par la puissance de ses individus,
          les déclarèrent hors-la-loi. Cependant, lorsque Darkseid projeta de conquérir la Terre,
           les humains durent se placer sous la protection de leurs héros. Voici le récit de la
           première union des super-héros : la célèbre Ligue de Justice.</p>";
          }
                           echo"</section>";
          }
          mysqli_free_result($result);
        }
        mysqli_close($link);
      }


          ?>






   </body>
</html>
