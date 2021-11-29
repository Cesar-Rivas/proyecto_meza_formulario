-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 23:19:23
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estilista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(99) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `servicio` varchar(30) NOT NULL,
  `telefono` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre`, `fecha`, `hora`, `servicio`, `telefono`) VALUES
(1, 'César René Rivas Andrade', '2021-11-30', '14:00', 'Corte de cabello (corto)', '+52-656-35242'),
(2, 'Tanya Mimbela Moreno', '2021-12-11', '10:00', 'Peinado', '+52-656-65656'),
(3, 'Evelyn Rincón Galván', '2021-12-06', '18:00', 'Tinte', '+52-656-90909'),
(4, ' Joshua Alexander Nava Sánchez', '2021-12-01', '16:00', 'Corte de cabello (corto)', '+52-656-89128'),
(5, 'Leticia Meza Díaz', '2021-12-01', '17:00', 'Pintado de uñas', '+52-656-12341');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
