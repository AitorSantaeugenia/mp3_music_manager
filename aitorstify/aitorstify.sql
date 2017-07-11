-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2017 a las 00:07:59
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aitorstify`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `__canciones`
--

CREATE TABLE `__canciones` (
  `id` int(4) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `estilo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `autor` varchar(50) NOT NULL,
  `nombre_cancion` varchar(30) NOT NULL,
  `cancion_ruta` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `__canciones`
--

INSERT INTO `__canciones` (`id`, `ano`, `estilo`, `autor`, `nombre_cancion`, `cancion_ruta`, `imagen`) VALUES
(1, '1990', 'Hard_rock', 'ACDC', 'Thunderstruck', './music/song1.mp3', 'https://busites_www.s3.amazonaws.com/acdccom/content/discography/highwaytohell.jpg'),
(2, '1979', 'Hard_rock', 'ACDC', 'Highway to hell', './music/song2.mp3', 'https://busites_www.s3.amazonaws.com/acdccom/content/discography/highwaytohell.jpg'),
(3, '2004', 'Metal', 'Rammstein', 'Keine Lust', './music/song3.mp3', 'https://3.bp.blogspot.com/-pi8oVbxhGaI/V3K6TJ-gCfI/AAAAAAAAHPg/gdrbOcFJghMBhixYyTcHYVCICZioMUi0ACLcB/s1600/rammstein_header_by_stainless_heart-d60f286.png'),
(4, '1970', 'Heavy_clasico', 'Led_Zeppelin', 'Immigrant song', './music/song4.mp3', 'https://yt3.ggpht.com/-k7goiXnV62A/AAAAAAAAAAI/AAAAAAAAAAA/3otxTdn7G6E/s900-c-k-no-mo-rj-c0xffffff/photo.jpg'),
(5, '1991', 'Grunge', 'Nirvana', 'Smels like teen spirit', './music/song5.mp3', 'https://i.ytimg.com/vi/WbP4ppv_1G8/maxresdefault.jpg'),
(6, '2008', 'Ska', 'Talco', 'La torre', './music/song6.mp3', 'https://debarbasyboinas.files.wordpress.com/2015/03/1256826280747_f.jpg'),
(7, '2003', 'Heavy_metal', 'Metallica', 'St anger', './music/song7.mp3', 'http://www.laguaridarock.com/wp-content/uploads/2016/08/metallica-e1331070026725.jpg'),
(8, '2016', 'Heavy_metal', 'Metallica', 'Atlas rise', './music/song8.mp3', 'http://www.laguaridarock.com/wp-content/uploads/2016/08/metallica-e1331070026725.jpg'),
(9, '1980', 'Rock', 'Motörhead', 'Ace of spades', './music/song9.mp3', 'http://imotorhead.com/mh/wp-content/uploads/2016/12/mh-music-new.jpg'),
(10, '2008', 'Rock', 'Barricada', 'En blanco y negro', './music/song10.mp3', 'http://ep01.epimg.net/cultura/imagenes/2011/12/03/actualidad/1322866803_850215_0000000000_sumario_normal.jpg'),
(11, '2002', 'Rock', 'Rosendo', 'Masculino singular', './music/song11.mp3', 'https://rockcultura.es/wp-content/uploads/2013/08/rosendo-desde-el-backstage.jpg'),
(12, '2013', 'Rock', 'Rosendo', 'Vergüenza torera', './music/song12.mp3', 'https://rockcultura.es/wp-content/uploads/2013/08/rosendo-desde-el-backstage.jpg'),
(13, '1992', 'Rap', 'Violadores_del_verso', 'Vicios y virtudes', './music/song13.mp3', 'https://manualbores.files.wordpress.com/2010/03/vdv.jpg'),
(14, '2002', 'Rap', 'Eminem', 'Without me', './music/song14.mp3', 'https://ae01.alicdn.com/kf/HTB1Kd8sJpXXXXcXXFXXq6xXFXXXd/Collar-de-font-b-Eminem-b-font-Slim-Shady-hip-hop-del-vintage-colgante-de-plata.jpg'),
(15, '2012', 'Ska', 'Talco', 'Danza dell\'Autunno Rosa', './music/song15.mp3', 'https://debarbasyboinas.files.wordpress.com/2015/03/1256826280747_f.jpg'),
(16, '1976', 'Heavy_clasico', 'Led_Zeppelin', 'Kashmir', './music/song16.mp3', 'https://yt3.ggpht.com/-k7goiXnV62A/AAAAAAAAAAI/AAAAAAAAAAA/3otxTdn7G6E/s900-c-k-no-mo-rj-c0xffffff/photo.jpg'),
(17, '2017', 'Rap', 'Hard_gz', 'Plomo', './music/song17.mp3', 'http://www.salatunk.com/wp-content/uploads/2016/09/HARD-GZ.jpg'),
(18, '1968', 'Rock', 'The_beatles', 'Yellow submarine', './music/song18.mp3', 'http://www.billboard.com/files/media/the-beatles-bw-portrait-1967-billboard-1548.jpg'),
(19, '1982', 'Rock_pop', 'Queen', 'Under pressure', './music/song19.mp3', 'http://playradio.es/wp-content/uploads/2016/04/queen-ii-photo-session-in-late-1973.jpg'),
(20, '1980', 'Rock_pop', 'Queen', 'Another one bites the dust', './music/song20.m4a', 'http://playradio.es/wp-content/uploads/2016/04/queen-ii-photo-session-in-late-1973.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `__opiniones`
--

CREATE TABLE `__opiniones` (
  `id` bigint(4) NOT NULL,
  `comentario` varchar(2000) NOT NULL,
  `nombre_usuario` varchar(35) NOT NULL,
  `email_usuario` varchar(35) NOT NULL,
  `puntuacion` int(1) NOT NULL,
  `id_cancion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `__opiniones`
--

INSERT INTO `__opiniones` (`id`, `comentario`, `nombre_usuario`, `email_usuario`, `puntuacion`, `id_cancion`) VALUES
(20, 'asdasdasd', 'asdasdasdasdasd', 'asdasdasd', 0, 5),
(21, 'molamuchisimo', 'fasdfasdfsf', 'basdfasf', 3, 1),
(22, 'asdasdasd', 'dasdasd', 'asdasdas', 4, 2),
(23, 'asdasdas1111', '33333', '2222', 4, 3),
(24, 'asdasdad', 'dddd', 'ffff', 5, 4),
(25, 'asdasdasdasd', 'fffff', 'dddd', 0, 1),
(26, 'asdasdasd', 'eeeeeee777777777777', 'ffff', 3, 2),
(27, 'Nirvana son los mejores', 'Aitor Javier Santaeugenia', 'aitor.j.s.m@gmail.com', 2, 5),
(28, 'Motorhead es el mejor grupo de metal de la historia', 'Mongui Lamez Poliz', 'a@gmail.com', 5, 9),
(29, 'Los mejores del mundo', 'aitor.j.s', 'asdasd@gmail.com', 5, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `__canciones`
--
ALTER TABLE `__canciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `__opiniones`
--
ALTER TABLE `__opiniones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `__canciones`
--
ALTER TABLE `__canciones`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `__opiniones`
--
ALTER TABLE `__opiniones`
  MODIFY `id` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
