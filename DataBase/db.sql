CREATE DATABASE schedulepal;

USE schedulepal;

CREATE TABLE fakultas (
  id_fakultas int NOT NULL primary key,
  nama_fakultas varchar(50) NOT NULL
);

CREATE TABLE schedule (
  id_acara int NOT NULL primary key,
  judul_acara varchar(50) NOT NULL,
  deskripsi varchar(255) NOT NULL,
  waktu time NOT NULL,
  tanggal date NOT NULL,
  lokasi varchar(255) NOT NULL,
  status enum('true','false','pending')
);

CREATE TABLE users (
  NIM bigint NOT NULL,
  username varchar(20) NOT NULL,
  fakultas varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  role enum('user','admin') NOT NULL DEFAULT 'user'
);

drop table users;

select *from users;

INSERT INTO `users` VALUES (10,'admin','admin','$2y$10$9h3plJhS6R.nBD8d0AiCkuGW9AGaq0kmxT49.ZCC34p3R0oEYUm.y','admin');