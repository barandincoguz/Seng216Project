-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2024, 13:42:12
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `login`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'ahmetbara', 'kasjdghlaskdj@gmail.com', '05444971797', 'selam deneme123 123', '2024-05-19 11:17:16'),
(2, 'Ahmet Baran Dincoguz', 'barandincoguz@gmail.com', '05444971797', '123123123123123', '2024-05-19 11:21:08'),
(3, 'Ahmet Baran Dincoguz', 'barandincoguz@gmail.com', '05444971797', '123123123123123', '2024-05-19 11:23:50'),
(4, 'asdfasd', 'fasdfasdf@gmail.com', '0544497424', 'asdfasdfaf', '2024-05-19 11:24:09'),
(5, 'Ahmet Baran Dincoguz', 'barandincoguz21@gmail.com', '05444971797', '4356345673456345663', '2024-05-19 11:25:45'),
(6, 'Ahmet Baran Dincoguz', 'barandincoguz@gmail.com', '05444971797', '123453245', '2024-05-19 11:26:25'),
(7, 'Ahmet Baran Dincoguz', 'barandincoguz@gmail.com', '05444971797', '3412341234123', '2024-05-19 11:34:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`Id`, `firstName`, `lastName`, `email`, `password`) VALUES
(0, 'baran', 'Dincoguz', 'barandincoguz@gmail.com', '4297f44b13955235245b2497399d7a93'),
(0, 'furkan', 'secme', 'barandincoguz72@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(0, 'Dogukan', 'dincoguz', 'dgkn@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(0, 'baran', 'baran', 'barandincoguz727272@gmail.com', '996c90e317680a7b08e013440f60607d'),
(0, 'ahmet', 'dncgz', 'barandincoguz720106@gmail.com', '996c90e317680a7b08e013440f60607d');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
