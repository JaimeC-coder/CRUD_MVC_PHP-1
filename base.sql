drop database if exists base;

create database base;

use base;

CREATE TABLE productos (
    id int(11) NOT NULL,
    nombre varchar(50) NOT NULL,
    precio decimal(7, 2) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

ALTER TABLE
    productos
ADD
    PRIMARY KEY (id);

ALTER TABLE
    productos
MODIFY
    id int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;