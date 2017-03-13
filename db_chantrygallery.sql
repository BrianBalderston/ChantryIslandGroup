-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 06:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_chantrygallery
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_images
--

CREATE TABLE tbl_images (
  images_id smallint(4) UNSIGNED NOT NULL,
  images_name varchar(75) NOT NULL,
  images_author varchar(75) NOT NULL,
  images_simg varchar(75) NOT NULL DEFAULT 'sdef.jpg',
  images_fimg varchar(75) NOT NULL DEFAULT 'fdef.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_images
--

INSERT INTO tbl_images (images_id, images_name, images_author, images_simg, images_fimg) VALUES
(1, 'Pink Flower', 'Vicki Tomori', 'gallery-1.jpg', 'Chantry Island Flower.jpg'),
(2, 'Lighthouse and Cabin', 'Vicki Tomori', 'gallery-2.jpg', 'Chantry Island 5.jpg'),
(3, 'Pearless II', 'Wayne MacDonald', 'gallery-4.jpg', 'Peerless II tour Boat.jpg'),
(4, 'Lighthouse Sunset', 'Terry Thomas', 'gallery-5.jpg', 'sunsrt 22.bmp'),
(5, 'Aerial Island', 'James Swartz', 'gallery-6.jpg', 'Chantry Island.jpg'),
(6, 'Cabin Bed', 'James Swartz', 'gallery-7.jpg', 'Chantry Island - inside lightkeepers cottage 3.jpg'),
(7, 'Island Bird', 'Nancy Calder', 'gallery-8.jpg', 'Birds on Chantry Island 1.JPG'),
(8, 'Baby Bird', 'Nancy Calder', 'gallery-9.jpg', 'Birds on Chantry Island 2.JPG'),
(9, 'Far Away Lighthouse', 'Carol Walberg', 'gallery-10.jpg', 'Chantry Island 1.JPG'),
(10, 'Cabin Dinning', 'James Swartz', 'gallery-11.jpg', 'Chantry Island - inside lightkeepers cottage 1.jpg'),
(11, 'Cruising Boat', 'Gale Douglas', 'gallery-12.jpg', 'Peerless II Tour Boat.bmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_images
--
ALTER TABLE tbl_images
  ADD PRIMARY KEY (images_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_images
--
ALTER TABLE tbl_images
  MODIFY images_id smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
