-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 04:36:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escolar_control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `grado` int(1) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombres`, `apellidos`, `grado`, `grupo`, `direccion`, `fecha`) VALUES
(7, 'Daniel Arturo', 'Cedillo Sandoval', 5, 'I', 'Col. Lomas de San Jose, Sierra Madre Oriental #6376', '2021-11-30'),
(8, 'Daniel Arturo', 'Cedillo Sandoval', 5, 'I', 'Col. Lomas de San Jose, Sierra Madre Oriental #6376', '2021-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `id_alumno` int(30) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `promedio` int(2) NOT NULL,
  `aprobado` varchar(20) NOT NULL,
  `grado_grupo` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `id_alumno`, `materia`, `promedio`, `aprobado`, `grado_grupo`, `fecha`) VALUES
(1, 3, 'Matematicas', 8, 'Aprobado', '4-I', '2021-04-23'),
(3, 6, 'Matematicas', 8, 'Aprobado', '5-I', '2021-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `profesor` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `grado` int(1) NOT NULL,
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `profesor`, `apellidos`, `grupo`, `grado`, `turno`) VALUES
(1, 'Matematicas', 'Javier Manuel', 'Ochoa Marquezz', 'E', 4, 'Matutino'),
(3, 'Matematicas', 'Javier Manuel', 'Mora Marquez', 'I', 5, 'Matutino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `materias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `nombres`, `apellidos`, `correo`, `direccion`, `turno`, `materias`) VALUES
(1, 'Daniel', 'Cedillo', 'danielcedillo648@gmail.com', 'Col. Lomas de San Jose, Sierra Madre Oriental #6376', 'Matutino', 'Matematicas, ingles y quimica'),
(3, 'Daniel Arturo', 'Cedillo Sandoval', 'danielcedillo648@gmail.com', 'Col. Lomas de San Jose, Sierra Madre Oriental #6376', 'Matutino', 'Matematicas, ingles y quimica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
