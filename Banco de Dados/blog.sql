-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Dez-2020 às 22:45
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `mensagem` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `mensagem`, `date`) VALUES
(1, 'Arthur Prates', 'arthur.prates7@gmail.com', '988857665', 'Envio de Mensagem via JSON Usando API', '2020-12-29 18:13:56'),
(2, 'Arthur Prates', 'arthur.prates7@gmail.com', '988857665', 'Envio de Mensagem via JSON Usando API', '2020-12-29 18:14:01'),
(3, 'Arthur Prates', 'arthur.prates7@gmail.com', '988857665', 'Teste de Envio\r\n', '2020-12-29 20:25:35'),
(4, 'Arthur Prates', 'arthur.prates7@gmail.com', '988857665', 'Teste de Envio\r\n', '2020-12-29 20:25:55'),
(5, 'Arthur Prates', 'arthur.prates7@gmail.com', '988857665', 'Teste de Envio via Navegador', '2020-12-29 20:26:12'),
(6, 'Arthur Prates', 'arthur.prates7@gmail.com', '988857665', 'Teste de Envio via Navegador', '2020-12-29 20:28:01'),
(7, 'Bianca Gonçalves', 'bibi@bibi.com', '3132131', 'TEste de Envio', '2020-12-29 20:33:09'),
(8, 'Bianca Gonçalves', 'bibi@bibi.com', '3132131', 'TEste de Envio', '2020-12-29 20:35:47'),
(9, 'Bianca Gonçalves', 'bibi@bibi.com', '3132131', 'TEste de Envio', '2020-12-29 20:36:59'),
(10, 'Pedrinho', 'pedrinho@uol.com', '401872481270', 'Teste De evio', '2020-12-29 21:10:53'),
(11, 'Agostinho Neto', 'agostinho@agostinho.com', '31087203470129', 'Teste de Envio de Mensagem via Browser com TIM', '2020-12-29 21:27:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `feed`
--

INSERT INTO `feed` (`id`, `title`, `content`, `author`, `date`) VALUES
(1, 'Teste de Envio de Feed', 'Somente um teste de Envio de Feed', 'Arthur Prates', '2020-12-29 17:52:05'),
(2, 'Teste de Feed', 'Mensagem', 'Arthur Prates', '2020-12-29 19:01:26'),
(3, 'Envio Detalhado', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Arthur Prates', '2020-12-29 20:05:24'),
(4, 'Envio Detalhado', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Arthur Prates', '2020-12-29 20:05:39');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
