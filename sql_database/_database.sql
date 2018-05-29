
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `techie`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(27, 6, 'Advance of technology', '&#34;The advance of technology is based on making it fit in so that you don&#39;t really even notice it, so it&#39;s part of everyday life.&#34;\r\n- Bill Gates', '2018-05-28 20:32:01'),
(29, 7, 'Master Technology', '&#34;Study hard so that you can master technology, which allows us to master nature.&#34; - Che Guevara', '2018-05-28 20:36:51'),
(30, 8, 'Innovation Culture', '&#34;Once you have an innovation culture, even those who are not scientists or engineers - poets, actors, journalists - they, as communities, embrace the meaning of what it is to be scientifically literate. They embrace the concept of an innovation culture. They vote in ways that promote it. They don&#39;t fight science and they don&#39;t fight technology.&#34;  -Neil deGrasse Tyson', '2018-05-28 20:40:25'),
(31, 9, 'Change The world', '&#34;I&#39;m interested in things that change the world or that affect the future and wondrous, new technology where you see it, and you&#39;re like, &#39;Wow, how did that even happen? How is that possible?&#34; -Elon Musk', '2018-05-28 20:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `created_at`) VALUES
(6, 'Bill', 'Gates', 'gates@email.com', '$2y$10$es2Pe.ZaYyKi/Bb9ipSSpuycTwePjvNMcGG9LGmZ5oP/I2jx5TNya', '2018-05-28 20:30:36'),
(7, 'Che', 'Guevara', 'che@email.com', '$2y$10$eRni84UhDY5Fi//BuKXBtuXa9spo2kOQcwzdhYLic7W/39GuqbQ86', '2018-05-28 20:35:59'),
(8, 'Neil', 'deGrasse Tyson', 'neil@email.com', '$2y$10$Ord251F01p96joVY3mOQwev8qUVaMfrL56DBVeA97oUpmuoRxl4HS', '2018-05-28 20:39:37'),
(9, 'Elon', 'Musk', 'elon@email.com', '$2y$10$06YwObDFh/aDVLeM9aNlou9Iadb2xQxeGanI0JMWTKb0Pr6A3TBEm', '2018-05-28 20:42:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
