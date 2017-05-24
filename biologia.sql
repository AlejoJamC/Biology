-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2017 a las 17:12:05
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenido`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_administrador`
--

CREATE TABLE `curso_administrador` (
  `id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_contenido`
--

CREATE TABLE `curso_contenido` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `contenido_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_estudiantes`
--

CREATE TABLE `curso_estudiantes` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(250) NOT NULL,
  `sugerencia` varchar(250) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questionario`
--

CREATE TABLE `questionario` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questionario_preguntas`
--

CREATE TABLE `questionario_preguntas` (
  `id` int(11) NOT NULL,
  `questionario_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `respuesta` varchar(250) NOT NULL,
  `correcta` bit(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_estudiantes`
--

CREATE TABLE `respuestas_estudiantes` (
  `id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_questionario`
--

CREATE TABLE `resultado_questionario` (
  `id` int(11) NOT NULL,
  `questionario_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `aprobado` bit(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`) VALUES
(1, 'Estudiante'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `estado` bit(1) DEFAULT b'0',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `tipo_id`, `estado`) VALUES
(1, 'Justin Andres', 'Rodriguez Perez', 'justinrodriguez@hotmail.com', 'justin123', 1, NULL),
(2, 'Samuel', 'Forero Pardo', 'samuelforero@hotmail.com', 'samuel345', 1, NULL),
(3, 'Angie Lorena', 'Forero Pardo', 'angielorena@hotmail.com', 'angie567', 1, NULL),
(4, 'Marian Gabriela', 'Piñerez Perez', 'marianpiñerez@hotmail.com', 'mariam789', 1, NULL),
(5, 'Jonathan Andres', 'Rodriguez Perez', 'jonathanrodriguez@hotmail.com', 'jonathan901', 2, NULL),
(6, 'Javier Dario ', 'Mayorga Amorocho', 'javierMayorga@hotmail.com', 'javier123', 1, NULL),
(7, 'Diego Andres', 'Serna Lopez', 'diegoserna@hotmail.com', 'diego345', 1, NULL),
(8, 'Johan Camilo', 'Perez Rodriguez', 'johanperez@hotmail.com', 'johan567', 1, NULL),
(9, 'Gloria', 'Arcieniegas Ortiz', 'gloriaarciniegas@hotmail.com', 'gloria789', 2, NULL),
(10, 'Yuly Adriana', 'Gonzalez Castro', 'yulygonzalez00@hotmail.com', 'yuly901', 1, NULL),
(11, 'Yuly Carolina', 'Mantilla Celis', 'yulymantilla11@hotmail.com', 'yuly109', 1, NULL),
(12, 'Margy Yulieth', 'Rodriguez Pardo', 'margyrodriguez02@hotmail.com', 'margy765', 1, NULL),
(13, 'Karol Estefany', 'Meneces Chacon', 'karolmeneces01@hotmail.com', 'karol543', 1, NULL),
(14, 'Valentina', 'Abril Florez', 'valentinaflorez0@hotmail.com', 'valentina321', 1, NULL),
(15, 'Maria Camila ', 'Fajardo Gutierrez', 'mariafajardog@hotmail.cm', 'maria111', 1, NULL),
(16, 'Dana Valentina ', 'Rincon Rueda', 'Danarincon@hotmail.com', 'dana222', 1, NULL),
(17, 'Carlos Fernando ', 'Franco Avila', 'carlosfranco@hotmail.com', 'carlos333', 1, NULL),
(18, 'Maria Paula', 'Ortiz Cruz', 'mariaortiz123@hotmail.com', 'maria444', 1, NULL),
(19, 'Fredy Raul', 'Cala Ayala', 'fredycalaa@hotmail.com', 'fredy555', 1, NULL),
(20, 'Farid ', 'Andrade Araque', 'faridandrade@hotmail.com', 'farid777', 1, NULL),
(21, 'Jose Alexander', 'Muñoz Calderon', 'josemuñuzc@hotmail.com', 'jose888', 1, NULL),
(22, 'Esther ', 'Herrera Ortiz', 'estherherrera0@hotmail.com', 'esther999', 1, NULL),
(23, 'Luz Dary', 'Amorocho Silva', 'luzamorocho@hotmail.com', 'luz901', 2, NULL),
(24, 'Diego Fernando', 'Sanin Lopez', 'diegosanin@hotmail.com', 'diego902', 1, NULL),
(25, 'Tatiana Carolina', 'Paez Rincon', 'tatianapaez@hotmail.com', 'tatina903', 1, NULL),
(26, 'Monica Liseth', 'Diaz Suarez', 'monicadiazs@hotmail.com', 'monica904', 1, NULL),
(27, 'Jhonatan Javier', 'Ruiz Moreno', 'jhonatnaruizm@hotmail.com', 'jhonatan905', 1, NULL),
(28, 'Sergio Andres', 'Galviz Mendez', 'sergiogalvizm@hotmail.com', 'sergio906', 1, NULL),
(29, 'Giovanny Smith', 'Cataño Medina', 'giovannycataño@hotmail.com', 'giovanny907', 1, NULL),
(30, 'Jose Alejandro', 'Pinzon Ayala', 'josepinzona@hotmail.com', 'jose908', 1, NULL),
(31, 'Erika Johana ', 'Rosas Ortiz', 'erikarosas@hotmail.com', 'erika909', 1, NULL),
(32, 'Jenny Liseth ', 'Perez Bustos', 'jennyperez@hotmail.com', 'jenny101', 1, NULL),
(33, 'Mary Sofia', 'Camargo Cuadros', 'marycamargo@hotmail.com', 'mary102', 1, NULL),
(34, 'Sandy Johana ', 'Sanabria Cuadros', 'sandysanabria@hotmail.com', 'sandy103', 1, NULL),
(35, 'Olga Patricia', 'Neyra Suarez', 'olganeyra@hotmail.com', 'olga104', 1, NULL),
(36, 'Luz Eugenia', 'Agon Rueda', 'luzagon@hotmail.com', 'luz105', 1, NULL),
(37, 'Roger Fabian ', 'Arenas Merchan', 'rogerarenas@hotmail.com', 'roger106', 1, NULL),
(38, 'Margarita ', 'Perez Hernandez', 'maegaritaperez@hotmail.com', 'margarita107', 1, NULL),
(39, 'Liliana ', 'Carvajal Pinto', 'lilianacarvajal@hotmail.com', 'liliana108', 1, NULL),
(40, 'Wendy katerine', 'Urueta Atencio', 'wendyurueta@hotmail.com', 'wendy109', 1, NULL),
(41, 'Viviana ', 'Sisa Veira', 'vivianasisa@hotmail.com', 'viviana201', 1, NULL),
(42, 'Analy Siomara', 'Bueno Rios', 'analybueno@hotmail.com', 'analy201', 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cursos_usuario_idx` (`usuario_id`);

--
-- Indices de la tabla `curso_administrador`
--
ALTER TABLE `curso_administrador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_curso_profesor_idx` (`curso_id`),
  ADD KEY `FK_profesor_curso_idx` (`profesor_id`);

--
-- Indices de la tabla `curso_contenido`
--
ALTER TABLE `curso_contenido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_curso_contenido_idx` (`curso_id`),
  ADD KEY `FK_contenido_curso_idx` (`contenido_id`);

--
-- Indices de la tabla `curso_estudiantes`
--
ALTER TABLE `curso_estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_curso_estudiante_idx` (`curso_id`),
  ADD KEY `FK_estudiante_curso_idx` (`estudiante_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questionario_preguntas`
--
ALTER TABLE `questionario_preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_questionario_preguntas_idx` (`questionario_id`),
  ADD KEY `FK_pregunta_questionario_idx` (`pregunta_id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_respuesta_pregunta_idx` (`pregunta_id`);

--
-- Indices de la tabla `respuestas_estudiantes`
--
ALTER TABLE `respuestas_estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_respuesta_seleccion_idx` (`pregunta_id`),
  ADD KEY `FK_estudiante_seleccion_idx` (`estudiante_id`);

--
-- Indices de la tabla `resultado_questionario`
--
ALTER TABLE `resultado_questionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_questionario_resultado_idx` (`questionario_id`),
  ADD KEY `FK_estudiante_resultado_idx` (`estudiante_id`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sesion_usuario_idx` (`usuario_id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuario_tipo_idx` (`tipo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `curso_administrador`
--
ALTER TABLE `curso_administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso_contenido`
--
ALTER TABLE `curso_contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso_estudiantes`
--
ALTER TABLE `curso_estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `questionario`
--
ALTER TABLE `questionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `questionario_preguntas`
--
ALTER TABLE `questionario_preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuestas_estudiantes`
--
ALTER TABLE `respuestas_estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `resultado_questionario`
--
ALTER TABLE `resultado_questionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `FK_cursos_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_administrador`
--
ALTER TABLE `curso_administrador`
  ADD CONSTRAINT `FK_curso_profesor` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_profesor_curso` FOREIGN KEY (`profesor_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_contenido`
--
ALTER TABLE `curso_contenido`
  ADD CONSTRAINT `FK_contenido_curso` FOREIGN KEY (`contenido_id`) REFERENCES `contenido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_curso_contenido` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_estudiantes`
--
ALTER TABLE `curso_estudiantes`
  ADD CONSTRAINT `FK_curso_estudiante` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_estudiante_curso` FOREIGN KEY (`estudiante_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `questionario_preguntas`
--
ALTER TABLE `questionario_preguntas`
  ADD CONSTRAINT `FK_pregunta_questionario` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_questionario_preguntas` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `FK_respuesta_pregunta` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuestas_estudiantes`
--
ALTER TABLE `respuestas_estudiantes`
  ADD CONSTRAINT `FK_estudiante_seleccion` FOREIGN KEY (`estudiante_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_respuesta_seleccion` FOREIGN KEY (`pregunta_id`) REFERENCES `respuestas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resultado_questionario`
--
ALTER TABLE `resultado_questionario`
  ADD CONSTRAINT `FK_estudiante_resultado` FOREIGN KEY (`estudiante_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_questionario_resultado` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `FK_sesion_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_usuario_tipo` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
