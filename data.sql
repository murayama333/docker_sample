create database mydb;
use mydb;
create table fruits(id int primary key, name varchar(100), price int);
insert into fruits(id, name, price) values(1, 'Apple', 100);
insert into fruits(id, name, price) values(2, 'Orange', 200);
insert into fruits(id, name, price) values(3, 'Peach', 300);