-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2010 at 06:34 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aust`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `u_id` int(11) NOT NULL auto_increment,
  `u_name` varchar(30) NOT NULL,
  `u_pass` varchar(15) NOT NULL,
  `u_level` varchar(5) NOT NULL,
  PRIMARY KEY  (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`u_id`, `u_name`, `u_pass`, `u_level`) VALUES
(1, 'admin', 'demo', '1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_s_name` varchar(5) default NULL,
  `dept_f_name` text,
  `dept_head` text,
  `f_no` int(11) default NULL,
  PRIMARY KEY  (`dept_id`),
  KEY `f_no` (`f_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_s_name`, `dept_f_name`, `dept_head`, `f_no`) VALUES
(1, 'ARCHI', 'Department of Architechture', NULL, 2),
(2, 'BBA', 'School of Business', NULL, 3),
(3, 'CE', 'Department of Civil Engineering', NULL, 1),
(4, 'CSE', 'Department of Computer Science & Engineering', NULL, 1),
(5, 'EEE', 'Department of Electrical & Electronics Engineering', NULL, 1),
(6, 'IPE', 'Department of Industrial & Production Engineering', NULL, 1),
(7, 'TT', 'Department of Textile', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept_program`
--

CREATE TABLE `dept_program` (
  `d_p_no` int(11) NOT NULL auto_increment,
  `d_p_name` text,
  `f_no` int(11) default NULL,
  PRIMARY KEY  (`d_p_no`),
  KEY `f_no` (`f_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `dept_program`
--

INSERT INTO `dept_program` (`d_p_no`, `d_p_name`, `f_no`) VALUES
(1, 'Bachelor of Architecture', 2),
(2, 'Bachelor of Business Administration', 3),
(3, 'Master of Business Administration', 3),
(4, 'Bachelor of Science in Civil Engineering', 1),
(5, 'Bachelor of Science in Computer Science and Engineering', 1),
(6, 'Bachelor of Science in Electrical and Electronic Engineering', 1),
(7, 'Bachelor of Science in Industrial and Production Engineering', 1),
(8, 'Bachelor of Science in Textile Technology', 1),
(9, 'Master of Science in Mathmatics', 1),
(10, 'Bachelor of Education (B.Ed)', 4),
(11, 'Master of Education (M.Ed)', 4),
(12, 'Diploma in Architecture Technology', 5),
(13, 'Diploma in  Civil Technology', 5),
(14, 'Diploma in  Computer Technology', 5),
(15, 'Diploma in Electrical Technology', 5),
(16, 'Diploma in Textile Technology', 5);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL auto_increment,
  `event_title` text NOT NULL,
  `event_details` text,
  `event_date` text,
  `event_type` int(11) default NULL,
  PRIMARY KEY  (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_details`, `event_date`, `event_type`) VALUES
(1, 'message will be shown here.Click here to view this.', NULL, 'Mar 10,2010', 1),
(3, '<p>Annual Seminer -2009</p>', '', 'Jun 05,2010', 1),
(4, '<p>Convocation-2010</p>', '											', 'Jul 10', 1),
(5, '<p>This is the Mark sheet - Spring 2010</p>', '', 'Aug 22', 1),
(6, '<p>message will be shown here.Click here to view this.</p>', '', 'Sep 01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_no` int(11) NOT NULL auto_increment,
  `f_name` text,
  PRIMARY KEY  (`f_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_no`, `f_name`) VALUES
(1, '<font face="Georgia" color="#666666" style="font-size:12px; font-weight:600">Faculty of Engineering:</font>'),
(2, '<font face="Georgia" color="#666666" style="font-size:12px; font-weight:600">Architecture and Planning:</font>'),
(3, '<font face="Georgia" color="#666666" style="font-size:12px; font-weight:600">Faculty of Business and Social Science:</font>'),
(4, '<font face="Georgia" color="#666666" style="font-size:12px; font-weight:600">Faculty of Education:</font>'),
(5, '<font face="Georgia" color="#666666" style="font-size:12px; font-weight:600">   Institute of Technical and Vocational Education and Training (ITVET):</font>');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_no` int(11) NOT NULL auto_increment,
  `file_name` varchar(100) NOT NULL,
  `file_type` text,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY  (`file_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_no`, `file_name`, `file_type`, `page_id`) VALUES
(1, 'HTML TUTORIAL.doc', '14th Annual Report 2008-2009', 5);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_no` int(11) NOT NULL auto_increment,
  `image_name` text,
  `image_caption` text,
  `image_type` text,
  PRIMARY KEY  (`image_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_no`, `image_name`, `image_caption`, `image_type`) VALUES
(1, 'melbourne.jpg', 'Melbourne is the capital of australia asdadadasda', 'home'),
(2, 'buenos_aires.jpg', 'buens aires,its a wonderfull latin city', 'home'),
(3, 'urubamba.jpg', 'Melbourne is the capital of australia and its a beauty', 'home'),
(4, 'london.jpg', 'London curnival', 'home'),
(6, 'imgg03.png', NULL, 'about'),
(7, 'SAM_0125.JPG', NULL, 'accreditation'),
(8, '454044.JPG', NULL, 'publication'),
(9, 'vc.png', 'office of the vc', 'office_vc'),
(10, 'vc.png', 'office of the treasurer', 'office_treasurer'),
(11, 'admin.jpg', 'administrative building', 'admin_office'),
(13, 'main_campus_lrg1.jpg', 'aust front view from top', 'home'),
(14, 'em.png', NULL, 'home_leadership'),
(15, 'img01.png', NULL, 'home_leadership'),
(16, 'img01.png', NULL, 'home_leadership'),
(17, 'SAM_0307.JPG', 'CSE night 2009 at AUST campus', 'home'),
(18, 'SAM_0014.JPG', NULL, '14th Annual Report 2008-2009');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `l_no` int(11) NOT NULL auto_increment,
  `l_item` text,
  `item_no` int(11) default NULL,
  `l_title` text,
  PRIMARY KEY  (`l_no`),
  KEY `item_no` (`item_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`l_no`, `l_item`, `item_no`, `l_title`) VALUES
(1, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Kazi Rafiqul Alam,</font><br /><i><font color="#336600">Chairman of Syndicate,</font></i><br /><font style="font-size:11px">President - Dhaka Ahsania Mission.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(2, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. M. Anwar Hossain,</font><br /><i><font color="#336600">Vice-Chairman of Syndicate,</font></i><br /><font style="font-size:11px">Vice-Chancellor - Ahsanullah University of Science and Technology.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(3, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. Kazi Shariful Alam,</font><br /><i><font color="#336600">Member (Ex-officio) of Syndicate,</font></i><br /><font style="font-size:11px">Treasurer - Ahsanullah University of Science and Technology.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(4, '<li>\r\n											<font face="Georgia" style="font-size:13px">Barrister Rafique-ul Huq,</font><br /><i><font color="#336600">Member(Nominee of the Sponsor) of Syndicate,</font></i><br /><font style="font-size:11px">Former Attorney General,Govt. of Bangladesh.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(5, '<li>\r\n											<font face="Georgia" style="font-size:13px">Dr. A. T. Abu Ahmed,</font><br /><i><font color="#336600">Member(Nominee of the Sponsor) of Syndicate,</font></i><br /><font style="font-size:11px">Professor - Department of Zoology, University of Dhaka.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(6, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. M. Ehsanur Rahman,</font><br /><i><font color="#336600">Member(Nominee of the Sponsor) of Syndicate,</font></i><br /><font style="font-size:11px">Executive Director - Dhaka Ahsania Mission.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(7, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. A. M. Shadullah,</font><br /><i><font color="#336600">Member(Ex-officio) of Syndicate,</font></i><br /><font style="font-size:11px">Dean,Faculty of Engineering - Ahsanullah University of Science and Technology.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(8, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. A.K.M Wahidul Haque,</font><br /><i><font color="#336600">Member(Ex-officio) of Syndicate,</font></i><br /><font style="font-size:11px">Director,Institute of Technical and Vocational Education and Training (ITVET) - Ahsanullah University of Science and Technology.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(9, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Shibbir Mahmud,</font><br /><i><font color="#336600">Member(Nominee of Donor) of Syndicate,</font></i><br /><font style="font-size:11px">Chairman - Swiss-Tex Group.</font>	\r\n										</li>', 17, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>'),
(10, '<li>\r\n											<font face="Georgia" style="font-size:13px">Professor Md. Abul Bashar,</font><br /><i><font color="#336600">Member(Ex-officio) of Syndicate,</font></i><br /><font style="font-size:11px">Director General,Technical Education - Education Building,16,Abdul Gani Road,Dhaka-1000.</font>	\r\n										</li>', 17, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>\r\n'),
(11, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. Iqbal Mahmood,</font><br /><i><font color="#336600">Member(Co-opted by the Syndicate) of Syndicate,</font></i><br /><font style="font-size:11px">Professor Emeritus & Former Vice-Chancellor,BUET.</font>	\r\n										</li>', 17, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>\r\n'),
(12, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. Mohammad Fazlul Bari,</font><br /><i><font color="#336600">Member(Co-opted by the Syndicate) of Syndicate,</font></i><br /><font style="font-size:11px">Vice Chancellor, RUET.</font>	\r\n										</li>', 17, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Syndicate</font>\r\n'),
(13, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. M. Anwar Hossain,</font><br /><i>Vice-Chancellor,</i><br /><font style="font-size:11px">B.Sc.Engg.(Mechanical),BUET,M.S.,Ph.D(Cornell University,U.S.A),Fellow,IEB & BSME.</font>\r\n										</li>', 18, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>'),
(14, '<li>\r\n											<font face="Georgia" style="font-size:13px">Professor Dr. Kazi Shariful Alam,</font><br /><i><font color="#336600">Treasurer,</font></i><br /><font style="font-size:11px">M.Com,(D.U),Ph.D(Benaras).</font>	\r\n										</li>', 18, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>'),
(15, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Bijon Behari Sarma,</font><br /><i><font color="#336600">Dean,Faculty of Architecture and Planning,</font></i><br /><font style="font-size:11px">B.Arch & M.Arch,(BUET).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(16, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. S. M. Kabir,</font><br /><i><font color="#336600">Dean,Faculty of Business and Social Science,</font></i><br /><font style="font-size:11px">B.Com(Hons.),M.Com(R.U.),MBM(AIM, Manila),Ph.D.(D.U),Professor and Former Chairman,Department of Marketing,University of Rajshahi.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(17, '<li>\r\n											<font face="Georgia" style="font-size:13px">Professor Dr. Abu Md. Shadullah,</font><br /><i><font color="#336600">Dean,Faculty of Engineering,</font></i><br /><font style="font-size:11px">B.Sc. Engg.(Civil),BUET,M.Sc.,D. Sc.(Dresden)Germany.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(18, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mrs. Fatema Khatun,</font><br /><i><font color="#336600">Dean,Faculty of Education,</font></i><br /><font style="font-size:11px">M.Sc. M.Ed.,Assistant Professor.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(19, '<li>\r\n											<font face="Georgia" style="font-size:13px">Dr. Md. Anwarul Mustafa,</font><br /><i><font color="#336600">Director of Students Welfare,</font></i><br /><font style="font-size:11px">B.Sc. Engg.(Civil),Raj.,M.Sc.Engg. Ph.D.(NU Malaysia).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(20, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Azizul Haque,</font><br /><i><font color="#336600">Registrar(Acting),</font></i><br /><font style="font-size:11px">M.A.(D.U.).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(21, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Mosharraf Hossain,</font><br /><i><font color="#336600">Librarian,</font></i><br /><font style="font-size:11px">B.A.(Hons)(Bengali),R.U., M.A.(Bengali),D.U. Diploma in Library Science,D.U. M.A(Lib. Sc.),D.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(22, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Abdud Daiyan,</font><br /><i><font color="#336600">University Engineer,</font></i><br /><font style="font-size:11px">B.Sc. Eng.(Mech), R.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(23, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Azizul Haque,,</font><br /><i><font color="#336600">Deputy Registrar,</font></i><br /><font style="font-size:11px">M.A. (D.U.).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(24, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Tapos Sarkar,,</font><br /><i><font color="#336600">Deputy Controller of Examinations,</font></i><br /><font style="font-size:11px">B.A(Hons.),M.A.(Eng.),D.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(25, '<li>\r\n											<font face="Georgia" style="font-size:13px">Dr. Ahmad Munir Hussain,</font><br /><i><font color="#336600">Medical Officer,</font></i><br /><font style="font-size:11px">M.B.B.S(Dhaka),B.C.S(Health).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(26, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. A. R. M. Ataur Rahman Bhuiyan,</font><br /><i><font color="#336600">Deputy Chief Accounts Officer,</font></i><br /><font style="font-size:11px">B.Com(Hons.),M.Com.(C.U.),EMBA(AUST).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(27, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mohammad Shahinur Rashid,</font><br /><i><font color="#336600">System Engineer,</font></i><br /><font style="font-size:11px">B.Sc. Engg.(CSE),AUST,MCP,CCNA,CCAI.</font>	\r\n										</li>', 18, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Muniruzzaman,</font><br /><i><font color="#336600">Assistant Registrar,</font></i><br /><font style="font-size:11px">M.A.,N.U.</font>	\r\n										</li>'),
(28, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Muniruzzaman,</font><br /><i><font color="#336600">Assistant Registrar,</font></i><br /><font style="font-size:11px">M.A.,N.U.</font>	\r\n										</li>', 18, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Muniruzzaman,</font><br /><i><font color="#336600">Assistant Registrar,</font></i><br /><font style="font-size:11px">M.A.,N.U.</font>	\r\n										</li>'),
(29, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mohammad Moin Uddin,</font><br /><i><font color="#336600">Publication Cum Information Officer,</font></i><br /><font style="font-size:11px">B.S.S(Hons.),M.S.S.(Journalism),D.U.</font>	\r\n										</li>', 18, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Muniruzzaman,</font><br /><i><font color="#336600">Assistant Registrar,</font></i><br /><font style="font-size:11px">M.A.,N.U.</font>	\r\n										</li>'),
(30, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Sheikh Abdul Malek,</font><br /><i><font color="#336600">Senior Officer (Exam),</font></i><br /><font style="font-size:11px">B.A., R.U.</font>	\r\n										</li>', 18, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Muniruzzaman,</font><br /><i><font color="#336600">Assistant Registrar,</font></i><br /><font style="font-size:11px">M.A.,N.U.</font>	\r\n										</li>'),
(31, '<li>\r\n											<font face="Georgia" style="font-size:13px">Ms. Masuda Khanam Nasrin,</font><br /><i><font color="#336600">Assistant Officer (Admin),</font></i><br /><font style="font-size:11px">B.A.(Hons),M.A.,D.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(32, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Nazrul Islam,</font><br /><i><font color="#336600">APS to VC,</font></i><br /><font style="font-size:11px">B.A.(Hons.),M.A(English),N.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(33, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Aminul Islam,</font><br /><i><font color="#336600">Junior Officer(Computer),</font></i><br /><font style="font-size:11px">B.A., N.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(34, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mohammad Hossain,</font><br /><i><font color="#336600">Junior Officer (Exam.),</font></i><br /><font style="font-size:11px">B.A.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(35, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Azim Uddin,</font><br /><i><font color="#336600">Junior Officer (Exam.),</font></i><br /><font style="font-size:11px">M.S.S.(Econ.),D.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(36, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Shak Abdus Sabur,</font><br /><i><font color="#336600">Junior Officer (Library),</font></i><br /><font style="font-size:11px">B.Sc. Engg.(CSE),QU,M.Sc. in CSE,DIU.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(37, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Abdul Hasim,</font><br /><i><font color="#336600">Assistant Officer (Admin),</font></i><br /><font style="font-size:11px">B.Com (N.U),EMBA(Finance),AUST.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(38, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Abu Mohammad Mizanur Rahman,</font><br /><i><font color="#336600">Assistant Admin. Officer (CSE),</font></i><br /><font style="font-size:11px">B.Sc.(Hons),M.Sc.(Botany),N.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(39, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Mehadi Hassan,</font><br /><i><font color="#336600">Assistant Admin. Officer(Sch. of Busi.),</font></i><br /><font style="font-size:11px"> B.S.S.(Hons),M.S.S.(Social Welfare),D.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(40, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mohammad Iqbal Imam,</font><br /><i><font color="#336600">Assistant Admin. Officer (A & S),</font></i><br /><font style="font-size:11px">M.Com. (Mgt.), N.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(41, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Kazi Mukhlesur Rahman,</font><br /><i><font color="#336600">Assistant Admin. Officer(CE),</font></i><br /><font style="font-size:11px">M.Sc.(Zoology), N.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(42, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Md. Foysol Khan,</font><br /><i><font color="#336600">Assistant Admin. Officer(TT),</font></i><br /><font style="font-size:11px">B.Sc.(Hons),M.Sc.(Physics),N.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(43, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mohammad Mamunur Rahman,</font><br /><i><font color="#336600">Assistant Admin. Officer(EEE),</font></i><br /><font style="font-size:11px">M.A.(English),N.U.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(44, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mir Monsur Shorif,</font><br /><i><font color="#336600">Assistant Admin. Officer(Arch),</font></i><br /><font style="font-size:11px">B.Com(Hons),M.Com Marketing).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(45, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mohammad Shahjahan Seraj,</font><br /><i><font color="#336600">Sr. Sub. Asstt. Engineer,</font></i><br /><font style="font-size:11px">Diploma in Engg. (Civil).</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(46, '<li>\r\n											<font face="Georgia" style="font-size:13px">Mr. Mohammad Hasan Ali,</font><br /><i><font color="#336600">Technician (Website and System Support),</font></i><br /><font style="font-size:11px">B.Sc.,N.U.,SCJP.</font>	\r\n										</li>', 18, '								<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of University Administration</font>\r\n'),
(47, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. M. Anwar Hossain,</font><br /><i>Chariman of Academic Council,</i><br /><font style="font-size:11px">Vice-Chancellor.</font>\r\n										</li>', 19, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Academic Council</font>'),
(48, '<li>\r\n											<font face="Georgia" style="font-size:13px">Professor Dr. Kazi Shariful Alam,</font><br /><i><font color="#336600">Nominee of Sponsor of Academic Council,</font></i><br /><font style="font-size:11px">Treasurer.</font>	\r\n										</li>', 19, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Academic Council</font>'),
(49, '<li>\r\n											<font face="Georgia" style="font-size:13px">Prof. Dr. A. M. Muktadir,</font><br /><i><font color="#336600">Ex-officio Member of Academic Council,</font></i><br /><font style="font-size:11px">Professor, Department of Architecture.</font>	\r\n										</li>', 19, '<font style="color:#660000;font-family:tahoma; font-size:15px; text-decoration:underline">Members of Academic Council</font>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL auto_increment,
  `news_title` text NOT NULL,
  `news_details` text,
  `news_date` text,
  `news_time` text,
  `news_type` int(11) NOT NULL,
  PRIMARY KEY  (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_details`, `news_date`, `news_time`, `news_type`) VALUES
(1, 'All the classes of undergraduate programmes of Ahsanullah University of Science and Technology at Dhaka will remain closed from 30.11.2008 to 12.12.2008', NULL, 'Mar 27', NULL, 1),
(2, 'New Identity Cards of the students will be checked during the Semester Final and Clearance/Improvement/Carry Over Examinations of the current semester (Spring 2008)', NULL, 'Mar 27', NULL, 1),
(3, 'Dr. Md. Abdur Rab, Full-time Medical Officer, Ahsanullah University of Science & Technology breathed his last on the 29 May, 2008 (Innalillah ........ Rajeeun)', NULL, 'Mar 27', NULL, 1),
(4, '<p>Architect Shehzad Zahir, Associate Professor, Department of Architecture, Ahsanullah University of Science and Technology has recently joined in the International Training Programme</p>', NULL, 'Mar 27', NULL, 1),
(7, '<p>This is the notification for admission on fall-2010 semester.Interested students are requested to collect their form from admission office.</p>', '0', 'Jul 08', '03:15 PM', 1),
(8, '<p>My name is ratul and i am going to be insaine if i am not properly have finished my job.So i take it as a challenge.</p>', NULL, 'Jul 09', NULL, 1),
(9, '<p>All the classes of undergraduate programmes of Ahsanullah University of Science and Technology at Dhaka will remain closed from 30.11.2008 to 12.12.2008.</p>', '', 'Jul 11', '03:37 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE `page_info` (
  `page_id` int(11) NOT NULL auto_increment,
  `page_title` varchar(30) NOT NULL,
  `page_meta` text NOT NULL,
  PRIMARY KEY  (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`page_id`, `page_title`, `page_meta`) VALUES
(1, 'home', 'Ahsanullah University of Science & Technology,'),
(2, 'about', 'AUST is about nothing'),
(3, 'accreditation', 'accreditation and ranking information about aust'),
(4, 'publication', 'The publications of aust '),
(5, 'annual_report', 'annual reports of aust'),
(7, 'papers', 'papers published by faculty members'),
(8, 'journal', 'journal published by aust'),
(9, 'magazines', 'magazines of aust'),
(10, 'books', 'books published by aust'),
(11, 'campus site', 'aust campus,campus pictures'),
(12, 'administration', 'administration of aust'),
(13, 'office_vc', 'office of the vice-chancellor,aust'),
(14, 'office_treasurer', 'office of the treasurer,aust'),
(15, 'admin_office', 'aust,administrative office'),
(17, 'academics', 'ahsanullah university of science & technology [academics]'),
(18, 'exam_&_grading', 'ahsanullah university of science & technology [exam_&_grading]'),
(19, 'calender', 'aust academic calender'),
(20, 'facilities', 'ahsaullah university science & technology [facilities]'),
(21, 'admission', 'admission information about aust'),
(22, 'un_ad_notice', 'admission notice for undergraduate studies in aust'),
(23, 'un_ad_procedure', 'addmission procedure for undergraduate studies in aust'),
(24, 'un_finance', 'tution & fees for undergraduate studies in aust'),
(25, 'un_reward', 'scholarship inundergraduate studies [aust]'),
(26, 'g_ad_notice', 'admission notice for graduate studies in aust'),
(27, 'g_ad_procedure', 'admission procedure for graduate studies in aust'),
(28, 'g_finance', 'tution & fees for graduate studies in aust'),
(29, 'faculty', 'faculty list of aust');

-- --------------------------------------------------------

--
-- Table structure for table `page_item`
--

CREATE TABLE `page_item` (
  `item_no` int(11) NOT NULL auto_increment,
  `item_heading` text NOT NULL,
  `item_details` text,
  `page_id` int(11) default NULL,
  PRIMARY KEY  (`item_no`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `page_item`
--

INSERT INTO `page_item` (`item_no`, `item_heading`, `item_details`, `page_id`) VALUES
(1, 'banner', '<h2>Welcome to Aust Website</h2>\r\n<p style="padding-top: 15px;">Sponsored by the Dhaka Ahsania Mission and approved by the Government of the  Peoples  Republic of Bangladesh, Ahsanullah University of Science and Technology has been successfully carrying out its  noble mission since 1995.</p>\r\n<p style="padding-top: 15px;">It maintains close collaboration with the International Association of Universities (IAU), University Grants Commission (UGC), Bangladesh and many other national and  international educational institutions and professional bodies.</p>', 1),
(2, 'History', '<p><span style="font-size: x-large;">&nbsp;T</span>he Ahsanullah University of Science and Technology (AUST) was founded by the Dhaka Ahsania Mission in 195.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;Dhaka Ahsania Mission is a non-profit voluntary organization in Bangladesh. The Mission was established in 1958 by Khan Bahadur Ahsanullah, an outstanding educationist and social reformer of undivided India. With his own vision of a better society, characterized by a wealth of moral and spiritual values of the highest humanism that are universally acclaimed through ages and manifested in every sphere of life&ndash;social, economic and cultural; and access to education and resources, he established the Mission. His remarkable educational reforms include among others introduction of roll number system in the public examination and creating equal opportunity for education of all groups of people in the society.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;Besides, he has contributed to the society by writing a large number of books covering a wide range of areas from human and social life, history, human development, literature, religion, biography, moral values etc.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;Though initially charity and welfare activities were the major focus of the Mission agenda, it has expanded its arena of activities leaning towards sustainable development strategies with the passage of time since early 1980s.</p>', 2),
(3, 'Vission & Mission', '<p><span style="font-size: x-large;">T</span>he Ahsanullah University of Science and Technology will be the premier centre of excellence in science, engineering and technology by creating and transferring knowledge with human touch to the young generations to come to enhance the quality of life in Bangladesh and beyond.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;The mission of the Ahsanullah University of Science and Technology is to develop human resources in the fields of science, engineering and technology to meet the ever changing needs of the society in the perspective of the highly complex and globalized world and to do so it aims at producing quality graduates imbued with the spirit of ethical values and equipped with knowledge and skills appropriate to the fast changing world so that they can face the challenges successfully wherever they are and contribute to social and economic development of the country in their own humble way.</p>', 2),
(4, 'Objectives', '<p><span style="font-size: x-large;">T</span>he aims and objectives of the University can be summarized as follows:</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;To impart need based programs of science, technology, business and social sciences for the students who will attend classes in the University as well as who are unable to attend classes and desire home based study.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;To offer programs covering all important fields and disciplines of science, technology, medical science, business and social sciences including teachers&rsquo; training.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;To develop programs examining the modern trends on the need and development of science, technology, business, social sciences and human resource development; observing carefully the employment opportunities and market needs both at home and abroad.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;To organize programs in science, technology, business and social science including teachers&rsquo; training for awarding degrees, diplomas and certificate of proficiency at all levels.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;To arrange two methods of delivery &ndash; a) in-campus education and                     b) open learning system.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;To go for gradual expansion of departments and programs of learning as per rules and regulations of Private University Act, 1992 and in accordance with the needs of the country and the demand abroad.</p>', 2),
(5, 'Founder', '<p style="color: #ff0000;"><span class="example2" style="font-size: x-small; color: #ff0000;"><span class="example1"><em>The Inspiration of The University</em></span></span></p>\r\n<p><span style="font-size: x-small;"><strong>Hazrat Khan Bahadur Ahsanullah(R)</strong>,M.A., M.R.S.A., I.E.S. (1873-1965), was the Assistant Director of Public Instruction for Bengal and Assam Provinces of undivided  India (1925-29).</span></p>', 2),
(6, 'Accreditation', '<p><span style="font-size: x-large;">T</span>he Academic programs of the University are recognized by many <strong>national</strong> and international educational institutions and professional bodies such as: -</p>\r\n<div class="list">\r\n<ul>\r\n<li><a href="../../../about/accreditation.php?page_id=3">UGC (University Grants Commission , Bangladesh)</a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">UGC (University Grants Commission , Bangladesh)</a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">UGC (University Grants Commission , Bangladesh)</a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">UGC (University Grants Commission , Bangladesh)</a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">UGC (University Grants Commission , Bangladesh)</a></li>\r\n<li>UGC (University Grants Commission , Bangladesh)</li>\r\n<li>UGC (University Grants Commission , Bangladesh)</li>\r\n</ul>\r\n</div>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; A number of memorandums of understanding have been signed between this University and</p>\r\n<p>&nbsp;</p>\r\n<div class="list">\r\n<ul>\r\n<li><a href="../../../about/accreditation.php?page_id=3">The University of Wyoming, USA, </a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">The Drexel University, USA, </a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3"> The Washington State University, USA</a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">The University of Houston, USA </a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">The Sejong University, Seoul, Korea</a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">The Erasmus Mundus Mobility with Asia (EMMA)</a></li>\r\n<li><a href="../../../about/accreditation.php?page_id=3">The Asian Institute of Technology (AIT), Thailand</a></li>\r\n</ul>\r\n</div>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;So that the students of this university may have the opportunity of graduate and/or under graduate study with appropriate credit transfer.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;Similar arrangements are under process with Dublin City University, Ireland, University of Bradford and other universities of USA, Australia, UK, Ireland, Canada and South Korea.</p>', 3),
(7, 'Publications', '<p><span style="font-size: x-large;">&nbsp;W</span>elcome to the Publications of AUST as well as of the Members of the Faculty of the University.We invite you to browse our published books by Faculty members,students of the Universtiy,annual reports of the University,research papers submitted by various Faculty members.Thank you for your interest in our publications.</p>', 4),
(8, 'Office of The Vice-Chancellor', '<font style="font-family:Georgia; font-size:14px; line-height:20px;">Professor Dr. Engr. M. Anwar  Hossain</font><br />\r\n						<font style="font-family:Arial; font-size:12px; font-weight:bold;line-height:20px">Vice-Chancellor of the University</font><br />\r\n						<font style="font-family:Georgia; font-size:12px; line-height:20px">[Chief Executive and Academic Officer]</font>', 13),
(9, 'Brief life Sketch', '<p>\r\n								&nbsp;&nbsp;&nbsp;&nbsp;Prof. Dr. Engr. M. Anwar Hossain is the <strong>First Vice-Chancellor of the Islamic University of Technology(IUT)</strong>, Dhaka, Bangladesh, a multi-Governmental, multi-cultural University of the Jeddah-based 57-nation <strong>Organization of the Islamic Conference (OIC)</strong>.  He worked in this OIC institution since 1986 (then called <strong>ICTVTR</strong>), first as <strong>Professor and Head of Mechanical and Chemical Engineering Department</strong>, next as its <strong>Director General</strong> (then called as <strong>IIT</strong>) and finally as <strong>Vice-Chancellor of IUT</strong> till retirement in January 2003. During the formative stage of the institution, he was deeply involved in framing its rules and regulations, development of its course curricula, preparation of the laboratory and workshop layouts and selection and installation of the equipments and machineries, as the Team Leader of the Mechanical and Chemical Engineering Expert Group.\r\n							</p>\r\n							<p>\r\n								&nbsp;&nbsp;&nbsp;&nbsp;Born on 05 January 1941 in Pabna, Bangladesh, Prof. Hossain obtained B.Sc. Engg. (Mechanical) degree in 1961 from Ahsanullah Engineering College ( now BUET ) under the University of Dhaka, Bangladesh after finishing his studies at secondary and higher secondary level from G.C. Institution and Edward College in Pabna. He was awarded M.S. and Ph.D. degrees from  Cornell University, U.S.A.  in 1964 and 1966 respectively. All through he had a brilliant academic record to his credit, particularly stood in order of merit First in I.Sc. (now H.S.C), First with Honours in Preliminary B.Sc. Engg. and Second in B.Sc.Engg. (Mech.) Examinations.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;Before joining  IUT in 1986 (then called as ICTVTR), Prof. Hossain served Bangladesh University of Engineering and Technology (BUET) for long 25 years from 1961 as, among others, Professor, Head and Dean of Mechanical Engineering, Member of the Academic Council, Director of Students Welfare (DSW), Founder Director of the Centre for Energy Studies and Provost of Hall of Residence. He was awarded Commonwealth Academic Staff Fellowship in 1974. He also worked in  <strong>Mosul  University in Iraq</strong>.  He has about 40 papers published in national and international journals, primarily related to <strong>energy sector</strong>. As a mark of recognition of remarkable activities, his name has been included in the 5th  edition of the <strong>WHO''S WHO IN THE WORLD</strong>  published by Marquis, USA.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;Dr. Hossain was also associated in various ways and capacities with a number of other educational institutions, research organizations, commissions and public sector corporations of Bangladesh, like Bangladesh Agricultural University, <strong>Bangladesh Agricultural Research Council, University Grants Commission, Bangladesh Atomic Energy Commission, Bangladesh Planning Commission, Bangladesh Chemical Industries Corporation, Steel  & Engineering Corporation, Bangladesh Standard Institute, Council for Bangladesh Institutes of Technology (BITs),</strong>  etc. He was the <strong>Founder President of Bangladesh Society of Mechanical Engineers</strong> and was the last <strong>Chairman of the Board of Governors of BIT</strong> Rajshahi, now converted into a University, <strong>Rajshahi University of Engineering and Technology (RUET)</strong>.  He was also the <strong>Founder Head of Energy and Environment Centre of IUT</strong>.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;Dr. Hossain has a long association and deep involvement in various capacities with the activities of the <strong>Institution of Engineers, Bangladesh (IEB)</strong>. To mention a few, he was elected as the <strong>President of IEB</strong> for the years 1990 and 1991 when major changes in the constitution of the Institution were initiated to make the apex body of the engineers of Bangladesh more dynamic and useful to the society. Earlier, he was elected as the <strong>Vice-President of IEB</strong> when he gave leadership in the <strong>PROKRICHI</strong> Movement of 1985-86 for the engineering community, as an outcome of which all the <strong>Engineering Colleges</strong>  of Bangladesh were made operational as autonomous  <strong>Bangladesh Institutes of Technology</strong>.  Presently, he is a Member and Assessor of the  <strong>Bangladesh Professional Engineers Registration Board (BPERB) and Equivalence Committee of IEB</strong>.  In recognition of his outstanding performance and remarkable contributions, IEB presented him its highest award, <strong>IEB GOLD MEDAL</strong>, in 2004.\r\n							</p>\r\n							<p>\r\n								At the regional and international level, Prof. Hossain was a Member of the Executive Council of the <b>World Federation of Engineering Organizations (WFEO)</b> and its Education and Training-Committee, a <b>Founder Member of the Executive Committee of the Federation of  Engineering Institutions of Islamic Countries (FEIIC)</b> and the Chairman of its Education Committee and a Member of the Executive Committee of the <b>Federation of Engineering Institutions of South and Central Asia (FEISCA)</b> and its Task Forces. He was also associated with the <b>World University Services (WUS)</b> in various capacities.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;At present, Prof. Hossain is contributing significantly as an active member of the <b>National Road Safety Council of Bangladesh</b>.  He is also the Chief advisor of a very recently established non­profit Non-Govt. Organization called  <b>Bangladesh Center for Development Agenda (BCDA)</b>.  Recently he worked as a member of the <b>6th National Pay Commission of Bangladesh</b> to recommend to the Government the new pay scales and allowances for all the Government employees as well as for the employees of all the autonomous and semi-autonomous bodies in the public sector. Also very recently, he completed a specific task as a member of the Advisory Committee set up by the newly established  <b>Anti Corruption Commission of  Bangladesh</b>.\r\n							</p>\r\n							<p>\r\n								&nbsp;&nbsp;&nbsp;&nbsp;Being imbued with the spirit of altruism, Dr. Hossain, a widely traveled person, has devoted himself to various social, philanthropic and extra-curricular activities. For many years, he was the  <b>President</b> of Dhaka-based <b>Pabna Samity</b> (Association) established for the welfare of the people of Pabna living in Dhaka. He was also the <b>Founder President of 61 Club</b> of the 1961 engineering graduates of the erstwhile Ahsanullah Engineering College, for two terms when <b>Dr. Rashid Professorial Chair</b> and prestigious 61 Club Merit Scholarship were instituted in <b>BUET</b>. Recently, he was the <b>President of  North Bengal People''s Welfare Samity</b>.  He was also a very good soccer player because of which he was invited to participate in the <b>Combined Universities Football Camp</b> of the then Pakistan in 1957.\r\n							</p>', 13),
(10, 'Office of The Treasurer', '<font style="font-family:Georgia; font-size:14px; line-height:20px;">Dr. Kazi Shariful Alam</font><br />\r\n						<font style="font-family:Arial; font-size:12px; font-weight:bold;line-height:20px"> M. Com. (D.U), Ph.D.  (Benaras)</font><br />\r\n						<font style="font-family:Georgia; font-size:12px; line-height:20px">Treasurer of the University</font>', 14),
(11, 'Brief life Sketch', '<p>\r\n								&nbsp;&nbsp;&nbsp;&nbsp;Prof. Dr. Engr. M. Anwar Hossain is the <strong>First Vice-Chancellor of the Islamic University of Technology(IUT)</strong>, Dhaka, Bangladesh, a multi-Governmental, multi-cultural University of the Jeddah-based 57-nation <strong>Organization of the Islamic Conference (OIC)</strong>.  He worked in this OIC institution since 1986 (then called <strong>ICTVTR</strong>), first as <strong>Professor and Head of Mechanical and Chemical Engineering Department</strong>, next as its <strong>Director General</strong> (then called as <strong>IIT</strong>) and finally as <strong>Vice-Chancellor of IUT</strong> till retirement in January 2003. During the formative stage of the institution, he was deeply involved in framing its rules and regulations, development of its course curricula, preparation of the laboratory and workshop layouts and selection and installation of the equipments and machineries, as the Team Leader of the Mechanical and Chemical Engineering Expert Group.\r\n							</p>\r\n							<p>\r\n								&nbsp;&nbsp;&nbsp;&nbsp;Born on 05 January 1941 in Pabna, Bangladesh, Prof. Hossain obtained B.Sc. Engg. (Mechanical) degree in 1961 from Ahsanullah Engineering College ( now BUET ) under the University of Dhaka, Bangladesh after finishing his studies at secondary and higher secondary level from G.C. Institution and Edward College in Pabna. He was awarded M.S. and Ph.D. degrees from  Cornell University, U.S.A.  in 1964 and 1966 respectively. All through he had a brilliant academic record to his credit, particularly stood in order of merit First in I.Sc. (now H.S.C), First with Honours in Preliminary B.Sc. Engg. and Second in B.Sc.Engg. (Mech.) Examinations.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;Before joining  IUT in 1986 (then called as ICTVTR), Prof. Hossain served Bangladesh University of Engineering and Technology (BUET) for long 25 years from 1961 as, among others, Professor, Head and Dean of Mechanical Engineering, Member of the Academic Council, Director of Students Welfare (DSW), Founder Director of the Centre for Energy Studies and Provost of Hall of Residence. He was awarded Commonwealth Academic Staff Fellowship in 1974. He also worked in  <strong>Mosul  University in Iraq</strong>.  He has about 40 papers published in national and international journals, primarily related to <strong>energy sector</strong>. As a mark of recognition of remarkable activities, his name has been included in the 5th  edition of the <strong>WHO''S WHO IN THE WORLD</strong>  published by Marquis, USA.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;Dr. Hossain was also associated in various ways and capacities with a number of other educational institutions, research organizations, commissions and public sector corporations of Bangladesh, like Bangladesh Agricultural University, <strong>Bangladesh Agricultural Research Council, University Grants Commission, Bangladesh Atomic Energy Commission, Bangladesh Planning Commission, Bangladesh Chemical Industries Corporation, Steel  & Engineering Corporation, Bangladesh Standard Institute, Council for Bangladesh Institutes of Technology (BITs),</strong>  etc. He was the <strong>Founder President of Bangladesh Society of Mechanical Engineers</strong> and was the last <strong>Chairman of the Board of Governors of BIT</strong> Rajshahi, now converted into a University, <strong>Rajshahi University of Engineering and Technology (RUET)</strong>.  He was also the <strong>Founder Head of Energy and Environment Centre of IUT</strong>.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;Dr. Hossain has a long association and deep involvement in various capacities with the activities of the <strong>Institution of Engineers, Bangladesh (IEB)</strong>. To mention a few, he was elected as the <strong>President of IEB</strong> for the years 1990 and 1991 when major changes in the constitution of the Institution were initiated to make the apex body of the engineers of Bangladesh more dynamic and useful to the society. Earlier, he was elected as the <strong>Vice-President of IEB</strong> when he gave leadership in the <strong>PROKRICHI</strong> Movement of 1985-86 for the engineering community, as an outcome of which all the <strong>Engineering Colleges</strong>  of Bangladesh were made operational as autonomous  <strong>Bangladesh Institutes of Technology</strong>.  Presently, he is a Member and Assessor of the  <strong>Bangladesh Professional Engineers Registration Board (BPERB) and Equivalence Committee of IEB</strong>.  In recognition of his outstanding performance and remarkable contributions, IEB presented him its highest award, <strong>IEB GOLD MEDAL</strong>, in 2004.\r\n							</p>\r\n							<p>\r\n								At the regional and international level, Prof. Hossain was a Member of the Executive Council of the <b>World Federation of Engineering Organizations (WFEO)</b> and its Education and Training-Committee, a <b>Founder Member of the Executive Committee of the Federation of  Engineering Institutions of Islamic Countries (FEIIC)</b> and the Chairman of its Education Committee and a Member of the Executive Committee of the <b>Federation of Engineering Institutions of South and Central Asia (FEISCA)</b> and its Task Forces. He was also associated with the <b>World University Services (WUS)</b> in various capacities.\r\n							</p>\r\n							<p>\r\n								 &nbsp;&nbsp;&nbsp;&nbsp;At present, Prof. Hossain is contributing significantly as an active member of the <b>National Road Safety Council of Bangladesh</b>.  He is also the Chief advisor of a very recently established non­profit Non-Govt. Organization called  <b>Bangladesh Center for Development Agenda (BCDA)</b>.  Recently he worked as a member of the <b>6th National Pay Commission of Bangladesh</b> to recommend to the Government the new pay scales and allowances for all the Government employees as well as for the employees of all the autonomous and semi-autonomous bodies in the public sector. Also very recently, he completed a specific task as a member of the Advisory Committee set up by the newly established  <b>Anti Corruption Commission of  Bangladesh</b>.\r\n							</p>\r\n							<p>\r\n								&nbsp;&nbsp;&nbsp;&nbsp;Being imbued with the spirit of altruism, Dr. Hossain, a widely traveled person, has devoted himself to various social, philanthropic and extra-curricular activities. For many years, he was the  <b>President</b> of Dhaka-based <b>Pabna Samity</b> (Association) established for the welfare of the people of Pabna living in Dhaka. He was also the <b>Founder President of 61 Club</b> of the 1961 engineering graduates of the erstwhile Ahsanullah Engineering College, for two terms when <b>Dr. Rashid Professorial Chair</b> and prestigious 61 Club Merit Scholarship were instituted in <b>BUET</b>. Recently, he was the <b>President of  North Bengal People''s Welfare Samity</b>.  He was also a very good soccer player because of which he was invited to participate in the <b>Combined Universities Football Camp</b> of the then Pakistan in 1957.\r\n							</p>', 14),
(12, 'Address', '<p>The Ahsanullah University of Science and Technology will be the premier centre of excellence in science, engineering and technology by creating and transferring knowledge with human touch to the young generations to come to enhance the quality of life in Bangladesh and beyond.</p>', 15),
(13, 'Contact Information', '<p>The Ahsanullah University of Science and Technology will be the premier centre of excellence in science, engineering and technology by creating and transferring knowledge with human touch to the young generations to come to enhance the quality of life in Bangladesh and beyond.</p>', 15),
(14, 'Aust Leadership', '<div class="txt">\r\n<div class="txt-1"><strong>Chancellor</strong></div>\r\n<div class="txt-2"><strong>Mr. Md Zillur Rahman</strong></div>\r\n<div class="txt-3">President of The Peoples Republic of <strong>Bangladesh</strong>.</div>\r\n</div>', 1),
(15, 'Aust Leadership', '	<div class="txt">\r\n		<div class="txt-1">\r\n			<strong>Syndicate-Chairman</strong>\r\n		</div>\r\n		<div class="txt-2">\r\n			<strong>Mr. Kazi Rafiqul Alam</strong>\r\n		</div>\r\n		<div class="txt-3">\r\n			President Dhaka Ahsania Mission.\r\n		</div>\r\n	</div>', 1),
(16, 'Aust Leadership', '	<div class="txt">\r\n		<div class="txt-1">\r\n			<strong>Vice-Chancellor</strong>\r\n		</div>\r\n		<div class="txt-2">\r\n			<strong><a href="administration/office_vc.html" style=" color:#336600">Prof. Dr. M. Anwar Hossain</a></strong>\r\n		</div>\r\n		<div class="txt-3">\r\n			(First Vice-Chancellor of IUT of OIC-Dhaka)\r\n		</div>\r\n	</div>', 1),
(17, 'University Governance & Administration', 'syndicate', 12),
(18, 'University Governance & Administration', 'university administration', 12),
(19, 'University Councils', 'academic council', 12),
(20, 'University Councils', 'international advisory council', 12),
(21, '<font face="Georgia" color="#666666">Academic Program</font>', 'faculty', 17),
(22, '<h2>Introduction</h2>', '<p>\r\n			<i><font size="+2" face="Georgia">T</font>he Ahsanullah University of Science and Technology will be the premier centre of excellence in science, engineering and technology by creating and transferring knowledge with human touch to the young generations to come to enhance the quality of life in Bangladesh and beyond.</i>\r\n		</p>', 17),
(23, '<h2>Examination & Grading System</h2>', '<p>\r\n			<ul>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he performance of a student in a theoretical course of study will be evaluated on the basis of the following criteria :\r\n					<ul>\r\n						<li>\r\n							Continuous assessment (assessment of class attendance, class performance, quizzes and/or assignments etc.).\r\n						</li>\r\n						<li>\r\n							Semester Final Examination. \r\n						</li>\r\n						<li>\r\n							Clearance Examination (for clearance of the courses in which the students failed in the Regular Examination, if any).\r\n						</li>\r\n						<li>\r\n							Carry Over Examination (for clearance of back log of the course(s) of previous semester(s), if any).\r\n						</li>\r\n						<li>\r\n							Improvement Examination (for improvement of the grade(s) obtained in the Regular Examinations, if any).\r\n						</li>\r\n					</ul>		\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he continuous assessment and the Semester Final Examination will form Regular Examination while the Clearance Examination, Carry Over Examination and Improvement Examination will provide additional opportunities to the students.\r\n				</li>	\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he distribution of marks in the continuous assessment and in the Semester Final/Clearance/Carry Over/Improvement Examination will be as follows:\r\n						<ul>\r\n							<li>\r\n								Class participation (i.e. class attendance, class performance etc.)..... 10%\r\n							</li>\r\n							<li>\r\n								Quizzes and/or assignments.......................................................... 20%\r\n							</li>\r\n							<li>\r\n								Semester Final/Clearance/Carry Over/Improvement Examination.... 70%\r\n							</li>\r\n						</ul>Total:...................................................................................100%\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he number of quizzes and/or assignments in a theoretical course of study shall ordinarily be (n + 1), where ‘n’ is the number of credit hours of the course. Evaluation of the performance will be on the basis of the best ‘n’ quizzes and/or assignments.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he performance of a student in a sessional/practical course will be evaluated on the basis of class attendance, class performance, quiz, assignment, report, practical examination, jury viva voce etc. The distribution of marks in the course will be determined by the teachers concerned.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he letter grades and the corresponding grade-points will be awarded for the theoretical courses in the Regular Examination and for the practical/sessional courses in accordance with the provision shown below:\r\n					<div class="table">\r\n						<table border="1" width="400" cellpadding="0" cellspacing="0" bordercolor="#666666">\r\n							<tr>\r\n								<th>Numerical Grade</th><th>Latter Grade</th><th>Grade Point</th>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									80% or above\r\n								</td>\r\n								<td>\r\n									A+\r\n								</td>\r\n								<td>\r\n									4.00\r\n								</td>\r\n							</tr>\r\n						</table>\r\n					</div>\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>A</b></font>part from the letter grades listed above, the students may be awarded some other letter grades for their different status in a course. The letter grade  ‘W’ will be given for the withheld result of a student in a course. Subject to the recommendation of the concerned Head of the Department and the approval of the Vice Chancellor of the University, a student may be awarded the letter grade ‘E’ for exemption or waiver of a course. The letter grade ‘P’ will be awarded for the course(s) the students passed in previous semester(s).\r\n					<div class="table">\r\n						<table border="1" width="400" cellpadding="0" cellspacing="0">\r\n							<tr>\r\n								<th>\r\n									Course Status\r\n								</th>\r\n								<th>\r\n									Letter Grade\r\n								</th>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									Withheld\r\n								</td>\r\n								<td>\r\n									W\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									Exempted\r\n								</td>\r\n								<td>\r\n									E\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									Passed\r\n								</td>\r\n								<td>\r\n									P\r\n								</td>\r\n							</tr>\r\n						</table>\r\n					</div>\r\n					Grade Point Average (GPA) of a student will be computed without the grades mentioned above.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>E</b></font>very course has a certain number of credit hour which describes its weightage. The credit hour of a theoretical course and the credit hour of a practical/sessional course refer to contact hour per week and half of the contact hour per week of the courses respectively. The number of credit hours a student has completed satisfactorily and the weighted average of the grade points he/she has maintained measure the performance of the student. Calculation of Grade Point Average (GPA) can be explained as follows:\r\n						<ul>\r\n							<li>\r\n								Grade Point Average (GPA) &nbsp;&nbsp;=&nbsp;&nbsp;Summation of (Credit hour in a course x Grade point earned &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in that course)&nbsp;&nbsp;/&nbsp;&nbsp;Total number of credit hours completed\r\n							</li>\r\n						</ul>\r\n					Suppose, a student has completed five courses in a semester and obtained the following grades:\r\n						<div class="table">\r\n							<table width="400" border="0">\r\n								<tr>\r\n									<td>\r\n										GPA\r\n									</td>\r\n									<td>\r\n										=\r\n									</td>\r\n									<td>\r\n										<img src="images/equation.jpg" />\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									\r\n									</td>\r\n									<td>\r\n										=\r\n									</td>\r\n									<td width="20">\r\n										3.52\r\n									</td>\r\n								</tr>\r\n							</table>\r\n						</div>	\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he total marks assigned to a theoretical/practical course of study is 100 and the duration of Semester Final/Improvement/Clearance/Carry Over Examination of a theoretical course is 3 hours. The total marks assigned to continuous assessment (obtained on the basis of class participation, quizzes and/or assignments etc.) and the Semester Final/Clearance/Carry Over/Improvement Examination are 30 & 70 respectively.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>A</b></font> student who remains absent in the Semester Final/ Clearance/ Improvement/ Carry Over Examination of a course of study will be given the grade ‘F’ for the course. The total mark and the corresponding grade of the students who are absent in the examinations of a course will be entered in the mark sheet of the course considering the mark of the examinations as zero.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he Clearance Examination of a course will be held only for the students obtaining the grade ‘F’ (failed in the course) in the Regular Examination of the course. The Clearance/Carry Over/Improvement Examination of a semester will be held over a period of 1 to 2 weeks at the end of the Semester Final Examination of the semester.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he Clearance Examination of a course will carry 70% of the total marks assigned to the course, the rest of the mark (30%) will be entered from the record of the continuous assessment secured earlier by the student when he/she attended the classes. Whatever is the total mark obtained by the student, the highest attainable grade with the Clearance Examination is ‘C’.\r\nSo the grading scale for the students appearing in the Clearance Examination will be as follows:\r\n					<div class="table">\r\n						<table width="400" border="1" cellpadding="0" cellspacing="0">\r\n							<tr>\r\n								<th>\r\n									Numerical Grade\r\n								</th>\r\n								<th>\r\n									Letter Grade\r\n								</th>\r\n								<th>\r\n									Grade Point\r\n								</th>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									45% or above\r\n								</td>\r\n								<td>\r\n									C\r\n								</td>\r\n								<td>\r\n									2.25\r\n								</td>	\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									40% to less than 45%\r\n								</td>\r\n								<td>\r\n									D\r\n								</td>\r\n								<td>\r\n									2.0\r\n								</td>	\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									Less than 40%\r\n								</td>\r\n								<td>\r\n									F\r\n								</td>\r\n								<td>\r\n									0.0\r\n								</td>	\r\n							</tr>\r\n						</table>	\r\n					</div>\r\n				</li>\r\n				<li>	\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>A</b></font> student obtaining the grade ‘F’ in a maximum of 2 (two) theoretical courses of a semester will also be promoted to the next higher class with carry over in the failed theoretical course(s) if the cumulative number of the courses including the number of carry over courses of the previous semester(s) of the student concerned does not exceed the highest allowable limit of 4 (four). The students can clear the back log of the carry over course(s) in the Carry Over Examinations of the relevant semester. The examination & grading system of the Carry Over Examinations will be in the same manner as the Clearance Examination. \r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>I</b></font>f the number of failed courses of a student in a semester exceeds the highest limit of 2 or if the cumulative number of failed courses including the number of carry over courses of the student exceeds the highest limit of 4, the student will not be promoted to the immediate higher class. In this case, the student must re-register for the course(s) in which he/she failed in the semester and bring down the number of failed courses including the carry over course(s) within the allowable limits of 4 & 2 to be promoted to the next higher semester. \r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>I</b></font>f the cumulative number of failed courses including the number of carry over courses of a student enrolled in 4th year 2nd semester of 4-year bachelor degree program or in 5th year 2nd semester of 5-year bachelor degree program exceeds the highest limit of 4 (four), the student will have to re-register for the courses of the semester in which he/she failed. If the number of failed courses of the last semester of the programs exceeds the highest limit of 2 (two), the student will have to re-register for the courses of the semester in which he/she failed. A student can appear at the Carry Over Examination of the courses in the relevant subsequent semester if the number of failed courses does not exceed the limit of 4 & 2 as specified above.  \r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>F</b></font>or appearing in the Carry Over Examinations, the students are required to apply for enrollment within due time in the prescribed application form available in the office of the Controller of Examinations of the University. \r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he students who have not been promoted to the next higher semester can re-register in the subsequent semester for the course(s) (both theoretical & practical) in which they failed. The grade(s) secured by the students in the re-registered course(s) will be considered for the result and Grade Point Average (G.P.A.) of the students concerned for that semester. However, the grade(s) obtained by the students in the previous semester will also be recorded in the transcript/grade card and tabulation sheet of previous semester only for chronological sequence. The students are required to apply in the prescribed application form available in the office of the Registrar of the University for re-registration. The application form duly filled in will be submitted within 2 weeks from the commencement of the classes. \r\n				</li>\r\n				<li>\r\n					 &nbsp;&nbsp;&nbsp;<font size="3"><b>F</b></font>or the purpose of grade improvement, a student obtaining a passing grade lower than ‘B’ in the Regular Examination of a theoretical course can appear at the relevant Improvement Examination of the   semester by cancelling the passing grade of the  course  secured  by  him/her. The highest attainable grade with the Improvement Examination is ‘B’ and the grade obtained with the Improvement Examination will be considered for  the  result  and  G.P.A  of  a student. But the grade obtained by the student in the Regular Examination will also be recorded in the tabulation sheet/transcript/grade card only for chronological sequence. The letter grades will be awarded with the Improvement Examinations in accordance with the provision given below:\r\n					 <div class="table">\r\n						<table width="400" border="1" cellpadding="0" cellspacing="0">\r\n							<tr>\r\n								<th>\r\n									Numerical Grade\r\n								</th>\r\n								<th>\r\n									Letter Grade\r\n								</th>\r\n								<th>\r\n									Grade Point\r\n								</th>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									60% or above\r\n								</td>\r\n								<td>\r\n									B\r\n								</td>\r\n								<td>\r\n									3.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									55% to less than 60%\r\n								</td>\r\n								<td>\r\n									B-\r\n								</td>\r\n								<td>\r\n									2.75\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									50% to less than 55%\r\n								</td>\r\n								<td>\r\n									C+\r\n								</td>\r\n								<td>\r\n									2.50\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									45% to less than 50%\r\n								</td>\r\n								<td>\r\n									C-\r\n								</td>\r\n								<td>\r\n									2.25\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									40% to less than 45%\r\n								</td>\r\n								<td>\r\n									D\r\n								</td>\r\n								<td>\r\n									2.00\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td>\r\n									Less than 40%\r\n								</td>\r\n								<td>\r\n									F\r\n								</td>\r\n								<td>\r\n									0.00\r\n								</td>\r\n							</tr>\r\n						</table>\r\n					 </div>\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he Improvement Examination of a course will carry 70% of the total mark assigned to the course and like the Semester Final/ Clearance Examinations, the rest of the mark will be entered in the mark sheet of the course from the record of the continuous assessment secured earlier by the student when he/she attended the classes of the semester. For appearing in the Improvement Examination of a course, the students are required to apply for enrollment in the prescribed application form available in the office of the Controller of Examinations at least four (4) days before the examination date of the course. \r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>A</b></font> student of a 4-year degree program can appear in the Improvement Examination in a maximum of 4 (four) courses while a student of a 5-year degree program can do the same in a maximum of 5 (five) courses in his/her student career at AUST.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>A</b></font> student failing in any sessional/practical course will have to repeat the semester. But a student failing in the course Surveying Practical may be promoted to the next higher class, if eligible. A student who remains absent in the classes of the course Surveying Practical due to reason acceptable to the authority of the University, will get another chance to attend the classes & pass the course along with the students of other batch in the next relevant semester.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>A</b></font> student of a semester who fails to submit the report/thesis of the course Project/Thesis during the semester will have to enroll for the course in the subsequent semester of his/her submission of the report/thesis.\r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>T</b></font>he students of all bachelor degree programs are required to attend 60% of the classes held in each course of a semester. The students failing to attend the requisite percentage of classes in any course will not be allowed to appear at the Semester Final/ Clearance/Improvement/Carry Over Examinations of the course in the semester. However, the authority of the University may condone the shortage of requisite percentage of class attendance on grounds acceptable to the authority. \r\n				</li>\r\n				<li>\r\n					&nbsp;&nbsp;&nbsp;<font size="3"><b>A</b></font>ll 4-year degree programs at AUST require completion of degree requirements within a maximum period of 7 years and a 5-year degree program requires completion of all degree requirements within a maximum period of 8 years. Failure to complete all degree requirements within the given time frame may disqualify a student from continuation of his/her study at AUST.\r\n				</li>\r\n			</ul>\r\n		</p>', 18),
(24, 'Aust Ranking', '<p><span>Ahsan University of Science and Technology, Dhaka, ranks:</span></p>\r\n<ul style="color: #663333;">\r\n<li>1st in all Private Universities of Bangladesh</li>\r\n<li>3rd in all Universities of Bangladesh</li>\r\n<li>77th in the Indian Subcontinent</li>\r\n<li>7084th in the world</li>\r\n</ul>\r\n<p><span style="font-family: Georgia; font-size: x-small;"><strong>Source :</strong>&nbsp;&nbsp;Cybermetrics Lab (January 2008). Regional and Global Ranking of Indian subcontinent universities. CINDOC-CSIC, Madrid, Spain.</span></p>', 3),
(25, '14th Annual Report 2008-2009', '<p>&nbsp;</p>\r\n<h3 style="text-align: center;">Forewarded</h3>\r\n<hr />\r\n<p>It is more than a year since Ahsanullah University of Science &amp; Technology(AUST) has moves to its own newly constructed picturesque campus which has been subsequently approved by the University Grant Commision of Bangladesh on 28th April 2009 as the permanent campus of AUST.With this unique achievement and recognition- first of its kind in the private sector higher education in the country,the University has gained further impetus and momentum to meet the challanges arising out of ever increasing expectations of the public in general and new entrants having high academic records and their parents in particular.</p>\r\n<hr />\r\n<p>&nbsp;</p>', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`f_no`) REFERENCES `faculty` (`f_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dept_program`
--
ALTER TABLE `dept_program`
  ADD CONSTRAINT `dept_program_ibfk_1` FOREIGN KEY (`f_no`) REFERENCES `faculty` (`f_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `page_item` (`item_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `page_item`
--
ALTER TABLE `page_item`
  ADD CONSTRAINT `page_item_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `page_info` (`page_id`) ON DELETE CASCADE ON UPDATE CASCADE;
