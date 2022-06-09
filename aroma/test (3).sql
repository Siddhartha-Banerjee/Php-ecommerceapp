-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 06:06 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pfile` text NOT NULL,
  `ifile` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

CREATE TABLE `cart2` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pfile` text NOT NULL,
  `ifile` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart2`
--

INSERT INTO `cart2` (`id`, `pid`, `pname`, `pfile`, `ifile`, `price`, `qty`) VALUES
(17, 36, 'realme 10000mah power bank', 'phone', 'img/pb/p3.jpg', 699, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart3`
--

CREATE TABLE `cart3` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pfile` text NOT NULL,
  `ifile` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart4`
--

CREATE TABLE `cart4` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pfile` text NOT NULL,
  `ifile` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart5`
--

CREATE TABLE `cart5` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text DEFAULT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart5`
--

INSERT INTO `cart5` (`id`, `pid`, `pname`, `pfile`, `ifile`, `price`, `qty`) VALUES
(1, 0, 'Motorola one vision (sapphire gradient)', 'phone1.php', 'img/phone/p1.jfif', 21999, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart6`
--

CREATE TABLE `cart6` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text DEFAULT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart6`
--

INSERT INTO `cart6` (`id`, `pid`, `pname`, `pfile`, `ifile`, `price`, `qty`) VALUES
(2, 0, 'Motorola one vision (sapphire gradient)', 'phone1.php', 'img/phone/p1.jfif', 21999, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart10`
--

CREATE TABLE `cart10` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text DEFAULT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart12`
--

CREATE TABLE `cart12` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text NOT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart13`
--

CREATE TABLE `cart13` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text DEFAULT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart13`
--

INSERT INTO `cart13` (`id`, `pid`, `pname`, `pfile`, `ifile`, `price`, `qty`) VALUES
(1, 36, 'realme 10000mah power bank', 'phone', 'img/pb/p3.jpg', 699, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart15`
--

CREATE TABLE `cart15` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text DEFAULT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart16`
--

CREATE TABLE `cart16` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text DEFAULT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart17`
--

