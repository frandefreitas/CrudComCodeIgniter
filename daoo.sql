-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2018 às 09:35
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daoo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `prefixo` varchar(7) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `doador`
--

INSERT INTO `doador` (`id`, `nome`, `endereco`, `email`, `sexo`, `cpf`, `prefixo`, `telefone`) VALUES
(11, 'mlsdasasa azevedo AZEREDO', 'sssssssssssssss', 'dsmld', 'sl', '5454', '90', '90'),
(22, 'Prof Marla', 'kkkkkkkkkk', 'jo', 'jo', '090909', '90', '90'),
(24, 'Francisco', 'fkjdfjkd', 'ney@mail.com', 're', '9090', NULL, NULL),
(27, 'neneoo', 'lk', 'l', 'l', '09', '09', '0990'),
(28, 'neneoo', 'lk', 'l', 'l', '09', '09', '0990'),
(29, 'neneolllo', 'lk', 'l', 'l', '09', '09', '0990'),
(31, 'Lucas', 'Rua de la Guampa', 'lucaslucco@mail.com', 'masculino', '032932093', '32', '03923902'),
(32, 'Geromel', 'esta na minha frente', 'geromitodatsi@gmail.com', 'masculino', '30923902', '732', '23232323'),
(33, 'Geromel', 'esta na minha frente', 'geromitodatsi@gmail.com', 'masculino', '30923902', '732', '23232323'),
(34, 'Matheus', 'aaaa', 'sss@mail.com', 'masculino', '0990909090', '123', '123123123'),
(35, 'Benhur', 'dsodsjo', 'oo@mail.com', 'masculino', '28', '13', '11'),
(37, 'Ola', 'Mundo', 'doskdo@gmail.com', '090909', '09909090', '090990', '900909');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `updated`) VALUES
(1, 'João', 'franciscodefreitas90@gmail.com', '$2y$10$8LCA8z5C1d0r6GekPMqYnOfzFKF19Pv8GLW6V/W1UBeFAMx0Zag66', '2018-05-08 03:41:53', '2018-05-08 03:41:53'),
(2, 'João', 'franciscodefreitas190@gmail.com', '$2y$10$YNAUBIGKU2qf2vpI0YhqIuyeKxaQYg/Pc2.ZErD08D.KFi6gUSXw.', '2018-05-08 03:43:10', '2018-05-08 03:43:10'),
(3, 'Arisco', 'evarisco@macedo.com', '$2y$10$l0LYr.jfK1RtiZVGluveP.4CtOJLw993RtJzFX9KdqVrw4asipI3S', '2018-05-08 03:49:57', '2018-05-08 03:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doador`
--
ALTER TABLE `doador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
