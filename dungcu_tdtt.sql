-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 04:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dungcu_tdtt`
--

-- --------------------------------------------------------

--
-- Table structure for table `diachi`
--

CREATE TABLE `diachi` (
  `diachi_id` int(10) NOT NULL,
  `tk_id` int(10) DEFAULT NULL,
  `px_ma` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `qh_ma` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `ttp_ma` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `diachicuthe` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donvivanchuyen`
--

CREATE TABLE `donvivanchuyen` (
  `dvvc_ma` varchar(10) NOT NULL,
  `dvvc_ten` varchar(100) DEFAULT NULL,
  `dvvc_diachi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `giohang_id` int(10) NOT NULL,
  `sp_ma` varchar(10) DEFAULT NULL,
  `nv_ma` varchar(10) DEFAULT NULL,
  `tk_id` int(10) DEFAULT NULL,
  `dvvc_ma` varchar(10) DEFAULT NULL,
  `tongtien` varchar(50) DEFAULT NULL,
  `trangthai` varchar(20) DEFAULT NULL,
  `ngaydat` date DEFAULT NULL,
  `ngaygiao` date DEFAULT NULL,
  `diachi_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hinhmota`
--

CREATE TABLE `hinhmota` (
  `ha_ma` int(100) NOT NULL,
  `ha_ten` varchar(100) DEFAULT NULL,
  `sp_ma` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinhmota`
--

INSERT INTO `hinhmota` (`ha_ma`, `ha_ten`, `sp_ma`) VALUES
(0, NULL, 'sp2');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `lsp_ma` varchar(10) NOT NULL,
  `lsp_ten` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`lsp_ma`, `lsp_ten`) VALUES
('lsp1', 'chân'),
('lsp2', 'Máy tập cơ bụng '),
('lsp4', 'Ghế massage'),
('lsp5', 'Máy massage');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `ncc_ma` varchar(10) NOT NULL,
  `ncc_ten` varchar(50) DEFAULT NULL,
  `ncc_diachi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ncc_ma`, `ncc_ten`, `ncc_diachi`) VALUES
('ncc2', 'Hồng Phát', '180/35 Lý Thánh Tông, P. Hiệp Tân, Q. Tân Phú, Tp.');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_ma` varchar(10) NOT NULL,
  `nv_taikhoan` varchar(30) DEFAULT NULL,
  `nv_matkhau` varchar(20) DEFAULT NULL,
  `nv_hoten` varchar(30) DEFAULT NULL,
  `nv_diachi` varchar(50) DEFAULT NULL,
  `nv_chucvu` varchar(20) DEFAULT NULL,
  `nv_sdt` varchar(10) DEFAULT NULL,
  `nv_gioitinh` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`nv_ma`, `nv_taikhoan`, `nv_matkhau`, `nv_hoten`, `nv_diachi`, `nv_chucvu`, `nv_sdt`, `nv_gioitinh`) VALUES
('nv1', 'nhanvien', 'nhanvien', 'Nguyễn Thành Lợi', 'Cà Mau', 'Nhân viên', '0829528445', 'Nam'),
('nv2', 'quanlidonhang', 'quanlidonhang', 'Dương Ánh Loan', 'An Giang', 'Quản Lí Đơn Hàng', '0813371033', 'Nữ'),
('nv3', 'admin', 'admin', 'Nguyễn Trần Mỹ Duyên', 'Trà Vinh', 'Admin', '0347301718', 'Nữ'),
('nv5', 'nhaphang', 'nhaphang', 'Hy', 'Cần Thơ', 'Nhập hàng', '0347301718', 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_ma` varchar(10) NOT NULL,
  `sp_ten` varchar(100) DEFAULT NULL,
  `sp_hinhanh` varchar(100) DEFAULT NULL,
  `sp_gia` varchar(100) DEFAULT NULL,
  `lsp_ma` varchar(100) DEFAULT NULL,
  `ncc_ma` varchar(100) DEFAULT NULL,
  `sp_mota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_ma`, `sp_ten`, `sp_hinhanh`, `sp_gia`, `lsp_ma`, `ncc_ma`, `sp_mota`) VALUES
('sp2', 'Con lăn tập cơ bụng 4 bánh AB', 'con-lan-tap-bung-4-banh-ab-2019.png', '340.000', 'lsp2', 'ncc2', '- Màu sắc: đen + xanh.\r\n- Trọng lượng con lăn: 1.2 kg.\r\n- Trọng lượng người tập tối đa: 130 kg.\r\n- Kích thước sử dụng: 23 x 35 x 10 cm.\r\n- Kích thước gập gọn: 20 x 18 x 7 cm.\r\n- Bộ con lăn tập bụng 4 bánh bao gồm: 1 con lăn tập cơ bụng và 1 tấm thảm lót đ');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tk_id` int(10) NOT NULL,
  `dangnhap` varchar(100) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `tennguoidung` varchar(100) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `chucvu` varchar(100) DEFAULT NULL,
  `sdt` varchar(100) DEFAULT NULL,
  `gioitinh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tk_id`, `dangnhap`, `matkhau`, `tennguoidung`, `diachi`, `chucvu`, `sdt`, `gioitinh`) VALUES
(0, 'duyen', 'duyen123', 'duyen123', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vn_phuongxa`
--

