-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2020 at 11:23 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cycaminf_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `breaking_news`
--

CREATE TABLE `breaking_news` (
  `id` int(255) NOT NULL,
  `reporter` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breaking_news`
--

INSERT INTO `breaking_news` (`id`, `reporter`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_time`) VALUES
(33, 'helloss', 'Theu cant imagine', 'hhBoot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.', '', 'International', 'url.com', 'uploads/20821977425e5511ddb2816.jpg', 'uploads/284973195e5511ddb286d.jpg', 1, '2020-03-10 14:19:08.336217'),
(35, 'cyru', 'The wonderkid you cant imagine', 'vhvhv hvhv b nb  nb bnb ', '', '', 'url.com', 'uploads/8273101595e626efd19cc0.jpg', 'uploads/4803524495e626efd19d18.jpg', 0, '2020-03-08 05:46:45.707407');

-- --------------------------------------------------------

--
-- Table structure for table `briefs`
--

CREATE TABLE `briefs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `briefs`
--

INSERT INTO `briefs` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(14, 'The wonderkid you cant imagine', 'hihihih juh', 'jpg', 'Local', 'url.com', 'uploads/11990971925e56b7e7ee714.jpg', 'uploads/12633068735e56b7e7ee767.jpg', 1, '2020-03-07 05:56:02.600228');

-- --------------------------------------------------------

--
-- Table structure for table `clips`
--

CREATE TABLE `clips` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clips`
--

INSERT INTO `clips` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The wonderkid you cant imagine', 'uu', 'jpg', 'Lifestyle', 'kjkkj', 'uploads/11381534555e56c031823d8.jpg', 'uploads/8464390025e56c0318242d.jpg', 1, '2020-03-07 06:27:10.099839');

-- --------------------------------------------------------

--
-- Table structure for table `dj_rongo`
--

CREATE TABLE `dj_rongo` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dj_rongo`
--

INSERT INTO `dj_rongo` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The wonderkid you cant imagine', 'vftf', '', 'Lifestyle', 'ttt', 'uploads/11569439245e4918b2aa319.jpg', 'uploads/4222613925e4918b2aa370.jpg', 1, '2020-03-07 06:49:15.507745');

-- --------------------------------------------------------

--
-- Table structure for table `documentary`
--

CREATE TABLE `documentary` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentary`
--

INSERT INTO `documentary` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The wonderknt imagine', 'gfftf fg hyvhvh hfhyfhv hhvh hvhvh ', 'jpg', 'Political', 'ttt', 'uploads/15539633765e56c218c5376.jpg', 'uploads/7133373565e56c218c53cd.jpg', 0, '2020-03-07 06:32:07.203729');

-- --------------------------------------------------------

--
-- Table structure for table `drama`
--

CREATE TABLE `drama` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drama`
--

INSERT INTO `drama` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The wonderkid you cant imagine', ' ggvhvhv vhvhvh hvhvhv hbvh', '', 'Political', 'url.com', 'uploads/12065481745e4911b9228ff.jpg', 'uploads/942948165e4911b922955.jpg', 0, '2020-03-07 06:43:29.099385');

-- --------------------------------------------------------

--
-- Table structure for table `featured_news`
--

CREATE TABLE `featured_news` (
  `id` int(255) NOT NULL,
  `reporter` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(200) NOT NULL,
  `category` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_news`
--

