-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 02:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `from_user_id` varchar(20) NOT NULL,
  `to_user_id` varchar(20) NOT NULL,
  `chat_message` varchar(999) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message_status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `from_user_id`, `to_user_id`, `chat_message`, `timestamp`, `message_status`) VALUES
(812, '2', '', 'hello', '0000-00-00 00:00:00', ''),
(813, '2', '1', 'hello', '0000-00-00 00:00:00', ''),
(814, '1', '2', 'hello', '0000-00-00 00:00:00', ''),
(815, '2', '1', 'how are you bro?', '0000-00-00 00:00:00', ''),
(816, '1', '2', 'fine bro', '0000-00-00 00:00:00', ''),
(817, '1', '2', 'whats about u?', '0000-00-00 00:00:00', ''),
(818, '2', '1', 'fine', '0000-00-00 00:00:00', ''),
(819, '1', '2', 'ok', '0000-00-00 00:00:00', ''),
(820, '2', '1', 'kya kar rha hai', '0000-00-00 00:00:00', ''),
(821, '2', '1', 'hehhe', '0000-00-00 00:00:00', ''),
(822, '2', '1', 'bol', '0000-00-00 00:00:00', ''),
(823, '1', '2', 'kuch nahi', '0000-00-00 00:00:00', ''),
(824, '1', '2', 'helllo this chat message bole to demo chat message form user id 1', '0000-00-00 00:00:00', ''),
(825, '2', '1', 'helllo this chat message bole to demo chat message form user id 1helllo this chat message bole to demo chat message form user id 1', '0000-00-00 00:00:00', ''),
(826, '1', '2', 'nk', '0000-00-00 00:00:00', ''),
(827, '1', '2', 'sdfasd', '0000-00-00 00:00:00', ''),
(828, '1', '2', 'hi', '0000-00-00 00:00:00', ''),
(829, '1', '2', 'hid', '0000-00-00 00:00:00', ''),
(830, '1', '2', 'sadf', '0000-00-00 00:00:00', ''),
(831, '1', '2', 'hello', '0000-00-00 00:00:00', ''),
(832, '1', '2', 'hi', '0000-00-00 00:00:00', ''),
(833, '1', '2', 'j', '0000-00-00 00:00:00', ''),
(834, '1', '2', 'jkjh', '0000-00-00 00:00:00', ''),
(835, '1', '2', 'jkjhgoyg', '0000-00-00 00:00:00', ''),
(836, '1', '2', 'jkjhgoygjuyf', '0000-00-00 00:00:00', ''),
(837, '1', '2', 'jkjhgoygjuyf', '0000-00-00 00:00:00', ''),
(838, '1', '2', 'sdf', '0000-00-00 00:00:00', ''),
(839, '1', '2', 'sdfdf', '0000-00-00 00:00:00', ''),
(840, '1', '2', 'sdfdfd', '0000-00-00 00:00:00', ''),
(841, '1', '2', 'sdfdfde', '0000-00-00 00:00:00', ''),
(842, '1', '2', 'sdfdfdeer', '0000-00-00 00:00:00', ''),
(843, '1', '2', 'umair', '0000-00-00 00:00:00', ''),
(844, '1', '2', 'umair farooqui', '0000-00-00 00:00:00', ''),
(845, '2', '1', 'hello', '0000-00-00 00:00:00', ''),
(846, '1', '2', 'hello', '0000-00-00 00:00:00', ''),
(847, '2', '1', 'how are you brp', '0000-00-00 00:00:00', ''),
(848, '1', '2', 'fine ', '0000-00-00 00:00:00', ''),
(849, '1', '2', 'fine bro', '0000-00-00 00:00:00', ''),
(850, '2', '1', 'ok bro', '0000-00-00 00:00:00', ''),
(851, '1', '2', 'kya ho rha hai bro', '0000-00-00 00:00:00', ''),
(852, '1', '2', 'aaj wahan gya tha', '0000-00-00 00:00:00', ''),
(853, '1', '2', 'bol', '0000-00-00 00:00:00', ''),
(854, '2', '1', 'na be nahi gya tha', '0000-00-00 00:00:00', ''),
(855, '1', '2', 'ok', '0000-00-00 00:00:00', ''),
(856, '2', '1', 'aur bata kya ho rha hai', '0000-00-00 00:00:00', ''),
(857, '1', '2', 'kuch nahi', '0000-00-00 00:00:00', ''),
(858, '1', '2', 'tu bata', '0000-00-00 00:00:00', ''),
(859, '2', '1', 'same kuch nahi', '0000-00-00 00:00:00', ''),
(860, '1', '2', 'hehehe ok', '0000-00-00 00:00:00', ''),
(861, '2', '1', 'ok heheh', '0000-00-00 00:00:00', ''),
(862, '2', '1', '<b>', '0000-00-00 00:00:00', ''),
(863, '2', '1', 'asd', '0000-00-00 00:00:00', ''),
(864, '1', '2', 'hehehe ok', '0000-00-00 00:00:00', ''),
(865, '2', '1', 'ye kya hua be', '0000-00-00 00:00:00', ''),
(866, '1', '2', 'pata nahi', '0000-00-00 00:00:00', ''),
(867, '2', '1', 'bold kaise hua', '0000-00-00 00:00:00', ''),
(868, '1', '2', 'mere ko to pata nahi', '0000-00-00 00:00:00', ''),
(869, '2', '1', 'ok', '0000-00-00 00:00:00', ''),
(870, '1', '2', 'bata na', '0000-00-00 00:00:00', ''),
(871, '2', '1', 'ruk main sahi karta hoon', '0000-00-00 00:00:00', ''),
(872, '2', '1', '</b>', '0000-00-00 00:00:00', ''),
(873, '1', '2', 'kiya', '0000-00-00 00:00:00', ''),
(874, '2', '1', 'han', '0000-00-00 00:00:00', ''),
(875, '1', '2', 'han ho gya', '0000-00-00 00:00:00', ''),
(876, '2', '1', '', '0000-00-00 00:00:00', ''),
(877, '2', '1', '', '0000-00-00 00:00:00', ''),
(878, '1', '2', 'han ho gya', '0000-00-00 00:00:00', ''),
(879, '1', '2', 'han ho gya', '0000-00-00 00:00:00', ''),
(880, '1', '2', 'hello hello how are you bro? fine bro whats about u? fine ok kya kar rha hai hehhe bol kuch nahi helllo this chat message bole to demo chat message form user id 1 helllo this chat message bole to demo chat message form user id 1helllo this chat messa', '0000-00-00 00:00:00', ''),
(881, '1', '2', 'hello hello how are you bro? fine bro whats about u? fine ok kya kar rha hai hehhe bol kuch nahi helllo this chat message bole to demo chat message form user id 1 helllo this chat message bole to demo chat message form user id 1helllo this chat message bole to demo chat message form user id 1 nk sdfasd hi hid sadf hello hi j jkjh jkjhgoyg jkjhgoygjuyf jkjhgoygjuyf sdf sdfdf sdfdfd sdfdfde sdfdfdeer umair umair farooqui hello hello how are you brp fine fine bro ok bro kya ho rha hai bro aaj wahan gya tha bol na be nahi gya tha ok aur bata kya ho rha hai kuch nahi tu bata same kuch nahi hehehe ok ok heheh asd hehehe ok ye kya hua be pata nahi bold kaise hua mere ko to pata nahi ok bata na ruk main sahi karta hoon kiya han han ho gya han ho gya han ho gya', '0000-00-00 00:00:00', ''),
(882, '2', '1', 'hello', '0000-00-00 00:00:00', ''),
(883, '1', '2', 'hello', '0000-00-00 00:00:00', ''),
(884, '2', '1', 'how are you bro', '0000-00-00 00:00:00', ''),
(885, '1', '2', 'fine bro...', '0000-00-00 00:00:00', ''),
(886, '2', '1', 'this is a very basic real time chat application which is developed by mufazmi', '0000-00-00 00:00:00', ''),
(887, '1', '2', 'ok bro .. i already know that', '0000-00-00 00:00:00', ''),
(888, '1', '2', 'ok', '0000-00-00 00:00:00', ''),
(889, '1', '2', 'ok', '0000-00-00 00:00:00', ''),
(890, '1', '2', 'ok', '0000-00-00 00:00:00', ''),
(891, '1', '2', 'ok', '0000-00-00 00:00:00', ''),
(892, '1', '2', 'ok', '0000-00-00 00:00:00', ''),
(893, '2', '1', 'hi', '0000-00-00 00:00:00', ''),
(894, '1', '1', 'hi', '0000-00-00 00:00:00', ''),
(895, '1', '1', 'hi', '0000-00-00 00:00:00', ''),
(896, '1', '1', 'hi', '0000-00-00 00:00:00', ''),
(897, '1', '2', 'hi', '0000-00-00 00:00:00', ''),
(898, '2', '1', 'hi]]', '0000-00-00 00:00:00', ''),
(899, '1', '2', 'heeee', '0000-00-00 00:00:00', ''),
(900, '2', '1', 'hinnnnnn', '0000-00-00 00:00:00', ''),
(901, '1', '2', 'hindi', '0000-00-00 00:00:00', ''),
(902, '1', '2', 'hellow', '0000-00-00 00:00:00', ''),
(903, '2', '1', 'hiii', '0000-00-00 00:00:00', ''),
(904, '1', '2', 'asdfasd', '0000-00-00 00:00:00', ''),
(905, '', '', '', '0000-00-00 00:00:00', ''),
(906, '', '', '', '0000-00-00 00:00:00', ''),
(907, '', '', '', '0000-00-00 00:00:00', ''),
(908, '', '', '', '0000-00-00 00:00:00', ''),
(909, '', '', '', '0000-00-00 00:00:00', ''),
(910, '', '', '', '0000-00-00 00:00:00', ''),
(911, '', '', '', '0000-00-00 00:00:00', ''),
(912, '1', '2', 'hii', '2019-11-24 07:35:55', ''),
(913, '1', '2', 'hiiasdf', '2019-11-24 07:35:56', ''),
(914, '1', '2', 'hiiasdfsdfqw', '2019-11-24 07:35:57', ''),
(915, '1', '2', 'hiiasdfsdfqwe', '2019-11-24 07:35:58', ''),
(916, '1', '2', 'hiiasdfsdfqweqwer', '2019-11-24 07:35:59', ''),
(917, '1', '2', 'ZXX', '2019-11-24 07:41:37', ''),
(918, '1', '2', 'ZXXdfas', '2019-11-24 07:41:40', ''),
(919, '1', '2', 'ZXXdfaswerwqer', '2019-11-24 07:41:41', ''),
(920, '1', '2', 'ZXXdfaswerwqertewrt', '2019-11-24 07:41:43', ''),
(921, '1', '2', 'ZXXdfaswerwqertewrt', '2019-11-24 08:04:16', ''),
(922, '1', '2', 'ZXXdfaswerwqertewrt', '2019-11-24 08:04:16', ''),
(923, '1', '2', 'ZXXdfaswerwqertewrt', '2019-11-24 08:04:18', ''),
(924, '1', '2', 'ZXXdfaswerwqertewrt', '2019-11-24 08:04:19', ''),
(925, '1', '2', 'ZXXdfaswerwqertewrt', '2019-11-24 08:04:19', ''),
(926, '1', '2', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz ', '2019-11-24 08:04:45', ''),
(927, '1', '2', 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz ', '2019-11-24 08:04:55', ''),
(928, '1', '2', 'hi', '2019-11-24 08:05:21', ''),
(929, '1', '2', 'hiho', '2019-11-24 08:05:23', ''),
(930, '1', '2', 'hi', '2019-11-24 08:05:27', ''),
(931, '1', '3', 'hello firdos', '2019-11-24 10:35:35', ''),
(932, '3', '1', 'hello umair', '2019-11-24 10:36:14', ''),
(933, '1', '3', 'how are you baby..', '2019-11-24 10:36:26', ''),
(934, '3', '1', 'fine babu', '2019-11-24 10:36:33', ''),
(935, '3', '1', 'hello mister', '2019-11-24 17:00:25', ''),
(936, '3', '3', 'hello myself..', '2019-11-24 17:12:28', ''),
(937, '3', '3', 'hehehe', '2019-11-24 17:12:31', ''),
(938, '1', '3', 'hello mises... hehe', '2019-11-24 17:13:31', ''),
(939, '1', '4', 'hi', '2019-11-25 14:14:37', ''),
(940, '1', '4', 'hello mister', '2019-11-26 12:26:02', ''),
(941, '1', '1', '\'hllo\'', '2019-11-26 15:33:23', ''),
(942, '1', '1', 'if you haven\'t subscribe', '2019-11-26 15:33:40', ''),
(943, '1', '1\\\'', 'hi', '2019-11-26 17:14:55', ''),
(944, '1', '1\\&quot;', 'hi', '2019-11-26 17:27:05', ''),
(945, '1', '1\\&quot;', 'hi', '2019-11-26 17:27:09', ''),
(946, '1', '1\\&quot;', 'hi', '2019-11-26 17:27:11', ''),
(947, '1', '1', 'hiii', '2019-11-26 17:28:17', '');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `from_user_id` int(30) NOT NULL,
  `to_user_id` int(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `from_user_id`, `to_user_id`, `timestamp`) VALUES
(217, 2, 4, '2020-04-28 12:57:28'),
(216, 2, 1, '2020-04-28 12:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `from_user_id` varchar(5) NOT NULL,
  `post_id` varchar(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `from_user_id` varchar(20) NOT NULL,
  `content` varchar(999) NOT NULL,
  `image` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `from_user_id`, `content`, `image`, `timestamp`) VALUES
(149, '2', 'The Logo Of Social Codia', 'socialcodia.png', '2020-04-28 12:56:54'),
(148, '1', 'Hi this is my first post on instagram, My name is Umair Farooqui, working as a Software Engineer at Social Codia ( socialcodia.com )', 'mufazmi.png', '2020-04-27 23:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `website` varchar(60) NOT NULL,
  `image` varchar(70) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `contact`, `password`, `gender`, `bio`, `website`, `image`, `timestamp`) VALUES
(1, 'Umair Farooqui', 'mufazmi ', 'info.mufazmi@gmail.com', '9867503256', 'farooqui', 'Male', 'Hi there, instagram is using me, which is developed by #mufazmi', 'https://socialcodia.com', 'mufazmi.png', '2020-04-22 18:44:12'),
(2, 'Social Codia', 'socialcodia', 'socialcodia@gmail.com', '9867503256', 'farooqui', 'custom', 'The SOCIAL CODIA is a synonimous of SOCIAL MEDIA, &amp; The SOCIAL CODIA\'s mission is to provide infomation all about Programming, Netwoking, Technology and Social Media. we have a group of developers and this project is launched by one of our members,', 'socialcodia.com', 'socialcodia.png', '2019-11-29 12:32:45'),
(4, 'Ali Azzam', 'Azzam', 'info.azzamazmi@gmail.com', '', 'farooqui', '', 'azzam azmi saraimeer', '', '', '2019-11-26 12:38:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=948;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
