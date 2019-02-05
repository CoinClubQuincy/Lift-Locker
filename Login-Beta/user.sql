

CREATE TABLE `Repairs` (
  `Bay` text,
  `Model` text,
  `Serial` text,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `ShopLocation` (
  `LocationName` varchar(100) DEFAULT NULL,
  `LocationAddress` varchar(100) DEFAULT NULL,
  `PhoneNumb` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Approved_Repairs` (
  `Bay` text,
  `Model` text,
  `Serial` text,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `RegisterdLifts` (
  `Bay` varchar(100) DEFAULT '',
  `Brand` varchar(100) DEFAULT '',
  `Capacity` varchar(100) DEFAULT '',
  `LiftType` varchar(100) DEFAULT '',
  `Cerial` varchar(100) DEFAULT NULL,
  `Notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Repairs_in_progress` (
  `Bay` text,
  `Model` text,
  `Serial` text,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
