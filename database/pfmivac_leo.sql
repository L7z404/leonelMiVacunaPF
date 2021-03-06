-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-07-2021 a las 23:04:19
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pfmivac_leo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_persona`
--

CREATE TABLE `datos_persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apaterno` varchar(55) NOT NULL,
  `amaterno` varchar(55) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `fecNac` date NOT NULL,
  `id_entidad` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `postracion` varchar(15) NOT NULL,
  `diabetes` varchar(15) NOT NULL,
  `hipertension` varchar(15) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `cp` int(5) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `telefono2` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `emailap` varchar(45) NOT NULL,
  `dom_datos` text NOT NULL,
  `folio` varchar(45) NOT NULL,
  `id_entidad_lugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades`
--

CREATE TABLE `entidades` (
  `id_entidad` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `entidad` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entidades`
--

INSERT INTO `entidades` (`id_entidad`, `id_municipio`, `entidad`) VALUES
(1, 1, 'AGUASCALIENTES'),
(2, 2, 'BAJA CALIFORNIA'),
(3, 3, 'BAJA CALIFORNIA SUR'),
(4, 4, 'CAMPECHE'),
(5, 5, 'CHIAPAS'),
(6, 6, 'CHIHUAHUA'),
(7, 7, 'COAHUILA'),
(8, 8, 'COLIMA'),
(9, 9, 'DISTRITO FEDERAL'),
(10, 10, 'DURANGO'),
(11, 11, 'GUANAJUATO'),
(12, 12, 'GUERRERO'),
(13, 13, 'HIDALGO'),
(14, 14, 'JALISCO'),
(15, 15, 'MEXICO'),
(16, 16, 'MICHOACAN'),
(17, 17, 'MORELOS'),
(18, 18, 'NAYARIT'),
(19, 19, 'NUEVO LEON'),
(20, 20, 'OAXACA'),
(21, 21, 'PUEBLA'),
(22, 22, 'QUERETARO'),
(23, 23, 'QUINTANA ROO'),
(24, 24, 'SAN LUIS POTOSI'),
(25, 25, 'SINALOA'),
(26, 26, 'SONORA'),
(27, 27, 'TABASCO'),
(28, 28, 'TAMAULIPAS'),
(29, 29, 'TLAXCALA'),
(30, 30, 'VERACRUZ'),
(31, 31, 'YUCATAN'),
(32, 32, 'ZACATECAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(55) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `id_municipio`, `municipio`) VALUES
(1, 1, 'Asientos'),
(2, 1, 'Calvillo'),
(3, 1, 'CosÃ­o'),
(4, 1, 'TepezalÃ¡'),
(5, 1, 'El Llano'),
(6, 2, 'Ensenada'),
(7, 2, 'Mexicali'),
(8, 2, 'Playas de Rosarito'),
(9, 2, 'Tecate'),
(10, 2, 'Tijuana'),
(11, 3, 'ComundÃº'),
(12, 3, 'La Paz'),
(13, 3, 'Loreto'),
(14, 3, 'Los Cabos'),
(15, 3, 'MulegÃ©'),
(16, 4, 'Calakmul'),
(17, 4, 'EscÃ¡rcega'),
(18, 4, 'HecelchakÃ¡n'),
(19, 4, 'Palizada'),
(20, 4, 'Tenabo'),
(21, 5, 'Ixtapa'),
(22, 5, 'Chicomuselo'),
(23, 5, 'Bochil'),
(24, 5, 'Ocosingo'),
(25, 5, 'Escuintla'),
(26, 6, 'AscensiÃ³n'),
(27, 6, 'Guachochi'),
(28, 6, 'JimÃ©nez'),
(29, 6, 'Rosales'),
(30, 6, 'Urique'),
(31, 7, 'CuatrociÃ©negas'),
(32, 7, 'Escobedo'),
(33, 7, 'MÃºzquiz'),
(34, 7, 'Ocampo'),
(35, 7, 'Viesca'),
(36, 8, 'ArmerÃ­a'),
(37, 8, 'CoquimatlÃ¡n'),
(38, 8, 'IxtlahuacÃ¡n'),
(39, 8, 'MinatitlÃ¡n'),
(40, 8, 'TecomÃ¡n'),
(41, 9, 'Azcapotzalco'),
(42, 9, 'Iztacalco'),
(43, 9, 'Milpa Alta'),
(44, 9, 'TlÃ¡huac'),
(45, 9, 'Xochimilco'),
(46, 10, 'CanatlÃ¡n'),
(47, 10, 'GuanacevÃ­'),
(48, 10, 'IndÃ©'),
(49, 10, 'Nazas'),
(50, 10, 'PeÃ±Ã³n Blanco'),
(51, 11, 'Comonfort'),
(52, 11, 'Doctor Mora'),
(53, 11, 'HuanÃ­maro'),
(54, 11, 'Irapuato'),
(55, 11, 'JerÃ©cuaro'),
(56, 12, 'Ahuacuotzingo	'),
(57, 12, 'Alpoyeca'),
(58, 12, 'Copala'),
(59, 12, 'Igualapa'),
(60, 12, 'Zitlala'),
(61, 13, 'Chapantongo'),
(62, 13, 'EloxochitlÃ¡n'),
(63, 13, 'Huautla'),
(64, 13, 'Pacula'),
(65, 13, 'Tetepango'),
(66, 14, 'Chiquilistlan'),
(67, 14, 'Cocula'),
(68, 14, 'Tecolotlan'),
(69, 14, 'Ameca'),
(70, 14, 'San Martin Hidalgo'),
(71, 15, 'Ãlvaro ObregÃ³n'),
(72, 15, 'Azcapotzalco'),
(73, 15, 'Benito JuÃ¡rez'),
(74, 15, 'CoyoacÃ¡nâ€‚'),
(75, 15, 'CuauhtÃ©moc'),
(76, 16, 'Aporo'),
(77, 16, 'Chavinda'),
(78, 16, 'Ecuandureo'),
(79, 16, 'Jungapeo'),
(80, 16, 'Quiroga'),
(81, 17, 'Ayala'),
(82, 17, 'Cuautla'),
(83, 17, 'Jiutepec'),
(84, 17, 'Tlalnepantla'),
(85, 17, 'Yecapixtla'),
(86, 18, 'AmatlÃ¡n de CaÃ±as'),
(87, 18, 'BahÃ­a de Banderas'),
(88, 18, 'IxtlÃ¡n del RÃ­o'),
(89, 18, 'Jala'),
(90, 18, 'Xalisco'),
(91, 19, 'AnÃ¡huac'),
(92, 19, 'Cerralvo'),
(93, 19, 'GarcÃ­a'),
(94, 19, 'Linares'),
(95, 19, 'Vallecillo'),
(96, 20, 'Abejones'),
(97, 20, 'Cacalotepec'),
(98, 20, 'Ixtaltepec'),
(99, 20, 'NochixtlÃ¡n'),
(100, 20, 'OcotlÃ¡n'),
(101, 21, 'Ahuazotepec'),
(102, 21, 'Cuautlancingo'),
(103, 21, 'Huejotzingo'),
(104, 21, 'Molcaxac'),
(105, 21, 'ZoquitlÃ¡n'),
(106, 22, 'Amealco de Bonfil'),
(107, 22, 'ColÃ³n'),
(108, 22, 'Huimilpan'),
(109, 22, 'PeÃ±amiller'),
(110, 22, 'San JoaquÃ­n'),
(111, 23, 'Bacalar'),
(112, 23, 'Isla Mujeres'),
(113, 23, 'LÃ¡zaro CÃ¡rdenas'),
(114, 23, 'Puerto Morelos'),
(115, 23, 'Tulum'),
(116, 24, 'AquismÃ³n'),
(117, 24, 'Tancanhuitz'),
(118, 24, 'Lagunillas'),
(119, 24, 'Salinas'),
(120, 24, 'Vanegas'),
(121, 25, 'Ahome'),
(122, 25, 'CosalÃ¡'),
(123, 25, 'Choix'),
(124, 25, 'Escuinapa'),
(125, 25, 'Rosario'),
(126, 26, 'Aconchi'),
(127, 26, 'BacadÃ©huachi'),
(128, 26, 'CarbÃ³'),
(129, 26, 'Etchojoa'),
(130, 26, 'YÃ©cora'),
(131, 27, 'BalancÃ¡n'),
(132, 27, 'Huimanguillo'),
(133, 27, 'Jalapa'),
(134, 27, 'Macuspana'),
(135, 27, 'ParaÃ­so'),
(136, 28, 'Altamira'),
(137, 28, 'Burgos'),
(138, 28, 'GÃ¼Ã©mez'),
(139, 28, 'Miquihuana'),
(140, 28, 'Tula'),
(141, 29, 'Apizaco'),
(142, 29, 'Cuaxomulco'),
(143, 29, 'Hueyotlipan'),
(144, 29, 'Tenancingo'),
(145, 29, 'Xicohtzinco'),
(146, 30, 'Acajete'),
(147, 30, 'Tlaltetela'),
(148, 30, 'Coatzacoalcos'),
(149, 30, 'Coyutla'),
(150, 30, 'FortÃ­n'),
(151, 31, 'AbalÃ¡'),
(152, 31, 'BokobÃ¡'),
(153, 31, 'Conkal'),
(154, 31, 'Dzemul'),
(155, 31, 'KopomÃ¡'),
(156, 32, 'Atolinga'),
(157, 32, 'Fresnillo'),
(158, 32, 'PÃ¡nuco'),
(159, 32, 'ValparaÃ­so'),
(160, 32, 'SusticacÃ¡n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `clave` int(11) NOT NULL,
  `tipousuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `clave`, `tipousuario`) VALUES
(1, 'Admin', 112233, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_persona`
--
ALTER TABLE `datos_persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ix_entidad` (`id_entidad`),
  ADD KEY `IX_municipio` (`id_municipio`),
  ADD KEY `IX_Entidad_Lug` (`id_entidad_lugar`);

--
-- Indices de la tabla `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id_entidad`),
  ADD KEY `ix_muni` (`id_municipio`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ix_municipio_m` (`id_municipio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_persona`
--
ALTER TABLE `datos_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id_entidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_persona`
--
ALTER TABLE `datos_persona`
  ADD CONSTRAINT `datos_persona_ibfk_1` FOREIGN KEY (`id_entidad`) REFERENCES `entidades` (`id_entidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_persona_ibfk_2` FOREIGN KEY (`id_entidad_lugar`) REFERENCES `entidades` (`id_entidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_persona_ibfk_3` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `entidades`
--
ALTER TABLE `entidades`
  ADD CONSTRAINT `entidades_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
