-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2022 at 06:26 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u616245699_98JsX`
--

-- --------------------------------------------------------

--
-- Table structure for table `airdrop_mtm`
--

CREATE TABLE `airdrop_mtm` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `box` varchar(10) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airdrop_mtm_transfer`
--

CREATE TABLE `airdrop_mtm_transfer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `balance_point`
--

CREATE TABLE `balance_point` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `balance_a` int(11) NOT NULL,
  `balance_b` int(11) NOT NULL,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner_home`
--

CREATE TABLE `banner_home` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_home`
--

INSERT INTO `banner_home` (`id`, `type`, `image`) VALUES
(12, 1, 'iklan_dashboard-01.jpg'),
(15, 2, 'iklan_dashboard1-06.jpg'),
(18, 2, 'iklan_dashboard2-04.jpg'),
(19, 2, 'iklan_dashboard2-05.jpg'),
(20, 1, 'iklan_dashboard-07.jpg'),
(29, 1, 'iklan_dashboard-08.jpg'),
(30, 1, 'iklan_dashboard-10.jpg'),
(31, 1, 'iklan_dashboard-09.jpg'),
(32, 1, 'iklan_dashboard-11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `basecamp_leader`
--

CREATE TABLE `basecamp_leader` (
  `id` int(11) NOT NULL,
  `id_bs` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basecamp_leader`
--

INSERT INTO `basecamp_leader` (`id`, `id_bs`, `user_id`, `datecreate`) VALUES
(1, 1, 60, 1641974062),
(2, 2, 60, 1641974062),
(3, 3, 60, 1641974062),
(4, 4, 60, 1641974062),
(5, 5, 60, 1641974062);

-- --------------------------------------------------------

--
-- Table structure for table `basecamp_name`
--

CREATE TABLE `basecamp_name` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basecamp_name`
--

INSERT INTO `basecamp_name` (`id`, `name`, `datecreate`) VALUES
(1, 'Denpasar', 1641974062),
(2, 'Gianyar', 1641974062),
(3, 'Singaraja', 1641974062),
(4, 'Korea', 1641974062),
(5, 'Jakarta', 1641974062);

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `code_bonus` varchar(10) NOT NULL,
  `filecoin` double NOT NULL,
  `mtm` double NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_basecamp`
--

CREATE TABLE `bonus_basecamp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_bs` int(11) NOT NULL DEFAULT 0,
  `cart_id` int(11) NOT NULL,
  `code_bonus` varchar(1) NOT NULL,
  `filecoin` double NOT NULL DEFAULT 0,
  `mtm` double NOT NULL DEFAULT 0,
  `team` varchar(1) DEFAULT NULL,
  `type` int(1) NOT NULL,
  `status` varchar(1) NOT NULL,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_binarymatch`
--

CREATE TABLE `bonus_binarymatch` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_sponsor` int(11) NOT NULL,
  `generation` varchar(2) NOT NULL,
  `mtm` double NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_global`
--

CREATE TABLE `bonus_global` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mtm` double NOT NULL,
  `level_fm` varchar(5) NOT NULL,
  `note_level` varchar(5) DEFAULT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_maxmatching`
--

CREATE TABLE `bonus_maxmatching` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mtm` double NOT NULL,
  `set_amount` int(11) NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_minmatching`
--

CREATE TABLE `bonus_minmatching` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `team` varchar(1) NOT NULL,
  `amount` double NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_minpairing`
--

CREATE TABLE `bonus_minpairing` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_sponsor` int(11) NOT NULL,
  `member_sponsor` int(11) NOT NULL,
  `generation` varchar(4) NOT NULL,
  `team` varchar(1) NOT NULL,
  `amount` double NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_sm`
--

