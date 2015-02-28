
--
-- Base de datos: `tiendaonline`
--
CREATE DATABASE IF NOT EXISTS `tiendaonline` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tiendaonline`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `telefono` int(12) DEFAULT NULL,
  `movil` int(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `direccioncalle` varchar(255) DEFAULT NULL,
  `codigopostal` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `email`, `usuario`, `contrasena`, `telefono`, `movil`, `fax`, `direccioncalle`, `codigopostal`, `ciudad`, `pais`) VALUES
(1, 'Gabriel', 'Rodriguez', 'gabriel-rugal@hotmail.com', 'gabarodr', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Valeria', 'Tapia', 'vtapia@hotmail.com', 'Valeria', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesproductos`
--

CREATE TABLE IF NOT EXISTS `imagenesproductos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idproducto` int(100) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `imagenesproductos`
--

INSERT INTO `imagenesproductos` (`id`, `idproducto`, `imagen`, `titulo`, `descripcion`) VALUES
(1, 1, 'lampara1a.png', 'Título 1', 'Descripción 1'),
(2, 1, 'lampara1b.png', 'Título de la segunda imagen', 'Descripción'),
(3, 2, 'lampara2a.png', 'Título de la imagen', 'Descripción'),
(4, 2, 'lampara2b.png', 'Título', 'Descripción'),
(5, 3, 'lampara3a.png', 'Título', 'Descripción'),
(6, 3, 'lampara3b.png', 'Título', 'Descripción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedido`
--

CREATE TABLE IF NOT EXISTS `lineaspedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idpedido` int(100) DEFAULT NULL,
  `idproducto` int(100) DEFAULT NULL,
  `unidades` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `lineaspedido`
--

INSERT INTO `lineaspedido` (`id`, `idpedido`, `idproducto`, `unidades`) VALUES
(3, 5, 1, 1),
(4, 5, 2, 1),
(5, 5, 3, 1),
(6, 6, 1, 1),
(7, 6, 2, 1),
(8, 6, 3, 1),
(9, 7, 1, 1),
(10, 7, 2, 1),
(11, 7, 3, 1),
(12, 8, 1, 1),
(13, 8, 2, 1),
(14, 8, 3, 1),
(15, 9, 1, 1),
(16, 9, 2, 1),
(17, 9, 3, 1),
(18, 10, 1, 1),
(19, 10, 2, 1),
(20, 10, 3, 1),
(21, 11, 1, 1),
(22, 12, 1, 1),
(23, 13, 1, 1),
(24, 14, 1, 1),
(25, 15, 1, 1),
(26, 16, 1, 1),
(27, 17, 1, 1),
(28, 18, 1, 1),
(29, 18, 2, 1),
(30, 18, 3, 1),
(31, 19, 1, 1),
(32, 19, 2, 1),
(33, 19, 3, 1),
(34, 19, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idcliente` int(100) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `idcliente`, `fecha`, `estado`) VALUES
(2, 1, '1378370611', '1'),
(3, 2, '1378370703', '1'),
(4, 2, '1378371165', '2'),
(5, 1, '1378371384', '1'),
(6, 2, '1378371744', '0'),
(7, 2, '1378371813', '0'),
(8, 1, '1378371829', '0'),
(9, 1, '1378371869', '0'),
(10, 1, '1378372025', '1'),
(11, 1, '1378373074', '0'),
(12, 1, '1378373135', '2'),
(13, 1, '1378373247', '0'),
(14, 1, '1378373329', '0'),
(15, 1, '1378373395', '0'),
(16, 1, '1378373425', '0'),
(17, 1, '1378375518', '0'),
(18, 1, '1378375558', '0'),
(19, 1, '1378391155', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(30,2) DEFAULT NULL,
  `peso` int(255) DEFAULT NULL,
  `longitud` int(255) DEFAULT NULL,
  `anchura` int(255) DEFAULT NULL,
  `altura` int(255) DEFAULT NULL,
  `existencias` int(255) DEFAULT NULL,
  `activado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `peso`, `longitud`, `anchura`, `altura`, `existencias`, `activado`) VALUES
(1, 'Lámpara Icosaedro', 'Descripción de la lámpara icosaedro', '21.00', 1, 20, 20, 20, 7, 1),
(2, 'Lámpara cubo', 'Esta es la descripción de la lámpara cubo', '25.00', 1, 25, 25, 25, 17, 1),
(3, 'Lámpara Estrella', 'Descripción de la lámpara estrella', '18.00', 1, 20, 20, 20, 13, 1);


select * from clientes;


