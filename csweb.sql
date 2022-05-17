-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 12:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `name`, `email`, `website`, `description`, `status`) VALUES
(1, 'rahil ahmad', 'rahil670@gmail.com', 'cyphersol', 'I Have a new website', 'good wbsb'),
(2, 'raheel', 'waseem@gmail.com', 'cyphersol', 'i have new website ', 'new web site'),
(3, 'raheel', 'waseem@gmail.com', 'cyphersol', 'i have new web site', 'new web site'),
(4, 'ikyui', 'yuuuiyt', 'tiyti', '<h2 style=\"font-style:italic;\">rtreytr</h2>\r\n', 'htyuht');

-- --------------------------------------------------------

--
-- Table structure for table `cms_process`
--

CREATE TABLE `cms_process` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon_class` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `cms_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms_process`
--

INSERT INTO `cms_process` (`id`, `title`, `icon_class`, `image`, `description`, `cms_id`) VALUES
(1, 'process ', 'icon class', '9a8af2bd426a01d69e43274599cb189c.png', '<p>what is your favourvate sports</p>\r\n', 2),
(2, 'Mobile', 'fa fa-list', 'noimg.png', '<p>what is your favourvate sports</p>\r\n', 4),
(3, 'was', 'sdsd', '7a87a1dedfe5c732f37c13fc5e993700.png', '<p>dsdsghi</p>\r\n', 2),
(4, 'web', 'fa fa-list', 'noimg.png', '<p>p90p90p90</p>\r\n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cms_services`
--

CREATE TABLE `cms_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `icon_class` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` longtext NOT NULL,
  `meta_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms_services`
--