CREATE TABLE `bonus_sm` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `code_bonus` varchar(10) NOT NULL,
  `filecoin` double NOT NULL,
  `mtm` double NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_transfer_general`
--

CREATE TABLE `bonus_transfer_general` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coin_type` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fill` double NOT NULL DEFAULT 0,
  `usdt` double NOT NULL DEFAULT 0,
  `mtm` double NOT NULL DEFAULT 0,
  `zenx` double NOT NULL DEFAULT 0,
  `matching_id` int(11) NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `line` varchar(1) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `pause_min` varchar(1) NOT NULL DEFAULT '',
  `is_payment` int(11) NOT NULL DEFAULT 0,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `package_id`, `user_id`, `fill`, `usdt`, `mtm`, `zenx`, `matching_id`, `sponsor_id`, `position_id`, `line`, `note`, `pause_min`, `is_payment`, `datecreate`, `update_date`) VALUES
(107, 1, 60, 1, 0, 0, 0, 0, 0, 0, '', NULL, '', 1, 1625812988, 1626845235);

-- --------------------------------------------------------

--
-- Table structure for table `code_bonus`
--

CREATE TABLE `code_bonus` (
  `id` int(11) NOT NULL,
  `code` varchar(128) NOT NULL,
  `amount_sp` double NOT NULL,
  `amount_sm` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code_bonus`
--

INSERT INTO `code_bonus` (`id`, `code`, `amount_sp`, `amount_sm`) VALUES
(1, 'A', 5, '50'),
(2, 'B', 6, '35'),
(3, 'C', 7, '20');

-- --------------------------------------------------------

--
-- Table structure for table `coin_type`
--

CREATE TABLE `coin_type` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coin_type`
--

INSERT INTO `coin_type` (`id`, `name`) VALUES
(1, 'filecoin'),
(2, 'mtm');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `txid` varchar(128) NOT NULL,
  `coin` double NOT NULL,
  `type_coin` varchar(1) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `is_confirm` smallint(1) NOT NULL DEFAULT 0,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user_id`, `txid`, `coin`, `type_coin`, `note`, `is_confirm`, `datecreate`, `update_date`) VALUES
