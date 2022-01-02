-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Dez-2020 às 20:59
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `storetech`
--
CREATE DATABASE IF NOT EXISTS `storetech` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `storetech`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `endereco`, `email`) VALUES
(10, 'JoÃ£o Silva', 'Rua Albino Stefani', 'jvictor.domingues04@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `nome_produto` varchar(100) COLLATE utf8_swedish_ci DEFAULT NULL,
  `datacompra` date DEFAULT NULL,
  `pago` bit(1) NOT NULL,
  PRIMARY KEY (`idcompra`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`idcompra`, `nome_cliente`, `nome_produto`, `datacompra`, `pago`) VALUES
(11, 'JoÃ£o Silva', 'Fone de Ouvido - Headphone AKG 414', '2020-12-09', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `categoria`, `preco`, `quantidade`) VALUES
(8, 'Headphone AKG 414', 'Fone de Ouvido', '120.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`) VALUES
(1, 'João', 'jvictor.domingues04@gmail.com', '13ae30cec63ee1f7f970a3afe4d3932fbbafe101'),
(2, 'João', 'jvictor.domingues@gmail.com', '13ae30cec63ee1f7f970a3afe4d3932fbbafe101'),
(3, 'João', 'jvictor.domingues05@gmail.com', '13ae30cec63ee1f7f970a3afe4d3932fbbafe101'),
(4, 'Admin', 'admin@storetech.com', 'f865b53623b121fd34ee5426c792e5c33af8c227');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
