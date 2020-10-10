-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 09:51 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `name`, `content`) VALUES
(1, 'Who we are ?', 'Alibaba first made waves in Pakistan’s e-commerce market after its introduction in 2012. We have since grown to become Pakistan’s largest platform for online shopping with a network spread across Asia in Pakistan Bangladesh, Sri Lanka, Nepal, and Mynmar. Our vision was to provide a safe, efficient online platform for vendors and customers across the country to come together. We started off exclusively as an online fashion retail platform and over the years expanded to become a complete one-stop solution for all your buying needs. Daraz prides itself on not being just another ecommerce venture. We work tirelessly to make sure that we provide users with the best online experience and value for their purchases. Whether you shop through our website or our App, you can expect easy navigation, customized recommendations, and a smooth online shopping experience guaranteed.'),
(2, 'Why Us ?', 'Select from the Largest Online Marketplace in Pakistan\r\nWith over 3 million products to select from, Daraz offers its customers the most comprehensive listing of products in the country. Whether you’re looking for electronics, apparel, appliances, or groceries – there is something for everyone.\r\n\r\nHassle Free Delivery \r\nOnline shopping is only as good as its execution and Daraz promises hassle free delivery right from the moment you order to when your package is dropped at your door. We cater to both major and smaller cities alike, and give you the choice to track your package as it makes its way to you so you always know your order status. If you are unsatisfied with any aspect of your order, we have a simple 7-day return or exchange policy. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pic` varchar(100) DEFAULT NULL,
  `admin_fname` varchar(50) DEFAULT NULL,
  `admin_lname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_email`, `admin_pic`, `admin_fname`, `admin_lname`) VALUES
(1, 'matrix3', 'admin123', 'malikhunzala@gmail.com', '734.jpg', 'hanzala121', 'afzal2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `cat_name`) VALUES
(3, 'Machinery Items'),
(4, 'Toys an Hobbies'),
(5, 'Consumer Electronic'),
(6, 'Beauty and Cosmetics\r\n                  '),
(8, 'Home Appliances'),
(9, 'Tech and Gadgets'),
(10, 'Food and Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `name` varchar(70) NOT NULL,
  `number` int(15) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `email`, `name`, `number`, `subject`, `message`) VALUES
(1, 'malikhunzaa@gmail.com', 'hanzal1213', 9238193, 'aksjhajdh', 'assdsa'),
(3, 'test@gmail.com', 'testing', 923872163, 'NOT RECIEVED MY ORDER', 'hi hello'),
(4, 'test@gmail.com', 'testing', 923872163, 'NOT RECIEVED MY ORDER', 'hi hello');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `id` int(11) NOT NULL,
  `ques` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`id`, `ques`, `answer`) VALUES
