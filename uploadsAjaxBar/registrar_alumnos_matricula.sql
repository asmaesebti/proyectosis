-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-06-2022 a las 19:01:30
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `instituto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_alumnos_matricula`
--

DROP TABLE IF EXISTS `registrar_alumnos_matricula`;
CREATE TABLE IF NOT EXISTS `registrar_alumnos_matricula` (
  `Registrar_alumnos_dni_alumno` varchar(255) NOT NULL,
  `listaMatriculaciones_ID` bigint(20) NOT NULL,
  PRIMARY KEY (`Registrar_alumnos_dni_alumno`,`listaMatriculaciones_ID`),
  KEY `REGISTRAR_ALUMNOS_MATRICULAlistaMatriculaciones_ID` (`listaMatriculaciones_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrar_alumnos_matricula`
--

INSERT INTO `registrar_alumnos_matricula` (`Registrar_alumnos_dni_alumno`, `listaMatriculaciones_ID`) VALUES
('a1', 6),
('a1', 1451),
('a2', 3),
('a2', 9),
('a2', 11),
('a2', 12),
('a2', 18),
('a3', 2),
('a3', 5),
('a4', 1),
('a4', 12),
('a4', 14),
('a5', 10),
('a6', 1),
('a7', 5),
('a7', 7),
('a7', 11),
('a7', 15),
('a7', 16),
('a8', 4),
('a8', 6),
('a8', 10),
('a8', 17),
('a9', 2),
('a9', 8),
('a9', 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
