-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 08:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(20) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `suggestions` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `time`) VALUES
(1, 'admin', 'admin', '2023-05-06 19:50:25'),

-- --------------------------------------------------------

--
-- Table structure for table `modeapk`
--

CREATE TABLE `modeapk` (
  `id` int(20) NOT NULL,
  `apkTitle` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `size` int(20) NOT NULL,
  `version` varchar(20) NOT NULL,
  `features` varchar(100) NOT NULL,
  `download` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modeapk`
--

INSERT INTO `modeapk` (`id`, `apkTitle`, `image`, `size`, `version`, `features`, `download`) VALUES
(29, '', 'apkImages/pexels-rafael-guajardo-604684.jpg', 0, '', '', ''),
(30, '', 'apkImages/merakist-l5if0iQfV4c-unsplash.jpg', 0, '', '', ''),
(31, '', 'apkImages/pexels-kaique-rocha-171945.jpg', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie_request`
--

CREATE TABLE `movie_request` (
  `id` int(20) NOT NULL,
  `userName` varchar(20) DEFAULT NULL,
  `movieName` varchar(50) NOT NULL,
  `movieLanguage` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `getsource` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(20) NOT NULL,
  `notification` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification`) VALUES
(13, 'thor love and thunder');

-- --------------------------------------------------------

--
-- Table structure for table `release_mv`
--

CREATE TABLE `release_mv` (
  `id` int(40) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `language` varchar(100) NOT NULL,
  `discription` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `release_mv`
--

INSERT INTO `release_mv` (`id`, `title`, `image`, `language`, `discription`) VALUES
(23, 'tooth Pari hindi 480p hd', 'images/images (8).jpeg', 'Webseries,hindi', 'release on 2032');

-- --------------------------------------------------------

--
-- Table structure for table `upload_data`
--

CREATE TABLE `upload_data` (
  `sr_no` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `language` varchar(100) NOT NULL,
  `480p` varchar(200) NOT NULL,
  `720p` varchar(200) NOT NULL,
  `1080p` varchar(200) NOT NULL,
  `source` varchar(30) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_data`
--

INSERT INTO `upload_data` (`sr_no`, `title`, `image`, `language`, `480p`, `720p`, `1080p`, `source`, `last_updated`) VALUES
(9, 'THor love and thunder ⚡', 'images/Athor.jpg', 'Hindi', 'https://', 'https://', 'https://google.com', '', '2023-10-14 08:25:43'),
(10, 'Joker', 'images/Joker2.jpg', 'english,hindi', 'https://', 'https://', 'https://google.com', '', '2023-10-14 08:25:43'),
(17, 'hindi', 'images/god-lord-krishna-wallpaper-preview.jpg', 'hindi', 'a', 'a', 'a', '', '2023-10-14 08:25:43'),
(18, 'Aniket the Thunder boy ⚡', 'images/1680853974379.jpg', 'Hindi English ', 'Https ', 'Google', 'Https://Google.com', '', '2023-10-14 08:25:43'),
(19, 'change', 'images/kmc_20221219_165732.jpg', 'Hindi English marathi', 'Https ', 'Google', 'Camrea', '', '2023-10-14 08:25:43'),
(22, 'Hindi', 'images/kmc_20221219_165732.jpg', 'Hindi,English', 'https://stoxind.com', '', '', '', '2023-10-14 08:25:43'),
(37, 'little krishna hindi dubbed 2023', 'images/shri-krishnna.jpg', 'webseries', 'https://stoxind.com', 'https://stoxind.com', 'https://stoxind.com', '', '2023-10-14 08:34:24'),
(38, 'little krishna hindi dubbed 2023', 'images/shri-krishnna.jpg', 'webseries', 'https://stoxind.com', 'https://stoxind.com', 'https://stoxind.com', '', '2023-10-14 08:25:43'),
(40, 'little krishna hindi,english dubbed 2022', 'images/god-lord-krishna-wallpaper-preview.jpg', 'southmovies', '', '', '', '', '2023-10-14 08:25:43'),
(41, 'tooth Pari hindi 480p hd', 'images/Athor.jpg', 'Webseries,hindi', '', '', '', '', '2023-10-14 08:25:43'),
(43, 'dhamal', 'images/Tooth_Pari_first_look.jpg', 'Hindi', 'Https', '', '', '', '2023-10-14 08:25:43'),
(44, 'logo', 'images/logoAnd.png', 'Webseries,hindi', 'https://google.com', 'https://google.com', 'https://google.com', 'telegram', '2023-10-14 08:25:43'),
(49, 'test', 'images/drycell.jpg', 'Webseries,hindi', 'https://google.com', 'https://google.com', 'https://google.com', 'telegram', '2023-10-14 08:25:43'),
(50, 'light of the starts ', 'images/light.jpg', 'English,Hindi', 'https://google.com', 'https://google.com', 'https://google.com', 'telegram', '2023-10-14 08:34:35'),
(64, 'Tiger Zinda Hai', 'images/roboboy.png', 'Hindi', '', '', '', '', '2023-10-14 08:45:34'),
(65, 'Desktop', 'images/desktop.jpg', 'Hindi ', '', '', '', 'terabox', '2023-10-14 08:46:03'),
(66, 'loki season 2 hindi dubbed 2023 big name tesing behaviour on the dotted line are visible or not', 'images/loki2.jpg', 'hindi', 'https://google.com', '', '', 'telegram', '2023-11-07 06:39:45'),
(67, 'thor love and thunder', 'images/20231200010.jpg', 'hindi', 'https:// google.com', '', '', 'telegram', '2024-01-22 12:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `webuploads`
--

CREATE TABLE `webuploads` (
  `id` int(20) NOT NULL,
  `webname` varchar(400) NOT NULL,
  `language` varchar(200) NOT NULL,
  `season` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `source` varchar(30) NOT NULL,
  `completeSeason480p` varchar(300) NOT NULL,
  `completeSeason720p` varchar(300) NOT NULL,
  `completeSeason1080p` varchar(300) NOT NULL,
  `ep1` varchar(100) NOT NULL,
  `ep2` varchar(100) NOT NULL,
  `ep3` varchar(100) NOT NULL,
  `ep4` varchar(100) NOT NULL,
  `ep5` varchar(100) NOT NULL,
  `ep6` varchar(100) NOT NULL,
  `ep7` varchar(100) NOT NULL,
  `ep8` varchar(100) NOT NULL,
  `ep9` varchar(100) NOT NULL,
  `ep10` varchar(100) NOT NULL,
  `ep11` varchar(100) NOT NULL,
  `ep12` varchar(100) NOT NULL,
  `ep13` varchar(300) NOT NULL,
  `ep14` varchar(300) NOT NULL,
  `ep15` varchar(300) NOT NULL,
  `ep16` varchar(300) NOT NULL,
  `ep17` varchar(300) NOT NULL,
  `ep18` varchar(300) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webuploads`
--

INSERT INTO `webuploads` (`id`, `webname`, `language`, `season`, `image`, `source`, `completeSeason480p`, `completeSeason720p`, `completeSeason1080p`, `ep1`, `ep2`, `ep3`, `ep4`, `ep5`, `ep6`, `ep7`, `ep8`, `ep9`, `ep10`, `ep11`, `ep12`, `ep13`, `ep14`, `ep15`, `ep16`, `ep17`, `ep18`, `last_updated`) VALUES
(4, '$', 'Webseries,', '2', 'images/Tooth_Pari_first_look.jpg', '', '', '', '', 'https:// google.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(5, 'tooth Pari hindi 480p hd\r\nh ', 'Webseries,hindi', '1', 'images/Tooth_Pari_first_look.jpeg', 'telegrram', 'a', 'f', 'd', 'ss', 'w', 'w', 'a', 'b', 'c', 'd', 'e', 'fg', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', '2023-10-14 08:53:11'),
(8, '“What’s Wrong With Secretary Kim” (2018) hindi ', 'webseries,kdrama', '1', 'images/secretary-kim-768x512.jpeg', '', '', '', '', 'https://www.viki.com/videos/1133753v', 'https://www.viki.com/videos/1133753v', 'https://www.viki.com/videos/1172625v', 'https://', 'https://google.com', 'https://google.com', 'https://www.viki.com/videos/1172625v', 'https://www.viki.com/videos/1172625v', 'https://www.viki.com/videos/1172625v', 'https://www.viki.com/videos/1172625v', 'https://www.viki.com/videos/1172625v', 'https://www.viki.com/videos/1172625v', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(9, '“True Beauty” (2020~2021)', 'webseries,kdrama', '1', 'images/true-beauty2.jpeg', '', '', '', '', 'https://www.viki.com/videos/1172625v', 'https://www.viki.com/videos/1172625v', 'https://www.viki.com/videos/1172625v', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(10, '“True Beauty” (2020~2021)', 'Webseries,hindi', '', 'images/trucaller.png', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(14, 'google testing', 'webseries,', '2', 'images/light.jpg', '', '', '', '', 'https://stoxind.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(15, 'google testing', 'webseries,', '1', 'images/drycell.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(16, 'google testing', 'webseries,', '1', 'images/drycell.jpg', 'telegram', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(17, 'tooth Pari hindi 480p hd\r\nh ', 'Webseries,hindi', '1', 'images/Screenshot 2023-03-17 at 09-51-33 ShreeRamBOOKS.png', 'telegrram', 'a', 'f', 'd', 'ss', 'w', 'w', 'a', 'b', 'c', 'd', 'e', 'fg', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', '2023-10-14 08:53:11'),
(18, 'change check', '', '', 'images/Screenshot 2023-03-17 at 09-51-33 ShreeRamBOOKS.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(19, '', '', '', 'images/pexels-kaique-rocha-171945.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(20, '', '', '', 'images/pexels-kaique-rocha-171945.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(21, '', '', '', 'images/pexels-toni-cuenca-619419.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(22, '', '', '', 'images/merakist-l5if0iQfV4c-unsplash.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(23, '', '', '', 'images/merakist-l5if0iQfV4c-unsplash.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(24, '', '', '', 'images/merakist-l5if0iQfV4c-unsplash.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(25, '', '', '', 'images/super-snapper-zIwAchjDirM-unsplash.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(26, '', '', '', 'images/logoAnd.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(27, '', '', '', 'images/Screenshot 2023-03-17 at 09-53-58 Login Signup Form.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11'),
(28, 'tooth Pari hindi 480p HD', 'webseries,Hindi ,marathi', '1', 'images/images (10).jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-11-07 08:08:54'),
(29, 'bloodhounds season 1', 'webseries,', '', 'images/images (10).jpeg', 'telegram', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-11-06 17:37:19'),
(30, '', 'webseries,', '', 'images/images (10).jpeg', '', 'https://google.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-14 08:53:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `modeapk`
--
ALTER TABLE `modeapk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_request`
--
ALTER TABLE `movie_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `release_mv`
--
ALTER TABLE `release_mv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_data`
--
ALTER TABLE `upload_data`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `webuploads`
--
ALTER TABLE `webuploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `modeapk`
--
ALTER TABLE `modeapk`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `movie_request`
--
ALTER TABLE `movie_request`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `release_mv`
--
ALTER TABLE `release_mv`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `upload_data`
--
ALTER TABLE `upload_data`
  MODIFY `sr_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `webuploads`
--
ALTER TABLE `webuploads`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
