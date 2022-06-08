-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2022 at 04:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sa`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `block` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `name`, `phone`, `password`, `block`) VALUES
('0512', '0512', '0512', '0512', 0),
('admin', 'admin', '123', 'adminadmin', 0),
('fff', 'fff', '1', 'fff', 4),
('new', 'new', 'new', 'new', 0),
('test', 'test', '12354656', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(15) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `sauce` varchar(50) DEFAULT NULL,
  `side` varchar(50) DEFAULT NULL,
  `variant` varchar(50) DEFAULT NULL,
  `amount` int(3) NOT NULL,
  `note` varchar(100) DEFAULT NULL,
  `totalp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `img` varchar(50) NOT NULL,
  `des` varchar(200) DEFAULT NULL,
  `av` tinyint(1) NOT NULL,
  `category` varchar(20) NOT NULL,
  `customize` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `price`, `img`, `des`, `av`, `category`, `customize`) VALUES
(1, '62kcal義式香草雞胸餐盒', 110, 'images/經典1.jpeg', '✔蛋白質13.44g 脂肪0.54g 碳水0.84g', 1, '經典餐盒', 1),
(2, '70kcal朝日咖哩雞胸餐盒', 110, 'images/經典2.jpeg', '✔蛋白質13.98g 脂肪1.56g 碳水3.72g', 1, '經典餐盒', 1),
(3, '63kcal檸檬椒鹽雞胸餐盒', 110, 'images/經典3.jpeg', '✔蛋白質12.6g 脂肪1.02g 碳水0.9g', 1, '經典餐盒', 1),
(4, '80kcal墨西哥紅椒雞胸餐盒', 110, 'images/經典4.jpeg', '✔蛋白質14.22g 脂肪1.26g 碳水2.82g', 1, '經典餐盒', 1),
(5, '墨西哥嫩雞捲餐盒', 70, 'images/捲捲1.jpg', '', 1, '輕食捲捲', 1),
(6, '170kcl法式香榭雞腿餐盒', 135, 'images/經典5.jpeg', '✔蛋白質15.82g 脂肪8.82g 碳水6.91g', 1, '經典餐盒', 1),
(7, '161kcal韓式風味牛餐盒', 155, 'images/經典6.jpeg', '✔蛋白質11.5g 脂肪11.2g 碳水3.5g', 1, '經典餐盒', 1),
(8, '194kcal日式薑燒豬餐盒', 125, 'images/經典7.jpeg', '✔蛋白質16.5g 脂肪12.75g 碳水2.25g', 1, '經典餐盒', 1),
(9, '176kcal泰式打拋豬餐盒', 140, 'images/經典8.jpeg', '✔蛋白質16g 脂肪8g 碳水10g', 1, '經典餐盒', 1),
(10, '79kcal普羅旺斯鯛魚餐盒', 140, 'images/經典9.jpeg', '✔蛋白質15.6g 脂肪1.84g 碳水0.16g', 1, '經典餐盒', 1),
(11, '78kcal素食綜合野菇餐盒', 135, 'images/經典10.jpeg', '✔蛋白質5.63g 脂肪0.46g 碳水12.82g', 1, '經典餐盒', 1),
(12, '美式起司牛肉捲', 80, 'images/捲捲2.jpg', '', 1, '輕食捲捲', 0),
(13, '地瓜起司嫩雞捲', 75, 'images/捲捲3.jpg', '', 1, '輕食捲捲', 0),
(14, '季節水果盒', 50, 'images/沙拉1.jpeg', '360ml/份 (水果種類隨季節調整)', 1, '沙拉水果盒', 0),
(15, '陽光沙拉盒', 65, 'images/沙拉2.jpeg', '360ml/份 (配菜種類隨季節調整) 可以到主食單品區加點主食，補充蛋白質哦！', 1, '沙拉水果盒', 0),
(16, '62kcal義式香草雞胸', 40, 'images/主食1.jpg', '✔蛋白質13.44g 脂肪0.54g 碳水0.84g', 1, '主食單品', 0),
(17, '70kcal朝日咖哩雞胸', 40, 'images/主食2.jpg', '✔蛋白質13.98g 脂肪1.56g 碳水3.72g', 1, '主食單品', 0),
(18, '63kcal檸檬椒鹽雞胸', 40, 'images/主食3.jpg', '✔蛋白質12.6g 脂肪1.02g 碳水0.9g', 1, '主食單品', 0),
(19, '80kcal墨西哥紅椒雞胸', 40, 'images/主食4.jpg', '✔蛋白質14.22g 脂肪1.26g 碳水2.82g', 1, '主食單品', 0),
(20, '170kcl法式香榭雞腿', 65, 'images/主食5.jpg', '✔蛋白質15.82g 脂肪8.82g 碳水6.91g', 1, '主食單品', 0),
(21, '161kcal韓式風味牛', 85, 'images/主食6.jpg', '✔蛋白質11.5g 脂肪11.2g 碳水3.5g', 1, '主食單品', 0),
(22, '194kcal日式薑燒豬', 55, 'images/主食7.jpg', '✔蛋白質16.5g 脂肪12.8g 碳水2.25g', 1, '主食單品', 0),
(23, '176kcal泰式打拋豬', 70, 'images/主食8.jpg', '✔蛋白質16g 脂肪8g 碳水10g', 1, '主食單品', 0),
(24, '79kcal普羅旺斯鯛魚', 70, 'images/主食9.jpg', '✔蛋白質15.6g 脂肪1.84g 碳水0.16g', 1, '主食單品', 0),
(25, '78kcal素食綜合野菇', 65, 'images/主食10.jpg', '✔蛋白質5.6g 脂肪0.46g 碳水12.8g', 1, '主食單品', 0),
(26, '36kcal水煮青菜', 30, 'images/其他1.jpg', '✔蛋白質2.59g 脂肪2.02g 碳水3.31g (青菜種類隨季節調整)', 1, '其他單品', 0),
(27, '274kcal紅藜白飯', 20, 'images/白飯1.jpeg', '✔蛋白質4.88g 脂肪0.51g 碳水62.28g', 1, '其他單品', 0),
(28, '48kcal溏心蛋(整顆)', 20, 'images/其他3.jpg', '✔蛋白質5.2g 脂肪2.8g 碳水0.6g', 1, '其他單品', 0),
(29, '87kcal焙煎胡麻醬', 10, 'images/其他4.jpg', '✔蛋白質0.52g 脂肪8.26g 碳水2.41g', 1, '其他單品', 0),
(30, '44kcal義式油醋醬', 10, 'images/其他5.jpg', '✔蛋白質0.06g 脂肪4.26g 碳水1.56g', 1, '其他單品', 0),
(31, '43kcal奇亞芥末醬', 10, 'images/其他6.jpg', '✔蛋白質0.15g 脂肪3g 碳水3.75g', 1, '其他單品', 0),
(32, '36kcal水果塔塔醬', 10, 'images/其他7.jpg', '✔蛋白質0g 脂肪2.25g 碳水3.9g', 1, '其他單品', 0),
(33, '伯爵鮮奶茶', 50, 'images/飲料1.jpg', '', 1, '飲料', 1),
(34, '美式咖啡', 50, 'images/飲料2.jpg', '', 1, '飲料', 1),
(35, '咖啡歐蕾', 65, 'images/飲料3.jpg', '', 1, '飲料', 1),
(36, '無糖綠茶', 30, 'images/飲料4.jpg', '無法客製化甜度與溫度', 1, '飲料', 0),
(37, '無糖紅茶', 30, 'images/飲料5.jpg', '無法客製化甜度與溫度', 1, '飲料', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `det_id` int(15) NOT NULL,
  `item_id` int(15) NOT NULL,
  `order_id` int(15) NOT NULL,
  `sauce` varchar(50) DEFAULT NULL,
  `side` varchar(50) DEFAULT NULL,
  `variant` varchar(50) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `amount` int(15) NOT NULL,
  `reply` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`det_id`, `item_id`, `order_id`, `sauce`, `side`, `variant`, `note`, `rating`, `feedback`, `amount`, `reply`) VALUES
