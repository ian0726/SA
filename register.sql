-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sa`
--

-- --------------------------------------------------------

--
-- 資料表結構 `register`
--

CREATE TABLE `register` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `time` datetime NOT NULL,
  `people` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `reg_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `register`
--

INSERT INTO `register` (`name`, `phone`, `time`, `people`, `reg_id`) VALUES
('皮卡丘', '09112', '2022-05-03 00:00:00', '1-', 1),
('JKHHBJHV', 'JKNKLKLJO', '2022-05-03 00:00:00', '2人', 2),
('jhkn', 'koklk', '2022-05-03 00:00:00', '2人桌', 3),
('皮卡丘', '09112', '2022-05-03 00:00:00', '2人桌', 4),
('hkhjhk', 'uhkjk', '2022-05-03 00:00:00', '2人桌', 5),
('l,;l', 'kkl', '2022-05-03 00:00:00', '', 6),
('sfdsf', 'dsdsd', '2022-05-03 00:00:00', '4人桌', 7),
('hana', '0989576844', '2022-05-03 15:57:03', '2人桌', 8),
('劉珈妤', 'JKNKLKLJO', '2022-05-03 16:00:05', '2人桌', 9),
('hana', '09112', '2022-05-03 21:11:18', '1', 10),
('劉珈妤', 'koklk', '2022-05-03 22:27:58', '3', 11);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `name` (`name`),
  ADD KEY `phone` (`phone`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
