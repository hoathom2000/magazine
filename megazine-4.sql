-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 26, 2019 lúc 04:53 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------

create database megazine;
use megazine;

CREATE TABLE `admin` (
  `AdminID` int(5) NOT NULL,
  `AdName` varchar(50) NOT NULL,
  `AdEmail` varchar(50) NOT NULL,
  `AdPass` varchar(50) NOT NULL,
  `AdImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`AdminID`, `AdName`, `AdEmail`, `AdPass`, `AdImage`) VALUES
(1, 'Ka', 'ka@gmail.com', '202cb962ac59075b964b07152d234b70', 'pic1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `CmmID` int(5) NOT NULL,
  `Comment` varchar(5000) NOT NULL,
  `WrittenID` int(5) NOT NULL,
  `StudentID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`CmmID`, `Comment`, `WrittenID`, `StudentID`) VALUES
(3, 'Nice', 33, 4),
(28, 'Nahhh', 33, 4),
(33, '123', 33, 4),
(34, '123', 33, 4),
(35, '123456789', 33, 4),
(36, '', 33, 4),
(37, 'Hahahaha', 33, 4),
(38, 'Hahahaha', 33, 4),
(39, 'Hahahaha', 33, 4),
(40, 'Hahahaha', 33, 4),
(47, '123', 33, 4),
(50, '123456', 33, 5),
(51, 'av', 33, 12),
(52, 'Hahahaha', 33, 12),
(56, '123', 3, 1),
(57, 'Hahahaha', 3, 12),
(58, 'Hahahaha1111111', 33, 12),
(69, 'Hahahaha1111111', 3, 12),
(72, 'comment', 34, 5),
(74, 'Hahahaha1111111', 34, 5),
(75, '123', 34, 5),
(82, '123', 34, 5),
(85, 'Hahahaha1111111', 33, 4),
(87, 'ddd', 11, 4),
(89, 'Hahahaha', 11, 4),
(90, 'Hahahaha', 11, 4),
(91, 'Hahahaha', 11, 4),
(92, 'minh beo', 9, 4),
(94, 'ue', 8, 4),
(97, 'a', 4, 4),
(99, '6', 4, 4),
(100, 'a', 4, 4),
(101, '12', 4, 4),
(102, '12', 4, 4),
(112, 'Hahahaha1111111', 10, 4),
(113, 'Hahahaha1111111f', 10, 4),
(114, '@@', 33, 4),
(115, '', 33, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coordinator`
--

CREATE TABLE `coordinator` (
  `CoorID` int(5) NOT NULL,
  `CoorName` varchar(100) NOT NULL,
  `CoorEmail` varchar(100) NOT NULL,
  `CoorPassword` varchar(100) NOT NULL,
  `Status` varchar(20000) DEFAULT NULL,
  `CoorImage` varchar(500) NOT NULL,
  `FacultyID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coordinator`
--

INSERT INTO `coordinator` (`CoorID`, `CoorName`, `CoorEmail`, `CoorPassword`, `Status`, `CoorImage`, `FacultyID`) VALUES
(1, 'Sinh Thai', 'sinh@gmail.com', '202cb962ac59075b964b07152d234b70', 'accept', 'co2.jpg', 1),
(12, 'Quan Qua', 'qua@gmail.com', '202cb962ac59075b964b07152d234b70', 'notaccept', 'co3.jpg', 2),
(13, '123', 'haiphong@gmail.com', '202cb962ac59075b964b07152d234b70', 'notaccept', 'co4.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faculty`
--

CREATE TABLE `faculty` (
  `FacultyID` int(5) NOT NULL,
  `FacultyName` varchar(100) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `faculty`
--

INSERT INTO `faculty` (`FacultyID`, `FacultyName`, `StartDate`, `EndDate`) VALUES
(1, 'A1', '0000-00-00', '2019-03-06'),
(2, 'A2', '0111-11-11', '0001-11-11'),
(3, 'A4', '1970-01-01', '2019-05-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manager`
--

CREATE TABLE `manager` (
  `MngID` int(5) NOT NULL,
  `MngName` varchar(100) NOT NULL,
  `MngEmail` varchar(100) NOT NULL,
  `MngPass` varchar(100) NOT NULL,
  `MngImage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `manager`
--

INSERT INTO `manager` (`MngID`, `MngName`, `MngEmail`, `MngPass`, `MngImage`) VALUES
(1, 'Yasuo', 'ys@gmail.com', '202cb962ac59075b964b07152d234b70', 'co2.jpg'),
(2, 'Minh beo', 'beo@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user123.jpg'),
(3, '', '', 'c4ca4238a0b923820dcc509a6f75849b', 'user123.jpg'),
(4, 'Minh beo', '', 'c4ca4238a0b923820dcc509a6f75849b', 'user123.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `StudentID` int(5) NOT NULL,
  `StdName` varchar(100) NOT NULL,
  `StuEmail` varchar(100) NOT NULL,
  `StuPass` varchar(100) NOT NULL,
  `StuImage` varchar(500) NOT NULL,
  `FacultyID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`StudentID`, `StdName`, `StuEmail`, `StuPass`, `StuImage`, `FacultyID`) VALUES
(1, 'Pham Cao Minh', 'minh@gmail.com', '202cb962ac59075b964b07152d234b70', 'co1.jpg', 1),
(3, 'khai', 'khai@gmail.com', '202cb962ac59075b964b07152d234b70', 'co2.jpg', 1),
(4, 'Dinh Quang Khai', 'a@gmail.com', '2058c65b51869613eddb1f0b3f3d3e59', 'co1.jpg', 1),
(5, 'Pham Cao Minh', 'minh@gmail.com', '202cb962ac59075b964b07152d234b70', 'co4.jpg', 2),
(12, 'Yu', 'yu@gmail.com', '202cb962ac59075b964b07152d234b70', 'co4.jpg', 1),
(14, 'khaingu', 'khaingu@gmail.com', '202cb962ac59075b964b07152d234b70', 'user123.jpg', 2),
(15, 'Quan', 'quan@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user123.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `written`
--

CREATE TABLE `written` (
  `WrittenID` int(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Profile` varchar(1000) NOT NULL,
  `DateTimeWritten` date NOT NULL,
  `Content` varchar(500) NOT NULL,
  `StudentID` int(5) NOT NULL,
  `Status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `written`
--

INSERT INTO `written` (`WrittenID`, `Name`, `Image`, `Profile`, `DateTimeWritten`, `Content`, `StudentID`, `Status`) VALUES
(3, 'Bai Hoc', '37221193_2095120294044263_5727074959180693504_n.jpg', 'Asm2DB.pdf', '2019-04-21', '', 1, 'notaccept'),
(4, 'Game of throne', 'game.jpeg', 'Asm2DB.pdf', '2019-04-21', '', 1, 'accept'),
(8, 'Donald Trump', 'trump.jpg', 'Asm2DB.pdf', '2019-04-21', '', 1, 'accept'),
(9, 'Black Hole', 'blackhole.jpg', 'Asm2DB.pdf', '2019-04-21', '', 1, 'accept'),
(10, 'Amazon', 'amazon.jpg', 'Asm2DB.pdf', '2019-04-21', '', 4, 'accept'),
(11, 'Ocean', 'ocean.jpg', 'Asm2DB.pdf', '2019-04-21', '', 4, 'accept'),
(21, 'Deep web', 'deepweb.png', 'Asm2DB.pdf', '2019-04-21', '', 4, 'accept'),
(22, 'Racist', 'racist.jpg', 'Asm2DB.pdf', '2019-04-21', '', 5, 'accept'),
(25, '2', '38777307_2019542458065579_999305032828452864_n.jpg', 'Asm2DB.pdf', '2019-04-21', '', 4, 'notaccept'),
(27, '3', '40761944_297390701045634_7113838092817006592_n.jpg', 'Asm2DB.pdf', '2019-04-21', '', 4, 'notaccept'),
(31, 'Dinh Quang Khai', '38821305_230184070973893_1489221270699507712_n.jpg', 'Asm2DB.pdf', '2019-04-21', '', 4, 'notaccept'),
(33, 'Mozart', 'mozart.jpg', 'Cognition.pdf', '2019-04-21', '', 4, 'accept'),
(34, 'Bai Hoc', 'c.jpg', 'Exercise2.pdf', '2019-04-21', '1', 12, 'notaccept'),
(35, 'Math', '44336088_501504986995991_4869402339863166976_n.jpg', 'Assignment.docx.pdf', '2019-04-21', '1', 4, 'notaccept'),
(36, 'Code', '40761944_297390701045634_7113838092817006592_n.jpg', 'Asm2DB.pdf', '2019-04-21', 'O', 4, 'notaccept'),
(37, 'AAAAAA', '37208250_2096100007279625_2511785501350952960_n (1).jpg', 'VIE 1024 - Assignment (1).pdf', '2019-04-21', '1', 4, 'notaccept'),
(38, 'AAA', '38821305_230184070973893_1489221270699507712_n.jpg', 'NET1.pdf', '2019-04-24', 'abc', 4, 'notaccept'),
(39, 'Dinh Quang Khai', '', 'NETAsm2.pdf', '2019-04-24', '1', 4, 'notaccept'),
(41, '', '41991558_2145285535746187_8061292274698420224_n.jpg', 'NET1.pdf', '2019-04-24', '1', 4, 'notaccept'),
(42, 'a', '37208250_2096100007279625_2511785501350952960_n (1).jpg', '.NET1.docx', '2019-04-24', '2', 4, 'notaccept'),
(43, 'Hola', '37208250_2096100007279625_2511785501350952960_n (1).jpg', 'Asm_EPD.pdf', '2019-04-24', '@@', 4, 'notaccept');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CmmID`),
  ADD KEY `cmm_fk1` (`WrittenID`),
  ADD KEY `cmm_fk2` (`StudentID`);

--
-- Chỉ mục cho bảng `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`CoorID`),
  ADD KEY `fa_fk1` (`FacultyID`);

--
-- Chỉ mục cho bảng `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FacultyID`);

--
-- Chỉ mục cho bảng `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`MngID`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `fac_fk1` (`FacultyID`);

--
-- Chỉ mục cho bảng `written`
--
ALTER TABLE `written`
  ADD PRIMARY KEY (`WrittenID`),
  ADD KEY `written_fk2` (`StudentID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `CmmID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `CoorID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FacultyID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `manager`
--
ALTER TABLE `manager`
  MODIFY `MngID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `written`
--
ALTER TABLE `written`
  MODIFY `WrittenID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `cmm_fk1` FOREIGN KEY (`WrittenID`) REFERENCES `written` (`WrittenID`),
  ADD CONSTRAINT `cmm_fk2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);

--
-- Các ràng buộc cho bảng `coordinator`
--
ALTER TABLE `coordinator`
  ADD CONSTRAINT `fa_fk1` FOREIGN KEY (`FacultyID`) REFERENCES `faculty` (`FacultyID`);

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fac_fk1` FOREIGN KEY (`FacultyID`) REFERENCES `faculty` (`FacultyID`);

--
-- Các ràng buộc cho bảng `written`
--
ALTER TABLE `written`
  ADD CONSTRAINT `written_fk2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
