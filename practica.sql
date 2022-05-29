create trigger proyectosis_ai after insert on proyectosis for each ROW insert into proyectosis_copie
	(recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,virement,reste,date_versement,mode_paiment,cree_le)
  VALUES (new.recu, new.fecha_hoy, new.letype, new.attestation, new.police, new.matricule, new.produit, new.assure, new.du, new.au, new.totale, 
   new.espece, new.cheque, new.virement, new.reste, new.date_versement, new.mode_paiment, now())

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
    `virement` varchar(100) NOT NULL,
    `reste` decimal(10,2) NOT NULL,
    `date_versement` date DEFAULT NULL,
    `mode_paiment` varchar(20) NOT NULL,
    `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`recu`)
  ) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

   create trigger recu_elimines_ad after delete on proyectosis for each row insert into proyectosis_elimines 
     (recu, fecha_hoy, letype,attestation,police,matricule,produit,assure,du,au,totale,espece,cheque,virement,reste,date_versement
      ,mode_paiment,cree_le)
     VALUES (old.recu, old.fecha_hoy, old.letype, old.attestation, old.police, old.matricule, old.produit, old.assure, old.du, old.au, old.totale, 
       old.espece, old.cheque, old.virement, old.reste, old.date_versement, old.mode_paiment, now())

     DELIMITER $$
     CREATE TRIGGER proyectosis_bu BEFORE UPDATE on proyectosis for each row 
     BEGIN
     if new.totale < 0 THEN
     set new.totale = 0;
     end if;
     END;$$

     DELIMITER $$
     CREATE TRIGGER after_update_proyectosis AFTER UPDATE ON proyectosis FOR EACH ROW
     BEGIN
     UPDATE  proyectosis_copie
     SET  fecha_hoy = NEW.fecha_hoy
     , letype = NEW.letype
     , attestation = NEW.attestation
     , police = NEW.police
     , matricule = NEW.matricule
     , produit = NEW.produit
     , assure = NEW.assure
     , du = NEW.du
     , au = NEW.au
     , totale = NEW.totale
     , espece = NEW.espece
     , cheque = NEW.cheque
     , virement = NEW.virement
     , reste = NEW.reste
     , date_versement = NEW.date_versement
     WHERE recu = NEW.recu;    
     END;$$




ALTER TABLE proyectosis AUTO_INCREMENT = 1


ALTER TABLE proyectosis DROP recu; 
ALTER TABLE proyectosis AUTO_INCREMENT = 1; 
ALTER TABLE proyectosis ADD recu int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;


CREATE VIEW usuarios_recu AS 
SELECT `nombre`, 
       `apellidos`, 
       `email`, 
       `telefono`,
       `police`,
       `au`
FROM usuarios
left JOIN proyectosis 
ON nombre = assure;

CREATE VIEW usuarios_recu5 AS 
SELECT u.`nombre`, 
       u.`apellidos`, 
       u.`email`, 
       u.`telefono`,
       p.`police`,
       p.`au`
FROM usuarios u
left JOIN proyectosis p 
ON nombre = assure;

CREATE VIEW usuarios_recu5 AS 
SELECT u.`nombre`, 
       u.`apellidos`, 
       u.`email`, 
       u.`telefono`,
       p.`police`,
       p.`au`
FROM usuarios u
inner JOIN proyectosis p 
ON concat(nombre,' ',apellidos) = assure;

CREATE VIEW usuarios_recu5 AS 
SELECT u.`nombre`, 
       u.`apellidos`, 
       u.`email`, 
       u.`telefono`,
       p.`police`,
       p.`au`
FROM usuarios u
left JOIN proyectosis p 
ON concat(nombre,' ',apellidos) = assure;

//funciona muy bien la 8 si existe los datos en las dos tablas el mismo cliente

CREATE VIEW usuarios_recu8 AS 
SELECT u.`nombre`, 
       u.`apellidos`, 
       u.`email`, 
       u.`telefono`,
       p.`letype`,
       p.`police`,
       p.`attestation`,
       p.`matricule`,
       p.`au`,
       p.`totale`
FROM usuarios u
left JOIN proyectosis p 
ON concat(nombre,' ',apellidos) = assure;

CREATE FUNCTION SPLIT_STR(
  x VARCHAR(255),
  delim VARCHAR(12),
  pos INT
)
RETURNS VARCHAR(255)
RETURN REPLACE(SUBSTRING(SUBSTRING_INDEX(x, delim, pos),
       LENGTH(SUBSTRING_INDEX(x, delim, pos -1)) + 1),
       delim, '');


create trigger usuarios_ai_1 after insert on proyectosis for EACH row insert into usuarios (id, nombre,apellidos, email,telefono) VALUES
(new.recu, new.assure, new.assure, new.produit)

INSERT INTO `usuarios`(`id`, `nombre`, `apellidos`, `email`, `telefono`) VALUES (null, (select  SPLIT_STR(`assure`,' ' , 2) 
  from proyectosis where `recu` = 22),' ', ' ' , ' ')


select SPLIT_STR(`assure`,' ' , 1) as nombre, SPLIT_STR(`assure`,' ' , 2) as apellidos from proyectosis




DELIMITER $$
create trigger competence_ins after insert on proyectosis
for each row 
begin
 insert into usuarios (nombre,apellidos,email,telefono)
 VALUES(SPLIT_STR(new.assure,' ' , 1), SPLIT_STR(new.assure,' ' , 2), '','');
 
END$$

delimiter;

CREATE TABLE `usuarios_eliminados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1017 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



create trigger usuarios_elimines_ad after delete on usuarios for each row insert into usuarios_eliminados 
     (id, nombre, apellidos,email,telefono)
     VALUES (old.id, old.nombre, old.apellidos, old.email, old.telefono)

     