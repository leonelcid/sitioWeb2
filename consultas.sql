-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2021 a las 18:44:31
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
-- Base de datos: `php_avanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `consulta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`nombre`, `apellido`, `email`, `consulta`) VALUES
('Leonel', 'Cid', 'leonel-cid1@gmail.com', 'Consulta1'),
('Francesco', 'Ulloa', 'franu@gmail.com', 'Consulta 4'),
('Matias', 'Ulloa', 'matiu@gmail.com', 'Consulta 5'),
('Mariano', 'Gutierrez', 'marianog@gmail.com', 'Consulta6'),
('Jorge', 'Heisenberg', 'jorgeh@gmail.com', 'Consulta 4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
