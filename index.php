<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/menu-footer.css">
    <link rel="stylesheet" href="./css/carrousel.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../../css/conveniosp.css">
    <link rel="stylesheet" href="/css/slidertar.css">
    <link rel="icon" href="./assets/img/Icons/LogoCotemag.png">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Importando librerias de font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cotemag</title>
</head>
<body>
    <div class="loader__bg" id="loader">
        <span class="loader"><img src="./assets/img/Icons/LogoCotemag.png" loading="lazy"  alt="logo cotemag"></span>
        <h2>Cargando por favor espere</h2>
    </div>

    <header class="header basic__style">
        <?php include("./assets/templates/menu.php") ?>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                    <div class="swiper__info">
                        <div class="swiper__info-container width__basic">
                            <div class="swiper__navegation-1">
                            </div>
                            <div class="swiper__title-nav">
                                <div class="swiper__title">
                                    <h1>CORPORACION TECNICA <br>DEL MAGDALENA </h1>
                                    <h2>Elige la carrera de tus sueños a tan solo un click</h2>
                                    <a href="#">Aplicar</a>
                                </div>
                                <div class="swiper__navegation-buttons">
                                    <div class="arrow__container arrow-next">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                    <div class="arrow__container arrow-prev">
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper__cortine"></div>
                        <img class="swiper__slide-img" src="https://www.cotemag.edu.co/uploads/images/system/public/slider/2.png" loading="lazy" alt="chica con libros">
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper__cortine"></div>
                        <img class="swiper__slide-img" src="https://www.cotemag.edu.co/uploads/images/system/public/slider/7.png" loading="lazy" alt="joven con computadora">
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper__cortine"></div>
                        <img class="swiper__slide-img" src="https://www.cotemag.edu.co/uploads/images/system/public/slider/265162.png" loading="lazy" alt="jovenes estudiando">
                    </div>
                </div>
        </div>
    </header>

    <main class="main basic__style">
            <!-- seccion de las cartas -->
            <article class="main__cards-container width__basic">
                <a href="#" class="main__card">
                    <i class="fa-solid fa-book-bookmark"></i>
                    <h3>¿Por que estudiar en Cotemag?</h3>
                    <p>COTEMAG ha sido reconocida como la institucion con los mejores egresados <br> insertados en el mercado laboral.</p>
                    <span href="#">Leer mas <i class="fa-solid fa-chevron-right card__enlace"></i></span>
                </a>
                <a href="#" class="main__card card__cotemag">
                    <i class="fa-solid fa-school-flag"></i>
                    <h3>Ser Cotemag</h3>
                    <p>COTEMAG ha sido reconocida como la institucion con los mejores egresados <br> insertados en el mercado laboral.</p>
                    <span href="#">Leer mas <i class="fa-solid fa-chevron-right card__enlace enlace-cl"></i></span>
                </a>
                <a href="#" class="main__card card__news">
                    <i class="fa-solid fa-newspaper"></i>
                    <h3>¿Por que estudiar en Cotemag?</h3>
                    <p>Conoce las altumas noticias y eventos que acontesieron o aconteceran en nuestra institucion.</p>
                    <span href="#">Leer mas <i class="fa-solid fa-chevron-right card__enlace"></i></span>
                </a>
            </article>
            <!-- slider de los cursos -->

    <section class="course__title width__basic"> 

        <h2>Cursos</h2>
        <div class="cursos__title-des">
            <p>Conoce nuestros cursos y consigue el curso de tus sueños</p>
            <a href="#">Conocer mas <i class="fas fa-angle-right"></i></a>
        </div>

    </section>

<?php


