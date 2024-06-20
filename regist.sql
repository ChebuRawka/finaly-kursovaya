-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 20 2024 г., 20:57
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `regist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `consultation_requests`
--

CREATE TABLE `consultation_requests` (
  `User_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `consultation_requests`
--

INSERT INTO `consultation_requests` (`User_id`, `name`, `email`, `phone`, `created_at`, `updated_at`, `status`) VALUES
(4, 'Souz_multfilm', 'ulik_nusht@vk.com', '89777280779', '2024-06-20 09:59:16', '2024-06-20 13:55:26', 'rejected'),
(5, 'fffffff', 'fafa@mail.ru', '412378482374', '2024-06-20 10:32:57', '2024-06-20 11:03:26', 'approved'),
(6, 'papa', 'papa@mail.ru', '3252345346', '2024-06-20 12:49:42', '2024-06-20 12:49:42', 'pending'),
(7, 'papa', 'papa@mail.ru', '89777280779', '2024-06-20 11:06:17', '2024-06-20 11:51:17', 'approved'),
(8, 'lol', 'lololo@mail.ru', '89777280779', '2024-06-20 12:33:53', '2024-06-20 12:33:53', 'pending'),
(9, 'bublik', 'admin@example.com', '12341241', '2024-06-20 12:45:59', '2024-06-20 12:45:59', 'pending'),
(11, 'gosha', 'gosha@mail.ru', '13244324342', '2024-06-20 12:55:50', '2024-06-20 12:55:50', 'pending'),
(12, 'mama', 'mama@mail.ru', '2354234234', '2024-06-20 13:24:12', '2024-06-20 13:28:04', 'approved'),
(13, 'fafa', 'fafa@mail.ru', '414234324', '2024-06-20 14:29:57', '2024-06-20 14:29:57', 'pending'),
(14, 'fafa', 'fxckn@mail.ru', '89777280779', '2024-06-20 14:37:28', '2024-06-20 14:37:28', 'pending'),
(15, '4123432', 'fxckn@mail.ru', '342432432', '2024-06-20 14:37:47', '2024-06-20 14:37:47', 'pending'),
(16, '4123432', 'fxckn@mail.ru', '4324324', '2024-06-20 14:38:07', '2024-06-20 14:38:07', 'pending'),
(17, 'bublik', 'admin@example.com', '765757', '2024-06-20 14:40:18', '2024-06-20 14:40:18', 'pending'),
(18, 'ffffffff', 'fffffff@mail.ru', '1241234324', '2024-06-20 14:52:53', '2024-06-20 14:52:53', 'pending'),
(19, 'ffffff', 'fffffff@mail.ru', '3254325435', '2024-06-20 14:53:13', '2024-06-20 14:53:13', 'pending');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_06_18_095559_create_consultation_requests_table', 1),
(7, '2024_06_18_104943_add_role_to_users_table', 1),
(9, '2024_06_20_135110_add_status_to_consultation_requests_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('fxckn@mail.ru', '$2y$10$DdwVlHRJe9CKoOCmOKsUFu89MceyJTcAXQYgnR4YHhuczscBaa5RK', '2024-06-20 12:57:42');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `User_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`User_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Souz_multfilm', 'obladaet_2020@mail.ru', NULL, '$2y$10$66T2easTNvXuPWkDOvrPseirfE2pB0by2Z6XP14Vo.0itBUcGWihG', NULL, '2024-06-18 15:14:24', '2024-06-18 15:14:24', 'user'),
(2, 'Администратор', 'admin@example.com', NULL, '$2y$10$Fev4a7nbBM83jvRJizCqpOsOI5wi.j2VFJl0XE7IIQNACXzlPmV5S', NULL, '2024-06-18 15:15:40', '2024-06-20 12:59:05', 'admin'),
(3, 'bublik', 'fxckn@mail.ru', NULL, '$2y$10$Vb3T0br.q4OQIJ0b/TGuM.w0gN.5kvwrXvqjaX6bFApujbEa1IpGS', NULL, '2024-06-18 15:25:42', '2024-06-18 15:25:42', 'user'),
(4, 'ffff', 'fff@mail.ru', NULL, '$2y$10$6y8tiGYH4OpkPJBIuEvgrOPYgqCW41qTUlyNqT.JkNxoapVl2bG/O', NULL, '2024-06-18 18:36:59', '2024-06-18 18:36:59', 'user'),
(5, 'lolaa', 'loloa@mail.ru', NULL, '$2y$10$IJfYtJLQZMuIpgCWBZh0tuhzyAtsUjutjY5gdGODL1z4vji6Pt2R6', NULL, '2024-06-19 07:32:01', '2024-06-19 07:50:43', 'user'),
(6, 'papa', 'papa@mail.ru', NULL, '$2y$10$/IPmNcaTH6Z40jGdM6nP/./lio43WqXKwDTCalss4POHsU3h4cS8y', NULL, '2024-06-20 11:06:01', '2024-06-20 11:06:01', 'user'),
(11, 'gosha', 'gosha@mail.ru', NULL, '$2y$10$PAakNU/MoYxZvvGsY0XlAeBQrnV2jr4BPD31qv5c5FpN3ucfxsguC', NULL, '2024-06-20 12:50:16', '2024-06-20 12:50:16', 'user'),
(12, 'mama', 'mama@mail.ru', NULL, '$2y$10$1YlNylCZk1RbxynaAyRqW.4pkwSONb2jMW85NAJ1IqK.ZQcYOvCvS', NULL, '2024-06-20 13:23:56', '2024-06-20 13:24:33', 'user'),
(13, 'fafa', 'fafa@mail.ru', NULL, '$2y$10$q7rNV/V1FEHAr9fXxYvc8.ynbvxmwUTOFQ7QpzioIvHHD86s3mYhq', NULL, '2024-06-20 14:29:37', '2024-06-20 14:29:37', 'user'),
(14, 'baba', 'baba@mail.ru', NULL, '$2y$10$IlX88JlFl6XwEuHvu9tuluLzxR52ZTCDeXFSboRk09xHA5XtSNa6i', NULL, '2024-06-20 14:41:10', '2024-06-20 14:41:10', 'user'),
(15, 'asffa', 'dddasdasdasd@mail.ru', NULL, '$2y$10$qUEmwGuV1H7lbrLXrNG5GOrUaJoalDHUgN8XtrGt0q5pJNJey1nWm', NULL, '2024-06-20 14:42:14', '2024-06-20 14:42:14', 'user'),
(16, 'dfgdfg', 'dfgdfg@mail.ru', NULL, '$2y$10$tf8ksrBitfl.w/a29dTWkehlPmvFwRQVK35wQrSoSoK9gJSgCPz1S', NULL, '2024-06-20 14:42:50', '2024-06-20 14:42:50', 'user'),
(17, 'dfgdfgfdggfd', 'dfgdfgfdggfd@mail.ru', NULL, '$2y$10$MtFD4exuGiTcS3JkHn6xveguQRfE9VtLqCaJj9VXdeUHKBsLVnixW', NULL, '2024-06-20 14:44:17', '2024-06-20 14:44:17', 'user'),
(18, 'афафафа', 'fffffff@mail.ru', NULL, '$2y$10$OJW8wkVsK4e7uBw12TXzVu9r0o0OP7p5CIeSsOKyUbjU63Ao7KSpe', NULL, '2024-06-20 14:52:30', '2024-06-20 14:52:30', 'user'),
(19, 'fafaffa', 'fafaffa@mail.ru', NULL, '$2y$10$Te4aXzcw8gr7JPSuED//0uCiha/0mxAusYeM7VPpNRu8z4.3ou9Aa', NULL, '2024-06-20 14:53:42', '2024-06-20 14:53:42', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `consultation_requests`
--
ALTER TABLE `consultation_requests`
  ADD PRIMARY KEY (`User_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `consultation_requests`
--
ALTER TABLE `consultation_requests`
  MODIFY `User_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `User_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
