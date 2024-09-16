-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 05:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platinum_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Nasi Goreng', 'Nasi yang digoreng dan dicampur dengan kecap manis, bawang merah', 'makanan', 11000, 20, 'Gbr 2.jpg'),
(2, 'Nasi telur', 'Nasi ditambah telur goreng dan sayuran bumbu spesial disampingnya', 'makanan', 10000, 10, 'Gbr 1.jpg'),
(3, 'Nasi Kuning', 'Nasi yang dimasak bersama dengan kunyit, santan, dan rempah-rempah', 'makanan', 12000, 20, 'Gbr 4.jpg'),
(4, 'Nasi Uduk', 'Nasi putih yang dimasak dengan santan serta dikasih serai dan daun salam', 'makanan', 12000, 20, 'Gbr 8.jpg'),
(5, 'Ayam Krispi', 'Ayam yang dibalur oleh tepung dan digoreng sampai kekuningan', 'makanan', 11000, 20, 'Gbr 7.jpg'),
(6, 'Ayam Bakar', 'Ayam bakar spesial dengan campuran bumbu yang khas dan beberapa sayuran', 'makanan', 12000, 20, 'Gbr 3.jpg'),
(7, 'Ayam Gulai', 'Ayam dicampur dengan rempah kemudian dimasak dalam santan', 'makanan', 13000, 20, 'Gbr 11.jpg'),
(8, 'Ayam Jamur', 'Ayam dengan jamur yang diberi bumbu kecap dan diberi sayuran brokoli', 'makanan', 13000, 20, 'Gbr 12.jpg'),
(9, 'Ayam Sambal', 'Ayam yang digoreng dan ditambah bumbu cabe, tomat, dan bawang', 'makanan', 12000, 20, 'Gbr 20.jpg'),
(10, 'Capcai', 'Hidangan khas Tionghoa-Indonesia berupa berbagai sayuran yang ditumis', 'makanan', 11000, 20, 'Gbr 10.jpg'),
(11, 'Mie Goreng', 'Mie yang terbuat dari gandum direbus lalu digoreng kembali', 'makanan', 10000, 20, 'Gbr 16.jpg'),
(12, 'Mie Bakso', 'Mie bakso spesial dengan cita rasa yang khas', 'makanan', 12000, 20, 'Gbr 5.jpg'),
(13, 'Mie Udang', 'Mie yang direbus dengan topping udang', 'makanan', 15000, 20, 'Gbr 14.jpg'),
(14, 'Mie Ayam', 'Mie yang terbuat dari gandum yang ditaburi dengan daging ayam', 'makanan', 12000, 20, 'Gbr 6.jpg'),
(15, 'Tomyam', 'Sup ini merupakan salah satu makanan populer Thailand', 'makanan', 15000, 20, 'Gbr 9.jpg'),
(16, 'Tumis Sapi', 'Daging sapi yang ditumis dengan bumbu kecap asin manis', 'makanan', 19000, 20, 'Gbr 17.jpg'),
(17, 'Sei Sapi', 'Makanan khas NTT berupa daging sapi, dimasak dengan metode pengasapan', 'makanan', 17000, 20, 'Gbr 13.jpg'),
(18, 'Nasi Seafood', 'Nasi goreng spesial dengan bumbu yang khas yang diberi topping udang', 'makanan', 15000, 20, 'Gbr 15.jpg'),
(19, 'Seafood Bakar', 'kumpulan udang dan Cumi yang dibakar dan diberi bumbu bakar', 'makanan', 10000, 20, 'Gbr 18.jpg'),
(20, 'Brokoli Udang', 'Brokoli dan udang diolah dengan cara ditumis bersama bumbu', 'makanan', 10000, 20, 'Gbr 19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(0, 'Arta Novrida', 'artanovridalumbanraja@gmail.com', 'default.jpg', '$2y$10$VspKqPZuOJl31kAOR.rn9e1SL2wJl61xHqc.4PRWG35Yd8ldtLO0u', 1, 1, 1672887265),
(0, 'Andi Randi', 'andi22@gmail.com', 'default.jpg', '$2y$10$3aLDF7nTK/9uA.MK5iw4fOhBAdpCIrErQ7kQebAPT4Mq2S7H8yREO', 1, 1, 1672987550),
(0, 'Iqra Rezky', 'iqrarez06@gmail.com', 'default.jpg', '$2y$10$XC/ksAqeqJ.jEvmXX5kgOe6FtQ0M0TvQ9Y4uJZ4qQ3kKF25YD3DBW', 1, 1, 1672994675),
(0, 'Brian', 'brian13@gmail.com', 'default.jpg', '$2y$10$hVOww.0yL7Td7BO6IsXmJ.6LYDXk2u6E.Y0yvl0mAHQMpcBgt.S/S', 1, 1, 1672995224);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
