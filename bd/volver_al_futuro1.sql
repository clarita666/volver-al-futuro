-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2025 a las 21:03:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `volver_al_futuro1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `id_credito` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rol` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_tiempo`
--

CREATE TABLE `linea_tiempo` (
  `id_evento` int(11) NOT NULL,
  `año` varchar(10) NOT NULL,
  `titulo_evento` varchar(150) DEFAULT NULL,
  `historia` text DEFAULT NULL,
  `ubicacion` text DEFAULT NULL,
  `apariciones` text DEFAULT NULL,
  `imagen_principal` varchar(255) DEFAULT NULL,
  `id_pelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `linea_tiempo`
--

INSERT INTO `linea_tiempo` (`id_evento`, `año`, `titulo_evento`, `historia`, `ubicacion`, `apariciones`, `imagen_principal`, `id_pelicula`) VALUES
(1, '1885', 'Doc atrapado en el Viejo Oeste', 'Después de que un rayo daña el DeLorean, Doc Brown queda atrapado en 1885. Marty viaja para rescatarlo, enfrentándose a Buford \"Mad Dog\" Tannen y conociendo a Clara Clayton.', 'Hill Valley en el Viejo Oeste: el saloon, las vías del tren y la granja McFly.', 'Volver al Futuro III', '../img/linea_tiempo/1885/1885.webp', 3),
(2, '1955', 'Marty conoce a sus padres adolescentes', 'Marty viaja accidentalmente a 1955 y conoce a sus padres jóvenes. Su intervención pone en riesgo su propia existencia, y debe lograr que se enamoren para restaurar su línea temporal.', 'Hill Valley de 1955: la escuela, el baile “Enchantment Under the Sea” y la torre del reloj.', 'Volver al Futuro I, Volver al Futuro II', '../img/linea_tiempo/1955/1955.avif', 1),
(3, '1985', 'Línea temporal original', 'Es la época donde vive Marty al comienzo de la historia. Su familia tiene problemas: George es débil, Biff lo maltrata y la vida en Hill Valley es rutinaria.', 'Hill Valley en 1985: casa de los McFly, Twin Pines Mall y escuela secundaria.', 'Volver al Futuro I', '../img/linea_tiempo/1985/1985.webp', 1),
(4, '1985 A', 'El futuro oscuro de Biff', 'Tras recibir el almanaque en 1955, Biff se vuelve multimillonario y cambia el curso de la historia. Hill Valley se convierte en una ciudad corrupta y decadente.', 'Hill Valley dominado por el casino de Biff y su torre.', 'Volver al Futuro II', '../img/linea_tiempo/1985A/1985A.png', 2),
(5, '1985 A-1', 'Línea temporal parcialmente restaurada', 'Después de recuperar el almanaque, Doc y Marty logran encaminar el futuro. Este es un breve punto de equilibrio antes de regresar a 1955 para corregir todo definitivamente.', 'Hill Valley restaurado parcialmente tras los eventos del almanaque.', 'Volver al Futuro II', '../img/linea_tiempo/1985A-1/1985A-1.webp', 2),
(6, '1985 B', 'El futuro corregido y feliz', 'Línea corregida donde George McFly es exitoso, Biff trabaja para él y la familia vive una vida mejor. Esta es la versión positiva del 1985 que se muestra al final de la primera película.', 'Hill Valley mejorado: casa McFly renovada y ambiente optimista.', 'Volver al Futuro I (final)', '../img/linea_tiempo/1985B/1985B.jpeg', 1),
(7, '1986 G', 'La serie animada y nuevas aventuras', 'Línea correspondiente a la serie animada, donde Doc, Clara, Marty y los hijos de Doc (Jules y Verne) viven aventuras a través del tiempo. Es considerada no canónica por algunos fans.', 'Hill Valley y distintas épocas históricas representadas en la serie.', 'Serie animada (1991–1992)', '../img/linea_tiempo/1986A/1986A.webp', 2),
(8, '2015', 'El futuro con hoverboards y autos voladores', 'Marty y Doc viajan al futuro para evitar que el hijo de Marty destruya su vida. Allí descubren una sociedad avanzada con hoverboards, autos voladores y tecnología increíble.', 'Hill Valley futurista con autopistas aéreas y cafés automatizados.', 'Volver al Futuro II', '../img/linea_tiempo/2015/2015.webp', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `año` year(4) DEFAULT NULL,
  `director` varchar(150) DEFAULT NULL,
  `productor` varchar(150) DEFAULT NULL,
  `escritor` varchar(150) DEFAULT NULL,
  `duracion` varchar(20) DEFAULT NULL,
  `genero` varchar(100) DEFAULT 'Ciencia ficción',
  `resumen` text DEFAULT NULL,
  `imagen_principal` varchar(255) DEFAULT NULL,
  `url_video1` varchar(255) DEFAULT NULL,
  `url_video2` varchar(255) DEFAULT NULL,
  `url_video3` varchar(255) DEFAULT NULL,
  `galeria_imagen1` varchar(255) DEFAULT NULL,
  `galeria_imagen2` varchar(255) DEFAULT NULL,
  `galeria_imagen3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `año`, `director`, `productor`, `escritor`, `duracion`, `genero`, `resumen`, `imagen_principal`, `url_video1`, `url_video2`, `url_video3`, `galeria_imagen1`, `galeria_imagen2`, `galeria_imagen3`) VALUES
(1, 'Volver al Futuro', '1985', 'Robert Zemeckis', 'Bob Gale', 'Robert Zemeckis y Bob Gale', '116 min', 'Ciencia ficción / Aventura', 'Marty McFly, un adolescente común de la ciudad de Hill Valley, mantiene una amistad poco usual con el excéntrico científico Emmett \"Doc\" Brown. Una noche, Doc le muestra su más grande invento: una máquina del tiempo construida dentro de un auto DeLorean. \r\nDurante una demostración, Marty se ve obligado a escapar de unos criminales y accidentalmente viaja al año 1955. Allí conoce a sus propios padres cuando eran adolescentes, alterando sin querer el curso del tiempo. \r\nPara regresar al futuro, Marty deberá conseguir la ayuda de un joven Doc y asegurarse de que sus padres se enamoren, o desaparecerá para siempre.', '../img/Pelicula/vaf1.jpg', 'https://www.youtube.com/embed/qvsgGtivCgs', 'https://www.youtube.com/embed/qvsgGtivCgs', 'https://www.youtube.com/embed/qvsgGtivCgs', '../img/Pelicula/vaf1/escena1.jpeg', '../img/Pelicula/vaf1/escena2.webp', '../img/Pelicula/vaf1/escena3.jpg'),
(2, 'Volver al Futuro II', '1989', 'Robert Zemeckis', 'Bob Gale', 'Robert Zemeckis y Bob Gale', '108 min', 'Ciencia ficción / Aventura', 'Tras su primera aventura temporal, Marty McFly y el Dr. Emmett Brown viajan al futuro, al año 2015, para evitar un terrible destino a los hijos de Marty. \r\nSin embargo, un simple error cambia por completo la línea temporal: Biff Tannen, el abusivo rival de Marty, consigue un almanaque deportivo que le permite volverse millonario y dominar Hill Valley. \r\nAhora, Marty y Doc deben regresar a 1955 una vez más para impedir que Biff se apodere del futuro. \r\nEntre autos voladores, patinetas flotantes y versiones alternas de sí mismos, los dos amigos enfrentan su desafío más complejo: restaurar el equilibrio del tiempo sin quedar atrapados en el pasado.', '../img/Pelicula/vaf2.jpg', 'https://www.youtube.com/embed/mdV7CGyVXlk', 'https://www.youtube.com/embed/mdV7CGyVXlk', 'https://www.youtube.com/embed/mdV7CGyVXlk', '../img/Pelicula/vaf2/escena1.png', '../img/Pelicula/vaf2/escena2.webp', '../img/Pelicula/vaf2/escena3.png'),
(3, 'Volver al Futuro III', '1990', 'Robert Zemeckis', 'Bob Gale', 'Robert Zemeckis y Bob Gale', '118 min', 'Ciencia ficción / Western', 'Después de los eventos de la segunda película, Marty descubre que su amigo el Dr. Emmett Brown quedó atrapado en el año 1885, en pleno Viejo Oeste. \r\nCon la ayuda de la tecnología disponible en 1955, Marty viaja al pasado para rescatarlo. Pero el DeLorean está averiado y no hay combustible suficiente para regresar al futuro. \r\nMientras intentan reparar el vehículo, Doc se enamora de Clara Clayton, una maestra del pueblo, lo que pone en duda su deseo de volver. \r\nEntre duelos, locomotoras y persecuciones a caballo, Marty y Doc deben decidir entre el deber de regresar o el sueño de quedarse en una época donde el tiempo parece haberse detenido.', '../img/Pelicula/vaf3.jpg', 'https://www.youtube.com/embed/3C8c3EoEfw4', 'https://www.youtube.com/embed/3C8c3EoEfw4', 'https://www.youtube.com/embed/3C8c3EoEfw4', '../img/Pelicula/vaf3/escena1.png', '../img/Pelicula/vaf3/escena2.png', '../img/Pelicula/vaf3/escena3.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id_personaje` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `alias` varchar(150) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `ocupacion` varchar(100) DEFAULT NULL,
  `imagen_principal` varchar(255) DEFAULT NULL,
  `id_pelicula` int(11) DEFAULT NULL,
  `galeria_imagen1` varchar(255) DEFAULT NULL,
  `galeria_imagen2` varchar(255) DEFAULT NULL,
  `galeria_imagen3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id_personaje`, `nombre`, `alias`, `fecha_nacimiento`, `descripcion`, `ocupacion`, `imagen_principal`, `id_pelicula`, `galeria_imagen1`, `galeria_imagen2`, `galeria_imagen3`) VALUES
