<?php

namespace app\controllers;

class HomeController {

    /**
     * Muestra la página de inicio.
     */
    public function index(){
        $datos = ['titulo' => 'Semana de Sistemas 2025'];
        return $this->view('inicio', $datos);
    }

    /**
     * Muestra la vista de un día específico con contenido dinámico.
     */
    public function dia($numero){
        $dias = [
            1 => [
                'titulo' => 'Día 1 - Inauguración y Charlas Principales',
                'descripcion' => 'En este día se realizó la inauguración oficial del evento y se dieron dos ponencias donde la primera trataba de criptomonedas "El ABCdario de las criptomendas" y la segunda ponencia trataba de AI Inteligencia artificial para hacer parciales, entrenamos una AI para que nos ayude en nuetros parciales, y para finalizar el Dia 1 Se hizo el Hackaton donde se hicieron propuestas para resolver una problematrica en la sociedad y gano el Bingo!.',
                'imagen1' => '../public/img/Dia1/1.jpg',
                'imagen2' => '../public/img/Dia1/2.jpg',
                'imagen3' => '../public/img/Dia1/3.jpg',
                'imagen4' => '../public/img/Dia1/4.jpg',
                'imagen5' => '../public/img/Dia1/5.jpg',
                'imagen6' => '../public/img/Dia1/6.jpg',
                'imagen7' => '../public/img/Dia1/7.jpg',
            ],
            2 => [
                'titulo' => 'Día 2 - Talleres Prácticos y Exposiciones',
                'descripcion' => 'Talleres de ciberseguridad, IA y desarrollo web.',
                'imagen' => '/img/dia2.jpg'
            ],
            3 => [
                'titulo' => 'Día 3 - Competencias y Hackathon',
                'descripcion' => 'Los equipos compitieron en retos de programación.',
                'imagen' => '/img/dia3.jpg'
            ],
            4 => [
                'titulo' => 'Día 4 - Conferencias Internacionales',
                'descripcion' => 'Invitados de distintas universidades compartieron experiencias.',
                'imagen' => '/img/dia4.jpg'
            ],
            5 => [
                'titulo' => 'Día 5 - Clausura y Premiación',
                'descripcion' => 'Se reconoció el esfuerzo de los participantes y equipos ganadores.',
                'imagen' => '/img/dia5.jpg'
            ],
        ];

        if (!isset($dias[$numero])) {
            http_response_code(404);
            echo "Día no encontrado";
            return;
        }

        return $this->view('dia', [
            'titulo' => $dias[$numero]['titulo'],
            'descripcion' => $dias[$numero]['descripcion'],
            'imagen1' => $dias[$numero]['imagen1'],
            'imagen2' => $dias[$numero]['imagen2'],
            'imagen3' => $dias[$numero]['imagen3'],
            'imagen4' => $dias[$numero]['imagen4'],
            'imagen5' => $dias[$numero]['imagen5'],
            'imagen6' => $dias[$numero]['imagen6'],
            'imagen7' => $dias[$numero]['imagen7'],
        ]);
    }

    /**
     * Muestra la página de información personal.
     */
    public function informacion(){
        $datos = ['titulo' => 'Mi Información'];
        return $this->view('informacion', $datos);
    }

    /**
     * Muestra el formulario de registro de visitas.
     */
    public function registrar(){
        $datos = ['titulo' => 'Registrar Visita'];
        return $this->view('registrar', $datos);
    }

    /**
     * Carga una vista y le pasa datos.
     */
    protected function view($vista, $data = []){
        extract($data);
        $rutaVista = __DIR__ . "/../views/$vista.php";

        if (file_exists($rutaVista)) {
            ob_start();
            include $rutaVista;
            $content = ob_get_clean();
            return $content;
        } else {
            return "Error: La vista '$vista' no fue encontrada en: $rutaVista";
        }
    }
}
