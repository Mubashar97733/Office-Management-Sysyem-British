-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 07:41 AM
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
-- Database: `bisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bisa_admission`
--

CREATE TABLE `bisa_admission` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) DEFAULT NULL,
  `a_rollno` int(11) DEFAULT NULL,
  `a_cnic` varchar(255) DEFAULT NULL,
  `a_fname` varchar(255) DEFAULT NULL,
  `a_course` varchar(255) DEFAULT NULL,
  `a_phone` varchar(255) DEFAULT NULL,
  `a_email` varchar(255) DEFAULT NULL,
  `a_method` varchar(255) DEFAULT NULL,
  `a_area` varchar(255) DEFAULT NULL,
  `a_sex` varchar(255) DEFAULT NULL,
  `a_dob` date DEFAULT NULL,
  `a_user` varchar(255) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `a_tfee` int(11) NOT NULL DEFAULT 0,
  `a_fee1` int(11) NOT NULL DEFAULT 0,
  `a_fee1_meth` varchar(255) DEFAULT NULL,
  `a_fee1_date` date DEFAULT NULL,
  `a_remind_date1` date DEFAULT NULL,
  `a_fee2` int(11) NOT NULL,
  `a_fee2_meth` varchar(255) DEFAULT NULL,
  `a_fee2_date` date DEFAULT NULL,
  `a_remind_date2` date DEFAULT NULL,
  `a_fee3` int(11) NOT NULL DEFAULT 0,
  `a_fee3_meth` varchar(255) DEFAULT NULL,
  `a_fee3_date` date DEFAULT NULL,
  `a_remind_date3` date DEFAULT NULL,
  `a_dis` int(11) NOT NULL DEFAULT 0,
  `a_dis_com` varchar(255) DEFAULT NULL,
  `a_refund` int(11) NOT NULL DEFAULT 0,
  `a_re_date` date DEFAULT NULL,
  `a_re_meth` varchar(255) DEFAULT NULL,
  `a_ex_fee` int(11) NOT NULL DEFAULT 0,
  `a_ex_date` date DEFAULT NULL,
  `a_ex_meth` varchar(255) DEFAULT NULL,
  `a_ex_com` varchar(255) DEFAULT NULL,
  `a_csd` date DEFAULT NULL,
  `a_ced` date DEFAULT NULL,
  `a_status` int(11) NOT NULL DEFAULT 0,
  `a_remarks` varchar(255) DEFAULT NULL,
  `a_on` varchar(255) DEFAULT NULL,
  `a_osn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_admission`
--

