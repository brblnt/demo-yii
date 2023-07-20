-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Júl 20. 19:46
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `test-site`
--
CREATE DATABASE IF NOT EXISTS `test-site` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `test-site`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `text` varchar(255) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `company`
--

INSERT INTO `company` (`text`) VALUES
('Cegunk .....');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `contact`
--

INSERT INTO `contact` (`name`, `text`, `id`) VALUES
('Test', 'test message ', 22);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `text` varchar(500) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `services`
--

INSERT INTO `services` (`text`) VALUES
('<h1>Formázott </h1><p style=\"margin-left: 40px;\"><em>Szöveg</em></p><p style=\"margin-left: 40px;\"><del>áthúzott</del><br></p><p style=\"margin-left: 40px;\">... <br></p>'),
('<h1>Formázott </h1><p style=\"margin-left: 40px;\"><em>Szöveg</em></p><p style=\"margin-left: 40px;\"><del>áthúzott</del><br></p><p style=\"margin-left: 40px;\">... <br></p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
