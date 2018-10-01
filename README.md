# php-crud-user

A repository in php to manage users.

## MySQL

```SQL
CREATE DATABASE IF NOT EXISTS DB_PHP_CRUD_SYSTEM DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
```

```SQL
CREATE TABLE IF NOT EXISTS TB_USERS (
    ID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Name varchar(40) NOT NULL,
    Email varchar(50) NOT NULL UNIQUE,
    Phone varchar(15) NOT NULL
) DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci
```

Materialize CSS 1.0.0
JQuery 3.3.1
