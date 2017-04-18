-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.11 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para testigo
DROP DATABASE IF EXISTS `testigo`;
CREATE DATABASE IF NOT EXISTS `testigo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `testigo`;

-- Volcando estructura para tabla testigo.anuncios
DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL,
  `tipo_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla testigo.anuncios: 0 rows
DELETE FROM `anuncios`;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;

-- Volcando estructura para tabla testigo.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL,
  `nombre_amigable` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla testigo.categorias: 6 rows
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`, `orden`, `nombre_amigable`, `created`, `modified`) VALUES
	(1, 'Entretenimiento', 1, 'entretenimiento', '2017-04-12 09:59:56', '2017-04-12 09:59:56'),
	(2, 'Deportes', 2, 'deportes', '2017-04-12 10:00:10', '2017-04-12 10:00:10'),
	(3, 'Política', 3, 'politica', '2017-04-12 10:00:23', '2017-04-12 10:00:24'),
	(4, 'Editorial semanal', 4, 'editorialsemanal', '2017-04-18 00:24:46', '2017-04-18 00:24:46'),
	(5, 'La entrevista', 5, 'laentrevista', '2017-04-18 00:25:07', '2017-04-18 00:25:07'),
	(6, 'Sucesos', 6, 'sucesos', '2017-04-18 00:25:26', '2017-04-18 00:25:26');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla testigo.fotos
DROP TABLE IF EXISTS `fotos`;
CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota_id` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `archivo` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla testigo.fotos: 0 rows
DELETE FROM `fotos`;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;

-- Volcando estructura para tabla testigo.notas
DROP TABLE IF EXISTS `notas`;
CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `resumen` text NOT NULL,
  `imagen_de_portada` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `fecha_de_publicacion` date NOT NULL,
  `fecha_final` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla testigo.notas: 3 rows
DELETE FROM `notas`;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` (`id`, `titulo`, `ruta`, `resumen`, `imagen_de_portada`, `contenido`, `categoria_id`, `user_id`, `fecha_de_publicacion`, `fecha_final`, `created`, `modified`) VALUES
	(1, 'Denuncian emboscadas en carretera San Miguel de Allende-Guanajuato, empresarios piden a Márquez intervenir', 'denuncia-emboscada-en-carretera-san-miguel', 'La inseguridad se extendió también a las carreteras, el tema ya habría sido tratado por los afectados durante el Quinto Informe de Gobierno', '', 'San Miguel de Allende, Gto. Desde hace semanas se estarían registrando emboscadas en la salida a Guanajuato, rumbo al Aeropuerto (en la zona de la Cieneguita), a cargo de hombres encapuchados y con paliacates, quienes están colocando piedras en los carriles y al momento en que los autos hacen alto total, los emboscan para asaltarlos.\r\n\r\n\r\nFoto: News San Miguel\r\n\r\nPor esta situación existirían ya varias denuncias ante la Procuraduría General de Justicia del estado y el tema habría sido abordado por empresarios sanmigueleneses con el gobernador Miguel Márquez, durante su más reciente informe de gobierno.\r\n\r\nLa denuncia pública la da a conocer hoy el portal News San Miguel, asegurando que la semana pasada se dio un caso más: una camioneta con varios ciudadanos extranjeros que circulaban de madrugada por este punto, fueron víctimas de una emboscada, aunque el conductor del vehículo logró echarse en reversa y regresar a la ciudad sin problemas, otros dos automovilistas no habrían podido librar a los ladrones que bloquearon su paso con piedras en el camino.\r\n\r\nAutomovilistas coinciden en que la carretera de dos carriles, sin iluminación ni vigilancia, tiene una curva empedrada por La Estación que es complicada, lo que sería aprovechado por los maleantes.\r\n\r\nPor ello, según News San Miguel, varios de los empresarios habrían buscado la oportunidad de hablar del tema con Miguel Márquez durante el Quinto Informe de Gobierno para contarle lo que está ocurriendo y cómo está dañando al turismo y a los ciudadanos en general.\r\n\r\nEl diario digital informa que Márquez Márquez les dijo que atendería la situación y que el Secretario de Seguridad del Estado, Alvar Cabeza de Vaca, y el procurador Carlos Zamarripa, estaban enterados del tema y que mandarían más vigilancia y operativos a dicho punto.\r\n\r\nSin embargo, los asaltos continúan, el más reciente se registró la semana pasada, cuando el chofer de la camioneta que llevaba a extranjeros al aeropuerto de Silao reportó de inmediato el hecho al número de emergencias 911.\r\n\r\n“Fue una emboscada donde íbamos 3 vehículos, nosotros la libramos pero otros dos tristemente quedaron atrapados en ella”, dijo.\r\n\r\nEl asunto ha llegado a ser tema del Consejo de Seguridad, ya que transportistas y turistas pidieron aumentar la vigilancia, ahora también en las carreteras.', 3, 1, '2017-08-14', '2037-04-14', '2017-04-14 20:21:24', '2017-04-14 20:21:24'),
	(2, 'Jol', 'Jol', 'dlskjdlj', 'sdlksldj', '<h3>Que suerte!</h3><p>Espero que ahora si funcione esta madre</p>', 3, 1, '2017-02-17', '3000-01-01', '2017-04-17 01:56:07', '2017-04-17 01:56:07'),
	(3, 'Nueva nota', 'nueva-nota', 'Ok', 'nada', 'Noticia de deportes', 2, 1, '2017-02-17', '3000-01-01', '2017-04-17 01:58:38', '2017-04-17 01:58:38');
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;

-- Volcando estructura para tabla testigo.tipos
DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `ancho` int(11) NOT NULL DEFAULT '800',
  `alto` int(11) NOT NULL DEFAULT '300',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla testigo.tipos: 3 rows
DELETE FROM `tipos`;
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` (`id`, `nombre`, `ancho`, `alto`) VALUES
	(1, 'Vertical Lateral', 300, 800),
	(2, 'Cuadrado', 500, 500),
	(3, 'Panorámico', 800, 300);
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;

-- Volcando estructura para tabla testigo.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla testigo.users: 1 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `nombre`, `administrador`, `created`, `modified`) VALUES
	(1, 'admin', '1111111', 'testigo@gmail.com', 'Testigo news', 1, '2017-04-12 15:18:27', '2017-04-12 15:18:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
