-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 08:57 AM
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(5) NOT NULL,
  `userId` int(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `hseno` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `userId`, `city`, `street`, `hseno`) VALUES
(1, 1, 'Nyeri', 'Kimathi', 123),
(2, 1, 'esrdfghj', 'sdfghj', 34),
(3, 1, 'dtfgh', 'wergthj', 43),
(4, 1, 'esrdfghj', 'asdfgbn', 43),
(5, 1, 'gf', 'gf', 4),
(6, 1, 'adfghj', 'df', 4),
(7, 1, 'rd', 'df', 4),
(8, 1, 'srf', 'df', 4),
(9, 1, 'sddsc', 'dscds', 5),
(10, 1, 'ASDFG', 'fd', 5),
(11, 1, 'f', 'f', 4),
(12, 1, 'fd', 'ff', 4),
(13, 1, 'f', 'f', 2),
(14, 1, 'e', 'e', 4),
(15, 1, 'adfghj', 'df', 4),
(16, 1, 'fd', 'f', 5),
(17, 1, 'd', 'dd', 4),
(18, 1, 'dfghj', 'df', 4),
(19, 1, 'fd', 'fd', 5),
(20, 1, 'fd', 'fd', 5),
(21, 1, 'sdsd', 'sdsd', 3),
(22, 1, 'dfghj', 'df', 4),
(23, 1, 'dfghj', 'd', 5),
(24, 1, 'c', 'c', 1),
(25, 1, 'fgh', 'rtgh', 5);

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
  `instock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `itemname`, `description`, `date`, `price`, `instock`) VALUES
(7, 'Mens African Print Traditional Shirt', 'Traditional Dress Shirt in the blue and gold leaves print makes for the perfect culturally confident look', '2019-06-28 10:22:28', 2, 30),
(8, 'Kano Button-Up African Print Long', 'Rock our Kano Button-Up African Print Long Sleeve Demin Mandarin Shirt in Red/Blue Patchwork for just about any occasion.', '2019-06-28 10:25:00', 5, 31),
(9, 'Jide Mens Short Sleeve Shirt', 'Rock our Kano Button-Up African Print Long Sleeve Demin Mandarin Shirt in Red/Blue Patchwork for just about any occasion.', '2019-06-28 10:30:46', 2, 10),
(11, 'Men\'s African Print Polo Shirt', 'Stand out this season, and celebrate your culture with our Tunde Men\'s Polo in Blue Crown. ', '2019-06-28 10:37:19', 3, 50),
(12, ' Men\'s African Print Traditional Shirt ', 'The Lekan Men\'s African Print Traditional Dress Shirt in the blue and gold leaves print makes for the perfect culturally confident look.', '2019-06-28 10:38:46', 4, 50),
(13, 'African Print Knee-Length Pencil Skirt', 'Zari Women\'s African Print Knee-Length Pencil Skirt in the yellow and pink patchwork. ', '2019-06-28 10:40:42', 4, 47),
(14, 'African Print Girls\' Summer Dress', 'The Bola African Print Girl\'s Summer Dress in pink and purple kente makes for the ideal summer dress for girls with style.', '2019-06-28 10:41:53', 3, 50),
(15, ' Boys\' Button-up Shirt ', ' Boys\' Button-up Shirt in blue and yellow multi-stripe embodies the essence of a vibrant and stylish boy.', '2019-06-28 10:42:46', 3, 50),
(16, 'Girl\'s Button-up Skirt', 'Girl\' Button-up Skirt in blue and yellow multi-stripe embodies the essence of a vibrant and stylish boy.', '2019-06-28 10:44:56', 3, 50),
(17, 'High-low Peplum Wrap Dress', 'Rock the chiffon Adeah Women\'s African Print High-low Peplum Wrap Top with Black Sunbursts to achieve an easygoing transitional piece into your spring', '2019-06-28 15:36:31', 2, 48),
(18, ' Knee-Length Pencil Skirt ', 'Rock African print in style with our curve-hugging Zari Women\'s African Print Knee-Length Pencil Skirt in the blue and gold leaves.', '2019-06-28 15:38:44', 5, 44),
(19, ' Knee Length Fold Over Dress ', 'Rock African print in this contemporary style with our stretchy Azmera Women\'s African Print Knee-Length Fold over Dress in the pink and blue leaves.', '2019-06-28 15:40:31', 5, 50),
(20, ' High Scoop Neck Maxi Dress', 'Embody royalty when rocking the Ife African Print High Scoop Neck Maxi Dress in the orange tortoise back. ', '2019-06-28 15:42:36', 5, 47),
(21, 'Mandarin Collar Shirt Dress', 'Accentuate yourself in this polished A-line, below-the-knee length shirt dress. ', '2019-06-28 15:44:18', 5, 50),
(22, 'Abina Skirt for Little Girls ', 'This full skirt with a sash will look super cute on your little girl! It\'ll give her a stylish skirt to match her mommy in.', '2019-06-28 15:46:53', 5, 50),
(23, 'Kid\'s Dashiki T-Shirt', 'Looking for something unique and cultural for your little one? We\'ve got it', '2019-06-28 15:50:28', 5, 47),
(24, 'Kid\'s Dashiki T-Shirt ', 'Looking for something unique and cultural for your little one? We\'ve got it', '2019-06-28 15:51:32', 2, 50),
(25, 'Sadik Short Sleeve T-shirt', 'Our Sadik African Print Short Sleeve Tee (Yellow/Green Kente) is made especially for the culturally confident gentleman.', '2019-06-28 15:57:32', 2, 50),
(26, 'Keyon Button-Up Shirt', 'Specially made for the fashion-forward gentleman, rock the Keyon Button-Up African Shirt in orange and navy this summer. ', '2019-06-28 15:59:03', 2, 50),
(27, 'Seun Men\'s T-Shirt with Pocket ', 'Rock the Seun Men\'s African Print T-Shirt in the orange tortoise back for a relaxed culturally confident look.', '2019-06-28 16:00:23', 2, 50),
(28, 'Mosi Men\'s Denim Shirt', 'The Mosi Men\'s African Print Denim Shirt in the yellow and green copper embodies the perfect vintage vibes with a modern twist. ', '2019-06-28 16:02:24', 1, 25),
(29, 'Rammy Men\'s Blazer', 'Be stylish and unique at your next formal event in our Rammy African print blazer jacket!', '2019-06-28 16:03:46', 1, 45),
(30, 'Kofi Men\'s Bomber Jacket ', 'You\'ll steal the spotlight with our Kofi Men\'s African Print Bomber Jacket (Maroon Multipattern).', '2019-06-28 16:04:54', 1, 31),
(31, 'Remi Women\'s Bomber Jacket', 'Rock African Print in style even when the weather gets colder with our yellow and blue multipattern Remi Bomber jacket! ', '2019-06-28 16:06:18', 1, 10),
(32, 'Remi Women\'s Print Bomber Jacket', 'Rock African Print in style even when the weather gets colder with our maroon multipattern Remi Bomber jacket! ', '2019-06-28 16:07:11', 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `mpesa`
--

CREATE TABLE `mpesa` (
  `id` int(5) NOT NULL,
  `resultCode` varchar(20) DEFAULT NULL,
  `resultDesc` text,
  `merchantRequestID` varchar(30) DEFAULT NULL,
  `checkoutRequestID` varchar(30) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `mpesaReceiptNumber` varchar(10) DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `transactionDate` varchar(20) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpesa`
