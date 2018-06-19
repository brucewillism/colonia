-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 19/06/2018 às 19:01
-- Versão do servidor: 5.7.22-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pibex`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pescadores`
--

CREATE TABLE `pescadores` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `USER_NOME` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_LOGIN` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_SENHA` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `USER_NOME`, `USER_EMAIL`, `USER_LOGIN`, `USER_SENHA`) VALUES
(1, 'Bruce Willis Marinho da Silva', 'tecnicobpm@hotmail.com', 'bruce', '123'),
(2, 'Bruce Willis Marinho da Silva', 'tecnicobpm@hotmail.com', 'bruce', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pescadores`
--
ALTER TABLE `pescadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
