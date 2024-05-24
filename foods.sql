-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_name` varchar(191) NOT NULL,
  `food_price` varchar(191) NOT NULL,
  `food_instock` tinyint(1) NOT NULL DEFAULT 1,
  `food_description` varchar(1000) NOT NULL,
  `food_picture` varchar(191) NOT NULL,
  `food_provider_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_name`, `food_price`, `food_instock`, `food_description`, `food_picture`, `food_provider_id`, `food_id`) VALUES
('Konpeitō', '250', 1, 'Some of the best non-human Studio Ghibli characters, the soot sprites, appear in both My Neighbor Totoro and Spirited Away. Their personalities are shown more in the latter, where they work in the boiler room of Yubabas bathhouse, rewarded for their work with handfuls of konpeitō. Konpeitō are colorful, star-like clusters of crunchy candy that originate from Portugal, but are also found in Japan. Made primarily from a mix of sugar and water, it\'s easy to see why the super sweet morsels get the soot sprites so excited.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Soot-sprites-eating-Konpeito-in-Spirited-Away.jpg', 2, 3),
('Herring And Pumpkin Pie', '450', 1, 'Of all the deliveries that Kiki makes in Kiki\'s Delivery Service, none is more inviting than the herring and pumpkin pie she transports for a customer who bakes it as a birthday gift for her granddaughter. Upon the delivery though, the young granddaughter reacts ungratefully to the present, in a moment that is particularly upsetting given all the time and effort Kiki put into ensuring its arrival on time. The scene does serve to show Kiki\'s personality in contrast to the girl she brings the pie to, though.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Herring-and-Pumpkin-Pie-in-Kikis-Delivery-Service.jpg', 2, 4),
('Nabeyaki Udon', '500', 1, 'While much of Whisper of the Heart sees protagonist Shizuku busy developing her writing skills, she does have some moments of downtime, as seen when she visits Shirō and the two eat Nabeyaki Udon together.\r\nA soup dish served in a special clay pot, Nabeyaki Udon contains thick Udon noodles, vegetables, and eggs, with seafood like shrimp also often being added. The version that Shizuku and Shirō eat seems to be wholly vegetable-based, but the vibrance of the vegetables makes it shine.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Shizuku-and-Shir---eat-udon-in-Whisper-of-the-Heart.jpg', 2, 5),
('Chocolate Cake', '950', 1, 'After all of her hard work delivering the herring pie, Kiki later returns to the old lady who hired her for the job and is met with a surprise; a chocolate cake iced with her name and silhouette.\r\nIt\'s a thank you for the way that Kiki went above and beyond in her service, and the kind gesture has a profound effect on the young witch, who has struggled to feel truly at home since she moved to town. This scene shows that Kiki\'s hard work has not gone unnoticed, and motivates her greatly.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Chocolate-cake-from-Kikis-Delivery-Service.jpg', 2, 6),
('Onigiri', '200', 1, 'Given that eating food in the spirit world is what turned her parents into pigs, it\'s no surprise that Chihiro is initially reluctant to eat the onigiri that Haku brings her in Spirited Away. When she does, though, she\'s overwhelmed by all that she\'s been through, and Haku is there to comfort her as she eats. Onigiri are rice balls often shaped into triangles and filled with a variety of fillings. They are sometimes also wrapped in nori, the seaweed used in sushi. Their simplicity are in direct opposition to the overwhelming buffet that took Chihiro\'s parents from her.', 'https://static0.srcdn.com/wordpress/wp-content/uploads/2021/01/Chihiro-eating-Onigiri-in-Spirited-Away.jpg', 2, 7),
('Aji Fry', '350', 1, 'Japanese cuisine involves various fried dishes, but the one seen in From Up on Poppy Hill, cooked by Umi, is aji fry, which is deep-fried mackerel coated in breadcrumbs. Given the film\'s coastal setting and the importance of the sea in the story, the use of seafood in Umi\'s dishes makes sense.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Umi-frying-tempura-in-From-Up-on-Poppy-Hill.jpg', 2, 8),
('Sakuma Drops', '250', 1, 'Grave of the Fireflies is perhaps the most heartwrenching film in Miyazaki\'s library, and if there\'s one symbol of the movie that captures its message, it\'s Setsuko\'s Sakuma Drops, used in moments of joy and sorrow to equally great effect.\r\nIn spite of its simple appearance, this tin of hard candy is a common delight in Japan. Having existed since 1903, Sakuma Drops or similar fruit-flavored hard candy can easily be bought or ordered online for those wishing for a taste of the sweet tre', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2019/06/7507292.jpg', 2, 9),
('Bento Boxes', '425', 1, 'Bento boxes are often prepared as lunches for loved ones, as seen in the movie when Satsuki makes one for little sister Mei. They can be as simple or as complicated as one wants and can come in a variety of shapes, sizes, flavors, and themes.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/bento-box-totoro.jpg', 2, 10),
('Vegetable Soup', '250', 1, 'Vegetable soups are common across a number of cultures, but there\'s something extremely enticing about the nimono from Castle in the Sky. A stew prepared with dashi broth and winter vegetables, nimono is a hearty and comforting dish perfect for a cold night.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/from-up-on-poppy-hill.jpg', 2, 11),
('Bacon and Eggs', '650', 1, 'Nothing says comfort like fried breakfast food and the bacon and eggs served in Howl\'s Moving Castle are a hearty way to start the day. Cooked by Sophie and Howl over Calcifer\'s tamed flame, this simple dish made by some of the movie\'s most likable characters is tinged with magic.\r\nThe secret to replicating its look in the movie is to use thick-cut bacon, and aside from that only eggs are needed for a complete meal. In the movie, freshly sliced bread is also served on the side, though this is not essential.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/04/calcifer-bacon-burn-Howls-Moving-Castle.jpg', 2, 12),
('Sandwiches', '150', 1, 'The sandwich in Ponyo contains ham, lettuce, and cheese, and as Sōsuke is eating it, Ponyo steals a piece, an action which kickstarts her love for ham in any form, and also becomes the basis for one of Ponyo\'s best quotes in the movie.\r\nFood in Ponyo acts as a way for the titular character to become more connected to both Sōsuke and the human world, even through a meal as simple as a sandwich.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Ponyo-Sandwich.jpg', 2, 13),
('Ramen', '950', 1, 'Ramen is a fixture in many Japanese films and series, but the version seen in Ponyo can be very simply replicated. With essentially four ingredients consisting of store-bought instant ramen, green onion, boiled egg, and Ponyo\'s beloved ham, it\'s a recipe everyone can master.\r\n\r\nFood is often used in Miyazaki movies to bring comfort to a character, and hot ramen on a rainy day definitely does the trick for Ponyo and Sōsuke. The ingredients might be simple, but the dish offers a taste of home that anyone would love.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/ramen-ponyo-Cropped.jpg', 2, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`),
  ADD UNIQUE KEY `Foods_food_id_key` (`food_id`),
  ADD KEY `Foods_food_provider_id_fkey` (`food_provider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `Foods_food_provider_id_fkey` FOREIGN KEY (`food_provider_id`) REFERENCES `hotels` (`hotel_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
