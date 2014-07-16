INSERT INTO `eam3`.`idrumata`
(`onoma_idrumatos`)
VALUES
('Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών');

INSERT INTO `eam3`.`idrumata`
(`onoma_idrumatos`)
VALUES
('Πανεπιστήμιο Πειραιώς');

/***************************************************************/

INSERT INTO `eam3`.`grammateia`
(`id`,
`tmhma`,
`Idrumata_onoma_idrumatos`)
VALUES
('1115',
'Πληροφορική και Τηλεπικοινωνίες',
'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών');

INSERT INTO `eam3`.`grammateia`
(`id`,
`tmhma`,
`Idrumata_onoma_idrumatos`)
VALUES
('1234',
'Φιλολογία',
'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών');

INSERT INTO `eam3`.`grammateia`
(`id`,
`tmhma`,
`Idrumata_onoma_idrumatos`)
VALUES
('2345',
'Οικονομική Επιστήμη',
'Πανεπιστήμιο Πειραιώς');

INSERT INTO `eam3`.`grammateia`
(`id`,
`tmhma`,
`Idrumata_onoma_idrumatos`)
VALUES
('3456',
'Ναυτιλιακές Σπουδές',
'Πανεπιστήμιο Πειραιώς');

/***************************************************************/

INSERT INTO `eam3`.`bibliopwleia`
(`idBibliopwleia`,
`dieuthunsh`,
`t_k`,
`e_mail`,
`thlefwno`,
`fax`,
`wres_meres_leitourgias`,
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
'https://goo.gl/maps/EU1FJ');

INSERT INTO `eam3`.`bibliopwleia`
(`idBibliopwleia`,
`dieuthunsh`,
`t_k`,
`e_mail`,
`thlefwno`,
`fax`,
`wres_meres_leitourgias`,
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
'https://goo.gl/maps/PsH1k');

/***************************************************************/

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
'προγραμματισμός;c;γλώσσα',
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
'τεχνητή;νοημοσύνη',
'ΚΛΕΙΔΑΡΙΘΜΟΣ',
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
'γραφικά;οπτικοποίηση',
'Δίαυλος',
'/var/www/dokupload/biblia/graph.jpg',
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
('978-960-266-204-5',
'Συστήματα Παράλληλης Επεξεργασίας',
'Τσανάκας Παναγιώτης Δ.;Θεοχάρης Θ.',
NULL,
NULL,
1,
'Σύγγραμμα',
NULL,
'Σ.ΑΘΑΝΑΣΟΠΟΥΛΟΣ & ΣΙΑ Ο.Ε.',
'45339',
1994,
'συστήματα;παραλληλία;επεξεργασία;παράλληλα',
'Δίαυλος',
'/var/www/dokupload/biblia/paral.jpg',
'Σύντομη περιγραφή εδώ...');

/***************************************************************/

INSERT INTO `eam3`.`mathhmata`
(`kwdikos_mathhmatos`,
`onoma_mathhmatos`,
`eksamhno`,
`Grammateia_id`)
VALUES
(151,
'ΕΙΣΑΓΩΓΗ ΣΤΟΝ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟ',
1,
'1115');

INSERT INTO `eam3`.`mathhmata`
(`kwdikos_mathhmatos`,
`onoma_mathhmatos`,
`eksamhno`,
`Grammateia_id`)
VALUES
(234,
'ΕΠΙΚΟΙΝΩΝΙΑ ΑΝΘΡΩΠΟΥ ΜΗΧΑΝΗΣ',
6,
'1115');

/***************************************************************/

INSERT INTO `eam3`.`arithmoi_mhtrwou`
(`a_m`,
`Grammateia_id`)
VALUES
('1115201300210',
'1115');

INSERT INTO `eam3`.`arithmoi_mhtrwou`
(`a_m`,
`Grammateia_id`)
VALUES
('1115201300056',
'1115');

INSERT INTO `eam3`.`arithmoi_mhtrwou`
(`a_m`,
`Grammateia_id`)
VALUES
('1115201300104',
'1115');

INSERT INTO `eam3`.`arithmoi_mhtrwou`
(`a_m`,
`Grammateia_id`)
VALUES
('1115201300001',
'1115');

/***************************************************************/

INSERT INTO `eam3`.`bibliopwleia_has_suggrammata`
(`Bibliopwleia_idBibliopwleia`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`diathesimothta`)
VALUES
(1,
'978-960-266-296-0',
'35474',
5);

INSERT INTO `eam3`.`bibliopwleia_has_suggrammata`
(`Bibliopwleia_idBibliopwleia`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`diathesimothta`)
VALUES
(1,
'978-960-266-204-5',
'45339',
10);

INSERT INTO `eam3`.`bibliopwleia_has_suggrammata`
(`Bibliopwleia_idBibliopwleia`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`diathesimothta`)
VALUES
(2,
'978-960-461-132-4',
'13956',
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
2);

/***************************************************************/

INSERT INTO `eam3`.`grammateia_has_suggrammata`
(`Grammateia_id`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`)
VALUES
('1115',
'978-960-266-296-0',
'35474');

INSERT INTO `eam3`.`grammateia_has_suggrammata`
(`Grammateia_id`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`)
VALUES
('1115',
'978-960-266-204-5',
'45339');

INSERT INTO `eam3`.`grammateia_has_suggrammata`
(`Grammateia_id`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`)
VALUES
('1115',
'978-960-461-132-4',
'13956');

INSERT INTO `eam3`.`grammateia_has_suggrammata`
(`Grammateia_id`,
`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`)
VALUES
('1115',
'978-960-8396-64-7',
'12867416');

/***************************************************************/

INSERT INTO `eam3`.`suggrammata_has_mathhmata`
(`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`Mathhmata_kwdikos_mathhmatos`)
VALUES
('978-960-266-296-0',
'35474',
151);

INSERT INTO `eam3`.`suggrammata_has_mathhmata`
(`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`Mathhmata_kwdikos_mathhmatos`)
VALUES
('978-960-266-296-0',
'35474',
234);

INSERT INTO `eam3`.`suggrammata_has_mathhmata`
(`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`Mathhmata_kwdikos_mathhmatos`)
VALUES
('978-960-266-204-5',
'45339',
151);

INSERT INTO `eam3`.`suggrammata_has_mathhmata`
(`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`Mathhmata_kwdikos_mathhmatos`)
VALUES
('978-960-461-132-4',
'13956',
151);


INSERT INTO `eam3`.`suggrammata_has_mathhmata`
(`Suggrammata_ISBN`,
`Suggrammata_kwdikos_bibliou`,
`Mathhmata_kwdikos_mathhmatos`)
VALUES
('978-960-8396-64-7',
'12867416',
234);




