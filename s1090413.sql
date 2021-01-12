-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-12 16:59:06
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1090413`
--

-- --------------------------------------------------------

--
-- 資料表結構 `resume_about`
--

CREATE TABLE `resume_about` (
  `id` int(10) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '關於我',
  `sh` tinyint(1) UNSIGNED NOT NULL COMMENT '顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_about`
--

INSERT INTO `resume_about` (`id`, `about`, `sh`) VALUES
(1, '大家好，我是葉昱顯。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_contact`
--

CREATE TABLE `resume_contact` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_contact`
--

INSERT INTO `resume_contact` (`id`, `email`, `phone`) VALUES
(1, '123@mail.com', '0912-123-123');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_exp_edu`
--

CREATE TABLE `resume_exp_edu` (
  `id` int(11) NOT NULL,
  `edu` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `start` date NOT NULL COMMENT '開始時間',
  `end` date NOT NULL COMMENT '結束時間',
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_exp_edu`
--

INSERT INTO `resume_exp_edu` (`id`, `edu`, `start`, `end`, `sh`) VALUES
(1, '學歷1', '2020-10-06', '2021-01-13', 1),
(2, '學歷2', '2020-12-07', '2021-01-13', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_exp_items`
--

CREATE TABLE `resume_exp_items` (
  `id` int(11) NOT NULL,
  `title_id` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題名稱',
  `li` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '做的事情'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_exp_items`
--

INSERT INTO `resume_exp_items` (`id`, `title_id`, `li`) VALUES
(1, '工作經歷1', '項目1'),
(2, '工作經歷1', '項目2'),
(3, '工作經歷2', '項目1');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_exp_title`
--

CREATE TABLE `resume_exp_title` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `start` date NOT NULL COMMENT '開始時間',
  `end` date NOT NULL COMMENT '結束時間',
  `sh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_exp_title`
--

INSERT INTO `resume_exp_title` (`id`, `title`, `start`, `end`, `sh`) VALUES
(1, '工作經歷1', '2021-01-05', '2021-01-13', 1),
(2, '工作經歷2', '2021-01-05', '2021-01-13', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_img`
--

CREATE TABLE `resume_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '替代文字',
  `sh` tinyint(1) NOT NULL COMMENT '顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_img`
--

INSERT INTO `resume_img` (`id`, `img`, `text`, `sh`) VALUES
(1, 'hello.png', '卓越科技大學校園資訊系統', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_login`
--

CREATE TABLE `resume_login` (
  `id` int(1) UNSIGNED NOT NULL,
  `acc` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名字'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_login`
--

INSERT INTO `resume_login` (`id`, `acc`, `pw`, `name`) VALUES
(1, 'admin', '1234', '昱顯');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_skills`
--

CREATE TABLE `resume_skills` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_skills`
--

INSERT INTO `resume_skills` (`id`, `img`, `title`, `text`) VALUES
(1, 'frontend.jpg', '前端技能', 'html、css、JavaScript\r\n'),
(2, 'frontend.jpg', '前端技能2', 'html、css、JavaScript\r\n');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_works`
--

CREATE TABLE `resume_works` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_works`
--

INSERT INTO `resume_works` (`id`, `img`, `title`, `text`) VALUES
(1, 'work1.jpg', '今天開始來記帳', '因為想要記帳，所以來寫一個記帳的網站'),
(2, 'work1.jpg', '心動時刻', '再次心動動');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_about`
--
ALTER TABLE `resume_about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_contact`
--
ALTER TABLE `resume_contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_exp_edu`
--
ALTER TABLE `resume_exp_edu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_exp_items`
--
ALTER TABLE `resume_exp_items`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_exp_title`
--
ALTER TABLE `resume_exp_title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_img`
--
ALTER TABLE `resume_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_login`
--
ALTER TABLE `resume_login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_skills`
--
ALTER TABLE `resume_skills`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_works`
--
ALTER TABLE `resume_works`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_about`
--
ALTER TABLE `resume_about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_contact`
--
ALTER TABLE `resume_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_exp_edu`
--
ALTER TABLE `resume_exp_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_exp_items`
--
ALTER TABLE `resume_exp_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_exp_title`
--
ALTER TABLE `resume_exp_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_img`
--
ALTER TABLE `resume_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_login`
--
ALTER TABLE `resume_login`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_skills`
--
ALTER TABLE `resume_skills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_works`
--
ALTER TABLE `resume_works`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
