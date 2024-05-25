-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 03:15 AM
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
-- Database: `hungerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `basketlist`
--

CREATE TABLE `basketlist` (
  `basketed_user_id` int(11) NOT NULL,
  `basketed_food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basketlist`
--

INSERT INTO `basketlist` (`basketed_user_id`, `basketed_food_id`, `quantity`) VALUES
(9, 7, 1),
(9, 9, 1),
(9, 12, 1),
(9, 13, 2),
(9, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customlist`
--

CREATE TABLE `customlist` (
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `deliverytime` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customlist`
--

INSERT INTO `customlist` (`user_id`, `food_id`, `date`, `deliverytime`) VALUES
(10, 0, '0000-00-00', 'Breakfast'),
(10, 4, '2024-05-27', 'Lunch'),
(10, 6, '0000-00-00', 'Breakfast'),
(10, 7, '0000-00-00', 'Breakfast'),
(10, 8, '2024-05-30', 'Lunch'),
(10, 11, '2024-05-28', 'Breakfast');

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
  `food_id` int(11) NOT NULL,
  `food_review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_name`, `food_price`, `food_instock`, `food_description`, `food_picture`, `food_provider_id`, `food_id`, `food_review`) VALUES
('Konpeitō', '250', 1, 'Some of the best non-human Studio Ghibli characters, the soot sprites, appear in both My Neighbor Totoro and Spirited Away. Their personalities are shown more in the latter, where they work in the boiler room of Yubabas bathhouse, rewarded for their work with handfuls of konpeitō. Konpeitō are colorful, star-like clusters of crunchy candy that originate from Portugal, but are also found in Japan. Made primarily from a mix of sugar and water, it\'s easy to see why the super sweet morsels get the soot sprites so excited.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Soot-sprites-eating-Konpeito-in-Spirited-Away.jpg', 2, 3, 0),
('Herring And Pumpkin Pie', '450', 1, 'Of all the deliveries that Kiki makes in Kiki\'s Delivery Service, none is more inviting than the herring and pumpkin pie she transports for a customer who bakes it as a birthday gift for her granddaughter. Upon the delivery though, the young granddaughter reacts ungratefully to the present, in a moment that is particularly upsetting given all the time and effort Kiki put into ensuring its arrival on time. The scene does serve to show Kiki\'s personality in contrast to the girl she brings the pie to, though.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Herring-and-Pumpkin-Pie-in-Kikis-Delivery-Service.jpg', 2, 4, 0),
('Nabeyaki Udon', '500', 1, 'While much of Whisper of the Heart sees protagonist Shizuku busy developing her writing skills, she does have some moments of downtime, as seen when she visits Shirō and the two eat Nabeyaki Udon together.\r\nA soup dish served in a special clay pot, Nabeyaki Udon contains thick Udon noodles, vegetables, and eggs, with seafood like shrimp also often being added. The version that Shizuku and Shirō eat seems to be wholly vegetable-based, but the vibrance of the vegetables makes it shine.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Shizuku-and-Shir---eat-udon-in-Whisper-of-the-Heart.jpg', 2, 5, 0),
('Chocolate Cake', '950', 1, 'After all of her hard work delivering the herring pie, Kiki later returns to the old lady who hired her for the job and is met with a surprise; a chocolate cake iced with her name and silhouette.\r\nIt\'s a thank you for the way that Kiki went above and beyond in her service, and the kind gesture has a profound effect on the young witch, who has struggled to feel truly at home since she moved to town. This scene shows that Kiki\'s hard work has not gone unnoticed, and motivates her greatly.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Chocolate-cake-from-Kikis-Delivery-Service.jpg', 2, 6, 0),
('Onigiri', '200', 1, 'Given that eating food in the spirit world is what turned her parents into pigs, it\'s no surprise that Chihiro is initially reluctant to eat the onigiri that Haku brings her in Spirited Away. When she does, though, she\'s overwhelmed by all that she\'s been through, and Haku is there to comfort her as she eats. Onigiri are rice balls often shaped into triangles and filled with a variety of fillings. They are sometimes also wrapped in nori, the seaweed used in sushi. Their simplicity are in direct opposition to the overwhelming buffet that took Chihiro\'s parents from her.', 'https://static0.srcdn.com/wordpress/wp-content/uploads/2021/01/Chihiro-eating-Onigiri-in-Spirited-Away.jpg', 2, 7, 0),
('Aji Fry', '350', 1, 'Japanese cuisine involves various fried dishes, but the one seen in From Up on Poppy Hill, cooked by Umi, is aji fry, which is deep-fried mackerel coated in breadcrumbs. Given the film\'s coastal setting and the importance of the sea in the story, the use of seafood in Umi\'s dishes makes sense.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Umi-frying-tempura-in-From-Up-on-Poppy-Hill.jpg', 2, 8, 0),
('Sakuma Drops', '250', 1, 'Grave of the Fireflies is perhaps the most heartwrenching film in Miyazaki\'s library, and if there\'s one symbol of the movie that captures its message, it\'s Setsuko\'s Sakuma Drops, used in moments of joy and sorrow to equally great effect.\r\nIn spite of its simple appearance, this tin of hard candy is a common delight in Japan. Having existed since 1903, Sakuma Drops or similar fruit-flavored hard candy can easily be bought or ordered online for those wishing for a taste of the sweet tre', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2019/06/7507292.jpg', 2, 9, 0),
('Bento Boxes', '425', 1, 'Bento boxes are often prepared as lunches for loved ones, as seen in the movie when Satsuki makes one for little sister Mei. They can be as simple or as complicated as one wants and can come in a variety of shapes, sizes, flavors, and themes.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/bento-box-totoro.jpg', 2, 10, 0),
('Vegetable Soup', '250', 1, 'Vegetable soups are common across a number of cultures, but there\'s something extremely enticing about the nimono from Castle in the Sky. A stew prepared with dashi broth and winter vegetables, nimono is a hearty and comforting dish perfect for a cold night.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/from-up-on-poppy-hill.jpg', 2, 11, 0),
('Bacon and Eggs', '650', 1, 'Nothing says comfort like fried breakfast food and the bacon and eggs served in Howl\'s Moving Castle are a hearty way to start the day. Cooked by Sophie and Howl over Calcifer\'s tamed flame, this simple dish made by some of the movie\'s most likable characters is tinged with magic.\r\nThe secret to replicating its look in the movie is to use thick-cut bacon, and aside from that only eggs are needed for a complete meal. In the movie, freshly sliced bread is also served on the side, though this is not essential.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/04/calcifer-bacon-burn-Howls-Moving-Castle.jpg', 2, 12, 0),
('Sandwiches', '150', 1, 'The sandwich in Ponyo contains ham, lettuce, and cheese, and as Sōsuke is eating it, Ponyo steals a piece, an action which kickstarts her love for ham in any form, and also becomes the basis for one of Ponyo\'s best quotes in the movie.\r\nFood in Ponyo acts as a way for the titular character to become more connected to both Sōsuke and the human world, even through a meal as simple as a sandwich.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/01/Ponyo-Sandwich.jpg', 2, 13, 0),
('Ramen', '950', 1, 'Ramen is a fixture in many Japanese films and series, but the version seen in Ponyo can be very simply replicated. With essentially four ingredients consisting of store-bought instant ramen, green onion, boiled egg, and Ponyo\'s beloved ham, it\'s a recipe everyone can master.\r\n\r\nFood is often used in Miyazaki movies to bring comfort to a character, and hot ramen on a rainy day definitely does the trick for Ponyo and Sōsuke. The ingredients might be simple, but the dish offers a taste of home that anyone would love.', 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/ramen-ponyo-Cropped.jpg', 2, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(191) NOT NULL,
  `hotel_description` varchar(191) NOT NULL,
  `hotel_picture` varchar(191) DEFAULT NULL,
  `hotel_password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `hotel_description`, `hotel_picture`, `hotel_password`) VALUES
