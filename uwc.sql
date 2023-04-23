-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 03:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uwc`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id_area` int(10) UNSIGNED NOT NULL,
  `list_MCP` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `polygon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `list_MCP`, `location`, `polygon`) VALUES
(1, '1,11', 'Khu A Làng Đại học Quốc gia TPHCM', '[[10.882486987348157, 106.80899211550602],\r\n[10.881180984759759, 106.81086763855853],\r\n[10.874684374019498, 106.80648005129584],\r\n[10.875220182320758, 106.80533200385156],\r\n[10.876079706126577, 106.80486596479004]]'),
(2, '6', 'Khu vực đường Song Hành hướng Làng Đại học quốc gia TPHCM', '[[10.859041358258327, 106.71026536074233],\r\n[10.861675527002738, 106.71554394807454],\r\n[10.864225380213798, 106.71348401155466],\r\n[10.865869075710163, 106.70185395327496],\r\n[10.861211915000512, 106.69217654316587]]'),
(3, '2', 'Khu dân cư - khu B làng đại học quốc gia TPHCM', '[[10.873243201130578, 106.80265203164909],\r\n[10.868929945433656, 106.80395496302036],\r\n[10.866659214549717, 106.80043849127856],\r\n[10.867385839793712, 106.79865665968067],\r\n[10.869751326483103, 106.79766259584162],\r\n[10.871879660267131, 106.79817757997158],\r\n[10.873396879040955, 106.80120311173519]]'),
(4, '16', 'Khu vực cổng KTX khu B ĐHQG TPHCM', '[[10.883338972755249, 106.78394286971496],\r\n[10.882588014020229, 106.78465338969018],\r\n[10.879557596758723, 106.78155425530215]]'),
(5, '12', 'Khu vực Nhà văn hóa sinh viên + Đại học Nhân văn TPHCM', '[[10.876230762596444, 106.80088887688296],\r\n[10.876409876490412, 106.80245528694496],\r\n[10.875998967985725, 106.80435429092424],\r\n[10.875050715429358, 106.80508385177505],\r\n[10.873912808381847, 106.80453668113694],\r\n[10.873596722320436, 106.80261621948557],\r\n[10.874102459857925, 106.80091033455504],\r\n[10.87494535384808, 106.79994473931134],\r\n[10.875682884135282, 106.80028806206465],\r\n[10.87585146223055, 106.8007923173586]]'),
(6, '13,14', 'Khu vực trường Đại học Khoa học Tự nhiên TPHCM + Nhà điều hành ĐHQG TPHCM', '[[10.870478710546863, 106.79692571573457],\r\n[10.872051646472093, 106.79812998688011],\r\n[10.872832198055736, 106.79762419299945],\r\n[10.875221146270828, 106.79884050685536],\r\n[10.875564112513104, 106.79216884471506],\r\n[10.873553615127419, 106.79322860332218],\r\n[10.871247439674045, 106.79327677416796]]'),
(7, '5', 'Khu vực du lịch văn hóa Suối Tiên', '[[10.86697, 106.80366],\r\n[10.86566, 106.80461],\r\n[10.86497, 106.80354],\r\n[10.86287, 106.80399],\r\n[10.86269, 106.80375],\r\n[10.8617, 106.80372],\r\n[10.86163, 106.80402],\r\n[10.86108, 106.80411],\r\n[10.86106, 106.80478],\r\n[10.86029, 106.8049],\r\n[10.8605, 106.80559],\r\n[10.8589, 106.80646],\r\n[10.85801, 106.80551],\r\n[10.85707, 106.80496],\r\n[10.85805, 106.80367],\r\n[10.85891, 106.80357],\r\n[10.8591, 106.80331],\r\n[10.8586, 106.80217],\r\n[10.85952, 106.80144],\r\n[10.86121, 106.80113],\r\n[10.86139, 106.80161],\r\n[10.86292, 106.80126],\r\n[10.86306, 106.80173],\r\n[10.86417, 106.80123],\r\n[10.86451, 106.80261],\r\n[10.86491, 106.80241],\r\n[10.86471, 106.80189],\r\n[10.86558, 106.80155]]'),
(8, '7', 'Khu Công nghệ cao quận 9, TPHCM', '[[10.847494361756214, 106.8029599185302],\r\n[10.848844635098715, 106.80863114455403],\r\n[10.842993406580065, 106.81491818552489],\r\n[10.83966817849504, 106.81188436054092],\r\n[10.839636601958356, 106.81122528180674]]'),
(9, '15', 'Ngã tư Thủ Đức + Khu vực trường Đại học Sư phạm Kĩ Thuật TPHCM', '[[10.84990007060667, 106.77168775836124],\r\n[10.849833918479296, 106.77324208718511],\r\n[10.851613942077272, 106.77422356816787],\r\n[10.853358473216241, 106.77321800176144],\r\n[10.853234286592226, 106.77286876312954],\r\n[10.8532875094374, 106.77256167398771],\r\n[10.853565450808246, 106.77252554585337],\r\n[10.853665982729783, 106.77158019300498],\r\n[10.850780111748259, 106.77128514657484],\r\n[10.850182827597994, 106.77157417164952]]'),
(10, '9', 'Khu vực Chợ Thủ Đức', '[[10.851002981580233, 106.75468855712164],\r\n[10.850890137304324, 106.75480345575893],\r\n[10.849502813019408, 106.75368826310277],\r\n[10.84958578714091, 106.75355646760704]]'),
(11, '10', 'Khu vực đường Hoàng Diệu 2', '[[10.856654340277661, 106.76612102573678],\r\n[10.855761388015312, 106.76675326808763],\r\n[10.854489961314766, 106.76871623005309],\r\n[10.854164711741232, 106.77084778998069],\r\n[10.854010957280616, 106.7708778967593],\r\n[10.85410557541959, 106.76987233035368],\r\n[10.854413084164326, 106.76860182429628],\r\n[10.855572152742381, 106.76673520402238],\r\n[10.856423710465092, 106.7659825345571]]'),
(12, '3,4', 'Khu vực Đại học Nông Lâm TPHCM + Đại học Kinh tế Luật TPHCM - QL1A', '[[10.867474071070534, 106.78769396900321],\r\n[10.87491679227188, 106.7905264243553],\r\n[10.877848722377578, 106.78003868426137],\r\n[10.870099558565306, 106.77535449737012],\r\n[10.867749730737748, 106.78327942146602]]'),
(13, '8', 'Khu vực Cầu vượt Linh Xuân - Thành phố Thủ Đức', '[[10.87169135362013, 106.77058391383869],\r\n[10.87337715284553, 106.77106671146055],\r\n[10.87493650864648, 106.76918916515334],\r\n[10.87660121732765, 106.76645331196285],\r\n[10.873566804662193, 106.76535897068666]]'),
(14, '17, 18, 19', 'An Phú Đông', '[[10.860344448173205, 106.69211599371593],\r\n[10.858338976219992, 106.7106405483348],\r\n[10.860817569137499, 106.71607392911908],\r\n[10.856097173829335, 106.71695805912836],\r\n[10.852529200123541, 106.71358229000202],\r\n[10.85188190827453, 106.69898610728929],\r\n[10.85301861495026, 106.69334375031504]]'),
(15, '20, 21', 'Khu phố 4', '[[10.859041358258327, 106.71026536074233],\r\n[10.861675527002738, 106.71554394807454],\r\n[10.864225380213798, 106.71348401155466],\r\n[10.865869075710163, 106.70185395327496],\r\n[10.861211915000512, 106.69217654316587]]'),
(16, '22, 23, 24', 'Hiệp Bình Phước, Quốc lộ 13', '[[10.865599966882172, 106.7233519141191],\r\n[10.8678101243702, 106.72095672554852],\r\n[10.867762764024198, 106.71705047841661],\r\n[10.868141646581755, 106.71582877149471],\r\n[10.866610326621736, 106.71433378802448],\r\n[10.862853034052959, 106.71809535933667]]'),
(17, '25, 26', 'Phường 7, Gò Vấp', '[[10.829803063910585, 106.69253662856637],\r\n[10.828998743440824, 106.69244028687481],\r\n[10.826905134454554, 106.68930918189716],\r\n[10.830830188723569, 106.6786998394868],\r\n[10.838124494831765, 106.68850564504547],\r\n[10.83308796914274, 106.6904346559748]]'),
(18, '27, 28, 29', 'Phường 5, Gò Vấp', '[[10.826346443133891, 106.68956677066643],\r\n[10.828604257332664, 106.69250851233367],\r\n[10.824546495150024, 106.6959646569154],\r\n[10.822825482142244, 106.69319974125]]'),
(19, '30, 31', 'Phường 4', '[[10.823764431460893, 106.68645018774716],\r\n[10.819872841299095, 106.6898944032203],\r\n[10.81625326224015, 106.68275307533249],\r\n[10.81811037198238, 106.68194621366571]]');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id_calendar` int(10) UNSIGNED NOT NULL,
  `id_owner` int(10) UNSIGNED NOT NULL,
  `list_task` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
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
  `password` varchar(15) DEFAULT NULL,
  `state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `address`, `mail`, `phone_number`, `position`, `gender`, `user_name`, `password`, `state`) VALUES
(10000, 'Nguyen Van A', 'Thủ Đức, Hồ Chí Minh City', 'nguyenvana@gmail.com', '0912345678', 'collector', 'male', 'nguyenvana', '1234556789', 0),
(10001, 'Nguyen Van B', 'Quận 2, Hồ Chí Minh City', 'nguyenvanb@gmail.com', '0912345678', 'collector', 'male', 'nguyenvanb', '1234556789', 0),
(10002, 'Nguyen Van C', 'Quận 2, Hồ Chí Minh City', 'nguyenvanc@gmail.com', '0912345678', 'collector', 'male', 'nguyenvanc', '1234556789', 0),
(20000, 'Dang Van A', 'Thủ Đức, Hồ Chí Minh City', 'dangvana@gmail.com', '0912345678', 'janitor', 'male', 'dangvana', '1234556789', 0),
(20001, 'Back Officer', 'DHBK TPHCM', 'backofficer@gmail.com', '0988888888', 'backofficer', 'male', 'backofficer', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mcp`
--

