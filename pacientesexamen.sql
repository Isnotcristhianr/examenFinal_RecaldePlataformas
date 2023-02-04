-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2023 a las 04:47:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pacientesexamen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pacientes`
--

CREATE TABLE `tbl_pacientes` (
  `pac_id` int(11) NOT NULL,
  `pac_nombre` varchar(50) NOT NULL,
  `pac_dni` varchar(10) NOT NULL,
  `pac_altura` float NOT NULL,
  `pac_peso` float NOT NULL,
  `pac_imc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_pacientes`
--

INSERT INTO `tbl_pacientes` (`pac_id`, `pac_nombre`, `pac_dni`, `pac_altura`, `pac_peso`, `pac_imc`) VALUES
(1, 'Luis Cabascango', '1002003001', 0, 0, 0),
(2, 'Martha Esther', '1002003002', 0, 0, 0),
(3, 'Santiago Castillo', '1002003003', 0, 0, 0),
(4, 'Santiago Castillo', '1002003003', 0, 0, 0),
(5, 'Alison Morales', '1002003004', 0, 0, 0),
(6, 'Mateo Lopez', '1002003005', 0, 0, 0),
(7, 'Nancy Salazar', '1002003006', 0, 0, 0),
(8, 'Richralison Zaldumbide', '1002003007', 0, 0, 0),
(9, 'Orlando Montesdeoca', '1002003009', 0, 0, 0),
(10, 'Ala Rodriguez', '1002003010', 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  ADD PRIMARY KEY (`pac_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  MODIFY `pac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
