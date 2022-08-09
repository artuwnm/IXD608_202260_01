-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 22-08-03 23:31
-- 서버 버전: 5.6.51-cll-lve
-- PHP 버전: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `jinyeong`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(126) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `products`
--

INSERT INTO `products` (`id`, `title`, `quantity`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(5, 'AVIATION', '3', 42, 'gin', '2022-07-20 17:05:18', '2022-07-20 17:05:18', '97 Points, Wine Enthusiast - \"With its clean, neutral profile, this graceful gin works well with just about anything, from Aviation cocktails (natch) to bone-dry Martinis. On the palate, look for bewitching hints of caraway, juniper, grapefruit and a dry, faintly spicy finish.” (April 2012)', '7.png', '7.png'),
(4, 'OGINSKI', '7', 50, 'gin', '2022-07-20 17:01:40', '2022-07-20 17:01:40', 'Oginski vodka pays tribute to Micha? Kleofas Ogi?ski who was a Polish composer. It is made from corn from the South of Poland and reduced with water of a source from Beskides mountains region.', '6.png', '6.png'),
(3, 'JOSE CUERVO', '2', 80, 'Tequila', '2022-07-20 16:57:18', '2022-07-20 16:57:18', 'The master distillers at La Roje a crafted this unique and balanced blend to bring out tones of agave, caramel, and fresh herbs in its flavour profile.', '5.png', '5.png'),
(2, 'BACADI - GOLD', '10', 120, 'rum', '2022-07-20 16:55:53', '2022-07-20 16:55:53', 'Bright gold in colour. It has vanilla, butterscotch and lemon zest aromas. On the palate, it has light fruit and toffee flavours with a lightly spicy warm finish.', '4.png', '4.png'),
(1, 'JOHNIE WALKER', '5', 499, 'whisky', '2022-07-20 16:54:11', '2022-07-20 16:54:11', 'Johnnie Walker Blue Label is an unrivalled masterpiece. It is an exquisite blend made from some of Scotland’s rarest and most exceptional whiskies.', '3.png', '3.png'),
(6, 'BOMBAY SAPPHIRE', '24', 39, 'gin', '2022-07-20 17:07:11', '2022-07-20 17:07:11', 'Created from a combination of ten botanicals, including juniper berries from Tuscany, which are vapour infused for delicate extraction. This process results in elegant aromas and complex flavours that are clean and balanced with a crisp finish.', '8.png', '8.png'),
(7, 'BELGIAN MOON', '32', 12, 'beer', '2022-07-20 17:09:55', '2022-07-20 17:09:55', 'A cloudy yellow-orange appearance with a rich, white head. Aromas of mango and light honeyed-biscuits, with ripe mango flavours and a biscuity malt with hints of clove and honey. Finishes qucik and dry with some mango notes lingering.', '9.png', '9.png'),
(8, 'GLENFIDDICH', '11', 106, 'whisky', '2022-07-20 17:14:45', '2022-07-20 17:14:45', '93 Points & Best Buy, Wine Enthusiast - “Lush and rich, this honeyed whisky is loaded with dense notes of creamy custard and tropical fruit, finishing with a flourish of baking spice.” (December 2013)', '10.png', '10.png'),
(9, 'RIESLING', '28', 21, 'wine', '2022-07-20 17:19:11', '2022-07-20 17:19:11', '91 Points, WineScores.ca: \"A classic Mosel Riesling, the Fish label is a consistent white, which over-delivers. The 2019 is described by snappy green apples, lime, peach pit, with delicate floral undertones. Like the nose, the palate is bright and pretty; expect a slick texture and focus and precision with a racy lemon-lime finish.\" Daenna Van Mulligen (October 2021)', '11.png', '11.png,9.png'),
(11, 'HEINEKEN CAN', '30', 16, 'beer', '2022-07-20 17:23:41', '2022-07-20 17:23:41', 'Brewed in Holland according to the original recipe, Heineken\'s distinctive flavour offers a refreshing European taste that has made it a favourite all over the world.', '13.png', '13.png'),
(10, 'CARLSBERG', '15', 13, 'beer', '2022-07-20 17:26:37', '2022-08-03 22:51:15', 'Carlsberg is a well-proportioned bottom-fermented lager beer with a flavour of hops, grains, pine needles, sorrel and Danish summer apples. The bitterness of the hops and the apple-like sweetness provide a harmoniously balanced taste. Carlsberg Pilsner goes well with Asian foods, buffets, vegetable or fish soups, lightly seasoned fish dishes and in particular roast meat with gravy.', '12.png', '12.png'),
(12, 'TEQUILA OCHO', '5', 80, 'Tequila', '2022-07-20 17:28:56', '2022-08-03 22:49:46', 'Bright, clear, thick on the glass. Buttery with fresh lively fruit, pineapple, lemon, herb, anise, cloves, and white pepper with a nuance of green pine. On the palate, complex balance of sweet and acidity, cooked agave, green grape skin, hints of pineapple, green apple, cloves and uncooked asparagus. Luscious and full textured with beautiful medium crisp finish.', '14.png', '14.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
