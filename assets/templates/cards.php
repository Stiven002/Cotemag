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
        if (!empty($card['semestres'])) {
            echo '<p><i class="fa-solid fa-person-chalkboard"></i> ' . $card['semestres'] . ' Semestres</p>';
        }
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
    if (!empty($card['descripcion'])) {
        if (is_array($card['descripcion'])) {
            foreach ($card['descripcion'] as $contenido) {
                echo '<p>' . $contenido . '</p>';
            }
        } else {
            echo '<p>' . $card['descripcion'] . '</p>';
        }
    }
        echo '</div>';
        // Lista de módulos
        echo '<div class="modal__modulos">';
        echo '<p>' . $card['modulos-title'] . '</p>';
        echo '<ul>';
        foreach ($card['modulos_lista'] as $modulo) {
            echo '<li>' . $modulo . '</li>';
        }
        echo '</ul>';
        //Actividades complementarias
        if (!empty($card['complementarias'])) {
            echo '<p>' . $card['complementarias-title'] . '</p>';
            echo '<ul>';
            foreach ($card['complementarias'] as $modulo) {
                echo '<li>' . $modulo . '</li>';
            }
            echo '</ul>';
        }
        //Practicas laborales
        if (!empty($card['practicas'])) {
            echo '<p>' . $card['practicas-title'] . '</p>';
            echo '<ul>';
            foreach ($card['practicas'] as $modulo) {
                echo '<li>' . $modulo . '</li>';
            }
            echo '</ul>';
        }
        //Requisitos
        echo '<p>Requisitos para matricularse</p>';
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

//Diseño grafico

