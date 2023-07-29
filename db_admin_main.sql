-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 08:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accolades`
--

CREATE TABLE `accolades` (
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ac_type` varchar(50) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accolades`
--

INSERT INTO `accolades` (`name`, `description`, `ac_type`, `file_name`, `type`, `size`) VALUES
('3', '1q2w', 'Activity', '7080-index.css', '', ''),
('Chatheriyan', '123', 'Activity', '38789-dreams-b.png', '', ''),
('dhana', 'Accolade Description', 'Certificate', '13920-config.php', '', ''),
('Ferdeno', 'Accolade Description', 'Acknowledgement', '91859-config.php', '', ''),
('Ferrari', 'Done', 'Acknowledgement', '35951-screenshot-2023-04-12-at-12.02.26-pm.png', '', ''),
('Karthick', 'asfjb,bfdawegare', 'Certificate', '36010-screenshot-2023-03-25-at-9.25.46-am.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `t_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `Yearlist` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`t_id`, `title`, `deadline`, `Yearlist`, `description`) VALUES
(7, 'imp', '2023-07-01', 'All', 'imp'),
(8, 'imp', '2023-07-01', 'All', 'impp'),
(9, 'imp ', '2023-07-01', 'Year 1', 'hello'),
(10, 'ash', '2023-07-08', 'All', 'ash');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `t_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `description` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `assigned_by` int(11) NOT NULL COMMENT 'mentor id',
  `Yearlist` varchar(10) NOT NULL DEFAULT 'All'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`t_id`, `title`, `deadline`, `description`, `timestamp`, `assigned_by`, `Yearlist`) VALUES
(1, 'Dude ', '2023-03-28', 'Task2', '2023-03-27 21:47:51', 1, 'All'),
(2, 'Here is your task', '2023-03-29', 'Before we begin our project, the executive team wants to understand whether to use the Waterfall or the Agile methodology approach. They have asked you to do a comparative analysis of the two methodologies. What are the strengths and weaknesses of each approach? What kind of projects will benefit from one or the other of the approaches?  \n', '2023-03-27 21:47:51', 2, 'All'),
(3, 'TASK 3', '2023-03-28', 'TASK3', '2023-03-27 21:47:51', 1, 'All'),
(4, 'Do the maths sums', '2023-03-29', 'Solve algebra sums', '2023-03-27 21:48:25', 1, 'All'),
(5, 'missing', '2023-02-02', 'missing', '0000-00-00 00:00:00', 2, 'All'),
(6, 'completed', '2023-02-02', 'completed', '0000-00-00 00:00:00', 1, 'All'),
(7, 'title', '2020-02-02', 'description', '2023-03-27 21:47:51', 1, 'All'),
(8, 'as, df dsavvavad', '2023-03-31', '2023-03-28 08:47:51', '2023-03-27 21:47:51', 1, 'All'),
(9, 'Dhana ', '2023-03-31', 'date(\"Y-m-d H:i:s\");\r\n', '2023-03-29 07:17:26', 1, 'All'),
(10, 'Reno ferdi', '2023-03-31', 'lbej,fS<DBF,ME FKWEBGfKWEBFw,EflwebirlegsEG', '2023-03-29 07:21:59', 2, 'All'),
(11, 'abc', '2023-03-31', '!!!!!', '2023-03-29 07:24:50', 2, 'All'),
(12, 'Hi', '2023-04-27', 'QWERTY', '2023-04-12 01:23:25', 2, 'All'),
(18, 'watch video', '2023-05-31', 'watch this video', '2023-05-18 06:32:11', 1, 'All'),
(19, 'kjsjdlkjeofj', '2023-05-30', 'nanfdnklwnflknd', '2023-05-19 15:36:55', 1, 'All'),
(21, 'Do it dude', '2023-07-29', 'Jus do yeet', '2023-07-12 10:06:20', 1, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(123, 505193914, 'Chatheriyan', 'T', '1@gmail.com', '1213', '1678445487Screenshot 2023-02-28 at 12.50.55 AM.png', 'Active now'),
(127, 1669252270, 'Ferdeno', 'S', '2@gmail.com', '123', '1678446058Dhana.jpg', 'Active now'),
(128, 1396065681, 'Dhana', 'Sekar', '3@gmail.com', '123', '1678446200photo-1623303366639-0e330d7c3d9f.jpeg', 'Active now'),
(129, 1095992911, 'Karthick', 'S', '4@gmail.com', '123', '1678446233istockphoto-908137972-170667a.jpg', 'Active now'),
(130, 394005286, 'Khashif', 'M', '5@gmail.com', '123', '1678446301gettyimages-1146918370-612x612.jpg', 'Active now'),
(131, 674936735, 'Ferrari', 'J', '6@gmail.com', '123', '1678446340gettyimages-1071546516-612x612.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'hi', '2023-03-25 21:35:39', 0),
(2, 2, 1, 'dude', '2023-03-25 21:37:58', 0),
(3, 1, 2, 'what are you doing', '2023-03-25 21:38:13', 0),
(4, 2, 1, 'just chumma tha', '2023-03-25 21:38:27', 0),
(5, 2, 1, 'vanakkam da mapla', '2023-03-25 21:39:44', 0),
(6, 2, 1, '123', '2023-03-25 21:40:19', 2),
(7, 2, 1, 'babsss', '2023-03-25 21:48:19', 0),
(8, 5, 2, 'hi', '2023-03-26 00:28:53', 2),
(9, 2, 5, 'sollu da', '2023-03-26 00:29:33', 2),
(10, 5, 2, 'acc', '2023-03-26 00:32:12', 0),
(11, 5, 2, 'sollu', '2023-03-26 00:32:27', 2),
(12, 1, 2, 'gg', '2023-03-26 00:42:21', 1),
(13, 1, 2, 'erf', '2023-03-26 00:43:10', 2),
(14, 5, 2, 'sollu chitti', '2023-03-26 01:41:40', 0),
(15, 2, 5, 'speed 1 TB memory 1GB', '2023-03-26 01:42:03', 0),
(16, 2, 5, 'shourya is with me', '2023-03-27 01:42:54', 2),
(17, 5, 2, 'good evening', '2023-03-27 04:50:28', 2),
(18, 1, 2, 'hi helllo', '2023-04-12 10:18:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `mentee_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `sub_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`mentee_id`, `task_id`, `sub_date`) VALUES
(2062016, 8, '2023-05-19'),
(2062016, 4, '2023-05-20'),
(2062016, 9, '2023-05-20'),
(2062017, 10, '2023-05-20'),
(2062017, 2, '2023-05-20'),
(2062017, 5, '2023-05-20'),
(2062002, 9, '2023-05-21'),
(2062002, 18, '2023-05-22'),
(2062002, 7, '2023-05-22'),
(2062002, 6, '2023-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'Dhana', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'chathu', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, '4dno', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(5, 'khashif', '$2y$10$sJM59e7o8BQkJJM1DZQL6uOsz5avThTbgkOQa4ouiwvzkWEAxF3dC');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2023-03-25 21:35:45', 'no'),
(2, 2, '2023-03-25 21:39:14', 'no'),
(3, 1, '2023-03-25 21:43:56', 'no'),
(4, 2, '2023-03-25 21:43:53', 'no'),
(5, 1, '2023-03-26 00:20:31', 'no'),
(6, 2, '2023-03-27 04:45:10', 'no'),
(7, 5, '2023-03-26 01:47:22', 'no'),
(8, 5, '2023-03-27 02:23:59', 'no'),
(9, 2, '2023-03-27 08:48:09', 'no'),
(10, 5, '2023-03-27 04:51:25', 'no'),
(11, 5, '2023-03-28 11:24:03', 'no'),
(12, 2, '2023-04-03 03:51:50', 'no'),
(13, 2, '2023-04-12 10:21:29', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `mentee_table`
--

CREATE TABLE `mentee_table` (
  `mentee_id` int(10) NOT NULL,
  `mentee_name` varchar(25) NOT NULL,
  `mentee_mail` varchar(25) NOT NULL,
  `mentee_pass` varchar(50) NOT NULL,
  `mentee_mobile` int(10) NOT NULL,
  `isActive` int(1) NOT NULL,
  `assigned_mentor_id` int(10) NOT NULL,
  `verify_token` varchar(255) DEFAULT NULL,
  `Yearlist` varchar(10) NOT NULL DEFAULT 'Year 1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentee_table`
