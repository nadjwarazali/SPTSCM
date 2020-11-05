create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `kp` varchar(100) NOT NULL,
  `nosyarikat` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `plot` varchar(100) NOT NULL,
  `mukim` varchar(100) NOT NULL,
  `nofile` varchar(100) NOT NULL,
  `tarikh` varchar(100) NOT NULL,
  `resit` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `usersid` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;