(1, 'Marty McFly', 'Calvin Klein', '1968-06-12', 'Un adolescente rebelde pero de buen corazón. Le apasiona la música, el skate y sueña con tener una camioneta 4x4. Accidentalmente viaja a 1955 y debe asegurarse de que sus padres se enamoren para no desaparecer.', 'Estudiante de secundaria', '../img/Personajes/marty_mcflay1.gif', 1, NULL, NULL, NULL),
(2, 'Dr. Emmett Brown', 'Doc', '1914-08-29', 'Inventor excéntrico y genio incomprendido. Creador del DeLorean, una máquina del tiempo revolucionaria. Su lema es: “¡El futuro no está escrito!”', 'Científico e inventor', '../img/Personajes/doc_brown.gif', 1, NULL, NULL, NULL),
(3, 'George McFly', NULL, '1938-04-01', 'Padre de Marty, tímido y con baja autoestima en 1955. Gracias a la intervención de su hijo, gana confianza y cambia su destino.', 'Empleado de oficina / Escritor', '../img/Personajes/george_mcfly.gif', 1, NULL, NULL, NULL),
(4, 'Lorraine Baines', NULL, '1938-05-04', 'Madre de Marty, en su juventud se enamora de él sin saber quién es realmente. Representa el espíritu romántico de los años 50.', 'Ama de casa', '../img/Personajes/lorraine_baines.gif', 1, NULL, NULL, NULL),
(5, 'Biff Tannen', NULL, '1938-03-26', 'Bravucón y abusivo rival de George McFly. En 1955 acosa a Lorraine y termina humillado tras un golpe de George.', 'Matón / Mecánico', '../img/Personajes/biff_tannen.gif', 1, NULL, NULL, NULL),
(6, 'Jennifer Parker', NULL, '1968-08-15', 'Novia de Marty. Representa la estabilidad y los sueños del futuro. Su relación con Marty es constante a lo largo de la trilogía.', 'Estudiante', '../img/Personajes/jennifer_parker.gif', 1, '../img/Personajes/jennifer_parker1.jpg', '../img/Personajes/jennifer_parker2.jpg', '../img/Personajes/jennifer_parker3.jpg'),
(7, 'Goldie Wilson', NULL, '1935-11-19', 'Empleado en el café de Hill Valley en 1955. Inspirado por Marty, decide postularse a alcalde y logra su sueño en el futuro.', 'Empleado de cafetería / Alcalde', '../img/Personajes/goldie_wilson.gif', 1, NULL, NULL, NULL),
(8, 'Strickland', 'Director Strickland', NULL, 'El estricto director de la escuela secundaria de Hill Valley. No tolera las excusas ni la pereza, siempre reprende a Marty.', 'Director escolar', '../img/Personajes/strickland.gif', 1, NULL, NULL, NULL),
(9, 'Marty McFly (Futuro)', NULL, '1968-06-12', 'La versión de Marty en 2015 es un hombre frustrado que perdió sus sueños debido a malas decisiones. Su yo más joven intenta cambiar ese destino.', 'Empleado corporativo', '../img/Personajes/marty2.gif', 2, NULL, NULL, NULL),
(10, 'Biff Tannen (Viejo)', NULL, '1938-03-26', 'Una versión anciana y codiciosa de Biff en el 2015, que usa el almanaque deportivo para hacerse rico y dominar Hill Valley.', 'Empresario corrupto', '../img/Personajes/biff_tannen_viejo.gif', 2, NULL, NULL, NULL),
(11, 'Griff Tannen', NULL, '2000-09-07', 'Nieto de Biff Tannen. Violento y temperamental, lidera una pandilla en el año 2015. Enfrenta a Marty Jr. durante la famosa persecución del hoverboard.', 'Delincuente juvenil', '../img/Personajes/griff_tannen.gif', 2, NULL, NULL, NULL),
(12, 'Marty McFly Jr.', NULL, '1998-03-12', 'Hijo de Marty y Jennifer. Ingenuo y fácilmente manipulable, casi arruina el futuro de la familia McFly.', 'Estudiante', '../img/Personajes/marty_mcflay_jr.gif', 2, NULL, NULL, NULL),
(13, 'Marlene McFly', NULL, '1999-07-18', 'Hija de Marty y Jennifer en el año 2015. Es madura y crítica con su hermano, pero se preocupa por su familia.', 'Estudiante', '../img/Personajes/merlene_mcfly.gif', 2, NULL, NULL, NULL),
(14, 'Doc Brown (2015)', NULL, '1914-08-29', 'Versión rejuvenecida del científico gracias a una cirugía del futuro. Sigue siendo brillante y excéntrico, con una profunda fe en la ciencia y el destino.', 'Inventor', '../img/Personajes/doc_brown2.gif', 2, NULL, NULL, NULL),
(15, 'Needles', NULL, '1968-02-09', 'Compañero de Marty que lo incita a tomar decisiones impulsivas, tanto en 1985 como en el futuro.', 'Colega de trabajo', '../img/Personajes/needles.gif', 2, NULL, NULL, NULL),
(16, 'Doc Brown (1885)', NULL, '1914-08-29', 'Doc se establece en el Viejo Oeste tras quedar atrapado en 1885. Vive como herrero y finalmente se enamora de Clara Clayton.', 'Herrero / Inventor', '../img/Personajes/doc_brown3.gif', 3, NULL, NULL, NULL),
(17, 'Marty McFly (1885)', 'Clint Eastwood', '1968-06-12', 'Marty viaja al pasado para rescatar a Doc. En 1885 adopta el nombre de “Clint Eastwood” y debe enfrentarse a Buford “Mad Dog” Tannen.', 'Viajero temporal', '../img/Personajes/marty3.gif', 3, NULL, NULL, NULL),
(18, 'Clara Clayton', NULL, '1855-03-08', 'Maestra de Hill Valley en 1885. Inteligente, culta y apasionada por la astronomía. Se enamora de Doc Brown, cambiando el rumbo de su vida.', 'Maestra', '../img/Personajes/clara_clayton.gif', 3, NULL, NULL, NULL),
(19, 'Buford Tannen', 'Mad Dog', '1850-10-02', 'Ancestro de Biff. Un forajido peligroso que aterroriza Hill Valley. Enfrenta a Marty en un duelo legendario.', 'Bandido / Vaquero', '../img/Personajes/buford_tannen.gif', 3, NULL, NULL, NULL),
(20, 'Seamus McFly', NULL, '1856-05-21', 'Tatarabuelo de Marty. Amable y valiente, vive con su esposa Maggie en una granja. Representa la nobleza del linaje McFly.', 'Granjero', '../img/Personajes/seamus_mcfly.gif', 3, NULL, NULL, NULL),
(21, 'Maggie McFly', NULL, '1858-10-17', 'Tatarabuela de Marty, esposa de Seamus. Tiene un fuerte carácter y una actitud protectora hacia su familia.', 'Granjera', '../img/Personajes/maggie_mcfly.gif', 3, NULL, NULL, NULL),
(22, 'Marshal Strickland', NULL, '1830-04-02', 'Antepasado del director Strickland, es el sheriff de Hill Valley en 1885. Duro y honesto, intenta mantener la ley en un pueblo salvaje.', 'Sheriff', '../img/Personajes/marshal.gif', 3, NULL, NULL, NULL),
(23, 'Einstein', NULL, NULL, 'El perro de Doc Brown, su fiel compañero. Participa en múltiples experimentos temporales y es el primer ser vivo en viajar en el tiempo.', 'Mascota', '../img/Personajes/einstein.gif', 1, NULL, NULL, NULL),
(24, 'Marvin Berry', NULL, '1935-06-10', 'Cantante y guitarrista de la banda que toca en el baile \"Encantamiento bajo el mar\" en 1955. Es quien llama a su primo Chuck Berry para contarle sobre un nuevo estilo de música, después de escuchar a Marty tocar la guitarra.', 'Músico', '../img/Personajes/marvin_berry.gif', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `año` year(4) DEFAULT NULL,
  `fuente_energia` varchar(255) DEFAULT NULL,
  `caracteristicas` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen_principal` varchar(255) DEFAULT NULL,
  `id_pelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `nombre`, `año`, `fuente_energia`, `caracteristicas`, `descripcion`, `imagen_principal`, `id_pelicula`) VALUES