INSERT INTO `cms_services` (`id`, `title`, `content`, `banner`, `icon_class`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(2, 'Mobile apps development', 'sds', '7f589018c0802ad6df084be6a7964b8f.jpg', 'icon-earth', '', '', ''),
(4, 'Logo branding', 'Exploration Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut a', '0e37953c5b8d8230fa127e1ad25b749e.png', 'uiouy', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `port_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `image`, `port_id`) VALUES
(1, '6aaf294775454bc883ac40d1431c1b9b.jpg', '44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `category`, `description`, `date`, `image`, `tags`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(1, 'new blogs', 'Website Development', '<p>i have new desgin dfvdsfgu7y7u</p>\r\n', '2022-03-17', '73af6795b167e0df53e58443dcfaecb3.png', 'logsdffdfdfvvf', '', '', ''),
(2, '[98[89[', ' Mobile Apps Design', '<p>hjkhkghkghk</p>\r\n', '2022-03-25', '1bedcfa828d9bb242ff02992b2e87e3e.jpg', 'gegefge', '', '', ''),
(3, 'fgbsssssfg', 'ONLINE MARKETING', '<p>sdfgbsdfgsdg</p>\r\n', '2022-03-16', 'f7b87259961f1e1a1ac3398dffb6d78d.png', 'fgsdgf', 'dgsdgfsd', 'dsgsdg', 'dgsdfgsd'),
(4, 'fhnhghjnfg', 'Mobile Apps  Development ', '<p>ffjngfhmjhjh</p>\r\n', '2022-03-03', '2a1d08e8f3bbbad9dbc8067c8ebb8964.png', 'ghnfghnfg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE `tbl_career` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `positions` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`id`, `title`, `department`, `positions`, `description`) VALUES
(1, 'CAREER', 'mobile app development', 'frist position', ' i have a  careess'),
(3, 'yjht', 'tyjytrj', 'iuiiii', '<p><strong>mtyujhmryj</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`id`, `category`) VALUES
(7, 'mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`id`, `name`, `email`, `phone`, `website`, `messages`) VALUES
(1, ' CH WASEEM', 'wassem@gmail.com', '03417090031', 'cyphersol', '<p>We helped waseWe helped waseem making her first wbem making her first wb</p>\r\n'),
(2, 'fert', 'rtyry', 'rtyrty', 'ryry', '<p>dwdqwqwd</p>\r\n'),
(3, 'tyujtj', 'ujtyuj', 'yujkyuk', 'yukyuky', '<p>yukyuky grtyhtryh</p>\r\n'),
(4, '23421r', '23r231', '2r21r3', '23r123rghtjyt', '<p>tyjhrt</p>\r\n'),
(5, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`id`, `question`, `category`, `description`) VALUES
(1, 'what is your favourite sports', 'cricket,football', 'i like to play cricket '),
(3, 'gergrh', 'Mobile Apps  Development ', '<p>rhrthrh</p>\r\n'),
(4, 'ffaertfgewr', 'ONLINE MARKETING', '<h3 style=\"color:#aaaaaa;font-style:italic;\">TEHTHRFGWERGW</h3>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `title`, `category`, `description`, `website`) VALUES
(1, 'gertger', 'Website Development', '<p>I HAVE&nbsp; NEW&nbsp; WEB&nbsp; SITE&nbsp; MY&nbsp; FRIST&nbsp;</p>\r\n', 'dfgdg'),
(3, 'web desgin', ' Mobile Apps Design', 'i have a new mobile application', 'mobile applications'),
(4, 'TRTHTY', 'Mobile Apps  Development ', '<p>I HAVE&nbsp; NEW&nbsp; WEB&nbsp; SITE&nbsp; MY&nbsp; FRIST&nbsp;</p>\r\n', 'RTHTY'),
(5, '3q4rt32', 'Website Development', '<p>34t324t23</p>\r\n', '34t342t');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `product`, `price`, `description`) VALUES
(1, 'raheel khan', 'Car', '12000000', ' i have new car'),
(7, 'raheel adeel', 'Bus', '12000000', ' i have new car'),
(8, 'raheel a', 'Car', '12000000', ' i have new cars'),
(9, 'waseem', 'Motorcycle', '2334', 'regrtg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scat`
--

CREATE TABLE `tbl_scat` (
  `id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_scat`
--

INSERT INTO `tbl_scat` (`id`, `subcategory`) VALUES
(2, 'laptop'),
(4, 'cpussss'),
(7, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `image`, `phone`, `address`, `email`, `whatsapp`, `facebook`, `youtube`, `twitter`, `linkedin`) VALUES
(1, 'af2de65776227ac793f6e2e36a9e6d95.png', '03417090032', 'new shah shams colony multan ', 'waseem@gmail.com', 'https://web.whatsapp.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/', 'https://pk.linkedin.com/'),
(3, 'dbc088300b5c81306af105b24e70c639.png', '03000053042', '42/a', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `description`, `image`) VALUES
(1, 'Mobile apps', '<p>You need apps for business</p>\r\n', 'e7a91907632f5e65060a7769ae6efd94.jpg'),
(2, 'Cyphersol is one of the best ', '<p>Company in the world in web and mobile apps development</p>\r\n', '62a8d7496bb03bc95baa6fb8e84d8e19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `description`, `designation`, `image`, `facebook`, `youtube`, `twitter`, `linkedin`) VALUES
(1, 'CH WASEEM', '<p>I HAVE A NEW MOBILE APP</p>\r\n', 'I HAVE  A NEW MOBILE APP', '0013d3e46850355ac5bab30ec40b859a.jpg', 'https://www.facebook.com/', 'https://youtube.com/', 'https://twitter.com/', 'linkedin.com'),
(3, 'jtyujty', '<p>tyujytyujyTYUTYUJT</p>\r\n', 'yurtutr', 'a32c67f193042c4d6fe2782134065159.png', 'rtuytr', 'rureu', 'ryreu', 'reureu'),
(4, 'efwrt', '<p>YHTYJETUJH</p>\r\n', 'yryrty', '3b5f03fdd4dc0ab800d54316a669e77c.jpg', 'rtyry ', '', '', ''),
(5, 'efwrt', '<p>rtyryrty5Y5Y6354Y5Y6</p>\r\n', 'yryrty', 'dd904e311a2ce204af14a8194ae66558.png', 'rtyry ', '', '', ''),
(6, 'jtyujty', '<p>gsdgb RTEYY56</p>\r\n', 'yurtutr', 'ee75ca0bcacaa52a9f144dd8394d0b6b.png', 'erfge', 'ergerg', '', 'ergege');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userm`
--

CREATE TABLE `tbl_userm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userm`
--

INSERT INTO `tbl_userm` (`id`, `name`, `phone`, `email`, `password`) VALUES
(2, 'raheel ', '0300053042', 'admin@admin.com', '12345'),
(3, 'raheel', 'o356780-=896756', 'admin@admin.com', '12345'),
(4, 'juyiui', 'uyiyuiy', 'admin@admin.com', '12345'),
(6, '6uy5', '56u56u', 'raheel@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `dob`, `created_date`) VALUES
(1, 'Waseem afzal', 'waseemafzal31@gmail.com', '12345678', '3417090031', '0000-00-00', '2022-03-02 07:17:20'),
(2, 'raheel', 'raheel@gmail.com', '1234', '5215454', '0000-00-00', '2022-03-02 07:20:50'),
(3, 'Waseem afzal', 'waseemafzal31@gmail.com', '12345678', '3417090031', '2022-03-16', '2022-03-02 07:21:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_process`
--
ALTER TABLE `cms_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_services`
--
ALTER TABLE `cms_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_career`
--
ALTER TABLE `tbl_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_scat`
--
ALTER TABLE `tbl_scat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userm`
--
ALTER TABLE `tbl_userm`
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
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_process`
--
ALTER TABLE `cms_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_services`
--
ALTER TABLE `cms_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_career`
--
ALTER TABLE `tbl_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_scat`
--
ALTER TABLE `tbl_scat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_userm`
--
ALTER TABLE `tbl_userm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