(2, 'Ghibli Food Shop', 'Pretty much all Studio Ghibli food looks positively decadent. Everything from steaming bowls of noodles and inviting cups of tea to sizzling meats and delectable desserts can be found across ', 'https://cdn.vox-cdn.com/thumbor/Zvz46RaS7xPx3ETIXU2JOS-f1Mk=/0x0:2040x1360/1570x883/filters:focal(857x517:1183x843):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/66853190/jbareham_2', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `order_id` int(11) NOT NULL,
  `ordered_user_id` int(11) NOT NULL,
  `ordered_food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `delivery_time` varchar(50) NOT NULL,
  `order_status` tinyint(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`order_id`, `ordered_user_id`, `ordered_food_id`, `quantity`, `contact`, `location`, `delivery_time`, `order_status`, `date`) VALUES
(13, 10, 7, 1, '01733783039', 'daffodil university', 'Instant', 1, '2024-05-25'),
(14, 10, 9, 1, '01733783039', 'daffodil university', 'Instant', 1, '2024-05-25'),
(15, 10, 12, 1, '01733783039', 'daffodil university', 'Instant', 1, '2024-05-25'),
(16, 10, 13, 1, '01733783039', 'daffodil university', 'Instant', 1, '2024-05-25'),
(17, 10, 14, 1, '01733783039', 'daffodil university', 'Instant', 1, '2024-05-25'),
(18, 10, 7, 1, '01733783039', 'daffodil university', 'Dinner', 1, '2024-05-25'),
(19, 10, 9, 1, '01733783039', 'daffodil university', 'Dinner', 1, '2024-05-25'),
(20, 10, 12, 1, '01733783039', 'daffodil university', 'Dinner', 1, '2024-05-25'),
(21, 10, 13, 1, '01733783039', 'daffodil university', 'Dinner', 1, '2024-05-25'),
(22, 10, 14, 1, '01733783039', 'daffodil university', 'Dinner', 1, '2024-05-25'),
(23, 10, 7, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(24, 10, 9, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(25, 10, 12, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(26, 10, 13, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(27, 10, 14, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(28, 10, 7, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(29, 10, 9, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(30, 10, 12, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(31, 10, 13, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25'),
(32, 10, 14, 1, '01733783039', 'daffodil university', 'Breakfast', 1, '2024-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `user_email` varchar(191) NOT NULL,
  `user_password` varchar(191) NOT NULL,
  `user_bio` varchar(100) NOT NULL,
  `user_picture` varchar(191) DEFAULT NULL,
  `user_auth_token` varchar(191) DEFAULT NULL,
  `user_contact` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_bio`, `user_picture`, `user_auth_token`, `user_contact`) VALUES
