-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-06-2022 a las 18:58:39
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
-- Estructura de tabla para la tabla `registrar_alumnos`
--

DROP TABLE IF EXISTS `registrar_alumnos`;
CREATE TABLE IF NOT EXISTS `registrar_alumnos` (
  `dni_alumno` varchar(255) NOT NULL,
  `calle_alumno` varchar(255) DEFAULT NULL,
  `ciudad_alumno` varchar(255) DEFAULT NULL,
  `cp_alumno` varchar(255) DEFAULT NULL,
  `creado_el` varchar(255) DEFAULT NULL,
  `email_alumno` varchar(255) DEFAULT NULL,
  `fecha_nacimiento_alumno` date DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `ID` bigint(20) DEFAULT NULL,
  `imagen_alumno` longtext,
  `nombre_alumno` varchar(255) DEFAULT NULL,
  `pais_alumno` varchar(255) DEFAULT NULL,
  `primer_apellido_alumno` varchar(255) DEFAULT NULL,
  `segundo_apellido_alumno` varchar(255) DEFAULT NULL,
  `telefono_alumno` varchar(255) DEFAULT NULL,
  `nivel_alumno` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dni_alumno`),
  KEY `FK_REGISTRAR_ALUMNOS_nivel_alumno` (`nivel_alumno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrar_alumnos`
--

INSERT INTO `registrar_alumnos` (`dni_alumno`, `calle_alumno`, `ciudad_alumno`, `cp_alumno`, `creado_el`, `email_alumno`, `fecha_nacimiento_alumno`, `genero`, `ID`, `imagen_alumno`, `nombre_alumno`, `pais_alumno`, `primer_apellido_alumno`, `segundo_apellido_alumno`, `telefono_alumno`, `nivel_alumno`) VALUES
('a1', 'Calle camas 1', 'Camas', '41222', '2022-03-19 14:11:22', 'a1@a.com', '2022-01-31', 'hombre', 751, 'logoInstituto.jpg', 'a1', 'España', 'a1', 'b1', '123456781', 'FPGS'),
('a2', 'Calle camas 2', 'Camas', '41222', '2022-03-19 14:11:22', 'a2@a.com', '2022-02-01', 'mujer', 751, 'logoInstituto.jpg', 'a2', 'España', 'a2', 'b2', '123456782', 'Bachillerato'),
('a3', 'Calle camas 3', 'Camas', '41222', '2022-03-19 14:11:22', 'a3@a.com', '2022-02-02', 'hombre', 751, 'logoInstituto.jpg', 'a3', 'España', 'a3', 'b3', '123456783', 'FPGS'),
('a8', 'Calle camas 8', 'Camas', '41222', '2022-03-19 14:11:22', 'a8@a.com', '2022-02-07', 'hombre', 751, 'logoInstituto.jpg', 'a8', 'España', 'a8', 'b8', '123456788', 'FPGS'),
('29587784d', 'sss 22', 'f', '11111', '2022-04-17 20:08:39', 'msb.tesla@gmail.com', '2022-04-06', 'hombre', NULL, 'Ã­ndice.png', 'aaa', 'dd', 'aaa', 'aaa', '0034 666666666', 'FPGS'),
('a4', 'Calle camas 4', 'Camas', '41222', '2022-03-19 14:11:22', 'a4@a.com', '2022-02-03', 'hombre', 751, 'logoInstituto.jpg', 'a4', 'España', 'a4', 'b4', '123456784', 'Bachillerato'),
('a5', 'Calle camas 5', 'Camas', '41222', '2022-03-19 14:11:22', 'a5@a.com', '2022-02-04', 'mujer', 751, 'logoInstituto.jpg', 'a5', 'España', 'a5', 'b5', '123456785', 'FPGS'),
('a6', 'Calle camas 6', 'Camas', '41222', '2022-03-19 14:11:22', 'a6@a.com', '2022-02-05', 'hombre', 751, 'logoInstituto.jpg', 'a6', 'España', 'a6', 'b6', '123456786', 'ESO'),
('a7', 'Calle camas 7', 'Camas', '41222', '2022-03-19 14:11:22', 'msb.tesla@gmail.com', '2022-02-06', 'hombre', 751, 'logoInstituto.jpg', 'a7', 'España', 'a7', 'b7', '123456787', 'FPGS'),
('a9', 'Calle camas 9', 'Camas', '41222', '2022-03-19 14:11:22', 'a9@a.com', '2022-02-08', 'hombre', 751, 'logoInstituto.jpg', 'a9', 'España', 'a9', 'b9', '123456789', 'ESO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
