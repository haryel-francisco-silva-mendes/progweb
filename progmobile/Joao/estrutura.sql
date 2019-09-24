-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.31-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_happyworld
CREATE DATABASE IF NOT EXISTS `db_happyworld` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_happyworld`;

-- Copiando estrutura para tabela db_happyworld.pergunta
CREATE TABLE IF NOT EXISTS `pergunta` (
  `id_pergunta` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  `alternativa_a` varchar(100) DEFAULT NULL,
  `alternativa_b` varchar(100) DEFAULT NULL,
  `is_visible` tinyint(4) DEFAULT NULL,
  `pontos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pergunta`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela db_happyworld.pergunta: ~3 rows (aproximadamente)
DELETE FROM `pergunta`;
/*!40000 ALTER TABLE `pergunta` DISABLE KEYS */;
INSERT INTO `pergunta` (`id_pergunta`, `descricao`, `alternativa_a`, `alternativa_b`, `is_visible`, `pontos`) VALUES
	(1, 'Seu banho demora mais de 30 minutos', 'sim', 'Não', 1, 100),
	(2, 'Voce mantém a televisão ligada por mais de 5 horas ?', 'Sim', 'Não', 1, 30),
	(3, 'Você deixa a torneira aberta enquanto escova os dentes?', 'Sim', 'Não', 1, 20);
/*!40000 ALTER TABLE `pergunta` ENABLE KEYS */;

-- Copiando estrutura para tabela db_happyworld.responde
CREATE TABLE IF NOT EXISTS `responde` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_pergunta` int(11) DEFAULT NULL,
  `resposta` varchar(10) DEFAULT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_pergunta` (`id_pergunta`),
  CONSTRAINT `responde_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `responde_ibfk_2` FOREIGN KEY (`id_pergunta`) REFERENCES `pergunta` (`id_pergunta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela db_happyworld.responde: ~12 rows (aproximadamente)
DELETE FROM `responde`;
/*!40000 ALTER TABLE `responde` DISABLE KEYS */;
INSERT INTO `responde` (`id_usuario`, `id_pergunta`, `resposta`) VALUES
	(1, 1, 'b'),
	(1, 2, 'b'),
	(1, 3, 'a'),
	(2, 1, 'b'),
	(2, 2, 'a'),
	(2, 3, 'a'),
	(3, 1, 'b'),
	(3, 2, 'b'),
	(3, 3, 'b'),
	(4, 1, 'a'),
	(4, 2, 'a'),
	(4, 3, 'a');
/*!40000 ALTER TABLE `responde` ENABLE KEYS */;

-- Copiando estrutura para tabela db_happyworld.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela db_happyworld.usuario: ~4 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`, `nome`, `senha`, `email`) VALUES
	(1, 'thiago', '123', 'thiago@thiago'),
	(2, 'joao', '2424', 'joao@joao'),
	(3, 'sidney', '0123', 'sidney@sidney'),
	(4, 'michele', '0000', 'michele@michele');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
