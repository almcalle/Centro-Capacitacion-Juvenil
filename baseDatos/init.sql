-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2017 a las 20:24:08
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `capacitacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `identidad` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(39) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dirección` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `proyecto_actual` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `proyectos_pasados` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grupo` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hijos` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_hijos` int(11) NOT NULL,
  `nivel` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `centro_educativo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cuenta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `inicio_carrera` date NOT NULL,
  `promedio_inicial` float NOT NULL,
  `sangre` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `peso` float NOT NULL,
  `enfermedades` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `medicamentos` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `operaciones` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocupación_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoria_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoria_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `vive_padres` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `encargado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_hermanos` int(11) NOT NULL,
  `lugar_que_ocupa` int(11) NOT NULL,
  `tipo_vivienda` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `piso_de` int(30) NOT NULL,
  `religion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `identidad` bigint(20) NOT NULL,
  `usuario` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(8) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identidad`, `usuario`, `contrasena`) VALUES
(80119905615, 'admin', 'admin');
