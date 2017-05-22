-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19. Mai, 2017 13:46 p.m.
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
  `name` varchar(60) NOT NULL,
  `address` varchar(85) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  `sDesc` varchar(90) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imagepath` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `sDesc`, `description`, `imagepath`) VALUES
(2, 'T.G.I Friday', '30% pÃ¥ Jack Daniels Burger', 59.912415, 10.750422, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(5, 'Food Express', 'Nysmurte baguetter 35,-', 59.916302, 10.759553, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(8, 'Rett inn bar', '25% pÃ¥ Ã˜L / rusbrus frem til kl. 18:00', 59.915073, 10.754591, 'aktivitet', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(9, 'BLÃ…', '50% pÃ¥ billetter til Kjent Band', 59.920094, 10.752863, 'event', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(10, 'Crow Bar', 'HAPPY HOUR 16-17', 59.917145, 10.753244, 'aktivitet', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(13, 'Schous Bryggeri', 'GRATIS NÃ˜TTER VED HVER 2. Ã˜L/RUSBRUS', 59.918365, 10.760223, 'aktivitet', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(14, 'Illegal Burger', 'Gratis Fries ved kjÃ¸p av burger', 59.915836, 10.748422, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(15, 'JÃ¦ger', '55,- for 0.4 Rignes', 59.913818, 10.743427, 'aktivitet', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(17, 'Rema 1000', 'Ferdiglaget sushi\n39 kroner', 59.914223, 10.757182, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(18, 'Bislet Kebab', 'Lunsjtilbud 10-14\nLiten kebab i pita 39 kroner', 59.919552, 10.759199, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(19, 'Cafe Sara', 'Fredagspils til 40 kroner | 0,4L og til kl: 19', 59.917496, 10.754274, 'aktivitet', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(20, 'Mitsu Kafe og Sushi', 'Lunsjtilbud. 6 biter for 40 kroner ', 59.917969, 10.750659, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(21, 'Munchies', 'Gratis fries ved kjÃ¸p av burger ', 59.916309, 10.751410, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(22, 'Starbuck', 'Stor kaffe til liten pris', 59.916225, 10.752010, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(24, 'Gudstjeneste ', 'PÃ¥ fredag', 59.918163, 10.754220, 'event', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(26, 'Syng', '3 for 2 pÃ¥ karaoke', 59.919636, 10.755122, 'event', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(27, 'Fugler', 'Hver 3. kaffe gratis ', 59.916866, 10.740348, 'mat', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(28, 'Edvard Munchs gravsted', 'Some shit ', 59.921017, 10.744532, 'event', 'Hei, jeg er en kort beskrivelse som skal dukke opp på boksene vi har på denne flotte siden', 'We\'re no strangers to love\r\nYou know the rules and so do I\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just want to tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up, never gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry, never gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long', 'oslonatt.jpg'),
(31, 'thomaserbest', 'sfsdfsfsdfds', 59.920486, 10.768982, 'mat', 'sdfsdfsdfsdf', 'fsdfsdfsdfsdfsdf', 'oslonatt.jpg'),
(32, 'thomaserbest', 'sfsdfsfsdfds', 59.920486, 10.768982, 'mat', 'sdfsdfsdfsdf', 'fsdfsdfsdfsdfsdf', 'oslonatt.jpg'),
(33, 'thomaserbest', 'sfsdfsfsdfds', 59.920486, 10.768982, 'mat', 'sdfsdfsdfsdf', 'fsdfsdfsdfsdfsdf', 'oslonatt.jpg'),
(34, 'thomaserbest', 'sfsdfsfsdfds', 59.920486, 10.768982, 'mat', 'sdfsdfsdfsdf', 'fsdfsdfsdfsdfsdf', 'oslonatt.jpg'),
(35, 'thomaserbest', 'sfsdfsfsdfds', 59.920486, 10.768982, 'mat', 'sdfsdfsdfsdf', 'fsdfsdfsdfsdfsdf', 'oslonatt.jpg'),
(36, 'thomaserbest', 'sfsdfsfsdfds', 59.920486, 10.768982, 'mat', 'sdfsdfsdfsdf', 'fsdfsdfsdfsdfsdf', 'oslonatt.jpg'),
(37, 'thomaserbest', 'sfsdfsfsdfds', 59.920486, 10.768982, 'mat', 'sdfsdfsdfsdf', 'fsdfsdfsdfsdfsdf', 'oslonatt.jpg'),
(38, 'test', 'test', 10.730591, 10.730591, 'mat', 'dsfsdfsdf', 'sdfsfsdf', 'dsfsdfsdf'),
(39, 'test', 'test', 10.730591, 10.730591, 'mat', 'dsfsdfsdf', 'sdfsfsdf', 'dsfsdfsdf'),
(40, 'test', 'test', 10.730591, 10.730591, 'mat', 'dsfsdfsdf', 'sdfsfsdf', 'dsfsdfsdf'),
(41, 'test', 'test', 10.730591, 10.730591, 'mat', 'dsfsdfsdf', 'sdfsfsdf', 'dsfsdfsdf'),
(42, 'test', 'test', 10.730591, 10.730591, 'mat', 'dsfsdfsdf', 'sdfsfsdf', 'dsfsdfsdf'),
(43, 'test', 'test', 10.730591, 10.730591, 'mat', 'dsfsdfsdf', 'sdfsfsdf', 'dsfsdfsdf'),
(44, 'Thomas', 'rsrserr', 10.730437, 10.730437, 'mat', 'sfsdfsdfsdfsdf', 'sfdfsdfsfsdf', 'sdfsdfsfsf'),
(45, 'Thomas', 'rsrserr', 10.730437, 10.730437, 'mat', 'sfsdfsdfsdfsdf', 'sfdfsdfsfsdf', 'sdfsdfsfsf'),
(46, 'sdfsdfsdfsd', 'sdfsdfsdfsf', 10.123456, 59.123455, 'mat', 'oslo', 'ssf', 'oslonatt.jpg'),
(47, 'sfdfsdf', 'festtest', 59.922440, 10.764640, 'mat', 'werwerwr', 'wrewerwrw', 'oslonatt.jpg'),
(48, 'Kom i db da', 'festtest', 59.922440, 10.764640, 'mat', 'werwerwr', 'wrewerwrw', 'oslonatt.jpg'),
(49, 'BlÃ¥', 'Carpe Diem konsert', 59.920158, 10.752868, 'event', 'Konsert med Carpe diem!', 'Konsert brur', 'oslonatt.jpg'),
(50, 'Sofienbergsparken', 'Chill i park', 59.923103, 10.763544, 'event', 'Chill i park', 'sdfsdfsfsdf', 'oslonatt.jpg'),
(51, 'Hei pÃ¥ deg', 'Marler info', 59.909924, 10.725038, 'event', 'Om oss', 'Om oss', 'oslonatt.jpg'),
(52, 'oslo rÃ¥dhus', 'sdffsdf', 59.912148, 10.733725, 'mat', 'dsfs', 'sdfsf', 'oslonatt.jpg'),
(53, 'Sofias Sushisjappe', 'Dagens sushi 9 biter til 49.-', 59.920284, 10.767572, 'mat', 'Masse god sushi, kjempe bra. Vi mekker, du trekker. Ferdih cika kvateh.', 'Masse god sushi, kjempe bra. Vi mekker, du trekker. Ferdih cika kvateh. Masse god sushi, kjempe bra. Vi mekker, du trekker. Ferdih cika kvateh. Masse god sushi, kjempe bra. Vi mekker, du trekker. Ferdih cika kvateh. Masse god sushi, kjempe bra. Vi mekker, du trekker. Ferdih cika kvateh. Masse god sushi, kjempe bra. Vi mekker, du trekker. Ferdih cika kvateh.', 'oslonatt.jpg'),
(54, 'Ringen Kino', '99 kroner per bilett.', 59.928692, 10.760736, 'aktivitet', '99 kroner per bilett.  99 kroner per bilett.  99 kroner per bilett.  99 kroner per bilett.', '99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett. 99 kroner per bilett.', 'oslonatt.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
