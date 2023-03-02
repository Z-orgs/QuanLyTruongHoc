-- phpMyAdmin SQL Dump

-- version 5.2.0

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Generation Time: Mar 02, 2023 at 07:13 PM

-- Server version: 10.4.27-MariaDB

-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `vin_school`

--

-- --------------------------------------------------------

--

-- Table structure for table `class`

--

CREATE TABLE
    `class` (
        `class_id` int(11) NOT NULL,
        `class_name` varchar(255) NOT NULL,
        `teacher_id` int(11) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `point_student`

--

CREATE TABLE
    `point_student` (
        `point_id` int(11) NOT NULL,
        `point_number` double NOT NULL,
        `point_student_id` int(11) NOT NULL,
        `semester_id` int(11) NOT NULL,
        `subject_id` int(11) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;

-- --------------------------------------------------------

--

-- Table structure for table `schedue`

--

CREATE TABLE
    `schedue` (
        `id` int(11) NOT NULL,
        `teacher_id` int(11) NOT NULL,
        `day` int(11) NOT NULL,
        `kip` int(11) NOT NULL,
        `subject_id` int(11) NOT NULL,
        `class_id` int(11) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;

-- --------------------------------------------------------

--

-- Table structure for table `semester`

--

CREATE TABLE
    `semester` (
        `semester_id` int(11) NOT NULL,
        `semester_name` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `student`

--

CREATE TABLE
    `student` (
        `student_id` int(11) NOT NULL,
        `student_name` varchar(255) NOT NULL,
        `student_phone` varchar(255) NOT NULL,
        `student_address` varchar(255) NOT NULL,
        `class_id` int(11) NOT NULL,
        `student_birth_day` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;

-- --------------------------------------------------------

--

-- Table structure for table `subject`

--

CREATE TABLE
    `subject` (
        `subject_id` int(11) NOT NULL,
        `subject_name` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `teacher`

--

CREATE TABLE
    `teacher` (
        `teacher_id` int(11) NOT NULL,
        `teacher_name` varchar(255) NOT NULL,
        `teacher_email` varchar(255) NOT NULL,
        `teacher_phone` varchar(255) NOT NULL,
        `class_id` int(11) NOT NULL,
        `teacher_address` varchar(255) NOT NULL,
        `teacher_birth_day` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;

-- --------------------------------------------------------

--

-- Table structure for table `user`

--

CREATE TABLE
    `user` (
        `user_id` int(11) NOT NULL,
        `user_full` varchar(255) NOT NULL,
        `user_mail` varchar(255) NOT NULL,
        `user_pass` varchar(255) NOT NULL,
        `user_level` int(1) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;

--

-- Dumping data for table `user`

--

INSERT INTO
    `user` (
        `user_id`,
        `user_full`,
        `user_mail`,
        `user_pass`,
        `user_level`
    )
VALUES (
        2,
        'Admin',
        'admin@gmail.com',
        '123456',
        1
    );

--

-- Indexes for dumped tables

--

--

-- Indexes for table `class`

--

ALTER TABLE `class`
ADD PRIMARY KEY (`class_id`),
ADD
    KEY `teacher_id` (`teacher_id`);

--

-- Indexes for table `point_student`

--

ALTER TABLE `point_student`
ADD PRIMARY KEY (`point_id`),
ADD
    KEY `semester_id` (`semester_id`),
ADD
    KEY `student_id` (`point_student_id`);

--

-- Indexes for table `schedue`

--

ALTER TABLE `schedue`
ADD PRIMARY KEY (`id`),
ADD
    KEY `subject_id` (`subject_id`),
ADD
    KEY `class_id` (`class_id`),
ADD
    KEY `teacher_id` (`teacher_id`);

--

-- Indexes for table `semester`

--

ALTER TABLE `semester` ADD PRIMARY KEY (`semester_id`);

--

-- Indexes for table `student`

--

ALTER TABLE `student`
ADD
    PRIMARY KEY (`student_id`),
ADD
    UNIQUE KEY `student_phone` (`student_phone`),
ADD KEY `class_id` (`class_id`);

--

-- Indexes for table `subject`

--

ALTER TABLE `subject` ADD PRIMARY KEY (`subject_id`);

--

-- Indexes for table `teacher`

--

ALTER TABLE `teacher`
ADD
    PRIMARY KEY (`teacher_id`),
ADD
    UNIQUE KEY `teacher_email` (`teacher_email`),
ADD
    UNIQUE KEY `teacher_phone` (`teacher_phone`),
ADD
    KEY `FK_teacher_class` (`class_id`);

--

-- Indexes for table `user`

--

ALTER TABLE `user`
ADD PRIMARY KEY (`user_id`),
ADD
    UNIQUE KEY `user_mail` (`user_mail`);

--

-- Constraints for dumped tables

--

--

-- Constraints for table `class`

--

ALTER TABLE `class`
ADD
    CONSTRAINT `class_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--

-- Constraints for table `point_student`

--

ALTER TABLE `point_student`
ADD
    CONSTRAINT `point_student_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`),
ADD
    CONSTRAINT `point_student_ibfk_2` FOREIGN KEY (`point_student_id`) REFERENCES `student` (`student_id`);

--

-- Constraints for table `schedue`

--

ALTER TABLE `schedue`
ADD
    CONSTRAINT `schedue_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
ADD
    CONSTRAINT `schedue_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
ADD
    CONSTRAINT `schedue_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--

-- Constraints for table `student`

--

ALTER TABLE `student`
ADD
    CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--

-- Constraints for table `teacher`

--

ALTER TABLE `teacher`
ADD
    CONSTRAINT `FK_teacher_class` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;