/*
SQLyog Community v10.12 
MySQL - 5.5.24-log : Database - pass
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pass` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pass`;

/*Table structure for table `identifiant` */

DROP TABLE IF EXISTS `identifiant`;

CREATE TABLE `identifiant` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `utilisateur_id` smallint(5) unsigned NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_identifiant_utilisateur_idx` (`utilisateur_id`),
  CONSTRAINT `fk_identifiant_utilisateur` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;

/*Data for the table `identifiant` */

insert  into `identifiant`(`id`,`utilisateur_id`,`libelle`,`contenu`) values (135,1,'Test ndewez ! ----- 2','9dU17cZY+HYQgIjIWPYsTDhRXIwWj3iK8ktEIAGfc+7U6iBLTcbw81erbInSuMTZ'),(136,1,'Test ndewez 2 ----- 2','');

/*Table structure for table `utilisateur` */

DROP TABLE IF EXISTS `utilisateur`;

CREATE TABLE `utilisateur` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `initpassword` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `utilisateur` */

insert  into `utilisateur`(`id`,`code`,`password`,`nom`,`prenom`,`actif`,`admin`,`salt`,`initpassword`) values (1,'ndewez','b0ccaf03c0d98387cc79116b00cec4c7e24b3ab1','DEWEZ','Nicolas',1,1,'64fc1dab045730a98cbd5f83bbb66fff',1),(2,'asalome','94d3b2002260da44661c8272f5b1d803f0767476','SALOME','Alexandre',1,1,'f3bec08f98e799dfa3ae37cd366d4ef0',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
