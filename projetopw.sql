-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 12-Set-2019 às 01:13
-- Versão do servidor: 5.7.20-log
-- versão do PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `projetopw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Senha` varchar(200) NOT NULL,

  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;




CREATE TABLE IF NOT EXISTS `questions` (
  `IDDesafio` int(11) NOT NULL AUTO_INCREMENT,
  `Desafio` varchar(300) NOT NULL,
  `TDesafio` varchar(20) NOT NULL,

  PRIMARY KEY (`IDDesafio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;









