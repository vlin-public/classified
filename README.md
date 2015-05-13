# classified

Deployed at: http://classified-vl.net76.net/

SQL to initialize database:

CREATE DATABASE db;

CREATE TABLE `members` (
`id` int(4) NOT NULL auto_increment,
`username` varchar(65) NOT NULL default '',
`password` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;
INSERT INTO `members` VALUES (1, 'john', '1234');