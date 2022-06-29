-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 29 2022 г., 14:53
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ip`
--

CREATE TABLE `ip` (
  `id` int NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ip`
--

INSERT INTO `ip` (`id`, `ip`, `browser`, `user_id`) VALUES
(18, '127.0.0.1', 'Mozilla/5.0 admin', 35),
(19, '127.0.0.1', 'Mozilla/5.0 admin', 36),
(20, '127.0.0.1', 'Mozilla/5.0 admin', 37),
(21, '127.0.0.1', 'Mozilla/5.0 admin', 38),
(22, '127.0.0.1', 'Mozilla/5.0 admin', 39),
(23, '127.0.0.1', 'Mozilla/5.0 admin', 40),
(24, '127.0.0.1', 'Mozilla/5.0', 41);

-- --------------------------------------------------------

--
-- Структура таблицы `user_name`
--

CREATE TABLE `user_name` (
  `id` int NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_name`
--

INSERT INTO `user_name` (`id`, `name`, `email`, `content`, `created`) VALUES
(35, '111', '1@mail.ru', '1111', '2022-06-28 16:33:03'),
(36, '11', '1@mail.ru', '```````', '2022-06-28 17:34:33'),
(37, '666v', '1@mail.ru', '45454', '2022-06-28 17:34:44'),
(38, '11212', '1@mail.ru', '121', '2022-06-28 17:34:50'),
(39, '55343', '1@mail.ru', '3434', '2022-06-28 17:34:57'),
(40, '324234', '1@mail.ru', '23434', '2022-06-28 17:35:07'),
(41, '11', '1@mail.ru', 'uuuuuuu', '2022-06-29 10:41:11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `user_name`
--
ALTER TABLE `user_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `user_name`
--
ALTER TABLE `user_name`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `ip`
--
ALTER TABLE `ip`
  ADD CONSTRAINT `ip_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_name` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
