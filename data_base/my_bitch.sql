CREATE TABLE IF NOT EXISTS `eam3`.`Grammateia` (
  `id` VARCHAR(4) NOT NULL,
  `idruma` VARCHAR(70) CHARACTER SET 'utf8' NOT NULL,
  `tmhma` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Arithmoi_mhtrwou` (
  `a_m` VARCHAR(17) NOT NULL,
  `Grammateia_id` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`a_m`),
  INDEX `fk_Arithmoi_mhtrwou_Grammateia1_idx` (`Grammateia_id` ASC),
  CONSTRAINT `fk_Arithmoi_mhtrwou_Grammateia1`
    FOREIGN KEY (`Grammateia_id`)
    REFERENCES `eam3`.`Grammateia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Foithtes` (
  `onoma` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `epitheto` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `onoma_xrhsth` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `e_mail` VARCHAR(255) NOT NULL,
  `kwdikos` VARCHAR(45) NOT NULL,
  `thlefwno` VARCHAR(11) NULL,
  `fwtografia` VARCHAR(255) CHARACTER SET 'utf8' NULL,
  `idruma` VARCHAR(70) CHARACTER SET 'utf8' NOT NULL,
  `tmhma` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `eksamhno` INT NOT NULL,
  `Arithmoi_mhtrwou_a_m` VARCHAR(17) NOT NULL,
  PRIMARY KEY (`onoma_xrhsth`, `Arithmoi_mhtrwou_a_m`),
  UNIQUE INDEX `onoma_xrhsth_UNIQUE` (`onoma_xrhsth` ASC),
  UNIQUE INDEX `e_mail_UNIQUE` (`e_mail` ASC),
  INDEX `fk_Foithtes_Arithmoi_mhtrwou1_idx` (`Arithmoi_mhtrwou_a_m` ASC),
  CONSTRAINT `fk_Foithtes_Arithmoi_mhtrwou1`
    FOREIGN KEY (`Arithmoi_mhtrwou_a_m`)
    REFERENCES `eam3`.`Arithmoi_mhtrwou` (`a_m`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Bibliopwleia` (
  `idBibliopwleia` INT NOT NULL,
  `dieuthunsh` VARCHAR(250) CHARACTER SET 'utf8' NOT NULL,
  `t_k` VARCHAR(6) NOT NULL,
  `e_mail` VARCHAR(255) NOT NULL,
  `thlefwno` VARCHAR(15) NULL,
  `fax` VARCHAR(15) NULL,
  `wre_meres_leitourgias` VARCHAR(200) CHARACTER SET 'utf8' NOT NULL,
  `ekdoseis` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `xarths` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`idBibliopwleia`),
  UNIQUE INDEX `idBibliopwleia_UNIQUE` (`idBibliopwleia` ASC),
  UNIQUE INDEX `e_mail_UNIQUE` (`e_mail` ASC))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `eam3`.`Suggrammata` (
  `ISBN` VARCHAR(50) NOT NULL,
  `titlos` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `suggrafeas` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `titlos_tomou` VARCHAR(45) CHARACTER SET 'utf8' NULL,
  `upotitlos` VARCHAR(45) CHARACTER SET 'utf8' NULL,
  `arithmos_ekdosh` INT NOT NULL,
  `tupos_suggrammatos` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `arrithmos_tomou` INT NULL,
  `diatheths_ekdoths` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `kwdikos_bibliou` VARCHAR(45) NOT NULL,
  `etos_ekdoshs` INT NOT NULL,
  `lekseis_kleidia` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `ekdoseis` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `eikona` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `perigrafh` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`ISBN`, `kwdikos_bibliou`),
  UNIQUE INDEX `ISBN_UNIQUE` (`ISBN` ASC),
  UNIQUE INDEX `kwdikos_bibliou_UNIQUE` (`kwdikos_bibliou` ASC))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Bibliopwleia_has_Suggrammata` (
  `Bibliopwleia_idBibliopwleia` INT NOT NULL,
  `Suggrammata_ISBN` VARCHAR(50) NOT NULL,
  `Suggrammata_kwdikos_bibliou` VARCHAR(45) NOT NULL,
  `diathesimothta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Bibliopwleia_idBibliopwleia`, `Suggrammata_ISBN`, `Suggrammata_kwdikos_bibliou`),
  INDEX `fk_Bibliopwleia_has_Suggrammata_Suggrammata1_idx` (`Suggrammata_ISBN` ASC, `Suggrammata_kwdikos_bibliou` ASC),
  INDEX `fk_Bibliopwleia_has_Suggrammata_Bibliopwleia1_idx` (`Bibliopwleia_idBibliopwleia` ASC),
  CONSTRAINT `fk_Bibliopwleia_has_Suggrammata_Bibliopwleia1`
    FOREIGN KEY (`Bibliopwleia_idBibliopwleia`)
    REFERENCES `eam3`.`Bibliopwleia` (`idBibliopwleia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Bibliopwleia_has_Suggrammata_Suggrammata1`
    FOREIGN KEY (`Suggrammata_ISBN` , `Suggrammata_kwdikos_bibliou`)
    REFERENCES `eam3`.`Suggrammata` (`ISBN` , `kwdikos_bibliou`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `eam3`.`apo_dhlwsh` (
  `Foithtes_onoma_xrhsth` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `Foithtes_Arithmoi_mhtrwou_a_m` VARCHAR(17) NOT NULL,
  `Suggrammata_ISBN` VARCHAR(50) NOT NULL,
  `Suggrammata_kwdikos_bibliou` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Foithtes_onoma_xrhsth`, `Foithtes_Arithmoi_mhtrwou_a_m`, `Suggrammata_ISBN`, `Suggrammata_kwdikos_bibliou`),
  INDEX `fk_Foithtes_has_Suggrammata_Suggrammata1_idx` (`Suggrammata_ISBN` ASC, `Suggrammata_kwdikos_bibliou` ASC),
  INDEX `fk_Foithtes_has_Suggrammata_Foithtes1_idx` (`Foithtes_onoma_xrhsth` ASC, `Foithtes_Arithmoi_mhtrwou_a_m` ASC),
  CONSTRAINT `fk_Foithtes_has_Suggrammata_Foithtes1`
    FOREIGN KEY (`Foithtes_onoma_xrhsth` , `Foithtes_Arithmoi_mhtrwou_a_m`)
    REFERENCES `eam3`.`Foithtes` (`onoma_xrhsth` , `Arithmoi_mhtrwou_a_m`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Foithtes_has_Suggrammata_Suggrammata1`
    FOREIGN KEY (`Suggrammata_ISBN` , `Suggrammata_kwdikos_bibliou`)
    REFERENCES `eam3`.`Suggrammata` (`ISBN` , `kwdikos_bibliou`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `eam3`.`apo_daneismo` (
  `Foithtes_onoma_xrhsth` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `Foithtes_Arithmoi_mhtrwou_a_m` VARCHAR(17) NOT NULL,
  `Suggrammata_ISBN` VARCHAR(50) NOT NULL,
  `Suggrammata_kwdikos_bibliou` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Foithtes_onoma_xrhsth`, `Foithtes_Arithmoi_mhtrwou_a_m`, `Suggrammata_ISBN`, `Suggrammata_kwdikos_bibliou`),
  INDEX `fk_Foithtes_has_Suggrammata_Suggrammata2_idx` (`Suggrammata_ISBN` ASC, `Suggrammata_kwdikos_bibliou` ASC),
  INDEX `fk_Foithtes_has_Suggrammata_Foithtes2_idx` (`Foithtes_onoma_xrhsth` ASC, `Foithtes_Arithmoi_mhtrwou_a_m` ASC),
  CONSTRAINT `fk_Foithtes_has_Suggrammata_Foithtes2`
    FOREIGN KEY (`Foithtes_onoma_xrhsth` , `Foithtes_Arithmoi_mhtrwou_a_m`)
    REFERENCES `eam3`.`Foithtes` (`onoma_xrhsth` , `Arithmoi_mhtrwou_a_m`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Foithtes_has_Suggrammata_Suggrammata2`
    FOREIGN KEY (`Suggrammata_ISBN` , `Suggrammata_kwdikos_bibliou`)
    REFERENCES `eam3`.`Suggrammata` (`ISBN` , `kwdikos_bibliou`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB



