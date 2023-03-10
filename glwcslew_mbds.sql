-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-02-2022 a las 16:41:10
-- Versión del servidor: 10.3.28-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `glwcslew_mbds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Diabetes`
--

CREATE TABLE `Diabetes` (
  `Id` int(11) NOT NULL,
  `nombre_paciente` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 2,
  `fecha` date NOT NULL,
  `glucometria` float NOT NULL,
  `insulina` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Diabetes`
--

INSERT INTO `Diabetes` (`Id`, `nombre_paciente`, `tipo`, `fecha`, `glucometria`, `insulina`) VALUES
(1, 'Juan Lopez', 2, '2021-11-28', 1.2, 6.8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Hipertension_Arterial`
--

CREATE TABLE `Hipertension_Arterial` (
  `Id` int(11) NOT NULL,
  `nombre_paciente` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `presionArterial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Hipertension_Arterial`
--

INSERT INTO `Hipertension_Arterial` (`Id`, `nombre_paciente`, `fecha`, `presionArterial`) VALUES
(1, 'Juan Lopez', '2021-07-30', 93.6667);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Insuficiencia_Renal`
--

CREATE TABLE `Insuficiencia_Renal` (
  `Id` int(11) NOT NULL,
  `nombre_paciente` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ultraFiltracion` float NOT NULL,
  `cantidadOrina` float NOT NULL,
  `glucometria` float NOT NULL,
  `presionArterial` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Insuficiencia_Renal`
--

INSERT INTO `Insuficiencia_Renal` (`Id`, `nombre_paciente`, `ultraFiltracion`, `cantidadOrina`, `glucometria`, `presionArterial`, `fecha`) VALUES
(1, 'Juan Lopez', 1.2, 2.4, 100, 92.3333, '2021-09-30'),
(2, 'Daniela Torres', 5.6, 1.5, 110, 96.3333, '2021-04-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente`
--

CREATE TABLE `Paciente` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` blob NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `padecimientos` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Paciente`
--

INSERT INTO `Paciente` (`Id`, `nombre`, `correo`, `password`, `fecha_de_nacimiento`, `padecimientos`) VALUES
(1, 'Jorge Luis Salas', 'jorge98.2@outlook.com', 0x6a6c7334333132, '1998-05-21', 'Diabetes'),
(2, 'Juan Lopez', 'juan.lopez01@outlook.com', 0x6a75616e3132396c6f70657a, '1977-04-15', 'Diabetes, Hipertension Arterial'),
(3, 'Daniela Torres', 'dani.tor315@gmail.com', 0x64616e69333035746f72, '1980-07-30', 'Insuficiencia Renal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Diabetes`
--
ALTER TABLE `Diabetes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Hipertension_Arterial`
--
ALTER TABLE `Hipertension_Arterial`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Insuficiencia_Renal`
--
ALTER TABLE `Insuficiencia_Renal`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Diabetes`
--
ALTER TABLE `Diabetes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Hipertension_Arterial`
--
ALTER TABLE `Hipertension_Arterial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Insuficiencia_Renal`
--
ALTER TABLE `Insuficiencia_Renal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
