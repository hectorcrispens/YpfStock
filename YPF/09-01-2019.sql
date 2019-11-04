-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ypf
CREATE DATABASE IF NOT EXISTS `ypf` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ypf`;

-- Volcando estructura para tabla ypf.casillas
CREATE TABLE IF NOT EXISTS `casillas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `lubricante` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lubricante` (`lubricante`),
  CONSTRAINT `casillas_ibfk_1` FOREIGN KEY (`lubricante`) REFERENCES `lubricantes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ypf.casillas: ~83 rows (aproximadamente)
/*!40000 ALTER TABLE `casillas` DISABLE KEYS */;
INSERT INTO `casillas` (`id`, `nombre`, `lubricante`, `cantidad`) VALUES
	(1, 'A1', 26, 4),
	(3, 'A2', 21, 8),
	(4, 'A3', 25, 12),
	(5, 'A4', 27, 14),
	(6, 'A5', 2, 12),
	(7, 'A6', 1, 12),
	(8, 'B1', 27, 12),
	(9, 'B2', 22, 2),
	(10, 'B3', 25, 15),
	(11, 'B4', 28, 4),
	(12, 'B5', 16, 5),
	(13, 'B6', 11, 5),
	(14, 'C1', 5, 6),
	(15, 'C2', 28, 4),
	(16, 'C3', 26, 6),
	(17, 'C4', 26, 3),
	(18, 'C5', 13, 2),
	(19, 'C6', 14, 2),
	(20, 'D1', 4, 7),
	(21, 'D2', 26, 6),
	(22, 'D3', 26, 4),
	(23, 'D4', 24, 3),
	(24, 'D5', 46, 13),
	(25, 'D6', 7, 6),
	(26, 'E1', 53, 10),
	(27, 'E2', 26, 6),
	(28, 'E3', 26, 5),
	(29, 'E4', 26, 6),
	(30, 'E5', 2, 12),
	(31, 'E6', 5, 6),
	(32, 'F1', 8, 1),
	(33, 'F2', 25, 17),
	(34, 'F3', 25, 12),
	(35, 'F4', 23, 11),
	(36, 'F5', 8, 5),
	(37, 'F6', 5, 2),
	(38, 'G1', 2, 14),
	(39, 'G2', 3, 4),
	(40, 'G3', 55, 0),
	(41, 'G4', 3, 5),
	(42, 'G5', 1, 20),
	(43, 'G6', 19, 10),
	(44, 'H1', 2, 11),
	(45, 'H2', 10, 9),
	(46, 'H3', 47, 32),
	(47, 'H4', 45, 13),
	(48, 'H5', 46, 7),
	(49, 'H6', 2, 11),
	(50, 'I1', 38, 6),
	(51, 'I2', 41, 16),
	(52, 'I3', 55, 0),
	(53, 'I4', 55, 0),
	(54, 'I5', 55, 0),
	(55, 'I6', 1, 1),
	(56, 'J1', 38, 4),
	(57, 'J2', 55, 0),
	(58, 'J3', 55, 0),
	(59, 'J4', 55, 0),
	(60, 'J5', 55, 0),
	(61, 'J6', 55, 0),
	(62, 'K1', 6, 4),
	(63, 'K2', 9, 4),
	(64, 'K3', 12, 3),
	(65, 'K4', 15, 6),
	(66, 'K5', 18, 0),
	(67, 'K6', 55, 0),
	(68, 'L1', 30, 3),
	(69, 'L2', 32, 3),
	(70, 'L3', 33, 2),
	(71, 'L4', 34, 3),
	(72, 'L5', 35, 2),
	(73, 'L6', 55, 0),
	(74, 'M1', 19, 0),
	(75, 'M2', 21, 0),
	(76, 'M3', 23, 0),
	(77, 'M4', 25, 14),
	(78, 'M5', 27, 3),
	(79, 'M6', 10, 0),
	(80, 'M7', 1, 0),
	(81, 'M8', 3, 1),
	(82, 'M9', 2, 1),
	(83, 'M10', 41, 0),
	(84, 'M11', 46, 2);
/*!40000 ALTER TABLE `casillas` ENABLE KEYS */;

-- Volcando estructura para tabla ypf.lubricantes
CREATE TABLE IF NOT EXISTS `lubricantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ypf.lubricantes: ~54 rows (aproximadamente)
/*!40000 ALTER TABLE `lubricantes` DISABLE KEYS */;
INSERT INTO `lubricantes` (`id`, `nombre`) VALUES
	(1, '2T ultra x 1l'),
	(2, '2T nautico x 1l'),
	(3, '4T x 1l'),
	(4, 'suplemento 1 x 1l'),
	(5, 'suplemento 1 x 4l'),
	(6, 'suplemento x 20l'),
	(7, 'AT turbo x 1l'),
	(8, 'At turbo x 4'),
	(9, 'AT turbo x 20l'),
	(10, 'extra vida x 1l'),
	(11, 'extra vida x 4l'),
	(12, 'extra vida xv300 x 20l'),
	(13, 'grasa 30c x 2kg'),
	(14, 'grasa 30c x 5kg'),
	(15, 'grasa 30c x 18kg'),
	(16, 'grasa 62l x 2kg'),
	(17, 'grasa 62l x 5kg'),
	(18, 'grasa 62l x 18kg'),
	(19, 'torque x 1l'),
	(20, 'torque x 4l'),
	(21, 'f10 x 1l'),
	(22, 'f10 x 4l'),
	(23, 'f30 x 1l'),
	(24, 'f30 x 4l'),
	(25, 'f50 x 1l'),
	(26, 'f50 x 4l'),
	(27, 'suv x 1l'),
	(28, 'suv x 4l'),
	(29, 'transmision x 4'),
	(30, 'transmision x 20'),
	(31, 'hipoidal x 4 '),
	(32, 'hipoidal x 20'),
	(33, 'hidraulico BP x 20'),
	(34, 'hidro 19 x 20'),
	(35, 'hidro ATF x 20'),
	(36, 'extra vida xv100 x 20'),
	(37, '2T 100ml'),
	(38, 'liquido freno x 1l'),
	(39, '2t 200 cc'),
	(40, 'azul 32 x 10l'),
	(41, 'liquido freno 200 ml'),
	(42, 'mata MM'),
	(43, 'transmision 500'),
	(44, 'shampoo-lata gel'),
	(45, 'lubripen'),
	(46, 'liquido freno 500cc'),
	(47, 'silicona'),
	(48, 'agua destilada x 1l'),
	(49, 'agua refrigerante x 1l'),
	(50, 'agua destilada x 5l'),
	(51, 'agua refrigerante x 5l'),
	(52, 'gas 10kg'),
	(53, 'gas x 15kg'),
	(54, 'gas x 45kg'),
	(55, 'vacio');
/*!40000 ALTER TABLE `lubricantes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
