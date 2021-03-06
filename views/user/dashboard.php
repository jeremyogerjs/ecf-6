<?php if (!empty($_SESSION)) : ?>
    <div class="alert alert-dark w-75 mx-auto my-3">
        <h3 class="title">Bienvenue <?= $_SESSION["username"] ?> sur votre espace réservé</h3>
    </div>
    <div class="card shadow d-flex flex-column my-2 p-4 col-5 mx-auto">
        <h4 class="title text-decoration-underline">Infos profils :</h4>
        <?php foreach ($params['data'][0] as $key => $value) : ?>
            <div class="d-flex justify-content-between">
                <p class="text-uppercase fw-bold"><?= $key ?></p>
                <p class="fw-light"><?= $value  ?></p>
            </div>
        <?php endforeach ?>
    </div>
<?php else : ?>
    <p class="fw-bold mx-auto text-danger">Vous devez etre connecté pour accéder a cette page</p>
<?php endif ?>