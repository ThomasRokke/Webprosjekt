-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20. Mai, 2017 21:10 p.m.
-- Server-versjon: 5.7.15-log
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_company`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `markers`
--

DROP TABLE IF EXISTS `markers`;
CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `address` varchar(85) CHARACTER SET utf8 NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `sDesc` varchar(90) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL,
  `imagepath` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dataark for tabell `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `sDesc`, `description`, `imagepath`) VALUES
(1, 'Piknik ved akerselva', 'Flott lokasjon for en piknik eller annen morro langs Akerselva.', 59.919220, 10.755910, 'aktivitet', 'En flott lokasjon for en piknik eller annen morro langs med Akerselva.', 'PÃ¥ denne lille perlen kan du nyte de varme sommerdager til lyden av rennende vann langs vakre Akerselva. Selv pÃ¥ de travleste dager er det som oftest plass (i motsetning til de andre parkene i omrÃ¥det). Denne perlen passer ypperlig for en romantisk tinder-date. Sikra hook!', 'akerselvapicnic'),
(2, 'GrunerlÃ¸kka studenthus', 'En blokk full av studenter et steinkast fra Vulkan. Party errday!', 59.923302, 10.754005, 'event', 'En blokk full av studenter et steinkast fra Vulkan. Party errday!', 'GrunerlÃ¸kka studenthus AKA Siloen ligger kun et steinkast (om du kaster langt) fra Vulkan. Grunnen til at det heter Siloen er at bygget ligner pÃ¥ kornsiloer. Leilighetene i bygget er helt runde - sÃ¥ her snurrer det ekstra i helgene. Sykt mange studenter pÃ¥ en og samme plass sier du? PARTY ERRDAY! Finn deg noen som bor der og spander kaffe pÃ¥ dem. Party-networking pÃ¥ hÃ¸yt nivÃ¥.', 'siloen'),
(3, 'Basketbane', 'Et omrÃ¥de med flere basketballbaner (og en fotballbane)', 59.922840, 10.755005, 'aktivitet', 'Et omrÃ¥de med flere basketballbaner (og en fotballbane). Mye folk, men mange baner.', 'Et omrÃ¥de med flere basketballbaner og en liten fotballbane. Her er det folk fra tidlig pÃ¥ dagen til sent pÃ¥ kveld. Ta med noen venner, eller spÃ¸r noen som allerede spiller om Ã¥ vÃ¦re med. De fleste er positive til dette. Nye venner + trening Ã¦kke feil.', 'basket'),
(6, 'BlÃ¥ - Chelsea Wolf', 'Konsert med selveste Chelsea Wolfe 13. Juni.', 59.920158, 10.752868, 'event', 'Urbane utestedet BlÃ¥ presenterer konsert med selveste Chelsea Wolfe den 13. Juni.', 'Det er duket for nok et Oslo-besÃ¸k fra mÃ¸rkets fyrstinne. Siden debuten The Grime And The Glow (2010) har Chelsea Wolfe gitt oss fem album som alle stÃ¥r som hÃ¸yspentledninger over en skyggelagt fjord og spenner fra lavmÃ¦lte neofolk-lÃ¥ter pÃ¥ akustisk gitar til lydbilder som flÃ¸rter med gotisk industrimusikk pÃ¥ hennes forelÃ¸pig siste album, Abyss (2016). <br>- Kilde: <q>http://www.blaaoslo.no/arrangementer/chelsea-wolfe-us-3/</q>', 'blÃ¥'),
(7, 'Bunnpris', 'DÃ¸gnÃ¥pen Bunnpris! Nattmat!', 59.920731, 10.759180, 'mat', 'Sulten utenfor Ã¥pningstider? Denne lille Bunnpris butikken er dÃ¸gnÃ¥pen!', 'Sulten utenfor Ã¥pningstider? Denne lille Bunnpris butikken er dÃ¸gnÃ¥pen! Butikken er relativ dyr, men Ã¥pningstiden er helt gull. PÃ¥ vei hjem fra byen, men ikke gira pÃ¥ Ã¥ svi av masse spenn pÃ¥ junk food? KjÃ¸p deg noe digg pÃ¥ butikken.', 'bunnpris'),
(8, 'Cafe Sara', 'Kombinasjon av cafe/bar og resturant med uteservering', 59.917606, 10.754149, 'mat', 'Perfekt sted mellom vorset og byen. Her kan du fÃ¥ i deg en matbit til drikken.', 'Cafe Sara har et godt utvalg av bÃ¥de Ã¸l og vin. De har en uteservering der du kan ta en pils i solveggen. NÃ¥r solen har gÃ¥tt ned flytter man seg pÃ¥  en ute-men-inne sitteplass der du kan nyte en kreftpinne(eller 10).', 'cafesara'),
(9, 'La CrÃªpe', 'En restaurant med deilig creps! (pannekake-ish?)', 59.922516, 10.751702, 'mat', 'Deilige creps i alle fasonger. Fyll det med jordbÃ¦r, sjokolade eller kanskje blÃ¥bÃ¦r?', 'La CrÃªpe er et tradisjonelt crÃªperie Bretonne som holder til i 1. etg. i Vulkan Depot. Vi tilbyr vÃ¥re gjester deilig og original mat fra Bretagne: nyt ekte Galettes laget pÃ¥ importert bokhvetemel fra Frankrike, fyllt med ferske og lokale rÃ¥varer fra Oslo. Perfekt til lunsj eller middag. <br> Kilde: <q>http://www.vulkanoslo.no/business/les-crepes-d-elen/</q>', 'creperie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
