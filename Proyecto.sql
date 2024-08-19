-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2024 a las 00:31:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE Proyecto;
USE Proyecto;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasenia` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasenia`) VALUES
(1, 'admin', '1234'),
(2, 'Jose', 'Jascjasc121.'),
(8, 'jasc', '$2y$10$F/ZO9pmLwr0GbUduGU6M/eGEun7l1jNu1Gh7jWc04Te41PZILv8xa'),
(9, 'jorge', '$2y$10$L0PBORk4NyenaEkKZeBri.4f3PKmnLNIfJ4hxB4Ry94.aBrn/k0bS'),
(10, 'jose', '$2y$10$8BBqCZhiZeRRA9yADjWG9.NmdDF2HRktm2QhyqaAPfqQt5thi2xci'),
(11, 'jasc', '$2y$10$oxdGKQf.7ztIxldxpuLOjurp6aCgdXuQ0T5rgXU8ZDKTGWYLlVJs.'),
(12, 'jasc', '$2y$10$szqRsh7yNH10DrZugZ7rDuZrBWSjf09GEd46wr81qZX4HtLPei0Ou');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `aniodelanzamiento` date DEFAULT NULL,
  `plataforma` varchar(100) DEFAULT NULL,
  `categoria` varchar(999) NOT NULL,
  `imagenurl` varchar(999) DEFAULT NULL,
  `compraurl` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `nombre`, `aniodelanzamiento`, `plataforma`, `categoria`, `imagenurl`, `compraurl`) VALUES
(10, 'Valorant', '2020-06-20', 'Pc', 'shooter', 'https://th.bing.com/th/id/OIP.GSnO2Eie9NtsS83kIh-67QHaEK?rs=1&pid=ImgDetMain', 'https://playvalorant.com/es-mx/'),
(13, 'Gta V', '2013-09-17', 'Todas', 'Mundo abierto', 'https://assets.tonica.la/__export/1612981809101/sites/debate/img/2021/02/10/gta-v-portada.jpg_242310155.jpg', 'https://www.rockstargames.com/es/gta-v'),
(14, 'League Of Legens', '2009-10-27', 'Pc', 'Mobals', 'https://th.bing.com/th/id/OIP.6-4gut00jsfgEM7dsv6D1gHaEK?rs=1&pid=ImgDetMain', 'https://signup.leagueoflegends.com/es-mx/signup/redownload'),
(15, 'Farcry 5', '2018-02-27', 'Todas', 'Accion-Aventura', 'https://th.bing.com/th/id/OIP._urVi05NtSRaXah9ghBqxQHaEK?rs=1&pid=ImgDetMain', 'https://www.ubisoft.com/es-mx/game/far-cry/far-cry-5'),
(16, 'Red Deam Redemption', '2018-10-26', 'Todas', 'shooter', 'https://th.bing.com/th/id/OIP.QKEUB1AjCRXB7_nV1DLYEgHaEK?rs=1&pid=ImgDetMain', 'https://www.rockstargames.com/reddeadredemption2/'),
(17, '', '0000-00-00', '', 'shooter', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
