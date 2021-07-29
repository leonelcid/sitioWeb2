-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2021 a las 01:56:11
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
-- Estructura de tabla para la tabla `user_pass`
--

CREATE TABLE `user_pass` (
  `usuario` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_pass`
--

INSERT INTO `user_pass` (`usuario`, `password`) VALUES
('leonel', '$2y$04$D6oGVOpLsioZ2'),
('leonel', '$2y$04$SwxN5k94O110L'),
('lau', '$2y$04$UybBfnB9q1/q1'),
('may', '$2y$04$25LV2XAZtYanc'),
('admin', '$2y$04$sWiosHMNoyvBu'),
('jose', '$2y$04$G3F9LemaKGiOKS0ybvYWOeI23Y8N77A3UtTHaDUCFJWXqN5PwLNdW'),
('juan', '$2y$04$k5Hwyw1IeAWJBewEkTY3Lu4/SG7J5tLWt.2WbW492haCsUJShQXgG'),
('admin', '$2y$04$lFNLXLrOBRchs7cwHFbmVOZzvHWR/UA7MAL0WiVeS.0tNmM.sa.eW'),
('juan', '$2y$10$zDacC3oq/nA6wWXBOsM7le.exToOpXqRlQnF/OEhTIWabcn.I2UAu'),
('admin1', '$2y$04$Qn27kqg.XvB6MNIh4N6crui56Nac3jMf5FdiQu9fjb0uBxJrqvksW'),
('carlosleonel', '$2y$04$UXuOtIV.Rz183o0FHp7YRep/a.5fyvavtA8sWpdt8JT3emCqb1eA2'),
('juancarlos', '$2y$04$iB2UatmReQoa3XxnyyLEJu4.seHv7ZypedyC0qf.n3YnpnB98Kl9q');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
