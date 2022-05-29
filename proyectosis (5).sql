-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-05-2022 a las 19:56:48
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

DELIMITER $$
--
-- Funciones
--
DROP FUNCTION IF EXISTS `SPLIT_STR`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `SPLIT_STR` (`x` VARCHAR(255), `delim` VARCHAR(12), `pos` INT) RETURNS VARCHAR(255) CHARSET utf8 COLLATE utf8_unicode_ci RETURN REPLACE(SUBSTRING(SUBSTRING_INDEX(x, delim, pos),
       LENGTH(SUBSTRING_INDEX(x, delim, pos -1)) + 1),
       delim, '')$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`) VALUES
(1, 'Banner 1', 'banner-1.jpg'),
(2, 'Banner 2', 'banner-2.jpg'),
(3, 'Banner 3', 'banner-3.jpg'),
(4, 'Banner 4', 'banner-4.jpg'),
(5, 'Banner 5', 'banner-5.jpg'),
(6, 'Banner 6', 'banner-6.jpg'),
(7, 'Banner 7', 'banner-7.jpg'),
(8, 'Banner 8', 'banner-8.jpg'),
(9, 'Banner 9', 'banner-9.jpg'),
(10, 'Banner 10', 'banner-10.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caroussel_slider`
--

DROP TABLE IF EXISTS `caroussel_slider`;
CREATE TABLE IF NOT EXISTS `caroussel_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta-imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caroussel_slider`
--

