/*
SQLyog Ultimate v8.55 
MySQL - 5.5.24-log : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `documents` */

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `doc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `doc_title` varchar(150) NOT NULL,
  `doc_url_title` varchar(100) DEFAULT NULL,
  `doc_text` longtext NOT NULL,
  `parent_doc_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `documents` */

insert  into `documents`(`doc_id`,`doc_title`,`doc_url_title`,`doc_text`,`parent_doc_id`) values (1,'Intro to Speckcommerce','intro-to-speckcommerce','fdsafdsa',0),(2,'Getting strated Speckcommerce','getting-strated-speckcommerce','fdsafdsaf',1),(3,'Speck Catalog','speck-catalog','fdsafdsa',0),(4,'Speck Address','speck-sddress','fdsafdsa',0),(5,'Speck Cart','speck-cart','fdsafdsa',0),(6,'Speck Multisite','speck-multisite','fdsafdsa',0),(7,'Speck Catalog Example','speck-catalog-example','Speck Catalog Example',3),(8,'Speck Adress Example','speck-catalog-example','Speck Address Example',4);

/*Table structure for table `documents_linker` */

DROP TABLE IF EXISTS `documents_linker`;

CREATE TABLE `documents_linker` (
  `doc_linker_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `next_document_id` int(11) unsigned NOT NULL,
  `document_id` int(11) unsigned NOT NULL DEFAULT '1',
  `previous_document_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`doc_linker_id`),
  KEY `FK_documents_linker_next` (`next_document_id`),
  KEY `FK_documents_linker_previous` (`previous_document_id`),
  KEY `FK_documents_linker` (`document_id`),
  CONSTRAINT `FK_documents_linker` FOREIGN KEY (`document_id`) REFERENCES `documents` (`doc_id`),
  CONSTRAINT `FK_documents_linker_next` FOREIGN KEY (`next_document_id`) REFERENCES `documents` (`doc_id`),
  CONSTRAINT `FK_documents_linker_previous` FOREIGN KEY (`previous_document_id`) REFERENCES `documents` (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `documents_linker` */

insert  into `documents_linker`(`doc_linker_id`,`next_document_id`,`document_id`,`previous_document_id`) values (1,2,1,1),(2,3,2,1),(3,7,3,2),(4,8,4,7);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
