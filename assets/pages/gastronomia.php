<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icono -->
    <link rel="icon" href="../../assets/img/Icons/LogoCotemag.png">
    <!--Importando librerias de font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- RESET CSS -->
    <link rel="stylesheet" href="../../css/app.css">
    <!-- STYLES CSS -->
    <link rel="stylesheet" href="../../css/menu-footer.css">
    <link rel="stylesheet" href="../../css/gastronomia.css">

    <title>Cotemag - Gastronomia</title>
</head>
<body>
    <div class="loader__bg" id="loader">
        <span class="loader"><img src="../img/Icons/LogoCotemag.png" loading="lazy"  alt="logo cotemag"></span>
    </div>

    <?php 
    $headerImg = "../img/joven-cocinero.jpg";
    $headerTitle = "Área de Gastronomia";
    $headerInfo = "Conoce nuestros cursos que te convertiran en un experto";
    include("../templates/tecnicos.php");
echo $header_portada_content;
?>



    <main class="main basic__style">
        <article class="main__info width__basic">
            <div class="info__title">
                <h2>Detalles</h2>
                <p>Conoce mas sobre el área</p>
            </div>
            <p>El técnico laboral en Chef de Alta Cocina tendrá la capacidad y habilidad necesaria para la adecuada preparación de alimentos, su conservación, nutrición, configuración de menús, ejecuta procesos básicos en su servicio, apoya de manera determinante al profesional en la consecución de objetivos en la prestación de un servicio eficiente que beneficie al cliente con demanda culinaria.</p>
            <ul class="info__list">
                <li>• Preparar y cocinar menús completos o platos individuales.</li>
                <li>• Planear menús determinados, tamaño de porciones de alimentos, estimar ingredientes y costos de los alimentos.</li>
                <li>• Especializarse en la preparación de comida típica o platos especiales.</li>
                <li>• Cocinero</li>
                <li>• Cocinero Cocina Caliente</li>
                <li>• Parrillero</li>
            </ul>
        </article>
        <article class="main__cursos width__basic">
            <div class="curso__title">
                <h2>Cursos</h2>
                <p>Conoce nuestros cursos</p>
            </div>
            <div class="cursos__container" id="cursos">
            <?php
