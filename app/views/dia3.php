<?php include 'layouts/header.php'; ?>

<?php if ($numero == 3): ?>
<!-- Día 3 - Evento Cancelado -->
<div class="jumbotron jumbotron-fluid bg-secondary text-white">
    <div class="container text-center">
        <h1 class="display-4 font-weight-bold mb-3"><?= $titulo ?></h1>
        <p class="lead">Actividades Suspendidas</p>
    </div>
</div>

<div class="container-fluid px-4 py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Sección Principal -->
            <div class="card shadow mb-5">
                <div class="card-header bg-dark text-white text-center">
                    <h2 class="mb-0">Día 3 - Evento Cancelado</h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="display-1 text-muted" style="font-size: 8rem;">404</h1>
                        <h3 class="text-secondary mb-4">Actividades No Encontradas</h3>
                    </div>
                    
                    <div class="alert alert-light border text-center mb-4">
                        <h4 class="alert-heading text-dark">Evento Suspendido por Lluvia</h4>
                        <p class="mb-0 text-muted">
                            Las actividades programadas para el día miércoles fueron canceladas debido a las fuertes lluvias. 
                            El torneo que estaba planificado no pudo llevarse a cabo por las condiciones climáticas.
                        </p>
                    </div>

                   
                </div>
            </div>

            <div class="card shadow mb-5">
                
                    <?php if (!empty($imagen1)): ?>
                    <div class="mb-4">
                        <img src="<?= $imagen1 ?>" class="img-fluid rounded shadow" alt="La Selecta" style="max-width: 600px;">
                    </div>
                    <?php endif; ?>
                    
                  
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>

<?php else: ?>
<!-- Vista estándar para otros días -->
<h1 class="text-center"><?= $titulo ?></h1>

<div class="row">
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title"><?= $titulo ?></h5>
                <p class="card-text"><?= $descripcion ?></p>
                <?php if (!empty($imagen1)): ?>
                    <img src="<?= $imagen1 ?>" class="img-fluid mb-3" alt="<?= $titulo ?>">
                <?php endif; ?>
                <?php if (!empty($imagen2)): ?>
                    <img src="<?= $imagen2 ?>" class="img-fluid mb-3" alt="<?= $titulo ?>">
                <?php endif; ?>
                <?php if (!empty($imagen3)): ?>
                    <img src="<?= $imagen3 ?>" class="img-fluid mb-3" alt="<?= $titulo ?>">
                <?php endif; ?>
                <?php if (!empty($imagen4)): ?>
                    <img src="<?= $imagen4 ?>" class="img-fluid mb-3" alt="<?= $titulo ?>">
                <?php endif; ?>
                <?php if (!empty($imagen5)): ?>
                    <img src="<?= $imagen5 ?>" class="img-fluid mb-3" alt="<?= $titulo ?>">
                <?php endif; ?>
                <?php if (!empty($imagen6)): ?>
                    <img src="<?= $imagen6 ?>" class="img-fluid mb-3" alt="<?= $titulo ?>">
                <?php endif; ?>
                <?php if (!empty($imagen7)): ?>
                    <img src="<?= $imagen7 ?>" class="img-fluid mb-3" alt="<?= $titulo ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php include 'layouts/footer.php'; ?>
