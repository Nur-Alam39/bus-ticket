-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 04:05 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `no_bus` int(11) NOT NULL,
  `routes` varchar(400) NOT NULL,
  `image` varchar(200) NOT NULL,
  `fb_link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`id`, `bus_name`, `company`, `no_bus`, `routes`, `image`, `fb_link`) VALUES
(1, 'Golden Line', 'KARIM GROUP', 45, 'Dhaka,Barisal,Gopalganj', 'golden.jpg golden1.jpg golden2.jpg', ''),
(2, 'Sheba Green Line', 'Sheba Group', 35, 'Dhaka, Gopalganj, Khulna, Pirojpur', 'sheba_green.jpg sheba_green1.jpg sheba_green3.jpg', ''),
(3, 'Comfort Line', 'Comfort Group', 30, 'Dhaka, Gopalganj, Benapole', 'comfort.jpg comfort1.jpg comfort2.jpg', ''),
(4, 'Sakura', 'SPL', 35, 'Dhaka, Barisal, Khulna', 'sakura5.jpg sakura.jpg sakura3.jpg ', ''),
(5, 'Emad', 'Emad Group', 25, 'Dhaka, Gopalganj, Pirojpur', 'emad.png emad1.jpg emad2.jpg', ''),
(6, 'Tungipara Express', 'Karim Motors', 40, 'Dhaka, Gopalganj, Khulna, Pirojpur', 'tungi2.jpg tungi4.jpg tungi5.jpg', ''),
(7, 'Green Line', 'GPPL', 40, 'Dhaka, Gopalganj, Khulna', 'greenline3.jpg greenline5.jpg greenline8.jpg', ''),
(8, 'Dola', 'Dola Pvt. Ltd', 20, 'Dhaka, Gopalganj, Khulna', 'dola1.jpg dola.jpg dola2.jpg', ''),
(9, 'Hanif Enterprise', 'OVI Motors', 40, 'Dhaka, Khulna, Bagerhat, Chattagram', 'hanif.jpg hanif1.jpg hanif2.jpg hanif3.jpg.', '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_lists`
--

CREATE TABLE `bus_lists` (
  `trip_no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `bus_company` varchar(50) NOT NULL,
  `bus_no` varchar(50) NOT NULL,
  `bus_type` varchar(50) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `seats` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `booked_seat` varchar(1100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_lists`
--

INSERT INTO `bus_lists` (`trip_no`, `id`, `bus_company`, `bus_no`, `bus_type`, `start`, `end`, `date`, `time`, `seats`, `fare`, `booked_seat`) VALUES
(1, 4, 'Sakura', '673', 'Non-Ac', 'Dhaka', 'Khulna', '2018-03-06', '11:20:00', 40, 500, 'a1a3b2c4'),
(2, 1, 'Golden Line', '453', 'AC', 'Gopalganj', 'Dhaka', '2018-03-06', '00:00:09', 22, 400, 'a1a2a3a4b2b4'),
(3, 2, 'Sheba Green Line', '550', 'Non-Ac', 'Gopalganj', 'Dhaka', '2018-03-07', '09:15:00', 66, 400, 'a3b4c3c4'),
(4, 7, 'Green Line', '43', 'Ac', 'Khulna', 'Dhaka', '2018-03-07', '08:15:00', 20, 800, 'b3b4g3h2'),
(5, 7, 'Green Line', '55', 'Ac', 'Khulna', 'Dhaka', '2018-03-07', '07:45:00', 35, 800, 'a1a2b3c4c1'),
(6, 5, 'Emad', '34', 'Non-Ac', 'Khulna', 'Dhaka', '2018-03-07', '07:45:00', 35, 500, 'a1a2b3b4'),
(7, 6, 'Tungipara Express', '34', 'Non-Ac', 'Khulna', 'Dhaka', '2018-03-07', '07:45:00', 35, 500, 'a4b4d1e1');

-- --------------------------------------------------------

--
-- Table structure for table `seat_reservation`
--

CREATE TABLE `seat_reservation` (
  `bus_id` varchar(100) NOT NULL,
  `trip_no` int(11) NOT NULL,
  `passenger_name` varchar(30) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_no` varchar(40) NOT NULL,
  `ticket_no` int(11) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `fare` int(10) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `no_seat` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `trnx_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_reservation`
--

INSERT INTO `seat_reservation` (`bus_id`, `trip_no`, `passenger_name`, `bus_name`, `bus_no`, `ticket_no`, `from`, `to`, `date`, `time`, `fare`, `seat_no`, `no_seat`, `name`, `mobile`, `trnx_id`) VALUES
('', 0, '', '', '', 0, '', '', '0000-00-00', '00:00:00', 0, '', 0, '', '', 'ABDC1234'),
('', 0, '', '', '', 0, '', '', '0000-00-00', '00:00:00', 0, '', 0, '', '', 'abcd1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `bus_lists`
--
ALTER TABLE `bus_lists`
  ADD PRIMARY KEY (`trip_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_info`
--
ALTER TABLE `bus_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bus_lists`
--
ALTER TABLE `bus_lists`
  MODIFY `trip_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
