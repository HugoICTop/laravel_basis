-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 jul 2023 om 22:06
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basis`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `demonstrations`
--

CREATE TABLE `demonstrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(2) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `afspraak` varchar(50) NOT NULL,
  `tijd` varchar(10) DEFAULT NULL,
  `monteur` varchar(50) NOT NULL,
  `naam` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `demonstrations`
--

INSERT INTO `demonstrations` (`id`, `type`, `datum`, `afspraak`, `tijd`, `monteur`, `naam`, `created_at`, `updated_at`) VALUES
(101, 3, '2023-07-12', 'geboekt!', '13:30 uur', 'Rolf van Vleuten', 'Rolf', '2023-07-11 09:16:06', '2023-07-12 20:03:01'),
(102, 2, '2023-07-14', 'Vrijdag 21 juli', '8:00 uur', 'Chris Goedhart', 'Chris', '2023-07-11 09:16:06', '2023-07-13 18:51:08'),
(103, 2, '2023-07-14', 'Woensdag 17 augustus', '14:00 uur', 'Chris Goedhart', 'Chris', '2023-07-11 09:16:06', '2023-07-13 09:48:26'),
(104, 2, '2023-07-15', 'Woensdag 17 augustus', '10:30 uur', 'Bart Flink', 'Bart', '2023-07-11 09:16:06', '2023-07-13 11:11:52'),
(109, 5, '2023-07-14', 'Afspraak 1', '13:30 uur', 'Rolf van Vleuten', 'Rolf', '2023-07-13 10:11:58', '2023-07-13 10:11:58'),
(110, 5, '2023-07-16', 'geboekt!', '8:00 uur', 'Chris Goedhart', 'Chris', '2023-07-13 10:11:58', '2023-07-13 10:25:42'),
(111, 5, '2023-07-16', 'Afspraak 3', '14:00 uur', 'Chris Goedhart', 'Chris', '2023-07-13 10:11:58', '2023-07-13 10:11:58'),
(112, 5, '2023-07-17', 'Afspraak 4', '10:30 uur', 'Bart Flink', 'Bart', '2023-07-13 10:11:58', '2023-07-13 10:11:58');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `demonstrations`
--
ALTER TABLE `demonstrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `demonstrations`
--
ALTER TABLE `demonstrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
