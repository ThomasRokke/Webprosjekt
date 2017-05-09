SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `markers`;
CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(85) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(2, 'T.G.I Friday', '30% pÃ¥ Jack Daniels Burger', 59.912415, 10.750422, 'mat'),
(5, 'Food Express', 'Nysmurte baguetter 35,-', 59.916302, 10.759553, 'mat'),
(6, 'Oslo Camping', '5 for 2 pÃ¥ minigolf fÃ¸r 16:00', 59.915894, 10.750455, 'event'),
(8, 'Rett inn bar', '25% pÃ¥ Ã˜L / rusbrus frem til kl. 18:00', 59.915073, 10.754591, 'aktivitet'),
(9, 'BLÃ…', '50% pÃ¥ billetter til Kjent Band', 59.920094, 10.752863, 'event'),
(10, 'Crow Bar', 'HAPPY HOUR 16-17', 59.917145, 10.753244, 'aktivitet'),
(13, 'Schous Bryggeri', 'GRATIS NÃ˜TTER VED HVER 2. Ã˜L/RUSBRUS', 59.918365, 10.760223, 'aktivitet'),
(14, 'Illegal Burger', 'Gratis Fries ved kjÃ¸p av burger', 59.915836, 10.748422, 'mat'),
(15, 'JÃ¦ger', '55,- for 0.4 Rignes', 59.913818, 10.743427, 'aktivitet'),
(16, 'Revolver', '10 % pÃ¥ alle drikke', 59.916889, 10.749688, 'aktivitet'),
(17, 'Rema 1000', 'Ferdiglaget sushi\n39 kroner', 59.914223, 10.757182, 'mat'),
(18, 'Bislet Kebab', 'Lunsjtilbud 10-14\nLiten kebab i pita 39 kroner', 59.919552, 10.759199, 'mat'),
(19, 'Cafe Sara', 'Fredagspils til 40 kroner | 0,4L og til kl: 19', 59.917496, 10.754274, 'aktivitet'),
(20, 'Mitsu Kafe og Sushi', 'Lunsjtilbud. 6 biter for 40 kroner ', 59.917969, 10.750659, 'mat'),
(21, 'Munchies', 'Gratis fries ved kjÃ¸p av burger ', 59.916309, 10.751410, 'mat'),
(22, 'Starbuck', 'Stor kaffe til liten pris', 59.916225, 10.752010, 'mat'),
(24, 'Gudstjeneste ', 'PÃ¥ fredag', 59.918163, 10.754220, 'event'),
(26, 'Syng', '3 for 2 pÃ¥ karaoke', 59.919636, 10.755122, 'event'),
(27, 'Fugler', 'Hver 3. kaffe gratis ', 59.916866, 10.740348, 'mat'),
(28, 'Edvard Munchs gravsted', 'Some shit ', 59.921017, 10.744532, 'event');


ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
