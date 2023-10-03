-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-06-08 17:17:48
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `my_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '文章 id',
  `title` varchar(30) NOT NULL DEFAULT '' COMMENT '標題',
  `category` varchar(50) NOT NULL DEFAULT '' COMMENT '分類',
  `content` text NOT NULL COMMENT '內文',
  `picture` varchar(50) NOT NULL,
  `publish` tinyint(1) NOT NULL COMMENT '是否發布',
  `create_date` datetime NOT NULL COMMENT '建立日期',
  `modify_date` datetime DEFAULT NULL COMMENT '修改日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`id`, `title`, `category`, `content`, `picture`, `publish`, `create_date`, `modify_date`) VALUES
(1, '第一篇文章', '新聞', '<p>隨著Oculus Rift以及HTC Vive消費版陸續出貨，虛擬實境(VR)相關話題持續延燒，關心此產業發展的朋友，或許會對於這兩款VR頭盔的銷量頗感興趣。在Facebook以及HTC都尚未公布確切銷售數字前，外媒《UPload》就提前給出了數據，結果看來滿不錯的！</p>\n\n<p>HTC Vive出貨量至少五萬套</p>\n\n<p>由於HTC Vive需要基於Steam VR來執行，因此《UPloadVR》透過使用SteamDB和SteamSpy來收集Steam的資料並進行分析，資料主要來自Steam的免費遊戲。據《UPloadVR》統計，目前HTC Vive的出貨量已達5萬套，其中約3萬5千套是消費者版。這個數字主要是從《Job Simulator》遊戲的購買資料而來，因為這款遊戲隨著HTC Vive消費者版同捆發售。</p>\n\n<p>其實HTC Vive出貨量達5萬套，明顯是個被低估的數字，因為還有部分預定的玩家尚未沒收到貨，除此之外也肯定有部分玩家收到貨後，還沒下載同捆遊戲。</p>\n\n<p>Oculus Rift出貨預估超過30萬台</p>\n\n<p>而HTC Vive的強力競爭對手─Oculus Rift，根據歌爾聲學（Oculus Rift的代工廠商之一）副總裁馮莉在4月16日在北京受訪的說法，其銷售量（預購量）已經超過30萬台。</p>\n\n<p>頂級VR頭盔產品中，被Facebook收購的Oculus Rift是第一個正式出貨的產品(今年3月28日)，而HTC Vive緊追在後，從今年的4月5日起於全球正式出貨。這兩款VR裝置都需要搭配具備足夠效能的電腦才可執行。</p>\n\n<p>除了需要搭配高規電腦之外，Oculus Rift與HTC Vive的高昂價格(前者定價599美元、後者則是799美元(台灣售價新台幣28288元))也應是這兩家公司推廣VR的困難點之一。然而，就以上預估銷售數字來看，Oculus Rift以及HTC Vive的首張成績單看來表現的都還不錯。</p>\n\n<p>(中時電子報)</p>', '', 1, '2016-05-16 01:01:00', NULL),
(2, 'asdf', '消息', '<p>sadfsadf</p>', '', 1, '2016-05-17 09:22:24', NULL),
(3, 'CXZGQ4W5', '23123', 'SADGAS434124', '', 1, '2016-05-17 09:23:23', NULL),
(4, '321', '愛情', '23', '231', 1, '2020-06-08 04:16:12', NULL),
(5, '523162', '愛情', '312123', '', 0, '2020-06-08 04:27:16', NULL),
(6, '523162', '愛情', '312123', '', 0, '2020-06-08 04:30:49', NULL),
(7, '5164', '愛情', '213', '231', 0, '2020-06-08 04:31:36', NULL),
(8, '6514', '愛情', '1653', '3152', 1, '2020-06-08 04:32:19', NULL),
(9, '5263', '愛情', '3201', '632\n+', 0, '2020-06-08 04:33:09', NULL),
(10, '5263', '愛情', '3201', '632\n+', 0, '2020-06-08 04:34:11', NULL),
(11, '5263', '愛情', '3201', '632\n+', 0, '2020-06-08 04:35:15', NULL),
(12, '562', '愛情', '1523', '123', 0, '2020-06-08 04:35:22', NULL),
(13, '231', '愛情', '320', '\n32', 0, '2020-06-08 04:37:20', NULL),
(14, '4125', '愛情', '21', '213', 0, '0000-00-00 00:00:00', NULL),
(15, '21', '愛情', '123', '213', 0, '2020-06-08 04:42:28', NULL),
(16, '54', '愛情', '123', '321', 1, '2020-06-07 22:45:13', NULL),
(17, '45', '愛情', '513', '321', 0, '2020-06-07 22:50:19', NULL),
(18, '5613', '愛情', '123', '231', 1, '2020-06-07 22:52:30', NULL),
(19, '541', '愛情', '213', '20', 1, '2020-06-08 04:54:29', NULL),
(21, '654', '愛情', '321', '213', 0, '2020-06-07 23:02:11', NULL),
(22, '5645', '愛情', '545', '35', 0, '2020-06-08 07:17:41', NULL),
(23, '321', '愛情', 'thh', 'fer', 0, '2020-06-08 07:22:27', NULL),
(24, '8', '愛情', '48', '5', 1, '2020-06-08 08:15:29', NULL),
(25, '65595', '愛情', '5', '65', 1, '2020-06-08 08:26:30', NULL),
(26, '4', '愛情', '484', '484', 0, '2020-06-08 08:37:43', NULL),
(27, '5', '愛情', '48', '44', 0, '2020-06-08 08:46:15', NULL),
(28, '45', '愛情', '4', '4', 0, '2020-06-08 14:47:42', NULL),
(29, '45', '愛情', '4', '4', 0, '2020-06-08 14:49:19', NULL),
(30, '16', '愛情', '151', '16', 0, '2020-06-08 14:50:05', NULL),
(31, '48481', '愛情', '4154', '15511', 1, '2020-06-08 15:09:42', NULL),
(32, '45415', '愛情', '54455', '4441541', 0, '2020-06-08 15:10:45', NULL),
(33, '541', '愛情', '414', '41', 1, '2020-06-08 15:12:00', NULL),
(34, '4154', '愛情', '14', '5414', 0, '2020-06-08 15:12:14', NULL),
(39, '48', '愛情', '\n87', '\n8', 0, '2020-06-08 09:14:48', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `article1`
--

CREATE TABLE `article1` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(50) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL COMMENT '建立日期',
  `modify_date` datetime DEFAULT NULL COMMENT '修改日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `article1`
--

INSERT INTO `article1` (`id`, `title`, `category`, `content`, `picture`, `publish`, `create_date`, `modify_date`) VALUES
(2, '45', '愛情', '45', '54', 0, '2020-06-08 09:16:25', NULL),
(3, '45', '愛情', '4\n', '45454', 1, '2020-06-08 09:30:31', NULL),
(4, '4545', '愛情', '1541541', '411651', 1, '2020-06-08 15:32:13', NULL),
(6, '4545', '愛情', '1541541', '411651', 0, '2020-06-08 15:33:02', NULL),
(7, '4545', '愛情', '1541541', '411651', 0, '2020-06-08 09:34:05', NULL),
(9, '8744', '愛情', '85984', '+5985', 0, '2020-06-08 17:07:59', NULL),
(10, 're', '愛情', 'rrf', 'rwfwe', 1, '2020-06-08 17:09:41', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT '使用者id',
  `username` varchar(30) NOT NULL COMMENT '登⼊帳號',
  `password` varchar(100) NOT NULL COMMENT '使用者密碼',
  `name` varchar(30) NOT NULL COMMENT '名字'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'mktsai', '202cb962ac59075b964b07152d234b70', '阿洋'),
(2, 'kk', 'kk', 'kk'),
(3, 'kkk', 'dc468c70fb574ebd07287b38d0d0676d', 'kk');

-- --------------------------------------------------------

--
-- 資料表結構 `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL COMMENT '作品 id',
  `intro` text NOT NULL COMMENT '簡介',
  `image_path` text DEFAULT NULL COMMENT '圖⽚路徑',
  `video_path` text DEFAULT NULL COMMENT '影⽚路徑',
  `publish` tinyint(1) NOT NULL COMMENT '是否發布',
  `upload_date` datetime NOT NULL COMMENT '上傳時間',
  `create_user_id` int(11) NOT NULL COMMENT '誰上傳的(建⽴立者id)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `works`
--

INSERT INTO `works` (`id`, `intro`, `image_path`, `video_path`, `publish`, `upload_date`, `create_user_id`) VALUES
(1, '<p>開心的影片開心的影片開心的影片開心的影片開心的影片開心的影片開心的影片</p>', NULL, 'files/videos/laughing.mp4', 1, '2016-05-23 12:32:00', 1),
(2, '自拍', 'files/images/20150514002349.jpg', NULL, 1, '2016-05-24 12:36:20', 1),
(3, '小黑', 'files/images/20150514021023.jpg', NULL, 1, '2016-05-24 13:36:20', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `article1`
--
ALTER TABLE `article1`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '文章 id', AUTO_INCREMENT=41;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article1`
--
ALTER TABLE `article1`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '使用者id', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '作品 id', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
