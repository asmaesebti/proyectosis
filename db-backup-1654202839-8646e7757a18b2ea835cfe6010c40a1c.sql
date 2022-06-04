DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO banner VALUES("1","Banner 1","banner-1.jpg"),
("2","Banner 2","banner-2.jpg"),
("3","Banner 3","banner-3.jpg"),
("4","Banner 4","banner-4.jpg"),
("5","Banner 5","banner-5.jpg"),
("6","Banner 6","banner-6.jpg"),
("7","Banner 7","banner-7.jpg"),
("8","Banner 8","banner-8.jpg"),
("9","Banner 9","banner-9.jpg"),
("10","Banner 10","banner-10.jpg");



DROP TABLE IF EXISTS caroussel_slider;

CREATE TABLE `caroussel_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta-imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO caroussel_slider VALUES("13","imagenes/moha.png"),
("14","imagenes/Ã­ndicee.png");



DROP TABLE IF EXISTS country_state_city;

CREATE TABLE `country_state_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO country_state_city VALUES("1","USA","0"),
("2","Canada","0"),
("3","Australia","0"),
("4","New York","1"),
("5","Alabama","1"),
("6","California","1"),
("7","Ontario","2"),
("8","British Columbia","2"),
("9","New South Wales","3"),
("10","Queensland","3"),
("11","New York city","4"),
("12","Buffalo","4"),
("13","Albany","4"),
("14","Birmingham","5"),
("15","Montgomery","5"),
("16","Huntsville","5"),
("17","Los Angeles","6"),
("18","San Francisco","6"),
("19","San Diego","6"),
("20","Toronto","7"),
("21","Ottawa","7"),
("22","Vancouver","8"),
("23","Victoria","8"),
("24","Sydney","9"),
("25","Newcastle","9"),
("26","City of Brisbane","10"),
("27","Gold Coast","10");



DROP TABLE IF EXISTS folders;

CREATE TABLE `folders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `parentid` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO folders VALUES("1","Folder1","0"),
("2","Folder2","0"),
("3","Folder 1 sub1","1"),
("4","Folder 1 sub1.1","3"),
("5","Folder 1 sub1.2","3"),
("6","Folder 1 sub1.1.1","4"),
("7","Folder 1 sub2","1"),
("8","Folder 1 sub3","1"),
("9","Folder 1 sub3.1","8"),
("10","Folder 2 sub1","2"),
("11","Folder 2 sub1.1","10"),
("12","Folder 2 sub1.2","10"),
("13","Folder 2 sub2","2"),
("14","Folder 3","0");



DROP TABLE IF EXISTS letype;

CREATE TABLE `letype` (
  `id_letype` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_letype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `creado_el` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_letype`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO letype VALUES("1","Resiliation","2022-05-29 15:16:26"),
("2","Duplicata","2022-05-29 15:16:26"),
("3","Affaire nouvelle","2022-05-29 15:16:43"),
("4","Renouvellement","2022-05-29 15:16:43"),
("5","Changement vehicule","2022-05-29 15:17:05"),
("6","Autres","2022-05-29 15:17:05"),
("8","Autre provisoire","2022-05-29 15:17:43"),
("9","Attestation définitive","2022-05-29 17:00:37");



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
  `letype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `attestation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `police` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matricule` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `produit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `assure` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `virement` decimal(10,2) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `date_versement` date DEFAULT NULL,
  `mode_paiment` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'nulo',
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO proyectosis VALUES("1","2022-05-08","Resiliation","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah","alhamdulillah allah","","2022-05-24","2022-06-27","1234.00","23.00","4.00","0.00","1207.00","2022-05-17","nulo","2022-05-08 21:39:06","",""),
("14","2022-05-29","Affaire nouvelle","alfa","alfa","alfa","alfa","Brook Insall","","2022-05-12","2022-06-05","9876.00","0.00","0.00","0.00","9876.00","1970-01-01","nulo","2022-05-29 12:50:47","",""),
("15","2022-05-29","Affaire nouvelle","aaaaabetassssss","betajjjjjjjjj","beta","beta","beta bnmjk","","2022-04-30","2022-06-05","900.00","0.00","0.00","0.00","900.00","1970-01-01","nulo","2022-05-29 12:52:46","",""),
("21","2022-05-29","Attestation définitive","zineb","zineb","zineb","zineb","zineb huyg","","2022-05-26","2022-05-26","34.00","0.00","0.00","0.00","34.00","1970-01-01","nulo","2022-05-29 17:26:37","",""),
("17","2022-05-29","Renouvellement","gamavvvvv","gama","gama","gama","gama gefd","","2022-05-23","2022-06-02","88.00","0.00","0.00","0.00","88.00","1970-01-01","nulo","2022-05-29 13:06:23","",""),
("27","2022-05-29","Changement vehicule","asd","asd","asd","asdasd","asd afgh","","2022-06-03","2022-05-27","44.00","0.00","0.00","0.00","44.00","1970-01-01","nulo","2022-05-29 19:12:45","",""),
("22","2022-05-29","Changement vehicule","mouhcin","mouhcin","mouhcin","mouhcin","mouhcin ahmed","","2022-05-30","2022-06-05","77.00","0.00","0.00","0.00","77.00","1970-01-01","nulo","2022-05-29 17:42:13","",""),
("35","2022-05-31","Resiliation","sabah","sabah","sabah","sabah","sabah","benza","2022-06-01","2022-05-25","22.00","0.00","0.00","0.00","22.00","","nulo","2022-05-31 20:47:02","2222234","msb.caixa@gmail.com"),
("36","2022-05-31","Renouvellement","papa","papa","papa","papa","papa","abdel","2022-05-26","2022-05-27","678.00","0.00","0.00","0.00","678.00","1970-01-01","nulo","2022-05-31 20:51:47","5555666667777","msb.caixa@gmail"),
("37","2022-05-31","Affaire nouvelle","ahmed","ahmed","ahmed","ahmed","ahmed","zaref","2022-05-29","2022-06-03","1234567.00","0.00","0.00","0.00","1234567.00","1970-01-01","nulo","2022-05-31 22:51:12","666666666","msb.tesla@gmail.com");



