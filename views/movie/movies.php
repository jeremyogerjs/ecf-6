  <div class="mx-auto  p-3">
    <form class="d-flex flex-column mx-auto" method="POST" action="/films/search">
      <div class="d-flex w-50 mx-auto">
        <input class="form-control me-2 " name="query" type="search" placeholder="Renseigner le titre du film" aria-label="Rechercher">
        <button class="btn btn-warning" type="submit">Rechercher</button>
      </div>
      <div class="d-flex mx-auto my-2 align-items-center">
        <div class="form-check me-4">
          <input class="form-check-input" type="radio" value="all" name="disponible" id="all" checked>
          <label class="form-check-label" for="all">
            Tous
          </label>
        </div>
        <div class="form-check me-4">
          <input class="form-check-input" type="radio" value="louer" name="disponible" id="indisponible">
          <label class="form-check-label" for="indisponible">
            Loué
          </label>
        </div>
        <div class="form-check me-4">
          <input class="form-check-input" type="radio" value="disponible" name="disponible" id="disponible">
          <label class="form-check-label" for="disponible">
            Disponible
          </label>
        </div>
        <select class="form-select" name="categorie" aria-label="selectionner une catégorie">
          <option value="" selected>Selectionner une catégorie</option>
          <?php foreach($params['categories'] as $item) : ?>
            <option value="<?= $item -> category_id ?>"><?= $item -> name ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </form>
    <p class="text-muted fst-italic text-center">*Tips : Pour rechercher par catégorie, sélectionner s'en une et appuyer sur le bouton rechercher</p>
  </div>

<table class="table  mx-auto caption-top table-hover">
<caption>Liste des films</caption>
  <thead class="table-dark">
    <tr class="text-center">
      <th scope="col">Titre</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Durée</th>
      <th scope="col">Disponible</th>
      <th scope="col">magasin nº</th>
      <th scope="col">Prix</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($params['data'])) : ?>
      <?php foreach($params['data'] as $movies) : ?>
          <tr class="text-center">
              <td ><?= $movies->title ?></td>
              <td ><?= $movies->name ?></td>
              <td ><?= $movies->length ?> min</td>
              <td ><?= $movies->return_date != NULL ? 'Disponible' : 'Indisponible' ?></td>
              <td ><?= $movies->store_id ?></td>
              <td ><?= $movies->rental_rate ?> $</td>
              <td class="d-flex justify-content-around">
                <a href="/films/<?= $movies ->inventory_id ?>/location/<?= $movies ->rental_id ?>" class="text-decoration-none">
                  <button class="btn btn-primary">
                    Voir
                  </button>
                </a>
              </td>
          </tr>
      <?php endforeach ?>
      <?php else : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Acun résultat</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif ?>
  </tbody>
</table>