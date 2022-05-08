DROP TABLE IF EXISTS pr;

CREATE TABLE `pr` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pr VALUES("30"),
("130"),
("230"),
("1230");



DROP TABLE IF EXISTS proyectosis;

CREATE TABLE `proyectosis` (
  `recu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_hoy` date DEFAULT NULL,
  `letype` varchar(50) NOT NULL,
  `attestation` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `produit` varchar(20) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL DEFAULT 'nulo',
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis VALUES("1","2022-05-08","Resiliation","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","2022-05-24","2022-05-24","1234.00","23.00","4.00","0.00","1207.00","2022-05-17","nulo","2022-05-08 21:39:06"),
("4","2022-05-10","Duplicata","defrtg","defrtg","defrtg","defrtg","defrtg","2022-05-21","2022-05-17","234.65","23.54","4.00","0.00","207.11","2022-06-05","nulo","2022-05-08 22:10:34");



DROP TABLE IF EXISTS proyectosis_copie;

CREATE TABLE `proyectosis_copie` (
  `recu` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hoy` date DEFAULT NULL,
  `letype` varchar(50) NOT NULL,
  `attestation` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `produit` varchar(20) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS proyectosis_elimines;

CREATE TABLE `proyectosis_elimines` (
  `recu` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hoy` date DEFAULT NULL,
  `letype` varchar(50) NOT NULL,
  `attestation` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `produit` varchar(20) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis_elimines VALUES("3","2022-05-08","Changement vehicule","mohammed","mohammed","mohammed","mohammed","mohammed","2022-05-21","2022-05-24","23.00","2.34","0.00","0.00","20.66","2022-05-18","nulo","2022-05-08 22:12:17"),
("2","2022-05-08","Duplicata","sebti","sebti","sebti","sebti","sebti","2022-05-19","2022-05-18","234.54","23.00","200.00","0.00","11.54","2022-05-18","nulo","2022-05-08 22:12:21");



DROP TABLE IF EXISTS tarif_actualise;

CREATE TABLE `tarif_actualise` (
  `anterieur_prix` decimal(10,2) DEFAULT NULL,
  `anterieur_assure` varchar(50) DEFAULT NULL,
  `nouveau_prix` decimal(10,2) DEFAULT NULL,
  `nouveau_assure` varchar(50) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `cree_le` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tarif_actualise VALUES("32.00","alhamdulillah","32.76","alhamdulillah","root@localhost","2022-05-08 20:45:55"),
("87.00","alhamdulillah","87.77","alhamdulillah","root@localhost","2022-05-08 21:03:31"),
("23.00","polkij","23.00","polkij","root@localhost","2022-05-08 21:13:39"),
("23.00","polkij","23.00","polkij","root@localhost","2022-05-08 21:13:55"),
("23.00","polkij","23.54","polkij","root@localhost","2022-05-08 21:14:20"),
("32.76","alhamdulillah","32.76","alhamdulillah","root@localhost","2022-05-08 21:30:52"),
("23.54","polkij","23.54","polkij","root@localhost","2022-05-08 21:31:01"),
("23.54","polkij","20000.65","polkij","root@localhost","2022-05-08 21:31:16"),
("345.00","alhamdulillah","345.00","alhamdulillah","root@localhost","2022-05-08 21:34:37"),
("345.00","alhamdulillah","345.87","alhamdulillah","root@localhost","2022-05-08 21:34:47"),
("345.87","alhamdulillah","345.87","alhamdulillah","root@localhost","2022-05-08 21:35:04"),
("345.87","alhamdulillah","2345.65","alhamdulillah","root@localhost","2022-05-08 21:37:42"),
("34567.00","alhamdulillah","34567.76","alhamdulillah","root@localhost","2022-05-08 21:40:09"),
("34567.76","alhamdulillah","34567.76","alhamdulillah","root@localhost","2022-05-08 21:43:18"),
("34567.76","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-08 21:43:29"),
("234.00","sebti","234.54","sebti","root@localhost","2022-05-08 21:56:35"),
("234.54","sebti","234.54","sebti","root@localhost","2022-05-08 21:56:53"),
("23.00","mohammed","23.00","mohammed","root@localhost","2022-05-08 21:58:25"),
("23.00","mohammed","23.00","mohammed","root@localhost","2022-05-08 21:58:38"),
("12.34","defrtg","234.65","defrtg","root@localhost","2022-05-08 22:11:03"),
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-08 22:11:17");



