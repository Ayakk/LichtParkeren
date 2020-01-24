-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 jan 2020 om 16:04
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lichtparkeren_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `parking_data`
--

CREATE TABLE `parking_data` (
  `id` int(5) NOT NULL,
  `position` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `parking_data`
--

INSERT INTO `parking_data` (`id`, `position`, `date`, `status`) VALUES
(0, 'A01', '2020-01-13', 1),
(1, 'A01', '2020-01-01', 0),
(2, 'A02', '2020-01-13', 1),
(3, 'A03', '2020-01-13', 1),
(4, 'A04', '2020-01-13', 1),
(5, 'A05', '2020-01-13', 1),
(6, 'B01', '2020-01-13', 0),
(7, 'B02', '2020-01-13', 1),
(8, 'B03', '2020-01-13', 1),
(9, 'B04', '2020-01-13', 1),
(10, 'B05', '2020-01-13', 1),
(11, 'C01', '2020-01-13', 0),
(12, 'C02', '2020-01-13', 0),
(13, 'C03', '2020-01-13', 1),
(14, 'C04', '2020-01-13', 1),
(15, 'C05', '2020-01-13', 0),
(16, 'A01', '2020-01-14', 1),
(17, 'A02', '2020-01-14', 1),
(18, 'A03', '2020-01-14', 1),
(19, 'A04', '2020-01-14', 1),
(20, 'A05', '2020-01-14', 0),
(21, 'B01', '2020-01-14', 0),
(22, 'B02', '2020-01-14', 1),
(23, 'B03', '2020-01-14', 0),
(24, 'B04', '2020-01-14', 0),
(25, 'B05', '2020-01-14', 1),
(26, 'C01', '2020-01-14', 0),
(27, 'C02', '2020-01-14', 0),
(28, 'C03', '2020-01-14', 0),
(29, 'C04', '2020-01-14', 0),
(30, 'C05', '2020-01-14', 0),
(31, 'A01', '2020-01-15', 1),
(32, 'A02', '2020-01-15', 0),
(33, 'A03', '2020-01-15', 1),
(34, 'A04', '2020-01-15', 1),
(35, 'A05', '2020-01-15', 0),
(36, 'B01', '2020-01-15', 0),
(37, 'B02', '2020-01-15', 0),
(38, 'B03', '2020-01-15', 0),
(39, 'B04', '2020-01-15', 0),
(40, 'B05', '2020-01-15', 0),
(41, 'C01', '2020-01-15', 0),
(42, 'C02', '2020-01-15', 0),
(43, 'C03', '2020-01-15', 0),
(44, 'C04', '2020-01-15', 0),
(45, 'C05', '2020-01-15', 0),
(46, 'A01', '2020-01-16', 0),
(47, 'A02', '2020-01-16', 1),
(48, 'A03', '2020-01-16', 1),
(49, 'A04', '2020-01-16', 0),
(50, 'A05', '2020-01-16', 1),
(51, 'B01', '2020-01-16', 0),
(999, 'Aaa', '2020-01-13', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `parking_data`
--
ALTER TABLE `parking_data`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
