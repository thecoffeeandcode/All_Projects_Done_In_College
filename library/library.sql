-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2016 at 06:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id_book` int(11) NOT NULL,
  `bname` varchar(150) NOT NULL,
  `author` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `genre` varchar(200) NOT NULL DEFAULT 'other',
  `img1` varchar(200) NOT NULL DEFAULT 'files',
  `img2` varchar(200) NOT NULL DEFAULT 'link'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_book`, `bname`, `author`, `amount`, `isbn`, `genre`, `img1`, `img2`) VALUES
(1, 'The Catcher in the Rye', ' J. D. Salinger', 10, 9780316769174, 'other', 'files', 'cir.jpg'),
(3, 'Ogniem i Mieczem', 'Henryk Sienkiewicz', 14, 9780020820444, 'other', 'files', 'oim.jpg'),
(4, 'The Thin Red Line', ' James Jones&Francine Prose', 12, 9780385324083, 'other', 'files', 'trl.jpg'),
(5, 'NO MAN LAND', 'David Baldacci', 5, 9781455586516, 'other', 'files', 'nml.jpg'),
(6, 'Two by Two', 'Nicholas Sparks', 10, 9781478918646, 'other', 'files', 'tbt.jpg'),
(7, 'A Good Time for the Truth', 'Sun Yung Shin', 13, 9781681340029, 'other', 'files', 'gtft.jpg'),
(8, 'Settle for More', 'Megyn Kelly', 3, 9780062494603, 'other', 'files', 'sfm.jpg'),
(9, 'The Art of the Deal', 'Donald J. Trump & Tony Schwartz', 10, 9780399594496, 'other', 'files', 'aod.jpg'),
(10, 'Hard Choices', 'Hillary Rodham Clinton', 10, 9781476751474, 'other', 'files', 'hc.jpg'),
(11, 'The Science of Interstellar', ' Kip Thorne & Christopher Nolan', 5, 9780393351378, 'other', 'files', 'soi.jpg'),
(12, 'In God We Trust', 'Angela Lilly Tressel', 4, 2940153124025, 'other', 'files', 'igwt.jpg'),
(13, 'PHP and MySQL Web Development', 'Luke Welling & Laura Thomson', 9, 9780321833891, 'other', 'files', 'pmwd.jpg'),
(14, 'C Programming Language', 'Brian W. Kernighan & Dennis Ritchie & Dennis M. Ritchie', 13, 9780131103627, 'other', 'files', 'cpl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rented`
--

CREATE TABLE IF NOT EXISTS `rented` (
`id_rented` int(11) NOT NULL,
  `bname` varchar(150) NOT NULL,
  `author` varchar(100) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `logged` int(11) NOT NULL DEFAULT '0',
  `access` int(11) NOT NULL DEFAULT '1',
  `books_ct` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `mail`, `pass`, `name`, `sname`, `logged`, `access`, `books_ct`) VALUES
(1, 'kowal@wp.pl', '123456', 'Jan', 'Kowalski', 0, 1, 1),
(2, 'maciej@wp.pl', '123123', 'Maciej', 'Kowal', 0, 1, 0),
(3, 'maria@wp.pl', '1234', 'Maria', 'Nowak', 0, 1, 0),
(4, 'marian@wp.pl', '1234567', 'Marian', 'Pazdzioch', 0, 2, 0),
(5, 'ferdek@wp.pl', 'browar', 'Ferdynant', 'Kiepski', 0, 1, 0),
(6, 'ktos1@wp.pl', '123456', 'Ktos', 'Tam1', 0, 1, 0),
(7, 'ktos456@wp.pl', '12345678', 'Ktos 456', 'Ktos', 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
 ADD PRIMARY KEY (`id_rented`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
MODIFY `id_rented` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
