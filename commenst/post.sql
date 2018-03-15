-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Mrz 2018 um 13:05
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `post`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`posts_id`, `comments`, `post`, `image`) VALUES
(1, 'adadsad', 'post', 'http://www.our3dvr.com/data/wallpapers/11/WDF_601313.png'),
(2, 'dsadsa', 'dasdsa', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0QEQ0ODg4ODw0ODg0QDQ8SDQ8NDQ0NFxIWGhoRFhUaKDQgGBoxHRUVIj0hJSkrOi46Fx82ODMsNyguLisBCgoKDg0OGhAQGy0dHR0tLS8tLS0tLS0tLS0tLS0tLS0rLS0tLS0tKy0tLS0uKystLS0tLS0tLS0tLS0rLS0tK//AABEIAKgAqAMBEQACEQEDEQH/'),
(3, 'commenst 3', 'post 3', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExMVFRUVGR4XGBgYGBcYGBcdGB8aGBgWGBcfHyggGBolHRsaITIhJSorLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGy4lICUwNTUtLS0tLS0tLy0tLS0tLy0tLS0tLS0tLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLf/AABEIALYBFQMBIgACEQEDEQH/'),
(4, 'dsad', 'dsad', 'https://7504.post.at/img/logo_responsive.png'),
(5, 'fdsdsds', NULL, NULL),
(6, 'fdsfdsf', NULL, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
