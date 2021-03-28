<div class="row d-flex justify-content-center">
  <div class="col-md-9 ">

    <table class="table caption-top  table-striped">
      <caption>Liste des tarifs </caption>
      <thead class="table-dark table-custom">
        <tr>
          <th scope="col">
            <a href="index.php?page=tarif&orderBy=categorie">
              Libellé catégorie
            </a>
          </th>
          <th scope="col">
            <a href="index.php?page=tarif&orderBy=prestation">
              Libellé prestation
            </a>
          </th>
          <th scope="col">
            <a href="index.php?page=tarif&orderBy=prix">
              Prix
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        {foreach $tarifs as $tarif}
          <tr>
            <th scope="row">{$tarif.lib_categ}</th>
            <td>{$tarif.type_prest}</td>
            <td>{$tarif.prix} €</td>
          </tr>
        {/foreach}
      </tbody>
    </table>

  </div>
</div>