--

INSERT INTO `mpesa` (`id`, `resultCode`, `resultDesc`, `merchantRequestID`, `checkoutRequestID`, `amount`, `mpesaReceiptNumber`, `balance`, `transactionDate`, `phoneNumber`) VALUES
(1, '0', 'The service request is processed successfully.', '18444-7763197-1', 'ws_CO_DMZ_390186220_2207201923', 1, 'NGM7FV9CDR', 0, '20190722231758', '254711331782'),
(2, '0', 'The service request is processed successfully.', '27746-7680639-1', 'ws_CO_DMZ_390186692_2207201923', 1, 'NGM0FVAIFG', 0, '20190722232406', '254711331782'),
(3, '0', 'The service request is processed successfully.', '27747-7684367-1', 'ws_CO_DMZ_390187694_2207201923', 1, 'NGM3FVC4NX', 0, '20190722233515', '254711331782'),
(4, '0', 'The service request is processed successfully.', '27746-7685346-1', 'ws_CO_DMZ_390187909_2207201923', 1, 'NGM6FVCIN2', 0, '20190722233812', '254711331782'),
(5, '0', 'The service request is processed successfully.', '1932-7771724-1', 'ws_CO_DMZ_390187998_2207201923', 1, 'NGM1FVCOUT', 0, '20190722233918', '254711331782'),
(6, '0', 'The service request is processed successfully.', '14218-7732782-1', 'ws_CO_DMZ_390211653_2307201907', 1, 'NGN3FWNVY3', 0, '20190723072229', '254711331782'),
(7, '0', 'The service request is processed successfully.', '14218-7738277-1', 'ws_CO_DMZ_390212712_2307201907', 1, 'NGN2FWTHJK', 0, '20190723073439', '254711331782'),
(8, '0', 'The service request is processed successfully.', '18437-7914320-1', 'ws_CO_DMZ_390212795_2307201907', 1, 'NGN5FWTWHZ', 0, '20190723073538', '254711331782');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(5) NOT NULL,
  `orderId` int(5) NOT NULL,
  `itemId` int(5) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `orderId`, `itemId`, `quantity`) VALUES
