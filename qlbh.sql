-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 11, 2020 lúc 09:07 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdonhang`
--

DROP TABLE IF EXISTS `ctdonhang`;
CREATE TABLE IF NOT EXISTS `ctdonhang` (
  `sodh` int(11) NOT NULL,
  `mahoa` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  PRIMARY KEY (`sodh`,`mahoa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdonhang`
--

INSERT INTO `ctdonhang` (`sodh`, `mahoa`, `soluong`, `dongia`, `thanhtien`) VALUES
(1, 7, 1, 250000, 250000),
(1, 8, 1, 220000, 220000),
(1, 9, 1, 260000, 260000),
(2, 20, 1, 50000, 50000),
(2, 21, 1, 120000, 120000),
(2, 22, 1, 110000, 110000),
(3, 7, 1, 250000, 250000),
(3, 8, 1, 220000, 220000),
(3, 9, 1, 260000, 260000),
(4, 8, 1, 220000, 220000),
(4, 9, 1, 260000, 260000),
(4, 10, 1, 180000, 180000),
(5, 14, 1, 85000, 85000),
(5, 15, 1, 100000, 100000),
(5, 16, 1, 75000, 75000),
(6, 7, 1, 250000, 250000),
(6, 8, 1, 220000, 220000),
(7, 13, 1, 120000, 120000),
(7, 14, 1, 85000, 85000),
(7, 15, 1, 100000, 100000),
(12, 1, 6, 50000, 300000),
(12, 2, 2, 60000, 120000),
(14, 1, 6, 50000, 300000),
(14, 2, 1, 60000, 60000),
(14, 3, 4, 45000, 180000),
(15, 1, 10, 50000, 500000),
(15, 2, 1, 60000, 60000),
(16, 1, 10, 50000, 500000),
(16, 2, 1, 60000, 60000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `sodh` int(11) NOT NULL AUTO_INCREMENT,
  `ngaydh` date NOT NULL,
  `makh` int(11) DEFAULT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  PRIMARY KEY (`sodh`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`sodh`, `ngaydh`, `makh`, `hoten`, `diachi`, `email`, `dienthoai`, `trangthai`) VALUES
(1, '2019-05-25', 0, 'Vo', 'cmt8', 'tan9700721@yahoo.com', '+842873056886', 1),
(2, '2019-05-25', 7, 'Võ Ngọc Tân', 'cmt8', 'tanvn@uit.edu.vn', '09085434333', 1),
(3, '2019-05-25', 7, 'Võ Ngọc Tân', 'cmt8', 'tanvn@uit.edu.vn', '09085434333', 1),
(4, '2019-05-25', 7, 'Võ Ngọc Tân', 'cmt8', 'tanvn@uit.edu.vn', '09085434333', 1),
(5, '2019-05-25', 7, 'Võ Ngọc Tân', 'cmt8', 'tanvn@uit.edu.vn', '09085434333', 1),
(6, '2019-06-01', 7, 'Võ Ngọc Tân', 'cmt8', 'tanvn@uit.edu.vn', '09085434333', 1),
(7, '2019-06-01', 7, 'Võ Ngọc Tân', 'cmt8', 'tanvn@uit.edu.vn', '09085434333', 1),
(13, '2020-07-11', 9, 'test1', 'hoang', '123@gmail.com', '01234556', 1),
(14, '2020-07-11', 9, 'Nhâm Khải Hoàng', 'uit', '17520517@gm.uit.edu.vn', '0123456789', 1),
(16, '2020-07-11', 20, 'Nhâm Khải Hoàng', 'uit', '17520517@gm.uit.edu.vn', '0907289432', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa`
--

