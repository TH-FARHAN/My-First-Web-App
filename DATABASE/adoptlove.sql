-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2025 at 02:11 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoptlove`
--
CREATE DATABASE IF NOT EXISTS `adoptlove` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `adoptlove`;

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

DROP TABLE IF EXISTS `adoption`;
CREATE TABLE IF NOT EXISTS `adoption` (
  `a_id` int NOT NULL AUTO_INCREMENT,
  `a_name` varchar(200) NOT NULL,
  `a_address` text NOT NULL,
  `a_pn` varchar(50) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `pet_id` int NOT NULL,
  `a_petName` varchar(200) NOT NULL,
  `a_comment` text NOT NULL,
  `a_status` int NOT NULL,
  `a_createdBy` varchar(200) NOT NULL,
  `a_createdDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `a_updatedBy` varchar(200) NOT NULL,
  `a_updatedDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`a_id`, `a_name`, `a_address`, `a_pn`, `a_email`, `pet_id`, `a_petName`, `a_comment`, `a_status`, `a_createdBy`, `a_createdDate`, `a_updatedBy`, `a_updatedDate`) VALUES
(9, 'Shahina ', 'Pattambi house, Tana, Mampad P.O\r\n676542', '9656106815', 'shahina1981@gmail.com', 2, 'Labrador Retriever', 'i want this dog for adoption and i wanna see their vaccination certificates and other papers etc', 1, '', '2025-06-01 03:22:53.000000', '', '2025-06-01 03:22:53.978860'),
(12, 'Amal', 'koodethulle House, Mangav, Kozhikode P.O', '8839722992', 'amal@gmail.com', 11, 'Bengal', 'i want this cat', 1, '', '2025-06-02 07:15:51.000000', '', '2025-06-02 07:15:51.021529'),
(8, 'Muhammed Hirfan', 'Thrissery house, Naduvakkad, Mampad P.O\r\n676542', '8078800702', 'hirfan123@gmail.com', 3, 'Ragdoll', 'i want this cat for adopt', 1, '', '2025-05-30 13:46:43.000000', '', '2025-05-30 13:46:43.929837'),
(13, 'Muhammed Farhan', 'Thrissery House, Naduvakkad, Mampad P.O, Nilambur, Malappuram, Kerala, India\r\n676542', '8848272821', 'farhanmampad123@gmail.com', 6, 'Siberian Husky', 'i would like to adopt this puppy', 1, '', '2025-06-02 10:33:57.000000', '', '2025-06-02 10:33:57.383363'),
(10, 'Mishad', 'Cherakkapparamban House, ippoottingal,Mampad P.O\r\n676542', '8304053593', 'cpmishad@gmail.com', 4, 'Beagle', 'i would like to adopt this dog', 1, '', '2025-06-01 13:04:55.000000', '', '2025-06-01 13:04:55.260485'),
(11, 'Abin Muhammed ', 'Madathingal House , ippoottingal, Mampad P.O, Nilambur, Malappuram, Kerala\r\n676542', '8075981256', 'mhdabin@gmail.com', 10, ' British Shorthair', 'I would like to adopt this cat ', 1, '', '2025-06-02 05:16:21.000000', '', '2025-06-02 05:16:21.640140'),
(14, 'Answaf', 'Kunnathparambil House, Sulthanpadi, Pathiripadam P.O\r\n679334', '7012278205', 'answafkp@gmail.com', 3, 'Ragdoll', 'i want this cat for adoption', 1, '', '2025-06-03 10:32:07.000000', '', '2025-06-03 10:32:07.338723'),
(15, 'Anshal', 'Beppukaran House, Naduvakkad, Mampad P.O\r\n676542', '8157029473', 'anshalmpd@gmail.com', 1, 'German Shepherd', 'I want purchase this dog, can you send their detials', 1, '', '2025-06-03 10:35:14.000000', '', '2025-06-03 10:35:14.643074'),
(16, 'Muhammed Adhnan', 'Kannankodan House, Panamkayam, Pothukallu, Pathar (P.O)\r\n679334', '9846198339', 'adhnan@gmail.com', 37, 'Finches ', 'give me the details', 1, '', '2025-06-03 16:53:11.000000', '', '2025-06-03 16:53:11.127559'),
(17, 'Janfishan', 'Therissery House, Naduvakkad, Mampad P.O, Kerala\r\n676542', '9645859531', 'janfishan@gmail.com', 27, 'Ball Python ', 'nothing', 1, '', '2025-06-06 13:15:24.000000', '', '2025-06-06 13:15:24.376892'),
(18, 'Hidayathulla', 'Thrissery House, Naduvakkad, Mampad P.O, Kerala\r\n676542', '9656106815', 'thhidayathulla@gmail.com', 13, 'Macaws', 'i like it', 1, '', '2025-06-06 13:31:49.000000', '', '2025-06-06 13:31:49.693466'),
(19, 'Mazin', 'manzil house, Mampad P.O\r\n676542', '8967123465', 'mazin@gmail.com', 37, 'Finches ', 'nothing', 1, '', '2025-06-06 14:00:03.000000', '', '2025-06-06 14:00:03.130887'),
(20, 'sahal', 'housename House, Mampad P.O, \r\n676542', '9544561511', 'sahal@gmail.com', 37, 'Finches ', 'nothing', 1, '', '2025-06-06 14:13:20.000000', '', '2025-06-06 14:13:20.181436'),
(21, 'sahil', 'housename (H), (Mampad P.O)\r\n676542', '9865235426', 'sahil@gmail.com', 16, 'Java Sparrow', 'nothing', 1, '', '2025-06-06 14:37:00.000000', '', '2025-06-06 14:37:00.847298'),
(22, 'Jobin', 'housename (H), Thottintakara, Mampad (P.O) ', '8867233276', 'jobin@gmail.com', 35, 'Ferrets ', 'nice', 1, '', '2025-06-06 14:39:36.000000', '', '2025-06-06 14:39:36.679406'),
(23, 'Jobin', 'housename (H), Thottintakara, Mampad (P.O) ', '8867233276', 'jobin@gmail.com', 35, 'Ferrets ', 'nice', 1, '', '2025-06-06 14:45:25.000000', '', '2025-06-06 14:45:25.451491'),
(24, 'sahil', 'housename (H), (Mampad P.O)\r\n676542', '9865235426', 'sahil@gmail.com', 16, 'Java Sparrow', 'nothing', 1, '', '2025-06-06 14:46:31.000000', '', '2025-06-06 14:46:31.500518'),
(25, 'mishal', 'housename (H), Mampad, Mampad (P.O)', '6753897635', 'mishal@gamil.com', 8, 'Persian', 'nothing', 1, '', '2025-06-06 14:50:45.000000', '', '2025-06-06 14:50:45.802048'),
(26, 'Muhammed Fezin', 'housename (H), place, place (P.O),kerala', '8945559221', 'fezin123@gmail.com', 36, 'Hamsters ', 'nothing', 1, '', '2025-06-08 05:24:46.000000', '', '2025-06-08 05:24:46.458479'),
(27, 'Mirzan Ahammed', 'Housename (H), place, place(P.O),Kerala', '9834657218', 'mirzanahd@gmail.com', 22, 'Angora Rabbi', 'nothing', 1, '', '2025-06-08 05:27:22.000000', '', '2025-06-08 05:27:22.282789'),
(28, 'Mirfa', 'housename(H), place, place (P.O),Kerala', '6756288724', 'mirfa@gmail.com', 31, 'Catfish', 'nothing', 1, '', '2025-06-08 06:29:36.000000', '', '2025-06-08 06:29:36.648804'),
(29, 'Hafi', 'housename (H), place, place (P.O), Kerala', '675462567', 'hafi@gmail.com', 19, 'Holland Lop', 'nothing', 1, '', '2025-06-08 06:32:02.000000', '', '2025-06-08 06:32:02.030106'),
(30, 'Justin', 'nothing', '4556242345', 'justin@gmail.com', 33, 'Guppies ', 'no', 1, '', '2025-06-09 17:06:54.000000', '', '2025-06-09 17:06:54.227103'),
(31, 'Muhammed', 'housename(House), place, place (P.O),kerala\r\n676542', '7654678643', 'muhammed@gmail.com', 15, 'Zebra Finch', 'nothing', 1, '', '2025-06-12 17:58:25.000000', '', '2025-06-12 17:58:25.917355'),
(32, 'vishnu', '', '6374582763', 'vishnu@gmail.com', 15, 'Zebra Finch', '', 1, '', '2025-06-13 13:34:22.000000', '', '2025-06-13 13:34:22.850785'),
(33, 'sanika', 'housename(H), Place, Place(P.O), Kerala', '79077523997', 'sanika@gmail.com', 28, 'Bearded Dragon ', 'nothing', 1, '', '2025-06-13 14:55:03.000000', '', '2025-06-13 14:55:03.198529'),
(34, 'Lidiya', 'Housename(H), place, Kerala', '8113977738', 'lidiya@gmail.com', 29, ' Crocodile', 'nothing', 1, '', '2025-06-13 14:59:12.000000', '', '2025-06-13 14:59:12.357232'),
(35, 'Ameerudheen', 'kerala', '9037826246', 'ameer@gmail.com', 29, ' Crocodile', 'nothing', 1, '', '2025-06-13 15:20:21.000000', '', '2025-06-13 15:20:21.981088'),
(36, 'mon', 'no', '839389730', 'mon@gmail.com', 14, 'Cockatiel', 'no', 1, '', '2025-07-03 17:26:20.000000', '', '2025-07-03 17:26:20.839460'),
(37, 'riyas', 'Kuniyan House , panthalingal, Meppadam (P.O), Mampad\r\n676542', '8976654535', 'riyasmadofficial@gmail.com', 36, 'Hamsters', 'I wish adopt this pet', 1, '', '2025-07-08 04:35:51.000000', '', '2025-07-08 04:35:51.670795'),
(38, 'fisher', 'no', '789456213', 'fisher@gmail.com', 11, 'Bengal', 'no', 1, '', '2025-07-22 16:02:35.000000', '', '2025-07-22 16:02:35.942140');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) NOT NULL,
  `status` int NOT NULL,
  `createdBy` varchar(200) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` varchar(200) NOT NULL,
  `updatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `status`, `createdBy`, `createdDate`, `updatedBy`, `updatedDate`) VALUES
(1, 'Dog', 1, 'Admin', '2025-05-23 17:36:32', 'Admin', '2025-05-23 17:36:32'),
(2, 'Cat', 1, 'Admin', '2025-05-24 17:36:32', 'Admin', '2025-05-24 17:36:32'),
(3, 'Bird', 1, 'Admin', '2025-05-31 05:20:03', 'Admin', '2025-05-31 05:20:03'),
(4, 'Rabbit', 1, 'Admin', '2025-06-03 11:23:02', 'Admin', '2025-06-03 11:23:02'),
(5, 'Reptiles', 1, 'Admin', '2025-06-03 11:23:46', 'Admin', '2025-06-03 11:23:46'),
(6, 'Fish', 1, 'Admin', '2025-06-03 11:24:32', 'Admin', '2025-06-03 11:24:32'),
(7, 'Mammals', 1, 'Admin', '2025-06-03 12:23:51', 'Admin', '2025-06-03 12:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `p_tittle` varchar(200) NOT NULL,
  `p_description` varchar(200) NOT NULL,
  `p_imagename` varchar(200) NOT NULL,
  `cat_id` int NOT NULL,
  `p_date_of_birth` date NOT NULL,
  `p_status` int NOT NULL,
  `p_createdBy` varchar(200) NOT NULL,
  `p_createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_updatedBy` varchar(200) NOT NULL,
  `p_updatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`p_id`, `p_tittle`, `p_description`, `p_imagename`, `cat_id`, `p_date_of_birth`, `p_status`, `p_createdBy`, `p_createdDate`, `p_updatedBy`, `p_updatedDate`) VALUES
