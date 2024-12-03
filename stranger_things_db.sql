-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2024 a las 04:14:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stranger_things_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(256) NOT NULL,
  `Correo` varchar(84) NOT NULL,
  `Mensaje` varchar(256) NOT NULL,
  `FechaCreado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `temporada_aparicion` int(11) DEFAULT NULL,
  `interpretado_por` varchar(100) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL,
  `habilidades_especiales` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `descripcion`, `temporada_aparicion`, `interpretado_por`, `foto_perfil`, `habilidades_especiales`) VALUES
(1, 'Eleven', 'Eleven, también conocida como Jane Hopper, es una niña con poderes telequinéticos que escapó de un laboratorio secreto. Creció aislada y traumatizada, pero encuentra una familia en el grupo de amigos de Hawkins. Su pasado misterioso y sus habilidades sobrenaturales la convierten en una figura central en la lucha contra las fuerzas del Mundo del Revés.', 1, 'Millie Bobby Brown', 'eleven.jpg', 'Telequinesis, levitación, cierre de portales'),
(2, 'Mike Wheeler', 'Líder del grupo de amigos, Mike es un joven inteligente y leal. Profundamente enamorado de Eleven, juega un papel crucial en su protección y en la búsqueda de su amigo desaparecido, Will Byers. Su conocimiento de los videojuegos y su ingenio lo convierten en un activo valioso para el grupo.', 1, 'Finn Wolfhard', 'mike.jpg', 'Conocimientos de videojuegos, líder nato'),
(3, 'Dustin Henderson', 'Un niño inteligente y entusiasta con un habla arrastrada. Dustin es el científico del grupo y se encarga de construir dispositivos y gadgets para ayudar a sus amigos. A pesar de su apariencia, demuestra ser valiente y leal.', 1, 'Gaten Matarazzo', 'dustin.jpg', 'Inteligencia, habilidades con la tecnología'),
(4, 'Lucas Sinclair', 'Un joven atlético y escéptico, Lucas inicialmente duda de las teorías de sus amigos sobre el Mundo del Revés. Sin embargo, se une a ellos en su búsqueda y demuestra ser un valeroso luchador. Su habilidad con el arco lo convierte en un miembro indispensable del grupo.', 1, 'Caleb McLaughlin', 'lucas.jpg', 'Habilidad con el arco'),
(5, 'Will Byers', 'El primer objetivo del Demogorgon, Will es un joven sensible y artístico. Su desaparición desencadena los eventos de la serie y su regreso al Mundo del Revés lo marca profundamente. A pesar de sus experiencias traumáticas, Will demuestra una gran fuerza interior.', 1, 'Noah Schnapp', 'will.jpg', 'Conexión con el Mundo del Revés'),
(6, 'Steve Harrington', 'El popular chico de la escuela, al principio antagonista, pero luego se convierte en un aliado inesperado del grupo. Steve demuestra ser un protector y un amigo leal, sacrificándose para ayudar a sus amigos.', 1, 'Joe Keery', 'steve.jpg', 'Habilidades atléticas, protector'),
(7, 'Max Mayfield', 'Una nueva estudiante en Hawkins, conocida por su estilo rebelde y su habilidad para el skate. Max se une al grupo de amigos y aporta una nueva dinámica. Su pasado misterioso y su conexión con Billy la hacen un personaje complejo.', 2, 'Sadie Sink', 'max.jpg', 'Habilidad para el skate, espíritu rebelde'),
(8, 'Jim Hopper', 'El jefe de policía de Hawkins, un hombre duro y solitario. Hopper se involucra en la búsqueda de Will Byers y desarrolla una relación paternal con Eleven. Su pasado atormentado lo impulsa a proteger a los niños.', 1, 'David Harbour', 'hopper.jpg', 'Liderazgo, fuerza física'),
(9, 'Joyce Byers', 'La madre de Will Byers, una mujer desesperada y determinada. Joyce hará todo lo posible para encontrar a su hijo y protegerlo de las fuerzas del mal.', 1, 'Winona Ryder', 'joyce.jpg', 'Amor maternal, determinación'),
(10, 'Billy Hargrove', 'El hermanastro abusivo de Max, un joven arrogante y violento. Billy esconde un pasado traumático que lo convierte en una figura compleja y trágica.', 2, 'Dacre Montgomery', 'billy.jpg', 'Fuerza física, natación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

CREATE TABLE `temporadas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_estreno` date DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `cantidad_capitulos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temporadas`
--

INSERT INTO `temporadas` (`id`, `titulo`, `descripcion`, `fecha_estreno`, `portada`, `cantidad_capitulos`) VALUES
(1, 'Stranger Things', 'Un pequeño pueblo de Indiana se ve sacudido por la misteriosa desaparición de Will Byers. Sus amigos, junto a una niña con poderes telequinéticos llamada Eleven, se embarcan en una peligrosa búsqueda para encontrarlo, adentrándose en un mundo paralelo conocido como el Mundo del Revés.', '2016-07-15', 'postertemporada1.jpg', 8),
(2, 'Stranger Things 2', 'Un año después de los eventos de la primera temporada, los habitantes de Hawkins se enfrentan a nuevas amenazas del Mundo del Revés. El grupo de amigos debe volver a unirse para proteger a su pueblo y a sus seres queridos de las fuerzas oscuras que los acechan.', '2017-10-27', 'postertemporada2.jpg', 9),
(3, 'Stranger Things 3', 'Es el verano de 1985 y un nuevo centro comercial llega a Hawkins, trayendo consigo una nueva ola de terror. Los amigos se separan mientras enfrentan sus propios desafíos personales y se unen para detener una amenaza que podría destruir todo lo que conocen.', '2019-07-04', 'postertemporada3.jpg', 8),
(4, 'Stranger Things 4', 'Dividida en dos volúmenes, la cuarta temporada nos lleva a nuevos lugares y presenta nuevos personajes. Eleven pierde sus poderes y el grupo se separa, mientras una nueva criatura terrorífica emerge del Mundo del Revés, poniendo en peligro a todos los que aman.', '2022-05-27', 'postertemporada4.jpg', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(256) NOT NULL,
  `Apellido` varchar(256) NOT NULL,
  `Correo` varchar(84) NOT NULL,
  `Contraseña` varchar(84) NOT NULL,
  `AceptadoTerminos` tinyint(1) NOT NULL,
  `FechaCreado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `AceptadoTerminos`, `FechaCreado`) VALUES
(7, 'Lando', 'Norris', 'landonorris@gmail.com', 'mclaren', 1, '2024-11-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacto_correo` (`Correo`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
