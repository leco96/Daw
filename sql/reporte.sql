-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2019 a las 23:20:48
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_Cliente` int(20) NOT NULL,
  `nombreCliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_Cliente`, `nombreCliente`) VALUES
(2, 'AGACEL AGREGADOS Y ASFALTOS SA DE CV'),
(3, 'HERNANDEZ MONTES JOSE MARIA'),
(4, 'AGUILARES SPR DE RL'),
(5, 'AGRICOLA ZARATTINI SA DE CV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_municipio`
--

CREATE TABLE `cliente_municipio` (
  `id_clienteMunicipio` int(20) NOT NULL,
  `id_Cliente` int(20) NOT NULL,
  `id_Municipio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente_municipio`
--

INSERT INTO `cliente_municipio` (`id_clienteMunicipio`, `id_Cliente`, `id_Municipio`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 4, 1),
(4, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_tanque`
--

CREATE TABLE `cliente_tanque` (
  `id_clienteTanque` int(20) NOT NULL,
  `id_Cliente` int(20) NOT NULL,
  `id_Tanque` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente_tanque`
--

INSERT INTO `cliente_tanque` (`id_clienteTanque`, `id_Cliente`, `id_Tanque`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 4, 3),
(4, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municpio`
--

CREATE TABLE `municpio` (
  `id_Municipio` int(20) NOT NULL,
  `nombreMunicipio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municpio`
--

INSERT INTO `municpio` (`id_Municipio`, `nombreMunicipio`) VALUES
(1, 'APASEO EL GRANDE'),
(2, 'SAN JOSE ITURBIDE'),
(3, 'SILAO DE LA VICTORIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tanque`
--

CREATE TABLE `tanque` (
  `id_Tanque` int(20) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `contrata` varchar(10) DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tanque`
--

INSERT INTO `tanque` (`id_Tanque`, `clave`, `capacidad`, `contrata`) VALUES
(1, '11A07', 25, 'false'),
(2, 'A02', 15, 'false'),
(3, 'A04', 3, 'true'),
(4, 'A05', 15, 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_Vendedor` int(20) NOT NULL,
  `nombreVendedor` varchar(255) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_Vendedor`, `nombreVendedor`, `direccion`, `telefono`) VALUES
(3, 'E.Ochoa', 'Epigmenio Gonzalez', 4423343),
(4, 'R.Rivera', NULL, NULL),
(5, 'M.Salvidar', 'Celaya, Lopez Mateo', 0),
(6, 'J.Perez', 'San Juan del Rio', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor_cliente`
--

CREATE TABLE `vendedor_cliente` (
  `id_vendedorCliente` int(20) NOT NULL,
  `id_Vendedor` int(20) NOT NULL,
  `id_Cliente` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendedor_cliente`
--

INSERT INTO `vendedor_cliente` (`id_vendedorCliente`, `id_Vendedor`, `id_Cliente`, `fecha`, `cantidad`, `observaciones`) VALUES
(1, 3, 2, '2018-12-14', 8, 'Buen vendedor'),
(2, 3, 2, '2018-12-14', 10, 'Pago de contado'),
(3, 4, 2, '2018-12-14', 3, 'Pago en linea'),
(5, 5, 2, '2018-12-14', 10, 'Pago Completo'),
(6, 5, 2, '2018-12-07', 1, 'La competencia bajo sus precios'),
(7, 6, 3, '2018-12-07', 5, ''),
(8, 4, 3, '2017-12-14', 2, ''),
(9, 4, 3, '2018-12-14', 14, ''),
(10, 6, 5, '2018-12-14', 1, ''),
(11, 6, 2, '2017-12-07', 100, ''),
(12, 5, 4, '2017-12-14', 100, ''),
(13, 3, 4, '2018-12-07', 4, ''),
(14, 3, 5, '2017-12-07', 5, ''),
(15, 4, 5, '2018-12-07', 100, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `cliente_municipio`
--
ALTER TABLE `cliente_municipio`
  ADD PRIMARY KEY (`id_clienteMunicipio`),
  ADD KEY `FK_ClienteCM` (`id_Cliente`),
  ADD KEY `FK_MunicipioCM` (`id_Municipio`);

--
-- Indices de la tabla `cliente_tanque`
--
ALTER TABLE `cliente_tanque`
  ADD PRIMARY KEY (`id_clienteTanque`),
  ADD KEY `FK_ClienteCT` (`id_Cliente`),
  ADD KEY `FK_TanqueCT` (`id_Tanque`);

--
-- Indices de la tabla `municpio`
--
ALTER TABLE `municpio`
  ADD PRIMARY KEY (`id_Municipio`);

--
-- Indices de la tabla `tanque`
--
ALTER TABLE `tanque`
  ADD PRIMARY KEY (`id_Tanque`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_Vendedor`);

--
-- Indices de la tabla `vendedor_cliente`
--
ALTER TABLE `vendedor_cliente`
  ADD PRIMARY KEY (`id_vendedorCliente`),
  ADD KEY `FK_VendedorVC` (`id_Vendedor`),
  ADD KEY `FK_ClienteVC` (`id_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_Cliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente_municipio`
--
ALTER TABLE `cliente_municipio`
  MODIFY `id_clienteMunicipio` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cliente_tanque`
--
ALTER TABLE `cliente_tanque`
  MODIFY `id_clienteTanque` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `municpio`
--
ALTER TABLE `municpio`
  MODIFY `id_Municipio` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tanque`
--
ALTER TABLE `tanque`
  MODIFY `id_Tanque` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_Vendedor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vendedor_cliente`
--
ALTER TABLE `vendedor_cliente`
  MODIFY `id_vendedorCliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_municipio`
--
ALTER TABLE `cliente_municipio`
  ADD CONSTRAINT `FK_ClienteCM` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`),
  ADD CONSTRAINT `FK_MunicipioCM` FOREIGN KEY (`id_Municipio`) REFERENCES `municpio` (`id_Municipio`);

--
-- Filtros para la tabla `cliente_tanque`
--
ALTER TABLE `cliente_tanque`
  ADD CONSTRAINT `FK_ClienteCT` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`),
  ADD CONSTRAINT `FK_TanqueCT` FOREIGN KEY (`id_Tanque`) REFERENCES `tanque` (`id_Tanque`);

--
-- Filtros para la tabla `vendedor_cliente`
--
ALTER TABLE `vendedor_cliente`
  ADD CONSTRAINT `FK_ClienteVC` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`),
  ADD CONSTRAINT `FK_VendedorVC` FOREIGN KEY (`id_Vendedor`) REFERENCES `vendedor` (`id_Vendedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
