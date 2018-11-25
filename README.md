# projeto-6ads
Trabalho do 6° semestre de Análise e Desenvolvimento de Sistemas  do professor Everson Nunes

<h1>Projeto de um gerenciamento de Estoque </h1>



<h2 dir="ltr">Sistema</h2>

<p dir="ltr">Sistema para &nbsp;o gerenciamento de estoque, para &nbsp;uma empresa de recondicionadora de virabrequim,</p>

<h2 dir="ltr">Descri&ccedil;&atilde;o do sistema atual</h2>

<p dir="ltr">O sistema atual &nbsp;um caderno de anota&ccedil;&atilde;o, que conta apenas com o produto e o servi&ccedil;o prestado, com a data &nbsp;de pagamento e cheques para as datas</p>

<p>&nbsp;</p>

<h2 dir="ltr">Objetivo</h2>

<h3 dir="ltr">Geral</h3>

<p dir="ltr">O sistema dever&aacute; fazer o cadastro de produtos, clientes e fornecedores e a emiss&atilde;o de ordem de produ&ccedil;&atilde;o e relat&oacute;rios</p>

<h3 dir="ltr">Especifico</h3>

<p dir="ltr"><strong>Cadastro de cliente</strong></p>

<ul>
	<li dir="ltr">
	<p dir="ltr">Nome</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Cnpj ou cpf (para pessoa fisica ou juridica)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">contato(telefone,celular, email ,site)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">endere&ccedil;o(estado,cidade&hellip;)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Frequencia de visita &nbsp;do cliente</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Tipo de cliente(ativo, inativo, demora para pagar)</p>
	</li>
</ul>

<p>&nbsp;</p>

<p dir="ltr"><strong>Cadastro de produtos</strong></p>

<ul>
	<li dir="ltr">
	<p dir="ltr">Nome</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">C&oacute;digo interno e original</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Peso</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Medida (std ,0.25, 0.50, 0.75)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Situa&ccedil;&atilde;o da pe&ccedil;a(trabalho, ou sucata)</p>
	</li>
</ul>

<p>&nbsp;</p>

<p dir="ltr"><strong>Ordem de produ&ccedil;&atilde;o</strong></p>

<ul>
	<li dir="ltr">
	<p dir="ltr">Fk cliente</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">FK produto</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Situa&ccedil;&atilde;o (sucata, usinagem)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Quantidade</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Checkbox para (numero de &nbsp;colos soldado)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Checkbox para (numero de &nbsp;colos retifica e medidas)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Checkbox para (numero de &nbsp;colos tratamento termico)</p>
	</li>
</ul>

<p>&nbsp;</p>

<p dir="ltr"><strong>Prestador de servi&ccedil;o</strong></p>

<ul>
	<li dir="ltr">
	<p dir="ltr">Nome</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">cnpj/cpf</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Contato</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Endere&ccedil;o</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Valor por servi&ccedil;o prestado</p>
	</li>
</ul>

<p>&nbsp;</p>

<p dir="ltr"><strong>Controle de custo</strong></p>

<ul>
	<li dir="ltr">
	<p dir="ltr">Cada fun&ccedil;&atilde;o ser&aacute; feita &nbsp;um custo com dois padr&atilde;o feito interno e feito externo ex: uma solda valor x, duas soldas valor x*2 &hellip;</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Retifica valor x</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Tratamento t&eacute;rmico pre&ccedil;o do kilo e tipo de tratamento</p>
	</li>
</ul>

<p>&nbsp;</p>

<h2 dir="ltr">Levantamento de requisitos</h2>

<h3 dir="ltr">Tabela de requisitos(sistema)</h3>

<h3 dir="ltr">Requisitos funcionais</h3>

<ol>
	<li dir="ltr">
	<p dir="ltr">O sistema dever&aacute; ter o login de adm para ver o relat&oacute;rio mensal e fornecedores</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Tela de cadastro de fornecedores, ir&aacute; receber os dados pertinentes a cada fornecedor</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Tela de cadastro de produtos, com a descri&ccedil;&atilde;o de todos os produtos cadastrados(nome , foto ,c&oacute;digo original, c&oacute;digo interno, peso, dimens&atilde;o , ve&iacute;culos que essa pe&ccedil;a &eacute; compat&iacute;vel)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Tela de cadastro &nbsp;cliente com todos os dados do cliente</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Servi&ccedil;o prestado(apenas solda 1 ou mais colos e o pre&ccedil;o para cada um, ret&iacute;fica e &agrave; medida que foi feita ,foi efetuado tratamento t&eacute;rmico)</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Estoque</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Faturamento</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Emiss&atilde;o de ordem de produ&ccedil;&atilde;o</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Se o produto for &nbsp;usinado internamente o nome do funcionario responsavel</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Se for &nbsp;feito externo o lugar &nbsp;que foi feito</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Para compra mensal ser&aacute; enviado um relat&oacute;rio para o cliente com os itens de compra e o d&eacute;bito efetuado no momento de pagamento ser&aacute; enviado outro relat&oacute;rio de quita&ccedil;&atilde;o</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Baixa no estoque</p>
	</li>
</ol>

<h3 dir="ltr">Requisitos nao funcionais</h3>

<ol>
	<li dir="ltr">
	<p dir="ltr">Php 7</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Mysql</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">Bootstrap 4</p>
	</li>
	<li dir="ltr">
	<p dir="ltr">angular</p>
	</li>
</ol>

<h1>SQL</h1>
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
<hr>


Modelo do git usado desenvolver o projeto:<br>
https://github.com/polodev/youtube-php-crud
<br>
Tutorial Youtube CRUD PDO:<br>
https://www.youtube.com/watch?feature=player_embedded&v=MYhw4-Bc-oM
<br>

Artigo para ler implementar no projeto <br>
https://www.devmedia.com.br/implementando-controle-de-estoque-no-mysql-com-triggers-e-procedures/26352