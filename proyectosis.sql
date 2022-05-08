-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-05-2022 a las 15:31:54
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
-- Estructura de tabla para la tabla `pr`
--

DROP TABLE IF EXISTS `pr`;
CREATE TABLE IF NOT EXISTS `pr` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pr`
--

INSERT INTO `pr` (`id`) VALUES
(30),
(130),
(230),
(1230);

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosis`
--

INSERT INTO `proyectosis` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `autre`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(27, '2022-05-18', 'Changement vehicule', 'dssaaa', 'ddfff', 'dssaaa', 'dssaaa', 'ffff', '2022-05-26', '2022-05-24', '0.00', '0.00', '0.00', '', '0.00', '2022-05-29', 'dssaaa', '2022-05-06 20:46:31'),
(32, '2022-05-08', 'Duplicata', 'mohammed', 'mohammed', 'mohammed', 'mohammed', 'mohammed sebti', '2022-05-19', '2022-05-25', '244.89', '2.00', '12.00', '', '230.89', '2022-05-27', 'mohammed', '2022-05-08 14:49:13');

--
-- Disparadores `proyectosis`
--
DROP TRIGGER IF EXISTS `actualiser_prix_bu`;
DELIMITER $$
CREATE TRIGGER `actualiser_prix_bu` BEFORE UPDATE ON `proyectosis` FOR EACH ROW INSERT into tarif_actualise (anterieur_prix, anterieur_assure, nouveau_prix, nouveau_assure, usuario, cree_le) VALUES (old.totale, old.assure, new.totale, new.assure, CURRENT_USER, now())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `proyectosis_ai`;
DELIMITER $$
CREATE TRIGGER `proyectosis_ai` AFTER INSERT ON `proyectosis` FOR EACH ROW insert into proyectosis_copie(recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,autre,reste,date_versement,mode_paiment,cree_le) VALUES (new.recu, new.fecha_hoy, new.letype, new.attestation, new.police, new.matricule, new.produit, new.assure, new.du, new.au, new.totale, new.espece, new.cheque, new.autre, new.reste, new.date_versement, new.mode_paiment, now())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `proyectosis_bu`;
DELIMITER $$
CREATE TRIGGER `proyectosis_bu` BEFORE UPDATE ON `proyectosis` FOR EACH ROW BEGIN
if new.totale < 0 THEN
set new.totale = 0;
set new.reste = 0;
end if;
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `recu_elimines_ad`;
DELIMITER $$
CREATE TRIGGER `recu_elimines_ad` AFTER DELETE ON `proyectosis` FOR EACH ROW insert into proyectosis_elimines (recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,autre,reste,date_versement,mode_paiment,cree_le)
	 VALUES (old.recu, old.fecha_hoy, old.letype, old.attestation, old.police, old.matricule, old.produit, old.assure, old.du, old.au, old.totale, 
	 	old.espece, old.cheque, old.autre, old.reste, old.date_versement, old.mode_paiment, now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosis_copie`
--

DROP TABLE IF EXISTS `proyectosis_copie`;
CREATE TABLE IF NOT EXISTS `proyectosis_copie` (
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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosis_copie`
--

INSERT INTO `proyectosis_copie` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `autre`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(24, '2022-05-04', 'Affaire nouvelle', 'dssaaa', '100.2020.000121', 'dssaaa', 'dssaaa', 'ahmed', '2022-05-24', '2022-05-18', '12.00', '2.00', '4.00', '', '6.00', '2022-05-28', 'dssaaa', '2022-05-08 14:48:16'),
(25, '2022-05-09', 'Renouvellement', 'dssaaa', 'aassss', 'dssaaa', 'dssaaa', 'sssss', '2022-05-03', '2022-05-10', '14.00', '0.00', '0.00', '', '14.00', '2022-05-24', 'dssaaa', '2022-05-08 14:48:16'),
(26, '2022-05-10', 'Renouvellement', 'dssaaa', 'aassss', 'dssaaa', 'dssaaa', 'sssss', '2022-05-03', '2022-05-10', '14.00', '0.00', '0.00', '', '14.00', '2022-05-17', 'dssaaa', '2022-05-08 14:48:16'),
(27, '2022-05-18', 'Changement vehicule', 'dssaaa', 'ddfff', 'dssaaa', 'dssaaa', 'ffff', '2022-05-26', '2022-05-24', '22.00', '0.00', '0.00', '', '22.00', '2022-05-29', 'dssaaa', '2022-05-08 14:48:16'),
(28, '2022-05-10', 'Changement vehicule', 'ggggg', 'hhhh', 'hhhh', 'hhhhh', 'hhhhh', '2022-05-14', '2022-05-29', '123.00', '0.00', '0.00', '', '123.00', '2022-05-17', 'jjjjj', '2022-05-08 14:48:16'),
(32, '2022-05-08', 'Duplicata', 'mohammed', 'mohammed', 'mohammed', 'mohammed', 'mohammed', '2022-05-19', '2022-05-25', '44.00', '2.00', '12.00', '', '30.00', '2022-05-27', 'mohammed', '2022-05-08 14:49:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosis_elimines`
--

DROP TABLE IF EXISTS `proyectosis_elimines`;
CREATE TABLE IF NOT EXISTS `proyectosis_elimines` (
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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosis_elimines`
--

INSERT INTO `proyectosis_elimines` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `autre`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(28, '2022-05-10', 'Changement vehicule', 'ggggg', 'hhhh', 'hhhh', 'hhhhh', 'hhhhh', '2022-05-14', '2022-05-29', '123.00', '0.00', '0.00', '', '123.00', '2022-05-17', 'jjjjj', '2022-05-08 15:20:06'),
(31, '2022-05-07', 'Changement vehicule', 'ddd', 'ddd', 'ddd', 'dd', 'dd', '2099-03-03', '2022-05-07', '12.00', '2.00', '3.00', '', '7.00', '2022-05-07', 'dd', '2022-05-08 15:20:29'),
(24, '2022-05-04', 'Affaire nouvelle', 'dssaaa', '100.2020.000121', 'dssaaa', 'dssaaa', 'ahmed ali', '2022-05-24', '2022-05-18', '1332.45', '2.00', '4.00', '', '1326.45', '2022-05-28', 'dssaaa', '2022-05-08 15:20:33'),
(25, '2022-05-09', 'Renouvellement', 'dssaaa', 'aassss', 'dssaaa', 'dssaaa', 'sssss', '2022-05-03', '2022-05-10', '14.00', '0.00', '0.00', '', '14.00', '2022-05-24', 'dssaaa', '2022-05-08 15:20:37'),
(26, '2022-05-10', 'Renouvellement', 'dssaaa', 'aassss', 'dssaaa', 'dssaaa', 'sssss', '2022-05-03', '2022-05-10', '14.00', '0.00', '0.00', '', '14.00', '2022-05-17', 'dssaaa', '2022-05-08 15:28:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarif_actualise`
--

DROP TABLE IF EXISTS `tarif_actualise`;
CREATE TABLE IF NOT EXISTS `tarif_actualise` (
  `anterieur_prix` decimal(10,2) DEFAULT NULL,
  `anterieur_assure` varchar(50) DEFAULT NULL,
  `nouveau_prix` decimal(10,2) DEFAULT NULL,
  `nouveau_assure` varchar(50) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `cree_le` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarif_actualise`
--

INSERT INTO `tarif_actualise` (`anterieur_prix`, `anterieur_assure`, `nouveau_prix`, `nouveau_assure`, `usuario`, `cree_le`) VALUES
('12.00', 'ahmed', '1332.00', 'ahmed ali', 'root@localhost', '2022-05-08 17:02:27'),
('1332.00', 'ahmed ali', '1332.45', 'ahmed ali', 'root@localhost', '2022-05-08 17:10:28'),
('44.00', 'mohammed', '244.89', 'mohammed sebti', 'root@localhost', '2022-05-08 17:11:44'),
('22.00', 'ffff', '-22.00', 'ffff', 'root@localhost', '2022-05-08 17:28:57'),
('0.00', 'ffff', '120.00', 'ffff', 'root@localhost', '2022-05-08 17:30:11'),
('120.00', 'ffff', '-120.00', 'ffff', 'root@localhost', '2022-05-08 17:30:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
