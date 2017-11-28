-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:13 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `item`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `surname` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pnumber` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `postcode` varchar(1000) NOT NULL,
  `state` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `surname`, `name`, `email`, `pnumber`, `address`, `postcode`, `state`, `message`) VALUES
(1, 'boo', 'bernard', 'bernard@hotmail.com', '017-5555555', 'lorong impian 4', '14000', 'penang', 'good services');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `user_id` int(255) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `item_id` int(255) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`id`, `name`, `user_id`, `contact`, `address`, `item_id`, `email`, `quantity`) VALUES
(1, 'bernard', 2, '017-5555555', 'lorong impian 4', 1, 'bbb2@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `categories` varchar(1000) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `item_name`, `price`, `quantity`, `image`, `categories`, `gender`) VALUES
(1, 'Cargo trousers', '129.00', 49, 'Cargo_trousers.jpg', 'newArrival', 'men'),
(2, 'Merino wool blend jumper', '129.00', 39, 'Merino_wool-blend_jumper.jpg', 'newArrival', 'men'),
(3, 'Oversized hooded top', '169.00', 0, 'Oversized_hooded_top.jpg', 'newArrival', 'men'),
(4, 'Suit trousers slim fit', '149.00', 0, 'Suit_trousers_slim_fit.jpg', 'newArrival', 'men'),
(5, 'Sweatshirt with embroidery', '149.00', 0, 'Sweatshirt_with_embroidery.jpg', 'newArrival', 'men'),
(6, 'Twill pea coat', '149.00', 0, 'Twill_pea_coat.jpg', 'newArrival', 'men'),
(7, 'Skinny Low Jeans', '89.00', 0, 'Skinny_Low_Jeans.jpg', 'jeans', 'men'),
(8, 'Skinny Low Trashed Jeans', '199.00', 0, 'Skinny_Low_Trashed_Jeans.jpg', 'jeans', 'men'),
(9, 'Skinny2 Low Jeans', '89.00', 0, 'Skinny2_Low_Jeans.jpg', 'jeans', 'men'),
(10, 'Skinny2 Low Trashed Jeans', '199.00', 0, 'Skinny2_Low_Trashed_Jeans.jpg', 'jeans', 'men'),
(11, 'Skinny3 Low Jeans', '89.00', 0, 'Skinny3_Low_Jeans.jpg', 'jeans', 'men'),
(12, 'Skinny4 Low Jeans', '89.00', 0, 'Skinny4_Low_Jeans.jpg', 'jeans', 'men'),
(13, 'Cotton shirt Regular fit', '69.00', 0, 'Cotton_shirt_Regular_fit.jpg', 'shirt', 'men'),
(14, 'Easy2 iron shirt slim fit', '59.00', -1, 'Easy2-iron_shirt_slim_fit.jpg', 'shirt', 'men'),
(15, 'Easy3 iron shirt slim fit', '59.00', 0, 'Easy3-iron_shirt_slim_fit.jpg', 'shirt', 'men'),
(16, 'Easy iron shirt slim fit', '59.00', 0, 'Easy-iron_shirt_slim_fit.jpg', 'shirt', 'men'),
(17, 'Flannel shirt regular fit', '129.00', 0, 'Flannel_shirt_regular_fit.jpg', 'shirt', 'men'),
(18, 'Flannel2 shirt regular fit', '129.00', 0, 'Flannel2_shirt_regular_fit.jpg', 'shirt', 'men'),
(19, 'Short chino shorts', '69.00', -1, 'Short_chino_shorts.jpg', 'short', 'men'),
(20, 'Sweatshirt shorts', '69.00', 0, 'Sweatshirt_shorts.jpg', 'short', 'men'),
(21, 'Sweatshirt2 shorts', '99.00', 0, 'Sweatshirt2_shorts.jpg', 'short', 'men'),
(22, 'Sweatshirt3 shorts', '69.00', 0, 'Sweatshirt3_shorts.jpg', 'short', 'men'),
(23, 'Twill shorts', '99.00', 0, 'Twill_shorts.jpg', 'short', 'men'),
(24, 'Twill2 shorts', '99.00', 0, 'Twill2_shorts.jpg', 'short', 'men'),
(25, 'Cotton jersey t-shirt', '69.00', 0, 'Cotton_jersey_t-shirt.jpg', 'tshirt', 'men'),
(26, 'Printed T-shirt', '69.00', 0, 'Printed_T-shirt.jpg', 'tshirt', 'men'),
(27, 'Round-necked - shirt regular fit', '49.00', 0, 'Round-necked_t-shirt_regular_fit.jpg', 'tshirt', 'men'),
(28, 'Round-necked t-shirt slim fit', '49.00', 0, 'Round-necked_t-shirt_slim_fit.jpg', 'tshirt', 'men'),
(29, 'T-shirt Regular fit', '39.00', 0, 'T-shirt_Regular_fit.jpg', 'tshirt', 'men'),
(30, 'Waffled top', '69.00', 0, 'Waffled_top.jpg', 'tshirt', 'men'),
(31, 'Cashmere jumper', '449.00', 0, 'cashmere_jumper.jpg', 'wnewArrival', 'women'),
(32, 'Long tiered dress', '199.00', 0, 'long_tiered_dress.jpg', 'wnewArrival', 'women'),
(33, 'Mohair-blend polo-neck jumper', '299.00', 0, 'mohair-blend_polo-neck_jumper.jpg', 'wnewArrival', 'women'),
(34, 'Padded Jacket', '199.00', 0, 'paddedjacket.jpg', 'wnewArrival', 'women'),
(35, 'Pleated dress', '299.00', 0, 'pleated_dress.jpg', 'wnewArrival', 'women'),
(36, 'Tie-front blouse', '69.00', 0, 'tie-front_blouse.jpg', 'wnewArrival', 'women'),
(37, 'Jacquard-knit dress', '149.00', 0, 'jacquard-knit_dress.jpg', 'dress', 'women'),
(38, 'Maxi dress', '149.00', 0, 'maxi_dress.jpg', 'dress', 'women'),
(39, 'One shoulder dress', '249.00', 0, 'one_shoulder_dress.jpg', 'dress', 'women'),
(40, 'Pleated dress', '249.00', 0, 'pleated_dress.jpg', 'dress', 'women'),
(41, 'Sleeveless shirt dress', '99.00', 0, 'sleeveless_shirt_dress.jpg', 'dress', 'women'),
(42, 'Textured dress', '134.00', 0, 'textured_dress.jpg', 'dress', 'women'),
(43, 'Boyfriend low ripped jeans', '149.00', 0, 'boyfriend_low_ripped_jeans.jpg', 'wjeans', 'women'),
(44, 'Denim dungarees', '199.00', 0, 'denim_dungarees.jpg', 'wjeans', 'women'),
(45, 'Skinny regular ankle jeans', '59.00', 0, 'skinny_regular_ankle_jeans.jpg', 'wjeans', 'women'),
(46, 'Straight cropped jeans', '99.00', 0, 'straight_cropped_jeans.jpg', 'wjeans', 'women'),
(47, 'Straight regular jeans', '199.00', 0, 'straight_regular_jeans.jpg', 'wjeans', 'women'),
(48, 'Super skinny high jeans', '99.00', 0, 'super_skinny_high jeans.jpg', 'wjeans', 'women'),
(49, 'Cotton shorts', '99.00', 0, 'cotton_shorts.jpg', 'wshort', 'women'),
(50, 'Denim dungaree shorts', '134.00', 0, 'denim_dungaree_shorts.jpg', 'wshort', 'women'),
(51, 'Denim shorts', '129.00', 0, 'denim_shorts.jpg', 'wshort', 'women'),
(52, 'Shorts high waist', '99.00', 0, 'shorts_high_waist.jpg', 'wshort', 'women'),
(53, 'Smart-shorts', '99.00', 0, 'smart-shorts.jpg', 'wshort', 'women'),
(54, 'Sweatshirt shorts', '59.00', 0, 'sweatshirt_shorts.jpg', 'wshort', 'women'),
(55, 'Flounced top', '149.00', 0, 'flounced_top.jpg', 'top', 'women'),
(56, 'Lace top', '149.00', 0, 'lace_top.jpg', 'top', 'women'),
(57, 'Linen round-neck top', '69.00', 0, 'linen_round-neck_top.jpg', 'top', 'women'),
(58, 'Off-the-shoulder top', '89.00', 0, 'off-the-shoulder_top.jpg', 'top', 'women'),
(59, 'Sleeveless top with lace', '49.00', 0, 'sleeveless_top_with_lace.jpg', 'top', 'women'),
(60, 'Strappy velour top', '59.00', 0, 'strappy_velour_top.jpg', 'top', 'women'),
(61, '', '0.00', 0, '', '', ''),
(62, '', '0.00', 0, '', '', ''),
(63, '', '0.00', 0, '', '', ''),
(64, '', '0.00', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'bbb@gmail.com', '111222', 'bernard'),
(2, 'bbb2@hotmail.com', '111222', 'bernard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
