INSERT INTO `eam3`.`grammateia`
(`id`,
`idruma`,
`tmhma`)
VALUES
('1115',
'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών',
'Πληροφορικής και Τηλεπικοινωνιών');

INSERT INTO `eam3`.`grammateia`
(`id`,
`idruma`,
`tmhma`)
VALUES
('1234',
'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών',
'Φιλολογίας');

INSERT INTO `eam3`.`grammateia`
(`id`,
`idruma`,
`tmhma`)
VALUES
('2345',
'Πανεπιστήμιο Πειραιώς',
'Οικονομικής επιστήμης');

INSERT INTO `eam3`.`grammateia`
(`id`,
`idruma`,
`tmhma`)
VALUES
('3456',
'Πανεπιστήμιο Πειραιώς',
'Ναυτιλιακών Σπουδών');

/***********************************************************************/

INSERT INTO `eam3`.`arithmoi_mhtrwou`
(`a_m`,
`Grammateia_id`)
VALUES
('1234201300001',
'1234');

INSERT INTO `eam3`.`arithmoi_mhtrwou`
(`a_m`,
`Grammateia_id`)
VALUES
('2345201200123',
'2345');

/***********************************************************************/

INSERT INTO `eam3`.`foithtes`
(`onoma`,
`epitheto`,
`onoma_xrhsth`,
`e_mail`,
`kwdikos`,
`thlefwno`,
`fwtografia`,
`idruma`,
`tmhma`,
`eksamhno`,
`Arithmoi_mhtrwou_a_m`)
VALUES
('Ιωάννα',
'Ιωάννου',
'ioanna',
'ioannaioan@gmail.com',
'1234abc',
'6912345678',
'/var/www/dokupload/xrhstes/ioanna.jpg',
'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών',
'Φιλολογίας',
2,
'1234201300001');


INSERT INTO `eam3`.`foithtes`
(`onoma`,
`epitheto`,
`onoma_xrhsth`,
`e_mail`,
`kwdikos`,
`thlefwno`,
`fwtografia`,
`idruma`,
`tmhma`,
`eksamhno`,
`Arithmoi_mhtrwou_a_m`)
VALUES
('Γεώργιος',
'Γεωργίου',
'giorgos',
'giorgosgg@gmail.com',
'4321cba',
'6923456789',
'/var/www/dokupload/xrhstes/giorgos.jpg',
'Πανεπιστήμιο Πειραιώς',
'Οικονομικής Επιστήμης',
4,
'2345201200123');


/***********************************************************************/

INSERT INTO `eam3`.`bibliopwleia`
(`idBibliopwleia`,
`dieuthunsh`,
`t_k`,
`e_mail`,
`thlefwno`,
`fax`,
`wre_meres_leitourgias`,
`ekdoseis`,
`xarths`)
VALUES
(1,
'Μαυρομιχάλη 72-74',
'10680',
'info@diavlos-books.gr',
'2103631169',
'2103617473',
'Δευτέρα-Παρασκευή 10:00-16:00',
'Δίαυλος',
'https://www.google.gr/maps/place/%CE%9C%CE%B1%CF%85%CF%81%CE%BF%CE%BC%CE%B9%CF%87%CE%AC%CE%BB%CE%B7+74,+%CE%91%CE%B8%CE%AE%CE%BD%CE%B1+106+80/@37.9849741,23.7387364,17z/data=!3m1!4b1!4m2!3m1!1s0x14a1bd363cd34833:0xd002be3e8c6666c6');

INSERT INTO `eam3`.`bibliopwleia`
(`idBibliopwleia`,
`dieuthunsh`,
`t_k`,
`e_mail`,
`thlefwno`,
`fax`,
`wre_meres_leitourgias`,
`ekdoseis`,
`xarths`)
VALUES
(2,
'Πεσμαζόγλου 5 (ΣΤΟΑ ΤΟΥ ΒΙΒΛΙΟΥ ΚΑΤΑΣΤΗΜΑ 16)',
'10564',
'shop@klidarithmos.gr',
'2103300104',
NULL,
'Δευτέρα-Τετάρτη-Σάββατο 10:00-15:00, Τρίτη-Πέμπτη-Παρασκευή 10:00-19:00',
'Κλειδάριθμος',
'https://www.google.gr/maps/place/%CE%A0%CE%B5%CF%83%CE%BC%CE%B1%CE%B6%CF%8C%CE%B3%CE%BB%CE%BF%CF%85+5,+%CE%91%CE%B8%CE%AE%CE%BD%CE%B1+105+64/@37.9809937,23.7310136,17z/data=!3m1!4b1!4m2!3m1!1s0x14a1bd3a51223843:0x583c74a741baaa90');

/***********************************************************************/

