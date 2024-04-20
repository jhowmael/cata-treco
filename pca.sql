-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2023 às 15:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `numeral` varchar(255) DEFAULT NULL,
  `finished` varchar(255) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `image`, `type`, `note`, `name`, `number`, `email`, `created`, `modified`, `address`, `status`, `city`, `district`, `state`, `reference`, `cep`, `numeral`, `finished`, `responsable`) VALUES
(1, 'Capa407.jpg', 'rubble', 'TXT', 'Jonatan Ismael', '13996843045', 'jonatan.ismael996@gmail.com', '2023-02-17 01:05:34', '2023-02-17 01:33:35', 'São Paulo \\ São Vicente \\ Beira Mar \\ 122 \\ 11060451', 'finished', 'São Vicente', 'Beira Mar', 'São Paulo', 'perto do mercado', '11060451', '122', '', NULL),
(2, 'Capa407.jpg', 'rubble', 'TXT', 'Jonatan Ismael', '13996843045', 'jonatan.ismael996@gmail.com', '2023-02-17 01:07:09', '2023-02-17 11:52:22', 'São Paulo \\ São Vicente \\ Beira Mar \\  \\ ', 'irregular_data', 'São Vicente', 'Beira Mar', 'São Paulo', '', '', '', '', NULL),
(3, 'Capa407.jpg', 'rubble', 'TXT', 'Jonatan Ismael', '13996843045', 'jonatan.ismael996@gmail.com', '2023-02-17 01:32:26', '2023-03-16 13:55:55', 'São Paulo \\ São Vicente \\ Beira Mar \\ 122 \\ 11060451', 'finished', 'São Vicente', 'Beira Mar', 'São Paulo', '', '11060451', '122', '', NULL),
(4, 'divisao.png', 'rubble', 'TXT', 'Jonatan Ismael', '35480001850', 'jonatan.ismael996@gmail.com', '2023-03-22 07:20:54', '2023-04-04 00:31:16', 'São Paulo \\ São Vicente \\ Beira Mar \\ 122 \\ cep', 'in_progress', 'São Vicente', 'Beira Mar', 'São Paulo', 'campo do 2', 'cep', '122', NULL, 'operacional02'),
(5, '61-IzC1RTaL._AC_SX466_.jpg', 'rubble', 'TXT', 'Jonatan Ismael', '', '', '2023-03-27 23:56:06', '2023-04-04 00:30:51', 'São Paulo \\ São Vicente \\ Beira Mar \\  \\ cep', 'in_progress', 'São Vicente', 'Beira Mar', 'São Paulo', '', 'cep', '', NULL, 'operacional02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `staff` varchar(255) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `number`, `created`, `modified`, `type`, `staff`, `responsable`) VALUES
(1, 'Jonatan Ismael', 'Jonatan', '$2y$10$a1cQbK.zDgJFjscFSuLX1eTiJLJ1JzSCowWixP8p1eBKrwzvxFXay', 'jonatan.ismael996@gmail.com', '13996843045', '2023-02-15 21:31:38', '2023-02-15 21:31:38', 'operation', 'operational02', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
