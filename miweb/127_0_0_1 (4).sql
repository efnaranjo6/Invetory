-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2017 a las 16:24:12
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--
CREATE DATABASE IF NOT EXISTS `inventario` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `inventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_elemento`
--

CREATE TABLE `asignacion_elemento` (
  `Ase_Cod` int(4) NOT NULL,
  `Ase_FechaInicial` date DEFAULT NULL,
  `Ase_FechaFinal` date DEFAULT NULL,
  `Ele_Cod` int(4) NOT NULL,
  `Ter_Cod` int(4) NOT NULL,
  `Usuario_idUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignacion_elemento`
--

INSERT INTO `asignacion_elemento` (`Ase_Cod`, `Ase_FechaInicial`, `Ase_FechaFinal`, `Ele_Cod`, `Ter_Cod`, `Usuario_idUsuario`) VALUES
(1, '2017-08-08', '2017-08-10', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE `dependencia` (
  `Dep_Cod` int(4) NOT NULL,
  `Dep_Nombre` varchar(45) DEFAULT NULL,
  `Dep_Estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`Dep_Cod`, `Dep_Nombre`, `Dep_Estado`) VALUES
(1, 'juridica', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elemento`
--

CREATE TABLE `elemento` (
  `Ele_Cod` int(4) NOT NULL,
  `Ele_Serial` varchar(50) DEFAULT NULL,
  `Ele_Observacion` text,
  `Ele_Configuracion` text,
  `Ele_Estado` varchar(1) DEFAULT NULL,
  `Mar_cod` int(4) NOT NULL,
  `Tie_Cod` int(4) NOT NULL,
  `Pro_Cod` int(4) NOT NULL,
  `Usuario_idUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `elemento`
--

INSERT INTO `elemento` (`Ele_Cod`, `Ele_Serial`, `Ele_Observacion`, `Ele_Configuracion`, `Ele_Estado`, `Mar_cod`, `Tie_Cod`, `Pro_Cod`, `Usuario_idUsuario`) VALUES
(1, '9001', 'taclado gamer', 'ram 5gb', 'A', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Clave` varchar(45) DEFAULT NULL,
  `UsuarioLog` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `Mar_cod` int(4) NOT NULL,
  `Mar_Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`Mar_cod`, `Mar_Nombre`) VALUES
(1, 'lenovo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `Pro_Cod` int(4) NOT NULL,
  `Pro_Nombre` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`Pro_Cod`, `Pro_Nombre`, `Usuario_idUsuario`) VALUES
(1, 'nose', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tercero`
--

CREATE TABLE `tercero` (
  `Ter_Cod` int(4) NOT NULL,
  `Ter_Documennto` int(10) DEFAULT NULL,
  `Ter_Nombre` varchar(45) DEFAULT NULL,
  `Ter_Apellido` varchar(45) DEFAULT NULL,
  `Ter_Estado` varchar(1) DEFAULT NULL,
  `Dep_Cod` int(4) NOT NULL,
  `Usuario_idUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tercero`
--

INSERT INTO `tercero` (`Ter_Cod`, `Ter_Documennto`, `Ter_Nombre`, `Ter_Apellido`, `Ter_Estado`, `Dep_Cod`, `Usuario_idUsuario`) VALUES
(1, 971124, 'ener', 'naranjo', 'A', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_elemento`
--

CREATE TABLE `tipo_elemento` (
  `Tie_Cod` int(4) NOT NULL,
  `Tie_Nombre` varchar(45) DEFAULT NULL,
  `Tie_Estado` varchar(1) DEFAULT 'A',
  `Tie_Formato` int(4) DEFAULT NULL,
  `Usuario_idUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_elemento`
--

INSERT INTO `tipo_elemento` (`Tie_Cod`, `Tie_Nombre`, `Tie_Estado`, `Tie_Formato`, `Usuario_idUsuario`) VALUES
(1, 'Computadora', 'A', 213, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL,
  `NombreUsuario` varchar(45) DEFAULT NULL,
  `ApellidoUsuario` varchar(45) DEFAULT NULL,
  `NumeDoc` varchar(45) DEFAULT NULL,
  `TipoDoc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `NombreUsuario`, `ApellidoUsuario`, `NumeDoc`, `TipoDoc`) VALUES
(1, 'Ener Felipe', 'Naranjo ', '971124', 'CC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_elemento`
--
ALTER TABLE `asignacion_elemento`
  ADD PRIMARY KEY (`Ase_Cod`),
  ADD KEY `fk_Asignacion_elemento_Elemento1_idx` (`Ele_Cod`),
  ADD KEY `fk_Asignacion_elemento_Tercero1_idx` (`Ter_Cod`),
  ADD KEY `fk_Asignacion_elemento_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD PRIMARY KEY (`Dep_Cod`);

--
-- Indices de la tabla `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`Ele_Cod`),
  ADD KEY `fk_Elemento_Marca1_idx` (`Mar_cod`),
  ADD KEY `fk_Elemento_Tipo_elemento1_idx` (`Tie_Cod`),
  ADD KEY `fk_Elemento_Proyecto1_idx` (`Pro_Cod`),
  ADD KEY `fk_Elemento_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD KEY `fk_Login_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`Mar_cod`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`Pro_Cod`),
  ADD KEY `fk_Proyecto_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `tercero`
--
ALTER TABLE `tercero`
  ADD PRIMARY KEY (`Ter_Cod`),
  ADD KEY `fk_Tercero_Dependencia1_idx` (`Dep_Cod`),
  ADD KEY `fk_Tercero_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `tipo_elemento`
--
ALTER TABLE `tipo_elemento`
  ADD PRIMARY KEY (`Tie_Cod`),
  ADD KEY `fk_Tipo_elemento_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion_elemento`
--
ALTER TABLE `asignacion_elemento`
  MODIFY `Ase_Cod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  MODIFY `Dep_Cod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `elemento`
--
ALTER TABLE `elemento`
  MODIFY `Ele_Cod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `Mar_cod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `Pro_Cod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tercero`
--
ALTER TABLE `tercero`
  MODIFY `Ter_Cod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_elemento`
--
ALTER TABLE `tipo_elemento`
  MODIFY `Tie_Cod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_elemento`
--
ALTER TABLE `asignacion_elemento`
  ADD CONSTRAINT `fk_Asignacion_elemento_Elemento1` FOREIGN KEY (`Ele_Cod`) REFERENCES `elemento` (`Ele_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Asignacion_elemento_Tercero1` FOREIGN KEY (`Ter_Cod`) REFERENCES `tercero` (`Ter_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Asignacion_elemento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `fk_Elemento_Marca1` FOREIGN KEY (`Mar_cod`) REFERENCES `marca` (`Mar_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Elemento_Proyecto1` FOREIGN KEY (`Pro_Cod`) REFERENCES `proyecto` (`Pro_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Elemento_Tipo_elemento1` FOREIGN KEY (`Tie_Cod`) REFERENCES `tipo_elemento` (`Tie_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Elemento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_Login_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_Proyecto_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tercero`
--
ALTER TABLE `tercero`
  ADD CONSTRAINT `fk_Tercero_Dependencia1` FOREIGN KEY (`Dep_Cod`) REFERENCES `dependencia` (`Dep_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tercero_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo_elemento`
--
ALTER TABLE `tipo_elemento`
  ADD CONSTRAINT `fk_Tipo_elemento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
