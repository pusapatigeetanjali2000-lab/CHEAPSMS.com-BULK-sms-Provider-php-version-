-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2026 at 10:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ind_users`
--

CREATE TABLE `ind_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_code` varchar(10) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(99) NOT NULL,
  `selected` varchar(999) NOT NULL,
  `razorpay_payment_id` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ind_users`
--

INSERT INTO `ind_users` (`id`, `full_name`, `email`, `phone_code`, `mobile`, `country`, `city`, `created_at`, `password`, `selected`, `razorpay_payment_id`) VALUES
(1, 'Naresh Muthyala', 'muthyala19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 08:35:01', '$2y$10$09ebP5yzpRCp3D3xwUC7GOtB7b3ihsADBNnXG1KvEo0tj8EP9FERu', '', 'rzp_123456'),
(3, 'Naresh Muthyala', 'muthyala19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 08:44:49', '$2y$10$UwSxcgHzInLwvVixGSklreYqsFTdQ/bi5HqjTogStnSKmB1e23Hhu', '\n    Quantity: 10,000, Paisa: 25p, Total: ₹2,500', ''),
(4, 'Naresh Muthyala', 'muthyaldfa19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:03:07', '$2y$10$dJ68jWS4XMxHKeanD967Q.TlRiC44OLL4IaT/j6RRjo4nolu5DgMu', '\n    Quantity: 50,000, Paisa: 18p, Total: ₹9,000', ''),
(5, 'Naresh Muthyala', 'muthyda19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:03:30', '$2y$10$7X/xtUPisYy6ZaN9r1xXeO/urZK53AH0VNBGIp8elD6Wm/ANCIf0i', '\n    Quantity: 50,000, Paisa: 18p, Total: ₹9,000', ''),
(6, 'Naresh Muthyala', 'muthyald@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:03:45', '$2y$10$YMbwKVi36ZoqlLvh0IaYVe9ZQrC7scwzGdPwbZFuD45Zdafqk2uky', '\n    Quantity: 50,000, Paisa: 18p, Total: ₹9,000', ''),
(7, 'Naresh Muthyala', 'muthyalf19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:04:04', '$2y$10$bTtcP5vOF7hLZ43tjyKA4.Lks9zz7npqw7BWE/KeF1pRnJPFMRHdC', '\n    Quantity: 50,000, Paisa: 22p, Total: ₹11,000', ''),
(8, 'Naresh Muthyala', 'muthyaldfa19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:04:26', '$2y$10$NNTemM8ixJTU0AIBfKtaF.W9xb3uH7I7x.z0mxvdF5C4ikyXgD1TK', '\n    Quantity: 50,000, Paisa: 22p, Total: ₹11,000', ''),
(9, 'Naresh Muthyala', '1muthyala19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:04:46', '$2y$10$in6qU1QmNzNGzAN52b9JAO0.O.3LPTUxokD/EFphNQ2GCqa8UY2rC', '\n    Quantity: 50,000, Paisa: 22p, Total: ₹11,000', ''),
(10, 'Naresh Muthyala', 'muthdyala19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:05:21', '$2y$10$5XJUf831bUDHB6YDDoTnj./o0GRcgo2k0QM9PXzDHPtmpRycHtvWm', '\n    Quantity: 50,000, Paisa: 22p, Total: ₹11,000', ''),
(11, 'Naresh Muthyala', 'muthyala0019@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-26 10:05:46', '$2y$10$JgWBjaTsKHRSQuavL0QmM.xJ5BpvnIIfB7tUrVpXqUqubVZvoxYWy', '\n    Quantity: 50,000, Paisa: 22p, Total: ₹11,000', ''),
(12, 'Naresh Muthyala', 'muthyal212121a19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-29 04:51:17', '$2y$10$YHR07rStQJuBJTKwR7fKdeMm2NDFeS2jKypvllrL20XV0k9AvRE7e', '\n    Quantity: 1,00,000, Paisa: 20p, Total: ₹20,000', ''),
(13, 'Naresh Muthyala', 'muthyalkjka19@gmail.com', '+91', '9553196591', 'India', 'Hyderabad', '2026-04-29 04:58:23', '$2y$10$Znhj/u9SyRpO6rzxU1qSV.CC6df6vEBcchIdD.2iMhR3PDmPVqlnS', '\n    Quantity: 50,000, Paisa: 22p, Total: ₹11,000', 'sdfasdfdf123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `token_expiry` datetime DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `company_location` varchar(200) DEFAULT NULL,
  `primary_service` varchar(100) DEFAULT NULL,
  `interested_services` text DEFAULT NULL,
  `volume_estimate` varchar(50) DEFAULT NULL,
  `sending_country` varchar(100) DEFAULT NULL,
  `receiving_country` varchar(100) DEFAULT NULL,
  `razorpay_payment_id` varchar(100) DEFAULT NULL,
  `razorpay_order_id` varchar(100) DEFAULT NULL,
  `payment_status` enum('pending','completed','failed') DEFAULT 'pending',
  `amount_paid` decimal(10,2) DEFAULT 5.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `reset_token`, `token_expiry`, `country_code`, `mobile`, `country`, `company_name`, `company_location`, `primary_service`, `interested_services`, `volume_estimate`, `sending_country`, `receiving_country`, `razorpay_payment_id`, `razorpay_order_id`, `payment_status`, `amount_paid`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Naresh Muthyala', 'muthyala19@gmail.com', '$2y$10$D7qTrAyI6iXY/FGG7IJkhOKzOx1vepC7H0A2ORTmUCGEV7SfnaRiK', '914493fc8bc47299fd1dc463750f7e8f9728e8fdc5e00adee5bf6be43eb154df', '2026-04-21 16:37:11', '+91', '9553196591', 'India', 'sdaf', 'sdf', 'Promo / Marketing', 'Array', '', 'Australia', 'Germany', NULL, NULL, 'pending', 5.00, '2026-04-18 13:48:37', '2026-04-21 13:37:11', ''),
(2, 'Naresh Muthyala', 'muthyala11@gmail.com', '$2y$10$cNN.aLU0OOUKJgJBMMIXAe9na275f5w/1gOf/We0JN1scacxruFWG', NULL, NULL, '+91', '9553196591', 'India', 'c', 'hyd', 'Tran / OTP / Utility', 'Array', '', 'Malaysia', 'Malaysia', NULL, NULL, 'pending', 5.00, '2026-04-22 13:43:15', '2026-04-22 13:43:15', ''),
(3, 'Naresh Muthyala', 'muthyala10@gmail.com', '$2y$10$iqPy1csQI3decblyjG.Vk.YSOQR.p0sfz4fCEJXtDbr2ox/EJUmLS', NULL, NULL, '+91', '9553196591', 'India', 'c', 'hyd', 'Tran / OTP / Utility', 'Array', '', 'Malaysia', 'Malaysia', NULL, NULL, 'pending', 5.00, '2026-04-22 13:49:21', '2026-04-22 13:49:21', ''),
(4, 'Naresh Muthyala', 'muthyala00@gmail.com', '$2y$10$NrAhLCbvlzAlxmrTSf2t/uAgpiuItwM66gT0e5oRLNhyVr375FwTG', NULL, NULL, '+91', '9553196591', 'India', 'ccccccccc', 'city', 'Promo / Marketing', 'Array', '', 'United Kingdom', 'Qatar', NULL, NULL, 'pending', 5.00, '2026-04-22 13:52:31', '2026-04-22 13:52:31', ''),
(5, 'Naresh Muthyala', 'muthyala88@gmail.com', '$2y$10$vQsX7kXPN7VoCUbtpsCi7uAtLGMK1fXXy1ew.WH82Ds5yob6MrDhi', NULL, NULL, '+91', '9553196591', 'India', 'ccccccccc', 'city', 'Promo / Marketing', 'Promo / Marketing SMS, WhatsApp Business API(META), RCS Messaging', '', 'United Kingdom', 'Qatar', NULL, NULL, 'pending', 5.00, '2026-04-22 13:55:39', '2026-04-22 13:55:39', ''),
(6, 'Naresh Muthyala', 'muthyala77@gmail.com', '$2y$10$YkBLpOsHJQl3uM9cAzbEIu32Q.UP49QkH50K2BuJxgPGk667ODSSy', NULL, NULL, '+91', '9553196591', 'India', 'ccccccccc', 'city', 'Promo / Marketing', 'Promo / Marketing SMS, WhatsApp Business API(META), RCS Messaging', '', 'United Kingdom', 'Qatar', NULL, NULL, 'pending', 5.00, '2026-04-22 13:58:33', '2026-04-22 13:58:33', ''),
(7, 'Naresh Muthyala', 'muthyala33@gmail.com', '$2y$10$HqSb.vzHIMiTzFLxVvPGU.gA9sNkPUiGxyNV8Q5Ak07XnrZcuaq6S', NULL, NULL, '+91', '9553196591', 'India', 'ccc', 'city', 'Promo / Marketing', 'Promo / Marketing SMS, Bulk WhatsApp, WhatsApp Business API(META), RCS Messaging', '', 'Malaysia', 'Singapore', NULL, NULL, 'pending', 5.00, '2026-04-22 14:01:45', '2026-04-22 14:01:45', ''),
(8, 'Naresh Muthyala', 'muthyala55@gmail.com', '$2y$10$CaTmR8mQEemKHkxOvImt8.3/PjxkGpsxB.sXbmvpkudw8abq8BFGe', NULL, NULL, '+91', '9553196591', 'India', 'c', 'hyd', '🎙️ Voice Broadcasting', 'Promo / Marketing SMS, Bulk WhatsApp, WhatsApp Business API(META)', '', 'United Kingdom', 'United Arab Emirates', NULL, NULL, 'pending', 5.00, '2026-04-22 14:04:16', '2026-04-22 14:04:16', ''),
(9, 'Naresh Muthyala', 'muthyala44@gmail.com', '$2y$10$.hq2y4Rs0xJ8pvUNpmhcHO2vzHnJ2Gm6yqUY/xT0zCawMFIK0vXae', NULL, NULL, '+91', '9553196591', 'India', 'c', 'hyd', '🎙️ Voice QOS', 'Promo / Marketing SMS, Tran / OTP / Utility SMS, Gaming / Casino SMS, Two Way SMS', '', 'Canada', 'France', NULL, NULL, 'pending', 5.00, '2026-04-22 14:05:37', '2026-04-22 14:05:37', ''),
(10, 'Naresh Muthyala', 'muthyala233@gmail.com', '$2y$10$377k5VoClsZSlhCrO3mXXuNsanKnoCIIo051qLFDFOiXj8TjJZ.dC', NULL, NULL, '+91', '9553196591', 'India', 'cc', 'hyd', '🎙️ Voice QOS', 'Promo / Marketing SMS, Tran / OTP / Utility SMS', '10K – 100K', 'Malaysia', 'Singapore', NULL, NULL, 'pending', 5.00, '2026-04-22 14:07:24', '2026-04-22 14:17:45', ''),
(11, 'Naresh Muthyala', 'muthyala22@gmail.com', '$2y$10$5hq9fe90csOY9gtgYsd0qurkhaLk/0UVI63n.2kK/6ORnkflv0e0y', NULL, NULL, '+91', '9553196591', 'India', 'company', 'hyd', 'Promo / Marketing', 'Promo / Marketing SMS, Tran / OTP / Utility SMS, Gaming / Casino SMS', '0.1M – 1M', 'France', 'France', NULL, NULL, 'pending', 5.00, '2026-04-22 14:18:25', '2026-04-22 14:18:25', ''),
(12, 'Naresh Muthyala', 'muthyala119@gmail.com', '$2y$10$jZqJzpiXDw26xiUUhqG/ne/3MaxfjyZkL84QJgVDXnWDRO8DawVo.', NULL, NULL, '+91', '9553196591', 'India', 'c', 'hyd', '📞 SIP Trunks / TDM', 'Promo / Marketing SMS, Tran / OTP / Utility SMS', '0.1M – 1M', 'United Arab Emirates', 'Saudi Arabia', NULL, NULL, 'pending', 5.00, '2026-04-22 14:28:13', '2026-04-22 14:28:13', ''),
(13, 'Naresh Muthyala', 'muthyala1d9@gmail.com', '$2y$10$tMQnMf26tmeKMvmtnU36LeGCprFxOIVbcEiqXkfliJ3e6iuBgm.tK', NULL, NULL, '+91', '9553196591', 'India', 'ddd', 'hyd', 'Tran / OTP / Utility', 'Bulk WhatsApp, WhatsApp Business API(META)', '1M – 10M', 'United Kingdom', 'United Kingdom', NULL, NULL, 'pending', 5.00, '2026-04-22 14:33:07', '2026-04-22 14:33:07', ''),
(14, 'Naresh Muthyala', 'muthsdfyala19@gmail.com', '$2y$10$UugsOxOPNQ60XjtQXUl4FuTPQwXUT05rs8i9I7to16Tu7gEEWSNLO', NULL, NULL, '+91', '9553196591', 'India', 'sd', 'sdf', '📟 Toll-Free Numbers', 'Promo / Marketing SMS, Tran / OTP / Utility SMS', '0.1M – 1M', 'Malaysia', 'Malaysia', NULL, NULL, 'pending', 5.00, '2026-04-22 15:27:50', '2026-04-22 15:27:50', ''),
(15, 'Naresh Muthyala', 'muthsdfsdfyala19@gmail.com', '$2y$10$wRRd0RA9hzUGwvC/ZWquB.ulZCLUCBi5sdF5P9GRhEy6m0Slg198O', NULL, NULL, '+91', '9553196591', 'India', 'sd', 'sdf', '📟 Toll-Free Numbers', 'Promo / Marketing SMS, Tran / OTP / Utility SMS', '0.1M – 1M', 'Malaysia', 'Malaysia', NULL, NULL, 'pending', 5.00, '2026-04-22 15:28:38', '2026-04-22 15:28:38', ''),
(16, 'Naresh Muthyala', 'msdfuthyala19@gmail.com', '$2y$10$7zbYTjuRVZDT7jsyIS5CBOFD9Ww6MROnbeYm/pvXLfw5T1T4nvO.e', NULL, NULL, '+91', '9553196591', 'India', 's', 's', 'Promo / Marketing', 'Gaming / Casino SMS', '0.1M – 1M', 'United States', 'United States', NULL, NULL, 'pending', 5.00, '2026-04-22 15:35:23', '2026-04-22 15:35:23', ''),
(17, 'Naresh Muthyala', 'msdfusdfthyala19@gmail.com', '$2y$10$Aundc./lBjwaYeh2R0ZqQ.5LFTXTTjRYbeboG.fWvjyYH68tvonpi', NULL, NULL, '+91', '9553196591', 'India', 's', 's', 'Promo / Marketing', 'Gaming / Casino SMS', '0.1M – 1M', 'United States', 'United States', NULL, NULL, 'pending', 5.00, '2026-04-22 15:37:41', '2026-04-22 15:37:41', ''),
(19, 'Naresh Muthyala', 'sdf19@gmail.com', '$2y$10$COTSFVDDHdDzIOYkrog6suY7VCkfwB8T3ALM1FX/xTsdCc9wwqeZC', NULL, NULL, '+91', '9553196591', 'India', 's', 's', 'Promo / Marketing', 'Gaming / Casino SMS', '0.1M – 1M', 'United States', 'United States', NULL, NULL, 'pending', 5.00, '2026-04-22 15:38:23', '2026-04-22 15:38:23', ''),
(21, 'Naresh Muthyala', 'sdsdff19@gmail.com', '$2y$10$Y9c.SPT2KO/eSiH7pAdJbOuSl9f2lZE/LR8.ymzK98JdRSnK5GmyC', NULL, NULL, '+91', '9553196591', 'India', 's', 's', 'Promo / Marketing', 'Gaming / Casino SMS', '0.1M – 1M', 'United States', 'United States', NULL, NULL, 'pending', 5.00, '2026-04-22 15:38:56', '2026-04-22 15:38:56', ''),
(22, 'Naresh Muthyala', 'sdfsdf34@gmail.com', '$2y$10$v76HFBfI3.QcPZ1NeiLp9.aQDf6QDaySIEJvMxHei3eXPMwVnqmg.', NULL, NULL, '+91', '9553196591', 'India', 's', 's', 'Promo / Marketing', 'Gaming / Casino SMS', '0.1M – 1M', 'United States', 'United States', NULL, NULL, 'pending', 5.00, '2026-04-22 15:41:21', '2026-04-22 15:41:21', ''),
(23, 'Naresh Muthyala', 'sdfsd4@gmail.com', '$2y$10$H2PKGyDNbwMeq8iMN4orruqmDZ6.UzXd6xYHd.OHUbM5AoEtV.huu', NULL, NULL, '+91', '9553196591', 'India', 's', 's', 'Promo / Marketing', 'Gaming / Casino SMS', '0.1M – 1M', 'United States', 'United States', NULL, NULL, 'pending', 5.00, '2026-04-22 15:43:50', '2026-04-22 15:43:50', ''),
(24, 'Naresh Muthyala', 'sdfsdfsdf@gmail.com', '$2y$10$uSEdKY751F0Nd1DOHkg2fuHbLDYpveySnFCjxlw.b.lbMvLLAwUhO', NULL, NULL, '+91', '9553196591', 'India', 's', 's', 'Promo / Marketing', 'Gaming / Casino SMS', '0.1M – 1M', 'United States', 'United States', NULL, NULL, 'pending', 5.00, '2026-04-22 15:44:58', '2026-04-22 15:44:58', ''),
(25, 'Naresh Muthyala', 'sdfs234@gmail.com', '$2y$10$/wdAFM3fnll7XCiGOzDrgudZvwk77X.Tb9Zvv7yI26sVLRrkvPbrO', NULL, NULL, '+91', '9553196591', 'India', 'c', 'hyd', 'Two Way SMS', 'Tran / OTP / Utility SMS, Gaming / Casino SMS', '10K – 100K', 'United Kingdom', 'United Kingdom', NULL, NULL, 'pending', 5.00, '2026-04-22 15:45:32', '2026-04-22 15:45:32', ''),
(26, 'Naresh Muthyala', 'sadfsa345@gmail.com', '$2y$10$MfojBFVvvDBwcRis7bxPuOereQ7NFy1Pe7nsfpXpz6HlnEvJsA7y6', NULL, NULL, '+91', '9553196591', 'India', 'c', 'd', 'Two Way SMS', 'AI Tools', '10M+', 'United Kingdom', 'United Kingdom', NULL, NULL, 'pending', 5.00, '2026-04-22 15:46:38', '2026-04-22 15:46:38', ''),
(27, 'Naresh Muthyala', 'muthyal78dfsfa19@gmail.com', '$2y$10$ojEAMX0yLf6hIWfktkklY.K53QUUmT1AjC6ElFJUtd2RYHsS6Hf0y', NULL, NULL, '+91', '9553196591', 'India', 'cc', 'hyd', '📞 SIP Trunks / TDM', 'Gaming / Casino SMS, RCS Messaging', '1M – 10M', 'Indonesia', 'Indonesia', NULL, NULL, 'pending', 5.00, '2026-04-23 10:39:36', '2026-04-23 10:39:36', ''),
(28, 'Naresh Muthyala', 'muthydddala19@gmail.com', '$2y$10$tn1ZZ7D925tRgk41tYfzheMfmiIgBhCtrC5BtnFoJZqm.Nr/pkLpq', NULL, NULL, '+91', '9553196591', 'India', 'ccc', 'hyd', '📞 SIP Trunks / TDM', 'Promo / Marketing SMS, Tran / OTP / Utility SMS', '0.1M – 1M', 'France', 'France', NULL, NULL, 'pending', 5.00, '2026-04-23 10:52:05', '2026-04-23 10:52:05', ''),
(29, 'Naresh Muthyala', 'muthyddssala19@gmail.com', '$2y$10$S8FJcifzoCLrpBiqpVer4eD4btT/.5NQU5KiOF9L0PV9YPtS31sZC', NULL, NULL, '+91', '9553196591', 'India', 'c', 'hyd', '☁️ Cloud PBX', 'Voice QOS, SIP Trunks / TDM', '1M – 10M', 'Australia', 'Malaysia', NULL, NULL, 'pending', 5.00, '2026-04-23 10:52:33', '2026-04-23 10:52:33', ''),
(30, 'Naresh Muthyala', 'muth2345@gmail.com', '$2y$10$eposuHSYj66DAsLWobTMwu9ZVvAEZhXko8Vp4lrM8kjoZCd6CvOjm', NULL, NULL, '+91', '9553196591', 'India', 'cc', 'hyd', '☁️ Cloud PBX', 'Gaming / Casino SMS, RCS Messaging', '1M – 10M', 'Indonesia', 'Indonesia', NULL, NULL, 'pending', 5.00, '2026-04-26 09:16:49', '2026-04-26 09:16:49', ''),
(31, 'Naresh Muthyala', 'rea19@gmail.com', '$2y$10$qs7nEXgDl45WT0WSSEGNbOqlH/PD0wxz7.VAZCHhXRzT6YPu/BPxa', NULL, NULL, '+91', '9553196591', 'India', 'cc', 'hyd', '🎙️ Voice QOS', 'Promo / Marketing SMS, Tran / OTP / Utility SMS, MS Teams Routing', '1M – 10M', 'Oman', 'Oman', NULL, NULL, 'pending', 5.00, '2026-04-27 06:07:12', '2026-04-27 06:07:12', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ind_users`
--
ALTER TABLE `ind_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_payment_status` (`payment_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ind_users`
--
ALTER TABLE `ind_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
