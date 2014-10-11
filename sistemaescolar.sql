/*
SQLyog Ultimate v9.63 
MySQL - 5.6.16 : Database - sistemaescolar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sistemaescolar` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sistemaescolar`;

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `id_ag` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ag`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_alumno` (`id_alumno`),
  CONSTRAINT `id_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `personascontrol` (`IdPersona`),
  CONSTRAINT `id_grupo` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `alumno_grupo` */

LOCK TABLES `alumno_grupo` WRITE;

insert  into `alumno_grupo`(`id_ag`,`id_alumno`,`id_grupo`) values (12,14,1),(13,33,1),(14,35,2),(15,36,3);

UNLOCK TABLES;

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `avatar` varchar(25) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

LOCK TABLES `grupo` WRITE;

insert  into `grupo`(`id_grupo`,`nombre`,`avatar`,`orden`,`estatus`) values (1,'71','uno',1,1),(2,'72','uno',2,1),(3,'73','uno',3,1);

UNLOCK TABLES;

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id_mm` int(11) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mm`),
  KEY `id_maestro` (`id_maestro`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `id_maestro` FOREIGN KEY (`id_maestro`) REFERENCES `personascontrol` (`IdPersona`),
  CONSTRAINT `id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

LOCK TABLES `maestro_materia` WRITE;

insert  into `maestro_materia`(`id_mm`,`id_maestro`,`id_materia`) values (1,32,5),(2,18,6),(3,32,6),(4,18,4),(5,32,3),(6,34,6),(7,34,3);

UNLOCK TABLES;

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `avatar` varchar(30) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

LOCK TABLES `materia` WRITE;

insert  into `materia`(`id_materia`,`nombre`,`avatar`,`orden`,`estatus`) values (1,'Español','uno',1,1),(2,'Matematicas','uno',2,1),(3,'Programacion','uno',3,1),(4,'Estadisticas','uno',1,1),(5,'Redes','uno',2,1),(6,'Diseño Web','uno',3,1);

UNLOCK TABLES;

/*Table structure for table `personascontrol` */

DROP TABLE IF EXISTS `personascontrol`;

CREATE TABLE `personascontrol` (
  `IdPersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `Apat` varchar(100) DEFAULT NULL,
  `Amat` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `NumExterior` int(10) DEFAULT NULL,
  `NumInterior` int(10) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `correoe` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `personascontrol` */

LOCK TABLES `personascontrol` WRITE;

insert  into `personascontrol`(`IdPersona`,`nombre`,`Apat`,`Amat`,`telefono`,`calle`,`NumExterior`,`NumInterior`,`colonia`,`municipio`,`estado`,`cp`,`correoe`,`usuario`,`password`,`nivel`,`estatus`) values (1,'Armando','Reyes','Rodriguez','7229737378','Insurgentes',16,16,'Sta Maria','Lerma','Mexico','52050','arman@hotmail.com','armin','12345','1','1'),(14,'Josue','Morales','Valle','7223534517','matamoros',74,74,'Reforma','Toluca','Mexico','52345','josue@hotmail.com','josue','12345','3','1'),(18,'Mario','Gonzalez','Rodriguez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'mario','12345','2','1'),(32,'Gotze','Palermo','Mazutch',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'gotze','12345','2','1'),(33,'Ana','Matias','Hernandez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ana','12345','3','1'),(34,'Carlos','Benavides','Herrera',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'carlos','12345','2','1'),(35,'Maria','Medrano','Gonzalez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'maria','12345','3','1'),(36,'Manuel','Franco','Martinez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'manuel','12345','3','1'),(37,'Fabiola','Franco','Flores',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'fabiola','12345','3','1'),(38,'Abiud','Vazquez','Pineda',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'abiud','12345','3','1'),(39,'Aron','Martinez','Hernandez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'aron','12345','3','1');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
