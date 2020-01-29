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
-- Tabelstructuur voor tabel `ai_data`
--

CREATE TABLE `ai_data` (
  `id` int(5) NOT NULL,
  `position` text NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `ai_data`
--

INSERT INTO `ai_data` (`id`, `position`, `date`, `status`) VALUES
(1, 'A-a', '2020-01-29 07:11:10', 1),
(2, 'A-b', '2020-01-29 10:11:10', 1),
(3, 'A-c', '2020-01-29 16:11:10', 1),
(4, 'A-d', '2020-01-29 08:11:10', 1),
(5, 'A-a', '2020-01-28 07:11:10', 1),
(6, 'A-b', '2020-01-28 07:11:10', 1),
(7, 'A-c', '2020-01-28 07:11:10', 1),
(8, 'A-d', '2020-01-28 07:11:10', 1),
(9, 'A-a', '2020-01-27 13:11:10', 1),
(10, 'A-b', '2020-01-27 06:11:10', 1),
(11, 'A-c', '2020-01-27 07:28:10', 1),
(12, 'A-d', '2020-01-27 17:18:28', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ai_data`
--
ALTER TABLE `ai_data`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
