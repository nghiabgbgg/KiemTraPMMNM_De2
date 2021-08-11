create database if not exists dktiemchung;

use dktiemchung;

create table user (
  id integer primary key not null,
  username varchar(60) not null,
  password varchar(60) not null,
  phone_number varchar(15) not null,
  full_name varchar(60) character set UTF8MB4 not null,
  injection_address varchar(120) character set UTF8MB4,
  priority varchar(120) character set UTF8MB4,
  appointment_datetime datetime
)