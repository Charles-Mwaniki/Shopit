-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 05:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopit`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `m_url` text NOT NULL,
  `s_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageId`, `itemId`, `m_url`, `s_url`) VALUES
(6, 7, 'images/uploads/large/bakari_blue_gold_3_1000x_87526643.jpg', 'images/uploads/small/bakari_blue_gold_3_1000x_87526643.jpg'),
(7, 8, 'images/uploads/large/men-s-tops-kano-buttohwork-1_1000x_601498238.jpg', 'images/uploads/small/men-s-tops-kano-buttohwork-1_1000x_601498238.jpg'),
(8, 9, 'images/uploads/large/45_293046430.jpg', 'images/uploads/small/45_293046430.jpg'),
(10, 11, 'images/uploads/large/men000x_876772542.jpg', 'images/uploads/small/men000x_876772542.jpg'),
(11, 12, 'images/uploads/large/654_237019051.jpg', 'images/uploads/small/654_237019051.jpg'),
(12, 13, 'images/uploads/large/456_69066008.jpg', 'images/uploads/small/456_69066008.jpg'),
(13, 14, 'images/uploads/large/2_191964776.jpg', 'images/uploads/small/2_191964776.jpg'),
(14, 15, 'images/uploads/large/6_521588220.jpg', 'images/uploads/small/6_521588220.jpg'),
(15, 16, 'images/uploads/large/563_1075192086.jpg', 'images/uploads/small/563_1075192086.jpg'),
(16, 17, 'images/uploads/large/45665_1163880587.jpg', 'images/uploads/small/45665_1163880587.jpg'),
(17, 18, 'images/uploads/large/5644_1312211137.jpeg', 'images/uploads/small/5644_1312211137.jpeg'),
(18, 19, 'images/uploads/large/5646_899278164.jpg', 'images/uploads/small/5646_899278164.jpg'),
(19, 20, 'images/uploads/large/dress1000x_392794099.jpg', 'images/uploads/small/dress1000x_392794099.jpg'),
(20, 21, 'images/uploads/large/dresses-efdx_861453228.jpg', 'images/uploads/small/dresses-efdx_861453228.jpg'),
(21, 22, 'images/uploads/large/3422_132150600.jpg', 'images/uploads/small/3422_132150600.jpg'),
(22, 23, 'images/uploads/large/tops-ki00x_1385795483.jpg', 'images/uploads/small/tops-ki00x_1385795483.jpg'),
(23, 25, 'images/uploads/large/14_162531037.jpg', 'images/uploads/small/14_162531037.jpg'),
(24, 26, 'images/uploads/large/menyu1000x_471413163.jpg', 'images/uploads/small/menyu1000x_471413163.jpg'),
(25, 27, 'images/uploads/large/mend-1_1000x_775518761.jpg', 'images/uploads/small/mend-1_1000x_775518761.jpg'),
(26, 28, 'images/uploads/large/tops-000x_679170603.jpeg', 'images/uploads/small/tops-000x_679170603.jpeg'),
(27, 29, 'images/uploads/large/jacked1000x_699954953.jpg', 'images/uploads/small/jacked1000x_699954953.jpg'),
(28, 30, 'images/uploads/large/jackets-kxc0x_1146581811.jpg', 'images/uploads/small/jackets-kxc0x_1146581811.jpg'),
(29, 31, 'images/uploads/large/jackesd000x_814978905.jpg', 'images/uploads/small/jackesd000x_814978905.jpg'),
(30, 32, 'images/uploads/large/jacketsxtern-1_1000x_1136469342.jpg', 'images/uploads/small/jacketsxtern-1_1000x_1136469342.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemId` int(100) NOT NULL,
  `itemname` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(40) NOT NULL,
  `rating` tinyint(2) NOT NULL,
  `instock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `itemname`, `description`, `date`, `price`, `rating`, `instock`) VALUES
(7, 'Mens African Print Traditional Shirt', 'Traditional Dress Shirt in the blue and gold leaves print makes for the perfect culturally confident look', '2019-06-28 10:22:28', 2999, 0, 0),
(8, 'Kano Button-Up African Print Long Sleeve', 'Rock our Kano Button-Up African Print Long Sleeve Demin Mandarin Shirt in Red/Blue Patchwork for just about any occasion.', '2019-06-28 10:25:00', 5443, 0, 0),
(9, 'Jide Mens Short Sleeve Traditional Shirt', 'Rock our Kano Button-Up African Print Long Sleeve Demin Mandarin Shirt in Red/Blue Patchwork for just about any occasion.', '2019-06-28 10:30:46', 3466, 0, 0),
(11, 'Men\'s African Print Polo Shirt', 'Stand out this season, and celebrate your culture with our Tunde Men\'s Polo in Blue Crown. ', '2019-06-28 10:37:19', 6554, 0, 0),
(12, ' Men\'s African Print Traditional Shirt ', 'The Lekan Men\'s African Print Traditional Dress Shirt in the blue and gold leaves print makes for the perfect culturally confident look.', '2019-06-28 10:38:46', 6789, 0, 0),
(13, 'African Print Knee-Length Pencil Skirt', 'Zari Women\'s African Print Knee-Length Pencil Skirt in the yellow and pink patchwork. ', '2019-06-28 10:40:42', 6345, 0, 0),
(14, 'African Print Girls\' Summer Dress', 'The Bola African Print Girl\'s Summer Dress in pink and purple kente makes for the ideal summer dress for girls with style.', '2019-06-28 10:41:53', 875, 0, 0),
(15, ' Boys\' Button-up Shirt ', ' Boys\' Button-up Shirt in blue and yellow multi-stripe embodies the essence of a vibrant and stylish boy.', '2019-06-28 10:42:46', 344, 0, 0),
(16, 'Girl\'s Button-up Skirt', 'Girl\' Button-up Skirt in blue and yellow multi-stripe embodies the essence of a vibrant and stylish boy.', '2019-06-28 10:44:56', 765, 0, 0),
(17, 'High-low Peplum Wrap Dress', 'Rock the chiffon Adeah Women\'s African Print High-low Peplum Wrap Top with Black Sunbursts to achieve an easygoing transitional piece into your spring', '2019-06-28 15:36:31', 3005, 0, 0),
(18, ' Knee-Length Pencil Skirt ', 'Rock African print in style with our curve-hugging Zari Women\'s African Print Knee-Length Pencil Skirt in the blue and gold leaves.', '2019-06-28 15:38:44', 8795, 0, 0),
(19, ' Knee Length Fold Over Dress ', 'Rock African print in this contemporary style with our stretchy Azmera Women\'s African Print Knee-Length Fold over Dress in the pink and blue leaves.', '2019-06-28 15:40:31', 8674, 0, 0),
(20, ' High Scoop Neck Maxi Dress', 'Embody royalty when rocking the Ife African Print High Scoop Neck Maxi Dress in the orange tortoise back. ', '2019-06-28 15:42:36', 9899, 0, 0),
(21, 'Mandarin Collar Shirt Dress', 'Accentuate yourself in this polished A-line, below-the-knee length shirt dress. ', '2019-06-28 15:44:18', 6577, 0, 0),
(22, 'Abina Skirt for Little Girls ', 'This full skirt with a sash will look super cute on your little girl! It\'ll give her a stylish skirt to match her mommy in.', '2019-06-28 15:46:53', 567, 0, 0),
(23, 'Kid\'s Dashiki T-Shirt', 'Looking for something unique and cultural for your little one? We\'ve got it', '2019-06-28 15:50:28', 543, 0, 0),
(24, 'Kid\'s Dashiki T-Shirt ', 'Looking for something unique and cultural for your little one? We\'ve got it', '2019-06-28 15:51:32', 546, 0, 0),
(25, 'Sadik Short Sleeve T-shirt', 'Our Sadik African Print Short Sleeve Tee (Yellow/Green Kente) is made especially for the culturally confident gentleman.', '2019-06-28 15:57:32', 7878, 0, 0),
(26, 'Keyon Button-Up Shirt', 'Specially made for the fashion-forward gentleman, rock the Keyon Button-Up African Shirt in orange and navy this summer. ', '2019-06-28 15:59:03', 9898, 0, 0),
(27, 'Seun Men\'s T-Shirt with Pocket ', 'Rock the Seun Men\'s African Print T-Shirt in the orange tortoise back for a relaxed culturally confident look.', '2019-06-28 16:00:23', 8799, 0, 0),
(28, 'Mosi Men\'s Denim Shirt', 'The Mosi Men\'s African Print Denim Shirt in the yellow and green copper embodies the perfect vintage vibes with a modern twist. ', '2019-06-28 16:02:24', 9877, 0, 0),
(29, 'Rammy Men\'s Blazer', 'Be stylish and unique at your next formal event in our Rammy African print blazer jacket!', '2019-06-28 16:03:46', 14365, 0, 0),
(30, 'Kofi Men\'s Bomber Jacket ', 'You\'ll steal the spotlight with our Kofi Men\'s African Print Bomber Jacket (Maroon Multipattern).', '2019-06-28 16:04:54', 12300, 0, 0),
(31, 'Remi Women\'s Bomber Jacket', 'Rock African Print in style even when the weather gets colder with our yellow and blue multipattern Remi Bomber jacket! ', '2019-06-28 16:06:18', 11300, 0, 0),
(32, 'Remi Women\'s Print Bomber Jacket', 'Rock African Print in style even when the weather gets colder with our maroon multipattern Remi Bomber jacket! ', '2019-06-28 16:07:11', 14634, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `userlevel` tinyint(1) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `userid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `fname`, `lname`, `username`, `password`, `userlevel`, `email`, `userid`) VALUES
(1, 'charklesss', 'charklesss', 'charklesss', 'f91410b7702a583a2c60777140dfb164', 1, 'charklesss@as.as', 'b94afe1ff18c80679de2a3ca85b65827'),
(2, 'admin', 'admin', 'admin', 'b95d2855669fd25421cdf85e4da47710', 9, 'admin@sa.as', '067edda1ea88a403b245fd63264f63a3'),
(3, 'mwaniki', 'mwaniki', 'mwaniki', 'b95d2855669fd25421cdf85e4da47710', 1, 'mwaniki@asa.asa', 'b5578293aa1f0495358c74dd8f897f95');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishId` int(5) NOT NULL,
  `itemId` int(5) NOT NULL,
  `usrId` int(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishId`, `itemId`, `usrId`, `date`) VALUES
(1, 8, 3, '2019-06-30 16:01:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `itemId` (`itemId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`) USING BTREE,
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishId`),
  ADD KEY `imageId` (`itemId`),
  ADD KEY `usrId` (`usrId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishId` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_borrowed` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_grade_id` FOREIGN KEY (`itemId`) REFERENCES `images` (`imageId`),
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`usrId`) REFERENCES `users` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
