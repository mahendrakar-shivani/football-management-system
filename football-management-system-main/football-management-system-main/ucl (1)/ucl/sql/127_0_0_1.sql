-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 04:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucl`
--
CREATE DATABASE IF NOT EXISTS `ucl` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ucl`;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `date` varchar(20) DEFAULT NULL,
  `game_id` varchar(20) NOT NULL,
  `score` varchar(30) DEFAULT NULL,
  `result` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`date`, `game_id`, `score`, `result`) VALUES
('5-1-2022', 'mutd_vs_psg', 'mutd(4)-(0)psg', 'manchester_united_won'),
('1-1-2022', 'rm_vs_bm', 'rm(5)-(4)bm', 'real_madrid_won'),
('10-1-2022', 'rm_vs_mutd', 'rm(3)-(2)mutd', 'real_madrid_won');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_name` varchar(30) DEFAULT NULL,
  `m_id` varchar(10) NOT NULL,
  `team_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_name`, `m_id`, `team_id`) VALUES
('j_nagelsmann', 'bm_jn', 'bayernm'),
('r_ragnik', 'manutd_rr', 'man_utd'),
('m_pochetino', 'psg_mp', 'psg'),
('c_ancelotti', 'rm_ca', 'rm');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `p_name` varchar(30) DEFAULT NULL,
  `p_id` varchar(10) NOT NULL,
  `age` varchar(10) DEFAULT NULL,
  `team_id` varchar(10) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`p_name`, `p_id`, `age`, `team_id`, `goals`, `assists`) VALUES
('m_neur', 'bm01', '35', 'bayernm', 0, 0),
('n_sule', 'bm04', '29', 'bayernm', 0, 0),
('b_pavard', 'bm05', '24', 'bayernm', 0, 0),
('j_kimmich', 'bm06', '25', 'bayernm', 0, 0),
('s_gnabry', 'bm07', '27', 'bayernm', 0, 0),
('l_goretzka', 'bm08', '26', 'bayernm', 0, 0),
('r_lewandowski', 'bm09', '33', 'bayernm', 3, 1),
('l_sane', 'bm10', '24', 'bayernm', 0, 0),
('a_davies', 'bm19', '21', 'bayernm', 0, 0),
('c_tolisso', 'bm24', '27', 'bayernm', 0, 0),
('t_muller', 'bm25', '32', 'bayernm', 1, 3),
('d_degea', 'mu01', '30', 'man_utd', 0, 0),
('h_mguire', 'mu05', '29', 'man_utd', 0, 0),
('pogba', 'mu06', '28', 'man_utd', 0, 3),
('c_ronaldo', 'mu07', '36', 'man_utd', 3, 0),
('m_rashford', 'mu10', '24', 'man_utd', 0, 0),
('m_greenwood', 'mu11', '19', 'man_utd', 0, 0),
('j_sancho', 'mu17', '23', 'man_utd', 1, 2),
('b_fernandes', 'mu18', '26', 'man_utd', 1, 0),
('r_varane', 'mu19', '27', 'man_utd', 1, 0),
('l_shaw', 'mu23', '28', 'man_utd', 0, 1),
('w_bissaka', 'mu29', '24', 'man_utd', 0, 0),
('s_ramos', 'psg04', '36', 'psg', 0, 0),
('marquinos', 'psg05', '30', 'psg', 0, 0),
('m_veratti', 'psg06', '31', 'psg', 0, 0),
('k_mbappe', 'psg07', '24', 'psg', 0, 0),
('neymar_jr', 'psg10', '30', 'psg', 0, 0),
('dimaria', 'psg11', '33', 'psg', 0, 0),
('wijnaldum', 'psg18', '26', 'psg', 0, 0),
('t_kehrer', 'psg24', '25', 'psg', 0, 0),
('n_mendes', 'psg25', '25', 'psg', 0, 0),
('l_messi', 'psg30', '34', 'psg', 0, 0),
('g_donarumma', 'psg50', '22', 'psg', 0, 0),
('t_courtouis', 'rm01', '31', 'rm', 0, 0),
('e_militao', 'rm03', '24', 'rm', 0, 0),
('d_alaba', 'rm04', '29', 'rm', 0, 0),
('hazard', 'rm07', '31', 'rm', 3, 1),
('t_kroos', 'rm08', '32', 'rm', 0, 4),
('benzema', 'rm09', '34', 'rm', 3, 0),
('l_modric', 'rm10', '36', 'rm', 1, 2),
('casemiro', 'rm14', '29', 'rm', 0, 0),
('l_vasquez', 'rm17', '30', 'rm', 0, 0),
('vinicius', 'rm20', '21', 'rm', 1, 1),
('f_mendy', 'rm23', '23', 'rm', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE `referee` (
  `r_name` varchar(30) DEFAULT NULL,
  `r_id` varchar(10) DEFAULT NULL,
  `game_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`r_name`, `r_id`, `game_id`) VALUES
('k_west', 'kw', 'rm_vs_bm'),
('abel', 'tw', 'mutd_vs_psg'),
('mike_dean', 'md', 'rm_vs_mutd');

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE `stadium` (
  `s_name` varchar(30) DEFAULT NULL,
  `s_id` varchar(30) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `game_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stadium`
--

INSERT INTO `stadium` (`s_name`, `s_id`, `address`, `game_id`) VALUES
('allianz', 'alz', 'munich', 'mutd_vs_psg'),
('oldtrafford', 'ot', 'manchester', 'rm_vs_mutd'),
('wembley', 'wmb', 'london', 'rm_vs_bm');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `name` varchar(30) DEFAULT NULL,
  `team_id` varchar(10) NOT NULL,
  `m_won` varchar(5) DEFAULT NULL,
  `m_lost` varchar(5) DEFAULT NULL,
  `m_drawn` varchar(5) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `country` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`name`, `team_id`, `m_won`, `m_lost`, `m_drawn`, `status`, `country`) VALUES
('bayern_munich', 'bayernm', '0', '1', '0', '_', 'germany'),
('manchester_united', 'man_utd', '1', '1', '0', 'runnerup', 'england'),
('paris_sg', 'psg', '0', '1', '0', '_', 'france'),
('real_madrid', 'rm', '2', '0', '0', 'champions', 'spain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);


ALTER TABLE `referee`
  ADD PRIMARY KEY (`r_id`);
--
-- Constraints for dumped tables
--

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE;

--
-- Constraints for table `stadium`
--
ALTER TABLE `stadium`
  ADD CONSTRAINT `stadium_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`) ON DELETE CASCADE;


ALTER TABLE `referee`
  ADD CONSTRAINT `stadium_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`) ON DELETE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
