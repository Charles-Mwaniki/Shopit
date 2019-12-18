-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 05:14 PM
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
  `instock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `itemname`, `description`, `date`, `price`, `instock`) VALUES
(7, 'Mens African Print Traditional Shirt', 'Traditional Dress Shirt in the blue and gold leaves print makes for the perfect culturally confident look', '2019-06-28 10:22:28', 2, 0),
(8, 'Kano Button-Up African Print Long Sleeve', 'Rock our Kano Button-Up African Print Long Sleeve Demin Mandarin Shirt in Red/Blue Patchwork for just about any occasion.', '2019-06-28 10:25:00', 5, 0),
(9, 'Jide Mens Short Sleeve Traditional Shirt', 'Rock our Kano Button-Up African Print Long Sleeve Demin Mandarin Shirt in Red/Blue Patchwork for just about any occasion.', '2019-06-28 10:30:46', 2, 0),
(11, 'Men\'s African Print Polo Shirt', 'Stand out this season, and celebrate your culture with our Tunde Men\'s Polo in Blue Crown. ', '2019-06-28 10:37:19', 3, 0),
(12, ' Men\'s African Print Traditional Shirt ', 'The Lekan Men\'s African Print Traditional Dress Shirt in the blue and gold leaves print makes for the perfect culturally confident look.', '2019-06-28 10:38:46', 4, 0),
(13, 'African Print Knee-Length Pencil Skirt', 'Zari Women\'s African Print Knee-Length Pencil Skirt in the yellow and pink patchwork. ', '2019-06-28 10:40:42', 4, 0),
(14, 'African Print Girls\' Summer Dress', 'The Bola African Print Girl\'s Summer Dress in pink and purple kente makes for the ideal summer dress for girls with style.', '2019-06-28 10:41:53', 3, 0),
(15, ' Boys\' Button-up Shirt ', ' Boys\' Button-up Shirt in blue and yellow multi-stripe embodies the essence of a vibrant and stylish boy.', '2019-06-28 10:42:46', 3, 0),
(16, 'Girl\'s Button-up Skirt', 'Girl\' Button-up Skirt in blue and yellow multi-stripe embodies the essence of a vibrant and stylish boy.', '2019-06-28 10:44:56', 3, 0),
(17, 'High-low Peplum Wrap Dress', 'Rock the chiffon Adeah Women\'s African Print High-low Peplum Wrap Top with Black Sunbursts to achieve an easygoing transitional piece into your spring', '2019-06-28 15:36:31', 2, 0),
(18, ' Knee-Length Pencil Skirt ', 'Rock African print in style with our curve-hugging Zari Women\'s African Print Knee-Length Pencil Skirt in the blue and gold leaves.', '2019-06-28 15:38:44', 5, 0),
(19, ' Knee Length Fold Over Dress ', 'Rock African print in this contemporary style with our stretchy Azmera Women\'s African Print Knee-Length Fold over Dress in the pink and blue leaves.', '2019-06-28 15:40:31', 5, 0),
(20, ' High Scoop Neck Maxi Dress', 'Embody royalty when rocking the Ife African Print High Scoop Neck Maxi Dress in the orange tortoise back. ', '2019-06-28 15:42:36', 5, 0),
(21, 'Mandarin Collar Shirt Dress', 'Accentuate yourself in this polished A-line, below-the-knee length shirt dress. ', '2019-06-28 15:44:18', 5, 0),
(22, 'Abina Skirt for Little Girls ', 'This full skirt with a sash will look super cute on your little girl! It\'ll give her a stylish skirt to match her mommy in.', '2019-06-28 15:46:53', 5, 0),
(23, 'Kid\'s Dashiki T-Shirt', 'Looking for something unique and cultural for your little one? We\'ve got it', '2019-06-28 15:50:28', 5, 0),
(24, 'Kid\'s Dashiki T-Shirt ', 'Looking for something unique and cultural for your little one? We\'ve got it', '2019-06-28 15:51:32', 2, 0),
(25, 'Sadik Short Sleeve T-shirt', 'Our Sadik African Print Short Sleeve Tee (Yellow/Green Kente) is made especially for the culturally confident gentleman.', '2019-06-28 15:57:32', 2, 0),
(26, 'Keyon Button-Up Shirt', 'Specially made for the fashion-forward gentleman, rock the Keyon Button-Up African Shirt in orange and navy this summer. ', '2019-06-28 15:59:03', 2, 0),
(27, 'Seun Men\'s T-Shirt with Pocket ', 'Rock the Seun Men\'s African Print T-Shirt in the orange tortoise back for a relaxed culturally confident look.', '2019-06-28 16:00:23', 2, 0),
(28, 'Mosi Men\'s Denim Shirt', 'The Mosi Men\'s African Print Denim Shirt in the yellow and green copper embodies the perfect vintage vibes with a modern twist. ', '2019-06-28 16:02:24', 1, 0),
(29, 'Rammy Men\'s Blazer', 'Be stylish and unique at your next formal event in our Rammy African print blazer jacket!', '2019-06-28 16:03:46', 1, 0),
(30, 'Kofi Men\'s Bomber Jacket ', 'You\'ll steal the spotlight with our Kofi Men\'s African Print Bomber Jacket (Maroon Multipattern).', '2019-06-28 16:04:54', 1, 0),
(31, 'Remi Women\'s Bomber Jacket', 'Rock African Print in style even when the weather gets colder with our yellow and blue multipattern Remi Bomber jacket! ', '2019-06-28 16:06:18', 1, 0),
(32, 'Remi Women\'s Print Bomber Jacket', 'Rock African Print in style even when the weather gets colder with our maroon multipattern Remi Bomber jacket! ', '2019-06-28 16:07:11', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mpesa`
--

