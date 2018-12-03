-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2018 às 00:47
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

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nome`, `cat_criado`) VALUES
(14, 'Camisa', NULL),
(15, 'CalÃ§a', NULL),
(16, 'TÃ©nis', NULL),
(17, 'Celular', NULL),
(18, 'Computadorss', NULL),
(19, 'eletronico', NULL),
(20, 'audio', NULL),
(21, 'video', NULL),
(22, 'game', NULL);

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

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nome`, `cli_rua`, `cli_cnpj_cpf`, `cli_numero`, `cli_cep`, `cli_cidade`, `cli_estado`, `cli_referencia`, `cli_data`, `tipo_id`, `cli_bairro`, `cli_cel`, `cli_tel`, `cli_site`, `cli_email`) VALUES
(11, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '388', 123, '09350-700', 'MauÃ¡', 'SP', 'teste', NULL, NULL, 'Parque das AmÃ©ricas', '34102723', '45472289', 'novo.com.br', 'buras@gmail.com'),
(15, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '848', 44, '09350-700', 'MauÃ¡', 'SP', 'sdsdsd', NULL, NULL, 'Parque das AmÃ©ricas', '5454', '45722999sss', 'sdasd@a.com', 'sdasd@a.com'),
(16, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '', 22, '09350-700', 'MauÃ¡', 'SP', 'dasdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '', 22, '09350-700', 'MauÃ¡', 'SP', 'dasdas', NULL, NULL, 'Parque das AmÃ©ricas', NULL, NULL, NULL, NULL),
(18, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '38', 266, '09350-700', 'MauÃ¡', 'SP', 'bairimad,', NULL, NULL, 'Parque das AmÃ©ricas', NULL, NULL, NULL, NULL),
(19, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '38', 266, '09350-700', 'MauÃ¡', 'SP', 'bairimad,', NULL, NULL, 'Parque das AmÃ©ricas', NULL, NULL, NULL, NULL),
(20, 'moraes3000', 'Rua BogotÃ¡', '', 23, '09350-700', 'MauÃ¡', 'SP', '9595', NULL, NULL, 'Parque das AmÃ©ricas', '99999-9999', NULL, NULL, NULL),
(21, 'moraes3000', 'Rua BogotÃ¡', '', 23, '09350-700', 'MauÃ¡', 'SP', '9595', NULL, NULL, 'Parque das AmÃ©ricas', '99999-9999', '1185527541', NULL, NULL),
(22, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '', 3, '09350-700', 'MauÃ¡', 'SP', 'aa', NULL, NULL, 'Parque das AmÃ©ricas', '1134102723', '1134102723', NULL, NULL),
(23, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '', 3, '09350-700', 'MauÃ¡', 'SP', 'aa', NULL, NULL, 'Parque das AmÃ©ricas', '1134102723', '1134102723', '', NULL),
(24, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '453', 33, '09350-700', 'maua', 'sp', 'dasdas', NULL, NULL, 'Parque das AmÃ©ricas', '1222-2222', '1134102723', 'teste.com.br', NULL),
(25, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '453', 33, '09350-700', 'maua', 'sp', 'dasdas', NULL, NULL, 'Parque das AmÃ©ricas', '1222-2222', '1134102723', 'teste.com.br', 'moraes3000@gmail.com'),
(26, 'Bruno Barbeiro Moraes', 'Rua BogotÃ¡', '388', 366, '09350-700', 'MauÃ¡', 'SP', 'adasda', NULL, NULL, 'Parque das AmÃ©ricas', '4547-2289', '1134102723', 'teste.com.br', 'brunomoraes@gmail.com');

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
  `for_tel` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_cel` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_site` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `for_bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`for_id`, `for_nome`, `for_rua`, `for_cnpj_cpf`, `for_numero`, `for_cep`, `for_cidade`, `for_estado`, `for_referencia`, `for_data`, `tipo_id`, `for_tel`, `for_cel`, `for_email`, `for_site`, `for_bairro`) VALUES
(1, 'fornecedor', 'Avenida Itapark', '4', 123456, '09350000', 'MauÃ¡', 'SP', 'REFERENCIAssss', NULL, NULL, '12346', '45465', '4654@a.com', '5454', 'Jardim Itapark');

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

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`pro_id`, `pro_nome`, `pro_descricao`, `pro_img`, `pro_quantidade_atual`, `pro_quantidade_minima`, `pro_quantidade_maxima`, `pro_venda`, `pro_compra`, `cat_id`) VALUES
(15, 'coca colass', 'desce', NULL, 201, 10, 100, 300, 200, 16),
(16, 'Computador', 'teste', NULL, 2, 1, 10, 20000, 10000, 18),
(17, 'tv', 'dasdas', NULL, 51, 50, 100, 30, 20, 18),
(18, 'ps4', 'game', NULL, 100, 10, 2000, 1500, 1000, 22),
(19, 'xbox 360', 'game', NULL, 10, 10, 100, 500, 300, 22),
(20, 'placa de video', 'video', NULL, 10, 20, 1000, 1500, 1000, 21),
(21, 'sem estoque', '00', NULL, 0, 0, 100, 1000, 1000, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`tipo_id`, `tipo_nome`) VALUES
(1, 'juridico'),
(2, 'fisico'),
(5, 'juridico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `use_nome` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `use_senha` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usu_id`, `use_nome`, `use_senha`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `ven_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `ven_quantidade` int(11) NOT NULL,
  `ven_valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`ven_id`, `pro_id`, `ven_quantidade`, `ven_valor`) VALUES
(1, 15, 201, 300),
(2, 16, 2, 20000),
(3, 17, 51, 30),
(4, 15, 201, 300),
(5, 16, 2, 20000),
(6, 17, 51, 30);

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
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`ven_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `for_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
