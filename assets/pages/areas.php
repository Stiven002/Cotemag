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
    <link rel="stylesheet" href="../../css/areas.css">

    <title>OFERTA ACADEMICA - AREAS</title>
</head>

<?php  include '../templates/cards.php'; ?>

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
                <p>Selecciona el area de tu interés.</p>
            </div>
        </div>
    </header>

    <main class="main basic__style">
            
        <!--Menu lateral izquierdo-->
        <div class="contenedor__areas width__basic">

            <aside class="seccionLateralIzquierda">
                <h2 class="title_menulateral">AREAS DE ESTUDIO</h2>

                <ol class="menuLateral">
                    <li><a href="#administrativa"><i class="fa-solid fa-chevron-right"></i>ADMINISTRATIVA</a></li>
                    <li><a href="#bachillerato"><i class="fa-solid fa-chevron-right"></i>BACHILLERATOS POR CICLOS CLEI</a></li>
                    <li><a href="#belleza"><i class="fa-solid fa-chevron-right"></i>BELLEZA Y BIENESTAR CORPORAL</a></li>
                    <li><a href="#desarrollo"><i class="fa-solid fa-chevron-right"></i>DESARROLLO DE SOFTWARE</a></li>
                    <li><a href="#diplomas"><i class="fa-solid fa-chevron-right"></i>DIPLOMADOS Y CURSOS</a></li>
                    <li><a href="#diseño"><i class="fa-solid fa-chevron-right"></i>DISEÑO GRAFICO</a></li>
                    <li><a href="#educacion"><i class="fa-solid fa-chevron-right"></i>EDUCACION</a></li>
                    <li><a href="#"><i class="fa-solid fa-star" id="starGastronomia"></i><b id="weighGastronomia">GASTRONOMIA</b></a></li>
                    <li><a href="#idiomas"><i class="fa-solid fa-chevron-right"></i>IDIOMAS</a></li>
                    <li><a href="#investigacion"><i class="fa-solid fa-chevron-right"></i>INVESTIGATIVA Y JUDICIAL</a></li>
                    <li><a href="#industrial"><i class="fa-solid fa-chevron-right"></i>INDUSTRIAL</a></li>
                    <li><a href="#salud"><i class="fa-solid fa-chevron-right"></i>SALUD</a></li>
                    <li><a href="#salud-animal"><i class="fa-solid fa-chevron-right"></i>SALUD ANIMAL</a></li>
                    <li><a href="#servicios"><i class="fa-solid fa-chevron-right"></i>SERVICIOS GENERALES</a></li>
                </ol>
            </aside>

            <section class="main__cursos">

                <div class="secction__curso-container" id="administrativa">
                    <div class="curso__title">
                            <h2>Administrativa</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardContable, 0);
                            generarTarjetaYModal($cardVentas, 1);
                            generarTarjetaYModal($cardAduanas, 2);
                            generarTarjetaYModal($cardAdministrativo, 3);
                            generarTarjetaYModal($cardHotelera, 4);
                            generarTarjetaYModal($cardEjecutivo, 5);
                        ?>
                </div>

                <div class="secction__curso-container" id="bachillerato">
                    <div class="curso__title">
                            <h2>Bachillerato por Ciclos CLEI</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardGrado5to, 6);
                            generarTarjetaYModal($cardGrado6to7mo, 7);
                            generarTarjetaYModal($cardGrado8vo9no, 8);
                            generarTarjetaYModal($cardGrado10mo, 9);
                            generarTarjetaYModal($cardGrado11mo, 10);
                        ?>
                </div>

                <div class="secction__curso-container" id="belleza">
                    <div class="curso__title">
                            <h2>Belleza y Bienestar Corporal</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            //Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardBelleza, 11);
                            generarTarjetaYModal($cardCosmetologia, 12);
                        ?>
                </div>

                <div class="secction__curso-container" id="desarrollo">
                    <div class="curso__title">
                            <h2>Análisis y desarrollo de sistemas de la información</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            //Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardWeb, 13);
                        ?>
                </div>

                <div class="secction__curso-container" id="diplomas">
                    <div class="curso__title">
                            <h2>Diplomados y Cursos</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            //Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardLaboratorio, 14);
                            generarTarjetaYModal($cardTerapeuta, 15);
                        ?>
                </div>
                
                <div class="secction__curso-container" id="diseño">
                    <div class="curso__title">
                            <h2>Diseño</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardDiseño, 16);
                        ?>
                </div>
                
                <div class="secction__curso-container" id="educacion">
                    <div class="curso__title">
                            <h2>Educación</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardInfancia, 17);
                        ?>
                </div>

                <div class="secction__curso-container" id="idiomas">
                    <div class="curso__title">
                            <h2>Idiomas</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardIngles, 18);
                        ?>
                </div>

                <div class="secction__curso-container" id="investigacion">
                    <div class="curso__title">
                            <h2>Investigativa y Judicial</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardInvestigacion, 19);
                        ?>
                </div>

                <div class="secction__curso-container" id="industrial">
                    <div class="curso__title">
                            <h2>Industrial</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardSeguridad, 20);
                        ?>
                </div>

                <div class="secction__curso-container" id="salud">
                    <div class="curso__title">
                            <h2>Salud</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardEnfermeria, 21);
                            generarTarjetaYModal($cardOral, 22);
                            generarTarjetaYModal($cardFarmacia, 23);
                        ?>
                </div>

                <div class="secction__curso-container" id="salud-animal">
                    <div class="curso__title">
                            <h2>Salud Animal</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            // Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardVeterinaria, 24);
                        ?>
                </div>

                <div class="secction__curso-container" id="servicios">
                    <div class="curso__title">
                            <h2>Servicios Generales</h2>
                            <p>Conoce los cursos de esta area</p>
                    </div>
                    <div class="cursos__container">
                        <?php
                            //Llama a la función para generar la tarjeta y el modal
                            generarTarjetaYModal($cardServicios, 25);
                        ?>
                </div>
            </section>
        
        </div>

    </main>








    <?php include("../templates/footer.php") ?>


    <script src="../../js/menu.js"></script>
    <script src="../../js/menuLateralAreas.js"></script>





</body>
</html>