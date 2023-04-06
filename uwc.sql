-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 30, 2023 lúc 06:26 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `uwc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `area`
--

CREATE TABLE `area` (
  `id_area` int(10) UNSIGNED NOT NULL,
  `list_MCP` text DEFAULT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `area`
--

INSERT INTO `area` (`id_area`, `list_MCP`, `location`) VALUES
(1, '1,11', 'Khu A Làng Đại học Quốc gia TPHCM'),
(2, '6', 'Khu vực đường Song Hành hướng Làng Đại học quốc gia TPHCM'),
(3, '2', 'Khu dân cư - khu B làng đại học quốc gia TPHCM'),
(4, '16', 'Khu vực cổng KTX khu B ĐHQG TPHCM'),
(5, '12', 'Khu vực Nhà văn hóa sinh viên + Đại học Nhân văn TPHCM'),
(6, '13,14', 'Khu vực trường Đại học Khoa học Tự nhiên TPHCM + Nhà điều hành ĐHQG TPHCM'),
(7, '5', 'Khu vực du lịch văn hóa Suối Tiên'),
(8, '7', 'Khu Công nghệ cao quận 9, TPHCM'),
(9, '15', 'Ngã tư Thủ Đức + Khu vực trường Đại học Sư phạm Kĩ Thuật TPHCM'),
(10, '9', 'Khu vực Chợ Thủ Đức'),
(11, '10', 'Khu vực đường Hoàng Diệu 2'),
(12, '3,4', 'Khu vực Đại học Nông Lâm TPHCM + Đại học Kinh tế Luật TPHCM - QL1A'),
(13, '8', 'Khu vực Cầu vượt Linh Xuân - Thành phố Thủ Đức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendar`
--

