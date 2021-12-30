-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 06:07 AM
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
-- Table structure for table `tb_negara`
--

CREATE TABLE `tb_negara` (
  `id_negara` int(11) NOT NULL,
  `negara` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `dial` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_negara`
--

INSERT INTO `tb_negara` (`id_negara`, `negara`, `kode`, `dial`) VALUES
(1, 'Afghanistan ', 'AF', '+93\r'),
(2, 'Albania ', 'AL', '+355\r'),
(3, 'Algeria ', 'DZ', '+213\r'),
(4, 'American Samoa', 'AS', '+1-684\r'),
(5, 'Andorra, Principality of ', 'AD', '+376\r'),
(6, 'Angola', 'AO', '+244\r'),
(7, 'Anguilla ', 'AI', '+1-264\r'),
(8, 'Antarctica', 'AQ', '+672\r'),
(9, 'Antigua and Barbuda', 'AG', '+1-268\r'),
(10, 'Argentina ', 'AR', '+54\r'),
(11, 'Armenia', 'AM', '+374\r'),
(12, 'Aruba', 'AW', '+297\r'),
(13, 'Australia', 'AU', '+61\r'),
(14, 'Austria', 'AT', '+43\r'),
(15, 'Azerbaijan or Azerbaidjan (Former Azerbaijan Soviet Socialist Republic)', 'AZ', '+994\r'),
(16, 'Bahamas, Commonwealth of The', 'BS', '+1-242\r'),
(17, 'Bahrain, Kingdom of (Former Dilmun)', 'BH', '+973\r'),
(18, 'Bangladesh (Former East Pakistan)', 'BD', '+880\r'),
(19, 'Barbados ', 'BB', '+1-246\r'),
(20, 'Belarus (Former Belorussian [Byelorussian] Soviet Socialist Republic)', 'BY', '+375\r'),
(21, 'Belgium ', 'BE', '+32\r'),
(22, 'Belize (Former British Honduras)', 'BZ', '+501\r'),
(23, 'Benin (Former Dahomey)', 'BJ', '+229\r'),
(24, 'Bermuda ', 'BM', '+1-441\r'),
(25, 'Bhutan, Kingdom of', 'BT', '+975\r'),
(26, 'Bolivia ', 'BO', '+591\r'),
(27, 'Bosnia and Herzegovina ', 'BA', '+387\r'),
(28, 'Botswana (Former Bechuanaland)', 'BW', '+267\r'),
(29, 'Bouvet Island (Territory of Norway)', 'BV', '\r'),
(30, 'Brazil ', 'BR', '+55\r'),
(31, 'British Indian Ocean Territory (BIOT)', 'IO', '\r'),
(32, 'Brunei (Negara Brunei Darussalam) ', 'BN', '+673\r'),
(33, 'Bulgaria ', 'BG', '+359\r'),
(34, 'Burkina Faso (Former Upper Volta)', 'BF', '+226\r'),
(35, 'Burundi (Former Urundi)', 'BI', '+257\r'),
(36, 'Cambodia, Kingdom of (Former Khmer Republic, Kampuchea Republic)', 'KH', '+855\r'),
(37, 'Cameroon (Former French Cameroon)', 'CM', '+237\r'),
(38, 'Canada ', 'CA', '+1\r'),
(39, 'Cape Verde ', 'CV', '+238\r'),
(40, 'Cayman Islands ', 'KY', '+1-345\r'),
(41, 'Central African Republic ', 'CF', '+236\r'),
(42, 'Chad ', 'TD', '+235\r'),
(43, 'Chile ', 'CL', '+56\r'),
(44, 'China ', 'CN', '+86\r'),
(45, 'Christmas Island ', 'CX', '+53\r'),
(46, 'Cocos (Keeling) Islands ', 'CC', '+61\r'),
(47, 'Colombia ', 'CO', '+57\r'),
(48, 'Comoros, Union of the ', 'KM', '+269\r'),
(49, 'Congo, Democratic Republic of the (Former Zaire) ', 'CD', '+243\r'),
(50, 'Congo, Republic of the', 'CG', '+242\r'),
(51, 'Cook Islands (Former Harvey Islands)', 'CK', '+682\r'),
(52, 'Costa Rica ', 'CR', '+506\r'),
(53, 'Cote D\'Ivoire (Former Ivory Coast) ', 'CI', '+225\r'),
(54, 'Croatia (Hrvatska) ', 'HR', '+385\r'),
(55, 'Cuba ', 'CU', '+53\r'),
(56, 'Cyprus ', 'CY', '+357\r'),
(57, 'Czech Republic', 'CZ', '+420\r'),
(58, 'Czechoslavakia (Former) See CZ Czech Republic or Slovakia', 'CS', '\r'),
(59, 'Denmark ', 'DK', '+45\r'),
(60, 'Djibouti (Former French Territory of the Afars and Issas, French Somaliland)', 'DJ', '+253\r'),
(61, 'Dominica ', 'DM', '+1-767\r'),
(62, 'Dominican Republic ', 'DO', '+1-809 and +1-829  \r'),
(63, 'East Timor (Former Portuguese Timor)', 'TP', '+670\r'),
(64, 'Ecuador ', 'EC', '+593 \r'),
(65, 'Egypt (Former United Arab Republic - with Syria)', 'EG', '+20\r'),
(66, 'El Salvador ', 'SV', '+503\r'),
(67, 'Equatorial Guinea (Former Spanish Guinea)', 'GQ', '+240\r'),
(68, 'Eritrea (Former Eritrea Autonomous Region in Ethiopia)', 'ER', '+291\r'),
(69, 'Estonia (Former Estonian Soviet Socialist Republic)', 'EE', '+372\r'),
(70, 'Ethiopia (Former Abyssinia, Italian East Africa)', 'ET', '+251\r'),
(71, 'Falkland Islands (Islas Malvinas) ', 'FK', '+500\r'),
(72, 'Faroe Islands ', 'FO', '+298\r'),
(73, 'Fiji ', 'FJ', '+679\r'),
(74, 'Finland ', 'FI', '+358\r'),
(75, 'France ', 'FR', '+33\r'),
(76, 'French Guiana or French Guyana ', 'GF', '+594\r'),
(77, 'French Polynesia (Former French Colony of Oceania)', 'PF', '+689\r'),
(78, 'French Southern Territories and Antarctic Lands ', 'TF', '\r'),
(79, 'Gabon (Gabonese Republic)', 'GA', '+241\r'),
(80, 'Gambia, The ', 'GM', '+220\r'),
(81, 'Georgia (Former Georgian Soviet Socialist Republic)', 'GE', '+995\r'),
(82, 'Germany ', 'DE', '+49\r'),
(83, 'Ghana (Former Gold Coast)', 'GH', '+233\r'),
(84, 'Gibraltar ', 'GI', '+350\r'),
(85, 'Great Britain (United Kingdom) ', 'GB', '\r'),
(86, 'Greece ', 'GR', '+30\r'),
(87, 'Greenland ', 'GL', '+299\r'),
(88, 'Grenada ', 'GD', '+1-473\r'),
(89, 'Guadeloupe', 'GP', '+590\r'),
(90, 'Guam', 'GU', '+1-671\r'),
(91, 'Guatemala ', 'GT', '+502\r'),
(92, 'Guinea (Former French Guinea)', 'GN', '+224\r'),
(93, 'Guinea-Bissau (Former Portuguese Guinea)', 'GW', '+245\r'),
(94, 'Guyana (Former British Guiana)', 'GY', '+592\r'),
(95, 'Haiti ', 'HT', '+509\r'),
(96, 'Heard Island and McDonald Islands (Territory of Australia)', 'HM', '\r'),
(97, 'Holy See (Vatican City State)', 'VA', '\r'),
(98, 'Honduras ', 'HN', '+504\r'),
(99, 'Hong Kong ', 'HK', '+852\r'),
(100, 'Hungary ', 'HU', '+36\r'),
(101, 'Iceland ', 'IS', '+354\r'),
(102, 'India ', 'IN', '+91\r'),
(103, '\"Indonesia (Former Netherlands East Indies', ' Dutch East Indies)\"', 'ID'),
(104, 'Iran, Islamic Republic of', 'IR', '+98\r'),
(105, 'Iraq ', 'IQ', '+964\r'),
(106, 'Ireland ', 'IE', '+353\r'),
(107, 'Israel ', 'IL', '+972\r'),
(108, 'Italy ', 'IT', '+39\r'),
(109, 'Jamaica ', 'JM', '+1-876\r'),
(110, 'Japan ', 'JP', '+81\r'),
(111, 'Jordan (Former Transjordan)', 'JO', '+962\r'),
(112, 'Kazakstan or Kazakhstan (Former Kazakh Soviet Socialist Republic)', 'KZ', '+7\r'),
(113, 'Kenya (Former British East Africa)', 'KE', '+254\r'),
(114, 'Kiribati (Pronounced keer-ree-bahss) (Former Gilbert Islands)', 'KI', '+686\r'),
(115, 'Korea, Democratic People\'s Republic of (North Korea)', 'KP', '+850\r'),
(116, 'Korea, Republic of (South Korea) ', 'KR', '+82\r'),
(117, 'Kuwait ', 'KW', '+965\r'),
(118, 'Kyrgyzstan (Kyrgyz Republic) (Former Kirghiz Soviet Socialist Republic)', 'KG', '+996\r'),
(119, 'Lao People\'s Democratic Republic (Laos)', 'LA', '+856\r'),
(120, 'Latvia (Former Latvian Soviet Socialist Republic)', 'LV', '+371\r'),
(121, 'Lebanon ', 'LB', '+961\r'),
(122, 'Lesotho (Former Basutoland)', 'LS', '+266\r'),
(123, 'Liberia ', 'LR', '+231\r'),
(124, 'Libya (Libyan Arab Jamahiriya)', 'LY', '+218\r'),
(125, 'Liechtenstein ', 'LI', '+423\r'),
(126, 'Lithuania (Former Lithuanian Soviet Socialist Republic)', 'LT', '+370\r'),
(127, 'Luxembourg ', 'LU', '+352\r'),
(128, 'Macau ', 'MO', '+853\r'),
(129, 'Macedonia, The Former Yugoslav Republic of', 'MK', '+389\r'),
(130, 'Madagascar (Former Malagasy Republic)', 'MG', '+261\r'),
(131, 'Malawi (Former British Central African Protectorate, Nyasaland)', 'MW', '+265\r'),
(132, 'Malaysia ', 'MY', '+60\r'),
(133, 'Maldives ', 'MV', '+960\r'),
(134, 'Mali (Former French Sudan and Sudanese Republic) ', 'ML', '+223\r'),
(135, 'Malta ', 'MT', '+356\r'),
(136, 'Marshall Islands (Former Marshall Islands District - Trust Territory of the Pacific Islands)', 'MH', '+692\r'),
(137, 'Martinique (French) ', 'MQ', '+596\r'),
(138, 'Mauritania ', 'MR', '+222\r'),
(139, 'Mauritius ', 'MU', '+230\r'),
(140, 'Mayotte (Territorial Collectivity of Mayotte)', 'YT', '+269\r'),
(141, 'Mexico ', 'MX', '+52\r'),
(142, 'Micronesia, Federated States of (Former Ponape, Truk, and Yap Districts - Trust Territory of the Pacific Islands)', 'FM', '+691\r'),
(143, 'Moldova, Republic of', 'MD', '+373\r'),
(144, 'Monaco, Principality of', 'MC', '+377\r'),
(145, 'Mongolia (Former Outer Mongolia)', 'MN', '+976\r'),
(146, 'Montserrat ', 'MS', '+1-664\r'),
(147, 'Morocco ', 'MA', '+212\r'),
(148, 'Mozambique (Former Portuguese East Africa)', 'MZ', '+258\r'),
(149, 'Myanmar, Union of (Former Burma)', 'MM', '+95\r'),
(150, 'Namibia (Former German Southwest Africa, South-West Africa)', 'NA', '+264\r'),
(151, 'Nauru (Former Pleasant Island)', 'NR', '+674\r'),
(152, 'Nepal ', 'NP', '+977\r'),
(153, 'Netherlands ', 'NL', '+31\r'),
(154, 'Netherlands Antilles (Former Curacao and Dependencies)', 'AN', '+599\r'),
(155, 'New Caledonia ', 'NC', '+687\r'),
(156, 'New Zealand (Aotearoa) ', 'NZ', '+64\r'),
(157, 'Nicaragua ', 'NI', '+505\r'),
(158, 'Niger ', 'NE', '+227\r'),
(159, 'Nigeria ', 'NG', '+234\r'),
(160, 'Niue (Former Savage Island)', 'NU', '+683\r'),
(161, 'Norfolk Island ', 'NF', '+672\r'),
(162, 'Northern Mariana Islands (Former Mariana Islands District - Trust Territory of the Pacific Islands)', 'MP', '+1-670\r'),
(163, 'Norway ', 'NO', '+47\r'),
(164, 'Oman, Sultanate of (Former Muscat and Oman)', 'OM', '+968\r'),
(165, 'Pakistan (Former West Pakistan)', 'PK', '+92\r'),
(166, 'Palau (Former Palau District - Trust Terriroty of the Pacific Islands)', 'PW', '+680\r'),
(167, 'Palestinian State (Proposed)', 'PS', '+970\r'),
(168, 'Panama ', 'PA', '+507\r'),
(169, 'Papua New Guinea (Former Territory of Papua and New Guinea)', 'PG', '+675\r'),
(170, 'Paraguay ', 'PY', '+595\r'),
(171, 'Peru ', 'PE', '+51\r'),
(172, 'Philippines ', 'PH', '+63\r'),
(173, 'Pitcairn Island', 'PN', '\r'),
(174, 'Poland ', 'PL', '+48\r'),
(175, 'Portugal ', 'PT', '+351\r'),
(176, 'Puerto Rico ', 'PR', '+1-787 or +1-939\r'),
(177, 'Qatar, State of ', 'QA', '+974 \r'),
(178, 'Reunion (French) (Former Bourbon Island)', 'RE', '+262\r'),
(179, 'Romania ', 'RO', '+40\r'),
(180, 'Russia - USSR (Former Russian Empire, Union of Soviet Socialist Republics, Russian Soviet Federative Socialist Republic) Now RU ', 'SU', '\r'),
(181, 'Russian Federation ', 'RU', '+7\r'),
(182, 'Rwanda (Rwandese Republic) (Former Ruanda)', 'RW', '+250\r'),
(183, 'Saint Helena ', 'SH', '+290\r'),
(184, 'Saint Kitts and Nevis (Former Federation of Saint Christopher and Nevis)', 'KN', '+1-869\r'),
(185, 'Saint Lucia ', 'LC', '+1-758\r'),
(186, 'Saint Pierre and Miquelon ', 'PM', '+508\r'),
(187, 'Saint Vincent and the Grenadines ', 'VC', '+1-784\r'),
(188, 'Samoa (Former Western Samoa)', 'WS', '+685\r'),
(189, 'San Marino ', 'SM', '+378\r'),
(190, 'Sao Tome and Principe ', 'ST', '+239\r'),
(191, 'Saudi Arabia ', 'SA', '+966\r'),
(192, 'Serbia, Republic of', 'RS', '\r'),
(193, 'Senegal ', 'SN', '+221\r'),
(194, 'Seychelles ', 'SC', '+248\r'),
(195, 'Sierra Leone ', 'SL', '+232\r'),
(196, 'Singapore ', 'SG', '+65\r'),
(197, 'Slovakia', 'SK', '+421\r'),
(198, 'Slovenia ', 'SI', '+386\r'),
(199, 'Solomon Islands (Former British Solomon Islands)', 'SB', '+677\r'),
(200, 'Somalia (Former Somali Republic, Somali Democratic Republic) ', 'SO', '+252\r'),
(201, 'South Africa (Former Union of South Africa)', 'ZA', '+27\r'),
(202, 'South Georgia and the South Sandwich Islands', 'GS', '\r'),
(203, 'Spain ', 'ES', '+34\r'),
(204, 'Sri Lanka (Former Serendib, Ceylon) ', 'LK', '+94\r'),
(205, 'Sudan (Former Anglo-Egyptian Sudan) ', 'SD', '+249\r'),
(206, 'Suriname (Former Netherlands Guiana, Dutch Guiana)', 'SR', '+597\r'),
(207, 'Svalbard (Spitzbergen) and Jan Mayen Islands ', 'SJ', '\r'),
(208, 'Swaziland, Kingdom of ', 'SZ', '+268\r'),
(209, 'Sweden ', 'SE', '+46\r'),
(210, 'Switzerland ', 'CH', '+41\r'),
(211, 'Syria (Syrian Arab Republic) (Former United Arab Republic - with Egypt)', 'SY', '+963\r'),
(212, 'Taiwan (Former Formosa)', 'TW', '+886\r'),
(213, 'Tajikistan (Former Tajik Soviet Socialist Republic)', 'TJ', '+992\r'),
(214, 'Tanzania, United Republic of (Former United Republic of Tanganyika and Zanzibar)', 'TZ', '+255\r'),
(215, 'Thailand (Former Siam)', 'TH', '+66\r'),
(216, 'Togo (Former French Togoland)', 'TG', '\r'),
(217, 'Tokelau ', 'TK', '+690\r'),
(218, 'Tonga, Kingdom of (Former Friendly Islands)', 'TO', '+676\r'),
(219, 'Trinidad and Tobago ', 'TT', '+1-868\r'),
(220, 'Tromelin Island ', 'TE', '\r'),
(221, 'Tunisia ', 'TN', '+216\r'),
(222, 'Turkey ', 'TR', '+90\r'),
(223, 'Turkmenistan (Former Turkmen Soviet Socialist Republic)', 'TM', '+993\r'),
(224, 'Turks and Caicos Islands ', 'TC', '+1-649\r'),
(225, 'Tuvalu (Former Ellice Islands)', 'TV', '+688\r'),
(226, 'Uganda, Republic of', 'UG', '+256\r'),
(227, 'Ukraine (Former Ukrainian National Republic, Ukrainian State, Ukrainian Soviet Socialist Republic)', 'UA', '+380\r'),
(228, 'United Arab Emirates (UAE) (Former Trucial Oman, Trucial States)', 'AE', '+971\r'),
(229, 'United Kingdom (Great Britain / UK)', 'GB', '+44\r'),
(230, 'United States ', 'US', '+1\r'),
(231, 'United States Minor Outlying Islands ', 'UM', '\r'),
(232, 'Uruguay, Oriental Republic of (Former Banda Oriental, Cisplatine Province)', 'UY', '+598\r'),
(233, 'Uzbekistan (Former UZbek Soviet Socialist Republic)', 'UZ', '+998\r'),
(234, 'Vanuatu (Former New Hebrides)', 'VU', '+678\r'),
(235, 'Vatican City State (Holy See)', 'VA', '+418\r'),
(236, 'Venezuela ', 'VE', '+58\r'),
(237, 'Vietnam ', 'VN', '+84\r'),
(238, 'Virgin Islands, British ', 'VI', '+1-284\r'),
(239, 'Virgin Islands, United States (Former Danish West Indies) ', 'VQ', '+1-340\r'),
(240, 'Wallis and Futuna Islands ', 'WF', '+681\r'),
(241, 'Western Sahara (Former Spanish Sahara)', 'EH', '\r'),
(242, 'Yemen ', 'YE', '+967\r'),
(243, 'Yugoslavia ', 'YU', '\r'),
(244, 'Zaire (Former Congo Free State, Belgian Congo, Congo/Leopoldville, Congo/Kinshasa, Zaire) Now CD - Congo, Democratic Republic of', 'ZR', '\r'),
(245, 'Zambia, Republic of (Former Northern Rhodesia) ', 'ZM', '+260\r'),
(246, 'Zimbabwe, Republic of (Former Southern Rhodesia, Rhodesia) ', 'ZW', '+263\r'),
(247, '', '', '\r'),
(248, '', '', '\r'),
(249, '', '', '\r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_negara`
--
ALTER TABLE `tb_negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_negara`
--
ALTER TABLE `tb_negara`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
