-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2018 às 00:01
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque_impacto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cat_criado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cli_rua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_cnpj_cpf` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_numero` int(11) DEFAULT NULL,
  `cli_cep` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_cidade` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_estado` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_referencia` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_data` date DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `cli_bairro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_cel` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_tel` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_site` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `for_id` int(11) NOT NULL,
  `for_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `for_rua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_cnpj_cpf` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_numero` int(11) DEFAULT NULL,
  `for_cep` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_cidade` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_estado` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_referencia` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_data` date DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `for_telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_celular` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_site` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `pro_id` int(11) NOT NULL,
  `pro_nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pro_descricao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_img` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_quantidade_atual` int(11) DEFAULT NULL,
  `pro_quantidade_minima` int(11) DEFAULT NULL,
  `pro_quantidade_maxima` int(11) DEFAULT NULL,
  `pro_venda` float DEFAULT NULL,
  `pro_compra` float DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`for_id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `for_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
