-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2016 at 01:01 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour_news`
--

CREATE TABLE `tour_news` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `picture_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_news`
--

INSERT INTO `tour_news` (`id`, `title`, `body`, `category`, `picture_location`) VALUES
(1, 'Serengeti Wildlife Safari & Tanzania Cultural Tour', 'Tanzania\'s land is full of evocative tales, remarkable narratives that reveal an ancient untamed world. The storytellers offer an absorbing experience into the untouched charms of Africa. From local Meru women to lion prides on the Serengeti, indigenous Hadzabe bushmen to the Big Five residents of Ngorongoro, this unique itinerary provides the perfect blend of cultural immersion and safari adventure.', 'animals', 'serengeti_wildlife.jpg'),
(2, 'Tanzania’s Northern Safari Circuit: ', 'The northern Tanzanian safari circuit encompasses the epitome of an African adventure. Expansive savanna, vibrant wildlife, intriguing cultures and quintessential landscapes are incorporated into each moment on this adventure. Travel from the remote Tarangire National Park, through the Ngorongoro Crater and out towards the famed and incomparable plains of the Serengeti, as vibrant wildlife escorts you the entire way. Marvel at the Great Wildebeest Migration (dependent on the month of travel) while learning of the smaller creatures that enable this ecosystem to thrive. Experienced all from the comfort of some of the country’s top lodges, there is no better way to be introduced to the majesty of Tanzania.  ', 'animals', 'giraffe.jpg'),
(3, 'Great Migration African Safari - Tanzania and Kenya ', 'Of all African safari experiences, the Great Migration is a unique trip of a lifetime to view millions of animals migrating in East Africa.\r\nDubbed the "greatest show on Earth," this safari follows the route of the Great Migration, maximizing viewing of animals as they move. See spectacular wildlife in the shadows of Mt. Kilimanjaro. Descend into the Ngorongoro Crater. Visit an authentic Maasai village. Hike to the Elephant caves of Karatu. This is a journey like no other!', 'animals', 'nyumbu.jpg'),
(4, 'Luxury Northern Circuit Tanzania Safari Tour', 'Tanzania\'s wilderness responds to the iconic reverie of an African safari. Big cats chase thousands of zebra, 100-strong elephant herds roam past ancient baobabs, and surreal scenes play out beside your lodge balcony. Don\'t just think Big Five. This 11-day northern circuit Tanzania safari tour is absolute immersion in nature\'s greatest theater. Witness unexpected characters and sublime scenes of predator and prey. With the Serengeti, Ngorongoro, Tarangire and Manyara, this trip connects Tanzania\'s dramatic safari highlights.', 'animals', 'tiger.jpg'),
(5, 'Highlight Tour of Tanzania 2016-2017', 'Adventures should never have to end and yours won’t during this highlight tour of Tanzania. The golden plains rise into the horizon, the sun turns the blue sky into a sumptuous red, the lakes reflect the surrounding mountains. This is the Tanzania that you have endlessly dreamed of, the infinite wonders you’ve always wanted to see and now can.', 'explore', 'baloon.jpg'),
(6, 'The Great 12 Day Tanzania Safari Package', 'Fly over the East African plains and experience the never-ending adventure that awaits you in this luxury Tanzanian safari. Whether flying or driving, surround yourself with expansive wingspans, waving grass, migrating zebras, and the roars of lions as you explore the everlasting grassland searching for quintessential Africa and finding it in the vast expanse. This is the Tanzania safari you’ve seen in documentaries, but the real safari is only better. ', 'explore', 'greatday.jpg'),
(7, 'Tanzania Honeymoon Safari', 'Safari means to journey. Experience the journey as you start your lives as newlyweds and experience the dense wildlife of Tanzania, where black rhinoceros graze the land, lions laze in the grass, and the sweet sound of vibrant birds drift through the sky. Let the journey be the destination and learn what Mambo Poa (cool stuff) and safari mean beyond their definitions in your unforgettable honeymoon in Tanzania.', 'explore', 'lions.jpg'),
(8, 'The Great Migration Photo Safari', 'Experience the visual euphoria of Northern Tanzania on this 15-day safari adventure. Tailor made for photo enthusiasts, this itinerary will bring indelible close-ups, unforgettable panoramas, and inspiring natural scenes. Explore six different national parks and gently succumb to the natural charms of Tanzania\'s untamed wildernesses. Then relive it all on your camera roll.', 'explore', 'migration.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour_news`
--
ALTER TABLE `tour_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour_news`
--
ALTER TABLE `tour_news`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
