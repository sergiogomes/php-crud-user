
CREATE TABLE IF NOT EXISTS TB_USERS (
    ID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Name varchar(40) NOT NULL,
    Email varchar(50) NOT NULL UNIQUE,
    Phone varchar(15) NOT NULL
) DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci
