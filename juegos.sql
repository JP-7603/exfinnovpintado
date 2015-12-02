-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2015 a las 17:16:04
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen_nov`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_creacion` char(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pjs` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` char(2) COLLATE utf8_spanish_ci DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `descripcion`, `categoria`, `fecha_creacion`, `pjs`, `estado`) VALUES
(1, 'juego 1', 'descripcion de juego 1', 'categoria juego 1', '1995', 'personaje juego 1 ', '1'),
(2, 'juego desde formulario', 'descripcion juego desde formulario', 'Indie', '2015', 'Jugador 1', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
