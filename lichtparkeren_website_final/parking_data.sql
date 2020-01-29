-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jan 2020 om 21:36
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
  `position` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `parking_data`
--

INSERT INTO `parking_data` (`id`, `position`, `date`, `status`) VALUES
(1, 'A-a', '2020-01-24', 0),
(2, 'A-b', '2020-01-24', 1),
(3, 'A-c', '2020-01-24', 1),
(4, 'A-d', '2020-01-24', 1),
(5, 'A-e', '2020-01-24', 1),
(6, 'B-a', '2020-01-24', 0),
(7, 'B-b', '2020-01-24', 1),
(8, 'B-c', '2020-01-24', 0),
(9, 'B-d', '2020-01-24', 0),
(10, 'B-e', '2020-01-24', 0),
(11, 'C-a', '2020-01-24', 0),
(12, 'C-b', '2020-01-24', 0),
(13, 'C-c', '2020-01-24', 0),
(14, 'C-d', '2020-01-24', 0),
(15, 'C-e', '2020-01-24', 1);

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
