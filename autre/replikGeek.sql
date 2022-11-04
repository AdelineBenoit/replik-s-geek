DROP DATABASE IF EXISTS replik_geek;
create database if not exists replik_geek;
use replik_geek;
--  create table categorie 
CREATE TABLE IF NOT EXISTS CATEGORIE(
   ID_CATEGORIE int not null auto_increment,
   PROMO VARCHAR(50),
   PRIMARY KEY(ID_CATEGORIE)
)
Engine = InnoDB;
INSERT INTO `CATEGORIE`(`PROMO`)VALUES
('noel'),
('paques'),
('halloween'),
('fete des meres'),
('fete des peres'),
('fete des grands-meres'),
('fete des grands-peres'),
('anniversaire'),
('saint valentin');
-- ('disney'),
-- ('pixar'),
-- ('marvel');
CREATE TABLE IF NOT EXISTS STATISTIC(
   ID_VISIT INT NOT NULL auto_increment,
   IP_VISIT VARCHAR(30) NOT NULL,
   DATE_VISIT DATE NOT NULL,
   PRIMARY KEY(ID_VISIT)
   )
   Engine = InnoDB;
-- create table customer
CREATE TABLE IF NOT EXISTS CUSTOMER(
   ID_CUSTOMER int not null auto_increment,
   NAME_CUSTOMER VARCHAR(50) not null,
   FIRST_NAME_CUSTOMER VARCHAR(50) not null,
   TEL_CUSTOMER VARCHAR(10) not null,
   MAIL_CUSTOMER VARCHAR(50) not null,
   ADRESS1_CUSTOMER varchar(100),
   ADRESS2_CUSTOMER varchar(100),
   POSTAL_CODE int(5) DEFAULT NULL,
   TOWN_CUSTOMER varchar(70),
   PRIMARY KEY(ID_CUSTOMER)
)
Engine = InnoDB;
INSERT INTO `CUSTOMER`(`NAME_CUSTOMER`,`FIRST_NAME_CUSTOMER`,`TEL_CUSTOMER`,`MAIL_CUSTOMER`,`ADRESS1_CUSTOMER`,`ADRESS2_CUSTOMER`,`POSTAL_CODE`,`TOWN_CUSTOMER`)VALUES
('demay','adeline','0600000000','adeline@orange.fr','','','59500','douai');
-- create table PRODUCT
CREATE TABLE IF NOT EXISTS PRODUCT(
   ID_PRODUCT int not null auto_increment,
   REF_PRODUCT INT(5) NOT NULL,
   NAME_PRODUCT VARCHAR(70) not null,
   DESCRIPTION_PRODUCT VARCHAR(300),
   PRIX_PRODUCT FLOAT(4),
   CAT_PRODUCT VARCHAR(50),
   IMAGE_PRODUCT VARCHAR(100),
   ID_CATEGORIE INT DEFAULT NULL,
   PRIMARY KEY(ID_PRODUCT)
  ) 
  Engine = InnoDB;
   INSERT INTO `PRODUCT` (`REF_PRODUCT`,`NAME_PRODUCT`,`DESCRIPTION_PRODUCT`,`CAT_PRODUCT`,`PRIX_PRODUCT`,`IMAGE_PRODUCT`) VALUES
   ('21500','peluche_combat','peluche, taille etc','naruto','20','image/jeux4.jpg'),
   ('25236','porte badge','taille etc','marvel','8','image/marvel/marvel1.jpeg'),
   ('23846','figurine petite sirene','taille etc','disney','5','image/disney/petiteSirene.gif'),
   ('23846','figurine petite sirene 2','taille etc','disney','5','image/disney/petiteSirene1.jpeg'),
   ('25236','porte badge','taille etc','pixar','8','image/pixar/pixar.jpeg'),
   ('11500','Harry Potter','cousin, taille','warner bros','9','image/harryPotter/jeux1.jpg'),
   ('11801','mars attaque','cadre, taille','warner bros','15','image/jeux2.jpg'),
   ('11572','Dragon BallZ','cadre, taille','manga','12','image/jeux3.jpg'),
   ('12503','le Hobbit','vinyle, deco, taille','warner bros','18','image/jeux5.jpg');

-- create table administrateur 
CREATE TABLE IF NOT EXISTS ADMINISTRATEUR(
   ID_ADMIN int not null auto_increment,
   NAME_ADMIN  varchar(50) not null,
   FIRST_NAME_ADMIN varchar(50) not null,
   MAIL_ADMIN varchar(50) not null,
   LOGIN_ADMIN VARCHAR(50) not null,
   PASSWORD_ADMIN VARCHAR(50),
   PRIMARY KEY(ID_ADMIN)
)
Engine = InnoDB;
INSERT INTO `ADMINISTRATEUR` (`FIRST_NAME_ADMIN`, `NAME_ADMIN`,`MAIL_ADMIN`,`LOGIN_ADMIN`,`PASSWORD_ADMIN`) VALUES
('Cindy', 'Haboury','','ElsaNohe','NoheElsa');
CREATE TABLE IF NOT EXISTS BOOK(
   ID_PRODUCT INT not NULL,
   ID_CUSTOMER INT not NULL,
   PRIMARY KEY(ID_PRODUCT, ID_CUSTOMER),
   FOREIGN KEY(ID_PRODUCT) REFERENCES PRODUCT(ID_PRODUCT),
   FOREIGN KEY(ID_CUSTOMER) REFERENCES CUSTOMER(ID_CUSTOMER)
)
Engine = InnoDB;
CREATE TABLE IF NOT EXISTS TYPE_ARTICLE(
   ID_TYPE_ARTICLE INT NOT NULL auto_increment,
   CODE_TYPE_ARTICLE VARCHAR(3) NOT NULL,
   LIB_TYPE_ARTICLE VARCHAR(15),
   PRIMARY KEY (ID_TYPE_ARTICLE)
)
Engine = InnoDB;
INSERT INTO `TYPE_ARTICLE`(`CODE_TYPE_ARTICLE`,`LIB_TYPE_ARTICLE`)VALUES 
('DIS','Disney'),
('MAR','Marvel'),
('PIX','Pixar'),
('HAP','Harry Potter'),
('AUT','Autre'),
('NAR','Naruto');
-- alter table PRODUCT add constraint FK_PRODUCT_CATEGORIE foreign key (ID_CATEGORIE)
--       references CATEGORIE (ID_CATEGORIE) on delete restrict on update restrict;


