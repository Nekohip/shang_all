-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-11-18 06:40:09
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `scool_course_system`
--

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '學生編號',
  `student_no` varchar(16) NOT NULL COMMENT '學號',
  `name` varchar(64) NOT NULL COMMENT '學生姓名',
  `gender` int(1) DEFAULT NULL COMMENT '性別',
  `birthday` date NOT NULL COMMENT '生日',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '建立時間',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `student_no`, `name`, `gender`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 'S20250004', '周建倫', 1, '1999-10-10', '2025-11-18 03:30:16', '2025-11-18 03:30:16'),
(2, 'S20250004', '劉萬安', 1, '1998-01-20', '2025-11-18 03:30:16', '2025-11-18 03:30:16'),
(3, 'S20250001', '王小明', 1, '2000-01-15', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(4, 'S20250002', '林小華', 2, '2000-05-21', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(5, 'S20250003', '張俊豪', 1, '2001-08-03', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(6, 'S20250004', '周建倫', 1, '1999-10-10', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(7, 'S20250005', '蔡依琳', 2, '2000-12-25', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(8, 'S20250006', '陳柏宇', 1, '2001-03-18', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(9, 'S20250007', '李雅婷', 2, '2000-07-30', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(10, 'S20250008', '黃冠宇', 1, '1999-11-12', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(11, 'S20250009', '許佳玲', 2, '2001-09-05', '2025-11-18 05:39:23', '2025-11-18 05:39:23'),
(12, 'S20250010', '鄭智偉', 1, '2000-06-22', '2025-11-18 05:39:23', '2025-11-18 05:39:23');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '學生編號', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
