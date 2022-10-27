-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2022 a las 03:07:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pasantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente_aprendizaje`
--

CREATE TABLE `ambiente_aprendizaje` (
  `id_ambiente` int(11) UNSIGNED NOT NULL,
  `id_area` int(11) UNSIGNED NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `nombre_ambiente` varchar(255) NOT NULL,
  `capacidad` smallint(4) UNSIGNED DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ambiente_aprendizaje`
--

INSERT INTO `ambiente_aprendizaje` (`id_ambiente`, `id_area`, `fecha_registro`, `nombre_ambiente`, `capacidad`, `descripcion`) VALUES
(1, 1, '2022-08-22', 'CAPRINOS', 18, 'El ambiente esta previsto de animales, la función del aprendiz es cuidar y velar'),
(2, 1, '2022-08-15', 'PORCINOS', 30, 'El ambiente esta previsto de animales'),
(3, 1, '2022-08-22', 'AVICULTURA', 18, 'Conteo de huevos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `id_aprendiz` int(11) UNSIGNED NOT NULL,
  `documento` varchar(12) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `jornada` varchar(255) NOT NULL,
  `id_ambiente` int(11) UNSIGNED NOT NULL,
  `id_fichas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`id_aprendiz`, `documento`, `nombre`, `telefono`, `correo`, `direccion`, `jornada`, `id_ambiente`, `id_fichas`) VALUES
(23, '1003380512', 'Edwin José Guerra Martinez', '3194312677', 'maria@gmail.com', 'karla32@gmail.com', 'Mañana', 1, 1),
(24, '1003380512', 'Edwin José', '3194312677', 'maria@gmail.com', 'karla32@gmail.com', 'Mañana', 1, 1),
(25, '31444026', 'Marcela guevara', '3124545', 'marcelita64@gmail.com', 'calle 29 n 29-32', 'Mañana', 1, 1),
(26, '31444026', 'Marcela guevara', '3124545', 'marcelita64@gmail.com', 'calle 29 n 29-32', 'Mañana', 1, 1),
(28, '1003380512', 'liliana fonseca ', '3194312677', 'maria@gmail.com', 'karla32@gmail.com', 'Tarde', 1, 14),
(30, '1003380512', 'Jhon Jairo Mejia', '31245878', 'Dario_1221@gmail.com', 'calle 35 # 65-54', 'Tarde', 3, 8),
(31, '1003380512', 'Jhon Jairo Mejia', '31245878', 'Dario_1221@gmail.com', 'calle 35 # 65-54', 'Tarde', 3, 8),
(32, '1003380512', 'Jhon Jairo Mejia', '31245878', 'Dario_1221@gmail.com', 'calle 35 # 65-54', 'Tarde', 3, 8),
(33, '31444026', 'sandra Guerra', '3194312656', 'omarpena@gmail.com', 'manzana 9 cas a11', 'Tarde', 3, 15),
(34, '5455454', 'Salome guerra', '54545454', 'salo@gmail.com', 'mazas545ds', 'Mixta', 3, 16),
(35, '5455454', 'Salome guerra', '54545454', 'salo@gmail.com', 'mazas545ds', 'Mixta', 3, 16),
(36, '5455454', 'Salome guerra', '54545454', 'salo@gmail.com', 'mazas545ds', 'Mixta', 3, 16),
(37, '4242424', 'Area de caprinos', '3194312677', 'Dario_1221@gmail.com', 'calle 29 n 29-32', 'Mañana', 3, 17),
(38, '4242424', 'Area de caprinos', '3194312677', 'Dario_1221@gmail.com', 'calle 29 n 29-32', 'Mañana', 3, 17),
(39, '1067631568', 'Carmen Yaneth', '3168044364', 'carmencita@gmail.com', 'manzana 9 casa 18', 'Mañana', 1, 14),
(40, '1003380512', 'katalina Mendoza marrugo', '31542121', 'catalina@gmail.com', 'manzana 9 casa 19', 'Tarde', 3, 15),
(41, '1024605861', 'Andres Pedroza Perez', '3168044364', 'andrespedroza@gmal.com', 'manzana 9 cas a11', 'Mixta', 2, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areapasantia`
--

CREATE TABLE `areapasantia` (
  `id_area` int(11) UNSIGNED NOT NULL,
  `id_senacbc` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areapasantia`
--

INSERT INTO `areapasantia` (`id_area`, `id_senacbc`, `nombre`) VALUES
(1, 1, 'ESPECIES MENORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_instructor`
--

CREATE TABLE `area_instructor` (
  `id_area_instructor` int(11) UNSIGNED NOT NULL,
  `ref_instructor` int(11) UNSIGNED NOT NULL,
  `ref_area` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area_instructor`
--

INSERT INTO `area_instructor` (`id_area_instructor`, `ref_instructor`, `ref_area`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id_fichas` int(11) NOT NULL,
  `numero_ficha` varchar(45) NOT NULL,
  `id_programa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id_fichas`, `numero_ficha`, `id_programa`) VALUES
(1, '2339956', 2),
(2, '29457845', 3),
(5, '2364845', 3),
(6, '23345678', 31),
(7, '1245777', 28),
(8, '54454545', 14),
(9, '54454545', 14),
(10, '54454545', 14),
(11, '2364845', 16),
(12, '2364845', 16),
(13, '2364845', 16),
(14, '2364845', 16),
(15, '2364845', 16),
(16, '2364845', 16),
(17, '2364845', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id_instructor` int(11) UNSIGNED NOT NULL,
  `id_senacbc` int(11) UNSIGNED NOT NULL,
  `documento` varchar(12) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`id_instructor`, `id_senacbc`, `documento`, `nombre`, `telefono`, `correo`, `direccion`) VALUES
(1, 1, '1067631568', 'Wilder vazques', '31943126788', 'Dario_1221@gmail.com', 'calle 29 n 29-32'),
(2, 1, '31444026', 'Gonzalo Jimenez', '3194312677', 'Gonzalo@gmail.com', 'calle 29 n 29-32'),
(3, 1, '31444026', 'Gonzalo Jimenez', '3194312677', 'Gonzalo@gmail.com', 'calle 29 n 29-32'),
(4, 1, '31444026', 'Sistemas', '3163001887', 'lina_222@gmail.com', 'calle 35 # 65-54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula_aprendiz_ambiente`
--

CREATE TABLE `matricula_aprendiz_ambiente` (
  `id_matricula` bigint(20) UNSIGNED NOT NULL,
  `id_aprendiz` int(11) UNSIGNED NOT NULL,
  `id_ambiente` int(11) UNSIGNED NOT NULL,
  `estado` char(4) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id_programa` int(11) NOT NULL,
  `nombre_progra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id_programa`, `nombre_progra`) VALUES
(1, 'ADSI'),
(2, 'GANADERIA'),
(3, 'ESPECIES MENORES'),
(4, 'CONTROL DE ALIMENTOS'),
(5, 'Gnader'),
(6, 'GANADERIA'),
(7, 'GANADERIA'),
(8, 'CONTROL AMBIENTAL'),
(11, 'ADSO'),
(12, 'ADSO'),
(13, 'ANALISIS'),
(14, 'edwin'),
(15, 'Juan camilo'),
(16, 'Gnader'),
(17, 'bhbhbh'),
(18, 'adsasdas'),
(19, 'czxcxcz'),
(20, 'uuuuuu'),
(27, 'asdasdsad'),
(28, 'sadsdxzxc'),
(30, 'Ingenieria de sistemas'),
(31, 'Ingenieria de sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `senacbc`
--

CREATE TABLE `senacbc` (
  `id_senacbc` int(11) UNSIGNED NOT NULL,
  `nit` varchar(45) NOT NULL,
  `nombrec` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `senacbc`
--

INSERT INTO `senacbc` (`id_senacbc`, `nit`, `nombrec`, `telefono`, `correo`, `direccion`) VALUES
(1, '19784154-7', 'SENA CBC', '318451454', 'sena@misena.edu.co', 'km 7 via a la paz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `documento` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol` char(1) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `documento`, `nickname`, `contrasena`, `rol`, `estado`) VALUES
(1, 1065484521, 'Ejoseguerra', '1995', '1', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambiente_aprendizaje`
--
ALTER TABLE `ambiente_aprendizaje`
  ADD PRIMARY KEY (`id_ambiente`),
  ADD KEY `fk_area_ambiente` (`id_area`);

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`id_aprendiz`),
  ADD KEY `fk_fichas` (`id_fichas`),
  ADD KEY `fk_ambiente` (`id_ambiente`);

--
-- Indices de la tabla `areapasantia`
--
ALTER TABLE `areapasantia`
  ADD PRIMARY KEY (`id_area`),
  ADD KEY `fk_senabc_area` (`id_senacbc`);

--
-- Indices de la tabla `area_instructor`
--
ALTER TABLE `area_instructor`
  ADD PRIMARY KEY (`id_area_instructor`),
  ADD KEY `fk_area` (`ref_area`),
  ADD KEY `fk_instructor_area` (`ref_instructor`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id_fichas`),
  ADD KEY `fk_programas` (`id_programa`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id_instructor`),
  ADD KEY `fk_senabc_instructor` (`id_senacbc`);

--
-- Indices de la tabla `matricula_aprendiz_ambiente`
--
ALTER TABLE `matricula_aprendiz_ambiente`
  ADD PRIMARY KEY (`id_matricula`),
  ADD KEY `fk_aprendiz` (`id_aprendiz`),
  ADD KEY `fk_ambiente_aprendizaje` (`id_ambiente`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id_programa`);

--
-- Indices de la tabla `senacbc`
--
ALTER TABLE `senacbc`
  ADD PRIMARY KEY (`id_senacbc`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambiente_aprendizaje`
--
ALTER TABLE `ambiente_aprendizaje`
  MODIFY `id_ambiente` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `id_aprendiz` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `areapasantia`
--
ALTER TABLE `areapasantia`
  MODIFY `id_area` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `area_instructor`
--
ALTER TABLE `area_instructor`
  MODIFY `id_area_instructor` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id_fichas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id_instructor` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `matricula_aprendiz_ambiente`
--
ALTER TABLE `matricula_aprendiz_ambiente`
  MODIFY `id_matricula` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `senacbc`
--
ALTER TABLE `senacbc`
  MODIFY `id_senacbc` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ambiente_aprendizaje`
--
ALTER TABLE `ambiente_aprendizaje`
  ADD CONSTRAINT `fk_area_ambiente` FOREIGN KEY (`id_area`) REFERENCES `areapasantia` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `fk_ambiente` FOREIGN KEY (`id_ambiente`) REFERENCES `ambiente_aprendizaje` (`id_ambiente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_fichas` FOREIGN KEY (`id_fichas`) REFERENCES `fichas` (`id_fichas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `areapasantia`
--
ALTER TABLE `areapasantia`
  ADD CONSTRAINT `fk_senabc_area` FOREIGN KEY (`id_senacbc`) REFERENCES `senacbc` (`id_senacbc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `area_instructor`
--
ALTER TABLE `area_instructor`
  ADD CONSTRAINT `fk_area` FOREIGN KEY (`ref_area`) REFERENCES `areapasantia` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_instructor_area` FOREIGN KEY (`ref_instructor`) REFERENCES `instructor` (`id_instructor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fk_programas` FOREIGN KEY (`id_programa`) REFERENCES `programas` (`id_programa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `fk_senabc_instructor` FOREIGN KEY (`id_senacbc`) REFERENCES `senacbc` (`id_senacbc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `matricula_aprendiz_ambiente`
--
ALTER TABLE `matricula_aprendiz_ambiente`
  ADD CONSTRAINT `fk_ambiente_aprendizaje` FOREIGN KEY (`id_ambiente`) REFERENCES `ambiente_aprendizaje` (`id_ambiente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aprendiz` FOREIGN KEY (`id_aprendiz`) REFERENCES `aprendiz` (`id_aprendiz`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
