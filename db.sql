
USE `smsmw_parcel`;

/*Table structure for table `tblbranches` */

DROP TABLE IF EXISTS `tblbranches`;

CREATE TABLE `tblbranches` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch` varchar(100) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tblbranches` */

insert  into `tblbranches`(`branch_id`,`branch`,`deleted`) values 
(1,'MZUZU',0),
(2,'BT',0);

/*Table structure for table `tblcharges` */

DROP TABLE IF EXISTS `tblcharges`;

CREATE TABLE `tblcharges` (
  `charge_id` int(11) NOT NULL AUTO_INCREMENT,
  `weight_from` decimal(15,4) DEFAULT NULL,
  `weight_to` decimal(15,4) DEFAULT NULL,
  `charge` decimal(15,4) DEFAULT NULL,
  `deleted` int(1) DEFAULT 0,
  PRIMARY KEY (`charge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tblcharges` */

insert  into `tblcharges`(`charge_id`,`weight_from`,`weight_to`,`charge`,`deleted`) values 
(1,1000.0000,5000.0000,40000.0000,0);

/*Table structure for table `tbldistricts` */

DROP TABLE IF EXISTS `tbldistricts`;

CREATE TABLE `tbldistricts` (
  `district` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`district`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbldistricts` */

insert  into `tbldistricts`(`district`) values 
('Balaka'),
('Blantyre'),
('Chikwawa'),
('Chiradzulu'),
('Chitipa'),
('Dedza'),
('Dowa'),
('Karonga'),
('Kasungu'),
('Likoma'),
('Lilongwe'),
('Machinga'),
('Mangochi'),
('Mchinji'),
('Mulanje'),
('Mwanza'),
('Mzimba'),
('Neno'),
('Nkhata Bay'),
('Nkhotakota'),
('Nsanje'),
('Ntcheu'),
('Ntchisi'),
('Phalombe'),
('Rumphi'),
('Salima'),
('Thyolo'),
('Zomba');

/*Table structure for table `tblevents` */

DROP TABLE IF EXISTS `tblevents`;

CREATE TABLE `tblevents` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `parcel_id` int(100) DEFAULT NULL,
  `event_date` timestamp NULL DEFAULT current_timestamp(),
  `location` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `desc` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL COMMENT '0-admin,1-other',
  PRIMARY KEY (`event_id`),
  KEY `username` (`parcel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tblevents` */

insert  into `tblevents`(`event_id`,`parcel_id`,`event_date`,`location`,`desc`,`status_id`) values 
(1,1,'2023-08-20 14:06:36','test','test cesc',6),
(2,1,'2023-08-20 14:07:34','test','test',3);

/*Table structure for table `tblmonths` */

DROP TABLE IF EXISTS `tblmonths`;

CREATE TABLE `tblmonths` (
  `month` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`month`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tblmonths` */

insert  into `tblmonths`(`month`) values 
('April'),
('August'),
('December'),
('February'),
('January'),
('July'),
('June'),
('March'),
('May'),
('November'),
('October'),
('September');

/*Table structure for table `tblpackage_types` */

DROP TABLE IF EXISTS `tblpackage_types`;

CREATE TABLE `tblpackage_types` (
  `package_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_type` varchar(100) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`package_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tblpackage_types` */

insert  into `tblpackage_types`(`package_type_id`,`package_type`,`deleted`) values 
(1,'FLUID',0);

/*Table structure for table `tblparcels` */

DROP TABLE IF EXISTS `tblparcels`;

CREATE TABLE `tblparcels` (
  `parcel_id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) DEFAULT NULL,
  `sphone` varchar(100) DEFAULT NULL,
  `semail` varchar(100) DEFAULT NULL,
  `saddress` varchar(250) DEFAULT NULL,
  `rname` varchar(100) DEFAULT NULL,
  `rphone` varchar(100) DEFAULT NULL,
  `remail` varchar(100) DEFAULT NULL,
  `raddress` varchar(250) DEFAULT NULL,
  `rlocation` varchar(250) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `edd` datetime DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp(),
  `date_added` datetime DEFAULT NULL,
  `parcel_desc` text DEFAULT NULL,
  `charge` double DEFAULT NULL,
  `package_type_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `sbranch_id` int(11) DEFAULT NULL,
  `rbranch_id` int(11) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  `tracking_code` varchar(100) DEFAULT NULL,
  `paid` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`parcel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tblparcels` */

insert  into `tblparcels`(`parcel_id`,`sname`,`sphone`,`semail`,`saddress`,`rname`,`rphone`,`remail`,`raddress`,`rlocation`,`weight`,`edd`,`status_id`,`last_updated`,`date_added`,`parcel_desc`,`charge`,`package_type_id`,`service_id`,`sbranch_id`,`rbranch_id`,`deleted`,`tracking_code`,`paid`) values 
(1,'Brian Nkhata','0888015904','briannkhata@gmail.com','Blantyre','Brian NkhataJr','08880159045','briannkha5ta@gmail.com','Blantyrebbbb','vbbbbbbbbbbbbbb','10000','2023-08-20 00:00:00',3,'2023-08-20 10:06:23',NULL,'dddddddddddddddd',900000,1,1,1,1,0,'  qhe6G',1);

/*Table structure for table `tblpayments` */

DROP TABLE IF EXISTS `tblpayments`;

CREATE TABLE `tblpayments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parcel_id` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `charge` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tblpayments` */

insert  into `tblpayments`(`payment_id`,`parcel_id`,`added_by`,`payment_date`,`charge`) values 
(2,1,6,'2023-08-20 12:03:47',900000.00);

/*Table structure for table `tblregions` */

DROP TABLE IF EXISTS `tblregions`;

CREATE TABLE `tblregions` (
  `region` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tblregions` */

/*Table structure for table `tblservices` */

DROP TABLE IF EXISTS `tblservices`;

CREATE TABLE `tblservices` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(100) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tblservices` */

insert  into `tblservices`(`service_id`,`service`,`deleted`) values 
(1,'SAME DAY DELIVERY',0);

/*Table structure for table `tblsettings` */

DROP TABLE IF EXISTS `tblsettings`;

CREATE TABLE `tblsettings` (
  `id` int(11) NOT NULL,
  `system` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `company` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `alt_phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tblsettings` */

insert  into `tblsettings`(`id`,`system`,`company`,`address`,`email`,`phone`,`alt_phone`) values 
(1,'Parcel Tracker','smart parcel Ltd','Blantyre','briannkhata@gmail.com','0888015904','0888015904');

/*Table structure for table `tblstatuses` */

DROP TABLE IF EXISTS `tblstatuses`;

CREATE TABLE `tblstatuses` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(100) DEFAULT NULL,
  `sms` int(1) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `tblstatuses` */

insert  into `tblstatuses`(`status_id`,`status_name`,`sms`,`deleted`) values 
(1,'Pending-Pickup',1,0),
(2,'In-Transit',1,0),
(3,'Arrived at Hub',1,0),
(4,'Out for Delivery',1,0),
(5,'Delayed',1,0),
(6,'Delivered',1,0),
(7,'Failed Delivery Attempt',1,0),
(8,'Return to Sender',1,0),
(9,'Pending Customs Clearance',1,0),
(10,'Customs Hold',1,0),
(11,'Held at Facility',1,0),
(12,'Lost or Damaged',1,0);

/*Table structure for table `tblusers` */

DROP TABLE IF EXISTS `tblusers`;

CREATE TABLE `tblusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `role` varchar(100) DEFAULT '1',
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `deleted` int(1) DEFAULT 0,
  `gender` varchar(10) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `tblusers` */

insert  into `tblusers`(`user_id`,`name`,`phone`,`username`,`password`,`role`,`email`,`deleted`,`gender`,`deleted_by`,`date_deleted`,`date_added`,`added_by`,`address`,`branch_id`) values 
(6,'Brian','Nkhata','admin','admin','admin','da1Ms.jpg',1,NULL,NULL,NULL,NULL,NULL,NULL,1),
(8,'Jayloss','Nkhata','jay','baba327d241746ee0829e7e88117d4d5','user','BvITV.jpg',1,NULL,NULL,NULL,NULL,NULL,NULL,1),
(11,'Crevrand','Kaondo','crev55','67e96f7e5ae084529535e5e346c1ef16','user','C5TFc.jpg',1,NULL,NULL,NULL,NULL,NULL,NULL,1),
(12,'Brian Nkhata','0888015904','bnkhata','833f917839d372edcd9bef1d8cada47b','admin','briannkhata@gmail.com',0,'male',NULL,NULL,NULL,NULL,NULL,1),
(13,'Chisomo Nkhata','0888015904','cnkhata','833f917839d372edcd9bef1d8cada47b','admin','briannkhata@gmail.com',0,'female',NULL,NULL,NULL,NULL,'Blantyre, India',1),
(14,'Jayloss Nkhata','0995548992','jnkhata','d41d8cd98f00b204e9800998ecf8427e','client','',0,'male',NULL,NULL,'2023-08-17 20:44:15',NULL,'Box 10, Blantyre',1),
(15,'Brian Nkhata','0888015904','','d41d8cd98f00b204e9800998ecf8427e','sender','briannkhata@gmail.com',0,NULL,NULL,NULL,'2023-08-17 21:11:23',NULL,'Blantyre',1),
(16,'Brian Nkhata','0888015904','0888015904','61972f9d46e392ba0442bd87fc736596','sender','briannkhata@gmail.com',0,NULL,NULL,NULL,'2023-08-18 11:59:18',NULL,'Blantyre',1),
(17,'Brian Nkhata Jr','08880159047','08880159047','e87297da674afad65b4d9c6f63cd3147','sender','briannkhata@gmail.com',0,NULL,NULL,NULL,'2023-08-18 11:59:38',NULL,'Blantyre',1),
(18,'Brian Nkhata','0888015904','0888015904','61972f9d46e392ba0442bd87fc736596','sender','briannkhata@gmail.com',0,'male',NULL,NULL,'2023-08-18 12:06:50',NULL,'Blantyre',1),
(19,'Brian Nkhatadddddddddddddddd','0888015904','0888015904','d41d8cd98f00b204e9800998ecf8427e','admin','briannkhata@gmail.com',0,'male',NULL,NULL,'2023-08-18 12:07:13',NULL,'Blantyre',1);

/*Table structure for table `tblyears` */

DROP TABLE IF EXISTS `tblyears`;

CREATE TABLE `tblyears` (
  `year` varchar(4) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tblyears` */

insert  into `tblyears`(`year`) values 
('2001'),
('2002'),
('2003'),
('2004'),
('2005'),
('2006'),
('2007'),
('2008'),
('2009'),
('2010'),
('2011'),
('2012'),
('2013'),
('2014'),
('2015'),
('2016'),
('2017'),
('2018'),
('2019'),
('2020'),
('2021'),
('2022'),
('2023'),
('2024'),
('2025'),
('2026'),
('2027'),
('2028'),
('2029'),
('2030');