(1, 'Do you have an office address?', 'Yes we do. Our corporate office is located in Karachi. However, since we are an online store, we do not have physical showrooms. Once we receive your order, we will deliver it to your doorstep.'),
(2, ' Can I pick up my item instead of having it delivered?', 'Alibaba offers delivery services because of the goal of convenience. We do not encourage our customers to come to our office since products can be brought to their door steps.'),
(3, 'When will I get my product after I place an order (delivery period)?', 'Our standard delivery timeline is 4-9 days. As soon as your order is dispatched from our warehouse, you will receive an email to confirm that your package is on its way. You will also be contacted by our dispatch personnel on the day of delivery.'),
(4, ' How can I change my order?', 'Unfortunately, once you’ve placed your order, it is not possible to amend any details, as our warehouse team will have already started processing your order.'),
(5, 'How can I cancel my order?', 'To make sure you receive your items as fast as possible, we start processing your order as soon as we receive it. This means that once your order has been placed, you will be unable to cancel it.'),
(7, 'How long have I got to send an item back and get a refund?', 'We hope you’ll love every Shopozine purchase you make. But if you ever need to return an item, you can do so within 7 days of receipt.'),
(8, 'How do I know that Shopozine has received my order?', 'Our ordering system will automatically send you an email confirming that your order was successfully submitted. Please make certain that the email address you provide is correct. Generated e-mail will contain all the details related to your order and shipping order number for your records.'),
(9, 'How do I track my order?', 'We will send you an email when your order is shipped. You can also send an email to customer@shopozine.com to enable us provide you with adequate updates on the status of your order. If you are located outside our COD regions, we will send a tracking code to enable you confirm the status of your order from our logistics partners: www.tcscouriers.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `status`, `priority`, `cat_id`) VALUES
(1, 1, 1, 9),
(2, 1, 2, 8),
(3, 0, 3, 10),
(5, 0, 0, 3),
(6, 0, 0, 4),
(7, 0, 0, 6),
(8, 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `contact_num` int(15) NOT NULL,
  `home_num` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `s_ad_1` text NOT NULL,
  `s_ad_2` text NOT NULL,
  `s_city` varchar(15) NOT NULL,
  `s_country` varchar(15) NOT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `order_id`, `email`, `first_name`, `last_name`, `contact_num`, `home_num`, `city`, `country`, `s_ad_1`, `s_ad_2`, `s_city`, `s_country`, `status`) VALUES
(3, '5d2879993ccedd', 'johndoe@gmail.com', 'John', 'Doe', 9238173, 512837213, 'Islamabad', 'Pakistan', 'BAHRIA PHASE 7', 'dha 2', 'LAHORE', 'Pakistan', 4),
(4, '5d288dfc89c15', 'malikhunzala@gmail.com', 'Hanzala Afzal', 'afzl', 9238173, 512837213, 'Islamabad', 'Pakistan', 'BAHRIA PHASE 7', 'heharoih', 'Rawalpindi', 'Uzbekistan', 1),
(5, '5d289ab617b23', 'hunzala@gmail.com', 'hanzala', 'Afzal', 2147483647, 87126817, 'Islamabad', 'Pakistan', 'DHA 2', 'Islambad', 'Islamabad', 'Pakistan', 2),
(6, '5d2c6eba06771', 'malikhunzala@gmail.com', 'Hanzala', 'Afzal', 2147483647, 515419301, 'Rawalpindi', 'Pakistan', 'H#16, Street#9, Sector A', 'Defence Phase 2', 'Islamabad', 'Pakistan', 0),
(7, '5d2d9273669bb', 'testingApp@gmail.com', 'Testing ', 'App', 92327813, 512371823, 'Rawalpindi', 'Pakistan', 'H#13, Street#9, ', 'Sector A DHA 2', 'Islamabad', 'Pakistan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders_prods`
--

CREATE TABLE `tbl_orders_prods` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `prod_name` varchar(150) NOT NULL,
  `prod_qty` int(3) NOT NULL,
  `prod_price` int(10) NOT NULL,
  `prod_subtotal` int(10) NOT NULL,
  `net_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orders_prods`
--

INSERT INTO `tbl_orders_prods` (`id`, `order_id`, `prod_name`, `prod_qty`, `prod_price`, `prod_subtotal`, `net_total`) VALUES
(7, '5d2879993ccedd', 'Infinix Smart 2 HD X609', 4, 300, 1200, 1920),
(8, '5d2879993ccedd', 'Huawei Y9 Prime 2019', 1, 300, 300, 1920),
(9, '5d2879993ccedd', 'Apple iPhone XS Max', 1, 420, 420, 1920),
(10, '5d288dfc89c15', 'Infinix Smart 2 HD X609', 4, 300, 1200, 1920),
(11, '5d288dfc89c15', 'Huawei Y9 Prime 2019', 1, 300, 300, 1920),
(12, '5d288dfc89c15', 'Apple iPhone XS Max', 1, 420, 420, 1920),
(13, '5d289ab617b23', 'Apple iPhone XS Max', 1, 420, 420, 443),
(14, '5d2c6eba06771', 'T- Screw Driver Set', 4, 1001, 4004, 4027),
(15, '5d2d9273669bb', 'LG 55', 1, 480, 480, 503);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_info` varchar(100) NOT NULL,
  `p_desc` varchar(500) NOT NULL,
  `p_cat` int(11) NOT NULL,
  `p_sub_cat` int(11) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_discount_price` int(10) NOT NULL,
  `p_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`p_id`, `p_name`, `p_info`, `p_desc`, `p_cat`, `p_sub_cat`, `p_price`, `p_discount_price`, `p_image`) VALUES
(1, 'Infinix Smart 2 HD X609', '3G, 1GB RAM, 16GB, Midnight Black', 'P Approved and Compliant device\r\nBrand Warranty\r\n6\'\' IPS HD+ 1440*720 Display\r\n8 MP Front + 8 MP Main Camera\r\n16GB Built-in, 1GB RAM\r\n1.3 Ghz Quad Core\r\nAndroid V8.1 Oreo\r\n(Li-ion Non removable), 3500 mAh', 9, 16, 310, 300, 'Infinix02946.jpg'),
(2, 'Huawei Y9 Prime 2019', '4G, 4GB RAM, 64GB ROM,Midnight Black', 'DISPLAY\r\nScreen size: 6.59 inches\r\nScreen type: TFT LCD (LTPS)\r\nScreen colors: 16.7 M\r\nScreen resolution: 2340 x 1080\r\nScreen PPI: 391\r\n\r\nOPERATING SYSTEM\r\nAndroid 9\r\n\r\nMEMORY\r\n4 GB + 64 GB / 4 GB + 128 GB', 9, 16, 360, 300, 'huaweiy9.jpg'),
(3, 'Apple iPhone XS Max', '4G, 256GB Gold', 'A new level of water resistance.\r\nThe most durable glass in a smartphone, sealed and precision-fitted with the surgical-grade stainless steel band, helps create a more water-resistant enclosure — up to 2 meters for 30 minutes. iPhone XS even resists spills from coffee, tea, soda, and more.\r\n\r\nDo more with a glance.\r\nFace ID does so much more than unlock your iPhone. So you can forget abouttypingusernamesandpasswords.Nowallit takes is a look', 9, 16, 500, 420, 'appleiphone.jpg'),
(4, 'Oppo A5 Dual Sim', '4G, 4GB RAM, 32GB ROM, Red', '\r\nNETWORK\r\n\r\nTechnology\r\n\r\nGSM / CDMA / HSPA / LTE\r\n\r\nLAUNCH\r\n\r\nAnnounced\r\n\r\n2018, July\r\n\r\nStatus\r\n\r\nAvailable. Released 2018, July\r\n\r\nBODY\r\n\r\nDimensions\r\n\r\n156.2 x 75.6 x 8.2 mm (6.15 x 2.98 x 0.32 in)\r\n\r\nWeight\r\n\r\n168 g (5.93 oz)\r\n\r\nSIM\r\n\r\nDual SIM (Nano-SIM, dual stand-by)\r\n\r\nDISPLAY\r\n\r\nType\r\n\r\nIPS LCD capacitive touchscreen, 16M colors\r\n\r\nSize\r\n\r\n6.2 inches, 95.9 cm2 (~81.2% screen-to-body ratio)\r\n\r\nResolution\r\n\r\n720 x 1520 pixels, 19:9 ratio (~271 ppi density)', 9, 16, 300, 256, 'OppoA235.jpg'),
(5, 'LG 55', 'UHD 4K SMART AI OLED TV', 'LG’s 4K Cinema HDR delivers the filmmaker’s vision by supporting most HDR formats. Enjoy a truly cinematic experience at home with Dolby Vision™ and Advanced HDR by Technicolor, as well as HDR10 Pro and HLG Pro.\r\n\r\nLearn more about Cinema HDR\r\n\r\n\r\nHDR10 Pro and HLG Pro is LG’s own proprietary HDR solution which process HDR signal dynamically frame by frame using enhanced dynamic tone mapping.', 8, 21, 500, 480, '1100__30244_zoom1.jpg'),
(6, 'LG 55', 'UHD 4K SMART AI OLED TV', 'LG’s 4K Cinema HDR delivers the filmmaker’s vision by supporting most HDR formats. Enjoy a truly cinematic experience at home with Dolby Vision™ and Advanced HDR by Technicolor, as well as HDR10 Pro and HLG Pro.\r\n\r\nLearn more about Cinema HDR\r\n\r\n\r\nHDR10 Pro and HLG Pro is LG’s own proprietary HDR solution which process HDR signal dynamically frame by frame using enhanced dynamic tone mapping.', 8, 21, 500, 480, '1100__30244_zoom2.jpg'),
(7, 'Changhong Ruba 32', '32F5800i Android Smart LED TV (2 Year Official Warranty)', 'Smart LED(Android 4.4+)\r\nDigital Tuner TV (DVB-C/T, Support 1200+ Channels)\r\nQuad Core Processor & CHANGHONG C-Store\r\nE-Share (2way screen mirroring, virtulal remote)\r\nPremium Sound (2*10W)\r\nUSB Media Player (2 Ports)\r\nRam 1GB\r\nMemory 4GB\r\nHead Phone Output\r\nDouble Y-Type Stand\r\nBuilt-in WIFI', 8, 21, 530, 110, '2__01898_zoom1.jpg'),
(8, 'T- Screw Driver Set', 'Professional 24 Pieces Socket & Bits Set  Include, T Screwdriver Handel', 'Professional 24 Pieces Socket & Bits Set Include, T Screwdriver Handel, 25mm Bits, Plus 1 # , 2 #, 3 #, 4.5mm, 7mm, T 10, T 15, T 20, T 25, T 30, 1/4 Adaptor, 1/4  DR Socket: 4 , 5, 6, 7, 8, 9, 10, 11, 12 mm, Ideal for home and workshop use\r\nBe the engineer! 24 Pcs of Socket and Bits Set is available at hardwareandtools.com.pk/ for those of you who have some technical skills when it comes to electronic items, this pack is the best! I am sure most of you must be dying to have your hands on these.', 3, 26, 130, 1001, 't-screw-driver-set-11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regions`
--

CREATE TABLE `tbl_regions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_regions`
--

INSERT INTO `tbl_regions` (`id`, `name`, `image`) VALUES
(1, 'India', 'flag-in.png'),
(2, 'USA', 'flag-usa.png'),
(3, 'Korea', 'flag-kr.png'),
(4, 'Turkey', 'flag-tr.png'),
(5, 'Vietnam', 'flag-vt.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_categories`
--

CREATE TABLE `tbl_sub_categories` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(40) NOT NULL,
  `sub_images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_categories`
--

INSERT INTO `tbl_sub_categories` (`subcat_id`, `cat_id`, `subcat_name`, `sub_images`) VALUES
(15, 9, 'Laptops', 'laptop1.png'),
(16, 9, 'Smart Phones', 'sphone1.png'),
(18, 9, 'Head Phones', 'headphone1.png'),
(19, 9, 'Tablets', 'tablet1.png'),
(20, 9, 'Smart Watches', 'smart11.png'),
(21, 8, 'Television', 'lcd1.png'),
(22, 8, 'Washing Machines', 'washing11.png'),
(24, 8, 'Air Conditioners', 'ac2.png'),
(25, 8, 'Kitchen Appliances', 'kitchen1.png'),
(26, 3, 'Hardware Items', 'kisspng-bradys-power-equipment-inc-stihl-chainsaw-ranch-fa-outdoor-power-equipment-page-1-db-supply-5bab511f05e262_68829387153795407902411.png'),
(27, 3, 'Generators', 'kisspng-electric-generator-engine-generator-diesel-generat-collection-of-generador-diesel-abierto-5-kvas-230v-5b696cb3b5dd92_3014978715336357637449.png'),
(28, 3, 'Tool Kits', 'kisspng-herramientas-vicomsa-5b699536597ab2_5328488315336461343665.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_home_ibfk_1` (`cat_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_orders_prods`
--
ALTER TABLE `tbl_orders_prods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_cat` (`p_cat`),
  ADD KEY `p_sub_cat` (`p_sub_cat`);

--
-- Indexes for table `tbl_regions`
--
ALTER TABLE `tbl_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_categories`
--
ALTER TABLE `tbl_sub_categories`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `tbl_sub_categories_ibfk_1` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_orders_prods`
--
ALTER TABLE `tbl_orders_prods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_regions`
--
ALTER TABLE `tbl_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sub_categories`
--
ALTER TABLE `tbl_sub_categories`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD CONSTRAINT `tbl_home_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_orders_prods`
--
ALTER TABLE `tbl_orders_prods`
  ADD CONSTRAINT `tbl_orders_prods_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`p_cat`) REFERENCES `tbl_categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_products_ibfk_2` FOREIGN KEY (`p_sub_cat`) REFERENCES `tbl_sub_categories` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sub_categories`
--
ALTER TABLE `tbl_sub_categories`
  ADD CONSTRAINT `tbl_sub_categories_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
