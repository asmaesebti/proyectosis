-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-06-2022 a las 21:14:16
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
-- Base de datos: `escuelas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `perfil` varchar(100) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `creado_el` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_escuela_alumno` (`id_escuela`),
  KEY `FK_alumno_profesor` (`id_profesor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `perfil`, `id_escuela`, `id_profesor`, `creado_el`) VALUES
(1, 'Donica Loffhead', 'https://robohash.org/culpasitaut.png?size=50x50&set=set1', 1, 1, '2021-08-17 22:00:00'),
(2, 'Brenna Michell', 'https://robohash.org/ducimusremiure.png?size=50x50&set=set1', 2, 2, '2021-08-10 22:00:00'),
(3, 'Nilson Kilmurray', 'https://robohash.org/consequaturiureipsam.png?size=50x50&set=set1', 3, 3, '2022-05-13 22:00:00'),
(4, 'Bradly Quick', 'https://robohash.org/recusandaesedmagnam.png?size=50x50&set=set1', 4, 4, '2022-03-17 23:00:00'),
(5, 'Rolfe Tildesley', 'https://robohash.org/quisquaemolestias.png?size=50x50&set=set1', 5, 5, '2021-09-16 22:00:00'),
(6, 'Gisela Colgrave', 'https://robohash.org/quiaimpeditdolor.png?size=50x50&set=set1', 6, 6, '2022-06-14 22:00:00'),
(7, 'Hetty MacGaffey', 'https://robohash.org/voluptatefugitet.png?size=50x50&set=set1', 7, 7, '2021-07-24 22:00:00'),
(8, 'Luigi Ida', 'https://robohash.org/nihilculpatempore.png?size=50x50&set=set1', 8, 8, '2022-01-04 23:00:00'),
(9, 'Johanna Parffrey', 'https://robohash.org/etetfacilis.png?size=50x50&set=set1', 9, 9, '2022-06-03 22:00:00'),
(10, 'Hilliard O\'Sharry', 'https://robohash.org/optiomagnitemporibus.png?size=50x50&set=set1', 10, 10, '2021-09-21 22:00:00'),
(11, 'Jody Mahoney', 'https://robohash.org/assumendaquidemiste.png?size=50x50&set=set1', 11, 11, '2022-03-01 23:00:00'),
(12, 'Hartwell Corneille', 'https://robohash.org/sintsedaliquam.png?size=50x50&set=set1', 12, 12, '2022-03-11 23:00:00'),
(13, 'Nick Lacknor', 'https://robohash.org/estreiciendisvelit.png?size=50x50&set=set1', 13, 13, '2022-05-09 22:00:00'),
(14, 'Talia Freschini', 'https://robohash.org/recusandaeestexplicabo.png?size=50x50&set=set1', 14, 14, '2022-05-03 22:00:00'),
(15, 'Tanya Harriagn', 'https://robohash.org/omniseligendivoluptatem.png?size=50x50&set=set1', 15, 15, '2021-06-20 22:00:00'),
(16, 'Lynnea Thonason', 'https://robohash.org/doloreumodio.png?size=50x50&set=set1', 16, 16, '2021-07-11 22:00:00'),
(17, 'Karlotta Hendriks', 'https://robohash.org/autipsumeligendi.png?size=50x50&set=set1', 17, 17, '2022-01-02 23:00:00'),
(18, 'Cheslie Munkley', 'https://robohash.org/quodvoluptatenatus.png?size=50x50&set=set1', 18, 18, '2022-05-14 22:00:00'),
(19, 'Cyrillus Olsson', 'https://robohash.org/facilisvoluptatemqui.png?size=50x50&set=set1', 19, 19, '2022-05-19 22:00:00'),
(20, 'Elyssa Ind', 'https://robohash.org/facereeosdistinctio.png?size=50x50&set=set1', 20, 23, '2021-09-14 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela`
--

DROP TABLE IF EXISTS `escuela`;
CREATE TABLE IF NOT EXISTS `escuela` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `creado_el` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escuela`
--

INSERT INTO `escuela` (`id`, `nombre`, `creado_el`) VALUES
(1, 'Aurilia Churm', '2021-06-30 22:00:00'),
(2, 'Benedetto Strahan', '2021-10-30 22:00:00'),
(3, 'Zebulen Mulberry', '2021-06-21 22:00:00'),
(4, 'Lynnette Drennan', '2022-05-04 22:00:00'),
(5, 'Almeta Crossthwaite', '2022-04-06 22:00:00'),
(6, 'Retha Corner', '2021-12-28 23:00:00'),
(7, 'Megan Hancell', '2022-04-28 22:00:00'),
(8, 'Tome Pitts', '2021-09-19 22:00:00'),
(9, 'Baron Steely', '2021-07-24 22:00:00'),
(10, 'Bronny Josefsson', '2021-12-14 23:00:00'),
(11, 'Lainey Isselee', '2022-03-16 23:00:00'),
(12, 'Staci Batrim', '2022-03-24 23:00:00'),
(13, 'Magdalene Ketch', '2021-10-06 22:00:00'),
(14, 'Paulette Neeves', '2021-09-04 22:00:00'),
(15, 'Brendis Gouldie', '2021-07-16 22:00:00'),
(16, 'Heath Packington', '2021-07-25 22:00:00'),
(17, 'Gerri Partleton', '2022-05-12 22:00:00'),
(18, 'Anderea Elt', '2022-03-10 23:00:00'),
(19, 'Haily D\'Hooghe', '2021-11-17 23:00:00'),
(20, 'Mil Martt', '2021-11-01 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE IF NOT EXISTS `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  `creado_el` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_profesores_escuela` (`id_escuela`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `id_escuela`, `sueldo`, `creado_el`) VALUES
(1, 'Joycelin Keith', 1, '223.33', '2022-02-12 23:00:00'),
(2, 'Ronalda Smallpeace', 2, '741.63', '2022-01-27 23:00:00'),
(3, 'Inna Krochmann', 3, '969.38', '2022-02-13 23:00:00'),
(4, 'Sydney Helgass', 4, '483.13', '2021-10-31 23:00:00'),
(5, 'Maribeth Sparshett', 5, '637.07', '2021-08-11 22:00:00'),
(6, 'Chadwick Pickthorne', 6, '769.82', '2021-10-06 22:00:00'),
(7, 'Dyna Bullion', 7, '477.82', '2021-10-04 22:00:00'),
(8, 'Harlin Kynan', 8, '587.46', '2021-11-16 23:00:00'),
(9, 'Carma Keers', 9, '614.73', '2021-07-12 22:00:00'),
(10, 'Nanon Cettell', 10, '47.16', '2021-08-20 22:00:00'),
(11, 'Kassi Oki', 11, '140.11', '2021-11-08 23:00:00'),
(12, 'Lynne Cowlard', 12, '254.66', '2021-08-11 22:00:00'),
(13, 'Christal Juszczyk', 13, '783.36', '2022-03-23 23:00:00'),
(14, 'Jarad Southern', 14, '873.32', '2022-02-23 23:00:00'),
(15, 'Kora Willard', 15, '640.52', '2021-11-01 23:00:00'),
(16, 'Eveleen Carrier', 16, '159.77', '2021-06-29 22:00:00'),
(17, 'Brynna Kleinhaus', 17, '842.13', '2022-03-05 23:00:00'),
(18, 'Marcelline Ciobotaru', 18, '816.54', '2021-07-31 22:00:00'),
(19, 'Fraze Scahill', 19, '495.96', '2022-03-11 23:00:00'),
(20, 'Dory Posnett', 21, '932.20', '2021-07-22 22:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
