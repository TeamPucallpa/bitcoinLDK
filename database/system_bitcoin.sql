-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 09:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_bitcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compra`
--

CREATE TABLE `tbl_compra` (
  `id` int(11) NOT NULL,
  `kartera_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karteras`
--

CREATE TABLE `tbl_karteras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `precio` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_karteras`
--

INSERT INTO `tbl_karteras` (`id`, `nombre`, `precio`) VALUES
(1, 'Kartera Basica', '50'),
(2, 'Kartera Bronce', '100'),
(3, 'Kartera Plata', '1000'),
(4, 'Kartera Oro', '10000'),
(5, 'Kartera Diamante', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `rol` varchar(100) NOT NULL DEFAULT 'usuario',
  `registrado` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha` date NOT NULL,
  `anio` year(4) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `referido` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nombre`, `apellido`, `celular`, `correo`, `clave`, `rol`, `registrado`, `fecha`, `anio`, `mes`, `referido`) VALUES
(1, 'SUPER', 'ADMIN', '945090599', 'admin@gmail.com', '1234', 'administrador', '2021-03-09 00:00:00', '2021-03-09', 2021, '1', ''),
(25, 'Caballero', 'Adrian', '987654321', 'caballerio@gmail.com', '9876543221', 'usuario', '2021-03-23 14:24:45', '2021-03-23', 2021, '3', ''),
(30, 'manuelito', 'pedro angustio', '979655123', 'hola@gmail.com', '1234', 'usuario', '2021-03-27 12:49:43', '2021-03-27', 2021, '3', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_compra`
--
ALTER TABLE `tbl_compra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_karteras`
--
ALTER TABLE `tbl_karteras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_compra`
--
ALTER TABLE `tbl_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_karteras`
--
ALTER TABLE `tbl_karteras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
