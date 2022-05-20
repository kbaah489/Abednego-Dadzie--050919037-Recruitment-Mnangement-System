-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 08:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `admin_user`, `admin_password`, `created_at`) VALUES
(1, 'admin', 'admin123', '2020-05-17 06:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `cmspages`
--

CREATE TABLE `cmspages` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmspages`
--

INSERT INTO `cmspages` (`id`, `title`, `description`, `createdat`) VALUES
(1, 'aboutus', '<p><strong>Lorem ipsum </strong>dolor sit amet, consectetur adipiscing elit. Integer faucibus varius arcu, et sollicitudin nibh volutpat ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nec leo et nisi scelerisque porttitor sed eget sapien. Maecenas quis ultrices nisl. Mauris ullamcorper, ante eu tempus placerat, ligula augue gravida turpis, in feugiat felis neque ac nisi. Aliquam at mollis leo. Curabitur quis diam non est ornare feugiat. Praesent varius dui sed arcu consectetur, eget rutrum risus tincidunt. Proin vitae metus eget elit laoreet condimentum at nec lectus. Nunc non massa lacinia, laoreet nibh nec, pulvinar dui. Suspendisse accumsan ut erat et iaculis. Pellentesque id tortor mauris. Cras efficitur at erat rutrum tempus. Donec volutpat at mi ut maximus. Nullam blandit, nulla ac dignissim sagittis, nibh orci molestie purus, eget pretium eros massa at urna. Donec dignissim varius rutrum. Nulla sit amet tortor tincidunt, porta metus eget, ornare mauris. Curabitur quis congue est. Integer eget orci a nisi bibendum gravida in id odio.</p>', '2020-05-25 12:01:28'),
(2, 'service', '<p><strong>Integer nisi augue, suscipit ac risus ac, fringilla </strong>vulputate dui. Fusce efficitur fermentum mauris sit amet gravida. Donec et purus placerat, euismod tortor ac, congue lacus. Duis dui dui, lobortis non cursus a, mollis ac ex. Integer suscipit, magna quis auctor gravida, nisi ipsum rutrum augue, id sodales eros ante scelerisque augue. Aenean sit amet justo neque. Maecenas nec iaculis augue, sed consectetur purus. In vel nisl pharetra, pulvinar metus eu, faucibus libero. Vestibulum efficitur turpis vitae laoreet consequat. Phasellus vel ligula dolor. Aliquam nisi ligula, semper id semper id, pharetra vel nunc. Donec nec bibendum dui, ut ultrices tellus. Donec ornare nunc hendrerit nisi blandit scelerisque. Proin cursus nunc quis risus mattis, in sodales eros vestibulum. Nam dignissim est ut justo pretium, vel tristique lorem rutrum. Etiam rutrum, urna vel molestie iaculis, ipsum neque euismod urna, fermentum consectetur orci justo quis magna. Nam tempor, ipsum sed luctus auctor, turpis metus pulvinar felis, non porta nisl nisl non quam. Pellentesque dapibus dolor nec purus fringilla, ut tempor nunc hendrerit. Proin varius tellus et nulla hendrerit, vel convallis mauris viverra. Vivamus non quam diam. Ut commodo, neque non venenatis mattis, nisi felis ultrices mi, volutpat tincidunt odio elit non orci. Praesent sit amet fringilla diam. Phasellus porttitor mollis lacus, non fermentum diam porta et. Sed finibus varius sodales. Nulla est turpis, pellentesque in nisi ut, efficitur molestie nulla.</p>', '2020-05-25 12:01:48'),
(5, 'contact us', '<p><strong>Proin cursus nunc quis risus mattis, in sodales eros vestibulum.</strong> Nam dignissim est ut justo pretium, vel tristique lorem rutrum. Etiam rutrum, urna vel molestie iaculis, ipsum neque euismod urna, fermentum consectetur orci justo quis magna. Nam tempor, ipsum sed luctus auctor, turpis metus pulvinar felis, non porta nisl nisl non quam. Pellentesque dapibus dolor nec purus fringilla, ut tempor nunc hendrerit. Proin varius tellus et nulla hendrerit, vel convallis mauris viverra. Vivamus non quam diam. Ut commodo, neque non venenatis mattis, nisi felis ultrices mi, volutpat tincidunt odio elit non orci. Praesent sit amet fringilla diam. Phasellus porttitor mollis lacus, non fermentum diam porta et. Sed finibus varius sodales. Nulla est turpis, pellentesque in nisi ut, efficitur molestie nulla. Donec viverra quis sapien vitae hendrerit. Cras vitae massa justo. Aenean mollis ultrices gravida. Quisque euismod quis mi non pretium. Phasellus aliquam nunc orci, dignissim elementum purus lobortis vitae. Maecenas ac tortor aliquam, mollis velit sed, fringilla justo. Curabitur vitae tellus in neque ornare pulvinar vitae rhoncus velit. Morbi in interdum est, in pellentesque urna. Etiam luctus tellus ut congue auctor. Mauris in velit ut nibh consequat bibendum sed a nisi. Nulla facilisi.</p>', '2020-05-25 12:02:11'),
(6, 'Career', '<p><strong>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</strong> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2020-05-25 12:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `imagename` text NOT NULL,
  `type` varchar(500) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `title`, `imagename`, `type`, `time`) VALUES
(5, 'Syska', 'Techone064431.jpg', 'Logo', '2020-05-24 06:44:31'),
(6, 'TCS', 'Techone064522.jpg', 'Logo', '2020-05-24 06:45:22'),
(7, 'Tatasky', 'Techone064615.jpg', 'Logo', '2020-05-24 06:46:15'),
(8, 'BMW', 'Techone064646.jpg', 'Logo', '2020-05-24 06:46:46'),
(9, 'Infosys', 'Techone064722.jpg', 'Logo', '2020-05-24 06:47:22'),
(10, 'Limbo', 'Techone064756.jpg', 'Logo', '2020-05-24 06:47:56'),
(11, 'Techno', 'Techone064843.jpg', 'Logo', '2020-05-24 06:48:43'),
(12, 'Homepagebannerone', 'Techone070509.jpg', 'Banner', '2020-05-24 07:05:09'),
(13, 'Homepagebannertwo', 'Techone070549.jpg', 'Banner', '2020-05-24 07:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `company` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `opening` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company`, `experience`, `description`, `opening`, `image`, `location`, `createdat`) VALUES
(1, 'Magento Developer', 'TCS', '1-2 years', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '5', 'asset/image/tcsone.jpg', 'Mumbai', '2020-05-22 12:37:36'),
(2, 'PHP Developer', 'BMW', '2-3 year', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '5', 'asset/image/bmw.jpg', 'Bangalore', '2020-05-24 04:24:10'),
(3, 'Drupal', 'Infosys', '1-2 year', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '3', 'asset/image/infosys.jpg', 'Delhi', '2020-05-24 04:24:21'),
(5, 'C/C++ developer', 'Syska', '3-5 year', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '6', 'asset/image/syska.jpg', 'Mumbai', '2020-05-24 04:24:32'),
(6, 'Magento Developer', 'Techno', '2-3 year', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '5', 'asset/image/techno.jpg', 'Mumbai', '2020-05-22 12:40:11'),
(7, 'Laravel Developer', 'Tatasky', '1-2 year', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '7', 'asset/image/tatasky.jpg', 'Kolkatta', '2020-05-22 12:42:27'),
(8, 'Java Developer', 'Limbo', '1-2 year', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1', 'asset/image/limbo.jpg', 'Delhi', '2020-05-22 12:43:55'),
(9, 'Angular', 'Syska', '2-3 year', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '5', '', 'Mumbai', '2020-05-24 04:28:27'),
(11, 'graphics', 'google', '1-3 year', '<p>graphics designer</p>', '4', '', 'hyderabad', '2020-05-28 05:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `addresume` varchar(500) NOT NULL,
  `applyjob` varchar(500) NOT NULL,
  `addskill` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `first_name`, `last_name`, `password`, `email`, `gender`, `addresume`, `applyjob`, `addskill`) VALUES
(1, 'raju pandit', 'raju', 'pandit', '123456', 'rajupndt@gmail.com', 'male', 'asset/doc/Techone094240.txt', 'PHP Developer-BMW-Bangalore, Drupal-Infosys-Delhi', 'PHP,Magento'),
(2, 'raju pandit', 'raju', 'pandit', '123456', 'rocky@gmail.com', 'male', '', '', ''),
(3, 'ramesh123', 'ramesh', 'rastogi', '', 'ramesh@gmail.com', 'Male', '', '', ''),
(4, 'rtika619', 'ratika', 'mehta', '', 'ratika@gmail.com', 'male', '', '', ''),
(5, 'Ankita123', 'ankita', 'joshi', '', 'ankita@gmail.com', 'male', '', '', ''),
(7, 'umesh123', 'Umesh', 'Gupta', '', 'umesh@gmail.com', 'male', '', '', ''),
(9, 'rock kem', 'rocky', 'kem', '123456', 'rockykem@gmail.com', 'male', 'asset/doc/Techone074005.txt', 'Magento Developer-TCS-Mumbai, PHP Developer-BMW-Bangalore', 'php'),
(10, 'remo dty', 'remo', 'dty', '123456', 'remodty@gmail.com', 'male', 'asset/doc/Techone080718.txt', 'grahics-TCS-Mumbai', 'php,magento'),
(11, 'ravi mehta', 'ravi', 'mehtaa', '123456', 'ravimehta@gmail.com', 'male', 'asset/doc/Techone071355.txt', 'Magento Developer-TCS-Mumbai, PHP Developer-BMW-Bangalore', '.net,php,magento');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `cmspages`
--
ALTER TABLE `cmspages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmspages`
--
ALTER TABLE `cmspages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
