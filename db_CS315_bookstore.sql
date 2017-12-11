-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2016 at 02:18 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_CS315_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE IF NOT EXISTS `Books` (
  `book_id` int(155) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  `image` varbinary(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`book_id`, `title`, `author`, `publisher`, `genre`, `price`, `description`, `image`) VALUES
(1, 'Harry Potter and the Sorcerers Stone ', 'JK', 'Scholastic', 'fantasy', 6.79, 'Harry Potter is about a boy who learns that he is a wizard.', 'uploads/hp1.jpg'),
(2, 'Gone Girl', 'Gillian Flynn', 'Crown Publishing Group', 'mystery', 19.99, 'A mystery of a missing woman and her husband that is accused of taking part in her disappearance.', 'uploads/gonegirl.jpg'),
(3, 'The Giver', 'Lois Lowry', 'Houghton Mifflin Harcourt', 'mystery', 5.99, 'Jonas receives the memories of the past, good and bad, from the current Receiver, a wise old man who tells Jonas to call him the Giver.', 'uploads/giver.jpg'),
(4, 'A Walk to Remember', 'Nicholas Sparks', 'Grand Central Publishing', 'science-fiction', 10.96, 'In A Walk to Remember, Landon Carter narrates the flashback story of his senior year in the late 1950s at Beaufort High in Beaufort, North Carolina, when he first discovers the power of love.', 'uploads/awtr.jpg'),
(5, 'I Am Malala', 'Malala Yousafzai, Cristina Lamb', 'Back Bay Books', 'action', 12.54, '"I come from a country that was created at midnight. When I almost died it was just after midday." When the Taliban took control of the Swat Valley in Pakistan, one girl spoke out. Malala Yousafzai refused to be silenced and fought for her right to a', 'uploads/iammalala.jpg'),
(6, 'Love Louder', 'Preston Smiles', 'North Star Way', 'autobiography', 7.99, 'A powerful guide to step up your life in a major way!', 'uploads/lovelouder.jpg'),
(7, 'The Catcher in the Rye', 'J.D. Salinger', 'Little, Brown and Company', 'adventure', 5.39, 'The Catcher in the Rye is set around the 1950s and is narrated by a young man named Holden Caulfield.', 'uploads/catcherandrye.jpg'),
(8, 'The Hunger Games', 'Suzanne Collins', 'Scholastic', 'action', 9.99, 'Panem is split up into 12 districts. Each year, every district is forced to randomly choose two tributes--one girl and one boy--to fight in the annual Hunger Games. A fight to the death on live television.', 'uploads/hungergames1.jpg'),
(12, 'If I Stay', 'Gayle Forman', 'Dutton Penguin', 'science-fiction', 5.5, 'In the blink of an eye everything changes. Seventeen ­year-old Mia has no memory of the accident; she can only recall what happened afterwards, watching her own damaged body being taken from the wreck. ', 'uploads/ifistay.jpg'),
(13, 'All American Boys ', 'Brendan Kiely and Jason Reynolds', 'Atheneum/Caitlyn Dlouhy Books', 'action', 18, 'All American Boys is a young adult novel that looks at a specific instance of police brutality from the perspectives of two high school classmates', 'uploads/AllAmericanBoys.jpg'),
(14, 'Are you there God Its Me Margaret ', 'Judy Blume ', 'Random House ', 'action', 8, 'A six grade girl who has grown up without a religious affiliation because of her parents.', 'uploads/AreyouthereGodItsMeMargaret.jpg'),
(15, 'Charlottes Web ', 'E B White ', 'Harper', 'action', 5, 'Story of a little pig named Wilbur who was born a runt, and Mr. Arable decides to kill him! His daughter Fern begs him to let the helpless little pig live.', 'uploads/CharlottesWeb.jpg'),
(16, 'Chicka Chicka Boom Boom ', 'Bill Martin Jr and John Archambault', 'Simon & Schuster', 'action', 3, 'The book begins with the letter A telling the letter B and B telling the letter C to meet "at the top of the coconut tree."', 'uploads/chickachickaboomboom.jpg'),
(17, 'Corduroy', 'Don Freeman', 'Viking Press', 'action', 7, 'The story of a teddy bear named Corduroy, displayed on a toy shelf in a department store. One day, a girl named Lisa arrives in the store with her mother and spots the bear. She is willing to buy him, but her mother declines to spend more money and n', 'uploads/Corduroy.jpg'),
(18, 'Romeo and Juliet ', 'William Shakespeare', 'Shakespeare', 'science-fiction', 8, 'Romeo and Juliet is set in Verona, Italy, where there is an ongoing feud between the Montague and Capulet families. The play opens with servants from both houses engaged in a street brawl that eventually draws in the family patriarchs and the city of', 'uploads/RomeoandJuliet.jpg'),
(19, 'The Maze Runner ', 'James Dashner', 'Dell Publishing ', 'action', 8, 'Thomas (Dylan O Brien) a teenager arrives in a glade at the center of a giant labyrinth. Like the other youths dumped there before him he has no memory of his previous life. ', 'uploads/TheMazeRunner.jpg'),
(20, 'The Notebook ', 'Nicholas Sparks', 'Grand Central Publishing', 'science-fiction', 3, 'In 1940s South Carolina, mill worker Noah Calhoun (Ryan Gosling) and rich girl Allie (Rachel McAdams) are desperately in love. But her parents dont approve', 'uploads/TheNotebook.jpg'),
(22, 'The Girl On The Train', 'Paula Hawkins', 'Penguin Publishing Group', 'mystery', 16.24, 'The story is about Rachel who takes the same train everyday and sees a couple on the balcony of their house. When woman disappears, Rachel becomes obsessed with them.', 'uploads/giott.jpg'),
(23, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Charles Scribners Sons', 'drama', 9.69, 'Read an in-depth analysis of Nick Carraway. Jay Gatsby - The title character and protagonist of the novel, Gatsby is a fabulously wealthy young man living in a Gothic mansion in West Egg.', 'uploads/thegreatgatsby.jpg'),
(25, 'Twilight', 'Stephenie Meyer', 'Little, Brown and Company', 'Romance', 10, 'Eclipse is the third novel in the Twilight Saga by Stephenie Meyer. It continues the story of Bella Swan and her vampire love, Edward Cullen.', 'uploads/Twilight.jpg'),
(28, 'Harry Potter', 'JK', 'Scholastic', 'mystery', 5, 'dashkj', 'uploads/hp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE IF NOT EXISTS `Customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`customer_id`, `username`, `first_name`, `last_name`, `address`, `city`, `state`, `email`, `password`) VALUES
(1, 'Admin', 'Admin', 'CS', '', 'Chicago', 'Illinois', 'Admin@email.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'johndoe', 'john', 'doe', '', 'Chicago', 'IL', 'jkonan@neiu.edu', 'ae267a1883224817041761cc4cb03bf8'),
(3, 'zain', 'Zainab ', 'Akubat ', '', 'Chicago ', 'IL', 'zain@gmail.com', '3ed9b95e4b6f2c345836def81e570ef1'),
(4, 'Felicia', 'Felicia', 'Toro', '', 'Chicago', 'Illinois', 'email@gmail.com', '6fab034efe82b1aa05a07d3cb6bbd6cc'),
(5, 'oada', 'oguz', 'adabuk', '', 'chicago', 'il', 'ada@ada.edu', '96e79218965eb72c92a549dd5a330112'),
(6, 'BorisBookstore ', 'admin ', 'admin ', '', 'Chicago ', 'IL', 'admin@admin.com', 'f89f124c0b230be9557c714912ee3320'),
(8, 'akubat', 'A', 'A', '', 'chiago ', 'il ', 'akubat@blue.com', 'd701cdb7c16fd32434ab00f402f28ccf');

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE IF NOT EXISTS `Reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL FOREIGN KEY,
  `title` varchar(255) NOT NULL FOREIGN KEY,
  `review` text NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Reviews`
--

INSERT INTO `Reviews` (`review_id`, `username`, `title`, `review`) VALUES
(3, 'admin', 'I Am Malala', '0'),
(4, 'admin', 'The Notebook ', 'This is a excellent book. It is really a good read. '),
(5, 'zain ', 'The Notebook ', 'I love it. '),
(6, 'felicia', 'Harry Potter and the Sorcerers Stone ', 'book review'),
(7, 'zain', 'Gone Girl', 'A book that will make you want to read again and again. '),
(8, 'admin', 'Twilight', 'If you like vampires, this book is a must read. '),
(9, 'admin', 'Gone Girl', 'Great Book'),
(10, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
