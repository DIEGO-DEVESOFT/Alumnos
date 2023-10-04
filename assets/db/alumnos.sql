DROP DATABASE alumnos
--
-- Base de datos: `alumnos`
--

CREATE DATABASE alumnos
USE alumnos
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Ciclo_escolar` int(50) NOT NULL,
  `Fecha` varchar(100) NOT NULL,
  `Nombre_completo` varchar(200) NOT NULL,
  `Apellido_paterno` varchar(100) NOT NULL,
  `Apellido_materno` varchar(100) NOT NULL,
  `Genero` varchar(100) NOT NULL,
  `Fecha_nacimiento` varchar(50) NOT NULL,
  `Curp` varchar(100) NOT NULL,
  `Tipo_sangre` varchar(50) NOT NULL,
  `Discapacidad` varchar(100) NOT NULL,
  `Municipio` varchar(100) NOT NULL,
  `Colonia` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Ciclo_escolar`);

