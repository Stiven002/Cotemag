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

    <header class="header basic__style">
        <?php include("../templates/menu.php") ?>
        <div class="header__portada">
            <div class="header__cortine"></div>
            <img src="../img/joven-cocinero.jpg" alt="joven cocinero" loading="lazy">
            <div class="header__titles">
                <h1>Docentes y administrativos</h1>
                <p>Conoce nuestro equipo de trabajo</p>
            </div>
        </div>
    </header>
    <main class="main basic__style">
        <br>
        <br>
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
        <br>
        <br>
    </main>

    <?php include("../templates/footer.php") ?>


    <script src="../../js/menu.js"></script>
    <script src="../../js/cursos.js"></script>

</body>
</html>