INSERT INTO `caroussel_slider` (`id`, `ruta-imagen`) VALUES
(13, 'imagenes/moha.png'),
(14, 'imagenes/Ã­ndicee.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `letype`
--

DROP TABLE IF EXISTS `letype`;
CREATE TABLE IF NOT EXISTS `letype` (
  `id_letype` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_letype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `creado_el` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_letype`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `letype`
--

INSERT INTO `letype` (`id_letype`, `nombre_letype`, `creado_el`) VALUES
(1, 'Resiliation', '2022-05-29 13:16:26'),
(2, 'Duplicata', '2022-05-29 13:16:26'),
(3, 'Affaire nouvelle', '2022-05-29 13:16:43'),
(4, 'Renouvellement', '2022-05-29 13:16:43'),
(5, 'Changement vehicule', '2022-05-29 13:17:05'),
(6, 'Autres', '2022-05-29 13:17:05'),
(8, 'Autre provisoire', '2022-05-29 13:17:43'),
(9, 'Attestation définitive', '2022-05-29 15:00:37');

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
  `recu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_hoy` date DEFAULT NULL,
  `letype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `attestation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `police` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `produit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `assure` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'nulo',
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyectosis`
--

INSERT INTO `proyectosis` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `virement`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(1, '2022-05-08', 'Resiliation', 'alhamdulillah', 'alhamdulillah', 'alhamdulillah', 'alhamdulillah', 'alhamdulillah allah', '2022-05-24', '2022-06-27', '1234.00', '23.00', '4.00', '0.00', '1207.00', '2022-05-17', 'nulo', '2022-05-08 19:39:06'),
(14, '2022-05-29', 'Affaire nouvelle', 'alfa', 'alfa', 'alfa', 'alfa', 'Brook Insall', '2022-05-12', '2022-06-05', '9876.00', '0.00', '0.00', '0.00', '9876.00', '1970-01-01', 'nulo', '2022-05-29 10:50:47'),
(15, '2022-05-29', 'Affaire nouvelle', 'aaaaabetassssss', 'betajjjjjjjjj', 'beta', 'beta', 'beta bnmjk', '2022-04-30', '2022-06-05', '900.00', '0.00', '0.00', '0.00', '900.00', '1970-01-01', 'nulo', '2022-05-29 10:52:46'),
(21, '2022-05-29', 'Attestation définitive', 'zineb', 'zineb', 'zineb', 'zineb', 'zineb huyg', '2022-05-26', '2022-05-26', '34.00', '0.00', '0.00', '0.00', '34.00', '1970-01-01', 'nulo', '2022-05-29 15:26:37'),
(17, '2022-05-29', 'Renouvellement', 'gamavvvvv', 'gama', 'gama', 'gama', 'gama gefd', '2022-05-23', '2022-06-02', '88.00', '0.00', '0.00', '0.00', '88.00', '1970-01-01', 'nulo', '2022-05-29 11:06:23'),
(27, '2022-05-29', 'Changement vehicule', 'asd', 'asd', 'asd', 'asdasd', 'asd afgh', '2022-06-03', '2022-05-27', '44.00', '0.00', '0.00', '0.00', '44.00', '1970-01-01', 'nulo', '2022-05-29 17:12:45'),
(22, '2022-05-29', 'Changement vehicule', 'mouhcin', 'mouhcin', 'mouhcin', 'mouhcin', 'mouhcin ahmed', '2022-05-30', '2022-06-05', '77.00', '0.00', '0.00', '0.00', '77.00', '1970-01-01', 'nulo', '2022-05-29 15:42:13'),
(28, '2022-05-29', 'Duplicata', 'simon templar', 'simon templar', 'simon templar', 'simon templar', 'simon templar', '2022-05-30', '2022-06-05', '23.00', '0.00', '0.00', '0.00', '23.00', '1970-01-01', 'nulo', '2022-05-29 18:42:50');

--
-- Disparadores `proyectosis`
--
DROP TRIGGER IF EXISTS `actualiser_prix_bu`;
DELIMITER $$
CREATE TRIGGER `actualiser_prix_bu` BEFORE UPDATE ON `proyectosis` FOR EACH ROW INSERT into tarif_actualise (anterieur_prix, anterieur_assure, nouveau_prix, nouveau_assure, usuario, cree_le) VALUES (old.totale, old.assure, new.totale, new.assure, CURRENT_USER, now())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `after_update_proyectosis`;
DELIMITER $$
CREATE TRIGGER `after_update_proyectosis` AFTER UPDATE ON `proyectosis` FOR EACH ROW BEGIN
    UPDATE  proyectosis_copie
    SET  fecha_hoy = NEW.fecha_hoy
       , letype = NEW.letype
       , attestation = NEW.attestation
        , police = NEW.police
         , matricule = NEW.matricule
          , produit = NEW.produit
           , assure = NEW.assure
            , du = NEW.du
             , au = NEW.au
              , totale = NEW.totale
               , espece = NEW.espece
                , cheque = NEW.cheque
                , virement = NEW.virement
                , reste = NEW.reste
                , date_versement = NEW.date_versement
    WHERE recu = NEW.recu;    
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `competence_ins`;
DELIMITER $$
CREATE TRIGGER `competence_ins` AFTER INSERT ON `proyectosis` FOR EACH ROW begin
 insert into usuarios (nombre,apellidos,email,telefono)
 VALUES(SPLIT_STR(new.assure,' ' , 1), SPLIT_STR(new.assure,' ' , 2), '','');
 
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `proyectosis_ai`;
DELIMITER $$
CREATE TRIGGER `proyectosis_ai` AFTER INSERT ON `proyectosis` FOR EACH ROW insert into proyectosis_copie(recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,virement,reste,date_versement,mode_paiment,cree_le) VALUES (new.recu, new.fecha_hoy, new.letype, new.attestation, new.police, new.matricule, new.produit, new.assure, new.du, new.au, new.totale, new.espece, new.cheque, new.virement, new.reste, new.date_versement, new.mode_paiment, now())
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
CREATE TRIGGER `recu_elimines_ad` AFTER DELETE ON `proyectosis` FOR EACH ROW insert into proyectosis_elimines (recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,virement,reste,date_versement,mode_paiment,cree_le)
	 VALUES (old.recu, old.fecha_hoy, old.letype, old.attestation, old.police, old.matricule, old.produit, old.assure, old.du, old.au, old.totale, 
	 	old.espece, old.cheque, old.virement, old.reste, old.date_versement, old.mode_paiment, now())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `usuarios_ai`;
DELIMITER $$
CREATE TRIGGER `usuarios_ai` AFTER INSERT ON `proyectosis` FOR EACH ROW insert into usuarios (id, nombre,apellidos, email,telefono) VALUES
(new.recu, new.assure, new.letype, new.police, new.produit)
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
  `produit` varchar(200) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosis_copie`
--

INSERT INTO `proyectosis_copie` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `virement`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(5, '2022-05-11', 'Changement vehicule', '', 'aeafsfsafasf', '', 'asfafaf', 'asfasfasf', '2022-05-28', '2022-05-29', '123.99', '22.00', '33.00', '0.00', '68.99', '2022-05-22', 'nulo', '2022-05-11 18:32:10'),
(6, '2022-05-13', 'Changement vehicule', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', '2022-05-19', '2022-05-29', '123.00', '0.00', '0.00', '0.00', '123.00', NULL, 'nulo', '2022-05-13 17:24:10'),
(7, '2022-05-13', 'Resiliation', 'mmmmm', 'mmmmm', 'mmmmm', 'mmmmm', 'mmmmm', '2022-05-18', '2022-05-29', '444.00', '0.00', '0.00', '0.00', '444.00', '1970-01-01', 'nulo', '2022-05-13 17:26:27'),
(8, '2022-05-21', 'Attestation dÃ©finitive', 'ddddddd', 'ddddd', 'ddddd', 'dddd', 'dddd', '2022-05-19', '2022-05-31', '99.00', '0.00', '0.00', '0.00', '99.00', '1970-01-01', 'nulo', '2022-05-21 17:57:31'),
(9, '2022-05-28', 'Renouvellement', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', '2022-05-24', '2022-05-21', '1233.00', '0.00', '0.00', '0.00', '1233.00', NULL, 'nulo', '2022-05-28 23:03:06'),
(10, '2022-05-28', 'Renouvellement', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', '2022-05-24', '2022-05-21', '1233.00', '0.00', '0.00', '0.00', '1233.00', NULL, 'nulo', '2022-05-28 23:04:26'),
(11, '2022-05-28', 'Renouvellement', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', '2022-05-24', '2022-05-21', '1233.00', '0.00', '0.00', '0.00', '1233.00', NULL, 'nulo', '2022-05-28 23:05:39'),
(12, '2022-05-28', 'Changement vehicule', 'sebtifff', 'sebti', 'sebti', 'sebti', 'sebti', '2022-05-25', '2022-05-18', '4566.97', '0.00', '0.00', '0.00', '4566.97', '1970-01-01', 'nulo', '2022-05-28 23:20:08'),
(13, '2022-05-29', 'Resiliation', 'moha123', 'simonFilipo11111', 'simonFilipo', 'simonFilipo', 'simonFilipo', '2022-05-30', '2022-06-05', '23456.00', '0.00', '0.00', '0.00', '23456.00', '1970-01-01', 'nulo', '2022-05-29 10:07:13'),
(14, '2022-05-29', 'Affaire nouvelle', 'alfa', 'alfa', 'alfa', 'alfa', 'Brook Insall', '2022-05-12', '2022-06-05', '9876.00', '0.00', '0.00', '0.00', '9876.00', '1970-01-01', 'nulo', '2022-05-29 10:50:47'),
(15, '2022-05-29', 'Affaire nouvelle', 'aaaaabetassssss', 'betajjjjjjjjj', 'beta', 'beta', 'beta bnmjk', '2022-04-30', '2022-06-05', '900.00', '0.00', '0.00', '0.00', '900.00', '1970-01-01', 'nulo', '2022-05-29 10:52:46'),
(16, '2022-05-29', 'Affaire nouvelle', 'beta', 'beta', 'beta', 'beta', 'beta', '2022-04-30', '2022-06-05', '454545.00', '0.00', '0.00', '0.00', '454545.00', NULL, 'nulo', '2022-05-29 10:53:10'),
(17, '2022-05-29', 'Renouvellement', 'gamavvvvv', 'gama', 'gama', 'gama', 'gama gefd', '2022-05-23', '2022-06-02', '88.00', '0.00', '0.00', '0.00', '88.00', '1970-01-01', 'nulo', '2022-05-29 11:06:23'),
(18, '2022-05-29', 'Attestation définitive', 'alhamdulillah plus', 'alhamdulillah plus', 'alhamdulillah plus', 'alhamdulillah plus', 'alhamdulillah plus', '2022-06-01', '2022-05-15', '55555.00', '0.00', '0.00', '0.00', '55555.00', '1970-01-01', 'nulo', '2022-05-29 13:58:37'),
(19, '2022-05-29', 'Attestation dÃ©finitive', 'ahmed', 'ahmed', 'ahmed', 'ahmed', 'ahmed', '2022-05-24', '2022-06-05', '43.00', '0.00', '0.00', '0.00', '43.00', NULL, 'nulo', '2022-05-29 14:58:04'),
(20, '2022-05-29', 'Attestation dÃ©finitive', 'simon', 'simon', 'simon', 'simon', 'simon', '2022-05-30', '2022-05-26', '123.00', '0.00', '0.00', '0.00', '123.00', NULL, 'nulo', '2022-05-29 15:20:32'),
(21, '2022-05-29', 'Attestation définitive', 'zineb', 'zineb', 'zineb', 'zineb', 'zineb huyg', '2022-05-26', '2022-05-26', '34.00', '0.00', '0.00', '0.00', '34.00', '1970-01-01', 'nulo', '2022-05-29 15:26:37'),
(22, '2022-05-29', 'Changement vehicule', 'mouhcin', 'mouhcin', 'mouhcin', 'mouhcin', 'mouhcin ahmed', '2022-05-30', '2022-06-05', '77.00', '0.00', '0.00', '0.00', '77.00', '1970-01-01', 'nulo', '2022-05-29 15:42:13'),
(23, '2022-05-29', 'Attestation dÃ©finitive', 'jhon', 'jhon', 'jhon', 'jhon', 'jhon', '2022-05-24', '2022-06-05', '34.00', '0.00', '0.00', '0.00', '34.00', NULL, 'nulo', '2022-05-29 17:03:58'),
(24, '2022-05-29', 'Attestation dÃ©finitive', 'jhon3', 'jhon3', 'jhon3', 'jhon3', 'jhon3', '2022-05-24', '2022-06-05', '34.00', '0.00', '0.00', '0.00', '34.00', NULL, 'nulo', '2022-05-29 17:08:20'),
(25, '2022-05-29', 'Renouvellement', 'asd', 'asd', 'asd', 'asd', 'asd', '2022-06-01', '2022-06-05', '45.00', '0.00', '0.00', '0.00', '45.00', NULL, 'nulo', '2022-05-29 17:09:22'),
(26, '2022-05-29', 'Changement vehicule', 'asd', 'asd', 'asd', 'asd', 'asd', '2022-06-01', '2022-06-05', '67.00', '0.00', '0.00', '0.00', '67.00', NULL, 'nulo', '2022-05-29 17:11:18'),
(27, '2022-05-29', 'Changement vehicule', 'asd', 'asd', 'asd', 'asdasd', 'asd afgh', '2022-06-03', '2022-05-27', '44.00', '0.00', '0.00', '0.00', '44.00', '1970-01-01', 'nulo', '2022-05-29 17:12:45'),
(28, '2022-05-29', 'Duplicata', 'simon templar', 'simon templar', 'simon templar', 'simon templar', 'simon templar', '2022-05-30', '2022-06-05', '23.00', '0.00', '0.00', '0.00', '23.00', '1970-01-01', 'nulo', '2022-05-29 18:42:50');

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
  `produit` varchar(200) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosis_elimines`
--

INSERT INTO `proyectosis_elimines` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `virement`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(3, '2022-05-08', 'Changement vehicule', 'mohammed', 'mohammed', 'mohammed', 'mohammed', 'mohammed', '2022-05-21', '2022-05-24', '23.00', '2.34', '0.00', '0.00', '20.66', '2022-05-18', 'nulo', '2022-05-08 20:12:17'),
(2, '2022-05-08', 'Duplicata', 'sebti', 'sebti', 'sebti', 'sebti', 'sebti', '2022-05-19', '2022-05-18', '234.54', '23.00', '200.00', '0.00', '11.54', '2022-05-18', 'nulo', '2022-05-08 20:12:21'),
(8, '2022-05-21', 'Attestation dÃ©finitive', 'ddddddd', 'ddddd', 'ddddd', 'dddd', 'dddd', '2022-05-19', '2022-05-31', '99.00', '0.00', '0.00', '0.00', '99.00', '1970-01-01', 'nulo', '2022-05-29 10:29:41'),
(7, '2022-05-13', 'Resiliation', 'mmmmm', 'mmmmm', 'mmmmm', 'mmmmm', 'mmmmm', '2022-05-18', '2022-05-29', '444.00', '0.00', '0.00', '0.00', '444.00', '1970-01-01', 'nulo', '2022-05-29 10:49:53'),
(6, '2022-05-13', 'Changement vehicule', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', '2022-05-19', '2022-05-29', '123.00', '0.00', '0.00', '0.00', '123.00', NULL, 'nulo', '2022-05-29 10:50:04'),
(9, '2022-05-28', 'Renouvellement', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', '2022-05-24', '2022-05-21', '1233.00', '0.00', '0.00', '0.00', '1233.00', NULL, 'nulo', '2022-05-29 10:50:11'),
(5, '2022-05-11', 'Changement vehicule', '', 'aeafsfsafasf', '', 'asfafaf', 'asfasfasf', '2022-05-28', '2022-05-29', '123.99', '22.00', '33.00', '0.00', '68.99', '2022-05-22', 'nulo', '2022-05-29 10:52:54'),
(4, '2022-05-10', 'Duplicata', 'defrtg', 'defrtg', 'defrtg', 'defrtg', 'Brook Insall', '2022-05-21', '2022-05-29', '234.65', '23.54', '4.00', '0.00', '207.11', '2022-06-05', 'nulo', '2022-05-29 10:52:58'),
(16, '2022-05-29', 'Affaire nouvelle', 'beta', 'beta', 'beta', 'beta', 'beta', '2022-04-30', '2022-06-05', '454545.00', '0.00', '0.00', '0.00', '454545.00', NULL, 'nulo', '2022-05-29 10:53:53'),
(10, '2022-05-28', 'Renouvellement', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', '2022-05-24', '2022-05-21', '1233.00', '0.00', '0.00', '0.00', '1233.00', NULL, 'nulo', '2022-05-29 11:05:36'),
(11, '2022-05-28', 'Renouvellement', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', 'mohammeddddddddddddddddddddd', '2022-05-24', '2022-05-21', '1233.00', '0.00', '0.00', '0.00', '1233.00', NULL, 'nulo', '2022-05-29 11:05:44'),
(13, '2022-05-29', 'Resiliation', 'moha123', 'simonFilipo11111', 'simonFilipo', 'simonFilipo', 'simonFilipo', '2022-05-30', '2022-06-05', '23456.00', '0.00', '0.00', '0.00', '23456.00', '1970-01-01', 'nulo', '2022-05-29 15:19:30'),
(12, '2022-05-28', 'Changement vehicule', 'sebtifff', 'sebti', 'sebti', 'sebti', 'sebti', '2022-05-25', '2022-05-18', '4566.97', '0.00', '0.00', '0.00', '4566.97', '1970-01-01', 'nulo', '2022-05-29 15:19:37'),
(18, '2022-05-29', 'Attestation définitive', 'alhamdulillah plus', 'alhamdulillah plus', 'alhamdulillah plus', 'alhamdulillah plus', 'alhamdulillah plus', '2022-06-01', '2022-05-15', '55555.00', '0.00', '0.00', '0.00', '55555.00', '1970-01-01', 'nulo', '2022-05-29 15:26:03'),
(19, '2022-05-29', 'Attestation définitive', 'ahmed', 'ahmed', 'ahmed', 'ahmed', 'ahmed', '2022-05-24', '2022-06-05', '43.00', '0.00', '0.00', '0.00', '43.00', NULL, 'nulo', '2022-05-29 15:26:11'),
(20, '2022-05-29', 'Attestation dÃ©finitive', 'simon', 'simon', 'simon', 'simon', 'simon', '2022-05-30', '2022-05-26', '123.00', '0.00', '0.00', '0.00', '123.00', NULL, 'nulo', '2022-05-29 15:29:29'),
(24, '2022-05-29', 'Attestation dÃ©finitive', 'jhon3', 'jhon3', 'jhon3', 'jhon3', 'jhon3', '2022-05-24', '2022-06-05', '34.00', '0.00', '0.00', '0.00', '34.00', NULL, 'nulo', '2022-05-29 17:08:35'),
(23, '2022-05-29', 'Attestation dÃ©finitive', 'jhon', 'jhon', 'jhon', 'jhon', 'jhon', '2022-05-24', '2022-06-05', '34.00', '0.00', '0.00', '0.00', '34.00', NULL, 'nulo', '2022-05-29 17:08:40'),
(25, '2022-05-29', 'Renouvellement', 'asd', 'asd', 'asd', 'asd', 'asd', '2022-06-01', '2022-06-05', '45.00', '0.00', '0.00', '0.00', '45.00', NULL, 'nulo', '2022-05-29 17:11:06'),
(26, '2022-05-29', 'Changement vehicule', 'asd', 'asd', 'asd', 'asd', 'asd', '2022-06-01', '2022-06-05', '67.00', '0.00', '0.00', '0.00', '67.00', NULL, 'nulo', '2022-05-29 17:12:29');

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
('32.00', 'alhamdulillah', '32.76', 'alhamdulillah', 'root@localhost', '2022-05-08 20:45:55'),
('87.00', 'alhamdulillah', '87.77', 'alhamdulillah', 'root@localhost', '2022-05-08 21:03:31'),
('23.00', 'polkij', '23.00', 'polkij', 'root@localhost', '2022-05-08 21:13:39'),
('23.00', 'polkij', '23.00', 'polkij', 'root@localhost', '2022-05-08 21:13:55'),
('23.00', 'polkij', '23.54', 'polkij', 'root@localhost', '2022-05-08 21:14:20'),
('32.76', 'alhamdulillah', '32.76', 'alhamdulillah', 'root@localhost', '2022-05-08 21:30:52'),
('23.54', 'polkij', '23.54', 'polkij', 'root@localhost', '2022-05-08 21:31:01'),
('23.54', 'polkij', '20000.65', 'polkij', 'root@localhost', '2022-05-08 21:31:16'),
('345.00', 'alhamdulillah', '345.00', 'alhamdulillah', 'root@localhost', '2022-05-08 21:34:37'),
('345.00', 'alhamdulillah', '345.87', 'alhamdulillah', 'root@localhost', '2022-05-08 21:34:47'),
('345.87', 'alhamdulillah', '345.87', 'alhamdulillah', 'root@localhost', '2022-05-08 21:35:04'),
('345.87', 'alhamdulillah', '2345.65', 'alhamdulillah', 'root@localhost', '2022-05-08 21:37:42'),
('34567.00', 'alhamdulillah', '34567.76', 'alhamdulillah', 'root@localhost', '2022-05-08 21:40:09'),
('34567.76', 'alhamdulillah', '34567.76', 'alhamdulillah', 'root@localhost', '2022-05-08 21:43:18'),
('34567.76', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-08 21:43:29'),
('234.00', 'sebti', '234.54', 'sebti', 'root@localhost', '2022-05-08 21:56:35'),
('234.54', 'sebti', '234.54', 'sebti', 'root@localhost', '2022-05-08 21:56:53'),
('23.00', 'mohammed', '23.00', 'mohammed', 'root@localhost', '2022-05-08 21:58:25'),
('23.00', 'mohammed', '23.00', 'mohammed', 'root@localhost', '2022-05-08 21:58:38'),
('12.34', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-08 22:11:03'),
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-08 22:11:17'),
('123.34', 'asfasfasf', '123.34', 'asfasfasf', 'root@localhost', '2022-05-11 20:32:53'),
('123.34', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-11 20:33:06'),
('123.99', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-11 20:33:16'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-21 19:57:47'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 19:54:10'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 20:10:42'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 20:19:38'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 20:24:50'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 20:27:21'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 20:33:37'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 20:35:26'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 20:36:39'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 20:37:04'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 20:37:50'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 20:38:40'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 20:38:52'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 20:44:18'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:20:15'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 22:22:24'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:23:23'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 22:24:56'),
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-26 22:24:56'),
('123.99', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-26 22:24:56'),
('123.00', 'wwww', '123.00', 'wwww', 'root@localhost', '2022-05-26 22:24:56'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:24:56'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 22:24:56'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 22:24:57'),
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-26 22:24:57'),
('123.99', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-26 22:24:57'),
('123.00', 'wwww', '123.00', 'wwww', 'root@localhost', '2022-05-26 22:24:57'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:24:57'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 22:24:57'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 22:25:27'),
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-26 22:25:27'),
('123.99', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-26 22:25:27'),
('123.00', 'wwww', '123.00', 'wwww', 'root@localhost', '2022-05-26 22:25:27'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:25:27'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 22:25:27'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 22:25:28'),
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-26 22:25:28'),
('123.99', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-26 22:25:28'),
('123.00', 'wwww', '123.00', 'wwww', 'root@localhost', '2022-05-26 22:25:28'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:25:28'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 22:25:28'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 22:25:54'),
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-26 22:25:54'),
('123.99', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-26 22:25:54'),
('123.00', 'wwww', '123.00', 'wwww', 'root@localhost', '2022-05-26 22:25:54'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:25:54'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 22:25:54'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-26 22:25:55'),
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-26 22:25:55'),
('123.99', 'asfasfasf', '123.99', 'asfasfasf', 'root@localhost', '2022-05-26 22:25:55'),
('123.00', 'wwww', '123.00', 'wwww', 'root@localhost', '2022-05-26 22:25:55'),
('444.00', 'mmmmm', '444.00', 'mmmmm', 'root@localhost', '2022-05-26 22:25:55'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-26 22:25:55'),
('234.65', 'defrtg', '234.65', 'Brook Insal', 'root@localhost', '2022-05-26 23:22:33'),
('234.65', 'Brook Insal', '234.65', 'Brook Insall', 'root@localhost', '2022-05-26 23:22:58'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-27 18:51:16'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-27 19:16:26'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-28 11:55:57'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah', 'root@localhost', '2022-05-28 11:56:41'),
('99.00', 'dddd', '99.00', 'dddd', 'root@localhost', '2022-05-28 11:57:17'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 12:24:21'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 12:28:01'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 12:30:11'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 12:38:05'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 12:39:04'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 12:47:32'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 12:48:55'),
('9876.00', 'alfa', '9876.00', 'alfa', 'root@localhost', '2022-05-29 12:51:38'),
('9876.00', 'alfa', '9876.00', 'alfa', 'root@localhost', '2022-05-29 12:52:03'),
('454545.00', 'beta', '454545.00', 'beta', 'root@localhost', '2022-05-29 12:54:34'),
('454545.00', 'beta', '454545.00', 'beta', 'root@localhost', '2022-05-29 12:56:05'),
('454545.00', 'beta', '454545.00', 'beta', 'root@localhost', '2022-05-29 12:56:28'),
('454545.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 12:59:26'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:00:37'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:01:07'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:01:35'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:02:07'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:02:39'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:02:54'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:03:59'),
('900.00', 'beta', '900.00', 'beta', 'root@localhost', '2022-05-29 13:05:17'),
('88.00', 'gama', '88.00', 'gama', 'root@localhost', '2022-05-29 13:08:16'),
('88.00', 'gama', '88.00', 'gama', 'root@localhost', '2022-05-29 13:10:54'),
('88.00', 'gama', '88.00', 'gama', 'root@localhost', '2022-05-29 13:11:17'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 13:34:00'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 13:34:42'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 13:39:43'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 13:42:14'),
('9876.00', 'alfa', '9876.00', 'alfa', 'root@localhost', '2022-05-29 13:42:36'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:40:00'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:40:44'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:41:28'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:44:38'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:46:12'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:46:20'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:47:23'),
('9876.00', 'alfa', '9876.00', 'alfa', 'root@localhost', '2022-05-29 14:47:33'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 14:49:30'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:51:11'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:52:20'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 14:52:37'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:58:15'),
('4566.97', 'sebti', '4566.97', 'sebti', 'root@localhost', '2022-05-29 14:58:23'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 14:58:53'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:01:50'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:03:39'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:09:33'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:11:53'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:12:40'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:37:10'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:38:06'),
('88.00', 'gama', '88.00', 'gama', 'root@localhost', '2022-05-29 15:38:46'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:43:16'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:44:59'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:45:27'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:46:23'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:47:59'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:48:50'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:51:46'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:52:44'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:53:18'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:53:24'),
('88.00', 'gama', '88.00', 'gama', 'root@localhost', '2022-05-29 15:53:37'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:55:52'),
('23456.00', 'simonFilipo', '23456.00', 'simonFilipo', 'root@localhost', '2022-05-29 15:56:09'),
('9876.00', 'alfa', '9876.00', 'alfa', 'root@localhost', '2022-05-29 15:57:48'),
('55555.00', 'alhamdulillah plus', '55555.00', 'alhamdulillah plus', 'root@localhost', '2022-05-29 15:59:38'),
('55555.00', 'alhamdulillah plus', '55555.00', 'alhamdulillah plus', 'root@localhost', '2022-05-29 17:25:34'),
('77.00', 'mouhcin', '77.00', 'mouhcin', 'root@localhost', '2022-05-29 17:42:50'),
('9876.00', 'alfa', '9876.00', 'Brook Insall', 'root@localhost', '2022-05-29 17:50:26'),
('77.00', 'mouhcin', '77.00', 'mouhcin ahmed', 'root@localhost', '2022-05-29 19:18:13'),
('44.00', 'asd', '44.00', 'asd afgh', 'root@localhost', '2022-05-29 19:41:04'),
('88.00', 'gama', '88.00', 'gama gefd', 'root@localhost', '2022-05-29 19:41:14'),
('34.00', 'zineb', '34.00', 'zineb huyg', 'root@localhost', '2022-05-29 19:41:25'),
('900.00', 'beta', '900.00', 'beta bnmjk', 'root@localhost', '2022-05-29 19:41:34'),
('1234.00', 'alhamdulillah', '1234.00', 'alhamdulillah allah', 'root@localhost', '2022-05-29 19:41:47'),
('23.00', 'simon templar', '23.00', 'simon templar', 'root@localhost', '2022-05-29 21:51:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1017 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `telefono`) VALUES
(1, 'Brook', 'Insall', 'binsall0@xing.com', '261 493 0059'),
(2, 'Crichton', 'Rous', 'crous1@howstuffworks.com', '545 160 2146'),
(3, 'Ronny', 'Revely', 'msb.duck@gmail.com', '481 582 9924'),
(5, 'Iosep', 'Dyte', 'idyte4@trellian.com', '740 490 9285'),
(6, 'Max', 'Houlton', 'msb.duck@gmail.com', '443 777 8249');

--
-- Disparadores `usuarios`
--
DROP TRIGGER IF EXISTS `usuarios_elimines_ad`;
DELIMITER $$
CREATE TRIGGER `usuarios_elimines_ad` AFTER DELETE ON `usuarios` FOR EACH ROW insert into usuarios_eliminados 
     (id, nombre, apellidos,email,telefono)
     VALUES (old.id, old.nombre, old.apellidos, old.email, old.telefono)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_eliminados`
--

DROP TABLE IF EXISTS `usuarios_eliminados`;
CREATE TABLE IF NOT EXISTS `usuarios_eliminados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1017 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_eliminados`
--

INSERT INTO `usuarios_eliminados` (`id`, `nombre`, `apellidos`, `email`, `telefono`) VALUES
(1016, 'simon', 'templar', 'msb.duck@gmail.com', '4444444444');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu`;
CREATE TABLE IF NOT EXISTS `usuarios_recu` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu1`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu1`;
CREATE TABLE IF NOT EXISTS `usuarios_recu1` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`police` varchar(100)
,`au` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu3`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu3`;
CREATE TABLE IF NOT EXISTS `usuarios_recu3` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`police` varchar(100)
,`au` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu4`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu4`;
CREATE TABLE IF NOT EXISTS `usuarios_recu4` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`police` varchar(100)
,`au` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu5`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu5`;
CREATE TABLE IF NOT EXISTS `usuarios_recu5` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`police` varchar(100)
,`au` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu6`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu6`;
CREATE TABLE IF NOT EXISTS `usuarios_recu6` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`police` varchar(100)
,`au` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu7`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu7`;
CREATE TABLE IF NOT EXISTS `usuarios_recu7` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`police` varchar(100)
,`au` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu8`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu8`;
CREATE TABLE IF NOT EXISTS `usuarios_recu8` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`police` varchar(100)
,`au` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_recu9`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `usuarios_recu9`;
CREATE TABLE IF NOT EXISTS `usuarios_recu9` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`email` varchar(100)
,`telefono` varchar(20)
,`letype` varchar(50)
,`police` varchar(100)
,`attestation` varchar(100)
,`matricule` varchar(50)
,`au` date
,`totale` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu`
--
DROP TABLE IF EXISTS `usuarios_recu`;

DROP VIEW IF EXISTS `usuarios_recu`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu`  AS  select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono` from (`usuarios` left join `proyectosis` on((`usuarios`.`nombre` = `assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu1`
--
DROP TABLE IF EXISTS `usuarios_recu1`;

DROP VIEW IF EXISTS `usuarios_recu1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu1`  AS  select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono`,`police` AS `police`,`au` AS `au` from (`usuarios` left join `proyectosis` on((`usuarios`.`nombre` = `assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu3`
--
DROP TABLE IF EXISTS `usuarios_recu3`;

DROP VIEW IF EXISTS `usuarios_recu3`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu3`  AS  select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono`,`police` AS `police`,`au` AS `au` from (`usuarios` left join `proyectosis` on((concat(`usuarios`.`nombre`,' ',`usuarios`.`apellidos`) = `assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu4`
--
DROP TABLE IF EXISTS `usuarios_recu4`;

DROP VIEW IF EXISTS `usuarios_recu4`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu4`  AS  select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono`,`police` AS `police`,`au` AS `au` from (`usuarios` left join `proyectosis` on((`usuarios`.`nombre` = `assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu5`
--
DROP TABLE IF EXISTS `usuarios_recu5`;

DROP VIEW IF EXISTS `usuarios_recu5`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu5`  AS  select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` left join `proyectosis` `p` on((`u`.`nombre` = `p`.`assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu6`
--
DROP TABLE IF EXISTS `usuarios_recu6`;

DROP VIEW IF EXISTS `usuarios_recu6`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu6`  AS  select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu7`
--
DROP TABLE IF EXISTS `usuarios_recu7`;

DROP VIEW IF EXISTS `usuarios_recu7`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu7`  AS  select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` left join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu8`
--
DROP TABLE IF EXISTS `usuarios_recu8`;

DROP VIEW IF EXISTS `usuarios_recu8`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu8`  AS  select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` left join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_recu9`
--
DROP TABLE IF EXISTS `usuarios_recu9`;

DROP VIEW IF EXISTS `usuarios_recu9`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu9`  AS  select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`letype` AS `letype`,`p`.`police` AS `police`,`p`.`attestation` AS `attestation`,`p`.`matricule` AS `matricule`,`p`.`au` AS `au`,`p`.`totale` AS `totale` from (`usuarios` `u` left join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
