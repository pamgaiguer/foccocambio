-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2016 às 00:55
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `focco`
--
CREATE DATABASE IF NOT EXISTS `focco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `focco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `tipo`, `nome`, `email`, `telefone`) VALUES
(1, 'tom', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Thom M Garcia', 'thom.blizz@gmail.com', '19996666380'),
(2, 'pam', 'e10adc3949ba59abbe56e057f20f883e', 2, 'Pamella', 'pamella.gaiguer@gmail.com', '11111111111'),
(3, 'user03', 'e10adc3949ba59abbe56e057f20f883e', 3, 'user03', 'user03', 'user03'),
(6, 'user04', 'e10adc3949ba59abbe56e057f20f883e', 3, 'user04', 'user04@gmail.com', '(19) 99966-6380');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
