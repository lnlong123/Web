-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 23, 2021 lúc 04:42 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dhtl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_canbo`
--

CREATE TABLE `tbl_canbo` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_donvi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_canbo`
--

INSERT INTO `tbl_canbo` (`id`, `full_name`, `chucvu`, `sdt`, `email`, `id_donvi`) VALUES
(30, 'Phan Minh Tú', 'Lao công ', 312312, ' ieoqweqowp@gmail.com', 4),
(31, 'Lê ngọc long', 'Giáo viên  ', 312312312, ' bogiachimto@gmail.com', 4),
(32, 'abc', 'Lao công ', 312312312, ' ewq@gmail.com', 4),
(33, 'Trần Đức Huy', 'Nhân viên ', 37189312, ' kkdsakda@gmail.com', 3),
(34, 'eqwewq', 'Giáo viên  ', 312312312, ' ieoqweqowp@gmail.com', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coquan`
--

CREATE TABLE `tbl_coquan` (
  `id` int(11) NOT NULL,
  `tenDV` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_coquan`
--

INSERT INTO `tbl_coquan` (`id`, `tenDV`, `DiaChi`, `SDT`, `Email`, `website`, `id_cha`) VALUES
(3, 'Ban giám hiệu', 'ewqeqweqw', 3217712, 'eqqqeqw@gmail.com', 'qweqw.com', NULL),
(4, 'Hội đồng trường', 'ưqeqew', 31231231, 'eqweqw@gmail.com', 'eqwpeqweq[.com', NULL),
(5, 'Ban giám khảo', 'DJDJKLDKo', 312312, 'WWWW@gmail.com', '3qweeqw.ewqewq', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `passwd`) VALUES
(1, 'longth1', 'abc123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donvi` (`id_donvi`);

--
-- Chỉ mục cho bảng `tbl_coquan`
--
ALTER TABLE `tbl_coquan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cha` (`id_cha`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `tbl_coquan`
--
ALTER TABLE `tbl_coquan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD CONSTRAINT `tbl_canbo_ibfk_1` FOREIGN KEY (`id_donvi`) REFERENCES `tbl_coquan` (`id`);

--
-- Các ràng buộc cho bảng `tbl_coquan`
--
ALTER TABLE `tbl_coquan`
  ADD CONSTRAINT `tbl_coquan_ibfk_1` FOREIGN KEY (`id_cha`) REFERENCES `tbl_coquan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
