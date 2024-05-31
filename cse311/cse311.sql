-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 04:27 PM
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
-- Database: `cse311`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `original_product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `user_id`, `original_product_id`, `product_name`, `image`, `price`, `total`, `quantity`) VALUES
(29, 1, 1, 'Ryzen 5 5600', 'p1.jpg', 13500, 13500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `product_id`, `username`, `comment`) VALUES
(2, 1, 'amir', 'comment'),
(3, 1, 'amir', 'comment 2'),
(4, 1, 'tahfeem', 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `user_id`, `username`, `message`) VALUES
(1, 1, 'amir', 'test'),
(2, 1, 'amir', 'test'),
(3, 1, 'amir', 'message 3');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` date NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_name`, `image`, `price`, `total`, `order_date`, `quantity`) VALUES
(4, 1, 'Laptop', 'lp-1.webp', 50000, 50000, '2024-05-15', 1),
(5, 1, 'Ryzen 5 5600', 'p1.jpg', 13500, 13500, '2024-05-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `product_condition` varchar(20) NOT NULL,
  `product_available` varchar(20) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL,
  `max_quantity` int(100) NOT NULL,
  `search` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_condition`, `product_available`, `product_category`, `image_1`, `image_2`, `image_3`, `max_quantity`, `search`) VALUES
