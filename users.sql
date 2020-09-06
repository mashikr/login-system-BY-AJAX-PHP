-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 08:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `about`, `facebook`, `twitter`, `image`) VALUES
(2, 'Ashik', 'ashik@gmail.com', '$2y$10$yDeQO6p1JcxTO8/FCRvprOiz3GwuqXpsVp8rjvjX51CDDbGlvJWUu', '01712327242', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dignissimos, nemo voluptatem accusamus cumque facere veritatis eius harum quo officia esse consequuntur fugiat quod exercitationem et dolores numquam, porro consectetur!', 'https://web.facebook.com/mohammadashikurrahman.sujon', 'www.twitter.com/mdashik', 'mypic2.PNG'),
(3, 'Forhad', 'forhad@gmail.com', '$2y$10$aQvDtudMPkHQDlseuhZ0M.eruv2hOtfjcsJeiOPr5aK1HZiTmwtHe', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, neque atque voluptatum placeat harum eius magni, necessitatibus nisi quo voluptas, dolores eveniet? Tenetur corrupti nesciunt provident quaerat sint rerum ipsam?', '', '', '44090c169f5e7.png'),
(4, 'sony', 'sony@gmail.com', '$2y$10$zTXKl3ejD.GvCQO8eqvBV.xt1a3osmjnoDgP2ad481q5/as3a8a9u', '01712', 'function(index,currentvalue)	Specifies a function that returns the attribute value to set\nindex - Receives the index position of the element in the set\ncurrentvalue - Receives the current attribute value of selected elements', 'www.facebook.com/sony', 'www.twitter.com/sony', '54a754ba966cf.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