// Define un array con los conjuntos de datos para el carrusel
$carouselDataArray = [
    [
        'pageImg' => "https://www.cotemag.edu.co//uploads/images/system/private/servicios/Enfermeria.jpeg",
        'pageEtique' => "Salud",
        'pageTitle' => "Auxiliar de Enfermeria",
        'pageTime' => "1 año y medio",
        'pageModuls' => "18 Módulos",
        'pageSemestre' => "3 Semestres",
    ],
    [
        'pageImg' => "https://www.cotemag.edu.co//uploads/images/system/private/servicios/Salud_Oral_1080x10801.jpeg",
        'pageEtique' => "Salud",
        'pageTitle' => "Auxiliar en Salud Oral",
        'pageTime' => "1 año y medio",
        'pageModuls' => "18 Módulos",
        'pageSemestre' => "3 Semestres",
    ],
    [
        'pageImg' => "https://www.cotemag.edu.co//uploads/images/system/private/servicios/Servicios_Farmaceuticos1.jpeg",
        'pageEtique' => "Salud",
        'pageTitle' => "Auxiliar en Salud Oral",
        'pageTime' => "1 año",
        'pageModuls' => "18 Módulos",
        'pageSemestre' => "3 Semestres",
    ],
    [
        'pageImg' => "https://www.cotemag.edu.co//uploads/images/system/private/servicios/Auxiliar_Contable1.jpeg",
        'pageEtique' => "Administrativa",
        'pageTitle' => "Auxiliar Contable",
        'pageTime' => "1 año",
        'pageModuls' => "12 Módulos",
        'pageSemestre' => "2 Semestres",
    ],
    [
        'pageImg' => "https://www.cotemag.edu.co//uploads/images/system/private/servicios/Auxiliar_Contable1.jpeg",
        'pageEtique' => "Administrativa",
        'pageTitle' => "Auxiliar Contable",
        'pageTime' => "1 año",
        'pageModuls' => "12 Módulos",
        'pageSemestre' => "2 Semestres",
    ],
];

