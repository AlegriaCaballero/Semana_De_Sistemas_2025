<?php include 'layouts/header.php'; ?>

<h1 class="text-center"><?= $titulo ?></h1>

<div class="row">
    <div class="col-md-12">

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title"><?= $titulo ?></h5>
                <p class="card-text"><?= $descripcion ?></p>
                <img src="<?= $imagen1 ?>" class="img-fluid" alt="<?= $titulo ?>">
                <img src="<?= $imagen2 ?>" class="img-fluid" alt="<?= $titulo ?>">
                <img src="<?= $imagen3 ?>" class="img-fluid" alt="<?= $titulo ?>">
                <img src="<?= $imagen4 ?>" class="img-fluid" alt="<?= $titulo ?>">
                <img src="<?= $imagen5 ?>" class="img-fluid" alt="<?= $titulo ?>">
                <img src="<?= $imagen6 ?>" class="img-fluid" alt="<?= $titulo ?>">
                <img src="<?= $imagen7 ?>" class="img-fluid" alt="<?= $titulo ?>">
            </div>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>
