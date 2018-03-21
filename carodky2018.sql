-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 16. bře 2018, 15:03
-- Verze serveru: 10.1.28-MariaDB
-- Verze PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `carodky2018`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `pisnicky_na_prani`
--

CREATE TABLE `pisnicky_na_prani` (
  `id_zadosti` int(11) NOT NULL,
  `kdo` varchar(60) COLLATE utf8_czech_ci NOT NULL,
  `komu` varchar(60) COLLATE utf8_czech_ci NOT NULL,
  `vzkaz` varchar(200) COLLATE utf8_czech_ci NOT NULL,
  `song` varchar(300) COLLATE utf8_czech_ci NOT NULL,
  `hotovo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `pisnicky_na_prani`
--

INSERT INTO `pisnicky_na_prani` (`id_zadosti`, `kdo`, `komu`, `vzkaz`, `song`, `hotovo`) VALUES
(1, 'Lukyn Matuška', 'MartinTheDJ', 'Test z phpMyAdmina', 'Karel Gott - Trezor', 0),
(2, 'Julie', 'Dooley', 'Miluju purkynku', 'PurkyÅˆka je HAPPY!', 0),
(6, 'Julie', 'Dooley', 'Miluju purkynku', 'PurkyÅˆka je HAPPY!', 0),
(8, 'Lukyn MatuÅ¡ka', 'Martin the DJ', 'ProstÄ› random do fronty. ', 'Ofenbach - Katchi', 0),
(9, 'Mrdka', 'Kozy', 'Hezky narozeniny', 'Nevim', 0),
(10, 'serdv', 'sdfbvdsfb', 'bfdbdsf', 'bdfdfsbs', 0),
(11, '+ěščřžýáíé', 'ěščřžýáíé', 'ěščřžýáíé', 'ěščřžýáíé', 0),
(12, 'Od Sevana', 'Pro Rudicaky ', 'Jedeeeeeeeem ', 'Zizeeeeeen ajajajaj', 0),
(13, 'Od Ševana test diakritiky ěščřřžžýýýáýýáýčžřč', 'Pro rudičáááááky', 'Jedeeeem', 'ŽízééééééŇ ajajajaj', 0),
(14, 'lucie', 'lada(rumová víla)', 'že je to nej máma na světě a mám ji moc a moc ráda', 'lucie medvídek', 0),
(15, 'Lucie', 'Lada(rumová víla)', 'Že je to nej máma na světě a mám ji moc a moc ráda', 'Lucie medvídek', 0),
(16, 'Lukyn The Coder', 'DJs', 'Dneska dobře hrajete! ;)', 'Team - Reklama na ticho', 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `zpetna_vazba`
--

CREATE TABLE `zpetna_vazba` (
  `id_vzkazu` int(11) NOT NULL,
  `vzkaz_zpetne_vazby` varchar(2500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `zpetna_vazba`
--

INSERT INTO `zpetna_vazba` (`id_vzkazu`, `vzkaz_zpetne_vazby`) VALUES
(1, 'Lukynův první text v mysql.'),
(2, 'SSL certifikát :-)'),
(3, 'Miluju makrely pana Jeřábka!! <3 Jsem do nich udělanej :D');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `pisnicky_na_prani`
--
ALTER TABLE `pisnicky_na_prani`
  ADD PRIMARY KEY (`id_zadosti`);

--
-- Klíče pro tabulku `zpetna_vazba`
--
ALTER TABLE `zpetna_vazba`
  ADD PRIMARY KEY (`id_vzkazu`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `pisnicky_na_prani`
--
ALTER TABLE `pisnicky_na_prani`
  MODIFY `id_zadosti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pro tabulku `zpetna_vazba`
--
ALTER TABLE `zpetna_vazba`
  MODIFY `id_vzkazu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
