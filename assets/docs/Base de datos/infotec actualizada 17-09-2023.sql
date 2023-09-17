-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2023 a las 15:51:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infotec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Aceite'),
(2, 'Accesorios'),
(3, 'Lubricantes'),
(4, 'Repuestos'),
(5, 'Refrigerantes'),
(6, 'Repuestos'),
(7, 'Filtros'),
(8, 'Llantas'),
(9, 'Lujos'),
(10, 'Hidraulicos'),
(11, 'Grasas'),
(12, 'Productos Limpieza'),
(13, 'Aditivos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` varchar(10) NOT NULL,
  `identificacion_cliente` varchar(10) NOT NULL,
  `nombre_cliente` varchar(45) DEFAULT NULL,
  `apellido_cliente` varchar(45) DEFAULT NULL,
  `telefono_cliente` varchar(45) DEFAULT NULL,
  `correo_cliente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `identificacion_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `correo_cliente`) VALUES
('1', '1233598745', 'Andrea', 'mendoza', '3122598657', 'Mendoza@gmail.com'),
('2', '12345812', 'Julian', 'Lopez', '3158741596', 'Lopez@gmail.com'),
('3', '101059874', 'Francisco', 'Gomez', '3046875942', 'gomez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuarios` varchar(10) NOT NULL,
  `identificacion_cliente` varchar(10) NOT NULL,
  `placa_vehiculo` int(10) DEFAULT NULL,
  `fecha_factura` date NOT NULL,
  `total_pedido` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `id_usuarios`, `identificacion_cliente`, `placa_vehiculo`, `fecha_factura`, `total_pedido`) VALUES
