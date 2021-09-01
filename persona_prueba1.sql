-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2021 a las 18:30:43
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `persona_prueba1`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `AddPersona` (IN `nomb` VARCHAR(50), IN `doc` VARCHAR(11), IN `mail` VARCHAR(50))  INSERT INTO nueva_persona 
    VALUES (nomb, doc, mail)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nueva_persona`
--

CREATE TABLE `nueva_persona` (
  `Nombre` varchar(50) NOT NULL,
  `Documento` varchar(11) NOT NULL,
  `Correo Electronico` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nueva_persona`
--

INSERT INTO `nueva_persona` (`Nombre`, `Documento`, `Correo Electronico`) VALUES
('Andres', '1000786497', 'Andres@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nueva_persona`
--
ALTER TABLE `nueva_persona`
  ADD PRIMARY KEY (`Documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
