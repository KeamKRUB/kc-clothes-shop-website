-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 07:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `uid` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `topup_amount` varchar(11) COLLATE utf8_unicode_ci DEFAULT '0',
  `transaction` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `activities` (`id`, `uid`, `username`, `action`, `date`) VALUES (1, 'test', 'test', 'test', 'test');

ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--category
CREATE TABLE `category` (
 `id` int(11) NOT NULL,
 `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `category` (`id`, `name`) VALUES (1, 'test');

ALTER TABLE `category`
    ADD PRIMARY KEY(`id`);

ALTER TABLE `category`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--shop
CREATE TABLE `shop` (
 `id` int(11) NOT NULL,
 `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `description` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `stock` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `times` varchar(100) COLLATE utf8_unicode_ci NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `shop` (`id`, `name`, `price`, `description`, `category`, `pic`, `color`, `size`, `stock`, `times`) VALUES (1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

ALTER TABLE `shop`
    ADD PRIMARY KEY(`id`);

ALTER TABLE `shop`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--cart
CREATE TABLE `cart` (
 `id` int(11) NOT NULL,
 `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `amount` varchar(100) COLLATE utf8_unicode_ci NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `cart` (`id`, `user`, `name`, `color`, `size`, `pic`, `price`, `amount`) VALUES (1,'test', 'test', 'test', 'test', 'test', 'test', 'test');

ALTER TABLE `cart`
    ADD PRIMARY KEY(`id`);

ALTER TABLE `cart`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--users
CREATE TABLE `users` (
 `id` int(11) NOT NULL,
 `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `status` enum('member','admin') NOT NULL DEFAULT 'member',
 `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `point` varchar(20) COLLATE utf8_unicode_ci NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `user`, `password`, `firstname`, `lastname`, `status`, `email`, `phone`, `address`, `point`) VALUES (1,'test', 'test','test','test', 'member', 'test', 'test', 'test', 'test');

ALTER TABLE `users`
    ADD PRIMARY KEY(`id`);

ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

COMMIT;