--

INSERT INTO `mentee_table` (`mentee_id`, `mentee_name`, `mentee_mail`, `mentee_pass`, `mentee_mobile`, `isActive`, `assigned_mentor_id`, `verify_token`, `Yearlist`) VALUES
(34, 'johny', 'johnyananya@gmail.com', '122333', 221133, 1, 1, 'e50230e45f09f626d2f378f1ded053c8', 'Year 1'),
(36, 'Abinav', 'meenusa2003@gmail.com', 'Ch@230803', 987890987, 1, 2, '', 'Year 1'),
(50, 'dhanuuu', 'dhan@fdmd.in', 'Ch@230823', 87983472, 1, 2, '', 'Year 1'),
(53, 'Sabi', 'sabi@gmail.com', 'Ch@230803', 980989090, 1, 2, '', 'Year 1'),
(70, 'aj', 'ananyajohny11@gmail.com', '1122333', 34234, 1, 2, 'f6f0f14fc3fd68f9aa428cfa7ff1311c', 'Year 1'),
(2062002, 'Abinav', 'abinav@cu.in', '123456', 987665431, 1, 1, '', 'Year 1'),
(2062016, 'Chatheriyan', 'chathu@cu.in', '123456', 987665431, 1, 1, '', 'Year 1'),
(2062017, 'Dhanasekar', 'dhana@cu.in', '123456', 987665431, 1, 2, '', 'Year 1'),
(2062018, 'Ferdeno', 'ferdi@cu.in', '123456', 987665431, 1, 2, '', 'Year 1'),
(2062019, 'Ferrari', 'ferrari@cu.in', '123456', 987665431, 1, 2, '', 'Year 1'),
(2062027, 'Karthick', 'karthicku@cu.in', '123456', 987665431, 1, 1, '', 'Year 1');

