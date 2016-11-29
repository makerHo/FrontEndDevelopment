-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-29 10:28:06
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kong`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pic` varchar(120) NOT NULL,
  `regTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `pwd`, `email`, `pic`, `regTime`) VALUES
(1, 'tom', 'e10adc3949ba59abbe56e057f20f883e', 'tom@tom.com', 'c1.jpg', '2016-11-29 16:40:22'),
(2, 'mary', 'e10adc3949ba59abbe56e057f20f883e', 'tom@tom.com', 'bg1.jpg', '2016-11-29 17:14:09'),
(3, 'peterchen', 'e10adc3949ba59abbe56e057f20f883e', 'peter@per.com', 'c1.jpg', '2016-11-29 17:23:39'),
(4, 'peterzhang', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'bg1.jpg', '2016-11-29 17:25:11'),
(5, 'peterlee', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'banner1.jpg', '2016-11-29 17:26:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