DROP TABLE IF EXISTS `hoa`;
CREATE TABLE IF NOT EXISTS `hoa` (
  `mahoa` int(11) NOT NULL AUTO_INCREMENT,
  `maloai` int(11) DEFAULT NULL,
  `tenhoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`mahoa`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa`
--

INSERT INTO `hoa` (`mahoa`, `maloai`, `tenhoa`, `dongia`, `hinh`, `mota`) VALUES
(1, 1, 'Đón xuân', 50000, 'cuc_9.jpg', 'Hoa cúc các màu: trắng, vàng, cam'),
(2, 1, 'Hồn nhiên', 60000, 'cuc_2.jpg', 'Hoa cúc vàng, cam. lá măng'),
(3, 1, 'Tím thuỷ chung', 45000, 'cuc_3.jpg', 'Hoa cúc tím'),
(4, 1, 'Nét duyên tím hoa cà', 40000, 'cuc_4.jpg', 'Hoa cúc màu tím nhạt'),
(5, 1, 'Cùng khoe sắc', 70000, 'cuc_5.jpg', 'Hoa cúc các màu: trắng, vàng, cam'),
(6, 1, 'Trắng thơ ngây', 65000, 'cuc_6.jpg', 'Hoa cúc trắng'),
(7, 2, 'Dây tơ hồng', 250000, 'cuoi_1.jpg', 'Hoa hồng màu hồng đậm, hoa hồng xanh, các loại lá măng'),
(8, 2, 'Cầu thuỷ tinh', 220000, 'cuoi_2.jpg', 'Hoa hồng và hoa thuỷ tiên trắng'),
(9, 2, 'Duyên thầm', 260000, 'cuoi_3.jpg', 'Hoa cúc trắng, baby, lá măng'),
(10, 2, 'Ðâm chồi nảy lộc', 180000, 'cuoi_4.jpg', 'Hoa hồng trắng và các loại lá măng'),
(11, 2, 'Hoà quyện', 270000, 'cuoi_5.jpg', 'Hoa hồng trắng, lá thuỷ tùng'),
(12, 2, 'Nồng nàn', 210000, 'cuoi_6.jpg', 'Hoa hồng đỏ, lá thuỷ tùng, lá măng'),
(13, 3, 'Together', 120000, 'hong_1.jpg', 'Hồng xác pháo, cúc tím'),
(14, 3, 'Long trip', 85000, 'hong_2.jpg', 'Hoa hồng đỏ, lá kim thuỷ tùng'),
(15, 3, 'Beautiful life', 100000, 'hong_3.jpg', 'Hoa hồng đỏ, lá măng, lá đệm'),
(16, 3, 'Morning Sun', 75000, 'hong_4.jpg', 'Hoa hồng vàng'),
(17, 3, 'Pretty Bloom', 65000, 'hong_5.jpg', 'Hoa hồng trắng và lá thông'),
(18, 3, 'Red Rose', 45000, 'hong_7.jpg', 'Hoa hồng đỏ và lá măng'),
(19, 4, 'Vấn vuơng', 150000, 'xuan_1.jpg', 'Hoa hồng đỏ, hồng đậm, cúc đỏ, các loại lá'),
(20, 4, 'Nắng nhẹ nhàng', 50000, 'xuan_2.jpg', 'Hoa cúc xanh, hoa lys vàng, lá đệm'),
(21, 4, 'Thanh tao', 120000, 'xuan_3.jpg', 'Hoa thủy tiên, cúa trắng, cúc dại tím, các loại lá đệm'),
(22, 4, 'Tinh khiết', 110000, 'xuan_4.jpg', 'Hồng trắng và salem'),
(23, 4, 'Mùa xuân chín', 150000, 'xuan_5.jpg', 'Hồmg cam, cúc xanh, thuỷ tiên và các loại lá'),
(24, 4, 'Rực rở nắng vàng', 75000, 'xuan_6.jpg', 'Hồng vàng và cúc vàng'),
(25, 3, 'Love Candy', 95000, 'hong_13.jpg', 'Hoa hồng trắng tinh khôi xen với hoa hồng màu hồng nhạt, điểm thêm baby trắng và lá măng'),
(26, 2, 'Happy Wedding', 210000, 'cuoi_9.jpg', 'Hoa hồng môn và các loại lá'),
(27, 1, 'Cúc nhiệt đới', 150000, 'cuc_15.jpg', 'Cúc vàng - hồng cam - lá măng'),
(44, 3, 'Hồng đẹp', 999999, 'hong.jpg', 'hồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `Makh` int(11) NOT NULL AUTO_INCREMENT,
  `TenDN` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Makh`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Makh`, `TenDN`, `MatKhau`, `HoTen`, `DiaChi`, `DienThoai`, `Email`) VALUES
(1, 'phuong', 'phuong', 'Khuất Thuỷ Phuơng', '357 Lê Hồng Phong Q.5', '0989247123', 'ktphuong@hcmuns.edu.vn'),
(2, 'cuong', 'cuong', 'Chung Quốc Cuờng', '1bis Nguyễn Văn Trổi Q.1', '0912345678', 'cqcuong@hcmuns.edu.vn'),
(3, 'tung', 'tung', 'Lưu Hải Tùng', '1 Mạc Đỉnh Chi Q.1', '0989766569', 'lhtung@yahoo.com'),
(4, 'dlthien', 'dlthien', 'Đỗ Lâm Thiên', '357 Lê Hồng Phong Q.10', '0903123456', 'dlthien@hcmuns.edu.vn'),
(5, 'thanh', 'thanh', 'Nguyễn Ngọc Thanh', '357 Lê Hồng Phong Q.10', '0903456789', 'lthanh@hcmuns.edu.vn'),
(7, 'vntan', '123', 'Võ Ngọc Tân', 'cmt8', '09085434333', 'tanvn@uit.edu.vn'),
(8, 'hoang01', '123456', 'hoang01', 'uit', '0123456', 'hoang01@gmail.com'),
(9, 'admin', '17520517', 'Nhâm Khải Hoàng', 'hoangcld99@gmail.com', 'uit', '0123456'),
(20, 'admin', '17520517', 'Nhâm Khải Hoàng', '17520517@gm.uit.edu.vn', 'uit', '0123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihoa`
--

DROP TABLE IF EXISTS `loaihoa`;
CREATE TABLE IF NOT EXISTS `loaihoa` (
  `Maloai` int(11) NOT NULL AUTO_INCREMENT,
  `Tenloai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Maloai`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihoa`
--

INSERT INTO `loaihoa` (`Maloai`, `Tenloai`) VALUES
(1, 'Hoa cúc'),
(2, 'Hoa cưới'),
(3, 'Hoa hồng'),
(4, 'Hoa xuân');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
