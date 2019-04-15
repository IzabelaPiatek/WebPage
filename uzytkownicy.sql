-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Kwi 2019, 17:48
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `uzytkownicy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(10) NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`) VALUES
(1, 'adam', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ', 'adam@gmail.com'),
(2, 'marek', 'asdfg', 'marek@gmail.com'),
(3, 'anna', 'zxcvb', 'anna@gmail.com'),
(4, 'andrzej', 'asdfg', 'andrzej@gmail.com'),
(5, 'justyna', 'yuiop', 'justyna@gmail.com'),
(6, 'kasia', 'hjkkl', 'kasia@gmail.com'),
(7, 'beata', 'fgthj', 'beata@gmail.com'),
(8, 'jakub', 'ertyu', 'jakub@gmail.com'),
(9, 'janusz', 'cvbnm', 'janusz@gmail.com'),
(10, 'roman', 'dfghj', 'roman@gmail.com'),
(11, 'mirek', '$2y$10$vmSNIWWZApqXydGJ5q9XC.6', 'zelent.miroslaw@gmail.com'),
(12, 'Izabela1', '$2y$10$oLwxkNmkAog7sx.WHjBwH.w', 'dsdsds@pw.ps'),
(13, 'Kamila', '$2y$10$i3hdocuDWYF5dMDCrI.dV.A', 'kamila@P.wwd'),
(14, 'Kamow1', '$2y$10$GdpzI1ak8snXAMXdY65neeQ', 'sdfds@ds.pd'),
(15, 'sdfgh', '$2y$10$ZX0wkOzsjozwoZECfjcrO.S', 'werfg@p.pw'),
(16, 'izzy123', '$2y$10$xtXIthhXDH5wUIJ0wQo3jO5', 'izzy@uu.pl'),
(17, 'izza123', '$2y$10$T/J15BSuqdhsx90Dyx9KMO0', 'rgtdx@T4YR5.PL'),
(18, 'asdfg', '$2y$10$p5NrGw5.0/s6pbWIPyXa9.B', 'asd@oi.pk');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
