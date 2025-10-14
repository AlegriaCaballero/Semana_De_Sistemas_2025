<?php
spl_autoload_register(function($clase){
    // Directorio base del proyecto dentro del contenedor
    $baseDir = __DIR__ . '/'; // /var/www/html/
    $ruta = $baseDir . str_replace("\\", "/", $clase) . ".php";

    if (file_exists($ruta)) {
        require_once($ruta);
    } else {
        die("Error: No se pudo cargar la clase en la ruta: $ruta");
    }
});
?>
