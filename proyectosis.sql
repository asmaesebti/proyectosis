-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-05-2022 a las 20:33:26
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
  `recu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL DEFAULT 'nulo',
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectosis`
--

INSERT INTO `proyectosis` (`recu`, `fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`, `assure`, `du`, `au`, `totale`, `espece`, `cheque`, `virement`, `reste`, `date_versement`, `mode_paiment`, `cree_le`) VALUES
(1, '2022-05-08', 'Resiliation', 'alhamdulillah', 'alhamdulillah', 'alhamdulillah', 'alhamdulillah', 'alhamdulillah', '2022-05-24', '2022-05-24', '1234.00', '23.00', '4.00', '0.00', '1207.00', '2022-05-17', 'nulo', '2022-05-08 19:39:06'),
(4, '2022-05-10', 'Duplicata', 'defrtg', 'defrtg', 'defrtg', 'defrtg', 'defrtg', '2022-05-21', '2022-05-17', '234.65', '23.54', '4.00', '0.00', '207.11', '2022-06-05', 'nulo', '2022-05-08 20:10:34');

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
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

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
(2, '2022-05-08', 'Duplicata', 'sebti', 'sebti', 'sebti', 'sebti', 'sebti', '2022-05-19', '2022-05-18', '234.54', '23.00', '200.00', '0.00', '11.54', '2022-05-18', 'nulo', '2022-05-08 20:12:21');

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
('234.65', 'defrtg', '234.65', 'defrtg', 'root@localhost', '2022-05-08 22:11:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
