-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Haz 2023, 17:56:37
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`) VALUES
(1, 'Fırat', 'selam123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `educator_table`
--

CREATE TABLE `educator_table` (
  `educatorId` int(11) NOT NULL,
  `nameSurname` varchar(500) NOT NULL,
  `imgLink` varchar(500) NOT NULL,
  `aboutWrite` varchar(1000) NOT NULL,
  `faceLink` varchar(500) NOT NULL,
  `linkedinLink` varchar(500) NOT NULL,
  `githubLink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `educator_table`
--

INSERT INTO `educator_table` (`educatorId`, `nameSurname`, `imgLink`, `aboutWrite`, `faceLink`, `linkedinLink`, `githubLink`) VALUES
(1, 'Sibel Gündüz', 'img/ekip2.jpg', 'Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/'),
(2, 'Hakan Kavak', 'img/ekip1.jpg', 'Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/'),
(3, 'İpek Camcı', 'img/ekip3.jpg', 'Ege Üniversitesi Yazılım mühendisi ve yan dal donanım uzmanı.', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/', 'https://www.linkedin.com/in/f%C4%B1rat-i%C5%9F%C4%B1ldak-608176250/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `name`, `mail`, `password`) VALUES
(19, 'Recep', 'firat@gmail.com', '147'),
(20, 'cemil', 'cemil@gmail.com', '789'),
(21, 'ahmet', 'ahmet@gmail.com', '369'),
(22, 'ipek', 'ipek@gmail.com', '453453'),
(23, 'yiğit', 'yiğit@gmail.com', '123'),
(24, 'Fırat', 'firat@gmail.com', '453453');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menutable`
--

CREATE TABLE `menutable` (
  `id` int(11) NOT NULL,
  `menuName` varchar(50) NOT NULL,
  `menuUrl` varchar(255) NOT NULL,
  `menuIcon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `menutable`
--

INSERT INTO `menutable` (`id`, `menuName`, `menuUrl`, `menuIcon`) VALUES
(1, 'Anasayfa', 'index.php', 'class=\"fa-solid fa-house icon\"'),
(2, 'Hakkımızda', 'index.php#aboutUs', 'class=\"fa-solid fa-info icon\"'),
(3, 'Eğitimler', 'egitimler.php', 'class=\"fa-solid fa-graduation-cap icon\"'),
(4, 'Sepet', '', 'class=\"fa-solid fa-cart-shopping icon\"'),
(5, 'İletişim', 'index.php#opaqueRow', 'class=\"fa-solid fa-map-pin icon\"'),
(6, 'Eğitmenler', 'index.php#educator', 'class=\"fa-solid fa-people-group icon\"'),
(18, 'Giriş&Kayıt', 'login_index.php', 'class=\"fa-solid fa-right-to-bracket icon\"');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `educator_table`
--
ALTER TABLE `educator_table`
  ADD PRIMARY KEY (`educatorId`);

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menutable`
--
ALTER TABLE `menutable`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `educator_table`
--
ALTER TABLE `educator_table`
  MODIFY `educatorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `menutable`
--
ALTER TABLE `menutable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
