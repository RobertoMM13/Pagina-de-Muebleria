-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 19-01-2021 a las 16:48:41
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `No_cuenta` varchar(10) NOT NULL,
  `Tu` varchar(40) NOT NULL,
  `telefono` int(12) NOT NULL,
  `Municipio` varchar(40) NOT NULL,
  `domicilio` varchar(60) NOT NULL,
  `cobrador` varchar(50) NOT NULL,
  `articulo` varchar(30) NOT NULL,
  `precio` varchar(15) NOT NULL,
  `abono` varchar(15) NOT NULL,
  `saldo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`No_cuenta`, `Tu`, `telefono`, `Municipio`, `domicilio`, `cobrador`, `articulo`, `precio`, `abono`, `saldo`) VALUES
('480-to', 'lazaro', 481062389, 'valles', 'infonavit', 'eduardo', 'mueble', '10000', '400', '9600');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
