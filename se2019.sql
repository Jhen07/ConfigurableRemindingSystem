/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.10 : Database - webapp2projec
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`webapp2projec` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `webapp2projec`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `adminid` int(50) NOT NULL AUTO_INCREMENT,
  `useradmin` varchar(20) DEFAULT NULL,
  `passadmin` varchar(20) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`adminid`,`useradmin`,`passadmin`,`lastname`,`firstname`,`middlename`,`position`,`contact`,`emailaddress`) values (1,'quelly','ate','Salumbides','Racquel',NULL,'Class Coordinator',NULL,NULL),(2,'mai','alfie','Macababbad','Alfie Mae','Alvear','SSReCom','09752985917',NULL);

/*Table structure for table `attendanceform` */

DROP TABLE IF EXISTS `attendanceform`;

CREATE TABLE `attendanceform` (
  `bid` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `churchid` varchar(50) DEFAULT NULL,
  `dateattend` varchar(20) DEFAULT NULL,
  `typeofservice` varchar(150) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `localattended` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `attendanceform` */

insert  into `attendanceform`(`bid`,`name`,`churchid`,`dateattend`,`typeofservice`,`batch`,`localattended`) values (1,'Rica','Bioflu','March 23, 2018','Joanna','7:30pm','Central Apalit'),(2,'Kc','Alaxan','March 23, 2018','Alfie','7:30pm','Masinag'),(3,'Cha','Antibiotics','3/24/18','Mai','2:30pm','apalit'),(4,'Bae','Antibiotics','Jan 12','Worship Service','4:30am','Kath'),(5,'Cath','234','March 23, 2018','WS','2:30pm','Masina'),(6,'Mhags','U32438457','March 23, 2018','Worship Service','2:30pm','Masinag'),(7,'Louie','1234lj','March 23, 2018','ws','2:30pm','Masinag');

/*Table structure for table `staffinfo` */

DROP TABLE IF EXISTS `staffinfo`;

CREATE TABLE `staffinfo` (
  `studentid` int(20) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `dateofbaptism` varchar(50) DEFAULT NULL,
  `dateofbirth` varchar(50) DEFAULT NULL,
  `locale` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `churchid` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image_text` text,
  PRIMARY KEY (`studentid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `staffinfo` */

insert  into `staffinfo`(`studentid`,`lastname`,`firstname`,`middlename`,`dateofbaptism`,`dateofbirth`,`locale`,`address`,`emailaddress`,`contact`,`churchid`,`username`,`password`,`image`,`image_text`) values (8,'Maaba','Jennifer','Manabat','August 07, 2009','May 12, 1993','Masinag Rizal','#0354 purok XII Sitio baybay sapa Ignacio Compound,brgy. Mayamot, antipolo city rizal','maabajennifer@gmail.com','09482915448','00907095','jhen','maaba',NULL,NULL),(9,'Macababbad','Alfie Mae','Alvear','8/19/2011','5/7/1997','San Isidro, South, MM','Pandacan, Manila','alfeypensaber@gmail.com','09752985917','11110679','jtfj','jtgjr',NULL,NULL),(14,'Panganiban','Analiz','Danuya','8/22/2014','9/19/1998','Zaragosa','269 Zaragosa St Tondo Manila','panganibanadp@gmail.com','09434142418','83758575','n','nf',NULL,NULL),(15,'Ros','Kathlene','Cacayuran','7/25/2014','8/23/1997','Apalit','Apalit, Pampanga','leneros@yahoo.com','09463298705','83482348','fgh','fnf',NULL,NULL),(16,'Salumbides','Racquel','sacramento','6/25/2004','7/5/1982','central Apalit','san simon apalit','quelly0582@yahoo.com','09073734673','83428737','fghg','ghh',NULL,NULL),(17,'Usi','Joanna Marie','Borlain','10/20/2017','10/29/1996','central Apalit','Caldera Sulipan Apalit Pampanga','beachgirldontcry@gmail.com','09208136889','93498333','fgh','jfgj',NULL,NULL),(20,'salumbides','racquel','sacramento','june 25','july 5','Apalit','san simon apalit','quelly0582@yahoo.com','09073734673','83477344','quely','ate',NULL,NULL),(22,'delacuesta','shmhia','obsequias','1/20/11','1/1/97','area c','area c cavite','delacuestashmhia@gmail.com','09355896864','78437834','shimmy','qwerty12345',NULL,NULL),(25,'maaba','jhen','h','june 25,2004','july, 5 ','apalit pampanga','Apalit, Pampanga','jhen@gmail.com','09073734673','churchid','jhen','123',NULL,NULL),(26,'no','no','no','August 07, 2009','12/12/12','central Apalit','san simon apalit','christineqlarazo27@gmail.com','09364491302','churchid','no','no',NULL,NULL);

/*Table structure for table `studentinfo` */

DROP TABLE IF EXISTS `studentinfo`;

CREATE TABLE `studentinfo` (
  `studentid` int(20) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `dateofbaptism` varchar(50) DEFAULT NULL,
  `dateofbirth` varchar(50) DEFAULT NULL,
  `locale` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `churchid` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image_text` text,
  PRIMARY KEY (`studentid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Data for the table `studentinfo` */

insert  into `studentinfo`(`studentid`,`lastname`,`firstname`,`middlename`,`dateofbaptism`,`dateofbirth`,`locale`,`address`,`emailaddress`,`contact`,`churchid`,`username`,`password`,`image`,`image_text`) values (1,'Usi','Marie','Borlain','10/20/2017','10/29/1996','central Apalit','Caldera Sulipan Apalit Pampanga','beachgirldontcry@gmail.com','09208136889','93498333','fgh','fgh',NULL,NULL),(2,'Badiable','Kayceelyn','','9/23/2016','9/16/1998','','','','09169268209','03984556','34','34',NULL,NULL),(4,'Buhay','Stephen','Antonio','2/19/2015','9/3/1997','central Apalit','Apalit, Pampanga','buhaystephen19@gmail.com','09278250435','83475822','67','67',NULL,NULL),(6,'Domingo','Jamaica','Caratay','5/22/2015','11/6/1997','Rosemoor','Tibagan, San Miguel, Bulacan','jcady621@gmail.com','09367641872','18274765','787','88',NULL,NULL),(7,'Larazo','Christine','Quito','5/22/2015','1/27/1995','Duhat, LBMR','Pila, Laguna','christineqlarazo27@gmail.com','09159198567','11546567','657','657',NULL,NULL),(8,'Maaba','Jennifer','Manabat','August 07, 2009','May 12, 1993','Masinag Rizal','#0354 purok XII Sitio baybay sapa Ignacio Compound,brgy. Mayamot, antipolo city rizal','maabajennifer@gmail.com','09482915448','00907095','jhen','maaba',NULL,NULL),(9,'Macababbad','Alfie Mae','Alvear','8/19/2011','5/7/1997','San Isidro, South, MM','Pandacan, Manila','alfeypensaber@gmail.com','09752985917','11110679','jtfj','jtgjr',NULL,NULL),(10,'Macas','Rica Marie','Lamban','5/16/2013','4/16/1998','Calinan, Davao City','Cadalian Baguio District Davao City','RicaaMariee@gmail.com','09129752739','11307245','ytj','ty',NULL,NULL),(11,'Mercado','Mercado','Obera','11/1/2002','4/29/1985','Mercado','0690 Mercado Looban Hagonoy, Bulacan','mhermercado17@gmail.com','09072196524','92834849','tj','httt',NULL,NULL),(12,'Monteza','John','Arcita','2/13/2013','6/6/1997','Sipalay City','Sipalay City Negros Occidental','johnmonteza13@yahoo.com','09303730400','93248324','ngn','h',NULL,NULL),(13,'Moquia','Jay Anthony','lopez','2/17/2012','7/8/1996','area-g','molino homes 2,salitran III, dasmarinas cavite','jylpzm@gmail.com','09063601495','83284774','nfgn','tn',NULL,NULL),(14,'Panganiban','Analiz','Danuya','8/22/2014','9/19/1998','Zaragosa','269 Zaragosa St Tondo Manila','panganibanadp@gmail.com','09434142418','83758575','n','nf',NULL,NULL),(15,'Ros','Kathlene','Cacayuran','7/25/2014','8/23/1997','Apalit','Apalit, Pampanga','leneros@yahoo.com','09463298705','83482348','fgh','fnf',NULL,NULL),(16,'Salumbides','Racquel','sacramento','6/25/2004','7/5/1982','central Apalit','san simon apalit','quelly0582@yahoo.com','09073734673','83428737','fghg','ghh',NULL,NULL),(17,'Usi','Joanna Marie','Borlain','10/20/2017','10/29/1996','central Apalit','Caldera Sulipan Apalit Pampanga','beachgirldontcry@gmail.com','09208136889','93498333','fgh','jfgj',NULL,NULL),(20,'salumbides','racquel','sacramento','june 25','july 5','Apalit','san simon apalit','quelly0582@yahoo.com','09073734673','83477344','quely','ate',NULL,NULL),(22,'delacuesta','shmhia','obsequias','1/20/11','1/1/97','area c','area c cavite','delacuestashmhia@gmail.com','09355896864','78437834','shimmy','qwerty12345',NULL,NULL),(25,'Usi','Marie','Borlain','10/20/2017','10/29/1996','central Apalit','Caldera Sulipan Apalit Pampanga','beachgirldontcry@gmail.com','09208136889','93498333','fgh','fgh',NULL,NULL),(26,'na','nana','na','june 25,4004','July 14, 1989','Zaragosa','22 rosas street Bella Subd.Brgy.Sala Cabuyao,Laguna','','09073734676','Zaragosa','na','na',NULL,NULL),(27,'Moquia','Jay','M','june 25,2004','July 14, 198','Duhat, LBMR','Laguna','jay@moquia','09364491302','churchid','jay','jay',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
