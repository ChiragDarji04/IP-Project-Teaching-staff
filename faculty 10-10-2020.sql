-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 01:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `Sr` int(5) NOT NULL,
  `Training` varchar(20) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Program` varchar(170) NOT NULL,
  `Agency` varchar(100) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`Sr`, `Training`, `Title`, `Program`, `Agency`, `Duration`, `View`) VALUES
(1, 'Webinar', 'one day Webinar', 'Webinar on Simplifying IPR and Patent Filing', 'BVICAM', '2020-2021', 'docs/PatentFiling.pdf'),
(2, 'Webinar', 'one day Webinar', 'Webinar on COVID-19: Threat or Opportunity', 'BVICAM', '2020-2021', 'docs/ThreatorOpportunity.pdf'),
(3, 'Webinar', 'one day Webinar', 'Webinar on Citations and Reference Management using Mendeley', 'BVICAM', '2020-2021', 'docs/Citations.pdf'),
(4, 'Webinar', 'Internal Quality Assurance Cell', 'Fostering Research &\r\nDevelopment', 'VCET', '2020-2021', 'docs/Fostering.pdf'),
(5, 'Training', 'One day Orientation Program', 'Faculty Orientation Program on Mini Project of SE', 'Vidyalankar College Engineering, Wadala, Mumbai', '2020-2021', 'docs/964915e1-bca5-4b57-b7cf-d0d320a04fda.jpg'),
(6, 'Training', 'One Day Faculty Orientation Program\r\n', 'Paradigm and Computer Programming Fundamentals (ITC305) and Computer Programming Paradigm Lab\r\n(ITL303)', 'Konkan Gyanpeeth College of Engineering, Karjat', '2020-2021', 'docs/ComputerParadigm.pdf'),
(7, 'Training', 'One Day Faculty Orientation Program', 'C syllabus scheme on the subject of Java Programming(SBL)', 'Shah & Anchor Kutchhi Engineering College', '2020-2021', 'docs/JavaProgrammingLabCertificate.pdf'),
(8, 'FDP', 'One Week Workshop', 'One Week Capacity Building Workshop on \"Outcome Based Educational(OBE) and NBA Accreditation Process\"', 'BVICAM', '2020-2021', 'docs/OBEWeekFDP27-31July2020.pdf'),
(9, 'Webinar', 'one day Webinar', 'Webinar on Unleashing Data Science and AI', 'BVICAM', '2020-2021', 'docs/UnleashingData.pdf'),
(10, 'FDP', '2 Weeks Online FDP Spoken Tutorial', 'LaTeX', 'Gopalan College of Engg. With IIT Bombay', '2019-2020', 'docs/Latex.jpeg'),
(11, 'FDP', 'One Week Online FDP', 'Overcoming the Challenges in Adapting Online Technology in Teaching Learning', 'Jhulelal Institute of Technology', '2019-2020', 'docs/FDPweek.pdf'),
(12, 'FDP', '1 Week Online FDP', 'Moodle Test for Teachers with IIT Bombay-Spoken Tutorial', 'Shah & Anchor K. Engg. College', '2019-2020', 'docs/moodle25april.pdf'),
(13, 'Webinar', 'IQAC Webinar', 'Transaction Analysis in Education', 'VCET', '2019-2020', 'docs/Transaction.pdf'),
(14, 'FDP', 'one day Webinar', 'Moodle Test for Teachers with IIT Bombay-Spoken Tutorial', 'Shah & Anchor K. Engg. College', '2019-2020', 'docs/moodle6march.pdf'),
(15, 'Training', 'One Day ICT Based Course', 'One Day Workshop on Linux', 'Remote Center VCET, IIT Bombay', '2019-2020', 'docs/certificate-1_Linux.pdf'),
(16, 'Training', 'One Day ICT Based Course, IIT Bombay', 'One Day Workshop on eSim, a First Course in the IoT Series for Teachers', 'Remote Center VCET, IIT Bombay', '2019-2020', 'docs/certificateIoTSeries.pdf'),
(17, 'Training', 'One Day ICT Based Course, IIT Bombay', 'One Day Workshop on R', 'Remote Center VCET, IIT Bombay', '2019-2020', 'docs/RProgramming9Nov2019.pdf'),
(18, 'STTP', 'Two Week AICTE-ISTE Approved STTP', 'Scope of IoT for Social Upliftment', 'IT Dept, VCET', '2019-2020', 'docs/socialupliftments.pdf'),
(19, 'FDP', 'One Week FDP sponsored by Ministry of Electronics & Information Technology, Government of India', 'Recent Trends in IoT', 'St. John College,Palghar', '2019-2020', 'docs/st.jhon2019iot.jpg'),
(20, 'FDP', '4 day FDP', 'Machine Learning with IOT', 'RGIT', '2019-2020', 'docs/rgit2019.jpg'),
(21, 'Training', 'One Day ICT Based Course ', 'One Day Workshop on C and C++', 'Remote Center VCET, IIT Bombay', '2019-2020', 'docs/C&C++2020.pdf'),
(22, 'FDP', 'One day FDP', 'Intellectual property rights (IPR).', 'Universal college of engineering.', '2019-2020', 'docs/universal2019.jpg'),
(23, 'Training', 'One Day ICT Based Course, IIT Bombay', 'Moodle Learning Management System', 'Remote Center VCET, IIT Bombay', '2018-2019', 'docs/MMW15032019Pcertificate_moodle.pdf'),
(24, 'STTP', 'Two Week AICTE-ISTE Approved STTP', 'Machine Learning with TensorFlow', 'VCET', '2018-2019', 'docs/machinelearning.jpg'),
(25, 'FDP', 'Two Week AICTE-ISTE Approved STTP', 'Foundation Program in ICT for Education', 'Remote Center VCET, IIT Bombay', '2018-2019', 'docs/foundation.pdf'),
(26, 'STTP', 'One Week AICTE-ISTE Approved STTP', 'IoT in Energy and Utilities', 'VCET', '2017-2018', 'docs/IT_VCET_STTP_01Jan_06Jan_2018.pdf'),
(27, 'STTP', 'One Week AICTE-ISTE Approved STTP', 'Python + Perl Programming', 'VCET', '2017-2018', 'docs/STTP_AICTE_Course_Python_Dec2017.pdf'),
(28, 'Training', 'Three Days hands on workshop', 'Python Programming', 'St. John College of Engineering & Management, Palghar', '2017-2018', 'docs/St_John_College_29_Jun_2017to_01_July_2017.pdf'),
(29, 'STTP', 'One Week STTP', 'Building Realtime Data Processing IOT Applications using Amazon Web Services.', 'St. John College of Engineering & Management, Palghar.', '2016-2017', 'docs/23.jpg'),
(30, 'Training', 'Two Days Workshop', 'International Symposium on IoT by Lab-X Foundation', 'SPIT College, Andheri', '2016-2017', 'docs/lab-x.jpg'),
(31, 'Training', 'ISTE Sponsored 2 day Workshop ', '\"Writing Effective Conference Papers\", under National Mission on Education through ICT(MHRD, Govt. of India)', 'Remote Center K J Somaiya College of Engg., Vidyavihar, Mumbai, IIT Bombay', '2012-2013', 'docs/worknational.jpg'),
(32, 'STTP', '2 week ISTE approved STTP course', 'Teaching Methodologies for Engineering Teachers', 'VCET, Vasai', '2008-2009', 'docs/iste2008.jpg'),
(33, 'Training', 'Two Days National Workshop', '\"W.A.V.E.S\" (Web Services + ASP.Net + VB.Net + Enterprise Solutions)', 'Thadomal Shahani Engineering College, Bandra, Mumbai', '2008-2009', 'docs/waves.jpg'),
(34, 'Training', 'Two Days Workshop', 'Freedom in Software', 'COSMOS Team, VCET, Vasai', '2008-2009', 'docs/freedom.jpg'),
(35, 'Training', 'Two Days Workshop', 'LINUX. APACHE. MYSQL. PHP.', 'TSEC, Bandra', '2007-2008', 'docs/linuxmysql.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `Sr` int(3) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Conference` varchar(100) NOT NULL,
  `Place` varchar(40) NOT NULL,
  `Factor` varchar(10) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`Sr`, `Title`, `Conference`, `Place`, `Factor`, `Year`, `View`) VALUES