CREATE TABLE `mpesa` (
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

INSERT INTO `mpesa` (`resultCode`, `resultDesc`, `merchantRequestID`, `checkoutRequestID`, `amount`, `mpesaReceiptNumber`, `balance`, `transactionDate`, `phoneNumber`) VALUES
('0', 'The service request is processed successfully.', '27746-2961288-1', 'ws_CO_DMZ_388318774_1607201911', 2, 'NGG1AZV1H7', 0, '20190716110655', '254701940854'),
('0', 'The service request is processed successfully.', '14218-2942422-1', 'ws_CO_DMZ_388326230_1607201911', 1, 'NGG0B0L2R4', 0, '20190716113523', '254798635930'),
('0', 'The service request is processed successfully.', '18853-2997839-1', 'ws_CO_DMZ_388329161_1607201911', 2, 'NGG8B0TD7I', 0, '20190716114432', '254793873450'),
('0', 'The service request is processed successfully.', '25639-3037961-1', 'ws_CO_DMZ_388329946_1607201911', 1, 'NGG8B0W5XC', 0, '20190716114746', '254701940854'),
('0', 'The service request is processed successfully.', '1926-3016742-1', 'ws_CO_DMZ_388337187_1607201912', 2, 'NGG7B1I7AP', 0, '20190716121207', '254701940854');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `usrId` int(5) NOT NULL,
  `itemId` int(5) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `mpesa` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `usrId`, `itemId`, `amount`, `mpesa`) VALUES
(83, 22, 32, '2', NULL);

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

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `usrid`, `itemid`, `title`, `review`, `rating`) VALUES
(5, NULL, 8, 'dfd', 'fdff', 8),
(6, 2, NULL, 'dsc', '\nA very important sidenote: file_put_contents() is a memory nightmare in comparison to fopen(). I love to use it but when handling large files you want to be able to \"stream\" data into it. PHP will require a large multiple of final filesize as internal memory', NULL),
(7, 1, NULL, 'fdvdv', '\nA very important sidenote: file_put_contents() is a memory nightmare in comparison to fopen(). I love to use it but when handling large files you want to be able to \"stream\" data into it. PHP will require a large multiple of final filesize as internal memory', NULL),
(8, NULL, NULL, 'Mpesa review', 'I got to pay with it', NULL);

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
  `phoneNo` varchar(20) DEFAULT NULL,
  `userid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `fname`, `lname`, `username`, `password`, `userlevel`, `email`, `phoneNo`, `userid`) VALUES
(17, 'mwanikii', 'mwanikii', 'mwanikii', '29dd051fdf5c44323dbd61ffa38340ff', 1, 'mwanikii@aa.sas', '2147483647', ''),
(18, 'asasas', 'asasdsadsa', 'sadasdasds', 'bb97ca3bb1bfbf6827fe4bdb3c1e9dc7', 1, 'sadasd@asa.ds', '711331782', ''),
(19, 'sdcsdcsd', 'sdcsdcd', 'dscscsdcds', '2807aca7e2f06f7a3dc31b6ce306b408', 1, 'dscscs@dc.ds', '2147483647', ''),
(20, 'dsscdssaa', 'dsscdssaa', 'dsscdssaa', 'df2129da4112aa58de2a35e008e6efa4', 1, 'dsscdss@aa.sd', '254711331782', ''),
(21, 'admin', 'mwaniki', 'admin', 'b95d2855669fd25421cdf85e4da47710', 9, 'admin@saa.sas', '254711331782', 'a3114f14c6a54cecd4dd18bdc5a8f4bd'),
(22, 'harun', 'harun', 'harun', 'b95d2855669fd25421cdf85e4da47710', 1, 'harun@dsd.gfg', '254701940854', '6c4be630b07b96aeae358225fdc40d8f'),
(23, 'mwanikiiii', 'mwanikiiii', 'mwaniki', 'b95d2855669fd25421cdf85e4da47710', 1, 'mwanikiii@icdsc.cd', '254723519740', '3ba4da9888dd7d36359d6689702989b4');

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
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishId`, `itemId`, `usrId`, `date`, `amount`) VALUES
(4, 26, 21, '2019-07-16 08:32:37', 1);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usrId` (`usrId`),
  ADD KEY `itemId` (`itemId`),
  ADD KEY `mpesa` (`mpesa`);

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_borrowed` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `itemid_cons` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usrid_cons` FOREIGN KEY (`usrId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_item_fk` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_usr_fk` FOREIGN KEY (`usrid`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_grade_id` FOREIGN KEY (`itemId`) REFERENCES `images` (`imageId`),
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`usrId`) REFERENCES `users` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
