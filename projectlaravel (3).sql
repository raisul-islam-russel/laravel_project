-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2025 at 08:09 AM
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
-- Database: `projectlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `provider_id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `status_id` bigint(20) NOT NULL,
  `scheduled_time` datetime NOT NULL,
  `price` float NOT NULL,
  `payment_status_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `provider_id`, `service_id`, `status_id`, `scheduled_time`, `price`, `payment_status_id`) VALUES
(1, 1, 2, 1, 1, '2025-02-15 10:00:00', 500, 1),
(2, 2, 3, 2, 2, '2025-02-16 15:00:00', 800, 1),
(3, 1, 2, 3, 3, '2025-02-14 09:30:00', 1500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking_status`
--

CREATE TABLE `booking_status` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking_status`
--

INSERT INTO `booking_status` (`id`, `name`) VALUES
(2, 'Accepted'),
(4, 'Cancelled'),
(3, 'Completed'),
(1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `business_hours`
--

CREATE TABLE `business_hours` (
  `id` bigint(20) NOT NULL,
  `provider_id` bigint(20) NOT NULL,
  `day_of_week` varchar(20) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `is_24_7` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `business_hours`
--

INSERT INTO `business_hours` (`id`, `provider_id`, `day_of_week`, `opening_time`, `closing_time`, `is_24_7`) VALUES
(1, 2, 'Monday', '08:00:00', '18:00:00', 0),
(2, 3, 'Monday', '08:00:00', '18:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image_url`) VALUES
(4, 'Plumbing', 'Pipe fitting, leakage repair, and installation services.', 'plumbing.jpg'),
(5, 'Electrical', 'Wiring, lighting, appliance repair, and maintenance.', 'electrical.jpg'),
(6, 'Cleaning', 'Home and office cleaning services.', 'cleaning.jpg'),
(7, 'Carpentry', 'Woodwork, furniture repair, and custom design.', 'carpentry.jpg'),
(8, 'Painting', 'Interior and exterior painting services.', 'painting.jpg'),
(9, 'Pest Control', 'Professional pest extermination and prevention.', 'pest_control.jpg'),
(10, 'HVAC', 'Heating, ventilation, and air conditioning maintenance.', 'hvac.jpg'),
(11, 'Landscaping', 'Garden maintenance, lawn care, and outdoor design.', 'landscaping.jpg'),
(12, 'Security Systems', 'CCTV, alarms, and security system installation.', 'security.jpg'),
(13, 'Roofing', 'Roof installation, repair, and maintenance.', 'roofing.jpg'),
(14, 'Home Renovation', 'Remodeling, extensions, and home improvement.', 'home_renovation.jpg'),
(15, 'Glass & Mirror', 'Glass cutting, mirror installation, and repair.', 'glass_mirror.jpg'),
(16, 'Appliance Repair', 'Fixing household appliances like fridges and washing machines.', 'appliance_repair.jpg'),
(17, 'Automobile Services', 'Car repair, detailing, and maintenance.', 'automobile.jpg'),
(18, 'Smart Home', 'Installation of smart home automation systems.', 'smart_home.jpg'),
(19, 'Solar Panel Services', 'Solar panel installation and maintenance.', 'solar_panel.jpg'),
(20, 'Flooring', 'Tile, hardwood, vinyl, and carpet flooring services.', 'flooring.jpg'),
(21, 'Handyman', 'General handyman services for small repairs.', 'handyman.jpg'),
(22, 'Fencing & Gates', 'Installation and repair of fences and gates.', 'fencing_gates.jpg'),
(23, 'Waterproofing', 'Protection against water leaks and moisture damage.', 'waterproofing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `password`, `address`, `profile_picture`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Rahim Mia', 'rahim@gmail.com', '01810000201', 'password_hash', 'Dhaka, Bangladesh', NULL, 'Dhaka', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(2, 'Karim Ali', 'karim@gmail.com', '01810000202', 'password_hash', 'Chittagong, Bangladesh', NULL, 'Chittagong', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(3, 'Sadia Rahman', 'sadia@gmail.com', '01810000203', 'password_hash', 'Sylhet, Bangladesh', NULL, 'Sylhet', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(4, 'Nasir Uddin', 'nasir@gmail.com', '01810000204', 'password_hash', 'Khulna, Bangladesh', NULL, 'Khulna', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(5, 'Mizan Hossain', 'mizan@gmail.com', '01810000205', 'password_hash', 'Rajshahi, Bangladesh', NULL, 'Rajshahi', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(6, 'Farhana Akter', 'farhana@gmail.com', '01810000206', 'password_hash', 'Barishal, Bangladesh', NULL, 'Barishal', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(7, 'Tanvir Ahmed', 'tanvir@gmail.com', '01810000207', 'password_hash', 'Dhaka, Bangladesh', NULL, 'Dhaka', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(8, 'Afsana Jahan', 'afsana@gmail.com', '01810000208', 'password_hash', 'Chittagong, Bangladesh', NULL, 'Chittagong', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(9, 'Sabbir Hossain', 'sabbir@gmail.com', '01810000209', 'password_hash', 'Sylhet, Bangladesh', NULL, 'Sylhet', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(10, 'Mahir Hasan', 'mahir@gmail.com', '01810000210', 'password_hash', 'Khulna, Bangladesh', NULL, 'Khulna', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(11, 'Jannatul Ferdous', 'jannatul@gmail.com', '01810000211', 'password_hash', 'Rajshahi, Bangladesh', NULL, 'Rajshahi', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(12, 'Arman Chowdhury', 'arman@gmail.com', '01810000212', 'password_hash', 'Barishal, Bangladesh', NULL, 'Barishal', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(13, 'Mehedi Hasan', 'mehedi@gmail.com', '01810000213', 'password_hash', 'Dhaka, Bangladesh', NULL, 'Dhaka', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(14, 'Shamim Reza', 'shamim@gmail.com', '01810000214', 'password_hash', 'Chittagong, Bangladesh', NULL, 'Chittagong', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(15, 'Sumaiya Akter', 'sumaiya@gmail.com', '01810000215', 'password_hash', 'Sylhet, Bangladesh', NULL, 'Sylhet', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(16, 'Fahim Rahman', 'fahim@gmail.com', '01810000216', 'password_hash', 'Khulna, Bangladesh', NULL, 'Khulna', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(17, 'Sharmin Akhter', 'sharmin@gmail.com', '01810000217', 'password_hash', 'Rajshahi, Bangladesh', NULL, 'Rajshahi', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(18, 'Tareq Mahmud', 'tareq@gmail.com', '01810000218', 'password_hash', 'Barishal, Bangladesh', NULL, 'Barishal', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(19, 'Lamia Noor', 'lamia@gmail.com', '01810000219', 'password_hash', 'Dhaka, Bangladesh', NULL, 'Dhaka', '2025-02-24 06:22:25', '2025-02-24 06:22:25'),
(20, 'Jahid Hasan', 'jahid@gmail.com', '01810000220', 'password_hash', 'Chittagong, Bangladesh', NULL, 'Chittagong', '2025-02-24 06:22:25', '2025-02-24 06:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) NOT NULL,
  `booking_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `amount` float NOT NULL,
  `payment_method_id` bigint(20) NOT NULL,
  `status_id` bigint(20) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `customer_id`, `amount`, `payment_method_id`, `status_id`, `transaction_id`, `created_at`) VALUES
(1, 3, 1, 1500, 1, 2, 'BKASH123456', '2025-02-20 05:34:59'),
(2, 2, 2, 800, 2, 1, 'NAGAD987654', '2025-02-20 05:34:59'),
(3, 1, 1, 500, 3, 1, 'ROCKET567890', '2025-02-20 05:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`) VALUES
(1, 'bKash'),
(4, 'Card'),
(2, 'Nagad'),
(3, 'Rocket');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id`, `name`) VALUES
(2, 'Completed'),
(3, 'Failed'),
(1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_description` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `user_id`, `business_name`, `business_description`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, 'Plumber Pro Services', 'Expert plumbing services for homes and offices.', '123 Water St, Dhaka, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(2, 3, 'Electrician Hub', 'Professional electrical wiring and repair services.', '45 Power Lane, Chittagong, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(3, 4, 'Home Cleaning Masters', 'Reliable and eco-friendly home cleaning services.', '67 Clean St, Sylhet, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(4, 5, 'Carpentry Works', 'Custom furniture and woodwork for residential and commercial clients.', '89 Wood Ave, Khulna, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(5, 6, 'AC Repair Experts', 'Air conditioning installation and maintenance services.', '22 Cooling Rd, Rajshahi, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(6, 7, 'Auto Mechanic Solutions', 'Car and bike repair services.', '12 Engine Rd, Dhaka, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(7, 8, 'Lawn Care Pros', 'Lawn mowing and garden maintenance.', '5 Green Park, Sylhet, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(8, 9, 'Pest Control Experts', 'Professional pest extermination services.', '42 Bug-Free Lane, Barisal, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(9, 10, 'Roofing Specialists', 'Roof repair and waterproofing services.', '88 Roof Rd, Comilla, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(10, 11, 'Interior Designers', 'Modern home and office interior designing.', '76 Decor St, Rangpur, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(11, 12, 'IT Support & Networking', 'Computer repair and networking services.', '99 Tech Lane, Dhaka, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(12, 13, 'Security Solutions', 'CCTV installation and security services.', '23 Safe St, Chittagong, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(13, 14, 'Event Management', 'Event planning and management services.', '54 Party Rd, Sylhet, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(14, 15, 'Handyman Services', 'General repair and maintenance work.', '31 Fix-It St, Barisal, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(15, 16, 'Glass & Mirror Experts', 'Glass cutting and mirror installation services.', '77 Reflection Rd, Khulna, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(16, 17, 'Moving & Shifting', 'House and office relocation services.', '19 Transport St, Rajshahi, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(17, 18, 'Solar Panel Installers', 'Renewable energy solutions and solar panel installation.', '35 Sunlight Rd, Dhaka, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(18, 19, 'Swimming Pool Services', 'Pool cleaning and maintenance.', '81 Water St, Sylhet, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(19, 20, 'Geyser Repair & Installation', 'Geyser maintenance and installation.', '28 Heat Rd, Chittagong, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25'),
(20, 21, 'Painting Services', 'House and office painting services.', '66 Color St, Khulna, Bangladesh', '2025-02-24 06:27:25', '2025-02-24 06:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `service_id`, `customer_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 5, 'Excellent service, highly recommended!', '2025-02-24 06:25:21', '2025-02-24 06:25:21'),
(2, 5, 3, 4, 'Good experience, but could be faster.', '2025-02-24 06:25:21', '2025-02-24 06:25:21'),
(3, 8, 7, 5, 'Great customer support!', '2025-02-24 06:25:21', '2025-02-24 06:25:21'),
(4, 12, 10, 3, 'Average service, expected better.', '2025-02-24 06:25:21', '2025-02-24 06:25:21'),
(5, 18, 15, 4, 'Reliable and professional.', '2025-02-24 06:25:21', '2025-02-24 06:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Provider');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `sub_category_id` bigint(20) DEFAULT NULL,
  `provider_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `status_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `sub_category_id`, `provider_id`, `title`, `description`, `price`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Pipe Leak Repair', 'Fixing water leaks in homes and offices.', 500, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(2, 1, 2, 1, 'Toilet Installation', 'Professional installation of new toilets.', 1500, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(3, 2, 3, 2, 'Ceiling Fan Installation', 'Safe and efficient fan installation.', 800, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(4, 2, 4, 2, 'Wiring Repair', 'Fixing damaged or faulty electrical wiring.', 1200, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(5, 3, 5, 3, 'House Deep Cleaning', 'Comprehensive cleaning for homes.', 2000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(6, 3, 6, 3, 'Office Cleaning', 'Professional office cleaning services.', 3000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(7, 4, 7, 4, 'Furniture Repair', 'Fixing broken wooden furniture.', 2500, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(8, 4, 8, 4, 'Custom Wardrobe Design', 'Design and installation of wardrobes.', 7000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(9, 5, 9, 5, 'AC Gas Refill', 'Refilling gas for air conditioners.', 1500, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(10, 5, 10, 5, 'AC Installation', 'Full AC installation with setup.', 5000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(11, 6, 11, 6, 'Car Engine Repair', 'Complete engine diagnostics and repair.', 10000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(12, 6, 12, 6, 'Brake Replacement', 'Brake pad and rotor replacement.', 4000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(13, 7, 13, 7, 'Lawn Mowing', 'Trimming and maintaining lawns.', 1200, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(14, 7, 14, 7, 'Garden Landscaping', 'Complete landscape design and maintenance.', 8000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(15, 8, 15, 8, 'Pest Control', 'Exterminating insects and rodents.', 2500, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(16, 8, 16, 8, 'Termite Treatment', 'Protecting wooden structures from termites.', 3000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(17, 9, 17, 9, 'Roof Waterproofing', 'Preventing leaks and water damage.', 5000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(18, 9, 18, 9, 'Roof Tile Repair', 'Replacing and fixing broken roof tiles.', 6000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(19, 10, 19, 10, 'Interior Painting', 'High-quality wall painting for homes.', 4500, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43'),
(20, 10, 20, 10, 'Exterior Painting', 'Weather-resistant painting for buildings.', 7000, 1, '2025-02-24 06:28:43', '2025-02-24 06:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `additional_info` text NOT NULL,
  `warranty_period` varchar(50) DEFAULT NULL,
  `estimated_duration` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `service_id`, `additional_info`, `warranty_period`, `estimated_duration`, `created_at`, `updated_at`) VALUES
(1, 1, 'Includes eco-friendly chemicals for safe roof washing.', '6 Months', '3 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(2, 2, 'Leak detection and repair using high-quality fittings.', '1 Year', '2 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(3, 3, 'High-ceiling chandelier installation with expert handling.', '1 Year', '1.5 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(4, 4, 'Furniture restoration and scratch removal.', '3 Years', '4 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(5, 5, 'Deep stain removal and fabric protection.', '6 Months', '2 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(6, 6, 'Quick sink unclogging with minimal mess.', 'No Warranty', '30 Minutes', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(7, 7, 'Comprehensive circuit board testing and repair.', '2 Years', '3 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(8, 8, 'Safe and streak-free window polishing.', 'No Warranty', '1 Hour', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(9, 9, 'Wood refinishing for old or damaged furniture.', '5 Years', '5 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(10, 10, 'Advanced tile cleaning with protective seal.', '1 Year', '2 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(11, 11, 'Energy-efficient tankless water heater setup.', '10 Years', '5 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(12, 12, 'Smart lighting setup with mobile app integration.', '2 Years', '2 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(13, 13, 'Full home cleaning with quality assurance.', 'No Warranty', '6 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(14, 14, 'Custom shelving built to fit any space.', '5 Years', '4 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(15, 15, 'Complete septic tank maintenance service.', '3 Years', '3.5 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(16, 16, 'Powerful generator installation for homes.', '5 Years', '4 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(17, 17, 'Pressure washing for driveways and garage floors.', 'No Warranty', '2 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(18, 18, 'Repair and replacement of broken glass panels.', 'No Warranty', '3 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(19, 19, 'Full drain unclogging service with rooter technology.', '6 Months', '1.5 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02'),
(20, 20, 'Premium sound system wiring for a cinema-like experience.', '2 Years', '4 Hours', '2025-02-23 07:12:02', '2025-02-23 07:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `service_id`, `image_url`, `created_at`) VALUES
(1, 1, 'leak_fixing.jpg', '2025-02-20 05:34:58'),
(2, 2, 'fan_installation.jpg', '2025-02-20 05:34:58'),
(3, 3, 'house_cleaning.jpg', '2025-02-20 05:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` float NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `price`, `image_url`) VALUES
(1, 3, 'Roof Cleaning', 'Thorough cleaning of roofs to remove dirt, mold, and moss.', 2500, 'roof_cleaning.jpg'),
(2, 1, 'Bathroom Plumbing', 'Installation and repair of bathroom plumbing fixtures.', 1200, 'bathroom_plumbing.jpg'),
(3, 2, 'Lighting Fixtures', 'Installation and repair of various lighting systems.', 800, 'lighting_fixtures.jpg'),
(4, 4, 'Carpentry Repairs', 'Repairing wooden furniture and structures.', 1500, 'carpentry_repairs.jpg'),
(5, 3, 'Carpet Cleaning', 'Deep cleaning for carpets and rugs.', 2000, 'carpet_cleaning.jpg'),
(6, 1, 'Kitchen Plumbing', 'Repair and installation of kitchen sinks and pipelines.', 1100, 'kitchen_plumbing.jpg'),
(7, 2, 'Circuit Breaker Repair', 'Fixing faulty circuit breakers and electrical issues.', 1400, 'circuit_breaker.jpg'),
(8, 3, 'Window Cleaning', 'Cleaning residential and commercial building windows.', 1000, 'window_cleaning.jpg'),
(9, 4, 'Wood Polishing', 'Polishing and refinishing wooden surfaces.', 1700, 'wood_polishing.jpg'),
(10, 3, 'Tile & Grout Cleaning', 'Cleaning and sealing tile grout lines.', 1800, 'tile_grout_cleaning.jpg'),
(11, 1, 'Water Heater Installation', 'Installing and maintaining water heaters.', 2200, 'water_heater.jpg'),
(12, 2, 'Smart Home Wiring', 'Wiring homes for smart home automation.', 2500, 'smart_home_wiring.jpg'),
(13, 3, 'Deep Home Cleaning', 'Comprehensive deep cleaning for homes.', 2800, 'deep_home_cleaning.jpg'),
(14, 4, 'Custom Woodwork', 'Crafting and installing custom wooden furniture.', 3000, 'custom_woodwork.jpg'),
(15, 1, 'Septic Tank Maintenance', 'Inspection and cleaning of septic tanks.', 2700, 'septic_tank.jpg'),
(16, 2, 'Generator Installation', 'Installation and servicing of home generators.', 3200, 'generator_installation.jpg'),
(17, 3, 'Pressure Washing', 'High-pressure washing for buildings and sidewalks.', 1500, 'pressure_washing.jpg'),
(18, 4, 'Glass Repair', 'Fixing broken glass windows and panels.', 2000, 'glass_repair.jpg'),
(19, 1, 'Drainage System Cleaning', 'Cleaning and maintenance of drainage systems.', 1900, 'drainage_cleaning.jpg'),
(20, 2, 'Home Theater Wiring', 'Setting up audio-video wiring for home theaters.', 3500, 'home_theater_wiring.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_status`
--
ALTER TABLE `booking_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `business_hours`
--
ALTER TABLE `business_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking_status`
--
ALTER TABLE `booking_status`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_hours`
--
ALTER TABLE `business_hours`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
