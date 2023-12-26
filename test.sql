CREATE TABLE aj_bids (
  ID varchar(20) NOT NULL DEFAULT '',         /*unique for each lot (2f1ajqHsjca0PFw)*/
  LOT int(6) NOT NULL DEFAULT '0',            /*lot number (123)*/
  AUCTION_TYPE int(2) NOT NULL DEFAULT '0',   /*with big images or not (1,2)*/
  AUCTION_DATE datetime NOT NULL DEFAULT '0000-00-00 00:00:00', /*auction date*/
  AUCTION varchar(32) DEFAULT NULL,           /*auction name*/
  MARKA_ID int(2) NOT NULL DEFAULT '0',       /*vendor id*/
  MODEL_ID int(4) NOT NULL DEFAULT '0',       /*model id*/
  MARKA_NAME varchar(13) NOT NULL DEFAULT '', /*vendor name*/
  MODEL_NAME varchar(29) NOT NULL DEFAULT '', /*model name*/
  `YEAR` int(4) NOT NULL DEFAULT '0',         /*year of car production*/
## `MONTH` varchar(10) NOT NULL DEFAULT '',   /*!!KOREA ONLY. month registration*/
  ENG_V int(11) DEFAULT NULL,                 /*engine displacement*/
  PW varchar(30) NOT NULL DEFAULT '',         /*engine power*/
  KUZOV varchar(128) NOT NULL DEFAULT '',     /*chassis*/
  GRADE varchar(150) NOT NULL DEFAULT '',     /*chassis modification*/
  `COLOR` varchar(100) NOT NULL,              /*color*/
  KPP varchar(20) NOT NULL DEFAULT '',        /*transmission (AT,MT,FA,FAT,F6,IAT,..)*/
  KPP_TYPE int(2) NOT NULL DEFAULT '0',       /*1,2 =AT or MT*/
  PRIV varchar(20) NOT NULL DEFAULT '',       /*4WD,FF,..*/
  MILEAGE int(6) NOT NULL DEFAULT '0',        /*mileage*/
## MIL_ST int(2) NOT NULL DEFAULT '0',        /*!!STATS ONLY (range 0-25,25-50,50-75,75-100,100-)*/
## `GROUP` varchar(128) NOT NULL DEFAULT '',  /*!!MACHINERY ONLY*/
## CATEGORY varchar(128) NOT NULL DEFAULT '', /*!!MACHINERY ONLY*/
## PRICE int(6) NOT NULL DEFAULT '0',         /*!!MACHINERY ONLY*/
  EQUIP varchar(120) NOT NULL DEFAULT '',     /*equipment*/
  RATE varchar(16) NOT NULL DEFAULT '',       /*condition of car (3.5,4,4.5)*/
  START int(8) NOT NULL DEFAULT '0',          /*start price*/
  FINISH int(8) NOT NULL DEFAULT '0',         /*finish price*/
  `STATUS` varchar(80) NOT NULL DEFAULT '',   /*status (sold/unsold)*/
  `TIME` varchar(16) NOT NULL DEFAULT '',     /*time*/
  AVG_PRICE int(6) DEFAULT '0',               /*average price by year,body,mileage,rate*/
  AVG_STRING varchar(50) NOT NULL DEFAULT '', /*price of last 10 solded cars*/
  IMAGES text NOT NULL,                       /*images with # divider. add &w=320 in end of URL*/
  INFO varchar(1500) NOT NULL DEFAULT '',     /*any text info. sometime JSON here*/
  SERIAL varchar(60) NOT NULL DEFAULT '',     /*chassis-number shown if selected by ID for LUM,ORIX,HONDA,.. auctions*/
  PRIMARY KEY (id)
);