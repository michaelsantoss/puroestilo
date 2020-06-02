-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Dez-2019 às 20:53
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puroestilo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE `encomendas` (
  `nome` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id_adm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`nome`, `login`, `senha`, `id_adm`) VALUES
('Kemili Camargo', 'kemipuroestilo', 'camargo123', 1),
('Michael Bitencourt', 'michaelpuroestilo', 'michael97', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod_a_receber`
--

CREATE TABLE `prod_a_receber` (
  `id_prod` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor_venda` decimal(10,2) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `vendedor` varchar(255) NOT NULL,
  `vencimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod_disponiveis`
--

CREATE TABLE `prod_disponiveis` (
  `id_prod` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tamanho` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `valor_pago` decimal(10,2) NOT NULL,
  `valor_venda` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prod_disponiveis`
--

INSERT INTO `prod_disponiveis` (`id_prod`, `nome`, `tamanho`, `descricao`, `quantidade`, `valor_pago`, `valor_venda`) VALUES
(1, 'Blusinha', 'm', 'de verao', 10, '10.00', '20.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod_vendidos`
--

CREATE TABLE `prod_vendidos` (
  `id_prod` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor_venda` decimal(10,2) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `vendedor` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prod_vendidos`
--

INSERT INTO `prod_vendidos` (`id_prod`, `nome`, `valor_venda`, `quantidade`, `vendedor`, `cliente`) VALUES
(0, '', '0.00', 10, 'Kemili Camargo', 'Maria'),
(6, '', '0.00', 7, 'Kemili Camargo', 'a'),
(6, '', '0.00', 10, 'Kemili Camargo', 'a'),
(6, '', '0.00', 10, 'Kemili Camargo', 'a'),
(6, '', '0.00', 10, 'Kemili Camargo', 'a'),
(6, '', '0.00', 10, 'Kemili Camargo', 'a'),
(1, '', '0.00', 10, 'Kemili Camargo', 'Vitor'),
(1, '', '0.00', 10, 'Kemili Camargo', 'Vitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `prod_disponiveis`
--
ALTER TABLE `prod_disponiveis`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prod_disponiveis`
--
ALTER TABLE `prod_disponiveis`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
