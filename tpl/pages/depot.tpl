<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h5>Ajout dun depot </h5>


      <form method="post" name="action">

        <div class="mb-3">
          <label for="numCarte">Utilisateur</label>
          <select class="form-select form-select" name="numCarte" id="numCarte">
            <option selected>Sélectionner un utilisateur ...</option>
            {foreach $utilisateurs as $utilisateur}
            <option value="{$utilisateur.num_carte}">{$utilisateur.nom}</option>
            {/foreach}
          </select>
        </div>

        <div class="mb-3">
          <label for="mtCaution" class="form-label">Montant de la caution</label>
          <input type="number" class="form-control" name="mtCaution" id="mtCaution">
        </div>

        <button type="submit" class="btn btn-success" name="action">Ajouter </button>
      </form>
    </div>
  </div>
</div>
