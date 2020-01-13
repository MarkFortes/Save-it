-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2020 a las 23:17:53
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `save_it_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movements`
--

CREATE TABLE `movements` (
  `id_mov` int(11) NOT NULL,
  `id_user_mov` int(11) NOT NULL,
  `quantity_mov` int(11) NOT NULL,
  `date_mov` date NOT NULL,
  `action_mov` varchar(10) NOT NULL,
  `reason_mov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movements`
--

INSERT INTO `movements` (`id_mov`, `id_user_mov`, `quantity_mov`, `date_mov`, `action_mov`, `reason_mov`) VALUES
(1, 1, 2, '2020-01-01', 'Retiro', 'Copas Nochevieja'),
(2, 1, 100, '2020-01-06', 'Ingreso', 'Reyes Yaya Pilar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nick_user` varchar(20) NOT NULL,
  `pass_user` varchar(20) NOT NULL,
  `email_user` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nick_user`, `pass_user`, `email_user`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'prueba', 'prueba', 'prueba@gmail.com'),
(3, 'prueba2', 'prueba2', 'prueba2@gmail.com'),
(4, 'lorea', '1234', 'lorea@gmail.com'),
(5, 'marc', '1234', 'marc@gmail.com'),
(6, 'javi', '1234', 'javi@gmail.com'),
(7, 'oriol', '123456', 'oriol@gmail.com'),
(9, 'francis', '123456', 'francis@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movements`
--
ALTER TABLE `movements`
  ADD PRIMARY KEY (`id_mov`),
  ADD KEY `id_user_mov` (`id_user_mov`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `nick_user` (`nick_user`),
  ADD UNIQUE KEY `email_user` (`email_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movements`
--
ALTER TABLE `movements`
  MODIFY `id_mov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movements`
--
ALTER TABLE `movements`
  ADD CONSTRAINT `movements_ibfk_1` FOREIGN KEY (`id_user_mov`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