CREATE TABLE `mcp` (
  `id_mcp` int(11) UNSIGNED NOT NULL,
  `max_capacity` float UNSIGNED NOT NULL,
  `current_capacity` float UNSIGNED NOT NULL,
  `location` text DEFAULT NULL,
  `my_area` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcp`
--

INSERT INTO `mcp` (`id_mcp`, `max_capacity`, `current_capacity`, `location`, `my_area`) VALUES
(1, 600, 580, 'Đường Tạ Quang Bửu, khu phố 6, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh', 1),
(2, 700, 500, 'Đường Tô Vĩnh Diện, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương', 1),
(3, 550, 492, '669 QL1A, khu phố 3, thành phố Thủ Đức, thành phố Hồ Chí Minh', 1),
(4, 575, 410, 'VQ8Q+W5W, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh', 1),
(5, 750, 609, '120 Xa lộ Hà Nội, thành phố Thủ Đức, thành phố Hồ Chí Minh', 2),
(6, 500, 340, 'VR93+JH4, Cổng C Trường ĐH Công nghệ thông tin, khu phố 6, thành phố Thủ Đức, thành phố Hồ Chí Minh', 2),
(7, 650, 470, 'Khu Công nghệ cao TPHCM, quận 9, thành phố Hồ Chí Minh', 2),
(8, 800, 560, 'Cầu vượt Linh Xuân, phường Linh Xuân, thành phố Thủ Đức, thành phố Hồ Chí Minh', 2),
(9, 850, 812, 'Chợ Thủ Đức, đường Võ Văn Ngân, Trường Thọ, thành phố Thủ Đức, Thành phố Hồ Chí Minh', 2),
(10, 750, 632, 'Ngã ba đường số 14, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh', 3),
(11, 575, 550, '69 Ấp Tân Lập, phường Đông Hòa, thị xã Dĩ An, Bình Dương', 3),
(12, 650, 419, 'Cổng Nhà văn hóa Sinh viên, đường Lưu Hữu Phước, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương', 3),
(13, 575, 420, 'Ngã ba Đường T1, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương\r\n', 3),
(14, 650, 525, 'Đường Alexander De Rhodes, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh', 4),
(15, 900, 872, 'Ngã tư Thủ Đức, phường Linh Trung, thành phố Thủ Đức, thành phố Hồ Chí Minh', 4),
(16, 675, 525, 'Cổng kí túc xá khu B, phường Đông Hòa, thị xã Dĩ An, tỉnh Bình Dương', 4);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id_route` int(10) UNSIGNED NOT NULL,
  `way` text DEFAULT NULL,
  `waypoint` text NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id_route`, `way`, `waypoint`, `state`) VALUES
(1, 'Ấp Tân Lập -> KTX Khu A -> Nhà văn hóa sinh viên -> Đại học KHTN TPHCM -> Quảng trường sáng tạo', '[L.latLng(10.882594865215857, 106.80902742582217),\r\nL.latLng(10.876074971984783, 106.80121937633339)]\r\n', 0),
(2, 'Alexander De Rhodes -> QL1A -> Cầu vượt Linh Xuân', '[L.latLng(10.869228389293657, 106.79782491125269),\r\nL.latLng(10.872467253043297, 106.76731533823641)]', 0),
(3, 'Nhà văn hóa sinh viên -> đường Tô Vĩnh Diện -> KTX khu B -> Trường Đại học Kinh Tế - Luật TPHCM', '[L.latLng(10.875473699558114, 106.79987972386236),\r\nL.latLng(10.870452107703636, 106.7781953940562)]', 0),
(4, 'Ngã ba 621 -> Xa lộ Hà Nội -> Ngã tư Thủ Đức -> Suối Tiên ', '[L.latLng(10.850539279140307, 106.76082042778457),\r\nL.latLng(10.866128998169652, 106.80295195905508)]', 0),
(5, 'Xa lộ Hà Nội -> Chợ Thủ Đức -> đường Lê Văn Chí -> đường Hoàng Diệu 2 -> đường 14 ', '[L.latLng(10.850298024721607, 106.75424524370949),\r\nL.latLng(10.856475762930279, 106.76603052289222)]', 0),
(6, 'Công Ty Xử Lý Chất Thải Công Nghiệp & Môi Trường Thái An -> Đường Vườn Lài -> Quốc lộ 1 -> Bãi Rác Tam Bình', '[L.latLng(10.840859077354168, 106.69524804835847),\r\nL.latLng(10.86069263393587, 106.74183107228262)]', 0),
(7, 'Công Ty Xử Lý Chất Thải Công Nghiệp & Môi Trường Thái An -> Đường Vườn Lài -> Nguyễn Thái Sơn -> Bãi rác Phú Nhuận', '[L.latLng(10.840859077354168, 106.69524804835847),\r\nL.latLng(10.80885499246943, 106.67674127040907)]\r\n', 0),
(8, 'Công Ty Xử Lý Chất Thải Công Nghiệp & Môi Trường Thái An -> Quốc lộ 1 -> Nguyễn Thị Kiểu -> Bãi rác Phường Hiệp Thành', '[L.latLng(10.840859077354168, 106.69524804835847),\r\nL.latLng(10.873237725641323, 106.63553054414089)]', 0),
(9, 'Công Ty Xử Lý Chất Thải Công Nghiệp & Môi Trường Thái An -> Đường Vườn Lài -> Đường Quang Trung -> Bãi rác gần Phạm Văn Chiêu', '[L.latLng(10.840859077354168, 106.69524804835847),\r\nL.latLng(10.851631888835035, 106.64938937803355)]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id_task` int(10) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `id_employee` int(10) UNSIGNED NOT NULL,
  `assigned_area` text DEFAULT NULL,
  `assigned_troller` text DEFAULT NULL,
  `assigned_route` text DEFAULT NULL,
  `assigned_vehicle` text DEFAULT NULL,
  `state` int(10) UNSIGNED NOT NULL,
  `week` int(100) NOT NULL,
  `day` int(100) NOT NULL,
  `time` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id_task`, `description`, `id_employee`, `assigned_area`, `assigned_troller`, `assigned_route`, `assigned_vehicle`, `state`, `week`, `day`, `time`) VALUES
(1, 'aa', 2010444, 'Thủ Đức', 'T1', 'Tạ Quang Bửu', '62-F1 05678', 1, 0, 0, 0),
(2, 'aa', 2010444, 'Thủ Đức', 'T1', 'Tạ Quang Bửu', '62-F1 05678', 0, 0, 0, 0),
(3, 'aa', 2010444, 'Thủ Đức', 'T1', 'Tạ Quang Bửu', '62-F1 05678', 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id_vehicle` int(10) UNSIGNED NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `capacity` float UNSIGNED NOT NULL,
  `driver` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `weight` float UNSIGNED NOT NULL,
  `fuel_consumption` float UNSIGNED NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id_vehicle`, `name`, `capacity`, `driver`, `type`, `weight`, `fuel_consumption`, `state`) VALUES
(1, '51-D 123.45', 4300, NULL, 'Vehicle_Collector', 6000, 0, 0),
(2, '51-D 345.12', 4000, NULL, 'Vehicle_Collector', 5800, 0, 0),
(3, '51-D 124.56', 5000, NULL, 'Vehicle_Collector', 6850, 0, 0),
(4, '51-D 156.98', 4550, NULL, 'Vehicle_Collector', 6100, 0, 0),
(5, '51-D 345.56', 4200, NULL, 'Vehicle_Collector', 5900, 0, 0),
(6, '51-D 982.22', 4950, NULL, 'Vehicle_Collector', 6500, 0, 0),
(7, '51-D 183.44', 4800, NULL, 'Vehicle_Collector', 6050, 0, 0),
(8, '51-D 927.45', 4700, NULL, 'Vehicle_Collector', 6000, 0, 0),
(9, '51-D 245.44', 5200, NULL, 'Vehicle_Collector', 6350, 0, 0),
(10, '51-D 369.35', 4500, NULL, 'Vehicle_Collector', 6050, 0, 0),
(11, 'UWC-T1', 350, NULL, 'Troller', 0, 0, 0),
(12, 'UWC-T2', 450, NULL, 'Troller', 0, 0, 0),
(13, 'UWC-T3', 400, NULL, 'Troller', 0, 0, 0),
(14, 'UWC-T4', 400, NULL, 'Troller', 0, 0, 0),
(15, 'UWC-T5', 300, NULL, 'Troller', 0, 0, 0),
(16, 'UWC-T6', 550, NULL, 'Troller', 0, 0, 0),
(17, 'UWC-T7', 400, NULL, 'Troller', 0, 0, 0),
(18, 'UWC-T8', 250, NULL, 'Troller', 0, 0, 0),
(19, 'UWC-T9', 300, NULL, 'Troller', 0, 0, 0),
(20, 'UWC-T10', 500, NULL, 'Troller', 0, 0, 0),
(21, 'UWC-T11', 250, NULL, 'Troller', 0, 0, 0),
(22, 'UWC-T12', 325, NULL, 'Troller', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id_calendar`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcp`
--
ALTER TABLE `mcp`
  ADD PRIMARY KEY (`id_mcp`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id_route`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id_vehicle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id_calendar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;

--
-- AUTO_INCREMENT for table `mcp`
--
ALTER TABLE `mcp`
  MODIFY `id_mcp` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id_route` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id_vehicle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
