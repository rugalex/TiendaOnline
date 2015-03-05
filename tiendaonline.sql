
--
-- Base de datos: `tiendaonline`
--
CREATE DATABASE IF NOT EXISTS `tiendaonline` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tiendaonline`;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `telefono` int(12) DEFAULT NULL,
  `movil` varchar(12) DEFAULT NULL,
  `direccioncalle` varchar(255) DEFAULT NULL,  
  `ciudad` varchar(255) DEFAULT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` VALUES (1,'Gabriel','Rodriguez','gabriel-rugal@hotmail.com','gabarodr','12345',NULL,NULL,NULL,NULL),
(2,'Valeria','Tapia','vtapia@hotmail.com','Valeria','12345',NULL,NULL,NULL,NULL);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesproductos`
--

CREATE TABLE `imagenesproductos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idproducto` int(100) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagenesproductos`
--

INSERT INTO `imagenesproductos` VALUES (1,1,'PlatoFuerte1.jpg','Arroz con menestra','Descripción 1'),
(2,2,'PlatoFuerte2.jpg','Yapingacho','Descripción'),
(3,3,'PlatoFuerte3.jpg','Encebollado','Descripción'),
(4,4,'PlatoFuerte4.jpg','Fritada','Descripción'),
(5,5,'PlatoFuerte5.jpg','Seco de chivo','Descripción'),
(6,6,'PlatoFuerte6.jpg','Ceviche','Descripción'),
(7,7,'PlatoFuerte7.jpg','Fanesca','Descripción'),
(8,8,'PlatoFuerte8.jpg','Pollo hornado','Descripción'),
(9,9,'PlatoFuerte9.jpg','Cazuela','Descripción'),
(10,10,'PlatoFuerte10.jpg','Arroz marinero','Descripción'),
(11,11,'Bebida1.jpg','Colada morada','Descripción'),
(12,12,'Bebida2.jpg','Colada de avena','Descripción'),
(13,13,'Bebida3.jpg','Canelazo','Descripción'),
(14,14,'Bebida4.jpg','Resbaladera','Descripción'),
(15,15,'Bebida5.jpg','Daiquiri','Descripción'),
(16,16,'Bebida6.jpg','Cerveza','Descripción'),
(17,17,'Bebida7.jpg','Limonada','Descripción'),
(18,18,'Bebida8.jpg','Cuba libre','Descripción'),
(19,19,'Bebida9.jpg','Morocho','Descripción'),
(20,20,'Bebida10.jpg','Rompope','Descripción'),
(21,21,'Postre1.jpg','Torta de chocolate','Descripción'),
(22,22,'Postre2.jpg','Torta tres leches','Descripción'),
(23,23,'Postre3.jpg','Torta de limón','Descripción'),
(24,24,'Postre4.jpg','Flan casero','Descripción'),
(25,25,'Postre5.jpg','Mousse de chocolate','Descripción'),
(26,26,'Postre6.jpg','Tarta de frutas','Descripción'),
(27,27,'Postre7.jpg','Budín de chocolate','Descripción'),
(28,28,'Postre8.jpg','Panacotta con frutos rojos','Descripción'),
(29,29,'Postre9.jpg','Torta de ron','Descripción'),
(30,30,'Postre10.jpg','Espumilla de guayaba','Descripción');

select * from imagenesproductos;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `lineaspedido`
--

