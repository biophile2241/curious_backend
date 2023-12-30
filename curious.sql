-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 10:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curious`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Education` varchar(8) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Img` varchar(25) NOT NULL,
  `Comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `Education`, `Gender`, `Mobile`, `Email`, `Title`, `Img`, `Comment`) VALUES
(1, 'Shivam Kumar', 'UG', 'Male', '967089765', 'biophile2241@gmail.com', 'Bird which can fly with one wing.', 'img/bird.jpg', 'A hummingbird is a small bird with a long, slender bill. Many hummingbirds have brightly colored, glittery feathers. Often the males are more colorful than the females. The birds are named for the humming sound made by the rapid beating of their wings.\r\nAll hummingbirds are small, and many are tiny. The largest of these birds is only about 8 inches (20 centimeters) long. It is called the giant hummingbird. The bee hummingbird is slightly longer than 2 inches (5 centimeters). It is the smallest living bird of any kind.\r\n\r\nHummingbirds have long wings and muscular bodies. They can fly forward, sideways, straight up or down, and even backward. Hummingbirds also hover, or hang in one place while beating their wings. Some small hummingbirds beat their wings 80 times per second.'),
(3, 'Amit Singh', 'UG', 'MALE', '876543219', 'amitsingh3456@gmail.com', 'Discovery of Buoyant force Applied by Liquid on submerging body.', 'img/buoyant.jpg', 'Archimedes, an ancient Greek mathematician and inventor, made his remarkable discovery in the 3rd century BC. He was tasked with determining whether a gold crown was pure gold or if it had been adulterated with a less valuable metal. While pondering this problem in his bath, he noticed that the water level rose as he immersed himself, and he suddenly realized that the buoyant force acting on his body was equal to the weight of the water displaced. This insight led him to establish the principle of buoyancy, famously expressed as \"Eureka!\" (meaning \"I have found it!\" in Greek). He concluded that the crown\'s density could be determined by measuring its volume displacement in water, thus exposing any impurities.\r\n\r\n'),
(5, 'Jaydip Kumar Singh', 'UG', 'MALE', '9382286683', 'jaydipsingh6272@gmail.com', 'How Earthen Pots Keep Water Cool Even in the Sun!', 'img/pot.jpg', 'Earthen pots often referred to as \"matka\" or \"ghara\" keep water cool by letting it seep through tiny holes. When the water on the pot\'s surface evaporates due to heat, it takes away heat from the water inside, making it cooler. The clay also stops some heat from getting in. So, even in the sun, the pot stays relatively cool and helps the water inside to stay cooler for longer.'),
(7, 'Aditya Patel', 'UG', 'MALE', '9028251970', 'aditya4567@gmail.com', 'Why Chili is hot and felt like painful cut after rubbing or eating?', 'img/hot.jpeg', 'Chili peppers contain a compound called capsaicin, which creates the sensation of heat or spiciness when it comes into contact with your tongue or skin. Capsaicin binds to receptors in your mouth that are normally responsible for sensing temperature and heat. This interaction tricks your brain into perceiving a burning or heating sensation, even though there\'s no actual temperature change. This is why consuming chili peppers gives the feeling of spiciness or heat.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
