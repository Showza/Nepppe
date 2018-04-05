-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01-Abr-2018 às 09:50
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepppe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Pesquisa'),
(2, 'Artigo'),
(3, 'Livro'),
(4, 'Mídia'),
(5, 'Tese/Dissertação'),
(6, 'Dado Educacional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

DROP TABLE IF EXISTS `documentos`;
CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) NOT NULL,
  `resumo` varchar(200) NOT NULL,
  `conteudo` varchar(200) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`id`, `titulo`, `resumo`, `conteudo`, `categoria`) VALUES
(19, 'teste', 'teste', 'teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `titulo` varchar(50) NOT NULL,
  `resumo` varchar(200) NOT NULL,
  `local` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`titulo`, `resumo`, `local`, `data`, `hora`, `id`) VALUES
('Título do Evento', 'Evento', 'Evento', '2019-12-12', '12:30:00', 5),
('Outro Título', 'Resumo', 'Local', '2018-03-12', '12:30:00', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisas`
--

DROP TABLE IF EXISTS `pesquisas`;
CREATE TABLE IF NOT EXISTS `pesquisas` (
  `titulo` varchar(50) NOT NULL,
  `resumo` varchar(200) NOT NULL,
  `conteudo` varchar(200) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pesquisas`
--

INSERT INTO `pesquisas` (`titulo`, `resumo`, `conteudo`, `tipo`, `id`) VALUES
('Título da pesquisa', 'pesquisa', 'pesquisa', 'Em andamento', 3),
('Outra Pesquisa', 'Resumo', 'Conteúdo da pesquisa', 'Concluída', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` char(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `tipo`, `id`, `cpf`) VALUES
('Ana Moraes', 'ana96moraes@gmail.com', 'MTIz', 'Administrador', 1, '12553527608'),
('Fagner', 'fagner@gmail.com', 'MTIz', 'Auxiliar', 6, '12553527610');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
