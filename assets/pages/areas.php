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

    <title>OFERTA ACADEMICA - AREAS</title>
</head>

<?php
function generarTarjetaYModal($card, $index) {
    // Generar el HTML para la tarjeta y el modal utilizando los datos de $card
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
    // Verificar si hay contenido en una variable y luego imprimir el elemento <p> si existe
if (!empty($card['practica_laboral'])) {
    if (is_array($card['practica_laboral'])) {
        foreach ($card['practica_laboral'] as $contenido) {
            echo '<p>' . $contenido . '</p>';
        }
    } else {
        echo '<p>' . $card['practica_laboral'] . '</p>';
    }
}
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

<body>
    <div class="loader__bg" id="loader">
        <span class="loader"><img src="../img/Icons/LogoCotemag.png" loading="lazy"  alt="logo cotemag"></span>
    </div>

    <header class="header basic__style" id="header__areas">
        <?php include("../templates/menu.php") ?>
        <div class="header__portada">
            <div class="header__cortine"></div>
            <img src="../img/areas.jpeg" alt="joven cocinero" loading="lazy" id="banner_areas">
            <div class="header__titles">
                <h1>ÁREAS DE ESTUDIO</h1>
                <p id="puntoadministrativa">Selecciona el area de tu interés.</p>
            </div>
        </div>
    </header>
    <main class="main basic__style">

    <!--Menu lateral izquierdo-->
<div class="contenedor__areas width__basic">

<aside class="seccionLateralIzquierda">
        <h2 class="title_menulateral">AREAS DE ESTUDIO</h2>

        <ol class="menuLateral">
            <li><a href="#puntoadministrativa"><i class="fa-solid fa-chevron-right"></i>ADMINISTRATIVA</a></li>
            <li><a href="#puntobachillerato"><i class="fa-solid fa-chevron-right"></i>BACHILLERATOS POR CICLOS CLEI</a></li>
            <li><a href="#puntobelleza"><i class="fa-solid fa-chevron-right"></i>BELLEZA Y BIENESTAR CORPORAL</a></li>
            <li><a href="#puntosoftware"><i class="fa-solid fa-chevron-right"></i>DESARROLLO DE SOFTWARE</a></li>
            <li><a href="#puntodiplomado"><i class="fa-solid fa-chevron-right"></i>DIPLOMADOS Y CURSOS</a></li>
            <li><a href="#puntodiseno"><i class="fa-solid fa-chevron-right"></i>DISEÑO GRAFICO</a></li>
            <li><a href="#puntoeducacion"><i class="fa-solid fa-chevron-right"></i>EDUCACION</a></li>
            <li><a href="#puntogastronomia"><i class="fa-solid fa-star" id="starGastronomia"></i><b id="weighGastronomia">GASTRONOMIA</b></a></li>
            <li><a href="#puntoidiomas"><i class="fa-solid fa-chevron-right"></i>IDIOMAS</a></li>
            <li><a href="#puntoinvestigativa"><i class="fa-solid fa-chevron-right"></i>INVESTIGATIVA Y JUDICIAL</a></li>
            <li><a href="#puntoindustrial"><i class="fa-solid fa-chevron-right"></i>INDUSTRIAL</a></li>
            <li><a href="#puntosalud"><i class="fa-solid fa-chevron-right"></i>SALUD</a></li>
            <li><a href="#puntosaludanimal"><i class="fa-solid fa-chevron-right"></i>SALUD ANIMAL</a></li>
            <li><a href="#puntoservicios"><i class="fa-solid fa-chevron-right"></i>SERVICIOS GENERALES</a></li>
        </ol>
    </aside>

    <section class="main__cursos">
        <div class="secction__curso-container">

        <div class="curso__title">
                    <h2>ADMINISTRATIVA</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card1 = array(
                        //Card
                        'titulo' => 'Auxiliar Contable',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    generarTarjetaYModal($card1, 1);

                    // Array de datos para la primera tarjeta
                    $card2 = array(
                        //Card
                        'titulo' => 'Aux. de Mercadeo y Ventas',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    generarTarjetaYModal($card2, 2);

                    // Array de datos para la primera tarjeta
                    $card3 = array(
                        //Card
                        'titulo' => 'Aux. en Agente de Aduanas',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    generarTarjetaYModal($card3, 3);

                    // Array de datos para la primera tarjeta
                    $card4 = array(
                        //Card
                        'titulo' => 'Aux. Administrativo',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    generarTarjetaYModal($card4, 4);

                    

                    // Array de datos para la primera tarjeta
                    $card5 = array(
                        //Card
                        'titulo' => 'Aux. Recepcion Hotelera',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    generarTarjetaYModal($card5, 5);

                    // Array de datos para la primera tarjeta
                    $card6 = array(
                        //Card
                        'titulo' => 'Aux. Secretariado Ejecutivo',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    generarTarjetaYModal($card6, 6);

                    
                    // Llama a la función para generar la tarjeta y el modal
                ?>
        </div>

        <!--Bachilleratos-->

        <div class="curso__title">
                    <h2 id="puntobachillerato">BACHILLERATO POR CICLOS</h2>
                    <p>Valida tu Bachillerato</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card7 = array(
                        //Card
                        'titulo' => 'Bachillerato por ciclos 5to - 11mo ',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => ' Hazte Bachiller corto tiempo, por cada 6 meses es un año lectivo,',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card7, 7);
                
                ?>
            </div>
            <div class="secction__curso-container">
            <div class="curso__title">
                    <h2 id="puntobelleza">BELLEZA Y BIENESTAR CORPORAL</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card8 = array(
                        //Card
                        'titulo' => 'Belleza Integral',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Belleza_Integral_1080x1080_(2)1.png',
                        'duracion' => '1 año y medio',
                        'modulos' => 18,
                        'semestres' => 3,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Tendrá las habilidades y destrezas necesarias para desempeñarse laboralmente destacándose entre sus similares por su perfil multifacético en cualquier centro de estética y belleza, incluso de incursionar y poder ser su propia empresaria en el área.
                        Tendrá habilidades en químicos, cortes, cepillados, arreglo de uñas. Será capacitado para mantener la zona de trabajo o incluso su empresa en el equipamiento de condiciones bioseguras según la normativa sanitaria vigente en centros de belleza y estética, podrá asesorar a un usuario en el cambio de imagen personal de acuerdo con las técnicas de estilismo capilar.',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'FUNDAMENTOS BASICOS EN BELLEZA',
                            'BIOSEGURIDAD EN BELLEZA INTEGRAL',
                            'PEINADOS Y EXTENSIONES DE CABELLO',
                            'CORTE Y BARBERIA BASICA',
                            'COLORIMETRIA I',
                            'COLORIMETRIA II',
                            'MAQUILLAJE SOCIAL',
                            'MAQUILLAJE ARTISTICO',
                            'PEINADOS SOCIALES',
                            'MANICURA Y PEDICURA I',
                            'MANICURA Y PEDICURA II',
                            'DEPILACION FACIAL Y CORPORAL',
                            'RUBIOS Y MECHAS',
                            'UÑAS ESCULPIDAS Y DECORACION 3D',
                            'TRATAMIENTOS Y KERATINAS',
                            'CEJAS Y PESTAÑAS'
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
                    );
                    
                    $card9 = array(
                        //Card
                        'titulo' => 'Cosmetología',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Cosmetologia1080x10801.png',
                        'duracion' => '1 año y medio',
                        'modulos' => 18,
                        'semestres' => 3,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Tendrá las habilidades y destrezas necesarias para desempeñarse laboralmente destacándose entre sus similares por su perfil multifacético en cualquier centro de estética y belleza, incluso de incursionar y poder ser su propia empresaria en el área.
                        Tendrá habilidades en químicos, cortes, cepillados, arreglo de uñas. Será capacitado para mantener la zona de trabajo o incluso su empresa en el equipamiento de condiciones bioseguras según la normativa sanitaria vigente en centros de belleza y estética, podrá asesorar a un usuario en el cambio de imagen personal de acuerdo con las técnicas de estilismo capilar.',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'FUNDAMENTOS BASICOS EN SALUD',
                            'MORFOLOGIA Y ANATOMIA',
                            'PROCEDIMIENTOS BASICOS EN SALUD',
                            'DERMATOLOGIA',
                            'BIOSEGURIDAD',
                            'PROTOCOLOS FACIALES',
                            'APARATOLOGIA FACIAL',
                            'MASAJE I',
                            'MASAJE II',
                            'MASAJE III',
                            'MASAJE IV',
                            'MAQUILLAJE SOCIAL',
                            'APARATOLOGIA CORPORAL',
                            'DEPILACIÓN FACIAL Y CORPORAL',
                            'TRATAMIENTO PRES Y POST OPERATORIO',
                            'SERVICIO Y ATENCIÓN AL USUARIO'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card8, 8);
                    generarTarjetaYModal($card9, 9);
                
                ?>
        </div>
        <div class="curso__title">
                    <h2 id="puntosoftware">DESARROLLO DE SOFTWARE WEB</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card2 = array(
                        //Card
                        'titulo' => 'Ingles A1 y A2 en alianza con la Universidad de la Cambridge',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Ingles_1080x10801.jpeg',
                        'duracion' => '10 meses',
                        'modulos' => 10,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 10 Módulos / 2 Semestres / 10 Meses.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El inglés se muestra como una lengua rica en diversidad. Actualmente, se considera como lengua oficial o lengua madre en países como Reino Unido, Irlanda, USA, Canadá, Australia, Nueva Zelanda y algunos países de la costa caribe. La población mundial que habla este idioma alrededor del mundo oscila entre 300 y 400 millones de habitantes.',
                        //Modal
                        'modulos_lista' => array(
                            'EN-MIAMI',
                            'EN-WASHINGTON',
                            'EN-NEW YORK',
                            'EN-TORONTO',
                            'EN-SIDNEY',
                            'EN-LONDON',
                            'EN-LIBERPOOL',
                            'EN-MANCHESTER',
                            'EN-KENTUCKY',
                            'EN-SEATTLE',
                            'EXAMEN APPROVING'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card2, 2);
                
                ?>
        </div>
        <div class="curso__title">
                    <h2 id="puntodiplomado">DIPLOMADOS & CURSOS</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card5 = array(
                        //Card
                        'titulo' => 'Diplomado de Laboratorio Clinico',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Belleza_Integral_1080x1080_(2)1.png',
                        'duracion' => '1 año y medio',
                        'modulos' => 18,
                        'semestres' => 3,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Tendrá las habilidades y destrezas necesarias para desempeñarse laboralmente destacándose entre sus similares por su perfil multifacético en cualquier centro de estética y belleza, incluso de incursionar y poder ser su propia empresaria en el área.
                        Tendrá habilidades en químicos, cortes, cepillados, arreglo de uñas. Será capacitado para mantener la zona de trabajo o incluso su empresa en el equipamiento de condiciones bioseguras según la normativa sanitaria vigente en centros de belleza y estética, podrá asesorar a un usuario en el cambio de imagen personal de acuerdo con las técnicas de estilismo capilar.',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'FUNDAMENTOS BASICOS EN BELLEZA',
                            'BIOSEGURIDAD EN BELLEZA INTEGRAL',
                            'PEINADOS Y EXTENSIONES DE CABELLO',
                            'CORTE Y BARBERIA BASICA',
                            'COLORIMETRIA I',
                            'COLORIMETRIA II',
                            'MAQUILLAJE SOCIAL',
                            'MAQUILLAJE ARTISTICO',
                            'PEINADOS SOCIALES',
                            'MANICURA Y PEDICURA I',
                            'MANICURA Y PEDICURA II',
                            'DEPILACION FACIAL Y CORPORAL',
                            'RUBIOS Y MECHAS',
                            'UÑAS ESCULPIDAS Y DECORACION 3D',
                            'TRATAMIENTOS Y KERATINAS',
                            'CEJAS Y PESTAÑAS'
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
                    );
                    
                    $card6 = array(
                        //Card
                        'titulo' => 'Masaje y Rehabilitación Terapéutica',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Cosmetologia1080x10801.png',
                        'duracion' => '1 año y medio',
                        'modulos' => 18,
                        'semestres' => 3,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Tendrá las habilidades y destrezas necesarias para desempeñarse laboralmente destacándose entre sus similares por su perfil multifacético en cualquier centro de estética y belleza, incluso de incursionar y poder ser su propia empresaria en el área.
                        Tendrá habilidades en químicos, cortes, cepillados, arreglo de uñas. Será capacitado para mantener la zona de trabajo o incluso su empresa en el equipamiento de condiciones bioseguras según la normativa sanitaria vigente en centros de belleza y estética, podrá asesorar a un usuario en el cambio de imagen personal de acuerdo con las técnicas de estilismo capilar.',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'FUNDAMENTOS BASICOS EN SALUD',
                            'MORFOLOGIA Y ANATOMIA',
                            'PROCEDIMIENTOS BASICOS EN SALUD',
                            'DERMATOLOGIA',
                            'BIOSEGURIDAD',
                            'PROTOCOLOS FACIALES',
                            'APARATOLOGIA FACIAL',
                            'MASAJE I',
                            'MASAJE II',
                            'MASAJE III',
                            'MASAJE IV',
                            'MAQUILLAJE SOCIAL',
                            'APARATOLOGIA CORPORAL',
                            'DEPILACIÓN FACIAL Y CORPORAL',
                            'TRATAMIENTO PRES Y POST OPERATORIO',
                            'SERVICIO Y ATENCIÓN AL USUARIO'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card5, 5);
                    generarTarjetaYModal($card6, 6);
                
                ?>
        </div>

            <div class="curso__title">
                    <h2 id="puntodiseno">DISEÑO</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card1 = array(
                        //Card
                        'titulo' => 'Auxiliar en Diseño Gráfico',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card1, 1);
                
                ?>
        </div>
        
        <div class="curso__title">
                    <h2 id="puntoeducacion">EDUCACIÓN</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card1 = array(
                        //Card
                        'titulo' => 'Aux. Atención a la Primera Infancia',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Dise%C3%B1o_Grafico1.jpeg',
                        'duracion' => '1 años',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Diseñador Gráfico implementará metodologías y procesos de creación de imágenes, técnicas de expresión gráfica, y tecnologías computacionales, conducentes a la búsqueda de soluciones visuales óptimas a los problemas de la comunicación gráfica y publicitaria',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'INTRODUCCIÓN AL DISEÑO GRÁFICO',
                            'ESTÉTICA DE LA IMAGEN',
                            'DIBUJO BASADO EN COREL DRAW',
                            'IMAGEN PUBLICITARIA',
                            'IMAGEN CORPORATIVA',
                            'ADOBE PREMIER (EDICIÓN DE VIDEO)',
                            'FOTOGRAFÍA Y RETOQUE DIGITAL',
                            'ARTES FINALES E IMPRESIÓN',
                            'DIAGRAMACIÓN EDITORIAL',
                            'INFORMÁTICA'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card1, 1);
                
                ?>
        </div>

        <!--SECCION DE GASTRONOMIA-->
        <div class="curso__title">
                    <h2 id="puntogastronomia">GASTRONOMIA</h2>
                    <p>Desarrolla tus habilidades culinarias y convierte en un experto.</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card2 = array(
                        //Card
                        'titulo' => 'Gastronomia',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Ingles_1080x10801.jpeg',
                        'duracion' => '10 meses',
                        'modulos' => 10,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 10 Módulos / 2 Semestres / 10 Meses.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El inglés se muestra como una lengua rica en diversidad. Actualmente, se considera como lengua oficial o lengua madre en países como Reino Unido, Irlanda, USA, Canadá, Australia, Nueva Zelanda y algunos países de la costa caribe. La población mundial que habla este idioma alrededor del mundo oscila entre 300 y 400 millones de habitantes.',
                        //Modal
                        'modulos_lista' => array(
                            'EN-MIAMI',
                            'EN-WASHINGTON',
                            'EN-NEW YORK',
                            'EN-TORONTO',
                            'EN-SIDNEY',
                            'EN-LONDON',
                            'EN-LIBERPOOL',
                            'EN-MANCHESTER',
                            'EN-KENTUCKY',
                            'EN-SEATTLE',
                            'EXAMEN APPROVING'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card2, 2);
                
                ?>
        </div>

        <div class="secction__curso-container">
            <div class="curso__title">
                    <h2 id="puntoidiomas">IDIOMAS</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card2 = array(
                        //Card
                        'titulo' => 'Ingles A1 y A2 en alianza con la Universidad de la Cambridge',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Ingles_1080x10801.jpeg',
                        'duracion' => '10 meses',
                        'modulos' => 10,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 10 Módulos / 2 Semestres / 10 Meses.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El inglés se muestra como una lengua rica en diversidad. Actualmente, se considera como lengua oficial o lengua madre en países como Reino Unido, Irlanda, USA, Canadá, Australia, Nueva Zelanda y algunos países de la costa caribe. La población mundial que habla este idioma alrededor del mundo oscila entre 300 y 400 millones de habitantes.',
                        //Modal
                        'modulos_lista' => array(
                            'EN-MIAMI',
                            'EN-WASHINGTON',
                            'EN-NEW YORK',
                            'EN-TORONTO',
                            'EN-SIDNEY',
                            'EN-LONDON',
                            'EN-LIBERPOOL',
                            'EN-MANCHESTER',
                            'EN-KENTUCKY',
                            'EN-SEATTLE',
                            'EXAMEN APPROVING'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card2, 2);
                
                ?>
        </div>
        <div class="secction__curso-container">
            <div class="curso__title">
                    <h2 id="puntoinvestigativa">INVESTIGATIVA Y JUDICIAL</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card3 = array(
                        //Card
                        'titulo' => 'Auxiliar en Investigación Criminalística y Judicial',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Investigacion_Judicial_1080x10801.jpeg',
                        'duracion' => '1 año',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Apoyan y asisten técnica, científica y operativamente el desarrollo de actividades investigativas del área judicial, criminalística y criminal. Se ocupan en el sector justicia, de bienes y servicios de carácter privado y público e investigación privada, en materia penal, disciplinaria, administrativa, comercial, industrial, civil, laboral y en prevención de actividades delictivas, entre otras..',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'FUNDAMENTACIÓN LEGAL I',
                            'FUNDAMENTACIÓN LEGAL II',
                            'FUNDAMENTO BÁSICO DE INVESTIGACIÓN JUDICIAL',
                            'TÉCNICAS BÁSICAS JUDICIALES I',
                            'TÉCNICAS BÁSICAS JUDICIALES II',
                            'TÉCNICAS BÁSICAS JUDICIALES III',
                            'PSICOLOGÍA CRIMINAL',
                            'BALÍSTICA FORENSE',
                            'GESTIÓN DOCUMENTAL',
                            'INFORMATICA',
                            'MODULO DE PROFUNDIZACIÓN'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card3, 3);
                
                ?>
        </div>
        <div class="secction__curso-container">
            <div class="curso__title">
                    <h2>INDUSTRIAL</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card4 = array(
                        //Card
                        'titulo' => 'Auxiliar en Salud y Seguridad en el Trabajo',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/SSGT1.jpeg',
                        'duracion' => '1 año',
                        'modulos' => 12,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El Técnico Profesional en Procesos de Seguridad y Salud en el Trabajo se desempeñará en empresas de diversos sectores y tamaños, donde se implementen sistemas de seguridad y salud en el trabajo, brindando el apoyo requerido en los diferentes ámbitos de la gestión de dichos sistemas, en procura de la mejora permanente de las condiciones de trabajo para garantizar el logro de los objetivos organizacionales y el cuidado y preservación de la salud de los empleados.',
                        //Modal
                        'modulos_lista' => array(
                            'ÉTICA Y VALORES TÉCNICO',
                            'FUNDAMENTOS DE SALUD OCUPACIONAL (SSST-1)',
                            '(SSST-2) ADMINISTRACIÓN',
                            '(SSST-3) ASISTENCIA',
                            '(SSST-4) CONTROL',
                            'HIGIENE INDUSTRIAL I',
                            'HIGIENE INDUSTRIAL II',
                            'MANEJO DE RESIDUOS',
                            'PRIMEROS AUXILIOS',
                            'CONDICIONES DE SEGURIDAD LABORAL',
                            'INFORMÁTICA',
                            'SERVICIO AL CLIENTE'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card4, 4);
                
                ?>
        </div>
        
        <div class="secction__curso-container">
            <div class="curso__title">
                    <h2>SALUD</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card7 = array(
                        //Card
                        'titulo' => 'Aux. Enfermeria',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/default.jpg',
                        'duracion' => '600 horas',
                        'modulos' => 7,
                        'semestres' => 1,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 7 Módulos / 1 Semestre / 600 horas',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Limpian salas de espera, pasillos, oficinas, áreas comunes, interiores de ascensores, hospitales, colegios, edificios de oficinas, instalaciones comerciales, residencias privadas y entre otros. Están empleados por hospitales, institutos de educación, oficinas, casas de familia, compañías de servicio de aseo y todos aquellos que requieran del servicio.',
                        //Modal
                        'modulos_lista' => array(
                            'SERVICIO AL CLIENTE',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS I',
                            'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS II',
                            'MANEJO DE ALIMENTOS',
                            'MANEJO DE RESIDUOS',
                            'ASEO Y DESINFECCIÓN DE HABITACIONES'
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
                            '300 Horas de desarrollo',
                        ),
                        'requisitos' => array(
                            'Copia del Documento de Identidad del estudiante',
                            'Copia del Documento de Identidad del acudiente en caso de ser menor de edad',
                            'Copia del Diploma de Bachiller o Acta de Grado',
                            'En Caso de no ser bachiller, Certificado de 9no Original Aprobado',
                            'Certificado de Salud de la pagina del Addres',
                            'Recibo del pago de la plataforma y el primer modulo a cursar',
                        ),
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card7, 7);

                    $card7 = array(
                        //Card
                        'titulo' => 'Aux. Salud Oral',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/default.jpg',
                        'duracion' => '600 horas',
                        'modulos' => 7,
                        'semestres' => 1,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 7 Módulos / 1 Semestre / 600 horas',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Limpian salas de espera, pasillos, oficinas, áreas comunes, interiores de ascensores, hospitales, colegios, edificios de oficinas, instalaciones comerciales, residencias privadas y entre otros. Están empleados por hospitales, institutos de educación, oficinas, casas de familia, compañías de servicio de aseo y todos aquellos que requieran del servicio.',
                        //Modal
                        'modulos_lista' => array(
                            'SERVICIO AL CLIENTE',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS I',
                            'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS II',
                            'MANEJO DE ALIMENTOS',
                            'MANEJO DE RESIDUOS',
                            'ASEO Y DESINFECCIÓN DE HABITACIONES'
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
                            '300 Horas de desarrollo',
                        ),
                        'requisitos' => array(
                            'Copia del Documento de Identidad del estudiante',
                            'Copia del Documento de Identidad del acudiente en caso de ser menor de edad',
                            'Copia del Diploma de Bachiller o Acta de Grado',
                            'En Caso de no ser bachiller, Certificado de 9no Original Aprobado',
                            'Certificado de Salud de la pagina del Addres',
                            'Recibo del pago de la plataforma y el primer modulo a cursar',
                        ),
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card7, 7);

                    $card7 = array(
                        //Card
                        'titulo' => 'Aux. Farmacia',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/default.jpg',
                        'duracion' => '600 horas',
                        'modulos' => 7,
                        'semestres' => 1,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 7 Módulos / 1 Semestre / 600 horas',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'Limpian salas de espera, pasillos, oficinas, áreas comunes, interiores de ascensores, hospitales, colegios, edificios de oficinas, instalaciones comerciales, residencias privadas y entre otros. Están empleados por hospitales, institutos de educación, oficinas, casas de familia, compañías de servicio de aseo y todos aquellos que requieran del servicio.',
                        //Modal
                        'modulos_lista' => array(
                            'SERVICIO AL CLIENTE',
                            'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
                            'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS I',
                            'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS II',
                            'MANEJO DE ALIMENTOS',
                            'MANEJO DE RESIDUOS',
                            'ASEO Y DESINFECCIÓN DE HABITACIONES'
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
                            '300 Horas de desarrollo',
                        ),
                        'requisitos' => array(
                            'Copia del Documento de Identidad del estudiante',
                            'Copia del Documento de Identidad del acudiente en caso de ser menor de edad',
                            'Copia del Diploma de Bachiller o Acta de Grado',
                            'En Caso de no ser bachiller, Certificado de 9no Original Aprobado',
                            'Certificado de Salud de la pagina del Addres',
                            'Recibo del pago de la plataforma y el primer modulo a cursar',
                        ),
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card7, 7);
                
                ?>
        </div>
        </div>

        <div class="curso__title">
                    <h2>SALUD ANIMAL</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card2 = array(
                        //Card
                        'titulo' => 'Aux. Veterinaria',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Ingles_1080x10801.jpeg',
                        'duracion' => '10 meses',
                        'modulos' => 10,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 10 Módulos / 2 Semestres / 10 Meses.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El inglés se muestra como una lengua rica en diversidad. Actualmente, se considera como lengua oficial o lengua madre en países como Reino Unido, Irlanda, USA, Canadá, Australia, Nueva Zelanda y algunos países de la costa caribe. La población mundial que habla este idioma alrededor del mundo oscila entre 300 y 400 millones de habitantes.',
                        //Modal
                        'modulos_lista' => array(
                            'EN-MIAMI',
                            'EN-WASHINGTON',
                            'EN-NEW YORK',
                            'EN-TORONTO',
                            'EN-SIDNEY',
                            'EN-LONDON',
                            'EN-LIBERPOOL',
                            'EN-MANCHESTER',
                            'EN-KENTUCKY',
                            'EN-SEATTLE',
                            'EXAMEN APPROVING'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card2, 2);
                
                ?>
        </div>

        <div class="curso__title">
                    <h2>SERVICIOS GENERALES</h2>
                    <p>Conoce los cursos de esta area</p>
            </div>
            <div class="cursos__container">
                <?php
                    // Array de datos para la primera tarjeta
                    $card2 = array(
                        //Card
                        'titulo' => 'Servicios Generales, Aseo y Cafeteria',
                        'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Ingles_1080x10801.jpeg',
                        'duracion' => '10 meses',
                        'modulos' => 10,
                        'semestres' => 2,
                        'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
                        'modal-duracion' => 'Duración: 10 Módulos / 2 Semestres / 10 Meses.',
                        'practica_laboral' => 'Prácticas Laborales: Incluidas',
                        'descripcion' => 'El inglés se muestra como una lengua rica en diversidad. Actualmente, se considera como lengua oficial o lengua madre en países como Reino Unido, Irlanda, USA, Canadá, Australia, Nueva Zelanda y algunos países de la costa caribe. La población mundial que habla este idioma alrededor del mundo oscila entre 300 y 400 millones de habitantes.',
                        //Modal
                        'modulos_lista' => array(
                            'EN-MIAMI',
                            'EN-WASHINGTON',
                            'EN-NEW YORK',
                            'EN-TORONTO',
                            'EN-SIDNEY',
                            'EN-LONDON',
                            'EN-LIBERPOOL',
                            'EN-MANCHESTER',
                            'EN-KENTUCKY',
                            'EN-SEATTLE',
                            'EXAMEN APPROVING'
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
                    );

                    // Llama a la función para generar la tarjeta y el modal
                    generarTarjetaYModal($card2, 2);
                
                ?>
        </div>
    </section>

    </main>






    <?php include("../templates/footer.php") ?>


    <script src="../../js/menu.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    var containers = document.querySelectorAll('.secction__curso-container');

    containers.forEach(function (container) {
        var cursosContainer = container.querySelector('.cursos__container');
        var cards = cursosContainer.querySelectorAll('.card__curse'); // Cambiado a 'cursosContainer'
        var numCards = cards.length;

        if (numCards === 1) {
            cursosContainer.classList.add('single'); // Agrega la clase 'single' al contenedor de cursos
        } else if (numCards === 2) {
            cursosContainer.classList.add('two'); // Agrega la clase 'two' al contenedor de cursos
        } else if (numCards > 2) {
            cursosContainer.classList.add('multiple'); // Agrega la clase 'multiple' al contenedor de cursos
        }
    });
});


</script>




</body>
</html>