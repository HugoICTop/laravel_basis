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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_06_01_192614_create_greetings_table', 1),
(11, '2023_06_11_190008_create_demonstrations_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Mueller', 'admin@admin.com', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lRRQvC46Qg', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(2, 'Mr. Oral Champlin IV', 'nwatsica@example.org', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1pt8KWDUOK', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(3, 'Miss Lolita Collins', 'kasey58@example.com', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UVhdy9u81V', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(4, 'Vanessa Lakin', 'carli64@example.net', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sY9rNoLhZ4', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(5, 'Arielle Larson', 'keegan.oreilly@example.net', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd4rGO8y7hX', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(6, 'Jeffery Stoltenberg DDS', 'orland89@example.org', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CpESUeTXMM', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(7, 'Maxime Mann', 'alec87@example.org', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PVuUpQPgGU', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(8, 'Eleanore Schultz', 'dreynolds@example.net', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vJdCBnMVX5', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(9, 'Daniela Rodriguez', 'iterry@example.com', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eMLKrAGEg8', '2023-06-11 17:22:02', '2023-06-11 17:22:02'),
(10, 'Garnet Maggio', 'amy37@example.org', '2023-06-11 17:22:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NiOcPit01R', '2023-06-11 17:22:02', '2023-06-11 17:22:02');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `demonstrations`
--
ALTER TABLE `demonstrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexen voor tabel `greetings`
--
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexen voor tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `demonstrations`
--
ALTER TABLE `demonstrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `greetings`
--
ALTER TABLE `greetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
