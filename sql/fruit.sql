-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2019 a las 23:19:47
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
-- Base de datos: `dawlab14`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruit`
--

CREATE TABLE `fruit` (
  `id_fruit` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `units` int(16) NOT NULL,
  `price` int(15) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fruit`
--

INSERT INTO `fruit` (`id_fruit`, `name`, `units`, `price`, `country`) VALUES
(1, 'Platano', 5, 12, 'Cuba'),
(2, 'Mango', 4, 19, 'Mexico'),
(3, 'Papaya', 26, 9, 'Chile'),
(4, 'Fresa', 4, 17, 'Cuba'),
(5, 'Manzana', 8, 25, 'Chile'),
(6, 'Naranja', 4, 23, 'Mexico'),
(7, 'Pera', 5, 14, 'Mexico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`id_fruit`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id_fruit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
