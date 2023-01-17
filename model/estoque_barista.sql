-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2023 às 17:44
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque_barista`
--
CREATE DATABASE IF NOT EXISTS `estoque_barista` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estoque_barista`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coffees`
--

CREATE TABLE `coffees` (
  `id_coffee` int(11) NOT NULL,
  `name_coffee` varchar(100) NOT NULL,
  `type_coffee` varchar(100) NOT NULL,
  `price_coffee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `coffees`
--

INSERT INTO `coffees` (`id_coffee`, `name_coffee`, `type_coffee`, `price_coffee`) VALUES
(4, 'melita-alterado', 'bonito', '10000.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `password_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `password_user`) VALUES
(3, 'lucas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'jezualda', '26656c1994abe2ba7652d0efb2fb93e4623680c5');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `coffees`
--
ALTER TABLE `coffees`
  ADD PRIMARY KEY (`id_coffee`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `coffees`
--
ALTER TABLE `coffees`
  MODIFY `id_coffee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
