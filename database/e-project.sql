-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 08:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `seats` varchar(255) NOT NULL,
  `DATE` date DEFAULT NULL,
  `TIME` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `movie_id`, `theater_id`, `seats`, `DATE`, `TIME`) VALUES
(53, 9, 10, 9, 'A2', '2023-11-29', '09:00:00'),
(54, 9, 10, 9, 'A5', '2023-11-29', '09:00:00'),
(55, 5, 10, 9, 'C6', '2023-11-29', '21:00:00'),
(56, 5, 10, 9, 'C7', '2023-11-29', '21:00:00'),
(57, 5, 10, 9, 'C8', '2023-11-29', '21:00:00'),
(58, 5, 10, 10, 'A1', '2023-11-30', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `age`, `price`) VALUES
(1, 'Gold Category', 'Adult', 'PKR 1000'),
(3, 'Platinum Category', 'Adult', 'PKR 1800'),
(4, 'Box Category', 'Adult', 'PKR 1000'),
(5, 'All CATEGORYY (3 to 12)', 'For Child', 'PKR 899');

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `mid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `release` date NOT NULL,
  `genre` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`mid`, `name`, `description`, `release`, `genre`, `cast`, `image`, `link`) VALUES
(9, 'The Assassin', 'Set in ninth-century China during a time of unrest that would eventually lead to the decline of the Tand Dynasty, \"The Assassin\" tells the story of Nie Yinniang (Shu Qui), who was kidnapped by her family when she was only 10 by Jiaxin (Sheu Fang-yi), a nun who trained her to become a brutally efficient assassin ...', '2015-11-25', 'Action , Comedy , Thriller', 'Chu Qi, Chang Chen, Youn Zhou, Ni Dohang', 'THE-ASSASSIN.jpg', ''),
(10, 'Jawaan', 'Jawan (transl. Soldier) is an Indian Hindi , Tamil, Telugu language action thriller movie. Atlee Kumar made his Hindi movie debut by writing and directing this movie.[1] It is produced by Gauri Khan and Gaurav Verma under Red Chillies Entertainment. It stars Shah Rukh Khan in a multiple roles,', '2023-09-07', 'Action , Drama , Thriller', 'Sharukh Khan, Nayanthara, Vijay Seethupathi', 'jawan.jpg', 'https://www.youtube.com/watch?v=MWOlnZSnXJo&t=10s'),
(12, 'Vaathi', 'The Dhanush-Starrer Vaathi, Streaming on Netflix, is an Elementary Message Movie About The Most Primary Issues in The Education System. The idea of the teacher as a saviour has been a part of our movies for so long that it has become easy to predict the ebbs and flows of the subgenre.', '2023-02-17', 'Action , Drama , Comedy', 'Dhanush, Samyuktha', 'VAATHI.jpg', 'https://www.youtube.com/watch?v=ahK67chVTgA'),
(13, 'Bhool Bhalayia', 'Parents need to know that Bhool Bhulaiyaa 2 is an Indian horror-comedy standalone sequel with plenty of jump scares and some gruesome imagery. It follows romantic couple Reet (Kiara Advani) and Ruhaan (Kartik Aaryan) who when they step into a haunted ancestral property, unknowingly set free a ghostly spirit', '2022-02-20', 'Horror, Comedy, THriller', 'Kartik Aryan, Kiara Advani', 'BHOOL_BHOLIYA.jpg', 'https://www.youtube.com/watch?v=P2KRKxAb2ek'),
(14, 'Salaar', 'A gang leader tries to keep a promise made to his dying friend and takes on the other criminal gangs. A gang leader tries to keep a promise made to his dying friend and takes on the other criminal gangs. A gang leader tries to keep a promise made to his dying friend and takes on the other criminal gangs.', '2023-12-22', 'Action, Drama, Thriller', 'Prabhas, Minakshi Chaudhary', 'salaar.jpg', ''),
(19, 'Jurrassic World', 'Set 22 years after the original Jurassic Park, Jurassic World revolves around a functional theme park featuring dinosaurs, which is then thrown into chaos when a genetic hybrid known as the Indominus rex escapes containment. Jurassic World was distributed by Universal Studios, alongside Legendary Entertainment.', '2015-06-10', 'Action , Adventure , Thriller', 'Chris Prath, Bryce Dallas Howard', 'jurrassic.jpg', ''),
(20, 'Joker', 'Set in 1981, it follows Arthur Fleck, a failed clown and aspiring stand-up comic whose descent into mental illness and nihilism inspires a violent countercultural revolution against the wealthy in a decaying Gotham City. Robert De Niro, Zazie Beetz and Frances Conroy appear in supporting roles.', '2019-10-04', 'Horror , Comedy , Thriller', 'Joaquin Pheonix, Bryan Callen, Zazie Beetz', 'Joker.jpg', ''),
(22, 'Avatar', 'Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na\'vi woman (Zoe Saldana). As a bond with her grows, he is drawn into a battle for the survival of her world.', '2022-12-16', 'Action , Comedy , Drama', 'Zoe Saldana, Sam Worthington, Stephen Leng', 'avatar.jpg', ''),
(23, 'Master', 'Three women strive to find their place at an elite Northeastern university as old as the country. When anonymous racist attacks target a Black freshman, who insists she is being haunted by ghosts of the school\'s past, each woman must determine where the real menace lies. Rated R for language and some drug use.', '2021-01-01', 'Action , Drama , Thriller', 'Vijay, Vijay Sethupathi', 'MASTER.jpg', ''),
(24, 'Gold', 'Gold is based on the journey of India\'s national hockey team to the 1948 Summer Olympics and follows Tapan Das, the man who won India its first gold medal in the same event. Gold was theatrically released on 15 August 2018 during India\'s Independence Day.', '2018-08-15', 'Crime, Drama, Sport', 'Aksahy Kumar, Sunny Kaushal, Mouni Roy', 'GOLD.jpg', ''),
(25, 'Hulk', 'Commonly portrayed as a raging savage, the Hulk has been represented with other alter egos, from a mindless, destructive force (War), to a brilliant warrior (World-Breaker), a self-hating protector (the Devil/Immortal), a genius scientist in his own right (Doc Green), and a gangster (Joe Fixit).', '2003-06-17', 'Action , Drama , Adventure', 'Eric Bana, Jennifer Connely, Stan Lee', 'HULK.jpg', ''),
(27, 'Bloody Daddy', 'Bloody Daddy chronicles the story of one night when NCB officer Sumair Azad (Shahid Kapoor) goes to meet drug lord Sikander Choudhary (Ronit Bose Roy) in his club to return a bag of cocaine in exchange for his kidnapped teenage son. But things don\'t go as per plan and what ensues is a \'bloody\' fight.', '2023-08-09', 'Action , Drama , Thriller', 'Shahid Kapoor, Diana Penty, Sanjay Kapoor', 'bloodydaddy1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie_news`
--

