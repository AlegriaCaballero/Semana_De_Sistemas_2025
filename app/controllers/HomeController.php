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
                'titulo' => 'Día 1 - Inauguración de la Semana de Sistemas',
                'descripcion' => 'El día inaugural fue extraordinario con la bienvenida oficial del evento. Participaron el decano y el ingeniero Diego, entre otras personalidades importantes. Tuvimos dos ponencias fascinantes: el ABCD del Bitcoin que despertó interés en invertir en criptomonedas, y la ponencia de IA Generativa "De la Idea a la Acción" que exploró aplicaciones reales de la inteligencia artificial. Para finalizar, participamos en un emocionante Hackathon en C# donde nuestro proyecto Bingo resultó ganador.',
                'imagen1' => '../public/img/Dia1/1.jpg',
                'imagen2' => '../public/img/Dia1/2.jpg',
                'imagen3' => '../public/img/Dia1/3.jpg',
                'imagen4' => '../public/img/Dia1/4.jpg',
                'imagen5' => '../public/img/Dia1/5.jpg',
                'imagen6' => '../public/img/Dia1/6.jpg',
                'imagen7' => '../public/img/Dia1/7.jpg',
                'video' => ''
            ],
            2 => [
                'titulo' => 'Día 2 - Talleres Prácticos y Ponencias',
                'descripcion' => 'El día de hoy vimos varios talleres y ponencias especializadas. Comenzamos con decisiones basadas en datos, donde aprendimos sobre ordenación de data en Excel y el uso efectivo de IA. Después vimos CRUD de Laravel y Filament, un taller muy interesante que me prepará para TPI. Finalmente, exploramos IA multimodal con n8n, herramientas muy útiles para trabajar de forma más organizada y precisa.',
                'imagen1' => '../public/img/Dia2/1.png',
                'imagen2' => '../public/img/Dia2/2.png',
                'imagen3' => '../public/img/Dia2/3.png',
                'imagen4' => '../public/img/Dia2/4.png',
                'imagen5' => '../public/img/Dia2/5.png',
                'imagen6' => '../public/img/Dia2/6.png',
                'imagen7' => '../public/img/Dia2/7.png',
                'video' => ''
            ],
            3 => [
                'titulo' => 'Día 3 - Evento Cancelado',
                'descripcion' => 'Lamentablemente, las actividades programadas para el día 3 fueron canceladas debido a las fuertes lluvias. El torneo que estaba planificado no pudo llevarse a cabo por las condiciones climáticas adversas. Sin embargo, aprovechamos el tiempo libre para relajarnos y disfrutar viendo el fútbol de La Selecta.',
                'imagen1' => '../public/img/Dia3/laselecta.jpeg',
                'imagen2' => '',
                'imagen3' => '',
                'imagen4' => '',
                'imagen5' => '',
                'imagen6' => '',
                'imagen7' => '',
                'video' => ''
            ],
            4 => [
                'titulo' => 'Día 4 - Feria de Logros y Pupuseada',
                'descripcion' => 'El jueves fue un día especial con dos actividades principales: la Feria de Logros donde cada año presentó su mejor proyecto, y la famosa pupuseada donde el ingeniero Guandique se coronó como campeón comiendo 16 pupusas. Nuestro equipo de tercer año presentó orgullosamente nuestro proyecto de Bingo, destacando entre las mejores propuestas del evento.',
                'imagen1' => '../public/img/Dia4/dia4.jpeg',
                'imagen2' => '../public/img/Dia4/dia4yo.jpeg',
                'imagen3' => '',
                'imagen4' => '',
                'imagen5' => '',
                'imagen6' => '',
                'imagen7' => '',
                'video' => '../public/img/Dia4/pupuseadavideo.mp4'
            ],
            5 => [
                'titulo' => 'Día 5 - Clausura de la Semana de Sistemas',
                'descripcion' => 'El viernes fue el día de clausura de la Semana de Sistemas 2025. Comenzamos con un emocionante bingo que duró 4 horas, donde tuve el honor de participar como edecán. Luego se realizaron torneos de juegos incluyendo Clash Royale y ajedrez. Para cerrar con broche de oro, se organizó una fiesta de clausura en Ibiza Social Club, culminando una semana inolvidable llena de aprendizaje, diversión y compañerismo.',
                'imagen1' => '../public/img/Dia5/dia5.jpeg',
                'imagen2' => '',
                'imagen3' => '',
                'imagen4' => '',
                'imagen5' => '',
                'imagen6' => '',
                'imagen7' => '',
                'video' => '../public/img/Dia5/yoedecan.mp4'
            ],
        ];

        if (!isset($dias[$numero])) {
            http_response_code(404);
            echo "Día no encontrado";
            return;
        }

        // Usar vistas especiales para días específicos
        if ($numero == 1) {
            $vista = 'dia1';
        } elseif ($numero == 2) {
            $vista = 'dia2';
        } elseif ($numero == 3) {
            $vista = 'dia3';
        } elseif ($numero == 4) {
            $vista = 'dia4';
        } elseif ($numero == 5) {
            $vista = 'dia5';
        } else {
            $vista = 'dia';
        }

        return $this->view($vista, [
            'titulo' => $dias[$numero]['titulo'],
            'descripcion' => $dias[$numero]['descripcion'],
            'imagen1' => $dias[$numero]['imagen1'] ?? '',
            'imagen2' => $dias[$numero]['imagen2'] ?? '',
            'imagen3' => $dias[$numero]['imagen3'] ?? '',
            'imagen4' => $dias[$numero]['imagen4'] ?? '',
            'imagen5' => $dias[$numero]['imagen5'] ?? '',
            'imagen6' => $dias[$numero]['imagen6'] ?? '',
            'imagen7' => $dias[$numero]['imagen7'] ?? '',
            'video' => $dias[$numero]['video'] ?? '',
            'numero' => $numero
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
