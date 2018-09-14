-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2017 a las 19:28:19
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_eess`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `cantidad_compra` int(11) NOT NULL,
  `desc_compra` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `unidad_compra` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `precio_compra` int(15) NOT NULL,
  `Fecha_compra` date NOT NULL,
  `Hora_compra` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `id_proveedor`, `id_proyecto`, `cantidad_compra`, `desc_compra`, `unidad_compra`, `precio_compra`, `Fecha_compra`, `Hora_compra`) VALUES
(1, 1, 1, 1, 'test', '2', 12, '2017-01-10', '10:18:00'),
(2, 1, 1, 1, 'test', '2', 12, '2017-01-10', '10:18:00'),
(3, 1, 1, 5, 'Factura #10', '1', 20, '2017-01-10', '10:15:00'),
(4, 0, 0, 1, 'Caja de Cable - Ver factura #121212', '1', 1200, '0000-00-00', '00:00:10'),
(5, 0, 0, 1000, 'Pies de cable 14, Factura #10002', '1', 6, '0000-00-00', '12:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallescompra`
--

CREATE TABLE `detallescompra` (
  `id_ordencompra` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `factura` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_venc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `mensajes` text COLLATE utf8_spanish_ci NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `email`, `asunto`, `mensajes`, `hora`, `fecha`) VALUES
(1, 'Raldy De Oleo', 'raldydeoleo@gmail.com', 'Prueba', 'Prueba de guardar registros en tabla', '16:11:51', '2017-01-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenescompra`
--

CREATE TABLE `ordenescompra` (
  `id_ordencompra` int(11) NOT NULL,
  `desc_ordencompra` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `monto_ordencompra` decimal(10,0) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `fecha_ordencompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ordenescompra`
--

INSERT INTO `ordenescompra` (`id_ordencompra`, `desc_ordencompra`, `monto_ordencompra`, `id_proveedor`, `id_proyecto`, `fecha_ordencompra`) VALUES
(1, 'Ariculos varios Factura #69791', '4030', 0, 0, '2017-01-16'),
(2, 'Articulos varios Factura #69794', '4671', 0, 0, '2017-01-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `empresa_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rnc_proveedor` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_proveedor` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_proveedor` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `apellido_proveedor`, `empresa_proveedor`, `rnc_proveedor`, `direccion_proveedor`, `ciudad_proveedor`, `telefono_proveedor`, `email_proveedor`) VALUES
(1, 'Daninosky', 'Tavarez', 'Ferreteria Ochoa', '102-031031-1', 'Av. Imbert #88', 'Santiago de los caballeros', '809-971-8000', 'info@ochoa.com.do'),
(2, 'Carlos Miguel', 'Guaba Ramirez', 'Ferreteria Bohemia', '054-0113933-1', '809-276-3505', 'Santiago de los caballeros', NULL, 'usuario@buzon.com.do');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre_proyecto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `monto_proyecto` decimal(10,0) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_asociado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre_proyecto`, `monto_proyecto`, `id_cliente`, `id_asociado`) VALUES
(1, 'HOSPITAL CENTRAL', '2500000', 1, 1),
(2, 'Hospital Metropolitano de Santiago', '25000', 0, 0),
(3, 'Proyecto de prueba', '500', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenescompra`
--
ALTER TABLE `ordenescompra`
  ADD PRIMARY KEY (`id_ordencompra`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ordenescompra`
--
ALTER TABLE `ordenescompra`
  MODIFY `id_ordencompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
