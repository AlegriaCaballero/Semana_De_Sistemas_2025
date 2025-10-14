<?php

namespace app\controllers;

use app\models\Visitante;

class VisitanteController {

    /**
     * Procesa el formulario de registro de visitantes.
     */
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);

            // Validación simple
            if (empty($nombre) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // En una aplicación real, manejarías el error de forma más elegante.
                return "Error: Datos inválidos.";
            }

            $visitante = new Visitante();
            if ($visitante->registrar($nombre, $email)) {
                // Redirige a la página de inicio después de un registro exitoso.
                header('Location: /');
                exit;
            } else {
                return "Error al registrar la visita.";
            }
        }
        // Si no es una solicitud POST, redirige a la página de inicio.
        header('Location: /');
        exit;
    }
}
