-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2021 a las 06:48:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_solicitud` (IN `names` VARCHAR(30), IN `lnames` VARCHAR(30), IN `mail` VARCHAR(50), IN `peti` LONGTEXT)  BEGIN
	INSERT INTO solicitud 
	VALUES(' ', names, lnames, mail, peti);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_solicitud` (IN `id` INT)  BEGIN 
	DELETE FROM solicitud
    WHERE IdSoli=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_solicitudes` ()  BEGIN 
	SELECT * FROM solicitud;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_una_soli` (IN `id` INT)  BEGIN 
	SELECT * FROM solicitud 
    WHERE IdSoli=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_solicitud` (IN `names` VARCHAR(30), IN `lnames` VARCHAR(30), IN `mail` VARCHAR(30), IN `peti` LONGTEXT)  BEGIN
	UPDATE solicitud
    SET Nombres=names, Apellidos=lnames, Correo=mail, Peticion=peti;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `IdSoli` int(11) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Peticion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`IdSoli`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `IdSoli` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
