-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране: 26 апр 2022 в 12:19
-- Версия на сървъра: 10.4.22-MariaDB
-- Версия на PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `device_list`
--

-- --------------------------------------------------------

--
-- Структура на таблица `list`
--

CREATE TABLE `list` (
  `id` int(5) NOT NULL,
  `name` varchar(12) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `mac` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `list`
--

INSERT INTO `list` (`id`, `name`, `ip`, `mac`) VALUES
(17, 'U1-R105-02', '192.168.7.2', 'F3-6A-FD-72-56-02'),
(18, 'U1-R105-03', '192.168.7.3', 'F3-6A-FD-72-56-03'),
(20, 'U1-R105-01', '192.168.7.1', 'F3-6A-FD-72-56-01'),
(21, 'U2-R024-01', '192.168.5.1', '6F-7A-1C-05-65-C1'),
(22, 'U2-R024-02', '192.168.5.2', '6F-7A-1C-05-65-C2'),
(23, 'U2-R024-03', '192.168.5.3', '6F-7A-1C-05-65-C3'),
(24, 'U2-R024-04', '192.168.5.4', '6F-7A-1C-05-65-C4'),
(25, 'U2-R024-05', '192.168.5.5', '6F-7A-1C-05-65-C5'),
(26, 'U2-R024-06', '192.168.5.6', '6F-7A-1C-05-65-C6'),
(27, 'U2-R024-07', '192.168.5.7', '6F-7A-1C-05-65-C7'),
(28, 'U2-R024-08', '192.168.5.8', '6F-7A-1C-05-65-C8'),
(29, 'U2-R024-09', '192.168.5.9', '6F-7A-1C-05-65-C9'),
(30, 'U2-R024-10', '192.168.5.10', '4D-12-28-A6-8A-F1'),
(31, 'U2-R024-11', '192.168.5.11', '4D-12-28-A6-8A-F2'),
(32, 'U2-R024-12', '192.168.5.12', '4D-12-28-A6-8A-F3'),
(33, 'U2-R024-13', '192.168.5.13', '4D-12-28-A6-8A-F4');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