(3407, 60, 'adminkantorfirstdeposit', 100, '1', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `excess_bonus`
--

CREATE TABLE `excess_bonus` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_bs` int(11) NOT NULL DEFAULT 0,
  `type_bonus` int(1) NOT NULL,
  `mtm` double NOT NULL,
  `cart_id` int(11) NOT NULL,
  `code_bonus` varchar(10) NOT NULL,
  `user_sponsor` int(11) NOT NULL,
  `generation` varchar(2) NOT NULL,
  `level_fm` varchar(5) NOT NULL DEFAULT '0',
  `note_level` varchar(5) DEFAULT NULL,
  `box` varchar(10) NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leftovers_real`
--

CREATE TABLE `leftovers_real` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_left` int(11) NOT NULL,
  `amount_right` int(11) NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level_fm`
--

CREATE TABLE `level_fm` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fm` varchar(4) NOT NULL,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_fm`
--

INSERT INTO `level_fm` (`id`, `user_id`, `fm`, `datecreate`, `update_date`) VALUES
(117, 60, 'FM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `market_price`
--

CREATE TABLE `market_price` (
  `id` int(11) NOT NULL,
  `filecoin` double NOT NULL,
  `mtm` double NOT NULL,
  `zenx` double NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `minimum_withdrawal`
--

CREATE TABLE `minimum_withdrawal` (
  `id` int(11) NOT NULL,
  `filecoin` double NOT NULL,
  `mtm` double NOT NULL,
  `zenx` double NOT NULL,
  `fee_filecoin` double NOT NULL,
  `fee_mtm` double NOT NULL,
  `fee_zenx` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minimum_withdrawal`
--

INSERT INTO `minimum_withdrawal` (`id`, `filecoin`, `mtm`, `zenx`, `fee_filecoin`, `fee_mtm`, `fee_zenx`) VALUES
(1, 0.1, 0.25, 0.25, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mining`
--

CREATE TABLE `mining` (
  `id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `type` int(1) NOT NULL,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mining_user`
--

CREATE TABLE `mining_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `box` varchar(20) NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mining_user_transfer`
--

CREATE TABLE `mining_user_transfer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_announce`
--

CREATE TABLE `news_announce` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_announce`
--

INSERT INTO `news_announce` (`id`, `title`, `message`, `image`, `datecreate`, `update_date`) VALUES
(1, 'Important News!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quidem a, recusandae harum expedita tenetur sequi? Voluptas assumenda vero, modi saepe facilis sint corporis alias harum sit ratione distinctio reprehenderit iste possimus excepturi esse. Suscipit facilis, assumenda eos mollitia pariatur animi aspernatur delectus consequuntur dolorem ad totam similique culpa rem. Nisi similique impedit culpa. Consequuntur ut esse corporis, ipsam aliquid architecto inventore delectus mollitia, quod alias culpa asperiores minima ab sint dignissimos beatae aut blanditiis nulla consequatur assumenda debitis aspernatur? Assumenda, quod porro est saepe aliquam, placeat maxime perspiciatis quas nobis atque vero illo. Blanditiis minus saepe illo eligendi debitis consequuntur porro illum ea similique veritatis perspiciatis culpa, veniam nemo eos dolorem repudiandae architecto necessitatibus nisi. Atque ex reiciendis repellat consequatur illum voluptatibus aspernatur quaerat officia blanditiis? Eveniet sed ipsam totam accusamus facere expedita animi tempore? Rerum fugiat architecto eaque, amet suscipit similique veritatis cumque repudiandae, totam sit quia aperiam, dolor fuga aut praesentium voluptate. Maxime eligendi aliquid aut consequatur optio. Voluptas aut quae in ipsa placeat nobis inventore accusantium quisquam eos. Dolore, adipisci. Labore veniam optio maxime laboriosam in nisi alias? Similique totam dicta exercitationem eveniet, qui excepturi tenetur voluptatum porro amet voluptate eos omnis, quae laboriosam perferendis? Cumque aut ullam impedit nemo dolorem atque, fugiat maiores velit debitis iure voluptates nostrum quaerat expedita eum, laboriosam deleniti minima. Saepe deleniti facilis omnis. Tempore nam, qui temporibus voluptatum dicta velit quia quo veritatis dolorem rerum illum maiores, natus aut, esse ullam fugiat labore hic eligendi maxime recusandae unde officiis suscipit similique ipsum. Quos incidunt aut nobis itaque placeat voluptate maxime, in at facere aliquam eos delectus eius natus corrupti quidem illum quo dolorem nam laborum sunt voluptatem. Officia quisquam, ipsam minima numquam pariatur dolor dolorem architecto consequuntur, inventore non animi quam molestias, adipisci itaque eaque veniam optio aspernatur facere obcaecati.', NULL, 1644201086, 0),
(4, 'Pemberitahuan Staking', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quidem a, recusandae harum expedita tenetur sequi? Voluptas assumenda vero, modi saepe facilis sint corporis alias harum sit ratione distinctio reprehenderit iste possimus excepturi esse. Suscipit facilis, assumenda eos mollitia pariatur animi aspernatur delectus consequuntur dolorem ad totam similique culpa rem. Nisi similique impedit culpa. Consequuntur ut esse corporis, ipsam aliquid architecto inventore delectus mollitia, quod alias culpa asperiores minima ab sint dignissimos beatae aut blanditiis nulla consequatur assumenda debitis aspernatur? Assumenda, quod porro est saepe aliquam, placeat maxime perspiciatis quas nobis atque vero illo. Blanditiis minus saepe illo eligendi debitis consequuntur porro illum ea similique veritatis perspiciatis culpa, veniam nemo eos dolorem repudiandae architecto necessitatibus nisi. Atque ex reiciendis repellat consequatur illum voluptatibus aspernatur quaerat officia blanditiis? Eveniet sed ipsam totam accusamus facere expedita animi tempore? Rerum fugiat architecto eaque, amet suscipit similique veritatis cumque repudiandae, totam sit quia aperiam, dolor fuga aut praesentium voluptate. Maxime eligendi aliquid aut consequatur optio. Voluptas aut quae in ipsa placeat nobis inventore accusantium quisquam eos. Dolore, adipisci. Labore veniam optio maxime laboriosam in nisi alias? Similique totam dicta exercitationem eveniet, qui excepturi tenetur voluptatum porro amet voluptate eos omnis, quae laboriosam perferendis? Cumque aut ullam impedit nemo dolorem atque, fugiat maiores velit debitis iure voluptates nostrum quaerat expedita eum, laboriosam deleniti minima. Saepe deleniti facilis omnis. Tempore nam, qui temporibus voluptatum dicta velit quia quo veritatis dolorem rerum illum maiores, natus aut, esse ullam fugiat labore hic eligendi maxime recusandae unde officiis suscipit similique ipsum. Quos incidunt aut nobis itaque placeat voluptate maxime, in at facere aliquam eos delectus eius natus corrupti quidem illum quo dolorem nam laborum sunt voluptatem. Officia quisquam, ipsam minima numquam pariatur dolor dolorem architecto consequuntur, inventore non animi quam molestias, adipisci itaque eaque veniam optio aspernatur facere obcaecati.', NULL, 1644216069, 0),
(5, 'Biggest NFT marketplace 2022', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quidem a, recusandae harum expedita tenetur sequi? Voluptas assumenda vero, modi saepe facilis sint corporis alias harum sit ratione distinctio reprehenderit iste possimus excepturi esse. Suscipit facilis, assumenda eos mollitia pariatur animi aspernatur delectus consequuntur dolorem ad totam similique culpa rem. Nisi similique impedit culpa. Consequuntur ut esse corporis, ipsam aliquid architecto inventore delectus mollitia, quod alias culpa asperiores minima ab sint dignissimos beatae aut blanditiis nulla consequatur assumenda debitis aspernatur? Assumenda, quod porro est saepe aliquam, placeat maxime perspiciatis quas nobis atque vero illo. Blanditiis minus saepe illo eligendi debitis consequuntur porro illum ea similique veritatis perspiciatis culpa, veniam nemo eos dolorem repudiandae architecto necessitatibus nisi. Atque ex reiciendis repellat consequatur illum voluptatibus aspernatur quaerat officia blanditiis? Eveniet sed ipsam totam accusamus facere expedita animi tempore? Rerum fugiat architecto eaque, amet suscipit similique veritatis cumque repudiandae, totam sit quia aperiam, dolor fuga aut praesentium voluptate. Maxime eligendi aliquid aut consequatur optio. Voluptas aut quae in ipsa placeat nobis inventore accusantium quisquam eos. Dolore, adipisci. Labore veniam optio maxime laboriosam in nisi alias? Similique totam dicta exercitationem eveniet, qui excepturi tenetur voluptatum porro amet voluptate eos omnis, quae laboriosam perferendis? Cumque aut ullam impedit nemo dolorem atque, fugiat maiores velit debitis iure voluptates nostrum quaerat expedita eum, laboriosam deleniti minima. Saepe deleniti facilis omnis. Tempore nam, qui temporibus voluptatum dicta velit quia quo veritatis dolorem rerum illum maiores, natus aut, esse ullam fugiat labore hic eligendi maxime recusandae unde officiis suscipit similique ipsum. Quos incidunt aut nobis itaque placeat voluptate maxime, in at facere aliquam eos delectus eius natus corrupti quidem illum quo dolorem nam laborum sunt voluptatem. Officia quisquam, ipsam minima numquam pariatur dolor dolorem architecto consequuntur, inventore non animi quam molestias, adipisci itaque eaque veniam optio aspernatur facere obcaecati.', NULL, 1644216091, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifi`
--

CREATE TABLE `notifi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `title` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_show` int(1) NOT NULL DEFAULT 0,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `code_bonus` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `point` int(11) NOT NULL,
  `fil` double NOT NULL,
  `usdt` double NOT NULL,
  `mtm` double NOT NULL,
  `daysmining` int(11) NOT NULL,
  `startafter` int(11) NOT NULL,
  `hashrate` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `airdrp_mtm` double NOT NULL,
  `img` varchar(50) NOT NULL,
  `price_fil` double NOT NULL,
  `price_mtm` double NOT NULL,
  `price_zenx` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `type`, `code_bonus`, `name`, `point`, `fil`, `usdt`, `mtm`, `daysmining`, `startafter`, `hashrate`, `color`, `airdrp_mtm`, `img`, `price_fil`, `price_mtm`, `price_zenx`) VALUES
(1, 1, 1, '1 BOX', 1, 1.5, 100, 6, 2200, 45, 32, '#FFD11A', 0.007, 'paket_mining-01.png', 1.5, 6, 18),
(2, 1, 1, '3 BOX', 3, 4.5, 300, 18, 2200, 45, 96, '#119A48', 0.021, 'paket_mining-02.png', 4.5, 18, 54),
(3, 1, 1, '9 BOX', 9, 13.5, 500, 54, 2200, 45, 288, '#4169B2', 0.063, 'paket_mining-03.png', 13.5, 54, 162),
(4, 1, 2, '15 BOX', 15, 22.5, 1, 90, 2300, 45, 480, '#874D9E', 0.105, 'paket_mining-04.png', 22.5, 90, 270),
(5, 1, 2, '30 BOX', 30, 45, 2.5, 180, 2300, 45, 960, '#EF3D39', 0.21, 'paket_mining-05.png', 45, 180, 540),
(6, 1, 2, '60 BOX', 60, 90, 6, 360, 2300, 45, 1920, '#8DC63F', 0.42, 'paket_mining-06.png', 90, 360, 1080),
(7, 1, 3, '120 BOX', 120, 180, 10, 720, 2400, 45, 3840, '#EB9123', 0.84, 'paket_mining-07.png', 180, 720, 2160),
(8, 1, 3, '300 BOX', 300, 450, 30, 1800, 2400, 45, 9600, '#46C2CA', 2.1, 'paket_mining-08.png', 450, 1800, 5400),
(9, 1, 3, '540 BOX', 540, 810, 50, 3240, 2500, 45, 17280, '#CA4291', 3.28, 'paket_mining-09.png', 540, 3240, 6480);

-- --------------------------------------------------------

--
-- Table structure for table `package_tour`
--

CREATE TABLE `package_tour` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `type` int(1) NOT NULL,
  `price_fil` double NOT NULL,
  `price_mtm` double NOT NULL,
  `price_zenx` double NOT NULL,
  `price_usdt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_tour`
--

INSERT INTO `package_tour` (`id`, `name`, `type`, `price_fil`, `price_mtm`, `price_zenx`, `price_usdt`) VALUES
(1, 'VIP KOREA', 1, 55, 220, 2200, 2),
(2, 'VVIP KOREA', 1, 110, 440, 4400, 4),
(3, 'GOLD VVIP KOREA', 1, 165, 660, 6600, 6),
(4, 'VVIP BALI', 2, 110, 440, 4400, 4),
(5, 'VIP BALI', 2, 55, 220, 2200, 2),
(6, 'GOLD VVIP BALI', 2, 165, 660, 6600, 6);

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE `package_type` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`id`, `name`) VALUES
(1, 'filecoin'),
(2, 'mtm');

-- --------------------------------------------------------

--
-- Table structure for table `txid`
--

CREATE TABLE `txid` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `txid` varchar(64) NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txid`
--

INSERT INTO `txid` (`id`, `cart_id`, `txid`, `datecreate`) VALUES
(21, 173, 'bafy2bzaceaeoqbzfnjjbmppe2l4jilmvmxiwrjfjfou5wu6mhuhn53y4xfaby', 1628127209),
(22, 173, 'bjhbdhadghvagdvagdv', 1628127484),
(23, 174, '123', 1632818984),
(24, 174, '123456', 1632819198);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `top_level` int(1) NOT NULL DEFAULT 0,
  `referrer_id` int(11) NOT NULL DEFAULT 0,
  `username` varchar(128) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `country_code` varchar(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(128) DEFAULT NULL,
  `secret_otp` varchar(128) DEFAULT NULL,
  `is_otp` int(11) DEFAULT 0,
  `email_code` int(11) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `id_basecamp` int(11) NOT NULL,
  `basecamp` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `is_camp` int(1) NOT NULL DEFAULT 0,
  `note` varchar(128) DEFAULT NULL,
  `is_news` int(1) NOT NULL DEFAULT 0,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `top_level`, `referrer_id`, `username`, `first_name`, `last_name`, `email`, `country_code`, `phone`, `photo`, `secret_otp`, `is_otp`, `email_code`, `password`, `id_basecamp`, `basecamp`, `role_id`, `is_active`, `is_camp`, `note`, `is_news`, `date_created`) VALUES
(60, 1, 0, 'adminkantor', 'Admin', 'Kantor', 'adminkantor@gmail.com', '82', '', '', '', 0, 107598, '$2y$10$XwmGJTLxIE9lWfd5E2EVaOBKeBT1hlpXJn7E6gmCiSR.BZ/bDu8.O', 14, 'Jimbaran', 2, 1, 1, NULL, 0, 1622538045),
(122, 0, 0, 'admin', 'Admin', 'Admin', 'admin@filecoin.id', '', '', NULL, NULL, 0, NULL, '$2y$10$UwuTYkZlanDshWy6xC4e4efHNUBsgZTs1P8K78x660mjmrpUr5s8m', 0, '', 1, 1, 0, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `uniq_id` varchar(6) CHARACTER SET latin1 NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `sender_email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `message` varchar(500) CHARACTER SET latin1 NOT NULL,
  `image` varchar(25) COLLATE utf8mb4_bin DEFAULT NULL,
  `time` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `is_end` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_address`
--

CREATE TABLE `wallet_address` (
  `id` int(11) NOT NULL,
  `filecoin` varchar(128) NOT NULL,
  `mtm` varchar(128) NOT NULL,
  `zenx` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet_address`
--

INSERT INTO `wallet_address` (`id`, `filecoin`, `mtm`, `zenx`) VALUES
(1, 'f1nd2tsgupiyqfqv2q7gfbyfuqrt4fn5vbfj6kjaq', 'MGWB3kdvYJFqVxwJ1j92bdrSQhV3V8Zdyf', '0xD9B6aDC655C529e0bdb41b16e008A110e2ceB5e4');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_office`
--

CREATE TABLE `wallet_office` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `filecoin` double NOT NULL,
  `datecreate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coin_type` varchar(15) NOT NULL,
  `wallet_address` varchar(128) NOT NULL,
  `amount` float NOT NULL,
  `total` float NOT NULL,
  `txid` varchar(64) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `datecreate` int(11) NOT NULL,
  `update_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airdrop_mtm`
--
ALTER TABLE `airdrop_mtm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airdrop_mtm_transfer`
--
ALTER TABLE `airdrop_mtm_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balance_point`
--
ALTER TABLE `balance_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_home`
--
ALTER TABLE `banner_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basecamp_leader`
--
ALTER TABLE `basecamp_leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basecamp_name`
--
ALTER TABLE `basecamp_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_basecamp`
--
ALTER TABLE `bonus_basecamp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_binarymatch`
--
ALTER TABLE `bonus_binarymatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_global`
--
ALTER TABLE `bonus_global`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_maxmatching`
--
ALTER TABLE `bonus_maxmatching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_minmatching`
--
ALTER TABLE `bonus_minmatching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_minpairing`
--
ALTER TABLE `bonus_minpairing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_sm`
--
ALTER TABLE `bonus_sm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_transfer_general`
--
ALTER TABLE `bonus_transfer_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_bonus`
--
ALTER TABLE `code_bonus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coin_type`
--
ALTER TABLE `coin_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excess_bonus`
--
ALTER TABLE `excess_bonus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leftovers_real`
--
ALTER TABLE `leftovers_real`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_fm`
--
ALTER TABLE `level_fm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_price`
--
ALTER TABLE `market_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minimum_withdrawal`
--
ALTER TABLE `minimum_withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mining`
--
ALTER TABLE `mining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mining_user`
--
ALTER TABLE `mining_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mining_user_transfer`
--
ALTER TABLE `mining_user_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_announce`
--
ALTER TABLE `news_announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifi`
--
ALTER TABLE `notifi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_tour`
--
ALTER TABLE `package_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_type`
--
ALTER TABLE `package_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txid`
--
ALTER TABLE `txid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_address`
--
ALTER TABLE `wallet_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_office`
--
ALTER TABLE `wallet_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airdrop_mtm`
--
ALTER TABLE `airdrop_mtm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52446;

--
-- AUTO_INCREMENT for table `airdrop_mtm_transfer`
--
ALTER TABLE `airdrop_mtm_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `balance_point`
--
ALTER TABLE `balance_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56886;

--
-- AUTO_INCREMENT for table `banner_home`
--
ALTER TABLE `banner_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `basecamp_leader`
--
ALTER TABLE `basecamp_leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `basecamp_name`
--
ALTER TABLE `basecamp_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3362;

--
-- AUTO_INCREMENT for table `bonus_basecamp`
--
ALTER TABLE `bonus_basecamp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `bonus_binarymatch`
--
ALTER TABLE `bonus_binarymatch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `bonus_global`
--
ALTER TABLE `bonus_global`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `bonus_maxmatching`
--
ALTER TABLE `bonus_maxmatching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2056;

--
-- AUTO_INCREMENT for table `bonus_minmatching`
--
ALTER TABLE `bonus_minmatching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49919;

--
-- AUTO_INCREMENT for table `bonus_minpairing`
--
ALTER TABLE `bonus_minpairing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122277;

--
-- AUTO_INCREMENT for table `bonus_sm`
--
ALTER TABLE `bonus_sm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3307;

--
-- AUTO_INCREMENT for table `bonus_transfer_general`
--
ALTER TABLE `bonus_transfer_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3460;

--
-- AUTO_INCREMENT for table `code_bonus`
--
ALTER TABLE `code_bonus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coin_type`
--
ALTER TABLE `coin_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3408;

--
-- AUTO_INCREMENT for table `excess_bonus`
--
ALTER TABLE `excess_bonus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30910;

--
-- AUTO_INCREMENT for table `leftovers_real`
--
ALTER TABLE `leftovers_real`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2086;

--
-- AUTO_INCREMENT for table `level_fm`
--
ALTER TABLE `level_fm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3325;

--
-- AUTO_INCREMENT for table `market_price`
--
ALTER TABLE `market_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `minimum_withdrawal`
--
ALTER TABLE `minimum_withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mining`
--
ALTER TABLE `mining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `mining_user`
--
ALTER TABLE `mining_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32592;

--
-- AUTO_INCREMENT for table `mining_user_transfer`
--
ALTER TABLE `mining_user_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_announce`
--
ALTER TABLE `news_announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifi`
--
ALTER TABLE `notifi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3551;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `package_tour`
--
ALTER TABLE `package_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package_type`
--
ALTER TABLE `package_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `txid`
--
ALTER TABLE `txid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3372;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3760;

--
-- AUTO_INCREMENT for table `wallet_address`
--
ALTER TABLE `wallet_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet_office`
--
ALTER TABLE `wallet_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
