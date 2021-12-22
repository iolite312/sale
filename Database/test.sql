-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 dec 2021 om 10:08
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `highscores`
--

CREATE TABLE `highscores` (
  `UUID` int(11) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Difficulty` int(1) DEFAULT NULL COMMENT 'Difficulty 1=easy 2=normal 3=hard 4=impossible',
  `Max_Wave` int(11) DEFAULT 0,
  `Enemies_Killed` int(11) DEFAULT 0,
  `score` int(13) DEFAULT 0,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `highscores`
--

INSERT INTO `highscores` (`UUID`, `Username`, `Difficulty`, `Max_Wave`, `Enemies_Killed`, `score`, `Date`) VALUES
(1, 'AbsoluteDragon', 1, 12, 65, 0, '2021-11-25'),
(2, 'smeltninny', 1, 12, 60, 0, '2021-11-30'),
(3, 'sheldrakegorilla', 3, 15, 75, 0, '2021-11-30'),
(4, 'bullocksflairhead', 2, 10, 50, 0, '2021-11-30'),
(5, 'polecatspansy', 2, 8, 40, 0, '2021-11-30'),
(6, 'waterfowlbastard', 4, 2, 10, 0, '2021-11-30'),
(7, 'shadscheater', 4, 1, 5, 0, '2021-11-30'),
(8, 'stoatbimbo', 4, 1, 5, 0, '2021-11-30'),
(9, 'jackrabbitdingaling', 1, 5, 25, 0, '2021-11-30'),
(10, 'licejoker', 1, 16, 80, 0, '2021-11-30'),
(11, 'sparrowfibber', 1, 19, 95, 0, '2021-11-30'),
(12, 'turtledovealcoholic', 1, 1, 5, 0, '2021-11-30'),
(13, 'mothcreep', 2, 4, 20, 0, '2021-11-30'),
(14, 'codtyke', 2, 5, 25, 0, '2021-11-30'),
(15, 'wrenmonster', 2, 7, 35, 0, '2021-11-30'),
(16, 'beaverpoontang', 2, 9, 45, 0, '2021-11-30'),
(17, 'mandrillbloated', 3, 9, 45, 0, '2021-11-30'),
(18, 'hartfreak', 1, 10, 50, 0, '2021-11-30'),
(19, 'raccoongeezer', 4, 5, 25, 0, '2021-11-30'),
(20, 'alligatorhooligan', 3, 5, 25, 0, '2021-11-30'),
(21, 'hawkshit', 1, 7, 35, 0, '2021-11-30'),
(22, 'oysterstinker', 1, 1, 5, 0, '2021-11-30'),
(23, 'opossumbint', 2, 1, 5, 0, '2021-11-30'),
(24, 'cranescumbag', 4, 7, 35, 0, '2021-11-30'),
(25, 'meerkatbutt', 2, 22, 110, 0, '2021-11-30'),
(26, 'kittenignoramus', 1, 25, 125, 0, '2021-11-30'),
(27, 'greyhoundmutant', 1, 12, 60, 0, '2021-11-30'),
(28, 'jayminger', 1, 13, 65, 0, '2021-11-30'),
(29, 'cootgannet', 2, 10, 50, 0, '2021-11-30'),
(30, 'zebrawitch', 2, 8, 40, 0, '2021-11-30'),
(31, 'blackfishdipstick', 3, 7, 35, 0, '2021-11-30'),
(32, 'hindsruffian', 3, 7, 35, 0, '2021-11-30'),
(33, 'dunnockdumbo', 3, 9, 45, 0, '2021-11-30'),
(34, 'cormorantbutthead', 1, 10, 50, 0, '2021-11-30'),
(35, 'elkbum', 1, 14, 70, 0, '2021-11-30'),
(36, 'bustardnancy', 1, 15, 75, 0, '2021-11-30'),
(37, 'buzzardape', 1, 16, 80, 0, '2021-11-30'),
(38, 'bisonswindler', 1, 18, 90, 0, '2021-11-30'),
(39, 'dogfishdufus', 1, 21, 105, 0, '2021-11-30'),
(40, 'iguananut', 4, 23, 115, 0, '2021-11-30'),
(41, 'tunashyster', 4, 25, 125, 0, '2021-11-30'),
(42, 'conieplonker', 2, 12, 60, 0, '2021-11-30'),
(43, 'cattlebozo', 2, 8, 40, 0, '2021-11-30'),
(44, 'swanpsycho', 4, 4, 20, 0, '2021-11-30'),
(45, 'pandajackass', 4, 13, 65, 0, '2021-11-30'),
(46, 'viperdick', 4, 12, 60, 0, '2021-11-30'),
(47, 'volesod', 4, 8, 40, 0, '2021-11-30'),
(48, 'houndjunkie', 1, 23, 115, 0, '2021-11-30'),
(49, 'sheepbogeyman', 1, 35, 175, 0, '2021-11-30'),
(50, 'cariboubonehead', 2, 12, 60, 0, '2021-11-30'),
(51, 'coyoteliar', 2, 1, 5, 0, '2021-11-30');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `save_data`
--

CREATE TABLE `save_data` (
  `UUID` int(11) NOT NULL,
  `Current_Wave` int(11) DEFAULT NULL,
  `Tower_Data` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_credentials`
--

CREATE TABLE `user_credentials` (
  `UUID` int(11) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `salt` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_credentials`
--

INSERT INTO `user_credentials` (`UUID`, `User_Name`, `hash`, `salt`) VALUES
(1, 'AbsoluteDragon', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `highscores`
--
ALTER TABLE `highscores`
  ADD PRIMARY KEY (`UUID`);

--
-- Indexen voor tabel `save_data`
--
ALTER TABLE `save_data`
  ADD PRIMARY KEY (`UUID`);

--
-- Indexen voor tabel `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`UUID`),
  ADD UNIQUE KEY `User_Name` (`User_Name`),
  ADD UNIQUE KEY `UUID` (`UUID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `highscores`
--
ALTER TABLE `highscores`
  MODIFY `UUID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT voor een tabel `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `UUID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
