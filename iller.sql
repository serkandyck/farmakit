-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 22 Ağu 2019, 12:53:58
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eczakazanc`
--

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`id`, `baslik`, `created_at`, `updated_at`) VALUES
(1, 'Adana', NULL, NULL),
(2, 'Adıyaman', NULL, NULL),
(3, 'Afyonkarahisar', NULL, NULL),
(4, 'Ağrı', NULL, NULL),
(5, 'Amasya', NULL, NULL),
(6, 'Ankara', NULL, NULL),
(7, 'Antalya', NULL, NULL),
(8, 'Artvin', NULL, NULL),
(9, 'Aydın', NULL, NULL),
(10, 'Balıkesir', NULL, NULL),
(11, 'Bilecik', NULL, NULL),
(12, 'Bingöl', NULL, NULL),
(13, 'Bitlis', NULL, NULL),
(14, 'Bolu', NULL, NULL),
(15, 'Burdur', NULL, NULL),
(16, 'Bursa', NULL, NULL),
(17, 'Çanakkale', NULL, NULL),
(18, 'Çankırı', NULL, NULL),
(19, 'Çorum', NULL, NULL),
(20, 'Denizli', NULL, NULL),
(21, 'Diyarbakır', NULL, NULL),
(22, 'Edirne', NULL, NULL),
(23, 'Elazığ', NULL, NULL),
(24, 'Erzincan', NULL, NULL),
(25, 'Erzurum', NULL, NULL),
(26, 'Eskişehir', NULL, NULL),
(27, 'Gaziantep', NULL, NULL),
(28, 'Giresun', NULL, NULL),
(29, 'Gümüşhane', NULL, NULL),
(30, 'Hakkari', NULL, NULL),
(31, 'Hatay', NULL, NULL),
(32, 'Isparta', NULL, NULL),
(33, 'Mersin', NULL, NULL),
(34, 'İstanbul', NULL, NULL),
(35, 'İzmir', NULL, NULL),
(36, 'Kars', NULL, NULL),
(37, 'Kastamonu', NULL, NULL),
(38, 'Kayseri', NULL, NULL),
(39, 'Kırklareli', NULL, NULL),
(40, 'Kırşehir', NULL, NULL),
(41, 'Kocaeli', NULL, NULL),
(42, 'Konya', NULL, NULL),
(43, 'Kütahya', NULL, NULL),
(44, 'Malatya', NULL, NULL),
(45, 'Manisa', NULL, NULL),
(46, 'Kahramanmaraş', NULL, NULL),
(47, 'Mardin', NULL, NULL),
(48, 'Muğla', NULL, NULL),
(49, 'Muş', NULL, NULL),
(50, 'Nevşehir', NULL, NULL),
(51, 'Niğde', NULL, NULL),
(52, 'Ordu', NULL, NULL),
(53, 'Rize', NULL, NULL),
(54, 'Sakarya', NULL, NULL),
(55, 'Samsun', NULL, NULL),
(56, 'Siirt', NULL, NULL),
(57, 'Sinop', NULL, NULL),
(58, 'Sivas', NULL, NULL),
(59, 'Tekirdağ', NULL, NULL),
(60, 'Tokat', NULL, NULL),
(61, 'Trabzon', NULL, NULL),
(62, 'Tunceli', NULL, NULL),
(63, 'Şanlıurfa', NULL, NULL),
(64, 'Uşak', NULL, NULL),
(65, 'Van', NULL, NULL),
(66, 'Yozgat', NULL, NULL),
(67, 'Zonguldak', NULL, NULL),
(68, 'Aksaray', NULL, NULL),
(69, 'Bayburt', NULL, NULL),
(70, 'Karaman', NULL, NULL),
(71, 'Kırıkkale', NULL, NULL),
(72, 'Batman', NULL, NULL),
(73, 'Şırnak', NULL, NULL),
(74, 'Bartın', NULL, NULL),
(75, 'Ardahan', NULL, NULL),
(76, 'Iğdır', NULL, NULL),
(77, 'Yalova', NULL, NULL),
(78, 'Karabük', NULL, NULL),
(79, 'Kilis', NULL, NULL),
(80, 'Osmaniye', NULL, NULL),
(81, 'Düzce', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
