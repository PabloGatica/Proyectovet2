-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 03:05 AM
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
-- Database: `control`
--

-- --------------------------------------------------------

--
-- Table structure for table `enfermedades`
--

CREATE TABLE `enfermedades` (
  `ID` int(11) NOT NULL,
  `ID_Mascota` int(11) DEFAULT NULL,
  `Tipo` varchar(25) DEFAULT NULL,
  `Comentarios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historial_controles`
--

CREATE TABLE `historial_controles` (
  `ID` int(11) NOT NULL,
  `ID_Mascota` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Peso` varchar(10) DEFAULT NULL,
  `Sintomas` varchar(255) DEFAULT NULL,
  `Comentarios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historial_desparacitaciones`
--

CREATE TABLE `historial_desparacitaciones` (
  `ID` int(11) NOT NULL,
  `ID_Mascota` int(11) DEFAULT NULL,
  `Tipo` varchar(10) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Fecha_Aplicacion` date DEFAULT NULL,
  `Fecha_Reaplicacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historial_examenes`
--

CREATE TABLE `historial_examenes` (
  `ID` int(11) NOT NULL,
  `ID_Mascota` int(11) DEFAULT NULL,
  `Fecha_Realizado` date DEFAULT NULL,
  `Resultados` varchar(255) DEFAULT NULL,
  `Fecha_Repeticion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historial_vacunas`
--

CREATE TABLE `historial_vacunas` (
  `ID` int(11) NOT NULL,
  `ID_Mascota` int(11) NOT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Fecha_Aplicacion` date DEFAULT NULL,
  `Fecha_Revacunacion` date DEFAULT NULL,
  `Tipo` varchar(25) DEFAULT NULL,
  `Dosis` varchar(100) DEFAULT NULL,
  `Comentarios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mascotas`
--

CREATE TABLE `mascotas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Dueño` int(11) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Fecha_Adopcion` date DEFAULT NULL,
  `Lugar_Adopcion` varchar(255) DEFAULT NULL,
  `Raza` varchar(25) DEFAULT NULL,
  `Vacunas` int(11) DEFAULT NULL,
  `Desparacitaciones` int(11) DEFAULT NULL,
  `Esterilizacion` date DEFAULT NULL,
  `Fecha_Celos` date DEFAULT NULL,
  `Corte_Uñas` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicamentos`
--

CREATE TABLE `medicamentos` (
  `ID` int(11) NOT NULL,
  `ID_Mascota` int(11) DEFAULT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Dosis` varchar(50) DEFAULT NULL,
  `Aplicacion` varchar(50) DEFAULT NULL,
  `Comentarios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `RUT` varchar(11) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Sexo` varchar(15) NOT NULL,
  `Fono` int(11) DEFAULT NULL,
  `Contraseña` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`RUT`, `Nombres`, `Apellidos`, `Direccion`, `Sexo`, `Fono`, `Contraseña`) VALUES
('111111111', 'Gonzalo', 'Gonzales', 'por ahi', 'Masculino', 123456789, '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `historial_controles`
--
ALTER TABLE `historial_controles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `historial_desparacitaciones`
--
ALTER TABLE `historial_desparacitaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `historial_examenes`
--
ALTER TABLE `historial_examenes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `historial_vacunas`
--
ALTER TABLE `historial_vacunas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`RUT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enfermedades`
--
ALTER TABLE `enfermedades`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historial_controles`
--
ALTER TABLE `historial_controles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historial_desparacitaciones`
--
ALTER TABLE `historial_desparacitaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historial_examenes`
--
ALTER TABLE `historial_examenes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historial_vacunas`
--
ALTER TABLE `historial_vacunas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
