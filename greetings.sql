-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 jul 2023 om 22:07
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
-- Tabelstructuur voor tabel `greetings`
--

CREATE TABLE `greetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `demonstration_id` bigint(11) DEFAULT NULL,
  `demonstration` varchar(100) DEFAULT NULL,
  `machine` varchar(50) DEFAULT NULL,
  `klacht` varchar(150) DEFAULT NULL,
  `datum1` date DEFAULT NULL,
  `bezoekdatum` date DEFAULT NULL,
  `body` varchar(1000) DEFAULT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `bedrijf` varchar(50) DEFAULT NULL,
  `voornaam` varchar(25) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `telefoon` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `greetings`
--

INSERT INTO `greetings` (`id`, `demonstration_id`, `demonstration`, `machine`, `klacht`, `datum1`, `bezoekdatum`, `body`, `naam`, `bedrijf`, `voornaam`, `email`, `telefoon`, `created_at`, `updated_at`) VALUES
(10, 72, '10:30 uur', NULL, NULL, '2023-06-15', '2023-06-17', 'Bart Flink', NULL, '', NULL, NULL, NULL, '2023-06-15 06:07:43', '2023-06-15 06:07:43'),
(11, 69, '13:30 uur', NULL, NULL, '2023-06-15', '2023-06-14', 'Rolf van Vleuten', NULL, '', NULL, NULL, NULL, '2023-06-15 06:14:17', '2023-06-15 06:14:17'),
(12, 73, '8:00 uur', NULL, NULL, '2023-06-18', '2023-06-21', 'Chris Goedhart', NULL, '', NULL, NULL, NULL, '2023-06-18 17:30:48', '2023-06-18 17:30:48'),
(13, 76, 'contact aanvraag', NULL, NULL, '2023-06-18', '2023-06-18', NULL, NULL, '', NULL, NULL, NULL, '2023-06-18 17:52:29', '2023-06-20 19:49:54'),
(17, NULL, 'contact aanvraag', NULL, NULL, '2023-06-18', NULL, 'Dankzij Max werkt het nu!', 'Hugo', '', NULL, 'hviergever@hotmail.com', '0650171011', '2023-06-18 20:07:29', '2023-06-18 20:07:29'),
(477, 104, '10:30 uur', NULL, NULL, '2023-07-12', '2023-07-15', NULL, 'Sjakie', '4Gever Bestratingen bv Terslinge', NULL, NULL, '06-687932', '2023-07-12 12:01:22', '2023-07-12 12:01:22'),
(478, 101, '13:30 uur', NULL, NULL, '2023-07-12', '2023-07-12', NULL, 'hugo', '4Gever Bestratingen bv', NULL, NULL, '06-687932', '2023-07-12 12:52:27', '2023-07-12 12:52:27'),
(514, NULL, 'contactformulier', NULL, NULL, '2023-07-13', NULL, 'Ik zou het fijn vinden om even verder te praten over een nieuwe website, of een uitbreiding op de huidige.', 'De heer Van der Mark', 'niet gevraagd', NULL, 'fiets24@kts.nl', '25532', '2023-07-13 11:05:35', '2023-07-13 11:05:35'),
(515, 104, 'Woensdag 17 augustus', NULL, '10:30 uur', '2023-07-13', '2023-07-15', 'Van der Werfplantsoen 22 in Leiden', 'Fredje', NULL, NULL, NULL, '06-687932', '2023-07-13 11:12:29', '2023-07-13 11:12:29'),
(516, 102, 'Vrijdag 21 juli', NULL, '8:00 uur', '2023-07-13', '2023-07-14', 'Van der Werfplantsoen 22 in Leiden', 'Fredje', NULL, NULL, NULL, '06-687932', '2023-07-13 18:52:43', '2023-07-13 18:52:43');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `greetings`
--
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `greetings`
--
ALTER TABLE `greetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
