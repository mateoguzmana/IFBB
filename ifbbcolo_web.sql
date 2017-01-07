-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2016 a las 11:30:00
-- Versión del servidor: 5.5.50-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ifbbcolo_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admon`
--

CREATE TABLE IF NOT EXISTS `admon` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admon`
--

INSERT INTO `admon` (`Id`, `usuario`, `contrasena`) VALUES
(1, 'ifbb', 'ifbb009');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Banner`
--

CREATE TABLE IF NOT EXISTS `Banner` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Banner`
--

INSERT INTO `Banner` (`Id`, `Nombre`, `Titulo`, `Texto`, `Foto`, `Pos`) VALUES
(2, '2', '', '', '2.jpg', 3),
(9, 'Lina 1', '', '', '9.jpg', 0),
(8, 'Luis Gabriel Rios', '', '', '8.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE IF NOT EXISTS `Categorias` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`Id`, `Nombre`, `Titulo`, `Texto`, `Foto`, `Pos`) VALUES
(21, '41 Campeonato Sudamericano Perú 2015 ', '', '', '21.JPG', 1),
(22, 'Campeonato Nacional C 2015 de Venezuela', '', '', '22.png', 2),
(24, 'Campeonato Sudamericano Bolivia 2013', '', '', '24.png', 4),
(23, 'Campeonato Arnold Sudamerica 2014', '', '', '23.png', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoriasregla`
--

CREATE TABLE IF NOT EXISTS `Categoriasregla` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Categoriasregla`
--

INSERT INTO `Categoriasregla` (`Id`, `Nombre`, `Foto`, `Pos`) VALUES
(3, 'Físico Culturismo', '3.png', 0),
(4, 'WOMEN''S PHYSIQUE', '4.png', 0),
(5, 'BODY FITNESS', '5.png', 0),
(6, 'WELLNESS - 2015', '6.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Contacto`
--

CREATE TABLE IF NOT EXISTS `Contacto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Texto` longtext NOT NULL,
  `Mapa` longtext NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Tel1` varchar(255) NOT NULL,
  `Tel2` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Contacto`
--

INSERT INTO `Contacto` (`Id`, `Texto`, `Mapa`, `Ciudad`, `Tel1`, `Tel2`, `Email`) VALUES
(1, '', '', '', '', '', 'ifbbcolombia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--

CREATE TABLE IF NOT EXISTS `Empresa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Empresa`
--

INSERT INTO `Empresa` (`Id`, `Nombre`, `Texto`, `Foto`, `Archivo`, `Pos`) VALUES
(7, 'IFBB ', '<h3><strong>Queridos F&iacute;sico Culturistas y Entusiastas del Fitness.</strong></h3>\r\n\r\n<p>La IFBB es creada en 1998 por Ben Weider, fundador y Presidente Honorario Vitalicio. Es la Federaci&oacute;n mundial m&aacute;s importante del F&iacute;sico Culturismo y Fitness, presente en 189 pa&iacute;ses, con m&aacute;s de mil eventos organizados cada a&ntilde;o bajo el logo de la IFBB, en los continentes.</p>\r\n\r\n<p>La IFBB es miembro de la Asociaci&oacute;n General de Federaciones Deportivas Internacionales (GAISF) y la Asociaci&oacute;n Internacional de Juegos Mundiales (IWGA), es reconocida por m&aacute;s de 90 Comit&eacute;s Ol&iacute;mpicos Nacionales (CON), adem&aacute;s de ser miembro de la Agencia Mundial Antidopaje WADA, la cual ha reconocido a la IFBB como la &uacute;nica autoridad en el culturismo cuyo programa antidopaje est&eacute; en pleno cumplimiento con el c&oacute;digo de la WADA.</p>\r\n\r\n<p>IFBB juega as&iacute; una relaci&oacute;n activa con las organizaciones cient&iacute;ficas y deportivas internacionales, creando conciencia de los beneficios que un estilo de vida culturista puede desempe&ntilde;ar en la salud de la poblaci&oacute;n, y las aplicaciones espec&iacute;ficas como anti &ndash;envejecimiento, para lo cual su mejor ejemplo son la legi&oacute;n de deportistas destacados que participan en nuestras categor&iacute;as master (+50, +60, y + 65 a&ntilde;os)</p>\r\n\r\n<p>Eventos para j&oacute;venes atletas (incluyendo Fitness para ni&ntilde;os) son algunos de nuestros programas m&aacute;s activos.</p>\r\n', '7.jpg', '', 0),
(8, 'CSFF', '<p><strong>CONFEDERACI&Oacute;N SUDAMERICANA DE F&Iacute;SICO CULTURISMO Y FITNESS</strong></p>\r\n\r\n<p><strong>ASAMBLEA GENERAL DE ELECCIONES</strong></p>\r\n\r\n<p><strong>RIO DE JANEIRO - BRASIL MARZO DE 2016</strong></p>\r\n\r\n<hr />\r\n<p><strong>COMISION DIRECTIVA PARA EL PERIODO 2016 - 2020</strong></p>\r\n\r\n<p><strong>PRESIDENTE:&nbsp;</strong>JUAN FERNANDO PAREDES -&nbsp;ECUADOR</p>\r\n\r\n<p><strong>VICEPRESIDENTE:&nbsp;</strong>FLORENCIO PORTOCARRERO -&nbsp;PERU</p>\r\n\r\n<p><strong>SECRETARIO:&nbsp;</strong>ALCIDES MEDINA -&nbsp;URUGUAY</p>\r\n\r\n<p><strong>TESORERA:&nbsp;</strong>MARIA TERESA GUERRERO -&nbsp;ECUADOR</p>\r\n\r\n<p><strong>ASISTENTE EJECUTIVO DEL PRESIDENTE:</strong>&nbsp;WILBERT PEREZ</p>\r\n\r\n<hr />\r\n<p><strong>COMISION DE JUECES:</strong></p>\r\n\r\n<p>ADOLFO MARTINEZ -&nbsp;DIRECTOR -&nbsp;VENEZUELA</p>\r\n\r\n<hr />\r\n<p><strong>COMISION DE COMPETENCIAS VARONES:</strong></p>\r\n\r\n<p>FERNANDO LOREIRO -&nbsp;DIRECTOR&nbsp;<strong>-&nbsp;</strong>ARGENTINA</p>\r\n\r\n<hr />\r\n<p><strong>COMISION DE COMPETENCIAS DAMAS:</strong></p>\r\n\r\n<p>CRISTINA MUSUMECI -&nbsp;DIRECTORA -&nbsp;ARGENTINA</p>\r\n\r\n<hr />\r\n<p><strong>COMISION DE DOPAJE:</strong></p>\r\n\r\n<p>BRUNO CORAUCCI -&nbsp;DIRECTOR -&nbsp;BRASIL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '8.png', '', 0),
(10, 'IFBB COLOMBIA', '<p>La Comisi&oacute;n IFBB Colombia es la designada por la IFBB Internacional para representar a la IFBB en Colombia, a la cual le est&aacute; autorizado el uso del logo de la IFBB, as&iacute; como su uniforme e insignias, organizar competencias en coordinaci&oacute;n de Ligas y Clubes que est&eacute;n vinculadas a la Comisi&oacute;n, donde podr&aacute;n participar todos los atletas de Colombia, siendo requisito para sus participaciones internacionales.</p>\r\n', '10.jpg', '10.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Espacios`
--

CREATE TABLE IF NOT EXISTS `Espacios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre1` varchar(255) NOT NULL,
  `Texto1` longtext NOT NULL,
  `Link1` varchar(255) NOT NULL,
  `Nombre2` varchar(255) NOT NULL,
  `Texto2` longtext NOT NULL,
  `Link2` varchar(255) NOT NULL,
  `Nombre3` varchar(255) NOT NULL,
  `Texto3` longtext NOT NULL,
  `Link3` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Espacios`
--

INSERT INTO `Espacios` (`Id`, `Nombre1`, `Texto1`, `Link1`, `Nombre2`, `Texto2`, `Link2`, `Nombre3`, `Texto3`, `Link3`, `Foto`) VALUES
(1, 'IFBB COLOMBIA', '', '', '', '', '', '', '', '', '1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EventosC`
--

CREATE TABLE IF NOT EXISTS `EventosC` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `EventosC`
--

INSERT INTO `EventosC` (`Id`, `Nombre`, `Fecha`, `Lugar`, `Archivo`, `Pos`) VALUES
(2, 'Open Internacional Clasico Paisa', 'Febrero 19 al 21 de 2016', 'Medellin, Colombia', '2.jpg', 2),
(10, 'Arnold Classic Amateur Ohio', 'Marzo 3 - 6 de 2016', 'Ohio, Columbus - USA', '', 3),
(9, 'Curso para jueces IFBB', ' Febrero 19 de 2016', 'Medellin, Antioquia', '9.jpg', 1),
(5, 'Seminario Nutricion y Suplementacion', 'Abril 23 y 24 de 2016', 'Monteria, Cordoba', '5.jpg', 5),
(6, 'Campeonato Departamental de Novatos Valle del Cauca', ' Mayo 22 de 2016', 'Cali, Valle del Cauca', '', 6),
(7, 'Campeonato Municipal Buesaco, Narino', 'Mayo 28 de 2016', 'Campeonato Municipal Buesaco, Narino', '7.jpg', 7),
(8, 'Campeonato Departamental Costa Caribe', 'Mayo 29  de 2016', 'Cartagena, Bolivar', '8.jpg', 8),
(11, 'Arnold CLassic Amateur Brasil', 'Abril 1 - 3 de  2016', 'Rio de Janeiro, Brasil', '', 4),
(12, 'Open Nacional de Novatos Candelaria', 'Mayo 29  de 2016', 'Candelaria, Valle', '12.jpg', 9),
(13, 'Campeonato Intergimnasios Energy Gym, Departamental', ' Junio 4 de 2016', 'Pasto, Narino', '', 10),
(14, 'Mr. Sinu 2016, Regional', ' Junio 5 de 2016', 'Monteria, Cordoba', '', 11),
(15, 'Open Nacional de Fisico Culturismo y Fitness Villagorgona', ' Junio 12 de 2016', 'Villagorgoba, Valle del Cauca', '', 12),
(16, '2do Campeonato Big Strong, Departamental', ' Junio 25 de 2016', 'Pasto, Narino', '', 13),
(17, 'Open Nacional de Novatos Buga', 'Junio 26 de 2016', 'Buga, Valle del Cauca', '17.jpg', 14),
(18, 'Campeonato Departamental de novatos Valle del Cauca', 'Julio 3 de 2016', 'Palmira, Valle del Cauca', '', 15),
(19, 'Open Regional del eje Cafetero', 'Julio 9 de 2016', 'Villamaria, Caldas', '', 16),
(20, 'Campeonato Departamental de Novatos, Antioquia', 'Julio 9 y 10 de 2016', 'Medellin, Antioquia', '', 17),
(21, 'Campeonato Nacional de Novatos IFBB', 'Julio 16 y 17 de 2016', 'Cali, Valle del Cauca', '', 18),
(22, 'Open Nacional de Novatos Fabricio Arana', 'Julio 24 de 2016', 'Por confirmar', '', 19),
(23, 'Open Nacional Sogamoso', 'Julio 30 y 31 de 2016', 'Sogamoso, Boyaca', '', 20),
(24, '2do Open Body Studio', 'Julio 31 de 2016', 'Florencia, Caqueta', '', 21),
(25, 'Campeonato Departamental de Caldas', 'Agosto 6 de 2016', 'Manizales, Caldas', '25.jpg', 22),
(26, 'Campeonato Departamental de Narino', 'Agosto 13 de 2016', 'Pasto, Narino', '', 23),
(27, 'Campeonato Departamental del Valle del Cauca', 'Agosto 14 de 2016', 'Cali, Valle del Cauca', '', 24),
(28, 'Curso y actualizacion para jueces IFBB', 'Agosto 20 y 21', 'Cali, Valle del Cauca', '', 25),
(29, 'Campeonato Nacional IFBB', 'Agosto 20 y 21 de 2016', 'Cali, Valle del Cauca', '', 26),
(30, 'Sr. Rionegro', 'Agosto 21 de 2016', 'Rionegro, Antioquia', '', 27),
(31, 'Campeonato Sudamericano de Fisico Culturismo y Fitness', 'Septiembre 8 al 12 de 2016', 'Cuenca, Ecuador', '', 28),
(32, 'Open Nacional Novato de Oro', 'Septiembre 17 de 2016', 'Pasto, Narino', '', 29),
(33, 'Copa Armando Villa, Open Nacional', 'Septiembre 18 de 2016', 'Bogota D.C', '', 30),
(34, 'Campeonato Regional de Oriente', 'Octubre 8 de 2016', 'La Dorada, Caldas', '', 31),
(35, 'Copa Ciudad de Cali', 'Octubre 16 de 2016', 'Cali, Valle del Cauca', '', 32),
(36, 'Mr. Atlas', 'Octubre 16 y 17 de 2016', 'Cartagena, Bolivar', '', 33),
(37, 'Gran Prix Internacional Ciudad Sorpresa', 'Octubre 22 de 2016', 'Pasto, Narino', '', 34),
(38, 'Campenato Mundial IFBB Senior', 'Noviembre 3 - 7 de 2016', 'Benidorm, Espana', '', 35),
(39, 'Campeonato Mundial IFBB Fitness', 'Noviembre 11 - 13 de 2016', 'Polonia', '', 36),
(40, 'Noche de Campeones, Open Nacional', 'Noviembre 13 de 2016', 'Cali, Valle del Cauca', '', 37),
(41, 'Copa Fisicaldas', 'Noviembre 26 de 2016', 'Manizales, Caldas', '', 39),
(42, '6to Campeonato Sur Oriental, Regional', 'Noviembre 19 de 2016', 'San Juan de Pasto, Narino', '', 38),
(43, 'Campeonato Yustimania, Departamental', 'Noviembre 27 de 2016', 'Cali, Valle del Cauca', '', 40),
(44, 'Campeonato Mundial IFBB Junior y Master', 'Diciembre 1 - 4 de 2016', 'República Dominicana', '', 41),
(45, '2do Campeonato Power Sport, Departamental', 'Diciembre 3 de 2016', 'Pasto, Narino', '', 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EventosI`
--

CREATE TABLE IF NOT EXISTS `EventosI` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `EventosI`
--

INSERT INTO `EventosI` (`Id`, `Nombre`, `Fecha`, `Lugar`, `Archivo`, `Pos`) VALUES
(2, 'IFBB - ARNOLD CLASSIC AMATEUR OHIO 2016', '3 al 6 de Marzo de 2016', 'Culombus, Ohio - USA', '2.pdf', 0),
(3, 'ARNOLD CLASSIC AMATEUR BRASIL 2016', 'Abril 1 - 3 de 2016', 'Rio de Janeiro, Brasil', '3.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EventosR`
--

CREATE TABLE IF NOT EXISTS `EventosR` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `EventosR`
--

INSERT INTO `EventosR` (`Id`, `Nombre`, `Fecha`, `Lugar`, `Archivo`, `Pos`) VALUES
(2, 'Power Factory Clasic II - Ecuador', '25 Abril 2015', 'Guayauil, Ecuador', '2.pdf', 0),
(3, 'XXXIX Campeonato Sudamericano de Físicoculturismo y Fitness', '29 Agosto - 01 Septiembre de 2013', 'Santa Cruz - Bolivia ', '3.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Federaciones`
--

CREATE TABLE IF NOT EXISTS `Federaciones` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Federaciones`
--

INSERT INTO `Federaciones` (`Id`, `Nombre`, `Texto`, `Foto`, `Archivo`, `Pos`) VALUES
(4, 'Paraguay', '', '4.jpg', '4.pdf', 1),
(2, 'Aruba', '<p><strong>Federaci&oacute;n Nacional (Aruba)</strong></p>\r\n\r\n<p>The lift starts with the lifter standing erect and the bar loaded with weights resting on the lifter&#39;s shoulders. At the referee&#39;s command the lift begins. The lifter bends his knees and lowers him into a squatting position with the hips slightly below parallel position. The lifter returns to an erect position. At the referees command the bar is returned to the rack and the lift is completed.</p>\r\n\r\n<ul>\r\n	<li>The lift starts with the lifter standing erect and the bar loaded</li>\r\n	<li>The lift starts with the lifter standing erect and the bar loaded</li>\r\n	<li>The lift starts with the lifter standing erect and the bar loaded</li>\r\n	<li>The lift starts with the lifter standing erect and the bar loaded</li>\r\n</ul>\r\n\r\n<p>The lift starts with the lifter standing erect and the bar loaded with weights resting on the lifter&#39;s shoulders. At the referee&#39;s command the lift begins. The lifter bends his knees and lowers him into a squatting position with the hips slightly below parallel position. The lifter returns to an erect position. At the referees command the bar is returned to the rack and the lift is completed.</p>\r\n\r\n<p>The lift starts with the lifter standing erect and the bar loaded with weights resting on the lifter&#39;s shoulders. At the referee&#39;s command the lift begins. The lifter bends his knees and lowers him into a squatting position with the hips slightly below parallel position. The lifter returns to an erect position. At the referees command the bar is returned to the rack and the lift is completed.</p>\r\n\r\n<p>The lift starts with the lifter standing erect and the bar loaded with weights resting on the lifter&#39;s shoulders. At the referee&#39;s command the lift begins. The lifter bends his knees and lowers him into a squatting position with the hips slightly below parallel position. The lifter returns to an erect position. At the referees command the bar is returned to the rack and the lift is completed.</p>\r\n', '2.jpg', '2.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Footer`
--

CREATE TABLE IF NOT EXISTS `Footer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Texto` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Footer`
--

INSERT INTO `Footer` (`Id`, `Texto`) VALUES
(1, 'Copyright © 2016 IFBB Colombias - All rights reserved.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Imagenes`
--

CREATE TABLE IF NOT EXISTS `Imagenes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Idcat` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1074 ;

--
-- Volcado de datos para la tabla `Imagenes`
--

INSERT INTO `Imagenes` (`Id`, `Idcat`, `Nombre`, `Titulo`, `Texto`, `Foto`, `Pos`) VALUES
(16, 1, '', '', '', '16.jpg', 0),
(2, 1, 'pic', '', '', '2.jpg', 0),
(13, 1, '', '', '', '13.jpg', 0),
(12, 1, '', '', '', '12.jpg', 0),
(14, 1, '', '', '', '14.jpg', 0),
(15, 1, '', '', '', '15.jpg', 0),
(9, 4, 'Bikini Fitness', '', '', '9.jpg', 0),
(8, 4, '', '', '', '8.jpg', 0),
(10, 4, '', '', '', '10.jpg', 0),
(11, 4, '', '', '', '11.jpg', 0),
(17, 1, '', '', '', '17.jpg', 0),
(18, 1, '', '', '', '18.jpg', 0),
(19, 1, 'TODO ESTA BIEN', '', '', '19.jpg', 0),
(20, 1, '', '', '', '20.jpg', 0),
(21, 1, '', '', '', '21.jpg', 0),
(22, 1, '', '', '', '22.jpg', 0),
(23, 1, '', '', '', '23.jpg', 0),
(24, 1, '', '', '', '24.jpg', 0),
(25, 1, '', '', '', '25.jpg', 0),
(26, 1, '', '', '', '26.jpg', 0),
(27, 1, '', '', '', '27.jpg', 0),
(28, 1, '', '', '', '28.jpg', 0),
(29, 1, '', '', '', '29.jpg', 0),
(30, 1, '', '', '', '30.jpg', 0),
(31, 1, '', '', '', '31.jpg', 0),
(32, 1, '', '', '', '32.jpg', 0),
(33, 1, '', '', '', '33.jpg', 0),
(34, 1, '', '', '', '34.jpg', 0),
(35, 1, '', '', '', '35.jpg', 0),
(36, 1, '', '', '', '36.jpg', 0),
(37, 1, '', '', '', '37.jpg', 0),
(38, 1, '', '', '', '38.jpg', 0),
(39, 1, '', '', '', '39.jpg', 0),
(40, 1, '', '', '', '40.jpg', 0),
(41, 1, '', '', '', '41.jpg', 0),
(42, 1, '', '', '', '42.jpg', 0),
(43, 1, '', '', '', '43.jpg', 0),
(44, 1, '', '', '', '44.jpg', 0),
(45, 1, '', '', '', '45.jpg', 0),
(46, 1, '', '', '', '46.jpg', 0),
(47, 1, '', '', '', '47.jpg', 0),
(48, 1, '', '', '', '48.jpg', 0),
(49, 1, '', '', '', '49.jpg', 0),
(50, 1, '', '', '', '50.jpg', 0),
(51, 1, '', '', '', '51.jpg', 0),
(52, 1, '', '', '', '52.jpg', 0),
(53, 1, '', '', '', '53.jpg', 0),
(54, 1, '', '', '', '54.jpg', 0),
(55, 1, '', '', '', '55.jpg', 0),
(56, 1, '', '', '', '56.jpg', 0),
(57, 1, '', '', '', '57.jpg', 0),
(58, 1, '', '', '', '58.jpg', 0),
(59, 1, '', '', '', '59.jpg', 0),
(60, 1, '', '', '', '60.jpg', 0),
(61, 1, '', '', '', '61.jpg', 0),
(62, 1, '', '', '', '62.jpg', 0),
(63, 1, '', '', '', '63.jpg', 0),
(64, 1, '', '', '', '64.jpg', 0),
(65, 1, '', '', '', '65.jpg', 0),
(66, 1, '', '', '', '66.jpg', 0),
(67, 1, '', '', '', '67.jpg', 0),
(68, 1, '', '', '', '68.jpg', 0),
(69, 1, '', '', '', '69.jpg', 0),
(70, 1, '', '', '', '70.jpg', 0),
(71, 1, '', '', '', '71.jpg', 0),
(72, 1, '', '', '', '72.jpg', 0),
(73, 1, '', '', '', '73.jpg', 0),
(74, 1, '', '', '', '74.jpg', 0),
(75, 1, '', '', '', '75.jpg', 0),
(76, 1, '', '', '', '76.jpg', 0),
(77, 1, '', '', '', '77.jpg', 0),
(78, 1, '', '', '', '78.jpg', 0),
(79, 1, '', '', '', '79.jpg', 0),
(80, 1, '', '', '', '80.jpg', 0),
(81, 1, '', '', '', '81.jpg', 0),
(82, 1, '', '', '', '82.jpg', 0),
(83, 1, '', '', '', '83.jpg', 0),
(84, 1, '', '', '', '84.jpg', 0),
(85, 1, '', '', '', '85.jpg', 0),
(86, 1, '', '', '', '86.jpg', 0),
(87, 1, '', '', '', '87.jpg', 0),
(88, 1, '', '', '', '88.jpg', 0),
(89, 1, '', '', '', '89.jpg', 0),
(90, 1, '', '', '', '90.jpg', 0),
(91, 1, '', '', '', '91.jpg', 0),
(92, 1, '', '', '', '92.jpg', 0),
(93, 1, '', '', '', '93.jpg', 0),
(94, 1, '', '', '', '94.jpg', 0),
(95, 1, '', '', '', '95.jpg', 0),
(96, 1, '', '', '', '96.jpg', 0),
(97, 1, '', '', '', '97.jpg', 0),
(98, 1, '', '', '', '98.jpg', 0),
(99, 1, '', '', '', '99.jpg', 0),
(100, 1, '', '', '', '100.jpg', 0),
(101, 1, '', '', '', '101.jpg', 0),
(102, 1, '', '', '', '102.jpg', 0),
(103, 1, '', '', '', '103.jpg', 0),
(104, 1, '', '', '', '104.jpg', 0),
(105, 1, '', '', '', '105.jpg', 0),
(106, 1, '', '', '', '106.jpg', 0),
(107, 1, '', '', '', '107.jpg', 0),
(108, 1, '', '', '', '108.jpg', 0),
(109, 5, '', '', '', '109.jpg', 0),
(110, 5, '', '', '', '110.jpg', 0),
(111, 5, '', '', '', '111.jpg', 0),
(112, 5, '', '', '', '112.jpg', 0),
(113, 5, '', '', '', '113.jpg', 0),
(114, 5, '', '', '', '114.jpg', 0),
(115, 5, '', '', '', '115.jpg', 0),
(116, 5, '', '', '', '116.jpg', 0),
(117, 5, '', '', '', '117.jpg', 0),
(118, 5, '', '', '', '118.jpg', 0),
(119, 5, '', '', '', '119.jpg', 0),
(120, 5, '', '', '', '120.jpg', 0),
(121, 5, '', '', '', '121.jpg', 0),
(122, 5, '', '', '', '122.jpg', 0),
(123, 5, '', '', '', '123.jpg', 0),
(124, 5, '', '', '', '124.jpg', 0),
(125, 5, '', '', '', '125.jpg', 0),
(126, 5, '', '', '', '126.jpg', 0),
(127, 5, '', '', '', '127.jpg', 0),
(128, 5, '', '', '', '128.jpg', 0),
(129, 5, '', '', '', '129.jpg', 0),
(130, 5, '', '', '', '130.jpg', 0),
(131, 5, '', '', '', '131.jpg', 0),
(132, 5, '', '', '', '132.jpg', 0),
(133, 5, '', '', '', '133.jpg', 0),
(134, 5, '', '', '', '134.jpg', 0),
(135, 5, '', '', '', '135.jpg', 0),
(136, 5, '', '', '', '136.jpg', 0),
(137, 5, '', '', '', '137.jpg', 0),
(138, 5, '', '', '', '138.jpg', 0),
(139, 5, '', '', '', '139.jpg', 0),
(140, 5, '', '', '', '140.jpg', 0),
(141, 5, '', '', '', '141.jpg', 0),
(142, 5, '', '', '', '142.jpg', 0),
(143, 5, '', '', '', '143.jpg', 0),
(144, 5, '', '', '', '144.jpg', 0),
(145, 5, '', '', '', '145.jpg', 0),
(146, 5, '', '', '', '146.jpg', 0),
(147, 5, '', '', '', '147.jpg', 0),
(148, 5, '', '', '', '148.jpg', 0),
(149, 5, '', '', '', '149.jpg', 0),
(150, 5, '', '', '', '150.jpg', 0),
(151, 5, '', '', '', '151.jpg', 0),
(152, 5, '', '', '', '152.jpg', 0),
(153, 5, '', '', '', '153.jpg', 0),
(154, 5, '', '', '', '154.jpg', 0),
(155, 5, '', '', '', '155.jpg', 0),
(156, 5, '', '', '', '156.jpg', 0),
(157, 5, '', '', '', '157.jpg', 0),
(158, 5, '', '', '', '158.jpg', 0),
(159, 5, '', '', '', '159.jpg', 0),
(160, 5, '', '', '', '160.jpg', 0),
(161, 5, '', '', '', '161.jpg', 0),
(162, 5, '', '', '', '162.jpg', 0),
(163, 5, '', '', '', '163.jpg', 0),
(164, 5, '', '', '', '164.jpg', 0),
(165, 5, '', '', '', '165.jpg', 0),
(166, 5, '', '', '', '166.jpg', 0),
(167, 5, '', '', '', '167.jpg', 0),
(168, 5, '', '', '', '168.jpg', 0),
(169, 5, '', '', '', '169.jpg', 0),
(170, 5, '', '', '', '170.jpg', 0),
(171, 5, '', '', '', '171.jpg', 0),
(172, 5, '', '', '', '172.jpg', 0),
(173, 5, '', '', '', '173.jpg', 0),
(174, 5, '', '', '', '174.jpg', 0),
(175, 5, '', '', '', '175.jpg', 0),
(176, 5, '', '', '', '176.jpg', 0),
(177, 5, '', '', '', '177.jpg', 0),
(178, 5, '', '', '', '178.jpg', 0),
(179, 5, '', '', '', '179.jpg', 0),
(180, 5, '', '', '', '180.jpg', 0),
(181, 5, '', '', '', '181.jpg', 0),
(182, 5, '', '', '', '182.jpg', 0),
(183, 5, '', '', '', '183.jpg', 0),
(184, 5, '', '', '', '184.jpg', 0),
(185, 5, '', '', '', '185.jpg', 0),
(186, 5, '', '', '', '186.jpg', 0),
(187, 5, '', '', '', '187.jpg', 0),
(188, 5, '', '', '', '188.jpg', 0),
(189, 5, '', '', '', '189.jpg', 0),
(190, 5, '', '', '', '190.jpg', 0),
(191, 5, '', '', '', '191.jpg', 0),
(192, 5, '', '', '', '192.jpg', 0),
(193, 5, '', '', '', '193.jpg', 0),
(194, 5, '', '', '', '194.jpg', 0),
(195, 5, '', '', '', '195.jpg', 0),
(196, 5, '', '', '', '196.jpg', 0),
(197, 5, '', '', '', '197.jpg', 0),
(198, 5, '', '', '', '198.jpg', 0),
(199, 5, '', '', '', '199.jpg', 0),
(200, 5, '', '', '', '200.jpg', 0),
(201, 5, '', '', '', '201.jpg', 0),
(202, 5, '', '', '', '202.jpg', 0),
(203, 6, '', '', '', '203.jpg', 0),
(204, 6, '', '', '', '204.jpg', 0),
(205, 6, '', '', '', '205.jpg', 0),
(206, 6, '', '', '', '206.jpg', 0),
(207, 6, '', '', '', '207.jpg', 0),
(208, 6, '', '', '', '208.jpg', 0),
(209, 6, '', '', '', '209.jpg', 0),
(210, 6, '', '', '', '210.jpg', 0),
(211, 6, '', '', '', '211.jpg', 0),
(212, 6, '', '', '', '212.jpg', 0),
(213, 6, '', '', '', '213.jpg', 0),
(214, 6, '', '', '', '214.jpg', 0),
(215, 6, '', '', '', '215.jpg', 0),
(216, 6, '', '', '', '216.jpg', 0),
(217, 6, '', '', '', '217.jpg', 0),
(218, 6, '', '', '', '218.jpg', 0),
(219, 6, '', '', '', '219.jpg', 0),
(220, 6, '', '', '', '220.jpg', 0),
(221, 6, '', '', '', '221.jpg', 0),
(222, 6, '', '', '', '222.jpg', 0),
(223, 6, '', '', '', '223.jpg', 0),
(224, 6, '', '', '', '224.jpg', 0),
(225, 6, '', '', '', '225.jpg', 0),
(226, 6, '', '', '', '226.jpg', 0),
(227, 6, '', '', '', '227.jpg', 0),
(228, 6, '', '', '', '228.jpg', 0),
(229, 6, '', '', '', '229.jpg', 0),
(230, 6, '', '', '', '230.jpg', 0),
(231, 6, '', '', '', '231.jpg', 0),
(232, 6, '', '', '', '232.jpg', 0),
(233, 6, '', '', '', '233.jpg', 0),
(234, 6, '', '', '', '234.jpg', 0),
(235, 6, '', '', '', '235.jpg', 0),
(236, 6, '', '', '', '236.jpg', 0),
(237, 6, '', '', '', '237.jpg', 0),
(238, 6, '', '', '', '238.jpg', 0),
(239, 6, '', '', '', '239.jpg', 0),
(240, 6, '', '', '', '240.jpg', 0),
(241, 6, '', '', '', '241.jpg', 0),
(242, 6, '', '', '', '242.jpg', 0),
(243, 6, '', '', '', '243.jpg', 0),
(244, 6, '', '', '', '244.jpg', 0),
(245, 6, '', '', '', '245.jpg', 0),
(246, 6, '', '', '', '246.jpg', 0),
(247, 6, '', '', '', '247.jpg', 0),
(248, 6, '', '', '', '248.jpg', 0),
(249, 6, '', '', '', '249.jpg', 0),
(250, 6, '', '', '', '250.jpg', 0),
(251, 6, '', '', '', '251.jpg', 0),
(252, 6, '', '', '', '252.jpg', 0),
(253, 6, '', '', '', '253.jpg', 0),
(254, 6, '', '', '', '254.jpg', 0),
(255, 6, '', '', '', '255.jpg', 0),
(256, 6, '', '', '', '256.jpg', 0),
(257, 6, '', '', '', '257.jpg', 0),
(258, 6, '', '', '', '258.jpg', 0),
(259, 6, '', '', '', '259.jpg', 0),
(260, 6, '', '', '', '260.jpg', 0),
(261, 6, '', '', '', '261.jpg', 0),
(262, 6, '', '', '', '262.jpg', 0),
(263, 7, '', '', '', '263.jpg', 0),
(264, 7, '', '', '', '264.jpg', 0),
(265, 7, '', '', '', '265.jpg', 0),
(266, 7, '', '', '', '266.jpg', 0),
(267, 7, '', '', '', '267.jpg', 0),
(268, 7, '', '', '', '268.jpg', 0),
(269, 7, '', '', '', '269.jpg', 0),
(270, 7, '', '', '', '270.jpg', 0),
(271, 7, '', '', '', '271.jpg', 0),
(272, 7, '', '', '', '272.jpg', 0),
(273, 7, '', '', '', '273.jpg', 0),
(274, 7, '', '', '', '274.jpg', 0),
(275, 7, '', '', '', '275.jpg', 0),
(276, 7, '', '', '', '276.jpg', 0),
(277, 7, '', '', '', '277.jpg', 0),
(278, 7, '', '', '', '278.jpg', 0),
(279, 7, '', '', '', '279.jpg', 0),
(280, 7, '', '', '', '280.jpg', 0),
(281, 7, '', '', '', '281.jpg', 0),
(282, 7, '', '', '', '282.jpg', 0),
(283, 7, '', '', '', '283.jpg', 0),
(284, 7, '', '', '', '284.jpg', 0),
(285, 7, '', '', '', '285.jpg', 0),
(286, 7, '', '', '', '286.jpg', 0),
(287, 7, '', '', '', '287.jpg', 0),
(288, 7, '', '', '', '288.jpg', 0),
(289, 7, '', '', '', '289.jpg', 0),
(290, 7, '', '', '', '290.jpg', 0),
(291, 7, '', '', '', '291.jpg', 0),
(292, 7, '', '', '', '292.jpg', 0),
(293, 7, '', '', '', '293.jpg', 0),
(294, 7, '', '', '', '294.jpg', 0),
(295, 7, '', '', '', '295.jpg', 0),
(296, 7, '', '', '', '296.jpg', 0),
(297, 7, '', '', '', '297.jpg', 0),
(298, 7, '', '', '', '298.jpg', 0),
(299, 7, '', '', '', '299.jpg', 0),
(300, 7, '', '', '', '300.jpg', 0),
(301, 7, '', '', '', '301.jpg', 0),
(302, 7, '', '', '', '302.jpg', 0),
(303, 7, '', '', '', '303.jpg', 0),
(304, 7, '', '', '', '304.jpg', 0),
(305, 8, '', '', '', '305.jpg', 0),
(306, 8, '', '', '', '306.jpg', 0),
(307, 8, '', '', '', '307.jpg', 0),
(308, 8, '', '', '', '308.jpg', 0),
(309, 8, '', '', '', '309.jpg', 0),
(310, 8, '', '', '', '310.jpg', 0),
(311, 8, '', '', '', '311.jpg', 0),
(312, 8, '', '', '', '312.jpg', 0),
(313, 8, '', '', '', '313.jpg', 0),
(314, 8, '', '', '', '314.jpg', 0),
(315, 8, '', '', '', '315.jpg', 0),
(316, 8, '', '', '', '316.jpg', 0),
(317, 8, '', '', '', '317.jpg', 0),
(318, 8, '', '', '', '318.jpg', 0),
(319, 8, '', '', '', '319.jpg', 0),
(320, 8, '', '', '', '320.jpg', 0),
(321, 8, '', '', '', '321.jpg', 0),
(322, 8, '', '', '', '322.jpg', 0),
(323, 8, '', '', '', '323.jpg', 0),
(324, 8, '', '', '', '324.jpg', 0),
(325, 8, '', '', '', '325.jpg', 0),
(326, 8, '', '', '', '326.jpg', 0),
(327, 8, '', '', '', '327.jpg', 0),
(328, 8, '', '', '', '328.jpg', 0),
(329, 8, '', '', '', '329.jpg', 0),
(330, 8, '', '', '', '330.jpg', 0),
(331, 8, '', '', '', '331.jpg', 0),
(332, 8, '', '', '', '332.jpg', 0),
(333, 8, '', '', '', '333.jpg', 0),
(334, 8, '', '', '', '334.jpg', 0),
(335, 8, '', '', '', '335.jpg', 0),
(336, 8, '', '', '', '336.jpg', 0),
(337, 8, '', '', '', '337.jpg', 0),
(338, 8, '', '', '', '338.jpg', 0),
(339, 8, '', '', '', '339.jpg', 0),
(340, 8, '', '', '', '340.jpg', 0),
(341, 8, '', '', '', '341.jpg', 0),
(342, 8, '', '', '', '342.jpg', 0),
(343, 8, '', '', '', '343.jpg', 0),
(344, 8, '', '', '', '344.jpg', 0),
(348, 8, '', '', '', '348.jpg', 0),
(346, 8, '', '', '', '346.jpg', 0),
(347, 8, '', '', '', '347.jpg', 0),
(349, 8, '', '', '', '349.jpg', 0),
(350, 8, '', '', '', '350.jpg', 0),
(351, 8, '', '', '', '351.jpg', 0),
(352, 8, '', '', '', '352.jpg', 0),
(353, 8, '', '', '', '353.jpg', 0),
(354, 8, '', '', '', '354.jpg', 0),
(355, 8, '', '', '', '355.jpg', 0),
(356, 8, '', '', '', '356.jpg', 0),
(357, 8, '', '', '', '357.jpg', 0),
(358, 8, '', '', '', '358.jpg', 0),
(359, 8, '', '', '', '359.jpg', 0),
(360, 8, '', '', '', '360.jpg', 0),
(361, 8, '', '', '', '361.jpg', 0),
(362, 8, '', '', '', '362.jpg', 0),
(363, 8, '', '', '', '363.jpg', 0),
(364, 8, '', '', '', '364.jpg', 0),
(365, 8, '', '', '', '365.jpg', 0),
(366, 8, '', '', '', '366.jpg', 0),
(367, 8, '', '', '', '367.jpg', 0),
(368, 8, '', '', '', '368.jpg', 0),
(369, 8, '', '', '', '369.jpg', 0),
(370, 8, '', '', '', '370.jpg', 0),
(371, 8, '', '', '', '371.jpg', 0),
(372, 8, '', '', '', '372.jpg', 0),
(373, 8, '', '', '', '373.jpg', 0),
(374, 8, '', '', '', '374.jpg', 0),
(375, 8, '', '', '', '375.jpg', 0),
(376, 8, '', '', '', '376.jpg', 0),
(377, 8, '', '', '', '377.jpg', 0),
(378, 8, '', '', '', '378.jpg', 0),
(379, 3, '', '', '', '379.jpg', 0),
(380, 3, '', '', '', '380.jpg', 0),
(381, 3, '', '', '', '381.jpg', 0),
(382, 3, '', '', '', '382.jpg', 0),
(383, 3, '', '', '', '383.jpg', 0),
(384, 3, '', '', '', '384.jpg', 0),
(385, 3, '', '', '', '385.jpg', 0),
(386, 3, '', '', '', '386.jpg', 0),
(387, 3, '', '', '', '387.jpg', 0),
(388, 3, '', '', '', '388.jpg', 0),
(389, 3, '', '', '', '389.jpg', 0),
(390, 3, '', '', '', '390.jpg', 0),
(391, 3, '', '', '', '391.jpg', 0),
(392, 3, '', '', '', '392.jpg', 0),
(393, 3, '', '', '', '393.jpg', 0),
(394, 3, '', '', '', '394.jpg', 0),
(395, 3, '', '', '', '395.jpg', 0),
(396, 3, '', '', '', '396.jpg', 0),
(397, 3, '', '', '', '397.jpg', 0),
(398, 3, '', '', '', '398.jpg', 0),
(399, 3, '', '', '', '399.jpg', 0),
(400, 3, '', '', '', '400.jpg', 0),
(401, 3, '', '', '', '401.jpg', 0),
(402, 3, '', '', '', '402.jpg', 0),
(403, 3, '', '', '', '403.jpg', 0),
(404, 3, '', '', '', '404.jpg', 0),
(405, 3, '', '', '', '405.jpg', 0),
(406, 3, '', '', '', '406.jpg', 0),
(407, 3, '', '', '', '407.jpg', 0),
(408, 3, '', '', '', '408.jpg', 0),
(409, 3, '', '', '', '409.jpg', 0),
(410, 3, '', '', '', '410.jpg', 0),
(411, 3, '', '', '', '411.jpg', 0),
(412, 3, '', '', '', '412.jpg', 0),
(413, 3, '', '', '', '413.jpg', 0),
(414, 3, '', '', '', '414.jpg', 0),
(415, 3, '', '', '', '415.jpg', 0),
(416, 3, '', '', '', '416.jpg', 0),
(417, 3, '', '', '', '417.jpg', 0),
(418, 3, '', '', '', '418.jpg', 0),
(419, 3, '', '', '', '419.jpg', 0),
(420, 3, '', '', '', '420.jpg', 0),
(421, 3, '', '', '', '421.jpg', 0),
(422, 3, '', '', '', '422.jpg', 0),
(423, 3, '', '', '', '423.jpg', 0),
(424, 3, '', '', '', '424.jpg', 0),
(425, 3, '', '', '', '425.jpg', 0),
(426, 3, '', '', '', '426.jpg', 0),
(427, 3, '', '', '', '427.jpg', 0),
(428, 3, '', '', '', '428.jpg', 0),
(429, 3, '', '', '', '429.jpg', 0),
(430, 3, '', '', '', '430.jpg', 0),
(431, 3, '', '', '', '431.jpg', 0),
(432, 3, '', '', '', '432.jpg', 0),
(433, 3, '', '', '', '433.jpg', 0),
(434, 3, '', '', '', '434.jpg', 0),
(435, 3, '', '', '', '435.jpg', 0),
(436, 3, '', '', '', '436.jpg', 0),
(437, 3, '', '', '', '437.jpg', 0),
(438, 3, '', '', '', '438.jpg', 0),
(439, 3, '', '', '', '439.jpg', 0),
(440, 3, '', '', '', '440.jpg', 0),
(441, 3, '', '', '', '441.jpg', 0),
(442, 3, '', '', '', '442.jpg', 0),
(443, 3, '', '', '', '443.jpg', 0),
(444, 3, '', '', '', '444.jpg', 0),
(445, 3, '', '', '', '445.jpg', 0),
(446, 3, '', '', '', '446.jpg', 0),
(447, 3, '', '', '', '447.jpg', 0),
(448, 3, '', '', '', '448.jpg', 0),
(449, 3, '', '', '', '449.jpg', 0),
(450, 3, '', '', '', '450.jpg', 0),
(451, 3, '', '', '', '451.jpg', 0),
(452, 3, '', '', '', '452.jpg', 0),
(453, 3, '', '', '', '453.jpg', 0),
(454, 3, '', '', '', '454.jpg', 0),
(455, 3, '', '', '', '455.jpg', 0),
(456, 3, '', '', '', '456.jpg', 0),
(457, 3, '', '', '', '457.jpg', 0),
(458, 3, '', '', '', '458.jpg', 0),
(459, 3, '', '', '', '459.jpg', 0),
(460, 3, '', '', '', '460.jpg', 0),
(461, 3, '', '', '', '461.jpg', 0),
(462, 3, '', '', '', '462.jpg', 0),
(463, 3, '', '', '', '463.jpg', 0),
(464, 3, '', '', '', '464.jpg', 0),
(465, 3, '', '', '', '465.jpg', 0),
(466, 3, '', '', '', '466.jpg', 0),
(467, 3, '', '', '', '467.jpg', 0),
(468, 3, '', '', '', '468.jpg', 0),
(469, 3, '', '', '', '469.jpg', 0),
(470, 3, '', '', '', '470.jpg', 0),
(471, 3, '', '', '', '471.jpg', 0),
(472, 3, '', '', '', '472.jpg', 0),
(473, 3, '', '', '', '473.jpg', 0),
(474, 3, '', '', '', '474.jpg', 0),
(475, 3, '', '', '', '475.jpg', 0),
(476, 3, '', '', '', '476.jpg', 0),
(477, 3, '', '', '', '477.jpg', 0),
(478, 3, '', '', '', '478.jpg', 0),
(479, 3, '', '', '', '479.jpg', 0),
(480, 3, '', '', '', '480.jpg', 0),
(481, 3, '', '', '', '481.jpg', 0),
(482, 3, '', '', '', '482.jpg', 0),
(483, 3, '', '', '', '483.jpg', 0),
(484, 3, '', '', '', '484.jpg', 0),
(485, 3, '', '', '', '485.jpg', 0),
(486, 3, '', '', '', '486.jpg', 0),
(487, 3, '', '', '', '487.jpg', 0),
(488, 3, '', '', '', '488.jpg', 0),
(489, 3, '', '', '', '489.jpg', 0),
(490, 3, '', '', '', '490.jpg', 0),
(492, 3, '', '', '', '492.jpg', 0),
(493, 3, '', '', '', '493.jpg', 0),
(494, 3, '', '', '', '494.jpg', 0),
(495, 3, '', '', '', '495.jpg', 0),
(496, 3, '', '', '', '496.jpg', 0),
(497, 3, '', '', '', '497.jpg', 0),
(498, 3, '', '', '', '498.jpg', 0),
(499, 3, '', '', '', '499.jpg', 0),
(500, 3, '', '', '', '500.jpg', 0),
(501, 3, '', '', '', '501.jpg', 0),
(502, 4, '', '', '', '502.jpg', 0),
(503, 3, '', '', '', '503.jpg', 0),
(504, 3, '', '', '', '504.jpg', 0),
(505, 3, '', '', '', '505.jpg', 0),
(506, 9, '', '', '', '506.jpg', 0),
(507, 9, '', '', '', '507.jpg', 0),
(508, 9, '', '', '', '508.jpg', 0),
(509, 9, '', '', '', '509.jpg', 0),
(510, 9, '', '', '', '510.jpg', 0),
(511, 9, '', '', '', '511.jpg', 0),
(512, 9, '', '', '', '512.jpg', 0),
(513, 9, '', '', '', '513.jpg', 0),
(514, 9, '', '', '', '514.jpg', 0),
(515, 9, '', '', '', '515.jpg', 0),
(516, 9, '', '', '', '516.jpg', 0),
(517, 9, '', '', '', '517.jpg', 0),
(518, 9, '', '', '', '518.jpg', 0),
(519, 9, '', '', '', '519.jpg', 0),
(520, 9, '', '', '', '520.jpg', 0),
(521, 9, '', '', '', '521.jpg', 0),
(522, 9, '', '', '', '522.jpg', 0),
(523, 9, '', '', '', '523.jpg', 0),
(524, 9, '', '', '', '524.jpg', 0),
(525, 9, '', '', '', '525.jpg', 0),
(526, 9, '', '', '', '526.jpg', 0),
(527, 9, '', '', '', '527.jpg', 0),
(528, 9, '', '', '', '528.jpg', 0),
(529, 9, '', '', '', '529.jpg', 0),
(530, 9, '', '', '', '530.jpg', 0),
(531, 9, '', '', '', '531.jpg', 0),
(532, 9, '', '', '', '532.jpg', 0),
(533, 9, '', '', '', '533.jpg', 0),
(534, 9, '', '', '', '534.jpg', 0),
(535, 9, '', '', '', '535.jpg', 0),
(536, 9, '', '', '', '536.jpg', 0),
(537, 9, '', '', '', '537.jpg', 0),
(538, 9, '', '', '', '538.jpg', 0),
(539, 9, '', '', '', '539.jpg', 0),
(540, 9, '', '', '', '540.jpg', 0),
(541, 9, '', '', '', '541.jpg', 0),
(542, 9, '', '', '', '542.jpg', 0),
(543, 9, '', '', '', '543.jpg', 0),
(544, 9, '', '', '', '544.jpg', 0),
(545, 9, '', '', '', '545.jpg', 0),
(546, 9, '', '', '', '546.jpg', 0),
(547, 9, '', '', '', '547.jpg', 0),
(548, 9, '', '', '', '548.jpg', 0),
(549, 9, '', '', '', '549.jpg', 0),
(550, 9, '', '', '', '550.jpg', 0),
(551, 9, '', '', '', '551.jpg', 0),
(552, 9, '', '', '', '552.jpg', 0),
(553, 9, '', '', '', '553.jpg', 0),
(554, 9, '', '', '', '554.jpg', 0),
(555, 9, '', '', '', '555.jpg', 0),
(556, 9, '', '', '', '556.jpg', 0),
(557, 9, '', '', '', '557.jpg', 0),
(558, 9, '', '', '', '558.jpg', 0),
(559, 9, '', '', '', '559.jpg', 0),
(560, 9, '', '', '', '560.jpg', 0),
(561, 9, '', '', '', '561.jpg', 0),
(562, 9, '', '', '', '562.jpg', 0),
(563, 9, '', '', '', '563.jpg', 0),
(564, 9, '', '', '', '564.jpg', 0),
(565, 9, '', '', '', '565.jpg', 0),
(566, 9, '', '', '', '566.jpg', 0),
(567, 9, '', '', '', '567.jpg', 0),
(568, 9, '', '', '', '568.jpg', 0),
(569, 9, '', '', '', '569.jpg', 0),
(570, 9, '', '', '', '570.jpg', 0),
(571, 9, '', '', '', '571.jpg', 0),
(572, 9, '', '', '', '572.jpg', 0),
(573, 9, '', '', '', '573.jpg', 0),
(574, 9, '', '', '', '574.jpg', 0),
(575, 9, '', '', '', '575.jpg', 0),
(576, 9, '', '', '', '576.jpg', 0),
(577, 9, '', '', '', '577.jpg', 0),
(578, 9, '', '', '', '578.jpg', 0),
(579, 9, '', '', '', '579.jpg', 0),
(580, 9, '', '', '', '580.jpg', 0),
(581, 9, '', '', '', '581.jpg', 0),
(582, 9, '', '', '', '582.jpg', 0),
(583, 9, '', '', '', '583.jpg', 0),
(584, 9, '', '', '', '584.jpg', 0),
(585, 9, '', '', '', '585.jpg', 0),
(586, 9, '', '', '', '586.jpg', 0),
(587, 9, '', '', '', '587.jpg', 0),
(588, 9, '', '', '', '588.jpg', 0),
(589, 9, '', '', '', '589.jpg', 0),
(590, 9, '', '', '', '590.jpg', 0),
(591, 9, '', '', '', '591.jpg', 0),
(592, 9, '', '', '', '592.jpg', 0),
(593, 9, '', '', '', '593.jpg', 0),
(594, 9, '', '', '', '594.jpg', 0),
(595, 9, '', '', '', '595.jpg', 0),
(596, 9, '', '', '', '596.jpg', 0),
(597, 9, '', '', '', '597.jpg', 0),
(598, 9, '', '', '', '598.jpg', 0),
(599, 9, '', '', '', '599.jpg', 0),
(600, 9, '', '', '', '600.jpg', 0),
(601, 9, '', '', '', '601.jpg', 0),
(602, 9, '', '', '', '602.jpg', 0),
(603, 9, '', '', '', '603.jpg', 0),
(604, 9, '', '', '', '604.jpg', 0),
(605, 9, '', '', '', '605.jpg', 0),
(606, 9, '', '', '', '606.jpg', 0),
(607, 9, '', '', '', '607.jpg', 0),
(608, 9, '', '', '', '608.jpg', 0),
(609, 9, '', '', '', '609.jpg', 0),
(610, 9, '', '', '', '610.jpg', 0),
(611, 9, '', '', '', '611.jpg', 0),
(612, 9, '', '', '', '612.jpg', 0),
(613, 9, '', '', '', '613.jpg', 0),
(614, 9, '', '', '', '614.jpg', 0),
(615, 9, '', '', '', '615.jpg', 0),
(616, 9, '', '', '', '616.jpg', 0),
(617, 9, '', '', '', '617.jpg', 0),
(618, 9, '', '', '', '618.jpg', 0),
(619, 9, '', '', '', '619.jpg', 0),
(620, 9, '', '', '', '620.jpg', 0),
(621, 9, '', '', '', '621.jpg', 0),
(622, 9, '', '', '', '622.jpg', 0),
(623, 9, '', '', '', '623.jpg', 0),
(624, 9, '', '', '', '624.jpg', 0),
(625, 9, '', '', '', '625.jpg', 0),
(626, 9, '', '', '', '626.jpg', 0),
(627, 9, '', '', '', '627.jpg', 0),
(628, 9, '', '', '', '628.jpg', 0),
(629, 9, '', '', '', '629.jpg', 0),
(630, 9, '', '', '', '630.jpg', 0),
(631, 9, '', '', '', '631.jpg', 0),
(632, 9, '', '', '', '632.jpg', 0),
(633, 9, '', '', '', '633.jpg', 0),
(634, 9, '', '', '', '634.jpg', 0),
(635, 9, '', '', '', '635.jpg', 0),
(636, 9, '', '', '', '636.jpg', 0),
(637, 9, '', '', '', '637.jpg', 0),
(638, 9, '', '', '', '638.jpg', 0),
(639, 9, '', '', '', '639.jpg', 0),
(640, 9, '', '', '', '640.jpg', 0),
(641, 9, '', '', '', '641.jpg', 0),
(642, 10, '', '', '', '642.jpg', 0),
(643, 10, '', '', '', '643.jpg', 0),
(644, 10, '', '', '', '644.jpg', 0),
(645, 10, '', '', '', '645.jpg', 0),
(646, 10, '', '', '', '646.jpg', 0),
(647, 10, '', '', '', '647.jpg', 0),
(648, 10, '', '', '', '648.jpg', 0),
(649, 10, '', '', '', '649.jpg', 0),
(650, 10, '', '', '', '650.jpg', 0),
(651, 10, '', '', '', '651.jpg', 0),
(652, 10, '', '', '', '652.jpg', 0),
(653, 10, '', '', '', '653.jpg', 0),
(654, 10, '', '', '', '654.jpg', 0),
(655, 10, '', '', '', '655.jpg', 0),
(656, 10, '', '', '', '656.jpg', 0),
(657, 10, '', '', '', '657.jpg', 0),
(658, 10, '', '', '', '658.jpg', 0),
(659, 10, '', '', '', '659.jpg', 0),
(660, 10, '', '', '', '660.jpg', 0),
(661, 10, '', '', '', '661.jpg', 0),
(662, 10, '', '', '', '662.jpg', 0),
(663, 10, '', '', '', '663.jpg', 0),
(664, 10, '', '', '', '664.jpg', 0),
(665, 10, '', '', '', '665.jpg', 0),
(666, 10, '', '', '', '666.jpg', 0),
(667, 10, '', '', '', '667.jpg', 0),
(668, 10, '', '', '', '668.jpg', 0),
(669, 10, '', '', '', '669.jpg', 0),
(670, 10, '', '', '', '670.jpg', 0),
(671, 10, '', '', '', '671.jpg', 0),
(672, 10, '', '', '', '672.jpg', 0),
(673, 10, '', '', '', '673.jpg', 0),
(674, 10, '', '', '', '674.jpg', 0),
(675, 10, '', '', '', '675.jpg', 0),
(676, 10, '', '', '', '676.jpg', 0),
(677, 10, '', '', '', '677.jpg', 0),
(678, 10, '', '', '', '678.jpg', 0),
(679, 10, '', '', '', '679.jpg', 0),
(680, 10, '', '', '', '680.jpg', 0),
(681, 10, '', '', '', '681.jpg', 0),
(682, 10, '', '', '', '682.jpg', 0),
(683, 10, '', '', '', '683.jpg', 0),
(684, 10, '', '', '', '684.jpg', 0),
(685, 10, '', '', '', '685.jpg', 0),
(686, 10, '', '', '', '686.jpg', 0),
(687, 10, '', '', '', '687.jpg', 0),
(688, 10, '', '', '', '688.jpg', 0),
(689, 10, '', '', '', '689.jpg', 0),
(690, 10, '', '', '', '690.jpg', 0),
(691, 10, '', '', '', '691.jpg', 0),
(692, 10, '', '', '', '692.jpg', 0),
(693, 10, '', '', '', '693.jpg', 0),
(694, 10, '', '', '', '694.jpg', 0),
(695, 10, '', '', '', '695.jpg', 0),
(700, 11, '', '', '', '700.jpg', 0),
(697, 10, '', '', '', '697.jpg', 0),
(698, 10, '', '', '', '698.jpg', 0),
(699, 10, '', '', '', '699.jpg', 0),
(701, 11, '', '', '', '701.jpg', 0),
(702, 11, '', '', '', '702.jpg', 0),
(703, 11, '', '', '', '703.jpg', 0),
(704, 11, '', '', '', '704.jpg', 0),
(705, 11, '', '', '', '705.jpg', 0),
(706, 11, '', '', '', '706.jpg', 0),
(707, 11, '', '', '', '707.jpg', 0),
(708, 11, '', '', '', '708.jpg', 0),
(709, 11, '', '', '', '709.jpg', 0),
(710, 11, '', '', '', '710.jpg', 0),
(711, 11, '', '', '', '711.jpg', 0),
(712, 11, '', '', '', '712.jpg', 0),
(713, 11, '', '', '', '713.jpg', 0),
(714, 11, '', '', '', '714.jpg', 0),
(715, 11, '', '', '', '715.jpg', 0),
(716, 11, '', '', '', '716.jpg', 0),
(717, 11, '', '', '', '717.jpg', 0),
(718, 11, '', '', '', '718.jpg', 0),
(719, 11, '', '', '', '719.jpg', 0),
(720, 11, '', '', '', '720.jpg', 0),
(721, 11, '', '', '', '721.jpg', 0),
(722, 11, '', '', '', '722.jpg', 0),
(723, 11, '', '', '', '723.jpg', 0),
(724, 11, '', '', '', '724.jpg', 0),
(725, 11, '', '', '', '725.jpg', 0),
(726, 11, '', '', '', '726.jpg', 0),
(727, 11, '', '', '', '727.jpg', 0),
(728, 11, '', '', '', '728.jpg', 0),
(729, 11, '', '', '', '729.jpg', 0),
(730, 11, '', '', '', '730.jpg', 0),
(731, 11, '', '', '', '731.jpg', 0),
(732, 11, '', '', '', '732.jpg', 0),
(733, 11, '', '', '', '733.jpg', 0),
(734, 11, '', '', '', '734.jpg', 0),
(735, 11, '', '', '', '735.jpg', 0),
(736, 11, '', '', '', '736.jpg', 0),
(737, 11, '', '', '', '737.jpg', 0),
(738, 11, '', '', '', '738.jpg', 0),
(739, 11, '', '', '', '739.jpg', 0),
(740, 11, '', '', '', '740.jpg', 0),
(741, 11, '', '', '', '741.jpg', 0),
(742, 11, '', '', '', '742.jpg', 0),
(743, 11, '', '', '', '743.jpg', 0),
(744, 11, '', '', '', '744.jpg', 0),
(745, 11, '', '', '', '745.jpg', 0),
(746, 11, '', '', '', '746.jpg', 0),
(747, 11, '', '', '', '747.jpg', 0),
(748, 11, '', '', '', '748.jpg', 0),
(749, 11, '', '', '', '749.jpg', 0),
(750, 11, '', '', '', '750.jpg', 0),
(751, 11, '', '', '', '751.jpg', 0),
(752, 11, '', '', '', '752.jpg', 0),
(753, 11, '', '', '', '753.jpg', 0),
(754, 11, '', '', '', '754.jpg', 0),
(755, 11, '', '', '', '755.jpg', 0),
(756, 11, '', '', '', '756.jpg', 0),
(757, 11, '', '', '', '757.jpg', 0),
(758, 11, '', '', '', '758.jpg', 0),
(759, 11, '', '', '', '759.jpg', 0),
(760, 11, '', '', '', '760.jpg', 0),
(761, 11, '', '', '', '761.jpg', 0),
(762, 11, '', '', '', '762.jpg', 0),
(763, 11, '', '', '', '763.jpg', 0),
(764, 11, '', '', '', '764.jpg', 0),
(765, 11, '', '', '', '765.jpg', 0),
(766, 11, '', '', '', '766.jpg', 0),
(767, 11, '', '', '', '767.jpg', 0),
(768, 11, '', '', '', '768.jpg', 0),
(769, 11, '', '', '', '769.jpg', 0),
(770, 11, '', '', '', '770.jpg', 0),
(771, 11, '', '', '', '771.jpg', 0),
(772, 13, '', '', '', '772.jpg', 0),
(773, 13, '', '', '', '773.jpg', 0),
(774, 13, '', '', '', '774.jpg', 0),
(775, 13, '', '', '', '775.jpg', 0),
(776, 13, '', '', '', '776.jpg', 0),
(777, 13, '', '', '', '777.jpg', 0),
(778, 13, '', '', '', '778.jpg', 0),
(779, 13, '', '', '', '779.jpg', 0),
(780, 13, '', '', '', '780.jpg', 0),
(781, 13, '', '', '', '781.jpg', 0),
(782, 13, '', '', '', '782.jpg', 0),
(783, 13, '', '', '', '783.jpg', 0),
(799, 14, '', '', '', '799.jpg', 0),
(785, 13, '', '', '', '785.jpg', 0),
(786, 13, '', '', '', '786.jpg', 0),
(787, 13, '', '', '', '787.jpg', 0),
(788, 13, '', '', '', '788.jpg', 0),
(789, 13, '', '', '', '789.jpg', 0),
(790, 13, '', '', '', '790.jpg', 0),
(791, 13, '', '', '', '791.jpg', 0),
(792, 13, '', '', '', '792.jpg', 0),
(793, 13, '', '', '', '793.jpg', 0),
(794, 13, '', '', '', '794.jpg', 0),
(795, 13, '', '', '', '795.jpg', 0),
(796, 13, '', '', '', '796.jpg', 0),
(797, 13, '', '', '', '797.jpg', 0),
(798, 13, '', '', '', '798.jpg', 0),
(800, 14, '', '', '', '800.jpg', 0),
(801, 14, '', '', '', '801.jpg', 0),
(802, 14, '', '', '', '802.jpg', 0),
(803, 14, '', '', '', '803.jpg', 0),
(804, 14, '', '', '', '804.jpg', 0),
(805, 14, '', '', '', '805.jpg', 0),
(806, 14, '', '', '', '806.jpg', 0),
(807, 14, '', '', '', '807.jpg', 0),
(808, 14, '', '', '', '808.jpg', 0),
(820, 15, 'Mr. Peru 2015', '', '', '820.jpg', 0),
(810, 14, '', '', '', '810.jpg', 0),
(811, 14, '', '', '', '811.jpg', 0),
(812, 14, '', '', '', '812.jpg', 0),
(813, 14, '', '', '', '813.jpg', 0),
(814, 14, '', '', '', '814.jpg', 0),
(815, 14, '', '', '', '815.jpg', 0),
(816, 14, '', '', '', '816.jpg', 0),
(817, 14, '', '', '', '817.jpg', 0),
(818, 14, '', '', '', '818.jpg', 0),
(819, 14, '', '', '', '819.jpg', 0),
(821, 15, '', '', '', '821.jpg', 0),
(822, 15, '', '', '', '822.jpg', 0),
(823, 15, '', '', '', '823.jpg', 0),
(824, 15, '', '', '', '824.jpg', 0),
(825, 15, '', '', '', '825.jpg', 0),
(826, 15, '', '', '', '826.jpg', 0),
(827, 15, '', '', '', '827.jpg', 0),
(828, 15, '', '', '', '828.jpg', 0),
(829, 15, '', '', '', '829.jpg', 0),
(830, 15, '', '', '', '830.jpg', 0),
(831, 15, '', '', '', '831.jpg', 0),
(832, 15, '', '', '', '832.jpg', 0),
(833, 15, '', '', '', '833.jpg', 0),
(834, 15, '', '', '', '834.jpg', 0),
(835, 15, '', '', '', '835.jpg', 0),
(836, 15, '', '', '', '836.jpg', 0),
(837, 15, '', '', '', '837.jpg', 0),
(838, 15, '', '', '', '838.jpg', 0),
(839, 15, '', '', '', '839.jpg', 0),
(840, 15, '', '', '', '840.jpg', 0),
(841, 15, '', '', '', '841.jpg', 0),
(842, 15, '', '', '', '842.jpg', 0),
(843, 15, '', '', '', '', 0),
(844, 15, '', '', '', '844.jpg', 0),
(845, 15, '', '', '', '845.jpg', 0),
(846, 15, '', '', '', '846.jpg', 0),
(847, 15, '', '', '', '', 0),
(848, 15, '', '', '', '848.jpg', 0),
(849, 15, '', '', '', '849.jpg', 0),
(850, 15, '', '', '', '850.jpg', 0),
(851, 15, '', '', '', '851.jpg', 0),
(852, 16, '', '', '', '852.JPG', 0),
(878, 16, '', '', '', '878.JPG', 0),
(854, 16, '', '', '', '854.JPG', 0),
(855, 16, '', '', '', '855.JPG', 0),
(856, 16, '', '', '', '856.JPG', 0),
(857, 16, '', '', '', '857.JPG', 0),
(858, 16, '', '', '', '858.JPG', 0),
(859, 16, '', '', '', '859.JPG', 0),
(860, 16, '', '', '', '860.JPG', 0),
(861, 16, '', '', '', '861.JPG', 0),
(862, 16, '', '', '', '862.JPG', 0),
(863, 16, '', '', '', '863.JPG', 0),
(864, 16, '', '', '', '864.JPG', 0),
(865, 16, '', '', '', '865.JPG', 0),
(866, 16, '', '', '', '866.JPG', 0),
(867, 16, '', '', '', '867.JPG', 0),
(868, 16, '', '', '', '868.JPG', 0),
(869, 16, '', '', '', '869.JPG', 0),
(870, 16, '', '', '', '870.JPG', 0),
(871, 16, '', '', '', '871.JPG', 0),
(872, 16, '', '', '', '872.JPG', 0),
(873, 16, '', '', '', '873.JPG', 0),
(874, 16, '', '', '', '874.JPG', 0),
(875, 16, '', '', '', '875.JPG', 0),
(876, 16, '', '', '', '876.JPG', 0),
(877, 16, '', '', '', '877.JPG', 0),
(879, 16, '', '', '', '879.JPG', 0),
(880, 16, '', '', '', '880.JPG', 0),
(881, 16, '', '', '', '881.JPG', 0),
(882, 16, '', '', '', '882.JPG', 0),
(883, 16, '', '', '', '883.JPG', 0),
(884, 16, '', '', '', '884.JPG', 0),
(885, 16, '', '', '', '885.JPG', 0),
(886, 16, '', '', '', '886.JPG', 0),
(887, 16, '', '', '', '887.JPG', 0),
(888, 16, '', '', '', '888.JPG', 0),
(889, 16, '', '', '', '889.JPG', 0),
(890, 16, '', '', '', '890.JPG', 0),
(891, 16, '', '', '', '891.JPG', 0),
(892, 16, '', '', '', '892.JPG', 0),
(893, 16, '', '', '', '893.JPG', 0),
(894, 16, '', '', '', '894.JPG', 0),
(895, 16, '', '', '', '895.JPG', 0),
(896, 17, '', '', '', '896.jpg', 0),
(897, 17, '', '', '', '897.jpg', 0),
(898, 17, '', '', '', '898.jpg', 0),
(899, 17, '', '', '', '899.jpg', 0),
(900, 17, '', '', '', '900.jpg', 0),
(901, 17, '', '', '', '901.jpg', 0),
(902, 17, '', '', '', '902.jpg', 0),
(903, 17, '', '', '', '903.jpg', 0),
(904, 17, '', '', '', '904.jpg', 0),
(905, 17, '', '', '', '905.jpg', 0),
(906, 17, '', '', '', '906.jpg', 0),
(907, 17, '', '', '', '907.jpg', 0),
(908, 17, '', '', '', '908.jpg', 0),
(909, 17, '', '', '', '909.jpg', 0),
(910, 17, '', '', '', '910.jpg', 0),
(911, 17, '', '', '', '911.jpg', 0),
(912, 17, '', '', '', '912.jpg', 0),
(913, 17, '', '', '', '913.jpg', 0),
(914, 17, '', '', '', '914.jpg', 0),
(915, 17, '', '', '', '915.jpg', 0),
(916, 17, '', '', '', '916.jpg', 0),
(917, 17, '', '', '', '917.jpg', 0),
(918, 17, '', '', '', '918.jpg', 0),
(919, 17, '', '', '', '919.jpg', 0),
(920, 17, '', '', '', '920.jpg', 0),
(921, 17, '', '', '', '921.jpg', 0),
(922, 17, '', '', '', '922.jpg', 0),
(923, 17, '', '', '', '923.jpg', 0),
(924, 17, '', '', '', '924.jpg', 0),
(925, 17, '', '', '', '925.jpg', 0),
(926, 17, '', '', '', '926.jpg', 0),
(927, 17, '', '', '', '927.jpg', 0),
(928, 17, '', '', '', '928.jpg', 0),
(929, 17, '', '', '', '929.jpg', 0),
(930, 17, '', '', '', '930.jpg', 0),
(931, 17, '', '', '', '931.jpg', 0),
(932, 17, '', '', '', '932.jpg', 0),
(933, 17, '', '', '', '933.jpg', 0),
(934, 17, '', '', '', '934.jpg', 0),
(935, 17, '', '', '', '935.jpg', 0),
(936, 17, '', '', '', '936.jpg', 0),
(937, 17, '', '', '', '937.jpg', 0),
(938, 17, '', '', '', '938.jpg', 0),
(939, 17, '', '', '', '939.jpg', 0),
(940, 17, '', '', '', '940.jpg', 0),
(941, 17, '', '', '', '941.jpg', 0),
(942, 17, '', '', '', '942.jpg', 0),
(943, 17, '', '', '', '943.jpg', 0),
(944, 17, '', '', '', '944.jpg', 0),
(945, 17, '', '', '', '945.jpg', 0),
(946, 17, '', '', '', '946.jpg', 0),
(947, 17, '', '', '', '947.jpg', 0),
(948, 17, '', '', '', '948.jpg', 0),
(949, 17, '', '', '', '949.jpg', 0),
(950, 17, '', '', '', '950.jpg', 0),
(951, 17, '', '', '', '951.jpg', 0),
(952, 17, '', '', '', '952.jpg', 0),
(953, 17, '', '', '', '953.jpg', 0),
(954, 17, '', '', '', '954.jpg', 0),
(955, 17, '', '', '', '955.jpg', 0),
(956, 17, '', '', '', '956.jpg', 0),
(957, 17, '', '', '', '957.jpg', 0),
(958, 17, '', '', '', '958.jpg', 0),
(959, 17, '', '', '', '959.jpg', 0),
(960, 17, '', '', '', '960.jpg', 0),
(961, 17, '', '', '', '961.jpg', 0),
(962, 17, '', '', '', '962.jpg', 0),
(963, 17, '', '', '', '963.jpg', 0),
(964, 17, '', '', '', '964.jpg', 0),
(965, 17, '', '', '', '965.jpg', 0),
(966, 17, '', '', '', '966.jpg', 0),
(967, 17, '', '', '', '967.jpg', 0),
(968, 17, '', '', '', '968.jpg', 0),
(969, 17, '', '', '', '969.jpg', 0),
(970, 17, '', '', '', '970.jpg', 0),
(971, 17, '', '', '', '971.jpg', 0),
(972, 17, '', '', '', '972.jpg', 0),
(973, 17, '', '', '', '973.jpg', 0),
(974, 17, '', '', '', '974.jpg', 0),
(975, 17, '', '', '', '975.jpg', 0),
(976, 17, '', '', '', '976.jpg', 0),
(977, 17, '', '', '', '977.jpg', 0),
(978, 17, '', '', '', '978.jpg', 0),
(979, 17, '', '', '', '979.jpg', 0),
(980, 17, '', '', '', '980.jpg', 0),
(981, 17, '', '', '', '981.jpg', 0),
(982, 17, '', '', '', '982.jpg', 0),
(983, 17, '', '', '', '983.jpg', 0),
(984, 17, '', '', '', '984.jpg', 0),
(985, 17, '', '', '', '985.jpg', 0),
(986, 17, '', '', '', '986.jpg', 0),
(987, 17, '', '', '', '987.jpg', 0),
(988, 17, '', '', '', '988.jpg', 0),
(989, 17, '', '', '', '989.jpg', 0),
(990, 17, '', '', '', '990.jpg', 0),
(991, 17, '', '', '', '991.jpg', 0),
(992, 17, '', '', '', '992.jpg', 0),
(993, 17, '', '', '', '993.jpg', 0),
(994, 17, '', '', '', '994.jpg', 0),
(995, 17, '', '', '', '995.jpg', 0),
(996, 17, '', '', '', '996.jpg', 0),
(997, 17, '', '', '', '997.jpg', 0),
(998, 17, '', '', '', '998.jpg', 0),
(999, 17, '', '', '', '999.jpg', 0),
(1000, 17, '', '', '', '1000.jpg', 0),
(1001, 17, '', '', '', '1001.jpg', 0),
(1002, 17, '', '', '', '1002.jpg', 0),
(1003, 17, '', '', '', '1003.jpg', 0),
(1004, 17, '', '', '', '1004.jpg', 0),
(1005, 17, '', '', '', '1005.jpg', 0),
(1006, 17, '', '', '', '1006.jpg', 0),
(1007, 17, '', '', '', '1007.jpg', 0),
(1008, 17, '', '', '', '1008.jpg', 0),
(1009, 18, '', '', '', '1009.JPG', 0),
(1011, 18, '', '', '', '1011.JPG', 0),
(1012, 18, '', '', '', '1012.JPG', 0),
(1013, 18, '', '', '', '1013.JPG', 0),
(1014, 18, '', '', '', '1014.JPG', 0),
(1015, 18, '', '', '', '1015.JPG', 0),
(1016, 18, '', '', '', '1016.JPG', 0),
(1017, 18, '', '', '', '1017.JPG', 0),
(1018, 18, '', '', '', '1018.JPG', 0),
(1021, 18, '', '', '', '1021.JPG', 0),
(1020, 18, '', '', '', '1020.JPG', 0),
(1022, 18, '', '', '', '1022.JPG', 0),
(1023, 18, '', '', '', '1023.JPG', 0),
(1024, 18, '', '', '', '1024.JPG', 0),
(1025, 18, '', '', '', '1025.JPG', 0),
(1026, 18, '', '', '', '1026.JPG', 0),
(1027, 18, '', '', '', '1027.JPG', 0),
(1028, 18, '', '', '', '1028.JPG', 0),
(1029, 18, '', '', '', '1029.JPG', 0),
(1030, 18, '', '', '', '1030.JPG', 0),
(1031, 18, '', '', '', '1031.JPG', 0),
(1032, 18, '', '', '', '1032.JPG', 0),
(1033, 18, '', '', '', '1033.JPG', 0),
(1034, 18, '', '', '', '1034.JPG', 0),
(1035, 18, '', '', '', '1035.JPG', 0),
(1036, 18, '', '', '', '1036.JPG', 0),
(1037, 18, '', '', '', '1037.JPG', 0),
(1038, 18, '', '', '', '1038.JPG', 0),
(1039, 18, '', '', '', '1039.JPG', 0),
(1040, 18, '', '', '', '1040.JPG', 0),
(1041, 18, '', '', '', '1041.JPG', 0),
(1042, 18, '', '', '', '1042.JPG', 0),
(1043, 18, '', '', '', '1043.JPG', 0),
(1044, 18, '', '', '', '1044.JPG', 0),
(1045, 18, '', '', '', '1045.JPG', 0),
(1046, 18, '', '', '', '1046.JPG', 0),
(1047, 18, '', '', '', '', 0),
(1048, 18, '', '', '', '1048.JPG', 0),
(1049, 18, '', '', '', '1049.JPG', 0),
(1050, 18, '', '', '', '1050.JPG', 0),
(1051, 18, '', '', '', '1051.JPG', 0),
(1052, 18, '', '', '', '1052.JPG', 0),
(1053, 18, '', '', '', '1053.JPG', 0),
(1054, 18, '', '', '', '1054.JPG', 0),
(1055, 18, '', '', '', '1055.JPG', 0),
(1056, 18, '', '', '', '1056.JPG', 0),
(1057, 18, '', '', '', '1057.JPG', 0),
(1058, 18, '', '', '', '1058.JPG', 0),
(1059, 18, '', '', '', '1059.JPG', 0),
(1060, 18, '', '', '', '1060.JPG', 0),
(1061, 18, 'test', '', '', '1061.php', 0),
(1062, 19, ' Women’s Bikini-Fitness up to 159 cm category winner- Angie Majeed (USA).', '', '', '1062.jpg', 0),
(1073, 21, '', '', '', '1073.JPG', 0),
(1064, 20, 'Nada ', '', '', '1064.jpg', 0),
(1067, 21, '3', '', '', '1067.JPG', 0),
(1068, 21, '4', '', '', '1068.JPG', 0),
(1069, 21, '5', '', '', '1069.JPG', 0),
(1070, 21, '6', '', '', '1070.JPG', 0),
(1071, 21, '7', '', '', '1071.JPG', 0),
(1072, 21, '8', '', '', '1072.JPG', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Internas`
--

CREATE TABLE IF NOT EXISTS `Internas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `Internas`
--

INSERT INTO `Internas` (`Id`, `Nombre`, `Foto`, `Pos`) VALUES
(2, '', '2.jpg', 2),
(3, '', '3.jpg', 17),
(4, '', '4.jpg', 16),
(5, '', '5.jpg', 15),
(6, '', '6.jpg', 14),
(7, '', '7.jpg', 13),
(8, '', '8.jpg', 12),
(9, '', '9.jpg', 11),
(10, '', '10.jpg', 10),
(11, '', '11.jpg', 9),
(12, '', '12.jpg', 8),
(13, '', '13.jpg', 7),
(14, 'wilbert', '14.jpg', 6),
(15, '', '15.jpg', 5),
(16, 'banner 6', '16.jpg', 4),
(17, 'campeonato mundial clasico 2015', '17.JPG', 3),
(18, 'ACADEMIA IFBB COLOMBIA', '18.jpg', 1),
(19, 'Diploma ntrenador Avanzado', '19.jpg', 0),
(20, 'Diploma nutricion avanzada', '20.jpg', 0),
(21, 'Diploma Nutricion Basica', '21.jpg', 0),
(22, 'Diploma Entrenador Personal', '22.jpg', 0),
(23, 'RAFAEL SANTONJA', '23.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Noticias`
--

CREATE TABLE IF NOT EXISTS `Noticias` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `Noticias`
--

INSERT INTO `Noticias` (`Id`, `Nombre`, `Texto`, `Foto`, `Archivo`, `Fecha`, `Pos`) VALUES
(6, '2da promocion de jueces IFBB Colombia', '<p>En el marco del Open Internaciponal Clasico Paisa se realizo el 2do curso para jueces IFBB Colombia dictado por el Presidente de la Confederacion Sudamericana de Fisico Culturismo y Fitness Licenciado Juan Fernando paredes y el Director de Jueces de la Confederacion Sudamericana de Fisico Culturismo y Fitness Profesor Adolfo Martinez.</p>\r\n\r\n<p>La IFBB Colombia cumpliendo con&nbsp;su mision de difundir a lo largo y ancho de nuestro territorio nacional realiza este curso para jueces donde participaroon 28 jueces, aspirantes a jueces y fanaticos de neustro deporte, interesados en conocer mas a fondo las normativas de nuestro deporte. A los asistentes les fue entregado un diploma de participacion a los aue aprobaron el curso su carnet que los acreditab como jueces IFBB Colombia.</p>\r\n', '6.jpg', '', '2016-04-05', 3),
(5, 'Programa de competencias Arnold Amateur ohio 2016', '<p><strong>B</strong><strong>uenas nuevas para nuestro deporte.</strong></p>\r\n\r\n<p>Nos llega un reporte de nuestro Presidente el Doctor Rafael Santonja donde nos manifiesta: &ldquo;viaje a Toronto, Canad&aacute; con motivo de los juegos Panamericanos, para participar de la asamblea y de la ceremonia de apertura, con el principal objetivo de obtener el reconocimiento de nuestra Federaci&oacute;n por parte de la Organizaci&oacute;n Ol&iacute;mpica Americana. Me complace informarles que despu&eacute;s de la entrega de los documentos necesarios hemos completado el proceso de reconocimiento.</p>\r\n\r\n<p>En la asamblea recibimos el voto de confianza de 23 de las 24 naciones presentes, siendo necesarios solo 20 para lograr el reconocimiento.</p>\r\n\r\n<blockquote>\r\n<p>El reconocimiento definitivo se otorgara el pr&oacute;ximo 31 de octubre en el encuentro del Comit&eacute; Ejecutivo de la ODEPA que se realizara en Washington, junto al encuentro de la ANOC (Asociaci&oacute;n Mundial de Comit&eacute;s Nacionales Ol&iacute;mpicos) una excelente ocasi&oacute;n para seguir con nuestro acercamiento con la Organizaci&oacute;n Europea Ol&iacute;mpica.</p>\r\n</blockquote>\r\n', '5.png', '', '2016-04-05', 5),
(7, 'Open Internacional Clásico Paisa 2016', '<p><strong>Buenas nuevas para nuestro deporte.</strong></p>\r\n\r\n<p>Nos llega un reporte de nuestro Presidente el Doctor Rafael Santonja donde nos manifiesta: &ldquo;viaje a Toronto, Canad&aacute; con motivo de los juegos Panamericanos, para participar de la asamblea y de la ceremonia de apertura, con el principal objetivo de obtener el reconocimiento de nuestra Federaci&oacute;n por parte de la Organizaci&oacute;n Ol&iacute;mpica Americana. Me complace informarles que despu&eacute;s de la entrega de los documentos necesarios hemos completado el proceso de reconocimiento.</p>\r\n\r\n<p>En la asamblea recibimos el voto de confianza de 23 de las 24 naciones presentes, siendo necesarios solo 20 para lograr el reconocimiento.</p>\r\n', '7.png', '', '2016-04-05', 6),
(11, 'La Federacion Colombiana y su organo de administracion no son reconocidos por la IFBB', '<p>Luego de comprobarse que apesar de la suspension proferida por la IFBB al entonces presidente de la Federacion Colombiana de Fisico Culturismo y Fitnes Sr. Alejandro Santos, este seguia haciendo parte activa de los destinos de la FCFC e incluso dirigiendo los eventos en el territorio Nacional, en Asamblea General&nbsp;la Confederacion Sudamericana de Fisico Culturismo y Fitness en&nbsp;Oficio No. CSFF-040-09-15 con fecha del 23 de Septiembre de 2015,&nbsp;suspende a la Comisi&oacute;n Directiva de la FCFC de sus funcionesy determina&nbsp;que la anterior Comisi&oacute;n Directiva de la FCFC no est&aacute; facultada para&nbsp;organizar, controlar o administrar ninguna actividad IFBB en Colombia; de igual&nbsp;forma no podr&aacute; sancionar a atletas que deseen participar en competencias IFBB&nbsp;locales o internacionales. Aclarando que todos los eventos que &eacute;sta organice,&nbsp;controle o administre NO son autorizados.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '11.jpg', '11.pdf', '2016-04-29', 1),
(12, 'Colombia en el Mundial Junior y Master 2015: Por primera vez un pais se corona como Campeon Absoluto Junior y Master', '<p>Por primera vez un pais se corona como Campeon Absoluto Junior y Master en un Campeonato Mundial en el mismo certamen.</p>\r\n\r\n<p>Esteban Fuqueme Campeon Absoluto Junior y Ricardo Plata Campeon Absoluto Master, el himno de Colombia retumbando en el Coliseo del Salvador. Esta participacion la complemento Adriana Bernal quien obtuvo medalla de plata en la Categoria Wellness, Jose Maria Chavez 4to lugar en la categoria 70 kgs master y Sandra Liliana Martinez quien ocupara la posicion 13 en Body Fitness Master.</p>\r\n\r\n<p>Felicitaciones a los atletas de la IFBB Colombia&nbsp;</p>\r\n', '12.jpg', '', '2016-04-29', 4),
(13, 'Colombia en el Arnold Classic Brasil 2016', '<p>Mas de 20 atletas Colombianos integraron la delegacion que represento a nuestro pais en el Arnold Classic Amateur Brasil 2016 donde las actuacinoes mas sobresalientes fueron</p>\r\n\r\n<p>Lina Maria Herrera 1er lugar Body Fitness mas de 1,63 mts</p>\r\n\r\n<p>Luis Gabriel Rios 1er lugar Fisico Culturismo 85kg</p>\r\n\r\n<p>Ricardo Plata 2do lugar Fisico Culturismo Master y 3er lugar Fisico Culturismo 90 kg</p>\r\n\r\n<p>Maurico Gomez 2do lugar Fisico Culturismo Clasico hasta 1,75 mts</p>\r\n\r\n<p>Sandra Lilinana Martinez 4to lugar Body Fitness Master</p>\r\n\r\n<p>Duvan Rodriguez 5to lugar Fisico Culturismo 70 kg</p>\r\n\r\n<p>Camilo Diaz 5to lugar Fisico Culturismo 100 kg</p>\r\n\r\n<p>Los demas resultados se pueden consultar en el archivo adjunto.</p>\r\n', '13.jpg', '13.pdf', '2016-04-29', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Patrocinadores`
--

CREATE TABLE IF NOT EXISTS `Patrocinadores` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Foto1` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Patrocinadores`
--

INSERT INTO `Patrocinadores` (`Id`, `Nombre`, `Foto`, `Foto1`, `Link`, `Pos`) VALUES
(10, 'Zf', '10.jpg', '', '', 0),
(7, 'FSS', '7.png', '', 'http://fss.com.co/Inicio/', 1),
(8, 'LINACOL', '8.jpg', '', 'https://www.facebook.com/Mundo-Saludable-500500386629665/', 0),
(9, 'Lincol', '9.jpg', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Publicaciones`
--

CREATE TABLE IF NOT EXISTS `Publicaciones` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Publicaciones`
--

INSERT INTO `Publicaciones` (`Id`, `Nombre`, `Fecha`, `Texto`, `Foto`, `Archivo`, `Pos`) VALUES
(3, 'Confederación Sudamericana de Físico Culturismo', 'Noviembre 06 - 2014', '<p>The lift starts with the lifter standing erect and the bar loaded with weights resting on the lifter&#39;s shoulders. At the referee&#39;s command the lift begins.</p>\r\n', '', '3.pdf', 0),
(2, 'Categorias Convocadas para el 40to Campeonato Sudamericano 2014', 'Agosto 11 2013', '<p>Estas son las categorias aprobadas durante la asamblea realizada en Rio de Janeiro, que se disputaran en el 40to Campeonato Sudamericano de Fisico Culturismo y Fitness que se realizara en Bogota, Colombia.</p>\r\n', '2.jpg', '2.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Redes`
--

CREATE TABLE IF NOT EXISTS `Redes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fb` varchar(255) NOT NULL,
  `Tw` varchar(255) NOT NULL,
  `Yt` varchar(255) NOT NULL,
  `Rs` varchar(255) NOT NULL,
  `Fl` varchar(255) NOT NULL,
  `It` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Redes`
--

INSERT INTO `Redes` (`Id`, `Fb`, `Tw`, `Yt`, `Rs`, `Fl`, `It`) VALUES
(1, 'https://www.facebook.com/groups/1647120218904714/', '', '', '', '', 'https://www.instagram.com/ifbbcolombia/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ReglamentoF`
--

CREATE TABLE IF NOT EXISTS `ReglamentoF` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `ReglamentoF`
--

INSERT INTO `ReglamentoF` (`Id`, `Nombre`, `Archivo`, `Pos`) VALUES
(1, 'Reglamento General - Físico Culturismo 2014', '1.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ReglamentoI`
--

CREATE TABLE IF NOT EXISTS `ReglamentoI` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `ReglamentoI`
--

INSERT INTO `ReglamentoI` (`Id`, `Nombre`, `Archivo`, `Pos`) VALUES
(18, '  4 de giro Modalidad Body Fitness', '18.jpg', 0),
(19, 'Cuartos de Giros Bikini Fitness', '19.jpg', 0),
(20, 'Cuartos de Giros mens athletic physique', '20.jpg', 0),
(21, 'Caminata en T', '21.jpg', 0),
(22, 'Modalidades Femeninas - Zapatos', '22.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ReglamentoM`
--

CREATE TABLE IF NOT EXISTS `ReglamentoM` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `ReglamentoM`
--

INSERT INTO `ReglamentoM` (`Id`, `Nombre`, `Archivo`, `Pos`) VALUES
(18, '  Formato de Inscripción por Categoría', '18.pdf', 0),
(19, 'Formato Identificación de CD de Musica', '19.pdf', 0),
(20, 'Formato de Inscripción por Categoría', '20.pdf', 0),
(21, 'Formato Top 5', '21.pdf', 0),
(22, 'Convenio de participacion atletas 2015', '22.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reglamentos`
--

CREATE TABLE IF NOT EXISTS `Reglamentos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Idcat` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `Reglamentos`
--

INSERT INTO `Reglamentos` (`Id`, `Idcat`, `Nombre`, `Archivo`, `Pos`) VALUES
(11, 6, 'WELLNESS - 2015', '11.pdf', 0),
(10, 5, 'BODY FITNESS', '10.pdf', 0),
(9, 4, 'WOMEN''S PHYSIQUE', '9.pdf', 0),
(8, 3, 'Reglamento Fisico ', '8.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ReglamentoT`
--

CREATE TABLE IF NOT EXISTS `ReglamentoT` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ReglamentoT`
--

INSERT INTO `ReglamentoT` (`Id`, `Nombre`, `Archivo`, `Pos`) VALUES
(1, 'Reglamento General - Body Fitness 2014', '1.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Videos`
--

CREATE TABLE IF NOT EXISTS `Videos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Video` longtext NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `Videos`
--

INSERT INTO `Videos` (`Id`, `Nombre`, `Video`, `Pos`) VALUES
(1, 'CSFF - Categoria Gran Master Campeonato Sudamericano Bolivia 2014 ', '<iframe width="560" height="315" src="//www.youtube.com/embed/n5tiCCfWGaA?list=UURDyEeAOr0GynHXwaN6cRCg" frameborder="0" allowfullscreen></iframe>', 8),
(2, 'IFBB - Bodybuilding', '<iframe width="560" height="315" src="//www.youtube.com/embed/A9w3rMtRyD0" frameborder="0" allowfullscreen></iframe>', 9),
(3, 'CSFF - Fitness coreográfico femenino 1,63 mts Sudamericano 2013', '<iframe width="560" height="315" src="//www.youtube.com/embed/Qa_zMWAkpYw" frameborder="0" allowfullscreen></iframe>', 10),
(5, 'IFBB - Mr. Olympia 1996', '<iframe width="560" height="315" src="//www.youtube.com/embed/9fF3x0sLqB4" frameborder="0" allowfullscreen></iframe>', 6),
(6, 'CSFF - Categoria Fitness coreografico Femenino Juvenil', '<iframe width="100%" height="315" src="//www.youtube.com/embed/RlqnEk0itsM" frameborder="0" allowfullscreen></iframe>', 11),
(7, 'CSFF - Overall Culturismo Senior Sudamericano 2013', '<iframe width="100%" height="315" src="//www.youtube.com/embed/5UpHe5KRGIM" frameborder="0" allowfullscreen></iframe>', 12),
(8, 'CSFF - Categoria Absoluta Body Fitness Campeonato Sudamericano', '<iframe width="100%" height="315" src="//www.youtube.com/embed/S0aQtPIl_B0" frameborder="0" allowfullscreen></iframe>', 13),
(9, 'CSFF - Categoria Absoluta Bikini Fitness Campeonato Sudamericano Bolivia', '<iframe width="100%" height="315" src="//www.youtube.com/embed/zUTe78-x7f8" frameborder="0" allowfullscreen></iframe>', 14),
(10, 'CSFF - Categoria Body Fitness Juvenil Campeonato Sudamericano', '<iframe width="100%" height="315" src="//www.youtube.com/embed/B-NzmQkResw" frameborder="0" allowfullscreen></iframe>', 15),
(11, 'IFBB - Finales Catg. 60kgs Campeonato Mundial IFBB 2014', '<iframe width="560" height="315" src="//www.youtube.com/embed/62XtmnY6Mfg" frameborder="0" allowfullscreen></iframe>', 7),
(12, 'IFBB - Catg. 65 kgs Campeonato Mundial 2014', '<iframe width="560" height="315" src="//www.youtube.com/embed/o4a8eQoqV7w" frameborder="0" allowfullscreen></iframe>', 1),
(13, 'IFBB - Finales catg. 70 kgs Campeonato Mundial 2014', '<iframe width="560" height="315" src="//www.youtube.com/embed/Y-Q1DEUjves" frameborder="0" allowfullscreen></iframe>', 2),
(14, 'IFBB - Finales Catg. 75 kg Campeonato Mundial 2014', '<iframe width="560" height="315" src="//www.youtube.com/embed/9IwbxSuR32w" frameborder="0" allowfullscreen></iframe>', 3),
(15, 'IFBB - Finales Catg. 80 kgs Campeonato Mundial 2014', '<iframe width="560" height="315" src="//www.youtube.com/embed/iJ2oUXshpAc" frameborder="0" allowfullscreen></iframe>', 4),
(16, 'IFBB - Finales Catg. 85 kgs Campeonato Mundial 2014', '<iframe width="560" height="315" src="//www.youtube.com/embed/KeUGPwPaRK4" frameborder="0" allowfullscreen></iframe>', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
