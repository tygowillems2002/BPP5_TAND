create database tandartss;
use tandartss;

create table register(
id int auto_increment ,
email varchar(255),
wachtwoord varchar(255),
naam varchar(255),
achternaam varchar(255),

straatnaam varchar(255),
huisnummer int,
postcode VARCHAR(20),
woonplaats varchar(255),
telefoonnummer varchar(225),
primary key(id)
);

drop table register;
select * from register;		


create table afspraak(
id int auto_increment ,
naam varchar(255),
achternaam varchar(255),
omschrijving varchar(255),
geboortedatum date,
afspraakDatum date,
primary key(id)

);
drop table afspraak;
select * from afspraak;
