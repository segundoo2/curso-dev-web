-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25-Jan-2024 às 01:23
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contatos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE `amigos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'João', '2024-01-24 20:14:43', '2024-01-24 20:14:43', NULL),
(2, 'Carlos', '2024-01-24 20:15:13', '2024-01-24 20:15:13', NULL),
(3, 'Jorge', '2024-01-24 20:39:42', '2024-01-24 20:39:42', NULL),
(4, 'Emanuel', '2024-01-24 20:39:42', '2024-01-24 20:39:42', NULL),
(5, 'Larissa', '2024-01-24 20:39:42', '2024-01-24 20:39:42', NULL),
(6, 'Jordana', '2024-01-24 20:39:42', '2024-01-24 20:39:42', NULL),
(7, 'Jô Soares', '2024-01-24 20:39:42', '2024-01-24 20:39:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `id` int(10) UNSIGNED NOT NULL,
  `amigos_id` int(10) UNSIGNED DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id`, `amigos_id`, `numero`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '555', '2024-01-24 20:15:39', '2024-01-24 20:15:39', NULL),
(2, 2, '444', '2024-01-24 20:16:05', '2024-01-24 20:16:05', NULL),
(3, 3, '333', '2024-01-24 20:40:38', '2024-01-24 20:40:38', NULL),
(4, 4, '222', '2024-01-24 20:41:08', '2024-01-24 20:41:08', NULL),
(5, 5, '999', '2024-01-24 20:45:24', '2024-01-24 20:45:24', NULL),
(6, 6, '888', '2024-01-24 20:45:24', '2024-01-24 20:45:24', NULL),
(7, 7, '666', '2024-01-24 20:45:24', '2024-01-24 20:45:24', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_telefones_amigos` (`amigos_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `telefones`
--
ALTER TABLE `telefones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `telefones`
--
ALTER TABLE `telefones`
  ADD CONSTRAINT `fk_telefones_amigos` FOREIGN KEY (`amigos_id`) REFERENCES `amigos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
