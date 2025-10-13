-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2025 a las 17:16:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
(1, '1955', 'Doc Brown inventa el condensador de flujo', 'Después de golpearse la cabeza en el baño, el doctor Emmett Brown tiene una visión que lo lleva a crear el condensador de flujo, el componente esencial del viaje en el tiempo.', 'Hill Valley, California', 'Doc Brown (1955)', '..img/Pelicula/vaf1.jpg', 1),
(2, '1985', 'Marty McFly viaja al pasado', 'Marty utiliza el DeLorean del Doc para escapar de los libios y alcanza las 88 mph, viajando accidentalmente al año 1955.', 'Hill Valley - Twin Pines Mall / granja de Peabody', 'Marty McFly, Doc Brown', '..img/Pelicula/vaf1.jpg', 1),
(3, '1955', 'Marty conoce al joven Doc Brown', 'Marty busca la ayuda del Doc de 1955 para encontrar una forma de regresar al futuro sin plutonio.', 'Hill Valley, laboratorio del Doc', 'Marty McFly, Doc Brown (1955)', '..img/Pelicula/vaf1.jpg', 1),
(4, '1955', 'El rayo del reloj de Hill Valley', 'Marty y el Doc conectan el DeLorean al cable del reloj del ayuntamiento para aprovechar el rayo y generar los 1.21 gigavatios necesarios para volver a 1985.', 'Hill Valley, torre del reloj', 'Marty McFly, Doc Brown', '..img/Pelicula/vaf1.jpg', 1),
(5, '1985', 'Doc viaja al futuro', 'Doc llega en un DeLorean volador, diciéndole a Marty y Jennifer que deben ir al año 2015 para ayudar a sus hijos.', 'Hill Valley, calle principal', 'Marty McFly, Jennifer Parker, Doc Brown', '..img/Pelicula/vaf1.jpg', 1),
(6, '2015', 'Llegada al futuro', 'Marty, Doc y Jennifer llegan al año 2015, una ciudad con autos voladores, ropa tecnológica y anuncios holográficos.', 'Hill Valley (año 2015)', 'Marty McFly, Doc Brown, Jennifer Parker', 'img/linea_tiempo/hillvalley_2015.jpg', 2),
(7, '2015', 'Biff roba el DeLorean', 'El Biff anciano roba el DeLorean y entrega un almanaque deportivo a su yo joven en 1955, alterando toda la línea temporal.', 'Hill Valley 2015 y 1955', 'Biff Tannen (2015 y 1955)', 'img/linea_tiempo/biff_almanac.jpg', 2),
(8, '1985 alter', 'Regreso a un 1985 corrupto', 'Marty descubre un 1985 dominado por Biff, quien se ha vuelto millonario gracias al almanaque. El Doc le explica que deben regresar a 1955 para corregir la historia.', 'Hill Valley (1985 alternativo)', 'Marty McFly, Biff Tannen, Doc Brown', 'img/linea_tiempo/alternate_1985.jpg', 2),
(9, '1955', 'Marty recupera el almanaque', 'Marty y Doc viajan nuevamente a 1955 para recuperar el almanaque y restaurar la línea temporal sin ser descubiertos por sus otras versiones.', 'Hill Valley High, estadio, túnel', 'Marty McFly, Doc Brown, Biff Tannen', 'img/linea_tiempo/almanac_recovery.jpg', 2),
(10, '1955', 'El rayo destruye el DeLorean', 'Un rayo impacta el DeLorean y lo hace desaparecer del cielo, enviando a Doc Brown al año 1885.', 'Hill Valley', 'Marty McFly, Doc Brown', 'img/linea_tiempo/deLorean_lightning.jpg', 2),
(11, '1885', 'Doc vive en el Viejo Oeste', 'Doc se establece en 1885 como herrero y se adapta a la vida en el Lejano Oeste mientras arregla el DeLorean.', 'Hill Valley (Viejo Oeste)', 'Doc Brown', 'img/linea_tiempo/doc_blacksmith.jpg', 3),
(12, '1885', 'Marty viaja al Oeste', 'Tras descubrir la carta del Doc, Marty regresa a 1885 para rescatarlo y evitar que sea asesinado por Buford \"Mad Dog\" Tannen.', 'Hill Valley (1885)', 'Marty McFly, Doc Brown, Buford Tannen', 'img/linea_tiempo/marty_west.jpg', 3),
(13, '1885', 'Doc conoce a Clara Clayton', 'El Doc salva a Clara cuando su carruaje casi cae por un barranco. Ambos se enamoran y él considera quedarse en el pasado.', 'Cañón Clayton, Hill Valley', 'Doc Brown, Clara Clayton', 'img/linea_tiempo/doc_clara.jpg', 3),
(14, '1885', 'El tren del tiempo', 'Con el DeLorean sin combustible, Marty y Doc usan una locomotora para alcanzar las 88 mph y permitirle a Marty regresar a 1985.', 'Vías del tren cerca de Hill Valley', 'Marty McFly, Doc Brown, Clara Clayton', 'img/linea_tiempo/train_push.jpg', 3),
(15, '1985', 'Doc regresa con su familia', 'Doc reaparece en una locomotora voladora junto a Clara y sus hijos, demostrando que el tiempo es lo que uno hace de él.', 'Hill Valley, 1985', 'Doc Brown, Clara, Jules y Verne', 'img/linea_tiempo/flying_train.jpg', 3);

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
(8, 'Taxi futurista', '2015', 'Energía eléctrica', 'Vehículo volador amarillo, común en Hill Valley del futuro.', 'El transporte público del año 2015, que flota por encima de las calles en un sistema de tráfico aéreo.', 'imagenes/vehiculos/taxi-futurista.jpg', 2),
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
