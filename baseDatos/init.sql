-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-10-2017 a las 15:33:36
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
  `direccion` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `proyecto_actual` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `proyectos_pasados` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `grupo` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hijos` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_hijos` int(11) DEFAULT NULL,
  `nivel` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `centro_educativo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuenta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `carrera` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `inicio_carrera` date DEFAULT NULL,
  `promedio_inicial` float DEFAULT NULL,
  `sangre` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `enfermedades` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `medicamentos` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `operaciones` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ocupacion_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria_madre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ocupacion_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria_padre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `vive_padres` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `encargado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `numero_hermanos` int(11) NOT NULL,
  `lugar_que_ocupa` int(11) DEFAULT NULL,
  `tipo_vivienda` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `piso_de` int(30) DEFAULT NULL,
  `religion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`identidad`, `nombre`, `fecha_nacimiento`, `lugar_nacimiento`, `sexo`, `direccion`, `proyecto_actual`, `proyectos_pasados`, `telefono`, `categoria`, `grupo`, `hijos`, `numero_hijos`, `nivel`, `centro_educativo`, `cuenta`, `carrera`, `inicio_carrera`, `promedio_inicial`, `sangre`, `peso`, `enfermedades`, `medicamentos`, `operaciones`, `nombre_madre`, `telefono_madre`, `ocupacion_madre`, `categoria_madre`, `nombre_padre`, `telefono_padre`, `ocupacion_padre`, `categoria_padre`, `vive_padres`, `encargado`, `numero_hermanos`, `lugar_que_ocupa`, `tipo_vivienda`, `piso_de`, `religion`) VALUES
('874589', 'dfsh', '2017-09-25', 'ksfhahjk', 'Masculino', 'sjhdfgajdf', '', '', '', '', 'A2N', 'No', 0, 'Superior', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 0, '', 0, ''),
('94759817', 'kdhcsd', '2017-10-01', 'ksjhfjs', 'Masculino', 'sfjk', '', '', '', '', 'A2N', 'No', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('57984', 'jdshjk', '2017-09-24', 'sdhfa', 'Masculino', 'skldhfa', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('5798483', 'jdshjk', '2017-09-24', 'sdhfa', 'Masculino', 'skldhfa', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('57984832', 'jdshjk', '2017-09-24', 'sdhfa', 'Masculino', 'skldhfa', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('237', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('2374', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('23745', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('237455', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('2374556', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('23745567', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('237455674', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('2374556747', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('23745567475', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('237455674754', 'ksjdf', '2017-10-01', 'sadvb', 'Masculino', 'ksdfK', '', '', '', '', 'A2N', 'No', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('827598', 'jdsf', '2017-10-01', 'sdjhfkjsad', 'Masculino', 'ksdjhflksadhf', '', '', '', '', 'A2N', 'No', 0, 'Secundaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('8275989', 'jdsf', '2017-10-01', 'sdjhfkjsad', 'Masculino', 'ksdjhflksadhf', '', '', '', '', 'A2N', 'No', 0, 'Secundaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('84578943', 'jdshfkjlasd', '2017-10-01', 'dhfuisdfh', 'Masculino', 'ksjdfks', '', '', '', '', 'A2N', 'No', 0, 'Universitario', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('845789433', 'jdshfkjlasd', '2017-10-01', 'dhfuisdfh', 'Masculino', 'ksjdfks', '', '', '', '', 'A2N', 'No', 0, 'Universitario', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('8457894333', 'jdshfkjlasd', '2017-10-01', 'dhfuisdfh', 'Masculino', 'ksjdfks', '', '', '', '', 'A2N', 'No', 0, 'Universitario', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('84578943332', 'jdshfkjlasd', '2017-10-01', 'dhfuisdfh', 'Masculino', 'ksjdfks', '', '', '', '', 'A2N', 'No', 0, 'Universitario', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('845789433323', 'jdshfkjlasd', '2017-10-01', 'dhfuisdfh', 'Masculino', 'ksjdfks', '', '', '', '', 'A2N', 'No', 0, 'Universitario', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('8457894333232', 'jdshfkjlasd', '2017-10-01', 'dhfuisdfh', 'Masculino', 'ksjdfks', '', '', '', '', 'A2N', 'No', 0, 'Universitario', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('84574', 'jdshfkjlasd', '2017-10-01', 'dhfuisdfh', 'Masculino', 'ksjdfks', '', '', '', '', 'A2N', 'No', 0, 'Universitario', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('47892', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Fiscalia', 'Maestro en Casa', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('4789233', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Array', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('478923312', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Array', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('4789233123', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Array', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('478923312333', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', '', '', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('44923312333', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', '', '', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('449233123335', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Array', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('44923312325', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Array', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('4492331245325', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Array', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('4492331234534', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Array', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('449233534', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Administración, Fiscalia', 'Array', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('44923353422', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Administración, Fiscalia', 'Administración, d', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('56546', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Administración, Fiscalia', 'Administración, d', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('5654659347589', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Administración, Fiscalia', 'Administración, d, m', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('2945602', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Administración, Fiscalia', 'Administración, d, m', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('2945602565', 'ndbkf', '2017-10-01', 'sdfjnj', 'Masculino', 'sfdnfl', 'Administración, Fiscalia', 'Administración, d, m', '', '', 'A2N', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('3553356666', 'jhdfgsdjha', '2017-10-01', 'cnjd', 'Femenino', 'dacnjdkc', '', '', '', '', 'A2V', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('3553356666555', 'jhdfgsdjha', '2017-10-01', 'cnjd', 'Femenino', 'dacnjdkc', '', '', '', '', 'A2V', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('3553356666867', 'jhdfgsdjha', '2017-10-01', 'cnjd', 'Femenino', 'dacnjdkc', 'Centros Infantiles, Maestro en Casa', 'Centros Infantiles, e', '', '', 'A2V', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('3553356666355', 'jhdfgsdjha', '2017-10-01', 'cnjd', 'Femenino', 'dacnjdkc', 'Centros Infantiles, Maestro en Casa', 'Centros Infantiles, Fiscalia', '', '', 'A2V', 'Si', 0, 'Ninguno', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('4921', 'jahsdfas', '2017-10-01', 'jfdk', 'Masculino', 'DKSJHFA', '', '', '', '', 'A2V', 'Si', 0, 'Primaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('2834802', 'dnkjsn', '2017-10-01', 'kjadfnkjs', 'Femenino', 'alskdjfnqjksf', '', '', '', '', 'A2N', 'No', 0, 'Secundaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('28348022', 'dnkjsn', '2017-10-01', 'kjadfnkjs', 'Femenino', 'alskdjfnqjksf', '', '', '', '', 'A2N', 'No', 0, 'Secundaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, ''),
('283480222', 'dnkjsn', '2017-10-01', 'kjadfnkjs', 'Femenino', 'alskdjfnqjksf', '', '', '', '', 'A2N', 'No', 0, 'Secundaria', '', '', '', '0000-00-00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '');

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
