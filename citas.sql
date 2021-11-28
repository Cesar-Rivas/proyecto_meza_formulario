-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 04:06:52
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
  `num_cita` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `servicio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`num_cita`, `nombre`, `fecha`, `hora`, `servicio`) VALUES
(1, 'wawa', '2021-11-15', '', 'Tinte'),
(6, 'ceee', '2021-11-02', '08:11', 'Corte de cabello hombre'),
(65, 'Cesar Rivas', '2021-11-29', '09:54', 'Corte de cabello dama'),
(12, 'wichoman', '2021-11-15', '22:01', 'Uñas postizas'),
(123, 'renato', '2021-11-21', '13:02', 'Decolorado');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
