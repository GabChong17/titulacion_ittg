-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2021 a las 09:00:06
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

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
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `Justificacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Asesor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Revisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Revisor2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tramite_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresados`
--

CREATE TABLE `egresados` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jurados`
--

CREATE TABLE `jurados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Presidente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Secretario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vocal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Suplente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Corroborado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tramites_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `Planes_id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `Concepto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Opciones_id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tramite_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opcion_id` bigint(20) UNSIGNED DEFAULT NULL,
  `egresado_id` bigint(20) UNSIGNED DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liberacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_recepcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hora_recepcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugar_recepcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cita` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`id`, `opcion_id`, `egresado_id`, `estado`, `liberacion`, `fecha_recepcion`, `hora_recepcion`, `lugar_recepcion`, `Foto`, `cita`, `created_at`, `updated_at`) VALUES
(3, 5, 4, 'generado el tramite, cita agendada, ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-18 21:13:38', '2021-05-18 21:13:38'),
(4, 5, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-18 21:20:08', '2021-05-18 21:20:08'),
(5, 6, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-18 21:21:35', '2021-05-18 21:21:35'),
(6, 6, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-18 21:22:26', '2021-05-18 21:22:26'),
(7, 5, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-18 21:23:26', '2021-05-18 21:23:26'),
(8, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:44:19', '2021-05-25 09:44:19'),
(9, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:44:32', '2021-05-25 09:44:32'),
(10, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:44:51', '2021-05-25 09:44:51'),
(11, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:46:13', '2021-05-25 09:46:13'),
(12, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:46:18', '2021-05-25 09:46:18'),
(13, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:46:24', '2021-05-25 09:46:24'),
(14, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:47:13', '2021-05-25 09:47:13'),
(15, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:55:08', '2021-05-25 09:55:08'),
(16, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:55:10', '2021-05-25 09:55:10'),
(17, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:55:27', '2021-05-25 09:55:27'),
(18, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 09:58:43', '2021-05-25 09:58:43'),
(19, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:09:07', '2021-05-25 10:09:07'),
(20, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:09:13', '2021-05-25 10:09:13'),
(21, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:09:31', '2021-05-25 10:09:31'),
(22, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:10:12', '2021-05-25 10:10:12'),
(23, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:10:15', '2021-05-25 10:10:15'),
(24, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:10:17', '2021-05-25 10:10:17'),
(25, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:10:23', '2021-05-25 10:10:23'),
(26, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:19:15', '2021-05-25 10:19:15'),
(27, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:21:04', '2021-05-25 10:21:04'),
(28, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:21:05', '2021-05-25 10:21:05'),
(29, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:23:01', '2021-05-25 10:23:01'),
(30, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:23:23', '2021-05-25 10:23:23'),
(31, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:26:54', '2021-05-25 10:26:54'),
(32, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:27:18', '2021-05-25 10:27:18'),
(33, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:27:29', '2021-05-25 10:27:29'),
(34, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:27:50', '2021-05-25 10:27:50'),
(35, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:28:07', '2021-05-25 10:28:07'),
(36, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:28:15', '2021-05-25 10:28:15'),
(37, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:32:36', '2021-05-25 10:32:36'),
(38, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:38:52', '2021-05-25 10:38:52'),
(39, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:39:19', '2021-05-25 10:39:19'),
(40, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:39:23', '2021-05-25 10:39:23'),
(41, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:39:46', '2021-05-25 10:39:46'),
(42, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:41:52', '2021-05-25 10:41:52'),
(43, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:42:05', '2021-05-25 10:42:05'),
(44, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:43:24', '2021-05-25 10:43:24'),
(45, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:43:35', '2021-05-25 10:43:35'),
(46, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:43:55', '2021-05-25 10:43:55'),
(47, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:44:59', '2021-05-25 10:44:59'),
(48, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:45:17', '2021-05-25 10:45:17'),
(49, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:45:21', '2021-05-25 10:45:21'),
(50, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:46:33', '2021-05-25 10:46:33'),
(51, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:46:40', '2021-05-25 10:46:40'),
(52, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:49:09', '2021-05-25 10:49:09'),
(53, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:49:14', '2021-05-25 10:49:14'),
(54, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:51:04', '2021-05-25 10:51:04'),
(55, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:51:37', '2021-05-25 10:51:37'),
(56, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:53:34', '2021-05-25 10:53:34'),
(57, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:53:54', '2021-05-25 10:53:54'),
(58, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:54:18', '2021-05-25 10:54:18'),
(59, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:54:37', '2021-05-25 10:54:37'),
(60, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:55:24', '2021-05-25 10:55:24'),
(61, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:55:27', '2021-05-25 10:55:27'),
(62, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:55:31', '2021-05-25 10:55:31'),
(63, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 10:55:37', '2021-05-25 10:55:37'),
(64, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:05:38', '2021-05-25 11:05:38'),
(65, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:07:44', '2021-05-25 11:07:44'),
(66, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:09:31', '2021-05-25 11:09:31'),
(67, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:10:40', '2021-05-25 11:10:40'),
(68, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:10:59', '2021-05-25 11:10:59'),
(69, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:12:05', '2021-05-25 11:12:05'),
(70, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:12:52', '2021-05-25 11:12:52'),
(71, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:13:07', '2021-05-25 11:13:07'),
(72, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:17:19', '2021-05-25 11:17:19'),
(73, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:20:48', '2021-05-25 11:20:48'),
(74, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:22:06', '2021-05-25 11:22:06'),
(75, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:22:16', '2021-05-25 11:22:16'),
(76, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:24:02', '2021-05-25 11:24:02'),
(77, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:24:56', '2021-05-25 11:24:56'),
(78, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:31:11', '2021-05-25 11:31:11'),
(79, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:31:25', '2021-05-25 11:31:25'),
(80, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:31:33', '2021-05-25 11:31:33'),
(81, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:32:02', '2021-05-25 11:32:02'),
(82, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:32:08', '2021-05-25 11:32:08'),
(83, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:32:15', '2021-05-25 11:32:15'),
(84, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:32:21', '2021-05-25 11:32:21'),
(85, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:33:04', '2021-05-25 11:33:04'),
(86, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:33:10', '2021-05-25 11:33:10'),
(87, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:33:39', '2021-05-25 11:33:39'),
(88, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:36:21', '2021-05-25 11:36:21'),
(89, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:36:38', '2021-05-25 11:36:38'),
(90, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:37:47', '2021-05-25 11:37:47'),
(91, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:39:34', '2021-05-25 11:39:34'),
(92, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:50:04', '2021-05-25 11:50:04'),
(93, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:51:38', '2021-05-25 11:51:38'),
(94, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:51:49', '2021-05-25 11:51:49'),
(95, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:52:19', '2021-05-25 11:52:19'),
(96, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:53:00', '2021-05-25 11:53:00'),
(97, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:54:25', '2021-05-25 11:54:25'),
(98, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:54:39', '2021-05-25 11:54:39'),
(99, NULL, NULL, NULL, NULL, '2021-05-06T01:56', NULL, NULL, NULL, '2021-05-13 00:00:00', NULL, NULL),
(100, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-25 11:58:42', '2021-05-25 11:58:42'),
(101, NULL, NULL, NULL, NULL, '2021-05-06T01:56', NULL, NULL, NULL, '2021-05-13 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_avals_tramites1_idx` (`tramite_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jurados_tramites1_idx` (`tramites_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_requisitos_cumplidos_tramites1_idx` (`tramite_id`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tramites_egresado_id_foreign` (`egresado_id`),
  ADD KEY `tramites_opciones_id_foreign` (`opcion_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `avals`
--
ALTER TABLE `avals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `egresados`
--
ALTER TABLE `egresados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jurados`
--
ALTER TABLE `jurados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `requisitos_cumplidos`
--
ALTER TABLE `requisitos_cumplidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avals`
--
ALTER TABLE `avals`
  ADD CONSTRAINT `fk_avals_tramites1` FOREIGN KEY (`tramite_id`) REFERENCES `tramites` (`id`);

--
-- Filtros para la tabla `jurados`
--
ALTER TABLE `jurados`
  ADD CONSTRAINT `fk_jurados_tramites1` FOREIGN KEY (`tramites_id`) REFERENCES `tramites` (`id`);

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
-- Filtros para la tabla `requisitos_cumplidos`
--
ALTER TABLE `requisitos_cumplidos`
  ADD CONSTRAINT `fk_requisitos_cumplidos_tramites1` FOREIGN KEY (`tramite_id`) REFERENCES `tramites` (`id`);

--
-- Filtros para la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD CONSTRAINT `tramites_egresado_id_foreign` FOREIGN KEY (`egresado_id`) REFERENCES `egresados` (`id`),
  ADD CONSTRAINT `tramites_opciones_id_foreign` FOREIGN KEY (`opcion_id`) REFERENCES `opciones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
