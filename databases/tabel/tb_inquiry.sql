-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 06:06 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percobaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_inquiry`
--

CREATE TABLE `tb_inquiry` (
  `id_inquiry` int(11) NOT NULL,
  `tanggal_input` varchar(100) NOT NULL,
  `produk` varchar(225) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_inquiry`
--

INSERT INTO `tb_inquiry` (`id_inquiry`, `tanggal_input`, `produk`, `negara`, `detail`) VALUES
(1, '10/26/2021', 'Black Pepper', 'Egypt', 'Quantity Required : 27 Ton/Tons <br>\nShipping Terms : CIF <br>\nDestination Port : Alexandria, Egypt <br>\nPayment Terms : To be discussed with suppliers<br>\nLooking for suppliers from : Worldwide <br> \nAddress: Egypt <br>\nContact: Kirolos <br>\nEmail: albekhitalattar@gmail.com <br>\nPhone: +201276444257 <br>'),
(2, '10/26/2021', 'Coconut Shell', 'Australia', 'Shipping Terms:FOB <br>\nDestination Port:South Australia, Australia <br>\nPayment Terms:Bank Transfer<br>\nLooking for suppliers from:Australia<br>\nAddress: Australia<br>\nContact: Emma Zadow <br>\nEmail: emmazadow88@outlook.com <br>\nPhone: +61432259151 <br>'),
(3, '10/26/2021', 'Coir Blocks', 'Malaysia', 'Size: 75\"\" X 72\"\" X 0.393 , 74.5\"\" X 35.5\"\" X 2, 74.5\"\" X 59.5\"\" X 4 etc <br>\nDensity -100 Kg/m3\" , 80 Kg/m3\" <br>\nPackaging Terms:5 Kg block <br>\nQuantity Required:1 Twenty-Foot Container <br>\nShipping Terms:CIF <br>\nDestination Port:Klang, Malaysia <br>\nPayment Terms:T/T <br>\nLooking for suppliers from:Worldwide <br>\nPlease contact via email only <br>\nAddress: 3545 & 17422, Kawasan Perindustrian Kamunting <br>\nContact: Shamila <br>\nEmail: herbalfame@gmail.com <br>\nPhone: <br>'),
(4, '10/26/2021', 'Coir Pith Or Coco Peat', 'South Korea (Republic Of Korea', 'Organic Matters: 75% <br>\nColor: Black Or Brown <br>\nUsage: Organic Fertilizer <br>\nQuantity Required:1 Twenty-Foot Container <br>\nShipping Terms:FOB <br>\nDestination Port:Pusan, South Korea (Republic Of Korea) <br>\nPayment Terms:T/T <br>\nLooking for suppliers from:Worldwide <br>\nAddress: 34 Jocheon-Ro 2-Gil, Cheongan-Myeon Goesan <br>\nContact: Tae Cha <br>\nEmail: chongmin@sstm.kr <br>\nPhone: +82 43-836-9630 <br>'),
(5, '10/26/2021', 'Betel Nut', 'india', 'Type: Whole <br>\nQuantity Required:1 Twenty-Foot Container <br>\nShipping Terms:CIF <br>\nDestination Port:India <br>\nPayment Terms:T/T <br>\nLooking for suppliers from:Myanmar, Indonesia <br>\nAddress: India <br>\nContact: Walia Prabhujot Singh <br>\nEmail: prabhusinghwalia@gmail.com <br>\nPhone: 919820139160 <br>'),
(6, '10/26/2021', 'Fresh And Dried Ginger', 'Spain', 'Quantity Required:10 Ton/Tons <br>\nShipping Terms:CIF<br>\nDestination Port:Barcelona, Spain<br>\nPayment Terms:Bank Transfer<br>\nLooking for suppliers from:Worldwide <br>\nAddress: Calle Rambla Del Carmen, 30B, 30160 Murcia <br>\nContact: Marcus <br>\nEmail: especieramurciana@hotmail.com <br>\nPhone: +34 968 85 01 50 <br>'),
(7, '10/26/2021', 'Instant Coffee Sachet', 'canada', 'Type: Instant Coffee <br>\nBrand: Nescafe <br>\nPackaging Terms: Customized<br>\nQuantity Required:500 - 1000 Piece/Pieces<br>\nShipping Terms:FOB or CIF Or CFR<br>\nDestination Port:Canada<br>\nPayment Terms:Bank Transfer<br>\nLooking for suppliers from:Worldwide<br>\nAddress: 78 Avenue Langldy British Columbia, Appt 332<br>\nContact: Karim<br>\nEmail: karimna0077@gmail.com<br>\nPhone: +17789510077<br>'),
(8, '10/26/2021', 'Palm Oil', 'Czech Republic', 'Quantity Required:25000 Kilogram/Kilograms(sample)<br>\nShipping Terms:FOB<br>\nDestination Port:Czech Republic<br>\nPayment Terms:To be discussed with suppliers<br>\nLooking for suppliers from:Worldwide<br>\nAddress: Michalska 2030 Slezska Ostrava<br>\nContact: Jiri Cernota<br>\nEmail: jiri.cernota@bewit.cz<br>\nPhone: 00420 605 248 621<br>'),
(9, '10/26/2021', 'Fresh Ginger', 'Australia', 'Shipping Terms:CIF<br>\nDestination Port:Australia<br>\nPayment Terms:Bank Transfer<br>\nLooking for suppliers from:Fiji<br>\nAddress: Australia<br>\nContact: Rafiqul Haider<br>\nEmail: rafiqulhaidermintoo@hotmail.com<br>\nPhone: 61413017528<br>'),
(10, '10/26/2021', 'Pure Rbd Coconut Oil', 'United Kingdom', '100% Pure RBD Coconut Oil In 500ml Pet Jars<br>\nPackaging Terms:500ml PET Jars, 6 Jars in a Tray Shrink wrapped<br>\nQuantity Required:15 - 18 Twenty-Foot Container(sample)<br>\nShipping Terms:FOB<br>\nDestination Port:Felixstowe, United Kingdom<br>\nPayment Terms:DP At Sight<br>\nLooking for suppliers from:Worldwide<br>\nAddress: Unit 4 Harwich Industrial Estate Europa Way<br>\nContact: Gurkiranjit Kaur<br>\nEmail: gurkiranjit.kaur@suryafoods.com<br>\nPhone: +44 203 393 4170 / Ext. 239<br>'),
(11, '10/26/2021', 'Palm Oil And Coconut Oil', 'United Kingdom', 'Shipping Terms:CIF <br>\nDestination Port:Philippines <br>\nPayment Terms:L/C Or T/T Or Bank Transfer<br>\nLooking for suppliers from:Worldwide<br>\nAddress: United Kingdom<br>\nContact: Maria Baccay<br>\nEmail: ymayatucam@yahoo.com<br>\nPhone: 447305965124<br>'),
(12, '10/26/2021', 'Black Pepper', 'Egypt', 'Quantity Required : 27 Ton/Tons<br>\nShipping Terms : CIF<br>\nDestination Port : Alexandria, Egypt<br>\nPayment Terms : To be discussed with suppliers<br>\nLooking for suppliers from : Worldwide<br>\nAddress: Egypt<br>\nContact: Kirolos<br>\nEmail: albekhitalattar@gmail.com<br>\nPhone: +201276444257<br>'),
(13, '10/26/2021', 'Rice Husk', 'Japan', 'Use: Animal Feed<br>\nForm: Husky<br>\nPackaging Terms:Bags <br>\nQuantity Required:1 Twenty-Foot Container <br>\nShipping Terms:FOB <br>\nDestination Port:Japan <br> \nPayment Terms:T/T Or L/C <br>\nLooking for suppliers from:Worldwide <br>\nAddress: 9F Urban Ace Kitahama Bldg 2-3-7 Hiranomachi Chuo-Ku <br>\nContact: Tagai <br>\nEmail: info@kinseimatec.co.jp <br>\nPhone: 81-6-62210500<br>'),
(14, '10/26/2021', 'Bbq Charcoal', 'United Arab Emirates', 'Shape: Lumps <br>\nQuantity Required : 150 Kilogram/Kilograms Monthly(sample) <br>\nShipping Terms : FOB<br>\nDestination Port : Dubai, United Arab Emirates <br>\nPayment Terms : To be discussed with suppliers <br>\nLooking for suppliers from : United Arab Emirates<br>\nAddress: Ajman<br>\nContact: Mervyn<br>\nEmail: mervynmonteiro054@gmail.com<br>\nPhone: +971568881707<br>'),
(15, '10/26/2021', 'Bbq Charcoal', 'Greece', 'Shipping Terms : FOB<br>\nDestination Port : Greece <br>\nPayment Terms : To be discussed with suppliers<br>\nLooking for suppliers from : Worldwide<br>\nAddress: Greece<br>\nContact: Elias Vassos<br>\nEmail: ivass@provirom.com<br>\nPhone: 306978114774<br>'),
(16, '10/26/2021', 'Brown Sugar', 'India', 'Quantity Required : 1 Twenty-Foot Container<br>\nShipping Terms : FOB<br>\nDestination Port : Other-Not Shown<br>\nPayment Terms : Bank Transfer<br>\nLooking for suppliers from : Worldwide<br>\nAddress: India<br>\nContact: Roy Changoer<br>\nEmail: changoertrading@gmail.com<br>\nPhone: +91 9960321088<br>'),
(17, '10/26/2021', 'Fresh Onion And Potato', 'Sri Lanka', 'Size: Big<br>\nStyle: Fresh<br>\nQuantity Required : 1 Twenty-Foot Container <br>\nShipping Terms : CIF <br>\nDestination Port : Colombo, Sri Lanka <br>\nPayment Terms : DP <br>\nLooking for suppliers from : Worldwide<br>\nAddress: Bodiraja Mawatha Colombo 11 <br>\nContact: Ganesh Sundara <br>\nEmail: earn_ganesh@yahoo.com<br>\nPhone: +94 0112330146 <br>'),
(18, '10/26/2021', 'Fresh Onion', 'Singapore', 'Quantity Required : 1 Twenty-Foot Container <br>\nShipping Terms : CIF<br>\nDestination Port : Singapore <br> \nPayment Terms : T/T <br>\nLooking for suppliers from : Worldwide <br>\nAddress: 6 Mandai Link <br>\nContact: Michelle <br>\nEmail: contact@shengsiong.com.sg <br>\nPhone: +65 6895 1888 <br>'),
(19, '26/10/2021', 'Fresh Onion', 'Bahrain', '\"Style: Fresh <br>\r\nCultivation Type: Common <br>\r\nSize: Customized <br>\r\nPackag… <br>\"'),
(20, '10/26/2021', 'Cinnamon', 'Canada', 'Shipping Terms : FOB\nDestination Port : India\nPayment Terms : To be discussed with suppliers\nLooking for suppliers from : Worldwide\nAddress: Canada\nContact: Daljit Randhawa\nEmail: dsgk25@hotmail.com\nPhone: +16047214959'),
(21, '10/26/2021', 'Dry Spices', 'Egypt', 'Dry Ginger 15 Ton <br>\nCoriander Seeds 27 Ton <br>\nCinnamon Sticks 30 Cm 80% 15 Ton <br>\nFennel Seeds 27 Ton <br>\nFenugreek Seeds 27 Ton <br>\nMustard Seeds 27 Ton <br>\nNutmeg 27 Ton <br>\nCardamom 27 Ton <br>\nQuantity Required : MOQ <br>\nShipping Terms : CIF <br>\nDestination Port : Alexandria Port, Egypt <br>\nPayment Terms : To be discussed with suppliers <br>\nLooking for suppliers from : Worldwide <br>\nAddress: Egypt <br>\nContact: Kirolos <br>\nEmail: albekhitalattar@gmail.com <br>\nPhone: +201276444257 <br>'),
(22, '10/26/2021', 'Islamic Hats', 'United Kingdom', 'Size: 58cm <br>\nType: Skull Type Hats <br>\nColor: Customized <br>\nQuantity Required : MOQ <br>\nShipping Terms : CIF <br>\nDestination Port : United Kingdom <br>\nPayment Terms : Bank Transfer <br>\nLooking for suppliers from : Worldwide <br>\nAddress: United Kingdom <br>\nContact: Mujahid Sardar <br>\nEmail: mujahidsardar92@gmail.com <br>\nPhone: +4407539554540 <br>'),
(23, '10/26/2021', 'Fresh Red Onion', 'Malaysia', 'Style: Fresh <br>\nSize: All Sizes <br>\nQuantity Required : 1 Twenty-Foot Container <br>\nShipping Terms : CIF <br>\nDestination Port : Port Klang, Malaysia <br>\nPayment Terms : DP <br>\nLooking for suppliers from : Worldwide <br>\nAddress: 46000, 31-1, Jalan Pjs 3/32, Pjs 3, 46150 Petaling Jaya, Selangor <br>\nContact: Rauf <br>\nEmail: hasiriamarketing@yahoo.com <br>\nPhone: 0060192429786 <br>'),
(24, '10/26/2021', 'Jaggery', 'Bangladesh', 'Color: Yellow, Brown <br>\nType: Whole, Powder <br>\nPackaging Terms : Standard <br>\nQuantity Required : 1 - 2 Forty-Foot Container <br>\nShipping Terms : CNF <br>\nDestination Port : Chittagong, Bangladesh <br>\nPayment Terms : L/C <br>\nLooking for suppliers from : Worldwide <br>\nAddress: Monem Business District 111, Bir Uttam Cr Dutta Road, Level 13 Karwanbazar, Dhaka-1205, <br>\nContact: Rezaul <br>\nEmail: rezaul@amlbd.com <br>\nPhone: +88 (02) 9632011 <br> \n'),
(25, '10/26/2021', 'Jaggery', 'Malaysia', 'Type: Cane, Palm, Etc.  <br>\nForm: Powder & Solid Lump <br>\nColor: Light, Brown <br>\nQuantity Required : 1 Twenty-Foot Container(sample) <br>\nShipping Terms : CNF <br>\nDestination Port : Penang, Malaysia <br>\nPayment Terms : CAD Via Bank <br>\nLooking for suppliers from : Worldwide <br>\nPlease contact via email only. <br>\nAddress: Lot 981, Mk- 16, Lorong Sungai Lokan 3/1, Taman Perusahaan Sungai Lokan <br>\nContact: Alice <br>\nEmail: office@skhpg.com <br>\nPhone: <br>\n'),
(26, '10/26/2021', 'Jaggery', 'Sri Lanka', 'Type: Ball, Cube, Powder <br>\nColor: Yellow Brown <br> \n100% Natural Fresh <br>\nPackaging Terms : Standard <br>\nQuantity Required : 1 Twenty-Foot Container <br>\nShipping Terms : CNF Or CIF <br>\nDestination Port : Colombo, Sri Lanka <br>\nPayment Terms : L/C, T/T Or CAD <br>\nLooking for suppliers from : Worldwide <br>\nAddress: 21, Old Moor Street Colombo 12 <br>\nContact: Haniffa <br>\nEmail: gazzalyhaniffa55@gmail.com <br>\nPhone: 94 77 484 1195 <br>'),
(27, '10/26/2021', 'Jaggery', 'Oman', 'Color: Yellow, Brown <br>\nType: Whole, Powder <br>\nAs Per EU Standard, Agricultural Certificate Pesticide Free <br>\nQuantity Required : 1 Twenty-Foot Container <br>\nShipping Terms : CIF <br>\nDestination Port : Sohar, Oman <br>\nPayment Terms : L/C Or T/T <br>\nLooking for suppliers from : Worldwide <br>\nAddress: Near Rusayl Round, Building 2459 Mawellah Height Rusayl, Street 4731 South Mawellah Area Muscat, 112 <br>\nContact: Jeetu Pandya <br>\nEmail: mppandya@omantel.net.om <br>\nPhone: +968-24543931 <br>'),
(28, '10/26/2021', 'Jaggery', 'United Arab Emirates', 'Form: Solid <br>\nColor: Yellow, Brown <br>\nType: Whole, Powder <br>\nPackaging Terms : Standard <br>\nQuantity Required : 1 Twenty-Foot Container <br>\nShipping Terms : CIF Or CNF <br>\nDestination Port : Jebel Ali, Sohar, Doha, United Arab Emirates <br>\nPayment Terms : 30 Days Credit DA <br>\nLooking for suppliers from : Worldwide <br> \nAddress: 5394 Dubai Uae / Gwc Logistics <br>\nContact: Shoaib <br>\nEmail: rashwell@eim.ae <br>\nPhone: +971 4226 2900 <br>'),
(29, '10/26/2021', 'Jaggery', 'Oman', 'Style: Dried <br>\nForm: Solid, Powder <br> \nColor: Brown <br> \nPackaging Terms : Standard <br> \nQuantity Required : 1 Twenty-Foot Container(sample) <br> \nShipping Terms : FOB <br> \nDestination Port : Oman <br> \nPayment Terms : Bank Transfer <br> \nLooking for suppliers from : Worldwide <br> \nAddress: P O Box <br> \nContact: Pramoj <br> \nEmail: pramojc@enhanceoman.com <br> \nPhone: +968 2452 6333 <br> '),
(30, '10/26/2021', 'Jaggery', 'Malaysia', 'Form: Solid, Raw, Powder <br> \nColor: Yellow, Brown <br> \nPackaging Terms : Bags <br> \nQuantity Required : 1 Twenty-Foot Container <br> \nShipping Terms : CIF <br> \nDestination Port : Penang, Malaysia <br> \nPayment Terms : T/T <br> \nLooking for suppliers from : Worldwide <br>  \nAddress: 2248, Plot 11, Lorong Iks Bukit Minyak 2, Taman Iks Bukit Minyak <br> \nContact: Tan Kim Yam <br> \nEmail: thyeshen@hotmail.com <br> \nPhone: +60 19 473 7391 <br> '),
(31, '10/26/2021', 'Fresh Red Onions', 'India', 'Style: Fresh <br> \nCultivation: Common <br> \nQuantity Required : 1 Twenty-Foot Container(sample) <br> \nShipping Terms : CIF <br> \nDestination Port : India <br> \nPayment Terms : T/T <br> \nLooking for suppliers from : Worldwide <br> \nAddress: C-66/404 Shiv Smruti Chs Anand Angar Dahisar East <br> \nContact: Shashank Kambli <br> \nEmail: contact@kokanmeva.in <br> \nPhone: +9867107440 <br> '),
(32, '10/26/2021', 'Spices Like Black Pepper, Cardamom And Turmeric', 'Canada', 'Type: Black Pepper, Cardamom, Turmeric <br> \nPackaging Terms : Bags <br> \nQuantity Required : 20 - 25 Metric Ton/Metric Tons <br> \nShipping Terms : FOB, CIF Or CNF <br> \nDestination Port : Canada <br> \nPayment Terms : Wire Transfer <br> \nLooking for suppliers from : Worldwide <br> \nPlease contact via email only. <br> \nAddress: 2440 Bank Street Ottawa <br> \nContact: Ahmed Sobh <br> \nEmail: minarva87@hotmail.com <br> '),
(33, '10/26/2021', 'Broom Stick', 'India', 'Quantity Required:1 Twenty-Foot Container <br> \nShipping Terms:CIF <br> \nDestination Port:India <br> \nPayment Terms:To be discussed with suppliers <br> \nLooking for suppliers from:Worldwide <br> \nAddress: Kolkata <br> \nContact: Sujoy <br> \nEmail: info@utkarshcnf.in <br> \nPhone: 9143750657 <br> '),
(34, '10/26/2021', 'Coconut Oil', 'Lebanon', 'Food Grade <br> \nQuantity Required:3 Metric Ton/Metric Tons <br> \nShipping Terms:CIF or FOB <br> \nDestination Port:Beirut port, Lebanon <br> \nPayment Terms:To be discussed with suppliers <br> \nLooking for suppliers from:Worldwide <br> \nAddress: Lebanon <br>  \nContact: Ali Slim <br> \nEmail: ali.slim@globalfoods.com.lb <br> \nPhone: +9615815815 <br> '),
(35, '10/26/2021', 'Nutmeg', 'Canada', 'Whole <br> \nGrade A Quality <br> \nShipping Terms : CIF Or CFR <br> \nDestination Port : Canada <br> \nPayment Terms : To be discussed with suppliers <br> \nLooking for suppliers from : Worldwide <br> \nAddress: 646 Oak Wood Ave Suite B 103, Toronto  <br> \nContact: Eddie Emmons  <br> \nEmail: eddiethebrandmasonry@gmail.com  <br> \nPhone: +1(647) 784-5103  <br> '),
(36, '10/26/2021', 'Brown Cane Sugar', 'United Arab Emirates', 'Quantity Required : 2 Twenty-Foot Container  <br> \nShipping Terms : CIF  <br> \nDestination Port : United Arab Emirates  <br> \nPayment Terms : L/C  <br> \nLooking for suppliers from : Worldwide  <br> \nAddress: Room504/Office No.10, Al Abbas Building Bank Street  <br> \nContact: Raquel  <br> \nEmail: gatewaytechnologies3@gmail.com  <br> \nPhone: +971-52-9451694  <br> '),
(37, '10/26/2021', 'Brown Sugar', 'India', 'Quantity Required : 1 Twenty-Foot Container  <br> \nShipping Terms : FOB  <br> \nDestination Port : Other-Not Shown  <br> \nPayment Terms : Bank Transfer  <br> \nLooking for suppliers from : Worldwide  <br> \nAddress: India  <br> \nContact: Roy Changoer <br> \nEmail: changoertrading@gmail.com <br> \nPhone: +91 9960321088 <br> '),
(38, '11/15/2021', 'Bru Instant Coffee', 'United Kingdom', 'Bru Instant Coffee (100 Gms) <br> \nBru Instant Coffee (200 Gms) <br> \nBru Filter Green Label (500 Gms) <br> \nSun Rice Coffee (200 Gms) <br> \nOriginal Good Quality Brand <br> \nAll Varities <br> \nQuantity Required : 1 Twenty-Foot Container(sample) <br> \nShipping Terms : CIF <br> \nDestination Port : Felixstowe, United Kingdom <br> \nPayment Terms : L/C <br> \nLooking for suppliers from : India <br> \nAddress: 244 Alma Rd <br> \nContact: Jay <br> \nEmail: caaveri@gmail.com <br> \nPhone: +44 7481 747337 <br> '),
(39, '11/15/2021', 'Cassia Sticks', 'United States', 'Grade A Quality <br> \nPackaging Terms : Small Packs - 100 -200 Gram Packs <br> \nQuantity Required : 1 Twenty-Foot Container <br> \nShipping Terms : FOB Or CIF <br> \nDestination Port : Ny, United States <br> \nPayment Terms : L/C <br> \nLooking for suppliers from : Worldwide <br> \nAddress: 2500 E. 25Th Street Suite 109 Minneapolis, Mn 554 <br> \nContact: Mustafa Mohamed <br> \nEmail: mkadir1711@gmail.com <br> \nPhone: 1-502-744-9957 <br> '),
(40, '11/15/2021', 'Ceylon Cinnamon Ground', 'Croatia', 'Destination Port : Croatia <br> \nPayment Terms : L/C <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Croatia <br> \nContact: Darko Trstenjacki <br> \nEmail: darkotrstenjacki@gmail.com <br> \nPhone: 385-98-1929144 <br> '),
(41, '11/15/2021', 'Charcoal', 'Ukraine', 'Grade A <br> \nLemon Tree And Orange Tree <br> \nQuantity Required : 2 - 4 Twenty-Foot Container Monthly <br> \nShipping Terms : CIF <br> \nDestination Port : Egypt, Ukraine <br> \nPayment Terms : Bank Transfer <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Ukraine <br> \nContact: Viktor <br> \nEmail: frits2@ukr.net <br> \nPhone: 380979838151 <br> '),
(42, '11/15/2021', 'Charcoal', 'Saudi Arabia', 'Shipping Terms : CIF <br> \nDestination Port : Saudi Arabia <br> \nPayment Terms : L/C <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Saudi Arabia <br> \nContact: Madani Majwill Alshammari <br> \nEmail: vip2393@hotmail.com <br> \nPhone: 966508954119 <br> '),
(43, '11/15/2021', 'Charcoal', 'Qatar', 'For Shisha <br> \nPackaging Terms : 10kg-20kg Bag <br> \nQuantity Required : 20 - 25 Ton/Tons <br> \nShipping Terms : CIF <br> \nDestination Port : Qatar <br> \nPayment Terms : Bank Transfer <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Doha <br> \nContact: Ummerfarook <br> \nEmail: farhanfarook1053@gmail.com <br> \nPhone: +97431607584 <br> '),
(44, '11/15/2021', 'Coconut Like Desiccated Coconut, Coconut Chips', 'Japan', 'Type: Desiccated Coconut, Coconut Chips <br> \nStyle: Fresh <br> \nGrade: A <br> \nPackaging Terms:Standard <br> \nQuantity Required:1 Twenty-Foot Container <br> \nShipping Terms:FOB <br> \nDestination Port:Japan <br> \nPayment Terms:L/C Or T/T <br> \nLooking for suppliers from:Worldwide <br> \nAddress: 15, Nominamicho, Nishi-Ku Nagoya, 452-0847 <br> \nContact: Yashihara Mizutani <br> \nEmail: mizutani@union-shoji.co.jp <br> \nPhone: +81 52 501 4321 <br> '),
(45, '11/15/2021', 'Coconut', 'Oman', 'Type: De-husked <br> \nCultivation: Common <br> \nPackaging Terms : Standard <br> \nQuantity Required : 1 Twenty-Foot Container(sample) <br> \nShipping Terms : CNF <br> \nDestination Port : Oman <br> \nPayment Terms : T/T <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Mawella Centrl Market, Cr#1666100mm <br> \nContact: Bava <br> \nEmail: almishmish77@gmail.com <br> \nPhone: +968 9961 0017 <br> '),
(46, '11/15/2021', ' Coconut', ' Italy', 'Grade: Top Quality <br> \nSize (cm): 15cm+ <br> \nQuantity Required : 1 Twenty-Foot Container<br> \nShipping Terms : CIF <br> \nDestination Port : Italy <br> \nPayment Terms : T/T Or L/C <br> \nLooking for suppliers from : Africa <br> \nAddress: Via Alberto Da Giussano, 22, 20011 Corbetta Mi <br> \nContact: Abdul <br> \nEmail: freshtropical@freshtropical.it <br> \nPhone: +393452979001 <br> '),
(47, '11/15/2021', 'Coconut', 'United Kingdom', 'Color: Green, Natural, Brown <br> \nPart: Fresh De Husked Coconut <br> \nHusk Type: Whole <br> \nCultivation Type: Common <br> \nQuantity Required : 1 Twenty-Foot Container <br> \nShipping Terms : FOB <br> \nDestination Port : United Kingdom <br> \nPayment Terms : L/C Or T/T <br> \nLooking for suppliers from : Worldwide <br> \nAddress: P- 46 Hayes Rd, Hounslow, Southall Uv25N <br> \nContact: Sanjay <br> \nEmail: fruityfresh123@aol.co.uk <br> \nPhone: +44 20 8561 8196 <br> '),
(49, '11/15/2021', 'Coffee Beans Green And Roasted', 'Ukraine', 'Shipping Terms : CIF <br> \nDestination Port : Indonesia <br> \nPayment Terms : To be discussed with suppliers <br> \nLooking for suppliers from : Worldwide <br>  \nAddress: Kiev <br> \nContact: Alex Stalmakhovych <br> \nEmail: alexhemp@windowslive.com <br> \nPhone: +380950185845 <br> '),
(50, '11/15/2021', 'Coffee Beans', 'Sri Lanka', 'Variety: Robusta <br> \nStyle: Dried <br> \nProcessing Type: Fermented, Green, Roasted <br> \nGrade: Grade A <br> \nPackaging Terms : Standard <br> \nQuantity Required : 1 Twenty-Foot Container <br> \nShipping Terms : CIF <br> \nDestination Port : Colombo, Sri Lanka <br> \nPayment Terms : DP Or DA <br> \nLooking for suppliers from : Worldwide <br> \nAddress: 334 T. B. Jayah Mawatha, Colombo <br> \nContact: Chathu <br> \nEmail: info@falconfoods.lk <br> \nPhone: +94 112 697 151 <br> '),
(51, '11/15/2021', 'Coffee Beans', 'Canada', 'Type: Arabica, Robusta <br> \nPackaging Terms : Customized <br> \nQuantity Required : 1 Twenty-Foot Container <br> \nShipping Terms : FOB Or CIF <br> \nDestination Port : United States <br> \nPayment Terms : L/C Or T/T <br> \nLooking for suppliers from : Worldwide <br> \nPlease contact via email only. <br> \nAddress: 8160, 4 Postal Code H2E 1X7 Quebec, Montreal <br> \nContact: Slim Eli <br> \nEmail: slimeli2@hotmail.com <br> '),
(52, '11/15/2021', 'Coffee Beans', 'Jordan', 'Form: Beans <br> \nStyle: Organic <br> \nPackaging Terms : Standard <br> \nQuantity Required : 900 Ton/Tons <br> \nShipping Terms : CIF <br> \nDestination Port : Aqaba, Jordan <br> \nPayment Terms : To be discussed with suppliers <br> \nLooking for suppliers from : Worldwide <br> \nAddress: P O Box 1557 Tlaali <br> \nContact: Sandy <br> \nEmail: salhajahjeh@alameedcoffee.com <br> \nPhone: +962 6 471 6060 <br> '),
(53, '11/15/2021', 'Coffee Beans', 'Saudi Arabia', 'Rio Minas 17/18 <br> \nQuantity Required : 100 - 600 Metric Ton/Metric Tons Monthly <br> \nShipping Terms : CIF <br> \nDestination Port : Aqaba Port, Jordan <br> \nPayment Terms : L/C <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Saudi Arabia <br>  \nContact: Zuhair <br> \nEmail: ferasmasoudssss@gmail.com <br> \nPhone: 00966590599542. <br> '),
(54, '11/15/2021', 'Coffee Beans', 'Hong Kong', 'Color: Green, Brown, Etc. <br> \nRoasted Level: Medium Light Roasted/Non-Roasted <br> \nPackaging Terms : Standard <br> \nQuantity Required : 1 Twenty-Foot Container(sample) <br> \nShipping Terms : FOB <br> \nDestination Port : Hong Kong <br> \nPayment Terms : To be discussed with suppliers <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Shop 3, 69 Peel, Central <br> \nContact: Rozer <br> \nEmail: info@hazelnhershey.com <br> \nPhone: +852 3106 0760 <br> '),
(56, '11/15/2021', 'Coffee Beans', 'Sri Lanka', 'Variety: Robusta <br> \nStyle: Dried <br> \nProcessing Type: Fermented, Green, Roasted <br> \nGrade: Grade A <br> \nPackaging Terms : Standard <br> \nQuantity Required : 1 Twenty-Foot Container <br> \nShipping Terms : CNF Or CIF <br> \nDestination Port : Colombo, Sri Lanka <br> \nPayment Terms : L/C Or T/T Or CAD <br> \nLooking for suppliers from : Worldwide <br> \nAddress: 21, Old Moor Street <br>  \nContact: Haniffa <br> \nEmail: gazzalyhaniffa55@gmail.com <br> \nPhone: 94 77 484 1195 <br> '),
(57, '11/15/2021', 'Coffee Beans', 'Coffee Beans', 'Shipping Terms : CIF <br> \nDestination Port : Oman <br> \nPayment Terms : L/C <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Oman <br> \nContact: Amani Salem <br> \nEmail: amanielectrical85@gmail.com <br> \nPhone: 968 97463783 <br> '),
(58, '11/15/2021', 'Coffee Beans', 'Oman', 'Shipping Terms : CIF <br> \nDestination Port : Oman <br> \nPayment Terms : L/C <br> \nLooking for suppliers from : Worldwide <br> \nAddress: Oman <br> \nContact: Amani Salem <br> \nEmail: amanielectrical85@gmail.com <br> \nPhone: 968 97463783 <br> '),
(59, '11/15/2021', 'Coffee Beans', 'Sri Lanka', 'Variety: Robusta <br> \nStyle: Dried <br> \nProcessing Type: Fermented, Green, Roasted <br> \nGrade A <br> \nQuantity Required : 1 Twenty-Foot Container <br> \nShipping Terms : CIF <br> \nDestination Port : Colombo, Sri Lanka <br> \nPayment Terms : DP Or DA <br>  \nLooking for suppliers from : Worldwide <br> \nAddress: 334 T. B. Jayah Mawatha, Colombo <br> \nContact: Chathurangi <br> \nEmail: info@falconfoods.lk <br> \nPhone: +94 777811377 <br> '),
(60, '20/11/2021', 'Frozen Seafoods', 'japan', 'Company : Tokai Denpun Co., Ltd.\r\nAl<br>\r\nAddress : 24-15 Tenmacho Aoi-Ku Shizuoka, 420-0858 <br>\r\nEmail : mie_suzuki@tdc-net.co.jp<br>\r\nTelepon / Phone : +81 54 253 0934<br>\r\nWebsite : tdc-net.co.jp<br>'),
(61, '20/11/2021', 'Fresh Fruits', 'Maldives', 'Company : Four Seasons Resorts Maldives<br>\r\nAddress : Kuda Huraa<br>\r\nEmail : mal.purchasing@fourseasons.com<br>\r\nPhone : –<br>\r\nWebsite : fourseasons.com<br>'),
(62, '20/11/2021', 'Spices / Cinnamon, Cloves, Asafoetida, Black Peppercorns, Cardamom, Fennel / Rempah-rempah / Lada Hidam / Kayu Manis / Kapula', 'japan', 'Perusahaan / Company : Vishwas Co Limited<br>\r\nAlamat / Address : 2 Chome-2-21 Hattori Nishimachi, Toyonaka, Osaka 561-0858<br>\r\nEmail : info@vishwasjapan.com<br>'),
(63, '20/11/2021', 'Black Pepper / Lada Hitam', 'Uni Emirate Arab', 'Perusahaan / Company : Hector Sky Foodstuff Trading Llc<br>\r\nAlamat / Address : Office No-101, Opp. Al Ras Metro Station Deira<br>\r\nTelepon / Phone : +971547931641<br>'),
(64, '20/11/2021', 'Coffee / Kopi', 'United Kingdom', 'Company:Caaveri <br>\r\nLimitedAlamat / Address:244 <br> AlmaRdEmail:caaveri@gmail.com <br>\r\nTelepon / Phone:+44 7481 747337<br>'),
(65, '20/11/2021', 'Cinnamon / Kayu Manis', 'Croatia', 'Company:Trstenjacki Trgovina I Usluge D.O.O. <br>\r\nAlamat / Address:–<br>\r\nEmail:darkotrstenjacki@gmail.com<br>\r\nTelepon / Phone:+385-98-1929144<br>'),
(66, '20/11/2021', 'Coffee / Kopi', 'Hong Kong', 'Company:Hazel & Hershey Coffee Roasters <br>\r\nAlamat / Address:Shop 3, 69 Peel, Central<br>\r\nEmail:info@hazelnhershey.com<br>\r\nTelepon / Phone:+852 3106 0760<br>\r\nWebsite:hazelnhershey.com<br>'),
(67, '20/11/2021', 'Abaya', 'United Kingdom', 'Perusahaan / Company:Farahgalbi<br>\r\nAlamat / Address:–<br>\r\nEmail:farahgalbii@gmail.com <br>\r\nTelepon / Phone:+447960426813<br>'),
(68, '20/11/2021', 'Briquette Charcoal', 'India', 'Company:Shilpa Patil <br>\r\nAlamat /Address:Maharashtra <br>\r\nEmail:shilpa.patil@premierindia.co.in<br>\r\nTelepon / Phone:+7738004606<br>\r\nWebsite:premierindia.co.in<br>'),
(69, '20/11/2021', 'Betel Nut', 'Vietnam', 'Perusahaan / Company:Phoenix Inox <br>\r\nAlamat / Address:– <br>\r\nEmail:hoang@phoenixincchina.com <br>\r\nTelepon / Phone:+84-796-777-796 <br>\r\nWebsite:phoenixincchina.com <br>'),
(70, '20/11/2021', 'Cooking oil', 'Qatar', 'Perusahaan / Company: Manhal Trading And Contracting Co. <br>\r\nAlamat / Address:Salwa <br> RdEmail:foodstuffs@manhalqatar.com <br>\r\nTelepon / Phone:+974 33524700 <br>\r\nWebsite:manhalqatar.com <br>'),
(71, '20/11/2021', 'Sunflower Oil / Palm Oil', 'United Kingdom', 'Perusahaan / Company:Hanson Foods Wholesale <br>\r\nAlamat / Address:– <br> Email:info@hansonfoodswholesale.com <br>\r\nTelepon / Phone:+447453967960 <br>\r\nWebsite:hansonfoodswholesale.com <br>'),
(72, '20/11/2021', 'Dried Betel Nut', 'Vietnam', 'Perusahaan / Company:Thi Vdelta <br>\r\nAlamat / Address:20/5 Dinh Bo Linh St., Ward 24, Binh Thanh Dist, Hochiminh City\r\nEmail:info@vdelta.com.vn <br>\r\nTelepon / Phone:+841653499226 <br>\r\nWebsite:vdelta.com.vn<br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_inquiry`
--
ALTER TABLE `tb_inquiry`
  ADD PRIMARY KEY (`id_inquiry`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;