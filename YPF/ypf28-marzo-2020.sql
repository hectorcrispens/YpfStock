-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-03-2020 a las 21:36:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

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
(3, 'A2', 21, 2),
(4, 'A3', 25, 10),
(5, 'A4', 25, 12),
(6, 'A5', 45, 12),
(7, 'A6', 14, 0),
(8, 'B1', 27, 6),
(9, 'B2', 11, 4),
(10, 'B3', 25, 13),
(11, 'B4', 26, 6),
(12, 'B5', 22, 4),
(13, 'B6', 17, 0),
(14, 'C1', 25, 3),
(15, 'C2', 11, 2),
(16, 'C3', 24, 6),
(17, 'C4', 26, 5),
(18, 'C5', 24, 0),
(19, 'C6', 8, 5),
(20, 'D1', 10, 5),
(21, 'D2', 26, 6),
(22, 'D3', 26, 5),
(23, 'D4', 26, 5),
(24, 'D5', 46, 22),
(25, 'D6', 26, 1),
(26, 'E1', 7, 13),
(27, 'E2', 20, 6),
(28, 'E3', 26, 6),
(29, 'E4', 26, 6),
(30, 'E5', 2, 3),
(31, 'E6', 5, 5),
(32, 'F1', 25, 9),
(33, 'F2', 25, 14),
(34, 'F3', 25, 16),
(35, 'F4', 23, 13),
(36, 'F5', 4, 3),
(37, 'F6', 5, 2),
(38, 'G1', 2, 18),
(39, 'G2', 1, 11),
(40, 'G3', 19, 12),
(41, 'G4', 3, 12),
(42, 'G5', 53, 8),
(43, 'G6', 13, 4),
(44, 'H1', 2, 3),
(45, 'H2', 10, 12),
(46, 'H3', 47, 14),
(47, 'H4', 55, 0),
(48, 'H5', 45, 26),
(49, 'H6', 16, 7),
(50, 'I1', 14, 2),
(51, 'I2', 41, 24),
(52, 'I3', 55, 0),
(53, 'I4', 55, 0),
(54, 'I5', 17, 2),
(55, 'I6', 31, 3),
(56, 'J1', 38, 10),
(57, 'J2', 19, 0),
(58, 'J3', 55, 0),
(59, 'J4', 55, 0),
(60, 'J5', 55, 0),
(61, 'J6', 29, 2),
(62, 'K1', 6, 3),
(63, 'K2', 9, 2),
(64, 'K3', 12, 4),
(65, 'K4', 15, 2),
(66, 'K5', 18, 2),
(67, 'K6', 55, 0),
(68, 'L1', 30, 2),
(69, 'L2', 32, 2),
(70, 'L3', 33, 1),
(71, 'L4', 34, 3),
(72, 'L5', 35, 3),
(73, 'L6', 55, 0),
(74, 'M1', 19, 0),
(75, 'M2', 21, 0),
(76, 'M3', 23, 1),
(77, 'M4', 25, 12),
(78, 'M5', 27, 0),
(79, 'M6', 10, 0),
(80, 'M7', 1, 0),
(81, 'M8', 3, 0),
(82, 'M9', 2, 0),
(83, 'M10', 41, 2),
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
