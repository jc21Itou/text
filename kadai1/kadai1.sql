-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-12-14 07:31:50
-- サーバのバージョン： 10.4.13-MariaDB
-- PHP のバージョン: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kojin`
--

CREATE TABLE `kojin` (
  `ID` int(11) NOT NULL,
  `simei` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hurigana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yuubinnbanngou` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jyuusyo` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dennwabanngou` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kojin`
--

INSERT INTO `kojin` (`ID`, `simei`, `hurigana`, `yuubinnbanngou`, `jyuusyo`, `dennwabanngou`, `Email`) VALUES
(123, '伊藤創太', 'いとうそうた', '0123-45', '宮城県仙台市青葉区', '0123456789', 'sendai-.jp'),
(124, '伊藤創太', 'いとうそうた', '0123-45', '宮城県仙台市青葉区', '0123456789', 'sendai-.jp');

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_staff`
--

CREATE TABLE `mst_staff` (
  `code` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_staff`
--

INSERT INTO `mst_staff` (`code`, `name`, `password`) VALUES
(1, 'ななまる部長', '202cb962ac59075b964b07152d234b70'),
(4, '伊藤創太2', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(6, '伊藤創太1', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(7, '伊藤創太1', '202cb962ac59075b964b07152d234b70'),
(8, '伊藤創太1', '202cb962ac59075b964b07152d234b70'),
(9, '伊藤創太1', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kojin`
--
ALTER TABLE `kojin`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `mst_staff`
--
ALTER TABLE `mst_staff`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `kojin`
--
ALTER TABLE `kojin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- テーブルのAUTO_INCREMENT `mst_staff`
--
ALTER TABLE `mst_staff`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
