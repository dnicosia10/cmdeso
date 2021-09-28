-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 07:00 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmdeso_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acct`
--

CREATE TABLE `admin_acct` (
  `acct_id` int(11) NOT NULL,
  `acct_fname` char(50) NOT NULL,
  `acct_lname` char(50) NOT NULL,
  `acct_email` char(50) NOT NULL,
  `acct_pass` char(50) NOT NULL,
  `acct_number` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acct`
--

INSERT INTO `admin_acct` (`acct_id`, `acct_fname`, `acct_lname`, `acct_email`, `acct_pass`, `acct_number`) VALUES
(1, 'Dinard', 'Nicosia', 'admin@gmail.com', '217628745133cc6a85f13b217c163936ef250d35', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_banner`
--

CREATE TABLE `admin_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_job_fair_info`
--

CREATE TABLE `admin_job_fair_info` (
  `job_id` int(11) NOT NULL,
  `jobfair_id` int(11) NOT NULL,
  `job_company_name` char(100) NOT NULL,
  `job_company_slogan` char(100) NOT NULL,
  `job_city` char(100) NOT NULL,
  `job_street` char(100) NOT NULL,
  `job_Zip_Code` char(50) NOT NULL,
  `job_About_company` varchar(500) NOT NULL,
  `job_Website` char(50) NOT NULL,
  `job_pinterest` char(50) NOT NULL,
  `job_call` char(50) NOT NULL,
  `job_mail` char(50) NOT NULL,
  `job_facebook` char(50) NOT NULL,
  `job_Google` char(50) NOT NULL,
  `job_twitter` char(50) NOT NULL,
  `job_LinkedIn` char(50) NOT NULL,
  `job_instagram` char(50) NOT NULL,
  `job_archive` char(10) NOT NULL,
  `job_img` varchar(200) NOT NULL,
  `job_img_logo` char(100) NOT NULL,
  `job_log` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_job_fair_info`
--

INSERT INTO `admin_job_fair_info` (`job_id`, `jobfair_id`, `job_company_name`, `job_company_slogan`, `job_city`, `job_street`, `job_Zip_Code`, `job_About_company`, `job_Website`, `job_pinterest`, `job_call`, `job_mail`, `job_facebook`, `job_Google`, `job_twitter`, `job_LinkedIn`, `job_instagram`, `job_archive`, `job_img`, `job_img_logo`, `job_log`) VALUES
(10, 1, 'McDonald\'s', 'The basis was used again, this time, the red arc is now a red background, and the 2003 slogan was re', 'Aurora', 'Tarlac city, Tarlac San Vicente', '2040', '<div>OUR COMPANY</div><div>Jollibee Foods Corporation (JFC) is the Philippinesâ€™ largest Food Service business and is continuously expanding its presence in foreign countries. It has a System Wide Sales of P117.9 billion and a Net Income of P5.4 billion in 2014.</div><div>&nbsp;</div><div>JFC has a total store network of 2,951 stores worldwide as of March 31, 2015. In the Philippines, JFCâ€™s store network totals to 2,335: Jollibee brand 869, Greenwich 216, Chowking 419, Red Ribbon 334, Mang In', 'www.jollibee.com.ph', 'www.jollibee.com.ph', '+63911111111', 'www.jollibee.com.ph', 'www.jollibee.com.ph', 'www.jollibee.com.ph', 'www.jollibee.com.ph', 'www.jollibee.com.ph', 'www.jollibee.com.ph', 'OFF', 'mcdonalds-logo.png', 'mcdonalds.jpg', '2018-04-08'),
(11, 1, 'Jollibee', 'Jollibee Foods Corporation has grown brands that bring delightful dining experience to its customers', 'Metro Manila', 'Ground Floor Jollibee Centre, San Miguel Avenue, Ortigas Center, Pasig City, Metro Manila, Philippin', '2056', '<div>OUR COMPANY</div><div>Jollibee Foods Corporation (JFC) is the Philippinesâ€™ largest Food Service business and is continuously expanding its presence in foreign countries. It has a System Wide Sales of P117.9 billion and a Net Income of P5.4 billion in 2014.</div><div>&nbsp;</div><div>JFC has a total store network of 2,951 stores worldwide as of March 31, 2015. In the Philippines, JFCâ€™s store network totals to 2,335: Jollibee brand 869, Greenwich 216, Chowking 419, Red Ribbon 334, Mang In', 'none', 'none', '+63911111111', 'none', 'none', 'none', 'none', 'none', 'none', 'OFF', 'jollibee-logo.png', 'jollibee.jpg', '2018-04-22'),
(12, 1, 'Magic Star Mall', 'Magic Star Mall has the Supermarket that sells grocery items at a lower price. They have everything', 'Tarlac', 'San Vicente Tarlac city, Tarlac', '20135', 'Magic Star Mall has the Supermarket that sells grocery items at a lower price. They have everything you need from vegetables, meat products, frozen goods, and many more. The Mall also has the Big A Department Store, perfect for your fashion thirst and taste. RTW Shops and Tiangge Section are also available where you can buy garments at a very affordable price. They also have different boutiques that give you more items to choose from. They also have a book store for your office and school needs.', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'OFF', 'magic-logo.jpg', 'magic.jpg', '2018-04-15'),
(13, 1, 'SM Super Malls', 'It started out as Shoemart store in 1958 in Quiapo, Manila, where Filipino-Chinese business magnate,', 'Tarlac', 'Tarlac, Tarlac city', '2035', 'Now SM is the Philippinesâ€™ leading retail empire with over 52 branches across the country today and has developed generations of loyal customers. Showcasing trustworthy, affordable, and world-class products, the multiawarded SM Store (formerly SM Department Store) continues to provide excellent customerservice, general merchandize, lifestyle products, houseware and apparel both offline', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'OFF', 'sm-logo.png', 'SM.jpg', '2018-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `appl_acct`
--

CREATE TABLE `appl_acct` (
  `acct_id` int(11) NOT NULL,
  `acct_fname` char(50) NOT NULL,
  `acct_lname` char(50) NOT NULL,
  `acct_email` char(50) NOT NULL,
  `acct_pass` char(50) NOT NULL,
  `acct_number` char(20) NOT NULL,
  `acct_status` char(50) NOT NULL,
  `acct_date_open` date NOT NULL,
  `acct_date_expire` date NOT NULL,
  `acct_verify` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_acct`
--

INSERT INTO `appl_acct` (`acct_id`, `acct_fname`, `acct_lname`, `acct_email`, `acct_pass`, `acct_number`, `acct_status`, `acct_date_open`, `acct_date_expire`, `acct_verify`) VALUES
(1, 'Dinard', 'Nicosia', 'chii0802@gmail.com', '217628745133cc6a85f13b217c163936ef250d35', '639971695275', 'Active', '2018-06-09', '2019-05-29', ''),
(21, 'Charlotte', 'Esquivel', 'charlotte_esq0802@gmail.com', '9de3cc238adddbe75be2e70572df36bc02f1a31f', '63159798816', 'Active', '2018-05-29', '2019-05-29', ''),
(29, 'Dads', 'Asd', 'asd@yahoo.com', '217628745133cc6a85f13b217c163936ef250d35', '639971695275', 'Active', '2018-05-29', '2019-05-29', 'f1315'),
(30, 'Mark glen', 'Samonte', 'mg_samonte@gmail.com', '217628745133cc6a85f13b217c163936ef250d35', '639971695275', 'Active', '2018-06-02', '2019-06-02', '053f7'),
(31, 'Charlie', 'Nicosia', 'haha@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '63923625643', 'Inactive', '2018-06-06', '2019-06-06', '3d1f6');

-- --------------------------------------------------------

--
-- Table structure for table `appl_apply`
--

CREATE TABLE `appl_apply` (
  `apply_id` int(11) NOT NULL,
  `onjob_id` int(11) NOT NULL,
  `appl_id` int(11) NOT NULL,
  `apply_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appl_info`
--

CREATE TABLE `appl_info` (
  `appl_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `appl_fname` char(100) NOT NULL,
  `appl_lname` char(100) NOT NULL,
  `appl_mname` char(100) NOT NULL,
  `appl_img` char(100) NOT NULL,
  `appl_birthp` varchar(200) NOT NULL,
  `appl_birthd` date NOT NULL,
  `appl_age` char(10) NOT NULL,
  `appl_nationality` char(100) NOT NULL,
  `appl_religion` char(100) NOT NULL,
  `appl_sex` char(30) NOT NULL,
  `appl_civils` char(30) NOT NULL,
  `appl_prov` varchar(100) NOT NULL,
  `appl_street` varchar(100) NOT NULL,
  `appl_zipc` char(50) NOT NULL,
  `appl_email` char(50) NOT NULL,
  `appl_contactn` char(20) NOT NULL,
  `appl_sname` char(50) NOT NULL,
  `appl_disability` char(50) NOT NULL,
  `appl_employed` char(50) NOT NULL,
  `appl_employed_status` char(50) NOT NULL,
  `appl_educational_attain` char(100) NOT NULL,
  `appl_log_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_info`
--

INSERT INTO `appl_info` (`appl_id`, `acct_id`, `appl_fname`, `appl_lname`, `appl_mname`, `appl_img`, `appl_birthp`, `appl_birthd`, `appl_age`, `appl_nationality`, `appl_religion`, `appl_sex`, `appl_civils`, `appl_prov`, `appl_street`, `appl_zipc`, `appl_email`, `appl_contactn`, `appl_sname`, `appl_disability`, `appl_employed`, `appl_employed_status`, `appl_educational_attain`, `appl_log_date`) VALUES
(18, 1, 'Dinard', 'Nicosia', 'Mariano', 'C360_2018-02-02-16-03-21-706.jpg', 'Tarlac city', '0000-00-00', '21', 'Filipino', 'Roman catholic', 'Male', 'Single', 'Select province', 'Tarlac City, San Vicente', '2035', 'chii0802@gmail.com', '639971695275', ' Jr.', 'None', 'Unemployed', 'New Entrant/Fresh Graduate', 'College Graduate', '2018-04-29'),
(24, 21, 'Charlotte jean', 'Esquivel', 'S.', 'img-4.jpg', 'Cavite', '2000-03-06', '18', 'Filipino', 'Roman catholic', 'Female', 'Single', 'Tarlac', 'San Manuel, Brgy. Augustin', '2000', 'Charlotte_esq@gmail.com', '639123456789', '', 'None', 'Unemployed', 'New Entrant/Fresh Graduate', 'College Level', '2018-05-29'),
(25, 30, 'Mark glenn', 'Samonte', 'S', 'img-3.jpg', 'Tarlac city', '1988-08-02', '29', 'Filipino', 'Roman catholic', 'Male', 'Single', 'Tarlac', 'Tarlac', '2000', 'mg_samonte@gmail.com', '639971695275', '', 'None', 'Unemployed', 'New Entrant/Fresh Graduate', 'College Level', '2018-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `appl_info_edu`
--

CREATE TABLE `appl_info_edu` (
  `edu_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `edu_name` char(100) NOT NULL,
  `edu_title` char(50) NOT NULL,
  `edu_addr` varchar(200) NOT NULL,
  `edu_date_grad_start` date NOT NULL,
  `edu_date_grad_end` date NOT NULL,
  `edu_course` char(100) NOT NULL,
  `edu_course_major` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_info_edu`
--

INSERT INTO `appl_info_edu` (`edu_id`, `acct_id`, `edu_name`, `edu_title`, `edu_addr`, `edu_date_grad_start`, `edu_date_grad_end`, `edu_course`, `edu_course_major`) VALUES
(1, 1, 'Laur Central School', 'Elementary', 'Laur Nueva Ecija Brgy 4', '2004-05-30', '2010-05-30', '', ''),
(7, 1, 'St. Stephen\'s Academy', 'Highschool', 'Laur Nueva Ecija Brgy 4', '2010-05-30', '2014-07-25', '', ''),
(8, 1, 'Tarlac State University', 'College', 'San Vicente Tarlac City', '2014-05-30', '2018-03-20', 'Bachelor of Information Technology', 'Programming'),
(11, 0, 'Tarlac State University', 'Vocational', 'Tarlac, San Vicente', '2014-01-02', '2017-01-02', 'Bachelor of Teacher Education', 'Computer'),
(12, 4, 'Laur Central School', 'Elementary', 'Laur Nueva Ecija Brgy 4', '2004-05-30', '2010-05-30', '', ''),
(13, 4, 'Tarlac State University', 'Vocational', 'Tarlac, San Vicente', '2014-01-02', '2017-01-02', 'Bachelor of Teacher Education', 'Computer'),
(15, 4, 'Tarlac State University', 'Vocational', 'Tarlac, San Vicente', '2014-01-02', '2017-01-02', 'Bachelor of Teacher Education', 'Programming'),
(16, 4, 'try8:10', 'Master\'s Degree', 'try', '2014-01-01', '2015-01-01', 'Bachelor of Maritime', 'Electrical'),
(17, 5, 'Laur Central School', 'Elementary', 'McArthur Highway, Aguso , 2300 Tarlac City , Tarlac', '2005-04-10', '2005-03-04', '', ''),
(18, 5, 'Tarlac State University', 'Bachelor\'s Degree', 'San Vicente Pulis kalinga', '2014-11-25', '2018-05-27', 'Bachelor of Information Technology', 'Programming'),
(20, 2, 'asdasdasd', 'Bachelor\'s Degree', 'asdasdsadas', '2018-04-04', '2018-04-05', 'Bachelor of Information Technology', 'Programming'),
(21, 13, 'Tarlac State University', 'Bachelor\'s Degree', 'Tarlac City, Tarlac', '2015-01-02', '2018-05-30', 'Bachelor of Business Administration and Related Courses', 'Accountancy'),
(22, 14, 'Tarlac State University', 'Bachelor\'s Degree', 'Tarlac City, Tarlac', '2015-01-20', '2018-05-19', 'Bachelor of Information Technology', 'Programming'),
(23, 16, 'Tarlac State University', '', 'Tarlac City, Tarlac', '2013-11-26', '2018-10-25', '', ''),
(24, 16, 'Tarlac State University', '', 'Tarlac City, Tarlac', '2013-11-26', '2018-10-25', '', ''),
(25, 16, 'Tarlac State University', '', 'Tarlac City, Tarlac', '2013-11-26', '2018-10-25', '', ''),
(26, 16, 'Tarlac State University', '', 'Tarlac City, Tarlac', '2013-11-26', '2018-10-25', '', ''),
(27, 16, 'Tarlac State University', 'Vocational', 'Tarlac City, Tarlac', '2013-11-26', '2018-10-25', '', ''),
(28, 16, 'Tarlac State University', 'Vocational', 'Tarlac City, Tarlac', '2013-11-26', '2018-10-25', '', ''),
(29, 16, 'Tarlac State University', 'Vocational', 'none', '2014-08-27', '2017-09-29', '', ''),
(30, 17, 'Tarlac State University', 'Bachelor\'s Degree', 'Tarlac City, Tarlac', '2013-06-29', '2018-10-29', 'Bachelor of Science and Math', 'Agribusiness/Management'),
(31, 21, 'Tarlac State University', 'Bachelor\'s Degree', 'Tarlac city, Tarlac', '2014-01-02', '2018-05-20', 'Bachelor of Information Technology', 'Animation'),
(32, 30, 'Tarlac State University', 'Bachelor\'s Degree', 'Tarlac, Tarlac City', '2014-06-04', '2018-06-08', 'Bachelor of Information Technology', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `appl_info_exp`
--

CREATE TABLE `appl_info_exp` (
  `exp_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `exp_title` char(50) NOT NULL,
  `exp_company` char(50) NOT NULL,
  `exp_position` char(50) NOT NULL,
  `exp_desc` varchar(400) NOT NULL,
  `exp_date_start` date NOT NULL,
  `exp_date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_info_exp`
--

INSERT INTO `appl_info_exp` (`exp_id`, `acct_id`, `exp_title`, `exp_company`, `exp_position`, `exp_desc`, `exp_date_start`, `exp_date_end`) VALUES
(1, 1, 'Interm', 'Management Information System', 'Hardware Technician', 'Cabanatuan ', '2017-03-31', '2018-03-31'),
(2, 1, '', 'On Semiconductor', 'Programmer', 'Manila city', '2013-04-18', '2015-04-18'),
(3, 1, '', 'Google', 'Website Designer', 'Ilocos sur', '2013-01-04', '2014-01-04'),
(4, 4, 'Interm', 'Management Information System', 'Hardware Technician', 'Cabanatuan ', '2017-03-31', '2018-03-31'),
(5, 4, '', 'On Semiconductor', 'Programmer', 'Manila city', '2013-04-18', '2015-04-18'),
(6, 4, '', 'Google', 'Website Designer', 'Ilocos sur', '2013-01-04', '2014-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `appl_info_ref`
--

CREATE TABLE `appl_info_ref` (
  `ref_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `ref_fname` char(50) NOT NULL,
  `ref_lname` char(50) NOT NULL,
  `ref_mname` char(50) NOT NULL,
  `ref_company` char(50) NOT NULL,
  `ref_position` char(50) NOT NULL,
  `ref_address` varchar(200) NOT NULL,
  `ref_contact` char(50) NOT NULL,
  `ref_image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_info_ref`
--

INSERT INTO `appl_info_ref` (`ref_id`, `acct_id`, `ref_fname`, `ref_lname`, `ref_mname`, `ref_company`, `ref_position`, `ref_address`, `ref_contact`, `ref_image`) VALUES
(1, 1, 'Edward', 'Sturch', 'Mania', 'Google', 'Hardware ceo', 'Tarlac City, San Vicente Pulis kaling subd.', '+631233123123', 'ABAGAT, Rex Kenneth Catacutan.png'),
(2, 1, 'Charl', 'Nicosia', 'Mariano', 'Miso', 'Hardware technician', 'San Vicente, Tarlac City', '+631111111111', ''),
(3, 1, 'Dinard', 'Nicosia', 'Mariano', 'webms', 'Head Of Software', 'San Vicente, Tarlac City', '+631111111111', ''),
(4, 0, 'Chi', 'Cha', 'Chu', 'Tsu', 'Prog', 'Tarlac, San Vicente', '+639159798816', ''),
(5, 0, 'Din', 'Dan', 'Dun', 'Din', 'Dan', 'dun', '+631111111111', ''),
(6, 4, 'Din', 'Dan', 'Dun', 'Din', 'Dan', 'dun', '+631111111111', ''),
(7, 13, 'John', 'Wolf', 'Fang', 'None', 'None', 'none', 'none', ''),
(8, 14, 'Charlotte jean', 'Nicosia', 'D.', 'None', 'None', 'Tarlac City, Tarlac', '639971695275', ''),
(9, 16, 'Charlotte jean', 'Sample2', 'Fang', 'None', 'None', 'Tarlac City, Tarlac', '639971695275', ''),
(10, 16, 'Charlotte jean', 'Sample2', 'Fang', 'None', 'None', 'Tarlac City, Tarlac', '639971695275', ''),
(11, 17, 'Charlotte jean', 'Sample2', 'Fang', 'None', 'None', 'Tarlac City, Tarlac', '639971695275', ''),
(12, 21, 'Dinard', 'Nicosia', 'D', 'Miso', 'Ojt', 'San Vicente', '639123456789', ''),
(13, 30, 'Mark glen', 'Samonte', 'S', 'Google', 'Manager', 'Tarlac, Tarlac City', '639159798818', '');

-- --------------------------------------------------------

--
-- Table structure for table `appl_info_ref_job`
--

CREATE TABLE `appl_info_ref_job` (
  `ref_job_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `ref_job1` char(100) NOT NULL,
  `ref_job2` char(100) NOT NULL,
  `ref_job3` char(100) NOT NULL,
  `ref_job_loc1` char(50) NOT NULL,
  `ref_job_loc2` char(50) NOT NULL,
  `ref_job_loc3` char(50) NOT NULL,
  `ref_job_municipality1` char(100) NOT NULL,
  `ref_job_municipality2` char(100) NOT NULL,
  `ref_job_municipality3` char(100) NOT NULL,
  `ref_job_industry1` char(50) NOT NULL,
  `ref_job_industry2` char(50) NOT NULL,
  `ref_job_industry3` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_info_ref_job`
--

INSERT INTO `appl_info_ref_job` (`ref_job_id`, `acct_id`, `ref_job1`, `ref_job2`, `ref_job3`, `ref_job_loc1`, `ref_job_loc2`, `ref_job_loc3`, `ref_job_municipality1`, `ref_job_municipality2`, `ref_job_municipality3`, `ref_job_industry1`, `ref_job_industry2`, `ref_job_industry3`) VALUES
(1, 1, 'Programmer', 'Front-end', 'Back-end', 'Tarlac', 'Nueva Ecija', 'Bohol', 'Tarlac City', 'Laur', '', 'Computer Systems Design Services Companies', 'Computer Integrated Systems Design Companies', 'Computer Security Companies'),
(2, 2, 'Programmer', 'Front-end', 'Back-end', 'Tarlac', 'Nueva Ecija', 'Bohol', 'Tarlac City', 'Laur', '', 'Computer Systems Design Services Companies', 'Computer Integrated Systems Design Companies', 'Computer Security Companies'),
(8, 16, 'Technician', 'Management', 'Accounting', 'Agusan del Sur', 'Agusan del Norte', 'Agusan del Sur', 'Adams', 'Agdangan', 'Agdangan', 'Aerospace Engineering Companies', 'Aerospace Companies', 'Analytical Laboratory Instrument Manufacturing Com'),
(9, 17, 'Technician', 'Management', 'Accounting', 'Agusan del Sur', 'Aklan', 'Albay', 'Adams', 'Agdangan', 'Agdangan', 'Aerospace Engineering Companies', 'Aerospace Companies', 'Aerospace Companies'),
(10, 17, 'Technician', 'Management', 'Accounting', 'Agusan del Sur', 'Aklan', 'Albay', 'Adams', 'Agdangan', 'Agdangan', 'Aerospace Engineering Companies', 'Aerospace Companies', 'Aerospace Companies'),
(11, 21, 'Clerk', 'Manager', 'Front-end', 'Tarlac', 'Metro Manila', 'Tarlac', 'San Isidro', 'Marikina', 'San Manuel', 'Computer Companies', 'Computer Systems Design Services Companies', 'Computer Security Companies'),
(12, 30, 'Clerk', 'Front-End', '', 'Tarlac', 'Tarlac', '', 'Tarlac City', '', '', 'Aircraft Parts And Auxiliary Equipment, NEC Compan', 'Animation Companies', '');

-- --------------------------------------------------------

--
-- Table structure for table `appl_info_seminar`
--

CREATE TABLE `appl_info_seminar` (
  `seminar_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `seminar_title` char(100) NOT NULL,
  `seminar_date` date NOT NULL,
  `seminar_addr` char(200) NOT NULL,
  `seminar_orga` char(100) NOT NULL,
  `seminar_vp` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_info_seminar`
--

INSERT INTO `appl_info_seminar` (`seminar_id`, `acct_id`, `seminar_title`, `seminar_date`, `seminar_addr`, `seminar_orga`, `seminar_vp`) VALUES
(1, 1, 'ICTD Seminar Series IV', '2018-03-30', 'San Isidro Campus, Tarlac City', 'College Of Computer Studies', '5th Floor AVR. , TSU – CCS Bldg.'),
(2, 1, 'SDMIT', '2014-04-02', 'San Vicente, Tarlac City', 'College Of Computer Studies', '2th Floor AVR. , TSU – CCS Bldg.'),
(3, 0, 'example seminar title', '2016-01-02', 'San Vicente Pulis kalinga', 'CCS', 'TSU San Isidro'),
(4, 4, 'ICTD Seminar Series IV', '2018-03-30', 'San Isidro Campus, Tarlac City', 'College Of Computer Studies', '5th Floor AVR. , TSU – CCS Bldg.'),
(5, 4, 'SDMIT', '2014-04-02', 'San Vicente, Tarlac City', 'College Of Computer Studies', '2th Floor AVR. , TSU ï¿½ CCS Bldg.'),
(6, 4, 'example seminar title', '2016-01-02', 'San Vicente Pulis kalinga', 'CCS', 'TSU San Isidro');

-- --------------------------------------------------------

--
-- Table structure for table `appl_info_working`
--

CREATE TABLE `appl_info_working` (
  `work_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `work_title` char(50) NOT NULL,
  `work_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_info_working`
--

INSERT INTO `appl_info_working` (`work_id`, `acct_id`, `work_title`, `work_desc`) VALUES
(1, 1, '', 'I\'m Striving for what knowledge I need to know in this organization and I have many attributes that a employee should have'),
(2, 1, 'hard work', 'Working Qualifications'),
(3, 1, 'Working skills', 'Web developer'),
(4, 1, 'Working Qualifications', 'abc'),
(5, 1, 'Objectives', 'To obtain a position that will enable me to use my strong organizational skills, educational background and ability to work well with people'),
(6, 1, 'Working skills', 'Backend Javascrift'),
(7, 0, 'Working Qualifications', 'none'),
(8, 0, 'Objectives', 'none'),
(9, 0, 'Working skills', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `jobfair_info`
--

CREATE TABLE `jobfair_info` (
  `jobfair_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `jobfair_title` char(100) NOT NULL,
  `jobfair_date` date NOT NULL,
  `jobfair_datetime_start` time NOT NULL,
  `jobfair_datetime_end` time NOT NULL,
  `jobfair_address` varchar(300) NOT NULL,
  `jobfair_archive` char(10) NOT NULL,
  `jobfair_img` char(100) NOT NULL,
  `jobfair_log` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobfair_info`
--

INSERT INTO `jobfair_info` (`jobfair_id`, `acct_id`, `jobfair_title`, `jobfair_date`, `jobfair_datetime_start`, `jobfair_datetime_end`, `jobfair_address`, `jobfair_archive`, `jobfair_img`, `jobfair_log`) VALUES
(3, 1, 'pan', '0000-00-00', '12:00:00', '22:57:00', 'CITY MALL, Tarlac City', 'OFF', 'banner2.jpg', '2018-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `job_appl_info`
--

CREATE TABLE `job_appl_info` (
  `job_appl_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `onjob_id` int(11) NOT NULL,
  `job_appl_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_appl_info`
--

INSERT INTO `job_appl_info` (`job_appl_id`, `acct_id`, `onjob_id`, `job_appl_date`) VALUES
(17, 1, 10, '2018-05-07 00:46:31'),
(18, 2, 11, '2018-05-14 10:14:22'),
(19, 2, 10, '2018-05-14 10:27:19'),
(20, 17, 18, '2018-05-20 15:00:26'),
(21, 17, 19, '2018-05-20 15:00:28'),
(22, 1, 1, '2018-05-28 01:27:59'),
(23, 1, 2, '2018-06-03 11:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `job_onjob_info`
--

CREATE TABLE `job_onjob_info` (
  `onjob_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `jobfair_id` int(11) NOT NULL,
  `onjob_available` int(11) NOT NULL,
  `onjob_title` char(100) NOT NULL,
  `onjob_position` char(100) NOT NULL,
  `onjob_req_course` char(100) NOT NULL,
  `onjob_status` char(50) NOT NULL,
  `onjob_archive` char(10) NOT NULL,
  `onjob_location` char(100) NOT NULL,
  `onjob_datetime` datetime NOT NULL,
  `onjob_req` varchar(800) NOT NULL,
  `onjob_summary` varchar(10000) NOT NULL,
  `onjob_type` char(100) NOT NULL,
  `onjob_province` char(50) NOT NULL,
  `onjob_municipality` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_onjob_info`
--

INSERT INTO `job_onjob_info` (`onjob_id`, `job_id`, `jobfair_id`, `onjob_available`, `onjob_title`, `onjob_position`, `onjob_req_course`, `onjob_status`, `onjob_archive`, `onjob_location`, `onjob_datetime`, `onjob_req`, `onjob_summary`, `onjob_type`, `onjob_province`, `onjob_municipality`) VALUES
(1, 11, 2, 0, 'Restaurant Marketing Manager Trainee', 'Programmers', 'Bachelor of Information Technology', 'Active', 'OFF', 'Mandaluyong, National Capital Region', '2018-04-18 08:00:00', '<ul><li>Minimum education level: BachelorÂ´s Degree</li></ul><ul><li>Language(s): Tagalog ,English</li></ul><ul><li>Knowledge: Microsoft Excel</li></ul><ul><li>Availability for travel: No</li></ul><ul><li>Availability for change of residence: No</li></ul>', '<div>Demonstrates and reinforces the leadership behaviors and basic people minimums (uniform, crew schedules, etc.) necessary to gain commitment from crew and leadership</div><div>Executes a plan, based on an employee commitment measurement, to increase employee\'s loyalty satisfaction and pride with the McDonald\'s experience</div><div>Knows, enforces and educates crew on all appropriate personnel policies, labor laws, security and safety procedures</div><div>Uses basic human relations, communica', 'Full Time', 'sample', 'sample1'),
(2, 10, 2, 0, 'Facilities Officer', 'Front-ends', 'Bachelor of Information Technology', 'Active', 'OFF', 'Ground Floor Jollibee Centre, San Miguel Avenue, Ortigas Center, Pasig City, Metro Manila, Philippin', '2018-02-04 02:20:00', '<ul><li>Registered Electrical/Mechanical/Civil Engineer or equivalent.</li><li>At least 3-4 years of working experience in the related field is required for this position.<br></li><li>Applicant must be willing to be based in&nbsp;</li></ul>', 'Effective supervision and management of third party vendor in the delivery of Building/Facilities Management, Repair and Maintenance of Equipment at the Common Area, Janitorial services, and the like.Tracks and monitors issues reported, as well as achievement of leadtime and quality of closure of issues;&nbsp;<span>Acts as Project Lead in delivery of Facilities related initiatives such as 5S, Compliance and Risk Assessment, etc.;&nbsp;<br></span>Evaluates quality improvement and recommends', 'Full Time', 'Nueva Ecija', 'Laur'),
(3, 12, 2, 0, 'Office Staff', 'Back-end', 'Bachelor of Business Administration and Related Courses', 'Active', 'OFF', 'Manila, National Capital Region', '2018-04-27 03:46:57', '<ul><li>Language(s): Tagalog</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul>', '<ul><li>Male or Female, single or married.<br>Applicants must be a Bachelor\'s Degree Graduate.<br>Must be proficient in excel<br>Responsible in coordination with different depots/warehouses.<br>Responsible in monitoring of stocks.<br>Coordinates with suppliers.<br>Will do task as may be assigned.<br>Willing to work in ParaÃ±aque City<br><br></li><li>Number of vacancies: 5</li></ul>', 'Full Time', 'Nueva Ecija', 'Laur'),
(4, 10, 2, 0, 'Office Staff', 'Billing Clerk', 'Bachelor\'s holder', 'Active', 'OFF', 'Manila, National Capital Region', '2018-04-27 03:51:58', '<ul><li>Language(s): Tagalog</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul>', '<ul><li>Male or female<br><br>Applicants must be a Bachelor\'s Degree Graduate in accounting/financial management or any business related course ( 4 Years Course Graduate ).<br><br>Applicants MUST have working experience in related field.<br><br>Willing to render overtime and work even holidays.<br><br>Willing to be assigned in Marcelo, ParaÃ±aque City<br><br></li><li>Number of vacancies: 1</li></ul>', 'Part Time', 'Agusan del Norte', 'Adams'),
(14, 13, 2, 0, 'Inventory Clerk', 'Cycle Count/SAP User', 'Bachelor of Information Technology', 'Active', 'OFF', 'ParaÃ±aque, National Capital Region', '2018-04-27 03:53:42', 'Male or Female, single or married.<br>Applicants must be a Bachelor\'s Degree Graduate.<br>Must be proficient in excel<br>Responsible in coordination with different depots/warehouses.<br>Responsible in monitoring of stocks.<br>Coordinates with suppliers.<br>Will do task as may be assigned.<br><span>Willing to work in ParaÃ±aque City<br></span><ul><li>Number of vacancies: 5</li></ul>', '<ul><li>Minimum education level: BachelorÂ´s Degree</li><li>Years of experience: 1</li><li>Language(s): Tagalog</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul>', 'Full Time', 'Nueva Ecija', 'Nueva Ecija'),
(15, 10, 2, 0, 'HR Admin Staff', 'Admin Staff', 'Bachelor\'s holder', 'Active', 'OFF', 'Muntinlupa, National Capital Region', '2018-04-27 03:55:13', '<ul><li>Minimum education level: BachelorÂ´s Degree</li><li>Years of experience: 1</li><li>Language(s): Tagalog</li><li>Knowledge: Microsoft Excel</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul><div></div><div></div>', '<ul><li>Candidate must be a Bachelor\'s Degree Graduate in Psychology, Behavioral Science, Human Resource ,Office Administration/Secretarial or equivalent.<br>Preferably female,&nbsp;<br>With exposure on all HR Facets is an advantage.<br>Must be proficient in computer use ( Excel,Word and PPT)<br>Must have pleasing personality.<br>Have an interpersonal and communication skills.<br>Will do clerical and administrative task<br>Must be willing to be deployed in Paranaque City.<br><br></li><li>Number ', 'Full Time', 'Agusan del Norte', 'Adams'),
(16, 11, 2, 0, 'Warehousing', 'Assistant Supervisor', 'Bachelor\'s holder', 'Active', 'OFF', 'ParaÃ±aque, National Capital Region', '2018-04-27 03:59:43', '<ul><li>Minimum education level: BachelorÂ´s Degree</li><li>Years of experience: 1</li><li>Language(s): Tagalog</li><li>Knowledge: Microsoft Excel, Microsoft Outlook, Microsoft PowerPoint, Microsoft Word</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul>', '<ul><li>Candidate should be a Bachelorâ€™s Degree Graduate in Engineering or equivalent.<br>Supervisory or Assistant Supervisor experience in related field is required<br>Knowledgeable in SAP is also an advantage<br>Has a good communication and analytical skills.<br>Proficient in computer use and operation; must be proficient in MS Excel.<br><br></li><li>Number of vacancies: 1</li></ul>', 'Full Time', 'Agusan del Sur', 'Abuyog'),
(17, 10, 2, 0, 'Staff', 'Sale Staff', 'Highschool Graduate', 'Active', 'OFF', 'Tarlac, National Capital Region', '2018-04-27 04:12:11', '<ul><h3>Requirements</h3><li>Language(s): Tagalog</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul>', '<ul><li>1.	To assist in selling vehicles of a fortune global 500 brand based in Makati.<br>2.	Responsible in generating sales , prospects and leads, soliciting referrals, building client based &amp; promoting the product.<br>3.	Prepares and process sales documents.<br>4. Assists in calling and follow up of sales prospects.<br>4.	Assists all marketing event in support of sales.<br>QUALIFICATIONS<br><br>1.	Candidate must possess at least a Bachelorâ€™s/College Degree or vocational with automotive ', 'Full Time', 'Bulacan', 'Alamada'),
(18, 12, 2, 0, 'Staff', 'Accounting  Staff', 'Bachelor of Business Administration and Related Courses', 'Active', 'OFF', 'Tarlac, National Capital Region', '2018-04-27 04:13:57', '<ul><li>Language(s): Tagalog</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul>', '<ul><li>Job Summary:<br>Reporting directly under the Accounting Senior Manager, the position is responsible in processing accounting transactions in an accurate and timely manner; maintains accurate and complete accounting documents and records; issues accurate and complete accounting and financial reports.&nbsp;<br>Job Specification:<br>Must be a graduate of B.S. Accountancy or accounting related course. Computer literate. Fresh graduates are welcome.<br>Must be systematic, neat and orderly. Wi', 'Full Time', 'Aklan', 'Adams'),
(19, 13, 2, 0, 'General Accounting Staff', 'Accounting Staff', 'Bachelor of Business Administration and Related Courses', 'Active', 'OFF', 'Tarlac, National Capital Region', '2018-04-27 04:15:49', '<div><b><br></b></div><ul><li>Language(s): Tagalog</li><li>Availability for travel: No</li><li>Availability for change of residence: No</li></ul>', '<ul><li>Reporting directly under the Accounting Senior Manager, the position is responsible in processing accounting transactions in an accurate and timely manner; maintains accurate and complete accounting documents and records; issues accurate and complete accounting and financial reports.&nbsp;<br>Job Specification:<br>Must be a graduate of B.S. Accountancy. With at least 1 year experience doing accounting works. Computer literate. Fresh graduates are welcome.<br>Must be systematic, neat and ', 'Full Time', 'Agusan del Sur', 'Agdangan'),
(24, 10, 0, 0, 'asdas', 'asdas', 'High School Level', 'Active', 'OFF', 'asdas', '2018-06-09 07:42:50', 'asd', 'Please read these Terms of Use carefully, they contain important information about your rights and obligations in accessing and using OnlineJobs.ph  (\"our website\"). These Terms of Use govern your use of our website and your subscription to the services available through our website (the \"Service\", \"Service Account\") provided by Flowing Air Studios LLC, 770 E Main St. #250, Lehi, UT 84043, 1-888-416-0925 (\"OnlineJobs\", \"OnlineJobs.ph \", \"we\" or \"us\") to you.\r\n            Each time you use our website, you agree to be bound by these Terms of Use, as amended from time to time with or without notice to you. If you are entering into this Terms of Use on behalf of a company or other legal entity, you represent you have the authority to bind such entity to these Terms of Use, in which case the terms \"you\" or \"your\" shall refer to such entity. If you do not have such authority, or if you do not agree with these Terms of Use, you may not use our website or Service. Please see our Privacy Statement, which is incorporated into these Terms of Use by reference.\r\n            <h3> 1. our service</h3>\r\n            1.1 Our website and Service provided to you through our website are provided on an AS IS basis. You agree that OnlineJobs exclusively reserves the right and may, at any time and without notice and any liability to you, modify or discontinue this website and its services or delete the data you provide, whether temporarily or permanently. OnlineJobs shall have no responsibility or liability for the timeliness, deletion, failure to store, inaccuracy, or improper delivery of any data or information. OnlineJobs also reserves the right to control the amount of sales to the service at its sole discretion.\r\n            1.2 Unless explicitly stated, any new features, including new content and Services, shall be subject to these Terms of Use.\r\n            1.3 If any modification of the Service is unacceptable to you, your only recourse is to cancel your subscription. Your continued use of the Service following our posting of a change to the conditions or the website will constitute a binding acceptance of that change.\r\n            <h3> 2. YOUR RESPONSIBILITIES AND REGISTRATION OBLIGATIONS</h3>\r\n            In order to purchase the Service, you must register on our site, agree to provide truthful information when requested, be at least the age of eighteen (18) or older, and follow the purchase procedure displayed in \"Order/Pricing\" and described below in Clause 5. When registering, you explicitly agree to our Terms of Use and as may be modified by us from time to time and available here.\r\n            <h3> 3. PRIVACY POLICY</h3>\r\n            Registration data and other personally identifiable information that we may collect is subject to the terms of our Privacy Statement.\r\n            <h3> 4. SERVICE ACCOUNT AND PASSWORD</h3>\r\n            4.1 The Service is supplied to you via a Service Account in consideration of the payment of the price defined in Clause 5.1.\r\n            4.2 After receipt of your payment in accordance with Clause 5.4, OnlineJobs will create a Service Account in your name by which you will be permitted to access the Service in accordance with these Terms of Use.\r\n            4.3 The Service Account is accessed by an individual password that will be sent to you on receipt of payment of the price and in accordance with these Terms of Use.\r\n            4.4 You are responsible to maintain the confidentiality of your password and shall be responsible for all uses via your password, whether authorized or unauthorized by you. You agree to immediately notify us of any unauthorized use of your Service Account or password.\r\n            4.5 When using a public computer, you must sign out when you have finished using our website.\r\n            4.6 You may only open one Service Account and you agree that the operation of your Service Account is exclusive to you. Furthermore you agree that only you will receive the Services via your Service Account. NOTE: This includes Recruiting agencies. If your company uses our service to hire a worker for a DIFFERENT company....i.e., a client of your agency, that is considered a breach of our terms. You may only hire for your OWN company, not for that of a client, or any other 3rd party.\r\n            4.7 By allowing others to use your Service Account and/or password you will be in breach of these terms and conditions and OnlineJobs will be entitled to terminate this Agreement in accordance with Clause 10.\r\n            4.8 Delivery times of your account should be within 10 minutes of ordering. However, this delivery time is an estimate and may vary due to exceptional or unforeseen circumstances.\r\n            4.9 In the unlikely event that you have not received access to your account within 30 minutes from acceptance of your order, or if you have any complaints, please contact us via support@OnlineJobs.ph  or by regular mail to OnlineJobs,  770 E Main St. #250, Lehi, UT 84043.\r\n            <h3> 5. PRICES AND PAYMENT</h3>\r\n            5.1 Prices charged are as shown on the website at the time and date of your purchase. We may change the price of the Service before you place an order for a subscription. We try to ensure that the prices displayed on our website are accurate but the price on your order will need to be validated by us as part of the acceptance procedure. We will inform you if a Service\'s price is higher than stated in your order and you may cancel the order.\r\n            5.2 Prices are shown in US Dollars on the website.\r\n            5.3 All the prices shown are inclusive of any taxes.\r\n            5.4 Before your order can be accepted we must receive payment in full. Payment shall only be deemed to have occurred once we are in receipt of cleared funds.\r\n            5.5 When ordering via the website, you must pay by credit or debit card at the time of the order. We accept Visa, MasterCard, American Express, and Discover.\r\n            5.6 We do not accept payment by mail or fax.\r\n            5.7 You confirm that all details provided by you to us for the purpose of purchasing the Service will be correct. We reserve the right to obtain validation of your credit or debit card details before providing the Service to you.\r\n            5.8 We may refuse any order placed by you.\r\n            <h3> 6. REFUNDS</h3>\r\n            You expressly acknowledge that all Services are non-refundable. However, in accordance with our 100% satisfaction guarantee, we will honor refunds for customers that have a legitimate grievance against the site. Only the most recent subscription payment will be refunded (i.e., the last payment made to OnlineJobs.ph  will be the only payment refunded), and no payment older than 31 days will be refunded. One refund per customer.\r\n            <h3> 7. LICENSE GRANT &amp; RESTRICTIONS</h3>\r\n            7.1 Upon satisfactory payment as described in Article 5, OnlineJobs hereby grants you a non-exclusive, non-transferable, worldwide right to use the Service, solely for your own internal business purposes, subject to the terms and conditions of this Terms of Use. All rights not expressly granted to you are reserved by OnlineJobs.\r\n            7.2 You may not access the Service if you are a direct competitor of OnlineJobs. In addition, you may not access the Service for purposes of monitoring its availability, performance or functionality, or for any other benchmarking or competitive purposes. You are also prohibited from enticing or inviting users to signup or use another website.\r\n            7.3 You shall not (i) license, sublicense, sell, resell, transfer, assign, distribute, or otherwise commercially exploit or make available to any third party the Service in any way; (ii) modify or make derivative works based upon the Service; (iii) create Internet \"links\" to the Service or \"frame\" or \"mirror\" the Service on any other server or wireless or Internet-based device; or (iv) reverse engineer or access the Service in order to (a) build a competitive product or service, (b) build a product using similar ideas, features, functions or graphics of the Service, or (c) copy any ideas, features or graphics of the Service.\r\n            7.4 You are only permitted to use the Service personally and agree to do so without the use of any automated means including but not limited to the use of robotic tools except where permission has been expressly granted by OnlineJobs.\r\n            7.5 You shall not: (i) send or store material containing software viruses, worms, Trojan horses or other harmful computer code, files, scripts, agents or programs; (ii) interfere with or disrupt the integrity or performance of the Service or the data contained therein; or (iii) attempt to gain unauthorized access to the Service or its related systems or networks.\r\n            <h3> 8. INTELLECTUAL PROPERTY OWNERSHIP</h3>\r\n            Flowing Air Studios LLC alone (and its licensors, where applicable) shall own all right, title and interest, including all related intellectual property rights including unpatented inventions, patent applications, patents, design rights, copyrights, trademarks, service marks, trade names, domain name rights, know-how and other trade secret rights, and all other intellectual property rights, derivatives thereof, and forms of protection of a similar nature anywhere in the world, in and to the OnlineJobs.ph  technology (including software, hardware, products, processes, algorithms, user interfaces, know-how, techniques, designs and other tangible or intangible technical material or information) and Service and any suggestions, ideas, enhancement requests, feedback, recommendations or other information provided by you or any other party relating to the Service. This Terms of Use is not a sale and does not convey to you any rights of ownership in or related to the Service, OnlineJobs.ph  technology or the intellectual property rights owned by OnlineJobs.ph . The OnlineJobs.ph  na', 'Full Time', 'Abra', 'Adams');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acct`
--
ALTER TABLE `admin_acct`
  ADD PRIMARY KEY (`acct_id`);

--
-- Indexes for table `admin_banner`
--
ALTER TABLE `admin_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `admin_job_fair_info`
--
ALTER TABLE `admin_job_fair_info`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `acct_id` (`jobfair_id`);

--
-- Indexes for table `appl_acct`
--
ALTER TABLE `appl_acct`
  ADD PRIMARY KEY (`acct_id`);

--
-- Indexes for table `appl_apply`
--
ALTER TABLE `appl_apply`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `onjob_id` (`onjob_id`,`appl_id`);

--
-- Indexes for table `appl_info`
--
ALTER TABLE `appl_info`
  ADD PRIMARY KEY (`appl_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `appl_info_edu`
--
ALTER TABLE `appl_info_edu`
  ADD PRIMARY KEY (`edu_id`),
  ADD KEY `appl_id` (`acct_id`);

--
-- Indexes for table `appl_info_exp`
--
ALTER TABLE `appl_info_exp`
  ADD PRIMARY KEY (`exp_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `appl_info_ref`
--
ALTER TABLE `appl_info_ref`
  ADD PRIMARY KEY (`ref_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `appl_info_ref_job`
--
ALTER TABLE `appl_info_ref_job`
  ADD PRIMARY KEY (`ref_job_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `appl_info_seminar`
--
ALTER TABLE `appl_info_seminar`
  ADD PRIMARY KEY (`seminar_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `appl_info_working`
--
ALTER TABLE `appl_info_working`
  ADD PRIMARY KEY (`work_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `jobfair_info`
--
ALTER TABLE `jobfair_info`
  ADD PRIMARY KEY (`jobfair_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `job_appl_info`
--
ALTER TABLE `job_appl_info`
  ADD PRIMARY KEY (`job_appl_id`),
  ADD KEY `appl_id` (`acct_id`),
  ADD KEY `onjob_id` (`onjob_id`);

--
-- Indexes for table `job_onjob_info`
--
ALTER TABLE `job_onjob_info`
  ADD PRIMARY KEY (`onjob_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `jobfair_id` (`jobfair_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acct`
--
ALTER TABLE `admin_acct`
  MODIFY `acct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_banner`
--
ALTER TABLE `admin_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_job_fair_info`
--
ALTER TABLE `admin_job_fair_info`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `appl_acct`
--
ALTER TABLE `appl_acct`
  MODIFY `acct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `appl_apply`
--
ALTER TABLE `appl_apply`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appl_info`
--
ALTER TABLE `appl_info`
  MODIFY `appl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `appl_info_edu`
--
ALTER TABLE `appl_info_edu`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `appl_info_exp`
--
ALTER TABLE `appl_info_exp`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appl_info_ref`
--
ALTER TABLE `appl_info_ref`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `appl_info_ref_job`
--
ALTER TABLE `appl_info_ref_job`
  MODIFY `ref_job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `appl_info_seminar`
--
ALTER TABLE `appl_info_seminar`
  MODIFY `seminar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appl_info_working`
--
ALTER TABLE `appl_info_working`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobfair_info`
--
ALTER TABLE `jobfair_info`
  MODIFY `jobfair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_appl_info`
--
ALTER TABLE `job_appl_info`
  MODIFY `job_appl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `job_onjob_info`
--
ALTER TABLE `job_onjob_info`
  MODIFY `onjob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
