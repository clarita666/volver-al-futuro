-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2025 a las 03:42:48
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
-- Base de datos: `volver_al_futuro3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `id_credito` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_tiempo`
--

CREATE TABLE `linea_tiempo` (
  `id_evento` int(11) NOT NULL,
  `año` varchar(10) NOT NULL,
  `historia` text DEFAULT NULL,
  `diferencias` text DEFAULT NULL,
  `ubicacion` text DEFAULT NULL,
  `apariciones` text DEFAULT NULL,
  `fuentes` text DEFAULT NULL,
  `referencias` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `linea_tiempo`
--

INSERT INTO `linea_tiempo` (`id_evento`, `año`, `historia`, `diferencias`, `ubicacion`, `apariciones`, `fuentes`, `referencias`, `imagen`) VALUES
(1, '1885', 'Doc Brown queda atrapado en el Viejo Oeste tras un rayo que daña el DeLorean.', 'Marty viaja para salvar a Doc; introducción de Buford \"Mad Dog\" Tannen.', 'Hill Valley en el Viejo Oeste (saloon, vía del tren, granja McFly).', 'Volver al Futuro III', 'Doc Brown, Marty McFly, Buford Tannen, Clara Clayton.', 'Locomotora empuja al DeLorean a 88 mph en 1885.', NULL),
(2, '1955', 'Marty viaja accidentalmente y conoce a sus padres adolescentes.', 'Intervención de Marty pone en riesgo su propia existencia.', 'Hill Valley (Escuela, Enchantment Under the Sea dance).', 'Volver al Futuro I, II', 'Marty McFly, George McFly, Lorraine, Biff, Doc joven.', 'El rayo en el reloj de Hill Valley devuelve a Marty al futuro.', NULL),
(3, '1985', 'Línea temporal original donde vive Marty al inicio.', 'Familia McFly con problemas, George es débil, Biff lo domina.', 'Hill Valley (casa McFly, Twin Pines Mall).', 'Volver al Futuro I', 'Marty, Doc, George, Lorraine, Biff.', 'Viaje inicial de Marty al pasado.', NULL),
(4, '1985 A', 'Línea temporal alterada cuando Biff joven recibe el almanaque en 1955.', 'Biff multimillonario, Hill Valley convertido en ciudad decadente.', 'Hill Valley dominado por el casino de Biff.', 'Volver al Futuro II', 'Marty, Doc, Biff, Lorraine.', 'Doc explica a Marty con el diagrama de la línea temporal.', NULL),
(5, '1985 A-1', 'Breve línea donde Doc y Marty han restaurado el almanaque.', 'El futuro vuelve a encaminarse al original.', 'Hill Valley corregido.', 'Volver al Futuro II', 'Marty, Doc.', 'De aquí parten hacia 1955 para asegurarse de que todo vuelva a la normalidad.', NULL),
(6, '1985 B', 'Línea temporal corregida después de que Marty ayude a su padre en 1955.', 'George McFly es exitoso, Biff se vuelve servicial.', 'Hill Valley (casa McFly, barrio mejorado).', 'Volver al Futuro I (final)', 'Marty, George, Lorraine, Biff, Doc.', 'Versión feliz de 1985 que sirve de base para Volver al Futuro II.', NULL),
(7, '1986 G', 'Línea temporal que corresponde a la serie animada *Back to the Future: The Animated Series*.', 'Explora aventuras adicionales de Marty, Doc, Clara y los hijos de Doc.', 'Hill Valley y distintos periodos históricos.', 'Serie animada (1991-1992)', 'Marty, Doc, Clara, Jules y Verne.', 'Considerada no canónica por algunos fans.', NULL),
(8, '2015', 'Futuro al que viajan Marty y Doc para evitar que el hijo de Marty arruine su vida.', 'Hoverboards, autos voladores, ropa futurista.', 'Hill Valley futurista.', 'Volver al Futuro II', 'Marty, Doc, Jennifer, Griff Tannen.', 'El almanaque deportivo desencadena la línea temporal alterna.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `director` varchar(100) DEFAULT NULL,
  `productor` varchar(100) DEFAULT NULL,
  `escritor` varchar(100) DEFAULT NULL,
  `resumen` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
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

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `director`, `productor`, `escritor`, `resumen`, `imagen`, `url_video1`, `url_video2`, `url_video3`, `galeria_imagen1`, `galeria_imagen2`, `galeria_imagen3`) VALUES
(1, 'Volver al Futuro (1985)', 'Robert Zemeckis', 'Bob Gale, Neil Canton', 'Robert Zemeckis, Bob Gale', 'Marty McFly, un adolescente de los años 80, viaja accidentalmente al año 1955 en un DeLorean modificado por el excéntrico científico Doc Brown. Allí se encuentra con sus futuros padres e involuntariamente altera el pasado, poniendo en peligro su propia existencia.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Volver al Futuro II (1989)', 'Robert Zemeckis', 'Bob Gale, Neil Canton', 'Robert Zemeckis, Bob Gale', 'Marty y Doc viajan al futuro del año 2015 para evitar que el hijo de Marty arruine su vida. Sin embargo, Biff Tannen se apodera de un almanaque deportivo y cambia la historia, convirtiéndose en un magnate corrupto. Ahora deben regresar a 1955 para restaurar la línea temporal.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Volver al Futuro III (1990)', 'Robert Zemeckis', 'Bob Gale, Neil Canton', 'Robert Zemeckis, Bob Gale', 'Tras los eventos de la segunda película, Marty viaja al Viejo Oeste de 1885 para rescatar a Doc Brown, que quedó atrapado en esa época. Allí descubren nuevos desafíos mientras enfrentan a Buford “Mad Dog” Tannen y buscan una forma de regresar al futuro sin combustible para el DeLorean.', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id_personaje` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `galeria_imagen1` varchar(255) DEFAULT NULL,
  `galeria_imagen2` varchar(255) DEFAULT NULL,
  `galeria_imagen3` varchar(255) DEFAULT NULL,
  `id_pelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id_personaje`, `nombre`, `fecha_nacimiento`, `descripcion`, `imagen`, `galeria_imagen1`, `galeria_imagen2`, `galeria_imagen3`, `id_pelicula`) VALUES
(1, 'Marty McFly', '1968-06-12', 'Adolescente que viaja accidentalmente a 1955 en un DeLorean modificado.', NULL, NULL, NULL, NULL, 1),
(2, 'Dr. Emmett Brown', '1914-01-01', 'Excéntrico científico e inventor del DeLorean máquina del tiempo.', NULL, NULL, NULL, NULL, 1),
(3, 'George McFly', NULL, 'Padre de Marty, tímido y acosado en su juventud.', NULL, NULL, NULL, NULL, 1),
(4, 'Lorraine Baines', NULL, 'Madre de Marty, joven en 1955 que se enamora accidentalmente de él.', NULL, NULL, NULL, NULL, 1),
(5, 'Biff Tannen', NULL, 'Bravucón y enemigo de George McFly, antagonista recurrente.', NULL, NULL, NULL, NULL, 1),
(6, 'Jennifer Parker', NULL, 'Novia de Marty McFly.', NULL, NULL, NULL, NULL, 1),
(7, 'Einstein', NULL, 'Perro de Doc Brown, primer viajero del tiempo.', NULL, NULL, NULL, NULL, 1),
(8, 'Marty McFly', '1968-06-12', 'Viaja con Doc al año 2015 para salvar a su hijo y arreglar la línea temporal.', NULL, NULL, NULL, NULL, 2),
(9, 'Dr. Emmett Brown', '1914-01-01', 'Regresa a ayudar a Marty a evitar un desastre familiar en 2015.', NULL, NULL, NULL, NULL, 2),
(10, 'Jennifer Parker', NULL, 'Novia de Marty que es llevada al futuro.', NULL, NULL, NULL, NULL, 2),
(11, 'Biff Tannen', NULL, 'Obtiene un almanaque deportivo y altera la historia en su beneficio.', NULL, NULL, NULL, NULL, 2),
(12, 'Griff Tannen', NULL, 'Nieto de Biff en 2015, líder de una pandilla.', NULL, NULL, NULL, NULL, 2),
(13, 'George McFly', NULL, 'Padre de Marty, aparece brevemente en la línea temporal alterna.', NULL, NULL, NULL, NULL, 2),
(14, 'Lorraine Baines McFly', NULL, 'Madre de Marty, con un rol central en la línea temporal modificada.', NULL, NULL, NULL, NULL, 2),
(15, 'Marlene McFly', NULL, 'Hija de Marty y Jennifer en 2015.', NULL, NULL, NULL, NULL, 2),
(16, 'Needles', NULL, 'Compañero de Marty que lo involucra en problemas en el futuro.', NULL, NULL, NULL, NULL, 2),
(17, 'Marty McFly', '1968-06-12', 'Viaja al Viejo Oeste de 1885 para rescatar a Doc.', NULL, NULL, NULL, NULL, 3),
(18, 'Dr. Emmett Brown', '1914-01-01', 'Queda atrapado en 1885 y se enamora de Clara Clayton.', NULL, NULL, NULL, NULL, 3),
(19, 'Clara Clayton', NULL, 'Maestra de Hill Valley en 1885, interés amoroso de Doc.', NULL, NULL, NULL, NULL, 3),
(20, 'Buford \"Mad Dog\" Tannen', NULL, 'Forajido del Viejo Oeste, antepasado de Biff Tannen.', NULL, NULL, NULL, NULL, 3),
(21, 'Seamus McFly', NULL, 'Tatarabuelo irlandés de Marty en 1885.', NULL, NULL, NULL, NULL, 3),
(22, 'Maggie McFly', NULL, 'Esposa de Seamus y tatarabuela de Marty.', NULL, NULL, NULL, NULL, 3),
(23, 'Sheriff Strickland', NULL, 'Antepasado del director Strickland, sheriff en 1885.', NULL, NULL, NULL, NULL, 3),
(24, 'Jennifer Parker', NULL, 'Novia de Marty, aparece al final de la trilogía.', NULL, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `año` year(4) NOT NULL,
  `fuente_energia` varchar(255) DEFAULT NULL,
  `caracteristicas` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `galeria_imagen1` varchar(255) DEFAULT NULL,
  `galeria_imagen2` varchar(255) DEFAULT NULL,
  `galeria_imagen3` varchar(255) DEFAULT NULL,
  `id_pelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `nombre`, `año`, `fuente_energia`, `caracteristicas`, `descripcion`, `imagen`, `galeria_imagen1`, `galeria_imagen2`, `galeria_imagen3`, `id_pelicula`) VALUES
(1, 'DeLorean DMC-12 (versión original)', '1981', 'Plutonio', 'Conversor de plutonio, condensador de flujo, velocidad máxima requerida: 88 mph', 'El vehículo principal de la saga, modificado por Doc Brown para viajar en el tiempo. Necesita plutonio para generar los 1.21 gigavatios de energía.', NULL, NULL, NULL, NULL, 1),
(2, 'DeLorean DMC-12 (2015 modificado)', '1981', 'Mr. Fusion + Hover conversion', 'Conversor doméstico Mr. Fusion, capacidad de vuelo con hover conversion, velocidad de 88 mph', 'Versión mejorada del DeLorean con Mr. Fusion como fuente de energía y capacidad de volar en el año 2015.', NULL, NULL, NULL, NULL, 2),
(3, 'Hoverboard', '2015', 'Antigravedad', 'Tabla flotante usada como transporte personal', 'El hoverboard es utilizado por Marty para escapar de Griff Tannen y su pandilla en 2015.', NULL, NULL, NULL, NULL, 2),
(4, 'Ford Super De Luxe de Biff', '1946', 'Gasolina', 'Auto clásico usado por Biff y su pandilla', 'Vehículo de Biff Tannen en 1955, aparece también en las secuencias modificadas por la alteración del tiempo.', NULL, NULL, NULL, NULL, 2),
(5, 'DeLorean DMC-12 (1885 adaptado)', '1981', 'Gasolina escasa + Rieles de tren', 'Ruedas reforzadas, adaptado para circular en rieles de tren, velocidad 88 mph', 'El DeLorean queda atrapado en 1885 y es modificado para desplazarse sobre vías de tren y lograr alcanzar la velocidad necesaria.', NULL, NULL, NULL, NULL, 3),
(6, 'Locomotora de 1885', '0000', 'Carbón / vapor', 'Gran potencia, utilizada para empujar al DeLorean en las vías', 'La locomotora usada por Doc y Marty en el clímax de la tercera película para alcanzar los 88 mph en 1885.', NULL, NULL, NULL, NULL, 3),
(7, 'Carro de caballos de Doc Brown', '0000', 'Tracción animal', 'Carro tradicional del Viejo Oeste', 'Vehículo rústico utilizado por Doc Brown mientras vivía en Hill Valley de 1885.', NULL, NULL, NULL, NULL, 3),
(8, 'Skateboard de Marty', '1985', 'Tracción humana', 'Patineta simple que Marty usa en persecuciones', 'Marty usa su skateboard para escapar de Biff y su pandilla en Hill Valley.', NULL, NULL, NULL, NULL, 1),
(9, 'Camioneta Toyota Pickup SR5 4x4', '1985', 'Gasolina', 'Pickup negra, estilo deportivo, sueño de Marty.', 'La camioneta que Marty desea tener y que aparece al final de la primera película.', NULL, NULL, NULL, NULL, 1),
(10, 'Hoverboard Rosa de Mattel', '2015', 'Antigravedad', 'Hoverboard de color rosa, limitado en agua.', 'Marty toma el hoverboard de una niña para huir de Griff y su pandilla en 2015.', NULL, NULL, NULL, NULL, 2),
(11, 'Hoverboard Pitbull', '2015', 'Antigravedad', 'Hoverboard motorizado, más veloz y agresivo.', 'Usado por Griff Tannen, mucho más potente que el modelo de Marty.', NULL, NULL, NULL, NULL, 2),
(12, 'Taxi futurista', '2015', 'Energía eléctrica', 'Vehículo amarillo volador usado como transporte público.', 'Medio de transporte común en Hill Valley 2015.', NULL, NULL, NULL, NULL, 2),
(13, 'Carroza de Buford Tannen', '0000', 'Tracción animal', 'Carreta del Viejo Oeste usada por la pandilla de Buford.', 'Medio de transporte de “Mad Dog” Tannen y sus secuaces en Hill Valley de 1885.', NULL, NULL, NULL, NULL, 3),
(14, 'Caballo de Marty', '0000', 'Tracción animal', 'Caballo usado por Marty cuando adopta la identidad de Clint Eastwood.', 'Medio principal de Marty para moverse en el Viejo Oeste.', NULL, NULL, NULL, NULL, 3),
(15, 'Carro de la feria de Hill Valley', '0000', 'Tracción animal', 'Decorado con carteles, usado en celebraciones.', 'Se ve en la feria de Hill Valley antes del clímax en el tren.', NULL, NULL, NULL, NULL, 3);

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
  ADD PRIMARY KEY (`id_evento`);

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
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD CONSTRAINT `personajes_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
