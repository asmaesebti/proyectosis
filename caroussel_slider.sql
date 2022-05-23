-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-05-2022 a las 17:18:57
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
-- Base de datos: `crud_ajax_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caroussel_slider`
--

DROP TABLE IF EXISTS `caroussel_slider`;
CREATE TABLE IF NOT EXISTS `caroussel_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta-imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caroussel_slider`
--

INSERT INTO `caroussel_slider` (`id`, `ruta-imagen`) VALUES
(1, 'imagenes/listes_clients.xls'),
(2, 'imagenes/a.GIF'),
(3, 'imagenes/Ã­ndicee.png'),
(4, 'imagenes/moha.png'),
(5, 'imagenes/diagrama clases instituto (1).jpg'),
(6, 'imagenes/WhatsApp Image 2022-03-15 at 11.11.53 AM.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
