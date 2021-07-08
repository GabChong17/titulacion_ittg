-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-05-2021 a las 17:48:44
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.2.34-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `titulacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avals`
--

CREATE TABLE `avals` (
  `id` bigint UNSIGNED NOT NULL,
  `Justificacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Asesor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Revisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Revisor2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresados`
--

CREATE TABLE `egresados` (
  `id` bigint UNSIGNED NOT NULL,
  `NoControl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `APaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AMaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Carrera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Campus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlanDeEstudios` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `egresados`
--

INSERT INTO `egresados` (`id`, `NoControl`, `Nombre`, `APaterno`, `AMaterno`, `Carrera`, `Campus`, `PlanDeEstudios`, `email`, `Telefono`, `password`, `created_at`, `updated_at`) VALUES
(1, '16270821', 'Luis Gabriel', 'Rincon', 'Chong', 'Sistemas Computacionales', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'gabo.pro3@gmail.com', '9612465121', '$2y$10$ZZ4ba3/LYibpXWmK7pDd4OV4UX/u3Po2edHsWIotXy2hx4QrfQYaq', NULL, NULL),
(2, '19270999', 'Gentian Rosario', 'Muñoz', 'Llaven', 'Logistica', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'gentianmunoz@outlook.es', '9611817136', '$2y$10$zJI4VkAaTMPlxUN2HxFlY.q36owDr3NjlmhMPqpiGr99p/LUJyScq', NULL, NULL),
(3, '16270844', 'Wanersert Jonathan', 'Vazquez', 'Garcia', 'Sistemas Computacionales', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'L16270844@tuxtla.tecnm.mx', '9611985948', '$2y$10$mM2B64TAVwo0V7l1YvICxeS0sAcM1XwvwrCvwrHP0FagxpEdRpSUi', NULL, NULL),
(4, '16270796', 'Hector Alfonso', 'Martinez', 'Vazquez', 'Sistemas Computacionales', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'hectormartinez2v@gmail.com', '9671475452', '$2y$10$h1bPLy.xcrTPkbnTrKw4o.yH3xdlbJ2c1RGYeVaB5FczMTFkhew5i', NULL, NULL),
(5, '16270770', 'Karen Gretchen', 'Galvez', 'Laguna', 'Sistemas Computacionales', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'gretchengalvezlaguna@hotmail.com', '9614553797', '$2y$10$Y.MA2PVeX.a5RMrRVUQ/OOR6ccQFdu.ypdI17XRQ.yw8W3EzdEtyW', NULL, NULL),
(6, '17270172', 'Victor Daniel', 'Solano', 'Hernandez', 'Sistemas Computacionales', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'victor_1996_darojo@hotmail.com', '9612284856', '$2y$10$qRPU03n.rko0EYkHBp2K7u8YIK7yAzt.kdZF7Lsj3D54eA3.FADg2', NULL, NULL),
(7, '16270745', 'Jose Manuel', 'Castellanos', 'Marroquin', 'Sistemas Computacionales', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'josecastmarroquin@gmail.com', '9612086374', '$2y$10$Ge/n4olkud5lMM1x693S1.Jfb6Xi84DK44.CUddDf27xWgAPDt9HG', NULL, NULL),
(8, '17270832', 'Daniel de Jesus', 'Angel', 'Montes', 'Electrica', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'danielmontes652@gmail.com', '9611175328', '$2y$10$g5V02wlasOSc47PYPLTVweMBgBKTuFFcDSgJDBp0S22lBm4ZxW6KC', NULL, NULL),
(9, '14270782 ', 'Einer Alejandro', 'Lara', 'Aguilar', 'Mecanica', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'L14270782@tuxtla.tecnm.mx', '9613138152', '$2y$10$iZGt3R3ZnUBucO5EDxGL6uLaPTHs0rMnCFuEXPwMYxqrAuwbxPn.y', NULL, NULL),
(10, '17271050', 'Jeziel Adonai', 'Penagos', 'Suarez', 'Mecánica', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'L17271050@tuxtla.tecnm.mx', '9613649868', '$2y$10$hJYSGCJppROVAUcQ6PPxRO/IykoD7PQvGj71sSDFqLDgkU1TzmqoG', NULL, NULL),
(11, '16270786', 'Eugenia Abelina', 'Jimenez', 'Aguilar', 'Sistemas Computacionales', 'Instituto Tecnologico de Tuxtla Gutierrez', '1', 'eugeniaabelinaj@gmail.com', '9611010278', '$2y$10$QkshMLQWtx5SWFLD9GJ9yOfA.RPMwz1SXes2ZMTcrXVxtK5GtgyQu', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint UNSIGNED NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `APaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AMaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `Nombre`, `APaterno`, `AMaterno`, `email`, `Foto`, `Telefono`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Lizette Priscila', 'Espinoza', 'Corzo', 'priscila.corzooo@gmail.com', 'nohay.jpg', '9612325427', '$2y$10$N25cP2KNa720UI9fiTDTiO7hnWYx62ad4PH2soZuKECVIZgyMOAgy', NULL, NULL),
(2, 'Itzel Alejandra', 'Hernandez', 'Cuevas', 'itzelhernandez367@gmail.com', 'nohay.jpg', '9613184211', '$2y$10$EGAUT4Ge9UgRIjaBjAqEDeYzGF/1YKzaXzQLcEHWzozt1YLq9C/Ra', NULL, NULL),
(3, 'Manuel Alejandro', 'Vazquez', 'Molina', 'manuel10881@hotmail.com', 'nohay.jpg', '9613875821', '$2y$10$6o5nxkMGKlolpBKLka7GSeVXwO8z5AK7VwvVZIma8riQ/06VUJrfC', NULL, NULL),
(4, 'Jose Fernando', 'Perez', 'Garcia', 'josefernandoperezgarcia98@gmail.com', 'nohay.jpg', '9611652148', '$2y$10$HqRxGbeF4dxN.tx1AiSSbOrG1gTZ5sEppDS5oVt96jH4zd9.Nga2i', NULL, NULL),
(5, 'Eliezer Berlain', 'Gomez', 'Gomez', 'L17270141@tuxtla.tecnm.mx', 'nohay.jpg', '9191336022', '$2y$10$yxzxuWW6Wd4uRjvbIH6sIenWCkK4mbQf2AHDFrmC89l5jP4cEYkeS', NULL, NULL),
(6, 'Jorge', 'Lopez', 'Gomez', 'jorfc.-@gmail.com', 'nohay.jpg', '9611364489', '$2y$10$jmNPhCWe.PkDv1KqzQ3GnOuwFey2zHE0akfem9dCksleNj4jSp7Ym', NULL, NULL),
(7, 'Ramiro de Jesus', 'Balam', 'Lopez', 'L16270739@tecnm.tutla.mx', 'nohay.jpg', '9611229978', '$2y$10$zG3VZqmkwnD5YNRnzt6jwucZoCzxCXR0m1FxBIDdD65Hfl0Jt60kO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jurados`
--

CREATE TABLE `jurados` (
  `id` bigint UNSIGNED NOT NULL,
  `Presidente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Secretario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vocal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Suplente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Corroborado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2021_04_24_082248_create_admins_table', 1),
(18, '2021_04_26_211834_create_egresados_table', 1),
(19, '2021_04_27_042525_create_empleados_table', 1),
(20, '2021_04_27_135508_create_plans_table', 1),
(21, '2021_04_27_135824_create_avals_table', 1),
(22, '2021_04_27_135907_create_requisitos_table', 1),
(23, '2021_04_27_135937_create_jurados_table', 1),
(24, '2021_04_27_140046_create_opcions_table', 1),
(25, '2021_04_27_140132_create_requisitosos_table', 1),
(26, '2021_04_27_140212_create_tramites_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id` bigint UNSIGNED NOT NULL,
  `Planes_id` bigint UNSIGNED NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id`, `Planes_id`, `Nombre`, `Descripcion`, `created_at`, `updated_at`) VALUES
(4, 1, 'Tesis de 93', 'Trabajos que se deben desarrollar...', NULL, NULL),
(5, 1, 'Texto o prototipo 93', '....', NULL, NULL),
(6, 1, 'proyecto 93', '....', NULL, NULL),
(7, 2, 'TESIS de 2004', 'TRABAJOS....', NULL, NULL),
(8, 2, 'PROYECTO 2004', '....', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans`
--

CREATE TABLE `plans` (
  `id` bigint UNSIGNED NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plans`
--

INSERT INTO `plans` (`id`, `Nombre`, `created_at`, `updated_at`) VALUES
(1, 'Plan 93', NULL, NULL),
(2, 'Plan 2004', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos`
--

CREATE TABLE `requisitos` (
  `id` bigint UNSIGNED NOT NULL,
  `Concepto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Opciones_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `requisitos`
--

INSERT INTO `requisitos` (`id`, `Concepto`, `Descripcion`, `Opciones_id`, `created_at`, `updated_at`) VALUES
(1, 'oBJETIVO', 'QUE HACE TU TESIS 93', 4, NULL, NULL),
(2, 'INDICE', 'DE QUE TRATARA 93', 4, NULL, NULL),
(3, 'BIBLIOGRAFIA', 'QUE CONSULTARAS 93....', 4, NULL, NULL),
(8, 'OBJ', 'XXX', 5, NULL, NULL),
(9, 'OBJETIVO', 'QUE HACE TU PROYECTO DE INVESTIGACION', 6, NULL, NULL),
(10, 'INDICE', 'INDICE DE QUE TRATA TU PROYECTO DE INVESTIGACION', 6, NULL, NULL),
(11, 'BIBLIOGRAFIA', 'QUE CONSULTASTE PARA TU PROYECTO DE INVETIGACION', 6, NULL, NULL),
(12, 'obj', 'obj de la tesis del 2004', 7, NULL, NULL),
(13, 'ind', 'ind de la tesis 2004', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos_cumplidos`
--

CREATE TABLE `requisitos_cumplidos` (
  `id` bigint UNSIGNED NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id` bigint UNSIGNED NOT NULL,
  `requisitos_id` bigint UNSIGNED NOT NULL,
  `opciones_id` bigint UNSIGNED NOT NULL,
  `egresado_id` bigint UNSIGNED NOT NULL,
  `avales_id` bigint UNSIGNED NOT NULL,
  `jurado_id` bigint UNSIGNED NOT NULL,
  `opcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liberacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_recepcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_recepcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar_recepcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cita` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avals`
--
ALTER TABLE `avals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `egresados`
--
ALTER TABLE `egresados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jurados`
--
ALTER TABLE `jurados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opcions_planes_id_foreign` (`Planes_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requisitosos_opciones_id_foreign` (`Opciones_id`);

--
-- Indices de la tabla `requisitos_cumplidos`
--
ALTER TABLE `requisitos_cumplidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tramites_requisitos_id_foreign` (`requisitos_id`),
  ADD KEY `tramites_opciones_id_foreign` (`opciones_id`),
  ADD KEY `tramites_egresado_id_foreign` (`egresado_id`),
  ADD KEY `tramites_avales_id_foreign` (`avales_id`),
  ADD KEY `tramites_jurado_id_foreign` (`jurado_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `avals`
--
ALTER TABLE `avals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `egresados`
--
ALTER TABLE `egresados`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jurados`
--
ALTER TABLE `jurados`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `requisitos_cumplidos`
--
ALTER TABLE `requisitos_cumplidos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opcions_planes_id_foreign` FOREIGN KEY (`Planes_id`) REFERENCES `plans` (`id`);

--
-- Filtros para la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD CONSTRAINT `requisitosos_opciones_id_foreign` FOREIGN KEY (`Opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD CONSTRAINT `tramites_avales_id_foreign` FOREIGN KEY (`avales_id`) REFERENCES `avals` (`id`),
  ADD CONSTRAINT `tramites_egresado_id_foreign` FOREIGN KEY (`egresado_id`) REFERENCES `egresados` (`id`),
  ADD CONSTRAINT `tramites_jurado_id_foreign` FOREIGN KEY (`jurado_id`) REFERENCES `jurados` (`id`),
  ADD CONSTRAINT `tramites_opciones_id_foreign` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `tramites_requisitos_id_foreign` FOREIGN KEY (`requisitos_id`) REFERENCES `requisitos_cumplidos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
