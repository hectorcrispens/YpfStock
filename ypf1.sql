-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-10-2019 a las 00:36:09
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ypf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillas`
--

CREATE TABLE `casillas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `lubricante` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casillas`
--

INSERT INTO `casillas` (`id`, `nombre`, `lubricante`, `cantidad`) VALUES
(1, 'A1', 26, 3),
(3, 'A2', 21, 8),
(4, 'A3', 28, 2),
(5, 'A4', 25, 4),
(6, 'A5', 2, 4),
(7, 'A6', 14, 1),
(8, 'B1', 27, 6),
(9, 'B2', 11, 5),
(10, 'B3', 25, 11),
(11, 'B4', 11, 5),
(12, 'B5', 16, 2),
(13, 'B6', 17, 1),
(14, 'C1', 22, 3),
(15, 'C2', 45, 8),
(16, 'C3', 26, 5),
(17, 'C4', 26, 4),
(18, 'C5', 24, 2),
(19, 'C6', 8, 6),
(20, 'D1', 4, 12),
(21, 'D2', 26, 2),
(22, 'D3', 26, 2),
(23, 'D4', 26, 2),
(24, 'D5', 46, 19),
(25, 'D6', 7, 6),
(26, 'E1', 26, 4),
(27, 'E2', 26, 3),
(28, 'E3', 26, 4),
(29, 'E4', 26, 4),
(30, 'E5', 2, 10),
(31, 'E6', 5, 5),
(32, 'F1', 25, 7),
(33, 'F2', 25, 8),
(34, 'F3', 25, 5),
(35, 'F4', 23, 2),
(36, 'F5', 8, 0),
(37, 'F6', 5, 6),
(38, 'G1', 2, 14),
(39, 'G2', 10, 6),
(40, 'G3', 2, 7),
(41, 'G4', 1, 15),
(42, 'G5', 53, 17),
(43, 'G6', 55, 0),
(44, 'H1', 2, 3),
(45, 'H2', 3, 1),
(46, 'H3', 47, 21),
(47, 'H4', 41, 8),
(48, 'H5', 46, 1),
(49, 'H6', 13, 5),
(50, 'I1', 55, 0),
(51, 'I2', 19, 4),
(52, 'I3', 41, 0),
(53, 'I4', 55, 0),
(54, 'I5', 55, 0),
(55, 'I6', 31, 6),
(56, 'J1', 38, 11),
(57, 'J2', 45, 1),
(58, 'J3', 55, 0),
(59, 'J4', 55, 0),
(60, 'J5', 55, 0),
(61, 'J6', 29, 3),
(62, 'K1', 6, 3),
(63, 'K2', 9, 1),
(64, 'K3', 12, 4),
(65, 'K4', 15, 4),
(66, 'K5', 18, 3),
(67, 'K6', 55, 0),
(68, 'L1', 30, 1),
(69, 'L2', 32, 2),
(70, 'L3', 33, 3),
(71, 'L4', 34, 3),
(72, 'L5', 35, 2),
(73, 'L6', 55, 0),
(74, 'M1', 19, 0),
(75, 'M2', 21, 0),
(76, 'M3', 23, 0),
(77, 'M4', 25, 13),
(78, 'M5', 27, 0),
(79, 'M6', 10, 2),
(80, 'M7', 1, 0),
(81, 'M8', 3, 1),
(82, 'M9', 2, 1),
(83, 'M10', 41, 0),
(84, 'M11', 46, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lubricantes`
--

CREATE TABLE `lubricantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lubricantes`
--

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casillas`
--
ALTER TABLE `casillas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lubricante` (`lubricante`);

--
-- Indices de la tabla `lubricantes`
--
ALTER TABLE `lubricantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casillas`
--
ALTER TABLE `casillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `lubricantes`
--
ALTER TABLE `lubricantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casillas`
--
ALTER TABLE `casillas`
  ADD CONSTRAINT `casillas_ibfk_1` FOREIGN KEY (`lubricante`) REFERENCES `lubricantes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
