-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 06:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gopalagriexport`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `stock_quantity` int(11) DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `dimensions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`dimensions`)),
  `manufacturer` varchar(255) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tags`)),
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `reviews` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`reviews`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `stock_quantity`, `sku`, `weight`, `dimensions`, `manufacturer`, `expiry_date`, `tags`, `images`, `reviews`, `created_at`, `updated_at`) VALUES
(1, 'Broccoli Seeds', 'Description for product 1', 19.99, 'Category 1', 100, 'SKU001', 1.50, '{\"width\":10,\"height\":20,\"depth\":5}', 'Manufacturer 1', '2025-12-31', '[\"tag1\",\"tag2\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Great product!\", \"rating\": 5}, {\"review\": \"Very useful and high quality.\", \"rating\": 4}]', '2024-07-28 04:51:58', '2024-07-28 04:51:58'),
(2, 'Onion Seeds', 'Description for product 2', 29.99, 'Category 2', 50, 'SKU002', 2.00, '{\"width\":15,\"height\":25,\"depth\":10}', 'Manufacturer 2', '2025-11-30', '[\"tag3\",\"tag4\"]', '[\"jpeg-optimizer_SPP01237.webp\", \"jpeg-optimizer_SPP01244.webp\"]', '[{\"review\": \"Satisfactory.\", \"rating\": 3}, {\"review\": \"Not bad.\", \"rating\": 4}]', '2024-07-28 04:51:58', '2024-07-28 17:54:21'),
(3, 'Wheat Seeds', 'High-quality wheat seeds for optimal crop yield.', 25.99, 'Seeds', 150, 'SKU003', 2.00, '{\"width\": 10, \"height\": 20, \"depth\": 10}', 'AgriCorp', '2025-12-31', '[\"wheat\", \"seeds\"]', '[\"jpeg-optimizer_SPP01178.webp\", \"jpeg-optimizer_SPP01183.webp\"]', '[{\"review\": \"Excellent seeds!\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 17:55:03'),
(4, 'Corn Seeds', 'Premium corn seeds for high yield.', 15.99, 'Seeds', 200, 'SKU004', 1.50, '{\"width\": 8, \"height\": 18, \"depth\": 8}', 'FarmBest', '2025-11-30', '[\"corn\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Very good quality.\", \"rating\": 4}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(5, 'Tomato Seeds', 'Organic tomato seeds for delicious tomatoes.', 10.99, 'Seeds', 250, 'SKU005', 0.50, '{\"width\": 5, \"height\": 10, \"depth\": 5}', 'GreenGrow', '2025-10-15', '[\"tomato\", \"seeds\"]', '[\"jpeg-optimizer_SPP01227.webp\", \"jpeg-optimizer_SPP01235.webp\"]', '[{\"review\": \"Grew quickly and tasted great!\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 17:59:28'),
(6, 'Potato Seeds', 'High-yield potato seeds for robust potatoes.', 20.99, 'Seeds', 180, 'SKU006', 3.00, '{\"width\": 12, \"height\": 22, \"depth\": 12}', 'AgriCorp', '2025-09-30', '[\"potato\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Excellent quality.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(7, 'Carrot Seeds', 'Organic carrot seeds for healthy carrots.', 12.99, 'Seeds', 220, 'SKU007', 1.00, '{\"width\": 7, \"height\": 15, \"depth\": 7}', 'FarmBest', '2025-08-20', '[\"carrot\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Great seeds for healthy carrots.\", \"rating\": 4}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(8, 'Onion Seeds', 'High-quality onion seeds for large onions.', 14.99, 'Seeds', 190, 'SKU008', 1.20, '{\"width\": 6, \"height\": 14, \"depth\": 6}', 'GreenGrow', '2025-07-15', '[\"onion\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew well and tasted great.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(9, 'Lettuce Seeds', 'Organic lettuce seeds for fresh greens.', 8.99, 'Seeds', 300, 'SKU009', 0.30, '{\"width\": 4, \"height\": 9, \"depth\": 4}', 'AgriCorp', '2025-06-10', '[\"lettuce\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Fast-growing and tasty.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(10, 'Pea Seeds', 'High-yield pea seeds for fresh peas.', 18.99, 'Seeds', 160, 'SKU010', 2.50, '{\"width\": 9, \"height\": 18, \"depth\": 9}', 'FarmBest', '2025-05-05', '[\"pea\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Great seeds for peas.\", \"rating\": 4}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(11, 'Cucumber Seeds', 'Organic cucumber seeds for crunchy cucumbers.', 11.99, 'Seeds', 230, 'SKU011', 1.00, '{\"width\": 6, \"height\": 14, \"depth\": 6}', 'GreenGrow', '2025-04-01', '[\"cucumber\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew quickly and were delicious.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(12, 'Spinach Seeds', 'High-quality spinach seeds for nutritious greens.', 9.99, 'Seeds', 270, 'SKU012', 0.40, '{\"width\": 5, \"height\": 11, \"depth\": 5}', 'AgriCorp', '2025-03-20', '[\"spinach\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Easy to grow and very nutritious.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(13, 'Sunflower Seeds', 'High-yield sunflower seeds for beautiful blooms.', 16.99, 'Seeds', 180, 'SKU013', 0.80, '{\"width\": 8, \"height\": 16, \"depth\": 8}', 'BloomCorp', '2025-12-15', '[\"sunflower\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew tall and vibrant.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(14, 'Pumpkin Seeds', 'Organic pumpkin seeds for large pumpkins.', 22.99, 'Seeds', 150, 'SKU014', 2.80, '{\"width\": 12, \"height\": 24, \"depth\": 12}', 'FarmBest', '2025-11-01', '[\"pumpkin\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew large and were very tasty.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(15, 'Radish Seeds', 'High-quality radish seeds for crisp radishes.', 7.99, 'Seeds', 320, 'SKU015', 0.60, '{\"width\": 5, \"height\": 10, \"depth\": 5}', 'GreenGrow', '2025-10-25', '[\"radish\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew quickly and were very crisp.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(16, 'Pepper Seeds', 'Organic pepper seeds for spicy peppers.', 13.99, 'Seeds', 210, 'SKU016', 1.20, '{\"width\": 7, \"height\": 15, \"depth\": 7}', 'HotHarvest', '2025-09-15', '[\"pepper\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew hot and flavorful.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(17, 'Broccoli Seeds', 'High-yield broccoli seeds for healthy greens.', 17.99, 'Seeds', 170, 'SKU017', 1.30, '{\"width\": 6, \"height\": 14, \"depth\": 6}', 'AgriCorp', '2025-08-10', '[\"broccoli\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew well and were very healthy.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(18, 'Cauliflower Seeds', 'Organic cauliflower seeds for large heads.', 15.99, 'Seeds', 190, 'SKU018', 1.50, '{\"width\": 8, \"height\": 18, \"depth\": 8}', 'GreenGrow', '2025-07-01', '[\"cauliflower\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew large and tasty.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(19, 'Beet Seeds', 'High-quality beet seeds for vibrant beets.', 12.99, 'Seeds', 230, 'SKU019', 0.90, '{\"width\": 7, \"height\": 15, \"depth\": 7}', 'FarmBest', '2025-05-20', '[\"beet\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew quickly and were very vibrant.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40'),
(20, 'Zucchini Seeds', 'Organic zucchini seeds for abundant yield.', 19.99, 'Seeds', 200, 'SKU020', 2.00, '{\"width\": 10, \"height\": 20, \"depth\": 10}', 'AgriCorp', '2025-04-15', '[\"zucchini\", \"seeds\"]', '[\"whiteVal.webp\", \"whiteVal2.webp\"]', '[{\"review\": \"Grew abundantly and tasted great.\", \"rating\": 5}]', '2024-07-28 13:44:40', '2024-07-28 13:44:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
