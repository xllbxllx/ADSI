-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2019 a las 17:33:23
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi1804230`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gyms`
--

CREATE TABLE `gyms` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gyms`
--

INSERT INTO `gyms` (`id`, `name`) VALUES
(1, 'Ciudad Paleta'),
(2, 'Ciudad Celeste'),
(3, 'Ciudad Fucsia'),
(4, 'Ciudad Azulona'),
(5, 'Ciudad Olivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `nt1` float NOT NULL,
  `nt2` float NOT NULL,
  `nt3` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `num_pokemons`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `num_pokemons` (
`Number_Pokemons` bigint(21)
,`Name_trainer` varchar(32)
,`name_Gym` varchar(32)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `strength` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pokemons`
--

INSERT INTO `pokemons` (`id`, `name`, `type`, `strength`, `stamina`, `speed`, `accuracy`, `trainer_id`) VALUES
(1, 'pikachu', 'electrico', 495, 75, 545, 70, 1),
(2, 'charmander', 'fuego', 95, 70, 80, 82, 1),
(3, 'bulbasaur', 'planta', 80, 88, 70, 75, 1),
(4, 'squirtle', 'agua', 70, 90, 75, 90, 1),
(5, 'snorlax', 'normal', 180, 320, 50, 180, 2),
(6, 'vaporeon', 'agua', 180, 260, 90, 180, 3),
(7, 'lapras', 'agua', 1111, 255, 100, 180, 2),
(8, 'blastoip', 'agua', 724, 150, 70, 222, 3),
(9, 'golem', 'roca', 500, 100, 80, 150, 2),
(10, 'dragonite', 'dragon', 900, 250, 120, 182, 3),
(11, 'exsecutor', 'planta', 596, 190, 90, 232, 2),
(12, 'omastar', 'roca', 1500, 140, 112, 202, 5),
(13, 'mulk', 'veneno', 1070, 210, 112, 180, 5),
(15, 'poLiwag', 'agua', 815, 80, 70, 122, 4),
(16, 'monkey', 'pelea', 563, 80, 70, 122, 3),
(17, 'magnamite', 'electrico', 750, 50, 40, 128, 4),
(18, 'pidgey', 'normal', 818, 80, 95, 90, 3),
(19, 'gastiny', 'fantasma', 750, 60, 60, 82, 4),
(20, 'rattata', 'normal', 810, 1505, 65, 90, 3),
(21, 'fliplas', 'Roca', 1755, 1760, 1785, 1730, 1),
(22, 'onix', 'Roca', 505, 335, 415, 435, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `level` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `level`, `gym_id`) VALUES
(1, 'Ash Ketchum', 7, 1),
(2, 'Misty', 4, 2),
(3, 'Brock', 6, 3),
(4, 'Serena', 4, 4),
(5, 'Oak', 9, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(64) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(32) NOT NULL,
  `photo` varchar(64) DEFAULT 'public/imgs/nophoto.png',
  `role` varchar(16) DEFAULT 'Student',
  `password` varchar(64) NOT NULL,
  `status` varchar(16) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `names`, `birthdate`, `email`, `photo`, `role`, `password`, `status`) VALUES
(1, 'Jeremias Arango', '1990-10-10', 'jeremias@misena.edu.co', 'public/imgs/nophoto.png', 'Teacher', '793741d54b00253006453742ad4ed534', 'Active'),
(2, 'Maria Antonia', '2000-08-08', 'mariaa@misena.edu.co', 'public/imgs/nophoto.png', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(3, 'Pocholo Ramirez', '1999-05-05', 'pocho@misena.edu.co', 'public/imgs/nophoto.png', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Inactive'),
(4, 'Mario Baracus', '1998-10-08', 'mariobara@misena.edu.co', 'public/imgs/nophoto.png', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(5, 'Federico Garcia', '2000-11-14', 'fede@misena.edu.co', 'public/imgs/nophoto.png', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(6, 'Norberto Pelufo', '1990-10-19', 'norbert@misena.edu.co', 'public/imgs/nophoto.png', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Inactive'),
(7, 'Clemencia Ruiz', '1999-09-07', 'clemen@misena.edu.co', 'public/imgs/nophoto.png', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(8, 'Orlando Ortiz', '1997-12-26', 'orlando@misena.edu.co', 'public/imgs/nophoto.png', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(9, 'Clara Rueda', '1998-10-22', 'clara@misena.edu.co', 'public/imgs/1574781246.jpg', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Inactive'),
(10, 'Riahana Molina', '1988-10-12', 'riahana@misena.edu.co', 'public/imgs/1574781437.jpg', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(11, 'Andres Valderrama', '1995-08-09', 'valde@misena.edu.co', 'public/imgs/1574783443.jpg', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(12, 'Leopoldo Gates', '1990-09-09', 'leopol@misena.edu.co', 'public/imgs/1574785507.jpg', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active'),
(13, 'Joker Trump', '1990-04-05', 'joker@misena.edu.co', 'public/imgs/1574785655.jpg', 'Student', 'e4e4564027d73a4325024d948d167e93', 'Active');

-- --------------------------------------------------------

--
-- Estructura para la vista `num_pokemons`
--
DROP TABLE IF EXISTS `num_pokemons`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `num_pokemons`  AS  select count(`pokemons`.`id`) AS `Number_Pokemons`,`trainers`.`name` AS `Name_trainer`,`gyms`.`name` AS `name_Gym` from ((`gyms` left join `trainers` on(`gyms`.`id` = `trainers`.`gym_id`)) left join `pokemons` on(`trainers`.`id` = `pokemons`.`trainer_id`)) group by `trainers`.`id` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indices de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indices de la tabla `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gym_id` (`gym_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gyms`
--
ALTER TABLE `gyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);

--
-- Filtros para la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD CONSTRAINT `pokemons_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`);

--
-- Filtros para la tabla `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainers_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gyms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
