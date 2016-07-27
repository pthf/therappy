-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2016 a las 11:04:58
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `therappy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `idAdmin` int(11) NOT NULL,
  `adminName` varchar(245) CHARACTER SET ascii NOT NULL,
  `adminPassword` char(64) CHARACTER SET ascii NOT NULL,
  `adminLastConnection` varchar(45) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `adminuser`
--

INSERT INTO `adminuser` (`idAdmin`, `adminName`, `adminPassword`, `adminLastConnection`) VALUES
(1, 'Memo', '$2y$10$0YubSpGcHJsxvelX4oqp5.Sr.SMtNCKy8wYk8GnpQIhq72JwN5iiy', '2016-07-25 16:56:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bannersliderhome`
--

CREATE TABLE IF NOT EXISTS `bannersliderhome` (
  `idBannerSliderHome` int(11) NOT NULL,
  `ulrBanner` varchar(545) NOT NULL,
  `imageBanner` varchar(545) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `bannersliderhome`
--

INSERT INTO `bannersliderhome` (`idBannerSliderHome`, `ulrBanner`, `imageBanner`) VALUES
(1, 'http://paratodohayfans.com/', '20160727104907L5C54F.jpg'),
(2, 'http://paratodohayfans.com/', '20160727104907MWWW43.jpg'),
(3, 'http://paratodohayfans.com/', '2016072710490791X01S.jpg'),
(4, 'http://paratodohayfans.com/', '20160727104907NCLNDB.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coursegallery`
--

CREATE TABLE IF NOT EXISTS `coursegallery` (
  `idCourseGallery` int(11) NOT NULL,
  `imageCourseGallery` varchar(245) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `coursegallery`
--

INSERT INTO `coursegallery` (`idCourseGallery`, `imageCourseGallery`) VALUES
(1, '20160727105041REUML1.jpg'),
(2, '20160727105041A3FMPS.jpg'),
(3, '20160727105041LM6XXZ.jpg'),
(4, '20160727105041C9S78Y.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventblog`
--

CREATE TABLE IF NOT EXISTS `eventblog` (
  `idEventBlog` int(11) NOT NULL,
  `blogName` varchar(245) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `blogDate` date NOT NULL,
  `blogHours` varchar(24) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `blogCover` varchar(545) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `blogShortDescription` varchar(280) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `blogDocument` varchar(10045) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventblog`
--

INSERT INTO `eventblog` (`idEventBlog`, `blogName`, `blogDate`, `blogHours`, `blogCover`, `blogShortDescription`, `blogDocument`) VALUES
(1, 'name post 2', '2016-07-27', 'event schedule 2', 'http://localhost/www/therappy/build/admin/src/images/document/201607261737149EP2XP.jpg', 'short description 2', '<p style="text-align: center;"><a href="../src/images/document/201607261737149EP2XP.jpg">http://localhost/www/therappy/build/admin/src/images/document/201607261737149EP2XP.jpg</a></p>\r\n<p style="text-align: center;"><img src="../src/images/document/201607261737149EP2XP.jpg" alt="" width="222" height="259" /></p>\r\n<p style="text-align: center;"><a href="../src/images/document/201607261737149EP2XP.jpg">http://localhost/www/therappy/build/admin/src/images/document/201607261737149EP2XP.jpg</a></p>\r\n<p style="text-align: center;">&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imageslibrary`
--

CREATE TABLE IF NOT EXISTS `imageslibrary` (
  `idImage` int(11) NOT NULL,
  `nameImage` varchar(245) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `imageslibrary`
--

INSERT INTO `imageslibrary` (`idImage`, `nameImage`) VALUES
(119, '20160726130949A5U35V.jpg'),
(120, '20160726130949TA175F.jpg'),
(121, '20160726130949H82CFJ.jpg'),
(122, '201607261309499FB8ZI.jpg'),
(123, '201607261309495WXXEN.jpg'),
(124, '20160726130949BI01WM.jpg'),
(125, '20160726130949G6U3QO.jpg'),
(126, '20160726130950X99MBZ.jpg'),
(127, '201607261309502MRMKQ.jpg'),
(128, '201607261737144X1DMQ.jpg'),
(129, '201607261737140O7PS6.jpg'),
(130, '20160726173714PTZLHI.jpg'),
(131, '20160726173714O6ERHL.jpg'),
(132, '20160726173714Q1H3EB.jpg'),
(133, '201607261737149EP2XP.jpg'),
(134, '20160726173714H82R4B.jpg'),
(135, '20160726173714RQFAME.jpg'),
(136, '20160726173714RKRYX6.jpg'),
(137, '20160726173714P4CKM3.jpg'),
(138, '20160726173714SP3MN2.jpg'),
(139, '201607261737146XQLHP.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interestblog`
--

CREATE TABLE IF NOT EXISTS `interestblog` (
  `idInterestBlog` int(11) NOT NULL,
  `blogName` varchar(245) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `blogDate` date NOT NULL,
  `blogCover` varchar(545) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `blogShortDescription` varchar(280) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `blogDocument` varchar(10045) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `interestblog`
--

INSERT INTO `interestblog` (`idInterestBlog`, `blogName`, `blogDate`, `blogCover`, `blogShortDescription`, `blogDocument`) VALUES
(1, 'name post 1', '2016-07-27', 'http://localhost/www/therappy/build/admin/src/images/document/20160726130949A5U35V.jpg', 'short description 1', '<p style="text-align: center;"><a href="../src/images/document/20160726130949A5U35V.jpg">http://localhost/www/therappy/build/admin/src/images/document/20160726130949A5U35V.jpg</a></p>\r\n<p style="text-align: center;"><img src="../src/images/document/20160726130949A5U35V.jpg" alt="" width="415" height="311" /></p>\r\n<p style="text-align: center;"><a href="../src/images/document/20160726130949A5U35V.jpg">http://localhost/www/therappy/build/admin/src/images/document/20160726130949A5U35V.jpg</a></p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>'),
(2, 'name post 2', '2016-07-27', 'http://localhost/www/therappy/build/admin/src/images/document/201607261737140O7PS6.jpg', 'short description 2', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../src/images/document/201607261737140O7PS6.jpg" alt="" width="296" height="374" /></p>\r\n<p style="text-align: center;">Hola! :)&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `placegallery`
--

CREATE TABLE IF NOT EXISTS `placegallery` (
  `idPlaceGallery` int(11) NOT NULL,
  `imagePlaceGallery` varchar(245) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `placegallery`
--

INSERT INTO `placegallery` (`idPlaceGallery`, `imagePlaceGallery`) VALUES
(1, '201607271050541PTAKR.jpg'),
(2, '20160727105054VSZTEQ.jpg'),
(3, '20160727105055ULSKBC.jpg'),
(4, '20160727105055U9XRXB.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `bannersliderhome`
--
ALTER TABLE `bannersliderhome`
  ADD PRIMARY KEY (`idBannerSliderHome`);

--
-- Indices de la tabla `coursegallery`
--
ALTER TABLE `coursegallery`
  ADD PRIMARY KEY (`idCourseGallery`);

--
-- Indices de la tabla `eventblog`
--
ALTER TABLE `eventblog`
  ADD PRIMARY KEY (`idEventBlog`);

--
-- Indices de la tabla `imageslibrary`
--
ALTER TABLE `imageslibrary`
  ADD PRIMARY KEY (`idImage`);

--
-- Indices de la tabla `interestblog`
--
ALTER TABLE `interestblog`
  ADD PRIMARY KEY (`idInterestBlog`);

--
-- Indices de la tabla `placegallery`
--
ALTER TABLE `placegallery`
  ADD PRIMARY KEY (`idPlaceGallery`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `bannersliderhome`
--
ALTER TABLE `bannersliderhome`
  MODIFY `idBannerSliderHome` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `coursegallery`
--
ALTER TABLE `coursegallery`
  MODIFY `idCourseGallery` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `eventblog`
--
ALTER TABLE `eventblog`
  MODIFY `idEventBlog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imageslibrary`
--
ALTER TABLE `imageslibrary`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT de la tabla `interestblog`
--
ALTER TABLE `interestblog`
  MODIFY `idInterestBlog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `placegallery`
--
ALTER TABLE `placegallery`
  MODIFY `idPlaceGallery` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
