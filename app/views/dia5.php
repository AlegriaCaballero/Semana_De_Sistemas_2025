<?php include 'layouts/header.php'; ?>

<?php if ($numero == 5): ?>

<div class="jumbotron jumbotron-fluid bg-dark text-white">
    <div class="container text-center">
        <h1 class="display-4 font-weight-bold mb-3"><?= $titulo ?></h1>
        <p class="lead">Clausura de la Semana de Sistemas</p>
    </div>
</div>

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <!-- Sección Bingo -->
            <div class="card shadow mb-5">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">Bingo de la Semana de Sistemas</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        El bingo fue una de las actividades más emocionantes del día viernes y de toda la semana. Esta actividad fue desarrollada con el programa creado por estudiantes de tercer año que pusieron todo su empeño en ello. Los estudiantes se reunieron para participar en esta tradicional actividad que siempre genera gran expectativa y diversión.
                    </p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <?php if (!empty($imagen1)): ?>
                                <img src="<?= $imagen1 ?>" class="img-fluid rounded shadow mb-3" alt="Bingo de la Semana de Sistemas">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded">
                                <h4 class="text-dark mb-3">Detalles del Evento</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent"><strong>Duración:</strong> 4 horas completas</li>
                                    <li class="list-group-item bg-transparent"><strong>Participantes:</strong> Estudiantes de todos los años</li>
                                    <li class="list-group-item bg-transparent"><strong>Organización:</strong> Estudiantes de tercer año</li>
                                    <li class="list-group-item bg-transparent"><strong>Mi rol:</strong> Edecán del evento</li>
                                    <li class="list-group-item bg-transparent"><strong>Ambiente:</strong> Emocionante y divertido</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-secondary">
                        <h5 class="alert-heading">Mi Experiencia como Edecán</h5>
                        <p class="mb-0">Tuve el honor de participar como edecán durante el bingo, lo que me permitió estar en primera fila de toda la emoción y ayudar a que el evento se desarrollara de manera fluida. Fue una experiencia muy gratificante poder contribuir al éxito de esta actividad.</p>
                    </div>

                    <!-- Video del bingo -->
                    <?php if (!empty($video)): ?>
                    <div class="text-center mt-4">
                        <h4 class="mb-3">Mi Participación como Edecán</h4>
                        <div class="embed-responsive embed-responsive-16by9 shadow rounded" style="max-width: 600px; margin: 0 auto;">
                            <video class="embed-responsive-item rounded" controls>
                                <source src="<?= $video ?>" type="video/mp4">
                                Tu navegador no soporta la reproducción de video.
                            </video>
                        </div>
                        <p class="text-muted mt-3">
                            <em>Momentos destacados de mi participación como edecán en el bingo</em>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="card shadow mb-5">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">Torneo de Juegos</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        El torneo de juegos fue otra de las actividades destacadas del día. Los estudiantes participaron en diferentes modalidades, destacando principalmente dos categorías que generaron gran emoción entre los participantes.
                    </p>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="bg-light p-4 rounded h-100">
                                <h4 class="text-dark mb-3">Clash Royale</h4>
                                <p class="text-muted">
                                    El torneo de Clash Royale fue una de las competencias más intensas. Los estudiantes demostraron sus habilidades estratégicas en este popular juego móvil, creando enfrentamientos épicos llenos de emoción.
                                </p>
                                <div class="mt-3">
                                    <small class="text-muted">
                                        <strong>Modalidad:</strong> Eliminación directa<br>
                                        <strong>Participantes:</strong> 16 estudiantes<br>
                                        <strong>Duración:</strong> 2 horas
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="bg-secondary text-white p-4 rounded h-100">
                                <h4 class="mb-3">Ajedrez</h4>
                                <p>
                                    El torneo de ajedrez mostró el lado más intelectual de la competencia. Los participantes pusieron a prueba su capacidad de análisis y estrategia en este clásico juego de la mente.
                                </p>
                                <div class="mt-3">
                                    <small>
                                        <strong>Modalidad:</strong> Sistema suizo<br>
                                        <strong>Participantes:</strong> 12 estudiantes<br>
                                        <strong>Duración:</strong> 3 horas
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-light border mt-4">
                        <p class="mb-0">
                            La competencia fue intensa y divertida, donde se pudo ver el espíritu competitivo y colaborativo de los estudiantes de sistemas, combinando tanto habilidades digitales como estrategias tradicionales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-5">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">Fiesta de Clausura en Ibiza Social Club</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        Para cerrar con broche de oro la Semana de Sistemas 2025, se organizó una fiesta de clausura en Ibiza Social Club. Fue la perfecta culminación de una semana llena de aprendizaje, diversión y compañerismo.
                    </p>

                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-muted mb-4">
                                La noche estuvo llena de música, baile y mucha diversión. Fue el momento perfecto para relajarse después de una semana intensa de actividades académicas y celebrar todos los logros alcanzados durante la SDS2025.
                            </p>

                            <div class="bg-light p-4 rounded">
                                <h5 class="text-dark mb-3">Actividades de la Noche</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Música en vivo</strong> - DJ profesional</li>
                                    <li class="mb-2"><strong>Pista de baile</strong> - Espacio amplio para todos</li>
                                    <li class="mb-2"><strong>Networking</strong> - Intercambio entre estudiantes</li>
                                    <li class="mb-2"><strong>Reconocimientos</strong> - Premios a participantes destacados</li>
                                    <li class="mb-2"><strong>Cena de clausura</strong> - Buffet variado</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="bg-dark text-white p-4 rounded">
                                    <h5 class="mb-3">Detalles del Evento</h5>
                                    <div class="text-left">
                                        <p class="mb-2"><strong>Lugar:</strong><br>Ibiza Social Club</p>
                                        <p class="mb-2"><strong>Hora:</strong><br>8:00 PM - 1:00 AM</p>
                                        <p class="mb-2"><strong>Asistentes:</strong><br>+200 estudiantes</p>
                                        <p class="mb-0"><strong>Ambiente:</strong><br>Festivo y celebratorio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-secondary mt-4">
                        <div class="text-center">
                            <h5 class="alert-heading">¡Así culminó la Semana de Sistemas 2025!</h5>
                            <p class="mb-0">Una semana inolvidable llena de aprendizaje, diversión y compañerismo que quedará en la memoria de todos los participantes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resumen del día -->
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Resumen del Día 5</h3>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $descripcion ?></p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5 class="text-dark">Actividades Realizadas</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Bingo de 4 horas con mi participación como edecán</li>
                                <li class="list-group-item">Torneo de Clash Royale</li>
                                <li class="list-group-item">Competencia de ajedrez</li>
                                <li class="list-group-item">Fiesta de clausura en Ibiza Social Club</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-dark">Reflexiones Finales</h5>
                            <p class="text-muted">
                                El Día 5 fue la perfecta conclusión de una semana excepcional. Desde mi rol como edecán en el bingo hasta la celebración final, cada momento contribuyó a crear recuerdos inolvidables. La combinación de competencia, diversión y compañerismo definió perfectamente el espíritu de la Semana de Sistemas 2025.
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
