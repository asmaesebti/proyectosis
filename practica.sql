create trigger proyectosis_ai after insert on proyectosis for each ROW insert into proyectosis_copie
	(recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,autre,reste,date_versement,mode_paiment,cree_le)
	 VALUES (new.recu, new.fecha_hoy, new.letype, new.attestation, new.police, new.matricule, new.produit, new.assure, new.du, new.au, new.totale, 
	 	new.espece, new.cheque, new.autre, new.reste, new.date_versement, new.mode_paiment, now())

	 create table tarif_actualise (anterieur_prix decimal(10,2), anterieur_assure varchar(50), 
	 	nouveau_prix decimal(10,2), nouveau_assure varchar(50), usuario varchar(30), cree_le datetime)


create trigger actualiser_prix_bu before update on proyectosis for each row INSERT into tarif_actualise 
	(anterieur_prix, anterieur_assure, nouveau_prix, nouveau_assure, usuario, cree_le) 
	VALUES (old.totale, old.assure, new.totale, new.assure, CURRENT_USER, now())

	DROP TABLE IF EXISTS `proyectosis_elimines`;
CREATE TABLE IF NOT EXISTS `proyectosis_elimines` (
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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

create trigger recu_elimines_ad after delete on proyectosis for each row insert into proyectosis_elimines 
	(recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,autre,reste,date_versement
		,mode_paiment,cree_le)
	 VALUES (old.recu, old.fecha_hoy, old.letype, old.attestation, old.police, old.matricule, old.produit, old.assure, old.du, old.au, old.totale, 
	 	old.espece, old.cheque, old.autre, old.reste, old.date_versement, old.mode_paiment, now())

	 DELIMITER $$
CREATE TRIGGER proyectosis_bu BEFORE UPDATE on proyectosis for each row 
BEGIN
if new.totale < 0 THEN
set new.totale = 0;
end if;
END;$$






