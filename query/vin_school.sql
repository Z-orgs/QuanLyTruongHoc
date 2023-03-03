-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 02:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vin_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `teacher_id`) VALUES
(1, '6A', 1),
(2, '6B', 2),
(3, '6C', 3),
(4, '6D', 4),
(5, '7A', 5),
(6, '7B', 6),
(7, '7C', 7),
(8, '7D', 8),
(9, '8A', 9),
(10, '8B', 10),
(11, '8C', 11),
(12, '8D', 12),
(13, '9A', 13),
(14, '9B', 14),
(15, '9C', 15),
(16, '9D', 16);

-- --------------------------------------------------------

--
-- Table structure for table `point_student`
--

CREATE TABLE `point_student` (
  `point_id` int(11) NOT NULL,
  `point_number` double NOT NULL,
  `point_student_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `point_student`
--

INSERT INTO `point_student` (`point_id`, `point_number`, `point_student_id`, `semester_id`, `subject_id`) VALUES
(6, 8, 1, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `schedue`
--

CREATE TABLE `schedue` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `kip` int(11) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedue`
--

INSERT INTO `schedue` (`id`, `teacher_id`, `day`, `kip`, `subject_id`, `class_id`) VALUES
(41, 4, 3, 1, '2', 1),
(42, 4, 4, 1, '7', 1),
(50, 9, 2, 1, '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`) VALUES
(3, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_birth_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_phone`, `student_address`, `class_id`, `student_birth_day`) VALUES
(1, 'Student 1', '0987654321', 'Address 1', 1, '2011-01-01'),
(2, 'Student 2', '0987654322', 'Address 2', 1, '2011-02-02'),
(3, 'Student 3', '0987654323', 'Address 3', 1, '2011-03-03'),
(4, 'Student 4', '0987654324', 'Address 4', 1, '2011-04-04'),
(5, 'Student 5', '0987654325', 'Address 5', 1, '2011-05-05'),
(6, 'Student 6', '0987654326', 'Address 6', 1, '2011-06-06'),
(7, 'Student 7', '0987654327', 'Address 7', 1, '2011-07-07'),
(8, 'Student 8', '0987654328', 'Address 8', 1, '2011-08-08'),
(9, 'Student 9', '0987654329', 'Address 9', 1, '2011-09-09'),
(10, 'Student 10', '0987654330', 'Address 10', 1, '2011-10-10'),
(11, 'Student 11', '0987654331', 'Address 11', 1, '2011-11-11'),
(12, 'Student 12', '0987654332', 'Address 12', 1, '2011-12-12'),
(13, 'Student 13', '0987654333', 'Address 13', 1, '2011-01-13'),
(14, 'Student 14', '0987654334', 'Address 14', 1, '2011-02-14'),
(15, 'Student 15', '0987654335', 'Address 15', 1, '2011-03-15'),
(16, 'Student 16', '0987654336', 'Address 16', 1, '2011-04-16'),
(17, 'Student 17', '0987654337', 'Address 17', 1, '2011-05-17'),
(18, 'Student 18', '0987654338', 'Address 18', 1, '2011-06-18'),
(19, 'Student 19', '0987654339', 'Address 19', 1, '2011-07-19'),
(20, 'Student 20', '0987654340', 'Address 20', 1, '2011-08-20'),
(21, 'Student 21', '0987654341', 'Address 21', 1, '2011-09-21'),
(22, 'Student 22', '0987654342', 'Address 22', 1, '2011-10-22'),
(23, 'Student 23', '0987654343', 'Address 23', 1, '2011-11-23'),
(24, 'Student 24', '0987654344', 'Address 24', 1, '2011-12-24'),
(25, 'Student 25', '0987654345', 'Address 25', 1, '2011-01-25'),
(26, 'Student 26', '0987654346', 'Address 26', 1, '2011-02-26'),
(27, 'Student 27', '0987654347', 'Address 27', 1, '2011-03-27'),
(28, 'Student 28', '0987654348', 'Address 28', 1, '2011-04-28'),
(29, 'Student 29', '0987654349', 'Address 29', 1, '2011-05-29'),
(30, 'Student 30', '0987654350', 'Address 30', 1, '2011-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(1, 'Toán học'),
(2, 'Ngữ Văn'),
(3, 'Lịch Sử'),
(4, 'Địa Lý'),
(5, 'Hóa Học'),
(6, 'Vật Lý'),
(7, 'Sinh Học'),
(8, 'Tiếng Anh'),
(9, 'Tiếng Pháp'),
(10, 'Giáo Dục Công Dân'),
(11, 'Công Nghệ'),
(12, 'Thể Dục');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_phone` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_address` varchar(255) NOT NULL,
  `teacher_birth_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_phone`, `class_id`, `teacher_address`, `teacher_birth_day`) VALUES
(1, 'Nguyễn Thành Trung', 'nguyenthanhtrung@example.com', '0987654321', 1, '123 Đường Hồng Bàng, Quận 5, TP.HCM', '01/01/1980'),
(2, 'Trương Thị Sen', 'truongsensmile@example.com', '0999999999', 2, '456 Đường Lê Văn Việt, Quận 9, TP.HCM', '02/02/1981'),
(3, 'Lê Công Tâm', 'lecongtam@example.com', '0909090909', 3, '789 Đường Nguyễn Đình Chiểu, Quận 1, TP.HCM', '03/03/1982'),
(4, 'Trần Thanh Tùng', 'tranthanhtung@example.com', '0912345678', 4, '0123 Đường Thủ Khoa Huân, Quận 1, TP.HCM', '04/04/1983'),
(5, 'Vũ Thị Nga', 'vuthinga@example.com', '0866666666', 5, '345 Đường Phạm Văn Đồng, Quận Tân Bình, TP.HCM', '05/05/1984'),
(6, 'Bùi Văn Khải', 'buivankhai@example.com', '0922222222', 6, '67 Đường Trần Quang Khải, Quận 1, TP.HCM', '06/06/1985'),
(7, 'Quách Minh Thuận', 'quachminhthuan@example.com', '0888888888', 7, '90 Đường Lê Duẩn, Quận 1, TP.HCM', '07/07/1986'),
(8, 'Phan Lâm Hoàng Long', 'lamhoanglong@example.com', '0777777777', 8, '23 Đường Ba Hom, Quận 6, TP.HCM', '08/08/1987'),
(9, 'Trần Thế Anh', 'trananh@example.com', '0666666666', 9, '567 Đường Lê Hồng Phong, Quận 10, TP.HCM', '09/09/1988'),
(10, 'Ngô Ngọc Tiên', 'ngngoctien@example.com', '0555555555', 10, '89 Đường Hậu Giang, Quận 6, TP.HCM', '10/10/1989'),
(11, 'Hồ Chí Huy', 'bachihu@example.com', '0911111111', 11, '28 Đường Lý Tự Trọng, Quận 1, TP.HCM', '11/11/1990'),
(12, 'Phí Kim Ngân', 'phikimngan@example.com', '0923456789', 12, '56 Đường Bà Triệu, Quận 5, TP.HCM', '12/12/1991'),
(13, 'Lê Đức Tuấn', 'leductuan@example.com', '0111222333', 13, '123 Đường Bến Vân Đồn, Quận 4, TP.HCM', '13/01/1992'),
(14, 'Dương Kiều Oanh', 'duongkieuoanh@example.com', '0707070707', 14, '345 Đường Nguyễn Chí Thanh, Quận 10, TP.HCM', '14/02/1993'),
(15, 'Đỗ Như Hạnh', 'donuhanh@example.com', '0357908642', 15, '90 Đường Nguyễn Hữu Cầu, Quận 5, TP.HCM', '15/03/1994'),
(16, 'Lại Trọng Hiếu', 'laitronghieu@example.com', '0333224455', 16, '98 Đường Huỳnh Văn Bánh, Quận Phú Nhuận, TP.HCM', '16/04/1995');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_full` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_full`, `user_mail`, `user_pass`, `user_level`) VALUES
(2, 'Admin', 'admin@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `point_student`
--
ALTER TABLE `point_student`
  ADD PRIMARY KEY (`point_id`);

--
-- Indexes for table `schedue`
--
ALTER TABLE `schedue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_phone` (`student_phone`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teacher_email` (`teacher_email`),
  ADD UNIQUE KEY `teacher_phone` (`teacher_phone`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `point_student`
--
ALTER TABLE `point_student`
  MODIFY `point_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedue`
--
ALTER TABLE `schedue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