CREATE TABLE `movie_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `release` date NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_news`
--

INSERT INTO `movie_news` (`id`, `title`, `release`, `description`, `image`, `link`) VALUES
(5, 'Salaar Official Trailer | Prabhas | Shruti hassan | Prashanth Neel', '2023-12-22', 'A gang leader tries to keep a promise made to his dying friend and takes on the other criminal gangs.', 'salaar2.jpg', 'https://youtube.com/watch?v=_JKUOTs5lvc'),
(6, 'Jawaan Official Trailer | Shahrukh Khan | Nayanthara | Vijay', '2023-09-07', 'A gang leader tries to keep a promise made to his dying friend and takes on the other criminal gangs.', 'jawan.jpg', 'https://www.youtube.com/watch?v=MWOlnZSnXJo&t=9s'),
(7, 'Bloody Official Trailer | Prabhas | Shruti hassan | Prashanth Neel', '2023-12-06', 'A gang leader tries to keep a promise made to his dying friend and takes on the other criminal gangs.', 'blood.webp', 'https://youtube.com/watch?v=_JKUOTs5lvc'),
(8, 'Gadar 2 Official Trailer | Prabhas | Shruti hassan | Prashanth Neel', '2023-02-07', 'A gang leader tries to keep a promise made to his dying friend and takes on the other criminal gangs.', 'gadar_bg.jpg', 'https://youtube.com/watch?v=_JKUOTs5lvc');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `user_id`, `movie_id`) VALUES
(35, 'He is Good Movie Nice !', 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `seat_no`, `status`) VALUES
(1, 'A1', 'Booked'),
(2, 'A2', 'Booked'),
(3, 'A3', 'Booked'),
(4, 'A4', 'Booked'),
(5, 'A5', 'Booked'),
(6, 'A6', 'Available'),
(7, 'A7', 'Available'),
(8, 'A8', 'Available'),
(9, 'A9', 'Available'),
(10, 'A10', 'Available'),
(11, 'B1', 'Booked'),
(12, 'B2', 'Available'),
(13, 'B3', 'Booked'),
(14, 'B4', 'Available'),
(15, 'B5', 'Available'),
(16, 'B6', 'Available'),
(17, 'B7', 'Booked'),
(18, 'B8', 'Available'),
(19, 'B9', 'Available'),
(20, 'B10', 'Booked'),
(21, 'C1', 'Available'),
(22, 'C2', 'Available'),
(23, 'C3', 'Available'),
(24, 'C4', 'Booked'),
(25, 'C5', 'Available'),
(26, 'C6', 'Booked'),
(27, 'C7', 'Booked'),
(28, 'C8', 'Booked'),
(29, 'C9', 'Available'),
(30, 'C10', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `show_time`
--

CREATE TABLE `show_time` (
  `show_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_date` date DEFAULT NULL,
  `theater_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `show_time`
--

INSERT INTO `show_time` (`show_id`, `theater_id`, `movie_id`, `theater_date`, `theater_time`) VALUES
(4, 10, 10, '2023-11-28', '22:00:00'),
(5, 9, 10, '2023-11-28', '02:00:00'),
(6, 9, 10, '2023-11-29', '11:00:00'),
(7, 9, 12, '2023-11-29', '09:00:00'),
(8, 8, 10, '2023-11-29', '02:00:00'),
(9, 9, 10, '2023-11-29', '21:00:00'),
(10, 10, 14, '2023-11-30', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `theater_list`
--

CREATE TABLE `theater_list` (
  `id` int(11) NOT NULL,
  `theater_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theater_list`
--

INSERT INTO `theater_list` (`id`, `theater_name`) VALUES
(8, 'Cineplex'),
(9, 'Multiplex'),
(10, 'Capri');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` date DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `gender`, `DOB`, `image`) VALUES
(5, 'Waseem', 'aptechwaseem2@gmail.com', '$2y$10$Lv1orE7lGLlr1qBRH/lfS.itpqONXW6OyUIm9nxb4AgoMMmxQZH.O', '03142269840', 'Male', '2004-12-24', 'profile.png'),
(6, 'Asim', 'asim@gmail.com', '$2y$10$SNbRqX2a/aarPED51aXM/u0ThHJDURAXAjNgKaCEZLiqhfcURKQXS', ' 318 1168551', 'Male', '2001-12-22', 'profile.png'),
(9, 'admin', 'admin@gmail.com', '$2y$10$p5n7/KmhUJvifPSrj6RTb.ngQ.P5usXxeIL9oLXH0LvgbLhpa6YUi', '', '', '0000-00-00', ''),
(10, 'arsalan', 'arsalan@gmail.com', '$2y$10$J/MW38JFtmyZ1i2fqnRpMuAzeIUBkI/Wqq9mGQhVyOnZT2/STshOu', '03142269840', 'Male', '2000-06-06', 'profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_fk` (`user_id`),
  ADD KEY `movie_fk` (`movie_id`),
  ADD KEY `theater_fk` (`theater_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `movie_news`
--
ALTER TABLE `movie_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_fk` (`user_id`),
  ADD KEY `m_fk` (`movie_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `show_time`
--
ALTER TABLE `show_time`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `theater` (`theater_id`),
  ADD KEY `movie` (`movie_id`);

--
-- Indexes for table `theater_list`
--
ALTER TABLE `theater_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `movie_news`
--
ALTER TABLE `movie_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `show_time`
--
ALTER TABLE `show_time`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `theater_list`
--
ALTER TABLE `theater_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `movie_fk` FOREIGN KEY (`movie_id`) REFERENCES `movie_list` (`mid`),
  ADD CONSTRAINT `theater_fk` FOREIGN KEY (`theater_id`) REFERENCES `theater_list` (`id`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `m_fk` FOREIGN KEY (`movie_id`) REFERENCES `movie_list` (`mid`),
  ADD CONSTRAINT `u_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `show_time`
--
ALTER TABLE `show_time`
  ADD CONSTRAINT `movie` FOREIGN KEY (`movie_id`) REFERENCES `movie_list` (`mid`),
  ADD CONSTRAINT `theater` FOREIGN KEY (`theater_id`) REFERENCES `theater_list` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
