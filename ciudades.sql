CREATE DATABASE /*!32312 IF NOT EXISTS*/`capitales` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `capitales`;

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `ciudades`;

CREATE TABLE `CIUDADES` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CIUDAD` varchar(255) NOT NULL,
  `PAIS` varchar(255) NOT NULL,
  `CANTIDAD_HABITANTES` varchar(255)  NULL,
  `SUPERFICIE` varchar(255)  NULL,
  `TIENE_METRO` INT  NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `CIUDADES`(`CIUDAD`,`PAIS`,`CANTIDAD_HABITANTES`,`SUPERFICIE`,`TIENE_METRO`) 
values ('México D.F.', 'México', '555666' ,'23434.34' ,1),
('Barcelona', 'España', '444333', '1111.11', 0),
( 'Buenos Aires', 'Argentina' ,'888111', '333.33', 1),
( 'Medellín', 'Colombia', '999222', '888.88', 0),
( 'Lima', 'Perú','999111' ,'222.22', 0),
( 'Caracas', 'Venezuela', '111222', '111.11', 1),
('Santiago', 'Chile', '777666', '222.22', 1),
('Antigua', 'Guatemala', '444222', '877.33', 0),
('Quito', 'Ecuador' ,'333111', '999.11', 1),
('La Habana', 'Cuba' ,'111222', '333.11', 0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