// Incluye el template del carrusel y pasa el array de datos
$carouselData = $carouselDataArray;
include("./assets/templates/carousel.php");
?>



            <!-- video de presentacion -->
            <article class="video__pre width__basic">
                <div class="video__container">
                    <iframe loading="lazy" class="video__cotemag" width="80%" height="623" src="https://www.youtube.com/embed/_Y9AaMg7wxA" title="Cotemag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </article>
            <div class="video__fondo basic__style"></div>


            <div class="acordeon">
                    <div class="news__cards-title titulo_acor">
                        <h3>Prácticas</h3>
                        <p>Conoce Los Requisitos Para Presentar Las Prácticas</p>
                    </div>
                <div class="accordion" id="accordionPanelsStayOpenExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h2 class="my-3">Requisitos</h2>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne1" class="accordion-collapse collapse">
                        <div class="accordion-body">
                        <div class="modulos">
                            <ul>
                                <li>Solicitud de prácticas formativas (Formato entregado en COTEMAG)</li>
                                <li>Dos hoja de vida impresa a color en el formato de COTEMAG</li>
                                <li>Dos foto 3x4 fondo azul tipo documento (No escaneada, No tipo selfie)</li>
                                <li>Dos fotocopia del documento de identidad al 100%</li>
                                <li>Una fotocopia del documento de identidad al 150%</li>
                                <li>Esquema de vacunación al día para el área de salud</li>
                                <li>Dos certificado de Fosyga</li>
                                <li>Dos fotocopia del Seguro Estudiantil o recibo de pago del mismo</li>
                                <li>Una fotocopia del recibo de pago de pólizas</li>
                                <li>Paz y salvo académico</li>
                                <li>Paz y salvo financiero</li>
                                <li>Permiso de trabajo notariado para menores de edad.</li>
                                <li>Certificado de la procuraduría</li>
                                <li>Certificado de contraloría</li>
                                <li>Certificado de policía</li>  
                                <li>Fotocopia del diploma de bachiller y de otros estudios incluyendo seminarios realizados en COTEMAG (Una fotocopia de cada documento)</li>
                                <li>Una carpeta blanca</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>  
            </div>

                <div class="accordion" id="accordionPanelsStayOpenExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <h2 class="my-3">Anexsos de Prácticas</h2>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                <div class="modulos2">
                                    <div>
                                        <p>El estudiante deberá presentar copia de la hoja de vida al momento de la entrevista en la empresa interesada. El estudiante deberá anexar soportes físicos de la información académica y datos personales. En caso de ser menor de edad, se debe anexar permiso laboral autenticado por parte de los padres o representantes. Los practicantes en el Área de la Salud deben anexar fotocopia del Certificado de Vacunas.</p>
                                    </div>
                                    <div class="formatos">
                                        <div>
                                            <h3>Formato solicitud de prácticas</h3>
                                            <p>Este documento esta diseñado en Microsoft Word (docx), el cual es desarrollado por Sistema de Gestión de la Calidad - Corporación Técnica del Magdalena con el título de SOLICITUD DE PRÁCTICAS FORMATIVAS Código: GC-FO07.</p>
                                            <a href="/assets/CNC-GC-FO07SolicituddePrácticasFormativas.doc" download="SolicituddePrácticasFormativas">
                                            <i class="fa-solid fa-newspaper"></i> Descargar
                                            </a>

                                        </div>
                                        <div>
                                            <h3>Hoja de Vida</h3>
                                            <p>Este documento esta diseñado en Microsoft Word (docx), el cual es desarrollado por Sistema de Gestión de la Calidad - Corporación Técnica del Magdalena HOJA DE VIDA DE PRACTICANTES Código: GC-FO08.</p>
                                            <a href="/assets/CNC-GC-FO08HojadeVidadePracticantes.doc" download="SolicituddePrácticasFormativas">
                                            <i class="fa-solid fa-newspaper"></i> Descargar
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>   
            </div>
            <!-- noticas -->
            <article class="news__container basic__style">
                <div class="news__cards width__basic">
                    <div class="news__cards-title ">
                        <h3>Noticias y Eventos</h3>
                        <p>Conoce nuestras noticias y eventos</p>
                    </div>
                    <div class="news__cards-container">
                        <a href="#" class="new__card">
                            <div class="news__img">
                                <img src="https://i0.wp.com/blog.portaleducacao.com.br/wp-content/uploads/2022/02/365-O-que-e%CC%81-tecnologia_.jpg?fit=740%2C416&ssl=1" loading="lazy" alt="Tecnoligia news">
                                <div class="news__etiqueta">
                                    <p>Tecnologia</p>
                                </div>
                            </div>
                            <div class="news__info">
                                <p><i class="fa-regular fa-user"></i> Angello</p>
                                <p><i class="fa-regular fa-calendar"></i> 9 Junio, 2023</p>
                            </div>
                            <h4>Nuevos programas tenelogicos en camino</h4>
                        </a>
                        <a href="#" class="new__card">
                            <div class="news__img">
                                <img src="https://i1.wp.com/thehappening.com/wp-content/uploads/2015/12/pomeranian-perros.jpg?fit=1024%2C694&ssl=1" loading="lazy" alt="Veterinaria news">
                                <div class="news__etiqueta">
                                    <p>Salud</p>
                                </div>
                            </div>
                            <div class="news__info">
                                <p><i class="fa-regular fa-user"></i> Angello</p>
                                <p><i class="fa-regular fa-calendar"></i> 19O Obtubre, 2023</p>
                            </div>
                            <h4>Muchas vidas de perritos mejoradas gracias a nuestros estudiantes</h4>
                        </a>
                        <a href="#" class="new__card">
                            <div class="news__img">
                                <img src="https://img.freepik.com/foto-gratis/hombre-amistoso-que-extiende-manos-adelante-da-bienvenida-saluda-invitados-o-busca-abrazos-pie-contra-fondo-azul_1258-64966.jpg" loading="lazy" alt="Instucion news">
                                <div class="news__etiqueta">
                                    <p>Informativa</p>
                                </div>
                            </div>
                            <div class="news__info">
                                <p><i class="fa-regular fa-user"></i> Angello</p>
                                <p><i class="fa-regular fa-calendar"></i> 1 Enero, 2024</p>
                            </div>
                            <h4>Rebajas de año nuevo en matriculas</h4>
                        </a>
                    </div>
                </div>
            </article>
    </main>

    <?php include("./assets/templates/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/cursos.js"></script>
    <script src="./js/menu.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>