(1, 'Evaluation of Mental Stress using Predictive Analysis', 'National conference on technical Advancement for social upliftment', 'VCET, Vasai', '', '2020-2021', 'docs/EvaluationofMentalStressusingPredictiveAnalysisNTASU5020.pdf'),
(2, 'Automation in Baking using AI and IoT', 'Proceedings of the 14th INDIA Co m - IEEE Conference ID: 49435', '2020, pp. 52-57', '', '2019-2020', 'https://ieeexplore.ieee.org/document/9083695'),
(3, 'Detection of Malicioius Content using AI', 'Proceedings of the 14th INDIA Co m - IEEE Conference ID: 49435', '2020, pp. 272-277', '', '2019-2020', 'http://bvicam.in/INDIACom/news/INDIACom%202020%20Proceedings/Main/papers/33.pdf'),
(4, 'Universal Firmware Upgrade Over-The-Air for IoT Devices with Security', 'Proceedings of the 13th INDIA Co m - IEEE Conference ID: 46181', '2019, pp. 27-30', '', '2018-2019', 'https://ieeexplore.ieee.org/document/8991250'),
(5, 'Agricultural Portal and Mobile App', 'Proceedings of the 13th INDIA Co m - IEEE Conference ID: 46181', '2019, pp. 1075-1078', '', '2018-2019', 'http://bvicam.in/INDIACom/news/INDIACom%202019%20Proceedings/Main/papers/1965.pdf'),
(6, 'Child Tracking System using RFID, GPS based System', 'IEEE Conference ID: 42835', 'pp 1523-1525', '', '2017-2018', 'http://bvicam.in/INDIACom/news/INDIACom%202018%20Proceedings/Main/papers/162.pdf'),
(7, 'Accompanist Electronic Harmonium - An AI based Real Time Follower', 'Proceedings of the 12th INDIA Co m - IEEE Conference ID: 42835 ', '2018, pp. 1565-1567', '', '2017-2018', 'http://bvicam.in/INDIACom/news/INDIACom%202018%20Proceedings/Main/papers/913.pdf'),
(8, 'RFID based automated attendance and library system', 'Proceedings of the 12th INDIA Co m - IEEE Conference ID: 42835', '2018, pp. 1510-1512', '', '2017-2018', 'http://bvicam.in/INDIACom/news/INDIACom%202018%20Proceedings/Main/papers/98.pdf'),
(9, 'Resonant Frequency Sensation of Human Beings for Present Condition', 'IEEE Conference ID: 40353', 'pp 1823-1825', '', '2016-2017', 'http://bvicam.in/INDIACom/news/INDIACom%202017%20Proceedings/Main/papers/808.pdf'),
(10, 'AC Controlling using IoT', 'IEEE Conference ID: 40353', 'pp 1864-1865', '', '2016-2017', 'http://bvicam.in/INDIACom/news/INDIACom%202017%20Proceedings/Main/papers/2277.pdf'),
(11, 'Precuautions in Planes by IOT', 'IEEE Conference ID: 40353', 'pp 1826-1828', '', '2016-2017', 'http://bvicam.in/INDIACom/news/INDIACom%202017%20Proceedings/Main/papers/881.pdf'),
(12, 'Automating and Analyzing Greenhouse Hydroponic Farms', 'IEEE Conference ID: 40353', 'pp 1810-1812', '', '2016-2017', 'http://bvicam.in/INDIACom/news/INDIACom%202017%20Proceedings/Main/papers/664.pdf'),
(13, 'LI-FA CONTROLLING & MONITORING', 'IEEE Conference ID: 40353', 'pp 1801-1803', '', '2016-2017', 'http://bvicam.in/INDIACom/news/INDIACom%202017%20Proceedings/Main/papers/559.pdf'),
(14, 'Electricity Measuring Device based on Internet of Things', 'IEEE Conference ID:37465', 'pp 1423 - 1426', '', '2015-2016', 'https://ieeexplore.ieee.org/document/7724499'),
(15, 'IOT for Music Therapy', 'IEEE Conference', 'pp 1453-1455', '', '2015-2016', 'https://ieeexplore.ieee.org/document/7724507'),
(16, 'Digital Forensic Investigations using IoT', 'IEEE Conference ID:37465', 'pp 1443-1447', '', '2015-2016', 'https://ieeexplore.ieee.org/document/7724505'),
(17, 'IoT in Agriculture', 'IEEE Conference ID:37465', 'pp 1456-1458', '', '2015-2016', 'https://ieeexplore.ieee.org/document/7724508'),
(18, 'A IoT Model for Examining and Mining the Relationship between Music and Emotion', 'IJSRD', '', '', '2015-2016', 'http://www.ijsrd.com/articles/NCTAAP041.pdf'),
(19, 'Human Detection by measuring its distance based on IOT', 'IEEE Conference ID:37465', '', '', '2015-2016', 'https://ieeexplore.ieee.org/document/7724502'),
(20, 'Music Therapy and Data Mining using Indian Ragas as a Supplementary Medicine', 'IEEE Conference ID 35071', 'pp 347 - 350 ', '', '2014-2015', 'https://ieeexplore.ieee.org/document/7100271'),
(21, 'Hidden Sensitive Association Rule using Heuristic Algorithm', 'INDIACom', 'pp 851 - 854 ', '', '2013-2014', 'http://bvicam.in/INDIACom/news/INDIACom%202014%20Proceedings/papers/59.pdf'),
(22, 'Playing 22 Shrutis Using Intelligent Software', 'MulticonW13', '', '', '2012-2013', 'docs/TCET2013.jpg'),
(23, 'Predicting Shrutis in Harmonium Using Temporal Mining', 'National Conference', 'pp. 213-217', '', '2011-2012', 'https://www.ijera.com/special_issue/VNCET_Mar_2012/40.pdf'),
(24, 'Big Data Processing Using Apache Hadoop in Cloud Computing', 'National Conference', 'pp. 475-480', '', '2011-2012', 'https://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.470.7009&rep=rep1&type=pdf'),
(25, 'Efficient Data Mining in real time database with distributed architecture', 'INDIACom2012', '', '', '2011-2012', 'http://bvicam.in/INDIACom/news/INDIACom%202012%20Proceedings/papers/19.pdf'),
(26, 'Data Management in Soil Erosion Monitoring System Using Spatial Database and Its Multi-level Updation.', 'IEEE Conference', '', '', '2011-2012', 'https://ieeexplore.ieee.org/document/6120561');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `Sr` int(5) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Percentage` float NOT NULL,
  `Projects` varchar(100) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`Sr`, `Degree`, `Course`, `Institute`, `Year`, `Percentage`, `Projects`, `View`) VALUES
(1, 'Master of Engineering', 'Computer Engineering', 'Thadomal College of Engineering, University of Mumbai', 'June 2006', 64, 'Efficient Data Mining in Real Time Database', 'docs/YogeshPingle_ME.pdf'),
(2, 'Bachelor of Engineering', 'Computer Engineering', 'Veermata Jijabai Technological Institute (VJTI), University of Mumbai', 'June 2000', 59.6, 'Medical Image Analysis using superimposing X-Rays', ''),
(3, 'DCT', 'Diploma in Computer Engineering', 'Bhausaheb Vartak Polytechnic, Vasai (W), MSBTE.', 'April 1997', 79.36, '-', ''),
(4, 'SSC', 'Maharashtra State Board', 'New English School, Vasai, Mumbai', 'March 1992', 77.57, '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `fdps`
--

CREATE TABLE `fdps` (
  `Sr` int(5) NOT NULL,
  `Program` varchar(100) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fdps`
