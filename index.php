<?php
require_once(__DIR__ . "/autoloader.php");
require_once(__DIR__ . "/routes/web.php");


// Usa el método estático dispatch de la clase Route para manejar la solicitud actual
lib\Route::dispatch();
?>
