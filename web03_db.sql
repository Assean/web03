-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2026-07-04 11:59:59
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
-- 資料庫： `web03_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` text NOT NULL DEFAULT current_timestamp(),
  `created_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `created_at`, `created_user`) VALUES
(4, 'admin', '1234', '2026-07-04 15:58:03', 'admin'),
(5, '這是文章標題:D', '', '2026-07-04 15:58:38', 'admin'),
(6, 'sdfghjkl', 'asdfghjkl', '2026-07-04 17:09:27', 'admin'),
(7, '', '', '2026-07-04 17:48:11', 'admin'),
(8, 'sadas', 'asdda', '2026-07-04 17:48:16', 'admin');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `bio` text NOT NULL DEFAULT '尚未填寫自我介紹',
  `header` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `bio`, `header`) VALUES
(1, 'admin', '1234', '1234', '213132123123564', 'assets/img/1783158471_w-brand.png'),
(3, 'admin111', '111', '111', '尚無介紹', ''),
(5, 'a', 'a', 'a', '\'尚未填寫自我介紹\'', 'assets/img/1783151186_ian_260522030328.jpg'),
(6, 't1', '1234', 't1@gmail.com', '\'尚未填寫自我介紹\'', ''),
(7, '1231221', '1232132', '1231221', '尚未填寫自我介紹', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
