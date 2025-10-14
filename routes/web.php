<?php

use lib\Route;
use app\controllers\HomeController;
use app\controllers\VisitanteController;

// Rutas para las páginas estáticas
Route::get('/', [HomeController::class, 'index']);
Route::get('/informacion', [HomeController::class, 'informacion']);
Route::get('/registrar', [HomeController::class, 'registrar']);

// Ruta para los días del evento (con un parámetro numérico)
Route::get('/dia/:numero', [HomeController::class, 'dia']);

// Ruta para procesar el formulario de registro de visitas
Route::post('/registrar', [VisitanteController::class, 'store']);

?>