INSERT INTO `featured_news` (`id`, `reporter`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_time`) VALUES
(8, 'Ishmail Kasim', 'TWO FOUND DEAD AFTER DRAWNING IN RIVER KUJA.', 'Two students were found dead after allegedly going for a \"swim\" in enjoyment of their semester. The two first year had suddenly just completed their examinations and were looking forward to ', 'jpg', 'Social', 'url.com', 'uploads/17487243135e60f292e849e.jpg', 'uploads/16239022855e60f292e84f5.jpg', 1, '2020-03-06 20:04:51.404897'),
(9, 'cyru', 'The wonderkid you cant imagine', 'h njnk uuu iniknki njn', '', '', 'url.com', 'uploads/16151749725e60f0c2b9973.jpg', 'uploads/7240666875e60f0c2b99d1.jpg', 0, '2020-03-06 20:07:49.206799');

-- --------------------------------------------------------

--
-- Table structure for table `funniest_clips`
--

CREATE TABLE `funniest_clips` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funniest_clips`
--

INSERT INTO `funniest_clips` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_time`) VALUES
(4, 'The wonderkid', 'hhh', 'jpg', 'Technology', 'url.com', 'uploads/19545685055e55250895a3c.jpg', 'uploads/15182349405e55250895a92.jpg', 0, '2020-03-06 20:28:23.307726');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The wonderkid yo', 'fy', '', 'Social', 'url.com', 'uploads/15114543315e56c4dec1c90.jpg', 'uploads/18454757135e56c4dec1cf4.jpg', 1, '2020-03-07 07:20:01.810887');

-- --------------------------------------------------------

--
-- Table structure for table `graduation`
--

CREATE TABLE `graduation` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` text NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduation`
--

INSERT INTO `graduation` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(3, 'FAITH AND MARY IN THEIR BREAK!', 'yyyhyyb yhbh hhunm', '', 'External', 'ttt', 'uploads/6558001305e5749df2cfbd.jpg', 'uploads/2843891255e5749df2d014.jpg', '0', '2020-03-07 06:53:11.714369');

-- --------------------------------------------------------

--
-- Table structure for table `latest_movies`
--

CREATE TABLE `latest_movies` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_movies`
--

INSERT INTO `latest_movies` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_time`) VALUES
(4, 'The wonderkid you cant imagine', 'yyy', '', 'Technology', 'url.com', 'uploads/16005388335e5521688535d.jpg', 'uploads/7439100625e552168853b2.jpg', 0, '2020-03-06 20:23:04.919699'),
(5, 'The wonderkid you cant imagine', 'bbbbb hhh hhh hhhhh  h  h           ggggggggggggggg ggggggggggggg ggggggggggggggggg ggggggggggggggg ggggggggggggggggggggggggg g', '', '', 'url.com', 'uploads/5905200705e5e474ea181b.jpg', 'uploads/6953879665e5e474ea1871.jpg', 1, '2020-03-06 20:22:59.005256');

-- --------------------------------------------------------

--
-- Table structure for table `latest_music`
--

CREATE TABLE `latest_music` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_music`
--

INSERT INTO `latest_music` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_date`) VALUES
(5, 'little girl', 'my love and to ypo', 'jpg', 'Local', 'huhhuh', 'uploads/5764913795e551c850a5dd.jpg', 'uploads/10569127045e551c850a635.jpg', 0, '2020-03-06 20:14:29.596551');

-- --------------------------------------------------------

--
-- Table structure for table `latest_sports`
--

CREATE TABLE `latest_sports` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_sports`
--

INSERT INTO `latest_sports` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_time`) VALUES
(3, 'Mwalimu jr', 'cording', 'png', 'Discussions', 'url.com', 'uploads/1920716465e5abea918324.png', 'uploads/11499637765e5abea91837b.png', 0, '2020-03-07 05:36:50.999217');

-- --------------------------------------------------------

--
-- Table structure for table `memos`
--

CREATE TABLE `memos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` text NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memos`
--

INSERT INTO `memos` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The wonde', 'gdfg ty', 'jpg', 'Technology', 'ttt', 'uploads/20180012995e56b9e19c2bd.jpg', 'uploads/15101051685e56b9e19c313.jpg', '1', '2020-03-07 06:06:15.912775');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(5, 'the latest boy encounter', 'gggg yyyyb uuu ooo kill hhh hjhgh hjhghv ghhhb fffb hh jujklo kklll kl loll;m p lo;;,k l;;k j jjn jbjkn knn bhknknk jbknk jb', '', '', 'url.com', 'uploads/5203904125e5e5ce33dfcd.jpg', 'uploads/1913292935e5e5ce33e025.jpg', 1, '2020-03-07 06:17:12.624342');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(200) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(200) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(4, 'The wonderkid you cant imagine', 'd tgygh gf gffyb  g fyu   tyg ty ', '', 'International', 'url.com', 'uploads/4193509225e4904cbe62ea.jpg', 'uploads/17296113555e4904cbe6340.jpg', 1, '2020-03-07 06:11:40.410104');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(200) NOT NULL,
  `reporter` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `type` int(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `video_url` text NOT NULL,
  `square_image` text NOT NULL,
  `banner_image` text NOT NULL,
  `status` int(200) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `reporter`, `title`, `description`, `type`, `category`, `video_url`, `square_image`, `banner_image`, `status`, `datereg`) VALUES
(39, 'Jose ', 'visitation', 'Nairobi visitation', 0, 'External', 'sssss', 'uploads/15311346165e4a51975e799.jpg', 'uploads/5774804125e4a51975e7ec.jpg', 1, '2020-03-07 05:41:18'),
(42, 'Cyrus mulatya', 'the hackathon 2020', 'there shall be a technology event that will be held at rongo University  for solving health it related issues. all programmers and technology people should purporse to attend.', 0, 'International', 'url.com', 'uploads/14397283735e5dead32f492.jpg', 'uploads/2920858265e5dead32f51c.jpg', 0, '2020-03-07 05:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `new_gallery`
--

CREATE TABLE `new_gallery` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_gallery`
--

INSERT INTO `new_gallery` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_time`) VALUES
(4, 'Themagine', 'yyy', 'jpg', 'Technology', 'url.com', 'uploads/11394691635e555d23ddbf5.jpg', 'uploads/6928314105e555d23ddc4c.jpg', 0, '2020-03-07 05:34:37.253342');

-- --------------------------------------------------------

--
-- Table structure for table `orientation`
--

CREATE TABLE `orientation` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` text NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orientation`
--

INSERT INTO `orientation` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The  cant imagine', 'gfgvhv vhvhv ', 'jpg', 'Technology', 'url.com', 'uploads/9937431005e574d737e56a.jpg', 'uploads/19500752075e574d737e5d4.jpg', '0', '2020-03-07 06:58:39.896239');

-- --------------------------------------------------------

--
-- Table structure for table `other_events`
--

CREATE TABLE `other_events` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(255) NOT NULL,
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_events`
--

INSERT INTO `other_events` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `post_time`) VALUES
(6, 'MWALIMU ENTERPRISE', '9l,m kkn kjnkn klmlm lmlmlm mkl, olml ,m,m l', 'jpg', 'Political', 'ttt', 'uploads/20069700665e574f59c319a.jpg', 'uploads/10908006185e574f59c31f1.jpg', 0, '2020-03-07 07:03:56.910448'),
(7, 'mine can\'t go.', 'ygyyj bbu bjbj', 'jpg', 'Technology', 'url.com', 'uploads/8919333105e6347d892896.jpg', 'uploads/17842112325e6347d8928ef.png', 1, '2020-03-07 07:06:00.711827');

-- --------------------------------------------------------

--
-- Table structure for table `speeches`
--

CREATE TABLE `speeches` (
  `id` int(200) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `square_image` text NOT NULL,
  `banner_image` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speeches`
--

INSERT INTO `speeches` (`id`, `title`, `description`, `type`, `category`, `video_url`, `square_image`, `banner_image`, `status`, `datereg`) VALUES
(3, 'hello boy', 'my boy ggg', 'jpg', 'Local', 'hhhhh', 'uploads/16525668625e55645587ef8.jpg', 'uploads/2396785805e55645587f54.jpg', 0, '2020-03-07 05:45:50.891262');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video_url` text NOT NULL,
  `image_square` text NOT NULL,
  `image_banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `datereg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `title`, `description`, `type`, `category`, `video_url`, `image_square`, `image_banner`, `status`, `datereg`) VALUES
(2, 'The wonderkid you cant imagine', 'dxf get f ftf6f f  yg y  yfyy gugu', '', 'External', 'url.com', 'uploads/20368963385e490fd2882a4.jpg', 'uploads/19312420035e490fd2882fa.jpg', 0, '2020-03-07 06:39:59.511162');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `reg_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `reg_time`) VALUES
(1, 'jose', 'jose@gmail.com', '0729442682', '22', '2020-02-10 05:37:20.236682'),
(2, 'mulatya cyrus', 'mathekajosef571@gmail.com', '0729442682', '69', '2020-02-10 06:08:37.163437'),
(3, 'caleb', 'mulatyacaleb@gmail.com', '0729442682', 'mulatya', '2020-02-10 08:05:44.314940'),
(4, 'ken', 'ken@mai.com', '0729442682', '22', '2020-02-12 14:08:55.700732'),
(5, 'jose', 'hermans@mail.com', '0729442682', 'll', '2020-02-12 14:35:32.790314');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breaking_news`
--
ALTER TABLE `breaking_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `briefs`
--
ALTER TABLE `briefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clips`
--
ALTER TABLE `clips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dj_rongo`
--
ALTER TABLE `dj_rongo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `documentary`
--
ALTER TABLE `documentary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drama`
--
ALTER TABLE `drama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_news`
--
ALTER TABLE `featured_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funniest_clips`
--
ALTER TABLE `funniest_clips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduation`
--
ALTER TABLE `graduation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_movies`
--
ALTER TABLE `latest_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_music`
--
ALTER TABLE `latest_music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_sports`
--
ALTER TABLE `latest_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_gallery`
--
ALTER TABLE `new_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orientation`
--
ALTER TABLE `orientation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_events`
--
ALTER TABLE `other_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speeches`
--
ALTER TABLE `speeches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breaking_news`
--
ALTER TABLE `breaking_news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `briefs`
--
ALTER TABLE `briefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clips`
--
ALTER TABLE `clips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dj_rongo`
--
ALTER TABLE `dj_rongo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documentary`
--
ALTER TABLE `documentary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drama`
--
ALTER TABLE `drama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `featured_news`
--
ALTER TABLE `featured_news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `funniest_clips`
--
ALTER TABLE `funniest_clips`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `graduation`
--
ALTER TABLE `graduation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `latest_movies`
--
ALTER TABLE `latest_movies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `latest_music`
--
ALTER TABLE `latest_music`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `latest_sports`
--
ALTER TABLE `latest_sports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `new_gallery`
--
ALTER TABLE `new_gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orientation`
--
ALTER TABLE `orientation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other_events`
--
ALTER TABLE `other_events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `speeches`
--
ALTER TABLE `speeches`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
