<?php include 'layouts/header.php'; ?>

<h1 class="text-center"><?= $titulo ?></h1>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Registrar Visita</h2>
            <p>Por favor, llena este formulario para registrar tu visita.</p>
            <form action="/registrar" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre: <sup>*</sup></label>
                    <input type="text" name="nombre" class="form-control form-control-lg" required>
                </div>
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg" required>
                </div>
                <input type="submit" class="btn btn-success" value="Registrar">
            </form>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>
