-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jan 2020 om 07:47
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
-- Database: `lichtparkeren`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `parkeer_data`
--

CREATE TABLE `parkeer_data` (
  `positie` varchar(3) NOT NULL,
  `datum` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `parkeer_data`
--

INSERT INTO `parkeer_data` (`positie`, `datum`, `status`) VALUES
('A1', '2020-01-22', 1),
('A2', '2020-01-22', 0),
('A3', '2020-01-22', 0),
('B1', '2020-01-22', 0),
('B2', '2020-01-22', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `parkeer_data`
--
ALTER TABLE `parkeer_data`
  ADD PRIMARY KEY (`positie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