(1, 1, 29, 1),
(2, 2, 29, 1),
(3, 3, 29, 1),
(4, 4, 32, 1),
(5, 5, 31, 1),
(6, 6, 31, 1),
(7, 7, 30, 1),
(8, 8, 30, 1),
(9, 9, 28, 1),
(10, 10, 28, 1),
(11, 11, 28, 1),
(12, 12, 28, 1),
(13, 13, 29, 1),
(14, 14, 29, 1),
(15, 15, 28, 1),
(16, 16, 30, 1),
(17, 17, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `usrId` int(5) NOT NULL,
  `amount` decimal(5,0) NOT NULL,
  `mpesa` int(20) DEFAULT NULL,
  `cancel` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `usrId`, `amount`, `mpesa`, `cancel`) VALUES
(1, 1, '1', 1, 0),
(2, 1, '1', NULL, 0),
(3, 1, '1', NULL, 0),
(4, 1, '1', NULL, 0),
(5, 1, '1', NULL, 0),
(6, 1, '1', NULL, 0),
(7, 1, '1', NULL, 0),
(8, 1, '1', NULL, 0),
(9, 1, '1', NULL, 0),
(10, 1, '1', NULL, 0),
(11, 1, '1', NULL, 0),
(12, 1, '1', NULL, 0),
(13, 1, '1', NULL, 0),
(14, 1, '1', NULL, 0),
(15, 1, '1', NULL, 0),
(16, 1, '1', NULL, 0),
(17, 1, '1', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(5) NOT NULL,
  `usrid` int(5) DEFAULT NULL,
  `itemid` int(11) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `email` varchar(50) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `userid` varchar(32) DEFAULT NULL,
  `userlevel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `fname`, `lname`, `username`, `password`, `email`, `phoneNo`, `userid`, `userlevel`) VALUES
(1, 'darthvader', 'darthvader', 'darthvader', '0289c05ce4675b7ca3cc7b97588715cf', 'darthvader@sas.asa', '254711331782', 'e1950db9c35264626e31ded5f94e7a5c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishId` int(5) NOT NULL,
  `itemId` int(5) NOT NULL,
  `usrId` int(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

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
-- Indexes for table `mpesa`
--
ALTER TABLE `mpesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderId` (`orderId`,`itemId`),
  ADD KEY `itemid_cons` (`itemId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usrId` (`usrId`),
  ADD KEY `mpesa_cons` (`mpesa`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemid` (`itemid`),
  ADD KEY `usrid` (`usrid`);

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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `mpesa`
--
ALTER TABLE `mpesa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishId` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `useraddr_cons` FOREIGN KEY (`userId`) REFERENCES `users` (`Id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_borrowed` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `itemid_cons` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`),
  ADD CONSTRAINT `orderid_cons` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `mpesa_cons` FOREIGN KEY (`mpesa`) REFERENCES `mpesa` (`id`),
  ADD CONSTRAINT `usrid_cons` FOREIGN KEY (`usrId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
