-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Abr-2018 às 19:25
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
(5, 'Tese/Dissertação'),
(4, 'Dado Educacional');

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
  `documento` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`id`, `titulo`, `resumo`, `conteudo`, `categoria`, `documento`) VALUES
(30, '2', '2', '2', 1, 'Relatorio_TP1_-_Saulo,_Ana_e_Barbara.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `link`) VALUES
(6, 'Outro Título', 'https://web.whatsapp.com/'),
(7, 'Evento 23', 'link'),
(8, 'Título', 'Link teste'),
(9, 'Teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `midias`
--

DROP TABLE IF EXISTS `midias`;
CREATE TABLE IF NOT EXISTS `midias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `midias`
--

INSERT INTO `midias` (`id`, `titulo`, `link`) VALUES
(1, 'Teste de mídia', 'https://www.youtube.com/watch?v=pfQnUI3AGO8&app=desktop');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pesquisas`
--

INSERT INTO `pesquisas` (`titulo`, `resumo`, `conteudo`, `tipo`, `id`) VALUES
('Título da pesquisa', 'pesquisa', 'pesquisa', 'Concluída', 3),
('Outra Pesquisa', 'Resumo', 'Conteúdo da pesquisa', 'Concluída', 4),
('Outra Pesquisa', 'Resumo', 'Conteúdo da pesquisa', 'Concluída', 5),
('Pesquisa 1', 'Resumo ', 'COnteudo', 'Em andamento', 7),
('Pesquisa', 'Resumo', 'Conteudo', 'Em andamento', 8);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `tipo`, `id`, `cpf`) VALUES
('Ana Moraes', 'ana96moraes@gmail.com', 'MTIz', 'Administrador', 1, '12553527608'),
('Zara', 'zara@gmail.com', 'MTIz', 'Administrador', 7, '12312312312'),
('Fagner B', 'fagner@gmail.com', 'MTIz', 'Auxiliar', 6, '12553527610');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
