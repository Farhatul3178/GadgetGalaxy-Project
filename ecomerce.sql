-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 02:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone`, `address`, `password`, `created_at`) VALUES
(22, 'Ismotara', 'Dipty', 'dipty3243', 'ismotara15-3243@diu.edu.bd', '01715750781', 'sreepur', '$2y$10$vGst4KP6NqEMTvF0XKNBZuTDeC9aazR/skunMjgDB5hYbrLm/i0ou', '2024-04-20 11:43:43'),
(23, 'Md. Farhatul', 'Haider', 'farhatul3178', 'farhatul15-3178@diu.edu.bd', '01715750798', 'Chattogram', '$2y$10$G3UmYIZKBsW/y7/BDcRVQueiLejaBjLHhVAlflrP5hrkxuPGeHDzO', '2024-04-20 11:44:51'),
(24, 'Jamal ', 'Uddin', 'Jamal3198', 'jamaluddin@gmail.com', '017889076', 'Vetjury', '$2y$10$vzNsJyvgjLgSxoaesHxCheW204TVysQhY19sfD7VJxyaAoIzOtl9S', '2024-04-20 11:45:51'),
(25, 'Jamal ', 'Uddin', 'Jamal3198', 'jamaluddin@gmail.com', '017889076', 'Vetjury', '$2y$10$zR2iqRA9McpePVfFaub0lufgwBedxyhWlYHBBoy93bsI3NTTPPh82', '2024-04-20 11:45:51'),
(26, 'Nurul ', 'Islam', 'nurulislam32', 'islam@gmail.com', '017234567', 'Gazipur', '$2y$10$biBW0Jgx0xfJKX7ci5g.U.KYYwiXxT1j8n7vDFYTayRT0FuIzPyK6', '2024-04-20 11:46:39');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
