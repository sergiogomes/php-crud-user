# Acolye

Acolye is a fake company to register and manage users using the MySQL Data Base.
Developed by Sergio Pow Gomes.

![Acolye Register](https://raw.githubusercontent.com/sergiogomes/php-crud-user/master/assets/images/acolye-register.png)

## MySQL

Creating the data base:

```SQL
CREATE DATABASE IF NOT EXISTS DB_PHP_CRUD_SYSTEM DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
```

Creating the users table:

```SQL
CREATE TABLE IF NOT EXISTS TB_USERS (
    ID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Name varchar(40) NOT NULL,
    Email varchar(50) NOT NULL UNIQUE,
    Phone varchar(15) NOT NULL
) DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci
```

### Libraries

Main libraries used:

* PHP 7.1.20
* MySQL 5.7.23
* Materialize CSS 1.0.0
* JQuery 3.3.1
