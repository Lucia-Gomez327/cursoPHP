-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2019 a las 19:40:17
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendacontactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `DNI` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `fechaN` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `foto` varchar(445) DEFAULT NULL,
  `estado` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `DNI`, `nombre`, `apellido`, `fechaN`, `email`, `telefono`, `foto`, `estado`) VALUES
(83, '65165198498', 'Maria', 'Lopez', '1990-04-22', 'mariaL@hotmail.com', '2664789584', '83.jpg', 1),
(84, '45132648', 'Matias', 'Leiva', '2005-09-18', 'matileiva@yahoo.com', '3834976418', '84.jpg', 2),
(85, '', 'Juan', 'Perez', '0000-00-00', '', '122424253535', '85.jpg', 1),
(86, '', 'asdasdas', '', '0000-00-00', '', '34343', NULL, 2),
(87, '', 'Karina', '', '0000-00-00', '', '999', '87.jpg', 1),
(88, '', 'asd', '', '0000-00-00', '', '123123', '88.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `estado` int(1) DEFAULT '1',
  `id` int(11) NOT NULL,
  `contenido` varchar(545) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reclamo`
--

INSERT INTO `reclamo` (`estado`, `id`, `contenido`, `fecha`) VALUES
(1, 1, 'asdasdasd', NULL),
(1, 2, 'asd', NULL),
(1, 3, 'AAA', NULL),
(1, 4, 'AAAAAAAAAaa', NULL),
(1, 5, 'ssfsf', NULL),
(1, 6, 'aaa', NULL),
(1, 7, 'asdasd', NULL),
(1, 8, 'no me gustan los reclamos', NULL),
(1, 9, 'asdas', NULL),
(1, 10, 'asda', NULL),
(1, 11, 'ada', '0000-00-00 00:00:00'),
(1, 12, 'afafafa', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
