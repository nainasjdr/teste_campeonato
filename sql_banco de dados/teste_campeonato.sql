-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/01/2019 às 20:14
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_campeonato`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `campeonato`
--

CREATE TABLE `campeonato` (
  `id_campeonato` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `campeonato`
--

INSERT INTO `campeonato` (`id_campeonato`, `nome`, `ano`) VALUES
(1, 'Brasileiro', 2014),
(2, 'Brasileiro', 2015),
(3, 'Brasileiro', 2016),
(4, 'Brasileiro', 2017),
(5, 'Brasileiro', 2018),
(6, 'Brasileiro', 2019);

-- --------------------------------------------------------

--
-- Estrutura para tabela `resultado`
--

CREATE TABLE `resultado` (
  `id_time` int(11) NOT NULL,
  `id_campeonato` int(11) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `resultado`
--

INSERT INTO `resultado` (`id_time`, `id_campeonato`, `pontos`) VALUES
(1, 1, 90),
(1, 2, 100),
(2, 1, 15),
(2, 2, 99),
(2, 3, 20),
(3, 2, 98),
(3, 3, 5),
(4, 2, 90),
(5, 2, 80),
(6, 2, 70),
(6, 3, 120),
(7, 1, 80),
(7, 2, 40),
(8, 1, 100),
(8, 2, 30),
(8, 3, 200),
(9, 2, 10),
(10, 2, 5),
(10, 3, 10),
(11, 1, 20),
(12, 1, 68),
(13, 1, 70),
(14, 3, 15),
(15, 1, 78),
(15, 3, 170),
(16, 1, 14),
(16, 3, 80),
(17, 1, 17),
(17, 3, 90),
(18, 3, 100);

-- --------------------------------------------------------

--
-- Estrutura para tabela `time`
--

CREATE TABLE `time` (
  `id_time` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` varchar(2) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `time`
--

INSERT INTO `time` (`id_time`, `nome`, `estado`) VALUES
(1, '	\r\nPalmeiras', 'SP'),
(2, '	\r\nInternacional', 'RS'),
(3, 'Flamengo', 'RJ'),
(4, 'Grêmio', 'RS'),
(5, 'São Paulo', 'SP'),
(6, 'Atlético-MG', 'MG'),
(7, 'Athletico-PR', 'PR'),
(8, 'Cruzeiro', 'MG'),
(9, 'Botafogo', 'RJ'),
(10, 'Santos', 'SP'),
(11, 'Bahia', 'BA'),
(12, 'Fluminense', 'RJ'),
(13, 'Corinthians', 'SP'),
(14, 'Chapecoense', 'SC'),
(15, 'Ceará', 'CE'),
(16, 'Vasco', 'RJ'),
(17, 'Sport', 'PE'),
(18, 'América-MG', 'MG');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`id_campeonato`);

--
-- Índices de tabela `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id_time`,`id_campeonato`),
  ADD KEY `id_time` (`id_time`),
  ADD KEY `id_campeonato` (`id_campeonato`);

--
-- Índices de tabela `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id_time`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `campeonato`
--
ALTER TABLE `campeonato`
  MODIFY `id_campeonato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `time`
--
ALTER TABLE `time`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `id_campeonato` FOREIGN KEY (`id_campeonato`) REFERENCES `campeonato` (`id_campeonato`),
  ADD CONSTRAINT `id_time` FOREIGN KEY (`id_time`) REFERENCES `time` (`id_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