CREATE TABLE `calendar` (
  `id_calendar` int(10) UNSIGNED NOT NULL,
  `id_owner` int(10) UNSIGNED NOT NULL,
  `list_task` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `position` varchar(15) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mcp`
--

CREATE TABLE `mcp` (
  `id_mcp` int(11) UNSIGNED NOT NULL,
  `max_capacity` float UNSIGNED NOT NULL,
  `current_capacity` float UNSIGNED NOT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mcp`
--

INSERT INTO `mcp` (`id_mcp`, `max_capacity`, `current_capacity`, `location`) VALUES
(1, 600, 580, 'Đường Tạ Quang Bửu, khu phố 6, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(2, 700, 500, 'Đường Tô Vĩnh Diện, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương'),
(3, 550, 492, '669 QL1A, khu phố 3, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(4, 575, 410, 'VQ8Q+W5W, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(5, 750, 609, '120 Xa lộ Hà Nội, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(6, 500, 340, 'VR93+JH4, Cổng C Trường ĐH Công nghệ thông tin, khu phố 6, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(7, 650, 470, 'Khu Công nghệ cao TPHCM, quận 9, thành phố Hồ Chí Minh'),
(8, 800, 560, 'Cầu vượt Linh Xuân, phường Linh Xuân, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(9, 850, 812, 'Chợ Thủ Đức, đường Võ Văn Ngân, Trường Thọ, thành phố Thủ Đức, Thành phố Hồ Chí Minh'),
(10, 750, 632, 'Ngã ba đường số 14, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(11, 575, 550, '69 Ấp Tân Lập, phường Đông Hòa, thị xã Dĩ An, Bình Dương'),
(12, 650, 419, 'Cổng Nhà văn hóa Sinh viên, đường Lưu Hữu Phước, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương'),
(13, 575, 420, 'Ngã ba Đường T1, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương\r\n '),
(14, 650, 525, 'Đường Alexander De Rhodes, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(15, 900, 872, 'Ngã tư Thủ Đức, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh'),
(16, 675, 525, 'Cổng kí túc xá khu B, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `route`
--

CREATE TABLE `route` (
  `id_route` int(10) UNSIGNED NOT NULL,
  `way` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `route`
--

INSERT INTO `route` (`id_route`, `way`) VALUES
(1, 'Ấp Tân Lập -> KTX Khu A -> Nhà văn hóa sinh viên -> Đại học KHTN TPHCM -> Quảng trường sáng tạo'),
(2, 'Alexander De Rhodes -> QL1A -> Cầu vượt Linh Xuân'),
(3, 'Nhà văn hóa sinh viên -> đường Tô Vĩnh Diện -> KTX khu B -> Trường Đại học Kinh Tế - Luật TPHCM'),
(4, 'Ngã ba 621 -> Xa lộ Hà Nội -> Ngã tư Thủ Đức -> Suối Tiên '),
(5, 'Xa lộ Hà Nội -> Chọ Thủ Đức -> đường Lê Văn Chí -> đường Hoàng Diệu 2 -> đường 14 ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task`
--

CREATE TABLE `task` (
  `id_task` int(10) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `id_employee` int(10) UNSIGNED NOT NULL,
  `assigned_area` text DEFAULT NULL,
  `assigned_troller` text DEFAULT NULL,
  `assigned_route` text DEFAULT NULL,
  `assigned_vehicle` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vehicle`
--

CREATE TABLE `vehicle` (
  `id_vehicle` int(10) UNSIGNED NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `capacity` float UNSIGNED NOT NULL,
  `driver` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `weight` float UNSIGNED NOT NULL,
  `fuel_consumption` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vehicle`
--

INSERT INTO `vehicle` (`id_vehicle`, `name`, `capacity`, `driver`, `type`, `weight`, `fuel_consumption`) VALUES
(1, '51-D 123.45', 4300, NULL, 'Vehicle_Collector', 6000, 0),
(2, '51-D 345.12', 4000, NULL, 'Vehicle_Collector', 5800, 0),
(3, '51-D 124.56', 5000, NULL, 'Vehicle_Collector', 6850, 0),
(4, '51-D 156.98', 4550, NULL, 'Vehicle_Collector', 6100, 0),
(5, '51-D 345.56', 4200, NULL, 'Vehicle_Collector', 5900, 0),
(6, '51-D 982.22', 4950, NULL, 'Vehicle_Collector', 6500, 0),
(7, '51-D 183.44', 4800, NULL, 'Vehicle_Collector', 6050, 0),
(8, '51-D 927.45', 4700, NULL, 'Vehicle_Collector', 6000, 0),
(9, '51-D 245.44', 5200, NULL, 'Vehicle_Collector', 6350, 0),
(10, '51-D 369.35', 4500, NULL, 'Vehicle_Collector', 6050, 0),
(11, 'UWC-T1', 350, NULL, 'Troller', 0, 0),
(12, 'UWC-T2', 450, NULL, 'Troller', 0, 0),
(13, 'UWC-T3', 400, NULL, 'Troller', 0, 0),
(14, 'UWC-T4', 400, NULL, 'Troller', 0, 0),
(15, 'UWC-T5', 300, NULL, 'Troller', 0, 0),
(16, 'UWC-T6', 550, NULL, 'Troller', 0, 0),
(17, 'UWC-T7', 400, NULL, 'Troller', 0, 0),
(18, 'UWC-T8', 250, NULL, 'Troller', 0, 0),
(19, 'UWC-T9', 300, NULL, 'Troller', 0, 0),
(20, 'UWC-T10', 500, NULL, 'Troller', 0, 0),
(21, 'UWC-T11', 250, NULL, 'Troller', 0, 0),
(22, 'UWC-T12', 325, NULL, 'Troller', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Chỉ mục cho bảng `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id_calendar`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mcp`
--
ALTER TABLE `mcp`
  ADD PRIMARY KEY (`id_mcp`);

--
-- Chỉ mục cho bảng `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id_route`);

--
-- Chỉ mục cho bảng `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`);

--
-- Chỉ mục cho bảng `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id_vehicle`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id_calendar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mcp`
--
ALTER TABLE `mcp`
  MODIFY `id_mcp` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `route`
--
ALTER TABLE `route`
  MODIFY `id_route` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id_vehicle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
