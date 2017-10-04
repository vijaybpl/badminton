# badminton
php, mysql

Please. create table users

CREATE TABLE IF NOT EXISTS `registration` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `pass` varchar(50) NOT NULL,
 `num` varchar(15) NOT NULL,
 `gender` varchar(10) NOT NULL,
 PRIMARY KEY (`id`)
 );