-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 01:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `zip_code`, `country`) VALUES
(3, 'test', '123 test', '12121', 'test', 'test'),
(4, 'Almash Alam', 'Mumbai', 'Mumbai', '477879', 'India'),
(5, 'Something Something', 'asdasd', 'asdas', 'adasda', 'adas'),
(9, 'Almash', 'hahah', 'dhasjdha', 'dfkjasdh', 'fjsdhfksd');

-- --------------------------------------------------------

--
-- Table structure for table `meds`
--

CREATE TABLE `meds` (
  `med_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `med_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `med_dom` date DEFAULT NULL,
  `med_image` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `med_descr` text COLLATE latin1_general_ci DEFAULT NULL,
  `med_price` decimal(6,2) NOT NULL,
  `publisherid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `meds`
--

INSERT INTO `meds` (`med_isbn`, `med_title`, `med_dom`, `med_image`, `med_descr`, `med_price`, `publisherid`) VALUES
('2334', 'Ibuprofen', '0000-00-00', 'werere.jpg', 'gjhghj', '12.52', 54),
('978-0-321-94786-4', 'Seretide accuhaler 50/250 mcg \r\n.60 blisters', '0000-00-00', 'seretide.jpg', '\r\nInhalation powder\r\nSeretide 50mcg/250mcg Accuhaler is a combination of two medicines that opens the airways and makes it easier to breathe. It is used in the treatment of asthma (wheezing and shortness of breath) and chronic obstructive pulmonary disorder (a lung disorder in which the flow of air to the lungs is blocked). Best before 16 months from manufacture.\r\n', '650.00', 6),
('978-0-7303-1484-4', 'Vesifa 5 mg\r\n', '0000-00-00', 'vesifa.png', 'Urine incontinence\r\nmuscarinic antagonist that is used in the treatment of overactive bladder. It relieves urinary symptoms like frequent urination, urgent need to urinate and inability to control urination.Best before 2 years from manufacture.', '543.00', 2),
('978-1-118-94924-5', 'Gabawin 50', '0000-00-00', 'GABAWIN.jpg', 'Gabawin 50 Tablet is a medicine used to relieve pain caused by nerve damage (neuropathic pain) due to diabetes, shingles (herpes zoster infection), spinal cord injury, or other conditions. It is also used to treat widespread muscle pain and stiffness in people with fibromyalgia. Best before 9 months from manufacture.', '69.00', 2),
('978-1-1180-2669-4', 'Cetrizine', '0000-00-00', 'cetrizin.jpeg', 'Cetirizine is an antihistamine used to relieve allergy symptoms such as watery eyes, runny nose, itching eyes/nose, sneezing, hives, and itching. It works by blocking a certain natural substance (histamine) that your body makes during an allergic reaction. Best before 10 months from manufacture.', '486.00', 1),
('978-1-44937-019-0', 'Avil', '0000-00-00', 'avil.jpg', 'Avil Tablets contain pheniramine maleate, a medicine used to treat allergic conditions such as hayfever, runny nose, itching skin and skin rashes. It is also used in the prevention and treatment of nausea, vomiting and dizziness due to inner ear disorders (eg Meniere\'s disease) and travel sickness. Best before 14 months from manufacture.', '560.00', 3),
('978-1-44937-075-6', 'Effcorlin 2.5 mg\r\n', '0000-00-00', 'efcorlin.jpeg', 'Efcorlin 2.5mg Pellets has anti-inflammatory and immunosuppressant properties. It is used to treat conditions like allergic conditions, anaphylaxis, asthma, rheumatoid arthritis and inflammatory skin diseases. Best before 6 months from manufacture. ', '346.00', 3),
('978-1-4571-0402-2', 'Crocin \r\n', '0000-00-00', 'Crocin.jpg', 'Crocin Pain Relief provides targeted pain relief. It provides symptomatic relief from mild to moderate pain e.g from headache, migraine, toothache and musculoskeletal pain. Its formula contains clinically proven ingredients paracetamol and caffeine. It acts at the center of pain.Best before 12 months from manufacture.', '956.00', 1),
('978-1-484216-40-8', 'Glycomet 1000mg', '0000-00-00', 'glycomet.jpg', 'Glycomet Tablet is a medicine used to treat type 2 diabetes mellitus. It helps control blood sugar levels and thus prevent serious complications of diabetes. It is also used to treat menstruation related disorder known as Polycystic ovary syndrome (PCOS) in women.Best before 24 months from manufacture', '463.00', 4),
('978-1-484217-26-9', 'Asthalin inhaler\r\n', '0000-00-00', 'asthalin.jpg', 'Asthalin 100mcg Inhaler belongs to a group of medicines called fast-acting bronchodilators or “relievers”. It\'s used to treat the symptoms of asthma and chronic obstructive pulmonary disease (COPD) such as coughing, wheezing and breathlessness.Best before 12 months from manufacture', '598.00', 4),
('978-1-49192-706-9', 'Doxycycline', '0000-00-00', 'doxycycline.jpeg', 'Doxycycline (Oracea) is used only to treat pimples and bumps caused by rosacea (a skin disease that causes redness, flushing, and pimples on the face). Doxycycline is in a class of medications called tetracycline antibiotics. It works to treat infections by preventing the growth and spread of bacteria. Best before 24 months from Manufacture.', '315.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(4, 1, '20.00', '2015-12-04 10:19:14', 'a', 'a', 'a', 'a', 'a'),
(5, 4, '20.00', '2020-11-29 01:29:59', 'Almash Alam', 'Mumbai', 'Mumbai', '477879', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-1-118-94924-5', '20.00', 1),
(1, '978-1-44937-019-0', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(2, '978-1-118-94924-5', '20.00', 1),
(2, '978-1-44937-019-0', '20.00', 1),
(2, '978-1-49192-706-9', '20.00', 1),
(3, '978-0-321-94786-4', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(5, '978-1-484217-26-9', '20.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherid` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherid`, `publisher_name`) VALUES
(1, 'Wrox'),
(2, 'Wiley'),
(3, 'O\'Reilly Media'),
(4, 'Apress'),
(5, 'Packt Publishing'),
(6, 'Addison-Wesley');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `meds`
--
ALTER TABLE `meds`
  ADD PRIMARY KEY (`med_isbn`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
