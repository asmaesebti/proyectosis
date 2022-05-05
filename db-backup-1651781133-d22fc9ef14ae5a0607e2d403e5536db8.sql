DROP TABLE IF EXISTS proyectosis;

CREATE TABLE `proyectosis` (
  `recu` int(11) NOT NULL AUTO_INCREMENT,
  `letype` varchar(50) NOT NULL,
  `police` varchar(100) NOT NULL,
  `assure` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `totale` decimal(10,2) NOT NULL,
  `espece` decimal(10,2) NOT NULL,
  `cheque` decimal(10,2) NOT NULL,
  `autre` varchar(100) NOT NULL,
  `reste` decimal(10,2) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`recu`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO proyectosis VALUES("16","Changement vehicule","11111www","wwwwwwwww","2022-05-26","2022-05-24","1233.00","123.00","222.00","","888.00","2022-05-04 19:12:25"),
("2","Renouvellement","mohammed","sdrf","2022-05-02","2022-05-29","120.00","10.00","110.00","sddd","110.00","2022-05-04 12:25:51"),
("3","Autres","sebti","dd","2022-05-25","2022-05-19","33.00","0.00","0.00","www","0.00","2022-05-04 12:28:52"),
("18","Duplicata","100.2020.000123","ahmed","2022-05-21","2022-05-20","1234.00","120.00","130.00","","984.00","2022-05-04 20:30:34"),
("6","Renouvellement","ss","ss","2022-05-25","2022-05-25","10.00","0.00","0.00","ss","0.00","2022-05-04 14:09:14"),
("8","Affaire nouvelle","dd","ddd","2022-05-20","2022-05-22","110.00","0.00","0.00","","0.00","2022-05-04 14:25:14"),
("9","Renouvellement","cfff","ffff","2022-05-21","2022-05-11","10.00","0.00","0.00","","0.00","2022-05-04 14:52:57"),
("11","Changement vehicule","fffff","gggggg","2022-05-13","2022-05-18","12.00","0.00","0.00","","0.00","2022-05-04 15:11:24"),
("12","Autres","ddd","dddd","2022-05-27","2022-05-24","12.00","0.00","0.00","","0.00","2022-05-04 15:12:46"),
("13","Autres","dddddd","ddddd","2022-05-27","2022-06-02","123.00","0.00","0.00","","0.00","2022-05-04 15:29:36"),
("14","Renouvellement","100.2020.000121","nawfal sebti","2022-05-18","2022-05-29","1200.00","1000.00","100.00","commentaire","0.00","2022-05-04 18:33:01"),
("17","Renouvellement","qqqqq","qqqq","2022-05-19","2022-05-24","12.00","2.00","3.00","","7.00","2022-05-04 20:14:50");



