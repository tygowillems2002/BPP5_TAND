create database tandartss;
use tandartss;

create table register(
id int auto_increment ,
email varchar(255),
wachtwoord varchar(255),
naam varchar(255),
achternaam varchar(255),
huisnummer int,
postcode VARCHAR(20),
telefoonnummer int,
primary key(id)
);

drop table register;
select * from register;	