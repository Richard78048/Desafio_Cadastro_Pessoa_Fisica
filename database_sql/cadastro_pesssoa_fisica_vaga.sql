-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2024 às 04:25
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cxlsnvlf_aulas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_pesssoa_fisica_vaga`
--

CREATE TABLE `cadastro_pesssoa_fisica_vaga` (
  `id_user` int(6) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(1000) NOT NULL,
  `cod_operation` int(6) DEFAULT NULL COMMENT 'operações de codigo no email'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `cadastro_pesssoa_fisica_vaga`
--

INSERT INTO `cadastro_pesssoa_fisica_vaga` (`id_user`, `nome`, `cpf`, `email`, `senha`, `cod_operation`) VALUES
(2, 'Ayron', '028.296.509-21', 'ayronbata@gmail.com', '$2y$08$3p0cu1QumsNQpi59ty1zD.gr88OrBD0eUUc.mWe3I.cyNoH8EHAe2', NULL),
(3, 'maria eduarda soares', '201.103.220-21', 'maria@gmail.com', '$2y$08$B6v1UrQ0YvnWsOQY87l4me4bF3dmR.iTg6ut8tI3XsB/oILGZWrQW', NULL),
(4, 'Ay', '001.111.296-25', 'ay@gmal.com', '$2y$08$kgl58Gt7Fe.H3HkKGSgCYe33eRF2B0jzay7qovC7Z9UbzSO1HobZ6', NULL),
(8, 'bertolino', '001.200.300-44', 'bertolino@hsadas.com', '$2y$08$hiPamA0aZdpqP8dTz/M/S.a/dNPZXxjsuclv7Yv2Y9IFxFAsrSU2e', NULL),
(9, 'Joarez', '020.025.026-27', 'joarez@gmail.com', '$2y$08$HF85RGBs8EKM/9bAOSg4x.NRYAxFfpthkOkCErbbmk4rdRSp8ACOa', NULL),
(47, 'Marcos Aurelio', '100.100.100-01', 'MarcosAurelio@gmail.com', '$2y$08$UXTy.DXMe6o6rNaLOLDM/uUkBUMBHYfQQCo8FYRWg5X7jpWiURUU2', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_pesssoa_fisica_vaga`
--
ALTER TABLE `cadastro_pesssoa_fisica_vaga`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_pesssoa_fisica_vaga`
--
ALTER TABLE `cadastro_pesssoa_fisica_vaga`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