CREATE TABLE `cart17` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `pname` text DEFAULT NULL,
  `pfile` text DEFAULT NULL,
  `ifile` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Billing` text NOT NULL,
  `Shipping` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `Email`, `Password`, `Billing`, `Shipping`) VALUES
(1, 'Sohom Chowdhury', 'sohom138@gmail.com', '123456', '5F,SURYAKIRAN\r\n1/A UMAKANTA SEN LANE\r\nKOLKATA-700030', '5F,SURYAKIRAN\r\n1/A UMAKANTA SEN LANE\r\nKOLKATA-700030'),
(2, 'Siddhartha Banerjee', 'sidban1999@gmail.com', '1234', '', ''),
(3, 'puja banik', 'puja.banik.2709@gmail.com', '1234', '256B,Jessore Rd\r\nkolkata-700041', '256B,Jessore Rd\r\nkolkata-700041'),
(4, 'shilpi dutta', 'shilpi@gmail.com', '1234', '', ''),
(5, 'Mohan Das', 'mohan@gmail.com', '1234569', '', ''),
(6, 'Gautam Ghosh', 'gautam@gmail.com', '111111', '', ''),
(10, 'Sunnesha', 's@gmail.com', '12345', '', ''),
(12, 'Rusty', 'ruat@gmail.com', '123456', '', ''),
(13, 'Debarati Chowdhury', 'deba@gmail.com', '98312', '256B,Jessore Rd\r\nOrbit Sky View\r\nKolkata-700031', '256B,Jessore Rd\r\nOrbit Sky View\r\nKolkata-700031'),
(15, 'Ronald', 'ronal@gmail.com', '123456789', 'abcdr', 'abcdr'),
(16, 'abcd', 'abcd@gmail.com', '123456', 'abc', 'abc'),
(17, 'Joydeep', 'joydeep@gmail.com', '1234', 'Kolkata', 'Durgapur');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `id` int(11) NOT NULL,
  `cusid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cusid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cusid`, `pid`, `qty`, `date`, `status`) VALUES
(14, 1, 3, 1, '2020-01-16 08:41:17', 'Delivered'),
(13, 1, 2, 1, '2020-01-10 15:51:17', ''),
(12, 1, 47, 1, '2020-01-10 13:58:07', ''),
(16, 3, 34, 1, '2020-01-10 16:02:55', ''),
(15, 1, 23, 3, '2020-01-10 16:01:04', ''),
(11, 1, 1, 1, '2020-01-10 09:28:02', ''),
(17, 1, 45, 1, '2020-01-15 19:41:23', ''),
(18, 1, 25, 1, '2020-01-15 19:54:18', ''),
(19, 1, 3, 3, '2020-01-15 19:59:14', ''),
(20, 1, 36, 1, '2020-01-15 20:00:38', ''),
(21, 1, 12, 1, '2020-01-15 20:01:44', ''),
(22, 1, 42, 2, '2020-01-15 20:03:35', ''),
(23, 1, 43, 1, '2020-01-15 20:03:35', ''),
(24, 1, 1, 1, '2020-01-15 20:24:00', ''),
(25, 1, 1, 1, '2020-01-15 20:26:30', ''),
(26, 1, 1, 3, '2020-01-15 20:30:13', ''),
(27, 1, 1, 1, '2020-01-15 20:43:59', ''),
(28, 1, 1, 1, '2020-01-15 20:46:21', ''),
(29, 1, 1, 1, '2020-01-15 20:48:04', ''),
(30, 1, 1, 1, '2020-01-15 20:50:34', ''),
(31, 1, 1, 1, '2020-01-15 20:56:15', ''),
(32, 1, 1, 1, '2020-01-15 20:57:48', ''),
(33, 1, 1, 1, '2020-01-15 21:03:57', ''),
(34, 1, 1, 1, '2020-01-15 21:09:30', ''),
(35, 1, 1, 1, '2020-01-16 03:21:10', ''),
(36, 1, 1, 1, '2020-01-16 03:24:44', ''),
(37, 1, 2, 1, '2020-01-16 03:31:45', ''),
(38, 1, 2, 1, '2020-01-16 03:35:30', ''),
(39, 1, 2, 1, '2020-01-16 03:39:55', ''),
(40, 1, 2, 1, '2020-01-16 03:57:03', ''),
(41, 1, 2, 2, '2020-01-16 03:59:08', ''),
(42, 1, 50, 1, '2020-01-16 04:17:39', ''),
(43, 1, 3, 1, '2020-01-16 08:32:56', ''),
(44, 15, 11, 2, '2020-01-16 08:52:44', 'Placed'),
(45, 16, 35, 1, '2020-01-16 08:56:00', 'Shipped'),
(46, 17, 4, 1, '2020-01-16 09:02:19', 'Placed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pfile` text NOT NULL,
  `ifile` text NOT NULL,
  `price` int(11) NOT NULL,
  `descrip` text NOT NULL,
  `screen` float NOT NULL,
  `ram` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `battery` int(11) NOT NULL,
  `warrenty` int(11) NOT NULL,
  `processor` text NOT NULL,
  `cam` text NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pfile`, `ifile`, `price`, `descrip`, `screen`, `ram`, `rom`, `battery`, `warrenty`, `processor`, `cam`, `qty`) VALUES
(1, 'Motorola One Vision1', '', 'img/phone/p1.jfif', 21999, 'The new motorola one vision is designed with rounded edges and precision-crafted Corning? Gorilla? Glass for a comfortable one-handed grip. It’s also water-repellent, so you can keep moving through a sweaty workout or light rain. Enjoy immersive movies and gaming on a 6.3', 6.3, 4, 128, 3500, 1, 'Samsung Exynos 9609 Processor', '48MP + 5MP | 25MP Front Camera', 900),
(2, 'realme X2 Pro', 'phone', 'img/phone/p2.jfif', 34999, 'Realme X2 Pro smartphone runs on Android v9.0 (Pie) operating system. The phone is powered by Octa core (2.96 GHz, Single core, Kryo 485 + 2.42 GHz, Tri core, Kryo 485 + 1.8 GHz, Quad core, Kryo 485) processor. It runs on the Qualcomm Snapdragon 855 Plus Chipset. It has 8 GB RAM and 128 GB internal storage.', 6.5, 8, 128, 4000, 1, 'Qualcomm Snapdragon 855', '64MP + 13MP + 8MP + 2MP |16MP Front Camera', 1000),
(3, 'Redmi Note 8 Pro', 'phone', 'img/phone/p3.jpg', 8999, 'The Redmi Note 8 and Redmi Note 8 Pro are smartphones developed by Redmi, a sub-brand of Xiaomi Inc. They were released on 29 August 2019 in an event held in China. The Redmi Note 8 Pro is the first smartphone released with a 64 megapixel camera. The Note 8 Pro was released in Italy on 23 September 2019.', 6.3, 4, 64, 4000, 1, 'qualcom snapdragon 108', '48mp + 5mp|15mp', 997),
(4, 'Apple iPhone 11 Pro', 'phone', 'img/phone/p4.jpg', 123990, 'iPhone 11 Pro smartphone was launched on 10th September 2019. The phone comes with a 5.80-inch touchscreen display with a resolution of 1125x2436 pixels at a pixel density of 458 pixels per inch (ppi). iPhone 11 Pro is powered by a hexa-core Apple A13 Bionic processor. It comes with 4GB of RAM.', 6.5, 4, 64, 4000, 1, 'Apple A13 Bionic', 'Triple 12MP cameras (Ultra Wide, Wide, Telephoto)|12MP Front Camera', 999),
(5, 'Apple iPhone XS Max', 'phone', 'img/phone/p5.jfif', 89990, 'Apple iPhone XS Max smartphone was launched in September 2018. The phone comes with a 6.50-inch touchscreen display with a resolution of 1242x2688 pixels at a pixel density of 458 pixels per inch (ppi).Apple iPhone XS Max is powered by a hexa-core Apple A12 Bionic processor.', 6.5, 4, 64, 3500, 1, 'Apple A12 Bionic', '12MP + 12MP|7MP Front Camera', 1000),
(6, 'oneplus7T pro', 'phone', 'img/phone/p6.jfif', 53999, 'OnePlus 7T Pro smartphone was launched on 10th October 2019. The phone comes with a 6.67-inch touchscreen display with a resolution of 1440x3120 pixels at a pixel density of 516 pixels per inch (ppi) and an aspect ratio of 19.5:9.OnePlus 7T Pro is powered by an octa-core Qualcomm Snapdragon 855+ processor. It comes with 8GB of RAM.The OnePlus 7T Pro runs Android 10 and is powered by a 4085mAh non-removable battery. The OnePlus 7T Pro supports proprietary fast charging.', 6.57, 4, 128, 4000, 1, 'Qualcomm Snapdragon 855+', '48MP + 16MP + 8MP|16MP Front Camera', 1000),
(7, 'oneplus7 pro', 'phone', 'img/phone/p7.jfif', 42990, 'The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+ resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks and has good viewing angles.', 6.57, 6, 128, 4000, 1, 'Qualcomm Snapdragon 855', '48MP + 8MP + 16MP|16MP Front Camera', 1000),
(8, 'Oppo f11 Pro', 'phone', 'img/phone/p8.jfif', 18000, 'In the pursuit of bezel-less smartphones we have seen manufacturers take three different approaches to accommodating front-facing cameras — the notch, the hole-punch display, and the pop-up module. While there has been wide adoption of notches from every phone manufacturer, it seems as though hole-punch and pop-up designs are slowly gaining steam. The Oppo F11 Pro is the newest smartphone to sport a pop-up selfie camera.', 6.53, 6, 64, 4000, 1, 'MediaTek Helio P70', '48MP + 5MP|16MP Front Camera', 1000),
(9, 'oppo reno2', 'phone', 'img/phone/p9.jfif', 25990, 'Oppo brought the Reno series to India in May this year, turning its focus to smartphone cameras. This sub-brand recently got an overhaul with the launch of the Reno 2 series.We have now got our hands on the Oppo Reno 2, which is the highest-end offering in the series at the moment. The Reno 2 is powered by the Qualcomm Snapdragon 730G SoC, boasts of a quad-camera setup, and has a shark-fin pop-up selfie module.', 6.55, 6, 64, 4000, 1, 'Qualcomm Snapdragon 730G SoC', '48MP + 13MP + 8MP + 2MP|16MP Front Camera', 1000),
(10, 'Lenevo z6 pro', 'phone', 'img/phone/p10.jpg', 42990, 'Lenovo Z6 Pro smartphone was launched in April 2019. The phone comes with a 6.39-inch touchscreen display.Lenovo Z6 Pro is powered by an octa-core Qualcomm Snapdragon 855 processor. It comes with 6GB of RAM.The Lenovo Z6 Pro runs Android Pie and is powered by a 4000mAh battery. The Lenovo Z6 Pro supports proprietary fast charging.', 6.39, 6, 128, 4000, 1, 'Qualcomm Snapdragon 85', '48MP + 16MP + 8MP + 2MP|32MP Front Camera', 1000),
(11, 'Apple iPhone X', 'phone', 'img/phone/p11.png', 54999, 'The 5.8-inch iPhone X display is phenomenal, with 448 pixels per inch and a 2,436 x 1,125 resolution. It\'s got HDR10 and Dolby Vision support and features Apple\'s True Tone tech. And yes, it\'s OLED this time. The processor is Apple\'s new A11 Bionic chip, just like in the iPhone 8.', 5.8, 4, 64, 3000, 1, 'apple  12 bionic', '12mp', 998),
(12, 'Apple iPhone XR(64GB)', 'phone', 'img/phone/p12.jfif', 44900, 'Apple iPhone XR smartphone was launched in September 2018. The phone comes with a 6.10-inch touchscreen display with a resolution of 828x1792 pixels at a pixel density of 326 pixels per inch (ppi) and an aspect ratio of 19.5:9.Apple iPhone XR is powered by a hexa-core Apple A12 Bionic processor. It comes with 3GB of RAM.', 6.3, 4, 128, 4000, 1, 'Apple A12 Bionic', '12MP|7MP Front Camera', 1000),
(13, 'sandisk 128gb sd card', 'c', 'img/sdcard/sd1.png', 1449, 'It was released on 24th december,2019 . Very useful product for phones with low memory space', 0, 0, 0, 0, 1, '', '', 1000),
(14, 'sandisk 32gb sd card', 'c', 'img/sdcard/sd3.jpg', 409, 'sandisk ultra sd card with 32 gb memory.', 0, 0, 0, 0, 1, '', '', 1000),
(15, 'sandisk 64gb sd card', 'c', 'img/sdcard/sd4.jpg', 692, 'Sandisk Ultra SD Card 64GB.', 0, 0, 0, 0, 1, '', '', 1000),
(16, 'sandisk 8gb sd card', 'c', 'img/sdcard/sd5.jpg', 269, 'Sandisk 8gb SD Card is very fast', 0, 0, 0, 0, 1, '', '', 1000),
(17, 'sandisk 1tb sd card', 'c', 'img/sdcard/sd7.jpg', 29999, 'Very efficient for huge storage', 0, 0, 0, 0, 1, '', '', 1000),
(18, 'sandisk 4gb sd card', 'c', 'img/sdcard/sd6.jpg', 292, 'Sandisk 4gb SD Card with 1 year warrenty', 0, 0, 0, 0, 1, '', '', 1000),
(19, 'hp 32gb sd card', 'c', 'img/sdcard/sd8.jpg', 304, 'A very new product from hp, and it is one of the best seller item of them', 0, 0, 0, 0, 1, '', '', 1000),
(20, 'hp 16gb sd card', 'c', 'img/sdcard/sd9.jpg', 269, 'A very good product from hp,released on 25th december,2019,with 16gb of storage it is a very efficient product for your phone.', 0, 0, 0, 0, 1, '', '', 1000),
(21, 'hp 64gb sd card', 'c', 'img/sdcard/sd10.jpg', 950, 'A rescently released product from hp', 0, 0, 0, 0, 1, '', '', 1000),
(22, 'JBL speaker', 's', 'img/speaker/s1.jpg', 7999, 'Wireless Bluetooth Streaming IPX7 Waterproof 12 hours avalibity 3000mAH Rechargeable Battery Connect+ Voice Assistant Integration', 0, 0, 0, 20, 1, '', '', 1000),
(23, 'echo dot', 's', 'img/speaker/s2.jpeg', 4999, '1. plug in echo dot 2.connect to wifi 3.just ask alexa music, weather and more', 0, 0, 0, 22, 1, '', '', 1000),
(24, 'boAt stone 650 wireless speaker', 's', 'img/speaker/s3.jpeg', 5999, 'Surrounded by smooth secure silicon coated on the outside and a diamond gridded mesh, break the balance with the ipx 5 rated boAt stone 650. This dynamic speaker with 2 inch x 2 drivers with 10w’s gives you that premium audio experience, so enter the session of sound. So up your game with Bluetooth v4.2 for the optimum wireless experience that can switch into aux mode at a moment’s notice. Perfect for you and your friends, light up the scene with up to 7 hours of play time backed by an 1800mah capacity lithium battery. The best part is, you into the flow of your music with simplicity, because the multifunction button will back you up with all you need. Weighing 655g and sized 191x70x70mm, you know this speaker packs a punch, blended with the deep waves of versatility, so choose your vibe with the boAt stone 650.', 0, 0, 0, 18, 1, '', '', 1000),
(25, 'jbl go 2b waterproof wireless speaker', 's', 'img/speaker/s4.jpg', 2999, 'JBL Legendary Sound- Experience superior JBL sound with powerful bass that truly packs a punch 5 hrs of playtime-Built-in rechargeable Li-ion battery supports up to 5 hours of playtime Long Press Remote Button to Activate Google Assistant or Siri IPX7 Waterproof- Waterproof design makes GO 2 perfect for worry-free listening by the beach or poolside, or even in it Wireless Bluetooth Streaming- Wirelessly stream high-quality sound from your smartphone or tablet Noise-cancelling Speakerphone- Enjoy crystal clear phone call experience with its built-in noise-cancelling speakerphone Connectivity- Bluetooth (version 4.1), audio cable input', 0, 0, 0, 19, 1, '', '', 1000),
(26, 'Sony SRS-XB12 10 W Bluetooth Speaker', 's', 'img/speaker/s5.jpeg', 3999, 'Power Output (RMS): 10 W Power Source: USB Cable Wireless music streaming via Bluetooth', 0, 0, 0, 15, 1, '', '', 1000),
(27, 'JBL T600BT Active Noise Cancellation Bluetooth Headset', 's', 'img/speaker/s6.png', 6999, 'Wirelessly stream high-quality sound from your smartphone or tablet without messy cords JBL pure bass sound Active noise cancelling: Keep the noise out and enjoy your music. Easily control your sound and manage your calls from your headphones with the convenient three button remote with mic Lightweight materials make these comfortable on your ears and a rugged construction ensures these headphones fold and unfold perfectly over the years Listen wirelessly for 12 hours with active noise cancelling for long-lasting fun. Recharge the battery quickly in 2 hours', 0, 0, 0, 6, 1, '', '', 1000),
(28, 'Mivi Octave Portable Wireless Speaker with 360 ° HD\r\nStereo Sound, Powerful Bass and 16Watts Peak Output-\r\nBlack', 's', 'img/speaker/s7.png', 4999, 'Super Solid Bass:Enjoy powerful audio with best in class dual drivers and passive subwoofer 360° HD Stereo Sound:Omni Directional transducers for 360\' immersive sound experience True Wireless Stereo:Pair two speakers wirelessly for a 2X Sound with extra powerful left and right channel Splash resistant:Dust and splash resistant (IPX 5) design for complete peace of mind Play it on and on:Lithium-ion battery lets you enjoy up to Ten hours of play time (at 70% Volume)', 0, 0, 0, 24, 1, '', '', 1000),
(29, 'JBL Clip 2 Portable Bluetooth Speaker', 's', 'img/speaker/s8.png', 2499, 'Power Source: Micro USB cable for charging Wireless music streaming via Bluetooth Wireless Bluetooth Streaming Wireless Daisy Chain Rechargeable Battery', 0, 0, 0, 14, 1, '', '', 1000),
(30, 'Sony SRS-XB22 Bluetooth Speaker', 's', 'img/speaker/s9.png', 7999, 'Sales Package Speaker, Instruction Manual, USB Cable Model Name-SRS-XB22 Type-Mobile/Tablet Speaker Bluetooth-Yes Memory Card Slot-No Configuration-Stereo Power Source-USB Frequency Response-20 Hz - 20000 Hz Impedance-4 Color-Green Wired/Wireless-Wireless', 0, 0, 0, 16, 1, '', '', 1000),
(31, 'Jabra Elite 25E Wireless Bluetooth Headphone', 's', 'img/speaker/s10.png', 4799, 'ake calls and listen to music all day with 18 hours of battery time Wind and water resistant to provide amazing durability while on-the-go Optimized neckband design and oval ear gels in different sizes for a customized, secure fit One-touch access to Siri and Google now with a dedicated voice control button Exceptional sound quality from 10mm speakers engineered for immersive audio', 0, 0, 0, 6, 1, '', '', 1000),
(32, 'Jabra Elite 65t Alexa Enabled True Wireless Earbuds with\r\nCharging Case', 's', 'img/speaker/s11.png', 15799, 'Conversations are made incredibly clear with true wireless earbuds that feature four-microphone technology and are proven to deliver best-in-class call performance Listen to your music the way you want to hear it, by personalizing your sound with a customizable equalizer Listen to your favourite music, set alarms and get all the information you need with easy one touch access to Amazon Alexa (not available on iOS Jabra App) Jabra Elite 65t are third generation true wireless earbuds and Jabra has a proven track record of true wireless connectivity 2 years warranty provided by the manufacturer from date of purchase and 2 years dust and water resistance warranty (with-in app registration)', 0, 0, 0, 12, 1, '', '', 1000),
(33, 'boAt Rockerz 510 Wireless Bluetooth Headphones', 's', 'img/speaker/s12.png', 3999, 'Thumping Bass: boAt signature sonic high definition sound with super extra bass and balanced treble performance to make your listening experience a thumping one BoAt custom-designed 50mm driver, giving you the performance you could never have imagined ; Battery Average Life: 10 Hours ; Battery Cell Composition: Lithium Ion ; Impedance: 32 ohm ; Sensitivity: 1KHz - 108dB?3 The softness of the faux leather on the ear pads makes boAt Rockerz 510 pleasurable to wear Carefully and precisely designed makes the boAt Rockerz 510 appear to be stylish and sturdy, Frequency Range: 20Hz- 20kHz. Quantity:', 0, 0, 0, 8, 1, '', '', 1000),
(34, 'mi 10000mah power bank', 'pb', 'img/pb/p1.jpg', 799, 'The latest model of power bank of mi with 10000mah capacity', 0, 0, 0, 10000, 1, '', '', 1000),
(35, 'mi 20000mah power bank', 'pb', 'img/pb/p2.jpg', 1399, 'A very good power bank from mi with 20000mah capacity', 0, 0, 0, 20000, 1, '', '', 999),
(36, 'realme 10000mah power bank', 'pb', 'img/pb/p3.jpg', 699, 'realme 10000mAh Power Bank', 0, 0, 0, 10000, 1, '', '', 1000),
(37, 'mi+ 20000mah power bank', 'pb', 'img/pb/p4.jpg', 579, 'mi+ is a very good product of xiomi with extra guranttee period', 0, 0, 0, 20000, 2, '', '', 1000),
(38, 'iball 20000mah power bank ', 'pb', 'img/pb/p5.jpg', 999, 'A very good power bank with gurantee of iball', 0, 0, 0, 20000, 1, '', '', 1000),
(39, 'samsung 20000mah wireless power bank', 'pb', 'img/pb/p6.jpg', 3999, 'A very good wireless power bank from samsung for your latest smartphone', 0, 0, 0, 20000, 1, '', '', 1000),
(40, 'iball 10000mah power bank', 'pb', 'img/pb/p7.jpeg', 499, 'Latest model of power bank released by iball with 10000mAh of capacity', 0, 0, 0, 10000, 1, '', '', 1000),
(41, 'samsung 10000mah wireless power bank', 'pb', 'img/pb/p8.jpg', 2499, 'A very good power ban for your latest smart phone with guranttee from the bigest brand, samsung.', 0, 0, 0, 10000, 1, '', '', 1000),
(42, 'samsung 20000mah power bank', 'pb', 'img/pb/p9.jpg', 1699, '20000mAh Power Bank from Samsung', 0, 0, 0, 20000, 1, '', '', 1000),
(43, 'samsung 10000mah power bank', 'pb', 'img/pb/p10.jpeg', 1399, 'The latest model of power bank released by samsung is this.', 0, 0, 0, 10000, 1, '', '', 1000),
(44, 'Redmi 4a', 'phone', 'img/phone/p13.jpg', 5999, 'It new Redmi 4a  by Xiami is designed for entry level smartphone users within affortable prices & two varients.', 5, 2, 16, 3102, 1, 'Snapdragon 425', '5MP|13MP', 1000),
(45, 'Redmi 4', 'phone', 'img/phone/p14.jpg', 6999, 'The New Redmi 4 from Xiami is designed for a smooth experience in entry level smartphones.', 5, 2, 16, 4000, 1, 'Snapdragon 435', '5MP|13MP', 1000),
(46, 'Redmi 7a', 'phone', 'img/phone/p15.jpeg', 5499, 'The New Redmi 7a from Xiami is designed for a smooth experience in entry level smartphones', 5, 2, 32, 4000, 2, 'Qualcomm Snapdragon 439', '5MP|12MP', 1000),
(47, 'OneDer V17 Mini Portable Bluetooth Speaker', 's', 'img/speaker/s13.jpeg', 5000, 'Compact and classy looking mini Bluetooth speaker. Excellent stereo double channels and enhanced bass so you can appreciate your music anytime and anywhere. Enjoy true wireless stereo sound with this OneDer V17 mini Bluetooth speaker and never worry about tangling wires anymore. The magnetic base makes them very convenient, so you can stick them on any metal surface, and they won\'t fall off.', 0, 0, 0, 1200, 1, 'na', 'na', 1000),
(50, 'Redmi 6 Pro', 'phone', 'img/phone/p16.jpeg', 7999, 'Xiaomi Redmi 6 Pro Dual AI Camera 5.84 inch 4GB RAM 64GB ROM Snapdragon 625 Octa core 4G Smartphone', 6, 3, 32, 4000, 1, 'Snapdragon 625', '12MP|8MP', 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart2`
--
ALTER TABLE `cart2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart3`
--
ALTER TABLE `cart3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart4`
--
ALTER TABLE `cart4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart5`
--
ALTER TABLE `cart5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart6`
--
ALTER TABLE `cart6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart10`
--
ALTER TABLE `cart10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart12`
--
ALTER TABLE `cart12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart13`
--
ALTER TABLE `cart13`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart15`
--
ALTER TABLE `cart15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart16`
--
ALTER TABLE `cart16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart17`
--
ALTER TABLE `cart17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cart2`
--
ALTER TABLE `cart2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart3`
--
ALTER TABLE `cart3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart4`
--
ALTER TABLE `cart4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart5`
--
ALTER TABLE `cart5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart6`
--
ALTER TABLE `cart6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart10`
--
ALTER TABLE `cart10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart12`
--
ALTER TABLE `cart12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart13`
--
ALTER TABLE `cart13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart15`
--
ALTER TABLE `cart15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart16`
--
ALTER TABLE `cart16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart17`
--
ALTER TABLE `cart17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
