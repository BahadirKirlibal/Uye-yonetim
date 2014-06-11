-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Haz 2014, 16:41:30
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `kullanici`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(1, 'bahadır', 'bahadır', 'bahadir@gmail.com'),
(2, 'osman', 'osman', 'osman@hotmail.com'),
(3, 'ali', 'ali ', 'ali@hotmail.com'),
(5, 'mark zuckerberg', 'facebook', 'mark@gmail.com'),
(6, 'steve jobs', 'apple', 'steve@gmail.com'),
(7, 'larry page', 'google', 'larry@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
