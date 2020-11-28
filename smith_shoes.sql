-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2020 a las 19:47:09
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smith_shoes`
--

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
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `name_marca` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `name_marca`, `created_at`, `updated_at`) VALUES
(8, 'Nike', '2020-10-27 01:42:29', '2020-10-30 22:39:42'),
(9, 'Puma', '2020-10-27 01:42:39', '2020-10-27 22:57:36'),
(10, 'Adidas', '2020-10-27 01:42:45', '2020-10-27 22:57:47'),
(13, 'Enzotec', '2020-10-30 22:39:52', '2020-10-30 22:40:11');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Estructura de tabla para la tabla `portafolios`
--

CREATE TABLE `portafolios` (
  `id` int(11) NOT NULL,
  `name_zapatilla` varchar(100) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `portafolios`
--

INSERT INTO `portafolios` (`id`, `name_zapatilla`, `photo`, `updated_at`, `created_at`) VALUES
(10, 'nike rojas  medio blanco en el medio chulo rojo dama', '1603917162-nike rojas  medio blanco en el medio chulo rojo dama.jpeg', '2020-10-28 20:32:42', '2020-10-21 16:22:36'),
(11, 'Racer Caballero', '1603917190-Racer Caballero.jpeg', '2020-10-28 20:33:10', '2020-10-21 16:22:36'),
(12, 'nadidas lineas blancas suela dorada dama', '1603917210-nadidas lineas blancas suela dorada dama.jpeg', '2020-10-28 20:33:30', '2020-10-21 16:22:36'),
(13, 'Nike Divala Negra', '1603917239-Nike Divala Negra.jpeg', '2020-10-28 20:33:59', '2020-10-21 16:22:37'),
(14, 'nike blanco de riata', '1603917261-nike blanco de riata.jpeg', '2020-10-28 20:34:21', '2020-10-21 16:22:37'),
(15, 'pumas blanca logo negro dama', '1603917282-pumas blanca logo negro dama.jpeg', '2020-10-28 20:34:42', '2020-10-21 16:22:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `name_zapatilla` varchar(100) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `name_zapatilla`, `photo`, `updated_at`, `created_at`) VALUES
(9, 'nike azul suela blanca', '1603917298-nike azul suela blanca.jpeg', '2020-10-28 20:34:58', '2020-10-21 16:26:21'),
(10, 'adidas blancas lineas rojas zuela dorada dama', '1603917312-adidas blancas lineas rojas zuela dorada dama.jpeg', '2020-10-28 20:35:12', '2020-10-21 16:26:27'),
(11, 'nike negras suela roja chulo blanco dama', '1603917350-nike negras suela roja chulo blanco dama.jpeg', '2020-10-28 20:35:50', '2020-10-21 16:26:37'),
(12, 'pumas rojas logo balnco dama', '1603917420-pumas rojas logo balnco dama.jpeg', '2020-10-28 20:37:00', '2020-10-21 16:26:37'),
(13, 'puma negra  suela diferente dama', '1603917442-puma negra  suela diferente dama.jpeg', '2020-10-28 20:37:22', '2020-10-21 16:26:37'),
(14, 'Racer  vinotinto', '1603917468-Racer  vinotinto.jpeg', '2020-10-28 20:37:48', '2020-10-21 16:26:38');

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rulbert', 'nicolaschamorro@cisde.co', NULL, '$2y$10$0iIHkcd5Zk9OATvtbJiBl.plllElARb7VlTgZ4FG420MJZn4GGoKO', 'zXQqOeDv8xfAZU5ZpWnj3Sd1BA1YbFhgOPDqqogHFI9mNb4tHMy2bZ29tWpQ', '2020-10-28 13:22:16', '2020-10-28 15:19:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatillas`
--

