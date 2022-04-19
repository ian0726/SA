-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2022 at 09:28 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(15) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `itemfullname` varchar(50) NOT NULL,
  `amount` int(3) NOT NULL,
  `note` varchar(100) NOT NULL,
  `totalp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `item_id`, `user_id`, `itemfullname`, `amount`, `note`, `totalp`) VALUES
(3, 2, 'test', '70kcal朝日咖哩雞胸 食蔬半飯 義式油醋醬', 1, '', 110),
(11, 17, 'test', '70kcal朝日咖哩雞胸', 1, '', 40),
(12, 29, 'test', '87kcal焙煎胡麻醬', 1, '', 10),
(13, 16, 'test', '62kcal義式香草雞胸', 1, '', 40),
(14, 21, 'test', '161kcal韓式風味牛', 1, '', 85);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `com_id` int(15) NOT NULL,
  `com` varchar(100) NOT NULL,
  `star` int(1) NOT NULL,
  `order_id` varchar(15) NOT NULL,
  `item_id` int(15) NOT NULL
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
  `des` varchar(200) NOT NULL,
  `av` tinyint(1) NOT NULL,
  `category` varchar(20) NOT NULL,
  `customize` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `price`, `img`, `des`, `av`, `category`, `customize`) VALUES
(1, '62kcal義式香草雞胸', 110, 'images/經典1.jpeg', '✔蛋白質13.44g 脂肪0.54g 碳水0.84g', 1, '經典餐盒', 1),
(2, '70kcal朝日咖哩雞胸', 110, 'images/經典2.jpeg', '✔蛋白質13.98g 脂肪1.56g 碳水3.72g', 1, '經典餐盒', 1),
(3, '63kcal檸檬椒鹽雞胸', 110, 'images/經典3.jpeg', '✔蛋白質12.6g 脂肪1.02g 碳水0.9g', 1, '經典餐盒', 1),
(4, '80kcal墨西哥紅椒雞胸', 110, 'images/經典4.jpeg', '✔蛋白質14.22g 脂肪1.26g 碳水2.82g', 1, '經典餐盒', 1),
(5, '墨西哥嫩雞捲', 70, 'images/favicon.png', '', 1, '輕食捲捲', 1),
(6, '170kcl法式香榭雞腿', 135, 'images/經典5.jpeg', '✔蛋白質15.82g 脂肪8.82g 碳水6.91g', 1, '經典餐盒', 1),
(7, '161kcal韓式風味牛', 155, 'images/經典6.jpeg', '✔蛋白質11.5g 脂肪11.2g 碳水3.5g', 1, '經典餐盒', 1),
(8, '194kcal日式薑燒豬', 125, 'images/經典7.jpeg', '✔蛋白質16.5g 脂肪12.75g 碳水2.25g', 1, '經典餐盒', 1),
(9, '176kcal泰式打拋豬', 140, 'images/經典8.jpeg', '✔蛋白質16g 脂肪8g 碳水10g', 1, '經典餐盒', 1),
(10, '79kcal普羅旺斯鯛魚', 140, 'images/經典9.jpeg', '✔蛋白質15.6g 脂肪1.84g 碳水0.16g', 1, '經典餐盒', 1),
(11, '78kcal素食綜合野菇', 135, 'images/經典10.jpeg', '✔蛋白質5.63g 脂肪0.46g 碳水12.82g', 1, '經典餐盒', 1),
(12, '美式起司牛肉捲', 80, 'images/favicon.png', '', 1, '輕食捲捲', 0),
(13, '地瓜起司嫩雞捲', 75, 'images/favicon.png', '', 1, '輕食捲捲', 0),
(14, '季節水果盒', 50, 'images/沙拉1.jpeg', '360ml/份 (水果種類隨季節調整)', 1, '沙拉水果盒', 0),
(15, '陽光沙拉盒', 65, 'images/沙拉2.jpeg', '360ml/份 (配菜種類隨季節調整) 可以到主食單品區加點主食，補充蛋白質哦！', 1, '沙拉水果盒', 0),
(16, '62kcal義式香草雞胸', 40, 'images/favicon.png', '✔蛋白質13.44g 脂肪0.54g 碳水0.84g', 1, '主食單品', 0),
(17, '70kcal朝日咖哩雞胸', 40, 'images/favicon.png', '✔蛋白質13.98g 脂肪1.56g 碳水3.72g', 1, '主食單品', 0),
(18, '63kcal檸檬椒鹽雞胸', 40, 'images/favicon.png', '✔蛋白質12.6g 脂肪1.02g 碳水0.9g', 1, '主食單品', 0),
(19, '80kcal墨西哥紅椒雞胸', 40, 'images/favicon.png', '✔蛋白質14.22g 脂肪1.26g 碳水2.82g', 1, '主食單品', 0),
(20, '170kcl法式香榭雞腿', 65, 'images/favicon.png', '✔蛋白質15.82g 脂肪8.82g 碳水6.91g', 1, '主食單品', 0),
(21, '161kcal韓式風味牛', 85, 'images/favicon.png', '✔蛋白質11.5g 脂肪11.2g 碳水3.5g', 1, '主食單品', 0),
(22, '194kcal日式薑燒豬', 55, 'images/favicon.png', '✔蛋白質16.5g 脂肪12.8g 碳水2.25g', 1, '主食單品', 0),
(23, '176kcal泰式打拋豬', 70, 'images/favicon.png', '✔蛋白質16g 脂肪8g 碳水10g', 1, '主食單品', 0),
(24, '79kcal普羅旺斯鯛魚', 70, 'images/favicon.png', '✔蛋白質15.6g 脂肪1.84g 碳水0.16g', 1, '主食單品', 0),
(25, '78kcal素食綜合野菇', 65, 'images/favicon.png', '✔蛋白質5.6g 脂肪0.46g 碳水12.8g', 1, '主食單品', 0),
(26, '36kcal水煮青菜', 30, 'images/favicon.png', '✔蛋白質2.59g 脂肪2.02g 碳水3.31g (青菜種類隨季節調整)', 1, '其他單品', 0),
(27, '白飯', 20, 'images/白飯1.jpeg', '✔蛋白質4.88g 脂肪0.51g 碳水62.28g', 1, '其他單品', 0),
(28, '48kcal溏心蛋(整顆)', 20, 'images/favicon.png', '✔蛋白質5.2g 脂肪2.8g 碳水0.6g', 1, '其他單品', 0),
(29, '87kcal焙煎胡麻醬', 10, 'images/favicon.png', '✔蛋白質0.52g 脂肪8.26g 碳水2.41g', 1, '其他單品', 0),
(30, '44kcal義式油醋醬', 10, 'images/favicon.png', '✔蛋白質0.06g 脂肪4.26g 碳水1.56g', 1, '其他單品', 0),
(31, '43kcal奇亞芥末醬', 10, 'images/favicon.png', '✔蛋白質0.15g 脂肪3g 碳水3.75g', 1, '其他單品', 0),
(32, '36kcal水果塔塔醬', 10, 'images/favicon.png', '✔蛋白質0g 脂肪2.25g 碳水3.9g', 1, '其他單品', 0),
(33, '伯爵鮮奶茶', 50, 'images/favicon.png', '', 1, '飲料', 1),
(34, '美式咖啡', 50, 'images/favicon.png', '', 1, '飲料', 1),
(35, '咖啡歐蕾', 65, 'images/favicon.png', '', 1, '飲料', 1),
(36, '無糖綠茶', 30, 'images/favicon.png', '無法客製化甜度與溫度', 1, '飲料', 0),
(37, '無糖紅茶', 30, 'images/favicon.png', '無法客製化甜度與溫度', 1, '飲料', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(15) NOT NULL,
  `rec_num` int(15) NOT NULL,
  `total_price` int(6) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `det_id` int(15) NOT NULL,
  `item_id` int(15) NOT NULL,
  `side` varchar(20) NOT NULL,
  `sauce` varchar(20) NOT NULL,
  `order_id` int(15) NOT NULL,
  `amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `user_id` (`order_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`det_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `det_id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
