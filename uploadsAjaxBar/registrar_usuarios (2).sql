-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-06-2022 a las 19:02:03
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
-- Estructura de tabla para la tabla `registrar_usuarios`
--

DROP TABLE IF EXISTS `registrar_usuarios`;
CREATE TABLE IF NOT EXISTS `registrar_usuarios` (
  `dni` varchar(255) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fecha_registro` varchar(255) DEFAULT NULL,
  `ID` bigint(20) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `departamento` varchar(255) DEFAULT NULL,
  `perfil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dni`),
  KEY `FK_REGISTRAR_USUARIOS_perfil` (`perfil`),
  KEY `FK_REGISTRAR_USUARIOS_departamento` (`departamento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrar_usuarios`
--

INSERT INTO `registrar_usuarios` (`dni`, `apellidos`, `ciudad`, `clave`, `direccion`, `email`, `fecha`, `fecha_registro`, `ID`, `nombre`, `pais`, `telefono`, `usuario`, `departamento`, `perfil`) VALUES
('1', 'a', 'Sevilla', 'a', 'Camas', 'msb.caixa@gmail.com', '2022-01-22', '2022-03-19 13:10:12', 251, 'a', 'España', '123123123', 'a', 'Comercio', 'administrador'),
('11', 'aa', 'Sevilla', 'aa', 'Camas', 'a@a.com', '2022-02-22', '2022-03-19 13:14:04', 351, 'aa', 'Espaï¿½a', '123123123', 'aa', 'Nuevo', 'jefatura'),
('29587784D', 'eee eeee', 'fff', 'dddd44', 'ddddd 34', 'msb.duck@gmail.com', '2022-04-19', '2022-04-23 15:54:14', NULL, 'eeee', 'fff', '655173173', 'aaaa34aa', 'Informatica', 'administrador'),
('22334455d', 'profesor a', 'camas', '1234', 'camas 34 sevilla', 'msb.duck@gmail.com', '2022-06-05', NULL, NULL, 'Profesor a', 'España', '123456789', 'profesor_a', 'quimica', 'administrador'),
('22334455x', 'profesor b', 'camas', '1234', 'camas 34 sevilla', 'msb.duck@gmail.com', '2022-06-05', NULL, NULL, 'Profesor b', 'España', '123456789', 'profesor_b', 'fisica', 'administrador'),
('22334455z', 'profesor c', 'camas', '1234', 'camas 34 sevilla', 'msb.duck@gmail.com', '2022-06-05', NULL, NULL, 'Profesor c', 'España', '123456789', 'profesor_c', 'historia', 'administrador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
