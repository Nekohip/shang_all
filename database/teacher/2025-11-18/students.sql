-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-11-18 04:41:30
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
-- 資料庫： `school_course_system`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `student_no`, `name`, `gender`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 'S20250001', '王小明', 1, '2000-05-21', '2025-11-18 03:25:06', '2025-11-18 03:25:06'),
(2, 'S20250002', '李小華', 2, '2001-08-03', '2025-11-18 03:26:50', '2025-11-18 03:26:50'),
(3, 'S20250003', '張俊豪', 1, '1999-12-10', '2025-11-18 03:26:50', '2025-11-18 03:26:50'),
(5, 'S20250012', '周厚安', 1, '2006-01-10', '2025-11-18 03:26:50', '2025-11-18 03:32:45'),
(36, 'S20250004', '林品妤', 2, '2001-11-12', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(37, 'S20250005', '陳建宇', 1, '2000-02-08', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(38, 'S20250006', '黃雅婷', 2, '2002-07-19', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(39, 'S20250007', '周承翰', 1, '1999-03-25', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(40, 'S20250008', '吳玟儀', 2, '2001-09-14', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(41, 'S20250009', '張庭瑞', 1, '2000-12-02', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(42, 'S20250010', '賴郁芊', 2, '2002-01-27', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(43, 'S20250011', '許哲維', 1, '2001-04-05', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(44, 'S20250015', '高梓晴', 2, '2000-06-22', '2025-11-18 03:41:09', '2025-11-18 03:41:09'),
(45, 'S20250013', '江柏翰', 1, '1999-10-30', '2025-11-18 03:41:09', '2025-11-18 03:41:09');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_no` (`student_no`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '學生編號', AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
