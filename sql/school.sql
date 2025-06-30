-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursetable`
--

CREATE TABLE `coursetable` (
  `Co_Id` varchar(11) NOT NULL,
  `Co_name` varchar(255) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursetable`
--

INSERT INTO `coursetable` (`Co_Id`, `Co_name`, `department`) VALUES
('c001', 'Algebra', 'Mathematics'),
('c002', 'Database', 'IT'),
('c003', 'Geophysics', 'Physics'),
('c004', 'Spoken', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`account`, `password`) VALUES
('Account1', '12345'),
('Account3', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `room_table`
--

CREATE TABLE `room_table` (
  `Room_ID` varchar(11) NOT NULL,
  `Bid_num` varchar(11) NOT NULL,
  `Room_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_table`
--

INSERT INTO `room_table` (`Room_ID`, `Bid_num`, `Room_type`) VALUES
('R02', 'B001', 'lab'),
('R04', 'B002', 'lecture'),
('R05', 'B001', 'lab'),
('R03', 'B003', 'lecture');

-- --------------------------------------------------------

--
-- Table structure for table `stud_table`
--

CREATE TABLE `stud_table` (
  `Stud_Id` varchar(11) NOT NULL,
  `Stud_name` varchar(255) NOT NULL,
  `age` varchar(2) NOT NULL,
  `sex` varchar(4) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_table`
--

INSERT INTO `stud_table` (`Stud_Id`, `Stud_name`, `age`, `sex`, `year`) VALUES
('S002', 'Megersa', '23', 'M', 3),
('S003', 'Kebede', '30', 'M', 3),
('S003', 'Kebede', '30', 'M', 3),
('S004', 'Helen', '23', 'F', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teach_table`
--

CREATE TABLE `teach_table` (
  `T_id` varchar(11) NOT NULL,
  `T_name` varchar(255) NOT NULL,
  `major` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teach_table`
--

INSERT INTO `teach_table` (`T_id`, `T_name`, `major`) VALUES
('T001', 'Kemal', 'Mathematics'),
('T002', 'Ujulu', 'IT'),
('T003', 'Hassen', 'Physics'),
('T004', 'Bikila', 'English'),
('099u', 'Biniyam', 'ca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
