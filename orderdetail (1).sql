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
-- 資料表結構 `orderdetail`
--

CREATE TABLE `orderdetail` (
  `det_id` int(15) NOT NULL,
  `item_id` int(15) NOT NULL,
  `order_id` int(15) NOT NULL,
  `itemfullname` varchar(50) NOT NULL,
  `note` varchar(100) NOT NULL,
  `rating` int(1) DEFAULT NULL,
  `feedback` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `orderdetail`
--

INSERT INTO `orderdetail` (`det_id`, `item_id`, `order_id`, `itemfullname`, `note`, `rating`, `feedback`, `amount`) VALUES
(84, 2, 33, '70kcal朝日咖哩雞胸 紅藜白飯 焙煎胡麻醬', '', 4, '好吃\r\n', 1),
(85, 26, 34, '36kcal水煮青菜', '', 4, '菜好吃', 1),
(87, 26, 35, '36kcal水煮青菜', '', 1, '菜沒煮熟\r\n', 1),
(88, 27, 36, '274kcal紅藜白飯', '', 3, '好吃', 1),
(89, 28, 37, '48kcal溏心蛋(整顆)', '', 5, '糖心蛋好吃', 1),
(90, 15, 37, '陽光沙拉盒', '', 3, '糖心蛋好吃', 1),
(91, 33, 38, '伯爵鮮奶茶 冷', '', 5, '', 1),
(92, 34, 39, '美式咖啡 冷', '', 4, '好喝', 1),
(93, 19, 40, '80kcal墨西哥紅椒雞胸', '', 3, '', 1),
(94, 17, 40, '70kcal朝日咖哩雞胸', '', 4, '', 1),
(95, 19, 41, '80kcal墨西哥紅椒雞胸', '', 1, '', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`det_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `det_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