-- --------------------------------------------------------

--
-- Table structure for table `mentee_video`
--

CREATE TABLE `mentee_video` (
  `id` int(11) NOT NULL,
  `topic_no` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `video_title` varchar(100) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `embed_url` varchar(255) NOT NULL,
  `year` int(1) NOT NULL,
  `completed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentee_video`
--

INSERT INTO `mentee_video` (`id`, `topic_no`, `topic`, `video_title`, `youtube`, `embed_url`, `year`, `completed`) VALUES
(1, 1, 'Self-Concept – Self-Esteem', 'The Reflection in Me', 'https://www.youtube.com/watch?v=D9OOXCu5XMg', 'https://www.youtube.com/embed/D9OOXCu5XMg', 1, 1),
(2, 1, 'Self-Concept – Self-Esteem', '3 tips to boost your confidence', 'https://www.youtube.com/watch?v=l_NYrWqUR40', 'https://www.youtube.com/embed/l_NYrWqUR40', 1, 1),
(3, 1, 'Self-Concept – Self-Esteem', 'Henry & Leslie story', 'https://www.youtube.com/watch?v=A2RlHM8xfmM', 'https://www.youtube.com/embed/A2RlHM8xfmM', 1, 1),
(4, 1, 'Self-Concept – Self-Esteem', 'Raising Comfort Levels', 'https://www.youtube.com/watch?v=f0tEcxLDDd4', 'https://www.youtube.com/embed/f0tEcxLDDd4', 1, 1),
(5, 1, 'Self-Concept – Self-Esteem', 'What assumptions Children make about themselves', 'https://www.youtube.com/watch?v=iDcWB3seS0w', 'https://www.youtube.com/embed/iDcWB3seS0w', 1, 0),
(6, 2, 'Attitudes & Emotions', 'Watch your feelings', 'https://www.youtube.com/watch?v=8AGgbIQyqR8', 'https://www.youtube.com/embed/8AGgbIQyqR8', 1, 0),
(7, 2, 'Attitudes & Emotions', 'Why do we have feelings?', 'https://www.youtube.com/watch?v=3fTRWpf-eH4', 'https://www.youtube.com/embed/3fTRWpf-eH4', 1, 1),
(8, 2, 'Attitudes & Emotions', 'Positive Attitude', 'https://www.youtube.com/watch?v=vmLIJAc5kyg&t=2s', 'https://www.youtube.com/embed/vmLIJAc5kyg', 1, 0),
(9, 2, 'Attitudes & Emotions', 'Positive Attitude for Helping others', 'https://www.youtube.com/watch?v=-JnSktK3dVE', 'https://www.youtube.com/embed/-JnSktK3dVE', 1, 0),
(10, 3, 'Dreams & Purpose In Life', 'Little children Big Dreams', 'https://www.youtube.com/watch?v=GIHucfatYpM\",', '', 1, 0),
(11, 3, 'Dreams & Purpose In Life', 'One step at a time', 'https://www.youtube.com/watch?v=8cCiqbSJ9fg', '', 1, 0),
(12, 3, 'Dreams & Purpose In Life', 'Never Give up on your dream', 'https://www.youtube.com/watch?v=Sv4KKykRHjI', '', 1, 0),
(13, 3, 'Dreams & Purpose In Life', 'Goal Setting', 'https://www.youtube.com/watch?v=XrsERz952qM', '', 1, 0),
(14, 4, 'Values To Reach Your Goal', 'What is the value of your life?', 'https://www.youtube.com/watch?v=AwVfS7n3ghs', '', 1, 0),
(15, 4, 'Values To Reach Your Goal', 'Personal values and Humanity', 'https://www.youtube.com/watch?v=SbkdxKaMBBc', '', 1, 0),
(16, 4, 'Values To Reach Your Goal', 'Identity and Values', 'https://www.youtube.com/watch?v=j8H1b7Pm45Q', '', 1, 0),
(17, 4, 'Values To Reach Your Goal', 'Find your Hidden Talent', 'https://www.youtube.com/watch?v=bCDCDMh02QA', '', 1, 0),
(18, 5, 'Empower Yourself', 'Find Your Greatness', 'https://www.youtube.com/watch?v=WYP9AGtLvRg', '', 1, 0),
(19, 5, 'Empower Yourself', 'Empower Yourself', 'https://www.youtube.com/watch?v=I68Y81ZpjNM', '', 1, 0),
(20, 5, 'Empower Yourself', 'Believe in yourself', 'https://www.youtube.com/watch?v=AjZ0KbJcav0', '', 1, 0),
(21, 5, 'Empower Yourself', 'Your hardest time often leads to the greatest moment of your life', 'https://www.youtube.com/watch?v=_u2qggffbYM', '', 1, 0),
(22, 6, 'Leader Of Your Life', 'Leadership quality: A.P.J Abdul Kalam', 'https://www.youtube.com/watch?v=7E-cwdnsiow', '', 1, 0),
(23, 6, 'Leader Of Your Life', 'Qualities to be a leader', 'https://www.youtube.com/watch?v=ZoI7ou_SpwA', '', 1, 0),
(24, 6, 'Leader Of Your Life', 'The power of teamwork', 'https://www.youtube.com/watch?v=ZnjJpa1LBOY', '', 1, 0),
(25, 6, 'Leader Of Your Life', 'Work Twice as hard as others', 'https://www.youtube.com/watch?v=GtaxU6DZvLs', '', 1, 0),
(26, 7, 'Joy Of Giving & Receiving', 'Share, Care, Love & Joy', 'https://www.youtube.com/watch?v=HkuKHwetV6Q', '', 1, 0),
(27, 7, 'Joy Of Giving & Receiving', 'The Gift of Giving', 'https://www.youtube.com/watch?v=mdSfg8qO8ts', '', 1, 0),
(28, 7, 'Joy Of Giving & Receiving', 'Ripple', 'https://www.youtube.com/watch?v=ovj5dzMxzmc', '', 1, 0),
(29, 7, 'Joy Of Giving & Receiving', 'Simple acts of kindness', 'https://www.youtube.com/watch?v=_Nl2sT0rTDc', '', 1, 0),
(30, 8, 'Keep Going & Keep Trying – Perseverance', 'Giving up is the birthplace of regrets', 'https://www.youtube.com/watch?v=w71aDaGAtHs', '', 1, 0),
(31, 8, 'Keep Going & Keep Trying – Perseverance', 'How to manage Failure A.P.J Abdul Kalam', 'https://www.youtube.com/watch?v=7E-cwdnsiow', '', 1, 0),
(32, 8, 'Keep Going & Keep Trying – Perseverance', 'Finding Nemo', 'https://www.youtube.com/watch?v=iRQytOBTlN8', '', 1, 0),
(33, 1, 'Leadership And Its Importance', 'Story of a good leader', 'https://www.youtube.com/watch?v=UwWJl_U7hP4&ab_channel=StichtingReckoning', '', 3, 0),
(34, 1, 'Leadership And Its Importance', 'Leader of the Jungle', 'https://youtu.be/Imqb_gu9mlQ', '', 3, 0),
(35, 1, 'Leadership And Its Importance', 'Establish yourself as a Leader', 'https://www.youtube.com/watch?v=R2qu_j6GAG8&list=RDCMUCir93b_ftqInEaDpsWYbo_g&start_radio=1&t=9s&ab_channel=PracticalPsychology', '', 3, 0),
(36, 1, 'Leadership And Its Importance', 'Leadership and effective collaboration', 'https://youtu.be/ZnjJpa1LBOY', '', 3, 0),
(37, 2, 'Decision Making', 'Making Decisions', 'https://www.youtube.com/watch?v=QlmEfeC1DO4&ab_channel=InnoventureNMSU', '', 3, 0),
(38, 2, 'Decision Making', 'Decision Making Strategies', 'https://www.youtube.com/watch?v=pPIhAm_WGbQ&ab_channel=GCFLearnFree.org', '', 3, 0),
(39, 2, 'Decision Making', 'Decision Making in an Organization Setting', 'https://www.youtube.com/watch?v=w9Cg3_5Bfuw&ab_channel=CaliforniaManagementReview', '', 3, 0),
(40, 3, 'Time & Energy Management', 'Lesson on Time Management', 'https://www.youtube.com/watch?v=F5JI_6nsgaM&ab_channel=DonHoweSuccess', '', 3, 0),
(41, 3, 'Time & Energy Management', 'Student Success', 'https://www.youtube.com/watch?v=rUO8Qvcs7cY&ab_channel=MichiganTechnologicalUniversity', '', 3, 0),
(42, 3, 'Time & Energy Management', 'Effective Time Management', 'https://www.youtube.com/watch?v=RiI1NkaDXlQ', '', 3, 0),
(43, 4, 'Perseverance & Commitment', 'Story of Maran', 'https://www.youtube.com/watch?v=PE_8_ku-Wbo&ab_channel=Bhumi', '', 3, 0),
(44, 4, 'Perseverance & Commitment', 'Story on Commitment', 'https://youtu.be/szcsxADTQQg', '', 3, 0),
(45, 4, 'Perseverance & Commitment', 'Beating the odds', 'https://www.youtube.com/watch?v=7hByu8MvIiU&ab_channel=ABCNews', '', 3, 0),
(46, 5, 'Personal Value & Authentic Leadership', 'Values in Leadership', 'https://www.youtube.com/watch?v=QNam24cFpFU&ab_channel=GreggU', '', 3, 0),
(47, 5, 'Personal Value & Authentic Leadership', 'Leadership Videos', 'https://www.youtube.com/watch?v=e-VjisHm4sw&ab_channel=ashwinpp', '', 3, 0),
(48, 5, 'Personal Value & Authentic Leadership', 'Personal Values and Humanity', 'https://www.youtube.com/watch?v=SbkdxKaMBBc&t=152s&ab_channel=RichLife', '', 3, 0),
(49, 6, 'Responsibility & Accountability', 'How to be Responsible and Accountable?', 'https://www.youtube.com/watch?v=rXgPNTgC0dQ&ab_channel=JeffMuir', '', 3, 0),
(50, 6, 'Responsibility & Accountability', 'Authority, Responsibility, and Accountability', 'https://www.youtube.com/watch?v=qBZA2DM-8Q0&ab_channel=PadhakuLog', '', 3, 0),
(51, 6, 'Responsibility & Accountability', 'We are responsible', 'https://www.youtube.com/watch?v=DG4DZ-GfDFk&ab_channel=RoadSideMoviez', '', 3, 0),
(52, 7, 'Building Trust & Conflict Management', 'Conflict Resolution Techniques', 'https://www.youtube.com/watch?v=v4sby5j4dTY&ab_channel=BRAINYDOSE', '', 3, 0),
(53, 7, 'Building Trust & Conflict Management', 'Helping kids resolve Conflict', 'https://www.youtube.com/watch?v=tw_nQ4x19Eo&ab_channel=SesameStreetInCommunities', '', 3, 0),
(54, 7, 'Building Trust & Conflict Management', 'Conflict Management', 'https://youtu.be/eT7lt4ESSLo', '', 3, 0),
(55, 7, 'Building Trust & Conflict Management', 'Guide to Maintaining Friendships', 'https://www.youtube.com/watch?v=o9ulSfCGMUs&ab_channel=watchwellcast', '', 3, 0),
(56, 8, 'Professionalism & Mentoring/Lead Change', 'Professionalism', 'https://youtu.be/S703WyqaGn4', '', 3, 0),
(57, 8, 'Professionalism & Mentoring/Lead Change', '6 Traits of a True Professional', 'https://youtu.be/2vFdQY1qSlM', '', 3, 0),
(58, 8, 'Professionalism & Mentoring/Lead Change', 'Professionalism in Workplace', 'https://youtu.be/0o3INMBL58w', '', 3, 0),
(59, 1, 'You & Your Family', 'What is family?', 'https://www.youtube.com/watch?v=DzlxG2B2neU', '', 2, 0),
(60, 1, 'You & Your Family', 'Mother', 'https://www.youtube.com/watch?v=cQDgf2KAXZY', '', 2, 0),
(61, 1, 'You & Your Family', 'Parent\'s Love', 'https://www.youtube.com/watch?v=Qj2qSxSlrxU', '', 2, 0),
(62, 1, 'You & Your Family', 'Storytime', 'https://www.youtube.com/watch?v=52EK5Cujasc', '', 2, 0),
(63, 2, 'Friends And Life Success', 'Real Friends', 'https://www.youtube.com/watch?v=RqX9Fm0y0qs', '', 2, 0),
(64, 2, 'Friends And Life Success', 'When Life breaks you', 'https://www.youtube.com/watch?v=Un-gNbNwwsQ', '', 2, 0),
(65, 2, 'Friends And Life Success', 'Good Friends', 'https://www.youtube.com/watch?v=774HJQ9AdRk', '', 2, 0),
(66, 3, 'Teamwork', 'Rowing Teamwork', 'https://www.youtube.com/watch?v=kYjqtLCNqSA', '', 2, 0),
(67, 3, 'Teamwork', 'What is Teamwork', 'https://www.youtube.com/watch?v=RuQjYzP9PMo', '', 2, 0),
(68, 3, 'Teamwork', 'Leadership,Execution & Teamwork', 'https://www.youtube.com/watch?v=FGEVL19AaGA', '', 2, 0),
(69, 4, 'You And Your Community', 'Build a sense of community', 'https://www.youtube.com/watch?v=rqMtpk754ns', '', 2, 0),
(70, 4, 'You And Your Community', 'Get involved with a community', 'https://www.youtube.com/watch?v=MtOXxlUE2Zg', '', 2, 0),
(71, 4, 'You And Your Community', 'How to start a community project', 'https://www.youtube.com/watch?v=n8b2A7ThU4Y', '', 2, 0),
(72, 5, 'Communication And Success', 'Effective communication', 'https://www.youtube.com/watch?v=I6IAhXM-vps', '', 2, 0),
(73, 5, 'Communication And Success', 'How to improve your communication', 'https://www.youtube.com/watch?v=VVHZBflZqzk', '', 2, 0),
(74, 5, 'Communication And Success', 'Change communication Strategy', 'https://www.youtube.com/watch?v=ohK6n2TWcxE', '', 2, 0),
(75, 6, 'Delivering Happiness', 'Happiness:short film', 'https://www.youtube.com/watch?v=HkuKHwetV6Q', '', 2, 0),
(76, 6, 'Delivering Happiness', 'Happiness', 'https://youtu.be/e9dZQelULDk', '', 2, 0),
(77, 6, 'Delivering Happiness', 'Sharing is caring', 'https://www.youtube.com/watch?v=sow8k-veHVo', '', 2, 0),
(78, 7, 'Empower your surroundings', 'Message from Mr.Obama', 'https://www.youtube.com/watch?v=h5gNSHcoVmQ', '', 2, 0),
(79, 7, 'Empower your surroundings', 'Brighten your life by helping others', 'https://www.youtube.com/watch?v=Qww_yQqBpqA', '', 2, 0),
(80, 7, 'Empower your surroundings', '20 Random acts of Kindness', 'https://youtu.be/sngs8XYqdWg', '', 2, 0),
(81, 8, 'Understand others and respond to their needs', 'Empathy', 'https://youtu.be/27sho6s2eK8', '', 2, 0),
(82, 8, 'Understand others and respond to their needs', '13 signs that you are empathetic', 'https://www.youtube.com/watch?v=1E39jpNN9eQ', '', 2, 0),
(83, 8, 'Understand others and respond to their needs', 'Understanding others\' perspective', 'https://www.youtube.com/watch?v=jX2OLUhf8ZM', '', 2, 0),
(84, 8, 'Understand others and respond to their needs', 'Importance of empathy', 'https://www.youtube.com/watch?v=UzPMMSKfKZQ', '', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_table`
--

CREATE TABLE `mentor_table` (
  `mentor_id` int(10) NOT NULL,
  `mentor_name` varchar(25) NOT NULL,
  `mentor_mail` varchar(25) NOT NULL,
  `mentor_pass` varchar(50) NOT NULL,
  `mentor_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentor_table`
--

INSERT INTO `mentor_table` (`mentor_id`, `mentor_name`, `mentor_mail`, `mentor_pass`, `mentor_mobile`) VALUES
(1, 'Rekha', 'rekha@cu.in', '123456', 123423),
(2, 'Sandeep', 'sandeep@cu.in', '123456', 123423);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `chat_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes_table`
--

CREATE TABLE `notes_table` (
  `note_header` varchar(30) NOT NULL,
  `note_date` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes_table`
--

INSERT INTO `notes_table` (`note_header`, `note_date`, `description`, `email`) VALUES
('hello', '2023-02-09', 'helloo', '111'),
('hellll', '2023-02-02', 'jljklj', '111'),
('helo', '2023-02-02', 'asdfasd', '111'),
('sdfasdf', '2023-07-04', 'killer', 'chathu@cu.in'),
('sadf', '2023-07-05', 'kdsfsdd', ''),
('fasdfasd', '2023-03-02', 'sdafas', ''),
('asdf', '2023-02-02', 'asdfas', 'chathu@cu.in'),
('sfefdfe', '2023-02-02', 'sdfs', 'rekha@cu.in'),
('Scrt', '2023-02-02', 'adgerfgera\r\n', 'abinav@cu.in');

-- --------------------------------------------------------

--
-- Table structure for table `percent`
--

CREATE TABLE `percent` (
  `mentee_id` int(15) NOT NULL,
  `first` int(3) NOT NULL,
  `second` int(3) NOT NULL,
  `third` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `percent`
--

INSERT INTO `percent` (`mentee_id`, `first`, `second`, `third`) VALUES
(34, 45, 96, 65),
(36, 60, 75, 55),
(50, 78, 89, 75),
(53, 27, 50, 75),
(70, 0, 0, 0),
(2062002, 75, 90, 80),
(2062016, 65, 35, 60),
(2062017, 0, 0, 0),
(2062018, 0, 0, 0),
(2062019, 0, 0, 0),
(2062027, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recieve`
--

CREATE TABLE `recieve` (
  `id` int(100) NOT NULL,
  `recieved` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recieve`
--

INSERT INTO `recieve` (`id`, `recieved`) VALUES
(3, 'rekha@cu.in'),
(8, 'abinav@cu.in'),
(11, 'rekha@cu.in'),
(36, 'abinav@cu.in'),
(37, 'rekha@cu.in'),
(40, 'abinav@cu.in'),
(42, 'abinav@cu.in'),
(44, 'abinav@cu.in'),
(46, 'abinav@cu.in'),
(49, 'rekha@cu.in'),
(52, 'abinav@cu.in'),
(54, 'rekha@cu.in'),
(60, 'mkhashif@gmail.com'),
(61, 'rekha@cu.in'),
(68, 'abinav@cu.in'),
(76, 'abinav@cu.in'),
(78, 'rekha@cu.in'),
(82, 'rekha@cu.in'),
(85, 'abinav@cu.in'),
(118, 'rekha@cu.in'),
(122, 'abinav@cu.in'),
(125, 'rekha@cu.in'),
(139, 'abinav@cu.in'),
(145, 'rekha@cu.in'),
(148, 'rekha@cu.in'),
(153, 'abinav@cu.in'),
(154, 'abinav@cu.in'),
(156, 'abinav@cu.in'),
(160, 'abinav@cu.in'),
(162, 'abinav@cu.in'),
(164, 'abinav@cu.in'),
(166, 'abinav@cu.in'),
(172, 'abinav@cu.in'),
(174, 'abinav@cu.in'),
(178, 'rekha@cu.in'),
(181, 'abinav@cu.in'),
(184, 'rekha@cu.in'),
(195, 'abinav@cu.in'),
(200, 'abinav@cu.in'),
(227, 'abinav@gmail.com'),
(228, 'abinav@cu.in'),
(231, 'rekha@cu.in'),
(232, ''),
(233, ''),
(234, ''),
(235, ''),
(236, 'abinav@cu.in'),
(237, ''),
(238, ''),
(239, ''),
(240, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Mentor'),
(3, 'Mentee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verify_status` tinyint(1) DEFAULT NULL COMMENT 'yes=1,no=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`, `verify_status`) VALUES
(29, 'Dhanasekar', 'Dhanasekar', 'dhansty@gmail.com', 'Ch@230803', '9876543210', 1, 0, '2023-01-27 13:40:04', '2023-01-27 13:40:04', 1),
(33, 'rekha', 'Rekha', 'rek123@gmail.com', 'Ch@230803', '9876543210', 2, 0, '2023-02-03 09:18:27', '2023-02-03 09:18:27', 1),
(35, 'Ferrari', 'Ferrari', 'fj@gmail.com', 'Ch@230803', '9876543210', 1, 1, '2023-02-09 09:39:35', '2023-02-09 09:39:35', 1),
(36, 'Abinav', 'Abinav', 'tharkuri@gmail.com', 'Ch@230803', '987890987', 3, 1, '2023-02-11 06:57:48', '2023-02-11 06:57:48', 1),
(41, 'chat', 'chat', 'chat@gmail.com', 'Ch@230803', '9876543210', 2, 0, '2023-02-13 05:28:41', '2023-02-13 05:28:41', 1),
(49, 'Guru', '2062016', 'chatguru@gmail.com', 'Ch@230803', '9876543210', 1, 0, '2023-02-14 14:18:35', '2023-02-14 14:18:35', NULL),
(50, 'dhn', '2342432', 'dhan@fdmd.in', 'Ch@230823', '87983472', 3, 0, '2023-02-14 15:09:15', '2023-02-14 15:09:15', NULL),
(52, 'Ranjitha', '2062016', 'ranjitha@gmail.com', 'Ch@230803', '9876789090', 1, 0, '2023-02-15 05:14:17', '2023-02-15 05:14:17', NULL),
(53, 'Sabi', '2062011', 'sabi@gmail.com', 'Ch@230803', '980989098', 3, 0, '2023-02-15 07:18:19', '2023-02-15 07:18:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videoprogress`
--

CREATE TABLE `videoprogress` (
  `mentee` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `topic1` int(11) NOT NULL,
  `topic2` int(11) NOT NULL,
  `topic3` int(11) NOT NULL,
  `topic4` int(11) NOT NULL,
  `topic5` int(11) NOT NULL,
  `topic6` int(11) NOT NULL,
  `topic7` int(11) NOT NULL,
  `topic8` int(11) NOT NULL,
  `complete_percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videoprogress`
--

INSERT INTO `videoprogress` (`mentee`, `year`, `topic1`, `topic2`, `topic3`, `topic4`, `topic5`, `topic6`, `topic7`, `topic8`, `complete_percent`) VALUES
('chathu@cu.in', 2, 1, 0, 0, 0, 0, 0, 0, 0, 13),
('abinav@cu.in', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accolades`
--
ALTER TABLE `accolades`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `assigned_by` (`assigned_by`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `completed`
--
ALTER TABLE `completed`
  ADD KEY `mentee_id` (`mentee_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `mentee_table`
--
ALTER TABLE `mentee_table`
  ADD PRIMARY KEY (`mentee_id`),
  ADD KEY `FK_Key` (`assigned_mentor_id`);

--
-- Indexes for table `mentor_table`
--
ALTER TABLE `mentor_table`
  ADD PRIMARY KEY (`mentor_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `recieve`
--
ALTER TABLE `recieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recieve`
--
ALTER TABLE `recieve`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`assigned_by`) REFERENCES `mentor_table` (`mentor_id`) ON DELETE CASCADE;

--
-- Constraints for table `completed`
--
ALTER TABLE `completed`
  ADD CONSTRAINT `completed_ibfk_1` FOREIGN KEY (`mentee_id`) REFERENCES `mentee_table` (`mentee_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `completed_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `assignment` (`t_id`) ON DELETE CASCADE;

--
-- Constraints for table `mentee_table`
--
ALTER TABLE `mentee_table`
  ADD CONSTRAINT `FK_Key` FOREIGN KEY (`assigned_mentor_id`) REFERENCES `mentor_table` (`mentor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
