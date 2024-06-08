-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2024 at 06:03 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danadesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Keperluan` text NOT NULL,
  `Tanggal` date NOT NULL,
  `Dana_Masuk` varchar(255) NOT NULL,
  `Dana_Keluar` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `Nama`, `Keperluan`, `Tanggal`, `Dana_Masuk`, `Dana_Keluar`, `Total`, `Tujuan`) VALUES
(8, 'Niken', 'Pembangunan Masjid', '2024-05-02', '271', '271', '500', 'memperluas kawasan masjid');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `Username` int NOT NULL,
  `Password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int NOT NULL,
  `Full_Nama` varchar(30) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `phone_number` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `Full_Nama`, `Email`, `Password`, `Username`, `phone_number`) VALUES
(1, 'gustomo', '2218021@gmail.com', '$2y$10$hOcq5arh428dQTujeV5FsutNCVs7MgD7dFNfWmB2tnoX3j178HI12', 'dhan', '9999'),
(2, 'Ramdhan', 'rz3333769@gmail.com', '$2y$10$r6tVPYDVL8V.9ZYcLWeDd.Mw7vbqaHqsoo7Ru1ETPcIDYLvRAzUlO', 'pira', '0812'),
(3, 'edo', 'edo@gmail.com', '$2y$10$HrF34xTJqoF.OMxCtRtZauWp2I0CJH39WCWxAQnd9e2EE2llSSkPi', 'edozel', '081222'),
(5, 'fadilah', 'fadilah@gmail.com', '$2y$10$1IwuS1TPwhQhceiiiT3g/OYn0IEx.FtcKImvHz7VnRFn53p2Ww/R2', 'asep', '008'),
(6, 'niken', 'niken@gmail.com', '$2y$10$zyWQzE.Y5rQZh9n/2BMqAOUk52dEBXu2VsUqwVzGIns8yfaAYJfrO', 'niken1', '0000'),
(7, 'ramdan', 'ramdan@gmail', '$2y$10$MEfjvng1oTqzWy2mDIlY8OZ2h4JipSOgv0k5iSKrWmEBxMIBwFlDS', 'edo', '2323'),
(9, 'baba', 'babi@gmail.com', '$2y$10$6zJMjJDbj81eVOMtB8iSx.LvqUnfLCTEJs00kwc59lOKIAbx3WUBC', 'babi', '1221');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