(1, 'DeLorean DMC-12 (versión original)', '1981', 'Plutonio', 'Conversor de plutonio, condensador de flujo, velocidad requerida: 88 mph.', 'El famoso auto máquina del tiempo diseñado por Doc Brown. Para viajar en el tiempo necesita 1.21 gigavatios generados con plutonio. Su aspecto futurista se convirtió en un ícono de la cultura pop.', '../img/vehiculos/delorean.gif', 1),
(2, 'Ford Super De Luxe de Biff', '1946', 'Gasolina', 'Auto clásico con carrocería robusta y estilo de posguerra.', 'El coche de Biff Tannen en 1955, símbolo de su arrogancia y poder. Marty lo destruye accidentalmente durante su escape con el skate.', '../img/vehiculos/lux.gif', 1),
(3, 'Skateboard de Marty', '1985', 'Tracción humana', 'Patineta simple que Marty usa para escapar de los matones.', 'La patineta de Marty McFly es un elemento clave en sus persecuciones, representando su espíritu rebelde y creativo.', '../img/vehiculos/patineta_normal.gif', 1),
(4, 'Toyota Pickup SR5 4x4', '1985', 'Gasolina', 'Camioneta negra todoterreno con faros adicionales y estilo deportivo.', 'La camioneta soñada de Marty. Representa su deseo de libertad y aventuras. Al final de la primera película, logra tenerla.', '../img/vehiculos/toyota_sr5.gif', 1),
(5, 'DeLorean DMC-12 (versión 2015)', '1981', 'Mr. Fusion + Hover conversion', 'Conversor de energía doméstico Mr. Fusion, propulsión aérea y capacidad de vuelo.', 'El DeLorean actualizado con tecnología del 2015. Puede volar y funciona con residuos domésticos. Permite a Doc y Marty viajar sin depender del plutonio.', '../img/vehiculos/delorean2015.gif', 2),
(6, 'Hoverboard Rosa de Mattel', '2015', 'Antigravedad', 'Tabla flotante rosa utilizada para moverse por el aire, sin motor.', 'El icónico hoverboard de color rosa que Marty toma prestado de una niña para escapar de Griff Tannen. No funciona sobre el agua.', '../img/vehiculos/patineta_voladora.gif', 2),
(8, 'Taxi futurista', '2015', 'Energía eléctrica', 'Vehículo volador amarillo, común en Hill Valley del futuro.', 'El transporte público del año 2015, que flota por encima de las calles en un sistema de tráfico aéreo.', '../img/vehiculos/taxi.webp', 2),
(9, 'Volkswagen Kombi 1975', '1975', 'Gasolina', 'Furgoneta clásica utilizada por los libios que buscan a Doc Brown.', 'Aparece al comienzo de la primera película y nuevamente mencionada en el 2015. Representa la contracultura de los 70.', '../img/vehiculos/volkswagen.gif', 2),
(10, 'DeLorean DMC-12 (versión 1885 adaptado)', '1981', 'Gasolina escasa + Rieles de tren', 'Ruedas reforzadas y adaptadas para rieles. Llega a 88 mph impulsado por una locomotora.', 'El DeLorean modificado por Doc Brown en 1885 para circular sobre vías férreas y alcanzar la velocidad necesaria para regresar al futuro.', '../img/vehiculos/delorean1885.gif', 3),
(11, 'Locomotora de 1885', '0000', 'Carbón / Vapor', 'Máquina de vapor potente, modificada para impulsar el DeLorean.', 'El tren usado por Doc y Marty en el clímax de la tercera película para lograr alcanzar los 88 mph. Una de las escenas más recordadas.', '../img/vehiculos/locomotora.gif', 3),
(12, 'Carro de caballos de Doc Brown', '0000', 'Tracción animal', 'Carro rústico de madera usado para transporte.', 'El vehículo personal de Doc mientras vive en el Viejo Oeste, antes de reencontrarse con Marty.', '../img/vehiculos/carro_caballos.gif', 3),
(13, 'Carroza de Buford Tannen', '0000', 'Tracción animal', 'Carro pesado usado por el forajido Buford y su pandilla.', 'Una carreta de estilo clásico usada en Hill Valley durante la era del Viejo Oeste.', '../img/vehiculos/carroza.gif', 3),
(14, 'Caballo de Marty', '0000', 'Tracción animal', 'Caballo marrón que usa Marty bajo el nombre de “Clint Eastwood”.', 'Medio principal de Marty para moverse por Hill Valley del siglo XIX.', '../img/vehiculos/caballo.gif', 3),
(15, 'Citroën DS 1972', '1972', 'Gasolina', 'Auto elegante de diseño francés, visto brevemente en el futuro.', 'Vehículo secundario del 2015 que refleja el estilo retrofuturista del universo de la saga.', '../img/vehiculos/citroen_ds.gif', 3),
(16, 'Packard Custom 1949', '1949', 'Gasolina', 'Automóvil de lujo de mediados del siglo XX.', 'Aparece en las escenas del Hill Valley de los años 50, mostrando la estética clásica de la época.', '../img/vehiculos/packard.gif', 3),
(17, 'Willys Aero Lark 1952', '1952', 'Gasolina', 'Sedán clásico de los años 50, símbolo del estilo americano.', 'Presente en los planos del Hill Valley original, forma parte del decorado del pasado.', '../img/vehiculos/willys.gif', 3),
(18, 'Chevrolet Bel Air 1953', '1953', 'Gasolina', 'Coche de época con líneas curvas y elegancia distintiva.', 'Aparece estacionado en varias escenas de 1955, reflejando el espíritu del rock and roll y la prosperidad de la era.', '../img/vehiculos/bel_air.gif', 3),
(19, 'Chevrolet Nova 1976', '1976', 'Gasolina', 'Modelo robusto y popular en los años 70.', 'Presente en el 1985 alternativo, representa el declive de Hill Valley tras la alteración de la línea temporal.', '../img/vehiculos/chevrolet_nova.gif', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`id_credito`);

--
-- Indices de la tabla `linea_tiempo`
--
ALTER TABLE `linea_tiempo`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id_personaje`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id_credito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea_tiempo`
--
ALTER TABLE `linea_tiempo`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `linea_tiempo`
--
ALTER TABLE `linea_tiempo`
  ADD CONSTRAINT `linea_tiempo_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD CONSTRAINT `personajes_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