// Definir la información de las cards y los modales en un array
$cards = array(
    array(
        //Card
        'titulo' => 'Auxiliar de Chef de Alta Cocina (Mención Cocina Cliente)',
        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Cocina1.jpeg',
        'duracion' => '1 años y medio',
        'modulos' => 18,
        'semestres' => 3,
        //Modal
        'nivel' => 'Nivel: Técnico Laboral por competencias.',
        'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1.800 horas.',
        'descripcion' => 'El técnico laboral en Chef de Alta Cocina tendrá la capacidad y habilidad necesaria para la adecuada preparación de alimentos, su conservación, nutrición, configuración de menús, ejecuta procesos básicos en su servicio, apoya de manera determinante al profesional en la consecución de objetivos en la prestación de un servicio eficiente que beneficie al cliente con demanda culinaria.',
        'modulos_lista' => array(
            'ÉTICA Y VALORES TÉCNICO',
            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
            'INTRODUCCION A LA COCINA Y GASTRONOMIA',
            'FUNDAMENTOS DE COCINA',
            'OPERACIONES BASICAS DE COCINA',
            'OPERACIONES ADMINISTRATIVAS DE COCINA',
            'COCINA COLOMBIANA I',
            'COCINA COLOMBIANA II',
            'GUARNICIÓN',
            'COSTOS, ESTANDARIZACIÓN Y CREACIÓN DE RECETAS',
            'COCTELES Y BEBIDAS',
            'COCINA LATINO AMERICANA I',
            'COCINA LATINO AMERICANA II',
            'COCINA INTERNACIONAL I',
            'COCINA INTERNACIONAL II',
            'COCINA INTERNACIONAL III',
            'TECNICAS DEL SERVICIO DE MESA',
            'ETIQUETA Y PROTOCOLO',
            'ETIQUETA Y PROTOCOLO'
        ),
        'complementarias' => array(
            'DEPORTE Y CULTURA TÉCNICO',
            'SEMINARIO - I',
            'SEMINARIO - II',
            'SEMINARIO - III',
            'TALLER TÉCNICO - I',
            'TALLER TÉCNICO - II',
            'TALLER TÉCNICO - III'
        ),
        'practicas' => array(
            '600 Horas de desarrollo',
        ),
        'requisitos' => array(
            'Copia del Documento de Identidad del estudiante',
            'Copia del Documento de Identidad del acudiente en caso de ser menor de edad',
            'Copia del Diploma de Bachiller o Acta de Grado',
            'En Caso de no ser bachiller, Certificado de 9no Original Aprobado',
            'Certificado de Salud de la pagina del Addres',
            'Recibo del pago de la plataforma y el primer modulo a cursar',
        ),
    ),
    array(
        'titulo' => 'Técnico Laboral por Competencias Repostero Pastelero',
        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Resposteria1.jpeg',
        'duracion' => '1 años y medio',
        'modulos' => 18,
        'semestres' => 3,
        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
        'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1.800 horas.',
        'descripcion' => 'El egresado de Técnico Laboral por Competencias Repostero Pastelero de la Escuela de Gastronomía de COTEMAG, estará en capacidad de preparar y hornear masas para pasteles, panes, panecillos, pizzas, rellenos, cubiertas, tortas, dulces y batidos para galletas de acuerdo con recetas u órdenes especiales del cliente, además de realizar pedidos para la producción y elaboración de productos específicos.',
        'modulos_lista' => array(
            'ÉTICA Y VALORES TÉCNICO',
            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
            'INTRODUCCION A LA REPOSTERIA Y PASTELERIA',
            'FUNDAMENTOS DE COCINA EN REPOSTERIA',
            'BUENAS PRACTICAS DE MANOFACTURA BPM',
            'CIENCIA DE LOS ALIMENTOS',
            'REPOSTERIA Y PASTELERIA -I',
            'REPOSTERIA Y PASTELERIA -II',
            'REPOSTERIA SALUDABLE',
            'REPOSTERIA CREATIVA',
            'AUTOR DEL PASTELERO',
            'PANADERIA -I',
            'PANADERIA -II',
            'TECNICAS DE SERVICIO',
            'TECNICAS BASICAS DEL CHOCOLATE',
            'ORGANIZACIÓN DE EVENTOS',
            'COSTOS Y ESTANDARIZACIÓN',
            'ETIQUETA Y PROTOCOLO'
        ),
        'complementarias' => array(
            'DEPORTE Y CULTURA TÉCNICO',
            'SEMINARIO - I',
            'SEMINARIO - II',
            'SEMINARIO - III',
            'TALLER TÉCNICO - I',
            'TALLER TÉCNICO - II',
            'TALLER TÉCNICO - III'
        ),
        'practicas' => array(
            '600 Horas de desarrollo',
        ),
        'requisitos' => array(
            'Copia del Documento de Identidad del estudiante',
            'Copia del Documento de Identidad del acudiente en caso de ser menor de edad',
            'Copia del Diploma de Bachiller o Acta de Grado',
            'En Caso de no ser bachiller, Certificado de 9no Original Aprobado',
            'Certificado de Salud de la pagina del Addres',
            'Recibo del pago de la plataforma y el primer modulo a cursar',
        ),
    ),
    array(
        'titulo' => 'Bartender',
        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Bartender1080x10801.png',
        'duracion' => '1 años',
        'modulos' => 12,
        'semestres' => 2,
        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1.056 horas.',
        'descripcion' => 'El barman es un profesional que se encarga de atender la barra de un bar. Su principal función es la de preparar y servir las distintas bebidas de la carta de un local de copas, de una cafetería, de un pub, de una discoteca, etc. <br> Este profesional, por lo tanto, puede trabajar en diferentes tipos de negocios del sector de la hostelería. Si te formas adecuadamente, podrás optar a una amplia variedad de salidas laborales.',
        'modulos_lista' => array(
            'ÉTICA Y VALORES TÉCNICO',
            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
            'INTRODUCCION AL BARTENDER',
            'DETILADOS I',
            'DESTILADOS II',
            'MIXOLOGÍA I',
            'MIXOLOGÍA II',
            'FLAIR',
            'MARKETING GASTRONÓMICO',
            'SERVICIO DE BEBIDAS CALIENTES',
            'COSTOS',
            'BEBIDAS FERMENTADAS'
        ),
        'complementarias' => array(
            'DEPORTE Y CULTURA TÉCNICO',
            'SEMINARIO - I',
            'SEMINARIO - II',
            'SEMINARIO - III',
            'TALLER TÉCNICO - I',
            'TALLER TÉCNICO - II',
            'TALLER TÉCNICO - III'
        ),
        'practicas' => array(
            '528 Horas de desarrollo',
        ),
        'requisitos' => array(
            'Copia del Documento de Identidad del estudiante',
            'Copia del Documento de Identidad del acudiente en caso de ser menor de edad',
            'Copia del Diploma de Bachiller o Acta de Grado',
            'En Caso de no ser bachiller, Certificado de 9no Original Aprobado',
            'Certificado de Salud de la pagina del Addres',
            'Recibo del pago de la plataforma y el primer modulo a cursar',
        ),
    ),
);

