-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 dec 2022 om 15:10
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
-- Indexen voor geëxporteerde tabellen
--

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
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `maverick`
--
ALTER TABLE `maverick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `minions`
--
ALTER TABLE `minions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
