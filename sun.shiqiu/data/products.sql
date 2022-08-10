-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2022-08-09 18:28:35
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
-- 数据库： `shiqiusun_IXD608_database`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(32) NOT NULL,
  `size` varchar(4) NOT NULL,
  `price` decimal(5,0) NOT NULL,
  `images` varchar(256) NOT NULL,
  `description` varchar(512) NOT NULL,
  `amount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `size`, `price`, `images`, `description`, `amount`) VALUES
(1, 'miniskirt', 'skirt', 'mini', 50, 'img/miniskirt_XS_1.jpeg', 'High-waisted skort. Combination band detail at side with front slit. Side hidden in-seam zip closure.', 3),
(2, 'sandels', 'shoe', 'M', 120, 'img/sandels_M_1.jpeg', 'Low-heeled leather sandals with crossed straps at front.', 4),
(3, 'pleated', 'shorts', 'L', 20, 'img/skout_L_1.jpeg', 'High-waisted satin effect balloon shorts. Front pleat detail. Back hidden in-seam zip closure.', 5),
(4, 'miniskirt', 'skirt', 'S', 60, 'img/miniskirt_S_1.jpeg', 'High-waisted skort. Combination band detail at side with front slit. Side hidden in-seam zip closure.', 6),
(5, 'miniskirt', 'skirt', 'mini', 70, 'img/miniskirt_M_1.jpeg', 'High-waisted skort. Combination band detail at side with front slit. Side hidden in-seam zip closure.', 9),
(6, 'sandels', 'shoe', 'S', 100, 'img/sandels_S_1.jpeg', 'Low-heeled leather sandals with crossed straps at front.', 8),
(7, 'sandels', 'shoe', 'L', 140, 'img/sandels_L_1.jpeg', 'Low-heeled leather sandals with crossed straps at front.', 9),
(8, 'pleated', 'shorts', 'M', 18, 'img/skout_M_1.jpeg', 'High-waisted satin effect balloon shorts. Front pleat detail. Back hidden in-seam zip closure.', 10),
(9, 'pleated', 'shorts', 'S', 16, 'img/skout_S_1.jpeg', 'High-waisted satin effect balloon shorts. Front pleat detail. Back hidden in-seam zip closure.', 11),
(10, 'pleated', 'shorts', 'XS', 14, 'img/skout_XS_1.jpeg', 'High-waisted satin effect balloon shorts. Front pleat detail. Back hidden in-seam zip closure.', 12),
(11, 'pleated', 'shorts', 'XXS', 12, 'img/skout_XXS_1.jpeg', 'High-waisted satin effect balloon shorts. Front pleat detail. Back hidden in-seam zip closure.', 13),
(12, 'pleated', 'shorts', 'XL', 22, 'img/skout_XL_1.jpeg', 'High-waisted satin effect balloon shorts. Front pleat detail. Back hidden in-seam zip closure.', 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
