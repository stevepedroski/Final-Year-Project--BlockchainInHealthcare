-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 01:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL,
  `action` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditlog`
--

INSERT INTO `auditlog` (`id`, `timestamp`, `username`, `action`, `log`) VALUES
(14, '2022-05-05 15:07:48', 'zadmin', 'updateUserRoles', 'rtest3 to 4'),
(15, '2022-05-05 15:14:23', 'zadmin', 'createdUser', 'Created rtest11'),
(16, '2022-05-05 15:15:00', 'zadmin', 'createdUser', 'Created rtest11'),
(17, '2022-05-05 15:16:38', 'zadmin', 'updateUserRoles', 'rtest to 4'),
(18, '2022-05-05 15:28:40', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(19, '2022-05-05 15:28:56', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(20, '2022-05-05 15:33:16', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(21, '2022-05-05 15:33:20', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(22, '2022-05-05 15:34:08', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(23, '2022-05-05 15:34:09', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(24, '2022-05-05 18:01:39', 'zdoctor', 'loggedin', 'zdoctor logged in'),
(25, '2022-05-05 18:01:48', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(26, '2022-05-05 18:05:35', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(27, '2022-05-05 18:07:59', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(28, '2022-05-05 18:08:11', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(29, '2022-05-05 18:08:16', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(30, '2022-05-05 18:08:31', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(31, '2022-05-05 18:14:28', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(32, '2022-05-05 18:15:30', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(33, '2022-05-05 18:15:40', 'zdoctor', 'accessedAuditLog', 'zdoctor Access the Audit Log'),
(34, '2022-05-05 18:26:30', 'zadmin', 'loggedin', 'zadmin logged in'),
(35, '2022-05-05 18:31:37', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(36, '2022-05-05 20:25:05', 'zadmin', 'loggedin', 'zadmin logged in'),
(37, '2022-05-05 20:25:06', 'zadmin', 'accessedResults1', 'zadmin Access the Audit Log'),
(38, '2022-05-05 20:25:13', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(39, '2022-05-05 20:25:23', 'zadmin', 'accessedResults1', 'zadmin Access the Audit Log'),
(40, '2022-05-05 20:25:29', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(41, '2022-05-05 21:00:57', 'zadmin', 'loggedin', 'zadmin logged in'),
(42, '2022-05-05 21:21:18', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(43, '2022-05-05 21:25:17', 'zadmin', 'loggedin', 'zadmin logged in'),
(44, '2022-05-05 23:21:57', 'stest3', 'reigsteredAnAccount', 'stest3 registered'),
(45, '2022-05-05 23:22:16', 'stest3', 'loggedin', 'stest3 logged in'),
(46, '2022-05-05 23:25:52', 'stest3', 'accessedResults1', 'stest3 Access the Audit Log'),
(47, '2022-05-05 23:49:50', 'stest3', 'updateUserRoles', 'rtest to 3'),
(48, '2022-05-05 23:52:11', 'stest3', 'accessedAuditLog', 'stest3 Access the Audit Log'),
(49, '2022-05-06 09:09:07', 'stest3', 'loggedin', 'stest3 logged in'),
(50, '2022-05-06 09:09:10', 'stest3', 'accessedAuditLog', 'stest3 Access the Audit Log'),
(51, '2022-05-06 09:29:56', 'stest3', 'accessedAuditLog', 'stest3 Access the Audit Log'),
(52, '2022-05-06 10:31:28', 'zadmin', 'loggedin', 'zadmin logged in'),
(53, '2022-05-06 10:31:30', 'zadmin', 'accessedResults1', 'zadmin Access the Audit Log'),
(54, '2022-05-06 10:31:44', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(55, '2022-05-06 10:33:14', 'zadmin', 'createdUser', ' Created ytest1'),
(56, '2022-05-06 10:36:23', 'zadmin', 'createdUser', ' Created ytest2'),
(57, '2022-05-06 10:37:29', 'zadmin', 'updateUserRoles', 'ytest2 to 3'),
(58, '2022-05-06 10:37:41', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log'),
(59, '2022-05-06 10:37:51', 'zadmin', 'loggedin', 'zadmin logged in'),
(60, '2022-05-06 11:24:17', 'zadmin', 'accessedAuditLog', 'zadmin Access the Audit Log');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role`) VALUES
(2, 'zadmin', '$2y$10$tHqCXXcVSzlBP.RbzSmzq.B.4y9OGZtGYD3uM20/Bf4suW0G0SdD.', '2022-05-04 11:00:48', 4),
(3, 'zdoctor', '$2y$10$OGCprePbAxivKt4AWWAPi.rzmrstdfvVloWTzbpEAQw/6vIG.TQGK', '2022-05-04 11:06:13', 3),
(4, 'znurse', '$2y$10$4jw61zUqPL9gSphyUXtmduAmKJ09JOllU9bNPeMc.40cUTfbk/VH.', '2022-05-04 11:06:29', 2),
(5, 'zpatient', '$2y$10$L6Qd9bkvNj7QDfp1CHBOROC4JU/K4UmBPDangsq5gQ5zKyvrx0Dmi', '2022-05-04 11:06:37', 1),
(6, 'zunknown', '$2y$10$9fbBQMYSLFyF2NIVC/.Mje0e29WTvddxm7rB4s5/5GM0eMOMIKlie', '2022-05-04 11:07:20', 0),
(7, 't_account1', '$2y$10$DoV00vgu56LsUkvGIg9jcuHFs5M0LuQMrZnCDgf57eefUdJ4QbCz.', '2022-05-04 13:32:19', 0),
(8, 'rtest', '$2y$10$hKWl0Z8ZX6aHYulAcaa.cOKKsNCFuFDwHdG6lvY0a2wowU8vWSlJK', '2022-05-05 09:49:12', 4),
(9, 'rtest1', '$2y$10$DnJB6b/8axzCwm.JaJo2D.65fkwaMmjRiNHNFRI7psAfa9FRZJm0.', '2022-05-05 09:49:56', 0),
(10, 'rtest3', '$2y$10$T.gHJy9CvPJDfoKQrFDeVeHh0Hj7/khCNKP0YsVM5m7QuXvkxaURm', '2022-05-05 09:50:33', 0),
(11, 'rtest4', '$2y$10$3xNXl3DIUPq2FEi4Q6yYF.15XuYRJUZoL3.PX1LZbkhEn1dzJ4OlK', '2022-05-05 09:51:24', 0),
(12, 'islandpen121', '$2y$10$IfePUVtFWp7gbjS6ammOkuPF1Li.f1r9SuaZmPlw6BU0/FG6lZYSa', '2022-05-05 11:10:47', 4),
(13, 'rtest6', '$2y$10$Khf/wRla2aDfGWgKHJJ01ONpA2FdU7BYmLwJ0vrRzumsLeXdi2Ir2', '2022-05-05 15:03:39', 0),
(14, 'rtest7', '$2y$10$A9UNb8vV2J3eL0w9dNe1lOuU8T5K6a5HjmWOTbV693tOApf5WuFqS', '2022-05-05 15:04:53', 0),
(15, 'rtest8', '$2y$10$RvTu9qRUCatb6N5/gEIaq.s7jl7MyGwR4HX/yI9BjO7DmpjzRQf5u', '2022-05-05 15:06:04', 0),
(16, 'rtest9', '$2y$10$r8lVuM0Y53n6DlkAzf1I8.MKzl1WGCgRwM/bmcxB.hZZeUHc.yZ5C', '2022-05-05 15:11:05', 0),
(17, 'rtest11', '$2y$10$FY0KR2hGQBg.XAptW.5ehexxaeRKf2p0Z.Df38qPEUKze/iB372jS', '2022-05-05 15:15:00', 0),
(18, 'stest3', '$2y$10$EwL1Xy9bMNvICOMrRbwAv.Joh6bxTO.p0ugM5uQ5anfAwDe1WUzn6', '2022-05-05 23:21:57', 0),
(19, 'ytest1', '$2y$10$oowdGU2uQu10MPsA05/0FuEeMTpT/CoUszvI5jRZzXNdmoEL09gBy', '2022-05-06 10:33:14', 0),
(20, 'ytest2', '$2y$10$C.uw3pA.ptdy1FVabwF4eOjArbA1Fc/9DkJlxgZcvcvr96soR8cBm', '2022-05-06 10:36:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditlog`
--
ALTER TABLE `auditlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditlog`
--
ALTER TABLE `auditlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