INSERT INTO `eam3`.`suggrammata`
(`ISBN`,
`titlos`,
`suggrafeas`,
`titlos_tomou`,
`upotitlos`,
`arithmos_ekdosh`,
`tupos_suggrammatos`,
`arrithmos_tomou`,
`diatheths_ekdoths`,
`kwdikos_bibliou`,
`etos_ekdoshs`,
`lekseis_kleidia`,
`ekdoseis`,
`eikona`,
`perigrafh`)
VALUES
('978-960-461-132-4',
'Η ΓΛΩΣΣΑ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΥ C',
'BRIAN W. KERNIGHAN, DENNIS M. RITCHIE',
NULL,
NULL,
2,
'Σύγγραμμα',
NULL,
'ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ',
'13956',
2008,
'προγραμματισμός;c;γλώσσα;',
'ΚΛΕΙΔΑΡΙΘΜΟΣ',
'/var/www/dokupload/biblia/prog_c.jpg',
'Σύντομη περιγραφή εδώ...');


INSERT INTO `eam3`.`suggrammata`
(`ISBN`,
`titlos`,
`suggrafeas`,
`titlos_tomou`,
`upotitlos`,
`arithmos_ekdosh`,
`tupos_suggrammatos`,
`arrithmos_tomou`,
`diatheths_ekdoths`,
`kwdikos_bibliou`,
`etos_ekdoshs`,
`lekseis_kleidia`,
`ekdoseis`,
`eikona`,
`perigrafh`)
VALUES
('978-960-8396-64-7',
'ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ',
'ΒΛΑΧΑΒΑΣ Ι;ΚΕΦΑΛΑΣ Π.',
NULL,
NULL,
3,
'Σύγγραμμα',
NULL,
'ΕΤΑΙΡΙΑ ΑΞΙΟΠΟΙΗΣΗΣ ΚΑΙ ΔΙΑΧΕΙΡΙΣΗΣ ΠΕΡΙΟΥΣΙΑΣ ΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ ΜΑΚΕΔΟΝΙΑΣ',
'12867416',
2011,
'τεχνητή;νοημοσύνη;',
'ΕΚΔΟΣΕΙΣ ΠΑΝ/ΜΙΟΥ ΜΑΚΕΔΟΝΙΑΣ',
'/var/www/dokupload/biblia/texn_nohm.jpg',
'Σύντομη περιγραφή εδώ...');


INSERT INTO `eam3`.`suggrammata`
(`ISBN`,
`titlos`,
`suggrafeas`,
`titlos_tomou`,
`upotitlos`,
`arithmos_ekdosh`,
`tupos_suggrammatos`,
`arrithmos_tomou`,
`diatheths_ekdoths`,
`kwdikos_bibliou`,
`etos_ekdoshs`,
`lekseis_kleidia`,
`ekdoseis`,
`eikona`,
`perigrafh`)
VALUES
('978-960-266-296-0',
'Γραφικά και Οπτικοποίηση',
'Θεοχάρης Θ.;Πλατής Ν.',
NULL,
NULL,
1,
'Σύγγραμμα',
NULL,
'Σ.ΑΘΑΝΑΣΟΠΟΥΛΟΣ & ΣΙΑ Ο.Ε.',
'35474',
2010,
'γραφικά;οπτικοποίηση;',
'Συμμετρία',
'/var/www/dokupload/biblia/graph.jpg',
'Σύντομη περιγραφή εδώ...');


/***********************************************************************/


INSERT INTO `eam3`.`bibliopwleia_has_suggrammata`
(`Bibliopwleia_idBibliopwleia`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`diathesimothta`)
VALUES
(1,
'978-960-461-132-4',
'13956',
5);

INSERT INTO `eam3`.`bibliopwleia_has_suggrammata`
(`Bibliopwleia_idBibliopwleia`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`diathesimothta`)
VALUES
(1,
'978-960-266-296-0',
'35474',
2);

INSERT INTO `eam3`.`bibliopwleia_has_suggrammata`
(`Bibliopwleia_idBibliopwleia`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`diathesimothta`)
VALUES
(2,
'978-960-8396-64-7',
'12867416',
10);

/***********************************************************************/

INSERT INTO `eam3`.`apo_dhlwsh`
(`Foithtes_onoma_xrhsth`,
`Foithtes_Arithmoi_mhtrwou_a_m`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`)
VALUES
('ioanna',
'1234201300001',
'978-960-461-132-4',
'13956');


INSERT INTO `eam3`.`apo_dhlwsh`
(`Foithtes_onoma_xrhsth`,
`Foithtes_Arithmoi_mhtrwou_a_m`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`)
VALUES
('giorgos',
'2345201200123',
'978-960-266-296-0',
'35474');

INSERT INTO `eam3`.`apo_daneismo`
(`Foithtes_onoma_xrhsth`,
`Foithtes_Arithmoi_mhtrwou_a_m`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`)
VALUES
('giorgos',
'2345201200123',
'978-960-8396-64-7',
'12867416');





