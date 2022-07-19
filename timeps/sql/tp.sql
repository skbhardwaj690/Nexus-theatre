-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 02:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`name`, `email`, `message`) VALUES
('Sumit', 'akb85308@gmail.com', 'hello, this is good website....'),
('Sumit', 'akb85308@gmail.com', 'This is not good.....');

-- --------------------------------------------------------

--
-- Table structure for table `tb_movie`
--

CREATE TABLE `tb_movie` (
  `id` int(100) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `release_year` year(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video_url` varchar(100) NOT NULL,
  `t_price` varchar(100) NOT NULL,
  `screen_day` varchar(100) NOT NULL,
  `screen_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_movie`
--

INSERT INTO `tb_movie` (`id`, `movie_name`, `lang`, `cast`, `descr`, `release_year`, `image`, `video_url`, `t_price`, `screen_day`, `screen_time`) VALUES
(1, 'Delhi Safari	', 'Hindi', 'Govinda :- Bajrangi (voice), Akshaye Khanna :- Alex (voice), Urmila Matondkar :- Begum (voice)', 'Delhi Safari (also known as Jungle Safari) is a 2012 Indian computer-animated comedy musical film directed by Nikkhil Advani. It has been produced by Krayon Pictures (a Pune-based 3D animation studio).', 2012, 'delhi1.jpg', 'https://www.youtube.com/watch?v=y9oljIvNEHo', '150', 'Monday-Wednesday', '3:00 PM to 6:00 PM '),
(2, 'Karnan', 'Tamil', 'Dhanush(Karnan), Lal Paul(Yeama Raja), Yogi Babu(Vadamalaiyaan), Rajisha Vijayan(Draupathai)', 'Karnan is a 2021 Indian Tamil-language action drama film directed by Mari Selvaraj, and produced by Kalaipuli S. Thanu under his V Creations banner.', 2021, 'karnan.jpg', 'https://www.youtube.com/watch?v=pgfUzQ8nzBY', '160', 'Wednesday-Friday', '7:00 PM to 10:00 PM '),
(3, 'Mortal Kombat', 'English', 'Lewis Tan(Cole Young), Jessica McNamee(Sonya Blade), Josh Lawson(Kano Tadanobu), Asano(Lord Raiden)', 'Mortal Kombat is a 2021 American martial arts fantasy film directed by Simon McQuoid, from a screenplay by Greg Russo and Dave Callaham and a story by Russo and Oren Uziel. It is based on the video game franchise of the same name created by Ed Boon and John Tobias, serving as a reboot to the Mortal Kombat film series.', 2021, 'kombat.jpg', 'https://www.youtube.com/watch?v=jBa_aHwCbC4', '150', 'Friday-Monday', '9:00 AM to 12:00 PM '),
(8, 'Dragon Ball', 'English', 'Vic Mignogna :- Broly(voice), Sean Schemmel :- Goku(voice), Christopher Sabat :- Vegeta(voice)', 'Dragon Ball Super: Broly is a 2018 Japanese anime martial arts fantasy/adventure film, directed by Tatsuya Nagamine and written by Dragon Ball series creator Akira Toriyama.', 2018, 'broly1.jpg', 'https://www.youtube.com/watch?v=FHgm89hKpXU', '', '', ''),
(9, 'Angry Birds 2', 'English', 'Jason Sudeikis :- Red (voice), Josh Gad :- Chuck (voice), Bill Hader :- Leonard (voice)', 'The Angry Birds Movie 2 is a 2019 American computer-animated comedy film based on Rovio Entertainment\'s Angry Birds video game series, produced by Columbia Pictures, Rovio Animation, and Sony Pictures Animation, and distributed by Sony Pictures Releasing.', 2019, 'ang2.jpg', 'https://www.youtube.com/watch?v=RSKQ-lVsMdg', '', '', ''),
(10, 'Master', 'Tamil', 'Vijay(John durairaj), Vijay Sethupathi(Bhavani), Malavika Mohanan(Charulatha)', 'Master is a 2021 Indian Tamil-language action thriller film written and directed by Lokesh Kanagaraj. The film was produced by Xavier Britto, under his maiden production house XB Film Creators, and was distributed by S. S. Lait Kumar of Seven Screen Studios.', 2021, 'master.jpg', 'https://www.youtube.com/watch?v=UTiXQcrLlv4', '180', 'Tuesday-Saturday', '3:00 PM to 6:00 PM '),
(11, 'Krrish3', 'Hindi', 'Hrithik Roshan(Rohit,Krishna), Vivek Oberoi(Kaal), Priyanka Chopra(Priya)', 'Krrish 3 is a 2013 Indian Hindi-language superhero film produced and directed by Rakesh Roshan, and written by Honey Irani and Robin Bhatt. It is the third film in the Krrish series, following Koi... Mil Gaya (2003) and Krrish (2006).', 2013, 'krrish1.jpg', 'https://www.youtube.com/watch?v=MCCVVgtI5xU', '150', 'Saturday-Thursday', '7:00 PM to 10:00 PM '),
(12, 'Godzilla v/s Kong', 'English', 'Alexander Skarsgard(Nathan Lind), Millie Bobby Brown(Madison Russell), Rebecca Hall(Ilene Andrews)', 'Godzilla vs. Kong is a 2021 American monster film directed by Adam Wingard. A sequel to Godzilla: King of the Monsters (2019) and Kong: Skull Island (2017), it is the fourth film in Legendary\'s MonsterVerse.', 2021, 'godzilla.jpg', 'https://www.youtube.com/watch?v=odM92ap8_c0', '190', 'Thursday-Tuesday', '9:00 AM to 12:00 PM '),
(14, 'Zack Snyder\'s Justice League', 'English', 'Ben Affleck(Batman), Henry Cavill(Superman), Gal Gadot(Wonder Woman)', 'Zack Snyder\'s Justice League, often referred to as the \"Snyder Cut\", is the 2021 director\'s cut of the 2017 American superhero film Justice League.', 2021, 'justice.jpg', 'https://www.youtube.com/watch?v=vM-Bja2Gy04\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registration`
--

CREATE TABLE `tb_registration` (
  `id` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registration`
--

INSERT INTO `tb_registration` (`id`, `uname`, `password`, `age`, `phone`, `gender`, `email`) VALUES
(1, 'Sumit', '7815696ecbf1c96e6894b779456d330e', 19, 9081594025, 'male', 'akb85308@gmail.com'),
(2, 'Akash', '912ec803b2ce49e4a541068d495ab570', 19, 6355157390, 'male', 'aks123@gmail.com'),
(4, 'Amit', '0cb1eb413b8f7cee17701a37a1d74dc3', 23, 9081594026, 'male', 'am26@gmail.com'),
(5, 'Aakash', 'bfd59291e825b5f2bbf1eb76569f8fe7', 22, 1234567890, 'male', 'akb123@gmail.com'),
(6, 'asd', '7815696ecbf1c96e6894b779456d330e', 23, 1233211234, 'male', 'akb122@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_theater`
--

CREATE TABLE `tb_theater` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_theater`
--

INSERT INTO `tb_theater` (`id`, `name`, `address`, `state`, `city`, `pin`) VALUES
(1, 'NEXUS theaters', 'NEXUS theater,Inside Gate-no.2,Opposite Balaji wafers pvt ltd,Metoda Rajkot Gujrat - 360021', 'Gujrat', 'Rajkot', 360021);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ticket`
--

CREATE TABLE `tb_ticket` (
  `id` int(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `qty` int(20) DEFAULT NULL,
  `movie_name` varchar(100) NOT NULL,
  `created on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `show_date` varchar(100) NOT NULL,
  `show_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ticket`
--

INSERT INTO `tb_ticket` (`id`, `uname`, `email`, `phone`, `qty`, `movie_name`, `created on`, `show_date`, `show_time`) VALUES
(18, 'Sumit', 'akb85308@gmail.com', 9081594025, 1, 'Godzilla v/s Kong', '2021-05-02 07:07:37', '2021-05-11', '9:00 AM to 12:00 PM '),
(19, 'Sumit', 'akb85308@gmail.com', 9081594025, 1, 'Krrish3', '2021-05-02 07:20:32', '2021-05-13', '7:00 PM to 10:00 PM '),
(22, 'Sumit', 'akb85308@gmail.com', 9081594025, 1, 'Karnan', '2021-05-02 07:24:09', '2021-05-21', '7:00 PM to 10:00 PM '),
(23, 'Sumit', 'akb85308@gmail.com', 9081594025, 1, 'Master', '2021-05-02 07:33:08', '2021-05-22', '3:00 PM to 6:00 PM '),
(24, 'Akash', 'aks123@gmail.com', 6355157390, 1, 'Krrish3', '2021-05-02 10:05:06', '2021-05-20', '7:00 PM to 10:00 PM '),
(25, 'Akash', 'aks123@gmail.com', 6355157390, 1, 'Godzilla v/s Kong', '2021-05-02 10:10:34', '2021-06-24', '9:00 AM to 12:00 PM '),
(26, 'Sumit', 'akb85308@gmail.com', 9081594025, 1, 'Delhi Safari	', '2021-05-02 11:06:03', '2021-07-26', '3:00 PM to 6:00 PM '),
(27, 'Sumit', 'akb85308@gmail.com', 9081594025, 3, 'Mortal Kombat', '2021-05-02 12:38:45', '2021-07-30', '9:00 AM to 12:00 PM '),
(28, 'Sumit', 'akb85308@gmail.com', 9081594025, 2, 'Master', '2021-05-02 12:40:16', '2021-05-15', '3:00 PM to 6:00 PM '),
(29, 'Sumit', 'akb85308@gmail.com', 9081594025, 2, 'Delhi Safari	', '2021-05-02 12:41:43', '2021-06-07', '3:00 PM to 6:00 PM '),
(30, 'Amit', 'am26@gmail.com', 9081594026, 2, 'Godzilla v/s Kong', '2021-05-10 07:50:46', '2021-07-13', '9:00 AM to 12:00 PM '),
(31, 'Aakash', 'akb123@gmail.com', 1234567890, 3, 'Delhi Safari	', '2022-07-19 11:30:32', '2022-07-20', '3:00 PM to 6:00 PM ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_movie`
--
ALTER TABLE `tb_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_registration`
--
ALTER TABLE `tb_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_theater`
--
ALTER TABLE `tb_theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_movie`
--
ALTER TABLE `tb_movie`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_registration`
--
ALTER TABLE `tb_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_theater`
--
ALTER TABLE `tb_theater`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
