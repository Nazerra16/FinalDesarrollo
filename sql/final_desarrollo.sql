-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2024 a las 14:58:05
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
-- Base de datos: `final_desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `fecnac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `fecnac`) VALUES
(9, 'Dario', 'Flores', '1993-07-19'),
(10, 'Maximiliano', 'Alcaraz', '2000-12-31'),
(11, 'Nico', 'Velez', '2001-05-15'),
(12, 'Valentina', 'Danti', '2002-04-04'),
(13, 'Sara', 'Meliti', '2004-01-05'),
(14, 'Stefi', 'Saiquita', '2003-11-06'),
(15, 'Amiel', 'Arizaga', '1999-06-22'),
(16, 'Elian', 'Arizaga', '1999-06-22'),
(20, 'Geronimo', 'Aguirres', '2002-11-19'),
(21, 'Mateo', 'Bazan', '1111-11-11'),
(22, 'Valentino', 'Cejas', '1111-11-11'),
(23, 'Santiago', 'Fiore', '1111-11-11'),
(24, 'Ivo', 'Romero', '1111-11-11'),
(25, 'Gaspar', 'Rinaldi', '1111-11-11'),
(26, 'Mauricio', 'Rapari', '1990-12-11'),
(27, 'Martin', 'Sequeira', '1111-11-11'),
(28, 'Agustin', 'De Sensi', '1111-11-11'),
(30, 'Pedro', 'De la Rosa', '2024-11-22'),
(32, 'Joa', 'Borras', '2001-05-27'),
(33, 'Joa', 'Borras', '2001-05-27'),
(39, 'Pedro', 'De la Rosa', '2455-03-20'),
(45, 'Pedro', 'De la Rosa', '2005-12-30'),
(46, 'Juan', 'Gonzalez', '2006-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_materia`
--

CREATE TABLE `alumno_materia` (
  `alumno_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumno_materia`
--

INSERT INTO `alumno_materia` (`alumno_id`, `materia_id`) VALUES
(9, 16),
(9, 9),
(46, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`) VALUES
(3, 'Seguridad de los sistemas'),
(4, 'Sistema de informacion organizacional'),
(5, 'Desarrollo de sistemas web'),
(9, 'Derecho y legislacion laboral'),
(10, 'Etica y responsabilidad social'),
(11, 'Practicas Profesionalizantes II'),
(12, 'Redes y Comunicaciones'),
(16, 'Base de Datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `apellido` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellido`) VALUES
(2, 'Walter', 'Bur'),
(3, 'Nico', 'Rotilli'),
(4, 'Karina', 'Gigli'),
(5, 'Omar', 'Orlandini'),
(6, 'Viviana', 'Romo'),
(13, 'Maxi', 'Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_materia`
--

CREATE TABLE `profesor_materia` (
  `profesor_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor_materia`
--

INSERT INTO `profesor_materia` (`profesor_id`, `materia_id`) VALUES
(2, 12),
(2, 3),
(2, 4),
(3, 16),
(3, 5),
(4, 11),
(5, 10),
(6, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno_materia`
--
ALTER TABLE `alumno_materia`
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `materia_id` (`materia_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor_materia`
--
ALTER TABLE `profesor_materia`
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `profesor_id` (`profesor_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_materia`
--
ALTER TABLE `alumno_materia`
  ADD CONSTRAINT `alumno_materia_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `alumno_materia_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`);

--
-- Filtros para la tabla `profesor_materia`
--
ALTER TABLE `profesor_materia`
  ADD CONSTRAINT `profesor_materia_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `profesor_materia_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
