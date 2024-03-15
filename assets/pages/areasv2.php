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
<body>
    <div class="loader__bg" id="loader">
        <span class="loader"><img src="../img/Icons/LogoCotemag.png" loading="lazy"  alt="logo cotemag"></span>
    </div>

    <header class="header basic__style">
        <?php include("../templates/menu.php") ?>
        <div class="header__portada">
            <div class="header__cortine"></div>
            <img src="../img/areas.jpeg" alt="joven cocinero" loading="lazy">
            <div class="header__titles">
                <h1>ÁREAS DE ESTUDIO</h1>
                <p>Conoce nuestra oferta academica.</p>
            </div>
        </div>
    </header>
    <main class="main basic__style">
        <article class="main__info width__basic">
            <div class="info__title">
                <h2>Selecciona el area de tu interés</h2>
            </div>
        </article>
        <article class="main__cursos width__basic">
            <div class="cursos__container" id="cursos">
                <a href="#modal-cocinero" class="card__curse">
                    <div class="curso__img">
                        <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Cocina1.jpeg" alt="cocinero" loading="lazy">
                    </div>
                    <h3>GASTRONOMIA</h3>
                    <div class="curso__info">
                        <p><i class="fa-regular fa-clock"></i> 1 años y medio</p>
                        <p><i class="fa-regular fa-pen-to-square"></i> 18 Modulos</p>
                        <p><i class="fa-solid fa-person-chalkboard"></i> 3 Semestres</p>
                    </div>
                </a>
                <a href="#modal-repostero" class="card__curse">
                    <div class="curso__img">
                        <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Resposteria1.jpeg" alt="cocinero" loading="lazy">
                    </div>
                    <h3>SALUD</h3>
                    <div class="curso__info">
                        <p><i class="fa-regular fa-clock"></i> 1 años y medio</p>
                        <p><i class="fa-regular fa-pen-to-square"></i> 18 Modulos</p>
                        <p><i class="fa-solid fa-person-chalkboard"></i> 3 Semestres</p>
                    </div>
                </a>
                <a href="#modal-bartender" class="card__curse">
                    <div class="curso__img">
                        <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Bartender1080x10801.png" alt="cocinero" loading="lazy">
                    </div>
                    <h3>SALUD ANIMAL</h3>
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
                <h2>Auxiliar de Chef de Alta Cocina (Mención Cocina Cliente)</h2>
            <div class="modal__img">
                <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Cocina1.jpeg" alt="cocinero" loading="lazy">
            </div>
            <div class="modal__info">
                <p>Nivel: Técnico Laboral por competencias</p>
                <p>Duración: 18 Módulos / 3 Semestres / 1.800 horas</p>
                <p>El técnico laboral en Chef de Alta Cocina tendrá la capacidad y habilidad necesaria para la adecuada preparación de alimentos, su conservación, nutrición, configuración de menús, ejecuta procesos básicos en su servicio, apoya de manera determinante al profesional en la consecución de objetivos en la prestación de un servicio eficiente que beneficie al cliente con demanda culinaria.</p>
            </div>
            <div class="modal__modulos">
                <p>Modulos</p>
                <ul>
                    <li>ÉTICA Y VALORES TÉCNICO</li>
                    <li>FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO</li>
                    <li>INTRODUCCION A LA COCINA Y GASTRONOMIA</li>
                    <li>FUNDAMENTOS DE COCINA</li>
                    <li>OPERACIONES BASICAS DE COCINA</li>
                    <li>OPERACIONES ADMINISTRATIVAS DE COCINA</li>
                    <li>COCINA COLOMBIANA I</li>
                    <li>COCINA COLOMBIANA II</li>
                    <li>GUARNICIÓN</li>
                    <li>COSTOS, ESTANDARIZACIÓN Y CREACIÓN DE RECETAS</li>
                    <li>COCTELES Y BEBIDAS</li>
                    <li>COCINA LATINO AMERICANA I</li>
                    <li>COCINA LATINO AMERICANA II</li>
                    <li>COCINA INTERNACIONAL I</li>
                    <li>COCINA INTERNACIONAL II</li>
                    <li>COCINA INTERNACIONAL III</li>
                    <li>TECNICAS DEL SERVICIO DE MESA</li>
                    <li>ETIQUETA Y PROTOCOLO</li>
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
                    <li>600 Horas de desarrollo</li>
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
                <h2>Técnico Laboral por Competencias Repostero Pastelero</h2>
            <div class="modal__img">
                <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Resposteria1.jpeg" alt="cocinero" loading="lazy">
            </div>
            <div class="modal__info">
                <p>Nivel: Técnico Laboral por competencias</p>
                <p>Duración: 18 Módulos / 3 Semestres</p>
                <p>El egresado de Técnico Laboral por Competencias Repostero Pastelero de la Escuela de Gastronomía de COTEMAG, estará en capacidad de preparar y hornear masas para pasteles, panes, panecillos, pizzas, rellenos, cubiertas, tortas, dulces y batidos para galletas de acuerdo con recetas u órdenes especiales del cliente, además de realizar pedidos para la producción y elaboración de productos específicos.</p>
            </div>
            <div class="modal__modulos">
                <p>Modulos</p>
                <ul>
                    <li>ÉTICA Y VALORES TÉCNICO</li>
                    <li>FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO</li>
                    <li>INTRODUCCION A LA REPOSTERIA Y PASTELERIA</li>
                    <li>FUNDAMENTOS DE COCINA EN REPOSTERIA</li>
                    <li>BUENAS PRACTICAS DE MANOFACTURA BPM</li>
                    <li>CIENCIA DE LOS ALIMENTOS</li>
                    <li>REPOSTERIA Y PASTELERIA -I</li>
                    <li>REPOSTERIA Y PASTELERIA -II</li>
                    <li>REPOSTERIA SALUDABLE</li>
                    <li>REPOSTERIA CREATIVA</li>
                    <li>AUTOR DEL PASTELERO</li>
                    <li>PANADERIA -I</li>
                    <li>PANADERIA -II</li>
                    <li>TECNICAS DE SERVICIO</li>
                    <li>TECNICAS BASICAS DEL CHOCOLATE</li>
                    <li>ORGANIZACIÓN DE EVENTOS</li>
                    <li>COSTOS Y ESTANDARIZACIÓN</li>
                    <li>ETIQUETA Y PROTOCOLO</li>
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
                    <li>600 Horas de desarrollo</li>
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
                <h2>Bartender</h2>
            <div class="modal__img">
                <img src="https://www.cotemag.edu.co//uploads/images/system/private/servicios/Bartender1080x10801.png" alt="cocinero" loading="lazy">
            </div>
            <div class="modal__info">
                <p>Nivel: Técnico Laboral por competencias</p>
                <p>Duración: 12 Módulos / 2 Semestres / 1 Año / 1.056 horas</p>
                <p>Prácticas Formativas: Incluidas</p>
                <p>El barman es un profesional que se encarga de atender la barra de un bar. Su principal función es la de preparar y servir las distintas bebidas de la carta de un local de copas, de una cafetería, de un pub, de una discoteca, etc. <br> Este profesional, por lo tanto, puede trabajar en diferentes tipos de negocios del sector de la hostelería. Si te formas adecuadamente, podrás optar a una amplia variedad de salidas laborales.</p>
            </div>
            <div class="modal__modulos">
                <p>Modulos</p>
                <ul>
                    <li>ÉTICA Y VALORES TÉCNICO</li>
                    <li>FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO</li>
                    <li>INTRODUCCION AL BARTENDER</li>
                    <li>DETILADOS I</li>
                    <li>DESTILADOS II</li>
                    <li>MIXOLOGÍA I</li>
                    <li>MIXOLOGÍA II</li>
                    <li>FLAIR</li>
                    <li>MARKETING GASTRONÓMICO</li>
                    <li>SERVICIO DE BEBIDAS CALIENTES</li>
                    <li>COSTOS</li>
                    <li>BEBIDAS FERMENTADAS</li>
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
                    <li>528 Horas de desarrollo</li>
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
            
        </article>

    </main>

    <?php include("../templates/footer.php") ?>


    <script src="../../js/menu.js"></script>
    <script src="../../js/cursos.js"></script>

</body>
</html>