--

INSERT INTO `fdps` (`Sr`, `Program`, `Year`, `View`) VALUES
(1, 'Two Week AICTE-ISTE Approved STTP on Scope of IoT for Social Upliftment', '2019-20', 'docs/socialupliftments.pdf'),
(2, 'One Week AICTE-ISTE Approved STTP on IoT in Energy and Utilities', '2018-19', 'docs/IT_VCET_STTP_01Jan_06Jan_2018.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `interaction`
--

CREATE TABLE `interaction` (
  `Sr` int(5) NOT NULL,
  `Interaction` varchar(300) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interaction`
--

INSERT INTO `interaction` (`Sr`, `Interaction`, `Year`, `View`) VALUES
(1, '\"IoT Basics (Arduino UNO, Sensors,Programming, Rasberry Pi)\"', '2020-2021', 'docs/rait2020.pdf'),
(2, 'Resource person in Future of IOT for business Aakar college of management for women.', '2020-2021', 'docs/aakar2020.jpg'),
(3, 'Covid-19 operational planning guideline & Covid-19 partners platform to support country.', '2019-2020', 'docs/covid-192020.jpg'),
(4, 'Session Chairperson; Session Title-\"Internet of Things- Considerations and Applications\", 4th International Conference on Computing for Sustainable Global Development, IEEE Conference ID 40353, SCOPUS Indexed, BVICAM, New Delhi', '2019-2020', 'docs/sustainable2020.jpg'),
(5, 'Engineers to Entrepreneur : Paving your career your way , 20 May - 21 May 2020', '2019-2020', 'docs/paving.pdf'),
(6, 'Webinar - \"Vogue of Embedded System\" from May 27, 2020 to May 29, 2020.', '2019-2020', 'docs/vogue.pdf'),
(7, 'Reviewer for IEEE International conference, IndiaCom, New Delhi, 12 & 13 March 2020', '2019-2020', 'docs/ieee2020.jpeg'),
(8, 'Convenor for special session \"Analytics, Machine Learning and Internet of Things\" in IEEE International conference, IndiaCom, New Delhi, 12 & 13 March 2020', '2019-2020', 'docs/Convenor.jpeg'),
(9, 'Evaluator, for \"Paper Writing Competition 2020\" during May, 9th to June 2nd 2020, organized by the Department of Electronics Engineering., Government Polytechnic', '2019-2020', 'docs/Evaluator.pdf'),
(10, 'Resource Person in one session in One Week FDP sponsored by Ministry of Electronics & Information Technology, Government of India, One Day session taken on Rpi on 14th June 2019, St. John College', '2019-2020', 'docs/st.jhon2019rpi.jpg'),
(11, 'Resource Person in one session in CSI-TSEC Event TechNext 2019, Arduino and Raspberry Pi Programming, 5 Oct 2019, Thadomal College', '2019-2020', 'docs/tsce.pdf'),
(12, 'Student Development Programme, Java Programming, L R Tiwari, 10 Oct 2019', '2019-2020', 'docs/lrtiwarijava.pdf'),
(13, 'Resource Person in FDP Programme. IoT, Terna college of engineering, Nerul, 1 & 4 Jan 2020', '2019-2020', 'docs/tarna.pdf'),
(14, 'Resource Person in Online FDP, Use of IoT for Industry 4.0, Fr. CRCE, Department of Computer Engineering, 1 June 2020', '2019-2020', 'docs/onlinefdp.pdf'),
(15, 'Webinar, IoT for Music Therapy, St. John College, 24 May 2020', '2019-2020', 'docs/iotformusic.pdf'),
(16, 'Webinar, IoT for Music Therapy, Suman Ramesh Tulsiani Technical Campus, Pune, 2 June 2020', '2019-2020', 'docs/musictherapy.pdf'),
(17, 'Webinar, Future of IoE for Business, 19 June 2020', '2019-2020', 'docs/futureioe.pdf'),
(18, 'Webinar, IoT for Stress Management, Kohinoor Business School, Kurla, 22 June 2020', '2019-2020', 'docs/kbs.pdf'),
(19, 'Rajiv Gandhi - Machine Learning with IoT', '2019-2020', 'docs/rajiv2019.pdf'),
(20, 'Resource Person in one day sesson on \"Tensorflow & React Native\" at K J Somaiya College of Engineering, Vidyavihar', '2018-2019', 'docs/Tensorflownative.jpg'),
(21, 'Resource Person in one day workshop on \"Introduction to IoT\" at Shankar Narayan College of Arts, Commerce', '2018-2019', 'docs/shankar.jpg'),
(22, 'Resource Person in one day workshop on \"Introduction to IoT\" at L R Tiwari College of Engg., Mira Road', '2018-2019', 'docs/lrtiwari2018-19.jpg'),
(23, 'Resource Person in one day workshop on \"Java Programming\" at St. John College of Engineering, Palghar', '2018-2019', 'docs/st.jhonjava.jpg'),
(24, 'Resource Person in one day workshop on \"Internet of Things on Raspberry Pi\" at Terna Engineering College, Nerul', '2018-2019', 'docs/ternares.jpg'),
(25, 'Resource Person in one day workshop \"IOT with Arduino and Raspberry Pi\" at Xavier College of Engineering, Mahim', '2018-2019', 'docs/xaviersRaspberry.jpg'),
(26, 'Member in PBOS of Information Technology, Government Polytechnic, Bandra', '2018-2019', 'docs/Pingle_PBOS.pdf'),
(27, 'Session Co-Chairperson and Reviewer; Session Title - \"Analytics, Machine learning and Internet of things\", 6th ICCSGD, IEEE Conference ID 46181 and SCOPUS Indexed, BVICAM, New Delhi', '2018-2019', 'docs/chairperson2018.jpg'),
(28, 'Session Chairperson; Session Title-\"Internet of Things- Considerations and Applications\", 4th International Conference on Computing for Sustainable Global Development, IEEE Conference ID 40353, SCOPUS Indexed, BVICAM, New Delhi', '2017-2018', 'docs/chairperson2017.jpg'),
(29, 'Resource Person in One Hour Guest Lecture on IOT for SE Students at K J Somaiya College, Vidyavihar', '2017-2018', 'docs/kjsomaiyawk1.jpg'),
(30, 'Resource Person in One Day Hands on Raspberry Pi \"Python Programming and Data Analytics\" for ME Students and Faculties at K J Somaiya College, Vidyavihar', '2017-2018', 'docs/kjsce2018.pdf'),
(31, 'Resource Person in 2 Days Hands on Raspberry Pi at Shah and Anchor College of Engg., Chembur', '2017-2018', 'docs/shahiot2018.jpg'),
(32, 'Resource Person on \"IoT\" at SRTTC, Kamshet', '2017-2018', 'docs/SRTTC_Workshop_06_01_2018.jpg'),
(33, 'Resource Person in One Day Interactive Session on IOT for Second Year Students at BVP (Bhausaheb Vartak Polytechnic), Vasai', '2017-2018', 'docs/bvp2018.jpg'),
(34, 'Resource Person in Half Day Hands on Session on Embedded Systems for Students from EXTC Dept. at Universal College of Engineering, Bhivandi', '2017-2018', 'docs/universalembedded.jpg'),
(35, 'Resource Person in Half Day Hands on Session on Arduino for Faculties from Computer + EXTC Dept. at K J Somaiya College of Engineering, Vidya Vihar', '2017-2018', 'docs/kjsomiyaiot.jpg'),
(36, 'Resource Person in One Day Hands on Session on Internet of Things & its Applications for SE/TE/BE EXTC/COMP/IT Students at M H Saboo Siddik College of Engineering, Byculla', '2017-2018', 'docs/SabooSiddik2017.pdf'),
(37, 'Resource Person in One Day Session on Research Internet of Things (RIoT) & its Applications in Faculty Development Programme at D J Sanghavi College of Engineering, Andheri', '2017-2018', 'docs/DJSanghavi2017.pdf'),
(38, 'Resource Person in One Day Session on Internet of Things & its Applications for SE EXTC/COMP/IT Students at Thakur College of Engineering, Kandivali', '2017-2018', 'docs/thaku39.jpg'),
(39, 'Judge in Project Competition at Thakur College of Engineering Mumbai', '2017-2018', 'docs/1.jpg'),
(40, 'Judge in Project Competition of final year students at Bhausaheb Vartak Polytechnic', '2017-2018', 'docs/4.jpg'),
(41, 'Resource Person in One Day Hands on Raspberry Pi \"Python Programming and Data Analytics\" for ME Students and Faculties at K J Somaiya College, Vidya vihar', '2017-2018', 'docs/3.jpg'),
(42, 'Resource Person in Two Days Hands on Session on IOT (Raspberry PI) at Shah & Anchor College of Engg. Chembur', '2017-2018', 'docs/5.jpg'),
(43, 'Resource Person in One Day Interactive Session on IOT for 2nd Year Students at Bhausaheb Vartak Polytechnic , Vasai', '2017-2018', 'docs/12.jpg'),
(44, 'Resource Person in One Day Hands on Session on Arduino + Raspberry Pi Python for TE/BE Students at Vasandada Patil P.College of Engineering, Sion\r\n', '2017-2018', 'docs/13.jpg'),
(45, 'Resource Person in Two Days Hands on Session on IOT (Arduino Raspberry PI) + Python for TE/BE at K C College of Engineering & Management Studies & Research, Thane\r\n', '2017-2018', 'docs/16.jpg'),
(46, 'Resource Person in One Day Session on Internet of Things & its Applications for SE EXTC/COMP/IT Students at Thakur College of Engineering, Kandivali\r\n ', '2017-2018', 'docs/19.jpg'),
(47, 'Resource Person in One Day Session on Internet of Things & its Applications One Week STTP at Thadomal Shahani College of Engineering, Bandra', '2017-2018', 'docs/20.jpg'),
(48, 'Resource Person in One Day Session on Emerging Trends in Smart City One Week STTP at Universal College of Engineering, Bhivandi', '2017-2018', 'docs/22.jpg'),
(49, 'Resource Person in National Workshop on IOT in association with CSI and IEEE at Terna Engineering College', '2016-2017', 'docs/27.jpg'),
(50, 'Resource Person in National Workshop on IOT in association with CSI and IEEE at Terna Engineering College', '2016-2017', 'docs/27.jpg'),
(51, 'Resource Person in Two hours Seminar on IOT for SE & TE students of Computers at Viva Institute of Technology Virar.', '2016-2017', 'docs/24.jpg'),
(52, 'Resource Person in Half Day Hands on Session on IOT Arduino Kit for B.Tech and M.Tech Computer Students at K.J.Somaiya college of Engineering , Vidya vihar', '2016-2017', 'docs/25.jpg'),
(53, 'Resource Person in Two Day Workshop on \"IoT\" Arduino Kit at ARMIET College of Engineering Shahapur', '2016-2017', 'docs/30.jpg'),
(54, 'Resource Person in Student Development Programme (SDP) 2nd & 3rd year Students On IOT at VCET , Civil Dept', '2016-2017', 'docs/32.jpeg'),
(55, 'Resource Person in Student Development Program (SDP) 2nd and 3rd Year Students on \"IoT\" at Thakur College of Engg . EXTRX Dept', '2016-2017', 'docs/33.jpg'),
(56, 'Resource Person in IOT Hands on Workshop , Collaboration With CSI , Mumbai & IEEE at RGIT Andheri', '2015-2016 ', 'docs/28.jpg'),
(57, 'Resource Person in Seminar on Music for Health Care for Students at Seminar on Music for Health Care for Students  ', '2015-2016 ', 'docs/29.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `Sr` int(5) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Journal` varchar(100) NOT NULL,
  `Page` varchar(40) NOT NULL,
  `Factor` varchar(10) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`Sr`, `Title`, `Journal`, `Page`, `Factor`, `Year`, `View`) VALUES
(1, 'Prediction of Coronavirus Covid-19 cases using Linear Regression and Support Vector Machine', 'International Journal of Advanced Science and Technology', 'Vol 29, No. 5, (2020), pp. 1911-1924', '', '2019-20', 'docs/Coronavirus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `Sr` int(5) NOT NULL,
  `Membership` varchar(100) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`Sr`, `Membership`, `View`) VALUES
(1, 'CSI Life membership', 'docs/CSI_Card.pdf'),
(2, 'ISTE Life Membership	', 'docs/istemember.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nptel`
--

CREATE TABLE `nptel` (
  `Sr` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Session` varchar(40) NOT NULL,
  `View` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nptel`
--

INSERT INTO `nptel` (`Sr`, `Name`, `Duration`, `Session`, `View`) VALUES
(1, 'Online Course , NBA Accreditation and Teaching-Learning in Engineering (NATE), Swayam', '12 Weeks', '2019-2020', 'docs/NPTEL-YOGESH_PINGLE_NATE.jpg'),
(2, 'Introduction to IOT', '12 weeks', '2019-2020', 'docs/npteliot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `Name` varchar(20) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Experience` int(6) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Languages` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`Name`, `Department`, `Experience`, `Dob`, `Email`, `Languages`) VALUES
('Yogesh Pingle', 'Information Technology', 16, '1977-07-04', 'yogesh.pingle@vcet.edu.in', 'English / Marathi / Hindi / German (Read / Write / Speak)');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `Sr` int(5) NOT NULL,
  `Training` varchar(300) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Program` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `View` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`Sr`, `Training`, `Title`, `Program`, `Agency`, `Duration`, `View`) VALUES
(1, 'Training', 'Professional Training Programme', 'Full stack development using MERN.', 'BVICAM', '2020-2021', 'docs/MERN.jpg'),
(2, 'Training', '5 Days Corporate Training Programme', 'Quality Management, Six Sigma, Machine Learning and Artificial Intelligence.', 'L & T, Madh Campus, Malad', '2020-2021', 'docs/corporate.png'),
(3, 'Training', '2 Days Online Workshop', 'How to Create Successful Social Media Campaigns', 'Navayuvak Entrepreneurs', '2019-2020', 'docs/navayuvak2020.jpg'),
(4, 'Training', '5 Days Corporate Training Programme', 'Embedded System and IoT', 'L & T, Madh Campus, Malad', '2019-2020', 'docs/lnt2019.jpg'),
(5, 'Training', 'one week Training Programm', 'Quality Improvement and Industry Coordination', 'DTE', '2019-2020', 'docs/Invitation_Letter_DTE_18_12_2019.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, '', '', '2020-09-20 12:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `Sr` int(5) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Period` varchar(50) NOT NULL,
  `View` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`Sr`, `Institute`, `Designation`, `Period`, `View`) VALUES
(1, 'Vidyavardhini`s C.O.E. & Tech. University of Mumbai', 'Assistant Professor (IT Dept.)	', 'July 7, 2007 to Till date', ''),
(2, 'Thakur College Of Engg. & Tech., University of Mumbai', 'Lecturer (AD-HOC) (Computer Dept.)', 'March 2007 to July 2007	', 'docs/Thakur_Engg_Experience_Letter.pdf'),
(3, 'Bhausaheb Vartak Polytechnic, Vasai , DTE', 'Lecturer (AD-HOC) (Computer Dept.)', 'July 3 to March 2007', ''),
(4, 'Vidyavardhini`s C.O.E. & Tech. University of Mumbai', 'Visiting Lecturer', 'Feb 2003 to Apr 2003', 'docs/VCET_Visiting_Lecturer_Experience.pdf'),
(5, 'Communication For Info. & Tech., Andheri', 'Sr. Software Programmer', 'Oct 2000 to Oct 2002', 'docs/Industry_Experience_Letter.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `fdps`
--
ALTER TABLE `fdps`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `interaction`
--
ALTER TABLE `interaction`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `nptel`
--
ALTER TABLE `nptel`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `Sr` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fdps`
--
ALTER TABLE `fdps`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `interaction`
--
ALTER TABLE `interaction`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6806;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nptel`
--
ALTER TABLE `nptel`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
