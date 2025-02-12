-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2016 at 08:06 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gcvs_db_success`
--
CREATE DATABASE IF NOT EXISTS `gcvs_db_success` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gcvs_db_success`;

-- --------------------------------------------------------

--
-- Table structure for table `check_view`
--

CREATE TABLE IF NOT EXISTS `check_view` (
  `ID` varchar(30) NOT NULL,
  `View` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_view`
--

INSERT INTO `check_view` (`ID`, `View`) VALUES
('3624', 'Viewed'),
('3624', 'Viewed'),
('3624', 'Viewed'),
('121', 'Viewed'),
('121', 'Viewed'),
('3624', 'Viewed'),
('3624', 'Viewed'),
('121', 'Viewed'),
('121', 'Viewed'),
('3624', 'Viewed'),
('361343', 'Viewed'),
('324445', 'Viewed'),
('3570', 'Viewed'),
('4576', 'Viewed'),
('362', 'Viewed'),
('3624', 'Viewed'),
('DVE', 'Viewed'),
('', 'Viewed'),
('', 'Viewed'),
('4576', 'Viewed'),
('4576', 'Viewed'),
('4576', 'Viewed'),
('4576', 'Viewed'),
('3605', 'Viewed'),
('3605', 'Viewed'),
('EISR/0670/05', 'Viewed'),
('EISR/0670/05', 'Viewed');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `ID` varchar(50) NOT NULL,
  `Company_Phone` varchar(50) NOT NULL,
  `Company_Name` varchar(30) NOT NULL,
  `Company_Email` varchar(30) NOT NULL,
  `Company_country` varchar(30) NOT NULL,
  `Company_City` varchar(40) NOT NULL,
  `Date` varchar(12) NOT NULL,
  `Reason_of_Verification` varchar(100) NOT NULL,
  PRIMARY KEY (`Company_Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `Company_Phone`, `Company_Name`, `Company_Email`, `Company_country`, `Company_City`, `Date`, `Reason_of_Verification`) VALUES
('ug5', '0919370911', 'bikila', 'bg@gmail.com', 'SNNP', 'Arbaminchi', '08/10/2016', 'graduate');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `ID` varchar(20) NOT NULL,
  `Frist_Name` varchar(30) NOT NULL,
  `Midle_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Year_of_Graduation` int(5) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Photo` longblob NOT NULL,
  `Photo_type` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`ID`, `Frist_Name`, `Midle_Name`, `Last_Name`, `Year_of_Graduation`, `Qualification`, `Gender`, `Department`, `Photo`, `Photo_type`) VALUES
('ug56', 'bikila', 'taye', 'Nigisa', 2017, 'Bachelors Degree', 'Male', 'computer science','bik','image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `info_verification`
--

CREATE TABLE IF NOT EXISTS `info_verification` (
  `ID` varchar(20) NOT NULL,
  `Verification` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_verification`
--