(4, '123456', '1', 1, '2022-09-26', '20000.00'),
(5, '123456', '1', 1, '2023-09-07', '45000.00'),
(6, '123456', '1', 1, '2023-09-08', '145000.00'),
(7, '123456', '2', 4, '2023-09-09', '1095006.00'),
(8, '123456', '1', 1, '2023-09-13', '275000.00'),
(9, '123456', '2', 4, '2023-09-09', '275000.00'),
(11, '123456', '1', 1, '2023-09-20', '694001.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_productos_f`
--

CREATE TABLE `lista_productos_f` (
  `id_listP` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor_venta` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lista_productos_f`
--

INSERT INTO `lista_productos_f` (`id_listP`, `id_factura`, `id_producto`, `cantidad`, `valor_venta`) VALUES
(1, 4, 15, 1, '1'),
(2, 4, 11, 2, '2'),
(3, 4, 14, 3, '3'),
(4, 8, 6, 6, '270000'),
(5, 9, 6, 5, '225000'),
(6, 11, 4, 10, '230000'),
(7, 11, 4, 18, '414000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_servicios_f`
--

CREATE TABLE `lista_servicios_f` (
  `id_listS` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor_venta` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lista_servicios_f`
--

INSERT INTO `lista_servicios_f` (`id_listS`, `id_factura`, `id_servicios`, `cantidad`, `valor_venta`) VALUES
(1, 4, 1, 1, '1'),
(2, 4, 10, 2, '2'),
(3, 4, 2, 3, '3'),
(5, 4, 10, 2, '5000'),
(6, 4, 2, 2, '50001'),
(7, 4, 10, 2, '10000'),
(8, 7, 2, 6, '300006'),
(9, 7, 8, 4, '152000'),
(10, 8, 10, 1, '5000'),
(11, 9, 1, 1, '50000'),
(12, 11, 2, 1, '50001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  `exist_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_categoria`, `id_producto`, `nombre_producto`, `precio_producto`, `exist_producto`) VALUES
(1, 1, 'Moto Bien 220ml', '24900.00', 12),
(5, 10, 'Protector Radiador', '65000.00', 6),
(6, 11, 'Aceite Hidraulico 20 Delta Oil', '22000.00', 6),
(6, 12, 'Aceite Hidráulico Premium 750cc', '12000.00', 6),
(7, 13, 'Grasa Lubricante Truper Multiusos Carro Moto 450g ', '15000.00', 4),
(7, 14, 'Cojin Grasa De Litio Para Mantenimientos Universal', '4000.00', 12),
(8, 15, 'Renovador De Farolas Lubristone', '17000.00', 4),
(8, 16, 'Super Kit De Limpieza/lavado Universal Para Moto', '34000.00', 2),
(9, 17, 'Aditivo Moto Bien Octanaje Simoniz Aumenta Potenci', '9000.00', 6),
(9, 18, 'Aditivo Antifriccion Motos Scooter Liqui Moly', '19000.00', 6),
(10, 19, 'Liquido Refrigerante Moto Ipone Radiador Liquid 1l', '19000.00', 6),
(1, 2, 'Motul C2 400ml', '84900.00', 8),
(10, 20, 'Aditivo Antifriccion Motos Scooter Liqui Moly', '19000.00', 6),
(2, 3, 'Kit De Arrastre Casarella', '104500.00', 2),
(2, 4, 'Pastillas Frenos Cross Trasera', '23000.00', 4),
(3, 5, 'Filtro De Aire Universal', '41000.00', 10),
(3, 6, 'Filtro De Aire Pulsar Ns200', '45000.00', 6),
(4, 7, 'Llanta Trasera Michelin 130/70-13', '237000.00', 4),
(4, 8, 'Llanta Delantera Pirelli 110/70 R7', '351000.00', 4),
(5, 9, 'Espejos Rizoma De Lujo', '70000.00', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Vendedor ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(50) NOT NULL,
  `precio_servicio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `nombre_servicio`, `precio_servicio`) VALUES
(1, 'Cambio Aceite', '50000.00'),
(10, 'Instalación Lujos', '5000.00'),
(2, 'Cambio Pastillas', '50001.00'),
(3, 'Reparacion motor', '450000.00'),
(4, 'Calibrada Valvulas', '60000.00'),
(5, 'Cambio Llantas', '12000.00'),
(6, 'Cambio luces', '18000.00'),
(7, 'Cambio guaya freno', '25000.00'),
(8, 'Cambio Clutch', '38000.00'),
(9, 'Cambio filtro', '8000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_rol` int(11) NOT NULL,
  `id_usuario` varchar(10) NOT NULL,
  `nombres_usuario` varchar(50) NOT NULL,
  `apellidos_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(100) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL,
  `pass_usuario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_rol`, `id_usuario`, `nombres_usuario`, `apellidos_usuario`, `correo_usuario`, `telefono_usuario`, `pass_usuario`) VALUES
(2, '1232', 'asdsa', 'sdsdas', 'sad@gmail.com', '3125478956', '9bd06ba42a688e3460fe182691b8472d2b74437e'),
(2, '123456', 'Ana', 'Mendozabbb', 'ana@gmail.com', '3103456987', '9bd06ba42a688e3460fe182691b8472d2b74437e'),
(1, '1234567', 'Julian', 'Gomez', 'gomez@gmail.com', '3214567896', '56e0e6859b4220b08c238f0df3494e2ecf1b0421');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(10) NOT NULL,
  `placa_vehiculo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `id_cliente`, `placa_vehiculo`) VALUES
(1, '1', 'OCX146'),
(2, '3', 'VCX148'),
(3, '1', 'VCX149'),
(4, '2', 'asd456'),
(5, '2', 'aqw456'),
(6, '3', 'wee456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`,`identificacion_cliente`),
  ADD KEY `ind_cliente_personas` (`identificacion_cliente`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `ind_factura_usurario` (`id_usuarios`),
  ADD KEY `ind_factura_vehiculo` (`placa_vehiculo`),
  ADD KEY `fk_factura_cliente_idx` (`identificacion_cliente`);

--
-- Indices de la tabla `lista_productos_f`
--
ALTER TABLE `lista_productos_f`
  ADD PRIMARY KEY (`id_listP`),
  ADD KEY `ind_lista_productos_f_productos` (`id_producto`),
  ADD KEY `ind_lista_productos_f_factura` (`id_factura`);

--
-- Indices de la tabla `lista_servicios_f`
--
ALTER TABLE `lista_servicios_f`
  ADD PRIMARY KEY (`id_listS`),
  ADD KEY `ind_lista_servicio_f_servicio` (`id_servicios`),
  ADD KEY `ind_lista_servicio_f_factura` (`id_factura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `ind_producto_categoria` (`id_categoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo_persona_UNIQUE` (`correo_usuario`),
  ADD KEY `ind_personas_rol` (`id_rol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD UNIQUE KEY `placa_vehiculo_UNIQUE` (`placa_vehiculo`),
  ADD KEY `ind_vehiculos_clientes` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `lista_productos_f`
--
ALTER TABLE `lista_productos_f`
  MODIFY `id_listP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `lista_servicios_f`
--
ALTER TABLE `lista_servicios_f`
  MODIFY `id_listS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`identificacion_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`placa_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista_productos_f`
--
ALTER TABLE `lista_productos_f`
  ADD CONSTRAINT `fk_lista_productos_f` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lista_productos_f_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista_servicios_f`
--
ALTER TABLE `lista_servicios_f`
  ADD CONSTRAINT `fk_lista_servicio_f_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lista_servicio_f_servicio` FOREIGN KEY (`id_servicios`) REFERENCES `servicios` (`id_servicios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_personas_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_vehiculo_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
