-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2024 a las 16:47:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `motos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motos`
--

CREATE TABLE `motos` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `año` int(4) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `motos`
--

INSERT INTO `motos` (`id`, `marca`, `modelo`, `año`, `precio`) VALUES
(1, 'Honda', 'CBR600RR', 2020, 330000.00),
(2, 'Yamaha', 'YZF-R1', 2019, 500000.00),
(3, 'Suzuki', 'GSX-R750', 2018, 295000.00),
(4, 'Kawasaki', 'Ninja ZX-10R', 2021, 450000.00),
(5, 'Ducati', 'Panigale V4', 2022, 550000.00),
(6, 'BMW', 'S1000RR', 2020, 450000.00),
(7, 'Aprilia', 'RSV4', 2019, 600000.00),
(8, 'Triumph', 'Daytona 675', 2017, 450000.00),
(9, 'Honda', 'CBR1000RR', 2021, 400000.00),
(10, 'Yamaha', 'YZF-R6', 2008, 180000.00),
(11, 'Suzuki', 'GSX-R1000', 2020, 240000.00),
(12, 'Kawasaki', 'Ninja ZX-10R', 2011, 200000.00),
(13, 'Ducati', 'Panigale V2', 2017, 240000.00),
(14, 'BMW', 'S1000R', 2023, 400000.00),
(15, 'Yamaha', 'Mt-09', 2019, 190000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `motos`
--
ALTER TABLE `motos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
