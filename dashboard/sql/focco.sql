-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Ago-2016 às 00:04
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `focco`
--
/*CREATE DATABASE IF NOT EXISTS `focco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `focco`;
*/
-- --------------------------------------------------------
--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `tipo`, `nome`, `email`, `telefone`) VALUES
(1, 'tom', 'paladino1', 1, 'Thom M Garcia', 'thom.blizz@gmail.com', '19996666380'),
(2, 'pam', '123qwe', 1, 'Pamella', 'pamella.gaiguer@gmail.com', '(11) 11111-1111'),
(3, 'leo', 'meutimaoeo', 2, 'Leonardo', 'leozac@gmail.com', '(11) 11111-1111'),
(4, 'tatiane', '240601', 2, 'Tatiane Marchi', 'tatiane.marchi@foccocambio.com.br', '(11) 11111-1111'),
(5, 'allison', 'REDEFINIR', 2, 'Allison Marchi', 'allison@foccocambio.com.br', '(11) 11111-1111');

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `categoria` int(11) DEFAULT NULL,
  `razaoSocial` varchar(255) DEFAULT NULL,
  `tipoPessoa` char(1) DEFAULT NULL,
  `cpfCnpj` varchar(14) DEFAULT NULL,
  `dataNascimentoAbertura` datetime DEFAULT NULL,
  `inscricaoMunicipal` varchar(50) DEFAULT NULL,
  `rgInscricaoEstadual` varchar(50) DEFAULT NULL,
  `rgOrgaoExpedidor` varchar(50) DEFAULT NULL,
  `rgDataExpedicao` datetime DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nacionalidade` varchar(100) DEFAULT NULL,
  `estadoCivil` int(11) DEFAULT NULL,
  `nomeConjuge` varchar(255) DEFAULT NULL,
  `dataNascimentoConjuge` datetime DEFAULT NULL,
  `nomeMae` varchar(255) DEFAULT NULL,
  `nomePai` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telFixo` varchar(20) DEFAULT NULL,
  `telCelular` varchar(20) DEFAULT NULL,
  `contraSenha` varchar(255) DEFAULT NULL,
  `observacoes` varchar(1000) DEFAULT NULL,
  `ofertasPorEmail` bit(1) DEFAULT NULL,
  `infoWhatsapp` bit(1) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `dataModificacao` datetime DEFAULT NULL,
  `passaporte` varchar(25) DEFAULT NULL,
  `rgDni` varchar(50) DEFAULT NULL,
  `origem` int(11) DEFAULT NULL,
  `vip` bit(1) DEFAULT NULL,
  `limiteOperacionalDia` decimal(10,2) DEFAULT NULL,
  `limiteOperacionalAno` decimal(10,2) DEFAULT NULL,
  `ativo` bit(1) DEFAULT 1,
  `bloqueado` bit(1) DEFAULT 0,
  `motivoBloqueio` int(11) DEFAULT NULL,
  `ondeConheceu` int(11) DEFAULT NULL,
  `ondeSoube` varchar(255) DEFAULT NULL,
  `cnh` varchar(20) DEFAULT NULL,
  `cnhDataValidade` datetime DEFAULT NULL


) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

-- INSERT INTO `clientes` (`id`, `categoria`, `razaoSocial`, `tipoPessoa`, `cpfCnpj`, `dataNascimentoAbertura`, `inscricaoMunicipal`, `rgInscricaoEstadual`, `rgOrgaoExpedidor`, `rgDataExpedicao`, `sexo`, `nacionalidade`, `estadoCivil`, `nomeConjuge`, `dataNascimentoConjuge`, `nomeMae`, `nomePai`, `email`, `telFixo`, `telCelular`, `contraSenha`, `observacoes`, `ofertasPorEmail`, `infoWhatsapp`, `dataCadastro`, `dataModificacao`, `passaporte`, `rgDni`, `origem`, `vip`) VALUES
-- (18, 1, 'Thais', 'F', '37479967870', '2016-12-09 00:00:00', NULL, '387006175', 'SSP', '1970-01-01 00:00:00', 'F', 'br', 1, '', '1970-01-01 00:00:00', 'huhuh', 'hehe', 'thaisalvesdasilva@uol.com.br', '1120937563', '11967372206', '1553', '', b'1', b'0', '2016-08-05 21:14:25', '2016-08-05 23:43:01', 'xxxxxx', 'yyyyyyyyyy', NULL, NULL),
-- (19, 1, 'Thompson', 'F', '14354288702', '1970-01-01 00:00:00', NULL, '269379848', 'detran', '1970-01-01 00:00:00', 'M', 'br', 1, '', '1970-01-01 00:00:00', 'marcia', 'claudio', 'thom.blizz@gmail.com', '1999666638', '19999666380', '21', '', b'0', b'0', '2016-08-05 23:32:52', '2016-08-05 23:51:35', '2121', '2121', 1, b'1');




