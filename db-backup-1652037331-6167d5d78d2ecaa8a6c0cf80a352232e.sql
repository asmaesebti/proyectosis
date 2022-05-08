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
  `mode_paiment` varchar(20) NOT NULL DEFAULT 'nulo',
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis VALUES("45","2022-05-08","Duplicata","alfa","alfa","alfa","alfa","alfa","2022-05-12","2022-05-04","13.05","0.00","0.00","0.00","13.05","2022-05-26","nulo","2022-05-08 19:29:07"),
("55","2022-05-08","Autres","jjjjjj","jjjjjj","jjjjjj","jjjjjj","jjjjjj","2022-05-25","2022-05-24","54.08","0.00","0.00","0.00","54.08","2022-05-24","nulo","2022-05-08 20:31:24"),
("56","2022-05-08","Renouvellement","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","2022-05-18","2022-05-31","32.76","0.00","0.00","0.00","32.76","1970-01-01","nulo","2022-05-08 20:44:27"),
("57","2022-05-08","Renouvellement","alhamdulillahalhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","2022-06-01","2022-05-17","87.77","0.00","0.00","0.00","87.77","1970-01-01","nulo","2022-05-08 20:45:36"),
("58","2022-05-08","Renouvellement","polkij","polkij","polkij","polkij","polkij","2022-05-20","2022-05-19","23.54","3.00","5.00","0.00","15.54","1970-01-01","nulo","2022-05-08 21:10:58");



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
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis_copie VALUES("56","2022-05-08","Renouvellement","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","2022-05-18","2022-05-31","32.00","0.00","0.00","0.00","32.00","","nulo","2022-05-08 20:44:27"),
("57","2022-05-08","Renouvellement","alhamdulillahalhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","2022-06-01","2022-05-17","87.77","0.00","0.00","0.00","87.77","1970-01-01","nulo","2022-05-08 20:45:36"),
("58","2022-05-08","Renouvellement","polkij","polkij","polkij","polkij","polkij","2022-05-20","2022-05-19","23.54","3.00","5.00","0.00","15.54","1970-01-01","nulo","2022-05-08 21:10:58");



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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis_elimines VALUES("54","2022-05-08","Renouvellement","ffffffff","ffffffff","ffffffff","ffffffff","ffffffff","2022-05-25","2022-05-17","67.06","0.00","0.00","0.00","67.06","2022-05-14","nulo","2022-05-08 20:43:43");



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
("23.00","polkij","23.54","polkij","root@localhost","2022-05-08 21:14:20");



