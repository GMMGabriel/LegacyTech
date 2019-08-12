-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_legacytech
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `dataNasc` varchar(10) NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `senha` varchar(22) NOT NULL,
  `numero` varchar(9) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(55) NOT NULL,
  `bairro` varchar(55) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `qtdCompras` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cliente`
--

LOCK TABLES `tbl_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_cliente` DISABLE KEYS */;
INSERT INTO `tbl_cliente` VALUES (1,'Gabriel','de Melo Marcondes','gabriel-santos1313@hotmail.com','500.695.508-24','13/10/1999','M','(11)97374-7568','123','192','06608-420','Rua João Longo','Jardim Rosa Emília','Jandira','São Paulo',0),(5,'Joyce','Andrade Sacramento','joy_andrade11@hotmail.com','482.075.705-30','03/09/1998','F','','jasgmm200','229','06608-420','Rua João Longo','Jardim Rosa Emília','Jandira','São Paulo',0),(6,'Luiz','Bezerra da Silva','luiz@gmail.com','519.851.651-40','05/11/1992','M','','luiz100','148','61591-326','Rua das Amélias Amarelas','Jardim das Camélias Vermelhas','Lapa','Parana',0),(7,'Fernanda','Lima','fernandal@hotmail.com','651.594.951-49','04/11/1985','F','','fernanda200','200','25191-561','Av. Rocha Pedreira','Parque Lagoas','Nevada','Espirito Santo',0),(9,'Maria','Melo','cessagable@hotmail.com','162.909.518-40','08/12/1971','F','','gb1234','192','06608-420','Rua João Longo','Jardim Rosa Emília','Jandira','São Paulo',0),(10,'Maria','da Conceição Melo','cessagable@hotmail.comn','162.909.518-41','08/12/1971','F','','123','192','06608-420','Rua João Longo','Jardim Rosa Emília','Jandira','São Paulo',0),(11,'Zé','Assunção','ze@hotmail.com','519.841.651-32','04/08/1980','M','','ze100','345','65489-841','Luzes amarelas','Jordania','Gloripa','Goiás',0),(12,'Fulana','da Silva','fulana@gmail.com','516.543.139-65','20/07/1993','F','(11)91231-3564','da','354','61264-861','Fernandes de Souza','Parque Noronha','Pitrolhos','Minas Gerais',0);
/*!40000 ALTER TABLE `tbl_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fale_conosco`
--

DROP TABLE IF EXISTS `tbl_fale_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fale_conosco` (
  `idFaleConosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(65) NOT NULL,
  `email` varchar(55) NOT NULL,
  `assunto` varchar(65) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`idFaleConosco`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fale_conosco`
--

LOCK TABLES `tbl_fale_conosco` WRITE;
/*!40000 ALTER TABLE `tbl_fale_conosco` DISABLE KEYS */;
INSERT INTO `tbl_fale_conosco` VALUES (1,'Gabriel','de Melo Marcondes','gabriel-santos1313@hotmail.com','Crítica construtiva','Muito bom!'),(3,'Gabriel','de Melo Marcondes','gabriel-santos1313@hotmail.com','Assunto não informado','Gostei bastante! Vocês estão de parabéns!'),(4,'Gabriel','de Melo Marcondes','gabriel-santos1313@hotmail.com','Assunto não informado','Não sei'),(5,'Gabriel','de Melo Marcondes','gabriel-santos1313@hotmail.com','Teste','Testando para ver se está tudo certo.');
/*!40000 ALTER TABLE `tbl_fale_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_funcionario`
--

DROP TABLE IF EXISTS `tbl_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(65) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(65) NOT NULL,
  `senha` varchar(22) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_funcionario`
--

LOCK TABLES `tbl_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_funcionario` DISABLE KEYS */;
INSERT INTO `tbl_funcionario` VALUES (1,'Admin','Admin','555.555.555-55','admin@gmail.com','admin',1);
/*!40000 ALTER TABLE `tbl_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produtos`
--

DROP TABLE IF EXISTS `tbl_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `preco` float NOT NULL,
  `qtdVendidos` int(11) NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produtos`
--

LOCK TABLES `tbl_produtos` WRITE;
/*!40000 ALTER TABLE `tbl_produtos` DISABLE KEYS */;
INSERT INTO `tbl_produtos` VALUES (1,'imagens/notebook_samsung.png','Notebook samsung preto 1 terabyte 16GB RAM placa de vídeo 2GB',1800,0),(2,'imagens/wireless_mouse_hp.png','Mouse HP wireless vermelho',45,0),(3,'imagens/mouse_pad_extreme_gaming.png','MousePad Extreme Gaming preto e vermelho',15,0),(4,'imagens/teclado_sweda.png','Teclado Sweda preto com teclado numérico',50,0),(5,'imagens/notebook_asus.png','Notebook ASUS branco e preto 1 terabyte 8GB RAM placa de vídeo 2GB',1500,0);
/*!40000 ALTER TABLE `tbl_produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-11 21:30:47
