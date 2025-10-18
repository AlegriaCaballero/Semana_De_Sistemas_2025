<?php include 'layouts/header.php'; ?>

<?php if ($numero == 2): ?>
<!-- Día 2 - Talleres y Ponencias -->
<div class="jumbotron jumbotron-fluid bg-dark text-white">
    <div class="container text-center">
        <h1 class="display-4 font-weight-bold mb-3"><?= $titulo ?></h1>
        <p class="lead">Día de Ponencias</p>
    </div>
</div>

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <!-- Sección Decisiones Basadas en Datos -->
            <div class="card shadow mb-5">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">Decisiones Estratégicas en Base a los Datos</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        En esta ponencia se nos enseñó acerca de cómo ordenar la data en Excel y se nos enseñó que la IA puede hacer el 50% del trabajo siempre y cuando nosotros sabemos qué es lo que está haciendo. Al igual, nosotros tenemos que hacer ese otro 50%.
                    </p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <?php if (!empty($imagen5)): ?>
                                <img src="<?= $imagen5 ?>" class="img-fluid rounded shadow mb-3" alt="Ponencia sobre decisiones basadas en datos">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded">
                                <h5 class="text-dark mb-3">Temas Principales</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent">Ordenación de datos en Excel</li>
                                    <li class="list-group-item bg-transparent">Uso efectivo de IA (50% automatización)</li>
                                    <li class="list-group-item bg-transparent">Importancia del análisis humano</li>
                                    <li class="list-group-item bg-transparent">Creación de prompts efectivos en ChatGPT</li>
                                    <li class="list-group-item bg-transparent">Interpretación de resultados</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-light border">
                        <p class="mb-0 text-muted">
                            La persona que nos enseñó acerca de esto fue bastante amable al tocar temas desde Excel como la ordenación de data para que sea 100% legible hasta una pequeña parte de cómo hacer muy buenas prompts en ChatGPT.
                        </p>
                    </div>

                    <?php if (!empty($imagen6) || !empty($imagen3) || !empty($imagen4)): ?>
                    <div class="row mt-4">
                        <?php if (!empty($imagen6)): ?>
                        <div class="col-md-4 mb-3">
                            <img src="<?= $imagen6 ?>" class="img-fluid rounded shadow" alt="El ponente explicando análisis de datos">
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($imagen3)): ?>
                        <div class="col-md-4 mb-3">
                            <img src="<?= $imagen3 ?>" class="img-fluid rounded shadow" alt="Ponencia decisiones basadas en datos">
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($imagen4)): ?>
                        <div class="col-md-4 mb-3">
                            <img src="<?= $imagen4 ?>" class="img-fluid rounded shadow" alt="Taller de análisis de datos">
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="text-center">
                        <p class="text-muted bg-light p-3 rounded">
                            <em>El ponente explicando sobre análisis de datos y herramientas de IA</em>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sección Laravel y Filament -->
            <div class="card shadow mb-5">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">CRUD con Laravel y Filament</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        En este taller impartido por el ing. Alegría vimos como Filament tenía una amplia comunidad, y que gracias a todas las facilidades de la librería y el framework de Laravel se pueden realizar tareas antes complejas en cuestión de horas y hechas por una sola persona.
                    </p>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="bg-light p-4 rounded mb-4">
                                <h5 class="text-dark mb-3">Aspectos Destacados del Taller</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-secondary">Laravel Framework</h6>
                                        <ul class="text-muted">
                                            <li>Arquitectura MVC</li>
                                            <li>Eloquent ORM</li>
                                            <li>Migraciones</li>
                                            <li>Validaciones</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-secondary">Filament Admin</h6>
                                        <ul class="text-muted">
                                            <li>Panel administrativo</li>
                                            <li>CRUD automático</li>
                                            <li>Comunidad activa</li>
                                            <li>Rapidez de desarrollo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-secondary text-white p-4 rounded">
                                <h5 class="mb-3">Mi Experiencia</h5>
                                <p class="mb-3">
                                    Me interesó mucho este taller porque es algo que voy a ver en TPI, lo cual me prepara para lo que viene en esa materia.
                                </p>
                                <small>
                                    <strong>Instructor:</strong> Ing. Alegría<br>
                                    <strong>Relevancia:</strong> Preparación para TPI
                                </small>
                            </div>
                        </div>
                    </div>

                    <?php if (!empty($imagen7)): ?>
                    <div class="text-center mt-4">
                        <img src="<?= $imagen7 ?>" class="img-fluid rounded shadow" alt="Taller de Laravel y Filament" style="max-width: 700px;">
                        <p class="text-muted mt-3 bg-light p-3 rounded">
                            <em>El ing. Alegría explicando las facilidades de Laravel y Filament</em>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sección IA Multimodal -->
            <div class="card shadow mb-5">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">IA Multimodal: Creando el Futuro Visual e Inteligente con n8n</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        En este taller vimos toda la parte de cómo automatizar ciertos procesos con FatherBot (un creador de bots de Telegram) y n8n para poder facilitarnos la vida y poder tener más tiempo libre para otras cosas y cómo esto en su esencia era el futuro de nuestra vida.
                    </p>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded">
                                <h5 class="text-dark mb-3">Herramientas Exploradas</h5>
                                <div class="mb-3">
                                    <h6 class="text-secondary">FatherBot</h6>
                                    <p class="text-muted small mb-3">Creador de bots de Telegram para automatización de tareas y comunicación.</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="text-secondary">n8n</h6>
                                    <p class="text-muted small mb-0">Plataforma de automatización de flujos de trabajo visuales y conectores.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-dark text-white p-4 rounded">
                                <h5 class="mb-3">Beneficios de la Automatización</h5>
                                <ul class="text-light">
                                    <li>Ahorro de tiempo significativo</li>
                                    <li>Reducción de tareas repetitivas</li>
                                    <li>Mayor eficiencia en procesos</li>
                                    <li>Liberación para tareas creativas</li>
                                    <li>El futuro del trabajo</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php if (!empty($imagen1) || !empty($imagen2)): ?>
                    <div class="row mt-4">
                        <?php if (!empty($imagen1)): ?>
                        <div class="col-md-6 mb-3">
                            <img src="<?= $imagen1 ?>" class="img-fluid rounded shadow" alt="IA Multimodal con n8n">
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($imagen2)): ?>
                        <div class="col-md-6 mb-3">
                            <img src="<?= $imagen2 ?>" class="img-fluid rounded shadow" alt="Automatización con bots de Telegram">
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="text-center">
                        <p class="text-muted bg-light p-3 rounded">
                            <em>El ponente explicando automatización con bots de Telegram y n8n</em>
                        </p>
                    </div>
                    <?php endif; ?>

                    <div class="alert alert-light border mt-4">
                        <h5 class="text-dark">Reflexión Personal</h5>
                        <p class="mb-0 text-muted">
                            Este taller fue muy útil para trabajar de una forma más organizada y precisa. La automatización realmente representa el futuro de cómo optimizaremos nuestro tiempo y productividad.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Resumen del día -->
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Resumen del Día 2</h3>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $descripcion ?></p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5 class="text-dark">Ponencias Asistidas</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Decisiones estratégicas basadas en datos</li>
                                <li class="list-group-item">CRUD con Laravel y Filament</li>
                                <li class="list-group-item">IA Multimodal con n8n</li>
                                <li class="list-group-item">Automatización con FatherBot</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-dark">Aprendizajes Clave</h5>
                            <p class="text-muted">
                                El Día 2 fue intenso en conocimiento técnico. Desde el análisis de datos hasta la automatización de procesos, cada ponencia aportó herramientas valiosas para mi formación profesional. Especialmente el taller de Laravel me prepara directamente para materias futuras como TPI.
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
