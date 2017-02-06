-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 10:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `category_name`) VALUES
(1, 'Business'),
(2, 'Programming'),
(3, 'Technology'),
(4, 'My Stories');

-- --------------------------------------------------------

--
-- Table structure for table `myblog`
--

CREATE TABLE `myblog` (
  `bid` int(11) NOT NULL,
  `headline` text,
  `post` text,
  `posted_on` datetime DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myblog`
--

INSERT INTO `myblog` (`bid`, `headline`, `post`, `posted_on`, `catid`, `image`, `summary`) VALUES
(6, 'Why I love programming', 'I love programming', '2017-01-13 09:02:49', 2, '758207.jpg', 'There is nothing as enjoyable as programming!'),
(7, 'Test', 'just a test', '2017-01-13 12:44:44', 3, '830309.jpg', 'just a test'),
(8, 'Just a test', 'OK', '2017-01-13 12:45:22', 2, '81577.jpg', 'OK'),
(9, 'TEST', 'BUSINESS', '2017-01-13 12:46:00', 1, '746836.jpg', 'BUSINESS'),
(10, 'Just checking how the headlines appear on the myStories page', 'Ok', '2017-01-13 12:52:55', 4, '504677.jpg', 'Ok '),
(11, 'Just checking how the headlines appear on the myStories page', 'Ok', '2017-01-13 12:54:28', 1, '194105.jpg', 'Ok'),
(12, 'I am genuis', 'I am a programming guru\r\n', '2017-01-13 13:45:10', 4, '934423.jpg', 'I am a programming guru'),
(13, 'There is something ', 'ok', '2017-01-13 13:46:58', 4, '456538.png', 'Ok lets see'),
(14, 'Test It again', 'Ok I was using OFFSET', '2017-01-13 13:48:33', 4, '817017.png', 'OK'),
(15, 'Now I am thiking about layout', 'Which one is right', '2017-01-13 13:51:40', 1, '44901.jpg', 'I am testing how summary is gonna appear on mystories page and if it \r\nwont affect not go beyong the expected nor the heig'),
(16, 'Ok fine', 'Ok fine let me add tech , OFFSET TO 3 AND Add summary', '2017-01-13 13:53:35', 2, '361936.jpg', 'oK cool'),
(17, 'I am doing great thiungs', 'Ok', '2017-01-13 21:29:51', 1, '594461.jpg', 'I am testing how summary is gonna appear on mystories page and if it \r\nwont affect not go beyong the expected nor the heig'),
(18, 'One of my dream cars', 'Dream is cool just image your doing great things ', '2017-01-13 22:49:24', 4, '603150.jpg', 'I will soon be driving one these cars'),
(19, 'Why I started my own business', 'I would like to think that this  all came from my  father who was a \r\npassionate business man.  My father was not believing in working for \r\nsomeone else. Business was in his blood.\r\n\r\nSo I grew up with that but at first I was not clear about what I really \r\nwant to do because first, I did not believe that there is \r\nsomething/service that I can offer to the world.\r\n\r\nI wasn''t passionate about anything but after I started enrolling for my \r\ndiploma in software development my eyes started to open for I was \r\nnow seeing an opportunity for me to pursue my dream of having my \r\nown business.', '2017-01-14 00:30:47', 1, '757506.jpg', 'Business has always been my passion since when I was young.'),
(20, 'Programming heals all pains', 'Programming takes away all your worries and miseries and makes you \r\nthink and be creative. It makes you different,  smart and rich &#9786. ', '2017-01-14 08:42:01', 2, '583181.jpg', 'Programming makes you focus and forget about everything'),
(21, 'Why you need a website for your small business?', 'It is very sad to say this but most small businesses still don''t \r\nunderstand the value of a business website as a result you see a lot of \r\npoor business website designs with useless information that do not \r\ncontribute to their business goals.\r\n\r\nSo here is the thing, you don''t need a website because other \r\nbusinesses have websites too but you need a website because you \r\nwant to achieve a certain goal in your business. So here are:\r\n\r\n<strong>3 Things you most need a business website for</strong>\r\n\r\n<strong> 1. Visibility </strong>\r\nIn your shop or wherever you are operating your business from you \r\nhave closing and opening time that limit your availability to your \r\ncustomers but if you have a website you do not need to worry about \r\nclosing because a website is available 24/7 to your customers which \r\nallows them to have access to your products/ services and  do things \r\nlike online shopping if you have online store or book an appointment \r\ndepending on what you''re offering.  \r\n\r\n<strong> 2. Customer engagement </strong>\r\nI see a lot of business websites with no blog and this makes me \r\nwonder how are you expecting to develop a relationship with your \r\ncustomers. And there are two things that will make customers to \r\nchoose you over your competitor :-\r\na)  They see the value in what you''re selling.\r\nb) Relationships - they were referred by someone who saw your article \r\nin your blog or social network, someone who have used your product or \r\nsome you have a business relationship with.\r\n\r\nHere is my question to you. How are they going to see the value in \r\nyour product/service if you do not tell them or how are they gonna \r\nbuild a business relationship with you if you do not reach out to them?\r\n\r\n<strong> 3. Marketing </strong>\r\n75% of people are online now so this means that your website markets \r\nyou not just to people around you but to people from different places \r\nsome who are able to come where you are. And in my opinion a well \r\nmarketed website is 60% better than pamphlets. In you your website \r\nyou can also do promotions, early bird specials etc to help increase \r\nleads. \r\n\r\nMy last words, your website can be fancy or beautiful but if it''s not \r\ndesigned with your business objectives in mind it won''t contribute to \r\nyour business success.\r\n\r\n<cite>Author: Luthando Dlamini ~ Entrepreneur</cite>', '2017-01-19 07:24:54', 1, '894271.png', 'Your business website will determine whether business will be successful \r\nor not.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `myblog`
--
ALTER TABLE `myblog`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `catid` (`catid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `myblog`
--
ALTER TABLE `myblog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `myblog`
--
ALTER TABLE `myblog`
  ADD CONSTRAINT `myblog_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `category` (`catid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