// Generar el HTML
foreach ($cards as $index => $card) {
    // Card
    echo '<a href="#modal-' . $index . '" class="card__curse">';
    echo '<div class="curso__img">';
    echo '<img src="' . $card['imagen'] . '" alt="' . $card['titulo'] . '" loading="lazy">';
    echo '</div>';
    echo '<h3>' . $card['titulo'] . '</h3>';
    echo '<div class="curso__info">';
    echo '<p><i class="fa-regular fa-clock"></i> ' . $card['duracion'] . '</p>';
    echo '<p><i class="fa-regular fa-pen-to-square"></i> ' . $card['modulos'] . ' Modulos</p>';
    echo '<p><i class="fa-solid fa-person-chalkboard"></i> ' . $card['semestres'] . ' Semestres</p>';
    echo '</div>';
    echo '</a>';

    // Modal
    echo '<section class="modal" id="modal-' . $index . '">';
    echo '<div class="modal__container">';
    echo '<a href="#cursos" class="modal__close"><i class="fa-solid fa-x"></i></a>';
    echo '<h2>' . $card['titulo'] . '</h2>';
    echo '<div class="modal__img">';
    echo '<img src="' . $card['imagen'] . '" alt="' . $card['titulo'] . '" loading="lazy">';
    echo '</div>';
    echo '<div class="modal__info">';
    echo '<p>' . $card['nivel'] . '</p>';
    echo '<p>' . $card['modal-duracion'] . '</p>';
    echo '<p>' . $card['descripcion'] . '</p>';
    echo '</div>';
    // Lista de módulos

    echo '<div class="modal__modulos">';
    echo '<p>Modulos</p>';
    echo '<ul>';
    foreach ($card['modulos_lista'] as $modulo) {
        echo '<li>' . $modulo . '</li>';
    }
    echo '</ul>';
    //Actividades complementarias
    echo '<p>Actividades complementarias</p>';
    echo '<ul>';
    foreach ($card['complementarias'] as $modulo) {
        echo '<li>' . $modulo . '</li>';
    }
    echo '</ul>';
    //Practicas laborales
    echo '<p>Practicas Laborales</p>';
    echo '<ul>';
    foreach ($card['practicas'] as $modulo) {
        echo '<li>' . $modulo . '</li>';
    }
    //Requisitos
    echo '<ul>';
    foreach ($card['requisitos'] as $index => $modulo) {
        if ($index === 4) {
            echo '<li>'. $modulo . '<a href="https://www.adres.gov.co/consulte-su-eps" target="_blank">https://www.adres.gov.co/consulte-su-eps</a></li>';
        } else {
            echo '<li>' . $modulo . '</li>';
        }
    }
    echo '</ul>';
    
    echo '</div>';

    echo '</div>';
    echo '</section>';
}
?>
            </div>
        </article>

        <article class="slider__teachers width__basic">
            <div class="swiper">
                <h2>Nuestros Profesores</h2>
                <p class="swiper__paragraph">Conoce a los profesores que te acompañaran</p>
                <?php


// Define un array con los conjuntos de datos para el carrusel
$carouselDataArray = [
    [
        'teacherImg' => "../img/tutor-chef-2.jpg",
        'teacherName' => "Miguel Hernandez Herrera",
        'teacherTitle' => "Chef profesional",
        'teacherInfo' => "Profesional, quien no solo ha dominado el arte culinario con maestría, sino que también comparte generosamente su vasto conocimiento como profesor.",
    ],
    [
        'teacherImg' => "../img/tutor-bartender-2.jpg",
        'teacherName' => "Miguel Hernandez Herrera",
        'teacherTitle' => "Bartender profesional",
        'teacherInfo' => "Su trayectoria en bares de prestigio le ha permitido perfeccionar no solo la técnica detrás de cada bebida, sino también la habilidad de cautivar a los comensales con presentaciones elegantes y sabores extraordinarios.",
    ],
    [
        'teacherImg' => "../img/tutor-reposteria-2.jpg",
        'teacherName' => "Miguel Hernandez Herrera",
        'teacherTitle' => "Repostero profesional",
        'teacherInfo' => "Su experiencia en el mundo de la pastelería no solo es testimonio de su habilidad excepcional, sino también de su compromiso innato con la enseñanza y el intercambio de conocimientos. ",
    ],
    [
        'teacherImg' => "../img/tutor-reposteria-2.jpg",
        'teacherName' => "Miguel Hernandez Herrera",
        'teacherTitle' => "Repostero profesional",
        'teacherInfo' => "Su experiencia en el mundo de la pastelería no solo es testimonio de su habilidad excepcional, sino también de su compromiso innato con la enseñanza y el intercambio de conocimientos. ",
    ],
];

// Incluye el template del carrusel y pasa el array de datos
$carouselData = $carouselDataArray;
include("../templates/teachers.php");
?>
            </div>
        </article>

    </main>

    <?php include("../templates/footer.php") ?>


    <script src="../../js/menu.js"></script>
    <script src="../../js/cursos.js"></script>

</body>
</html>