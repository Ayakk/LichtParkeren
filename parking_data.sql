-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jan 2020 om 13:08
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lichtparkeren_DB`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `parking_data`
--

CREATE TABLE `parking_data` (
  `position` varchar(4) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `parking_data`
--

INSERT INTO `parking_data` (`position`, `date`, `status`) VALUES
('A01', '2020-01-23', 1),
('A02', '2020-01-23', 0),
('A03', '2020-01-23', 0),
('A04', '2020-01-23', 0),
('B01', '2020-01-22', 1),
('B02', '2020-01-23', 0),
('B03', '2020-01-23', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `parking_data`
--
ALTER TABLE `parking_data`
  ADD PRIMARY KEY (`position`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
