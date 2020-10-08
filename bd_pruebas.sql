-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2020 a las 00:59:32
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudas`
--

CREATE TABLE `deudas` (
  `cod_deuda` int(11) NOT NULL,
  `nom_deudor` varchar(20) NOT NULL,
  `ape_deudor` varchar(20) NOT NULL,
  `monto_deudor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deudas`
--

INSERT INTO `deudas` (`cod_deuda`, `nom_deudor`, `ape_deudor`, `monto_deudor`) VALUES
(1, 'juan cristian', 'montano', 300),
(2, 'andrea', 'Perez bustamante', 400),
(3, 'juan', 'morales', 200),
(4, 'Nesyi ', 'Daniela', 100),
(5, 'Limbert', 'Soliz', 500),
(6, 'Crisalida', 'Herrera', 560),
(7, 'Luiz Eduardo', 'Pizarro', 1000),
(8, 'Betty', 'Toribio', 670),
(9, 'jose', 'ramirez Hurtado', 590),
(10, 'Cristina', 'zapatero', 760),
(11, 'Oscar', 'cholico', 130),
(12, 'Iveth Marcela', 'Galeano', 1400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `no_de_serie` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `no_de_serie`, `descripcion`) VALUES
(1, 'laptop hp', '0', '4'),
(2, 'laptop hp', 'wxxn-oii09LA', '4 gb de memoria RAM, unidad SSD de 120gb'),
(3, 'headset', 'wmmba-122', 'headset con rgb y microfono integrado'),
(4, 'libreta de cuadro', 'LIB-0001', 'libreta profesional de cuadro grande'),
(5, 'lapicero', '1223-2333', 'lapicero punto fino color negro'),
(6, 'lapiz', 'b-1', 'lapiz no.2'),
(7, 'taclado al 70%', 'asuz-112a', 'teclado mecanico con rgb'),
(8, 'mouse', 'mo.4321', 'mouse alambrico entrada USB'),
(9, 'tijeras', 'tj-23-gj', 'tijera para uso escolar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `app` varchar(20) NOT NULL,
  `apm` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nombre`, `app`, `apm`, `edad`, `direccion`) VALUES
(1, 'carlos', 'cruz', 'gomez', 27, 'av. universidad'),
(2, 'Ernesto', 'lopez', 'Segundo', 23, 'col. el carmen t'),
(3, 'Daniela', 'Salazar', 'Rosario', 18, 'Guarda de San Antonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `user_id`, `producto_id`, `fecha`, `hora`) VALUES
(1, 2, 6, '2020-10-07', '15:19:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deudas`
--
ALTER TABLE `deudas`
  ADD PRIMARY KEY (`cod_deuda`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deudas`
--
ALTER TABLE `deudas`
  MODIFY `cod_deuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_productos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
