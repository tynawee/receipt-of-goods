-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: database:3306
-- Время создания: Дек 10 2024 г., 04:52
-- Версия сервера: 8.4.3
-- Версия PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `docker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `article` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `article`) VALUES
(1, 'Товар', 20.00, '1234'),
(2, 'Товар', 20.00, '1234'),
(3, 'Товар-13', 3000.00, '15783'),
(4, 'Товар-22', 14567.00, '245578'),
(5, 'Товар-33', 267.00, '47736'),
(6, 'Товар', 100.00, '869595'),
(7, 'Товар-33ujyu', 456467.00, '46757567'),
(8, '555555', 55555555.00, '555555555'),
(9, '666', 666.00, '666'),
(10, '6778u', 7686876.00, '5645644'),
(11, '6778u', 7686876.00, '5645644');

-- --------------------------------------------------------

--
-- Структура таблицы `receipts`
--

CREATE TABLE `receipts` (
  `id` int NOT NULL,
  `date` date DEFAULT NULL,
  `product_id` int NOT NULL,
  `quantity` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `receipts`
--

INSERT INTO `receipts` (`id`, `date`, `product_id`, `quantity`) VALUES
(1, '2024-12-04', 1, 1),
(2, '2024-12-13', 2, 34),
(3, '2024-12-19', 3, 50),
(4, '2024-12-19', 1, 30),
(5, '2024-12-20', 3, 300),
(6, '2024-12-22', 3, 89),
(7, '2024-12-19', 3, 70),
(8, '2024-12-13', 3, 76),
(9, '2024-12-05', 1, 56),
(10, '2024-12-12', 1, 100),
(11, '2024-12-12', 1, 100),
(12, '2024-12-05', 1, 134),
(13, '2024-12-07', 1, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
