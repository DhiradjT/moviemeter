-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 dec 2022 om 19:48
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviemeter`
--
CREATE DATABASE IF NOT EXISTS `moviemeter` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `moviemeter`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `blackadam`
--

CREATE TABLE `blackadam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `blackadam`
--

INSERT INTO `blackadam` (`id`, `name`, `lastName`, `review`) VALUES
(1, 'Dhiradj', 'Tangali', 'Dit was echt een hele goede film met een hele sterke storyline. ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`id`, `name`, `lastName`, `review`, `image`) VALUES
(1, 'JONATHAN', 'BRIE', 'Each man and woman is resplendent in Ruth Carter\'s traditional costumes. Indigenous dialects are spoken amid the space flights, museum heists, and car chases. ', ''),
(2, 'CARLOS ', 'M', 'This movie lived up to its hype. it\'s possibly one of the best films of its kind, and I especially liked the development of all the characters. ', ''),
(3, 'CORY', 'WOODROOF', 'I caught Black Panther again and my opinions on the film is unchanged. It\'s a well made action film, but nothing special. ', ''),
(4, 'NATHAN', 'SKY', 'It was about time we saw a Marvel superhero blockbuster starring mostly African-American actors and achieving succes', ''),
(5, 'DHIRADJ', 'TANGALI', 'It was a great movie', ''),
(6, 'Robert', 'Devilee', 'Fantastische film vooral de onderwater scene. Een van de beste films van het jaar. ', ''),
(7, 'Ahmed', 'Ali', 'Dit was echt een stomme film. Ik heb echt een hekel aan de nieuwe personages', ''),
(8, 'Zimbabwe', 'Krokodil', 'Goede film met vooral veel drama scenes.', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `maverick`
--

CREATE TABLE `maverick` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `maverick`
--

INSERT INTO `maverick` (`id`, `name`, `lastName`, `review`) VALUES
(1, 'Dhiradj ', 'Tangali', 'Dit was echt een leuke film'),
(2, 'Bart', 'Bakker', 'Dit was een geweldige film');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `minions`
--

CREATE TABLE `minions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `minions`
--

INSERT INTO `minions` (`id`, `name`, `lastName`, `review`) VALUES
(1, 'Dhiradj', 'Tangali', 'Super leuke film');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `smile`
--

CREATE TABLE `smile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `smile`
--

INSERT INTO `smile` (`id`, `name`, `lastName`, `review`) VALUES
(1, 'Dhiradj', 'Tangali', 'Matige horror film'),
(2, 'Tom ', 'Holland', 'This was a really terrifying movie. It was worth my money.'),
(3, 'Kendall', 'Knight', 'Again a decent horror movie, not scary enough. '),
(4, 'Scott ', 'Fellows', 'Great movie, enojoyed every moment of it.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `blackadam`
--
ALTER TABLE `blackadam`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `maverick`
--
ALTER TABLE `maverick`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `minions`
--
ALTER TABLE `minions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `smile`
--
ALTER TABLE `smile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `blackadam`
--
ALTER TABLE `blackadam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `maverick`
--
ALTER TABLE `maverick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `minions`
--
ALTER TABLE `minions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `smile`
--
ALTER TABLE `smile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