(131, 17, 77, NULL, NULL, NULL, NULL, 5, 'test', 1, 'test'),
(132, 16, 78, NULL, NULL, NULL, NULL, 5, 'test', 1, 'test'),
(133, 18, 78, NULL, NULL, NULL, NULL, 5, 'test', 1, 'ff'),
(134, 20, 78, NULL, NULL, NULL, NULL, 2, 'testst', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordermain`
--

CREATE TABLE `ordermain` (
  `order_id` int(11) NOT NULL,
  `rec_num` int(15) NOT NULL,
  `total_price` int(6) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `place` varchar(10) NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordermain`
--

INSERT INTO `ordermain` (`order_id`, `rec_num`, `total_price`, `user_id`, `place`, `complete`, `date`) VALUES
(77, 1, 40, 'fff', '外帶', 3, '2022-06-08 21:25:58'),
(78, 2, 145, 'fff', '外帶', 3, '2022-06-08 21:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `queue_id` int(15) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `ready_time` datetime DEFAULT NULL,
  `people` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`queue_id`, `user_id`, `time`, `ready_time`, `people`) VALUES
(22, 'fff', '2022-06-08 21:44:20', '2022-06-08 21:44:20', '4'),
(23, '0512', '2022-06-08 21:45:06', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `seating`
--

CREATE TABLE `seating` (
  `seat_id` varchar(20) NOT NULL,
  `seatnum` int(5) NOT NULL,
  `occupied` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seating`
--

INSERT INTO `seating` (`seat_id`, `seatnum`, `occupied`) VALUES
('單人01桌', 101, 0),
('單人02桌', 102, 1),
('單人03桌', 103, 1),
('單人04桌', 104, 1),
('單人05桌', 105, 1),
('單人06桌', 106, 1),
('單人07桌', 107, 1),
('單人08桌', 108, 1),
('單人09桌', 109, 1),
('單人10桌', 110, 1),
('單人11桌', 111, 1),
('單人12桌', 112, 1),
('雙人13桌', 213, 1),
('雙人14桌', 214, 1),
('雙人15桌', 215, 1),
('雙人16桌', 216, 1),
('雙人17桌', 317, 1),
('雙人18桌', 318, 1),
('雙人19桌', 319, 1),
('雙人20桌', 320, 1),
('雙人21桌', 421, 1),
('雙人22桌', 422, 1),
('雙人23桌', 423, 1),
('雙人24桌', 424, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`det_id`);

--
-- Indexes for table `ordermain`
--
ALTER TABLE `ordermain`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`queue_id`),
  ADD KEY `name` (`user_id`);

--
-- Indexes for table `seating`
--
ALTER TABLE `seating`
  ADD PRIMARY KEY (`seat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `det_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `ordermain`
--
ALTER TABLE `ordermain`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `queue_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
