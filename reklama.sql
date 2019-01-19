-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 19 2019 г., 14:37
-- Версия сервера: 10.2.21-MariaDB
-- Версия PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reklama`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` bigint(20) DEFAULT NULL,
  `like` bigint(20) DEFAULT NULL,
  `dislike` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `contents`
--

INSERT INTO `contents` (`id`, `name`, `created_at`, `updated_at`, `data`, `image_path`, `video_url`, `view`, `like`, `dislike`) VALUES
(1, 'Тестовая реклама!', '2017-03-16 10:47:28', '2017-03-16 10:47:28', 'Текст тестовой рекламы!', '1489686448-2a4b8729-3c10-4b18-8206-2687c390e82c_560_420.jpg', '5cqsWcVWj6A', 1108, 1, 1),
(2, 'Сайт Пешковой Натальи о реинкарнационике.', '2017-03-16 10:49:27', '2017-03-16 10:49:27', 'На сайте www.peshkova-natalia.ru вы можете заказать консультацию по реинкарнационике!\r\nЧто такое реинкарнационика, узнать можно здесь www.peshkova-natalia.ru/reinkarnatsionika/', '1489686567-maxresdefault.jpg', NULL, 1846, 2, 2),
(5, 'Программа youtubetovk запланирует 5 популярных видео с ютуба в вашу группу вконтакте на завтра.', '2017-05-02 21:07:15', '2017-05-02 21:07:15', 'Программа youtubetovk запланирует 5 популярных видео с ютуба в вашу группу вконтакте на завтра. Каждый день планирует 5 новых популярных видео на завтра с интервалом 3 часа! Вам достаточно один раз в день запланировать на завтра ролики и отдыхать, программа все сделает за вас! купить https://plati.ru/itm/youtubetovk/2308173 Делал программу сам!', '', 'JsDGQcol4So', 3311, 5, 5),
(4, 'Добавить рекламу бесплатно', '2017-04-30 18:25:37', '2017-04-30 18:25:37', 'Добавить рекламу на сайт бесплатно http://reklama.peshkova-natalia.ru/reklama/add (необходима регистрация)', '1493601937-Smile-3d-1920x1080.jpg', NULL, 3314, 4, 4),
(6, 'Ваша реклама здесь!', '2017-05-27 07:52:38', '2017-05-27 07:52:38', 'Добавьте свою рекламу! http://reklama.peshkova-natalia.ru/reklama/add', '1495871558-Ваша-реклама.jpg', 'ggHpXcmP8ic', 3212, 6, 6),
(7, 'Сайт peshkova-natalia.ru обновился!', '2017-10-04 14:08:07', '2017-10-04 14:08:07', 'Сайт peshkova-natalia.ru обновился!', '', NULL, 2750, 7, 7),
(8, 'Привет. Последние новости.', '2017-12-17 18:25:57', '2017-12-17 18:25:57', 'Сейчас делаю социальную сеть для портфолио. Подробнее https://vk.com/kvonosan_peoples', '1513535157-Smile-3d-1920x1080.jpg', NULL, 1956, 8, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `count` bigint(20) DEFAULT NULL,
  `content_id` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `dislikes`
--

INSERT INTO `dislikes` (`id`, `count`, `content_id`) VALUES
(1, 0, 1),
(2, 0, 2),
(3, 0, 3),
(4, 0, 4),
(5, 0, 5),
(6, 0, 6),
(7, 0, 7),
(8, 0, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `count` bigint(20) DEFAULT NULL,
  `content_id` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `count`, `content_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 0, 6),
(7, 1, 7),
(8, 0, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(78, '2014_10_12_000000_create_users_table', 1),
(79, '2014_10_12_100000_create_password_resets_table', 1),
(80, '2017_03_14_092655_create_contents_table', 1),
(81, '2017_03_15_140604_create_likes_table', 1),
(82, '2017_03_15_140617_create_dislikes_table', 1),
(83, '2017_03_16_122031_crete_user_likes_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kvonosan', 'kvonosan@rambler.ru', '$2y$10$fs3t9/aQf.pge8TWiXxtDeAL.w5oVeyxWFenLb.9yIq55wZ7o7MIG', 'eFQnsrUC6LYzIYf0tnjTdrRadlWkPkjIHHi4EWgcHzmtxRm5xveI1YK2nSVe', '2017-03-16 10:46:43', '2017-03-16 10:46:43'),
(2, 'kvonosan1', 'kvonosan1@yandex.ru', '$2y$10$K8wAMZxoXP5yXaHz8jRWM.LEHzGKn1ND.u.GAXTIde3bhjZ3JfhKO', NULL, '2017-05-27 07:46:48', '2017-05-27 07:46:48'),
(3, 'charnoweip', 'neltsvetkova1980@mail.ru', '$2y$10$UHjYs0bo0ZCXV49o3nS8rOcReseXYIi0zHFou518dUGsu7eJvjoCy', NULL, '2018-02-02 12:07:55', '2018-02-02 12:07:55'),
(4, 'Randallpiele', 'nainalrikev@gmail.com', '$2y$10$CXuSTfIbx.OpdkOKT6tK9eyDHf6mkBn1TMZuGMsXjpDTQxVS2lng.', NULL, '2018-05-19 18:37:27', '2018-05-19 18:37:27'),
(5, 'foo', 'y@mail.ru', '$2y$10$gkiotawroWYUc5g7WreZLOglODTuR9aMjwFCdRZJWz6EoPIHW2A2C', NULL, '2018-07-13 11:06:07', '2018-07-13 11:06:07'),
(6, 'EROAuthoff', 'alya@massage-nyc.com', '$2y$10$hm8gEc34JZLERhZJsqA4KueXqcO6ddrR8U/iAu6Ks0sMDtkGYIHGG', NULL, '2018-07-19 22:33:29', '2018-07-19 22:33:29'),
(7, 'TerrellDog', 'xlypphf3@mail.ru', '$2y$10$Ai2cBemU.DaIU03D8qrq4eMOah2yYXnwVHlGtMSt9EJqadgdRd/Mi', NULL, '2018-12-18 15:04:10', '2018-12-18 15:04:10');

-- --------------------------------------------------------

--
-- Структура таблицы `user_likes`
--

CREATE TABLE `user_likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `content_id` bigint(20) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user_likes`
--

INSERT INTO `user_likes` (`id`, `user_id`, `content_id`, `type`) VALUES
(1, 1, 2, 'like'),
(2, 1, 1, 'like'),
(3, 1, 3, 'like'),
(4, 1, 4, 'like'),
(5, 1, 5, 'like'),
(8, 1, 7, 'like');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `user_likes`
--
ALTER TABLE `user_likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user_likes`
--
ALTER TABLE `user_likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