CREATE TABLE `zapatillas` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `name_zapatilla` varchar(100) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zapatillas`
--

INSERT INTO `zapatillas` (`id`, `id_marca`, `name_zapatilla`, `photo`, `created_at`, `updated_at`) VALUES
(146, 8, 'Adidas Racer Azul', '1603916360-Adidas Racer Azul.jpeg', '2020-10-27 16:03:03', '2020-10-28 20:19:25'),
(147, 10, 'adidas negra lineas blancas', '1603916318-adidas negra lineas blancas.jpeg', '2020-10-27 17:13:30', '2020-10-28 20:18:38'),
(148, 10, 'adidas blancas lineas rojas zuela dorada dama', '1603916219-adidas blancas lineas rojas zuela dorada dama.jpeg', '2020-10-27 17:14:07', '2020-10-28 20:16:59'),
(149, 10, 'Adidas Racer Gris', '1603916393-Adidas Racer Gris.jpeg', '2020-10-28 20:19:53', '2020-10-28 20:19:53'),
(150, 10, 'Adidas racer toda negra suela blanca', '1603916427-Adidas racer toda negra suela blanca.jpeg', '2020-10-28 20:20:27', '2020-10-28 20:20:27'),
(151, 10, 'Adidas Racer', '1603916458-Adidas Racer.jpeg', '2020-10-28 20:20:58', '2020-10-28 20:20:58'),
(152, 10, 'adidas lineas blancas suela dorada dama', '1603916511-nadidas lineas blancas suela dorada dama.jpeg', '2020-10-28 20:21:51', '2020-10-28 20:21:51'),
(153, 8, 'nike azul suela blanca', '1603916569-nike azul suela blanca.jpeg', '2020-10-28 20:22:49', '2020-10-28 20:22:49'),
(154, 8, 'nike blanca total dama', '1603916586-nike blanca total dama.jpeg', '2020-10-28 20:23:06', '2020-10-28 20:23:06'),
(155, 8, 'nike blancas suela negra dama', '1603916603-nike blancas suela negra dama.jpeg', '2020-10-28 20:23:23', '2020-10-28 20:23:23'),
(156, 8, 'nike blanco de riata', '1603916617-nike blanco de riata.jpeg', '2020-10-28 20:23:37', '2020-10-28 20:23:37'),
(157, 8, 'nike de riata', '1603916639-nike de riata.jpeg', '2020-10-28 20:23:59', '2020-10-28 20:23:59'),
(158, 8, 'Nike Divala Negra', '1603916655-Nike Divala Negra.jpeg', '2020-10-28 20:24:15', '2020-10-28 20:24:15'),
(159, 8, 'nike negra chulo blanco dama', '1603916780-nike negra dama.jpeg', '2020-10-28 20:24:30', '2020-10-28 20:26:20'),
(160, 8, 'nike negra chulo dorado dama', '1603916694-nike negra chulo dorado dama.jpeg', '2020-10-28 20:24:54', '2020-10-28 20:24:54'),
(161, 8, 'nike negra suela blanca dama', '1603916818-nike negra suela blanca dama.jpeg', '2020-10-28 20:26:58', '2020-10-28 20:26:58'),
(162, 8, 'nike negra tela dama', '1603916843-nike negra tela dama.jpeg', '2020-10-28 20:27:23', '2020-10-28 20:27:23'),
(163, 8, 'nike negras suela roja chulo blanco dama', '1603916874-nike negras suela roja chulo blanco dama.jpeg', '2020-10-28 20:27:54', '2020-10-28 20:27:54'),
(164, 8, 'nike rojas  medio blanco en el medio chulo rojo dama', '1603916959-nike rojas  medio blanco en el medio chulo rojo dama.jpeg', '2020-10-28 20:29:19', '2020-10-28 20:29:19'),
(165, 8, 'nike suelas rojas dama', '1603916977-nike suelas rojas dama.jpeg', '2020-10-28 20:29:37', '2020-10-28 20:29:37'),
(166, 9, 'puma negra  suela diferente dama', '1603917011-puma negra  suela diferente dama.jpeg', '2020-10-28 20:30:11', '2020-10-28 20:30:11'),
(167, 9, 'pumas blanca logo negro dama', '1603917030-pumas blanca logo negro dama.jpeg', '2020-10-28 20:30:30', '2020-10-28 20:30:30'),
(168, 9, 'pumas negra dama', '1603917045-pumas negra dama.jpeg', '2020-10-28 20:30:45', '2020-10-28 20:30:45'),
(169, 9, 'pumas rojas logo balnco dama', '1603917066-pumas rojas logo balnco dama.jpeg', '2020-10-28 20:31:06', '2020-10-28 20:31:06'),
(170, 10, 'Racer  vinotinto', '1603917089-Racer  vinotinto.jpeg', '2020-10-28 20:31:29', '2020-10-28 20:31:29'),
(171, 10, 'Racer Adidas Dama', '1603917116-Racer Adidas Dama.jpeg', '2020-10-28 20:31:56', '2020-10-28 20:31:56'),
(172, 10, 'Racer Caballero', '1603917136-Racer Caballero.jpeg', '2020-10-28 20:32:16', '2020-10-28 20:32:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `portafolios`
--
ALTER TABLE `portafolios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `portafolios`
--
ALTER TABLE `portafolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD CONSTRAINT `zapatillas_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