(9, 'pretty', 'pretty@gmail.com', '123456', 'i want burger', NULL, NULL, NULL),
(10, 'almas', 'almas@gmail.com', '123456', 'not necessary', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_prisma_migrations`
--

CREATE TABLE `_prisma_migrations` (
  `id` varchar(36) NOT NULL,
  `checksum` varchar(64) NOT NULL,
  `finished_at` datetime(3) DEFAULT NULL,
  `migration_name` varchar(255) NOT NULL,
  `logs` text DEFAULT NULL,
  `rolled_back_at` datetime(3) DEFAULT NULL,
  `started_at` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `applied_steps_count` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_prisma_migrations`
--

INSERT INTO `_prisma_migrations` (`id`, `checksum`, `finished_at`, `migration_name`, `logs`, `rolled_back_at`, `started_at`, `applied_steps_count`) VALUES
('0246a9af-2264-4366-bf3d-18e1f233aa05', 'ae68df8d2ed7c7b7ad641065006c92b739e6d12db226dc05d04dc568e1d46d81', '2024-05-12 19:12:52.599', '20240427203354_datedelete', NULL, NULL, '2024-05-12 19:12:52.580', 1),
('191cdbff-088c-4287-b4ed-40d11e437e4c', 'a20112abd2010aa7c295af0f080f0af31361c44d536d633eceecc37d03da615a', '2024-05-12 19:12:52.579', '20240427192841_basketnamecorrection', NULL, NULL, '2024-05-12 19:12:52.454', 1),
('6587f2be-5137-4fde-bab7-115eb1135241', 'd709593c595d576e780a314e47a53d8bcf8ca0fd21f695c7b222117fd13e8eae', '2024-05-12 19:12:52.623', '20240505191022_pretty', NULL, NULL, '2024-05-12 19:12:52.601', 1),
('76ad2749-b49f-4c51-9bb2-a507ebf4daa9', '884895f15ad49298778711be16893528697f881bae3e91f41c2e74c84ec29e09', '2024-05-12 19:12:51.876', '20240427110943_initial', NULL, NULL, '2024-05-12 19:12:51.726', 1),
('b4e0969e-58d2-4ebe-adc5-6057d8b98806', 'd78c5f8da71d84c7da667c16dc456de260272b31633c167a7c691d5b66ad1502', '2024-05-12 19:12:51.948', '20240427134909_foodidupdated', NULL, NULL, '2024-05-12 19:12:51.878', 1),
('cf387e43-0503-4178-a046-164e3f008b21', '6506ef8df4667cfd0642ac2a31134fab6e7f6dbcd1f2796eeb83a5c8501522d5', '2024-05-12 19:12:52.428', '20240427182100_user_order_basket', NULL, NULL, '2024-05-12 19:12:51.949', 1),
('dc205080-c39c-467f-9479-fe311f325551', '5a234264bbd606d7cf99016f083af31626c838794ca7987e17ad0999972f56d3', '2024-05-12 19:12:52.452', '20240427184357_order_quantity', NULL, NULL, '2024-05-12 19:12:52.432', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basketlist`
--
ALTER TABLE `basketlist`
  ADD PRIMARY KEY (`basketed_user_id`,`basketed_food_id`),
  ADD KEY `basketlist_basketed_food_id_fkey` (`basketed_food_id`);

--
-- Indexes for table `customlist`
--
ALTER TABLE `customlist`
  ADD PRIMARY KEY (`user_id`,`food_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`),
  ADD UNIQUE KEY `Foods_food_id_key` (`food_id`),
  ADD KEY `Foods_food_provider_id_fkey` (`food_provider_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`),
  ADD UNIQUE KEY `Hotels_hotel_id_key` (`hotel_id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`order_id`,`ordered_user_id`,`ordered_food_id`),
  ADD UNIQUE KEY `Orderlist_order_id_key` (`order_id`),
  ADD KEY `Orderlist_ordered_user_id_fkey` (`ordered_user_id`),
  ADD KEY `Orderlist_ordered_food_id_fkey` (`ordered_food_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Users_user_id_key` (`user_id`),
  ADD UNIQUE KEY `Users_user_name_key` (`user_name`),
  ADD UNIQUE KEY `Users_user_email_key` (`user_email`);

--
-- Indexes for table `_prisma_migrations`
--
ALTER TABLE `_prisma_migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basketlist`
--
ALTER TABLE `basketlist`
  ADD CONSTRAINT `basketlist_basketed_food_id_fkey` FOREIGN KEY (`basketed_food_id`) REFERENCES `foods` (`food_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `basketlist_basketed_user_id_fkey` FOREIGN KEY (`basketed_user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `Foods_food_provider_id_fkey` FOREIGN KEY (`food_provider_id`) REFERENCES `hotels` (`hotel_id`) ON UPDATE CASCADE;

--
-- Constraints for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD CONSTRAINT `Orderlist_ordered_food_id_fkey` FOREIGN KEY (`ordered_food_id`) REFERENCES `foods` (`food_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Orderlist_ordered_user_id_fkey` FOREIGN KEY (`ordered_user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
