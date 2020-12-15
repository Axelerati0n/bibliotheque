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

      <label for="name">Nom :</label>
      <input type="text" id="name" name="client_name" autofocus required><br>


      <input type="radio" id="part" name="client_type" value="Particulier">
      <label for="part">Particulier</label><br>
      <input type="radio" id="ent" name="client_type" value="Entreprise" checked>
      <label>Entreprise</label><br>


      <label for="mail">Courriel :</label>
      <input type="email" id="mail" name="client_mail" required><br>
    </fieldset>



      <label for="pack">Forfait :</label>
      <input type="mail" id="pack" name="client_pack" value="Forfait A" disabled><br>

      <label for="duration">Durée de l'engagement</label>
      <select name="duration" required>
        <option value="1y">1 an</option>
        <option value="2y" selected>2 ans</option>
        <option value="5y">5 ans</option>
      </select><br>


      <fieldset class="deuxieme">
        <legend>Commentaires : </legend>

        <input type="checkbox" id="opt1" name="opt1" value="msginstant">
        <label for="opt1">Messagerie instantanée</label>

        <input type="checkbox" id="opt2" name="opt2" value="over100">
        <label for="opt2">+100 utilisateurs connectés</label>

        <input type="checkbox" id="opt3" name="opt3" value="stock20">
        <label for="opt3">+20Go d'espace de stockage</label>
      </fieldset>




      <label for="addreq">Demandes complèmentaires :</label>
      <textarea id="adrdreq" name="client_addreq" placeholder="Entrez ici vos demandes"></textarea><br>

      <button class="valide" type="submit">S'inscrire</button>
      <button class="croix" type="reset">Tout effacer</button>

      </fieldset>
    </fieldset>

    </form>
</section>