DROP TABLE IF EXISTS proyectosis_copie;

CREATE TABLE `proyectosis_copie` (
  `recu` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hoy` date DEFAULT NULL,
  `letype` varchar(50) NOT NULL,
  `attestation` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `produit` varchar(200) NOT NULL,
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

INSERT INTO proyectosis_copie VALUES("5","2022-05-11","Changement vehicule","","aeafsfsafasf","","asfafaf","asfasfasf","2022-05-28","2022-05-29","123.99","22.00","33.00","0.00","68.99","2022-05-22","nulo","2022-05-11 20:32:10"),
("6","2022-05-13","Changement vehicule","wwww","wwww","wwww","wwww","wwww","2022-05-19","2022-05-29","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-13 19:24:10"),
("7","2022-05-13","Resiliation","mmmmm","mmmmm","mmmmm","mmmmm","mmmmm","2022-05-18","2022-05-29","444.00","0.00","0.00","0.00","444.00","1970-01-01","nulo","2022-05-13 19:26:27"),
("8","2022-05-21","Attestation dÃ©finitive","ddddddd","ddddd","ddddd","dddd","dddd","2022-05-19","2022-05-31","99.00","0.00","0.00","0.00","99.00","1970-01-01","nulo","2022-05-21 19:57:31"),
("9","2022-05-28","Renouvellement","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","2022-05-24","2022-05-21","1233.00","0.00","0.00","0.00","1233.00","","nulo","2022-05-29 01:03:06"),
("10","2022-05-28","Renouvellement","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","2022-05-24","2022-05-21","1233.00","0.00","0.00","0.00","1233.00","","nulo","2022-05-29 01:04:26"),
("11","2022-05-28","Renouvellement","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","2022-05-24","2022-05-21","1233.00","0.00","0.00","0.00","1233.00","","nulo","2022-05-29 01:05:39"),
("12","2022-05-28","Changement vehicule","sebtifff","sebti","sebti","sebti","sebti","2022-05-25","2022-05-18","4566.97","0.00","0.00","0.00","4566.97","1970-01-01","nulo","2022-05-29 01:20:08"),
("13","2022-05-29","Resiliation","moha123","simonFilipo11111","simonFilipo","simonFilipo","simonFilipo","2022-05-30","2022-06-05","23456.00","0.00","0.00","0.00","23456.00","1970-01-01","nulo","2022-05-29 12:07:13"),
("14","2022-05-29","Affaire nouvelle","alfa","alfa","alfa","alfa","Brook Insall","2022-05-12","2022-06-05","9876.00","0.00","0.00","0.00","9876.00","1970-01-01","nulo","2022-05-29 12:50:47"),
("15","2022-05-29","Affaire nouvelle","aaaaabetassssss","betajjjjjjjjj","beta","beta","beta bnmjk","2022-04-30","2022-06-05","900.00","0.00","0.00","0.00","900.00","1970-01-01","nulo","2022-05-29 12:52:46"),
("16","2022-05-29","Affaire nouvelle","beta","beta","beta","beta","beta","2022-04-30","2022-06-05","454545.00","0.00","0.00","0.00","454545.00","","nulo","2022-05-29 12:53:10"),
("17","2022-05-29","Renouvellement","gamavvvvv","gama","gama","gama","gama gefd","2022-05-23","2022-06-02","88.00","0.00","0.00","0.00","88.00","1970-01-01","nulo","2022-05-29 13:06:23"),
("18","2022-05-29","Attestation définitive","alhamdulillah plus","alhamdulillah plus","alhamdulillah plus","alhamdulillah plus","alhamdulillah plus","2022-06-01","2022-05-15","55555.00","0.00","0.00","0.00","55555.00","1970-01-01","nulo","2022-05-29 15:58:37"),
("19","2022-05-29","Attestation dÃ©finitive","ahmed","ahmed","ahmed","ahmed","ahmed","2022-05-24","2022-06-05","43.00","0.00","0.00","0.00","43.00","","nulo","2022-05-29 16:58:04"),
("20","2022-05-29","Attestation dÃ©finitive","simon","simon","simon","simon","simon","2022-05-30","2022-05-26","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-29 17:20:32"),
("21","2022-05-29","Attestation définitive","zineb","zineb","zineb","zineb","zineb huyg","2022-05-26","2022-05-26","34.00","0.00","0.00","0.00","34.00","1970-01-01","nulo","2022-05-29 17:26:37"),
("22","2022-05-29","Changement vehicule","mouhcin","mouhcin","mouhcin","mouhcin","mouhcin ahmed","2022-05-30","2022-06-05","77.00","0.00","0.00","0.00","77.00","1970-01-01","nulo","2022-05-29 17:42:13"),
("23","2022-05-29","Attestation dÃ©finitive","jhon","jhon","jhon","jhon","jhon","2022-05-24","2022-06-05","34.00","0.00","0.00","0.00","34.00","","nulo","2022-05-29 19:03:58"),
("24","2022-05-29","Attestation dÃ©finitive","jhon3","jhon3","jhon3","jhon3","jhon3","2022-05-24","2022-06-05","34.00","0.00","0.00","0.00","34.00","","nulo","2022-05-29 19:08:20"),
("25","2022-05-29","Renouvellement","asd","asd","asd","asd","asd","2022-06-01","2022-06-05","45.00","0.00","0.00","0.00","45.00","","nulo","2022-05-29 19:09:22"),
("26","2022-05-29","Changement vehicule","asd","asd","asd","asd","asd","2022-06-01","2022-06-05","67.00","0.00","0.00","0.00","67.00","","nulo","2022-05-29 19:11:18"),
("27","2022-05-29","Changement vehicule","asd","asd","asd","asdasd","asd afgh","2022-06-03","2022-05-27","44.00","0.00","0.00","0.00","44.00","1970-01-01","nulo","2022-05-29 19:12:45"),
("28","2022-05-29","Duplicata","simon templar","simon templar","simon templar","simon templar","simon templar","2022-05-30","2022-06-03","23.00","0.00","0.00","0.00","23.00","1970-01-01","nulo","2022-05-29 20:42:50"),
("29","2022-05-31","Affaire nouvelle","naoufal","naoufal","naoufal","naoufal","naoufal","2022-05-26","2022-05-25","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-31 20:10:12"),
("30","2022-05-31","Autres","sabah","sabah","sabah","sabah","sabah","2022-05-26","2022-05-27","567.00","0.00","0.00","0.00","567.00","","nulo","2022-05-31 20:15:02"),
("31","2022-05-31","Autre provisoire","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","2022-05-26","2022-06-04","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-31 20:16:30"),
("32","2022-05-31","Changement vehicule","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","2022-05-25","2022-06-05","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-31 20:20:58"),
("33","2022-05-31","Renouvellement","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","2022-05-27","2022-06-03","567.00","0.00","0.00","0.00","567.00","","nulo","2022-05-31 20:25:02"),
("34","2022-05-31","Duplicata","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","2022-05-26","2022-06-02","34.00","0.00","0.00","0.00","34.00","","nulo","2022-05-31 20:33:19"),
("35","2022-05-31","Resiliation","sabah","sabah","sabah","sabah","sabah","2022-06-01","2022-05-25","22.00","0.00","0.00","0.00","22.00","","nulo","2022-05-31 20:47:02"),
("36","2022-05-31","Renouvellement","papa","papa","papa","papa","papa","2022-05-26","2022-05-27","678.00","0.00","0.00","0.00","678.00","1970-01-01","nulo","2022-05-31 20:51:47"),
("37","2022-05-31","Affaire nouvelle","ahmed","ahmed","ahmed","ahmed","ahmed","2022-05-29","2022-06-03","1234567.00","0.00","0.00","0.00","1234567.00","1970-01-01","nulo","2022-05-31 22:51:12");



DROP TABLE IF EXISTS proyectosis_elimines;

CREATE TABLE `proyectosis_elimines` (
  `recu` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hoy` date DEFAULT NULL,
  `letype` varchar(50) NOT NULL,
  `attestation` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `produit` varchar(200) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
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
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis_elimines VALUES("3","2022-05-08","Changement vehicule","mohammed","mohammed","mohammed","mohammed","mohammed","","2022-05-21","2022-05-24","23.00","2.34","0.00","0.00","20.66","2022-05-18","nulo","2022-05-08 22:12:17","",""),
("2","2022-05-08","Duplicata","sebti","sebti","sebti","sebti","sebti","","2022-05-19","2022-05-18","234.54","23.00","200.00","0.00","11.54","2022-05-18","nulo","2022-05-08 22:12:21","",""),
("8","2022-05-21","Attestation dÃ©finitive","ddddddd","ddddd","ddddd","dddd","dddd","","2022-05-19","2022-05-31","99.00","0.00","0.00","0.00","99.00","1970-01-01","nulo","2022-05-29 12:29:41","",""),
("7","2022-05-13","Resiliation","mmmmm","mmmmm","mmmmm","mmmmm","mmmmm","","2022-05-18","2022-05-29","444.00","0.00","0.00","0.00","444.00","1970-01-01","nulo","2022-05-29 12:49:53","",""),
("6","2022-05-13","Changement vehicule","wwww","wwww","wwww","wwww","wwww","","2022-05-19","2022-05-29","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-29 12:50:04","",""),
("9","2022-05-28","Renouvellement","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","","2022-05-24","2022-05-21","1233.00","0.00","0.00","0.00","1233.00","","nulo","2022-05-29 12:50:11","",""),
("5","2022-05-11","Changement vehicule","","aeafsfsafasf","","asfafaf","asfasfasf","","2022-05-28","2022-05-29","123.99","22.00","33.00","0.00","68.99","2022-05-22","nulo","2022-05-29 12:52:54","",""),
("4","2022-05-10","Duplicata","defrtg","defrtg","defrtg","defrtg","Brook Insall","","2022-05-21","2022-05-29","234.65","23.54","4.00","0.00","207.11","2022-06-05","nulo","2022-05-29 12:52:58","",""),
("16","2022-05-29","Affaire nouvelle","beta","beta","beta","beta","beta","","2022-04-30","2022-06-05","454545.00","0.00","0.00","0.00","454545.00","","nulo","2022-05-29 12:53:53","",""),
("10","2022-05-28","Renouvellement","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","","2022-05-24","2022-05-21","1233.00","0.00","0.00","0.00","1233.00","","nulo","2022-05-29 13:05:36","",""),
("11","2022-05-28","Renouvellement","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","mohammeddddddddddddddddddddd","","2022-05-24","2022-05-21","1233.00","0.00","0.00","0.00","1233.00","","nulo","2022-05-29 13:05:44","",""),
("13","2022-05-29","Resiliation","moha123","simonFilipo11111","simonFilipo","simonFilipo","simonFilipo","","2022-05-30","2022-06-05","23456.00","0.00","0.00","0.00","23456.00","1970-01-01","nulo","2022-05-29 17:19:30","",""),
("12","2022-05-28","Changement vehicule","sebtifff","sebti","sebti","sebti","sebti","","2022-05-25","2022-05-18","4566.97","0.00","0.00","0.00","4566.97","1970-01-01","nulo","2022-05-29 17:19:37","",""),
("18","2022-05-29","Attestation définitive","alhamdulillah plus","alhamdulillah plus","alhamdulillah plus","alhamdulillah plus","alhamdulillah plus","","2022-06-01","2022-05-15","55555.00","0.00","0.00","0.00","55555.00","1970-01-01","nulo","2022-05-29 17:26:03","",""),
("19","2022-05-29","Attestation définitive","ahmed","ahmed","ahmed","ahmed","ahmed","","2022-05-24","2022-06-05","43.00","0.00","0.00","0.00","43.00","","nulo","2022-05-29 17:26:11","",""),
("20","2022-05-29","Attestation dÃ©finitive","simon","simon","simon","simon","simon","","2022-05-30","2022-05-26","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-29 17:29:29","",""),
("24","2022-05-29","Attestation dÃ©finitive","jhon3","jhon3","jhon3","jhon3","jhon3","","2022-05-24","2022-06-05","34.00","0.00","0.00","0.00","34.00","","nulo","2022-05-29 19:08:35","",""),
("23","2022-05-29","Attestation dÃ©finitive","jhon","jhon","jhon","jhon","jhon","","2022-05-24","2022-06-05","34.00","0.00","0.00","0.00","34.00","","nulo","2022-05-29 19:08:40","",""),
("25","2022-05-29","Renouvellement","asd","asd","asd","asd","asd","","2022-06-01","2022-06-05","45.00","0.00","0.00","0.00","45.00","","nulo","2022-05-29 19:11:06","",""),
("26","2022-05-29","Changement vehicule","asd","asd","asd","asd","asd","","2022-06-01","2022-06-05","67.00","0.00","0.00","0.00","67.00","","nulo","2022-05-29 19:12:29","",""),
("29","2022-05-31","Affaire nouvelle","naoufal","naoufal","naoufal","naoufal","naoufal","","2022-05-26","2022-05-25","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-31 20:15:52","",""),
("30","2022-05-31","Autres","sabah","sabah","sabah","sabah","sabah","","2022-05-26","2022-05-27","567.00","0.00","0.00","0.00","567.00","","nulo","2022-05-31 20:15:54","",""),
("31","2022-05-31","Autre provisoire","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","","2022-05-26","2022-06-04","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-31 20:20:28","",""),
("32","2022-05-31","Changement vehicule","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","","2022-05-25","2022-06-05","123.00","0.00","0.00","0.00","123.00","","nulo","2022-05-31 20:24:35","",""),
("34","2022-05-31","Duplicata","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","","2022-05-26","2022-06-02","34.00","0.00","0.00","0.00","34.00","","nulo","2022-05-31 20:45:31","",""),
("33","2022-05-31","Renouvellement","sabah benza","sabah benza","sabah benza","sabah benza","sabah benza","","2022-05-27","2022-06-03","567.00","0.00","0.00","0.00","567.00","","nulo","2022-05-31 20:45:33","",""),
("28","2022-05-29","Duplicata","simon templar","simon templar","simon templar","simon templar","simon templar","","2022-05-30","2022-06-03","23.00","0.00","0.00","0.00","23.00","1970-01-01","nulo","2022-05-31 20:46:28","","");



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
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-08 22:11:17"),
("123.34","asfasfasf","123.34","asfasfasf","root@localhost","2022-05-11 20:32:53"),
("123.34","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-11 20:33:06"),
("123.99","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-11 20:33:16"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-21 19:57:47"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 19:54:10"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 20:10:42"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 20:19:38"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 20:24:50"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 20:27:21"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 20:33:37"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 20:35:26"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 20:36:39"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 20:37:04"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 20:37:50"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 20:38:40"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 20:38:52"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 20:44:18"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:20:15"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 22:22:24"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:23:23"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 22:24:56"),
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-26 22:24:56"),
("123.99","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-26 22:24:56"),
("123.00","wwww","123.00","wwww","root@localhost","2022-05-26 22:24:56"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:24:56"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 22:24:56"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 22:24:57"),
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-26 22:24:57"),
("123.99","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-26 22:24:57"),
("123.00","wwww","123.00","wwww","root@localhost","2022-05-26 22:24:57"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:24:57"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 22:24:57"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 22:25:27"),
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-26 22:25:27"),
("123.99","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-26 22:25:27"),
("123.00","wwww","123.00","wwww","root@localhost","2022-05-26 22:25:27"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:25:27"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 22:25:27"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 22:25:28"),
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-26 22:25:28"),
("123.99","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-26 22:25:28"),
("123.00","wwww","123.00","wwww","root@localhost","2022-05-26 22:25:28"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:25:28"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 22:25:28"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 22:25:54"),
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-26 22:25:54"),
("123.99","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-26 22:25:54"),
("123.00","wwww","123.00","wwww","root@localhost","2022-05-26 22:25:54"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:25:54"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 22:25:54"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-26 22:25:55"),
("234.65","defrtg","234.65","defrtg","root@localhost","2022-05-26 22:25:55"),
("123.99","asfasfasf","123.99","asfasfasf","root@localhost","2022-05-26 22:25:55"),
("123.00","wwww","123.00","wwww","root@localhost","2022-05-26 22:25:55"),
("444.00","mmmmm","444.00","mmmmm","root@localhost","2022-05-26 22:25:55"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-26 22:25:55"),
("234.65","defrtg","234.65","Brook Insal","root@localhost","2022-05-26 23:22:33"),
("234.65","Brook Insal","234.65","Brook Insall","root@localhost","2022-05-26 23:22:58"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-27 18:51:16"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-27 19:16:26"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-28 11:55:57"),
("1234.00","alhamdulillah","1234.00","alhamdulillah","root@localhost","2022-05-28 11:56:41"),
("99.00","dddd","99.00","dddd","root@localhost","2022-05-28 11:57:17"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 12:24:21"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 12:28:01"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 12:30:11"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 12:38:05"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 12:39:04"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 12:47:32"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 12:48:55"),
("9876.00","alfa","9876.00","alfa","root@localhost","2022-05-29 12:51:38"),
("9876.00","alfa","9876.00","alfa","root@localhost","2022-05-29 12:52:03"),
("454545.00","beta","454545.00","beta","root@localhost","2022-05-29 12:54:34"),
("454545.00","beta","454545.00","beta","root@localhost","2022-05-29 12:56:05"),
("454545.00","beta","454545.00","beta","root@localhost","2022-05-29 12:56:28"),
("454545.00","beta","900.00","beta","root@localhost","2022-05-29 12:59:26"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:00:37"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:01:07"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:01:35"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:02:07"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:02:39"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:02:54"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:03:59"),
("900.00","beta","900.00","beta","root@localhost","2022-05-29 13:05:17"),
("88.00","gama","88.00","gama","root@localhost","2022-05-29 13:08:16"),
("88.00","gama","88.00","gama","root@localhost","2022-05-29 13:10:54"),
("88.00","gama","88.00","gama","root@localhost","2022-05-29 13:11:17"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 13:34:00"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 13:34:42"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 13:39:43"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 13:42:14"),
("9876.00","alfa","9876.00","alfa","root@localhost","2022-05-29 13:42:36"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:40:00"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:40:44"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:41:28"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:44:38"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:46:12"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:46:20"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:47:23"),
("9876.00","alfa","9876.00","alfa","root@localhost","2022-05-29 14:47:33"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 14:49:30"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:51:11"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:52:20"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 14:52:37"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:58:15"),
("4566.97","sebti","4566.97","sebti","root@localhost","2022-05-29 14:58:23"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 14:58:53"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:01:50"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:03:39"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:09:33"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:11:53"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:12:40"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:37:10"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:38:06"),
("88.00","gama","88.00","gama","root@localhost","2022-05-29 15:38:46"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:43:16"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:44:59"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:45:27"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:46:23"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:47:59"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:48:50"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:51:46"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:52:44"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:53:18"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:53:24"),
("88.00","gama","88.00","gama","root@localhost","2022-05-29 15:53:37"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:55:52"),
("23456.00","simonFilipo","23456.00","simonFilipo","root@localhost","2022-05-29 15:56:09"),
("9876.00","alfa","9876.00","alfa","root@localhost","2022-05-29 15:57:48"),
("55555.00","alhamdulillah plus","55555.00","alhamdulillah plus","root@localhost","2022-05-29 15:59:38"),
("55555.00","alhamdulillah plus","55555.00","alhamdulillah plus","root@localhost","2022-05-29 17:25:34"),
("77.00","mouhcin","77.00","mouhcin","root@localhost","2022-05-29 17:42:50"),
("9876.00","alfa","9876.00","Brook Insall","root@localhost","2022-05-29 17:50:26"),
("77.00","mouhcin","77.00","mouhcin ahmed","root@localhost","2022-05-29 19:18:13"),
("44.00","asd","44.00","asd afgh","root@localhost","2022-05-29 19:41:04"),
("88.00","gama","88.00","gama gefd","root@localhost","2022-05-29 19:41:14"),
("34.00","zineb","34.00","zineb huyg","root@localhost","2022-05-29 19:41:25"),
("900.00","beta","900.00","beta bnmjk","root@localhost","2022-05-29 19:41:34"),
("1234.00","alhamdulillah","1234.00","alhamdulillah allah","root@localhost","2022-05-29 19:41:47"),
("23.00","simon templar","23.00","simon templar","root@localhost","2022-05-29 21:51:41"),
("23.00","simon templar","23.00","simon templar","root@localhost","2022-05-31 19:34:52"),
("678.00","papa","678.00","papa","root@localhost","2022-05-31 21:35:08"),
("1234567.00","ahmed","1234567.00","ahmed","root@localhost","2022-05-31 22:52:36"),
("1234567.00","ahmed","1234567.00","ahmed","root@localhost","2022-05-31 22:58:27");



DROP TABLE IF EXISTS tbl_categories;

CREATE TABLE `tbl_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `parent_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO tbl_categories VALUES("1","Electronics","0"),
("2","Televisions","1"),
("3","Tube","2"),
("4","LCD","2"),
("5","Plasma","2"),
("6","Computers and Laptops","1"),
("7","Desktops","6"),
("8","Laptops","6"),
("9","Netbooks","6"),
("10","Tablets","6"),
("11","Android","10"),
("12","iPad","10"),
("13","Mobile Phones","1"),
("14","Basic Cell Phones","13"),
("15","Smartphones","13"),
("16","Android Phones","15"),
("17","iPhone","15");



DROP TABLE IF EXISTS treeview_items;

CREATE TABLE `treeview_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `parent_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO treeview_items VALUES("1","task1","task1title","2"),
("2","task2","task2title","0"),
("3","task3","task1title3","0"),
("4","task4","task2title4","3"),
("5","task4","task1title4","3"),
("6","task5","task2title5","5");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1024 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO usuarios VALUES("1","Brook","Insall","binsall0@xing.com","261 493 0059"),
("2","Crichton","Rous","crous1@howstuffworks.com","545 160 2146"),
("3","Ronny","Revely","msb.duck@gmail.com","481 582 9924"),
("5","Iosep","Dyte","idyte4@trellian.com","740 490 9285"),
("6","Max","Houlton","msb.duck@gmail.com","443 777 8249"),
("37","ahmed","zaref","msb.tesla@gmail.com","666666666"),
("36","papa","abdel","msb.duck@gmail","5555666667777"),
("35","sabah","benza","msb.caixa@gmail.com","2222234");



DROP TABLE IF EXISTS usuarios2;

CREATE TABLE `usuarios2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1026 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO usuarios2 VALUES("1024","papa","","",""),
("1025","ahmed","","","");



DROP TABLE IF EXISTS usuarios_eliminados;

CREATE TABLE `usuarios_eliminados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1024 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO usuarios_eliminados VALUES("1016","simon","templar","msb.duck@gmail.com","4444444444"),
("29","naoufal","Affaire nouvelle","naoufal","naoufal"),
("1017","naoufal","","",""),
("30","sabah","Autres","sabah","sabah"),
("1018","sabah","","",""),
("1019","sabah","benza","",""),
("31","sabah benza","Autre provisoire","sabah benza","sabah benza"),
("32","sabah benza","Changement vehicule","sabah benza","sabah benza"),
("1020","sabah","benza","",""),
("1021","sabah","benza","",""),
("33","sabah benza","Renouvellement","sabah benza","123456789"),
("1022","sabah","benza","",""),
("34","sabah benza","","msb.duck@gmail.com","55555555555555555"),
("1023","sabah","","","");



DROP TABLE IF EXISTS usuarios_recu;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu` AS select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono` from (`usuarios` left join `proyectosis` on((`usuarios`.`nombre` = `proyectosis`.`assure`)));

INSERT INTO usuarios_recu VALUES("sabah","benza","msb.caixa@gmail.com","2222234"),
("papa","abdel","msb.duck@gmail","5555666667777"),
("ahmed","zaref","msb.tesla@gmail.com","666666666"),
("Brook","Insall","binsall0@xing.com","261 493 0059"),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146"),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924"),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285"),
("Max","Houlton","msb.duck@gmail.com","443 777 8249");



DROP TABLE IF EXISTS usuarios_recu1;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu1` AS select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono`,`proyectosis`.`police` AS `police`,`proyectosis`.`au` AS `au` from (`usuarios` left join `proyectosis` on((`usuarios`.`nombre` = `proyectosis`.`assure`)));

INSERT INTO usuarios_recu1 VALUES("sabah","benza","msb.caixa@gmail.com","2222234","sabah","2022-05-25"),
("papa","abdel","msb.duck@gmail","5555666667777","papa","2022-05-27"),
("ahmed","zaref","msb.tesla@gmail.com","666666666","ahmed","2022-06-03"),
("Brook","Insall","binsall0@xing.com","261 493 0059","",""),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146","",""),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924","",""),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285","",""),
("Max","Houlton","msb.duck@gmail.com","443 777 8249","","");



DROP TABLE IF EXISTS usuarios_recu3;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu3` AS select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono`,`proyectosis`.`police` AS `police`,`proyectosis`.`au` AS `au` from (`usuarios` left join `proyectosis` on((concat(`usuarios`.`nombre`,' ',`usuarios`.`apellidos`) = `proyectosis`.`assure`)));

INSERT INTO usuarios_recu3 VALUES("Brook","Insall","binsall0@xing.com","261 493 0059","alfa","2022-06-05"),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146","",""),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924","",""),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285","",""),
("Max","Houlton","msb.duck@gmail.com","443 777 8249","",""),
("ahmed","zaref","msb.tesla@gmail.com","666666666","",""),
("papa","abdel","msb.duck@gmail","5555666667777","",""),
("sabah","benza","msb.caixa@gmail.com","2222234","","");



DROP TABLE IF EXISTS usuarios_recu4;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu4` AS select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`telefono` AS `telefono`,`proyectosis`.`police` AS `police`,`proyectosis`.`au` AS `au` from (`usuarios` left join `proyectosis` on((`usuarios`.`nombre` = `proyectosis`.`assure`)));

INSERT INTO usuarios_recu4 VALUES("sabah","benza","msb.caixa@gmail.com","2222234","sabah","2022-05-25"),
("papa","abdel","msb.duck@gmail","5555666667777","papa","2022-05-27"),
("ahmed","zaref","msb.tesla@gmail.com","666666666","ahmed","2022-06-03"),
("Brook","Insall","binsall0@xing.com","261 493 0059","",""),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146","",""),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924","",""),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285","",""),
("Max","Houlton","msb.duck@gmail.com","443 777 8249","","");



DROP TABLE IF EXISTS usuarios_recu5;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu5` AS select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` left join `proyectosis` `p` on((`u`.`nombre` = `p`.`assure`)));

INSERT INTO usuarios_recu5 VALUES("sabah","benza","msb.caixa@gmail.com","2222234","sabah","2022-05-25"),
("papa","abdel","msb.duck@gmail","5555666667777","papa","2022-05-27"),
("ahmed","zaref","msb.tesla@gmail.com","666666666","ahmed","2022-06-03"),
("Brook","Insall","binsall0@xing.com","261 493 0059","",""),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146","",""),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924","",""),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285","",""),
("Max","Houlton","msb.duck@gmail.com","443 777 8249","","");



DROP TABLE IF EXISTS usuarios_recu6;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu6` AS select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`)));

INSERT INTO usuarios_recu6 VALUES("Brook","Insall","binsall0@xing.com","261 493 0059","alfa","2022-06-05");



DROP TABLE IF EXISTS usuarios_recu7;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu7` AS select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` left join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`)));

INSERT INTO usuarios_recu7 VALUES("Brook","Insall","binsall0@xing.com","261 493 0059","alfa","2022-06-05"),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146","",""),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924","",""),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285","",""),
("Max","Houlton","msb.duck@gmail.com","443 777 8249","",""),
("ahmed","zaref","msb.tesla@gmail.com","666666666","",""),
("papa","abdel","msb.duck@gmail","5555666667777","",""),
("sabah","benza","msb.caixa@gmail.com","2222234","","");



DROP TABLE IF EXISTS usuarios_recu8;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu8` AS select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`police` AS `police`,`p`.`au` AS `au` from (`usuarios` `u` left join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`)));

INSERT INTO usuarios_recu8 VALUES("Brook","Insall","binsall0@xing.com","261 493 0059","alfa","2022-06-05"),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146","",""),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924","",""),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285","",""),
("Max","Houlton","msb.duck@gmail.com","443 777 8249","",""),
("ahmed","zaref","msb.tesla@gmail.com","666666666","",""),
("papa","abdel","msb.duck@gmail","5555666667777","",""),
("sabah","benza","msb.caixa@gmail.com","2222234","","");



DROP TABLE IF EXISTS usuarios_recu9;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_recu9` AS select `u`.`nombre` AS `nombre`,`u`.`apellidos` AS `apellidos`,`u`.`email` AS `email`,`u`.`telefono` AS `telefono`,`p`.`letype` AS `letype`,`p`.`police` AS `police`,`p`.`attestation` AS `attestation`,`p`.`matricule` AS `matricule`,`p`.`au` AS `au`,`p`.`totale` AS `totale` from (`usuarios` `u` left join `proyectosis` `p` on((concat(`u`.`nombre`,' ',`u`.`apellidos`) = `p`.`assure`)));

INSERT INTO usuarios_recu9 VALUES("Brook","Insall","binsall0@xing.com","261 493 0059","Affaire nouvelle","alfa","alfa","alfa","2022-06-05","9876.00"),
("Crichton","Rous","crous1@howstuffworks.com","545 160 2146","","","","","",""),
("Ronny","Revely","msb.duck@gmail.com","481 582 9924","","","","","",""),
("Iosep","Dyte","idyte4@trellian.com","740 490 9285","","","","","",""),
("Max","Houlton","msb.duck@gmail.com","443 777 8249","","","","","",""),
("ahmed","zaref","msb.tesla@gmail.com","666666666","","","","","",""),
("papa","abdel","msb.duck@gmail","5555666667777","","","","","",""),
("sabah","benza","msb.caixa@gmail.com","2222234","","","","","","");



