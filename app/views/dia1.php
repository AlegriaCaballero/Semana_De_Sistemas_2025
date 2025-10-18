<?php include 'layouts/header.php'; ?>

<?php if ($numero == 1): ?>
<!-- Día 1 - Inauguración -->
<div class="jumbotron jumbotron-fluid bg-dark text-white">
    <div class="container text-center">
        <h1 class="display-4 font-weight-bold mb-3"><?= $titulo ?></h1>
        <p class="lead">Inauguración de la Semana de Sistemas</p>
    </div>
</div>

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <!-- Sección Bienvenida -->
            <div class="card shadow mb-5">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">Bienvenida</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        La bienvenida fue parte clave de la SDS2025, participaron entidades como el decano, el ingeniero Diego (el goat), entre otras personalidades importantes de la facultad.
                    </p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <?php if (!empty($imagen1)): ?>
                                <img src="<?= $imagen1 ?>" class="img-fluid rounded shadow mb-3" alt="Bienvenida a la Semana de Sistemas">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (!empty($imagen2)): ?>
                                <img src="<?= $imagen2 ?>" class="img-fluid rounded shadow mb-3" alt="Autoridades universitarias">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="alert alert-light border text-center mb-4">
                        <h5 class="text-dark mb-3">Mensaje Inspirador</h5>
                        <blockquote class="blockquote mb-0">
                            <p class="font-italic">"USTEDES TIENEN TODA LA CAPACIDAD DE LOGRAR LO QUE SE PROPONGAN, PUEDEN CAMBIAR EL MUNDO DESDE SU CUARTO"</p>
                            <footer class="blockquote-footer mt-2">Palabras motivacionales durante la inauguración</footer>
                        </blockquote>
                    </div>

                    <div class="bg-light p-4 rounded">
                        <h5 class="text-dark mb-3">Participantes Destacados</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Decano de la Facultad</strong> - Apertura oficial</li>
                                    <li class="mb-2"><strong>Ing. Diego</strong> - Mensaje inspiracional</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Autoridades académicas</strong> - Bienvenida</li>
                                    <li class="mb-2"><strong>Comunidad estudiantil</strong> - Participación activa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección ABCD del Bitcoin -->
            <div class="card shadow mb-5">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">ABCD de Bitcoin</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        El ABCD del bitcoin dejó a algunas personas con ganas de invertir dinero en esta criptomoneda. Una ponencia fascinante sobre el mundo de las criptomonedas.
                    </p>

                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-muted mb-4">
                                Se nos explicó por qué era tan importante el bitcoin en nuestra sociedad actual, cuáles eran las mejores wallets para guardar dinero y cuáles eran las mejores wallets para pagar de vez en cuando. Además, se nos explicó por qué usar BTC era lo mejor para estar en contra del sistema llamado "corrupto".
                            </p>

                            <div class="bg-light p-4 rounded">
                                <h5 class="text-dark mb-3">Temas Cubiertos</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent">Importancia del Bitcoin en la sociedad actual</li>
                                    <li class="list-group-item bg-transparent">Mejores wallets para almacenamiento</li>
                                    <li class="list-group-item bg-transparent">Wallets recomendadas para pagos</li>
                                    <li class="list-group-item bg-transparent">Bitcoin como alternativa al sistema tradicional</li>
                                    <li class="list-group-item bg-transparent">Seguridad en transacciones cripto</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php if (!empty($imagen3)): ?>
                                <img src="<?= $imagen3 ?>" class="img-fluid rounded shadow" alt="Ponencia sobre Bitcoin">
                                <p class="text-muted text-center mt-3 bg-light p-3 rounded">
                                    <em>El ponente explicando lo básico del bitcoin</em>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección IA Generativa -->
            <div class="card shadow mb-5">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">Ponencia de Inteligencia Artificial Generativa: De la Idea a la Acción</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        Una excelente ponencia la cual en mi opinión debió ser un taller, ya que se tocaron temas muy interesantes sobre la IA generativa y su aplicación en el mundo real.
                    </p>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded">
                                <h5 class="text-dark mb-3">Conceptos Explorados</h5>
                                <ul class="text-muted">
                                    <li>IA Generativa y sus aplicaciones</li>
                                    <li>Automatización de procesos</li>
                                    <li>Implementación práctica de IA</li>
                                    <li>Herramientas y frameworks</li>
                                    <li>Casos de éxito reales</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php if (!empty($imagen4)): ?>
                                <img src="<?= $imagen4 ?>" class="img-fluid rounded shadow" alt="Ponencia sobre IA Generativa">
                                <p class="text-muted text-center mt-3 bg-light p-3 rounded">
                                    <em>El ponente explicando lo básico de la IA generativa</em>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="alert alert-light border">
                        <h5 class="text-dark">Mi Reflexión</h5>
                        <p class="mb-0 text-muted">
                            Se tomaron temas como la automatización y muchas otras aplicaciones prácticas de la IA. Definitivamente una sesión que hubiera sido perfecta como taller interactivo por la riqueza del contenido presentado.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sección Hackathon -->
            <div class="card shadow mb-5">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">HACKATHON EN C#</h2>
                </div>
                <div class="card-body">
                    <p class="card-text lead mb-4">
                        El Hackathon fue toda una experiencia en la cual se disfrutó mucho y se aprendió aún más. ¡Fue divertido, gracioso y WOW!
                    </p>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="bg-light p-4 rounded mb-4">
                                <h5 class="text-dark mb-3">Detalles del Hackathon</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-secondary">Tecnología</h6>
                                        <p class="text-muted">Desarrollo en C#</p>
                                        
                                        <h6 class="text-secondary">Objetivo</h6>
                                        <p class="text-muted">Resolver problemáticas sociales</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-secondary">Resultado</h6>
                                        <p class="text-muted">¡Nuestro Bingo ganó!</p>
                                        
                                        <h6 class="text-secondary">Experiencia</h6>
                                        <p class="text-muted">Aprendizaje y diversión</p>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-success">
                                <h5 class="alert-heading">¡Proyecto Ganador!</h5>
                                <p class="mb-0">
                                    Nuestro equipo desarrolló un sistema de Bingo que fue seleccionado como la mejor propuesta para resolver una problemática en la sociedad. ¡Una victoria que coronó perfectamente el primer día!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h5 class="text-dark mb-3">Galería del Hackathon</h5>
                                <?php if (!empty($imagen5)): ?>
                                <div class="mb-3">
                                    <img src="<?= $imagen5 ?>" class="img-fluid rounded shadow" alt="Hackathon momento 1">
                                </div>
                                <?php endif; ?>
                                <?php if (!empty($imagen6)): ?>
                                <div class="mb-3">
                                    <img src="<?= $imagen6 ?>" class="img-fluid rounded shadow" alt="Hackathon momento 2">
                                </div>
                                <?php endif; ?>
                                <?php if (!empty($imagen7)): ?>
                                <div class="mb-3">
                                    <img src="<?= $imagen7 ?>" class="img-fluid rounded shadow" alt="Jóvenes exponiendo la hackathon">
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-muted bg-light p-3 rounded">
                            <em>Jóvenes exponiendo sus proyectos en la hackathon</em>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Resumen del día -->
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Resumen del Día 1</h3>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $descripcion ?></p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5 class="text-dark">Actividades Realizadas</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ceremonia de inauguración oficial</li>
                                <li class="list-group-item">Ponencia: ABCD del Bitcoin</li>
                                <li class="list-group-item">Charla: IA Generativa "De la Idea a la Acción"</li>
                                <li class="list-group-item">Hackathon en C# (¡Ganamos con Bingo!)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-dark">Reflexiones del Día</h5>
                            <p class="text-muted">
                                El primer día superó todas las expectativas. Desde la inspiradora ceremonia de inauguración hasta la emocionante victoria en el Hackathon, cada momento contribuyó a establecer el tono perfecto para toda la semana. Las ponencias sobre Bitcoin e IA abrieron nuevas perspectivas sobre tecnologías emergentes.
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