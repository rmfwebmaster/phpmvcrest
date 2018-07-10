CREATE DATABASE  IF NOT EXISTS `agendamvc` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `agendamvc`;
-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: agendamvc
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1-log

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
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contatos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `estadocivil` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (1,'Andiara Garcez ','andiaragarcezs@yahoo.com.br','(98) 98110-8730','Feminino','Solteiro(a)','2018-07-10 16:23:32','2018-07-10 16:23:32'),(2,'gabriela de sou','gabriela-messias@hotmail.com','(99) 98819-9589','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(4,'renata de souza','souzaderenata@gmail.com','(98) 99114-9186','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(5,'ivaldo martins ','ywaldomsousa@gmail.com','(98) 98438-7973','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(6,'romylson leal d','romylsonleal@hotmail.com','(99) 98157-6154','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(7,'claudivane vian','c.laudivane@hotmail.com','(98) 99179-4482','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(8,'elienir rodrigu','elienirsantos2013@gmail.com','(99) 99113-3263','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(9,'maria jeane da ','wyttemblima@hotmail.com','(99) 98115-0302','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(10,'daiane cristina','enaiad_cris2011@hotmail.com','(98) 99619-1312','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(12,'vandercléia gom','vandecleiagomes@bol.com.br','(98) 99602-3259','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(13,'joyce anne more','joyce37.moreira@gmail.com','(98) 98781-0967','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(14,'vanderleia gome','vandecleiagomes@bol.com.br','(98) 99602-3259','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(15,'walter alencar ','walteralencardesousa@hotmail.com','(99) 98810-1117','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(16,'wanderson ricar','ricardowanderson@hotmail.com','(99) 98833-2164','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(17,'whelton de melo','helton.melo12@hotmail.com','(99) 98202-8991','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(18,'edianne dos san','edyanne@r7.com','(99) 98149-0957','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(19,'jhyenne myrian ','jhyenne-barros88@hotmail.com','(99) 98828-8280','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(20,'neilde nascimen','neildealencar@gmail.com','(99) 98130-4767','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(21,'moisés pereira ','moises_jcn@hotmail.com','(99) 98158-7475','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(22,'danielle evange','danievangelima@gmail.com','(99) 98829-7254','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(23,'clemilda rodrig','cleprofessora@hotmail.com','(99) 98854-2132','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(24,'beatriz nascime','bia_alencar279@hotmail.com','(99) 98204-6726','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(25,'débora silva de','debora.s.oliveira@hotmail.com','(98) 98873-5577','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(26,'andreia da silv','andreias_batista@hotmail.com','(99) 98819-7924','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(27,'jucileide gomes','jucileidesony@hotmail.com','(99) 99987-3523','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(28,'auricelia de al','aurime@hotmail.com','(98) 98734-7455','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(29,'jean carlos sil','jeankarl1@yahoo.com.br','(98) 99973-4315','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(30,'luiz gonzaga re','jr_rezzo@hotmail.com','(81) 94101-8181','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(31,'samir aranha se','aranha.sam@gmail.com','(98) 98112-3040','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(32,'maria lucileena','lucilene.junco@hotmail.com','(99) 98436-0807','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(33,'leonardo bezerr','leobassy@hotmail.com','(98) 98156-6898','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(35,'joão pedro sous','joaopedro1.8@hotmail.com','(99) 98111-5987','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(36,'ozimo mendonca ','ozimogeo@hotmail.com','(98) 98256-6040','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(37,'cristiane silva','cristyane_rs@hotmail.com','(98) 98843-4768','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(38,'liolly arely ro','liolly_arely@hotmail.com','(99) 98802-6212','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(39,'maria rosangela','msrosangelasilva64@gmail.com','(99) 98181-8709','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(40,'guilherme henri','guilhermehms100@hotmail.com','(99) 98220-8008','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(41,'leticya lannucy','liolly_arely@hotmail.com','(99) 98819-7900','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(42,'ilmara francisc','ilmaramedeiros@yahoo.com.br','(99) 98842-4621','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(43,'lindalva fernan','lindavida02@gmail.com','(98) 98826-1290','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(44,'camilo tavares ','camilotavares.c@hotmail.com','(99) 98168-1693','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(45,'wecsley silva b','wecsley-park@hotmail.com','(99) 99649-9452','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(46,'antonio henriqu','hsampaio10@hotmail.com','(99) 98136-9044','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(47,'fernando sousa ','fssilva719@hotmail.com','(99) 99145-1125','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(48,'lucimary de ara','lucimary.prefeitura60@hotmail.com','(99) 99169-5973','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(49,'antonio de frei','freitasatleta@gmail.com','(98) 98891-5709','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(50,'silvana sousa m','silmilhomem@hotmail.com','(99) 98178-3647','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(51,'darcilene brito','darcylene_brito@hotmail.com','(98) 98864-7560','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(52,'fábio lima do n','fabionl23@gmail.com','(98) 98800-2821','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(53,'patricia sousa ','shantaully@hotmail.com','(99) 98842-2489','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(54,'joao mendes de ','j-mendes-filho@hotmail.com','(98) 99138-5231','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(55,'marcos fellipe ','marcosf123@hotmail.com','(99) 98118-9134','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(56,'helena gonçalve','lenokagn@hotmail.com','(98) 98835-8379','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(57,'mary de jesus p','mary.bleite@hotmail.com','(89) 98806-0436','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(58,'ernando silva b','ernando_barbosa@hotmail.com','(98) 98735-5807','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(59,'alessandra de j','alejoao2013@hotmail.com','(98) 99141-9332','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(60,'sueli ferreira ','suelibio07@hotmail.com','(99) 99112-3660','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(61,'raimunda  lúcia','raimunda-lucia@hotmail.com','(99) 99192-1087','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(62,'patricia kecian','patriciakecianne@hotmail.com','(98) 99177-3076','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(63,'enezio silva de','britoenzo@hotmail.com','(99) 98133-6631','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(64,'cleidiany silva','cleidianysilva28@hotmail.com','(99) 98197-4097','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(66,'evilson nogueir','evilsonlima@hotmail.com','(98) 98429-3494','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(67,'jose ribamar fe','ribamar_bjs@hotmail.com','(98) 98899-9621','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(68,'wilson soares d','wilsonbleite@hotmail.com','(89) 98802-8804','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(69,'nilce maria san','nordman-pi@hotmail.com','(89) 98807-6460','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(70,'iasmine neres d','iasmineespanhol@hotmail.com','(89) 98818-6588','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(71,'ingrid vanessa ','ingridnessa@hotmail.com','(98) 98812-9984','Feminino','Solteiro(a)','2018-07-10 14:23:09',NULL),(73,'candido gomes f','candidogomesferreira@gmail.com','(98) 98816-2700','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(74,'francisco leand','leandrosousa82@hotmail.com','(98) 98876-2687','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(75,'camila pires do','camilla_sousa2013@hotmail.com','(98) 98788-4844','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(76,'marcus vinicius','marcus2010_@hotmail.com','(99) 98158-9254','Masculino','Solteiro(a)','2018-07-10 14:23:09',NULL),(77,'jose  de  ribam','professorzequinha2010@hotmail.com','(99) 99146-7899','Masculino','Casado(a)','2018-07-10 14:23:09',NULL),(78,'brunna tavares ','brunna.tavares7@gmail.com','(99) 99122-2674','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(79,'sildenice melo ','sildenice_23@hotmail.com','(98) 98875-2050','Feminino','Casado(a)','2018-07-10 14:23:09',NULL),(81,'João André','joandre@gmail.com','(78) 95465-4564','Masculino','Casado(a)','2018-07-10 14:24:39',NULL),(82,'Jéssica Mourão','jemoura@gmail.com','(12) 34567-8645','Masculino','Casado(a)','2018-07-10 14:25:02',NULL),(84,'Matheus Silva','msmatheuspereira@gmail.com','(78) 78979-8789','Masculino','Solteiro(a)','2018-07-10 16:17:39',NULL),(85,'Felipe Timóteo','varex@superig.com.br','(78) 97897-9879','Masculino','Casado(a)','2018-07-10 16:19:58',NULL),(86,'Jefferson Sampaio','jeffersonsamp2008@gmail.com','(78) 94654-1354','Masculino','Casado(a)','2018-07-10 16:23:03',NULL),(87,'Ivaldete Diniz','ivaldiniz@gmail.com','(98) 98734-9539','Masculino','Casado(a)','2018-07-10 16:50:07','2018-07-10 16:50:07');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com.br','$2y$10$UnpxqYxpIGvQzHC2x3fQgeMvZnv7ehkGjB5YhJPuxGVkgxkC8C9gq');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'agendamvc'
--

--
-- Dumping routines for database 'agendamvc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-10 16:51:47
