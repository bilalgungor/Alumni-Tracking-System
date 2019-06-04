-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2019, 07:04:51
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aybumbs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `academician`
--

CREATE TABLE `academician` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `faculty` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `department` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `academician`
--

INSERT INTO `academician` (`id`, `username`, `first_name`, `last_name`, `faculty`, `department`, `photo`, `email`, `password`) VALUES
(1, 'adem', 'Öğr. Gör. Adem ', 'Kılıç', 'İşletme Fakültesi', 'Yönetim Bilişim Sistemleri(İngilizce)', '../uploads/fa03dce44b47a9e98fa46957d26058cc.jpg', 'a.kilic@hotmail.com', '123'),
(2, 'dilek', 'Doç. Dr. Dilek', 'Gündoğdu', 'Tıp Fakültesi', 'Tıp(İngilizce)', '../uploads/a255c7251071fc7c10a8d09394451678.jpg', 'd.g@gmail.com', '123'),
(3, 'metin', 'Prof. Dr. Metin', 'Avcı', 'İnsan ve Toplum Bilimleri Fakültesi', 'Psikoloji(İngilizce)', '../uploads/3c47d65ea2d2ff3ad1372367e8bb3735.jpg', 'metin_avci@gmail.com', '123'),
(4, 'yagmur', 'Arş. Gör. Yağmur', 'Tuna', 'İnsan ve Toplum Bilimleri Fakültesi', 'Sosyoloji', '../uploads/5a646cec70d5f21380e4001d7050b913.Jpeg', 'y.tuna@hotmail.com', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `faculty_name` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `department`
--

INSERT INTO `department` (`id`, `department_name`, `faculty_name`) VALUES
(1, 'Yönetim Bilişim Sistemleri(İngilizce)', 'İşletme Fakültesi'),
(2, 'Uluslararası İlişkiler(İngilizce)', 'İşletme Fakültesi'),
(3, 'Tıp (İngilizce)	', 'Tıp Fakültesi (İngilizce)'),
(4, 'Sosyoloji', 'İnsan ve Toplum Bilimleri Fakültesi'),
(5, 'Psikoloji(İngilizce)', 'İnsan ve Toplum Bilimleri Fakültesi'),
(6, 'Elektrik-Elektronik Mühendisliği (İngilizce)', 'Mühendislik Fakültesi'),
(7, 'Tıp (İngilizce)	', 'İşletme Fakültesi'),
(8, 'Sosyoloji', 'İnsan ve Toplum Bilimleri Fakültesi'),
(9, 'Psikoloji(İngilizce)', 'İnsan ve Toplum Bilimleri Fakültesi'),
(10, 'Elektrik-Elektronik Mühendisliği (İngilizce)', 'Mühendislik Fakültesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `student_id` varchar(24) COLLATE utf8_turkish_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gallery`
--

INSERT INTO `gallery` (`id`, `student_id`, `first_name`, `last_name`, `photo`, `status`) VALUES
(257, '1203061107', 'Elif', 'Eylül', 'uploads/gallery/a30040ba952e63b9fbabf34701ebd8e6.JPG', 1),
(258, '14030411004', 'Kemal', 'Çetin', 'uploads/gallery/94ebc40dc7bc0ec4c9bb503981cc8fae.JPG', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `graduate_card`
--

CREATE TABLE `graduate_card` (
  `id` int(11) NOT NULL,
  `student_id` varchar(24) COLLATE utf8_turkish_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `department` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `graduate_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `graduate_card`
--

INSERT INTO `graduate_card` (`id`, `student_id`, `first_name`, `last_name`, `photo`, `department`, `graduate_date`, `status`) VALUES
(15, '140501009', 'Anıl', 'Özdemir', 'uploads/59b514174bffe4ae402b3d63aad79fe0.jpg', 'Sosyoloji', '2019-01-09', 0),
(16, '14030411025', 'Bilal', 'Güngör', 'uploads/cfcd208495d565ef66e7dff9f98764da.jpg', 'Yönetim Bilişim Sistemleri(İngilizce)', '2019-05-19', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `job_advert`
--

CREATE TABLE `job_advert` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `student_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `position` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `company` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `job_definition` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `contact` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ad_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `job_advert`
--

INSERT INTO `job_advert` (`id`, `username`, `student_id`, `first_name`, `last_name`, `position`, `company`, `job_definition`, `contact`, `ad_date`) VALUES
(14, '', '14030411004', 'Kemal', 'Çetin', 'Java Developer', 'Soft Bilişim', 'Junior java developer aranmaktadır.', '05338889987', '2019-05-28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `motto`
--

CREATE TABLE `motto` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `department` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `motto` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `motto_photo` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `motto`
--

INSERT INTO `motto` (`id`, `student_id`, `first_name`, `last_name`, `department`, `motto`, `motto_photo`, `status`) VALUES
(52, '140501009', 'Anıl', 'Özdemir', 'Sosyoloji', 'Bu üniversiteyi her zaman özleyeceğim', 'uploads/59b514174bffe4ae402b3d63aad79fe0.jpg', 0),
(54, '1203061107', 'Elif', 'Eylül', 'Psikoloji(İngilizce)', 'Hocalarımı çok özleyeceğim. Elveda AYBU', 'uploads/a43683d33b40f413228d54e3c6ed4a2f.jpg', 0),
(56, '12050607001', 'Sefa', 'Deniz', 'Tıp(İngilizce)', 'Herkese Merhaba', 'uploads/1baa29b0a1bc49be0e855d42bd54608c.Jpeg', 0),
(57, '14030411004', 'Kemal', 'Çetin', 'Yönetim Bilişim Sistemleri(İngilizce)', 'Parlak bir gelecek için AYBU.', 'uploads/e2db53a49eac3b16d16f41fde14459c9.jpg', 0),
(58, '14020412007', 'Gizem', 'Bodur', 'Tıp(İngilizce)', 'Tıp okumak bir harika', 'uploads/443860a359c43b26830ef20930ce6eed.Jpeg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(24) COLLATE utf8_turkish_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_turkish_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `faculty` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `department` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `firm` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `position` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `graduate_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `student`
--

INSERT INTO `student` (`id`, `student_id`, `first_name`, `last_name`, `email`, `phone_number`, `photo`, `faculty`, `department`, `firm`, `position`, `password`, `graduate_date`) VALUES
(22, '140501009', 'Anıl', 'Özdemir', 'aoz@hotmail.com', '5558889988', 'uploads/59b514174bffe4ae402b3d63aad79fe0.jpg', 'İnsan ve Toplum Bilimleri Fakültesi', 'Sosyoloji', 'Çiçek Özel Rehabilitasyon Merkezi', 'Özel Eğitim Öğretmeni', '123', '2019-01-09'),
(23, '14030411004', 'Kemal', 'Çetin', 'kemalcetin199614@hotmail.com', '05324999988', 'uploads/e2db53a49eac3b16d16f41fde14459c9.jpg', 'İşletme Fakültesi', 'Yönetim Bilişim Sistemleri(İngilizce)', 'Microsoft', 'Senior Developer', '123', '2019-05-24'),
(24, '1203061107', 'Elif', 'Eylül', 'elifeylul@mail.com', '05358555552', 'uploads/a43683d33b40f413228d54e3c6ed4a2f.jpg', 'İnsan ve Toplum Bilimleri Fakültesi', 'Psikoloji(İngilizce)', 'Akgün Danışmanlık', 'Psikolojik Danışman', '123', '2018-02-10'),
(25, '12050607001', 'Sefa', 'Deniz', 'sefa@hotmail.com', '5554112233', 'uploads/1baa29b0a1bc49be0e855d42bd54608c.Jpeg', 'Tıp Fakültesi', 'Tıp(İngilizce)', 'Cihan Hastanesi', 'Asistan Doktor', '123', '2019-05-09'),
(26, '14030411025', 'Bilal', 'Güngör', 'gungor.bilal@galatasaray.net', '05342986189', 'uploads/cfcd208495d565ef66e7dff9f98764da.jpg', 'İşletme Fakültesi', 'Yönetim Bilişim Sistemleri(İngilizce)', 'Soft Soft', 'J. Developer', '123', '2019-05-19'),
(27, '14020412007', 'Gizem', 'Bodur', 'bodur@gmail.com', '05342222222', 'uploads/443860a359c43b26830ef20930ce6eed.Jpeg', 'Tıp Fakültesi', 'Tıp(İngilizce)', '', '', '123', '2019-05-25');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `academician`
--
ALTER TABLE `academician`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `graduate_card`
--
ALTER TABLE `graduate_card`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `job_advert`
--
ALTER TABLE `job_advert`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `motto`
--
ALTER TABLE `motto`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `academician`
--
ALTER TABLE `academician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- Tablo için AUTO_INCREMENT değeri `graduate_card`
--
ALTER TABLE `graduate_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `job_advert`
--
ALTER TABLE `job_advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `motto`
--
ALTER TABLE `motto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Tablo için AUTO_INCREMENT değeri `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
