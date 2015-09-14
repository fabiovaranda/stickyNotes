-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Abr-2015 às 17:00
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stickynotes`
--
-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(30) NOT NULL,
  `Texto` varchar(30) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `IdUtilizador` int(3) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdUtilizador` (`IdUtilizador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `Senha` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`IdUtilizador`) REFERENCES `utilizadores` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
