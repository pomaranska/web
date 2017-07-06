-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Sty 2017, 15:17
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dream_shoes`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id_produkt` int(5) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `typ` enum('damskie','męskie') NOT NULL,
  `rozmiar` int(2) NOT NULL,
  `cena` int(3) NOT NULL,
  `kolor` varchar(20) NOT NULL,
  `materiał` varchar(15) NOT NULL,
  `zdjęcie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id_produkt`, `nazwa`, `typ`, `rozmiar`, `cena`, `kolor`, `materiał`, `zdjęcie`) VALUES
(1, 'Kozaki', 'damskie', 38, 159, 'czarne', 'zamsz', ''),
(2, 'Adidasy', 'męskie', 41, 349, 'białe', 'inny', ''),
(3, 'Szpilki', 'damskie', 36, 99, 'czerwone', 'inny', ''),
(4, 'Botki', 'damskie', 39, 115, 'brąz', 'zamsz', ''),
(5, 'Szpilki', 'damskie', 38, 69, 'czarne', 'inny', ''),
(6, 'Sportowe', 'męskie', 42, 89, 'zielone', 'inny', ''),
(7, 'Botki', 'damskie', 40, 89, 'szare', 'inny', ''),
(8, 'd', 'damskie', 3, 3, 'e', 'e', ''),
(9, 'r', 'damskie', 3, 2, 'e', 'e', ''),
(10, 'Kozaki', 'damskie', 40, 180, 'biały', 'inny', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownik`
--

CREATE TABLE `użytkownik` (
  `id_user` int(5) NOT NULL,
  `imię` varchar(15) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `e-mail` varchar(30) NOT NULL,
  `adres` varchar(45) NOT NULL,
  `telefon` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `hasło` varchar(10) NOT NULL,
  `status` enum('sprzedający','kupujący') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `użytkownik`
--

INSERT INTO `użytkownik` (`id_user`, `imię`, `nazwisko`, `e-mail`, `adres`, `telefon`, `login`, `hasło`, `status`) VALUES
(1, 'test', 'test', 'test', 'test', 0, 'test', 'test', 'sprzedający'),
(3, 'Aleksandra', 'Pomarańska', 'pomaranska@mail.com', 'Adres', 0, 'Ola', 'ola', 'kupujący'),
(4, 'Gosc', 'Gosc', 'gosc', 'gosc', 3455, 'gosc', 'gosc', 'kupujący');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamówienie`
--

CREATE TABLE `zamówienie` (
  `id_zamówienie` int(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produkt` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produkt`);

--
-- Indexes for table `użytkownik`
--
ALTER TABLE `użytkownik`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `zamówienie`
--
ALTER TABLE `zamówienie`
  ADD PRIMARY KEY (`id_zamówienie`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produkt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `użytkownik`
--
ALTER TABLE `użytkownik`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `zamówienie`
--
ALTER TABLE `zamówienie`
  MODIFY `id_zamówienie` int(5) NOT NULL AUTO_INCREMENT;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zamówienie`
--
ALTER TABLE `zamówienie`
  ADD CONSTRAINT `zamówienie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `użytkownik` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