(1, 'Ryzen 5 5600', 13500, 'Speed: 3.5GHz up to 4.4GHz\r\n                        Cache: L2: 3MB, L3: 32MB\r\n                        Cores-6 & Threads-12\r\n                        Memory Speed: DDR4 Up to 3200MHz\r\n                        AMD ZEN 3 Architecture.', 'New', 'In Stock', 'CPU', 'p1.jpg', '', '', 67, 'ryzen'),
(6, 'Antec Vortex 240', 10300, 'Antec Vortex 240 ARGB All-in-One Liquid CPU Cooler\r\nThe Antec Vortex 240 ARGB All-in-One Liquid Cooler delivers a cooling solution with unique ARGB lighting. It features a suspended spiral pump head inspired by the image of a vortex. It provides outstanding cooling performance and various lighting effects from different angles. It has been specifically designed using EPDM high-density tubes and 13 dense cooling fins. The Antec Vortex 240 ARGB adopted the Antec Fusion PWM ARGB Fan with a unique multilateral-shaped lighting frame with 16 LEDs projecting the most harmonious lighting effects and providing more powerful cooling for the CPU. You can sync with the Motherboard for 16.8 Million Possible Colors. It has dual ARGB PWM fans. The ARGB PWM fan delivers thermal control, shock absorption, and high airflow. Meanwhile, it provides the CPU with a better cooling solution. This CPU cooler is compatible with Intel LGA 115X / 1200 / 1700 / 20XX and AMD AM3/AM4 sockets. The Vortex 240 ARGB com', 'New', 'In Stock', 'CPU Cooler', 'vortex-240-argb-01-500x500.webp', 'vortex-240-argb-03-500x500.webp', 'vortex-240-argb-04-500x500.webp', 10, 'cooler, Antec Vortex 240, antec vortex, antec'),
(7, 'MSI PRO B650M-P DDR5 AMD AM5 mATX Motherboard', 16000, 'MSI PRO B650M-P DDR5 AMD AM5 mATX Motherboard\r\nThe MSI PRO B650M-P DDR5 AMD AM5 mATX Motherboard is a powerhouse of modern computing technology. Built to support AMD Ryzen 8000 & 7000 Series Desktop Processors and DDR5 memory, it ensures compatibility with the latest CPU technology and offers blazing-fast memory speeds of 7200+MHz when overclocked. With features like Core Boost and Memory Boost, this motherboard provides exceptional processing power, stability, and data signal purity. Its 6-layer PCB constructed with 2oz thickened copper enhances durability and reliability. Gaming enthusiasts will appreciate the PCIe 4.0 slots and Lightning Gen 4 x4 M.2 slot for lightning-fast data transfers and support for high-end graphics cards. Professionals and multimedia users will benefit from the upgraded 2.5G LAN, ensuring a secure, stable, and fast network connection. Moreover, the Audio Boost technology delivers studio-grade sound quality for an immersive gaming experience. To protect your V', 'New', 'In Stock', 'MoBo', 'pro-b650m-p-01-500x500.webp', 'pro-b650m-p-02-500x500.webp', 'pro-b650m-p-03-500x500.webp', 10, 'motherboard, MSI PRO B650M-P DDR5, msi'),
(8, 'OCPC GeForce RTX 4060 8GB GDDR6 Graphics Card', 43300, 'OCPC GeForce RTX 4060 8GB GDDR6 Graphics Card\r\nThe OCPC GeForce RTX 4060 8GB GDDR6 Graphics Card is designed to provide both gamers and creative professionals with outstanding performance and cutting-edge features. With a base clock speed of 1.83GHz and a maximum boost of 2.46GHz, the RTX 4060 chipset powers this graphics card, which guarantees fluid and responsive performance even in demanding games and applications. With its 3072 NVIDIA CUDA Cores, the OCPC GeForce RTX 4060 8GB GDDR6 Graphics Card enables high-performance parallel computing, a necessary skill for contemporary gaming and demanding rendering endeavors. With its 8GB GDDR6 memory configuration and 128-bit memory', 'New', 'In Stock', 'GPU', 'rtx-4060-8gb-01-500x500.webp', 'rtx-4060-8gb-02-500x500.webp', 'rtx-4060-8gb-03-500x500.webp', 10, 'rtx, gpu'),
(9, 'Team Elite Plus Red 8GB 3200MHz DDR4 U-DIMM Deskto', 2649, 'Team Elite Plus Red 8GB 3200MHz DDR4 U-DIMM Desktop RAM\r\nThe Team Elite Plus Red 8GB 3200MHz DDR4 RAM features a data transfer bandwidth of 25,600 MB/s. IKt comes with an operating voltage of only 1.2V, which saves a lot of power consumption. It reduces the heat generated by the product itself and also maintains the ambient temperature around the system. This product is fully compliant with JEDEC standards and is guaranteed to be 100% compatible with all major platforms on the market. Compared with DDR3-1866, the bandwidth performance is improved by 12.35%. The Team Elite Plus Red 8GB 3200MHz DDR4 RAM has a CAS Latency of CL22-22-22-52. The Team Elite Plus has a Red & Black Aluminum heat spreader that dissipates heat very efficiently. The Team Elite Plus comes with a lifetime of warranty.', 'New', 'In Stock', 'RAM', 'elite-plus-red-01-500x500.jpg', '', '', 10, 'ram, ram 8 GB, elite plus red'),
(10, 'Xtreme XPS450R 200W ATX Power Supply', 1350, 'Xtreme XPS450R 200W ATX Power Supply\r\nThe Xtreme XPS450R 200W ATX Power Supply is a reliable and efficient power supply that provides stable and sufficient power for your computer system. The majority of motherboards and casings are compatible with the ATX form factor of the Xtreme 200W Power Supply. With a voltage of 220V and an actual power of 200W, the Xtreme XPS450R 200W Power Supply is capable of supporting a wide range of devices and components. Its P4+P8, SATA*4, and 20+4 pin connectors let you connect various optical devices, hard drives, and other peripherals. Its 12-cm black fan lowers noise and aids in cooling the power source. The black-painted case of the Xtreme XPS450R 200W Power Supply offers it a stylish and modern appearance. Additionally, a handy and secure 1.2M UK power cord is included with the Xtreme 200W Power Supply. It has a black net-covered 24P and P4+P8 cable, which gives it a fashionable and protective look. It is also simple to transport and store thanks to', 'New', 'In Stock', 'PSU', 'xps450r-01-500x500.webp', '', '', 10, 'power supply, psu, Xtreme XPS450R 200W ATX'),
(11, 'HP 300GB 6G', 15500, 'HP 300GB 6G 10K RPM 2.5-inch SFF SC Server SAS HDD\r\nThe HP 300GB 6G 10K RPM 2.5-inch SFF SC Server SAS HDD is a server hard disk drive that can provide you with fast and reliable data storage. It has a 300GB storage capacity and stores a large amount of data. It also has a form factor of 2.5 inches, which can fit in most server chassis. It also has an RPM of 10,000 rpm, delivering high performance and speed. It also has a data transfer rate of 6 Gbps, which can support fast data transfer and access. The HP 300GB 6G is a hot plug server HDD and lets you install and remove the HDD without shutting down the server. Their SAS interface can provide a high level of reliability and scalability. It also has a smart carrier, which can indicate the status and activity of the HDD. It also has a digital signature, which can verify the authenticity and quality of the HDD. The HP 300GB 6G also has smart drive firmware that optimizes the performance and error recovery of the HDD.', 'New', 'In Stock', 'HDD', '300gb-6g-01-500x500.webp', '', '', 10, 'hdd, hard disk drive'),
(12, 'Intel D3-S4610 960GB 2.5 Server SSD', 27500, 'Intel D3-S4610 960GB 2.5\" Server SSD\r\nThe Intel D3-S4610 Server SSD is compatible with existing SATA storage infrastructure and has a 960GB storage capacity. This Intel Server SSD has a 2.5\"/7mm form factor to fit in most server chassis. Their SATA III 6GB/s interface provides fast data transfer speeds. The Intel D3-S4610 960GB Server SSD has up to 510 MB/s sequential read/write speed, which can improve the responsiveness and efficiency of your applications. The Intel Server SSD also has 2 million hours of MTBF, which means a long lifespan and durability. ', 'New', 'In Stock', 'SSD', 'd3-s4610-01-500x500.webp', '', '', 10, 'ssd, intel ssd'),
(13, 'Xtreme 951 Mid Tower ATX Casing', 1400, 'Xtreme 951 Mid Tower ATX Casing\r\nThe Xtreme 951 Mid Tower ATX Casing is a durable and large case that can house ATX motherboards and other components. It is made of metal and plastic, with a metal windowed side panel. It also enables LED illumination on the front, top, and sides, as well as LED strips for further personalization. It measures 410 x 180 x 420mm and has a thickness of 0.45mm. For your storage and connection needs, the Xtreme 951 Mid Tower ATX Casing includes various drive bays and expansion slots. It lacks a 5.25-inch drive space; however, it does include three 3.5-inch bays, two 2.5-inch bays, and an optical drive bay. ', 'New', 'In Stock', 'Case', '951-500x500.webp', '', '', 10, 'casing, atx casing'),
(14, 'Deepcool XFAN 80 Case Cooling Fan', 200, 'Deepcool XFAN 80 Case Cooling Fan\r\nThe Deepcool XFAN 80 is more popular with gamers. Its country nod origin is China and this casing is also made in china. Deepcool XFAN 80 Case Cooling Fan comes with High quality 80mm black material fan. Its Low-speed RPM ensures quiet operation. This Deepcool case fan is designed with a Rated Voltage of 12VDC, an Operating Voltage of 10.8 3.2VDC, Started Voltage of 7VDC, a Rated Current of 0.08±10%, and a Power Input of 0.96W. Its Fan Speed is about 1800±10%RPM, 20.3dB(A) Noise, and 21.8CFM Max. Air Flow. the new Deepcool XFAN 80 helps you to keep cool your PC. The latest Deepcool XFAN 80 Cooling Fan has a 01-year warranty.', 'New', 'In Stock', 'Casing Cooler', 'xfan-80-01-500x500.jpg', '', '', 10, 'cooler, deepcool xfan'),
(15, 'AMD Athlon 3000G Processor with Radeon Graphics', 5500, 'AMD Athlon 3000G Processor with Radeon Graphics\r\nDesigned for overclocking, the Athlon 3000G 3.5 GHz Dual-Core AM4 Processor from AMD has a base clock speed of 3.5 GHz, two cores with four threads in an AM4 socket, 1MB of L2 cache memory, and 4MB of L3 cache memory. Having two cores allows the processor to run multiple programs simultaneously without slowing down the system, while the four threads allow a basic ordered sequence of instructions to be passed through or processed by a single CPU core. This processor also has a TDP of 35W. Graphically, the Athlon 3000G uses integrated AMD Radeon Vega 3 Graphics. It is also unlocked, meaning it can be overclocked past its maximum turbo frequency. However, this is not recommended, as it will cause the processor to run much hotter. Also, the warranty does not cover damage caused by overclocking, even when overclocking is enabled via AMD hardware.(No Warranty for Fan or Cooler)', 'New', 'In Stock', 'CPU', 'athlon-3000g-1-500x500.jpg', '', '', 10, 'amd, cpu, AMD Athlon, AMD Athlon 3000G Processor with Radeon Graphics'),
(16, 'Intel 10th Gen Core i3 10100F Processor', 7900, 'Intel 10th Gen Core i3 10100F Processor\r\nThis processor comes with a new breed that come without an integrated GPU, so a separate graphics card is required for its functionality. This new 10th gen Comet Lake microarchitecture is manufactured with the 14nm process that comes with four cores but lacks in HyperThreading. As this chip is updated to the latest BIOS revision, it nicely fits into any Intel 300-series motherboard. Focusing on this, all the major motherboard manufacturers have already started BIOS updates for their 300-series lineup\r\n\r\nCore Benefits of the Processor\r\nIntel 10th Generation Core i3-10100F Processor having the base frequency of 3.60 GHz that can be reached as max turbo frequency at 4.30 GHz. It has the L3 SmartCache of 6 MB containing 4 cores and 8 threads. With the bus speed of 8 GT/s DMI3, it has thermal design power (TDP) rating of 65W. This latest microchip has few expansion options such 3.0 PCI express revision having configured up to 1x16, 2x8, 1x8+2x4 and m', 'New', 'In Stock', 'CPU', 'i3-10100-500x500.jpg', '', '', 10, 'Intel 10th Gen Core i3 10100F Processor, intel, cpu, intel 10th gen'),
(17, 'Intel Pentium Gold G7400 Alder Lake Processor', 7499, 'Intel Pentium Gold G7400 Alder Lake Processor\r\nIntel 12th Gen Pentium Gold G7400 Alder Lake Processor is a CPU from Intel. Intel Pentium Gold G7400 12th gen Processor turns your desktop computer system or data server into a more efficient machine. This 12th generation 3.7 GHz processor features two Performance cores and 6MB of cache with support for up to four threads, providing the power to run and multitask a variety of applications. The Pentium Gold G7400 also includes support for PCI Express 5.0 and dual-channel DDR5 memory in addition to having integrated Intel UHD 710 Graphics. An Intel Laminar RS1 thermal solution is included.\r\n\r\nPCIe 4.0 & 5.0\r\nIntel 12th Gen Pentium Gold G7400 Alder Lake Processor supports up to four PCIe 4.0 and sixteen PCIe 5.0 lanes, delivering 20 lanes in total for exceptional data throughput with compatible devices.', 'New', 'In Stock', 'CPU', 'intel-pentium-gold-g7400-12th-gen-alder-lake-01-500x500.jpg', '', '', 10, 'Intel Pentium Gold G7400 Alder Lake Processor, Intel Pentium Gold, intel '),
(19, 'Deepcool CK-11509 CPU Cooler', 300, 'inverted fan provides excellent airflow while producing little noise. The overall dimensions of this cooler', 'New', 'In Stock', 'CPU Cooler', 'ck-11509-01-500x500.jpg', '', '', 10, 'Deepcool CK11509 CPU Cooler, cpu cooler, cooler'),
(20, 'PCcooler Q100V2 CPU Cooler', 500, 'The cooler is compatible with most major CPUs since it supports a wide range of CPU sockets, including Intel LGA and AMD AM4. Its small size and lightweight design make installation even easier, offering a trouble-free experience even for inexperienced PC builders.', 'New', 'In Stock', 'CPU Cooler', 'q100v2-01-500x500.webp', '', '', 10, 'cooler, cpu cooler, PCcooler Q100V2 CPU Cooler'),
(21, 'Value-Top CL1012 12CM ARGB CPU Cooler', 800, 'Value-Top CL1012 12CM ARGB CPU Cooler\r\nThe Value Top CL1012 is an air-cooled CPU cooler made to maintain the temperature of your processor even under high use. It has a 120mm fan with a maximum speed of 8001900 RPM, which produces ample airflow to cool the CPU. A 4 Pin PWM connector powers the fan, enabling the motherboard to control the fan speed in response to CPU temperature. Additionally, this cooler has ARGB lighting, giving your PC setup a more fashionable appearance. You can alter the LED color to make it match your PC color scheme.', 'New', 'In Stock', 'CPU Cooler', 'cl1012-500x500.webp', '', '', 10, 'cooler, cpu cooler'),
(22, 'ARKTEK AK-H81M EL 4th Gen Micro-ATX Motherboard', 5100, 'escription\r\nARKTEK AK-H81M EL 4th Gen Micro-ATX Motherboard\r\nThe ARKTEK AK-H81M EL 4th Gen Micro-ATX Motherboard is designed to support Intel Core i7, i5, i3, Pentium, and Celeron processors of the LGA1150 Intel 4th generation multi-core processors. It utilizes the Intel H81 chipset and features integrated graphics processing. The motherboard supports dual-channel DDR3 memory and has two slots with a maximum capacity of 8GB per slot. It offers LAN connectivity with the onboard Realtek RTL8105E/8111E Gigabit 100/1000 Mbps LAN and includes a Realtek 662 6-channel HD Audio Codec for audio functions. Storage options include three SATA ports and one M.2 slot supporting NVME and NGFF storage devices. The back panel I/O ports provide various connections, including VGA, HDMI, USB, LAN, and audio jacks. Expansion slots include one PCI Express x16 slot, and the motherboard features UEFI BIOS for system configuration. With its micro-ATX form factor and secure mounting holes, the AK-H81M EL is sui', 'New', 'In Stock', 'MoBo', 'ak-h81m-el-01-500x500.webp', 'ak-h81m-el-02-500x500.webp', 'ak-h81m-el-03-500x500.webp', 10, 'MoBo, motherboard, ARKTEK AK-H81M EL 4th Gen Micro-ATX Motherboard'),
(23, 'ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard', 7500, 'ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard\r\nThe ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard supports Intel 4th Generation Intel Core Processors (Socket 1150) and Dual Channel DDR3 1600. The Motherboard comes with 1 PCIe 2.0 x16, 1 PCIe 2.0 x1. It features a D-Sub port for graphic output. It is built with a High-Density Glass Fabric PCB design that reduces the gaps between the PCB layers to protect the motherboard against electrical shorts caused by humidity. This ASRock motherboard uses a Realtek gigabit LAN chip to support extremely fast internet connections. The ASRock H81M-VG4 R4.0 features a solid capacitor design. The motherboard offers full spike protection. It includes various technologies to prevent your motherboard’s components from being damaged by these unexpected voltage spikes. It also comes with ASRock Live Update & APP Shop. The ASRock H81M-VG4 R4.0 comes with 3 years of warranty.', 'New', 'In Stock', 'MoBo', 'h81m-vg4-r4-0-01-500x500.jpg', '', '', 10, 'ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard, motherboard\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `gender`, `dateOfBirth`, `email`, `password`) VALUES
(1, 'amir', 'alvi', 'Male', '2024-05-14', 'test@gmail.com', '123456'),
(6, 'tahfeem', 'siam', 'Male', '2024-05-15', 'test1@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `image_1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`list_id`, `user_id`, `product_id`, `product_name`, `product_price`, `image_1`) VALUES
(1, 1, 1, 'Ryzen 5 5600', 13500, 'p1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `original_product_id` (`original_product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`original_product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