create table boletagem (

id int primary key auto_increment,
usuarioId int,
clienteId int,
data datetime,
caixaId int,
modalidade int,
tipoOperacao int,
moeda varchar(5),
quantidade decimal(10,2),
taxa decimal(10,2),
subtotal decimal(10,2),
iofTaxa decimal(10,2),
mn decimal(10,2),
swift decimal(10,2),
darf decimal(10,2),
vet decimal(10,2),
vetTaxa decimal(10,2),
taxaNivel decimal(10,2),
status int

);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cotacoes`
--

CREATE TABLE IF NOT EXISTS `cotacoes` (
  `dolar` decimal(10,2) DEFAULT NULL,
  `euro` decimal(10,2) DEFAULT NULL,
  `libra` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cotacoes`
--

INSERT INTO `cotacoes` (`dolar`, `euro`, `libra`) VALUES
(0,0,0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `clienteId` int(11) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `dataEmissao` datetime DEFAULT NULL,
  `dataUltimaModificacao` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `documentos`
--

-- INSERT INTO `documentos` (`id`, `clienteId`, `tipo`, `arquivo`, `dataEmissao`, `dataUltimaModificacao`) VALUES
-- (17, 19, 'CPF', 'C:/wamp64/www/foccocambio/dashboard/clientes/uploads/14354288702/doc-cpf.png', NULL, '2016-08-05 23:32:52'),
-- (18, 19, 'RG', 'C:/wamp64/www/foccocambio/dashboard/clientes/uploads/14354288702/doc-rg.png', '1970-01-01 00:00:00', '2016-08-05 23:32:52'),
-- (19, 19, 'CR', 'C:/wamp64/www/foccocambio/dashboard/clientes/uploads/14354288702/doc-cr.png', NULL, '2016-08-05 23:32:52'),
-- (14, 18, 'CPF', 'C:/wamp64/www/foccocambio/dashboard/clientes/uploads/37479967870/doc-cpf.png', NULL, '2016-08-05 21:14:25'),
-- (15, 18, 'RG', 'C:/wamp64/www/foccocambio/dashboard/clientes/uploads/37479967870/doc-rg.png', '1970-01-01 00:00:00', '2016-08-05 21:14:25'),
-- (16, 18, 'CR', 'C:/wamp64/www/foccocambio/dashboard/clientes/uploads/37479967870/doc-cr.png', NULL, '2016-08-05 21:14:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecoscliente`
--

CREATE TABLE `enderecoscliente` (
  `id` int(11) NOT NULL,
  `clienteId` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `municipioId` int(11) DEFAULT NULL,
  `estadoId` int(11) DEFAULT NULL,
  `paisId` int(11) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecoscliente`
--

-- INSERT INTO `enderecoscliente` (`id`, `clienteId`, `tipo`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `municipioId`, `estadoId`, `paisId`, `cidade`, `estado`, `pais`) VALUES
-- (23, 18, 1, '03407050', 'Rua AntÃ´nio de Lucena', '22', '111', 'ChÃ¡cara CalifÃ³rnia', NULL, NULL, NULL, 'SÃ£o Paulo', 'SP', 'Brasil'),
-- (24, 18, 2, '03407050', 'Rua AntÃ´nio de Lucena', '22', '111', 'ChÃ¡cara CalifÃ³rnia', NULL, NULL, NULL, 'SÃ£o Paulo', 'SP', 'Brasil'),
-- (25, 19, 1, '13105-808', 'Rua do Flautim', '306', '', 'Residencial Parque das AraucÃ¡rias', NULL, NULL, NULL, 'Campinas', 'SP', 'Brasil'),
-- (26, 19, 2, '13105-808', 'Rua do Flautim', '306', '', 'Residencial Parque das AraucÃ¡rias', NULL, NULL, NULL, 'Campinas', 'SP', 'Brasil');


-- Indexes for dumped tables
--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecoscliente`
--
ALTER TABLE `enderecoscliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clienteId` (`clienteId`);

--
--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `enderecoscliente`
--
ALTER TABLE `enderecoscliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Limitadores para a tabela `enderecoscliente`
--
ALTER TABLE `enderecoscliente`
  ADD CONSTRAINT `enderecoscliente_ibfk_1` FOREIGN KEY (`clienteId`) REFERENCES `clientes` (`id`);

UPDATE `boletagem` set status = 1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
