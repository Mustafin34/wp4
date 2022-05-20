-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2022 г., 22:46
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kurultai`
--

-- --------------------------------------------------------

--
-- Структура таблицы `videocards`
--

CREATE TABLE `videocards` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proizvod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arch` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videocards`
--

INSERT INTO `videocards` (`id`, `name`, `photo1`, `photo2`, `date`, `proizvod`, `ram`, `chast`, `tech`, `prop`, `discription`, `arch`) VALUES
(2, 'GTX 1650', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/40f208b22f4c3ae3df308f13e57d2b7e/77bdee9d60da4cc193a4668a1944692de4b2672785c4292d51f63d0d55366680.jpg.webp', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/cabeecdfee3ed9421fb3c912991cacee/f4d792de1c4bf693357e2fa6471cfa9cc0c0826e6c670ff9ada68c5eb7f97098.jpg.webp', '23.04.2019', 'ASUS', '4', '1410', '12', '192', 'Видеокарты серии ROG STRIX – это производительность и продуманная эстетика. Они оснащаются эффективными кулерами с оптимизированными вентиляторами Wing-blade и позволяют гибко настраивать свои параметры с помощью приложения GPU Tweak. Модель ROG STRIX GeForce GTX 1650 GAMING Advanced – ваш пропуск в мир компьютерных игр!\r\nСтильная светодиодная подсветка Aura на кожухе видеокарты поддерживает огромную палитру оттенков в сочетании с завораживающими визуальными эффектами. Ее цвет может меняться в зависимости от температуры графического процессора или в такт вашей любимой музыке. Кроме того, с помощью приложения Aura Sync работа подсветки разных компонентов синхронизируется между собой. Ищите логотип Aura Sync – им отмечены продукты, поддерживающие технологию синхронизации подсветки от ASUS!', 'NVIDIA Turing'),
(31, 'GeForce GTX 1050 Ti', 'https://c.dns-shop.ru/thumb/st1/fit/500/500/714bada4c36ccc84dcf4cb3d581a9d89/a761aee3870259aefed9c627c2381aa3196b9e9f3c5a73f9f9ceb3237d4eddf9.jpg.webp', 'https://c.dns-shop.ru/thumb/st1/fit/wm/0/0/b3d4367f12a7f0f079f9d1d6c509618f/cfa7fde46d7eeceb95dd05f1d8a119d05903714bf89721968660588681eb510f.jpg.webp', '25.10.2016', 'MSI', '4', '1341', '14', '112', 'В случае нехватки мощности для проведения комфортных игровых сессий видеокарта MSI GeForce GTX 1050 Ti OC сможет стать кругом спасения для игроманов. Она применяет качественные компоненты – твердотельные конденсаторы, дроссели, оборудованные ферритовыми сердечниками, – улучшающие характеристики производительности. Для подключения модель оснащена интерфейсом PCI-E 3.0.\r\nДля вывода картинки в разрешении 7680x4320 MSI GeForce GTX 1050 Ti OC предусматривает несколько разъемов, среди которых HDMI, DisplayPort, DVI-D. Два осевых вентилятора участвуют в активном воздушном охлаждении системы, что позволяет увеличить время игровых сессий.', 'Nvidia Turing');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `videocards`
--
ALTER TABLE `videocards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `videocards`
--
ALTER TABLE `videocards`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
