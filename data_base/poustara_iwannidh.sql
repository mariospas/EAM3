CREATE TABLE IF NOT EXISTS `eam3`.`Idrumata` (
  `onoma_idrumatos` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`onoma_idrumatos`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Grammateia` (
  `id` VARCHAR(10) NOT NULL,
  `tmhma` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `Idrumata_onoma_idrumatos` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Grammateia_Idrumata1_idx` (`Idrumata_onoma_idrumatos` ASC),
  CONSTRAINT `fk_Grammateia_Idrumata1`
    FOREIGN KEY (`Idrumata_onoma_idrumatos`)
    REFERENCES `eam3`.`Idrumata` (`onoma_idrumatos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `eam3`.`Bibliopwleia` (
  `idBibliopwleia` INT NOT NULL,
  `dieuthunsh` VARCHAR(250) CHARACTER SET 'utf8' NOT NULL,
  `t_k` VARCHAR(6) NOT NULL,
  `e_mail` VARCHAR(255) NOT NULL,
  `thlefwno` VARCHAR(15) NULL,
  `fax` VARCHAR(15) NULL,
  `wres_meres_leitourgias` VARCHAR(200) CHARACTER SET 'utf8' NOT NULL,
  `ekdoseis` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `xarths` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`idBibliopwleia`),
  UNIQUE INDEX `idBibliopwleia_UNIQUE` (`idBibliopwleia` ASC),
  UNIQUE INDEX `e_mail_UNIQUE` (`e_mail` ASC))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Suggrammata` (
  `ISBN` VARCHAR(50) NOT NULL,
  `titlos` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `suggrafeas` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
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


CREATE TABLE IF NOT EXISTS `eam3`.`Mathhmata` (
  `kwdikos_mathhmatos` INT NOT NULL,
  `onoma_mathhmatos` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `eksamhno` INT NOT NULL,
  `Grammateia_id` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`kwdikos_mathhmatos`),
  INDEX `fk_Mathhmata_Grammateia1_idx` (`Grammateia_id` ASC),
  CONSTRAINT `fk_Mathhmata_Grammateia1`
    FOREIGN KEY (`Grammateia_id`)
    REFERENCES `eam3`.`Grammateia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Arithmoi_mhtrwou` (
  `a_m` VARCHAR(17) NOT NULL,
  `Grammateia_id` VARCHAR(10) NOT NULL,
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


CREATE TABLE IF NOT EXISTS `eam3`.`Bibliopwleia_has_Suggrammata` (
  `Bibliopwleia_idBibliopwleia` INT NOT NULL,
  `Suggrammata_ISBN` VARCHAR(50) NOT NULL,
  `Suggrammata_kwdikos_bibliou` VARCHAR(45) NOT NULL,
  `diathesimothta` INT NOT NULL,
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


CREATE TABLE IF NOT EXISTS `eam3`.`Grammateia_has_Suggrammata` (
  `Grammateia_id` VARCHAR(10) NOT NULL,
  `Suggrammata_ISBN` VARCHAR(50) NOT NULL,
  `Suggrammata_kwdikos_bibliou` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Grammateia_id`, `Suggrammata_ISBN`, `Suggrammata_kwdikos_bibliou`),
  INDEX `fk_Grammateia_has_Suggrammata_Suggrammata1_idx` (`Suggrammata_ISBN` ASC, `Suggrammata_kwdikos_bibliou` ASC),
  INDEX `fk_Grammateia_has_Suggrammata_Grammateia1_idx` (`Grammateia_id` ASC),
  CONSTRAINT `fk_Grammateia_has_Suggrammata_Grammateia1`
    FOREIGN KEY (`Grammateia_id`)
    REFERENCES `eam3`.`Grammateia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Grammateia_has_Suggrammata_Suggrammata1`
    FOREIGN KEY (`Suggrammata_ISBN` , `Suggrammata_kwdikos_bibliou`)
    REFERENCES `eam3`.`Suggrammata` (`ISBN` , `kwdikos_bibliou`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `eam3`.`Suggrammata_has_Mathhmata` (
  `Suggrammata_ISBN` VARCHAR(50) NOT NULL,
  `Suggrammata_kwdikos_bibliou` VARCHAR(45) NOT NULL,
  `Mathhmata_kwdikos_mathhmatos` INT NOT NULL,
  PRIMARY KEY (`Suggrammata_ISBN`, `Suggrammata_kwdikos_bibliou`, `Mathhmata_kwdikos_mathhmatos`),
  INDEX `fk_Suggrammata_has_Mathhmata_Mathhmata1_idx` (`Mathhmata_kwdikos_mathhmatos` ASC),
  INDEX `fk_Suggrammata_has_Mathhmata_Suggrammata1_idx` (`Suggrammata_ISBN` ASC, `Suggrammata_kwdikos_bibliou` ASC),
  CONSTRAINT `fk_Suggrammata_has_Mathhmata_Suggrammata1`
    FOREIGN KEY (`Suggrammata_ISBN` , `Suggrammata_kwdikos_bibliou`)
    REFERENCES `eam3`.`Suggrammata` (`ISBN` , `kwdikos_bibliou`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Suggrammata_has_Mathhmata_Mathhmata1`
    FOREIGN KEY (`Mathhmata_kwdikos_mathhmatos`)
    REFERENCES `eam3`.`Mathhmata` (`kwdikos_mathhmatos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Foithtes_has_Mathhmata` (
  `Foithtes_onoma_xrhsth` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `Foithtes_Arithmoi_mhtrwou_a_m` VARCHAR(17) NOT NULL,
  `Mathhmata_kwdikos_mathhmatos` INT NOT NULL,
  PRIMARY KEY (`Foithtes_onoma_xrhsth`, `Foithtes_Arithmoi_mhtrwou_a_m`, `Mathhmata_kwdikos_mathhmatos`),
  INDEX `fk_Foithtes_has_Mathhmata_Mathhmata1_idx` (`Mathhmata_kwdikos_mathhmatos` ASC),
  INDEX `fk_Foithtes_has_Mathhmata_Foithtes1_idx` (`Foithtes_onoma_xrhsth` ASC, `Foithtes_Arithmoi_mhtrwou_a_m` ASC),
  CONSTRAINT `fk_Foithtes_has_Mathhmata_Foithtes1`
    FOREIGN KEY (`Foithtes_onoma_xrhsth` , `Foithtes_Arithmoi_mhtrwou_a_m`)
    REFERENCES `eam3`.`Foithtes` (`onoma_xrhsth` , `Arithmoi_mhtrwou_a_m`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Foithtes_has_Mathhmata_Mathhmata1`
    FOREIGN KEY (`Mathhmata_kwdikos_mathhmatos`)
    REFERENCES `eam3`.`Mathhmata` (`kwdikos_mathhmatos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `eam3`.`Foithtes_has_Suggrammata` (
  `Suggrammata_ISBN` VARCHAR(50) NOT NULL,
  `Suggrammata_kwdikos_bibliou` VARCHAR(45) NOT NULL,
  `Foithtes_onoma_xrhsth` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `Foithtes_Arithmoi_mhtrwou_a_m` VARCHAR(17) NOT NULL,
  `eidos` INT NOT NULL,
  `hmeromhnia_paralabhs` DATE NULL,
  `hmeromhnia_paradoshs` DATE NULL,
  PRIMARY KEY (`Suggrammata_ISBN`, `Suggrammata_kwdikos_bibliou`, `Foithtes_onoma_xrhsth`, `Foithtes_Arithmoi_mhtrwou_a_m`),
  INDEX `fk_Suggrammata_has_Foithtes_Foithtes1_idx` (`Foithtes_onoma_xrhsth` ASC, `Foithtes_Arithmoi_mhtrwou_a_m` ASC),
  INDEX `fk_Suggrammata_has_Foithtes_Suggrammata1_idx` (`Suggrammata_ISBN` ASC, `Suggrammata_kwdikos_bibliou` ASC),
  CONSTRAINT `fk_Suggrammata_has_Foithtes_Suggrammata1`
    FOREIGN KEY (`Suggrammata_ISBN` , `Suggrammata_kwdikos_bibliou`)
    REFERENCES `eam3`.`Suggrammata` (`ISBN` , `kwdikos_bibliou`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Suggrammata_has_Foithtes_Foithtes1`
    FOREIGN KEY (`Foithtes_onoma_xrhsth` , `Foithtes_Arithmoi_mhtrwou_a_m`)
    REFERENCES `eam3`.`Foithtes` (`onoma_xrhsth` , `Arithmoi_mhtrwou_a_m`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;




