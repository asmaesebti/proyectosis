-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-06-2022 a las 19:03:10
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
-- Estructura de tabla para la tabla `registrar_usuarios_materia`
--

DROP TABLE IF EXISTS `registrar_usuarios_materia`;
CREATE TABLE IF NOT EXISTS `registrar_usuarios_materia` (
  `Registrar_usuarios_dni` varchar(255) NOT NULL,
  `listaMaterias_materia` varchar(255) NOT NULL,
  PRIMARY KEY (`Registrar_usuarios_dni`,`listaMaterias_materia`),
  KEY `REGISTRAR_USUARIOS_MATERIA_listaMaterias_materia` (`listaMaterias_materia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrar_usuarios_materia`
--

INSERT INTO `registrar_usuarios_materia` (`Registrar_usuarios_dni`, `listaMaterias_materia`) VALUES
('1', 'a'),
('1', 'dfddd'),
('1', 'Diseño'),
('1', 'fsfsaff'),
('1', 'java2'),
('1', 'mjmkiolpñ'),
('1', 's23edf'),
('1', 'ssss'),
('1', 'sssssssss'),
('11', '11'),
('11', 'asedf'),
('11', 'bggrf'),
('11', 'Electronica'),
('11', 'Empresa'),
('11', 'Programacion'),
('111', 'Fisica'),
('111', 'Programacion'),
('111', 'Quimica'),
('29587784D', '123w'),
('29587784D', 'a'),
('b', 'Despliegue'),
('b', 'Entorno cliente'),
('b', 'Fisica'),
('b', 'HLC'),
('b', 'Programacion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
