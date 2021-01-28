-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 05:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `app_id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`app_id`, `fname`, `cname`, `job_title`, `number`, `skill`, `exp`, `filename`) VALUES
(4, 'Chinju', 'HGS', 'Web Developer', '9656772110', 'PHP', '1 year ', 'Profile New.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `can_login`
--

CREATE TABLE `can_login` (
  `login_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `can_login`
--

INSERT INTO `can_login` (`login_id`, `name`, `password`) VALUES
(1, '', 'chinchu'),
(2, 'Chinchu', 'chinchu');

-- --------------------------------------------------------

--
-- Table structure for table `can_reg`
--

CREATE TABLE `can_reg` (
  `can_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `can_reg`
--

INSERT INTO `can_reg` (`can_id`, `name`, `email`, `password`, `password1`) VALUES
(2, 'Chinchu', 'chi@gmail.com', 'chinchu', 'chinchu');

-- --------------------------------------------------------

--
-- Table structure for table `comp_reg`
--

CREATE TABLE `comp_reg` (
  `com_id` int(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `business` varchar(100) NOT NULL,
  `number` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_reg`
--

INSERT INTO `comp_reg` (`com_id`, `cname`, `business`, `number`, `address`, `url`) VALUES
(1, 'Tricky Global Solution', 'Software Development', '1234567890', 'Hosa Road, Bangalore', 'https://www.trickysolution.com'),
(2, 'Tricky', 'Web Development', '9656772110', 'qwer', 'https://www.trickysolution.com');

-- --------------------------------------------------------

--
-- Table structure for table `createcv`
--

CREATE TABLE `createcv` (
  `cv_id` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `month` varchar(30) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `job_fun` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createcv`
--

INSERT INTO `createcv` (`cv_id`, `fname`, `email`, `pass`, `number`, `location`, `qual`, `exp`, `month`, `industry`, `job_fun`, `skill`, `des`, `filename`) VALUES
(5, 'John', 'johnjac215@gmail.com', 'chinju', '2345678901', 'Bangalore', 'CFA', '16', '9', 'Building Materials', 'Administration', 'Marketing', 'qqqq', 'New Text Document.txt');

-- --------------------------------------------------------

--
-- Table structure for table `create_resume`
--

CREATE TABLE `create_resume` (
  `resume_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_resume`
--

INSERT INTO `create_resume` (`resume_id`, `name`, `email`, `phone`, `dob`, `city`, `education`, `experience`, `skill`, `address`) VALUES
(1, 'Chinchu', 'thomaschinnu1@gmail.com', '9878987678', '09/03/1990', 'Venmoney', 'BE', '5 Year', 'MBA', 'vdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `login_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`login_id`, `name`, `password`) VALUES
(1, 'Chinju', 'chinchu'),
(2, 'Chinju', 'chinchu'),
(3, 'Anu', 'anu'),
(4, 'Anu', 'anu');

-- --------------------------------------------------------

--
-- Table structure for table `emp_reg`
--

CREATE TABLE `emp_reg` (
  `emp_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `emp_profile` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `cmp_name` varchar(100) DEFAULT NULL,
  `cmp_address` varchar(100) DEFAULT NULL,
  `abt_company` varchar(100) DEFAULT NULL,
  `emp_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_reg`
--

INSERT INTO `emp_reg` (`emp_id`, `name`, `email`, `mobile`, `password`, `emp_profile`, `location`, `cmp_name`, `cmp_address`, `abt_company`, `emp_image`) VALUES
(1, 'Chinju', 'c@gmail.com', '7412589630', 'chinchu', NULL, 'bangalore', 'TGS company', 'hosa road bangalore', 'this is for testing', NULL),
(2, 'matheen', 'matheen@gmail.com', '9738326611', '12345', NULL, 'bangalore', '$cal-info', 'bangalore 560068', 'hello ', NULL),
(3, 'matheenemp', 'emp@gmail.com', '7412589630', '12345', 'software developer', 'bangalore', 'tricky global solution', 'hosa road', 'this is for testng purpose this is for testng purpose this is for testng purpose', 'ak.jpeg'),
(4, 'krish', 'krish@gmail.com', '1234567890', '12345', 'HR', 'chennai', 'TGS', 'electronic city bangaore 560078', 'this is for testng purpose this is for testng purpose this is for testng purpose', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_details`
--

CREATE TABLE `freelancer_details` (
  `FdetailsID` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `FreProfile` varchar(100) DEFAULT NULL,
  `Experience` varchar(100) DEFAULT NULL,
  `Frestatus` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `ImageUrl` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_details`
--

INSERT INTO `freelancer_details` (`FdetailsID`, `ID`, `FreProfile`, `Experience`, `Frestatus`, `Age`, `location`, `description`, `ImageUrl`) VALUES
(1, 19, 'php developer', '1', 'Available', '25', ' Bangalore', 'this is for testing', ''),
(2, 20, 'java devloper', '2', 'Available', '24', ' bangalore', 'this for demo', '4.jpg'),
(3, 21, 'android developer', '2', 'Available', '23', ' bangaore', 'this for testing', '3.jpg'),
(5, 23, 'Network engineer', '8', 'Working', '35', ' hyderabad', 'hi this for testing hi this for testing ', '1.jpg'),
(6, 24, 'web desiner', '2', 'Available', '25', ' kerala', 'hi this for demo ', '2.jpg'),
(7, 25, 'mis developer', '5', 'Working', '35', ' tamil nadu', 'demo', '1411837943224.jpg'),
(8, 26, 'HTML devleoper', '4', 'Working', '15', ' bangakore', 'this is for demo', '3.jpg'),
(9, 27, 'java developer', '1', 'Available', '25', ' Market', 'fkjfj', '4.jpg'),
(10, 28, 'pharma developer', '5', 'Working', '26', ' Mangalore', 'hi this is for demo', '');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_jobapplication`
--

CREATE TABLE `freelancer_jobapplication` (
  `appID` int(11) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `Freelancer_ID` int(11) DEFAULT NULL,
  `free_name` varchar(100) DEFAULT NULL,
  `free_email` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `job_skill` varchar(100) DEFAULT NULL,
  `job_exp` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_jobapplication`
--

INSERT INTO `freelancer_jobapplication` (`appID`, `jobID`, `Freelancer_ID`, `free_name`, `free_email`, `company_name`, `job_title`, `job_skill`, `job_exp`, `city`) VALUES
(1, 12, 24, 'rosh', 'rosh@gmail.com', 'TGS', 'Web Developer', 'PHP', '2 Year', 'Bangalore'),
(2, 13, 23, 'faisa', 'faisa@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore'),
(3, 13, 23, 'faisa', 'faisa@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore'),
(4, 14, 25, 'tou', 'tou@gmail.com', 'Wipro', 'HR', 'MBA', '5 Year', 'Calicut'),
(5, 13, 21, 'bash', 'bash@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore'),
(6, 14, 28, 'maqbu', 'maqbul@gmail.com', 'Wipro', 'HR', 'MBA', '5 Year', 'Calicut'),
(7, 13, 23, 'faisa', 'faisa@gmail.com', 'HGS', 'Software Developer', 'Java', '2 Year', 'Bangalore'),
(8, 14, 23, 'faisa', 'faisa@gmail.com', 'Wipro', 'HR', 'MBA', '5 Year', 'Calicut');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_register`
--

CREATE TABLE `freelance_register` (
  `ID` int(11) NOT NULL,
  `Full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ConfirmPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_register`
--

INSERT INTO `freelance_register` (`ID`, `Full_name`, `username`, `Email`, `Password`, `ConfirmPass`) VALUES
(1, 'matheen', 'matheen@gmail.com', 'matheen@gmail.com', '12345', '12345'),
(2, 'testing', 'testing', 'testing@gmail.com', '12345', '12345'),
(3, 'testing2', '2test', 'test@gmail.com', '123456', '123456'),
(4, 'testing3', '3test', 'tes3@gmail.com', '12345', '12345'),
(5, 'hello', 'hello', 'hello@gmail.com', '12345', '12345'),
(6, 'subhash', 'su@123', 'su@123', '12345', '12345'),
(7, 'subhash1', 'as', 'as@gmail.com', '12345', '12345'),
(8, 'testing4', 'qw', 'wq@gmail.com', '12344', '12345'),
(9, '1234', '12qw', '12@gmail.com', '12345', '12345'),
(10, 'qs', 'as', 'qs@gmail.com', '12345', '12345'),
(11, 'qwe', 'qwe', 'qwe@gmail.com', '12345', '12345'),
(12, 'testing5', '5', '5@gmail.com', '123', '1213'),
(13, 'police', 'po', 'po@gmail.com', '12345', '12354'),
(14, 'sha', 'sha', 'sha@gmail.com', '12345', '12345'),
(15, 'sha1', 'sha1', '123@gmail.com', '12345', '12345'),
(16, 'hi', 'hi12', 'hi12@gmail.com', '12345', '12345'),
(17, 'iu', 'iu', 'iu@gmail.com', '12345', '12345'),
(18, 'fai', 'fai', 'fai@gmail.com', '12345', '12345'),
(19, 'sad', 'sad', 'sad@gmail.com', '12345', '12345'),
(20, '123hello', 'gello', '12qa@gmail.com', '123456', '123456'),
(21, 'bash', 'bash', 'bash@gmail.com', '12345', '12345'),
(22, 'demo', 'demo123', 'demo1234@gmail.com', '12345', '12345'),
(23, 'faisa', 'faisa@12', 'faisa@gmail.com', '12345', '12345'),
(24, 'rosh', 'rosh12', 'rosh@gmail.com', '12345', '12345'),
(25, 'tou', 'tou', 'tou@gmail.com', '12345', '12345'),
(26, 'tousha', 'tousha', 'tousha@gmail.com', '12345', '12345'),
(27, 'sadiq', 'sadi', 'sadi@gmail.com', '12345', '12345'),
(28, 'maqbu', 'maqbu', 'maqbul@gmail.com', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `job_reg`
--

CREATE TABLE `job_reg` (
  `job_id` int(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pos` varchar(30) NOT NULL,
  `img_filename` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `age` varchar(20) NOT NULL,
  `lang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_reg`
--

INSERT INTO `job_reg` (`job_id`, `cname`, `jobtitle`, `skill`, `experience`, `salary`, `city`, `pos`, `img_filename`, `description`, `age`, `lang`) VALUES
(12, 'TGS', 'Web Developer', 'PHP', '2 Year', '25000', 'Bangalore', 'Contract Job', 'Chrysanthemum.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '30', 'English,Kannada'),
(13, 'HGS', 'Software Developer', 'Java', '2 Year', '15000', 'Bangalore', 'Full Time Job', 'Desert.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '32', 'English,Kannada'),
(14, 'Wipro', 'HR', 'MBA', '5 Year', '50000', 'Calicut', 'Full Time Job', 'Lighthouse.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '25', 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `profcv`
--

CREATE TABLE `profcv` (
  `prof_id` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `month` varchar(50) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `job_fun` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profcv`
--

INSERT INTO `profcv` (`prof_id`, `fname`, `email`, `pass`, `number`, `location`, `qual`, `exp`, `month`, `industry`, `job_fun`, `skill`, `des`, `filename`) VALUES
(1, 'avinash', 'thomaschinnu1@gmail.com', 'chinju', '2345678901', 'Bangalore', 'M-Tech', '9', '5', 'Biotechnology/Greentech', 'Accountancy', 'MBA', 'qqqq', 'error-page.html.txt');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `prof_id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `number` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `sal` varchar(100) NOT NULL,
  `filename` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `login_id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`login_id`, `uname`, `password`) VALUES
(7, 'Chinju', 'chinju'),
(8, 'Bharath', '123'),
(9, 'Bharath', '123'),
(10, 'Maya', 'maya'),
(11, 'Maya', 'maya'),
(12, 'Sneha', 'sneha');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `job_fun` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `img_filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `uname`, `email`, `password`, `number`, `location`, `qual`, `exp`, `month`, `industry`, `job_fun`, `skill`, `des`, `filename`, `img_filename`) VALUES
(3, 'Chinju', 'thomaschinnu1@gmail.com', 'chinju', '2345678901', 'Bangalore', 'CFA', '14', '8', 'Computer Hardware', 'Administration', 'PHP', 'qehygwywg', 'Chinchu resume new.pdf', ''),
(7, '', '', 'maya', '', '', 'LLM', '13', '8', '', '', 'PHP', '', 'error-page.html.txt', 'Lighthouse.jpg'),
(8, 'Sneha', 'sneha@gmail.com', 'sneha', '2345678901', 'Bangalore', 'M-Tech', '9', '4', 'Broadcast Media', 'Accountancy', 'MBA', 'qqqqqqq11', 'htaccess.txt', '2Tulips.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `can_login`
--
ALTER TABLE `can_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `can_reg`
--
ALTER TABLE `can_reg`
  ADD PRIMARY KEY (`can_id`);

--
-- Indexes for table `comp_reg`
--
ALTER TABLE `comp_reg`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `createcv`
--
ALTER TABLE `createcv`
  ADD PRIMARY KEY (`cv_id`);

--
-- Indexes for table `create_resume`
--
ALTER TABLE `create_resume`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `emp_reg`
--
ALTER TABLE `emp_reg`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `freelancer_details`
--
ALTER TABLE `freelancer_details`
  ADD PRIMARY KEY (`FdetailsID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `freelancer_jobapplication`
--
ALTER TABLE `freelancer_jobapplication`
  ADD PRIMARY KEY (`appID`),
  ADD KEY `jobID` (`jobID`),
  ADD KEY `Freelancer_ID` (`Freelancer_ID`);

--
-- Indexes for table `freelance_register`
--
ALTER TABLE `freelance_register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_reg`
--
ALTER TABLE `job_reg`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `profcv`
--
ALTER TABLE `profcv`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `app_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `can_login`
--
ALTER TABLE `can_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `can_reg`
--
ALTER TABLE `can_reg`
  MODIFY `can_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comp_reg`
--
ALTER TABLE `comp_reg`
  MODIFY `com_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `createcv`
--
ALTER TABLE `createcv`
  MODIFY `cv_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `create_resume`
--
ALTER TABLE `create_resume`
  MODIFY `resume_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_reg`
--
ALTER TABLE `emp_reg`
  MODIFY `emp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `freelancer_details`
--
ALTER TABLE `freelancer_details`
  MODIFY `FdetailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freelancer_jobapplication`
--
ALTER TABLE `freelancer_jobapplication`
  MODIFY `appID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `freelance_register`
--
ALTER TABLE `freelance_register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `job_reg`
--
ALTER TABLE `job_reg`
  MODIFY `job_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profcv`
--
ALTER TABLE `profcv`
  MODIFY `prof_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `prof_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `freelancer_details`
--
ALTER TABLE `freelancer_details`
  ADD CONSTRAINT `freelancer_details_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `freelance_register` (`ID`);

--
-- Constraints for table `freelancer_jobapplication`
--
ALTER TABLE `freelancer_jobapplication`
  ADD CONSTRAINT `freelancer_jobapplication_ibfk_1` FOREIGN KEY (`jobID`) REFERENCES `job_reg` (`job_id`),
  ADD CONSTRAINT `freelancer_jobapplication_ibfk_2` FOREIGN KEY (`Freelancer_ID`) REFERENCES `freelance_register` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
