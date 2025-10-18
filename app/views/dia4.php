<?php include 'layouts/header.php'; ?>

<?php if ($numero == 4): ?>
<!-- Día 4 - Diseño especial con secciones -->
<div class="jumbotron jumbotron-fluid bg-dark text-white">
    <div class="container text-center">
        <h1 class="display-4 font-weight-bold mb-3"><?= $titulo ?></h1>
        <p class="lead">Feria de Logros y Pupuseada</p>
    </div>
</div>

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-5">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">Feria de Logros</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        La Feria de Logros fue uno de los eventos más destacados del día, donde cada año de la carrera de Ingeniería en Sistemas presentó sus mejores proyectos y trabajos desarrollados durante el semestre.
                    </p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <?php if (!empty($imagen1)): ?>
                                <img src="<?= $imagen1 ?>" class="img-fluid rounded shadow" alt="Feria de Logros">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded">
                                <h4 class="text-dark mb-3">Destacados de la Feria</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent">Aplicaciones móviles innovadoras</li>
                                    <li class="list-group-item bg-transparent">Sistemas web complejos</li>
                                    <li class="list-group-item bg-transparent"><strong>Nuestro Bingo de Tercer Año</strong></li>
                                    <li class="list-group-item bg-transparent">Sistema de parqueo inteligente</li>
                                    <li class="list-group-item bg-transparent">Programa de gestión de farmacias</li>
                                    <li class="list-group-item bg-transparent">Web de TSI (Técnicos en Sistemas Informáticos)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-secondary">
                        <h5 class="alert-heading">Nuestro Proyecto Destacado</h5>
                        <p class="mb-0">Como equipo de tercer año, presentamos con orgullo nuestro proyecto de <strong>Bingo</strong>, que destacó entre las mejores propuestas del evento por su innovación y funcionalidad.</p>
                    </div>

                    <div class="text-center mt-4">
                        <?php if (!empty($imagen2)): ?>
                            <img src="<?= $imagen2 ?>" class="img-fluid rounded shadow" alt="Presentando nuestro proyecto" style="max-width: 500px;">
                            <p class="text-muted mt-2"><em>Presentando nuestro proyecto en la Feria de Logros</em></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Sección Pupuseada -->
            <div class="card shadow mb-5">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">La Famosa Pupuseada</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        La pupuseada fue el evento más divertido y esperado del día. No solo disfrutamos de deliciosas pupusas, sino que también se organizó una emocionante competencia gastronómica que puso a prueba el apetito de los participantes.
                    </p>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="bg-light p-4 rounded mb-4">
                                <h4 class="text-dark mb-3">Resultados de la Competencia</h4>
                                <div class="row">
                                    <div class="col-md-4 text-center mb-3">
                                        <div class="bg-dark text-white p-3 rounded">
                                            <h5>Primer Lugar</h5>
                                            <p class="mb-1"><strong>Ing. Guandique</strong></p>
                                            <p class="h4">16 Pupusas</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center mb-3">
                                        <div class="bg-secondary text-white p-3 rounded">
                                            <h5>Segundo Lugar</h5>
                                            <p class="mb-1">Participante</p>
                                            <p class="h4">13 Pupusas</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center mb-3">
                                        <div class="bg-light text-dark p-3 rounded border">
                                            <h5>Participación</h5>
                                            <p class="mb-1"><strong>Gerson (Yo)</strong></p>
                                            <p class="h4">10 Pupusas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>

                    <!-- Video de la pupuseada -->
                    <?php if (!empty($video)): ?>
                    <div class="text-center mt-5">
                        <h4 class="mb-3">Momentos Destacados de la Pupuseada</h4>
                        <div class="embed-responsive embed-responsive-16by9 shadow rounded" style="max-width: 800px; margin: 0 auto;">
                            <video class="embed-responsive-item rounded" controls>
                                <source src="<?= $video ?>" type="video/mp4">
                                Tu navegador no soporta la reproducción de video.
                            </video>
                        </div>
                        <p class="text-muted mt-3">
                            <em>En este video se puede apreciar mi participación en la pupuseada junto al campeón Ing. Guandique</em><br>
                            <small>(Por obvias razones no pude grabar de manera personal durante mi participación)</small>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Resumen del día -->
            <div class="card shadow">
                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Resumen del Día 4</h3>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $descripcion ?></p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5 class="text-dark">Logros del Día</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Exposición exitosa del proyecto Bingo</li>
                                <li class="list-group-item">Intercambio de conocimientos entre años</li>
                                <li class="list-group-item">Fortalecimiento de lazos estudiantiles</li>
                                <li class="list-group-item">Competencia gastronómica épica</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-dark">Reflexiones</h5>
                            <p class="text-muted">
                                El Día 4 combinó perfectamente el aspecto académico con la diversión. 
                                Ver los proyectos de todos los años nos motivó a seguir mejorando, 
                                mientras que la pupuseada nos recordó la importancia de compartir 
                                momentos de alegría con nuestros compañeros y profesores.
                            </p>
                        </div>
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
