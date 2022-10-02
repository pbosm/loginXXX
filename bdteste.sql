-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Out-2022 às 22:42
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdteste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

DROP TABLE IF EXISTS `colaboradores`;
CREATE TABLE IF NOT EXISTS `colaboradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data` date NOT NULL,
  `pontos` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `email`, `cpf`, `data`, `pontos`) VALUES
(25, 'dvbc', 'dvc.dvc@hotmail.com', '58636507022', '1988-02-27', ''),
(24, 'ccccccc', 'ccccc.cccc@hotmail.com', '21508536040', '2000-03-25', ''),
(22, 'Messi', 'messi@hotmail.com', '71337352020', '2000-02-14', ''),
(23, 'abcdc', 'abcdc@hotmail.com', '13867282099', '2000-02-14', ''),
(21, 'Ana', 'ana.ana@hotmail.com', '68407254053', '2000-04-30', '20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`) VALUES
(8, 'teste', 'teste.teste@hotmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '23866379056'),
(9, 'teste drive', 'teste.drive123@hotmail.com', '4af9eff9597bb68a77305acbd8a8fe35f6d9f2e9898b4092c677f58dc21861a5995e468c2decb11c00c1f4c8956a1212f87358a9614db8bdca78e8e2b82faf60', '43981864093'),
(10, 'abc', 'abc@hotmail.com', 'f813763bfd574e235f82d811a0b0272c367c5d67a7b8faa85080255057cd5979c0cab55fd46c8beca5ff67177c84ffc42406bdddca08e1083b8ce16cae219bc6', '63152193068'),
(11, 'aaaaa', 'abc.abc@hotmail.com', '14dfee622f48835259380013c731db7472cd7019aa0f8afb1b3cf89067602de1e01852228b832a118f6ef6b257285e6a04f33e1bd2f01c82a74a6bad3c334867', '82939674043'),
(12, 'ccccccc', 'ccccc.cccc@hotmail.com', '84be12922f4368576c3a2080c3d76ef23555b0a08968b0367a4cfc35fac95d32527a3fc0152f12a3bcc4134178bfc391986bdee3eab670ec2d1da84023b6756c', '44095822082');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