INSERT INTO `info_verification` (`ID`, `Verification`) VALUES
('EISR/0670/05', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `ID` varchar(30) NOT NULL,
  `Frist_Name` varchar(30) NOT NULL,
  `Midle_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Cumulative_Gpa` double NOT NULL,
  `Year_of_Graduation` varchar(12) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Month` varchar(15) NOT NULL,
  `Date` varchar(5) NOT NULL,
  `Exit_exam` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `Frist_Name`, `Midle_Name`, `Last_Name`, `Cumulative_Gpa`, `Year_of_Graduation`,`Qualification`, `Gender`, `Department`, `Month`, `Date`, `Exit_exam`)
VALUES ('ug56', 'Bikila', 'Taye', 'Nigisa', 3.6, '2017', 'July', '6', '76', 'Bachelors Degree', 'Male', 'computer science');


-- --------------------------------------------------------

--
-- Table structure for table `request_approval`
--

CREATE TABLE IF NOT EXISTS `request_approval` (
  `Employe_ID` varchar(50) NOT NULL,
  `Registerar_Remark` text NOT NULL,
  `Approval` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_approval`
--

INSERT INTO `request_approval` (`Employe_ID`, `Registerar_Remark`, `Approval`) VALUES
('EISR/0670/05', 'eeee', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
   `ID` varchar(30) NOT NULL,
  `Frist_Name` varchar(30) NOT NULL,
  `Midle_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Cumulative_Gpa` double NOT NULL,
  `Year_of_Graduation` varchar(12) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Month` varchar(15) NOT NULL,
  `Date` varchar(5) NOT NULL,
  `Exit_exam` varchar(5) NOT NULL,
  `Photo` longblob NOT NULL,
  `Photo_type` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Frist_Name`, `Midle_Name`, `Last_Name`, `Cumulative_Gpa`, `Year_of_Graduation`,`Month`,`Date`,`Exit_exam`, `Qualification`, `Gender`, `Department`, `Photo`, `Photo_type`) VALUES
('ug12', 'kadir', 'kamal', 'kam', 3.8, '2017','july',6, 76, 'Bachelors Degree', 'male', 'computer science', 0x4749463839615c00730070000021f9040100000e002c000000005c0073008300000066666600996666999999999933ffffff00ff66ff66666699ff99ffccccccffffff0066ff99cccc00000000000004ff702944abbd38ebcdbbe78af48d6469920a71ae6ceb11aa2bcf6c4c0d78aeef7cefffc0a09097c9351ac3a472c91c1c7317dc51204036afd86583fa1c588cc76e2e402e9bcfe8b47acd4eefc2e2afd389b4e20280bc7e6fd8030c7d807e7f83857e7d79828600043a757538728f73638b7f888998879a967a8a9d798d4674945f7053769d8098829f97ab979e81b1abad9c834655a75e154e54bf5d7896b599b17cacc8af889fae85a253bf55bc37a75b48c2c3b3b49cccc9aedda08dd6bb92a456a0dbe9c7b2ecdfc9a052e691bd527003d8d989eaecc5c5eefc9dc4d99b77a35e987be814116b06ce9fa68601e91c2488a01e1784099105e2f66e9fb18f11ffb7e8a2e8e81aba7e0e3701b4b50e65385250e8ed38e99250b357995a81c479d3520f393af0d11c4ab4e81e513a80de31cab4e950a424833a9d4ad5d90ea503aa6add7a5526c6ad960a1400bb082a50a16407894d6b08a91cb46cf7ac8d3b484154b834c78ad53b17c0deb980ffeaf93b76aadd6915bf1a0d9ca7ef60be7e0b479edc5832d3c36f9d32a62c1772dfb59f2d1bc54c0fefc9cd8e2b4f0ecd397551d2054da3435d98b067db91091bbeabb9b6efd6b7d58ade8d786953dac0570f77ed147662d9a090b306bd7c7873dec77f53160c39f7deca82af17574cb77c27e7c6cdab5f849efcfaf779da43d7932041a1fa60f16b956fa8befd3cfaf91160ff55031297d920f8e957605c0b36c59f80ff0190a07f014e489f7d156228a17f105e08208517725817767b64b8a187279aa86284032af8df8a28eef160892c6258e38727e208238e28bae8a1897ecc18a3853c1299e28d40ea78a39231ea21e48714dad8a3944c56992394115e69e4824f6a49658e5b7e19268d5efeb8a48c240e29e68b6b969924986c9ad9647c69f278e4946e2279269c768e19649d6e6e0824886c2658a69a58d628e29fe3cdd74983f09d0728519046cadea434556aa9215d6e5a5ea7541d704021a2460aea54a50e92ea7ba73ab5aaa74e623a94a8b4e6416badb68eba6aa9bb8e6a606960f1ea2b00a90aab87b1b952d56a51c812eb6bffb3d00eeba0ac46459b6cafce1e2bed65d49e74abb5d9628bedafb1a13a2cb8d68e2bde814d897beeb3babe9b6db2e43e67aeb6f3ce9baebcf5a6d76eadba3a3beeadc4e6caabb2dd92f5aa7acb2abcad790d6fb530c309c3ba5fc51623dce8711caf177121cccd661d5b1ffba19b77929dac7278284fbbf16223bbb65972ac8d86b17086c8ac1dcd298f0c4ac926c75c9d6a442bf718b72f17e5186e28ef6c1b5f27bf7673d047ab5673cd9d550574d645535735d655f7ebde693d1f7d75d9546bccaed28181069e5e8ff9161ed352279d315d5bdf5df7da7aa79577df3435cc0003830c0e8ae1340d4ef8c5761b82f81e8f2f127927932fee32df854c9eb8ffe58773ae3951822b8eb8e1848bee87e88fa39e87eaac5bfef988e30d4000e5ae976ebb1e91a7cef9ea8be75e3beebb177258ecb25ba23b00a4ff0efcf2a7f7eeb9f2c807cf68543918ff7bf2ccf39e3df3be67ffba1e5d1554bde4d7dfaebdf7ce9b1e3de4d07f9f47f889e530bbe3e5af7ffefdd89fdf3dfed2c79a945738985fe1ea773cf4d9cf7efb3be0f7861713f1e9807ecbcbdf0115683e043ecf8086f889579e2040f645b082091c9de290773fdea5af749c824954a081840e026e28761149172421c3e2bd506a32b4025076e1c21b4a6a172b9447567c7892783c4187bda886347a48c4118dc31ea688c6486cd844e159241a4830c529a481832a6b66500aba806212b7980a2fe2028cd518cf24ec4045330280816ba41e1073a0803adaf18e78cca31ef7c8c73eeaf10d0351630db340c842f6208714899f180cc94843c601038d8ca4241b1885495ad29016b0010d36c9c90d1060029d0ca528291002508ef2943208410400003b, 'image/gif'),
('ug34', 'haim', 'golbo', 'gol', 4, '2017','july',7, 78,'Bachelors Degree', 'Female', 'computer science', 'haim', 'image/gif'),
('ug56', 'bikila', 'taye', 'nigisa', 3.6, '2017','july',6, 70, 'Bachelors Degree', 'male', 'Computer Science', 'bik', 'image/gif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_type` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_type`, `Name`, `username`, `password`, `email`) VALUES
('Administrator', 'bikila', 'bikila', 'bikila', 'bikilataye816@gmail.com'),
('Registerar', 'kadir', 'kadir', 'kadir', 'kadir@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
