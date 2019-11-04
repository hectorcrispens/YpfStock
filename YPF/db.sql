
CREATE TABLE IF NOT EXISTS `lubricantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `casillas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `lubricante` int(11),
  `cantidad` int(11),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`lubricante`) REFERENCES `lubricantes` (`id`)
);



