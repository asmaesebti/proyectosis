-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-05-2022 a las 14:39:38
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
-- Base de datos: `proyectosis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosis`
--

DROP TABLE IF EXISTS `proyectosis`;
CREATE TABLE IF NOT EXISTS `proyectosis` (
  `recu` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hoy` date DEFAULT NULL,
  `letype` varchar(50) NOT NULL,
  `attestation` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `produit` varchar(20) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `autre` varchar(100) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosis`
--

INSERT INTO `proyectosis` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `autre`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(24, '2022-05-04', 'Affaire nouvelle', 'dssaaa', '100.2020.000121', 'dssaaa', 'dssaaa', 'ahmed', '2022-05-24', '2022-05-18', '12.00', '2.00', '4.00', '', '6.00', '2022-05-28', 'dssaaa', '2022-05-06 18:38:31'),
(25, '2022-05-09', 'Renouvellement', 'dssaaa', 'aassss', 'dssaaa', 'dssaaa', 'sssss', '2022-05-03', '2022-05-10', '14.00', '0.00', '0.00', '', '14.00', '2022-05-24', 'dssaaa', '2022-05-06 22:46:13'),
(26, '2022-05-10', 'Renouvellement', 'dssaaa', 'aassss', 'dssaaa', 'dssaaa', 'sssss', '2022-05-03', '2022-05-10', '14.00', '0.00', '0.00', '', '14.00', '2022-05-17', 'dssaaa', '2022-05-06 22:46:16'),
(27, '2022-05-18', 'Changement vehicule', 'dssaaa', 'ddfff', 'dssaaa', 'dssaaa', 'ffff', '2022-05-26', '2022-05-24', '22.00', '0.00', '0.00', '', '22.00', '2022-05-29', 'dssaaa', '2022-05-06 22:46:31'),
(28, '2022-05-10', 'Changement vehicule', 'ggggg', 'hhhh', 'hhhh', 'hhhhh', 'hhhhh', '2022-05-14', '2022-05-29', '123.00', '0.00', '0.00', '', '123.00', '2022-05-17', 'jjjjj', '2022-05-07 11:52:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
