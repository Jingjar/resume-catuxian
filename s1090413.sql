-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-19 16:19:51
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
(1, '我是葉昱顯，在大學畢業前夕，開始對網頁設計產生了興趣，並決定將其作為一條就業的方向，於是在畢業後，至泰山職訓練中心參加920小時的PHP資料庫網頁設計課程，希望能夠在結訓後，成為一名網頁工程師。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_exp_edu`
--

CREATE TABLE `resume_exp_edu` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `edu` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `start_e` date NOT NULL COMMENT '開始時間',
  `end_e` date NOT NULL COMMENT '結束時間',
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_exp_edu`
--

INSERT INTO `resume_exp_edu` (`id`, `img`, `edu`, `start_e`, `end_e`, `sh`) VALUES
(1, 'NTUE.png', '國立台北教育大學', '2016-09-19', '2020-06-18', 1),
(2, 'CYSH.png', '嘉義高中', '2013-09-08', '2016-06-24', 1);

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
(1, '工作經歷3', '項目333'),
(2, '工作經歷3', '項目333'),
(3, '工作經歷3', '項目333'),
(4, '工作經歷3', '項目333'),
(5, '兒童程式機器人講師', '平日下午至雙北各個國小帶社團課程'),
(6, '兒童程式機器人講師', '使用公司提供的樂高EV3主機以及教案教學'),
(7, '兒童程式機器人講師', '自主學習App Inventor 2以及Tinkercad'),
(8, '兒童程式機器人講師', '使用自行設計的教案進行教學'),
(9, '兒童程式機器人講師', '使用口述以及黑板輔助，讓小朋友了解課堂上的知識點'),
(10, '兒童程式機器人講師', '主動追蹤學生狀態，積極呈報'),
(11, '兒童程式機器人講師', '與各方單位溝通，協助修復更換毀損之設備'),
(12, '兒童新樂園-假日服務計時人員', '引導遊客搭乘設施'),
(13, '兒童新樂園-假日服務計時人員', '維持遊樂設施清潔'),
(14, '兒童新樂園-假日服務計時人員', '協助操作人員扣款、檢查安全裝置'),
(15, '兒童新樂園-假日服務計時人員', '供遊客諮詢問題'),
(16, '兒童新樂園-假日服務計時人員', '清點票券');

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
(1, '兒童程式機器人講師', '2019-09-19', '2020-07-07', 1),
(2, '兒童新樂園-假日服務計時人員 ', '2018-09-19', '2019-08-19', 1);

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
(2, 'myPic.jpg', '大頭照', 0),
(3, 'myPic.jpg', '修改資料測試', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_job`
--

CREATE TABLE `resume_job` (
  `id` int(11) NOT NULL,
  `job` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_job`
--

INSERT INTO `resume_job` (`id`, `job`) VALUES
(1, '前端工程師、後端工程師、全端工程師');

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
(1, 'admin', '870628', '昱顯');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_skills`
--

CREATE TABLE `resume_skills` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_skills`
--

INSERT INTO `resume_skills` (`id`, `img`, `title`, `text`, `sh`) VALUES
(1, '前端技能.jpg', '前端技能', '可以透過HTML、CSS、JavaScript、等技術的基礎，再結合Bootstrap、Jquery等框架，製作出RWD網站', 1),
(2, '後端技能.jpg', '後端技能', '使用PHP以及MySQL，可以完成對資料的CRUD等動作', 1),
(3, '美編技能.jpg', '影像處理', 'Illustrator、Photoshop', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_visitors`
--

CREATE TABLE `resume_visitors` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` tinyint(1) UNSIGNED NOT NULL COMMENT '回復'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_visitors`
--

INSERT INTO `resume_visitors` (`id`, `name`, `phone`, `email`, `subject`, `message`, `reply`) VALUES
(1, '林聰明', '0912345678', 'smartlin1234@mail.com', '嗨', '嗨', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_works`
--

CREATE TABLE `resume_works` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_works`
--

INSERT INTO `resume_works` (`id`, `img`, `title`, `text`, `href`) VALUES
(1, '趕工中.png', '測試資料', '測試', '測試資料'),
(2, '趕工中.png', '趕工中', '測試資料', '測試資料'),
(4, '趕工中.png', '趕工中', '測試資料', '測試資料'),
(6, '趕工中.png', '趕工中', '趕工中', '測試資料');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_about`
--
ALTER TABLE `resume_about`
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
-- 資料表索引 `resume_job`
--
ALTER TABLE `resume_job`
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
-- 資料表索引 `resume_visitors`
--
ALTER TABLE `resume_visitors`
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
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_exp_edu`
--
ALTER TABLE `resume_exp_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_exp_items`
--
ALTER TABLE `resume_exp_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_exp_title`
--
ALTER TABLE `resume_exp_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_img`
--
ALTER TABLE `resume_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_job`
--
ALTER TABLE `resume_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_login`
--
ALTER TABLE `resume_login`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_skills`
--
ALTER TABLE `resume_skills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_visitors`
--
ALTER TABLE `resume_visitors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_works`
--
ALTER TABLE `resume_works`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