INSERT INTO `bisa_admission` (`a_id`, `a_name`, `a_rollno`, `a_cnic`, `a_fname`, `a_course`, `a_phone`, `a_email`, `a_method`, `a_area`, `a_sex`, `a_dob`, `a_user`, `a_date`, `a_tfee`, `a_fee1`, `a_fee1_meth`, `a_fee1_date`, `a_remind_date1`, `a_fee2`, `a_fee2_meth`, `a_fee2_date`, `a_remind_date2`, `a_fee3`, `a_fee3_meth`, `a_fee3_date`, `a_remind_date3`, `a_dis`, `a_dis_com`, `a_refund`, `a_re_date`, `a_re_meth`, `a_ex_fee`, `a_ex_date`, `a_ex_meth`, `a_ex_com`, `a_csd`, `a_ced`, `a_status`, `a_remarks`, `a_on`, `a_osn`) VALUES
(1, 'USAMA HUSNAIN', 2752, '3310271495881', 'SHAHID HUSSAIN', 'IELTS Academic', '03037081767', 'usamahussnain87@gmail.com', 'Visit', 'H P-1,BLOCK 252, WEST RAILWAY COLONY, NEAR POLO GROUND', 'Male', '1999-01-16', 'Maham', '2023-10-13', 26500, 2000, NULL, '2023-10-12', NULL, 24500, NULL, '2023-10-16', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'British Institute', 'SR'),
(2, 'RANA M USMAN', 2753, '3310294697045', 'RANA RAFAQAT ALI', 'IELTS Academic', '03017162522', 'ranav9607@gmail.com', 'Visit', 'H # 68/A, GULSHAN-E-IQBAL, FSD', 'Male', '2001-02-22', 'Maham', '2023-10-13', 26500, 23000, NULL, '2023-10-12', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 3500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 2, NULL, 'British Institute', 'SR'),
(3, 'RANA SULTAN', 2754, '3310216355393', 'RANA RAFAQAT ALI', 'IELTS Academic', '03278060890', 'Sultanrafaqat69@gmail.com', 'Visit', 'GULSHAN-E-IQBAL, 68/A BLOCK, FSD', 'Male', '2004-03-15', 'Maham', '2023-10-13', 26500, 23000, NULL, '2023-10-12', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 3500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, NULL, 'British Institute', 'SR'),
(4, 'SHAHROZ AHMED', 2755, '3310407116283', 'MUHAMMAD SHAFIQ', 'IELTS Academic', '03031607602', 'shahrozmian34@gmail.com', 'Visit', 'H P-5504, MANSOORABAD, FSD', 'Male', '2001-02-01', 'Maham', '2023-10-13', 26500, 23000, 'Cash', '2023-11-13', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 3500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(5, 'RABIA', 2756, '', 'BASHARAT ALI', 'IELTS General', '03267296795', '', 'Visit', 'GUTWALA, LAIBA GARDEN', 'Female', '1991-02-02', 'Maham', '2023-10-14', 32000, 5000, NULL, '2023-10-13', NULL, 10000, NULL, '2023-10-16', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(6, 'ASIMA ALI', 2751, '3310376698188', 'GHULAM ALI', 'IELTS Academic', '03097337124', 'aasimaali903@gmail.com', 'Visit', 'MUKHTAR COLONY, JHANG ROAD, FSD', 'Female', '2002-02-17', 'Maham', '2023-10-10', 26500, 17000, NULL, '2023-10-10', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 5500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(7, 'AMINA TABASSUM', 2750, '3330359463950', 'FALAK SHAIR', 'IELTS Academic', '03000914811', 'XYZ@GMAIL.COM', 'Visit', 'H # 2, ST # 1, SADIQ TOWN', 'Female', '2001-09-12', 'Maham', '2023-10-10', 26500, 24500, NULL, '2023-10-10', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(8, 'SHAMILA ASLAM', 2746, '', 'MUHAMMAD ASLAM', 'IELTS General', '03442189196', '', 'Online', '', 'Female', '1993-03-05', 'Maham', '2023-10-09', 32000, 20000, NULL, '2023-10-09', NULL, 12000, NULL, '2023-10-10', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(9, 'ZARISH JOHN', 2747, '3310421883130', 'GRIFEN JOHN', 'IELTS Academic', '03039475789', '', 'Visit', 'H P-348, ST # 5, BILAL TOWN., WARIS PURA, FSD', 'Female', '1995-10-03', 'Maham', '2023-10-09', 26500, 13000, NULL, '2023-10-09', NULL, 13500, 'Cash', '2023-11-02', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(10, 'RUBAB GULZAR', 2748, '', 'MUHAMMAD GULZAR', 'IELTS Academic', '03022588249', 'rubabgulzar8@gmail.com', 'Visit', 'H # P-157, ST # 8, GOBIND PURA, FAISALABAD', 'Female', '1994-10-08', 'Maham', '2023-10-09', 26500, 1000, NULL, '2023-10-09', NULL, 15000, NULL, '2023-10-11', NULL, 8500, NULL, '2023-10-18', NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(11, 'SODA MUMTAZ', 2749, '', 'MUMTAZ AHMAD', 'IELTS Academic', '03000987336', '', 'Visit', 'ST # 2, TAJ COLONY SARGODHA ROAD, FSD', 'Female', '1998-09-23', 'Maham', '2023-10-09', 26500, 1000, NULL, '2023-10-09', NULL, 15000, NULL, '2023-10-11', NULL, 8500, NULL, '2023-10-18', NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(12, 'RABIA KHURRAM', 2745, '', 'MUHAMMAD RAFIQUE', 'IELTS Academic', '03007909160', 'Khurram7909160@gmail.com', 'Visit', 'P-179, GULSHAN-E-HAYAT, FAISALABAD', 'Female', '1982-03-10', 'Admin', '2023-10-07', 26500, 2000, NULL, '2023-10-05', NULL, 24500, NULL, '2023-10-09', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(13, 'ALISHBA MARC ANDRE STEGNER', 2744, '', 'RAZIK', 'German Language A1', '03266945110', 'evangelistalishba93@gmail.com', 'Visit', 'WARISPURA MUHALLA YASINABAD QABARISTAN WALI STREET, FSD PAKISTAN', 'Female', '2000-12-26', 'Admin', '2023-10-05', 50000, 2000, NULL, '2023-10-05', NULL, 43000, NULL, '2023-10-09', NULL, 0, NULL, NULL, NULL, 5000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(14, 'ARSLAN ALI', 2743, '', 'ZAHID ALI', 'IELTS General', '03347600631', '', 'Visit', 'P-218, NEW KHALIDABAD, NEAR SABINA CENIMA, FAISALABAD', 'Male', '1995-10-14', 'Admin', '2023-10-05', 32000, 2000, NULL, '2023-10-04', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(15, 'NOOR E SEHAR', 2742, '', 'SHAHID ANJUM', 'PTE', '03261934315', '', 'Visit', 'CHIRAG CHOWK H #1564, GM ABAD, FAISALABAD', 'Female', '2004-04-05', 'Admin', '2023-10-04', 26500, 2000, NULL, '2023-10-04', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 24500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(16, 'MUHAMMAD MUTEEB ALI', 2732, '', 'MUHAMMAD MUTEEB ALI', 'IELTS Academic', '03027157511', 'Muteeb688@gmail.com', 'Visit', 'CHAK JHUMRA R.B', 'Male', '2006-08-24', 'Admin', '2023-10-03', 26500, 20000, NULL, '2023-10-02', NULL, 4000, NULL, '2023-10-16', NULL, 500, 'Cash', '2023-10-27', NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(17, 'MUZAMMAL ZAHID', 2733, '3310568242415', 'ZAHID HUSSAIN', 'IELTS Academic', '03147084485', '', 'Visit', 'CHAK # 485, TEHSIL SAMUNDRI, DISTRICT FAISALABAD', 'Male', '1998-03-05', 'Admin', '2023-10-03', 26500, 2000, NULL, '2023-10-02', NULL, 24500, NULL, '2023-10-03', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(18, 'DANISH MEHMOOD', 2734, '3310084756703', 'ARSHAD MEHMOOD', 'IELTS General', '03416894975', 'danishmehmood0n1@gmail.com', 'Visit', 'H # 152(A), ISMAIL GREENS, MILLAT ROAD, FAISALABAD', 'Male', '2000-01-01', 'Admin', '2023-10-03', 32000, 26600, NULL, '2023-10-02', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 5400, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(19, 'ABDUL REHMAN', 2735, '', 'JAVED', 'German Language A1', '03207550578', '', 'Visit', 'Alvi Park Jaranwala', 'Male', '2023-10-16', 'Admin', '2023-10-03', 50000, 15000, NULL, '2023-10-03', NULL, 30000, 'Cash', '2023-10-24', NULL, 0, NULL, NULL, NULL, 5000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(20, 'ZARMEEN ALTAF', 2736, '3310346691502', 'ALTAF AHMED', 'IELTS Academic', '03081867520', 'zarmeenaltaf0@gmail.com', 'Visit', '267, R.B, 2001', 'Female', '2001-10-26', 'Admin', '2023-10-03', 26500, 2000, NULL, '2023-10-03', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(21, 'ALI HAIDER', 2737, '', 'SHOUKAT ALI', 'Korean Language', '03493420446', 'haiderali34502@gmail.com', 'Visit', 'QAIM COLONY NEAR MADINAH MASJID OKARA', 'Male', '2000-12-06', 'Admin', '2023-10-03', 25000, 2000, NULL, '2023-10-03', NULL, 23000, NULL, '2023-10-09', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(22, 'IRAM SHAHZADI', 2738, '3310068135466', 'ABDUL MAJEED', 'IELTS Academic', '03143468086', '', 'Visit', 'RASHEED NAGAR, FAISALABAD', 'Female', '1987-11-23', 'Admin', '2023-10-03', 26500, 1000, NULL, '2023-10-03', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(23, 'AHMED AYAN', 2739, '', 'YASIR RANDHAWA', 'German Language A1', '03445346691', '', 'Visit', '3-W-F, MADINA TOWN, FAISALABAD', 'Male', '2006-01-21', 'Admin', '2023-10-03', 50000, 40000, NULL, '2023-10-03', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 10000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(24, 'IRUM SHOUKAT', 2740, '3310241869310', 'SHOUKAT NASEEB', 'IELTS Academic', '03076942185', 'iramsahrish@gmail.com', 'Visit', 'DHQ HOSPITAL', 'Female', '1993-11-20', 'Admin', '2023-10-03', 26500, 1000, NULL, '2023-10-03', NULL, 13000, NULL, '2023-10-06', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(25, 'MUZAFFAR ASGHAR', 2741, '', 'CHOUDHRY M ASGHAR', 'IELTS General', '03005306396', 'ibrahimamz152@gmail.com', 'Visit', 'H # 152, REHMAN CITY', 'Male', '1984-08-27', 'Admin', '2023-10-03', 32000, 1500, NULL, '2023-10-03', NULL, 30500, NULL, '2023-10-04', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(26, 'Ubaid Shah', 0, '', 'people colony 01', 'IELTS Academic', '03216617906', '', 'Visit', '', 'Male', '0000-00-00', 'Admin', '2023-09-14', 26500, 15000, NULL, '2023-09-14', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(27, 'SHAKEEL AHMED', 2433, '', 'MUHAMMAD SHARIF', 'IELTS Academic', '03313754001', 'Shabirirbaloch240@gmail.com', 'Visit', 'QUETTA, DISTRICT MASTANG PRINGABAD', 'Male', '1999-01-15', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(28, 'M. ARSLAN JAVAID', 2434, '3310235469523', 'M.JAVAID RANA', 'PTE', '03069001287', 'Iozarslanhasni@gmail.com', 'Visit', 'ST # 8, ABDULLAH COLONY, SAMUNDRI ROAD,ABDULLAH PUL, FSD', 'Male', '1993-05-05', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(29, 'SHAMSA KANWAL', 2435, '3310045817474', 'ABDUL RAZZAQ', 'English Language', '03061637137', '', 'Visit', 'SARFRAZ COLONY , ST # 4', 'Female', '1998-11-02', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(30, 'FAIZAN HASHIM', 2436, '', 'MUHAMMAD NASIR MEHMOOD', 'English Language', '03207072747', 'faizanHashim219@gmail.com', 'Visit', 'H # 22 G BLOCK,TECLT TOWN , SATYANA ROAD, FSD', 'Male', '2003-03-03', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(31, 'SALMAN KHAN', 2437, '3310643574579', 'MUHAMMAD YAQOOB', 'IELTS Academic', '03457030433', '', 'Visit', 'CHAK NO 433, G.B TEHSIL JARANWALA, DIST FSD', 'Male', '1995-04-12', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(32, 'SAFINA RASHEED AHMAD', 2438, '', 'RASHEED', 'IELTS Academic', '03009665984', '', 'Visit', '', 'Male', '0000-00-00', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(33, 'ADIL ANWAR GILL', 2439, '3310435266199', 'ANWAR ALI GILL', 'PTE', '03061222206', '', 'Visit', 'H # 3899, ST # 11, MANSOORABAD, FSD', 'Male', '2002-04-15', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(34, 'HAMMAD GILL', 2440, '', 'IMTIAZ ALI GILL', 'PTE', '03264295107', '', 'Visit', 'H # 3899, ST # 11, MANSOORABAD, FSD', 'Male', '0000-00-00', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(35, 'ADNAN', 2441, '3310062177323', 'M. FAIZ', 'English Language', '03022040809', '', 'Visit', 'RAZAABAD , ST # 17, BAZAR NO 3, FSD', 'Male', '1998-11-30', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(36, 'MUHAMMAD USMAN', 2442, '', 'MUHAMMAD TARIQ MAHMOOD', 'IELTS Academic', '03008600924', 'malikawan353637@gmail.com', 'Visit', 'H # 4, ST # 1, REHMAN TOWN, FSD', 'Male', '2004-11-15', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(37, 'RIMSHA SHABBIR', 2443, '3310519440676', 'GHULAM SHABBIR', 'English Language', '03000119219', 'rimshashabbir293@gmail.com', 'Visit', 'FAISALABAD CITY SAMUNDRI', 'Female', '2000-06-01', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(38, 'UZMA SHABIR', 2444, '3310597772828', 'GHULAM SHABIR', 'English Language', '03090030219', 'uzmashabbir099@gmail.com', 'Visit', 'FAISALABAD CITY SAMMUNDRI', 'Female', '2001-12-29', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(39, 'LARAIB SHAFI', 2445, '', 'M.SHAFI', 'English Language', '03027049513', '', 'Visit', 'AL-NAJAF COLONY, ST # 3', 'Female', '2005-08-29', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(40, 'ZAIBUN NISA', 2447, '3310219853162', 'MUHAMMAD YOUSAF', 'IELTS Academic', '03001919539', 'zaibali1912@gmail.com', 'Visit', 'H #1006 BLOCK-F, GULISTAN COLONY # 1, FSD', 'Female', '1999-02-16', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(41, 'SOHAIL RUSTAM', 2449, '3310437416157', 'RUSTAM ALI', 'PTE', '03007609076', '', 'Visit', '76 RB RASOOLPURA, KHURRIANWALA', 'Male', '1995-12-15', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(42, 'MUHAMMAD EHTISHAM', 2450, '3310374681395', 'MUHAMMAD NAZEER', 'IELTS Academic', '03428078277', 'ranaahtishamrajput1@gmail.com', 'Visit', 'CHAK # 272 GB NAZEERA FSD', 'Male', '2002-01-15', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(43, 'MUHAMMAD REHAN', 2451, '', 'MUHAMMAD AJMAL KHAN', 'IELTS Academic', '03011224278', '', 'Visit', 'CHAK NO 274, J/B SARHALA KALAN FSD', 'Male', '2003-10-03', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(44, 'SAMA FATIMA', 2452, '', 'SHAKEEL AHMAD', 'IELTS Academic', '03333365953', '', 'Visit', 'BALDIA COLONY, H # 528, HAROONABAD', 'Female', '2005-05-12', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(45, 'TEHREEM NASIR', 2453, '3310029033240', 'NASIR ALI KHAN', 'IELTS Academic', '03008604877', 'appleoud@gmail.com', 'Visit', '110-D PEOPLES COLONY NO 1, FSD', 'Female', '1984-09-10', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(46, 'QANTA MARIAM', 2454, '3310067298248', 'JAMAL DIN', 'IELTS Academic', '03007663291', 'qanta.mariam@gmail.com', 'Visit', 'ABDULLAH BAJWA MAPLE BLOCK, P-18 FOUR SEASON, SAMUNDRI ROAD,FSD', 'Female', '1986-02-26', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(47, 'MADIHA JAMIL', 2455, '3310090472046', 'MUHAMMAD JAMIL AHMED', 'IELTS Academic', '03018666330', 'Madihajamil139@gmail.com', 'Visit', 'ST # 4, H # 340, NEAR FAWARA CHOWK, SARFRAZ COLONY, FSD', 'Female', '1986-09-20', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(48, 'MEHVISH', 2456, '', 'DILSHAD AHMAD', 'IELTS Academic', '03000284058', '', 'Online', 'CHAK NO 527 GB, TEHSIL SAMUNDRI, DIST FSD', 'Female', '1993-04-12', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(49, 'MUHAMMAD HAMMAD ZAHIR', 2457, '', 'MUHAMMAD ZAHIR', 'IELTS Academic', '03053808955', 'waincehammad@gmail.com', 'Visit', '225-MULKHANWALA, SATYANA ROAD, FSD', 'Male', '2005-08-16', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(50, 'ARSHY NIGAH', 2768, '', 'ABDUL KALAM', 'German Language A1', '03124988607', '', 'Visit', 'GALAB CITY BLOCK-A, H # 225, NEW EDEN EXECUTIVE', 'Female', '1996-07-17', 'Admin', '2023-09-25', 50000, 50000, 'Bank-Al-Islami', '2023-10-23', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(51, 'AZHAR ALI', 2460, '3320262093723', 'NAIK MUHAMMAD', 'English Language', '03470325060', 'Sialazharali830@gmail.com', 'Visit', 'CHAK NO 250, TEHSIL, DISTRICT JHANG', 'Male', '2005-05-12', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(52, 'WAHEED AHMAD', 0, '', '', 'PTE', '03349727273', '', 'Visit', 'xyz', 'Male', '2023-10-16', 'admin', '2023-09-06', 26500, 2000, NULL, '2023-09-06', NULL, 22500, NULL, '2023-09-06', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(53, 'Faizan Shahid', 0, '', '', 'PTE', '03007588876', '', 'Visit', 'People Colony Faisalabad', 'Male', '2023-10-16', 'admin', '2023-09-18', 26500, 18000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(54, 'Muhammad Tanzeel', 0, '', '', 'Korean Language', '03217837172', '', 'Visit', 'Aqab Qamoka Textile Mills, House # p/76, St # 5, Muhala Aslam Ganj, Faisalabad.', 'Male', '2023-10-16', 'admin', '2023-09-19', 25000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(55, 'ASMA IRFAN', 2757, '', 'MUHAMMAD IQBAL', 'IELTS General', '03337651034', '', 'Visit', 'SITARA VALLEY, FSD', 'Female', '1983-01-19', 'Maham', '2023-10-16', 32000, 1000, NULL, '2023-10-16', NULL, 14000, NULL, '2023-10-23', NULL, 13000, 'Cash', '2023-11-15', NULL, 4000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(56, 'SANAM SHABBIR', 2758, '3310052306318', 'MUHAMMAD SHABBIR', 'PTE', '03218662248', '', 'Visit', 'H # P-135, ST # 3, AMINABAD NO 1', 'Female', '2002-11-05', 'Maham', '2023-10-16', 26500, 2000, NULL, '2023-10-16', NULL, 22000, NULL, '2023-10-18', NULL, 0, NULL, NULL, NULL, 2500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(57, 'SANA ZUBAIR', 2759, '3330220697426', 'BABAR SALEEM', 'IELTS Academic', '03088747255', 'Sanisana446@gmail.com', 'Visit', 'CHAK KAMAY WALA KAMALIA', 'Female', '1996-08-16', 'Maham', '2023-10-16', 26500, 2000, NULL, '2023-10-16', NULL, 22000, NULL, '2023-10-17', NULL, 0, NULL, NULL, NULL, 2500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(58, 'RIAZ AHMAD', 2461, '3310678692259', '', 'English Language', '03346193496', '', 'Visit', 'CHAK NO 496 GB, TEHSIL TANDIANWALA DIST FSD', 'Male', '2002-02-12', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(59, 'SAIRA', 2462, '', 'AZIZ', 'German Language A1', '03120411732', 'SairaAzizmcs@Gmail.com', 'Visit', 'GULSHAN-E-MADINA PHASE 2, H # 177B', 'Female', '1993-03-04', 'Admin', '2023-09-25', 50000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(60, 'MUHAMMAD REHMAN', 2463, '3330163829397', 'MUHAMMAD IRFAN', 'IELTS Academic', '03056819568', 'rg536375@gmail.com', 'Visit', 'CHAK 278 J.B, TEHSIL GOJRA DIST T.T SINGH', 'Male', '2000-02-26', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(61, 'ESHA SHAFEEQ', 2464, '', 'MUHAMMAD SHAFEEQ', 'IELTS Academic', '03177507202', '', 'Visit', 'RAZABAD , ST # 17', 'Female', '2023-10-18', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(62, 'MUHAMMAD SHAFIQ', 2465, '', 'GHULAM SARWAR', 'IELTS Academic', '03088442206', '', 'Visit', 'ABDULLAHPUL FSD', 'Male', '1998-04-21', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(63, 'AMNA EMAN', 2466, '', 'NASIR NADEEM', 'IELTS Academic', '03093174689', 'emanmaryam285@gmail.com', 'Visit', '267 R.B JALLANDHER DIST FSD', 'Female', '2005-08-23', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(64, 'UMAR SHAKEEL', 2467, '', 'SHAKEEL AHMAD', 'English Language', '03303510003', 'umar172000@gmail.com', 'Visit', 'H # 528, BALDIA COLONY, HAROONABAD', 'Male', '2000-02-17', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(65, 'MARIA SHAFIQUE', 2468, '', 'SHAFIQUE ANWAE', 'PTE', '03268543090', 'shafiquemaria92@gmail.com', 'Visit', '', 'Male', '2001-03-24', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(66, 'DR ZAKRIA', 2469, '', 'DR KHURRAM', 'English Language', '03022229817', 'Zakriakhurram@hotmail.com', 'Visit', 'P-121, SHADMAN TOWN LASSANI PULLI SARGODHA ROAD, FSD', 'Male', '1997-07-01', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(67, 'MUHAMMAD OWAIS', 2470, '', 'TARIQ PASHA AWAN', 'IELTS Academic', '03166570151', '', 'Visit', 'P-25, ST # 1, UMAIR TOWN , SARGODHA ROAD , FSD', 'Male', '2001-03-31', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(68, 'SIDRA SHABBIR', 2471, '3310226798266', 'MUHAMMAD SHABBIR', 'IELTS Academic', '03026016805', 'Sidrashabbir567@gmail.com', 'Visit', 'G BLOCK. GULISTAN COLONY, FSD', 'Female', '1997-04-03', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(69, 'BILAL ABID', 2472, '3310097875505', 'ABID HUSSAIN', 'IELTS Academic', '03081848220', 'Bilal.jutt3907@gmail.com', 'Visit', 'H # 56, BLOCK-Z, ST-E MADINA TOWN', 'Male', '2004-02-26', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(70, 'M TALHA KHURRAM', 2473, '3310072248901', 'KHURRAM SHAHZAD', 'IELTS Academic', '03466764899', '', 'Visit', 'CHAK # 251, R.B BANDALA', 'Male', '2003-03-21', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(71, 'M SAAD MUBEEN', 2474, '3310004031849', 'BABAR HUSSAIN', 'IELTS Academic', '03236642043', 'Saadmubeen2004@gmail.com', 'Visit', 'CHAK # 199, R.B GATWAL H 222A, FSD', 'Male', '2004-09-18', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(72, 'SAMAHAR', 2475, '3310410214070', 'ABDUL JABBAR', 'IELTS Academic', '03091879663', 'Samaharrana@gmail.com', 'Visit', '266 R/B, KHURRIANWALA', 'Female', '1997-12-08', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(73, 'RANA ADNAN ARSHAD', 2476, '', 'ARSHAD ALI', 'IELTS Academic', '03056015043', 'adnanrajput2428@gmail.com', 'Visit', 'GARDEN MUHALLA,ST # 27, ABDULLAH NASHATABAD , FSD', 'Male', '1994-03-08', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(74, 'MUHAMMAD TALHA HASSAN', 2477, '3310202170561', 'KASHIF SAEED', 'IELTS Academic', '03167442543', 'downerane6@gmail.com', 'Visit', 'P-1396, BASE LINE, KALEEM SHAHEED COLONY NO 2, G.M ABAD FSD', 'Male', '1999-10-11', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(75, 'MUHAMMAD ABDULLAH', 2478, '', 'ARFAN ULLAH', 'IELTS Academic', '03413060789', '0045827@gmail.com', 'Visit', 'GULISTAN COLONY N0 1', 'Male', '2005-07-05', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(76, 'MUHAMMAD REHAN ABID', 2479, '', 'ABDUL AHED', 'IELTS Academic', '03168554257', '', 'Visit', 'ALI TOWN, ST # 3, SARGODHA ROAD, FSD', 'Male', '2005-09-27', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(77, 'M.AYAN SHEHZAD', 2480, '3310080921063', 'SHEHZAD YOUNUS', 'IELTS Academic', '03009658384', '', 'Visit', 'AL-MASOOM TOWN , ST NO 7', 'Male', '2005-10-16', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(78, 'WARDA RAFIQUE', 2481, '3310429127258', 'MUHAMMAD RAFIQ', 'IELTS Academic', '03004491381', 'wardarafiq565@gmail.com', 'Visit', 'SAMUNDRI FSD', 'Male', '1997-09-20', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(79, 'MALEEHA', 2482, '', 'REHMAN', 'IELTS Academic', '03346644575', '', 'Visit', 'H # 206, ST # 4, NAIMAT COLONY # 1', 'Female', '1981-06-06', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(80, 'SAGHIR HUSSAIN', 2483, '3310007705095', 'NAZIR HUSSAIN', 'IELTS Academic', '03006644575', 'Saghirleo@gmail.com', 'Visit', 'H # 206, ST # 4, NAIMAT COLONY NO 1, FSD', 'Male', '1976-08-26', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(81, 'SHEHROZ IQBAL', 2484, '', 'MUHAMMAD IQBAL', 'English Language', '03158820619', '', 'Visit', 'EDEN GARDEN, D-BLOCK # 163, 208, CHAK ROAD, KASHMEER PULL, FSD', 'Male', '2000-12-22', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(82, 'SHUBAN AFZAL', 2485, '', 'MUHAMMAD AFZAL', 'IELTS Academic', '03016188188', '', 'Visit', 'CHAK NO 188,R.B, NALAY WALA TEHSIL, CHAK JHUMRA FSD', 'Male', '2004-12-21', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(83, 'JAWERIA TARIQ', 2486, '', '', 'English Language', '03143580731', '', 'Visit', '', 'Female', '2023-10-18', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(84, 'TANIA NAWAZ', 2487, '', '', 'English Language', '03144904992', '', 'Visit', '', 'Female', '2023-10-18', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(85, 'ADEELA ASLAM', 2488, '', '', 'English Language', '03107579838', '', 'Visit', '', 'Female', '2023-10-18', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(86, 'ALEENA', 2489, '', '', 'English Language', '03177108745', '', 'Visit', '', 'Female', '2023-10-18', 'Admin', '2023-09-25', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(87, 'JAWAD NASRULLAH', 2490, '', 'NASRULLAH KHAN', 'IELTS Academic', '03021441112', 'Jawadibhatti420@gmail.com', 'Visit', 'PINDI BHATTIAN DISTRICT HAFIZABAD', 'Male', '2002-12-15', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(88, 'HAMZA MUBEEN', 2491, '', 'ABDUL HAI', 'PTE', '03433202724', 'RHAMZA7953@GMAIL.COM', 'Visit', 'SAMANABAD MUHAMMDI CHOWK', 'Male', '1999-01-13', 'Admin', '2023-09-25', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(89, 'SAMRA SHOUKET', 0, '3310340825242', 'SHOUKET ISLAM', 'PTE', '03071668540', 'Samrashouket990@gmail.com', 'Visit', 'P-39, QAMAR GARDEN, FSD', 'Female', '1991-04-01', 'Admin', '2023-09-22', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(90, 'MUHAMMAD IQRAR LATIF', 0, '', 'MUHAMMAD LATIF', 'IELTS Academic', '03165731381', 'iqrarnazi381@gmail.com', 'Visit', 'MILLAT TOWN , MILLAT ROAD, FSD', 'Male', '1992-03-13', 'Admin', '2023-09-22', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(91, 'ASMA ZAFAR', 0, '', 'ZAFAR ALI', 'IELTS Academic', '03425507093', 'memberuty11@gmail.com', 'Visit', 'WARD NO 5, MUHALA, ABADHI ARIYAN SHAHKOT, DIST NANKANA SAHIB', 'Female', '1996-09-01', 'Admin', '2023-09-22', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(92, 'ZAINAB KHAN', 0, '3310292633408', 'ASHFAQ AHMAD KHAN', 'English Language', '03265731284', 'zainabashfaq8@gmail.com', 'Visit', 'ST# 25, BAZAR # 2, RAZABAD, FSD', 'Female', '2004-11-16', 'Admin', '2023-09-22', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(93, 'HASNAT ALI', 0, '3310273378615', 'ASHFAQ AHMAD KHAN', 'English Language', '03214901011', '', 'Visit', 'ST #25, BAZAR # 2, RAZABAD, FSD', 'Male', '2007-04-02', 'Admin', '2023-09-22', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(94, 'HASEEB UR REHMAN', 0, '3310024400275', 'WAQAR SALEEM', 'IELTS Academic', '03219666296', '', 'Visit', '1392-B, PEOPLES COLONY # 1, FSD', 'Male', '1997-08-21', 'Admin', '2023-09-22', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(95, 'MUHAMMAD HUSSAIN JAWAD', 0, '', 'MUHAMMAD YOUSAF', 'English Language', '03021551900', 'Homerasti@gmail.com', 'Visit', 'WALI PUR BURA CHAK# 175 R.B, TEHSIL SHAHKOT, DIST NANKANA SAHIB', 'Male', '1994-06-22', 'Admin', '2023-09-22', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(96, 'RABIA TABASUM', 0, '', 'QURBAN ALI', 'IELTS Academic', '03306066666', 'RabiaZain0@gmail.com', 'Visit', 'H # 232, PINE HOMES KHAYABAN GARDEN SARGODHA ROAD , FSD', 'Female', '1985-03-01', 'Admin', '2023-09-22', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(97, 'MUBARRA ADIL', 0, '', 'GHULAM SARWAR', 'IELTS Academic', '03436240705', 'Mubarraadil345@gmail.com', 'Visit', 'P-65, ST # 2, MUHAMMADABAD SATYANA ROAD, FSD', 'Female', '2023-10-18', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(98, 'KAMIL AHMED SEMAB', 0, '', 'MUHAMMAD AJMAL BHATTI', 'IELTS Academic', '03343322045', 'muhammadajmalbhatti1971@gmail.com', 'Visit', 'GTL.E.27, STEAM POWER STATION , NISHATABAD, FSD', 'Male', '2005-09-16', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(99, 'NADIR UMER', 0, '', 'UMER HAYAT', 'IELTS Academic', '03448365583', '', 'Visit', 'CHAK 188, TEHSIL CHAK JHUMRA, DIST FSD', 'Male', '2005-07-05', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(100, 'ALI AMMAR', 0, '3310117059087', 'M.SULTAN', 'IELTS Academic', '03078617355', '', 'Visit', 'CHAK JHUMRA', 'Male', '2003-11-03', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(101, 'M.ABDUL-REHMAN', 0, '3310165842025', 'ALLAH RAKHA', 'IELTS Academic', '03046011159', '', 'Visit', 'CHAK JHUMRA', 'Male', '2005-07-14', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(102, 'RAZA', 0, '', 'ABITULLAH', 'IELTS Academic', '03420675113', '', 'Visit', 'CHAK JHUMRA , FSD', 'Male', '2005-03-10', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(103, 'BASIT JAMIL', 0, '3310007580857', 'MUHAMMAD JAMIL AHMAD', 'IELTS Academic', '03116612415', '', 'Visit', 'P-576, ST # 3, ALI TOWN, FSD', 'Male', '1995-02-06', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(104, 'SHAHIDA PARVEEN', 0, '3310652426888', 'ZIA-UR-REHMAN', 'English Language', '03457961225', '', 'Visit', '225/RB MALKHANWALA FSD', 'Female', '2005-07-26', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(105, 'M. ABDULLAH', 0, '3310168279945', 'AKBAR ALI', 'IELTS Academic', '03000328186', '', 'Visit', 'CHAK NO 186 CHAK JHUMRA, CIVIC VALLEY', 'Male', '2003-06-25', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(106, 'SANA', 2769, '3310513913884', 'YOUSAF', 'IELTS Academic', '03020041714', '', 'Visit', 'MUHALA ISLAMABAD SAMUNDRI', 'Female', '1992-04-05', 'Admin', '2023-09-21', 26500, 14000, 'Cash', '2023-10-23', NULL, 10000, 'Cash', '2023-10-24', NULL, 2500, 'Cash', '2023-10-25', NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(107, 'MAHPARA', 0, '', 'JAVED', 'English Language', '03007276507', 'malikmalika622@gmail.com', 'Visit', 'RASHAN WALI JHALL BY PASS CHOWK SAMUNDRI ROAD, FSD', 'Female', '2009-03-07', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(108, 'MUHAMMAD FAROOQ', 0, '3310033470491', 'MUHAMMAD SHAFI', 'IELTS Academic', '03138662375', '', 'Visit', 'H # P-139, CHAKIAN WALA CHOWK, GHULAM MUHAMMAD ABAD', 'Male', '1980-10-01', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(109, 'WAQAS HAIDER', 0, '', 'MUHAMMAD SIDDIQUE', 'IELTS Academic', '03093245370', 'waqashaider1923@gmail.com', 'Visit', 'P/O MAI SOFORAN CHAK NO 773 G.B TEHSIL, PEER MAHAL, DISTRICT, TOBA TAK SINGH', 'Male', '2000-01-03', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(110, 'M. SHAMRAIZ', 0, '', 'ABDUL JABBAR', 'IELTS Academic', '03014105025', '', 'Visit', 'VILLAGE THABAL P/O SAME TEHSIL/ DISTRICT SHEIKHUPURA', 'Male', '2023-10-18', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(111, 'SHAROON INDERYAS', 0, '3310013763239', 'INDERYAS MASIH', 'English Language', '03167435052', '', 'Visit', 'ST NO 7, MOH YASIN ABAD, FSD', 'Male', '2000-09-15', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(112, 'ROMAIL ILYAS', 0, '3310237866543', 'ILYAS MASIH', 'English Language', '03127529374', 'RomailiLyas28@Gmail.com', 'Visit', 'ST # 4, MOH YASIN ABAD, FSD', 'Male', '1995-08-21', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(113, 'ROMAIL ILYAS', 0, '3310237866543', 'ILYAS MASIH', 'English Language', '03127529374', 'RomailiLyas28@Gmail.com', 'Visit', 'ST # 4, MOH YASIN ABAD, FSD', 'Male', '1995-08-21', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(114, 'HINA SHAHID', 0, '', 'SHAHID ASHRAF', 'IELTS Academic', '03261722393', 'MudassirHina04@gmail.com', 'Visit', 'CH # 393 JB , TOBA TAK SINGH', 'Female', '1998-07-13', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(115, 'MUHAMMAD SOBAN SADIQ', 0, '', 'CH M SADAF SADIQ', 'IELTS Academic', '03226154541', 'Sobanking267@gmail.com', 'Visit', 'CHAK NO 267, RB, JALLANDHER, FSD', 'Male', '2003-06-05', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(116, 'MARIAM NAEEM', 0, '', 'NAEEM ASHSRAF', 'IELTS Academic', '03071333532', 'mariam.naeem3@icloud.com', 'Visit', 'SANAT SING SIMBAL CHOWK 207, RB, P-1249, FSD', 'Female', '2023-10-18', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(117, 'MUHAMMAD HAMZA IBRAHIM', 0, '3310019598623', 'GHULAM RASOOL ASIM', 'IELTS Academic', '03084481998', 'hamzaibrahim2015ag6960@gmail.com', 'Visit', 'CHAK 195, R.B,JARANWALA , TEHSIL SADAR, FSD.', 'Male', '1997-04-26', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(118, 'RANA MUHAMMAD ATEEQ AHMAD', 0, '3310084829835', 'RANA MUHAMMAD SARFRAZ YAQOOB', 'IELTS Academic', '03067006655', 'ateeqahmad7006@gamil.com', 'Visit', 'H # 3/7, ST # 1, FIRDOUS COLONY , JHANG ROAD FSD', 'Male', '1996-12-23', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(119, 'MUNEEB AHMAD', 0, '', 'M. AKRAM', 'PTE', '03260911270', '', 'Visit', '70 JB, MANSORA', 'Male', '2023-10-18', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(120, 'MADIHA ALI', 0, '', 'RAFI', 'IELTS Academic', '03049819392', '', 'Visit', 'MUHAMMAD PURA, ST # 12/3, H # 201, NARWALA ROAD', 'Female', '2023-10-18', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(121, 'M. SULEMAN TARIQ', 0, '', 'TARIQ MEHMOOD', 'English Language', '03061333760', '', 'Visit', 'BANK CHOWK , EID GAH ROAD, SAMANABAD, FSD', 'Male', '2006-01-06', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(122, 'MAHWISH M HUSAIN', 0, '3310319170088', 'MUHAMMAD HUSAIN', 'English Language', '03059669977', 'Mismahwish5@gmail.com', 'Visit', '77JB, MULLAN PUR P/O SAME FSD', 'Female', '1993-01-01', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(123, 'KHURRAM ALI', 0, '', 'RIAZ AHMED', 'English Language', '03010652250', 'Ranakhurram609@gmail.com', 'Visit', 'CHAK NO 253, R.B, JAHANGIR KALAN FSD', 'Male', '2002-11-25', 'Admin', '2023-09-21', 20500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(124, 'KINZA SALEEM', 0, '3310211659474', 'SALEEM AKHTAR', 'IELTS Academic', '03245781315', 'Naeemkinza81@gmail.com', 'Visit', 'H # 232, ST # 4, GREEN VIEW COLONY, FSD', 'Female', '1991-10-07', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(125, 'AMMARA KHALOON', 0, '3310236016256', 'RIASAT ALI', 'IELTS Academic', '03143910255', '', 'Visit', 'CHAK # 202 / R.B, BHAIWALA', 'Female', '1992-09-25', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(126, 'WAJEEHA FATIMA', 0, '', 'SHAHID MAHMOOD', 'IELTS Academic', '03030793873', '', 'Visit', 'KHURSHEED COLONY WARD NO 3, YAZMAN DISTRICT BAHAWALPUR', 'Female', '1998-02-20', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(127, 'M SUBHAN ALI', 0, '', 'LIAQAT', 'IELTS Academic', '03260877263', 'subhanliaqat96@gmail.com', 'Visit', 'CHAK NO 263 R.B DIJKOT', 'Male', '2003-10-25', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(128, 'NATASHA ANWAR', 0, '', 'MUHAMMAD ANWAR', 'IELTS Academic', '03330634188', 'natashaanwar445@gmail.com', 'Visit', 'AMIN PARK BAGHDADI CHOWK P-415/A FSD', 'Female', '1998-06-23', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(129, 'SHIZA SHAHID', 0, '', 'SHAHID HUSSAIN', 'IELTS Academic', '03269515926', '', 'Visit', '266 RB KHURRIANWALA', 'Female', '2000-04-20', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(130, 'MUHAMMAD AHMAD KHAN', 0, '', 'RANA MANSOOR AFZAL', 'IELTS Academic', '03260220005', 'ehmdkhan08@gmail.com', 'Visit', 'MUSLIM TOWN NO 1, OFFICERS BLOCK CRESCENT STREET HOUSE NO P-3', 'Male', '2006-11-16', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(131, 'KHADIJA NADEEM', 0, '', 'NADEEM AHMAD KHAN', 'IELTS Academic', '03074812954', 'khadijakhan12954@gmail.com', 'Visit', 'CHK 219 R-B MALVIAN WALA', 'Female', '2005-11-22', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(132, 'NAZISH', 0, '', 'CH MUHAMMAD ASHRAF', 'IELTS Academic', '03102396533', '', 'Visit', 'H # P-184, ST # 2, MUHALA MILAT COLONY NO 2 , FSD', 'Female', '1993-12-25', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(133, 'ABDUL AHAD', 0, '', 'MR ASLAM', 'IELTS Academic', '03333112276', 'abdulahadmy6@gmail.com', 'Visit', 'H # 50-G, EDEN (EXECUTIVE BLOCK) FSD', 'Male', '2005-10-03', 'Admin', '2023-09-21', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(134, 'Salman', 0, '', '', 'IELTS Academic', '03216080299', '', 'Visit', 'Main Samundri Road, Chenab Garden , Faisalabad, H # 97-A', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(135, 'Beenish Ahmad', 0, '', '', 'IELTS Academic', '03160290159', '', 'Visit', 'Basti Dewan Wali, St # 2', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(136, 'Abdullah Munawar', 0, '', '', 'PTE', '03183467346', '', 'Visit', 'H # p-2296/2 St # 2, Dastgeer Pura, Waris Pura Road, FSD.', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(137, 'MAIRA', 2760, '3310202441960', 'M.HASHIM', 'PTE', '03218655400', '', 'Visit', 'ROYAL VILLAS, JARANWALA ROAD, LOWER CANAL ROAD, FAISALABAD', 'Female', '2002-01-08', 'Maham', '2023-10-18', 26500, 2000, NULL, '2023-10-16', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR');
INSERT INTO `bisa_admission` (`a_id`, `a_name`, `a_rollno`, `a_cnic`, `a_fname`, `a_course`, `a_phone`, `a_email`, `a_method`, `a_area`, `a_sex`, `a_dob`, `a_user`, `a_date`, `a_tfee`, `a_fee1`, `a_fee1_meth`, `a_fee1_date`, `a_remind_date1`, `a_fee2`, `a_fee2_meth`, `a_fee2_date`, `a_remind_date2`, `a_fee3`, `a_fee3_meth`, `a_fee3_date`, `a_remind_date3`, `a_dis`, `a_dis_com`, `a_refund`, `a_re_date`, `a_re_meth`, `a_ex_fee`, `a_ex_date`, `a_ex_meth`, `a_ex_com`, `a_csd`, `a_ced`, `a_status`, `a_remarks`, `a_on`, `a_osn`) VALUES
(138, 'Khuram Shahzad', 0, '', '', 'IELTS Academic', '03006660369', '', 'Visit', 'H # p-103, Block A , Sirsyed Town FSD', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(139, 'M.IMRAN TAHIR', 2761, '3310075180859', 'TAHIR JAVED', 'English Language', '03006662684', 'ImranTahir@sacspinning', 'Visit', 'GHULAM MUHAMMAD ABAD, FAISALABAD', 'Male', '1980-08-21', 'Maham', '2023-10-18', 22500, 1000, NULL, '2023-10-16', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(140, 'DR.IFFAT AKRAM', 2763, '4510165908394', 'MUHAMMAD AKRAM', 'IELTS Academic', '03336549713', 'iffatwaqas@yahoo.com', 'Visit', 'PEOPLES COLONY NO 1, 6UU- A, FSD', 'Female', '1986-09-29', 'Maham', '2023-10-18', 26500, 20000, NULL, '2023-10-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 6500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(141, 'Muhammad Hassan Maqsood', 0, '', '', 'PTE', '03227475997', '', 'Visit', 'Raja Ghulam Rasool Nagar, St # 2, H # p-1016', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(142, 'Rimsha Ahsan', 0, '', '', 'IELTS Academic', '03067566055', '', 'Visit', 'H # p-407, St # 3, Muhala Rehmatabad , FSD', 'Female', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(143, 'Rabia Amjad', 0, '', '', 'IELTS Academic', '03059073079', '', 'Visit', 'Near main gate of Sitara Diamond City, Malkhanwala 225 RB FSD', 'Female', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(144, 'Sahrish Arshad', 0, '', '', 'IELTS Academic', '03344402497', '', 'Visit', 'Chak # 97, RB district FSD Tehsil Jaranwala', 'Female', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(145, 'Rakhshanda Iqrar', 0, '', '', 'IELTS Academic', '03043592204', '', 'Visit', 'Peer Juggi, Muhala Darbar, district Layyah.', 'Female', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(146, 'M. Bilal', 0, '', '', 'English Language', '03061867646', '', 'Visit', 'New Khalidabad, St # 2, Faisalabad.', 'Male', '2023-10-18', 'Admin', '2023-09-19', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(147, 'M Bilal Sohail', 0, '', '', 'IELTS Academic', '03027631197', '', 'Visit', '97 RB, Jaranwala, Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(148, 'Imran Nazir', 0, '', '', 'IELTS Academic', '03014535532', '', 'Visit', 'H # p-324, St # 8, Amin Park near Hilal Road, Faisalabad.', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(149, 'M. Umar Rafiq', 0, '', '', 'IELTS Academic', '03126019148', '', 'Visit', '', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(150, 'Sumbal Sawan', 0, '', '', 'English Language', '03117403428', '', 'Visit', 'Waris Pura Dawood Nagar St # 3 B, Faisalabad', 'Female', '2023-10-18', 'Admin', '2023-09-19', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(151, 'Muhammad Rayyan Yousaf', 0, '', '', 'English Language', '03358666121', '', 'Visit', 'Tazab Mill Road, Umar Garden , Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-19', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(152, 'Muhammad', 0, '', '', 'IELTS Academic', '03087123596', '', 'Visit', 'St # 2, Muhala Islamia Park City, Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(153, 'Amina Arshad', 0, '', '', 'IELTS Academic', '03440749792', '', 'Visit', '92 R.B', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(154, 'Muhammad Raheel', 0, '', '', 'IELTS Academic', '03068644006', '', 'Visit', 'Millat road, Hajwery Town, St # 4, H # p-14', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(155, 'M.Tahir', 0, '', '', 'PTE', '03000983314', '', 'Visit', 'Jaranwala Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(156, 'Ammarah Munir Ahmad', 0, '', '', 'English Language', '03328373110', '', 'Visit', 'Main Kahkashan road', 'Female', '2023-10-18', 'Admin', '2023-09-19', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(157, 'Bushra Murtaza', 0, '', '', 'IELTS Academic', '03262554250', '', 'Visit', 'Muhammadabad , Main Bazar, St # 7, House # 432, Faisalabad.', 'Female', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(158, 'Usman Haider', 0, '', '', 'IELTS Academic', '03098652509', '', 'Visit', 'Chak # 139 GB Samundri District Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(159, 'M.Mukarram Mohsin', 0, '', '', 'PTE', '03216697701', '', 'Visit', '168 B Extention Tech Town, Satyana Road', 'Male', '2023-10-18', 'Admin', '2023-09-19', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(160, 'MUHAMMAD ALI', 0, '', 'ABDUL RAUF', 'IELTS Academic', '03153011722', '', 'Visit', '214 RB, FAISALABAD', 'Male', '2023-10-18', 'Admin', '2023-08-05', 26500, 5000, NULL, '2023-08-06', NULL, 19500, NULL, '2023-08-07', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(161, 'Rimsha', 0, '', '', 'English Language', '03041746647', '', 'Visit', 'Muhallah Jeelani Pura, St # 2, House # 440', 'Female', '2023-10-18', 'Admin', '2023-09-19', 22500, 1000, NULL, '2023-09-19', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(162, 'Hina Parveen', 0, '', '', 'English Language', '03167942744', '', 'Visit', 'Canal Road Faisalabad', 'Female', '2023-10-18', 'Admin', '2023-09-12', 22500, 2000, NULL, '2023-09-12', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(163, 'Azka', 0, '', '', 'English Language', '03037247395', '', 'Visit', 'Canal Road Faisalabad', 'Female', '2023-10-18', 'Admin', '2023-09-18', 22500, 2000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(164, 'Muhammad Mukarram', 0, '', '', 'IELTS Academic', '03167485535', '', 'Visit', 'Mughal Pura Chak Jhumra Fsd', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 5000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(165, 'Aqsa Arooj', 0, '', '', 'IELTS Academic', '03484504956', '', 'Visit', 'AL Masoom Town Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 24500, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(166, 'M Hamza Mazhar', 0, '', '', 'PTE', '03056532394', '', 'Visit', 'Hunza Sugar Mill', 'Male', '2023-10-18', 'Admin', '2023-09-13', 26500, 5000, NULL, '2023-09-13', NULL, 19500, NULL, '2023-09-14', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(167, 'Sundas Qadeer', 0, '', '', 'PTE', '03024800875', '', 'Visit', 'Sargodha', 'Female', '2023-10-18', 'Admin', '2023-09-12', 26500, 2000, NULL, '2023-09-12', NULL, 22500, NULL, '2023-09-13', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(168, 'Raza Ahmad Shah', 0, '', '', 'English Language', '03487156374', '', 'Visit', 'Tandliyanwala Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-13', 22500, 2000, NULL, '2023-09-13', NULL, 18500, NULL, '2023-09-14', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(169, 'Beenish Latif', 0, '', '', 'IELTS General', '03217795217', '', 'Visit', 'Zeeshan Park Faisalabad', 'Female', '2023-10-18', 'Admin', '2023-09-18', 32000, 24000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(170, 'Muhammad Zubair', 0, '', '', 'IELTS Academic', '03071749649', '', 'Visit', 'Jaranwala', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 1000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(171, 'Ali shahid', 0, '', '', 'IELTS General', '03006525752', '', 'Visit', 'Gulfishan Colony Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-18', 32000, 32000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(172, 'Syed M. Noman', 0, '', '', 'IELTS Academic', '03446556477', '', 'Visit', 'Satyana Road Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 22000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(173, 'Kiran Rafique', 0, '', '', 'IELTS Academic', '03016860988', '', 'Visit', 'Mumtazabad Faisalabad', 'Female', '2023-10-18', 'Admin', '2023-09-18', 26500, 2000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(174, 'Aiman Ahaz', 0, '', '', 'IELTS Academic', '03027063714', '', 'Visit', 'Ghanj Faisalabad', 'Female', '2023-10-18', 'Admin', '2023-09-12', 26500, 2000, NULL, '2023-09-12', NULL, 22500, NULL, '2023-09-13', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(175, 'Asad Ali', 0, '', '', 'English Language', '03155614886', '', 'Online', '', 'Male', '2023-10-18', 'Admin', '2023-09-18', 22500, 10000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(176, 'Kinza', 0, '', '', 'English Language', '03099622792', '', 'Visit', 'Nisar Colony Faisalabad', 'Female', '2023-10-18', 'Admin', '2023-09-18', 22500, 20500, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(177, 'Abrar Hussain', 0, '', '', 'IELTS Academic', '03247291164', '', 'Visit', 'Alvi Park Jaranwala', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 24000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(178, 'Faizan Tariq', 0, '', '', 'IELTS Academic', '03053263236', '', 'Visit', 'Samanabad Faisalabad', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 2000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(179, 'SHARJEEL SHAHZAD', 0, '', '', 'IELTS Academic', '03187400752', '', 'Visit', '117 JB, DHANOLA', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 19000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(180, 'M Ibrahim', 0, '', '', 'IELTS Academic', '03216602440', '', 'Visit', 'HILAL ROAD', 'Male', '2023-10-18', 'Admin', '2023-09-18', 26500, 2000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(181, 'HASSAN KHALID', 0, '', '', 'IELTS General', '03137000449', '', 'Visit', 'MILLAT ROAD', 'Male', '2023-10-18', 'Admin', '2023-09-18', 32000, 32000, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(182, 'ZAHID HUSSAIN', 0, '', '', 'IELTS Academic', '03417499178', '', 'Visit', 'TOBA TAKE SINGH', 'Male', '2023-10-18', 'Admin', '2023-09-05', 26500, 7000, NULL, '2023-09-05', NULL, 17500, NULL, '2023-09-06', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(183, 'ARSLA MUBEEN', 0, '', '', 'IELTS Academic', '03027099379', '', 'Visit', 'AL MASOOM TOWN', 'Female', '2023-10-18', 'Admin', '2023-09-04', 26500, 2000, NULL, '2023-09-04', NULL, 10000, NULL, '2023-09-05', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(184, 'MUHAMMAD ZEESHAN', 0, '', '', 'IELTS General', '03172222519', '', 'Visit', 'MILLAT ROAD', 'Male', '2023-10-18', 'Admin', '2023-09-04', 32000, 10000, NULL, '2023-09-04', NULL, 22000, NULL, '2023-09-05', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(185, 'NOOR UL AIN', 0, '', '', 'English Language', '03137021707', '', 'Visit', 'JAMEEL TOWN', 'Female', '2023-10-18', 'Admin', '2023-09-18', 22500, 20500, NULL, '2023-09-18', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(186, 'DR. NASIR MANZOOR', 0, '', '', 'IELTS General', '03351645555', '', 'Visit', 'NISHATABAD', 'Male', '2023-10-18', 'Admin', '2023-09-04', 32000, 2000, NULL, '2023-09-04', NULL, 30000, NULL, '2023-09-05', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(187, 'ZIA HAIDER', 0, '', '', 'English Language', '03002526474', '', 'Visit', 'BUREWALA', 'Male', '2023-10-18', 'Admin', '2023-09-04', 22500, 10000, NULL, '2023-09-04', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(188, 'YASSRA ARSHAD', 0, '', '', 'IELTS General', '03037747148', '', 'Visit', 'MILLAT ROAD', 'Female', '2023-10-18', 'Admin', '2023-09-04', 32000, 2000, NULL, '2023-09-04', NULL, 28000, NULL, '2023-09-05', NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(189, 'MUHAMMAD HAROON', 0, '', '', 'IELTS General', '03016615876', '', 'Visit', 'NISAR COLONY', 'Male', '2023-10-18', 'Admin', '2023-09-04', 32000, 2000, NULL, '2023-09-04', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(190, 'AHMAD BIN SHAHID', 2765, '', 'SHAHID MEHMOOD', 'IELTS Academic', '03153979997', '', 'Visit', 'NEW HASEEB SHAHEED COLONY, ST # 2, HOUSE # 55', 'Male', '2004-09-25', 'Maham', '2023-10-20', 26500, 2500, NULL, '2023-10-19', NULL, 24000, 'Cash', '2023-10-23', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(191, 'SIDRA JABEEN', 2764, '3310020894056', 'M.RAFIQUE', 'IELTS General', '03334066939', '', 'Visit', 'P-98/55 AL FIAZ COLONY, ST# 3, NEAR JAMIA IMDADIA MADRISA, SATIANA ROAD, FSD.', 'Female', '1985-06-21', 'Maham', '2023-10-20', 32000, 32000, NULL, '2023-10-19', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(192, 'MUHAMMAD ZOHAIB', 2731, '3310284922233', 'GHULAM MURTAZA AHMAD', 'Korean Language', '03270406512', '', 'Visit', '', 'Male', '2003-10-10', 'Maham', '2023-10-20', 25000, 2000, NULL, '2023-09-30', NULL, 15000, NULL, '2023-10-02', NULL, 7000, 'Cash', '2023-11-15', NULL, 1000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(193, 'ZAIRA SOLOMAN', 2762, '4220169557996', 'SOLOMAN PHILLIP', 'IELTS Academic Online', '96597543850', '', 'Visit', 'BLOCK # 10, ST # 21, BUILDING 18, FAHAHEEL KUWAIT', 'Female', '1986-06-05', 'Maham', '2023-10-20', 40000, 20000, NULL, '2023-10-18', NULL, 20000, 'HBL', '2023-10-30', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(194, 'ABDULLAH SATTAR', 2766, '', 'ABDUL SATTAR', 'English Language', '03218658671', '', 'Visit', 'SAIFABAD NO 2, ST # 11, MIAN HOUSE, JHANG ROAD', 'Male', '2004-10-07', 'Maham', '2023-10-20', 22500, 2000, NULL, '2023-10-20', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(195, 'UMAIR JALIL', 2729, '3310051991317', 'MUHAMMAD JALIL-UR-REHMAN', 'PTE', '03007915065', 'UmairJaalil1236@gmail.com', 'Visit', 'P-4284, ST # 1, CHOKIBAZAR, ASHRAFPURA, MANSOORABAD, FSD', 'Male', '1993-11-15', 'Maham', '2023-10-20', 26500, 2000, NULL, '2023-09-27', NULL, 20500, NULL, '2023-10-02', NULL, 0, NULL, NULL, NULL, 4000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(196, 'SAMEE ULLAH', 2767, '', 'MUHAMMAD RIAZ', 'IELTS Academic', '03090760697', '', 'Visit', 'CHAK NO 96, JB GOJRA', 'Male', '2003-06-15', 'Maham', '2023-10-23', 26500, 12000, NULL, '2023-10-23', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(197, 'ISMAEEL SAQIB ELLAHI', 2770, '3310026815031', 'SAQIB AFTAB', 'German Language A1', '03457720900', '', 'Visit', 'SAEED COLONY NO 2, ELLAHI ST, HOUSE P-110', 'Male', '2009-10-23', 'Maham', '2023-10-23', 50000, 25000, 'Cash', '2023-11-02', NULL, 2000, 'JazzCash', '2023-11-10', NULL, 23000, 'Cash', '2023-12-04', NULL, 5000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(198, 'AMMAR ARIF', 2728, '3310206181825', 'ARIF JAMSHAID', 'IELTS Academic', '03202667614', 'ammararif0000@gmail.com', 'Visit', 'NEW CIVIL LINES, P-30, FAISALABAD', 'Male', '1999-10-06', 'Maham', '2023-10-23', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(199, 'SONIA', 2727, '3330133963334', 'ASGHAR', 'IELTS General', '03008643417', 'SaiFULLAH-417@YAHOO.COM', 'Visit', 'HOUSE # 7942, ST # 2, RAMZANIABAD, FSD', 'Female', '1995-01-15', 'Maham', '2023-10-23', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(200, 'MUHAMMAD RIZWAN KHALID', 2725, '4250163628129', 'MUHAMMAD KHALID', 'IELTS General', '03177685448', 'khalidrizwan617@gmail.com', 'Visit', 'HOUSE # 84-A EDEN GARDEN CANAL ROAD, FSD', 'Male', '2009-10-23', 'Maham', '2023-10-23', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(201, 'KANWAL KASHIF', 2724, '3310334830750', 'M.YOUSAF', 'IELTS General', '03006688256', '', 'Visit', 'ASAM TOWN, ST # 7', 'Female', '1997-01-09', 'Maham', '2023-10-23', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(202, 'Zahra Yousaf Wahla', 2789, '3310187530026', 'Muhammad  Yousaf', 'German Language A1', '03245039881', '', 'Visit', 'Ali Abad PO Khas Chak no 112 R.B Tehsil Nankana Sahab', 'Female', '1994-12-12', 'Sohaib Ahmad', '2023-11-03', 50000, 45000, 'Cash', '2023-11-03', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 5000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(203, 'Zaid wahab', 2801, '3310392861229', 'Muhammad Arif Javaid', 'IELTS Academic', '03059789090', '', 'Visit', 'house no 271 Sanghla City Samundri Road Faisalabad', 'Male', '2009-11-08', 'Sohaib Ahmad', '2023-11-08', 26500, 26500, 'Cash', '2023-11-08', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(204, 'Sadaf Saleem', 2800, '3310255249698', 'Muhammad Saleem', 'IELTS Academic', '03236088121', '', 'Visit', '315/B Block Peoples Colony No. 2 Faisalabad', 'Female', '1992-12-02', 'Sohaib Ahmad', '2023-11-08', 26500, 26500, 'HBL', '2023-11-08', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(205, 'Wardah Asad', 2799, '3310098218506', 'Asad Iqbal', 'IELTS Academic', '03150718171', '', 'Visit', 'House # 595 st # New green town', 'Female', '2004-08-24', 'Sohaib Ahmad', '2023-11-08', 26500, 12500, 'Cash', '2023-11-08', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(206, 'Marwah Amjad', 2798, '3310008548050', 'Amjad Iqbal', 'IELTS Academic', '03177016155', '', 'Visit', 'House no. P 628 St #2 New Green Town Milat Road Faisalabad', 'Female', '2005-01-01', 'Sohaib Ahmad', '2023-11-08', 26500, 26500, 'Cash', '2023-11-08', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(207, 'Iqra Tabasum', 2797, '3540333587848', 'Abdul Sattar', 'IELTS General', '03028700076', '', 'Visit', 'House no d13 new colony 220KV Grid Station Jaranwaal road', 'Female', '1992-12-07', 'Sohaib Ahmad', '2023-11-08', 32000, 2000, 'JazzCash', '2023-11-11', NULL, 30000, 'HBL', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(208, 'Riha Iqbal', 2796, '6110165731954', 'M Atif Iqbal', 'IELTS Academic', '03008359525', '', 'Visit', 'xyz', 'Female', '2003-12-26', 'Sohaib Ahmad', '2023-11-08', 26500, 2000, 'Cash', '2023-11-11', NULL, 13000, 'Cash', '2023-11-13', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(209, 'M Hammad Khan', 2795, '3330211252403', 'M amjad', 'IELTS Academic', '03257453947', '', 'Visit', 'House no 291B Near Clock TowerSadar', 'Male', '0006-06-21', 'Sohaib Ahmad', '2023-11-08', 26500, 26500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(210, 'Muhammad Mubeen Arshad', 2794, '3310495491491', 'Arshaad Ali', 'German Language A1', '03017112355', '', 'Visit', 'Chak No 33JB Satiana Bangla Road Faisalabad', 'Male', '2005-01-22', 'Sohaib Ahmad', '2023-11-08', 50000, 5000, 'Cash', '2023-11-11', NULL, 10000, 'Cash', '2023-11-14', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(211, 'Muhammad Waleed Muzamil', 2793, '', 'Muzammil Khan', 'IELTS Academic', '03219571201', '', 'Visit', 'xyz', 'Male', '2004-09-05', 'Sohaib Ahmad', '2023-11-08', 26500, 26500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(212, 'Ghulam Haider', 2792, '', 'Rafi Hussain', 'IELTS Academic', '03218666643', '', 'Visit', '204 chak east Canal Road Faisalabad', 'Male', '2004-10-17', 'Sohaib Ahmad', '2023-11-08', 26500, 26500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(213, 'NADEEM Iqbal', 2791, '3640161595121', 'GHULAM MUSTAFA', 'IELTS General', '03000688574', '', 'Visit', 'CHAK NO 74 TEHSIL ARIFWALA', 'Male', '1989-04-09', 'Sohaib Ahmad', '2023-11-10', 32000, 15000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(214, 'HAFIZ MUHAMMAD WASIF KHAN', 2790, '3310420928647', 'AHMED KHAN', 'IELTS General', '03009012342', '', 'Visit', 'DHAK KHANA DAK CHAK 115 GOBIND PURA JARANWALA FAISALABAD', 'Male', '1993-01-25', 'Sohaib Ahmad', '2023-11-10', 32000, 15000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(215, 'AQSA GHULAM HUSSAIN', 2788, '', 'GHULAM HUSSAIN', 'IELTS General', '03035583944', '', 'Visit', '138.  Z EDEN ORCHAD SARGHODA ROAD FAISALABAD', 'Female', '1989-09-10', 'Sohaib Ahmad', '2023-11-10', 32000, 2000, 'Cash', '2023-11-11', NULL, 28000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(216, 'SUMMYA ANWAR', 2787, '3310069737178', 'MUHAMMAD ANWAR', 'IELTS Academic', '03032859492', '', 'Visit', 'HOUSE NO 421, C PEOPLES COLONY NO.2 GHOUSIA CHOWK FSD', 'Female', '1998-10-28', 'Sohaib Ahmad', '2023-11-10', 26500, 26500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(217, 'ISRAR AHMAD KHAN', 2802, '3310088923589', 'SHAHZADA KHAN', 'English Language', '03007660897', '', 'Visit', 'XYZ', 'Male', '1986-03-03', 'Sohaib Ahmad', '2023-11-10', 22500, 22500, 'HBL', '2023-11-10', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(219, 'HAFIZA AYESHA IQBAL', 2786, '3310239683200', 'MUHAMMAD IQBAL', 'IELTS General', '03326875774', '', 'Visit', 'GULISTAN COLONY NO 2 BLOCK A HOUSE NO 270', 'Female', '2009-11-10', 'Sohaib Ahmad', '2023-11-10', 32000, 1000, 'Cash', '2023-11-11', NULL, 25000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(220, 'DILSHAD ASLAM', 2785, '3310433761729', 'MUHAMMAD ASLAM', 'IELTS Academic', '03001767302', '', 'Visit', 'CHAK NO 266 RB FAISALABAD', 'Male', '1995-04-05', 'Sohaib Ahmad', '2023-11-10', 26500, 13000, 'Cash', '2023-11-11', NULL, 2000, 'JazzCash', '2023-11-11', NULL, 10500, 'Cash', '2023-11-15', NULL, 1000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(221, 'MARYAM SAEED', 2784, '', 'ABDUL REHMAN', 'IELTS Academic', '03458864730', '', 'Visit', 'GOJRA FAISALABAD', 'Female', '1999-09-14', 'Sohaib Ahmad', '2023-11-10', 26500, 2000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 24500, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(226, 'MUHAMMAD NABEEL', 2783, '', 'MUHAMMAD SALEEM', 'IELTS General', '03447790190', '', 'Visit', 'CHAK NO 190 RB FAISALABAD', 'Male', '1996-08-21', 'Sohaib Ahmad', '2023-11-10', 32000, 2000, 'JazzCash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(227, 'ZAKI RAUF', 2782, '', 'ABDUL RAUF', 'IELTS Academic', '03023429777', '', 'Visit', '', 'Female', '1997-11-30', 'Sohaib Ahmad', '2023-11-10', 26500, 2000, 'JazzCash', '2023-11-11', NULL, 24500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(228, 'SYED HUSSAIN ABID', 2781, '', 'SYED MAJEEB RAZA', 'IELTS Academic', '03057906734', '', 'Visit', 'BLOCK C STREET 1 NEIGHANBAN PURA FAISALABAD', 'Male', '2004-06-12', 'Sohaib Ahmad', '2023-11-10', 26500, 2000, 'Cash', '2023-11-11', NULL, 24500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(229, 'NIMRAH IQBAL', 2780, '', 'MUHAMMAD IQBAL', 'IELTS Academic', '03331121350', '', 'Visit', 'HOUSE NO 676 BLOCK A WAPDA CITY CANAL ROAD FAISALABAD', 'Female', '1996-04-10', 'Sohaib Ahmad', '2023-11-10', 26500, 2500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 24000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(230, 'ANIQA FAIZAN', 2779, '3130315054478', 'FAIZAN UL HAQ', 'IELTS Academic', '03376130209', '', 'Visit', 'HOUSE NO 676 BLOCK A WAPDA CITY CANAL ROAD FAISALABAD', 'Female', '1995-02-06', 'Sohaib Ahmad', '2023-11-10', 26500, 2500, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 24000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(231, 'HANZLA NAZIR', 2778, '', 'HAFIZ MUHAMMAD ZAHID NAZIR', 'IELTS General', '03354770686', '', 'Visit', 'CHAK NO 371 BANGLA ROAD FAISALABAD', 'Female', '2001-09-21', 'Sohaib Ahmad', '2023-11-10', 32000, 2000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(232, 'ZOHA MUJTABA', 2777, '', 'MUHAMMAD RAFIQUE', 'IELTS General', '03172153331', '', 'Visit', 'SAMNA BAD BILAL CHOWK HOUSE NO 1403 B', 'Female', '2001-07-22', 'Sohaib Ahmad', '2023-11-10', 32000, 2000, 'Cash', '2023-11-11', NULL, 30000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(235, 'MARIA ALTAF', 2776, '3430165466646', 'ALTAF HUSSAIN', 'PTE', '03354158096', '', 'Visit', 'GULSHAN COLONY HAFIZABAAD', 'Female', '1992-07-06', 'Sohaib Ahmad', '2023-11-10', 26500, 2000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(236, 'IQRA SARFRAZ', 2774, '3310046364684', 'SARFRAZ AHMAD', 'PTE', '03036202032', '', 'Visit', 'HOUSE NO P 4524 ST NO 5 MANSOORABAD FAISALABAD', 'Female', '1995-01-06', 'Sohaib Ahmad', '2023-11-11', 26500, 26500, 'HBL', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(237, 'MEERAB', 2773, '3310050180608', 'SAFDAR ALI', 'IELTS Academic', '03278364174', '', 'Visit', 'GHAT WALA FAISALABAD', 'Female', '2003-05-12', 'Sohaib Ahmad', '2023-11-11', 26500, 13000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(238, 'IQRA SHAHBAZ', 2772, '', 'SHAHBAZ ALI', 'IELTS General', '03059448486', '', 'Visit', 'JARANWALA', 'Female', '1990-11-06', 'Sohaib Ahmad', '2023-11-11', 32000, 15000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(239, 'M. FURQAN SADIQ', 2771, '3330384706885', 'SADIQ ALI', 'IELTS Academic', '03130320768', '', 'Visit', 'KALEEM SHAHEED COLONY NO 1 G.M ABAD FAISALABAD', 'Male', '1999-10-14', 'Sohaib Ahmad', '2023-11-11', 26500, 13000, 'Bank-Al-Islami', '2023-11-11', NULL, 13500, 'Bank-Al-Islami', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(240, 'Fida Ahmad', 2775, '', '', 'PTE', '03217651948', '', 'Visit', 'XYZ', 'Male', '2009-11-11', 'Sohaib Ahmad', '2023-11-11', 26500, 24000, 'Cash', '2023-11-11', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(241, 'KASHIF ALI', 2806, '', 'ALI MUHAMMAD', 'IELTS General', '03431631219', '', 'Visit', 'CHAK 411 MAJHIANA TEHSIL TANDIAWANWALA', 'Male', '1994-10-03', 'Sohaib Ahmad', '2023-11-13', 32000, 2000, 'Cash', '2023-11-13', NULL, 15000, 'HBL', '2023-11-15', NULL, 15000, 'JazzCash', '2023-12-05', NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(242, 'SIDRA BANO', 2805, '', '', 'German Language A1', '03074883022', '', 'Visit', '', 'Female', '2009-11-13', 'Sohaib Ahmad', '2023-11-13', 50000, 30000, 'Cash', '2023-11-13', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(243, 'IMRAN AHMAD', 2804, '3460386615091', 'TANVEER AHMAD', 'PTE', '03026184439', '', 'Visit', '', 'Male', '1988-04-01', 'Sohaib Ahmad', '2023-11-13', 26500, 2000, 'Cash', '2023-11-13', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(244, 'RABIA AKRAM', 2803, '3310085850070', 'MOHAMMAD AKRAM', 'IELTS General', '03202442233', '', 'Visit', '', 'Female', '1984-03-17', 'Sohaib Ahmad', '2023-11-13', 32000, 2000, 'Cash', '2023-11-13', NULL, 30000, 'Cash', '2023-11-14', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(245, 'AZHAR ALI', 2809, '', 'NAIK MUHAMMAD', 'IELTS General', '03420325036', '', 'Visit', 'CHAK NO 250 JHANG', 'Male', '2005-05-12', 'Sohaib Ahmad', '2023-11-15', 32000, 15000, 'Cash', '2023-11-15', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(246, 'MUHAMMAD SHAKEEL', 2808, '3310421117701', 'SHER MUHAMMAD', 'IELTS General', '03448658965', '', 'Visit', 'XYZ', 'Male', '1982-09-16', 'Sohaib Ahmad', '2023-11-15', 32000, 10000, 'Cash', '2023-11-15', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(247, 'SANA QAMAR UZ ZAMAN', 2807, '3330184288130', 'MIAN TAIMOOR JAVED', 'IELTS General', '03227817777', '', 'Visit', 'XYZ', 'Female', '1998-07-01', 'Sohaib Ahmad', '2023-11-15', 32000, 30000, 'HBL', '2023-11-15', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2000, NULL, 2000, '2024-01-29', 'Cash', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(248, 'Samia', 2834, '3310074736086', 'Tanvir', 'IELTS General', '03008653632', '', 'Visit', 'house no 12 sitara gold city fish farm fsd', 'Female', '1980-02-04', 'Sohaib Ahmad', '2023-12-05', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(249, 'M Talha', 2834, '', 'Mumtaz', 'IELTS Academic', '03054410590', '', 'Visit', 'UAF Jail Road Lalazar', 'Male', '1999-04-10', 'Sohaib Ahmad', '2023-12-05', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(250, 'Fazilat', 2833, '3650186656832', 'Faryad Ali', 'IELTS General', '03042951439', '', 'Visit', 'xyz', 'Female', '1988-11-11', 'Sohaib Ahmad', '2023-12-05', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(251, 'Muhammad Tayyab', 2832, '', '', 'IELTS Academic Online', '03075717271', '', 'Visit', '', 'Male', '2000-12-08', 'Sohaib Ahmad', '2023-12-05', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(252, 'Muhammad Tayyab', 2832, '', '', 'IELTS Academic Online', '03075717271', '', 'Visit', '', 'Male', '2000-12-08', 'Sohaib Ahmad', '2023-12-05', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(253, 'Muhammad Tayyab', 2832, '', '', 'IELTS Academic', '03075717271', '', 'Visit', '', 'Male', '2000-12-08', 'Sohaib Ahmad', '2023-12-05', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(254, 'ASAD AKBAR', 2836, '3310447679817', 'AKBAR ALI', 'IELTS General', '03015296547', '', 'Visit', 'CHAK NO 658/9', 'Male', '1990-08-15', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(255, 'MUHAMMAD ALI', 2837, '3650114538977', 'MUHAMMAD FAQIR', 'IELTS General', '03042951438', '', 'Visit', 'DHAK KHANA CHAK NO 39/12 L TEHSIL CHICHA WATNI SAHIWAL', 'Female', '1987-12-20', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(256, 'BABAR RIAZ', 2838, '3310494354935', 'MUHAMMAD RIAZ', 'IELTS Academic', '03076729676', '', 'Visit', '', 'Male', '2000-07-14', 'Sohaib Ahmad', '2023-12-07', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 5300, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(257, 'SHEEZA NASEEM', 2831, '', 'MUHAMMAD IJAZ NASEEM', 'IELTS Academic', '03007906003', '', 'Visit', 'SANGLA HILL', 'Female', '2001-05-02', 'Sohaib Ahmad', '2023-12-07', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 5300, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(258, 'ABDUL REHMAN', 2830, '3310094656803', '', 'IELTS General', '03024905129', '', 'Visit', '', 'Male', '2003-01-25', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(259, 'ARSAL HUSSAIN', 2829, '3310078358859', 'SHABBIR HUSSAIN', 'IELTS Academic', '03076081098', '', 'Visit', '', 'Male', '2023-12-07', 'Sohaib Ahmad', '2023-12-07', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 4000, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(260, 'NAILA PERVIN', 2827, '', 'MUHAMMAD SADIQ', 'IELTS Academic', '03116541939', '', 'Visit', '225 RB MALKHANWALA FAISALABAD', 'Female', '1990-04-04', 'Sohaib Ahmad', '2023-12-07', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(261, 'ALI SHAN', 2827, '33102355556945', 'SAJJAD HUSSAIN', 'IELTS General', '03247244063', '', 'Visit', 'SAJJAD CHOWK CHAK NO 123 SIDHU PURA FSD', 'Male', '1998-10-10', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'British Institute', 'SR'),
(262, 'SAIMA INTIZAR', 2826, '3310036068468', 'MUNIR AHMED', 'IELTS General', '03018654802', '', 'Visit', '433/P STREET NO 20SAYYEDABAD  G.M ABAD FSD', 'Female', '1979-07-01', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(263, 'ZEESHAN ALI', 2825, '3310095700853', '', 'IELTS General', '03020167021', '', 'Visit', '', 'Male', '2000-07-13', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(264, 'GOUS RAZA', 2823, '3310191310525', '', 'IELTS Academic Online', '03040074188', '', 'Visit', 'CHAK NO 188 JUMRA FAISALABAD', 'Male', '2000-06-15', 'Sohaib Ahmad', '2023-12-07', 40000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'British Institute', 'SR'),
(265, 'ARSLAN NAVEED', 2822, '3310052758507', 'SARDAR NAVEED IFTIKHAR', 'IELTS General', '03148543032', '', 'Visit', '', 'Male', '1988-03-03', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, NULL, 'British Institute', 'SR'),
(266, 'AYESHA ARSHAD', 2821, '', 'MUHAMMAD ARSHAD', 'English Language', '03197268905', '', 'Visit', 'ZULFIQAR COLONY STREET NO 8', 'Female', '2004-12-28', 'Sohaib Ahmad', '2023-12-07', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(267, 'OBAIZA FATIMA', 2820, '', 'MUHAMMAD ANWAR', 'English Language', '03022681067', '', 'Visit', '', 'Female', '2006-01-21', 'Sohaib Ahmad', '2023-12-07', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, NULL, 'British Institute', 'SR'),
(268, 'NATALIA MAHEEN', 2819, '3310253336950', 'MUHAMMAD ASGHAR', 'IELTS Academic', '03110174343', '', 'Visit', 'PEOPLE TOWN STREET NO 8 SAMUNDRI ROAD FSD', 'Female', '1999-10-01', 'Sohaib Ahmad', '2023-12-07', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'SR'),
(269, 'NADIA BANO', 2818, '3310203166186', 'MUHAMMAD LATIF', 'IELTS General', '03030898229', '', 'Visit', 'HOUSE NO P76 STREET NO 2 AMINABAD FSD', 'Female', '1988-01-03', 'Sohaib Ahmad', '2023-12-07', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 2, NULL, 'British Institute', 'SR'),
(270, 'USAMA ANWAR', 2817, '3310001476885', 'MUHAMMAD ANWAR', 'IELTS Academic', '03000477177', '', 'Visit', 'CHAK NO 77 JB MULLAN PUR FAISALABAD', 'Male', '2000-01-26', 'Sohaib Ahmad', '2023-12-07', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'British Institute', 'SR'),
(271, 'MUDDASSOR MUNIR', 15001, '3310090572519', 'MUNIR AHMAD', 'IELTS Academic', '0313766800', 'v.muddassormunir@pdgmail.com', 'Visit', 'P-32 STREET#1 MEHMOODABAD', 'Male', '1989-02-01', 'Abid Ali', '2023-11-29', 26500, 5000, 'Cash', '2023-12-06', NULL, 19500, 'JazzCash', '2023-12-06', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(272, 'ARSLAN ALI', 15002, '', 'ALI RAZA', 'IELTS General', '03081743590', '', 'Visit', 'P-218 NEW KHALIDABAD NEAR SABINA CENIMA FSD', 'Male', '1995-10-14', 'Abid Ali', '2023-11-29', 32000, 10000, 'Cash', '2023-12-06', NULL, 10000, 'HBL', '2023-12-06', NULL, 10000, 'Cash', '2023-12-06', NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(273, 'RABIA ZAFAR', 15003, '3310291553132', 'ZAFAR HUSSAIN SHAHID', 'IELTS General', '03326896952', '', 'Visit', '637/B GHULAM MUHAMMAD ABAD FSD', 'Female', '1987-01-31', 'Abid Ali', '2023-11-29', 32000, 30000, 'Cash', '2023-12-06', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(274, 'AYESHA SHAHZADI', 15004, '3310073766616', 'ALI RAZA', 'IELTS General', '03228653536', 'ayeshaexporto@gmail.com', 'Visit', 'HOUSE NO.51 HEAVEN VILLAS NEAR JWAD CLUB', 'Female', '1987-10-20', 'Abid Ali', '2023-11-29', 32000, 30000, 'Cash', '2023-12-06', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(275, 'MOHSIN RAZA', 15005, '', 'ALI RAZA', 'English Language', '03208653536', '', 'Visit', '', 'Male', '2008-01-23', 'Abid Ali', '2023-11-29', 22500, 5000, 'Cash', '2023-11-29', NULL, 10000, 'Cash', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(276, 'M ARHAM ALI', 15006, '', 'ALI RAZA', 'English Language', '03008653536', '', 'Visit', 'HAVEN VILLAS HOUSE NO. 50', 'Male', '2006-12-10', 'Abid Ali', '2023-11-29', 22500, 5000, 'Cash', '2023-11-29', NULL, 10000, 'Cash', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(277, 'M SUFYAN', 15007, '3310220519811', 'ZAFER IQBAL', 'PTE', '03096974208', 'sufyansaba451@gmail.com', 'Visit', 'MUHALA ELHIABAD MAIN SATYANA  ROAD FSD CHAK NO 225', 'Male', '2023-11-29', 'Abid Ali', '2023-11-29', 26500, 15000, 'HBL', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(278, 'M. AWAIS', 15008, '3310407791565', 'M ASRAF', 'PTE', '03057188617', '', 'Visit', 'CHAK NO 61R-B TAHSEEL JARANWALA FSD', 'Male', '1995-05-15', 'Abid Ali', '2023-11-29', 26500, 15000, 'HBL', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(279, 'AROOOJ SHABBIR', 15009, '3310011925416', 'SHABBIR AHMAD', 'IELTS Academic', '03016023532', '', 'Visit', 'CHAK NO #32 JB FSD', 'Female', '2023-11-29', 'Abid Ali', '2023-11-29', 26500, 1000, 'Cash', '2023-12-07', NULL, 23000, 'Cash', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(280, 'TALHA ASHRAF', 15010, '3310232899905', 'M. ASHRAF', 'IELTS Academic', '03082300727', 'talhaasrafggcsf@gmail.com', 'Visit', 'STREET#34 MAIN ROAD NAWABANWALA MUZFFAR COLONY FSD', 'Male', '2002-03-05', 'Abid Ali', '2023-11-29', 26500, 10000, 'Cash', '2023-12-07', NULL, 8000, 'Cash', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(281, 'WALEED AHMAD', 15011, '3550301987763', 'ABDUL WAHEED', 'IELTS Academic', '03100172674', 'waleedshakir7860@gmail.com', 'Visit', 'MORAR KALAN CHAK NO 45 RB SANGLA HILL DISTT. NANKANA SAHIB', 'Male', '2003-11-10', 'Abid Ali', '2023-11-29', 26500, 26500, 'Cash', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 4000, '2024-01-29', 'JazzCash', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(282, 'KoMAL SHAFIQ', 15012, '331046428332', 'SHAFIQ AHMAD', 'IELTS Academic', '03038174027', 'livelygirl127@gmail.com', 'Visit', 'HOUSE #P-250 STREET# 6,125GB JARANWALA', 'Male', '2001-02-03', 'Abid Ali', '2023-11-29', 26500, 2000, 'Cash', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(283, 'SAAD MANSOOR', 15013, '3430190594469', 'MANSOOR-UL-HAQ', 'English Language', '03193646257', 'Ssadrajput@gmail.com', 'Visit', 'CHACK 32 JB FSD', 'Male', '2006-08-28', 'Abid Ali', '2023-11-30', 22500, 1000, 'Cash', '2023-12-07', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(284, 'ALI JUNAID', 15014, '3320154649803', 'JAVED IQBAL', 'English Language', '03473201691', 'zainsuggle@gmil.com', 'Visit', 'CHACK NO 246', 'Male', '2007-05-08', 'Abid Ali', '2023-11-30', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC');
INSERT INTO `bisa_admission` (`a_id`, `a_name`, `a_rollno`, `a_cnic`, `a_fname`, `a_course`, `a_phone`, `a_email`, `a_method`, `a_area`, `a_sex`, `a_dob`, `a_user`, `a_date`, `a_tfee`, `a_fee1`, `a_fee1_meth`, `a_fee1_date`, `a_remind_date1`, `a_fee2`, `a_fee2_meth`, `a_fee2_date`, `a_remind_date2`, `a_fee3`, `a_fee3_meth`, `a_fee3_date`, `a_remind_date3`, `a_dis`, `a_dis_com`, `a_refund`, `a_re_date`, `a_re_meth`, `a_ex_fee`, `a_ex_date`, `a_ex_meth`, `a_ex_com`, `a_csd`, `a_ced`, `a_status`, `a_remarks`, `a_on`, `a_osn`) VALUES
(285, 'M V=NAVEED-UL-REHMAN', 15015, '3340305001503', 'M MANSHA', 'English Language', '03414182369', 'mnaveedmt9060@gmail.com', 'Visit', '', 'Male', '2023-11-30', 'Abid Ali', '2023-11-30', 22500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(286, 'RIWZAN AYUB', 15016, '3550101397219', 'MUHMMAD AYUB', 'IELTS General', '03007684663', '', 'Visit', 'CHAK NO 4JB NANAKNA SHAB', 'Male', '1986-09-11', 'Abid Ali', '2023-11-30', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(287, 'M PARS', 15017, '3310072041299', 'SULTAN AHMAD', 'IELTS Academic', '03154827984', '', 'Visit', 'CHAK NO 84JB SARSHMR ROD FSD', 'Male', '2003-06-21', 'Abid Ali', '2023-11-30', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(288, 'M ARSLAN SHAH', 15018, '3310269618543', 'M ARIF SHAH', 'PTE Online', '03177662575', '', 'Visit', 'P/119 STREET 4 AIRAVENUE JHNG RD', 'Male', '1997-06-05', 'Abid Ali', '2023-11-30', 42000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(290, 'IQRA SHAID', 15020, '3310308158596', 'SHAID PARVIZ', 'PTE Online', '03090604279', 'iqrashaid7979@gmail.com', 'Visit', '79JB FAISALABAD', 'Male', '2005-09-18', 'Abid Ali', '2023-11-30', 42000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(291, 'ABDAAL ALI', 15021, '33102651578641', 'ARSHAD ALI', 'IELTS Academic', '03178064242', 'Abdaalgcuf@gmail.com', 'Visit', 'BISMAALLAH TOWN JHNG ROD FSD', 'Male', '1998-04-09', 'Abid Ali', '2023-11-30', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(292, 'AMMRA ARIF', 15022, '', 'FAROOQ AHMAD', 'IELTS General', '03055539645', '', 'Visit', 'JHNG ROD MOTOR MARKET FSD', 'Female', '1988-09-12', 'Abid Ali', '2023-11-30', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(293, 'USMAN SARFRAZ', 15023, '', 'SARFRAZ ALI', 'IELTS Academic', '03000987054', 'usmansarfraz700@gmail.com', 'Visit', 'IMDAD TOWN ST#3 MANAWALA 203R.B FSD', 'Male', '1997-09-15', 'Abid Ali', '2023-11-30', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(294, 'MOHSIN RAZA', 15024, '3320182117089', 'SYED AMEER HUSSAIN ZALDI', 'IELTS General', '03007700189', 'mohsinzaidi84@gmail.com', 'Visit', 'HOUSE NO 192 ST#CHAWLAN MOHALLAH GARAH CHINIOT', 'Male', '2023-11-30', 'Abid Ali', '2023-11-30', 32000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(295, 'HAMZA BUUT', 15025, '3310289779789', 'M USMAN BUTT', 'German Language A1', '0335660526', '', 'Visit', 'STREET#6 HOUSE P-128 KHALIDABAD FSD', 'Male', '1994-07-21', 'Abid Ali', '2023-11-30', 50000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(296, 'M.Bilal', 15032, '', 'Qadir Ali', 'MS Office', '0322727898749', '', 'Visit', 'J.W Road Interloop sping FSD', 'Male', '2023-12-08', 'Abid Ali', '2023-12-08', 16500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC'),
(299, 'FIZA KHALID', 15019, '3310374775932', 'KHALID SALEEM', 'IELTS Academic', '03037169716', 'fizakhalid308@yahoo.com', 'Visit', 'HOUSE168 BLOCK C GULFISHA COLONY JHNG RD FSD', 'Female', '1998-09-01', 'Abid Ali', '2023-11-30', 26500, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'British Institute', 'GC');

-- --------------------------------------------------------

--
-- Table structure for table `bisa_course`
--

CREATE TABLE `bisa_course` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(255) DEFAULT NULL,
  `co_fee` int(11) DEFAULT 0,
  `co_detail` varchar(255) DEFAULT NULL,
  `co_teacher` varchar(255) DEFAULT NULL,
  `co_s1` text DEFAULT NULL,
  `co_s2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_course`
--

INSERT INTO `bisa_course` (`co_id`, `co_name`, `co_fee`, `co_detail`, `co_teacher`, `co_s1`, `co_s2`) VALUES
(1, 'IELTS Academic', 26500, 'For Study Visa', 'Sir Haider', NULL, NULL),
(2, 'IELTS General', 32000, 'for Immigration', 'Sir Haider', NULL, NULL),
(3, 'PTE', 26500, 'abc', 'Miss Ambreen', NULL, NULL),
(4, 'German Language A1', 50000, 'abc', 'Sir Amjad Islam', NULL, NULL),
(5, 'Dutch Language', 65000, 'for Netherlands', 'Sir Amjad Islam', NULL, NULL),
(6, 'Korean Language', 25000, 'KLT', 'Sir Shafiq-ur-Rehman', NULL, NULL),
(7, 'Chinese Language', 30000, 'HSK 1 & HSK 2 Fee', 'Sir Usama Shahid', NULL, NULL),
(8, 'Graphics Designing', 26500, 'abc', 'Sir Sohaib Ahmad', NULL, NULL),
(9, 'SEO Guest Posting', 25000, 'abc', 'Sir Hammad', NULL, NULL),
(10, 'SEO', 35000, 'abc', 'Sir Hammad', NULL, NULL),
(11, 'MS Office', 16500, 'abc', 'Sir Sohaib Ahmad', NULL, NULL),
(12, 'AutoCad 2D And 3D', 32000, 'abc', 'Sir Naqash Maqsood', NULL, NULL),
(13, 'IELTS Life Skills A1', 35000, 'For UK Spouse Visa', 'Sir Haider', NULL, NULL),
(14, 'Web Development', 36500, 'ABC', 'Sir Mubashar Ahmad', NULL, NULL),
(15, 'English Language', 22500, 'XYZ', 'Sir Haider', NULL, NULL),
(16, 'IELTS Academic Online', 40000, 'XYZ', 'Sir Junaid', NULL, NULL),
(17, 'PTE Online', 42000, 'For Caneda and Australia Imigration and study purpose', 'Miss Ambreen', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bisa_exam_booked`
--

CREATE TABLE `bisa_exam_booked` (
  `eb_id` int(11) NOT NULL,
  `eb_fname` varchar(255) DEFAULT NULL,
  `eb_lname` varchar(255) DEFAULT NULL,
  `eb_dob` date DEFAULT NULL,
  `eb_city` varchar(255) DEFAULT NULL,
  `eb_email` varchar(255) DEFAULT NULL,
  `eb_edate` date DEFAULT NULL,
  `eb_phone` varchar(255) DEFAULT NULL,
  `eb_cnic` varchar(255) DEFAULT NULL,
  `eb_cnic_exp_date` date DEFAULT NULL,
  `eb_status` varchar(255) DEFAULT NULL,
  `eb_exam_name` varchar(255) DEFAULT NULL,
  `eb_fee` int(11) NOT NULL DEFAULT 0,
  `eb_fee_meth` varchar(255) DEFAULT NULL,
  `eb_st_pay` int(11) NOT NULL DEFAULT 0,
  `eb_date` date DEFAULT NULL,
  `eb_bi_fee` int(11) NOT NULL DEFAULT 0,
  `eb_bi_meth` varchar(255) DEFAULT NULL,
  `eb_bi_date` date DEFAULT NULL,
  `eb_profit` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_exam_booked`
--

INSERT INTO `bisa_exam_booked` (`eb_id`, `eb_fname`, `eb_lname`, `eb_dob`, `eb_city`, `eb_email`, `eb_edate`, `eb_phone`, `eb_cnic`, `eb_cnic_exp_date`, `eb_status`, `eb_exam_name`, `eb_fee`, `eb_fee_meth`, `eb_st_pay`, `eb_date`, `eb_bi_fee`, `eb_bi_meth`, `eb_bi_date`, `eb_profit`) VALUES
(1, 'Ayesha Binte', 'Rabbani', '2008-12-07', 'Lahore', 'mrsshahzadayesha556@gmail.com', '2023-12-08', '03254172206', '1', '2032-07-20', 'Outdoor', 'IELTS LifeSkills PB', 41000, 'Cash', 1, '2023-12-07', 40000, 'HBL', NULL, 1000),
(3, 'Iqra', 'Tabassum', '1998-04-05', 'Faisalabad', 'iqrahxdugsx@gmail.com', '2023-12-12', '03059484849', '64548484848548', '2032-06-05', 'Indoor', 'IELTS UKVI Academic PB', 56000, 'HBL', 1, '2023-12-01', 55000, 'HBL', NULL, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `bisa_exam_list`
--

CREATE TABLE `bisa_exam_list` (
  `el_id` int(11) NOT NULL,
  `el_name` varchar(255) DEFAULT NULL,
  `el_st_pay` int(11) DEFAULT NULL,
  `el_in_pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_exam_list`
--

INSERT INTO `bisa_exam_list` (`el_id`, `el_name`, `el_st_pay`, `el_in_pay`) VALUES
(1, 'IELTS Academic CB', 58400, 57400),
(2, 'IELTS Academic PB', 64800, 63800),
(3, 'IELTS UKVI Academic CB', 52700, 51700),
(4, 'IELTS UKVI Academic PB', 56000, 55000),
(5, 'IELTS General CB', 58400, 57400),
(6, 'IELTS General PB', 64800, 63800),
(7, 'IELTS UKVI General CB', 52700, 51700),
(8, 'IELTS UKVI General PB', 56000, 55000),
(9, 'IELTS LifeSkills PB', 41000, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `bisa_fee`
--

CREATE TABLE `bisa_fee` (
  `f_roll` float NOT NULL,
  `f_detail` varchar(255) DEFAULT NULL,
  `f_co` varchar(255) DEFAULT NULL,
  `f_rs` int(11) NOT NULL DEFAULT 0,
  `f_date` date DEFAULT NULL,
  `f_meth` varchar(255) DEFAULT NULL,
  `f_on` varchar(255) DEFAULT NULL,
  `f_osn` varchar(255) DEFAULT NULL,
  `edit` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_fee`
--

INSERT INTO `bisa_fee` (`f_roll`, `f_detail`, `f_co`, `f_rs`, `f_date`, `f_meth`, `f_on`, `f_osn`, `edit`) VALUES
(1.1, 'USAMA HUSNAIN ( Roll No 2752 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-12', NULL, 'British Institute', 'SR', 0),
(1.2, 'USAMA HUSNAIN ( Roll No 2752 ) submitted his/her 2nd fee installment', NULL, 24500, '2023-10-16', NULL, 'British Institute', 'SR', 0),
(2.1, 'RANA M USMAN ( Roll No 2753 ) submitted his/her 1st fee installment', NULL, 23000, '2023-10-12', NULL, 'British Institute', 'SR', 0),
(3.1, 'RANA SULTAN ( Roll No 2754 ) submitted his/her 1st fee installment', NULL, 23000, '2023-10-12', NULL, 'British Institute', 'SR', 0),
(4.1, 'SHAHROZ AHMED submitted his/her 1st fee installment', NULL, 23000, '2023-11-13', 'Cash', 'British Institute', 'SR', 0),
(5.1, 'RABIA ( Roll No 2756 ) submitted his/her 1st fee installment', NULL, 5000, '2023-10-13', NULL, 'British Institute', 'SR', 0),
(5.2, 'RABIA ( Roll No 2756 ) submitted his/her 2nd fee installment', NULL, 10000, '2023-10-16', NULL, 'British Institute', 'SR', 0),
(6.1, 'ASIMA ALI ( Roll No 2751 ) submitted his/her 1st fee installment', NULL, 17000, '2023-10-10', NULL, 'British Institute', 'SR', 0),
(7.1, 'AMINA TABASSUM ( Roll No 2750 ) submitted his/her 1st fee installment', NULL, 24500, '2023-10-10', NULL, 'British Institute', 'SR', 0),
(8.1, 'SHAMILA ASLAM ( Roll No 2746 ) submitted his/her 1st fee installment', NULL, 20000, '2023-10-09', NULL, 'British Institute', 'SR', 0),
(8.2, 'SHAMILA ASLAM ( Roll No 2746 ) submitted his/her 2nd fee installment', NULL, 12000, '2023-10-10', NULL, 'British Institute', 'SR', 0),
(9.1, 'ZARISH JOHN ( Roll No 2747 ) submitted his/her 1st fee installment', NULL, 13000, '2023-10-09', NULL, 'British Institute', 'SR', 0),
(9.2, 'ZARISH JOHN submitted his/her 2nd fee installment', NULL, 13500, '2023-11-02', 'Cash', 'British Institute', 'SR', 0),
(10.1, 'RUBAB GULZAR ( Roll No 2748 ) submitted his/her 1st fee installment', NULL, 1000, '2023-10-09', NULL, 'British Institute', 'SR', 0),
(10.2, 'RUBAB GULZAR ( Roll No 2748 ) submitted his/her 2nd fee installment', NULL, 15000, '2023-10-11', NULL, 'British Institute', 'SR', 0),
(10.3, 'RUBAB GULZAR ( Roll No 2748 ) submitted his/her 3rd fee installment', NULL, 8500, '0202-10-18', NULL, 'British Institute', 'SR', 0),
(11.1, 'SODA MUMTAZ ( Roll No 2749 ) submitted his/her 1st fee installment', NULL, 1000, '2023-10-09', NULL, 'British Institute', 'SR', 0),
(11.2, 'SODA MUMTAZ ( Roll No 2749 ) submitted his/her 2nd fee installment', NULL, 15000, '2023-10-11', NULL, 'British Institute', 'SR', 0),
(11.3, 'SODA MUMTAZ ( Roll No 2749 ) submitted his/her 3rd fee installment', NULL, 8500, '2023-10-18', NULL, 'British Institute', 'SR', 0),
(12.1, 'RABIA KHURRAM ( Roll No 2745 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-05', NULL, 'British Institute', 'SR', 0),
(12.2, 'RABIA KHURRAM ( Roll No 2745 ) submitted his/her 2nd fee installment', NULL, 24500, '2023-10-09', NULL, 'British Institute', 'SR', 0),
(13.1, 'ALISHBA MARC ANDRE STEGNER ( Roll No 2744 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-05', NULL, 'British Institute', 'SR', 0),
(13.2, 'ALISHBA MARC ANDRE STEGNER ( Roll No 2744 ) submitted his/her 2nd fee installment', NULL, 43000, '2023-10-09', NULL, 'British Institute', 'SR', 0),
(14.1, 'ARSLAN ALI ( Roll No 2743 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-04', NULL, 'British Institute', 'SR', 0),
(15.1, 'NOOR E SEHAR ( Roll No 2742 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-04', NULL, 'British Institute', 'SR', 0),
(16.1, 'MUHAMMAD MUTEEB ALI ( Roll No 2732 ) submitted his/her 1st fee installment', NULL, 20000, '2023-10-02', NULL, 'British Institute', 'SR', 0),
(16.2, 'MUHAMMAD MUTEEB ALI ( Roll No 2732 ) submitted his/her 2nd fee installment', NULL, 4000, '2023-10-16', NULL, 'SR', '0', 0),
(16.3, 'MUHAMMAD MUTEEB ALI submitted his/her 3rd fee installment', NULL, 500, '2023-10-27', 'Cash', 'British Institute', 'SR', 0),
(17.1, 'MUZAMMAL ZAHID ( Roll No 2733 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-02', NULL, 'British Institute', 'SR', 0),
(17.2, 'MUZAMMAL ZAHID ( Roll No 2733 ) submitted his/her 2nd fee installment', NULL, 24500, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(18.1, 'DANISH MEHMOOD ( Roll No 2734 ) submitted his/her 1st fee installment', NULL, 26600, '2023-10-02', NULL, 'British Institute', 'SR', 0),
(19.1, 'ABDUL REHMAN ( Roll No 2735 ) submitted his/her 1st fee installment', NULL, 15000, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(19.2, 'ABDUL REHMAN submitted his/her 2nd fee installment', NULL, 30000, '2023-10-24', 'Cash', 'British Institute', 'SR', 0),
(20.1, 'ZARMEEN ALTAF ( Roll No 2736 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(21.1, 'ALI HAIDER ( Roll No 2737 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(21.2, 'ALI HAIDER ( Roll No 2737 ) submitted his/her 2nd fee installment', NULL, 23000, '2023-10-09', NULL, 'British Institute', 'SR', 0),
(22.1, 'IRAM SHAHZADI ( Roll No 2738 ) submitted his/her 1st fee installment', NULL, 1000, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(23.1, 'AHMED AYAN ( Roll No 2739 ) submitted his/her 1st fee installment', NULL, 40000, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(24.1, 'IRUM SHOUKAT ( Roll No 2740 ) submitted his/her 1st fee installment', NULL, 1000, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(24.2, 'IRUM SHOUKAT ( Roll No 2740 ) submitted his/her 2nd fee installment', NULL, 13000, '2023-10-06', NULL, 'British Institute', 'SR', 0),
(25.1, 'MUZAFFAR ASGHAR ( Roll No 2741 ) submitted his/her 1st fee installment', NULL, 1500, '2023-10-03', NULL, 'British Institute', 'SR', 0),
(25.2, 'MUZAFFAR ASGHAR ( Roll No 2741 ) submitted his/her 2nd fee installment', NULL, 30500, '2023-10-04', NULL, 'British Institute', 'SR', 0),
(26.1, 'Ubaid Shah ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 15000, '2023-09-14', NULL, 'British Institute', 'SR', 0),
(50.1, 'ARSHY NIGAH submitted his/her 1st fee installment', NULL, 50000, '2023-10-23', 'Bank-Al-Islamic', 'British Institute', 'SR', 0),
(52.1, 'WAHEED AHMAD ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-06', NULL, 'British Institute', 'SR', 0),
(52.2, 'WAHEED AHMAD ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 22500, '2023-09-06', NULL, 'British Institute', 'SR', 0),
(53.1, 'Faizan Shahid ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 18000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(55.1, 'ASMA IRFAN ( Roll No 2757 ) submitted his/her 1st fee installment', NULL, 1000, '2023-10-16', NULL, 'British Institute', 'SR', 0),
(55.2, 'ASMA IRFAN ( Roll No 2757 ) submitted his/her 2nd fee installment', NULL, 14000, '2023-10-23', NULL, 'British Institute', 'SR', 0),
(55.3, 'ASMA IRFAN submitted his/her 3rd fee installment', NULL, 13000, '2023-11-15', 'Cash', 'British Institute', 'SR', 0),
(56.1, 'SANAM SHABBIR ( Roll No 2758 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-16', NULL, 'British Institute', 'SR', 0),
(56.2, 'SANAM SHABBIR ( Roll No 2758 ) submitted his/her 2nd fee installment', NULL, 22000, '2023-10-18', NULL, 'British Institute', 'SR', 0),
(57.1, 'SANA ZUBAIR ( Roll No 2759 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-16', NULL, 'British Institute', 'SR', 0),
(57.2, 'SANA ZUBAIR ( Roll No 2759 ) submitted his/her 2nd fee installment', NULL, 22000, '2023-10-17', NULL, 'British Institute', 'SR', 0),
(106.1, 'SANA submitted his/her 1st fee installment', NULL, 14000, '2023-10-23', 'Cash', 'British Institute', 'SR', 0),
(106.2, 'SANA submitted his/her 2nd fee installment', NULL, 10000, '2023-10-24', 'Cash', 'British Institute', 'SR', 0),
(106.3, 'SANA submitted his/her 3rd fee installment', NULL, 2500, '2023-10-25', 'Cash', 'British Institute', 'SR', 0),
(137.1, 'MAIRA ( Roll No 2760 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-16', NULL, 'British Institute', 'SR', 0),
(139.1, 'M.IMRAN TAHIR ( Roll No 2761 ) submitted his/her 1st fee installment', NULL, 1000, '2023-10-16', NULL, 'British Institute', 'SR', 0),
(140.1, 'DR.IFFAT AKRAM ( Roll No 2763 ) submitted his/her 1st fee installment', NULL, 20000, '2023-10-18', NULL, 'British Institute', 'SR', 0),
(160.1, 'MUHAMMAD ALI ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 5000, '2023-08-06', NULL, 'British Institute', 'SR', 0),
(160.2, 'MUHAMMAD ALI ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 19500, '2023-08-07', NULL, 'British Institute', 'SR', 0),
(161.1, 'Rimsha ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 1000, '2023-09-19', NULL, 'British Institute', 'SR', 0),
(162.1, 'Hina Parveen ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-12', NULL, 'British Institute', 'SR', 0),
(163.1, 'Azka ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(164.1, 'Muhammad Mukarram ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 5000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(165.1, 'Aqsa Arooj ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 24500, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(166.1, 'M Hamza Mazhar ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 5000, '2023-09-13', NULL, 'British Institute', 'SR', 0),
(166.2, 'M Hamza Mazhar ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 19500, '2023-09-14', NULL, 'British Institute', 'SR', 0),
(167.1, 'Sundas Qadeer ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-12', NULL, 'British Institute', 'SR', 0),
(167.2, 'Sundas Qadeer ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 22500, '2023-09-13', NULL, 'British Institute', 'SR', 0),
(168.1, 'Raza Ahmad Shah ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-13', NULL, 'British Institute', 'SR', 0),
(168.2, 'Raza Ahmad Shah ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 18500, '2023-09-14', NULL, 'British Institute', 'SR', 0),
(169.1, 'Beenish Latif ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 24000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(170.1, 'Muhammad Zubair ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 1000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(171.1, 'Ali shahid ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 32000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(172.1, 'Syed M. Noman ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 22000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(173.1, 'Kiran Rafique ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(174.1, 'Aiman Ahaz ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-12', NULL, 'British Institute', 'SR', 0),
(174.2, 'Aiman Ahaz ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 22500, '2023-09-13', NULL, 'British Institute', 'SR', 0),
(175.1, 'Asad Ali ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 10000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(176.1, 'Kinza ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 20500, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(177.1, 'Abrar Hussain ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 24000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(178.1, 'Faizan Tariq ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(179.1, 'SHARJEEL SHAHZAD ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 19000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(180.1, 'M Ibrahim ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(181.1, 'HASSAN KHALID ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 32000, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(182.1, 'ZAHID HUSSAIN ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 7000, '2023-09-05', NULL, 'British Institute', 'SR', 0),
(182.2, 'ZAHID HUSSAIN ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 17500, '2023-09-06', NULL, 'British Institute', 'SR', 0),
(183.1, 'ARSLA MUBEEN ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-04', NULL, 'British Institute', 'SR', 0),
(183.2, 'ARSLA MUBEEN ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 10000, '2023-09-05', NULL, 'British Institute', 'SR', 0),
(184.1, 'MUHAMMAD ZEESHAN ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 10000, '2023-09-04', NULL, 'British Institute', 'SR', 0),
(184.2, 'MUHAMMAD ZEESHAN ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 22000, '2023-09-05', NULL, 'British Institute', 'SR', 0),
(185.1, 'NOOR UL AIN ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 20500, '2023-09-18', NULL, 'British Institute', 'SR', 0),
(186.1, 'DR. NASIR MANZOOR ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-04', NULL, 'British Institute', 'SR', 0),
(186.2, 'DR. NASIR MANZOOR ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 30000, '2023-09-05', NULL, 'British Institute', 'SR', 0),
(187.1, 'ZIA HAIDER ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 10000, '2023-09-04', NULL, 'British Institute', 'SR', 0),
(188.1, 'YASSRA ARSHAD ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-04', NULL, 'British Institute', 'SR', 0),
(188.2, 'YASSRA ARSHAD ( Roll No 0 ) submitted his/her 2nd fee installment', NULL, 28000, '2023-09-05', NULL, 'British Institute', 'SR', 0),
(189.1, 'MUHAMMAD HAROON ( Roll No 0 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-04', NULL, 'British Institute', 'SR', 0),
(190.1, 'AHMAD BIN SHAHID ( Roll No 2765 ) submitted his/her 1st fee installment', NULL, 2500, '2023-10-19', NULL, 'British Institute', 'SR', 0),
(190.2, 'AHMAD BIN SHAHID submitted his/her 2nd fee installment', NULL, 24000, '2023-10-23', 'Cash', 'British Institute', 'SR', 0),
(191.1, 'SIDRA JABEEN ( Roll No 2764 ) submitted his/her 1st fee installment', NULL, 32000, '2023-10-19', NULL, 'British Institute', 'SR', 0),
(192.1, 'MUHAMMAD ZOHAIB ( Roll No 2731 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-30', NULL, 'British Institute', 'SR', 0),
(192.2, 'MUHAMMAD ZOHAIB ( Roll No 2731 ) submitted his/her 2nd fee installment', NULL, 15000, '2023-10-02', NULL, 'British Institute', 'SR', 0),
(192.3, 'MUHAMMAD ZOHAIB submitted his/her 3rd fee installment', NULL, 7000, '2023-11-15', 'Cash', 'British Institute', 'SR', 0),
(193.1, 'ZAIRA SOLOMAN ( Roll No 2762 ) submitted his/her 1st fee installment', NULL, 20000, '2023-10-18', NULL, 'British Institute', 'SR', 0),
(193.2, 'ZAIRA SOLOMAN submitted his/her 2nd fee installment', NULL, 20000, '2023-10-30', 'HBL', 'British Institute', 'SR', 0),
(194.1, 'ABDULLAH SATTAR ( Roll No 2766 ) submitted his/her 1st fee installment', NULL, 2000, '2023-10-20', NULL, 'British Institute', 'SR', 0),
(195.1, 'UMAIR JALIL ( Roll No 2729 ) submitted his/her 1st fee installment', NULL, 2000, '2023-09-27', NULL, 'British Institute', 'SR', 0),
(195.2, 'UMAIR JALIL ( Roll No 2729 ) submitted his/her 2nd fee installment', NULL, 20500, '2023-10-02', NULL, 'British Institute', 'SR', 0),
(196.1, 'SAMEE ULLAH ( Roll No 2767 ) submitted his/her 1st fee installment', NULL, 12000, '2023-10-23', NULL, 'British Institute', 'SR', 0),
(197.1, 'ISMAEEL SAQIB ELLAHI submitted his/her 1st fee installment', NULL, 25000, '2023-11-02', 'Cash', 'British Institute', 'SR', 0),
(197.2, 'ISMAEEL SAQIB ELLAHI submitted his/her 2nd fee installment', NULL, 2000, '2023-11-10', 'JazzCash', 'British Institute', 'SR', 0),
(202.1, 'Zahra Yousaf Wahla submitted his/her 1st fee installment', NULL, 45000, '2023-11-03', 'Cash', 'British Institute', 'SR', 0),
(203.1, 'Zaid wahab submitted his/her 1st fee installment', NULL, 26500, '2023-11-08', 'Cash', 'British Institute', 'SR', 0),
(204.1, 'Sadaf Saleem submitted his/her 1st fee installment', NULL, 26500, '2023-11-08', 'HBL', 'British Institute', 'SR', 0),
(205.1, 'Wardah Asad submitted his/her 1st fee installment', NULL, 12500, '2023-11-08', 'Cash', 'British Institute', 'SR', 0),
(206.1, 'Marwah Amjad submitted his/her 1st fee installment', NULL, 26500, '2023-11-08', 'Cash', 'British Institute', 'SR', 0),
(207.1, 'Iqra Tabasum submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'JazzCash', 'British Institute', 'SR', 0),
(207.2, 'Iqra Tabasum submitted his/her 2nd fee installment', NULL, 30000, '2023-11-11', 'HBL', 'British Institute', 'SR', 0),
(208.1, 'Riha Iqbal submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(208.2, 'Riha Iqbal submitted his/her 2nd fee installment', NULL, 13000, '2023-11-13', 'Cash', 'British Institute', 'SR', 0),
(209.1, 'M Hammad Khan submitted his/her 1st fee installment', NULL, 26500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(210.1, 'Muhammad Mubeen Arshad submitted his/her 1st fee installment', NULL, 5000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(210.2, 'Muhammad Mubeen Arshad submitted his/her 2nd fee installment', NULL, 10000, '2023-11-14', 'Cash', 'British Institute', 'SR', 0),
(211.1, 'Muhammad Waleed Muzamil submitted his/her 1st fee installment', NULL, 26500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(212.1, 'Ghulam Haider submitted his/her 1st fee installment', NULL, 26500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(213.1, 'NADEEM Iqbal submitted his/her 1st fee installment', NULL, 15000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(214.1, 'HAFIZ MUHAMMAD WASIF KHAN submitted his/her 1st fee installment', NULL, 15000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(215.1, 'AQSA GHULAM HUSSAIN submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(215.2, 'AQSA GHULAM HUSSAIN submitted his/her 2nd fee installment', NULL, 28000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(216.1, 'SUMMYA ANWAR submitted his/her 1st fee installment', NULL, 26500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(217.1, 'ISRAR AHMAD KHAN submitted his/her 1st fee installment', NULL, 22500, '2023-11-10', 'HBL', 'British Institute', 'SR', 0),
(219.1, 'HAFIZA AYESHA IQBAL submitted his/her 1st fee installment', NULL, 1000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(219.2, 'HAFIZA AYESHA IQBAL submitted his/her 2nd fee installment', NULL, 25000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(220.1, 'DILSHAD ASLAM submitted his/her 1st fee installment', NULL, 13000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(220.2, 'DILSHAD ASLAM submitted his/her 2nd fee installment', NULL, 2000, '2023-11-11', 'JazzCash', 'British Institute', 'SR', 0),
(220.3, 'DILSHAD ASLAM submitted his/her 3rd fee installment', NULL, 10500, '2023-11-15', 'Cash', 'British Institute', 'SR', 0),
(221.1, 'MARYAM SAEED submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(226.1, 'MUHAMMAD NABEEL submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'JazzCash', 'British Institute', 'SR', 0),
(227.1, 'ZAKI RAUF submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'JazzCash', 'British Institute', 'SR', 0),
(227.2, 'ZAKI RAUF submitted his/her 2nd fee installment', NULL, 24500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(228.1, 'SYED HUSSAIN ABID submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(228.2, 'SYED HUSSAIN ABID submitted his/her 2nd fee installment', NULL, 24500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(229.1, 'NIMRAH IQBAL submitted his/her 1st fee installment', NULL, 2500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(230.1, 'ANIQA FAIZAN submitted his/her 1st fee installment', NULL, 2500, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(231.1, 'HANZLA NAZIR submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(232.1, 'ZOHA MUJTABA submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(232.2, 'ZOHA MUJTABA submitted his/her 2nd fee installment', NULL, 30000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(235.1, 'MARIA ALTAF submitted his/her 1st fee installment', NULL, 2000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(236.1, 'IQRA SARFRAZ submitted his/her 1st fee installment', NULL, 26500, '2023-11-11', 'HBL', 'British Institute', 'SR', 0),
(237.1, 'MEERAB submitted his/her 1st fee installment', NULL, 13000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(238.1, 'IQRA SHAHBAZ submitted his/her 1st fee installment', NULL, 15000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(239.1, 'M. FURQAN SADIQ submitted his/her 1st fee installment', NULL, 13000, '2023-11-11', 'Bank-Al-Islamic', 'British Institute', 'SR', 0),
(239.2, 'M. FURQAN SADIQ submitted his/her 2nd fee installment', NULL, 13500, '2023-11-11', 'Bank-Al-Islamic', 'British Institute', 'SR', 0),
(240.1, 'Fida Ahmad submitted his/her 1st fee installment', NULL, 24000, '2023-11-11', 'Cash', 'British Institute', 'SR', 0),
(241.1, 'KASHIF ALI submitted his/her 1st fee installment', NULL, 2000, '2023-11-13', 'Cash', 'British Institute', 'SR', 0),
(241.2, 'KASHIF ALI submitted his/her 2nd fee installment', NULL, 15000, '2023-11-15', 'HBL', 'British Institute', 'SR', 0),
(241.3, 'KASHIF ALI submitted his/her 3rd fee installment', 'IELTS General', 15000, '2023-12-05', 'JazzCash', 'British Institute', 'SR', 0),
(242.1, 'SIDRA BANO submitted his/her 1st fee installment', NULL, 30000, '2023-11-13', 'Cash', 'British Institute', 'SR', 0),
(243.1, 'IMRAN AHMAD submitted his/her 1st fee installment', NULL, 2000, '2023-11-13', 'Cash', 'British Institute', 'SR', 0),
(244.1, 'RABIA AKRAM submitted his/her 1st fee installment', NULL, 2000, '2023-11-13', 'Cash', 'British Institute', 'SR', 0),
(244.2, 'RABIA AKRAM submitted his/her 2nd fee installment', NULL, 30000, '2023-11-14', 'Cash', 'British Institute', 'SR', 0),
(245.1, 'AZHAR ALI submitted his/her 1st fee installment', NULL, 15000, '2023-11-15', 'Cash', 'British Institute', 'SR', 0),
(246.1, 'MUHAMMAD SHAKEEL submitted his/her 1st fee installment', NULL, 10000, '2023-11-15', 'Cash', 'British Institute', 'SR', 0),
(247.1, 'SANA QAMAR UZ ZAMAN submitted his/her 1st fee installment', NULL, 30000, '2023-11-15', 'HBL', 'British Institute', 'SR', 0),
(247.4, 'SANA QAMAR UZ ZAMAN Gets his/her Refund', 'IELTS General', -2000, '2024-01-29', 'Cash', 'British Institute', 'SR', 0),
(281.4, 'WALEED AHMAD Gets his/her Refund', 'IELTS Academic', -4000, '2024-01-29', 'JazzCash', 'British Institute', 'GC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bisa_inquiry`
--

CREATE TABLE `bisa_inquiry` (
  `inq_id` int(11) NOT NULL,
  `inq_name` varchar(255) DEFAULT NULL,
  `inq_course` varchar(255) DEFAULT NULL,
  `inq_phone` varchar(255) DEFAULT NULL,
  `inq_method` varchar(255) DEFAULT NULL,
  `inq_detail` varchar(255) DEFAULT NULL,
  `inq_user` varchar(255) DEFAULT NULL,
  `inq_area` varchar(255) DEFAULT NULL,
  `inq_date` date DEFAULT NULL,
  `inq_remind_date` date DEFAULT NULL,
  `inq_comment` varchar(255) DEFAULT NULL,
  `inq_on` varchar(255) DEFAULT NULL,
  `inq_osn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_inquiry`
--

INSERT INTO `bisa_inquiry` (`inq_id`, `inq_name`, `inq_course`, `inq_phone`, `inq_method`, `inq_detail`, `inq_user`, `inq_area`, `inq_date`, `inq_remind_date`, `inq_comment`, `inq_on`, `inq_osn`) VALUES
(1, 'Shahid Aman', 'IELTS', '03334026524', 'Visit', NULL, 'Admin', 'xyz', '2023-09-14', NULL, '0', 'British Institute', 'SR'),
(3, 'Saima Nadeem', 'IELTS', '03036239878', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(4, 'Maham', 'IELTS', '03231680745', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(5, 'Sidra', 'IELTS', '03474416007', 'Visit', NULL, 'Sohaib Ahmad', 'XYZ', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(7, 'Ramish', 'IELTS', '03311042419', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(8, 'Ali Azfar', 'IELTS', '03137655872', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(9, 'Mujtiba Khan', 'IELTS', '03046116252', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(10, 'M Shahid', 'IELTS', '03037767681', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(11, 'Usman Ikram', 'Korean Language', '03174225522', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(12, 'Junaid Ahmad', 'PTE', '03458446252', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(13, 'Fida Hussain', 'German Language', '03076869472', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(15, 'Laiba Yousaf', 'IELTS', '03217832391', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(16, 'M Walid Zahid', 'IELTS', '03467620830', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(17, 'Ibtasam', 'IELTS', '03339916493', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(18, 'Umer Sheikh', 'PTE', '03236684466', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(19, 'Rizwan', 'IELTS', '03017012800', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(20, 'Faiqa Noor', 'Web Development', '03137097489', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(21, 'Shafiq ur Rehman', 'IELTS', '03008651771', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(22, 'Rizwan', 'IELTS', '03247792696', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(24, 'M Usman', 'IELTS', '03216629413', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(25, 'Hammad Saeed', 'IELTS', '03061400318', 'Visit', NULL, 'Sohaib Ahmad', 'satyana road', '2023-09-16', NULL, '0', 'British Institute', 'SR'),
(26, 'M GULFAM', 'IELTS', '03010920928', 'Visit', NULL, 'Admin', 'CHAK JHUMRA', '2023-09-18', NULL, '0', 'British Institute', 'SR'),
(27, 'M Haris Mello', 'IELTS', '03234102830', 'Visit', NULL, 'Admin', 'Jaranwala Road', '2023-09-18', NULL, '0', 'British Institute', 'SR'),
(28, 'Mazhar Ali', 'IELTS', '03041651837', 'Visit', NULL, 'Admin', 'SANGLA HILL', '2023-09-18', NULL, '0', 'British Institute', 'SR'),
(29, 'Mariam', 'Korean Language', '03418879593', 'Visit', NULL, 'Admin', 'satyana road', '2023-09-28', NULL, '0', 'British Institute', 'SR'),
(30, 'sameer', 'German Language', '03499391089', 'Whatsapp', NULL, '03216629250', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(31, 'Fida Hussain', 'IELTS', '03096869472', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(32, 'Saad Jhang', 'PTE', '03064407913', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(33, 'M.ADEEL', 'IELTS', '03007978458', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(34, 'IRAM KHAN', 'IELTS', '03067273502', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(35, 'TALHA MUMTAZ', 'PTE', '03437686797', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(36, 'M. HAMZA', 'PTE', '03117547101', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(37, 'MUNEER AHMAD', 'IELTS', '03078033865', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(38, 'M. ABUBAKER', 'Korean Language', '03146696781', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(39, 'ZOHAIB IQBAL', 'PTE', '03116720953', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(40, 'TAYYABA FATIMA', 'English Language', '03016093553', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(41, 'MUHAMMAD', 'IELTS', '03020000977', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(43, 'HUSSAIN', 'PTE', '03414739786', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(44, 'M. JAMSHAID', 'IELTS', '03340783558', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(45, 'KAINAT', 'IELTS', '03007674138', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(46, 'MUBASSHIIR', 'IELTS', '03157616547', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(47, 'HUMAIRA', 'IELTS', '03366087369', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(48, 'BUSHRA', 'IELTS', '03077506074', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(49, 'CHANDA', 'IELTS', '03276777736', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(50, 'AHMAD RAZA', 'MS Office', '03069252874', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(51, 'QAMAR', 'IELTS', '03061667428', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(52, 'HASSAN', 'IELTS', '03144170382', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(53, 'M. ZAIN', 'IELTS', '03180780634', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(54, 'ABDUL RAFY', 'IELTS', '03023083936', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(55, 'M.UMAR', 'IELTS', '03143363007', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(56, 'SAYWEEL', 'PTE', '03021689387', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(57, 'UMAIR NADEEM', 'MS Office', '03037454259', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(58, 'HUSSAIN', 'English Language', '03247730890', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(59, 'SEHAR', 'IELTS', '03267698760', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(60, 'SANA FAROOQ', 'IELTS', '03317295568', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(61, 'M.AYAN', 'IELTS', '03217623142', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(62, 'DR.ADAN', 'IELTS', '03368726442', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(63, 'KAMRAN', 'IELTS', '03006609918', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(64, 'AHSAN', 'English Language', '03043065761', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(65, 'FAREEHA AMJAD', 'IELTS', '03077011760', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(66, 'NAQASH', 'PTE', '03170141464', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(67, 'M.TAHIR', 'IELTS', '03034372160', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(68, 'NAMEED AHMAD', 'IELTS', '03007652028', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(69, 'SOHAIB', 'IELTS', '03037799139', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(70, 'HAMZA', 'IELTS', '03117287155', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(71, 'MOHSIN', 'PTE', '03003503636', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(72, 'SHAFIQ', 'PTE', '03027959591', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(73, 'M.DAWOUD', 'German Language', '03042302713', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(74, 'FAROOQ', 'IELTS', '03236097199', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(75, 'TAYYABA', 'IELTS', '03250126855', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(76, 'HANZALA', 'IELTS', '03127387762', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(77, 'KASHIF', 'German Language', '03200281272', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(78, 'AYESHA IJAZ', 'IELTS', '03214271015', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(79, 'SADDAM KHAN', 'IELTS', '03344464163', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(82, 'SHAMA', 'IELTS', '03201672206', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(83, 'SAMAN FATIMA', 'Graphics Designing', '03030992646', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(84, 'ALIA IQBAL', 'English Language', '03028280014', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(85, 'MARYAM', 'IELTS', '03216061342', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(86, 'USMAN', 'Digital Marketing', '03061753172', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(87, 'M.REHMAN', 'IELTS', '03079721385', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(88, 'MUDASSIR', 'IELTS', '03137668007', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(89, 'RAZA KHAN', 'English Language', '03226003655', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(90, 'M.ADNAN', 'English Language', '03012065386', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(91, 'HAFIZ FAIZAN ALI', 'English Language', '03012065386', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(92, 'AKASHA', 'IELTS', '03415455644', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(93, 'FAISAL RASOOL', 'PTE', '03484954425', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(94, 'AHMAD', 'IELTS', '03126923700', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(95, 'M.NADEEM', 'Korean Language', '03258194539', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(96, 'HUSSAIN', 'IELTS', '03027268995', 'Visit', NULL, 'Data Operator', 'xyz', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(97, 'afza', 'IELTS', '03493819929', 'Whatsapp', NULL, '03216629250', 'SARGHODA ROAD', '2023-09-30', NULL, '0', 'British Institute', 'SR'),
(98, 'Abdullah', 'IELTS', '03437762952', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(99, 'Haroon', 'German Language', '03187070969', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(100, 'M Awais', 'IELTS', '03493053399', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(101, 'Hassan', 'IELTS', '03226300930', 'Visit', NULL, 'Sohaib Ahmad', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(102, 'Nisha Razzaq', 'IELTS', '03087714896', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(103, 'Usama Shah', 'PTE', '03202075588', 'Call', NULL, 'Sohaib Ahmad', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(104, 'Ahmad', 'IELTS', '03216637457', 'Call', NULL, 'Admin', 'SARGHODA ROAD', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(105, 'AFTAB AMJAD', 'IELTS', '03264439070', 'Call', NULL, 'Admin', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(107, 'M AWAIS', 'IELTS', '03493053399', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(108, 'HAROON', 'German Language', '03187070969', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(109, 'M ABDULLAH', 'IELTS', '03437762952', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-03', NULL, '0', 'British Institute', 'SR'),
(110, 'ALI RAZA', 'Graphics Designing', '03208155212', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-04', NULL, '0', 'British Institute', 'SR'),
(111, 'GULZAR AKRAM', 'IELTS', '03336000795', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-04', NULL, '0', 'British Institute', 'SR'),
(112, 'KAMAR ZAMAN', 'IELTS', '03006184638', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-04', NULL, '0', 'British Institute', 'SR'),
(113, 'ALI ADNAN', 'IELTS', '03216639312', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-04', NULL, '0', 'British Institute', 'SR'),
(114, 'Hamza Amjad', 'German Language', '03414583268', 'Visit', NULL, 'Admin', 'SANGLA HILL', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(115, 'AHMAD KHALID', 'IELTS', '03069010900', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(117, 'ADNAN AHMAD', 'IELTS', '03167941113', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(118, 'HAFIZ KHURRAM SHEHZAD', 'IELTS', '03098671672', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(119, 'MAHAM NAZIR', 'IELTS', '03216505052', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(120, 'NOORIA SAHER', 'IELTS', '03074826109', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(121, 'ANOSHEY  FATIMA', 'IELTS', '03330687634', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(122, 'AHMAD TALAL KHAN', 'English Language', '03022639892', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(123, 'M ASIM', 'MS Office', '03055142326', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(124, 'M UMER', 'IELTS', '03005013013', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-05', NULL, '0', 'British Institute', 'SR'),
(125, 'DR SHABIR SHAKIR', 'IELTS', '03044979311', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-06', NULL, NULL, 'British Institute', 'SR'),
(126, 'M FAISAL ASHRAF', 'IELTS', '03231244520', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-06', NULL, NULL, 'British Institute', 'SR'),
(127, 'HAFIZ FAHAD', 'English Language', '03005994142', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-06', NULL, NULL, 'British Institute', 'SR'),
(128, 'RANA M REHAN', 'IELTS', '03227754794', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-06', NULL, NULL, 'British Institute', 'SR'),
(129, 'MEHRAN', 'IELTS', '03468424247', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-06', NULL, NULL, 'British Institute', 'SR'),
(130, 'MISS ANAM', 'IELTS', '03027193812', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-06', NULL, NULL, 'British Institute', 'SR'),
(131, 'NO NAME', 'IELTS', '03167353564', 'Visit', NULL, 'Data Operator', 'xyz', '2023-10-06', NULL, NULL, 'British Institute', 'SR'),
(133, 'Ali Hassnain', 'PTE', '03072379542', 'Visit', NULL, '03216629250', 'Chiniot', '2023-10-09', '2023-10-10', '', 'British Institute', 'SR'),
(134, 'xyzxyz', 'IELTS Life Skills A1', '03017262705', 'Call', NULL, 'Admin', 'Sahiwal', '2023-10-09', '2023-10-10', '', 'British Institute', 'SR'),
(135, 'SALAT ANWER', 'German Language A1', '03090315911', 'Call', NULL, 'Admin', 'FAISALABAD', '2023-10-09', '2023-10-10', '', 'British Institute', 'SR'),
(136, 'RANA ARHAM', 'IELTS Academic', '03007676903', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-07', 'XYZ', 'British Institute', 'SR'),
(137, 'M. AHAD', 'IELTS Academic', '03146002405', 'Call', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(138, 'ZAHID', 'PTE', '03336374973', 'Whatsapp', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(139, 'FAKHAR ABBAS', 'Dutch Language', '03456818604', 'Whatsapp', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(140, 'ABUZAR', 'German Language A1', '03436564832', 'Whatsapp', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(141, 'REDHA', 'IELTS General', '03034496811', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(142, 'WAQAR', 'Chinese Language', '03066650235', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(143, 'SHAYAN', 'IELTS Academic', '03129711223', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(144, 'SUFYAN', 'IELTS General', '03096974208', 'Call', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(145, 'SAJEER AHMAD', 'PTE', '03017144532', 'Call', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(146, 'MUJTABA', 'German Language A1', '03227170000', 'Call', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(147, 'GC NO NAME', 'IELTS Academic', '03087063197', 'Call', NULL, 'Data Operator', 'XYZ', '2023-10-09', '2023-10-09', 'XYZ', 'British Institute', 'SR'),
(149, 'USMAN HAIDER', 'IELTS Academic', '03247757972', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-10', '2023-10-10', 'XYZ', 'British Institute', 'SR'),
(150, 'DANISH', 'IELTS Academic', '03027117811', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-11', '2023-10-11', 'XYZ', 'British Institute', 'SR'),
(151, 'ASMAR', 'IELTS Academic', '03228285285', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-11', '2023-10-11', 'XYZ', 'British Institute', 'SR'),
(152, 'MATIU RASOOL', 'IELTS Academic', '03066252892', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-11', '2023-10-01', 'XYZ', 'British Institute', 'SR'),
(153, 'ASHRAF', 'IELTS Academic', '03478714591', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-11', '2023-10-11', 'XYZ', 'British Institute', 'SR'),
(154, 'M. UMER', 'IELTS Academic', '03287678382', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-11', '2023-10-11', 'XYZ', 'British Institute', 'SR'),
(155, 'RANA MUNEEB', 'IELTS Academic', '03259795109', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-11', '2023-10-11', 'XYZ', 'British Institute', 'SR'),
(157, 'ZAIN BABAR', 'IELTS General', '03036614049', 'Visit', NULL, 'Data Operator', 'XYZ', '2023-10-11', '2023-10-11', 'XYZ', 'British Institute', 'SR'),
(158, 'ISMA KHADIM', 'IELTS Academic', '03081009654', 'Call', NULL, 'Admin', 'SARGHODA ROAD', '2023-10-12', '2023-12-10', '', 'British Institute', 'SR'),
(160, 'M MUDASSAR', 'Graphics Designing', '03067075075', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-05', '', 'British Institute', 'SR'),
(161, 'ADEENA', 'IELTS Academic', '03225020311', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-05', '', 'British Institute', 'SR'),
(162, 'usma', 'IELTS General', '03075921705', 'Whatsapp', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-06', '', 'British Institute', 'SR'),
(163, 'M.Mansoor', 'Graphics Designing', '03036337890', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-06', '', 'British Institute', 'SR'),
(164, 'M.Mansoor', 'IELTS Academic', '03471989350', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-06', '', 'British Institute', 'SR'),
(165, 'Ali Tariq', 'German Language A1', '03174692634', 'Visit', NULL, 'GC Office', 'Ferdous colony jhung vali', '2023-10-12', '2023-10-06', '', 'British Institute', 'SR'),
(166, 'Ali Own', 'German Language A1', '03217737811', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-05', '', 'British Institute', 'SR'),
(168, 'Irfan Ali', 'IELTS General', '03066714367', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-07', '', 'British Institute', 'SR'),
(169, 'Zaid', 'PTE', '03237811954', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-09', '', 'British Institute', 'SR'),
(170, 'Ilyab joham', 'German Language A1', '03078374596', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-09', '', 'British Institute', 'SR'),
(171, 'M.Awais', 'Graphics Designing', '03036239616', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-09', '', 'British Institute', 'SR'),
(172, 'Shahida', 'IELTS Academic', '03070680711', 'Visit', NULL, 'GC Office', 'XYZ', '2023-10-12', '2023-10-09', '', 'British Institute', 'SR'),
(174, 'AMNA', 'IELTS Academic', '03071574060', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-12', '2023-10-11', 'XYZ', 'British Institute', 'SR'),
(175, 'NO NAME', 'IELTS Academic', '03083181194', 'Visit', NULL, 'Maham', 'xyz', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(176, 'NO NAME', 'IELTS Academic', '03458055861', 'Visit', NULL, 'Maham', 'xyz', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(177, 'ADIL MEHMOOD', 'PTE', '03083227002', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(178, 'NO NAME', 'IELTS Academic', '03002265673', 'Visit', NULL, 'Maham', 'xyz', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(179, 'NO NAME', 'IELTS General', '03481040460', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(180, 'MUHAMMAD ASIM', 'IELTS General', '03029366660', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(181, 'BASHIR AHMAD', 'IELTS Academic', '03459201741', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(182, 'AQSA RASOOL', 'PTE', '03075528535', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-12', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(183, 'RANA NAVEED', 'IELTS Academic', '03007385178', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(184, 'ILYAS ASHRAF', 'IELTS General', '03107717073', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(185, 'SALAS ANWAR', 'German Language A1', '03120172821', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(186, 'TIMMAR', 'IELTS General', '03229357104', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(187, 'RANA M REHAN KHAN', 'IELTS Academic', '03207382483', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(188, 'SHEHBAZ ALI', 'IELTS General', '03332423038', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-12', 'XYZ', 'British Institute', 'SR'),
(189, 'BILAL', 'German Language A1', '03048561296', 'Whatsapp', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-13', 'XYZ', 'British Institute', 'SR'),
(190, 'UMAIR', 'IELTS General', '03068668284', 'Call', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-13', 'XYZ', 'British Institute', 'SR'),
(191, 'SHAHBAZ AHMED', 'IELTS General', '03076969030', 'Whatsapp', NULL, 'Maham', 'XYZ', '2023-10-13', '2023-10-13', 'XYZ', 'British Institute', 'SR'),
(192, 'SHEHROZ ASLAM', 'IELTS Academic', '03094149316', 'Visit', NULL, 'Maham', 'xyz', '2023-10-13', '2023-10-13', 'XYZ', 'British Institute', 'SR'),
(193, 'MARIA', 'German Language A1', '03161449225', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-16', '2023-10-14', 'XYZ', 'British Institute', 'SR'),
(194, 'HAFIZ SUFYAN', 'IELTS Academic', '03076011668', 'Whatsapp', NULL, 'Maham', 'XYZ', '2023-10-16', '2023-10-14', 'XYZ', 'British Institute', 'SR'),
(195, 'AHMED', 'English Language', '03219384072', 'Whatsapp', NULL, 'Maham', 'XYZ', '2023-10-16', '2023-10-14', 'XYZ', 'British Institute', 'SR'),
(197, 'GHULAM MURTAZA', 'English Language', '03261225193', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-16', '2023-10-16', 'XYZ', 'British Institute', 'SR'),
(201, 'WALEED AHMAD', 'IELTS Academic', '03144951971', 'Whatsapp', NULL, 'Maham', 'XYZ', '2023-10-16', '2023-10-16', 'XYZ', 'British Institute', 'SR'),
(202, 'ATTAU KAREEM', 'German Language A1', '03140177233', 'Whatsapp', NULL, 'Maham', 'XYZ', '2023-10-16', '2023-10-16', 'XYZ', 'British Institute', 'SR'),
(203, 'SHABEER', 'IELTS General', '03007412585', 'Call', NULL, 'Sohaib Ahmad', 'BABER CHOWK', '2023-10-16', '2023-10-16', '', 'British Institute', 'SR'),
(204, 'M.ALI RAZA', 'IELTS General', '03012882662', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-17', '2023-10-17', 'XYZ', 'British Institute', 'SR'),
(205, 'M.ABUBAKAR', 'English Language', '03041403727', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-17', '2023-10-17', 'XYZ', 'British Institute', 'SR'),
(206, 'ZOHAIB KHALID', 'IELTS Academic', '03431890940', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-19', '2023-10-18', '', 'British Institute', 'SR'),
(207, 'BUSHRA', 'IELTS General', '03049384904', 'Call', NULL, 'Maham', 'XYZ', '2023-10-19', '2023-10-19', '', 'British Institute', 'SR'),
(208, 'QURATULAIN', 'English Language', '03217540018', 'Visit', NULL, 'Maham', 'XYZ', '2023-10-19', '2023-10-19', '', 'British Institute', 'SR'),
(209, 'M.ASIF ABBAS', 'MS Office', '03173177614', 'Call', NULL, 'Maham', 'XYZ', '2023-10-19', '2023-10-19', '', 'British Institute', 'SR'),
(213, 'AHSAN KHALID', 'IELTS General', '03326816234', '', '', 'Maham', 'XYZ', '2023-10-23', '2023-10-23', '', 'British Institute', 'SR'),
(214, 'WALEED', 'PTE', '03117092386', '', '', 'Maham', '', '2023-10-23', '2023-10-23', '', 'British Institute', 'SR'),
(215, 'SANA', 'English Language', '03075540296', '', '', 'Maham', 'XYZ', '2023-10-23', '2023-10-23', '', 'British Institute', 'SR'),
(216, 'HANZALA', 'IELTS Academic', '03071448479', '', '', 'Maham', 'XYZ', '2023-10-23', '2023-10-23', '', 'British Institute', 'SR'),
(217, 'MR. MUNEER', 'IELTS Academic', '03227653476', 'Call', '0333-6545083', 'Maham', 'XYZ', '2023-10-23', '2023-10-23', '', 'British Institute', 'SR'),
(218, 'IQRA SARFRAZ', 'PTE', '03011087582', 'Visit', 'Sir Sohaib', 'Maham', 'XYZ', '2023-10-23', '2023-10-23', '', 'British Institute', 'SR'),
(219, 'HANZLA', 'English Language', '03131440592', 'Visit', 'Sir Sohaib', 'Sohaib Ahmad', 'XYZ', '2023-11-10', '2023-11-10', '', 'British Institute', 'SR'),
(220, 'MUHAMMAD AZEEM', 'Dutch Language', '03324000474', 'Visit', 'Sir Sohaib', 'Sohaib Ahmad', 'XYZ', '2023-11-10', '2023-11-10', '', 'British Institute', 'SR'),
(221, 'AHMAD BILAL', 'IELTS Academic', '03028143244', 'Visit', 'Sir Sohaib', 'Sohaib Ahmad', 'XYZ', '2023-11-10', '2023-11-10', '', 'British Institute', 'SR'),
(222, 'SHAHID', 'IELTS Academic', '03457683179', 'Call', '0333-6545083', 'Sohaib Ahmad', 'XYZ', '2023-11-14', '2023-11-22', '', 'British Institute', 'SR'),
(223, 'ALYAN AHMAD', 'Chinese Language', '03056473069', 'Visit', 'Mam Naila', 'Sohaib Ahmad', 'XYZ', '2023-11-14', '2023-11-22', '', 'British Institute', 'SR'),
(224, 'KASHAN SHAHZAD', 'IELTS Academic', '03167464824', 'Visit', 'Sir Abad', 'Sohaib Ahmad', 'XYZ', '2023-11-14', '2023-11-22', 'XYZ', 'British Institute', 'SR'),
(225, 'SHAHZAIB', 'English Language', '03033055677', 'Visit', 'Mam Naila', 'Sohaib Ahmad', 'XYZ', '2023-11-14', '2023-11-22', '', 'British Institute', 'SR'),
(226, 'M FURQAN', 'English Language', '03007915915', 'Visit', 'Mam Naila', 'Sohaib Ahmad', 'XYZ', '2023-11-15', '2023-11-17', '2 STUDENTS FRIDAY VISIT', 'British Institute', 'SR'),
(227, 'AWAIS SHOUKAT', 'IELTS General', '03226629696', 'Visit', 'Sir Sohaib', 'Sohaib Ahmad', 'XYZ', '2023-11-15', '2023-11-18', '', 'British Institute', 'SR'),
(228, 'M Asif', 'IELTS General', '03084851252', 'Call', '0321-6629250', 'Admin', 'Shakeel UK - Cuzan', '2023-12-07', '2023-12-11', '', 'British Institute', 'SR'),
(229, 'SOHAIB', 'IELTS Academic', '030911745540', 'Call', '0321-6629250', 'Sohaib Ahmad', '', '2023-12-07', '2023-12-11', '', 'British Institute', 'SR'),
(230, 'Fazal Bukhari', 'IELTS General', '03236000529', 'Whatsapp', '0333-6545083', 'Admin', '', '2023-12-07', '2023-12-11', '', 'British Institute', 'SR'),
(231, 'Faisal Saleh', 'IELTS Academic', '03158020480', 'Visit', 'Sir Abad', 'Abid Ali', '', '2023-11-29', '2023-12-03', '', 'British Institute', 'GC'),
(232, 'FAHEEM IQBAL', 'IELTS Academic', '03246418000', 'Visit', 'Sir Abad', 'Abid Ali', '', '2023-11-28', '2023-11-30', '', 'British Institute', 'GC'),
(233, 'ZAIN RAZA', 'PTE', '03237811954', 'Visit', 'Miss Naila', 'Noor', '', '2023-12-06', '2023-12-10', '', 'British Institute', 'GC'),
(234, 'M WASEEM ILYAS', 'English Language', '03067288640', 'Visit', 'Miss Naila', 'Noor', '', '2023-12-06', '2023-12-10', '', 'British Institute', 'GC'),
(235, 'DAWOOD', 'IELTS Academic', '03450966670', 'Visit', 'Miss Naila', 'Noor', '', '2023-12-06', '2023-12-10', '', 'British Institute', 'GC'),
(236, 'ASIF IQBAL', 'IELTS General', '03071303050', 'Whatsapp', '0319-6629250', 'Noor', '', '2023-12-06', '2023-12-10', '', 'British Institute', 'GC'),
(237, 'LAYBA', 'IELTS General', '03154148065', 'Call', '0319-6629250', 'Abid Ali', 'GM ABAD', '2023-12-07', '2023-12-11', '', 'British Institute', 'GC'),
(238, 'M JAVED', 'IELTS General', '03217942585', 'Call', '0321-6629250', 'Abid Ali', 'SARGHODA ROAD', '2023-12-07', '2023-12-11', '', 'British Institute', 'GC'),
(239, 'Hashir Yaseen', 'Web Development', '0306-7579079', 'Visit', 'Miss Naila', 'Abid Ali', '', '2023-12-08', '2023-12-08', '', 'British Institute', 'GC');

-- --------------------------------------------------------

--
-- Table structure for table `bisa_inq_main_method`
--

CREATE TABLE `bisa_inq_main_method` (
  `imm_id` int(11) NOT NULL,
  `imm_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_inq_main_method`
--

INSERT INTO `bisa_inq_main_method` (`imm_id`, `imm_name`) VALUES
(1, 'Call'),
(2, 'Visited'),
(3, 'Whatsapp'),
(4, 'Message'),
(5, 'Social-Media');

-- --------------------------------------------------------

--
-- Table structure for table `bisa_inq_method`
--

CREATE TABLE `bisa_inq_method` (
  `im_id` int(11) NOT NULL,
  `im_method` varchar(255) DEFAULT NULL,
  `im_meth_detail` varchar(255) DEFAULT NULL,
  `im_on` varchar(255) DEFAULT NULL,
  `im_osn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_inq_method`
--

INSERT INTO `bisa_inq_method` (`im_id`, `im_method`, `im_meth_detail`, `im_on`, `im_osn`) VALUES
(1, 'Visited', 'Sir Abid', 'British Institute', 'SR'),
(2, 'Visited', 'Sir Sohaib', 'British Institute', 'SR'),
(3, 'Visited', 'Mam Naila', 'British Institute', 'SR'),
(4, 'Call', '0412632632', 'British Institute', 'SR'),
(5, 'Call', '0418532200', 'British Institute', 'SR'),
(6, 'Call', '03196629250', 'British Institute', 'SR'),
(7, 'Call', '03216629250', 'British Institute', 'SR'),
(8, 'Call', '03336545083', 'British Institute', 'SR'),
(9, 'Call', 'U.A.N', 'British Institute', 'SR'),
(10, 'Message', '03196629250', 'British Institute', 'SR'),
(11, 'Message', '03216629250', 'British Institute', 'SR'),
(12, 'Message', '03336545083', 'British Institute', 'SR'),
(13, 'Whatsapp', '03196629250', 'British Institute', 'SR'),
(14, 'Whatsapp', '03216629250', 'British Institute', 'SR'),
(15, 'Whatsapp', '03336545083', 'British Institute', 'SR'),
(16, 'Social-Media', 'FaceBook', 'British Institute', 'SR'),
(17, 'Social-Media', 'Instagram', 'British Institute', 'SR'),
(18, 'Social-Media', 'Linked In', 'British Institute', 'SR'),
(19, 'Visited', 'Sir Abid', 'British Institute', 'GC'),
(20, 'Visited', 'Mam Mehwish', 'British Institute', 'GC'),
(21, 'Visited', 'Mam Noor', 'British Institute', 'GC'),
(22, 'Call', '0412632632', 'British Institute', 'GC'),
(23, 'Call', '0412630630', 'British Institute', 'GC'),
(24, 'Call', '03196629250', 'British Institute', 'GC'),
(25, 'Call', '03216629250', 'British Institute', 'GC'),
(26, 'Call', '03336545083', 'British Institute', 'GC'),
(27, 'Call', 'U.A.N', 'British Institute', 'GC'),
(28, 'Message', '03196629250', 'British Institute', 'GC'),
(29, 'Message', '03216629250', 'British Institute', 'GC'),
(30, 'Message', '03336545083', 'British Institute', 'GC'),
(31, 'Whatsapp', '03196629250', 'British Institute', 'GC'),
(32, 'Whatsapp', '03216629250', 'British Institute', 'GC'),
(33, 'Whatsapp', '03336545083', 'British Institute', 'GC'),
(34, 'Social-Media', 'FaceBook', 'British Institute', 'GC'),
(35, 'Social-Media', 'Instagram', 'British-Institute', 'GC'),
(36, 'Social-Media', 'Linked In', 'British Institute', 'GC');

-- --------------------------------------------------------

--
-- Table structure for table `bisa_in_out`
--

CREATE TABLE `bisa_in_out` (
  `io_id` int(11) NOT NULL,
  `io_io` varchar(255) DEFAULT NULL,
  `io_detail` varchar(255) DEFAULT NULL,
  `io_cat` varchar(255) DEFAULT NULL,
  `io_rs` int(11) DEFAULT 0,
  `io_meth` varchar(255) DEFAULT NULL,
  `io_date` date DEFAULT NULL,
  `io_on` varchar(255) DEFAULT NULL,
  `io_osn` varchar(255) DEFAULT NULL,
  `edit` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_in_out`
--

INSERT INTO `bisa_in_out` (`io_id`, `io_io`, `io_detail`, `io_cat`, `io_rs`, `io_meth`, `io_date`, `io_on`, `io_osn`, `edit`) VALUES
(1, 'Out', 'SWEETS FOR MILAD', NULL, 600, 'Cash', '2023-11-10', 'British Institute', 'SR', 0),
(2, 'Out', 'LUNCH', NULL, 400, 'Cash', '2023-11-10', 'British Institute', 'SR', 0),
(3, 'Out', 'BANK DEPOSIT HBL', NULL, 156000, 'HBL', '2023-11-10', 'British Institute', 'SR', 0),
(4, 'In', 'ZAHRA YOUSAF WAHLA GERMAN FEE', NULL, 45000, 'Cash', '2023-11-03', 'British Institute', 'SR', 0),
(5, 'In', 'AQSA GHULAM HUSSAIN IELTS FEE', NULL, 28000, 'Cash', '2023-11-03', 'British Institute', 'SR', 0),
(6, 'In', 'FAIZAN TARIQ BC EXAM FEE', NULL, 64800, 'Cash', '2023-11-03', 'British Institute', 'SR', 0),
(7, 'In', 'ISRAR AHMAD KHAN', NULL, 22500, 'HBL', '2023-11-10', 'British Institute', 'SR', 0),
(8, 'In', 'AMNA TABASSUM BC EXAM FEE', NULL, 56000, 'Cash', '2023-11-10', 'British Institute', 'SR', 0),
(9, 'In', 'AYESHA SHAHZADI BC EXAM FEE', NULL, 56000, 'Cash', '2023-11-10', 'British Institute', 'SR', 0),
(10, 'In', 'LOAN FROM GC CAMPUS', NULL, 100000, 'Cash', '2023-11-10', 'British Institute', 'SR', 0),
(11, 'In', 'Zeeshan Ali', NULL, 32000, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(12, 'In', 'Saima Intizar Fee IELTS', NULL, 15000, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(13, 'In', 'Ali Shan Fee IELTS', NULL, 1000, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(14, 'In', 'Obaiza Fatima fee EFL', NULL, 3000, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(15, 'In', 'Wardah Asad Fee IELTS', NULL, 12000, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(16, 'In', 'Naila Pervin Fee IELTS', NULL, 1000, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(17, 'In', 'Arsal Hussain fee IELTS Academic', NULL, 22500, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(18, 'In', 'Muhammad Zohaib Fee Korean Language Easypaisa', NULL, 3000, 'EasyPaisa', '2023-11-28', 'British Institute', 'SR', 0),
(19, 'Out', 'ISRAR AHMAD KHAN', NULL, 22500, 'HBL', '2023-11-10', 'British Institute', 'SR', 0),
(20, 'Out', 'MUBASHIR BHAI SOFTWARE DEVELOPER', NULL, 18000, 'Cash', '2023-11-10', 'British Institute', 'SR', 0),
(21, 'Out', 'BANK DEPOSIT ISLAMI BANK', NULL, 20400, 'Bank-Al-Islamic', '2023-11-10', 'British Institute', 'SR', 0),
(22, 'Out', 'Arsal Hussain Fee IELTS', 'Others', 22500, 'HBL', '2023-11-28', 'British Institute', 'SR', 0),
(23, 'Out', 'Lunch', 'Lunch', 540, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(24, 'Out', 'Tea', 'Tea', 240, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(25, 'Out', 'Juice for Sir Abid', 'Sir Abid', 100, 'Cash', '2023-11-28', 'British Institute', 'SR', 0),
(26, 'Out', 'Shafiq Sab Pay', 'Teachers Pay', 20000, 'Cash', '2023-12-01', 'British Institute', 'SR', 1),
(27, 'Out', 'LUNCH', 'Lunch', 460, 'Cash', '2023-12-01', 'British Institute', 'SR', 1),
(28, 'Out', 'BANK DEPOSIT', 'Others', 222100, 'HBL', '2023-12-01', 'British Institute', 'SR', 1),
(29, 'In', 'ALI RAZA', NULL, 5000, 'HBL', '2023-12-01', 'British Institute', 'GC', 1),
(30, 'In', 'SAIMA TABASUM', NULL, 13000, 'Cash', '2023-12-04', 'British Institute', 'GC', 1),
(31, 'In', '2000 JAZZCASH MEHVISH', NULL, 2000, 'JazzCash', '2023-12-04', 'British Institute', 'GC', 1),
(32, 'In', 'M UMER', NULL, 2000, 'Cash', '2023-12-05', 'British Institute', 'GC', 1),
(33, 'In', 'HASHIR AWAN', NULL, 22500, 'HBL', '2023-12-05', 'British Institute', 'GC', 1),
(34, 'In', 'KASHIF ALI', NULL, 15000, 'JazzCash', '2023-12-05', 'British Institute', 'GC', 1),
(35, 'In', 'Ayesha for test booking life skill', NULL, 42000, 'Cash', '2023-12-07', 'British Institute', 'GC', 0),
(36, 'In', 'M.bilal fee', NULL, 2000, 'Cash', '2023-12-08', 'British Institute', 'GC', 1),
(37, 'Out', 'LUNCH', 'Lunch', 970, 'Cash', '2023-12-01', 'British Institute', 'GC', 1),
(38, 'Out', 'WATER', 'Others', 40, 'Cash', '2023-12-01', 'British Institute', 'GC', 1),
(39, 'Out', 'JUICES', 'Others', 180, 'Cash', '2023-12-01', 'British Institute', 'GC', 1),
(40, 'Out', 'PATROL', 'Others', 200, 'Cash', '2023-12-01', 'British Institute', 'GC', 1),
(41, 'Out', 'TEA', 'Tea', 630, 'Cash', '2023-12-01', 'British Institute', 'GC', 1),
(42, 'Out', 'LUNCH', 'Lunch', 640, 'Cash', '2023-12-02', 'British Institute', 'GC', 1),
(43, 'Out', 'TEA', 'Tea', 370, 'Cash', '2023-12-02', 'British Institute', 'GC', 1),
(44, 'Out', 'PATROL', 'Others', 100, 'Cash', '2023-12-02', 'British Institute', 'GC', 1),
(45, 'Out', 'NOOR AUTO RENT', 'Others', 500, 'Cash', '2023-12-02', 'British Institute', 'GC', 1),
(46, 'Out', 'TEA', 'Tea', 210, 'Cash', '2023-12-04', 'British Institute', 'GC', 1),
(47, 'Out', 'PATROL', 'Others', 100, 'Cash', '2023-12-04', 'British Institute', 'GC', 1),
(48, 'Out', '2000 CASH FOR MEHVISH', 'Others', 2000, 'Cash', '2023-12-04', 'British Institute', 'GC', 1),
(49, 'Out', 'LUNCH', 'Lunch', 400, 'Cash', '2023-12-05', 'British Institute', 'GC', 1),
(50, 'Out', 'TEA', 'Tea', 240, 'Cash', '2023-12-05', 'British Institute', 'GC', 1),
(51, 'Out', 'NOOR', 'Others', 5000, 'Cash', '2023-12-05', 'British Institute', 'GC', 1),
(52, 'Out', 'PATROL', 'Others', 100, 'Cash', '2023-12-05', 'British Institute', 'GC', 1),
(53, 'Out', 'LUNCH', 'Lunch', 1000, 'Cash', '2023-12-06', 'British Institute', 'GC', 0),
(54, 'Out', 'TEA', 'Tea', 200, 'Cash', '2023-12-06', 'British Institute', 'GC', 0),
(55, 'Out', 'PATROL', 'Others', 100, 'Cash', '2023-12-06', 'British Institute', 'GC', 0),
(56, 'Out', 'WATER', 'Others', 40, 'Cash', '2023-12-06', 'British Institute', 'GC', 0),
(57, 'Out', 'lunch', 'Lunch', 630, 'Cash', '2023-12-07', 'British Institute', 'GC', 0),
(58, 'Out', 'TEA', 'Tea', 160, 'Cash', '2023-12-07', 'British Institute', 'GC', 0),
(59, 'Out', 'PATROL +WATER', 'Others', 120, 'Cash', '2023-12-07', 'British Institute', 'GC', 0),
(60, 'Out', 'LUNCH', 'Lunch', 900, 'Cash', '2023-12-08', 'British Institute', 'GC', 1),
(61, 'Out', 'TEA', 'Tea', 140, 'Cash', '2023-12-08', 'British Institute', 'GC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bisa_office`
--

CREATE TABLE `bisa_office` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(255) DEFAULT NULL,
  `o_srname` varchar(255) DEFAULT NULL,
  `o_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_office`
--

INSERT INTO `bisa_office` (`o_id`, `o_name`, `o_srname`, `o_address`) VALUES
(1, 'British Institute', 'SR', NULL),
(2, 'British Institute', 'GC', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bisa_teacher`
--

CREATE TABLE `bisa_teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) DEFAULT NULL,
  `t_username` varchar(255) DEFAULT NULL,
  `t_pass` varchar(255) DEFAULT NULL,
  `t_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_teacher`
--

INSERT INTO `bisa_teacher` (`t_id`, `t_name`, `t_username`, `t_pass`, `t_status`) VALUES
(1, 'qwerty', 'qwerty', 'qwerty', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bisa_test`
--

CREATE TABLE `bisa_test` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_test`
--

INSERT INTO `bisa_test` (`t_id`, `t_name`) VALUES
(1, 'ABC'),
(2, 'DEF'),
(3, 'GHI');

-- --------------------------------------------------------

--
-- Table structure for table `bisa_test_record`
--

CREATE TABLE `bisa_test_record` (
  `tr_id` int(11) NOT NULL,
  `tr_name` varchar(255) DEFAULT NULL,
  `tr_test` varchar(255) DEFAULT NULL,
  `tr_result` varchar(255) DEFAULT NULL,
  `tr_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_test_record`
--

INSERT INTO `bisa_test_record` (`tr_id`, `tr_name`, `tr_test`, `tr_result`, `tr_date`) VALUES
(3, 'root ABC', 'ABC', '7', '2024-01-03'),
(4, 'rootqwerty', 'ABC', '9', '2024-01-03'),
(5, 'Mubashar', 'GHI', '8', '2024-01-03'),
(7, 'root ABC', 'DEF', '5', '2024-01-03'),
(8, 'root ABC', 'DEF', '5', '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `bisa_user`
--

CREATE TABLE `bisa_user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `u_username` varchar(255) DEFAULT NULL,
  `u_pass` varchar(255) DEFAULT NULL,
  `u_phone` varchar(255) DEFAULT NULL,
  `u_email` varchar(255) DEFAULT NULL,
  `u_status` varchar(255) DEFAULT NULL,
  `u_on` varchar(255) DEFAULT NULL,
  `u_osn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_user`
--

INSERT INTO `bisa_user` (`u_id`, `u_name`, `u_username`, `u_pass`, `u_phone`, `u_email`, `u_status`, `u_on`, `u_osn`) VALUES
(2, 'Sohaib Ahmad', 'sohaib', 'ALLAH786', '03091174540', NULL, 'Supervissor', 'British Institute', 'SR'),
(3, 'Miss Naila', 'naila', 'ALLAH786', '03336545083', NULL, 'Supervissor', 'British Institute', 'SR'),
(4, 'Mubashar Ahmad', '12345', '12345', '03000677203', NULL, 'Admin', 'British Institute', 'SR'),
(5, 'GC Office', 'GC Branch', '123', '03167498378', NULL, 'Data Operator', 'British Institute', 'SR'),
(6, 'Maham', 'maham', 'maham12345', '03001234567', NULL, 'Data Operator', 'British Institute', 'SR'),
(7, 'Mehwish', 'mehwish', '786', '03001234567', NULL, 'Data Operator', 'British Institute', 'GC'),
(8, 'Noor', 'noor', '786', '03001234567', NULL, 'Supervissor', 'British Institute', 'GC');

-- --------------------------------------------------------

--
-- Table structure for table `bisa_visiter`
--

CREATE TABLE `bisa_visiter` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(255) DEFAULT NULL,
  `v_username` varchar(255) DEFAULT NULL,
  `v_pass` varchar(255) DEFAULT NULL,
  `v_phone` varchar(255) DEFAULT NULL,
  `v_sdate` date DEFAULT NULL,
  `v_edate` date DEFAULT NULL,
  `v_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bisa_visiter`
--

INSERT INTO `bisa_visiter` (`v_id`, `v_name`, `v_username`, `v_pass`, `v_phone`, `v_sdate`, `v_edate`, `v_status`) VALUES
(1, 'ABC', 'abc', 'abc', NULL, '2023-12-01', '2024-02-01', 1),
(2, 'DEF', 'def', 'def', NULL, '2024-01-01', '2024-02-02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bisa_admission`
--
ALTER TABLE `bisa_admission`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bisa_course`
--
ALTER TABLE `bisa_course`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `bisa_exam_booked`
--
ALTER TABLE `bisa_exam_booked`
  ADD PRIMARY KEY (`eb_id`);

--
-- Indexes for table `bisa_exam_list`
--
ALTER TABLE `bisa_exam_list`
  ADD PRIMARY KEY (`el_id`);

--
-- Indexes for table `bisa_fee`
--
ALTER TABLE `bisa_fee`
  ADD PRIMARY KEY (`f_roll`);

--
-- Indexes for table `bisa_inquiry`
--
ALTER TABLE `bisa_inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `bisa_inq_main_method`
--
ALTER TABLE `bisa_inq_main_method`
  ADD PRIMARY KEY (`imm_id`);

--
-- Indexes for table `bisa_inq_method`
--
ALTER TABLE `bisa_inq_method`
  ADD PRIMARY KEY (`im_id`);

--
-- Indexes for table `bisa_in_out`
--
ALTER TABLE `bisa_in_out`
  ADD PRIMARY KEY (`io_id`);

--
-- Indexes for table `bisa_office`
--
ALTER TABLE `bisa_office`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `bisa_teacher`
--
ALTER TABLE `bisa_teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `bisa_test`
--
ALTER TABLE `bisa_test`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `bisa_test_record`
--
ALTER TABLE `bisa_test_record`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `bisa_user`
--
ALTER TABLE `bisa_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `bisa_visiter`
--
ALTER TABLE `bisa_visiter`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bisa_admission`
--
ALTER TABLE `bisa_admission`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `bisa_inq_main_method`
--
ALTER TABLE `bisa_inq_main_method`
  MODIFY `imm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bisa_office`
--
ALTER TABLE `bisa_office`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bisa_teacher`
--
ALTER TABLE `bisa_teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bisa_test`
--
ALTER TABLE `bisa_test`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bisa_test_record`
--
ALTER TABLE `bisa_test_record`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bisa_visiter`
--
ALTER TABLE `bisa_visiter`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
