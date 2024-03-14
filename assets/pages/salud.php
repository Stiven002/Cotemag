<!DOCTYPE html>
<html lang="en">
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
    <title>Cotemag - Salud</title>
</head>
<body>
    <div class="loader__bg" id="loader">
        <span class="loader"><img src="../img/Icons/LogoCotemag.png" loading="lazy"  alt="logo cotemag"></span>
    </div>

    <header class="header basic__style">
        <!-- Menu principal -->
        <?php include("../templates/menu.php") ?>
        <div class="header__portada">
            <div class="header__cortine"></div>
            <img src="../img/salud.jpg" alt="joven cocinero" loading="lazy">
            <div class="header__titles">
                <h1>Área de Salud</h1>
                <p>Conoce nuestros cursos que te convertiran en un experto</p>
            </div>
        </div>
    </header>
    <main class="main basic__style">
        <article class="main__info width__basic">
            <div class="info__title">
                <h2>Detalles</h2>
                <p>Conoce mas sobre el área</p>
            </div>
            <p>La salud es una condición suprema para el desarrollo pleno de la vida humana, lograrla al interior de COTEMAG, es un objetivo primordial.
                Corresponde al Área de Salud, orientar sus acciones a la promoción de la misma, a través de la prevención de la enfermedad y promoción de estilos de vida saludable, procurando el mejoramiento permanente de las condiciones psíquicas, físicas y ambientales, favoreciendo actividades que promuevan el desarrollo integral y el bienestar social, mediante la implementación de planes, programas y proyectos que propicien y estimulen conductas de auto cuidado entre los miembros de esta comunidad.</p>
        </article>
        <article class="main__cursos width__basic">
            <div class="curso__title">
                <h2>Cursos</h2>
                <p>Conoce nuestros cursos</p>
            </div>
            <div class="cursos__container" id="cursos">
                <a href="#modal-cocinero" class="card__curse">
                    <div class="curso__img">
                        <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Enfermeria.jpeg" alt="cocinero" loading="lazy">
                    </div>
                    <h3>Auxiliar de Enfermeria</h3>
                    <div class="curso__info">
                        <p><i class="fa-regular fa-clock"></i> 1 años y medio</p>
                        <p><i class="fa-regular fa-pen-to-square"></i> 18 Modulos</p>
                        <p><i class="fa-solid fa-person-chalkboard"></i> 3 Semestres</p>
                    </div>
                </a>
                <a href="#modal-repostero" class="card__curse">
                    <div class="curso__img">
                        <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Salud_Oral_1080x10801.jpeg" alt="cocinero" loading="lazy">
                    </div>
                    <h3>Auxiliar en Salud Oral</h3>
                    <div class="curso__info">
                        <p><i class="fa-regular fa-clock"></i> 1 años y medio</p>
                        <p><i class="fa-regular fa-pen-to-square"></i> 18 Modulos</p>
                        <p><i class="fa-solid fa-person-chalkboard"></i> 3 Semestres</p>
                    </div>
                </a>
                <a href="#modal-bartender" class="card__curse">
                    <div class="curso__img">
                        <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Servicios_Farmaceuticos1.jpeg" alt="cocinero" loading="lazy">
                    </div>
                    <h3>Auxiliar en Farmacia</h3>
                    <div class="curso__info">
                        <p><i class="fa-regular fa-clock"></i> 1 años</p>
                        <p><i class="fa-regular fa-pen-to-square"></i> 12 Modulos</p>
                        <p><i class="fa-solid fa-person-chalkboard"></i> 2 Semestres</p>
                    </div>
                </a>
            </div>
        </article>
        <section class="modal" id="modal-cocinero">
            <div class="modal__container">
                <a href="#cursos" class="modal__close"><i class="fa-solid fa-x"></i></a>
                <h2>Auxiliar de Enfermeria</h2>
            <div class="modal__img">
                <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Enfermeria.jpeg" alt="cocinero" loading="lazy">
            </div>
            <div class="modal__info">
                <p>Nivel: Técnico Laboral por competencias</p>
                <p>Duración: 18 Módulos / 3 Semestres / 1.800 horas</p>
                <p>Prácticas Formativas: Incluidas</p>
                <p>Proveen cuidados de enfermería a pacientes bajo la orientación de enfermeros, médicos y otros miembros del equipo interdisciplinario de salud. Están empleados por hospitales, clínicas, consultorios y otras instituciones del cuidado de la salud.</p>
            </div>
            <div class="modal__modulos">
                <p>Modulos</p>
                <ul>
                    <li>ÉTICA Y VALORES TÉCNICO</li>
                    <li>FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO</li>
                    <li>FUNDAMENTOS BÁSICOS EN SALUD</li>
                    <li>MORFOLOGÍA (ANATOMIA)</li>
                    <li>PROCEDIMIENTOS BÁSICOS DE SALUD</li>
                    <li>BIOSEGURIDAD Y MANEJO DE HERIDAS</li>
                    <li>PROMOCIÓN Y MANTENIMIENTO DE LA SALUD</li>
                    <li>MEDIOS DIAGNOSTICOS</li>
                    <li>ASISTENCIA DE PRIMEROS AUXILIOS</li>
                    <li>ADMINISTRACION DE MEDICAMENTOS I</li>
                    <li>ADMINISTRACION DE MEDICAMENTOS II</li>
                    <li>ATENCION PREHOSPOTALARIA</li>
                    <li>ACTIVIDADES BASICAS DE ENFERMERIA I</li>
                    <li>ACTIVIDADES BASICAS DE ENFERMERIA II</li>
                    <li>CONCEPTO DE ATENCIÓN MATERNO INFANTIL</li>
                    <li>PEDIATRA</li>
                    <li>PACIENTE CRITICO (UCI)</li>
                    <li>MEDICO QUIRURGICO</li>
                </ul>
                <p>Actividades complementarias</p>
                <ul>
                    <li>DEPORTE Y CULTURA TÉCNICO</li>
                    <li>SEMINARIO - I</li>
                    <li>SEMINARIO - II</li>
                    <li>SEMINARIO - III</li>
                    <li>TALLER TÉCNICO - I</li>
                    <li>TALLER TÉCNICO - II</li>
                    <li>TALLER TÉCNICO - III</li>
                </ul>
                <p>Practicas Laborales</p>
                <ul>
                    <li>1080 Horas de desarrollo</li>
                </ul>
                <p>Requisitos para matricularse</p>
                <ul>
                    <li>Copia del Documento de Identidad del estudiante</li>
                    <li>Copia del Documento de Identidad del acudiente en caso de ser menor de edad</li>
                    <li>Copia del Diploma de Bachiller o Acta de Grado</li>
                    <li>En Caso de no ser bachiller, Certificado de 9no Original Aprobado</li>
                    <li>Certificado de Salud de la pagina del Addres <a href="https://www.adres.gov.co/consulte-su-eps" target="_blank">https://www.adres.gov.co/consulte-su-eps</a></li>
                    <li>Recibo del pago de la plataforma y el primer modulo a cursar</li>
                </ul>
            </div>
            </div>

        </section>
        <section class="modal" id="modal-repostero">
            <div class="modal__container">
                <a href="#cursos" class="modal__close"><i class="fa-solid fa-x"></i></a>
                <h2>Auxiliar en Salud Oral</h2>
            <div class="modal__img">
                <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Salud_Oral_1080x10801.jpeg" alt="cocinero" loading="lazy">
            </div>
            <div class="modal__info">
                <p>Nivel: Técnico Laboral por competencias</p>
                <p>Duración: 18 Módulos / 3 Semestres</p>
                <p>Prácticas Laborales: Incluidas</p>
                <p>Auxiliar en Salud Oral estarás en capacidad de apoyar al profesional en todos los procedimientos específicos de la odontología como recepción de pacientes, organización del instrumental, preparación de materiales dentales y control de citas. Además brindarás capacitación a las personas sobre el cuidado de la salud oral, aportando especial interés por el cuidado integral al individuo, la familia y la comunidad con un énfasis en la Promoción y la Prevención.</p>
            </div>
            <div class="modal__modulos">
                <p>Modulos</p>
                <ul>
                    <li>ÉTICA Y VALORES TÉCNICO</li>
                    <li>FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO</li>
                    <li>FUNDAMENTOS BÁSICOS EN SALUD</li>
                    <li>MORFOLOGÍA</li>
                    <li>PROCEDIMIENTOS BÁSICOS DE SALUD</li>
                    <li>BIOSEGURIDAD</li>
                    <li>ADMISIÓN y ATENCIÓN AL USUARIO</li>
                    <li>BIOMATERIALES</li>
                    <li>FUNDAMENTOS EN SALUD ORAL</li>
                    <li>ANATOMIA CABEZA Y CUELLO</li>
                    <li>INSTRUMENTAL</li>
                    <li>EQUIPOS ODONTOLÓGICOS</li>
                    <li>PROMOCIÓN Y PREVENCIÓN EN SALUD ORAL</li>
                    <li>PERIDONCIA</li>
                    <li>SEMIOLOGÍA</li>
                    <li>PATOLOGÍA ORAL BÁSICA</li>
                    <li>ODONTOPEDIATRIA</li>
                    <li>MICROBILOGÍA</li>
                </ul>
                <p>Actividades complementarias</p>
                <ul>
                    <li>DEPORTE Y CULTURA TÉCNICO</li>
                    <li>SEMINARIO - I</li>
                    <li>SEMINARIO - II</li>
                    <li>SEMINARIO - III</li>
                    <li>TALLER TÉCNICO - I</li>
                    <li>TALLER TÉCNICO - II</li>
                    <li>TALLER TÉCNICO - III</li>
                </ul>
                <p>Practicas Laborales</p>
                <ul>
                    <li>1080 Horas de desarrollo</li>
                </ul>
                <p>Requisitos para matricularse</p>
                <ul>
                    <li>Copia del Documento de Identidad del estudiante</li>
                    <li>Copia del Documento de Identidad del acudiente en caso de ser menor de edad</li>
                    <li>Copia del Diploma de Bachiller o Acta de Grado</li>
                    <li>En Caso de no ser bachiller, Certificado de 9no Original Aprobado</li>
                    <li>Certificado de Salud de la pagina del Addres <a href="https://www.adres.gov.co/consulte-su-eps" target="_blank">https://www.adres.gov.co/consulte-su-eps</a></li>
                    <li>Recibo del pago de la plataforma y el primer modulo a cursar</li>
                </ul>
            </div>
            </div>

        </section>
        <section class="modal" id="modal-bartender">
            <div class="modal__container">
                <a href="#cursos" class="modal__close"><i class="fa-solid fa-x"></i></a>
                <h2>Auxiliar en Farmacia</h2>
            <div class="modal__img">
                <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Servicios_Farmaceuticos1.jpeg" alt="cocinero" loading="lazy">
            </div>
            <div class="modal__info">
                <p>Nivel: Técnico Laboral por competencias</p>
                <p>Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas</p>
                <p>Prácticas Formativas: Incluidas</p>
                <p>Auxiliar en Servicios Farmacéuticos estarás en capacidad de realizar labores de recepción, despacho y bodegaje de medicamentos, atender al usuario del servicio farmacéutico, manejar inventarios y dispensar las fórmulas ordenadas por el profesional, aportando la capacidad de mejorar y racionalizar los procedimientos que se realizan en droguerías y farmacias, con énfasis en la Dispensación.
                    Módulos</p>
            </div>
            <div class="modal__modulos">
                <p>Modulos</p>
                <ul>
                    <li>ÉTICA Y VALORES TÉCNICO</li>
                    <li>FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO</li>
                    <li>FUNDAMENTOS BÁSICOS EN SALUD</li>
                    <li>MORFOLOGÍA (ANATOMÍA)</li>
                    <li>PROCEDIMIENTOS BÁSICOS DE SALUD</li>
                    <li>BIOSEGURIDAD Y MANEJO DE HERIDAS</li>
                    <li>CONCEPTO BASICO DE FARMACIA</li>
                    <li>SERVICIO AL CLIENTE</li>
                    <li>ASISTENCIA DE PRIMEROS AUXILIOS</li>
                    <li>PRODUCTOS FARMACEUTICOS I</li>
                    <li>PRODUCTOS FARMACEUTICOS II</li>
                    <li>LEGISLACION FARMACEUTICA</li>
                    <li>PROCESO DE DISPENSACION I</li>
                    <li>PROCESO DE DISPENSACION II</li>
                    <li>ADMINISTRACIÓN DE MEDICAMENTOS</li>
                    <li>RECAUDO Y CAJA</li>
                    <li>PROCESO DE LA VENTA</li>
                    <li>INVENTARIO</li>
                </ul>
                <p>Actividades complementarias</p>
                <ul>
                    <li>DEPORTE Y CULTURA TÉCNICO</li>
                    <li>SEMINARIO - I</li>
                    <li>SEMINARIO - II</li>
                    <li>SEMINARIO - III</li>
                    <li>TALLER TÉCNICO - I</li>
                    <li>TALLER TÉCNICO - II</li>
                    <li>TALLER TÉCNICO - III</li>
                </ul>
                <p>Practicas Laborales</p>
                <ul>
                    <li>1080 Horas de desarrollo</li>
                </ul>
                <p>Requisitos para matricularse</p>
                <ul>
                    <li>Copia del Documento de Identidad del estudiante</li>
                    <li>Copia del Documento de Identidad del acudiente en caso de ser menor de edad</li>
                    <li>Copia del Diploma de Bachiller o Acta de Grado</li>
                    <li>En Caso de no ser bachiller, Certificado de 9no Original Aprobado</li>
                    <li>Certificado de Salud de la pagina del Addres <a href="https://www.adres.gov.co/consulte-su-eps" target="_blank">https://www.adres.gov.co/consulte-su-eps</a></li>
                    <li>Recibo del pago de la plataforma y el primer modulo a cursar</li>
                </ul>
            </div>
            </div>

        </section>
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