(1, 'German Shepherd', 'The German Shepherd is a smart, loyal, and protective dog breed. It is known for its strength, obedience, and versatility in work and family roles.', 'uploads/1748671470_German shepperd.jpeg', 1, '2020-04-25', 1, '[value-8]', '0000-00-00 00:00:00', '[value-10]', '0000-00-00 00:00:00'),
(3, 'Ragdoll', 'The Ragdoll is a calm, affectionate, and gentle cat breed known for its striking blue eyes and silky fur. It loves being held and often goes limp in your arms, just like a ragdoll.', 'uploads/1748746726_Ragdoll.jpeg', 2, '2023-05-10', 1, '', '2025-05-23 19:25:26', '', '2025-05-23 19:25:26'),
(2, 'Labrador Retriever', 'The Labrador Retriever is a friendly, gentle, and intelligent dog breed. It is known for its playful nature, loyalty, and excellence as a family pet or service dog.', 'uploads/1748712958_Labrador Retriever.webp', 1, '2020-05-23', 1, '', '2025-05-23 17:57:50', '', '2025-05-23 17:57:50'),
(6, 'Siberian Husky', ' The Siberian Husky is energetic, friendly, and independent with a strong pack instinct. Known for its stunning appearance, it thrives in active households.', 'uploads/1748747477_Siberian Husky.webp', 1, '2025-03-20', 1, '', '2025-06-01 03:11:17', '', '2025-06-01 03:11:17'),
(4, 'Beagle', 'The Beagle is a friendly, curious, and energetic dog breed with a strong sense of smell. It’s great with families and enjoys outdoor activities and play.', 'uploads/1748713271_Beagle.webp', 1, '2021-05-08', 1, '', '2025-05-31 03:50:32', '', '2025-05-31 03:50:32'),
(5, 'Rottweiler', 'The Rottweiler is a strong, confident, and loyal dog breed known for its protective nature. With proper training and socialization, it makes a devoted family guardian and companion.', 'uploads/1748713527_Rottweiler.webp', 1, '2019-05-10', 1, '', '2025-05-31 03:52:10', '', '2025-05-31 03:52:10'),
(7, 'Great Dane', ' The Great Dane is a giant, gentle, and friendly dog often called a “gentle giant.” Despite its size, it is calm and affectionate with families.', 'uploads/1748748011_Great Dane.webp', 1, '2022-06-22', 1, '', '2025-06-01 03:20:11', '', '2025-06-01 03:20:11'),
(8, 'Persian', 'Known for their long, luxurious fur and flat faces, Persians are calm, affectionate, and enjoy a quiet, relaxed environment.', 'uploads/1748750131_Persian.webp', 2, '2024-06-03', 1, '', '2025-06-01 03:55:31', '', '2025-06-01 03:55:31'),
(9, 'Maine Coon', 'One of the largest domestic cat breeds, Maine Coons are friendly, intelligent, and dog-like in behavior. They have thick, water-repellent fur and bushy tails.', 'uploads/1748750251_Maine Coon.webp', 2, '2023-12-30', 1, '', '2025-06-01 03:57:31', '', '2025-06-01 03:57:31'),
(10, ' British Shorthair', 'Known for their dense, plush coat and round faces, British Shorthairs are calm, easygoing, and make excellent indoor companions.', 'uploads/1748750391_British Shorthair.jpeg', 2, '2025-04-01', 1, '', '2025-06-01 03:59:51', '', '2025-06-01 03:59:51'),
(11, 'Bengal', 'Bengals are energetic and athletic cats with a wild appearance—spotted or marbled coats reminiscent of leopards. They are playful and intelligent.', 'uploads/1748750523_Bengal.webp', 2, '2023-10-28', 1, '', '2025-06-01 04:02:03', '', '2025-06-01 04:02:03'),
(12, 'RagaMuffin', 'The RagaMuffin is a large, affectionate, and gentle cat with a bunny-soft coat, known for its friendly nature, easy grooming, and perfect fit for families.', 'uploads/1748751126_RagaMuffin.jpg', 2, '2023-11-28', 1, '', '2025-06-01 04:12:06', '', '2025-06-01 04:12:06'),
(13, 'Macaws', 'Macaws are large, colorful parrots native to Central and South America. They are known for their vibrant plumage, strong beaks, and intelligence, making them popular pets and fascinating wild birds.\r\n', 'uploads/1748948027_Macaw.jpg', 3, '2024-06-20', 1, '', '2025-06-03 10:53:47', '', '2025-06-03 10:53:47'),
(14, 'Cockatiel ', 'Cockatiels are affectionate, small parrots with distinctive crests, known for their playful nature and ability to whistle tunes. They thrive on human interaction and enjoy learning tricks.', 'uploads/1748948482_Cockatiel.webp', 3, '2025-01-02', 1, '', '2025-06-03 11:01:22', '', '2025-06-03 11:01:22'),
(15, 'Zebra Finch', 'The Zebra Finch is a small, colorful songbird native to Australia, known for its cheerful chirping, social nature, and the male\'s bright orange cheeks and unique song used to attract mates.', 'uploads/1748948776_Zebra Finch.webp', 3, '2025-01-08', 1, '', '2025-06-03 11:06:16', '', '2025-06-03 11:06:16'),
(16, 'Java Sparrow', 'The Java Sparrow is a sleek, sociable bird native to Indonesia, easily recognized by its thick pink bill, black head, and soft gray body, and is often kept as a charming and gentle pet.', 'uploads/1748948894_Java Sparrow.webp', 3, '2025-02-01', 1, '', '2025-06-03 11:08:14', '', '2025-06-03 11:08:14'),
(17, 'Lovebirds ', 'Lovebirds are small, colorful parrots known for their affectionate nature, strong pair bonds, and playful personalities, often seen sitting close together and grooming their mates.', 'uploads/1748949099_- Lovebirds.webp', 3, '2025-02-04', 1, '', '2025-06-03 11:11:39', '', '2025-06-03 11:11:39'),
(18, 'Sun Conure', 'The Sun Conure is a vibrant, medium-sized parrot native to South America, admired for its brilliant yellow, orange, and green plumage, loud vocalizations, and affectionate, energetic temperament.', 'uploads/1748949241_- Sun Conure.webp', 3, '2024-12-22', 1, '', '2025-06-03 11:14:01', '', '2025-06-03 11:14:01'),
(19, 'Holland Lop', ' The Holland Lop is a small, adorable rabbit breed known for its floppy ears, compact body, and friendly, easygoing personality, making it a favorite among pet owners.', 'uploads/1748949971_Holland Lop.webp', 4, '2025-02-19', 1, '', '2025-06-03 11:26:11', '', '2025-06-03 11:26:11'),
(20, 'Lionhead', 'The Lionhead Rabbit is a charming, small breed recognized by its distinctive woolly mane around the head, giving it a lion-like appearance, along with a playful and affectionate demeanor.', 'uploads/1748950050_- Lionhead Rabbit.webp', 4, '2025-01-31', 1, '', '2025-06-03 11:27:30', '', '2025-06-03 11:27:30'),
(21, 'Netherland Dwarf', 'The Netherland Dwarf is one of the tiniest rabbit breeds, featuring a round face, short ears, and a compact body, prized for its cute looks and lively, curious nature.', 'uploads/1748950121_Netherland Dwarf.webp', 4, '2025-01-28', 1, '', '2025-06-03 11:28:41', '', '2025-06-03 11:28:41'),
(22, 'Angora Rabbi', 'The Angora Rabbit is a fluffy, long-haired breed originally bred for its luxurious wool, known for its gentle temperament and the regular grooming needed to maintain its soft coat.', 'uploads/1748950175_Angora Rabbit.webp', 4, '2025-02-19', 1, '', '2025-06-03 11:29:35', '', '2025-06-03 11:29:35'),
(23, 'Mini Rex', 'The Mini Rex is a small rabbit breed known for its incredibly soft, velvety fur, compact body, and calm, friendly personality, making it a popular choice for both pet owners and show enthusiasts.', 'uploads/1748950443_- Mini Rex.webp', 4, '2024-12-24', 1, '', '2025-06-03 11:34:04', '', '2025-06-03 11:34:04'),
(24, 'Leopard Gecko ', 'A small, calm lizard with spotted skin that eats insects and is perfect for beginners. It is nocturnal and needs a warm, dry habitat without climbing surfaces.', 'uploads/1748951840_Leopard Gecko.jpg', 5, '2025-01-13', 1, '', '2025-06-03 11:57:20', '', '2025-06-03 11:57:20'),
(25, 'Iguana ', ' A medium to large herbivorous lizard known for its bold appearance and spiny crest. It requires a spacious, humid environment and can become tame with regular handling.', 'uploads/1748952030_iguana.jpg', 5, '2024-11-13', 1, '', '2025-06-03 12:00:30', '', '2025-06-03 12:00:30'),
(26, 'Red-eared Slider Turtle ', ' A semi-aquatic turtle with red stripes by its eyes that loves swimming and basking. It needs a clean tank, UVB light, and a mixed diet.', 'uploads/1748952411_- Red-eared Slider Turtle.jpeg', 5, '2025-02-02', 1, '', '2025-06-03 12:06:51', '', '2025-06-03 12:06:51'),
(27, 'Ball Python ', ' A gentle, non-venomous snake that curls into a ball when scared and is easy to handle. It needs a warm enclosure and feeds mainly on rodents, making it great for beginners.', 'uploads/1748952501_- Ball Python.webp', 5, '2024-11-29', 1, '', '2025-06-03 12:08:21', '', '2025-06-03 12:08:21'),
(28, 'Bearded Dragon ', ' A hardy, friendly lizard with a spiky “beard” it puffs up when threatened. It enjoys interaction and requires a warm, UVB-lit habitat with a diet of vegetables and insects.', 'uploads/1748952557_Bearded Dragon.webp', 5, '2025-01-15', 1, '', '2025-06-03 12:09:17', '', '2025-06-03 12:09:17'),
(29, ' Crocodile', 'A crocodile is a large reptile with tough skin and sharp teeth. It lives in rivers and hunts fish and other animals.', 'uploads/1748952937_crocodiles.jpeg', 5, '2024-11-23', 1, '', '2025-06-03 12:15:37', '', '2025-06-03 12:15:37'),
(30, 'Fighter', 'A colorful, aggressive freshwater fish known for its long fins and territorial behavior. It thrives in small tanks and is popular among aquarium hobbyists(Betta fish).', 'uploads/1748953104_fighter.webp', 6, '2025-03-25', 1, '', '2025-06-03 12:18:24', '', '2025-06-03 12:18:24'),
(31, 'Catfish', ' A bottom-dwelling freshwater fish recognized by its whisker-like barbels around the mouth. Catfish are hardy and feed on a variety of foods, making them common in aquariums and fisheries.', 'uploads/1748953159_catfish.jpeg', 6, '2023-11-22', 1, '', '2025-06-03 12:19:19', '', '2025-06-03 12:19:19'),
(32, 'Goldfish ', 'A popular freshwater fish known for its bright colors and flowing fins, often kept as a beginner’s pet. They require clean, well-oxygenated water and can live for many years with proper care.', 'uploads/1748953351_- Goldfish.jpg', 6, '2025-04-01', 1, '', '2025-06-03 12:22:31', '', '2025-06-03 12:22:31'),
(33, 'Guppies ', 'Small, colorful freshwater fish famous for their lively behavior and easy breeding. They adapt well to community tanks and are ideal for beginner aquarium enthusiasts.', 'uploads/1748953392_- Guppies.webp', 6, '2025-03-04', 1, '', '2025-06-03 12:23:12', '', '2025-06-03 12:23:12'),
(34, 'Guinea Pig ', 'A gentle, social rodent known for its vocal sounds and friendly nature. They need regular grooming, a spacious cage, and a diet rich in hay and vegetables.', 'uploads/1748953573_guinea pig.jpeg', 7, '2024-10-15', 1, '', '2025-06-03 12:26:13', '', '2025-06-03 12:26:13'),
(35, 'Ferrets ', ' Energetic, curious mammals related to weasels, known for their playful behavior and intelligence. They require lots of interaction, a secure environment, and a meat-based diet.', 'uploads/1748953626_ferrets.jpeg', 7, '2024-10-04', 1, '', '2025-06-03 12:27:06', '', '2025-06-03 12:27:06'),
(36, 'Hamsters ', ' Small, nocturnal rodents that are popular as low-maintenance pets. They enjoy burrowing and running on wheels, needing a cozy cage and a balanced diet of seeds and pellets.', 'uploads/1748953678_hamsters.webp', 7, '2024-11-06', 1, '', '2025-06-03 12:27:58', '', '2025-06-03 12:27:58'),
(37, 'Finches ', 'Small, active birds known for their cheerful songs and colorful plumage. They are social and thrive in pairs or groups with plenty of space to fly.', 'uploads/1748953781_finches.webp', 3, '2025-01-12', 1, '', '2025-06-03 12:29:41', '', '2025-06-03 12:29:41'),
(38, 'Indian Ringneck ', 'The Indian Ringneck Parakeet is a medium-sized, intelligent parrot known for its bright green feathers, playful nature, and ability to mimic human speech.\r\n', 'uploads/1748953843_indianringneck1.jpeg', 3, '2024-12-01', 1, '', '2025-06-03 12:30:43', '', '2025-06-03 12:30:43'),
(39, 'nothing', 'ushs', 'uploads/1751561191_4.jpg', 3, '2025-08-20', 0, '', '2025-07-03 16:46:31', '', '2025-07-03 16:46:31'),
(40, 'sample', 'nothing', 'uploads/1753200269_problem.jpg', 1, '2025-07-09', 0, '', '2025-07-22 16:04:29', '', '2025-07-22 16:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int NOT NULL,
  `createdBy` varchar(200) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` varchar(200) NOT NULL,
  `updatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `createdBy`, `createdDate`, `updatedBy`, `updatedDate`) VALUES
