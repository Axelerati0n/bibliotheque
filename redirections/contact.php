<?php $page_title = "Contact";
require "../requires/head_header.php"; ?>

<?php require "../requires/nav.php"; ?>

<section>
  <form method="post" action="../requires/receive.php">
      <fieldset class="grand">
        <legend>Inscription</legend>
    <fieldset class="premier">
      <legend>Coordonnées</legend>

      <label for="name">Prénom :</label>
      <input type="text" id="name" name="client_firstname" autofocus required><br>

      <label for="name">* Nom :</label>
      <input type="text" id="name" name="client_name" autofocus required><br>


      <input type="radio" id="part" name="client_type" value="Particulier">
      <label for="part">Particulier</label><br>
      <input type="radio" id="ent" name="client_type" value="Entreprise" checked>
      <label>Entreprise</label><br>


      <label for="mail">* Courriel :</label>
      <input type="email" id="mail" name="client_mail" placeholder="exemple@gmail.com" required><br>
    </fieldset>


      <fieldset class="deuxieme">
        <legend>Commentaires et remarques : </legend>

        <label for="addreq">Quelque chose à nous dire ?</label>
      <textarea class="abc" id="adrdreq" name="client_addreq" placeholder="Entrez ici vos demandes"></textarea><br>

          <select name="type_commentary" required>
            <option value="bug">Bug à partager</option>
            <option value="inextant">Je suis intéressé par un livre mais il n'existe plus</option>
            <option value="error">Information(s) erronée(s)</option>
            <option value="message">Message aux webmasters</option>
            <option value="autres" selected>Autres</option>
          </select><br>
      </fieldset>

      <button class="valide" type="submit">Envoyer</button>
      <button class="croix" type="reset">Tout effacer</button>

    </fieldset>

    </form>
    <p class="msg">N'hésitez pas à nous contacter ! Toute remarque nous fera extrêmement plaisir !</p>
</section>