-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: salao
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `id_func` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome_func` varchar(45) NOT NULL,
  `cpf_func` char(11) NOT NULL,
  `email_func` varchar(50) DEFAULT NULL,
  `senha_func` varchar(50) NOT NULL,
  `ddd_func` int(2) unsigned NOT NULL,
  `telefone_func` int(9) NOT NULL,
  `salario_total_func` decimal(10,2) DEFAULT NULL,
  `datacadastro_func` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_func`),
  UNIQUE KEY `cpf_func` (`cpf_func`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (14,'Funcionario','','funcionario@gmail.com','a1820a4ff12cd145f40f9d67c620fc8b48da1c25',31,321321313,NULL,'2017-06-10 23:22:43');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id_pedido` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fk_cpf_usuario` varchar(11) NOT NULL,
  `fk_nome_func` varchar(45) NOT NULL,
  `custo_pedido` decimal(10,2) NOT NULL,
  `dinheiro_recebido` decimal(10,2) NOT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_cpf_usuario__usuario` (`fk_cpf_usuario`),
  KEY `fk_fk_nome_func__funcionario` (`fk_nome_func`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (51,'','Funcionario',10.00,10.00,'2017-06-10 23:29:46');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `ddd` int(2) unsigned NOT NULL,
  `telefone` int(9) NOT NULL,
  `nivel` int(1) unsigned DEFAULT '1',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `conta` decimal(10,2) DEFAULT NULL,
  `datacadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datamodificacao` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_2` (`cpf`),
  UNIQUE KEY `cpf_3` (`cpf`),
  UNIQUE KEY `cpf_4` (`cpf`),
  UNIQUE KEY `cpf_5` (`cpf`),
  UNIQUE KEY `cpf` (`cpf`,`email`),
  KEY `nivel` (`nivel`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (56,'Lucas','','lucsa@asdfsas.com',NULL,12,132131211,1,1,NULL,'2017-06-10 23:24:46','0000-00-00 00:00:00'),(57,'admin','11111111','admin@admin.com','d033e22ae348aeb5660fc2140aec35850c4da997',11,11111111,3,1,NULL,'2017-06-11 00:54:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'salao'
--

--
-- Dumping routines for database 'salao'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-11  1:38:27
