-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/05/2018 às 20:34
-- Versão do servidor: 10.1.32-MariaDB
-- Versão do PHP: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nepppe`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Pesquisa'),
(2, 'Artigo'),
(3, 'Livro'),
(5, 'Tese/Dissertação'),
(4, 'Dado Educacional');

-- --------------------------------------------------------

--
-- Estrutura para tabela `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `resumo` varchar(200) NOT NULL,
  `conteudo` varchar(200) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `documento` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `documentos`
--

INSERT INTO `documentos` (`id`, `titulo`, `resumo`, `conteudo`, `categoria`, `documento`) VALUES
(31, 'Título da pesquisa', 'Resumo do dado', 'Conteúdo do dado', 'Pesquisa', ''),
(32, 'Título do dado2', 'Resumo do dado', 'Conteúdo do dado', 'Livro', 'teste\r\n'),
(33, 'Título do dado3', 'Resumo do dado', 'Conteúdo do dado', 'Artigo', 'teste3\r\n\r\n'),
(34, 'Título do Dado', 'Resumo do dado', 'Conteúdo do dado', 'Dado', 'teste4'),
(35, 'Titulo do Tese', 'lalalalr resumo', 'conteudo da teseseee', 'Teses', 'doc');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `link`) VALUES
(7, 'V CBEO - Congresso Brasileiro de Estudos Organizac', 'http://www.sbeo.org.br/web/index.php/cbeo/v-cbeo'),
(8, 'ANPOCs', 'http://www.anpocs.com/'),
(9, 'ANPED Sudeste', 'http://regionais.anped.org.br/sudeste2018/programacao-geral/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `midias`
--

CREATE TABLE `midias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `midias`
--

INSERT INTO `midias` (`id`, `titulo`, `link`) VALUES
(1, 'Temer recebe deputados aliados em almoço no Paláci', 'https://g1.globo.com/politica/noticia/temer-recebe-deputados-aliados-em-almoco-no-palacio-do-planalto.ghtml');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pesquisas`
--

CREATE TABLE `pesquisas` (
  `titulo` varchar(50) NOT NULL,
  `resumo` varchar(200) NOT NULL,
  `conteudo` varchar(200) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pesquisas`
--

INSERT INTO `pesquisas` (`titulo`, `resumo`, `conteudo`, `tipo`, `id`) VALUES
('Título da pesquisa', 'pesquisa', 'pesquisa', 'Concluída', 3),
('Outra Pesquisa', 'Resumo', 'Conteúdo da pesquisa', 'Concluída', 4),
('Outra Pesquisa', 'Resumo', 'Conteúdo da pesquisa', 'Concluída', 5),
('Fronteiras do Estado na educação:  características', 'Um trabalho de iniciação científica e 01 de mestrado vêm sendo no âmbito desse Projeto.', 'O propósito do trabalho é investigar, utilizando abordagem multimétodo, mudanças em curso no Estado brasileiro, no campo educacional, que tendem a alterar as relações Estado e mercado; Estado e Socied', 'Em andamento', 7),
('Governança Educacional: quem e como se governa a E', 'Esta pesquisa é financiada pela FAPEMIG/MG, intitula-se “Governança Educacional: quem e como se governa a Educação Infantil em Minas Gerais”.', 'A partir dos anos de 1990, a estrutura organizacional do sistema de protec?a?o social brasileiro comec?a a experimentar um reordenamento no seu desenho, o que tem levado a uma alterac?a?o nos modos de', 'Em andamento', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `departamento` varchar(200) NOT NULL,
  `curriculo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `categoria`, `departamento`, `curriculo`) VALUES
(4, 'Zara Figueiredo Tripodi', 'Pesquisador', 'UFOP', 'http://lattes.cnpq.br/3705451568314846'),
(5, 'Veronica Mendes Pereira', 'Pesquisador', 'UFOP', 'http://lattes.cnpq.br/7345545374336076'),
(6, 'Marcelo Donizete da Silva', 'Pesquisador', 'UFOP', 'http://lattes.cnpq.br/7560421514245453'),
(7, 'Thiago Alves', 'Pesquisador', 'UFPR', 'http://lattes.cnpq.br/7802091709644694#'),
(8, 'José Lucas Pedreira Bueno', 'Pesquisador', 'UFTM', 'http://lattes.cnpq.br/0805268924348920'),
(9, 'Breynner Ricardo de Oliveira', 'Pesquisador', 'UFOP', 'http://lattes.cnpq.br/8368917322952740'),
(10, 'Eliane das Graças Pereira Ferreira', 'Mestrando', 'Mestranda em Educação/ICHS/UFOP', 'http://lattes.cnpq.br/5861261066577280'),
(11, 'Adriana de Medeiros Oliveira', 'Mestrando', 'Mestranda em Educação/ICHS/UFOP', 'http://lattes.cnpq.br/6241686929185980'),
(12, 'Ariane Dianes dos Santos Silva', 'Mestrando', 'Mestranda em Educação/ICHS/UFOP', 'http://lattes.cnpq.br/0601130582267058'),
(13, 'Jianne Inês Fialho Coelho', 'Mestrando', 'Mestranda em Educação/ICHS/UFOP', 'http://lattes.cnpq.br/2669064163003279'),
(41, 'João Luiz Batista Meneghini', 'Pesquisador', 'Pedagogia/ICHS/UFOP', 'http://lattes.cnpq.br/5375302418960744'),
(42, 'Maria Luísa Patrocínio Souza', 'Graduando', 'Pedagogia/ICHS/UFOP', 'http://lattes.cnpq.br/1425825324041469'),
(32, 'Thiago Andreuci Alves Silva', 'Graduando', 'História/ICHS/UFOP', 'http://lattes.cnpq.br/2234632720125030'),
(33, 'Maria Tereza da Silva Pena', 'Graduando', 'Pedagogia/ICHS/UFOP', 'http://lattes.cnpq.br/1282362686993205'),
(34, 'Alexander Jose de Freitas', 'Graduando', 'Letras/ICHS/UFOP', 'http://lattes.cnpq.br/7842685128678132'),
(35, 'Mariellen De Freitas Tioca', 'Graduando', 'Economia/ICSA/UFOP', 'http://lattes.cnpq.br/1268614074026249'),
(36, 'Tais Aguilar', 'Graduando', 'Economia/ICSA/UFOP', 'http://lattes.cnpq.br/5706785932045955'),
(37, 'Flávia Christina Joanini', 'Graduando', 'Ciências Biológicas/ICEB/UFOP', 'http://lattes.cnpq.br/5564577026073403'),
(38, 'Gustavo Henrique Trajano de Lima', 'Graduando', 'História/ICHS/UFOP', 'http://lattes.cnpq.br/9833786960754216'),
(39, 'Roberto Fernandes Ferreira', 'Graduando', 'Artes Cênicas/DEART/UFOP', 'http://lattes.cnpq.br/0070355391163179'),
(40, 'Mateus Versieux de Souza', 'Graduando', 'História/ICHS/UFOP', 'http://lattes.cnpq.br/1367064713393841');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `cpf` char(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `tipo`, `id`, `cpf`) VALUES
('Ana Moraes', 'ana96moraes@gmail.com', 'MTIz', 'Administrador', 1, '12553527608'),
('Zara', 'zara@gmail.com', 'MTIz', 'Administrador', 7, '12312312312'),
('Fagner B', 'fagner@gmail.com', 'MTIz', 'Auxiliar', 6, '12553527610');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `midias`
--
ALTER TABLE `midias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pesquisas`
--
ALTER TABLE `pesquisas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `midias`
--
ALTER TABLE `midias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `pesquisas`
--
ALTER TABLE `pesquisas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