CREATE TABLE `vn_phuongxa` (
  `px_ma` varchar(5) CHARACTER SET utf8 NOT NULL,
  `px_ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phanloai` varchar(30) CHARACTER SET utf8 NOT NULL,
  `qh_ma` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vn_phuongxa`
--

INSERT INTO `vn_phuongxa` (`px_ma`, `px_ten`, `phanloai`, `qh_ma`) VALUES
('29332', 'Tam Ngãi', 'Xã', '845'),
('29335', 'Thông Hòa', 'Xã', '845'),
('29347', 'Phú Cần', 'Xã', '846'),
('31147', 'Hưng Lợi', 'Phường', '916'),
('31149', 'An Khánh', 'Phường', '916'),
('31300', 'Nhơn Ái', 'Xã', '926');

-- --------------------------------------------------------

--
-- Table structure for table `vn_quanhuyen`
--

CREATE TABLE `vn_quanhuyen` (
  `qh_ma` varchar(5) CHARACTER SET utf8 NOT NULL,
  `qh_ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phanloai` varchar(30) CHARACTER SET utf8 NOT NULL,
  `ttp_ma` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vn_quanhuyen`
--

INSERT INTO `vn_quanhuyen` (`qh_ma`, `qh_ten`, `phanloai`, `ttp_ma`) VALUES
('845', 'Cầu Kè', 'Huyện', '84'),
('846', 'Tiểu Cần', 'Huyện', '84'),
('847', 'Châu Thành', 'Huyện', '84'),
('916', 'Ninh Kiều', 'Quận', '65'),
('919', 'Cái Răng', 'Quận', '65'),
('926', 'Phong Điền', 'Huyện', '65');

-- --------------------------------------------------------

--
-- Table structure for table `vn_tinhthanhpho`
--

CREATE TABLE `vn_tinhthanhpho` (
  `ttp_ma` varchar(5) CHARACTER SET utf8 NOT NULL,
  `ttp_ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phanloai` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vn_tinhthanhpho`
--

INSERT INTO `vn_tinhthanhpho` (`ttp_ma`, `ttp_ten`, `phanloai`) VALUES
('65', 'Cần Thơ', 'Thành Phố'),
('84', 'Trà Vinh', 'Tỉnh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`diachi_id`),
  ADD KEY `tk_id` (`tk_id`),
  ADD KEY `px_ma` (`px_ma`),
  ADD KEY `qh_ma` (`qh_ma`),
  ADD KEY `ttp_ma` (`ttp_ma`);

--
-- Indexes for table `donvivanchuyen`
--
ALTER TABLE `donvivanchuyen`
  ADD PRIMARY KEY (`dvvc_ma`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`giohang_id`),
  ADD KEY `nv_ma` (`nv_ma`),
  ADD KEY `tk_id` (`tk_id`),
  ADD KEY `dvvc_ma` (`dvvc_ma`),
  ADD KEY `sp_ma` (`sp_ma`),
  ADD KEY `diachi_id` (`diachi_id`);

--
-- Indexes for table `hinhmota`
--
ALTER TABLE `hinhmota`
  ADD PRIMARY KEY (`ha_ma`),
  ADD KEY `msx` (`sp_ma`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`lsp_ma`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`ncc_ma`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_ma`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `lsp_ma` (`lsp_ma`),
  ADD KEY `ncc_ma` (`ncc_ma`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tk_id`);

--
-- Indexes for table `vn_phuongxa`
--
ALTER TABLE `vn_phuongxa`
  ADD PRIMARY KEY (`px_ma`),
  ADD KEY `maqh` (`qh_ma`);

--
-- Indexes for table `vn_quanhuyen`
--
ALTER TABLE `vn_quanhuyen`
  ADD PRIMARY KEY (`qh_ma`),
  ADD KEY `matp` (`ttp_ma`);

--
-- Indexes for table `vn_tinhthanhpho`
--
ALTER TABLE `vn_tinhthanhpho`
  ADD PRIMARY KEY (`ttp_ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `giohang_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`),
  ADD CONSTRAINT `diachi_ibfk_2` FOREIGN KEY (`px_ma`) REFERENCES `vn_phuongxa` (`px_ma`),
  ADD CONSTRAINT `diachi_ibfk_3` FOREIGN KEY (`qh_ma`) REFERENCES `vn_quanhuyen` (`qh_ma`),
  ADD CONSTRAINT `diachi_ibfk_4` FOREIGN KEY (`ttp_ma`) REFERENCES `vn_tinhthanhpho` (`ttp_ma`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`nv_ma`) REFERENCES `nhanvien` (`nv_ma`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`tk_id`) REFERENCES `taikhoan` (`tk_id`),
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`dvvc_ma`) REFERENCES `donvivanchuyen` (`dvvc_ma`),
  ADD CONSTRAINT `giohang_ibfk_4` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`),
  ADD CONSTRAINT `giohang_ibfk_5` FOREIGN KEY (`diachi_id`) REFERENCES `diachi` (`diachi_id`);

--
-- Constraints for table `hinhmota`
--
ALTER TABLE `hinhmota`
  ADD CONSTRAINT `hinhmota_ibfk_1` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`lsp_ma`) REFERENCES `loaisp` (`lsp_ma`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`ncc_ma`) REFERENCES `nhacungcap` (`ncc_ma`);

--
-- Constraints for table `vn_phuongxa`
--
ALTER TABLE `vn_phuongxa`
  ADD CONSTRAINT `vn_phuongxa_ibfk_1` FOREIGN KEY (`qh_ma`) REFERENCES `vn_quanhuyen` (`qh_ma`);

--
-- Constraints for table `vn_quanhuyen`
--
ALTER TABLE `vn_quanhuyen`
  ADD CONSTRAINT `vn_quanhuyen_ibfk_1` FOREIGN KEY (`ttp_ma`) REFERENCES `vn_tinhthanhpho` (`ttp_ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