$cardDiseño = array(
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
    'modulos-title' => 'Modulos',
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
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Investigacion Judicial

$cardInvestigacion = array(
    //Card
    'titulo' => 'Auxiliar en Investigación Criminalística y Judicial',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Investigacion_Judicial_1080x10801.jpeg',
    'duracion' => '1 año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Apoyan y asisten técnica, científica y operativamente el desarrollo de actividades investigativas del área judicial, criminalística y criminal. Se ocupan en el sector justicia, de bienes y servicios de carácter privado y público e investigación privada, en materia penal, disciplinaria, administrativa, comercial, industrial, civil, laboral y en prevención de actividades delictivas, entre otras..',
    'modulos-title' => 'Modulos',
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
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Seguridad y trabajo
$cardSeguridad = array(
    //Card
    'titulo' => 'Auxiliar en Salud y Seguridad en el Trabajo',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/SSGT1.jpeg',
    'duracion' => '1 año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año.',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'El Técnico Profesional en Procesos de Seguridad y Salud en el Trabajo se desempeñará en empresas de diversos sectores y tamaños, donde se implementen sistemas de seguridad y salud en el trabajo, brindando el apoyo requerido en los diferentes ámbitos de la gestión de dichos sistemas, en procura de la mejora permanente de las condiciones de trabajo para garantizar el logro de los objetivos organizacionales y el cuidado y preservación de la salud de los empleados.',
    'modulos-title' => 'Modulos',
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
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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

//Belleza Integral
$cardBelleza = array(
    //Card
    'titulo' => 'Belleza Integral',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Belleza_Integral_1080x1080_(2)1.png',
    'duracion' => '1 año y medio',
    'modulos' => 18,
    'semestres' => 3,
    //Modal
    'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
    'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Tendrá las habilidades y destrezas necesarias para desempeñarse laboralmente destacándose entre sus similares por su perfil multifacético en cualquier centro de estética y belleza, incluso de incursionar y poder ser su propia empresaria en el área.
    Tendrá habilidades en químicos, cortes, cepillados, arreglo de uñas. Será capacitado para mantener la zona de trabajo o incluso su empresa en el equipamiento de condiciones bioseguras según la normativa sanitaria vigente en centros de belleza y estética, podrá asesorar a un usuario en el cambio de imagen personal de acuerdo con las técnicas de estilismo capilar.',
    'modulos-title' => 'Modulos',
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
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Cosmetologia

$cardCosmetologia = array(
    //Card
    'titulo' => 'Cosmetología',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Cosmetologia1080x10801.png',
    'duracion' => '1 año y medio',
    'modulos' => 18,
    'semestres' => 3,
    //Modal
    'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
    'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Tendrá las habilidades y destrezas necesarias para desempeñarse laboralmente destacándose entre sus similares por su perfil multifacético en cualquier centro de estética y belleza, incluso de incursionar y poder ser su propia empresaria en el área.
    Tendrá habilidades en químicos, cortes, cepillados, arreglo de uñas. Será capacitado para mantener la zona de trabajo o incluso su empresa en el equipamiento de condiciones bioseguras según la normativa sanitaria vigente en centros de belleza y estética, podrá asesorar a un usuario en el cambio de imagen personal de acuerdo con las técnicas de estilismo capilar.',
    'modulos-title' => 'Modulos',
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
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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

//Servicios generales

$cardServicios = array(
    //Card
    'titulo' => 'SERVICIOS GENERALES, ASEO Y CAFETERÍA',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/default.jpg',
    'duracion' => '600 horas',
    'modulos' => 7,
    'semestres' => 1,
    //Modal
    'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
    'modal-duracion' => 'Duración: 7 Módulos / 1 Semestre / 600 horas',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Limpian salas de espera, pasillos, oficinas, áreas comunes, interiores de ascensores, hospitales, colegios, edificios de oficinas, instalaciones comerciales, residencias privadas y entre otros. Están empleados por hospitales, institutos de educación, oficinas, casas de familia, compañías de servicio de aseo y todos aquellos que requieran del servicio.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'SERVICIO AL CLIENTE',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS I',
        'LIMPIEZA DESFECCIÓN Y HERRAMIENTAS II',
        'MANEJO DE ALIMENTOS',
        'MANEJO DE RESIDUOS',
        'ASEO Y DESINFECCIÓN DE HABITACIONES'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Ingles
$cardIngles = array(
    //Card
    'titulo' => 'Ingles A1 y A2 en alianza con la Universidad de la Cambridge',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Ingles_1080x10801.jpeg',
    'duracion' => '10 meses',
    'modulos' => 10,
    'semestres' => 2,
    //Modal
    'nivel' => 'Técnico Laboral por Competencias Repostero Pastelero',
    'modal-duracion' => 'Duración: 10 Módulos / 2 Semestres / 10 Meses.',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'El inglés se muestra como una lengua rica en diversidad. Actualmente, se considera como lengua oficial o lengua madre en países como Reino Unido, Irlanda, USA, Canadá, Australia, Nueva Zelanda y algunos países de la costa caribe. La población mundial que habla este idioma alrededor del mundo oscila entre 300 y 400 millones de habitantes.',
    'modulos-title' => 'Modulos',
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
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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

//Auxiliar Contable


$cardContable = array(
    //Card
    'titulo' => 'Auxiliar Contable',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Auxiliar_Contable1.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,

    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Persona con capacidad de fortalecer el proceso empresarial al organizar la documentación contable y financiera, así como la contabilización de los recursos de operación, inversión y financiación organizacional. Contribuye con sus superiores en la adecuada preparación y presentación de la información contable, cumpliendo con la normatividad y legislación vigente, aplicando las Tecnologías de Información y Comunicación, estándares de calidad, de seguridad, para prestar un servicio adecuado; demostrando excelentes condiciones humanas.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS CONTABLES',
        'SERVICIO AL CLIENTE',
        'PROCESOS CONTABLES',
        'CONTABILIDAD DE COSTOS',
        'PROCESOS TRIBUTARIOS',
        'NOMINA',
        'RECAUDOS FINANCIEROS Y DEPRECIACIÓN',
        'SOFTWARE CONTABLE',
        'ADMINISTRACIÓN DE INVENTARIOS',
        'INFORMÁTICA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Auxiliar de Mercadeo y Ventas

$cardVentas = array(
    //Card
    'titulo' => 'Auxiliar de Mercadeo y Ventas',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Mercadeo_y_Ventas1.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'El auxiliar de Mercadeo y ventas podrá desempeñarse en las áreas de mercadeo, de investigación de consumidor, de investigación de mercados, de comunicación y comercial, tanto en compañías del sector real, como en empresas de servicios.
    Tendrá la capacidad, desde sus primeras experiencias profesionales, para trabajar en cargos del nivel de entrada como analista o asistente de mercadeo, marca, o producto; investigador de consumidor y de mercados y jefe de cuentas claves.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS ECONÓMICOS Y ADMINISTRATIVOS',
        'SERVICIO AL CLIENTE',
        'PLANEACIÓN Y ESTRATEGIA',
        'INFORME DE GESTIÓN',
        'INVESTIGACIÓN DE MERCADO',
        'PROCESOS DE LA VENTA',
        'INVENTARIO',
        'VITRINISMO Y MERCHANDISING',
        'MARKETING DIGITAL',
        'INFORMÁTICA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Auxiliar en Agente de Aduanas

$cardAduanas = array(
    //Card
    'titulo' => 'Auxiliar en Agente de Aduanas',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Agete_de_Aduanas_1080x10801.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'descripcion' => 'Adaptarse a los cambios del Estado moderno para facilitar la acción y el cambio en los procesos aduaneros y el comercio exterior.
    Asesorar deforma técnica y administrativamente los procesos que se desarrollan en el Sistema Aduanero Nacional, en el Comercio Exterior y en la Administración Pública en general.
    Ejecutar y gestionar el desarrollo del Sistema Aduanero Nacional y el Comercio Exterior, como un servicio del sector público que satisfaga adecuadamente los requerimientos del Estado del sector privado y de entidades internacionales.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'NORMATIVA ADUANERA',
        'SERVICIO AL CLIENTE',
        'FUNDAMENTOS ECONÓMICOS Y ADMINISTRATIVOS',
        'MANIPULACIÓN DE MERCANCÍA',
        'INVENTARIO',
        'EXPORTACION E IMPORTACION - I',
        'EXPORTACION E IMPORTACION - II',
        'LOGÍSTICA',
        'ALMACENAMIENTO',
        'INFORMÁTICA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
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


//Auxiliar Administrativo

$cardAdministrativo = array(
    //Card
    'titulo' => 'Auxiliar Administrativo',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Administracion_empresarial1.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Atender clientes internos y externos, y entregar información de carácter general.
    Confeccionar documentación según modelos oficiales de la empresa
    Decepcionar, registrar. Archivar y tramitar las solicitudes de los clientes internos y externos.
    Solicitar y reponer materiales necesarios para el funcionamiento de la unidad correspondiente Registrar, procesar y distribuir información Elaborar la correspondencia de la organización, según modelos oficiales de la empresa.
    Realizar las gestiones financieras y efectuar los registros contables.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS CONTABLES',
        'FUNDAMENTOS ECONÓMICOS Y ADMINISTRATIVOS',
        'INFORMES DE GESTIÓN',
        'PLANEACIÓN Y ESTRATEGIA',
        'ADMINISTRACIÓN DE DOCUMENTOS',
        'NÓMINA',
        'ORGANIZACIÓN DE EVENTOS ADMINISTRATIVOS',
        'INVENTARIO',
        'SERVICIO AL CLIENTE',
        'INFORMÁTICA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Auxiliar en Recepción Hotelera

$cardHotelera = array(
    //Card
    'titulo' => 'Auxiliar en Recepción Hotelera',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Recepcion_Hotelera_1080x10801.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Hotelería y Turismo es un profesional capaz de diseñar, desarrollar, administrar y comercializar productos turísticos de nivel internacional. Debe recibir y atender clientes multiculturales, focalizando su quehacer en satisfacer sus actuales y potenciales necesidades, de acuerdo a los más altos estándares de calidad en servicio.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS CONTABLES',
        'ARCHIVO',
        'FUNDAMENTOS ECONÓMICOS Y ADMINISTRATIVOS',
        'FUNDAMENTOS MERCADEO',
        'TEORÍA GENERAL DEL TURISMO',
        'SERVICIO AL CLIENTE',
        'SERVICIO DE RECEPCIÓN, RESERVA DE HABITACIONES, FACTURACIÓN Y CAJA',
        'ORGANIZACIÓN DE EVENTOS - HOTELERÍA',
        'PROCESOS BÁSICOS PARA LA PRESENTACIÓN DEL SERVICIO',
        'INFORMÁTICA',
        'PRÁCTICA FORMATIVA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Auxiliar en Secretariado Ejecutivo

$cardEjecutivo = array(
    //Card
    'titulo' => 'Auxiliar en Secretariado Ejecutivo',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Secretariado_ejecutivo1.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'El auxiliar en secretariado ejecutivo es una persona competente en la ejecución de procesos de oficina a través del dominio de la técnica y la aplicación de las normas vigentes encaminadas a brindar un óptimo servicio al cliente interno y externo.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS CONTABLES',
        'FUNDAMENTOS ECONÓMICOS Y ADMINISTRATIVOS',
        'SERVICIO AL CLIENTE',
        'INFORME DE GESTIÓN',
        'PRODUCCIÓN DE DOCUMENTOS',
        'ADMINISTRACIÓN DE DOCUMENTOS I',
        'ADMINISTRACIÓN DE DOCUMENTOS II',
        'TÉCNICAS DE OFICINA',
        'EXPRESIÓN ORAL Y ESCRITA',
        'INFORMÁTICA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Bachillerato Por Ciclos CLEI II - Grado 5to

$cardGrado5to = array(
    //Card
    'titulo' => 'Bachillerato Por Ciclos CLEI II - Grado 5to',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/CELI_II-51.jpeg',
    'duracion' => '6 Meses',
    'modulos' => 6,
    'semestres' => 1,
    //Modal
    'nivel' => 'CLEI II - Grado 5to Nivel: Primaria',
    'modal-duracion' => 'Duración: 6 Módulos / 1 Semestre / 6 meses',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'BIOLOGIA-5',
        'ESPAÑOL-5',
        'MATEMATICAS-5',
        'SOCIALES-5',
        'INGLES-5',
        'INFORMATICA-5',
        'ETICA Y RELIGIÓN-5',
        'OLIMPIADAS DEPORTIVAS'
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


//Bachillerato Por Ciclos CLEI III - Grado 6to y 7mo

$cardGrado6to7mo = array(
    //Card
    'titulo' => 'Bachillerato Por Ciclos CLEI III - Grado 6to y 7mo',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/CLEI_III-6y71.jpeg',
    'duracion' => '6 Meses',
    'modulos' => 6,
    'semestres' => 1,
    //Modal
    'nivel' => 'CLEI IV - Grado 6vo y 7no',
    'modal-duracion' => 'Duración: 6 Módulos / 1 Semestre / 6 meses',
    'modulos-title' => 'Modulos 6to',
    'modulos_lista' => array(
        'BIOLOGIA-III-A(6)',
        'ESPAÑOL-III-A(6)',
        'MATEMATICAS-III-A(6)',
        'SOCIALES-III-A(6)',
        'INGLES-III-A(6)',
        'INFORMATICA-III-A(6)'
    ),
    'complementarias-title' => 'Módulos 7mo',
    'complementarias' => array(
        'BIOLOGIA-III-B(7)',
        'ESPAÑOL-III-B(7)',
        'MATEMATICAS-III-B(7)',
        'SOCIALES-III-B(7)',
        'INGLES-III-B(7)',
        'INFORMATICA-III-B(7)'
    ),
    'practicas-title' => 'Materias Transversales',
    'practicas' => array(
        'DEPORTE Y CULTURA-6y7',
        'ETICA Y RELIGIÓN-6y7'
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


//Bachillerato Por Ciclos CLEI IV - Grado 8to y 9mo

$cardGrado8vo9no = array(
    //Card
    'titulo' => 'Bachillerato Por Ciclos CLEI IV - Grado 8to y 9mo',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/CLEI_IV-8y91.jpeg',
    'duracion' => '6 Meses',
    'modulos' => 6,
    'semestres' => 1,
    //Modal
    'nivel' => 'CLEI IV - Grado 8vo y 9no',
    'modal-duracion' => 'Duración: 6 Módulos / 1 Semestre / 6 meses',
    'modulos-title' => 'Modulos 8vo',
    'modulos_lista' => array(
        'BIOLOGIA-IV-A(8)',
        'ESPAÑOL-IV-A(8)',
        'MATEMATICAS-IV-A(8)',
        'SOCIALES-IV-A(8)',
        'INGLES-IV-A(8)',
        'INFORMATICA-IV-A(8)'
    ),
    'complementarias-title' => 'Módulos 9no',
    'complementarias' => array(
        'BIOLOGIA-IV-B(9)',
        'ESPAÑOL-IV-B(9)',
        'MATEMATICAS-IV-B(9)',
        'SOCIALES-IV-B(9)',
        'INGLES-IV-B(9)',
        'INFORMATICA-IV-B(9)'
    ),
    'practicas-title' => 'Materias Transversales',
    'practicas' => array(
        'OLIMPIADAS DEPORTIVAS-8y9',
        'ETICA Y RELIGIÓN-8y9'
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


//Bachillerato Por Ciclos CLEI V - Grado 10mo

$cardGrado10mo = array(
    //Card
    'titulo' => 'Bachillerato Por Ciclos CLEI V - Grado 10mo',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/CLEI_V-101.jpeg',
    'duracion' => '6 Meses',
    'modulos' => 6,
    'semestres' => 1,
    //Modal
    'nivel' => 'CLEI V - Grado 10mo',
    'modal-duracion' => 'Duración: 6 Módulos / 1 Semestre / 6 meses',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'QUIMICA-10',
        'FISICA-10',
        'ESPAÑOL-10',
        'MATEMATICAS-10',
        'FILOSOFIA-10',
        'INGLES-10'
    ),
    'practicas-title' => 'Materias Transversales',
    'practicas' => array(
        'OLIMPIADAS DEPORTIVAS-10',
        'ETICA Y RELIGIÓN-10'
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


//Bachillerato Por Ciclos CLEI VI - Grado 11mo

$cardGrado11mo = array(
    //Card
    'titulo' => 'Bachillerato Por Ciclos CLEI VI - Grado 11mo',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/CLEI_VI-111.jpeg',
    'duracion' => '6 Meses',
    'modulos' => 6,
    'semestres' => 1,
    //Modal
    'nivel' => 'CLEI V - Grado 11mo',
    'modal-duracion' => 'Duración: 6 Módulos / 1 Semestre / 6 meses',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'QUIMICA-11',
        'FISICA-11',
        'ESPAÑOL-11',
        'MATEMATICAS-11',
        'FILOSOFIA-11',
        'INGLES-11'
    ),
    'practicas-title' => 'Materias Transversales',
    'practicas' => array(
        'OLIMPIADAS DEPORTIVAS-11',
        'ETICA Y RELIGIÓN-11'
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


//Desarrollo Web

$cardWeb = array(
    //Card
    'titulo' => 'Desarrollo Web',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Desarrollo_Web_1080x10801.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Estarás en capacidad de desarrollar aplicativos tipo web, utilizando herramientas, metodologías y lenguajes de programación requeridos por el entorno productivo, demostrando respeto, orden y creatividad en su desempeño.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'INTRODUCCIÓN A INFORMÁTICA Y COMPUTACIÓN',
        'GIT Y GITHUB - (CONTROL DE VERSIONES)',
        'HTML - (FRONTEND) - (LENGUAJE DE ETIQUETAS)',
        'CSS-I -(FRONTEND) - (ESTILOS DE HOJA EN CASCADAS)',
        'CSS-II -(FRONTEND) - (ESTILOS DE HOJA EN CASCADAS)',
        'JAVASCRIPT-I- (FRONTEND) - (PROGRAMACIÓN-I)',
        'JAVASCRIPT - II - (FRONTEND) - (PROGRAMACIÓN - II)',
        'JAVASCRIPT -III - (FRONTEND) - (PROGRAMACIÓN -III)',
        'PHP AND SQL - I - (BACKEND)',
        'PHP AND SQL - II - (BACKEND)'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III'
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Diplomado de Laboratorio Clinico

$cardLaboratorio = array(
    //Card
    'titulo' => 'Diplomado de Laboratorio Clinico',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Laboratorio_Clinico_1080x10801.jpeg',
    'duracion' => '9 Meses',
    'modulos' => 9,
    //Modal
    'nivel' => 'Nivel: Diplomado de Laboratorio Clínico',
    'modal-duracion' => 'Duración: 9 Módulos / 9 meses',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'El auxiliar de laboratorio se encuentra en colaboración permanente con el profesional bioquímico, se encarga de realizar tareas de preparación de muestras, reactivos y cultivos. Es decir que contribuye, en la medida de sus competencias, con el ejercicio de los análisis, la preparación y desarrollo de las diferentes etapas de la actividad que se lleva a cabo en un laboratorio.

    En su rutina de trabajo diario, el auxiliar de laboratorio se ocupa de conservar, limpiar y esterilizar todo el material que se utiliza en el laboratorio. Elabora soluciones químicas, clasifica las muestras de sangre y tejidos, las etiqueta y prepara los medios de cultivos, reactivos y soluciones.
    
    Otra de las funciones del auxiliar de laboratorio consiste en realizar el registro de los pacientes y la transcripción del resultado de los análisis. También suele dar indicaciones y sugerencias a los pacientes sobre la obtención de las muestras para analizar.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'TOMA DE MUESTRA',
        'BIOSEGURIDAD DE LABORATORIO',
        'PRUEBA DX',
        'MICROBIOLOGÍA',
        'UROANÁLISIS - PERFIL RENAL',
        'PRUEBAS ESPECIALES - LAB CLÍNICO'
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


//Masaje y Rehabilitación Terapéutica

$cardTerapeuta = array(
    //Card
    'titulo' => 'Masaje y Rehabilitación Terapéutica',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Masaje_y_Rehabilitacion_Terapeutica_1080x10801.jpeg',
    'duracion' => '9 Meses',
    'modulos' => 9,
    //Modal
    'nivel' => 'Nivel: Diplomado de Masaje y Rehabilitación Física',
    'modal-duracion' => 'Duración: 9 Módulos / 9 meses',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'BIOSEGURIDAD',
        'DERMATOLOGÍA',
        'MASAJE I',
        'MASAJE II',
        'MASAJE III',
        'MASAJE IV'
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


//Auxiliar en Atención a la Primera Infancia

$cardInfancia = array(
    //Card
    'titulo' => 'Auxiliar en Atención a la Primera Infancia',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Api1.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Como Técnico Laboral en Atención Integral a la Primera Infancia estarás en capacidad de cuidar y atender niños de edad preescolar en sus espacios recreativos y educativos, suministrarles alimentos y loncheras, hacer acompañamiento en sus juegos y asistir al profesor en la programación de clases, aportando interés al cuidado de los derechos de la primera infancia con especial énfasis en el desarrollo integral del niño basado en la construcción de autonomía y competencias a través de proyectos y otras técnicas didácticas.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTACIÓN - I',
        'FUNDAMENTACIÓN - II',
        'LÚDICA Y RECREACIÓN - I',
        'LÚDICA Y RECREACIÓN - II',
        'DESARROLLO INTEGRAL',
        'PLANEACIÓN ACADÉMICA',
        'PEDAGOGÍA EDUCATIVA',
        'COMUNICACIÓN INCLUSIVA',
        'INFORMÁTICA',
        'SERVICIO AL CLIENTE'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
    ),
    'practicas-title' => 'Practicas Laborales',
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


//Auxiliar de Enfermeria

$cardEnfermeria = array(
    //Card
    'titulo' => 'Auxiliar de Enfermeria',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Enfermeria.jpeg',
    'duracion' => '1 Año y medio',
    'modulos' => 18,
    'semestres' => 3,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Proveen cuidados de enfermería a pacientes bajo la orientación de enfermeros, médicos y otros miembros del equipo interdisciplinario de salud. Están empleados por hospitales, clínicas, consultorios y otras instituciones del cuidado de la salud.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS BÁSICOS EN SALUD',
        'MORFOLOGÍA (ANATOMIA)',
        'PROCEDIMIENTOS BÁSICOS DE SALUD',
        'BIOSEGURIDAD Y MANEJO DE HERIDAS',
        'PROMOCIÓN Y MANTENIMIENTO DE LA SALUD',
        'MEDIOS DIAGNÓSTICOS',
        'ASISTENCIA DE PRIMEROS AUXILIOS',
        'ADMINISTRACIÓN DE MEDICAMENTOS I',
        'ADMINISTRACIÓN DE MEDICAMENTOS II',
        'ATENCIÓN PREHOSPITALARIA',
        'ACTIVIDADES BÁSICAS DE ENFERMERÍA I',
        'ACTIVIDADES BÁSICAS DE ENFERMERÍA II',
        'CONCEPTO DE ATENCIÓN MATERNO INFANTIL',
        'PEDIATRÍA',
        'PACIENTE CRÍTICO (UCI)',
        'MÉDICO QUIRÚRGICO'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III',
    ),
    'practicas-title' => 'Practicas Laborales',
    'practicas' => array(
        '1080 Horas de desarrollo',
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


//Auxiliar en Salud Oral

$cardOral = array(
    //Card
    'titulo' => 'Auxiliar en Salud Oral',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Salud_Oral_1080x10801.jpeg',
    'duracion' => '1 Año y medio',
    'modulos' => 18,
    'semestres' => 3,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Auxiliar en Salud Oral estarás en capacidad de apoyar al profesional en todos los procedimientos específicos de la odontología como recepción de pacientes, organización del instrumental, preparación de materiales dentales y control de citas. Además brindarás capacitación a las personas sobre el cuidado de la salud oral, aportando especial interés por el cuidado integral al individuo, la familia y la comunidad con un énfasis en la Promoción y la Prevención.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS BÁSICOS EN SALUD',
        'MORFOLOGÍA',
        'PROCEDIMIENTOS BÁSICOS DE SALUD',
        'BIOSEGURIDAD',
        'ADMISIÓN Y ATENCIÓN AL USUARIO',
        'BIOMATERIALES',
        'FUNDAMENTOS EN SALUD ORAL',
        'ANATOMÍA CABEZA Y CUELLO',
        'INSTRUMENTAL',
        'EQUIPOS ODONTOLÓGICOS',
        'PROMOCIÓN Y PREVENCIÓN EN SALUD ORAL',
        'PERIODONCIA',
        'SEMIOLOGÍA',
        'PATOLOGÍA ORAL BÁSICA',
        'ODONTOPEDIATRÍA',
        'MICROBIOLOGÍA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III',
    ),
    'practicas-title' => 'Practicas Laborales',
    'practicas' => array(
        '1080 Horas de desarrollo',
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


//Auxiliar en Farmacia

$cardFarmacia = array(
    //Card
    'titulo' => 'Auxiliar en Farmacia',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Salud_Oral_1080x10801.jpeg',
    'duracion' => '1 Año y medio',
    'modulos' => 18,
    'semestres' => 3,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 18 Módulos / 3 Semestres / 1 Año y medio / 1.800 horas',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'Auxiliar en Servicios Farmacéuticos estarás en capacidad de realizar labores de recepción, despacho y bodegaje de medicamentos, atender al usuario del servicio farmacéutico, manejar inventarios y dispensar las fórmulas ordenadas por el profesional, aportando la capacidad de mejorar y racionalizar los procedimientos que se realizan en droguerías y farmacias, con énfasis en la Dispensación.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'FUNDAMENTOS BÁSICOS EN SALUD',
        'MORFOLOGÍA (ANATOMÍA)',
        'PROCEDIMIENTOS BÁSICOS DE SALUD',
        'BIOSEGURIDAD Y MANEJO DE HERIDAS',
        'CONCEPTO BÁSICO DE FARMACIA',
        'SERVICIO AL CLIENTE',
        'ASISTENCIA DE PRIMEROS AUXILIOS',
        'PRODUCTOS FARMACÉUTICOS I',
        'PRODUCTOS FARMACÉUTICOS II',
        'LEGISLACIÓN FARMACÉUTICA',
        'PROCESO DE DISPENSACIÓN I',
        'PROCESO DE DISPENSACIÓN II',
        'ADMINISTRACIÓN DE MEDICAMENTOS',
        'RECAUDO Y CAJA',
        'PROCESO DE LA VENTA',
        'INVENTARIO'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'SEMINARIO - III',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
        'TALLER TÉCNICO - III',
    ),
    'practicas-title' => 'Practicas Laborales',
    'practicas' => array(
        '1080 Horas de desarrollo',
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


//Auxiliar en Clínica Veterinaria

$cardVeterinaria = array(
    //Card
    'titulo' => 'Auxiliar en Clínica Veterinaria',
    'imagen' => 'https://www.cotemag.edu.co//uploads/images/system/private/servicios/Veterianaria1.jpeg',
    'duracion' => '1 Año',
    'modulos' => 12,
    'semestres' => 2,
    //Modal
    'nivel' => 'Nivel: Técnico Laboral por competencias',
    'modal-duracion' => 'Duración: 12 Módulos / 2 Semestres / 1 Año',
    'practica_laboral' => 'Prácticas Laborales: Incluidas',
    'descripcion' => 'El auxiliar da soporte a los veterinarios en la clínicas, en la planificación del trabajo y la atención a los animales, lo que incluye la exploración de la condición del animal, la administración de medicamentos y otros tratamientos, la alimentación, la comodidad y la higiene del animal, y el mantenimiento de un registro cuidadoso de cada caso.',
    'modulos-title' => 'Modulos',
    'modulos_lista' => array(
        'ÉTICA Y VALORES TÉCNICO',
        'FUNDAMENTOS DE SEGURIDAD Y SALUD EN EL TRABAJO',
        'SANIDAD VETERINARIA',
        'BIENESTAR ANIMAL',
        'NUTRICIÓN ANIMAL',
        'ADMINISTRACIÓN DE MEDICAMENTOS',
        'ACICALAMIENTO',
        'PELUQUERÍA ANIMAL',
        'COMPORTAMIENTO ANIMAL',
        'SERVICIO AL CLIENTE',
        'ALOJAMIENTO ANIMAL',
        'INFORMÁTICA'
    ),
    'complementarias-title' => 'Actividades Complementarias',
    'complementarias' => array(
        'DEPORTE Y CULTURA TÉCNICO',
        'SEMINARIO - I',
        'SEMINARIO - II',
        'TALLER TÉCNICO - I',
        'TALLER TÉCNICO - II',
    ),
    'practicas-title' => 'Practicas Laborales',
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



?>
