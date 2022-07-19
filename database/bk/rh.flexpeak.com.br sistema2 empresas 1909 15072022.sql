-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para eclick
CREATE DATABASE IF NOT EXISTS `eclick` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eclick`;

-- Copiando estrutura para tabela eclick.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `fatasia` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone_fixo` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `descricao_servico` text,
  `data_aniversario` date NOT NULL,
  `logotipo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `empresas_nome_unique` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela eclick.empresas: ~2 rows (aproximadamente)
DELETE FROM `empresas`;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`id`, `nome`, `fatasia`, `nif`, `telefone`, `endereco`, `telefone_fixo`, `email`, `site`, `descricao_servico`, `data_aniversario`, `logotipo`, `created_at`, `updated_at`) VALUES
	(1, 'FLEX CALL TECNOLOGIA LTDA', 'FlexCall', '27872518000171', '92994833270', 'R RIO PURUS, 7, VIERA ALVES', NULL, 'michael@flexpeak.com.br', NULL, 'Atividades de teleatendimento', '2017-06-01', 'logotipo/Hd9kc5ktAS5fFujf5MIOwMYPTWWrM3pbMudEtICv.png', '2021-06-21 18:55:18', '2021-06-21 18:55:18'),
	(2, 'TECNOLOGIA DA INFORMACAO FLEXPEAK EIRELI', 'iFPK', '11253455000135', '92994833270', 'R RIO PURUS, 7, VIEIRALVES', NULL, 'michael@flexpeak.com.br', NULL, 'Desenvolvimento e licenciamento de programas de computador customizáveis', '2021-06-21', 'logotipo/Hd9kc5ktAS5fFujf5MIOwMYPTWWrM3pbMudEtICv.png', '2021-06-21 17:59:06', '2021-06-21 17:59:08');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