(1, 'admin', '$2y$10$MrbyIztF9bTAdmzc2JA4NeZn8Le5Iw2hB.Q2xQCd0P9uh45wn27je', 1, '', '2025-05-23 17:29:59', '', '2025-05-23 17:29:59');
--
-- Database: `db_randomize`
--
CREATE DATABASE IF NOT EXISTS `db_randomize` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_randomize`;

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

DROP TABLE IF EXISTS `guides`;
CREATE TABLE IF NOT EXISTS `guides` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_assignments`
--

DROP TABLE IF EXISTS `project_assignments`;
CREATE TABLE IF NOT EXISTS `project_assignments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `project_number` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

DROP TABLE IF EXISTS `project_details`;
CREATE TABLE IF NOT EXISTS `project_details` (
  `project_no` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `abstract` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`project_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reg_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year_of_admission` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_guide_assignments`
--

DROP TABLE IF EXISTS `student_guide_assignments`;
CREATE TABLE IF NOT EXISTS `student_guide_assignments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `guide_id` int NOT NULL,
  `assigned_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `guide_id` (`guide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123\r\n\r\n', '2025-05-03 20:13:28'),
(2, 'user1', 'user1@gmail.com', '$2y$10$EAClmMCd4xQ0uYjhi2c7R.cSM4c4BiBTHZ4QbOrVmSuivznBYUUja', '2025-05-08 04:57:32');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_assignments`
--
ALTER TABLE `project_assignments`
  ADD CONSTRAINT `project_assignments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `student_guide_assignments`
--
ALTER TABLE `student_guide_assignments`
  ADD CONSTRAINT `student_guide_assignments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `student_guide_assignments_ibfk_2` FOREIGN KEY (`guide_id`) REFERENCES `guides` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
