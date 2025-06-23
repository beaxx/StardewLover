-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/06/2025 às 14:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `littlefarm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `acess` int(11) NOT NULL,
  `failed_attempts` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `type`, `status`, `acess`, `failed_attempts`) VALUES
('Beia', '$2y$10$BqdjQ3lgvvZa6Wa6c7HNyOjt0bhrLh5O3QpSgOI.t0fgX7NcKgGj6', 'Beatriz Oliveira', '0', '1', 2, 0),
('Brunico', '$2y$10$7.8exM7F3aRlXDnPh5EzV.kn7sVl74ufP2b7xsP2uAo7TZVzx499y', 'Bruno Oliveira', '1', '0', 0, 0),
('Letty', '$2y$10$ofwjeQ6fUjGs.tHJ/N5DR.CQ7Bwk3v/k31Ew3IyxVaBfb2X0aS2TC', 'Letícia Maria', '1', '0', 0, 0),
('mary', '$2y$10$hh1Fxv4J8aFKgwckwfS2bOVioHHZvdEstb888atceDBeGAlVf3Oym', 'Maria', '1', '1', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
