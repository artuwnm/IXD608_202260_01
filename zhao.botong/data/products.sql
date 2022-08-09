-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2022-07-30 03:00:05
-- 服务器版本： 5.7.38-cll-lve
-- PHP 版本： 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `botong_wnm608`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `thumbnail`, `images`, `description`, `quantity`) VALUES
(1, 'Hoegaarden', 3.99, 'liquor', '2022-07-20 06:02:25', '2022-07-20 06:02:25', 'hoegaarden_1.jpg', 'hoegaarden.jpg', 'It\'s a beer from Belgium and it tastes great!', '99'),
(2, '1664', 3.89, 'liquor', '2022-07-20 06:03:55', '2022-07-20 06:03:55', '1664_1.jpg', '1664.jpg', '1664 is a French beer brand, brewed with high quality French wheat, with a refreshing taste and rich foam.', '99'),
(3, 'Fruli', 3.98, 'liquor', '2022-07-20 06:04:39', '2022-07-20 06:04:39', 'fruli_1.jpg', 'fruli.jpg', 'Fruli is a Belgian premium strawberry fruit beer, a unique blend of white beer and strawberry juice, the juice complements the taste of wheat beer, a balanced and refreshing beer, full of strawberry fruit flavor.', '99'),
(4, 'Corona', 3.98, 'liquor', '2022-07-20 06:06:20', '2022-07-20 06:06:20', 'corona_1.jpg', 'corona.jpg', 'With its unique taste, Corona beer has become the number one selling Mexican beer in the world and the number one imported beer in the United States.', '99'),
(5, 'Jagermeister', 23.98, 'liquor', '2022-07-20 06:07:00', '2022-07-20 06:07:00', 'jagermeister_1.jpg', 'jagermeister.jpg', 'Jaegermeister is from Germany and it is the best-selling liqueur brand in the world. Popular with young people.', '99'),
(6, 'Jack Daniels', 23.99, 'liquor', '2022-07-20 06:08:52', '2022-07-20 06:08:52', 'jack_1.jpg', 'jack.jpg', 'Jack Daniels, from the United States, is one of the world\'s top ten famous spirits, selling in more than 130 countries around the world, single bottle sales for many years as the world\'s top American whiskey.', '99'),
(7, 'Coca-Cola', 1.99, 'beverage', '2022-07-20 06:10:53', '2022-07-20 06:10:53', 'cola_1.jpg', 'cola.jpg', 'Happy times, let\'s share Coca-Cola together.', '99'),
(8, 'Sprite', 1.99, 'beverage', '2022-07-20 06:11:34', '2022-07-20 06:11:34', 'sprite_1.jpg', 'sprite.jpg', 'The third brand launched by Coca-Cola, it is is one of the world\'s most popular lemon-flavored fizzy non-alcoholic beverage products.', '99'),
(9, 'Fanta', 1.99, 'beverage', '2022-07-20 06:12:13', '2022-07-20 06:12:13', 'fanta_1.jpg', 'fanta.jpg', 'Fanta is an orange-flavored soft drink introduced by Coca-Cola in Italy in 1955. Fanta has orange, apple, grape, lime, mango, peach, pineapple, watermelon, strawberry, and jasmine peach flavors.', '99'),
(10, 'Perrier', 3.99, 'beverage', '2022-07-20 06:12:57', '2022-07-20 06:12:57', 'perrier_1.jpg', 'perrier.jpg', 'Perrier is a mineral water brand from France.', '99'),
(11, 'Red Bull', 2.99, 'beverage', '2022-07-20 06:13:46', '2022-07-20 06:13:46', 'bull_1.jpg', 'bull.jpg', 'Red Bull is one of the world\'s first and best known energy drinks.', '99'),
(12, 'Juice', 2.89, 'beverage', '2022-07-20 06:14:24', '2022-07-20 06:14:24', 'juice_1.jpg', 'juice.jpg', 'This juice is very popular among young children.', '99');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