CREATE TABLE `lineaspedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idpedido` int(100) DEFAULT NULL,
  `idproducto` int(100) DEFAULT NULL,
  `unidades` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lineaspedido`
--
INSERT INTO `lineaspedido` VALUES (3,5,1,1),
(4,5,2,1),(5,5,3,1),(6,6,1,1),(7,6,2,1),
(8,6,3,1),(9,7,1,1),(10,7,2,1),
(11,7,3,1),(12,8,1,1),(13,8,2,1),
(14,8,3,1),(15,9,1,1),(16,9,2,1),
(17,9,3,1),(18,10,1,1),(19,10,2,1),
(20,10,3,1),(21,11,1,1),(22,12,1,1),
(23,13,1,1),(24,14,1,1),(25,15,1,1),
(26,16,1,1),(27,17,1,1),(28,18,1,1),
(29,18,2,1),(30,18,3,1),(31,19,1,1),
(32,19,2,1),(33,19,3,1),(34,19,2,1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idcliente` int(100) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` VALUES (2,1,'1378370611','1'),
(3,2,'1378370703','1'),(4,2,'1378371165','2'),
(5,1,'1378371384','1'),(6,2,'1378371744','0'),
(7,2,'1378371813','0'),(8,1,'1378371829','0'),
(9,1,'1378371869','0'),(10,1,'1378372025','1'),
(11,1,'1378373074','0'),(12,1,'1378373135','2'),
(13,1,'1378373247','0'),(14,1,'1378373329','0'),
(15,1,'1378373395','0'),(16,1,'1378373425','0'),
(17,1,'1378375518','0'),(18,1,'1378375558','0'),
(19,1,'1378391155','0');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(30,2) DEFAULT NULL,
  `existencias` int(255) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `activado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` VALUES (1,'Arroz con menestra','lenteja, carne',6.59,7,'plato_fuerte',1),
(2,'Yapingacho','Huevo y chorizo, Cuencano.',5.59,7,'plato_fuerte',1),
(3,'Encebollado','Albacora',4.49,7,'plato_fuerte',1),
(4,'Fritada','Chifles y mote',7.49,7,'plato_fuerte',1),
(5,'Seco de chivo','Carne de chivo',6.99,13,'plato_fuerte',1),
(6,'Ceviche de camarón','Camarón',5.99,7,'plato_fuerte',1),
(7,'Fanesca','Huevo,pescado bacalao y granos variados.',5.99,7,'plato_fuerte',1),
(8,'Pollo horneado','arroz, ensalada, pollo',6.00,7,'plato_fuerte',1),
(9,'Cazuela','Pescado, cangrejo, camarón',6.99,7,'plato_fuerte',1),
(10,'Arroz marinero','arroz, cangrejo,camarón,ostras,calamar',8.99,7,'plato_fuerte',1),
(11,'Colada morada','frutos, mortiños, canela',3.00,7,'bebida',1),
(12,'Colada de avena','avena',1.50,7,'bebida',1),
(13,'Canelazo','canela, aguardiente',2.00,7,'bebida',1),
(14,'Resbaladera','arroz, canela, cebada',1.50,7,'bebida',1),
(15,'Daiquiri','ron blanco, zumo de limón',4.50,7,'bebida',1),
(16,'Cerveza','cebada',1.50,7,'bebida',1),
(17,'Limonada','limón',1.50,7,'bebida',1),
(18,'Cuba libre','ron, cola negra, limón',4.00,7,'bebida',1),
(19,'Morocho','maíz morocho,leche, canela',2.50,7,'bebida',1),
(20,'Rompope','ron, canela, leche, huevo',4.50,7,'bebida',1),
(21,'Torta de chocolate','chocolate',3.50,7,'postre',1),
(22,'Torte tres leches','leche entera,leche evaporada, leche condensada ',2.99,7,'postre',1),
(23,'Torta de limón','limón, ralladura de limón',2.50,7,'postre',1),
(24,'Flan casero','huevo, leche, esencia vainilla',2.00,7,'postre',1),
(25,'Mousse de chocolate','chocolate, crema de leche',3.50,7,'postre',1),
(26,'Tarta de frutas','frutos varios, crema pastelera',3.00,7,'postre',1),
(27,'Budín de chocolate','chocolate',2.50,7,'postre',1),
(28,'Panacotta con frutos rojos','nata, esencia vainilla,frutos rojos',3.75,7,'postre',1),
(29,'Torta de ron','ron, nueces',3.00,7,'postre',1),
(30,'Espumilla de guayaba','guayaba',2.00,7,'postre',1);

select * from clientes;
select * from productos;
