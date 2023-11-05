-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2023 a las 16:28:02
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnicell`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `equipo` varchar(100) NOT NULL,
  `imei` varchar(17) NOT NULL,
  `detalles` varchar(500) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `numero` varchar(12) DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombres`, `equipo`, `imei`, `detalles`, `fecha_registro`, `numero`, `estado`) VALUES
(122, 'Abraham', 'Moto G', '356059008792257', 'cambio de placa', '2023-10-28', '96857412', 'Pendiente'),
(123, 'Ronald', 'Sansung A71', '359027066388315', 'Pin de carga', '2023-10-29', '916675783', 'Pendiente'),
(124, 'jhonatan', 'S22', '357444023559486', 'Modulo', '2023-10-06', '902763823', 'Pendiente'),
(125, 'Nahuel', 'MOTO G', '352210047475032', 'Pin de carga', '2023-09-22', '980736362', 'Finalizado'),
(126, 'Bret', 'Sansung A24', '359717044307524', 'Pantalla', '2023-09-20', '986378232', 'Pendiente'),
(127, 'Jose', 'Sansung A54', '355153019398625', 'Modulo', '2023-10-19', '980765323', 'Finalizado'),
(128, 'Juan', 'Sansung A04s', '354160013252097', 'Pantalla', '2023-10-12', '900364823', 'Pendiente'),
(129, 'Franz', 'Sansung A04', '359761014340289', 'Pin de carga', '2023-10-03', '908653745', 'Finalizado'),
(130, 'Miguel', 'Xiaomi Redmi 12', '358933008935538', 'Pin de carga', '2023-10-18', '98765437', 'Pendiente'),
(131, 'Angel', 'Sansung A24', '351561059079729', 'Modulo', '2023-09-07', '987654345', 'Pendiente'),
(132, 'Jharvin', 'Sansung A71', '868887001734244', 'Modulo', '2023-09-21', '965453672', 'Finalizado'),
(133, 'Ethan', 'Sansung A71', '864079011130621', 'Pin de carga', '2023-09-06', '954234245', 'Finalizado'),
(134, 'Flor', 'Sansung A71', '352592045537057', 'Modulo', '2023-11-18', '909763545', 'Finalizado'),
(135, 'Eugenia', 'MOTO G', '861895014811260', 'Pantalla', '2023-11-23', '976424545', 'Finalizado'),
(136, 'Mariela', 'Sansung A04s', '354586038191045', 'Pin de carga', '2023-11-26', '986534234', 'Finalizado'),
(137, 'Ruth', 'Sansung A71', '863115019753724', 'Modulo', '2023-11-29', '900390983', 'Finalizado'),
(138, 'Victor', 'Sansung A24', '356957016380082', 'Modulo', '2023-09-07', '987800003', 'Pendiente'),
(139, 'Maria', 'Xiaomi Redmi 12', '351416555577694', 'Pin de carga', '2023-11-25', '988900763', 'Pendiente'),
(140, 'Jose Maria', 'Sansung A71', '351607023502708', 'Pin de carga', '2023-11-24', '900343212', 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombres`, `cantidad`, `categoria`) VALUES
(13, 'Funda A50', 10, 'Accesorios'),
(14, 'Cargador V8', 43, 'Accesorios'),
(15, 'Cargador Type C', 56, 'Accesorios'),
(16, 'Vidrio Templado A70', 14, 'Accesorios'),
(17, 'Flex A71', 13, 'Repuestos'),
(18, 'Auricular comun', 34, 'Accesorios'),
(19, 'Funda S22', 13, 'Accesorios'),
(20, 'Cargador universal computadoras', 3, 'Accesorios'),
(21, 'Modulo A04s', 3, 'Repuestos'),
(22, 'Pantalla A14', 4, 'Repuestos'),
(23, 'Funda A04e', 14, 'Accesorios'),
(24, 'Funda A52', 8, 'Accesorios'),
(25, 'Modulo A52', 4, 'Repuestos'),
(26, 'Pin de carga A52', 5, 'Repuestos'),
(27, 'Pin de carga A73', 4, 'Repuestos'),
(28, 'Pin de carga A03', 5, 'Repuestos'),
(29, 'Cargador original Apple', 4, 'Accesorios'),
(30, 'Funda A14', 23, 'Accesorios'),
(31, 'Modulo Redmi A2', 4, 'Repuestos'),
(32, 'Pin de carga Redmi Note 12', 4, 'Repuestos'),
(33, 'Funda Redmi Note 12 PRO', 7, 'Accesorios'),
(34, 'Pin de carga Xiaomi Redmi 12', 15, 'Repuestos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `pass`) VALUES
(1, 'Administrador', 'Admin', 'admin@tecnicell.com', '$2y$10$yjCHqWWK9goL7IkruWGOE.0SD.STc8Hnp6lCXEZ6lDg6GvcVYK7.S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
