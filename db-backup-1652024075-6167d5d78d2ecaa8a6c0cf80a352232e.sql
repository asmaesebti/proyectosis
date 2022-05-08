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
  `autre` varchar(100) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis VALUES("27","2022-05-18","Changement vehicule","dssaaa","ddfff","dssaaa","dssaaa","ffff","2022-05-26","2022-05-24","0.00","0.00","0.00","","0.00","2022-05-29","dssaaa","2022-05-06 22:46:31"),
("32","2022-05-08","Duplicata","mohammed","mohammed","mohammed","mohammed","mohammed sebti","2022-05-19","2022-05-25","244.89","2.00","12.00","","230.89","2022-05-27","mohammed","2022-05-08 16:49:13");



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
  `autre` varchar(100) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis_copie VALUES("24","2022-05-04","Affaire nouvelle","dssaaa","100.2020.000121","dssaaa","dssaaa","ahmed","2022-05-24","2022-05-18","12.00","2.00","4.00","","6.00","2022-05-28","dssaaa","2022-05-08 16:48:16"),
("25","2022-05-09","Renouvellement","dssaaa","aassss","dssaaa","dssaaa","sssss","2022-05-03","2022-05-10","14.00","0.00","0.00","","14.00","2022-05-24","dssaaa","2022-05-08 16:48:16"),
("26","2022-05-10","Renouvellement","dssaaa","aassss","dssaaa","dssaaa","sssss","2022-05-03","2022-05-10","14.00","0.00","0.00","","14.00","2022-05-17","dssaaa","2022-05-08 16:48:16"),
("27","2022-05-18","Changement vehicule","dssaaa","ddfff","dssaaa","dssaaa","ffff","2022-05-26","2022-05-24","22.00","0.00","0.00","","22.00","2022-05-29","dssaaa","2022-05-08 16:48:16"),
("28","2022-05-10","Changement vehicule","ggggg","hhhh","hhhh","hhhhh","hhhhh","2022-05-14","2022-05-29","123.00","0.00","0.00","","123.00","2022-05-17","jjjjj","2022-05-08 16:48:16"),
("32","2022-05-08","Duplicata","mohammed","mohammed","mohammed","mohammed","mohammed","2022-05-19","2022-05-25","44.00","2.00","12.00","","30.00","2022-05-27","mohammed","2022-05-08 16:49:13");



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
  `autre` varchar(100) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis_elimines VALUES("28","2022-05-10","Changement vehicule","ggggg","hhhh","hhhh","hhhhh","hhhhh","2022-05-14","2022-05-29","123.00","0.00","0.00","","123.00","2022-05-17","jjjjj","2022-05-08 17:20:06"),
("31","2022-05-07","Changement vehicule","ddd","ddd","ddd","dd","dd","2099-03-03","2022-05-07","12.00","2.00","3.00","","7.00","2022-05-07","dd","2022-05-08 17:20:29"),
("24","2022-05-04","Affaire nouvelle","dssaaa","100.2020.000121","dssaaa","dssaaa","ahmed ali","2022-05-24","2022-05-18","1332.45","2.00","4.00","","1326.45","2022-05-28","dssaaa","2022-05-08 17:20:33"),
("25","2022-05-09","Renouvellement","dssaaa","aassss","dssaaa","dssaaa","sssss","2022-05-03","2022-05-10","14.00","0.00","0.00","","14.00","2022-05-24","dssaaa","2022-05-08 17:20:37"),
("26","2022-05-10","Renouvellement","dssaaa","aassss","dssaaa","dssaaa","sssss","2022-05-03","2022-05-10","14.00","0.00","0.00","","14.00","2022-05-17","dssaaa","2022-05-08 17:28:05");



DROP TABLE IF EXISTS tarif_actualise;

CREATE TABLE `tarif_actualise` (
  `anterieur_prix` decimal(10,2) DEFAULT NULL,
  `anterieur_assure` varchar(50) DEFAULT NULL,
  `nouveau_prix` decimal(10,2) DEFAULT NULL,
  `nouveau_assure` varchar(50) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `cree_le` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tarif_actualise VALUES("12.00","ahmed","1332.00","ahmed ali","root@localhost","2022-05-08 17:02:27"),
("1332.00","ahmed ali","1332.45","ahmed ali","root@localhost","2022-05-08 17:10:28"),
("44.00","mohammed","244.89","mohammed sebti","root@localhost","2022-05-08 17:11:44"),
("22.00","ffff","-22.00","ffff","root@localhost","2022-05-08 17:28:57"),
("0.00","ffff","120.00","ffff","root@localhost","2022-05-08 17:30:11"),
("120.00","ffff","-120.00","ffff","root@localhost","2022-05-08 17:30:26");



