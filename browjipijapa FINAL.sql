
CREATE DATABASE IF NOT EXISTS `browjipijapa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `browjipijapa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

DROP TABLE IF EXISTS `carrito`;
CREATE TABLE IF NOT EXISTS `carrito` (
  `idcarrito` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idcarrito`),
  KEY `fkusuario` (`id_usuario`),
  KEY `fkproductocar` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

DROP TABLE IF EXISTS `detalle`;
CREATE TABLE IF NOT EXISTS `detalle` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id_detalle`),
  KEY `fkproducto` (`id_producto`),
  KEY `fkfactura` (`id_factura`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id_detalle`, `id_factura`, `id_producto`, `cantidad`, `precio`, `fecharegistro`, `estado`) VALUES
(1, 1, 2, 2, 4.99, '2020-10-04 22:04:32', 'A'),
(2, 1, 1, 1, 3.99, '2020-10-04 22:04:50', 'A'),
(3, 1, 2, 2, 4.99, '2020-10-04 22:05:02', 'A'),
(4, 2, 2, 3, 4.99, '2020-10-04 22:05:12', 'A'),
(5, 3, 2, 3, 4.99, '2020-10-04 22:05:26', 'A'),
(6, 3, 4, 1, 2.59, '2020-10-04 22:05:26', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id_factura`),
  KEY `pkusuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `id_usuario`, `fecharegistro`, `estado`) VALUES
(1, 2, '2020-10-04 15:47:25', 'A'),
(2, 2, '2020-10-04 15:49:22', 'A'),
(3, 2, '2020-10-04 15:49:23', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
CREATE TABLE IF NOT EXISTS `mensaje` (
  `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(60) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` varchar(1) NOT NULL DEFAULT 'P',
  PRIMARY KEY (`id_mensaje`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `nombre_usuario`, `correo_usuario`, `descripcion`, `fecharegistro`, `estado`) VALUES
(1, 'Michael', 'michaelgranda@gmail.com', 'Hola a todos aún no me llegan mis brownies.', '2020-10-04 18:08:04', 'P');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `detalleorden` varchar(255) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id_pedido`),
  KEY `fk_factura` (`id_factura`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_factura`, `detalleorden`, `ciudad`, `direccion`, `fecharegistro`, `estado`) VALUES
(1, 1, 'Preguntar por Michael', 'Guayaquil', 'Calle 30 entre la ñ y la o Cod-Postal: 12345', '2020-10-04 22:11:13', 'A'),
(2, 2, 'Preguntar por Michael', 'Guayaquil', 'Calle 30 entre la ñ y la o Cod-Postal: 12345', '2020-10-04 22:12:23', 'A'),
(3, 3, 'Preguntar por Michael', 'Jipijapa', 'Calle 30 entre la ñ y la o Cod-Postal: 12345', '2020-10-04 22:11:13', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `imagen`, `stock`, `fecharegistro`, `estado`) VALUES
(1, 'BROWNIES TERREMOTO', 'Brownies rellenos de manjar blanco, con base de galleta de vainilla (como la del pie de limón)', 3.99, 'brownie_terremoto.jpg', 200, '2020-09-29 04:58:58', 'A'),
(2, 'NUTELLA BLONDIES', 'Blondies rellenos de nutella y oreo.\r\nCaja x 6', 4.99, 'nutella_bondies.jpg', 300, '2020-09-29 01:08:15', 'A'),
(3, 'BROWNIES DE CHOCOLATE DOBLE', 'A veces, un solo chocolate no es suficiente. Así que aquí hay un regalo: chocolate negro perversamente indulgente y chocolate con leche cremoso y suave.\r\nDoblemente bueno.', 1.99, 'DOUBLE_CHOCOLATE_BROWNIES.jpg', 40, '2020-10-04 22:29:53', 'A'),
(4, 'BROWNIES DE COCO', 'Cierra los ojos y puedes escuchar el susurro de las palmeras.Horneado a mano individualmente en nuestro Brownie Barn en Barden y entregado directamente en su puerta.', 2.59, 'brownie_coco.jpg', 50, '2020-10-04 22:39:42', 'A'),
(5, 'MINI BROWNIES X 24', 'Caja de 24 mini brownies (3.5 x 3.5 cm cada uno).', 15.99, 'MINI BROWNIES_X_24.jpg', 30, '2020-10-04 22:53:04', 'A'),
(6, 'BROWNIES DE CHOCOLATE Y NARANJA', 'Chocolate. Fruta. Eso es lo que llamamos una dieta equilibrada. Fragante y deliciosamente delicioso.\r\nChocolate negro lujosamente rico y el sabor fresco de jugosas naranjas.\r\nHorneado a mano individua', 1.99, 'BROWNIES_DE_CHOCOLATE_Y_NARANJA.jpg', 40, '2020-10-04 23:08:19', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL DEFAULT 'cliente',
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `usuario`, `password`, `tipo`, `fecharegistro`, `estado`) VALUES
(1, 'Kaleb', 'Chara', 'kalebejemplo@gmail.com', 'kalebCha', '12345678', 'admin', '2020-10-02 20:01:26', 'A'),
(2, ' Michael', 'Granda', 'michaelgranda@gmail.com', 'granda99', '12345678', 'admin', '2020-10-04 17:11:48', 'A'),
(3, 'christian', 'briones', 'christianandreszorrilla@gmail.com', 'Chrisan', '12345678', 'cliente', '2020-09-30 11:40:40', 'A');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fkproductocar` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `fkusuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fkfactura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  ADD CONSTRAINT `fkproducto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `pkusuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`);
COMMIT;